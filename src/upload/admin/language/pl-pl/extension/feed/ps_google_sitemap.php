<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Mapa strony Google';
$_['heading_robotstxt']            = 'Robots.txt';
$_['heading_product']              = 'Produkty';
$_['heading_category']             = 'Kategorie';
$_['heading_manufacturer']         = 'Producenci';
$_['heading_information']          = 'Informacje';
$_['heading_getting_started']      = 'Pierwsze kroki';
$_['heading_setup']                = 'Konfiguracja Mapy strony Google';
$_['heading_troubleshot']          = 'Typowe problemy';
$_['heading_faq']                  = 'FAQ';
$_['heading_contact']              = 'Kontakt z obsługą';

// Text
$_['text_extension']               = 'Rozszerzenia';
$_['text_success']                 = 'Sukces: Zmodyfikowano plik Google Sitemap!';
$_['text_htaccess_update_success'] = 'Sukces: Plik .htaccess został pomyślnie zaktualizowany.';
$_['text_edit']                    = 'Edytuj Mapę strony Google';
$_['text_clear']                   = 'Wyczyść bazę danych';
$_['text_getting_started']         = '<p><strong>Przegląd:</strong> Mapa strony Google dla OpenCart 3.x pomaga zwiększyć widoczność Twojego sklepu poprzez generowanie zoptymalizowanych map witryn XML. Te mapy witryn pomagają wyszukiwarkom, takim jak Google, indeksować kluczowe strony Twojej witryny, co prowadzi do lepszych pozycji w wyszukiwarkach i zwiększonej obecności online.</p><p><strong>Wymagania:</strong> OpenCart 3.x+, PHP 7.3 lub nowszy oraz dostęp do <a href="https://search.google.com/search-console/about?hl=en" target="_blank" rel="external noopener noreferrer">Google Search Console</a> w celu przesłania mapy witryny.</p>';
$_['text_setup']                   = '<p><strong>Konfiguracja Mapy strony Google:</strong> Skonfiguruj swoją mapę witryny, aby zawierała strony produktów, kategorii, producentów i informacji zgodnie z potrzebami. Przełącz opcje, aby włączyć lub wyłączyć te typy stron w wyjściu mapy witryny, dostosowując zawartość mapy witryny do potrzeb i odbiorców Twojego sklepu.</p>';
$_['text_troubleshot']             = '<ul><li><strong>Rozszerzenie:</strong> Upewnij się, że rozszerzenie Google Sitemap jest włączone w ustawieniach OpenCart. Jeśli rozszerzenie jest wyłączone, wyjście mapy witryny nie zostanie wygenerowane.</li><li><strong>Produkt:</strong> Jeśli strony produktów nie znajdują się w Twojej mapie witryny, upewnij się, że są włączone w ustawieniach rozszerzenia i że odpowiednie produkty mają status ustawiony na „Włączony”.</li><li><strong>Kategoria:</strong> Jeśli strony kategorii się nie pojawiają, sprawdź, czy kategorie są włączone w ustawieniach rozszerzenia i czy ich status jest również ustawiony na „Włączony”.</li><li><strong>Producent:</strong> W przypadku stron producentów sprawdź, czy są włączone w ustawieniach rozszerzenia i czy producenci mają status ustawiony na „Włączony”.</li><li><strong>Informacje:</strong> Jeśli strony informacyjne nie są wyświetlane w mapie witryny, upewnij się, że są włączone w ustawieniach rozszerzenia i że ich status jest ustawiony na „Włączony”.</li></ul>';
$_['text_faq']                     = '<details><summary>Jak przesłać moją mapę witryny do Google Search Console?</summary>W Google Search Console przejdź do <em>Mapy witryn</em> w menu, wprowadź adres URL mapy witryny (zazwyczaj /sitemap.xml) i kliknij <em>Prześlij</em>. Spowoduje to powiadomienie Google o rozpoczęciu indeksowania Twojej witryny.</details><details><summary>Dlaczego mapa witryny jest ważna dla SEO?</summary>Mapa witryny kieruje wyszukiwarki do najważniejszych stron Twojej witryny, ułatwiając im dokładne indeksowanie Twojej treści, co może pozytywnie wpłynąć na pozycje w wyszukiwarkach.</details><details><summary>Czy obrazy są zawarte w mapie witryny?</summary>Tak, obrazy są zawarte w generowanej mapie witryny przez to rozszerzenie, co zapewnia, że wyszukiwarki mogą indeksować Twoje treści wizualne wraz z adresem URL.</details><details><summary>Dlaczego mapa witryny używa <em>lastmod</em> zamiast <em>priority</em> i <em>changefreq</em>?</summary>Google ignoruje teraz wartości <priority> i <changefreq>, skupiając się zamiast tego na <lastmod> w celu określenia świeżości treści. Używanie <lastmod> pomaga priorytetowo traktować ostatnie aktualizacje.</details>';
$_['text_contact']                 = '<p>W celu uzyskania dalszej pomocy prosimy o kontakt z naszym zespołem wsparcia:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentacja:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Dokumentacja użytkownika</a></li></ul>';
$_['text_user_agent_any']          = 'Dowolny User Agent';
$_['text_allowed']                 = 'Dozwolone: %s';
$_['text_disallowed']              = 'Niedozwolone: %s';

