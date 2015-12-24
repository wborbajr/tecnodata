<?php
//Polski (Polish)

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2rd line.

// English translation of Pivot lang file
// Created by Dustgun (dustgun@sardonica.net)
// Last updated by Pivot Dev. (www.pivotlog.net) 25.04.2005

// allow for different encoding for non-western languages
$encoding="iso-8859-2";
$langname="pl";


//		General		\\
$lang['general'] = array (
	'yes' => 'Tak',	//affirmative
	'no' => 'Nie',		//negative
	'go' => 'Dalej!',	//proceed

	'minlevel' => 'Nie masz dostêpu do tej czêsci Pivota',
	'email' => 'Email',
	'url' => 'URL',
	'further_options' => "Wiêcej opcji",
	'basic_view' => "Widok prosty",
	'basic_view_desc' => "Zobacz tylko najczê¶ciej u¿ywane pola",
	'extended_view' => "Widok rozszerzony",
	'extended_view_desc' => "Zobacz wszystkie edytowalne pola",
	'select' => "Wybierz",
	'cancel' => "Anuluj",
	'delete' => 'Usuñ',
	'welcome' => "Witaj w %build%.",
	'write' => "Zapisz",
	'write_open_error' => "B³±d zapisu. Nie mo¿na otworzyæ pliku do zapisu",
	'write_write_error' => "B³±d zapisu. Nie mo¿na zapisaæ pliku",
	'done' => "Gotowe!",
	'shortcuts' => "Skróty",
	'cantdelete' => "Nie mo¿esz usun±æ wpisu %title%!",
	'cantdothat' => "Nie mo¿esz zrobiæ tego z wpisem %title%!",
	'cantdeletelast' => "Nie mo¿esz usun±æ ostatniego wpisu. Musisz najpierw dodaæ nowy wpis, a dopiero potem usun±æ ten wpis",
);


$lang['userlevels'] = array (
		'Superadmin', 'Administrator', 'Zaawansowany', 'Normalny', 'Moblogger'
		//  this one might be a bit hard to translate, but basically it's an order of
		//  power or trust.  Superadmin would be the person in charge - no one can do
		//  anything about his decisions. Admin is only regulated by the Superadmin,
		//  Advanced by the Admin and Superadmin, etc..
		//  Just get the idea of it.
);


$lang['numbers'] = array (
	'zero', 'jeden', 'dwa', 'trzy', 'cztery', 'piêæ', 'sze¶æ', 'siedem', 'osiem', 'dziewiêæ', 'dziesiêæ', 'jedena¶cie', 'dwana¶cie', 'trzyna¶cie', 'czterna¶cie', 'piêtna¶cie', 'szesna¶cie'
);


$lang['months'] = array (
	'styczeñ', 'luty', 'marzec', 'kwiecieñ', 'maj', 'czerwiec', 'lipiec', 'sierpieñ', 'wrzesieñ', 'pa¼dziernik', 'listopad', 'grudzieñ'
);


$lang['months_abbr'] = array (
	'sty', 'lut', 'mar', 'kwi', 'maj', 'czer', 'lip', 'sier', 'wrz', 'paz', 'lis', 'gru'
);


$lang['days'] = array (
	'niedziela', 'poniedzia³ek', 'wtorek', '¶roda', 'czwartek', 'pi±tek', 'sobota'
);


$lang['days_abbr'] = array (
	'nie', 'pon', 'wt', 'sr', 'czw', 'pia', 'sob'
);


$lang['days_calendar'] = array (
	'N', 'P', 'W', 'S', 'C', 'P', 'S'
);


$lang['datetime_words'] = array (
	'Rok', 'Miesi±c', 'Tydzieñ', 'Dzieñ', 'Godzina', 'Minuta', 'Sekunda'	//the actual words for them.
);


//		Login Page		\\
$lang['login'] = array (
	'title' => 'Login',
	'name' => 'Nazwa u¿ytkownika',
	'pass' => 'Has³o',
	'remember' => 'Zapamiêtaj',
	'rchoice' => array (
		'0' => 'Nic',
		'1' => 'Nazwê u¿ytkownika i has³o',
		'2' => '¯e chcê pozostaæ zalogowany'
	),
	'delete_cookies_desc' => 'Je¶li jeste¶ pewien, ¿e u¿ywasz prawid³owej nazwy u¿ytkownika i has³a, ale<br />masz problemy z zalogowaniem siê, mo¿esz spróbowaæ usun±æ cookies z tej domeny:',
	'delete_cookies' => 'Usuñ cookies',
	'retry' => 'Nieprawid³owa nazwa u¿ytkownika lub has³o',
	'banned' => 'Nie uda³o Ci siê uzyskaæ dostêpu w 10 próbach. W wyniku tego Twój adres IP zosta³ zablogowany na 12 godzin.',

);


//		Main Bar		\\
	$lang['userbar'] = array (
	'main' => 'Przegl±d',
	'entries' => 'Wpisy',
	'submit' => 'Nowy wpis',
	'comments' => 'Komentarze',
	'trackbacks' => '¦lady (trackbacks)',
	'modify' => 'Modyfikuj wpisy',
	'userinfo' => 'Moje informacje',
	'u_settings' => 'Moje ustawienia',
	'u_marklet' => 'Zak³adki',
	'files' => 'Zarz±dzaj mediami',
	'upload' => 'Upload',
	'stats' => 'Statystyki',
	'admin' => 'Administracja',

	'main_title' => 'Ogólny przegl±d Pivota',
	'entries_title' => 'Przegl±d wpisów',
	'submit_title' => 'Napisz i opublikuj nowy wpis',
	'comments_title' => 'Edytuj lub usuñ komentarze',
	'trackbacks_title' => 'Edytuj lub usuñ ¶lady (trackbacks)',
	'modify_title' => 'Modyfikuj wpis',
	'userinfo_title' => 'Zobacz moje informacje osobiste',
	'u_settings_title' => 'Edytuj moje ustawienia osobiste',
	'u_marklet_title' => 'Utwórz zak³adki',
	'files_title' => 'Zarz±dzaj i wysy³aj media',
	'upload_title' => 'Wy¶lij pliki',
	'uploaded_success' => 'Plik zosta³ wys³any',
	'stats_title' => 'Zobacz logi i statystyki.',
	'updatetitles_title' => 'Zobacz logi i statystyki.',
	'admin_title' => 'Przegl±d administracji',
	'recent_entries' => 'Ostatnie wpisy',
	'recent_comments' => 'Ostatnie komentarze',
);


