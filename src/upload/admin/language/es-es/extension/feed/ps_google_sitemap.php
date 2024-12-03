<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Sitemap';
$_['heading_product']              = 'Productos';
$_['heading_category']             = 'Categorías';
$_['heading_manufacturer']         = 'Fabricantes';
$_['heading_information']          = 'Informaciónes';
$_['heading_getting_started']      = 'Introducción';
$_['heading_setup']                = 'Configuración del Google Sitemap';
$_['heading_troubleshot']          = 'Solución de problemas comunes';
$_['heading_faq']                  = 'Preguntas frecuentes';
$_['heading_contact']              = 'Contacto de soporte';

// Text
$_['text_extension']               = 'Extensiones';
$_['text_success']                 = 'Éxito: ¡Ha modificado el feed de Google Sitemap!';
$_['text_edit']                    = 'Editar Google Sitemap';
$_['text_clear']                   = 'Limpiar base de datos';
$_['text_getting_started']         = '<p><strong>Resumen:</strong> El Google Sitemap para OpenCart 3.x ayuda a aumentar la visibilidad de tu tienda generando mapas de sitio XML optimizados. Estos mapas ayudan a los motores de búsqueda como Google a indexar las páginas clave de tu sitio, lo que mejora el posicionamiento en los motores de búsqueda y aumenta la presencia online.</p><p><strong>Requisitos:</strong> OpenCart 3.x+, PHP 7.3 o superior, y acceso a tu <a href="https://search.google.com/search-console/about?hl=en" target="_blank" rel="external noopener noreferrer">Google Search Console</a> para la presentación del mapa de sitio.</p>';
$_['text_setup']                   = '<p><strong>Configuración del Google Sitemap:</strong> Configura tu mapa de sitio para incluir las páginas de Producto, Categoría, Fabricante e Información según sea necesario. Activa o desactiva las opciones para habilitar o deshabilitar estos tipos de página en la salida del mapa de sitio, personalizando el contenido del mapa para las necesidades de tu tienda y su audiencia.</p>';
$_['text_troubleshot']             = '<ul><li><strong>Extensión:</strong> Asegúrate de que la extensión Google Sitemap esté habilitada en la configuración de OpenCart. Si la extensión está desactivada, no se generará la salida del mapa de sitio.</li><li><strong>Producto:</strong> Si las páginas de Producto no aparecen en tu mapa de sitio, asegúrate de que estén habilitadas en la configuración de la extensión y que los productos relevantes tengan su estado establecido como "Habilitado".</li><li><strong>Categoría:</strong> Si las páginas de Categoría no aparecen, verifica que las categorías estén habilitadas en la configuración de la extensión y que su estado también esté configurado como "Habilitado".</li><li><strong>Fabricante:</strong> Para las páginas de Fabricante, asegúrate de que estén habilitadas en la configuración de la extensión y que los fabricantes tengan su estado configurado como "Habilitado".</li><li><strong>Información:</strong> Si las páginas de Información no se muestran en el mapa de sitio, asegúrate de que estén habilitadas en la configuración de la extensión y que su estado esté configurado como "Habilitado".</li></ul>';
$_['text_faq']                     = '<details><summary>¿Cómo envío mi mapa de sitio a Google Search Console?</summary>En Google Search Console, ve a <em>Mapas de sitio</em> en el menú, introduce la URL del mapa de sitio (generalmente /sitemap.xml) y haz clic en <em>Enviar</em>. Esto notificará a Google que empiece a rastrear tu sitio.</details><details><summary>¿Por qué es importante un mapa de sitio para SEO?</summary>Un mapa de sitio guía a los motores de búsqueda a las páginas más importantes de tu sitio, facilitando la indexación precisa de tu contenido, lo cual puede impactar positivamente en el ranking de búsqueda.</details><details><summary>¿Las imágenes están incluidas en el mapa de sitio?</summary>Sí, las imágenes están incluidas en el mapa de sitio generado por esta extensión, asegurando que los motores de búsqueda puedan indexar tu contenido visual junto con la URL.</details><details><summary>¿Por qué el mapa de sitio utiliza <em>lastmod</em> en lugar de <em>priority</em> y <em>changefreq</em>?</summary>Google ahora ignora los valores <priority> y <changefreq>, enfocándose en <lastmod> para la frescura del contenido. Usar <lastmod> ayuda a priorizar las actualizaciones recientes.</details>';
$_['text_contact']                 = '<p>Para más asistencia, póngase en contacto con nuestro equipo de soporte:</p><ul><li><strong>Contacto:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentación:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentación para el usuario</a></li></ul>';

// Tab
$_['tab_general']                  = 'General';
$_['tab_help_and_support']         = 'Ayuda y soporte';

// Entry
$_['entry_status']                 = 'Estado';
$_['entry_product']                = 'Producto';
$_['entry_product_images']         = 'Exportar imágenes de productos';
$_['entry_max_product_images']     = 'Máx. imágenes de producto';
$_['entry_category']               = 'Categoría';
$_['entry_category_images']        = 'Exportar imágenes de categorías';
$_['entry_manufacturer']           = 'Fabricante';
$_['entry_manufacturer_images']    = 'Exportar imágenes de fabricantes';
$_['entry_information']            = 'Información';
$_['entry_data_feed_url']          = 'URL del feed de datos';
$_['entry_active_store']           = 'Tienda activa';

// Button
$_['button_patch_htaccess']        = 'Aplicar modificación a .htaccess';

// Help
$_['help_product_images']          = 'La exportación de imágenes de productos puede aumentar el tiempo de procesamiento inicialmente (solo cuando las imágenes se procesan por primera vez), y el tamaño del archivo XML sitemap será mayor como resultado.';

// Error
$_['error_permission']             = 'Advertencia: ¡No tiene permiso para modificar el feed de Google Sitemap!';
$_['error_store_id']               = 'Advertencia: ¡El formulario no contiene store_id!';
$_['error_max_product_images_min'] = 'El valor de las imágenes máximas de productos no puede ser menor que cero.';
