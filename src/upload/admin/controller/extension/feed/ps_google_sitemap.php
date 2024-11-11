<?php
class ControllerExtensionFeedPSGoogleSitemap extends Controller
{
    /**
     * @var string The support email address.
     */
    const EXTENSION_EMAIL = 'support@playfulsparkle.com';

    /**
     * @var string The documentation URL for the extension.
     */
    const EXTENSION_DOC = 'https://github.com/playfulsparkle/oc3_google_sitemap.git';

    private $error = array();

    /**
     * Displays the Google Sitemap settings page.
     *
     * This method loads the necessary language file, sets the title of the page,
     * and prepares the data for the view. It also generates the breadcrumbs for
     * navigation and retrieves configuration settings for the sitemap.
     *
     * @return void
     */
    public function index()
    {
        $this->load->language('extension/feed/ps_google_sitemap');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('feed_ps_google_sitemap', $this->request->post, $this->request->get['store_id']);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=feed', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }


        if (isset($this->request->get['store_id'])) {
            $store_id = (int) $this->request->get['store_id'];
        } else {
            $store_id = 0;
        }


        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=feed', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/feed/ps_google_sitemap', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store_id, true)
        );

        $data['action'] = $this->url->link('extension/feed/ps_google_sitemap', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store_id, true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=feed', true);

        if (isset($this->request->post['feed_ps_google_sitemap_status'])) {
            $data['feed_ps_google_sitemap_status'] = $this->request->post['feed_ps_google_sitemap_status'];
        } else {
            $data['feed_ps_google_sitemap_status'] = $this->model_setting_setting->getSettingValue('feed_ps_google_sitemap_status', $store_id);
        }

        if (isset($this->request->post['feed_ps_google_sitemap_product'])) {
            $data['feed_ps_google_sitemap_product'] = $this->request->post['feed_ps_google_sitemap_product'];
        } else {
            $data['feed_ps_google_sitemap_product'] = $this->model_setting_setting->getSettingValue('feed_ps_google_sitemap_product', $store_id);
        }

        if (isset($this->request->post['feed_ps_google_sitemap_category'])) {
            $data['feed_ps_google_sitemap_category'] = $this->request->post['feed_ps_google_sitemap_category'];
        } else {
            $data['feed_ps_google_sitemap_category'] = $this->model_setting_setting->getSettingValue('feed_ps_google_sitemap_category', $store_id);
        }

        if (isset($this->request->post['feed_ps_google_sitemap_manufacturer'])) {
            $data['feed_ps_google_sitemap_manufacturer'] = $this->request->post['feed_ps_google_sitemap_manufacturer'];
        } else {
            $data['feed_ps_google_sitemap_manufacturer'] = $this->model_setting_setting->getSettingValue('feed_ps_google_sitemap_manufacturer', $store_id);
        }

        if (isset($this->request->post['feed_ps_google_sitemap_information'])) {
            $data['feed_ps_google_sitemap_information'] = $this->request->post['feed_ps_google_sitemap_information'];
        } else {
            $data['feed_ps_google_sitemap_information'] = $this->model_setting_setting->getSettingValue('feed_ps_google_sitemap_information', $store_id);
        }

        $this->load->model('localisation/language');

        $languages = $this->model_localisation_language->getLanguages();

        $data['languages'] = $languages;

        $data['store_id'] = $store_id;

        $data['stores'] = array();

        $data['stores'][] = array(
            'store_id' => 0,
            'name' => $this->config->get('config_name') . '&nbsp;' . $this->language->get('text_default'),
            'href' => $this->url->link('extension/feed/ps_google_sitemap', 'user_token=' . $this->session->data['user_token'] . '&store_id=0'),
        );

        $this->load->model('setting/store');

        $stores = $this->model_setting_store->getStores();

        $store_url = HTTP_CATALOG;

        foreach ($stores as $store) {
            $data['stores'][] = array(
                'store_id' => $store['store_id'],
                'name' => $store['name'],
                'href' => $this->url->link('extension/feed/ps_google_sitemap', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store['store_id']),
            );

            if ((int) $store['store_id'] === $store_id) {
                $store_url = $store['url'];
            }
        }

        $data['data_feed_urls'] = array();

        foreach ($languages as $language) {
            $data['data_feed_urls'][$language['language_id']] = rtrim($store_url, '/') . '/index.php?route=extension/feed/ps_google_sitemap&language=' . $language['code'];
        }

        $data['text_contact'] = sprintf($this->language->get('text_contact'), self::EXTENSION_EMAIL, self::EXTENSION_EMAIL, self::EXTENSION_DOC);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/feed/ps_google_sitemap', $data));
    }

    protected function validate()
    {
        if (!$this->user->hasPermission('modify', 'extension/feed/ps_google_sitemap')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!$this->error && !isset($this->request->post['store_id'])) {
            $this->error['warning'] = $this->language->get('error_store_id');
        }

        return !$this->error;
    }
}