$lang['adminbar'] = array (
	//		Admin Bar		\\
	//'trebuild' => 'Rebuild all Files', rolled into maintenance
	'seeusers' => 'U¿ytkownicy',
	'seeconfig' => 'Konfiguracja',
	'filemappings' => 'Mapowanie plików',
	'templates' => 'Szablony',
	'maintenance' => 'Utrzymanie',
	'regen' => 'Przebuduj wszystkie pliki',
	'blogs' => 'Weblogi',
	'categories' => 'Kategorie',
	'verifydb' => 'Zweryfikuj bazê danych',
	'buildindex' => 'Przebuduj indeks',
	'buildsearchindex' => 'Przebuduj indeks wyszukiwania',
	'buildfrontpage' => 'Przebuduj stronê(y) g³own±(e)',
	'sendping' => 'Wy¶lij pingi',


	'backup' => 'Kopia',
	'description' => 'Opis',
	'conversion' => 'Konwersja',
	'seeusers_title' => 'Tworzenie, edycja i usuwanie u¿ytkowników',
	'userfields' => 'Pola informacji o u¿ytkowniku',
	'userfields_title' => 'Tworzenie, edycja i usuwanie pól informacji o u¿ytkowniku',
	'seeconfig_title' => 'Edycja pliku konfiguracyjnego',
	'filemappings_title' => 'Przegl±d plików, które s± tworzone dla Twojej strony i dla poszczególnych Weblogów',
	'templates_title' => 'Tworzenie, edycja i usuwanie szablonów',
	'maintenance_title' => 'Wykonanie rutynowej obs³ugi plików Pivota',
	'regen_title' => 'Przebudowanie plików i archiwów, które generuje Pivot',
	'blogs_title' => 'Tworzenie, edycja i usuwanie Weblogów',
	'blogs_edit_title' => 'Edytuj ustawienia Webloga dla ',
	'categories_title' => 'Tworzenie, edycja i usuwanie kategorii',
	'verifydb_title' => 'Sprawdzanie integralno¶ci bazy danych',
	'buildindex_title' => 'Przebudowanie indeksu bazy danych',
	'buildsearchindex_title' => 'Przebudowanie indeks wyszukiwania w celu umo¿liwienia wyszukiwania we wpisach',
	'buildfrontpage_title' => 'Przebudowanie strony g³ownej, archiwum ostatnich wpisów i plików RSS dla ka¿dego webloga.',
	'backup_title' => 'Tworzenie kopii Twoich wpisów',
	'backup_config' => 'Kopia plików konfiguracyjnych',
	'backup_config_desc' => 'Ta opcja pozwala na ¶ci±gniêcie pliku zip zawieraj±cego Twoje pliki konfiguracyjne',
	'ipblocks' => 'Blokady IP',
	'ipblocks_title' => 'Przegl±danie i edycja zablokowanych adresów IP.',
	'ipblocks_stored' => 'Adresy IP zosta³y zachowane.',
	'ipblocks_store' => 'Zachowaj te adresy IP',
	'ignoreddomains' => 'Ignorowane domeny',
	'ignoreddomains_title' => 'Przegl±danie i edycja igonorowanych domen.',
	'ignoreddomains_stored' => 'Ignorowane domeny zosta³y zapisane.',
	'ignoreddomains_store' => 'Zachowaj ignorowane domeny',
	'fileexplore' => 'Eksplorator plików',
	'fileexplore_title' => 'Przegl±danie plików (tekstowych i z danymi)',
	'sendping_title' => 'Send Pings to Update Trackers.',
	'buildindex_start' => 'Budowanie indeksu. Mo¿e to potrwaæ chwilê, wiêc proszê nie przerywaæ.',
	'buildsearchindex_start' => 'Budowanie indeksu wyszukiwania. Mo¿e to potrwaæ chwilê, wiêc proszê nie przerywaæ.',
	'buildindex_finished' => 'Gotowe! Tworzenie indeksy zajê³o %num% sekund',

	'filemappings_desc' => 'Poni¿ej znajduje siê przegl±d ka¿dego z weblogów utworzonych w tej instalacji Pivota, w³±cznie z informacj± o plikach utworzonych przez Pivota i szablonami, które s± wykorzystywane do ich stworzenia. Mo¿e to byæ przydatne do znalezienia problemu przy tworzeniu tych plików.',

	'debug' => 'Otwórz okno debugera',

	'latest_pivot_news' => "Najnowsze wiadomo¶ci Pivota",
	'remove_setup_header' => "Wykryto skrypt instalacyjny Pivota",
	'remove_setup' => "Skrypt instalacyjny Pivota 'pivot-setup.php' wci±¿ znajduje siê w katalogu g³ównym. Powiniene¶ wiedzieæ, ¿e jest to potencjalne zagro¿enie bezpieczeñstwa. Radzimy usun±æ go lub zmieniæ jego nazwê tak, aby nie by³ mo¿liwy do uruchomienia przez osoby maj±ce z³e zamiary.",

);


$lang['templates'] = array (
	'rollback' => 'Rollback',
	'create_template' => 'Stwórz szablon',
	'create_template_info' => 'Tworzenie szablonu Pivota od podstaw',
	'no_comment' => 'No Comment',
	'comment' => 'Comment*',
	'comment_note' => '(*Note: Comments can only be saved at <b>first</b> save of changes or creation)',
	'create' => 'Tworzenie szablonu',
	'editing' => 'Edycja',
	'filename' => 'Nazwa pliku',
	'save_changes' => 'Zapisz zmiany!',
	'save_template' => 'Zapisz szablon!',
	'aux_template' => 'Szablon pomocniczy',
	'sub_template' => 'Podszablon',
	'standard_template' => 'Zwyk³y szablon',
	'feed_template' => 'Szablon kana³u',
	'css_template' => 'Plik CSS',
	'txt_template' => 'Plik tekstowy',
	'php_template' => 'Plik PHP',
);


//		Admin			\\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar']['xxx_title'] ones
$lang['admin'] = array (
	'seeusers' => 'Tworzenie, edycja i usuwanie u¿ytkowników',
	'seeconfig' => 'Edycja pliku konfiguracyjnego',
	'templates' => 'Tworzenie, edycja i usuwanie szablonów',
	'maintenance' => 'Rutynowe czynno¶ci na plikach Pivota, takie jak \'Przebuduj pliki\', \'Zweryfikuj bazê danych\', \'Przebuduj indeks\' i \'Kopia\'.',
	'regen' => 'Przebudowanie wszystkich stron generowanych przez Pivota',
	'blogs' => 'Tworzenie, edycja i usuwanie Weblogów publikowanych przez Pivota',
);


//		Maintenace		\\
$lang['maint'] = array (
	'title' => 'Utrzymanie',
	'gen_arc_title' => 'Generowanie archiwum', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => 'Regenrowanie wszytkich archiwów', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'Weryfikacja plików XML', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'Weryfikacja (i naprawa, je¶li konieczna) integralno¶ci plików XML', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => 'Kopia',
	'backup_text' => 'Tworzenie kopii wszystkich najwa¿niejszych plików Pivota',
);


//		Stats and referers		\\
$lang['stats'] = array (
	'show_last' => "Poka¿ ostatnie",
	'20ref' => "20 stron odsy³aj±cych",
	'50ref' => "50 stron odsy³aj±cych",
	'allref' => "wszystkie strony odsy³aj±ce",
	'showunblocked' => "tylko pozycje niezablokowane",
	'showall' => "pozycje zablokowane i niezablokowane",
	'updateref' => "Aktualizuj tytu³y stron odsy³aj±cych",
	'hostaddress' => 'Adres hosta (adres IP)',
	'whichpage' => 'Która strona',

	'getting' => 'Pobieranie nowych tytu³ów',
	'awhile' => 'To mo¿e zaj±æ chwilê, proszê nie przerywaæ.',
	'firstpass' => 'Pierwszy przebieg',
	'secondpass' => 'Drugi przebieg',
	'nowuptodate' => 'Tytu³y stron odsy³aj±cych zosta³y zaktualizowane.',
	'finished' => 'Zrobione',
);


//		User Info		\\
	$lang['userinfo'] = array (
	'editfields' => 'Edycja pól u¿ytkownika',
	'desc_editfields' => 'Edycja pól, które u¿ytkownik mo¿e u¿yc do opisania siebie',
	'username' => 'Nazwa u¿ytkownika',
	'pass1' => 'Has³o',
	'pass2' => 'Has³o (potwierdzenie)',
	'email' => 'Email',
	'nickname' => 'Nick',
	'userlevel' => 'Poziom u¿ytownika',
	'userlevel_desc' => 'Poziom u¿ytkownika okre¶la, jakie dzia³ania u¿ytkownik mo¿e podejmowaæ w Pivocie.',
	'language' => 'Jêzyk',
	'lastlogin' => 'Ostatnie logowanie',
	'edituser' => 'Edycja u¿ytkownika',  //the link to.. well, edit the user (also the title)
	'edituserinfo' => 'Edycja informacji o u¿ytkowniku',
	'selfreg' => 'Samodzielna rejestracja',
	'newuser' => 'Tworzenie nowego u¿ytkownika',
	'desc_newuser' => 'Tworzenie nowego konta w Pivocie, pozwalaj±cego na pisanie notek w Weblogu.',
	'newuser_button' => 'Stwórz',
	'edituser_button' => 'Zmieñ',
	'pass_too_short' => 'Has³o musi mieæ conajmniej 4 znaki.',
	'pass_equal_name' => 'Has³o nie mo¿e byæ takie samo, jak nazwa u¿ytkownika.',
	'pass_dont_match' => 'Has³a nie s± takie same',
	'username_in_use' => 'Nazwa u¿ytkownika jest ju¿ zajêta',
	'username_too_short' => 'Nazwa u¿ytkownika musi mieæ conajmniej 3 znaki',
	'username_not_valid' => 'Nazwa u¿ytkownika mo¿e sk³adaæ siê tylko ze znaków alfanumerycznych (A-Z, 0-9) i podkre¶lenia (_).',
	'not_good_email' => 'To nie jest prawid³owy adres e-mail',
	'c_admin_title' => 'Potwierd¼ utworzenie konta administratora',
	'c_admin_message' => ''.$lang['userlevels']['1'].' ma pe³ny dostêp do Pivota, mo¿e edytowaæ wszystkie wpisy, komentarze i zmieniaæ ustawienia. Jeste¶ pewien, ¿e chcesz zrobiæ %s '.$lang['userlevels']['1'].'?',
);