// Tab
$_['tab_general']                  = 'Ogólne';
$_['tab_help_and_support']         = 'Pomoc i wsparcie';
$_['tab_data_feed_url']            = 'Adres URL pliku danych';
$_['tab_data_feed_seo_url']        = 'Przyjazny dla SEO adres URL pliku danych';

// Entry
$_['entry_status']                 = 'Status';
$_['entry_product']                = 'Produkt';
$_['entry_product_images']         = 'Eksportuj zdjęcia produktów';
$_['entry_max_product_images']     = 'Maks. zdjęć produktów';
$_['entry_category']               = 'Kategoria';
$_['entry_category_images']        = 'Eksportuj zdjęcia kategorii';
$_['entry_manufacturer']           = 'Producent';
$_['entry_manufacturer_images']    = 'Eksportuj zdjęcie producenta';
$_['entry_information']            = 'Informacje';
$_['entry_data_feed_url']          = 'Adres URL pliku danych';
$_['entry_active_store']           = 'Aktywny sklep';
$_['entry_htaccess_mod']           = 'Modyfikacja pliku .htaccess';
$_['entry_validation_results']     = 'Wyniki walidacji';
$_['entry_user_agent']             = 'User-Agent';

// Button
$_['button_patch_htaccess']        = 'Załatuj .htaccess';
$_['button_validate_robotstxt']    = 'Sprawdź reguły Robots.txt';

// Help
$_['help_copy']                    = 'Kopiuj URL';
$_['help_open']                    = 'Otwórz URL';
$_['help_product_images']          = 'Eksportowanie zdjęć produktów może początkowo wydłużyć czas przetwarzania (tylko przy pierwszym przetwarzaniu zdjęć), a rozmiar pliku mapy witryny XML będzie w rezultacie większy.';
$_['help_htaccess_mod']            = 'Przyjazny dla SEO adres URL pliku danych wymaga modyfikacji pliku .htaccess. Możesz ręcznie dodać wymagany kod, kopiując i wklejając go do pliku .htaccess, lub po prostu kliknąć pomarańczowy przycisk „Załatuj .htaccess”, aby automatycznie zastosować zmiany.';

// Error
$_['error_permission']             = 'Ostrzeżenie: Nie masz uprawnień do modyfikowania pliku Google Sitemap!';
$_['error_htaccess_update']        = 'Ostrzeżenie: Wystąpił błąd podczas aktualizacji pliku .htaccess. Sprawdź uprawnienia do pliku i spróbuj ponownie.';
$_['error_store_id']               = 'Ostrzeżenie: Formularz nie zawiera store_id!';
$_['error_max_product_images_min'] = 'Wartość maks. zdjęć produktów nie może być mniejsza od zera.';
