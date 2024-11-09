<?php
// Heading
$_['heading_title']           = 'Playful Sparkle - Google Sitemap';
$_['heading_categories']      = 'Kategorie';
$_['heading_getting_started'] = 'Začínáme';
$_['heading_setup']           = 'Nastavení Google Sitemap';
$_['heading_troubleshot']     = 'Běžné problémy';
$_['heading_faq']             = 'Často kladené dotazy';
$_['heading_contact']         = 'Kontaktujte podporu';

// Text
$_['text_extension']          = 'Rozšíření';
$_['text_success']            = 'Úspěch: Upravili jste Google Sitemap feed!';
$_['text_edit']               = 'Upravit Google Sitemap';
$_['text_clear']              = 'Vymazat databázi';
$_['text_getting_started']    = '<p><strong>Přehled:</strong> Rozšíření Google Sitemap pro OpenCart 3.x pomáhá zvýšit viditelnost vašeho obchodu generováním optimalizovaných XML sitemap. Tyto sitemap pomáhají vyhledávačům, jako je Google, indexovat klíčové stránky vašeho webu, což vede k lepšímu umístění ve vyhledávačích a zvýšené online přítomnosti.</p><p><strong>Požadavky:</strong> OpenCart 3.x+, PHP 7.3 nebo vyšší a přístup do <a href="https://search.google.com/search-console/about?hl=cs" target="_blank" rel="external noopener noreferrer">Google Search Console</a> pro odeslání sitemap.</p>';
$_['text_setup']              = '<p><strong>Nastavení Google Sitemap:</strong> Nakonfigurujte svou sitemap tak, aby obsahovala stránky Produktů, Kategorie, Výrobce a Informací podle potřeby. Přepněte možnosti pro povolení nebo zakázání těchto typů stránek ve výstupu sitemap a přizpůsobte obsah sitemap potřebám a publiku vašeho obchodu.</p>';
$_['text_troubleshot']        = '<ul><li><strong>Rozšíření:</strong> Ujistěte se, že je rozšíření Google Sitemap povoleno v nastaveních OpenCart. Pokud je rozšíření zakázáno, výstup sitemap nebude generován.</li><li><strong>Produkt:</strong> Pokud chybí stránky Produktů ve vaší sitemap, ujistěte se, že jsou povoleny v nastaveních rozšíření a že příslušné produkty mají stav nastaven na „Povoleno“.</li><li><strong>Kategorie:</strong> Pokud se stránky Kategorií nezobrazují, zkontrolujte, zda jsou kategorie povoleny v nastaveních rozšíření a že jejich stav je také nastaven na „Povoleno“.</li><li><strong>Výrobce:</strong> Pro stránky Výrobců ověřte, zda jsou povoleny v nastaveních rozšíření a že výrobci mají stav nastaven na „Povoleno“.</li><li><strong>Informace:</strong> Pokud se stránky Informací nezobrazují v sitemap, ujistěte se, že jsou povoleny v nastaveních rozšíření a že jejich stav je nastaven na „Povoleno“.</li></ul>';
$_['text_faq']                = '<details><summary>Jak odeslat svou sitemap do Google Search Console?</summary>V Google Search Console přejděte do <em>Sitemaps</em> v menu, zadejte URL sitemap (typicky /sitemap.xml) a klikněte na <em>Odeslat</em>. Tímto upozorníte Google, aby začal procházet váš web.</details><details><summary>Proč je sitemap důležitá pro SEO?</summary>Sitemap usměrňuje vyhledávače k nejdůležitějším stránkám vašeho webu, což usnadňuje jejich přesné indexování obsahu a může pozitivně ovlivnit umístění ve vyhledávačích.</details><details><summary>Jsou obrázky zahrnuty do sitemap?</summary>Ano, obrázky jsou zahrnuty do generované sitemap tímto rozšířením, což zajišťuje, že vyhledávače mohou indexovat váš vizuální obsah spolu s URL.</details><details><summary>Proč sitemap používá <em>lastmod</em> místo <em>priority</em> a <em>changefreq</em>?</summary>Google nyní ignoruje hodnoty <priority> a <changefreq>, přičemž se zaměřuje na <lastmod> pro čerstvost obsahu. Používání <lastmod> pomáhá prioritizovat nedávné aktualizace.</details>';
$_['text_contact']            = '<p>Pro další pomoc se prosím obraťte na náš tým podpory:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentace:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Dokumentace pro uživatele</a></li></ul>';

// Tab
$_['tab_general']             = 'Obecné';
$_['tab_help_and_support']    = 'Pomoc a podpora';

// Entry
$_['entry_status']            = 'Stav';
$_['entry_product']           = 'Produkt';
$_['entry_category']          = 'Kategorie';
$_['entry_manufacturer']      = 'Výrobce';
$_['entry_information']       = 'Informace';
$_['entry_data_feed_url']     = 'URL datového kanálu';
$_['entry_active_store']      = 'Aktivní obchod';

// Error
$_['error_permission']        = 'Upozornění: Nemáte oprávnění upravovat Google Sitemap feed!';
$_['error_store_id']          = 'Upozornění: Formulář neobsahuje identifikátor obchodu!';