//		Config Page		\\
	$lang['config'] = array (
	'save' => 'Zapisz ustawienia',

	'sitename' => 'Nazwa strony',
	'defaultlanguage' => 'Domy¶lny jêzyk',
	'defaultencoding' => 'U¿yj kodowania',
	'defaultencoding_desc' => 'Definiuje u¿ywane kodowanie (np. utf-8 lub iso-8859-2). Powiniene¶ zostawiæ to pole puste, chyba ¿e wiesz co robisz. Je¶li pozostawisz je puste, zostanie u¿yte najodpowiedniejsze kodowanie na podstawie ustawieñ z pliku jêzykowego.',
	'defaulttheme' => 'Temat',
	'selfreg' => 'Zezwalaj na rejestracjê u¿ytkowników',
	'selfreg_desc' => 'Ustawnienie tej opcji na \'Tak\' pozwoli odwiedzaj±cym na rejestrowanie siê jako zwyk³y u¿ytkownik i tworzenie wpisów. (Nie ma to nic wspólnego z "komentuj±cym u¿ytkownikiem".)',
	'siteurl' => 'Adres URL strony',
	'header_fileinfo' => 'Informacje o pliku',
	'localpath' => '¦cie¿ka lokalna',
	'debug_options' => 'Opcje debugowania',
	'debug' => 'Tryb debugowania',
	'debug_desc' => 'Pokazuje losowe informacje debugowania, tu i tam...',
	'log' => 'Logowanie',
	'log_desc' => 'Tworzy plik z logami ró¿nych zdarzeñ',

	'unlink' => 'Unlink Files',
	'unlink_desc' => 'Niektóre serwery, na których jest w³±czony safe_mode, mog± wymagaæ w³±czenia tej opcji. Na wiêkszo¶ci serwerów ta opcja nie ma ¿adnego znaczenia',
	'chmod' => 'Zmieñ uprawnienia plików (chmod) na',
	'chmod_desc' => 'Niektóre serwery wymagaj±, aby tworzone pliki mia³y ustawione uprawnienia (chmod) w specyficzny sposób. Najcze¶ciej spotykanymi warto¶ciami s± \'0644\' i \'0755\'. Nie zmieniaj tego, chyba ¿e wiesz co robisz.',
	'header_uploads' => 'Ustawienia wysy³ania plików',
	'upload_path' => '¦cie¿ka dla wysy³anych plików',
	'upload_accept' => 'Akceptowane typy',
	'upload_extension' => 'Domy¶lne rozszerzenie',
	'upload_save_mode' => 'Nadpisywanie',
	'make_safe' => 'Wyczy¶æ nazwê pliku',
	'c_upload_save_mode' => 'Zmieñ (zwiêksz) nazwê pliku',
	'max_filesize' => 'Maksymalny rozmiar pliku',
	'header_datetime' => 'Data/czas',
	'timeoffset_unit' => 'Jednostka ró¿nicy czasu',
	'timeoffset' => 'Ró¿nica czasu',
	'header_extra' => 'Ró¿ne ustawienia',
	'wysiwyg' => 'U¿ywaj edytora WYSIWYG',
	'wysiwyg_desc' => 'Okre¶la, czt edytor WYSIWYG jest domy¶lnie w³±czony. U¿ytkownicy mog± to zmieniaæ w ich osobistych ustawieniach (\'Moje informacje\').',
	'basic_view' => 'U¿ywaj prostego widoku',
	'basic_view_desc' => 'Okre¶la, czy strona \'Nowy wpis\' otwiera siê w widoku prostym czy rozszerzonym.',
	'def_text_processing' => 'Domy¶lne przetwarzanie tekstu',
	'text_processing' => 'Przetwarzanie tekstu',
	'text_processing_desc' => 'Okre¶la domy¶lny sposób przetwarzania tekstu, je¶li u¿ytkownik nie u¿ywa edytora WYSIWYG. \'Konwertuj znaki koñca wiersza\' nie robi nic poza zamian± znaków koñca wiersza na tagi &lt;br&gt;. <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> jest potê¿nym, ale ³atwym do opanowania systemem znaczników.',
	'none' => '¯adne',
	'convert_br' => 'Konwertuj znaki koñca wiersza na &lt;br /&gt;',
	'textile' => 'Textile',
	'markdown' => 'Markdown',
	'markdown_smartypants' => 'Markdown and Smartypants',

	'allowed_cats' => 'Dozwolone kategorie',
	'allowed_cats_desc' => 'Ten u¿ytkownik mo¿e dodawaæ wpisy tylko w wybranych kategoriach',
	'delete_user' => "Usuñ u¿ytkownika",
	'delete_user_desc' => "Mo¿esz usun±æ tego u¿ytkownika. Wszystkie jego wpisy pozostan± nienaruszone, ale nie bêdzie on ju¿ w stanie siê zalogowaæ",
	'delete_user_confirm' => 'Za chwilê usuniesz dostêp u¿ytkownikowi %s. Jeste¶ pewien, ¿e chcesz to zrobiæ?',

	'setup_ping' => 'Ustawienia pingów',
	'ping_use' => 'Wysy³aj informacje do trackerów',
	'ping_use_desc' => 'To ustawienie okre¶la, czy trackery takie jak weblogs.com bêd± automatycznie powiadamiane przez Pivota w momencie, kiedy zamie¶cisz nowy wpis. Us³ugi takie jak blogrolling.com bazuj± na tych informacjach',
	'ping_urls' => 'Adresy URL do pingowania',
	'ping_urls_desc' => 'Mo¿esz wprowadziæ wiele adresów, do których maj± byæ wysy³ane informacje. Nie dodawaj przedrostka http://, poniewa¿ nie bêdzie to dzia³aæ. Umie¶æ ka¿dy serwer w nowej linii. <br />Wybrane serwery, do które mo¿esz pingowaæ:<br /><b>rpc.weblogs.com/RPC2</b> (jeden z najczê¶ciej u¿ywanych)<br /><b>pivotlog.net/pinger</b> (serwer pivotlog, jeszcze nie dzia³a)<br /><b>rcs.datashed.net/RPC2</b> (euro.weblogs.com)<br /><b>ping.blo.gs</b> (blo.gs)<br />',

	'setup_tb' => 'Ustawienia ¶ledzenia',
	'tb_email' => 'Email',
	'tb_email_desc' => 'Je¶li ustawione, na podany adres zostanie wys³any email w momencie, kiedy ¶lad (trackback) zostanie dodany.',

	'new_window' => 'Otwieraj linki w nowym oknie',
	'emoticons' => 'U¿ywaj emotikon',
	'javascript_email' => 'Kodowaæ adres email?',
	'new_window_desc' => 'Okre¶la czy wszystkie linki u¿yte we wpisach bêd± otwieraæ siê w nowym oknie przegl±darki.',

	'mod_rewrite' => 'U¿ywaj Mod_rewrite',
	'mod_rewrite_desc' => 'Je¶li u¿ywasz modu³u Apache Mod_rewrite, Pivot bêdzie tworzyæ adresy URL w stylu www.mojastrona.com/archive/2003/05/30/ladna_pogoda, zamiast www.mojastrona.com/pivot/entry.php?id=134. Nie wszystkie serwery to obs³uguj±, wiêc przeczytaj proszê rozdzia³ manuala po¶wiêcony temu zagadnieniu.',
	'mod_rewrite_1' => 'Tak, w stylu /archive/2005/04/28/tytul_wpisu',
	'mod_rewrite_2' => 'Tak, w stylu /archive/2005-04-28/tytul_wpisu',
	'mod_rewrite_3' => 'Tak, w stylu /entry/1234',
	'mod_rewrite_4' => 'Tak, w stylu /entry/1234/tytul_wpisu',

	'search_index' => 'Automatycznie aktualizuj indeks wyszukiwania',
	'search_index_desc' => 'To ustawienie okre¶la, czy indeks wyszukiwania bêdzie aktualizowany za ka¿dym razem kiedy dodasz nowy wpis lub zmodyfikujesz istniej±cy.',

	'default_allow_comments' => 'Zezwalaj domy¶lnie na komentowanie wpisów',
	'default_allow_comments_desc' => 'Okre¶la, czy wpisy maj± domy¶lnie ustawion± mo¿liwo¶æ ich komentowania.',

  'maxhrefs' => 'Liczba linków',
  'maxhrefs_desc' => 'Makymalna liczba linków mo¿liwych do umieszczenia w komentarzu. Przydatne do ograniczenia spamu w komentarzach. 0 oznacza nieograniczon± liczbê linków.',
  'rebuild_threshold' => 'Rebuild Threshold',
  'rebuild_threshold_desc' => 'The number of seconds rebuilding takes, before Pivot refreshes the page. The default is 28, but if you are having problems with rebuilding, try lowering this number to 10.',
	'default_introduction' => 'Domy¶lny Wstêp i Tre¶æ wpisu',
	'default_introduction_desc' => 'To ustawienie okre¶la domy¶lne warto¶ci dla Wstêpu i Tre¶ci nowego wpisu. Normalnie to bêdzie pusty akapit, co ma w wiêkszo¶ci przypadków najwiêkszy sens.',

	'upload_autothumb'	=> 'Automatyczne miniatury',
	'upload_thumb_width' => 'Szeroko¶æ miniatury',
	'upload_thumb_height' => 'Wysoko¶æ miniatury',
	'upload_thumb_remote' => 'Zdalny skrypt obcinaj±cy',
	'upload_thumb_remote_desc' => 'Je¶li na Twoim serwerze nie ma zainstalowanych bibliotek niezbêdnych do obcinania obrazków, mo¿esz u¿yæ zdalnego skryptu obcinaj±cego.',

	'extensions_header' => 'Katalog rozszerzñ',
	'extensions_desc'   => 'Katalog \'rozszerzeñ\' to miejsce, w którym przechowywane s± dodatki do Pivota.
		Czyni to aktualizacje o wiele ³atwiejszymi. Zajrzyj do dokumentacji aby dowiedzieæ siê wiêcej na ten temat.',
	'extensions_path'   => '¦cie¿ka katalogu rozszerzeñ',

);


