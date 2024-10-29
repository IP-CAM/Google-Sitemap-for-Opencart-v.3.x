<?php
class ControllerExtensionFeedPSGoogleSitemap extends Controller
{
    /**
     * Instance of XMLWriter
     *
     * This property holds the XMLWriter instance used for creating the sitemap XML structure.
     *
     * @var \XMLWriter
     */
    private $xml;

    /**
     * Generates and outputs the Google Sitemap XML.
     *
     * This method checks if the sitemap feature is enabled in the configuration.
     * If it is, it initializes the XMLWriter, sets the XML header, and populates
     * the sitemap with URLs for products, categories, manufacturers, and
     * information pages based on the active languages.
     *
     * @return void
     */
    public function index()
    {
        if (!$this->config->get('feed_ps_google_sitemap_status')) {
            return;
        }

        $this->load->model('localisation/language');

        $languages = $this->model_localisation_language->getLanguages();
        $firstLanguage = current($languages);
        $defaultLanguage = $firstLanguage['code'];

        if (isset($this->request->get['language'])) {
            $language = $this->request->get['language'];

            if (false === in_array($language, array_column($languages, 'code'))) {
                $language = $defaultLanguage;
            }
        } else {
            $language = $defaultLanguage;
        }


        $this->xml = new \XMLWriter();
        $this->xml->openMemory();
        $this->xml->startDocument('1.0', 'UTF-8');

        $this->xml->startElement('urlset');
        $this->xml->writeAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $this->xml->writeAttribute('xmlns:image', 'http://www.google.com/schemas/sitemap-image/1.1');

        #region Product
        if ($this->config->get('feed_ps_google_sitemap_product')) {
            $this->load->model('catalog/product');
            $this->load->model('tool/image');

            // Fetch products in chunks to handle large datasets
            $products = $this->model_catalog_product->getProducts();

            foreach ($products as $product) {
                if (0 === (int) $product['status']) {
                    continue;
                }

                $this->xml->startElement('url');
                $this->xml->writeElement('loc', $this->url->link('product/product', 'language=' . $language . '&product_id=' . $product['product_id']));
                $this->xml->writeElement('lastmod', date('Y-m-d\TH:i:sP', strtotime($product['date_modified'])));

                if (!empty($product['image'])) {
                    $this->xml->startElement('image:image');
                    $this->xml->writeElement('image:loc', $this->model_tool_image->resize(
                        html_entity_decode($product['image'], ENT_QUOTES, 'UTF-8'),
                        $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'),
                        $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')
                    ));
                    $this->xml->endElement();
                }

                $this->xml->endElement();
            }
        }
        #endregion


        #region Category
        if ($this->config->get('feed_ps_google_sitemap_category')) {
            $this->load->model('catalog/category');

            $this->getCategories($language, 0);
        }
        #endregion

        #region Manufacturer
        if ($this->config->get('feed_ps_google_sitemap_manufacturer')) {
            $this->load->model('catalog/manufacturer');

            $manufacturers = $this->model_catalog_manufacturer->getManufacturers();

            foreach ($manufacturers as $manufacturer) {
                $this->xml->startElement('url');
                $this->xml->writeElement('loc', $this->url->link('product/manufacturer', 'language=' . $language . '&manufacturer_id=' . $manufacturer['manufacturer_id']));
                $this->xml->endElement();
            }
        }
        #endregion

        #region Information
        if ($this->config->get('feed_ps_google_sitemap_information')) {
            $this->load->model('catalog/information');

            $informations = $this->model_catalog_information->getInformations();

            foreach ($informations as $information) {
                if (0 === (int) $information['status']) {
                    continue;
                }

                $this->xml->startElement('url');
                $this->xml->writeElement('loc', $this->url->link('information/information', 'language=' . $language . '&information_id=' . $information['information_id']));
                $this->xml->endElement();
            }
        }
        #endregion

        $this->xml->endElement();
        $this->xml->endDocument();

        $this->response->addHeader('Content-Type: application/xml');
        $this->response->setOutput($this->xml->outputMemory());

        unset($this->xml);
    }

    /**
     * Recursively retrieves and adds categories to the sitemap.
     *
     * This method takes a language code and a parent category ID to fetch categories
     * from the database. It creates the necessary XML elements for each category,
     * including its last modification date. The method calls itself recursively
     * to fetch subcategories.
     *
     * @param string $language The language code for the URLs.
     * @param int $parent_id The ID of the parent category (default is 0 for top-level categories).
     *
     * @return void
     */
    protected function getCategories($language, $parent_id)
    {
        $categories = $this->model_catalog_category->getCategories($parent_id);

        foreach ($categories as $category) {
            if (0 === (int) $category['status']) {
                continue;
            }

            $this->xml->startElement('url');
            $this->xml->writeElement('loc', $this->url->link('product/category', 'language=' . $language . '&path=' . $category['category_id']));
            $this->xml->writeElement('lastmod', date('Y-m-d\TH:i:sP', strtotime($category['date_modified'])));
            $this->xml->endElement();

            $this->getCategories($language, $category['category_id']);
        }
    }
}