//		Weblog Config	\\
$lang['weblog_config'] = array (
	'edit_weblog' => 'Edycja Webloga',
	'edit_blog' => 'Edycja Weblogów',
	'new_weblog' => 'Nowy Weblog',
	'new_weblog_desc' => 'Dodawanie nowego Webloga',
	'del_weblog' => 'Usuñ Webloga',
	'del_this_weblog' => 'Usuniêcie tego Webloga.',
	'create_new' => 'Tworzenie nowego Webloga',
	'subw_heading' => 'Dla ka¿dego podwebloga, który znajduje siê w szablonach, mo¿esz skonfigurowaæ szablon, który bêdzie przez niego u¿ywany oraz kategorie, z których wpisy bêd± na nim publikowane.',
	'create' => 'Zakoñcz',

	'create_1' => 'Tworzenie / edycja Webloga, krok 1 z 3',
	'create_2' => 'Tworzenie / edycja Webloga, krok 2 z 3',
	'create_3' => 'Tworzenie / edycja Webloga, krok 3 z 3',

	'name' => 'Nazwa Webloga',
	'payoff' => 'Opis',
	'payoff_desc' => 'Opis mo¿e byæ u¿yty jako podtytu³ lub krótki opis Twojego Webloga.',
	'url' => 'Adres URL Webloga',
	'url_desc' => 'Pivot wykryje adres URL Twojego Webloga je¶li pozostawisz to pole puste. Je¶li jednak Twój Weblog bêdzie umieszczony w ramkach (frames) lub includowany przez inny skrypt, mo¿esz podaæ w³asny adres.',
	'index_name' => 'Strona g³ówna (Index)',
	'index_name_desc' => 'Nazwa pliku strony g³ównej (index). Zwykle to co¶ w stylu \'index.html\' lub \'index.php\'.',

	'ssi_prefix' => 'Prefiks SSI',
	'ssi_prefix_desc' => 'Je¶li Twój Weblog u¿ywa SSI (co nie jest zalecane), mo¿esz u¿yæ tej opcji do okre¶lenia prefiksu bêd±cego nazw± pliku u¿ywanego przez SSI, np. \'index.shtml?p=\' (prefiks ten zostanie dodany przed nazw± pliku Pivota). Powiniene¶ pozostawiæ to pole puste, chyba ¿e wiesz co robisz.',

	'front_path' => '¦cie¿ka strony g³ównej',
	'front_path_desc' => 'Wzglêdna lub bezwzglêdna ¶cie¿ka do katalogu, w którym Pivot stworzy stronê g³ówn± tego webloga.',
	'file_format' => 'Nazwa pliku',
	'entry_heading' => 'Ustawienia wpisów',
	'entry_path' => '¦cie¿ka wpisów',
	'entry_path_desc' => 'Wzglêdna lub bezwzglêdna ¶cie¿ka do katalogu, w którym Pivot stworzy strony dla ka¿dego z wpisów (je¶li nie zechcesz u¿ywaæ \'¿ywych wpisów\')',
	'live_comments' => '¯ywe wpisy',
	'live_comments_desc' => 'Je¶li u¿ywasz \'¿ywych wpisów\', Pivot nie musi generowaæ plików dla ka¿dego wpisu. To jest ustawienie zalecane..',
	'readmore' => 'Tekst \'Czytaj wiêcej\'',
	'readmore_desc' => 'Tekst, który pokazuje, ¿e jest dalsza czê¶æ wpisu, nie wy¶wietlana na stronie g³ównej. Je¶li zostawisz to pole puste, zostanie u¿yty tekst domy¶lny, zdefiniowany w pliku jêzykowym.',

	'arc_heading' => 'Ustawienia archiwum',
	'arc_index' => 'Plik indeksu',
	'arc_path' => '¦cie¿ka archiwum',
	'archive_amount' => 'Archive Amount',
	'archive_unit' => 'Rodzaj archiwum',
	'archive_format' => 'Format archiwum',
	'archive_none' => 'Brak archiwum',
	'archive_weekly' => 'Archiwum tygodniowe',
	'archive_monthly' => 'Archiwum miesiêczne',
	'archive_yearly' => 'Archiwum roczne',

	'archive_link' => 'Link do archiwum',
	'archive_linkfile' => 'Format listy archiwum',
	'archive_order' => 'Kolejno¶æ archiwum',
	'archive_ascending' => 'Rosn±co (najpierw starsze)',
	'archive_descending' => 'Malej±co (najpierw nowsze)',

	'templates_heading' => 'Szablony',
	'frontpage_template' => 'Szablon strony g³ównej',
	'frontpage_template_desc' => 'Szablon okre¶laj±cy wygl±d strony g³ównej tego webloga.',
	'archivepage_template' => 'Szablon strony archiwum',
	'archivepage_template_desc' => 'Szablon okre¶laj±cy wygl±d strony archiwum. Mo¿e byæ taki sam, jak dla strony g³ównej.',
	'entrypage_template' => 'Szablon strony wpisu',
	'entrypage_template_desc' => 'Szablon okre¶laj±cy wygl±d strony pojedynczego wpisu.',
	'extrapage_template' => 'Szablon specjalny',
	'extrapage_template_desc' => 'Szablon okre¶laj±cy wygl±d archiwum i strony search.php.',

	'shortentry_template' => 'Szablon skrótu wpisu',
	'shortentry_template_desc' => 'Szablon okre¶laj±cy wygl±d skrótu pojedynczego wpisu wy¶wietlanego wewn±trz webloga lub archiwum.',
	'num_entries' => 'Ilo¶æ wpisów',
	'num_entries_desc' => 'Ilo¶æ wpisów w tym subweblogu, które bêd± wy¶wietlane na stronie g³ównej.',
	'offset' => 'Offset',
	'offset_desc' => 'Je¶li Offset jest liczb±, to taka ilo¶æ wpisów zostanie pominiêta podczas generowania strony. Mo¿esz u¿yæ tego np. do stworzenia listy \'Poprzednich wpisów\'.',
	'comments' => 'Zezwalaæ na komentowanie?',
	'comments_desc' => 'Okre¶la, czy u¿ytkownicy bêd± mogli zostawiaæ komentarze do wpisów w tym podweblogu.',

	'publish_cats' => 'Publikuj nastêpuj±ce kategorie',

	'setup_rss_head' => 'Konfiguracja RSS i Atom',
	'rss_use' => 'Generuj kana³y',
	'rss_use_desc' => 'To ustawienie okre¶la, czy Pivot bêdzie automatycznie generowa³ kana³y RSS i Atom dla tego webloga.',
	'rss_filename' => 'Nazwa pliku RSS',
	'atom_filename' => 'Nazwa pliku Atom',
	'rss_path' => '¦cie¿ka kana³u',
	'rss_path_desc' => 'Wzglêdna lub bezwzglêdna ¶cie¿ka do katalogu, w którym Pivot bêdzie generowa³ pliki kana³ów.',
//	'rss_size' => 'Feed Entry Length',	/* DEPRECATED */
//	'rss_size_desc' => 'The length (in characters) of an entry in the Feed files', /* DEPRECATED */
	'rss_full' => 'Twórz pe³ne kana³y',
	'rss_full_desc' => 'Okre¶la, czy Pivot bêdzie tworzy³ pe³ne kana³y RSS i Atom. Je¶li opcja ta ustawiona jest na \'Nie\', Pivot bêdzie tworzy³ kana³y, które zawieraæ bêd± tylko krótki opis, co uczyni kana³y mniej u¿ytecznymi.',
	'rss_link' => 'Link kana³u',
	'rss_link_desc' => 'Link, który zostanie przes³any w kanale. Je¶li pozostawisz to pole puste, Pivot bêdzie przesy³a³ link do strony g³ównej webloga.',
	'rss_img' => 'Obraz kana³u',
	'rss_img_desc' => 'Mo¿esz wybraæ obraz do wys³ania wraz z kana³em. Niektóre czytniki kana³ów wy¶wietl± ten obraz wraz z Twoim kana³em. Pozostaw to pole puste lub podaj pe³ny adres URL.',

	'lastcomm_head' => 'Ustawienia dla ostatnich komentarzy',
	'lastcomm_amount' => 'Ilo¶æ pokazywanych komentarzy',
	'lastcomm_length' => 'Obetnij na d³ugo¶ci',
	'lastcomm_format' => 'Format',
	'lastcomm_format_desc' => 'To ustawienie okre¶la wygl±d \'ostatnich komentarzy\' na stronie g³ównej webloga.',
	'lastcomm_nofollow' => 'U¿ywaj \'Nofollow\'',
	'lastcomm_nofollow_desc' => 'Aby walczyæ z \'referer-spamem\' mo¿esz w³±czyæ t± opcjê. Dodaje ona atrybut rel="nofollow" do wszystkich linków w komentarzach i stronach odsy³aj±cych, wiêc nie pomo¿e to spammerom w uzyskaniu wy¿szego pagerank w Google.',

	'lastref_head' => 'Ustawienia dla ostatnich stron odsy³aj±cych',
	'lastref_amount' => 'Ilo¶æ pokazywanych stron',
	'lastref_length' => 'Obetnij na d³ugo¶ci',
	'lastref_format' => 'Format',
	'lastref_format_desc' => 'To ustawienie okre¶la wygl±d \'ostatnich stron odsy³aj±cych\' na stronie g³ównej webloga.',
	'lastref_graphic' => 'U¿yj grafiki',
	'lastref_graphic_desc' => 'To ustawienie okre¶la, czy w \'ostatnich stronach odsy³aj±cych\' bêd± u¿ywane ma³e ikony dla najpopularniejszych silników wyszukiwawczych, z których mogli wej¶æ odwiedzaj±cy.',
	'lastref_redirect' => 'Przekierowanie dla stron odsy³aj±cych',
	'lastref_redirect_desc' => 'Aby walczyæ z \'referer-spamem\' mo¿esz przekierowywaæ linki wychodz±ce, co nie pomo¿e spammerom w uzyskaniu wy¿szego pagerank w Google.',

	'various_head' => 'Ró¿ne ustawienia',
	'emoticons' => 'U¿ywaj emotikon',
	'emoticons_desc' => 'To ustawienie okre¶la, czy emotikony w stylu :-) bêd± zamieniane na ich graficzne odpowiedniki.',
	'encode_email_addresses' => 'Koduj adresy email',
	'encode_email_addresses_desc' => 'To ustawienie okre¶la, czy adresy email bêd± kodowane przy u¿yciu JavaScript w celu ochrony przed \'zbieraczami adresów\'.',
	'target_blank' => 'Target Blank',
	'xhtml_workaround' => 'XHTML Workaround',
	'target_blank_desc' => 'Je¶li ustawione na \'Tak\', wszystkie linki w Twoich wpisach bêd± otwierane w nowym oknie przegl±darki. Je¶li ustawione na \'XHTML Workaround\', wszystkie linki bêd± mia³y dodany atrybut rel="external", który jest zgodny ze specyfikacj± XHTML.',

	'date_head' => 'Ustawienia wy¶wietlania daty',
	'full_date' => 'Format pe³nej daty',
	'full_date_desc' => 'Okre¶la format pe³nej daty i czasu. Najcze¶ciej u¿ywany u góry strony pojedynczego wpisu.',
	'entry_date' => 'Data wpisu',
	'diff_date' => 'Nowa data',
	'diff_date_desc' => '\'Nowa data\' jest najcze¶ciej u¿ywana w po³±czeniu z \'Dat± wpisu\'. Data wpisu jest wy¶wietlana przy ka¿dym wpisie na Twoim blogu, a Nowa data tylko je¶li data wpisu ró¿ni siê od daty wpisu poprzedniego.',
	'language' => 'Jêzyk',
	'language_desc' => 'To ustawienie okre¶la, w jakim jêzyku bêd± wy¶wietlane, a tak¿e kodowanie strony (np. iso-8859-2 or uft-8).',

	'comment_head' => 'Ustawienia komentowania',
	'comment_sendmail' => 'Wysy³aæ email?',
	'comment_sendmail_desc' => 'Po zamieszczeniu komentarza zostanie wys³any email do osób prowadz±cych webloga.',
	'comment_emailto' => 'Wysy³aj do',
	'comment_emailto_desc' => 'Podaj adres(y) email, na które maj± byæ wysy³ane powiadomienia. Oddziel adresy przecinkiem.',
	'comment_texttolinks' => 'Zamieniaj tekst na linki',
	'comment_texttolinks_desc' => 'Okre¶la, czy wpisane adresy URL i email maj± byæ zamieniane na linki.',
	'comment_wrap' => 'Zawijaj komentarze po',
	'comment_wrap_desc' => 'Aby zapobiec rozwalaniu uk³adu strony przez d³ugie ci±gi znaków, tekst bêdzie zawijany po podanej ilo¶ci znaków.',
	'comments_text_0' => 'Opis dla \'brak komentarzy\'',
	'comments_text_1' => 'Opis dla \'jeden komentarz\'',
	'comments_text_2' => 'Opis dla \'X komentarzy\'',
	'comments_text_2_desc' => 'Tekst, który jest u¿ywany do pokazania, ile jest komentarzy. Je¶li pozostawisz te pola puste, Pivot u¿yje tekstów domy¶lnych, zdefiniowanych w pliku jêzykowym.',

	'comment_pop' => 'Komentarze w oknie Popup?',
	'comment_pop_desc' => 'Okre¶la, czy strona komentarzy (lub \'pojedynczego wpisu\') bêdzie pokazywana w oknie popup, czy w aktualnie otwartym oknie przegl±darki.',
	'comment_width' => 'Szeroko¶æ okna Popup',
	'comment_height' => 'Wysoko¶æ okna Popup',
	'comment_height_desc' => 'Okre¶la szeroko¶æ i wysoko¶æ (w pikselach) okna Popup komentarzy.',

	'comment_format' => "Format komentarzy",
	'comment_format_desc' => "To ustawienie okre¶la format komentarzy na stronie wpisu.",

	'comment_reply' => "Format 'odpowiedz...'",
	'comment_reply_desc' => "Okre¶la format linku, którego odwiedzaj±cy mog± u¿ywaæ w celu udzielenia odpowiedzi na konkretny komentarz.",
	'comment_forward' => "Format 'skomentowany przez...'",
	'comment_forward_desc' => "Okre¶la format tekstu, który jest wy¶wietlany gdy jest odpowied¼ na dany komentarz.",
	'comment_backward' => "Format 'odpowied¼ na...'",
	'comment_backward_desc' => "Okre¶la format tekstu, który jest wy¶wietlany gdy komentarz jest odpowiedzi± na inny.",

	'comment_textile' => 'Zezwalaj na Textile',
	'comment_textile_desc' => 'Je¶li jest ustawione na \'Tak\', odwiedzaj±cy mog± u¿ywaæ <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> w komentarzach.',
	'save_comment' => 'Zapisz komentarz',
	'comment_gravatardefault' => 'Domy¶lny Gravatar',
	'comment_gravatardefault_desc' => 'Adres URL do obrazu domy¶lnego Gravatara. Powinien rozpoczynaæ siê od http://',
	'comment_gravatarhtml' => 'Kod HTML Gravatara',
	'comment_gravatarhtml_desc' => 'Kod HTML do wstawienia dla Gravatara. Znacznik %img% bêdzie zast±piony przez adres URL do obrazu.',
	'comment_gravatarsize' => 'Rozmiar Gravatara',
	'comment_gravatarsize_desc' => 'Rozmiar Gravatara (w pikselach). Domy¶lny to 48.',

    'trackback_head' => 'Ustawienia ¶ledzenia (trackback)',
	'trackback_sendmail' => 'Wysy³aæ email?',
	'trackback_sendmail_desc' => 'Po tym, jak ¶lad (trackback) zostanie umieszczony, mo¿e zostaæ wys³any email do osób prowadz±cych ten weblog.',
	'trackback_emailto' => 'Wysy³aj do',
	'trackback_emailto_desc' => 'Podaj adres(y) email, na które maj± byæ wysy³ane powiadomienia. Oddziel adresy przecinkiem.',
	'trackbacks_text_0' => 'Opis dla \'brak ¶ladów (trackback)\'',
	'trackbacks_text_1' => 'Opis dla \'jeden ¶lad (trackback)\'',
	'trackbacks_text_2' => 'Opis dla \'X ¶ladów (trackbacks)\'',
	'trackbacks_text_2_desc' => 'Tekst, który jest u¿ywany do pokazania, ile jest ¶ladów (trackbacks). Je¶li pozostawisz te pola puste, Pivot u¿yje tekstów domy¶lnych, zdefiniowanych w pliku jêzykowym.',
	'trackback_pop' => '¦lady (trackbacks) w oknie Popup?',
	'trackback_pop_desc' => 'Okre¶la, czy strona ¶ledzenia (trackbacks) (lub \'pojedynczego wpisu\') bêdzie pokazywana w oknie popup, czy w aktualnie otwartym oknie przegl±darki.',
	'trackback_width' => 'Szeroko¶æ okna Popup',
	'trackback_height' => 'Wysoko¶æ okna Popup',
	'trackback_height_desc' => 'Okre¶la szeroko¶æ i wysoko¶æ (w pikselach) okna Popup ¶ledzenia (trackback).',
	'trackback_format' => "Format ¶ledzenia (trackbacks)",
	'trackback_format_desc' => "Okre¶la format ¶ledzenia (trackbacks) na stronach wpisów.",
	'trackback_link_format' => "Format linku ¶ledzenia (trackback)",
        'save_trackback' => 'Zapisz ¶lad (trackback)',

	'saved_create' => 'Nowy Weblog zosta³ utworzony.',
	'saved_update' => 'Weblog zosta³ zaktualizowany.',
	'deleted' => 'Weblog zosta³ usuniêty.',
	'confirm_delete' => 'Za chwilê usuniesz weblog %1. Jeste¶ pewien?',

	'blogroll_heading' => 'Ustawienia Blogroll',
	'blogroll_id' => 'Blogrolling ID #',
	'blogroll_id_desc' => 'Opcjonalnie mo¿esz dodaæ blogroll serwisu <a href="http://www.blogrolling.com" target="_blank">blogrolling.com</a> do Twojego webloga. Blogrolling jest doskona³± us³ug± zarz±dzania list± linków, która pokazuje jak czêsto s± one aktualizowane. Je¶li tego nie chcesz, po prostu pomiñ poni¿sze pola. W innym przypadku zaloguj siê do blogrolling.com i przejd¼ do sekcji \'get code\', gdzie znajdziesz linki zawieraj±ce Twój blogroll ID. Powinien on wygl±daæ mniej wiêcej tak: 2ef8b42161020d87223d42ae18191f6d.',
	'blogroll_fg' => 'Kolor tekstu',
	'blogroll_bg' => 'Kolor t³a',
	'blogroll_line1' => 'Kolor linii 1',
	'blogroll_line2' => 'Kolor linii 2',
	'blogroll_c1' => 'Kolor 1',
	'blogroll_c2' => 'Kolor 2',
	'blogroll_c3' => 'Kolor 3',
	'blogroll_c4' => 'Kolor 4',
	'blogroll_c4_desc' => 'Te kolory okre¶laj±, jak bêdzie wygl±daæ Twój blogroll. Kolory 1 do 4 pokazuj±, jak czêsto link jest uaktualniany.',
);


$lang['upload'] = array (
	//		File Upload		\\
	'preview' => 'Przegl±d ca³ej listy',
	'thumbs' => 'Przegl±d miniatur',
	'create_thumb' => '(Stworz miniaturê)',
	'title' => 'Pliki',
	'thisfile' => 'Wy¶lij nowy plik:',
	'button' => 'Wy¶lij',
	'filename' => 'Nazwa pliku',
	'thumbnail' => 'Miniatura',
	'date' => 'Data',
	'filesize' => 'Rozmiar',
	'dimensions' => 'Szer. x Wys.',
	'delete_title' => 'Usuñ obraz',
	'areyousure' => 'Jeste¶ pewien, ¿e chcesz usun±æ plik %s?',
	'picheader' => 'Usun±æ ten obraz?',
	'create' => 'stwórz',
	'edit' => 'edytuj',

	'insert_image' => 'Wstaw obraz',
	'insert_image_desc' => 'Aby wstawiæ obraz, powiniene¶ go wys³ac lub wybraæ uprzednio wys³any.',
	'insert_image_popup' => 'Wstaw Popup z obrazem',
	'insert_image_popup_desc' => 'Aby stworzyæ Popup z obrazem, powiniene¶ go wys³aæ lub wybraæ uprzednio wys³any. Pó¼niej wybierz tekst lub miniaturê, która bêdzie odnosiæ siê do okna Popup.',
	'choose_upload' => 'wy¶lij',
	'choose_select' => 'lub wybierz',
	'imagename' => 'Nazwa obrazu',
	'alt_text' => 'Tekst alternatywny (ALT)',
	'align' => 'Wyrównanie',
	'border' => 'Obrys',
	'pixels' => 'pikseli',
	'uploaded_as' => 'Twój plik zosta³ wys³any jako \'%s\'.',
	'not_uploaded' => 'Twój plik nie zosta³ wys³any. Wyst±pi³y nastêpuj±ce b³êdy:',
	'center' => 'Wy¶rodkowany (domy¶lnie)',
	'left' => 'Do lewej',
	'right' => 'Do prawej',
	'inline' => 'Inline',
	'notice_upload_first' => 'Powiniene¶ najpierw wybraæ lub wys³aæ obraz',
	'select_image' => 'Wybierz obraz',
	'select_file' => 'Wybierz plik',

	'for_popup' => 'Dla okna Popup',
	'use_thumbnail' => 'U¿yj miniatury',
	'edit_thumbnail' => 'edytuj miniaturê',
	'use_text' => 'U¿yj tekstu',
	'insert_download' => 'Wstaw plik do ¶ci±gniêcia',
	'insert_download_desc' => 'Aby wstawiæ plik do ¶ci±gniêcia, powiniene¶ go wys³aæ lub wybraæ uprzednio wys³any. Nastêpnie wybierz element, który ma prowadziæ do pliku (ikona, tekst lub miniatura).',
	'use_icon' => 'U¿yj ikony',
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => 'Wstaw link',
	'insert_link_desc' => 'Wstaw link wpisuj±c adres URL w polu poni¿ej. Odwiedzaj±cy Twoj± stronê zobacz± tytu³ kiedy najad± kursorem myszy na link.',
	'url' => 'URL',
	'title' => 'Tytu³',
	'text' => 'Tekst',
);


//		Categories		\\
$lang['category'] = array (
	'edit_who' => 'Edycja listy osób, które mog± dodawaæ wpisy do kategorii \'%s\'',
	'name' => 'Nazwa',
	'users' => 'U¿ytkownicy',
	'make_new' => 'Stwórz now± kategoriê',
	'create' => 'Stwórz kategoriê',
	'canpost' => 'Wybierz u¿ytkowników, którym chcia³by¶ daæ uprawnienia do dodawania wpisów w tej kategorii',
	'same_name' => 'Kategoria o tej nazwie ju¿ istnieje',
	'need_name' => 'Musisz wpisaæ nazwê kategorii',

	'allowed' => 'Dozwolone',
	'allow' => 'Zezwól',
	'denied' => 'Zabronione',
	'deny' => 'Zabroñ',
	'edit' => 'Edycja kategorii',

	'delete' => 'Usuñ kategoriê',
	'delete_desc' => 'Wybierz \'Tak\' je¶li chcesz usun±æ t± kategoriê',

	'delete_message' => 'W tej wersji Pivota tylko nazwa kategorii mo¿e byæ usuniêta. W kolejnych wersjach bêdziesz mia³ mo¿liwo¶æ wyboru co zrobiæ z wpisami w danej kategorii.',
	'search_index_newctitle'   => 'Indeksuj t± kategoriê',
	'search_index_newcdesc'    => 'Wybierz \'Nie\' tylko wtedy, kiedy nie chcesz, aby odwiedzaj±cy przeszukiwali t± kategoriê.',
	'search_index_editcheader' => 'Indeksuj kategoriê',

	'order' => 'Porz±dek sortowania',
	'order_desc' => 'Kategorie z ni¿szym porz±dkiem sortowania pojawi± siê wy¿ej na li¶cie. Je¶li zachowasz wszystkie liczby takie same, kategorie bêd± posortowane alfabetycznie.',
	'public' => 'Kategoria publiczna',
	'public_desc' => 'Je¶li wybierzesz \'Nie\', ta kategoria bêdzie widoczna jedynie dla zarejestrowanych u¿ytkowników (dotyczy tylko \'¿ywych stron\').',
	'hidden' => 'Kategoria ukryta',
	'hidden_desc' => 'Je¶li wybierzesz \'Tak\', ta kategoria bêdzie ukryta na li¶cie archiwum (dotyczy tylko \'¿ywych stron\').',

);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "Wy¶lij wpis",
	'preview_entry' => "Podgl±d wpisu",

	'first' => 'pierwsza',
	'last' => 'ostatnia',
	'next' => 'nastêpna',
	'previous' => 'poprzednia',

	'jumptopage' => 'skocz do strony (%num%)',
	'filteron' => 'filtr na (%name%)',
	'filteroff' => 'wy³±cz filtr',
	'title' => 'Tytu³',
	'subtitle' => 'Podtytu³',
	'introduction' => 'Wstêp',
	'body' => 'Tre¶æ',
	'publish_on' => 'Opublikuj',
	'status' => 'Status',
	'post_status' => 'Post Status',
	'category' => 'Kategoria',
	'select_multi_cats' => '(Ctrl-click aby wybraæ wiêcej kategorii)',
	'last_edited' => "Ostatnio edytowany",
	'created_on' => "Utworzony",
	'date' => 'Data',
	'author' => 'Autor',
	'code' => 'Kod',
	'comm' => '# Koment',
	'track' => '# ¦ladów',
	'name' => 'Nazwa',
	'allow_comments' => 'Komentarze dozwolone',

	'delete_entry' => "Usuñ wpis",
	'delete_entry_desc' => "Usuñ ten wpis i powi±zane komentarze ",
	'delete_one_confirm' => "Czy jeste¶ pewien, ¿e chcesz usun±æ ten wpis?",
	'delete_multiple_confirm' => "Czy jeste¶ pewien, ¿e chcesz usun±æ te wpisy?",

	'convert_lb' => 'Konwertuj znaki koñca wiersza',
	'always_off' => '(Zawsze wy³±czone kiedy w trybie WYSIWYG)',
	'be_careful' => '(B±d¼ z tym ostro¿ny!)',
	'edit_comments' => 'Edycja komentarzy',
	'edit_comments_desc' => 'Edycja komentarzy, które zosta³y dodane do tego wpisu',
	'edit_comment' => 'Edytuj komentarza',
	'delete_comment' => 'Usuñ komentarz',
	'edit_trackback' => 'Edytuj ¶lad (trackback)',
	'delete_trackback' => 'Usuñ ¶lad (trackback)',
	'block_single' => 'Zablokuj IP %s',
	'block_range' => 'Zablokuj zakres IP %s',
	'unblock_single' => 'Odblokuj IP %s',
	'unblock_range' => 'Odblokuj zakres IP %s',
	'trackback' => 'Ping ¶ladu (trackback)',
	'trackback_desc' => 'Wy¶y³a ping ¶ladu (tracback) do poni¿szych adresów URL. Aby wys³aæ do wielu adresów, umie¶æ ka¿dy z nich w osobnej linii.',
	'keywords' => 'S³owa kluczowe',
	'keywords_desc' => 'U¿yj tego do ustawienia s³ów kluczowych, które mog± byæ u¿yte do wyszukiwania tego wpisu lub set the non-crufty url for this entry.',
	'vialink' => "Link do ¼ród³a",
	'viatitle' => "Tytu³ ¼ród³a",
	'via_desc' => 'U¿yj tego do stworzenia linku do ¼ród³a tego wpisu.',
	'entry_catnopost' => 'Nie mo¿esz dodawaæ wpisów w tej kategorii: \'%s\'.',
	'entry_saved_ok' => 'Twój wpis \'%s\' zosta³ zapisany.',
	'entry_ping_sent' => 'Ping ¶ladu (trackback) zosta³ wys³any do \'%s\'.',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => 'Zaznacz wszystko',
	'c_none' => 'Odznacz wszystko',
	'choose' => '- wybierz opcjê -',
	'publish' => 'Ustaw status na \'publikuj\'',
	'hold' => 'Ustaw status na \'wstrzymany\'',
	'delete' => 'Usuñ je',
	'generate' => 'Publikuj i generuj',

	'with_checked_entries' => "Zaznaczone wpisy:",
	'with_checked_files' => "Zaznaczone plik:",
	'with_checked_templates' => 'Zaznaczone szablony:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => 'nie mo¿na otworzyæ katalogu, sprawd¼ uprawnienia.',
	'path_read' => 'nie mo¿na czytaæ katalogu, sprawd¼ uprawnienia.',
	'path_write' => 'nie mo¿na zapisaæ katalogu, sprawd¼ uprawnienia.',

	'file_open' => 'nie mo¿na otworzyæ pliku, sprawd¼ uprawnienia.',
	'file_read' => 'nie mo¿na czytaæ pliku, sprawd¼ uprawnienia.',
	'file_write' => 'nie mo¿na zapisaæ, sprawd¼ uprawnienia.',
);


//		Notices			\\
$lang['notice'] = array (
	'comment_saved' => "Komentarz zosta³ zapisany.",
	'comment_deleted' => "Komentarz zosta³ usuniêty.",
	'comment_none' => "Ten wpis nie ma komentarzy.",
	'trackback_saved' => "¦lad (trackback) zosta³ zapisany.",
	'trackback_deleted' => "¦lad (trackback) zosta³ usuniêty.",
	'trackback_none' => "Ten wpis nie ma ¶ladów (trackbacks).",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => 'Oddaj g³os \'%val%\' na ten wpis',
	'good' => 'Dobry',
	'bad' => 'Z³y',
	'already' => 'Ju¿ g³osowa³e¶(a¶) na ten wpis lub w tej ankiecie',
	'register' => 'Twój g³os \'%val%\' zosta³ zarejestrowany',
);


$lang['comment'] = array (
	'register' => 'Twój komentarz zosta³ zapisany.',
	'preview' => 'Przegl±dasz w³a¶nie swój komentarz. U¿yj przycisku \'Wy¶lij komentarz\' aby go zapisaæ.',
	'duplicate' => 'Twój komentarz nie zosta³ zapisany, poniewa¿ wygl±da na to, ¿e jest on duplikatem poprzedniego',
	'no_name' => 'Powiniene¶ wpisaæ swoje imiê (lub nick) w polu \'imiê\'. U¿yj przycisku \'Wy¶lij komentarz\' aby zapisaæ komentarz.',
	'no_comment' => 'Powiniene¶ wpisaæ co¶ w polu \'Komentarz\'. U¿yj przycisku \'Wy¶lij komentarz\' aby zapisaæ komentarz.',
	'too_many_hrefs' => 'Maksymalna liczba linków zosta³a przekroczona. Przestañ spamowaæ.',
    'email_subject' => '[Komentarz] Odp:',
);


$lang['comments_text'] = array (
	'0' => "Brak komentarzy",
	'1' => "%num% komentarz",
	'2' => "%num% komentarzy",
);

$lang['trackbacks_text'] = array (
	'0' => "Brak ¶ladów (trackbacks)",
	'1' => "%num% ¶lad (trackback)",
	'2' => "%num% ¶lady (trackbacks)",
);

$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "Archiwum",
	'next_archive' => "Nastêpne",
	'previous_archive' => "Poprzednie",
	'last_comments' => "Ostatnie komentarze",
	'last_referrers' => "Ostatnie strony odsy³aj±ce",
	'calendar' => "Kalendarz",
	'links' => "Linki",
	'xml_feed' => "Kana³ RSS (RSS 1.0)",
	'atom_feed' => "Kana³ Atom",
	'powered_by' => "Powered by ",
	'blog_name' => "Nazwa webloga",
	'title' => "Tytu³",
	'excerpt' => "Fragment",
	'name' => "Imiê",
	'email' => "Email",
	'url' => "Adres URL",
	'date' => "Data",
	'comment' => "Komentarz",
	'ip' => "Adres IP",
	'yes' => "Tak",
	'no' => "Nie",
	'emoticons' => "Emotikony",
	'emoticons_reference' => "Otwórz opisy emotikonów",
	'textile' => "Textile",
	'textile_reference' => "Otwórz opis Textile",
	'post_comment' => "Wy¶lij komentarz",
	'preview_comment' => "Podgl±d komentarza",
	'remember_info' => "Zapamiêtaæ informacje o Tobie?",
	'notify' => "Powiadamianie",
	'notify_yes' => "Tak, wy¶lij mi email kiedy kto¶ odpowie.",
	'register' => "Zarejestruj siê / Zaloguj siê",
	'disclaimer' => "<b>Uwaga:</b> Wszystkie tagi HTM poza &lt;b&gt; i &lt;i&gt; zostan± usuniête z Twojego komentarza. Mo¿esz dodawaæ linki wpisuj±c po prostu adres URL lub email.",
	'search_title' => "Wyniki wyszukiwania",
	'search' => "Szukaj!",
	'nomatches' => "Nie znaleziono nic dla s³ów '%name%'. Spróbuj czego¶ innego.",
	'matches' => "Znalezione dla s³ów '%name%':",
	'about' => "Informacje",
	'stuff' => "Ró¿ne",
	'linkdump' => "Na skróty",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Edycja pól u¿ytkownika',
	'edit' => 'Edytuj',
	'create' => 'Utwórz',

	'dispname' => 'Nazwa wy¶wietlana',
	'intname' => 'Nazwa wewnêtrzna',
	'intname_desc' => 'Nazwa wewnêtrzna to nazwa tej pozycji, u¿ywana do jej wy¶wietlania w szablonach Pivota.',
	'size' => 'Rozmiar',
	'rows' => 'Wiersze',
	'cols' => 'Kolumny',
	'maxlen' => 'Maksymalna d³ugo¶æ',
	'minlevel' => 'Minimalny poziom u¿ytkownika',
	'filter' => 'Filtruj',
	'filter_desc' => 'Fitruj±c t± pozycjê, ograniczasz wpisywan± w tym polu tre¶æ',
	'no_filter' => 'Nic',
	'del_title' => 'Potwierd¼ usuniêcie',
	'del_desc' => 'Usuniêcie tego pola u¿ytkownika (<b>%s</b>) spowoduje, ¿e dane, które u¿ytkownik w nim przechowuje, zostan± utracone. Je¶li pole to wystêpuje w szablonach, nic nie zostanie wy¶wietlone.',

	'already' => 'Nazwa jest ju¿ u¿ywana',
	'int' => 'Nazwa wewnêtrzna musi mieæ minimum 3 znaki',
	'short_disp' => 'Nazwa wy¶wietlana musi mieæ minimum 3 znaki',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => 'Zak³adki',
	'bm_add' => 'Dodawanie zak³adki',
	'bm_withlink' => 'Pivot » New',
	'bm_withlink_desc' => 'Ta zak³adka otwiera nowe okno ze stron± \'Nowy wpis\', która zawiera link do strony, na której zosta³a otwarta zak³adka.',
	'bm_nolink' => 'Pivot » New',
	'bm_nolink_desc' => 'Ta zak³adka otwiera nowe okno z pust± stron± \'Nowy wpis\'.',

	'bookmarklets_info' => 'Mo¿esz u¿ywaæ zak³adek do szybkiego tworzenia nowych wpisów w Pivocie. Aby dodaæ zak³adkê do Twojej przegl±darki, u¿yj jednej z nastêpuj±cych opcji: (teksty mog± siê ró¿niæ w zale¿no¶ci od przegl±darki, której u¿ywasz)',
	'bookmarklets_info_1' => 'Klikij i przeci±gnij zak³adkê na pasek \'Linki\' lub przycisk \'Ulubione\'.',
	'bookmarklets_info_2' => 'Kliknij prawym przyciskiem myszy na zak³adce i \'Dodaj do ulubionych\'.',
);

// Accessibility - These are used for form fields, labels, fieldsets etc.
// for Web Content Accessibility Guidelines & 508 compliancy issues.
// see: http://bobby.watchfire.com/bobby/html/en/index.jsp
// JM =*=*= 2004/10/04
// 2004/11/25 =*=*= JM - minor correction for tim
$lang['accessibility'] = array(
	'search_idname'      => 'szukaj',
	'search_formname'    => 'Wyszukaj s³owa u¿yte we wpisach na tej stronie',
	'search_fldname'     => 'Wpisz s³owo(a) do wyszukania:',
	'search_placeholder' => 'Podaj kryteria wyszukiwania',

	'calendar_summary'   => 'Ta tabela przedstawia kalendarz z linkami na datach z wpisami.',
	'calendar_noscript'  => 'Kalendarz to jeden ze sposobów dostêpu do wpisów w tym weblogu.',
	/*
	2-letter language code, used to designate the principal language used on the site
	see: http://www.oasis-open.org/cover/iso639a.html
	*/

	'lang' => $langname,
) ;


$lang['snippets_text'] = array (
    'word_plural'     => 's³owa',
    'image_single'    => 'obraz',
    'image_plural'    => 'obrazy',
    'download_single' => 'plik',
    'download_plural' => 'pliki',
);

$lang['trackback'] = array (
    'register' => 'Twój ¶lad (trackback) zosta³ zapisany.',
    'duplicate' => 'Twój ¶lad (trackback) nie zosta³ zapisany, poniewa¿ wygl±da na duplikat poprzedniego.',
    'too_many_hrefs' => 'Maksymalna liczna linków zosta³a przekroczona. Przestañ spamowaæ.',
    'noid'      => 'Brak ID ¶ladu (trackback) (tb_id)',
    'nourl'     => 'Brak adresu URL (url)',
    'tracked'   => '¦ledzony',
    'email_subject' => '[¦lad] Odp:',
);

$lang['commentuser'] = array (
    'title'             => 'Login u¿ytkownika',
    'header'            => 'Zaloguj siê jako zarejestrowany u¿ytkownik',
    'logout'            => 'Wyloguj siê.',
    'loggedout'         => 'Wylogowano',
    'login'             => 'Login',
    'loggedin'          => 'Zalogowany',
    'loggedinas'        => 'Zalogowany jako',
    'pass_forgot'       => 'Zapomia³e¶ has³a?',
    'register_new'      => 'Zarejestruj siê.',
    'register'          => 'Zarejestruj siê jako go¶æ',
    'register_info'     => 'Proszê wype³niæ poni¿sze pola. <strong>Nale¿y podaæ poprawny adres email</strong>, poniewa¿ zostanie na niego wys³any email weryfikuj±cy jego poprawno¶æ.',
    'pass_note'         => 'Uwaga: Administrator tej strony mo¿e zobaczyæ Twoje has³o. <em>Nie u¿ywaj</em> takiego samego has³a, jak do innych stron lub kont!',
    'show_email'        => 'Pokazuj mój adres email w komentarzach',
    'notify'            => 'Powiadamiaj mnie o nowych wpisach',
    'def_notify'        => 'Domy¶lnie powiadamiaj o odpowiedziach',
    'register'          => 'Zarejestruj siê',
    'pass_invalid'      => 'Nieprawid³owe has³o',
    'nouser'            => 'Podany u¿ytkownik nie istnieje',
    'change_info'       => 'Tutaj mo¿esz zmieniæ informacje o sobie.',
    'pref_edit'         => 'Edytuj swoje ustawienia',
    'pref_change'       => 'Zmieñ ustawienia',
    'options'           => 'Opcje',
    'user_exists'       => 'U¿ytkownik ju¿ ustnieje. Wybierz proszê inn± nazwê..',
    'email_note'        => 'Musisz podaæ swój adres email, poniewa¿ inaczej nie bêdzie mo¿liwa weryfikacja Twojego konta. Zawsze mo¿esz wy³±czyæ pokazywanie Twojego adresu innym u¿ytkownikom.',
    'stored'            => 'Zmiany zosta³y zapisane',
    'verified'          => 'Twoje konto zosta³o zweryfikowane. Proszê siê zalogowaæ.',
    'not_verified'      => 'Kod wygl±da na niepoprawny. Weryfikacja zakoñczona niepowodzeniem.',
    'pass_sent'         => 'Twoje has³o zosta³o wys³ane na podany adres email.',
    'user_pass_nomatch' => 'Nazwa u¿ytkownika i adres email nie pasuj± do siebie.',
    'pass_send'         => 'Wy¶lij has³o',
    'pass_send_desc'    => 'Je¶li zapomnia³e¶ has³a, wpisz swoj± nazwê u¿ytkownika (login) i adres email. Pivot wy¶le Twoje has³o na podany adres email. ',
    'oops'              => 'Oj',
    'back'              => 'Wróæ do',
    'back_login'        => 'Wróæ do logowania',
    'forgotten_pass_mail' => "Twoje zapomniane has³o dla konta '%name%': \n\n%pass%\n\nProszê, nie zapomnij go znowu!\n\nAby zalogowaæ siê kliknij na poni¿szy link:\n %link%"
);

// A little tool to help you check if the file is correct..
if (count(get_included_files())<2) {

	$groups = count($lang);
	$total = 0;
	foreach ($lang as $langgroup) {
		$total += count($langgroup);
	}
	echo "<h2>Plik jêzykowy jest niepoprawny!</h2>";
	echo "This file contains $groups groups and a total of $total labels.";

}

?>
