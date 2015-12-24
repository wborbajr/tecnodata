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

	'minlevel' => 'Nie masz dost�pu do tej cz�sci Pivota',
	'email' => 'Email',
	'url' => 'URL',
	'further_options' => "Wi�cej opcji",
	'basic_view' => "Widok prosty",
	'basic_view_desc' => "Zobacz tylko najcz�ciej u�ywane pola",
	'extended_view' => "Widok rozszerzony",
	'extended_view_desc' => "Zobacz wszystkie edytowalne pola",
	'select' => "Wybierz",
	'cancel' => "Anuluj",
	'delete' => 'Usu�',
	'welcome' => "Witaj w %build%.",
	'write' => "Zapisz",
	'write_open_error' => "B��d zapisu. Nie mo�na otworzy� pliku do zapisu",
	'write_write_error' => "B��d zapisu. Nie mo�na zapisa� pliku",
	'done' => "Gotowe!",
	'shortcuts' => "Skr�ty",
	'cantdelete' => "Nie mo�esz usun�� wpisu %title%!",
	'cantdothat' => "Nie mo�esz zrobi� tego z wpisem %title%!",
	'cantdeletelast' => "Nie mo�esz usun�� ostatniego wpisu. Musisz najpierw doda� nowy wpis, a dopiero potem usun�� ten wpis",
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
	'zero', 'jeden', 'dwa', 'trzy', 'cztery', 'pi��', 'sze��', 'siedem', 'osiem', 'dziewi��', 'dziesi��', 'jedena�cie', 'dwana�cie', 'trzyna�cie', 'czterna�cie', 'pi�tna�cie', 'szesna�cie'
);


$lang['months'] = array (
	'stycze�', 'luty', 'marzec', 'kwiecie�', 'maj', 'czerwiec', 'lipiec', 'sierpie�', 'wrzesie�', 'pa�dziernik', 'listopad', 'grudzie�'
);


$lang['months_abbr'] = array (
	'sty', 'lut', 'mar', 'kwi', 'maj', 'czer', 'lip', 'sier', 'wrz', 'paz', 'lis', 'gru'
);


$lang['days'] = array (
	'niedziela', 'poniedzia�ek', 'wtorek', '�roda', 'czwartek', 'pi�tek', 'sobota'
);


$lang['days_abbr'] = array (
	'nie', 'pon', 'wt', 'sr', 'czw', 'pia', 'sob'
);


$lang['days_calendar'] = array (
	'N', 'P', 'W', 'S', 'C', 'P', 'S'
);


$lang['datetime_words'] = array (
	'Rok', 'Miesi�c', 'Tydzie�', 'Dzie�', 'Godzina', 'Minuta', 'Sekunda'	//the actual words for them.
);


//		Login Page		\\
$lang['login'] = array (
	'title' => 'Login',
	'name' => 'Nazwa u�ytkownika',
	'pass' => 'Has�o',
	'remember' => 'Zapami�taj',
	'rchoice' => array (
		'0' => 'Nic',
		'1' => 'Nazw� u�ytkownika i has�o',
		'2' => '�e chc� pozosta� zalogowany'
	),
	'delete_cookies_desc' => 'Je�li jeste� pewien, �e u�ywasz prawid�owej nazwy u�ytkownika i has�a, ale<br />masz problemy z zalogowaniem si�, mo�esz spr�bowa� usun�� cookies z tej domeny:',
	'delete_cookies' => 'Usu� cookies',
	'retry' => 'Nieprawid�owa nazwa u�ytkownika lub has�o',
	'banned' => 'Nie uda�o Ci si� uzyska� dost�pu w 10 pr�bach. W wyniku tego Tw�j adres IP zosta� zablogowany na 12 godzin.',

);


//		Main Bar		\\
	$lang['userbar'] = array (
	'main' => 'Przegl�d',
	'entries' => 'Wpisy',
	'submit' => 'Nowy wpis',
	'comments' => 'Komentarze',
	'trackbacks' => '�lady (trackbacks)',
	'modify' => 'Modyfikuj wpisy',
	'userinfo' => 'Moje informacje',
	'u_settings' => 'Moje ustawienia',
	'u_marklet' => 'Zak�adki',
	'files' => 'Zarz�dzaj mediami',
	'upload' => 'Upload',
	'stats' => 'Statystyki',
	'admin' => 'Administracja',

	'main_title' => 'Og�lny przegl�d Pivota',
	'entries_title' => 'Przegl�d wpis�w',
	'submit_title' => 'Napisz i opublikuj nowy wpis',
	'comments_title' => 'Edytuj lub usu� komentarze',
	'trackbacks_title' => 'Edytuj lub usu� �lady (trackbacks)',
	'modify_title' => 'Modyfikuj wpis',
	'userinfo_title' => 'Zobacz moje informacje osobiste',
	'u_settings_title' => 'Edytuj moje ustawienia osobiste',
	'u_marklet_title' => 'Utw�rz zak�adki',
	'files_title' => 'Zarz�dzaj i wysy�aj media',
	'upload_title' => 'Wy�lij pliki',
	'uploaded_success' => 'Plik zosta� wys�any',
	'stats_title' => 'Zobacz logi i statystyki.',
	'updatetitles_title' => 'Zobacz logi i statystyki.',
	'admin_title' => 'Przegl�d administracji',
	'recent_entries' => 'Ostatnie wpisy',
	'recent_comments' => 'Ostatnie komentarze',
);


$lang['adminbar'] = array (
	//		Admin Bar		\\
	//'trebuild' => 'Rebuild all Files', rolled into maintenance
	'seeusers' => 'U�ytkownicy',
	'seeconfig' => 'Konfiguracja',
	'filemappings' => 'Mapowanie plik�w',
	'templates' => 'Szablony',
	'maintenance' => 'Utrzymanie',
	'regen' => 'Przebuduj wszystkie pliki',
	'blogs' => 'Weblogi',
	'categories' => 'Kategorie',
	'verifydb' => 'Zweryfikuj baz� danych',
	'buildindex' => 'Przebuduj indeks',
	'buildsearchindex' => 'Przebuduj indeks wyszukiwania',
	'buildfrontpage' => 'Przebuduj stron�(y) g�own�(e)',
	'sendping' => 'Wy�lij pingi',


	'backup' => 'Kopia',
	'description' => 'Opis',
	'conversion' => 'Konwersja',
	'seeusers_title' => 'Tworzenie, edycja i usuwanie u�ytkownik�w',
	'userfields' => 'Pola informacji o u�ytkowniku',
	'userfields_title' => 'Tworzenie, edycja i usuwanie p�l informacji o u�ytkowniku',
	'seeconfig_title' => 'Edycja pliku konfiguracyjnego',
	'filemappings_title' => 'Przegl�d plik�w, kt�re s� tworzone dla Twojej strony i dla poszczeg�lnych Weblog�w',
	'templates_title' => 'Tworzenie, edycja i usuwanie szablon�w',
	'maintenance_title' => 'Wykonanie rutynowej obs�ugi plik�w Pivota',
	'regen_title' => 'Przebudowanie plik�w i archiw�w, kt�re generuje Pivot',
	'blogs_title' => 'Tworzenie, edycja i usuwanie Weblog�w',
	'blogs_edit_title' => 'Edytuj ustawienia Webloga dla ',
	'categories_title' => 'Tworzenie, edycja i usuwanie kategorii',
	'verifydb_title' => 'Sprawdzanie integralno�ci bazy danych',
	'buildindex_title' => 'Przebudowanie indeksu bazy danych',
	'buildsearchindex_title' => 'Przebudowanie indeks wyszukiwania w celu umo�liwienia wyszukiwania we wpisach',
	'buildfrontpage_title' => 'Przebudowanie strony g�ownej, archiwum ostatnich wpis�w i plik�w RSS dla ka�dego webloga.',
	'backup_title' => 'Tworzenie kopii Twoich wpis�w',
	'backup_config' => 'Kopia plik�w konfiguracyjnych',
	'backup_config_desc' => 'Ta opcja pozwala na �ci�gni�cie pliku zip zawieraj�cego Twoje pliki konfiguracyjne',
	'ipblocks' => 'Blokady IP',
	'ipblocks_title' => 'Przegl�danie i edycja zablokowanych adres�w IP.',
	'ipblocks_stored' => 'Adresy IP zosta�y zachowane.',
	'ipblocks_store' => 'Zachowaj te adresy IP',
	'ignoreddomains' => 'Ignorowane domeny',
	'ignoreddomains_title' => 'Przegl�danie i edycja igonorowanych domen.',
	'ignoreddomains_stored' => 'Ignorowane domeny zosta�y zapisane.',
	'ignoreddomains_store' => 'Zachowaj ignorowane domeny',
	'fileexplore' => 'Eksplorator plik�w',
	'fileexplore_title' => 'Przegl�danie plik�w (tekstowych i z danymi)',
	'sendping_title' => 'Send Pings to Update Trackers.',
	'buildindex_start' => 'Budowanie indeksu. Mo�e to potrwa� chwil�, wi�c prosz� nie przerywa�.',
	'buildsearchindex_start' => 'Budowanie indeksu wyszukiwania. Mo�e to potrwa� chwil�, wi�c prosz� nie przerywa�.',
	'buildindex_finished' => 'Gotowe! Tworzenie indeksy zaj�o %num% sekund',

	'filemappings_desc' => 'Poni�ej znajduje si� przegl�d ka�dego z weblog�w utworzonych w tej instalacji Pivota, w��cznie z informacj� o plikach utworzonych przez Pivota i szablonami, kt�re s� wykorzystywane do ich stworzenia. Mo�e to by� przydatne do znalezienia problemu przy tworzeniu tych plik�w.',

	'debug' => 'Otw�rz okno debugera',

	'latest_pivot_news' => "Najnowsze wiadomo�ci Pivota",
	'remove_setup_header' => "Wykryto skrypt instalacyjny Pivota",
	'remove_setup' => "Skrypt instalacyjny Pivota 'pivot-setup.php' wci�� znajduje si� w katalogu g��wnym. Powiniene� wiedzie�, �e jest to potencjalne zagro�enie bezpiecze�stwa. Radzimy usun�� go lub zmieni� jego nazw� tak, aby nie by� mo�liwy do uruchomienia przez osoby maj�ce z�e zamiary.",

);


$lang['templates'] = array (
	'rollback' => 'Rollback',
	'create_template' => 'Stw�rz szablon',
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
	'standard_template' => 'Zwyk�y szablon',
	'feed_template' => 'Szablon kana�u',
	'css_template' => 'Plik CSS',
	'txt_template' => 'Plik tekstowy',
	'php_template' => 'Plik PHP',
);


//		Admin			\\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar']['xxx_title'] ones
$lang['admin'] = array (
	'seeusers' => 'Tworzenie, edycja i usuwanie u�ytkownik�w',
	'seeconfig' => 'Edycja pliku konfiguracyjnego',
	'templates' => 'Tworzenie, edycja i usuwanie szablon�w',
	'maintenance' => 'Rutynowe czynno�ci na plikach Pivota, takie jak \'Przebuduj pliki\', \'Zweryfikuj baz� danych\', \'Przebuduj indeks\' i \'Kopia\'.',
	'regen' => 'Przebudowanie wszystkich stron generowanych przez Pivota',
	'blogs' => 'Tworzenie, edycja i usuwanie Weblog�w publikowanych przez Pivota',
);


//		Maintenace		\\
$lang['maint'] = array (
	'title' => 'Utrzymanie',
	'gen_arc_title' => 'Generowanie archiwum', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => 'Regenrowanie wszytkich archiw�w', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'Weryfikacja plik�w XML', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'Weryfikacja (i naprawa, je�li konieczna) integralno�ci plik�w XML', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => 'Kopia',
	'backup_text' => 'Tworzenie kopii wszystkich najwa�niejszych plik�w Pivota',
);


//		Stats and referers		\\
$lang['stats'] = array (
	'show_last' => "Poka� ostatnie",
	'20ref' => "20 stron odsy�aj�cych",
	'50ref' => "50 stron odsy�aj�cych",
	'allref' => "wszystkie strony odsy�aj�ce",
	'showunblocked' => "tylko pozycje niezablokowane",
	'showall' => "pozycje zablokowane i niezablokowane",
	'updateref' => "Aktualizuj tytu�y stron odsy�aj�cych",
	'hostaddress' => 'Adres hosta (adres IP)',
	'whichpage' => 'Kt�ra strona',

	'getting' => 'Pobieranie nowych tytu��w',
	'awhile' => 'To mo�e zaj�� chwil�, prosz� nie przerywa�.',
	'firstpass' => 'Pierwszy przebieg',
	'secondpass' => 'Drugi przebieg',
	'nowuptodate' => 'Tytu�y stron odsy�aj�cych zosta�y zaktualizowane.',
	'finished' => 'Zrobione',
);


//		User Info		\\
	$lang['userinfo'] = array (
	'editfields' => 'Edycja p�l u�ytkownika',
	'desc_editfields' => 'Edycja p�l, kt�re u�ytkownik mo�e u�yc do opisania siebie',
	'username' => 'Nazwa u�ytkownika',
	'pass1' => 'Has�o',
	'pass2' => 'Has�o (potwierdzenie)',
	'email' => 'Email',
	'nickname' => 'Nick',
	'userlevel' => 'Poziom u�ytownika',
	'userlevel_desc' => 'Poziom u�ytkownika okre�la, jakie dzia�ania u�ytkownik mo�e podejmowa� w Pivocie.',
	'language' => 'J�zyk',
	'lastlogin' => 'Ostatnie logowanie',
	'edituser' => 'Edycja u�ytkownika',  //the link to.. well, edit the user (also the title)
	'edituserinfo' => 'Edycja informacji o u�ytkowniku',
	'selfreg' => 'Samodzielna rejestracja',
	'newuser' => 'Tworzenie nowego u�ytkownika',
	'desc_newuser' => 'Tworzenie nowego konta w Pivocie, pozwalaj�cego na pisanie notek w Weblogu.',
	'newuser_button' => 'Stw�rz',
	'edituser_button' => 'Zmie�',
	'pass_too_short' => 'Has�o musi mie� conajmniej 4 znaki.',
	'pass_equal_name' => 'Has�o nie mo�e by� takie samo, jak nazwa u�ytkownika.',
	'pass_dont_match' => 'Has�a nie s� takie same',
	'username_in_use' => 'Nazwa u�ytkownika jest ju� zaj�ta',
	'username_too_short' => 'Nazwa u�ytkownika musi mie� conajmniej 3 znaki',
	'username_not_valid' => 'Nazwa u�ytkownika mo�e sk�ada� si� tylko ze znak�w alfanumerycznych (A-Z, 0-9) i podkre�lenia (_).',
	'not_good_email' => 'To nie jest prawid�owy adres e-mail',
	'c_admin_title' => 'Potwierd� utworzenie konta administratora',
	'c_admin_message' => ''.$lang['userlevels']['1'].' ma pe�ny dost�p do Pivota, mo�e edytowa� wszystkie wpisy, komentarze i zmienia� ustawienia. Jeste� pewien, �e chcesz zrobi� %s '.$lang['userlevels']['1'].'?',
);


//		Config Page		\\
	$lang['config'] = array (
	'save' => 'Zapisz ustawienia',

	'sitename' => 'Nazwa strony',
	'defaultlanguage' => 'Domy�lny j�zyk',
	'defaultencoding' => 'U�yj kodowania',
	'defaultencoding_desc' => 'Definiuje u�ywane kodowanie (np. utf-8 lub iso-8859-2). Powiniene� zostawi� to pole puste, chyba �e wiesz co robisz. Je�li pozostawisz je puste, zostanie u�yte najodpowiedniejsze kodowanie na podstawie ustawie� z pliku j�zykowego.',
	'defaulttheme' => 'Temat',
	'selfreg' => 'Zezwalaj na rejestracj� u�ytkownik�w',
	'selfreg_desc' => 'Ustawnienie tej opcji na \'Tak\' pozwoli odwiedzaj�cym na rejestrowanie si� jako zwyk�y u�ytkownik i tworzenie wpis�w. (Nie ma to nic wsp�lnego z "komentuj�cym u�ytkownikiem".)',
	'siteurl' => 'Adres URL strony',
	'header_fileinfo' => 'Informacje o pliku',
	'localpath' => '�cie�ka lokalna',
	'debug_options' => 'Opcje debugowania',
	'debug' => 'Tryb debugowania',
	'debug_desc' => 'Pokazuje losowe informacje debugowania, tu i tam...',
	'log' => 'Logowanie',
	'log_desc' => 'Tworzy plik z logami r�nych zdarze�',

	'unlink' => 'Unlink Files',
	'unlink_desc' => 'Niekt�re serwery, na kt�rych jest w��czony safe_mode, mog� wymaga� w��czenia tej opcji. Na wi�kszo�ci serwer�w ta opcja nie ma �adnego znaczenia',
	'chmod' => 'Zmie� uprawnienia plik�w (chmod) na',
	'chmod_desc' => 'Niekt�re serwery wymagaj�, aby tworzone pliki mia�y ustawione uprawnienia (chmod) w specyficzny spos�b. Najcze�ciej spotykanymi warto�ciami s� \'0644\' i \'0755\'. Nie zmieniaj tego, chyba �e wiesz co robisz.',
	'header_uploads' => 'Ustawienia wysy�ania plik�w',
	'upload_path' => '�cie�ka dla wysy�anych plik�w',
	'upload_accept' => 'Akceptowane typy',
	'upload_extension' => 'Domy�lne rozszerzenie',
	'upload_save_mode' => 'Nadpisywanie',
	'make_safe' => 'Wyczy�� nazw� pliku',
	'c_upload_save_mode' => 'Zmie� (zwi�ksz) nazw� pliku',
	'max_filesize' => 'Maksymalny rozmiar pliku',
	'header_datetime' => 'Data/czas',
	'timeoffset_unit' => 'Jednostka r�nicy czasu',
	'timeoffset' => 'R�nica czasu',
	'header_extra' => 'R�ne ustawienia',
	'wysiwyg' => 'U�ywaj edytora WYSIWYG',
	'wysiwyg_desc' => 'Okre�la, czt edytor WYSIWYG jest domy�lnie w��czony. U�ytkownicy mog� to zmienia� w ich osobistych ustawieniach (\'Moje informacje\').',
	'basic_view' => 'U�ywaj prostego widoku',
	'basic_view_desc' => 'Okre�la, czy strona \'Nowy wpis\' otwiera si� w widoku prostym czy rozszerzonym.',
	'def_text_processing' => 'Domy�lne przetwarzanie tekstu',
	'text_processing' => 'Przetwarzanie tekstu',
	'text_processing_desc' => 'Okre�la domy�lny spos�b przetwarzania tekstu, je�li u�ytkownik nie u�ywa edytora WYSIWYG. \'Konwertuj znaki ko�ca wiersza\' nie robi nic poza zamian� znak�w ko�ca wiersza na tagi &lt;br&gt;. <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> jest pot�nym, ale �atwym do opanowania systemem znacznik�w.',
	'none' => '�adne',
	'convert_br' => 'Konwertuj znaki ko�ca wiersza na &lt;br /&gt;',
	'textile' => 'Textile',
	'markdown' => 'Markdown',
	'markdown_smartypants' => 'Markdown and Smartypants',

	'allowed_cats' => 'Dozwolone kategorie',
	'allowed_cats_desc' => 'Ten u�ytkownik mo�e dodawa� wpisy tylko w wybranych kategoriach',
	'delete_user' => "Usu� u�ytkownika",
	'delete_user_desc' => "Mo�esz usun�� tego u�ytkownika. Wszystkie jego wpisy pozostan� nienaruszone, ale nie b�dzie on ju� w stanie si� zalogowa�",
	'delete_user_confirm' => 'Za chwil� usuniesz dost�p u�ytkownikowi %s. Jeste� pewien, �e chcesz to zrobi�?',

	'setup_ping' => 'Ustawienia ping�w',
	'ping_use' => 'Wysy�aj informacje do tracker�w',
	'ping_use_desc' => 'To ustawienie okre�la, czy trackery takie jak weblogs.com b�d� automatycznie powiadamiane przez Pivota w momencie, kiedy zamie�cisz nowy wpis. Us�ugi takie jak blogrolling.com bazuj� na tych informacjach',
	'ping_urls' => 'Adresy URL do pingowania',
	'ping_urls_desc' => 'Mo�esz wprowadzi� wiele adres�w, do kt�rych maj� by� wysy�ane informacje. Nie dodawaj przedrostka http://, poniewa� nie b�dzie to dzia�a�. Umie�� ka�dy serwer w nowej linii. <br />Wybrane serwery, do kt�re mo�esz pingowa�:<br /><b>rpc.weblogs.com/RPC2</b> (jeden z najcz�ciej u�ywanych)<br /><b>pivotlog.net/pinger</b> (serwer pivotlog, jeszcze nie dzia�a)<br /><b>rcs.datashed.net/RPC2</b> (euro.weblogs.com)<br /><b>ping.blo.gs</b> (blo.gs)<br />',

	'setup_tb' => 'Ustawienia �ledzenia',
	'tb_email' => 'Email',
	'tb_email_desc' => 'Je�li ustawione, na podany adres zostanie wys�any email w momencie, kiedy �lad (trackback) zostanie dodany.',

	'new_window' => 'Otwieraj linki w nowym oknie',
	'emoticons' => 'U�ywaj emotikon',
	'javascript_email' => 'Kodowa� adres email?',
	'new_window_desc' => 'Okre�la czy wszystkie linki u�yte we wpisach b�d� otwiera� si� w nowym oknie przegl�darki.',

	'mod_rewrite' => 'U�ywaj Mod_rewrite',
	'mod_rewrite_desc' => 'Je�li u�ywasz modu�u Apache Mod_rewrite, Pivot b�dzie tworzy� adresy URL w stylu www.mojastrona.com/archive/2003/05/30/ladna_pogoda, zamiast www.mojastrona.com/pivot/entry.php?id=134. Nie wszystkie serwery to obs�uguj�, wi�c przeczytaj prosz� rozdzia� manuala po�wi�cony temu zagadnieniu.',
	'mod_rewrite_1' => 'Tak, w stylu /archive/2005/04/28/tytul_wpisu',
	'mod_rewrite_2' => 'Tak, w stylu /archive/2005-04-28/tytul_wpisu',
	'mod_rewrite_3' => 'Tak, w stylu /entry/1234',
	'mod_rewrite_4' => 'Tak, w stylu /entry/1234/tytul_wpisu',

	'search_index' => 'Automatycznie aktualizuj indeks wyszukiwania',
	'search_index_desc' => 'To ustawienie okre�la, czy indeks wyszukiwania b�dzie aktualizowany za ka�dym razem kiedy dodasz nowy wpis lub zmodyfikujesz istniej�cy.',

	'default_allow_comments' => 'Zezwalaj domy�lnie na komentowanie wpis�w',
	'default_allow_comments_desc' => 'Okre�la, czy wpisy maj� domy�lnie ustawion� mo�liwo�� ich komentowania.',

  'maxhrefs' => 'Liczba link�w',
  'maxhrefs_desc' => 'Makymalna liczba link�w mo�liwych do umieszczenia w komentarzu. Przydatne do ograniczenia spamu w komentarzach. 0 oznacza nieograniczon� liczb� link�w.',
  'rebuild_threshold' => 'Rebuild Threshold',
  'rebuild_threshold_desc' => 'The number of seconds rebuilding takes, before Pivot refreshes the page. The default is 28, but if you are having problems with rebuilding, try lowering this number to 10.',
	'default_introduction' => 'Domy�lny Wst�p i Tre�� wpisu',
	'default_introduction_desc' => 'To ustawienie okre�la domy�lne warto�ci dla Wst�pu i Tre�ci nowego wpisu. Normalnie to b�dzie pusty akapit, co ma w wi�kszo�ci przypadk�w najwi�kszy sens.',

	'upload_autothumb'	=> 'Automatyczne miniatury',
	'upload_thumb_width' => 'Szeroko�� miniatury',
	'upload_thumb_height' => 'Wysoko�� miniatury',
	'upload_thumb_remote' => 'Zdalny skrypt obcinaj�cy',
	'upload_thumb_remote_desc' => 'Je�li na Twoim serwerze nie ma zainstalowanych bibliotek niezb�dnych do obcinania obrazk�w, mo�esz u�y� zdalnego skryptu obcinaj�cego.',

	'extensions_header' => 'Katalog rozszerz�',
	'extensions_desc'   => 'Katalog \'rozszerze�\' to miejsce, w kt�rym przechowywane s� dodatki do Pivota.
		Czyni to aktualizacje o wiele �atwiejszymi. Zajrzyj do dokumentacji aby dowiedzie� si� wi�cej na ten temat.',
	'extensions_path'   => '�cie�ka katalogu rozszerze�',

);


//		Weblog Config	\\
$lang['weblog_config'] = array (
	'edit_weblog' => 'Edycja Webloga',
	'edit_blog' => 'Edycja Weblog�w',
	'new_weblog' => 'Nowy Weblog',
	'new_weblog_desc' => 'Dodawanie nowego Webloga',
	'del_weblog' => 'Usu� Webloga',
	'del_this_weblog' => 'Usuni�cie tego Webloga.',
	'create_new' => 'Tworzenie nowego Webloga',
	'subw_heading' => 'Dla ka�dego podwebloga, kt�ry znajduje si� w szablonach, mo�esz skonfigurowa� szablon, kt�ry b�dzie przez niego u�ywany oraz kategorie, z kt�rych wpisy b�d� na nim publikowane.',
	'create' => 'Zako�cz',

	'create_1' => 'Tworzenie / edycja Webloga, krok 1 z 3',
	'create_2' => 'Tworzenie / edycja Webloga, krok 2 z 3',
	'create_3' => 'Tworzenie / edycja Webloga, krok 3 z 3',

	'name' => 'Nazwa Webloga',
	'payoff' => 'Opis',
	'payoff_desc' => 'Opis mo�e by� u�yty jako podtytu� lub kr�tki opis Twojego Webloga.',
	'url' => 'Adres URL Webloga',
	'url_desc' => 'Pivot wykryje adres URL Twojego Webloga je�li pozostawisz to pole puste. Je�li jednak Tw�j Weblog b�dzie umieszczony w ramkach (frames) lub includowany przez inny skrypt, mo�esz poda� w�asny adres.',
	'index_name' => 'Strona g��wna (Index)',
	'index_name_desc' => 'Nazwa pliku strony g��wnej (index). Zwykle to co� w stylu \'index.html\' lub \'index.php\'.',

	'ssi_prefix' => 'Prefiks SSI',
	'ssi_prefix_desc' => 'Je�li Tw�j Weblog u�ywa SSI (co nie jest zalecane), mo�esz u�y� tej opcji do okre�lenia prefiksu b�d�cego nazw� pliku u�ywanego przez SSI, np. \'index.shtml?p=\' (prefiks ten zostanie dodany przed nazw� pliku Pivota). Powiniene� pozostawi� to pole puste, chyba �e wiesz co robisz.',

	'front_path' => '�cie�ka strony g��wnej',
	'front_path_desc' => 'Wzgl�dna lub bezwzgl�dna �cie�ka do katalogu, w kt�rym Pivot stworzy stron� g��wn� tego webloga.',
	'file_format' => 'Nazwa pliku',
	'entry_heading' => 'Ustawienia wpis�w',
	'entry_path' => '�cie�ka wpis�w',
	'entry_path_desc' => 'Wzgl�dna lub bezwzgl�dna �cie�ka do katalogu, w kt�rym Pivot stworzy strony dla ka�dego z wpis�w (je�li nie zechcesz u�ywa� \'�ywych wpis�w\')',
	'live_comments' => '�ywe wpisy',
	'live_comments_desc' => 'Je�li u�ywasz \'�ywych wpis�w\', Pivot nie musi generowa� plik�w dla ka�dego wpisu. To jest ustawienie zalecane..',
	'readmore' => 'Tekst \'Czytaj wi�cej\'',
	'readmore_desc' => 'Tekst, kt�ry pokazuje, �e jest dalsza cz�� wpisu, nie wy�wietlana na stronie g��wnej. Je�li zostawisz to pole puste, zostanie u�yty tekst domy�lny, zdefiniowany w pliku j�zykowym.',

	'arc_heading' => 'Ustawienia archiwum',
	'arc_index' => 'Plik indeksu',
	'arc_path' => '�cie�ka archiwum',
	'archive_amount' => 'Archive Amount',
	'archive_unit' => 'Rodzaj archiwum',
	'archive_format' => 'Format archiwum',
	'archive_none' => 'Brak archiwum',
	'archive_weekly' => 'Archiwum tygodniowe',
	'archive_monthly' => 'Archiwum miesi�czne',
	'archive_yearly' => 'Archiwum roczne',

	'archive_link' => 'Link do archiwum',
	'archive_linkfile' => 'Format listy archiwum',
	'archive_order' => 'Kolejno�� archiwum',
	'archive_ascending' => 'Rosn�co (najpierw starsze)',
	'archive_descending' => 'Malej�co (najpierw nowsze)',

	'templates_heading' => 'Szablony',
	'frontpage_template' => 'Szablon strony g��wnej',
	'frontpage_template_desc' => 'Szablon okre�laj�cy wygl�d strony g��wnej tego webloga.',
	'archivepage_template' => 'Szablon strony archiwum',
	'archivepage_template_desc' => 'Szablon okre�laj�cy wygl�d strony archiwum. Mo�e by� taki sam, jak dla strony g��wnej.',
	'entrypage_template' => 'Szablon strony wpisu',
	'entrypage_template_desc' => 'Szablon okre�laj�cy wygl�d strony pojedynczego wpisu.',
	'extrapage_template' => 'Szablon specjalny',
	'extrapage_template_desc' => 'Szablon okre�laj�cy wygl�d archiwum i strony search.php.',

	'shortentry_template' => 'Szablon skr�tu wpisu',
	'shortentry_template_desc' => 'Szablon okre�laj�cy wygl�d skr�tu pojedynczego wpisu wy�wietlanego wewn�trz webloga lub archiwum.',
	'num_entries' => 'Ilo�� wpis�w',
	'num_entries_desc' => 'Ilo�� wpis�w w tym subweblogu, kt�re b�d� wy�wietlane na stronie g��wnej.',
	'offset' => 'Offset',
	'offset_desc' => 'Je�li Offset jest liczb�, to taka ilo�� wpis�w zostanie pomini�ta podczas generowania strony. Mo�esz u�y� tego np. do stworzenia listy \'Poprzednich wpis�w\'.',
	'comments' => 'Zezwala� na komentowanie?',
	'comments_desc' => 'Okre�la, czy u�ytkownicy b�d� mogli zostawia� komentarze do wpis�w w tym podweblogu.',

	'publish_cats' => 'Publikuj nast�puj�ce kategorie',

	'setup_rss_head' => 'Konfiguracja RSS i Atom',
	'rss_use' => 'Generuj kana�y',
	'rss_use_desc' => 'To ustawienie okre�la, czy Pivot b�dzie automatycznie generowa� kana�y RSS i Atom dla tego webloga.',
	'rss_filename' => 'Nazwa pliku RSS',
	'atom_filename' => 'Nazwa pliku Atom',
	'rss_path' => '�cie�ka kana�u',
	'rss_path_desc' => 'Wzgl�dna lub bezwzgl�dna �cie�ka do katalogu, w kt�rym Pivot b�dzie generowa� pliki kana��w.',
//	'rss_size' => 'Feed Entry Length',	/* DEPRECATED */
//	'rss_size_desc' => 'The length (in characters) of an entry in the Feed files', /* DEPRECATED */
	'rss_full' => 'Tw�rz pe�ne kana�y',
	'rss_full_desc' => 'Okre�la, czy Pivot b�dzie tworzy� pe�ne kana�y RSS i Atom. Je�li opcja ta ustawiona jest na \'Nie\', Pivot b�dzie tworzy� kana�y, kt�re zawiera� b�d� tylko kr�tki opis, co uczyni kana�y mniej u�ytecznymi.',
	'rss_link' => 'Link kana�u',
	'rss_link_desc' => 'Link, kt�ry zostanie przes�any w kanale. Je�li pozostawisz to pole puste, Pivot b�dzie przesy�a� link do strony g��wnej webloga.',
	'rss_img' => 'Obraz kana�u',
	'rss_img_desc' => 'Mo�esz wybra� obraz do wys�ania wraz z kana�em. Niekt�re czytniki kana��w wy�wietl� ten obraz wraz z Twoim kana�em. Pozostaw to pole puste lub podaj pe�ny adres URL.',

	'lastcomm_head' => 'Ustawienia dla ostatnich komentarzy',
	'lastcomm_amount' => 'Ilo�� pokazywanych komentarzy',
	'lastcomm_length' => 'Obetnij na d�ugo�ci',
	'lastcomm_format' => 'Format',
	'lastcomm_format_desc' => 'To ustawienie okre�la wygl�d \'ostatnich komentarzy\' na stronie g��wnej webloga.',
	'lastcomm_nofollow' => 'U�ywaj \'Nofollow\'',
	'lastcomm_nofollow_desc' => 'Aby walczy� z \'referer-spamem\' mo�esz w��czy� t� opcj�. Dodaje ona atrybut rel="nofollow" do wszystkich link�w w komentarzach i stronach odsy�aj�cych, wi�c nie pomo�e to spammerom w uzyskaniu wy�szego pagerank w Google.',

	'lastref_head' => 'Ustawienia dla ostatnich stron odsy�aj�cych',
	'lastref_amount' => 'Ilo�� pokazywanych stron',
	'lastref_length' => 'Obetnij na d�ugo�ci',
	'lastref_format' => 'Format',
	'lastref_format_desc' => 'To ustawienie okre�la wygl�d \'ostatnich stron odsy�aj�cych\' na stronie g��wnej webloga.',
	'lastref_graphic' => 'U�yj grafiki',
	'lastref_graphic_desc' => 'To ustawienie okre�la, czy w \'ostatnich stronach odsy�aj�cych\' b�d� u�ywane ma�e ikony dla najpopularniejszych silnik�w wyszukiwawczych, z kt�rych mogli wej�� odwiedzaj�cy.',
	'lastref_redirect' => 'Przekierowanie dla stron odsy�aj�cych',
	'lastref_redirect_desc' => 'Aby walczy� z \'referer-spamem\' mo�esz przekierowywa� linki wychodz�ce, co nie pomo�e spammerom w uzyskaniu wy�szego pagerank w Google.',

	'various_head' => 'R�ne ustawienia',
	'emoticons' => 'U�ywaj emotikon',
	'emoticons_desc' => 'To ustawienie okre�la, czy emotikony w stylu :-) b�d� zamieniane na ich graficzne odpowiedniki.',
	'encode_email_addresses' => 'Koduj adresy email',
	'encode_email_addresses_desc' => 'To ustawienie okre�la, czy adresy email b�d� kodowane przy u�yciu JavaScript w celu ochrony przed \'zbieraczami adres�w\'.',
	'target_blank' => 'Target Blank',
	'xhtml_workaround' => 'XHTML Workaround',
	'target_blank_desc' => 'Je�li ustawione na \'Tak\', wszystkie linki w Twoich wpisach b�d� otwierane w nowym oknie przegl�darki. Je�li ustawione na \'XHTML Workaround\', wszystkie linki b�d� mia�y dodany atrybut rel="external", kt�ry jest zgodny ze specyfikacj� XHTML.',

	'date_head' => 'Ustawienia wy�wietlania daty',
	'full_date' => 'Format pe�nej daty',
	'full_date_desc' => 'Okre�la format pe�nej daty i czasu. Najcze�ciej u�ywany u g�ry strony pojedynczego wpisu.',
	'entry_date' => 'Data wpisu',
	'diff_date' => 'Nowa data',
	'diff_date_desc' => '\'Nowa data\' jest najcze�ciej u�ywana w po��czeniu z \'Dat� wpisu\'. Data wpisu jest wy�wietlana przy ka�dym wpisie na Twoim blogu, a Nowa data tylko je�li data wpisu r�ni si� od daty wpisu poprzedniego.',
	'language' => 'J�zyk',
	'language_desc' => 'To ustawienie okre�la, w jakim j�zyku b�d� wy�wietlane, a tak�e kodowanie strony (np. iso-8859-2 or uft-8).',

	'comment_head' => 'Ustawienia komentowania',
	'comment_sendmail' => 'Wysy�a� email?',
	'comment_sendmail_desc' => 'Po zamieszczeniu komentarza zostanie wys�any email do os�b prowadz�cych webloga.',
	'comment_emailto' => 'Wysy�aj do',
	'comment_emailto_desc' => 'Podaj adres(y) email, na kt�re maj� by� wysy�ane powiadomienia. Oddziel adresy przecinkiem.',
	'comment_texttolinks' => 'Zamieniaj tekst na linki',
	'comment_texttolinks_desc' => 'Okre�la, czy wpisane adresy URL i email maj� by� zamieniane na linki.',
	'comment_wrap' => 'Zawijaj komentarze po',
	'comment_wrap_desc' => 'Aby zapobiec rozwalaniu uk�adu strony przez d�ugie ci�gi znak�w, tekst b�dzie zawijany po podanej ilo�ci znak�w.',
	'comments_text_0' => 'Opis dla \'brak komentarzy\'',
	'comments_text_1' => 'Opis dla \'jeden komentarz\'',
	'comments_text_2' => 'Opis dla \'X komentarzy\'',
	'comments_text_2_desc' => 'Tekst, kt�ry jest u�ywany do pokazania, ile jest komentarzy. Je�li pozostawisz te pola puste, Pivot u�yje tekst�w domy�lnych, zdefiniowanych w pliku j�zykowym.',

	'comment_pop' => 'Komentarze w oknie Popup?',
	'comment_pop_desc' => 'Okre�la, czy strona komentarzy (lub \'pojedynczego wpisu\') b�dzie pokazywana w oknie popup, czy w aktualnie otwartym oknie przegl�darki.',
	'comment_width' => 'Szeroko�� okna Popup',
	'comment_height' => 'Wysoko�� okna Popup',
	'comment_height_desc' => 'Okre�la szeroko�� i wysoko�� (w pikselach) okna Popup komentarzy.',

	'comment_format' => "Format komentarzy",
	'comment_format_desc' => "To ustawienie okre�la format komentarzy na stronie wpisu.",

	'comment_reply' => "Format 'odpowiedz...'",
	'comment_reply_desc' => "Okre�la format linku, kt�rego odwiedzaj�cy mog� u�ywa� w celu udzielenia odpowiedzi na konkretny komentarz.",
	'comment_forward' => "Format 'skomentowany przez...'",
	'comment_forward_desc' => "Okre�la format tekstu, kt�ry jest wy�wietlany gdy jest odpowied� na dany komentarz.",
	'comment_backward' => "Format 'odpowied� na...'",
	'comment_backward_desc' => "Okre�la format tekstu, kt�ry jest wy�wietlany gdy komentarz jest odpowiedzi� na inny.",

	'comment_textile' => 'Zezwalaj na Textile',
	'comment_textile_desc' => 'Je�li jest ustawione na \'Tak\', odwiedzaj�cy mog� u�ywa� <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> w komentarzach.',
	'save_comment' => 'Zapisz komentarz',
	'comment_gravatardefault' => 'Domy�lny Gravatar',
	'comment_gravatardefault_desc' => 'Adres URL do obrazu domy�lnego Gravatara. Powinien rozpoczyna� si� od http://',
	'comment_gravatarhtml' => 'Kod HTML Gravatara',
	'comment_gravatarhtml_desc' => 'Kod HTML do wstawienia dla Gravatara. Znacznik %img% b�dzie zast�piony przez adres URL do obrazu.',
	'comment_gravatarsize' => 'Rozmiar Gravatara',
	'comment_gravatarsize_desc' => 'Rozmiar Gravatara (w pikselach). Domy�lny to 48.',

    'trackback_head' => 'Ustawienia �ledzenia (trackback)',
	'trackback_sendmail' => 'Wysy�a� email?',
	'trackback_sendmail_desc' => 'Po tym, jak �lad (trackback) zostanie umieszczony, mo�e zosta� wys�any email do os�b prowadz�cych ten weblog.',
	'trackback_emailto' => 'Wysy�aj do',
	'trackback_emailto_desc' => 'Podaj adres(y) email, na kt�re maj� by� wysy�ane powiadomienia. Oddziel adresy przecinkiem.',
	'trackbacks_text_0' => 'Opis dla \'brak �lad�w (trackback)\'',
	'trackbacks_text_1' => 'Opis dla \'jeden �lad (trackback)\'',
	'trackbacks_text_2' => 'Opis dla \'X �lad�w (trackbacks)\'',
	'trackbacks_text_2_desc' => 'Tekst, kt�ry jest u�ywany do pokazania, ile jest �lad�w (trackbacks). Je�li pozostawisz te pola puste, Pivot u�yje tekst�w domy�lnych, zdefiniowanych w pliku j�zykowym.',
	'trackback_pop' => '�lady (trackbacks) w oknie Popup?',
	'trackback_pop_desc' => 'Okre�la, czy strona �ledzenia (trackbacks) (lub \'pojedynczego wpisu\') b�dzie pokazywana w oknie popup, czy w aktualnie otwartym oknie przegl�darki.',
	'trackback_width' => 'Szeroko�� okna Popup',
	'trackback_height' => 'Wysoko�� okna Popup',
	'trackback_height_desc' => 'Okre�la szeroko�� i wysoko�� (w pikselach) okna Popup �ledzenia (trackback).',
	'trackback_format' => "Format �ledzenia (trackbacks)",
	'trackback_format_desc' => "Okre�la format �ledzenia (trackbacks) na stronach wpis�w.",
	'trackback_link_format' => "Format linku �ledzenia (trackback)",
        'save_trackback' => 'Zapisz �lad (trackback)',

	'saved_create' => 'Nowy Weblog zosta� utworzony.',
	'saved_update' => 'Weblog zosta� zaktualizowany.',
	'deleted' => 'Weblog zosta� usuni�ty.',
	'confirm_delete' => 'Za chwil� usuniesz weblog %1. Jeste� pewien?',

	'blogroll_heading' => 'Ustawienia Blogroll',
	'blogroll_id' => 'Blogrolling ID #',
	'blogroll_id_desc' => 'Opcjonalnie mo�esz doda� blogroll serwisu <a href="http://www.blogrolling.com" target="_blank">blogrolling.com</a> do Twojego webloga. Blogrolling jest doskona�� us�ug� zarz�dzania list� link�w, kt�ra pokazuje jak cz�sto s� one aktualizowane. Je�li tego nie chcesz, po prostu pomi� poni�sze pola. W innym przypadku zaloguj si� do blogrolling.com i przejd� do sekcji \'get code\', gdzie znajdziesz linki zawieraj�ce Tw�j blogroll ID. Powinien on wygl�da� mniej wi�cej tak: 2ef8b42161020d87223d42ae18191f6d.',
	'blogroll_fg' => 'Kolor tekstu',
	'blogroll_bg' => 'Kolor t�a',
	'blogroll_line1' => 'Kolor linii 1',
	'blogroll_line2' => 'Kolor linii 2',
	'blogroll_c1' => 'Kolor 1',
	'blogroll_c2' => 'Kolor 2',
	'blogroll_c3' => 'Kolor 3',
	'blogroll_c4' => 'Kolor 4',
	'blogroll_c4_desc' => 'Te kolory okre�laj�, jak b�dzie wygl�da� Tw�j blogroll. Kolory 1 do 4 pokazuj�, jak cz�sto link jest uaktualniany.',
);


$lang['upload'] = array (
	//		File Upload		\\
	'preview' => 'Przegl�d ca�ej listy',
	'thumbs' => 'Przegl�d miniatur',
	'create_thumb' => '(Stworz miniatur�)',
	'title' => 'Pliki',
	'thisfile' => 'Wy�lij nowy plik:',
	'button' => 'Wy�lij',
	'filename' => 'Nazwa pliku',
	'thumbnail' => 'Miniatura',
	'date' => 'Data',
	'filesize' => 'Rozmiar',
	'dimensions' => 'Szer. x Wys.',
	'delete_title' => 'Usu� obraz',
	'areyousure' => 'Jeste� pewien, �e chcesz usun�� plik %s?',
	'picheader' => 'Usun�� ten obraz?',
	'create' => 'stw�rz',
	'edit' => 'edytuj',

	'insert_image' => 'Wstaw obraz',
	'insert_image_desc' => 'Aby wstawi� obraz, powiniene� go wys�ac lub wybra� uprzednio wys�any.',
	'insert_image_popup' => 'Wstaw Popup z obrazem',
	'insert_image_popup_desc' => 'Aby stworzy� Popup z obrazem, powiniene� go wys�a� lub wybra� uprzednio wys�any. P�niej wybierz tekst lub miniatur�, kt�ra b�dzie odnosi� si� do okna Popup.',
	'choose_upload' => 'wy�lij',
	'choose_select' => 'lub wybierz',
	'imagename' => 'Nazwa obrazu',
	'alt_text' => 'Tekst alternatywny (ALT)',
	'align' => 'Wyr�wnanie',
	'border' => 'Obrys',
	'pixels' => 'pikseli',
	'uploaded_as' => 'Tw�j plik zosta� wys�any jako \'%s\'.',
	'not_uploaded' => 'Tw�j plik nie zosta� wys�any. Wyst�pi�y nast�puj�ce b��dy:',
	'center' => 'Wy�rodkowany (domy�lnie)',
	'left' => 'Do lewej',
	'right' => 'Do prawej',
	'inline' => 'Inline',
	'notice_upload_first' => 'Powiniene� najpierw wybra� lub wys�a� obraz',
	'select_image' => 'Wybierz obraz',
	'select_file' => 'Wybierz plik',

	'for_popup' => 'Dla okna Popup',
	'use_thumbnail' => 'U�yj miniatury',
	'edit_thumbnail' => 'edytuj miniatur�',
	'use_text' => 'U�yj tekstu',
	'insert_download' => 'Wstaw plik do �ci�gni�cia',
	'insert_download_desc' => 'Aby wstawi� plik do �ci�gni�cia, powiniene� go wys�a� lub wybra� uprzednio wys�any. Nast�pnie wybierz element, kt�ry ma prowadzi� do pliku (ikona, tekst lub miniatura).',
	'use_icon' => 'U�yj ikony',
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => 'Wstaw link',
	'insert_link_desc' => 'Wstaw link wpisuj�c adres URL w polu poni�ej. Odwiedzaj�cy Twoj� stron� zobacz� tytu� kiedy najad� kursorem myszy na link.',
	'url' => 'URL',
	'title' => 'Tytu�',
	'text' => 'Tekst',
);


//		Categories		\\
$lang['category'] = array (
	'edit_who' => 'Edycja listy os�b, kt�re mog� dodawa� wpisy do kategorii \'%s\'',
	'name' => 'Nazwa',
	'users' => 'U�ytkownicy',
	'make_new' => 'Stw�rz now� kategori�',
	'create' => 'Stw�rz kategori�',
	'canpost' => 'Wybierz u�ytkownik�w, kt�rym chcia�by� da� uprawnienia do dodawania wpis�w w tej kategorii',
	'same_name' => 'Kategoria o tej nazwie ju� istnieje',
	'need_name' => 'Musisz wpisa� nazw� kategorii',

	'allowed' => 'Dozwolone',
	'allow' => 'Zezw�l',
	'denied' => 'Zabronione',
	'deny' => 'Zabro�',
	'edit' => 'Edycja kategorii',

	'delete' => 'Usu� kategori�',
	'delete_desc' => 'Wybierz \'Tak\' je�li chcesz usun�� t� kategori�',

	'delete_message' => 'W tej wersji Pivota tylko nazwa kategorii mo�e by� usuni�ta. W kolejnych wersjach b�dziesz mia� mo�liwo�� wyboru co zrobi� z wpisami w danej kategorii.',
	'search_index_newctitle'   => 'Indeksuj t� kategori�',
	'search_index_newcdesc'    => 'Wybierz \'Nie\' tylko wtedy, kiedy nie chcesz, aby odwiedzaj�cy przeszukiwali t� kategori�.',
	'search_index_editcheader' => 'Indeksuj kategori�',

	'order' => 'Porz�dek sortowania',
	'order_desc' => 'Kategorie z ni�szym porz�dkiem sortowania pojawi� si� wy�ej na li�cie. Je�li zachowasz wszystkie liczby takie same, kategorie b�d� posortowane alfabetycznie.',
	'public' => 'Kategoria publiczna',
	'public_desc' => 'Je�li wybierzesz \'Nie\', ta kategoria b�dzie widoczna jedynie dla zarejestrowanych u�ytkownik�w (dotyczy tylko \'�ywych stron\').',
	'hidden' => 'Kategoria ukryta',
	'hidden_desc' => 'Je�li wybierzesz \'Tak\', ta kategoria b�dzie ukryta na li�cie archiwum (dotyczy tylko \'�ywych stron\').',

);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "Wy�lij wpis",
	'preview_entry' => "Podgl�d wpisu",

	'first' => 'pierwsza',
	'last' => 'ostatnia',
	'next' => 'nast�pna',
	'previous' => 'poprzednia',

	'jumptopage' => 'skocz do strony (%num%)',
	'filteron' => 'filtr na (%name%)',
	'filteroff' => 'wy��cz filtr',
	'title' => 'Tytu�',
	'subtitle' => 'Podtytu�',
	'introduction' => 'Wst�p',
	'body' => 'Tre��',
	'publish_on' => 'Opublikuj',
	'status' => 'Status',
	'post_status' => 'Post Status',
	'category' => 'Kategoria',
	'select_multi_cats' => '(Ctrl-click aby wybra� wi�cej kategorii)',
	'last_edited' => "Ostatnio edytowany",
	'created_on' => "Utworzony",
	'date' => 'Data',
	'author' => 'Autor',
	'code' => 'Kod',
	'comm' => '# Koment',
	'track' => '# �lad�w',
	'name' => 'Nazwa',
	'allow_comments' => 'Komentarze dozwolone',

	'delete_entry' => "Usu� wpis",
	'delete_entry_desc' => "Usu� ten wpis i powi�zane komentarze ",
	'delete_one_confirm' => "Czy jeste� pewien, �e chcesz usun�� ten wpis?",
	'delete_multiple_confirm' => "Czy jeste� pewien, �e chcesz usun�� te wpisy?",

	'convert_lb' => 'Konwertuj znaki ko�ca wiersza',
	'always_off' => '(Zawsze wy��czone kiedy w trybie WYSIWYG)',
	'be_careful' => '(B�d� z tym ostro�ny!)',
	'edit_comments' => 'Edycja komentarzy',
	'edit_comments_desc' => 'Edycja komentarzy, kt�re zosta�y dodane do tego wpisu',
	'edit_comment' => 'Edytuj komentarza',
	'delete_comment' => 'Usu� komentarz',
	'edit_trackback' => 'Edytuj �lad (trackback)',
	'delete_trackback' => 'Usu� �lad (trackback)',
	'block_single' => 'Zablokuj IP %s',
	'block_range' => 'Zablokuj zakres IP %s',
	'unblock_single' => 'Odblokuj IP %s',
	'unblock_range' => 'Odblokuj zakres IP %s',
	'trackback' => 'Ping �ladu (trackback)',
	'trackback_desc' => 'Wy�y�a ping �ladu (tracback) do poni�szych adres�w URL. Aby wys�a� do wielu adres�w, umie�� ka�dy z nich w osobnej linii.',
	'keywords' => 'S�owa kluczowe',
	'keywords_desc' => 'U�yj tego do ustawienia s��w kluczowych, kt�re mog� by� u�yte do wyszukiwania tego wpisu lub set the non-crufty url for this entry.',
	'vialink' => "Link do �r�d�a",
	'viatitle' => "Tytu� �r�d�a",
	'via_desc' => 'U�yj tego do stworzenia linku do �r�d�a tego wpisu.',
	'entry_catnopost' => 'Nie mo�esz dodawa� wpis�w w tej kategorii: \'%s\'.',
	'entry_saved_ok' => 'Tw�j wpis \'%s\' zosta� zapisany.',
	'entry_ping_sent' => 'Ping �ladu (trackback) zosta� wys�any do \'%s\'.',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => 'Zaznacz wszystko',
	'c_none' => 'Odznacz wszystko',
	'choose' => '- wybierz opcj� -',
	'publish' => 'Ustaw status na \'publikuj\'',
	'hold' => 'Ustaw status na \'wstrzymany\'',
	'delete' => 'Usu� je',
	'generate' => 'Publikuj i generuj',

	'with_checked_entries' => "Zaznaczone wpisy:",
	'with_checked_files' => "Zaznaczone plik:",
	'with_checked_templates' => 'Zaznaczone szablony:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => 'nie mo�na otworzy� katalogu, sprawd� uprawnienia.',
	'path_read' => 'nie mo�na czyta� katalogu, sprawd� uprawnienia.',
	'path_write' => 'nie mo�na zapisa� katalogu, sprawd� uprawnienia.',

	'file_open' => 'nie mo�na otworzy� pliku, sprawd� uprawnienia.',
	'file_read' => 'nie mo�na czyta� pliku, sprawd� uprawnienia.',
	'file_write' => 'nie mo�na zapisa�, sprawd� uprawnienia.',
);


//		Notices			\\
$lang['notice'] = array (
	'comment_saved' => "Komentarz zosta� zapisany.",
	'comment_deleted' => "Komentarz zosta� usuni�ty.",
	'comment_none' => "Ten wpis nie ma komentarzy.",
	'trackback_saved' => "�lad (trackback) zosta� zapisany.",
	'trackback_deleted' => "�lad (trackback) zosta� usuni�ty.",
	'trackback_none' => "Ten wpis nie ma �lad�w (trackbacks).",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => 'Oddaj g�os \'%val%\' na ten wpis',
	'good' => 'Dobry',
	'bad' => 'Z�y',
	'already' => 'Ju� g�osowa�e�(a�) na ten wpis lub w tej ankiecie',
	'register' => 'Tw�j g�os \'%val%\' zosta� zarejestrowany',
);


$lang['comment'] = array (
	'register' => 'Tw�j komentarz zosta� zapisany.',
	'preview' => 'Przegl�dasz w�a�nie sw�j komentarz. U�yj przycisku \'Wy�lij komentarz\' aby go zapisa�.',
	'duplicate' => 'Tw�j komentarz nie zosta� zapisany, poniewa� wygl�da na to, �e jest on duplikatem poprzedniego',
	'no_name' => 'Powiniene� wpisa� swoje imi� (lub nick) w polu \'imi�\'. U�yj przycisku \'Wy�lij komentarz\' aby zapisa� komentarz.',
	'no_comment' => 'Powiniene� wpisa� co� w polu \'Komentarz\'. U�yj przycisku \'Wy�lij komentarz\' aby zapisa� komentarz.',
	'too_many_hrefs' => 'Maksymalna liczba link�w zosta�a przekroczona. Przesta� spamowa�.',
    'email_subject' => '[Komentarz] Odp:',
);


$lang['comments_text'] = array (
	'0' => "Brak komentarzy",
	'1' => "%num% komentarz",
	'2' => "%num% komentarzy",
);

$lang['trackbacks_text'] = array (
	'0' => "Brak �lad�w (trackbacks)",
	'1' => "%num% �lad (trackback)",
	'2' => "%num% �lady (trackbacks)",
);

$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "Archiwum",
	'next_archive' => "Nast�pne",
	'previous_archive' => "Poprzednie",
	'last_comments' => "Ostatnie komentarze",
	'last_referrers' => "Ostatnie strony odsy�aj�ce",
	'calendar' => "Kalendarz",
	'links' => "Linki",
	'xml_feed' => "Kana� RSS (RSS 1.0)",
	'atom_feed' => "Kana� Atom",
	'powered_by' => "Powered by ",
	'blog_name' => "Nazwa webloga",
	'title' => "Tytu�",
	'excerpt' => "Fragment",
	'name' => "Imi�",
	'email' => "Email",
	'url' => "Adres URL",
	'date' => "Data",
	'comment' => "Komentarz",
	'ip' => "Adres IP",
	'yes' => "Tak",
	'no' => "Nie",
	'emoticons' => "Emotikony",
	'emoticons_reference' => "Otw�rz opisy emotikon�w",
	'textile' => "Textile",
	'textile_reference' => "Otw�rz opis Textile",
	'post_comment' => "Wy�lij komentarz",
	'preview_comment' => "Podgl�d komentarza",
	'remember_info' => "Zapami�ta� informacje o Tobie?",
	'notify' => "Powiadamianie",
	'notify_yes' => "Tak, wy�lij mi email kiedy kto� odpowie.",
	'register' => "Zarejestruj si� / Zaloguj si�",
	'disclaimer' => "<b>Uwaga:</b> Wszystkie tagi HTM poza &lt;b&gt; i &lt;i&gt; zostan� usuni�te z Twojego komentarza. Mo�esz dodawa� linki wpisuj�c po prostu adres URL lub email.",
	'search_title' => "Wyniki wyszukiwania",
	'search' => "Szukaj!",
	'nomatches' => "Nie znaleziono nic dla s��w '%name%'. Spr�buj czego� innego.",
	'matches' => "Znalezione dla s��w '%name%':",
	'about' => "Informacje",
	'stuff' => "R�ne",
	'linkdump' => "Na skr�ty",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Edycja p�l u�ytkownika',
	'edit' => 'Edytuj',
	'create' => 'Utw�rz',

	'dispname' => 'Nazwa wy�wietlana',
	'intname' => 'Nazwa wewn�trzna',
	'intname_desc' => 'Nazwa wewn�trzna to nazwa tej pozycji, u�ywana do jej wy�wietlania w szablonach Pivota.',
	'size' => 'Rozmiar',
	'rows' => 'Wiersze',
	'cols' => 'Kolumny',
	'maxlen' => 'Maksymalna d�ugo��',
	'minlevel' => 'Minimalny poziom u�ytkownika',
	'filter' => 'Filtruj',
	'filter_desc' => 'Fitruj�c t� pozycj�, ograniczasz wpisywan� w tym polu tre��',
	'no_filter' => 'Nic',
	'del_title' => 'Potwierd� usuni�cie',
	'del_desc' => 'Usuni�cie tego pola u�ytkownika (<b>%s</b>) spowoduje, �e dane, kt�re u�ytkownik w nim przechowuje, zostan� utracone. Je�li pole to wyst�puje w szablonach, nic nie zostanie wy�wietlone.',

	'already' => 'Nazwa jest ju� u�ywana',
	'int' => 'Nazwa wewn�trzna musi mie� minimum 3 znaki',
	'short_disp' => 'Nazwa wy�wietlana musi mie� minimum 3 znaki',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => 'Zak�adki',
	'bm_add' => 'Dodawanie zak�adki',
	'bm_withlink' => 'Pivot � New',
	'bm_withlink_desc' => 'Ta zak�adka otwiera nowe okno ze stron� \'Nowy wpis\', kt�ra zawiera link do strony, na kt�rej zosta�a otwarta zak�adka.',
	'bm_nolink' => 'Pivot � New',
	'bm_nolink_desc' => 'Ta zak�adka otwiera nowe okno z pust� stron� \'Nowy wpis\'.',

	'bookmarklets_info' => 'Mo�esz u�ywa� zak�adek do szybkiego tworzenia nowych wpis�w w Pivocie. Aby doda� zak�adk� do Twojej przegl�darki, u�yj jednej z nast�puj�cych opcji: (teksty mog� si� r�ni� w zale�no�ci od przegl�darki, kt�rej u�ywasz)',
	'bookmarklets_info_1' => 'Klikij i przeci�gnij zak�adk� na pasek \'Linki\' lub przycisk \'Ulubione\'.',
	'bookmarklets_info_2' => 'Kliknij prawym przyciskiem myszy na zak�adce i \'Dodaj do ulubionych\'.',
);

// Accessibility - These are used for form fields, labels, fieldsets etc.
// for Web Content Accessibility Guidelines & 508 compliancy issues.
// see: http://bobby.watchfire.com/bobby/html/en/index.jsp
// JM =*=*= 2004/10/04
// 2004/11/25 =*=*= JM - minor correction for tim
$lang['accessibility'] = array(
	'search_idname'      => 'szukaj',
	'search_formname'    => 'Wyszukaj s�owa u�yte we wpisach na tej stronie',
	'search_fldname'     => 'Wpisz s�owo(a) do wyszukania:',
	'search_placeholder' => 'Podaj kryteria wyszukiwania',

	'calendar_summary'   => 'Ta tabela przedstawia kalendarz z linkami na datach z wpisami.',
	'calendar_noscript'  => 'Kalendarz to jeden ze sposob�w dost�pu do wpis�w w tym weblogu.',
	/*
	2-letter language code, used to designate the principal language used on the site
	see: http://www.oasis-open.org/cover/iso639a.html
	*/

	'lang' => $langname,
) ;


$lang['snippets_text'] = array (
    'word_plural'     => 's�owa',
    'image_single'    => 'obraz',
    'image_plural'    => 'obrazy',
    'download_single' => 'plik',
    'download_plural' => 'pliki',
);

$lang['trackback'] = array (
    'register' => 'Tw�j �lad (trackback) zosta� zapisany.',
    'duplicate' => 'Tw�j �lad (trackback) nie zosta� zapisany, poniewa� wygl�da na duplikat poprzedniego.',
    'too_many_hrefs' => 'Maksymalna liczna link�w zosta�a przekroczona. Przesta� spamowa�.',
    'noid'      => 'Brak ID �ladu (trackback) (tb_id)',
    'nourl'     => 'Brak adresu URL (url)',
    'tracked'   => '�ledzony',
    'email_subject' => '[�lad] Odp:',
);

$lang['commentuser'] = array (
    'title'             => 'Login u�ytkownika',
    'header'            => 'Zaloguj si� jako zarejestrowany u�ytkownik',
    'logout'            => 'Wyloguj si�.',
    'loggedout'         => 'Wylogowano',
    'login'             => 'Login',
    'loggedin'          => 'Zalogowany',
    'loggedinas'        => 'Zalogowany jako',
    'pass_forgot'       => 'Zapomia�e� has�a?',
    'register_new'      => 'Zarejestruj si�.',
    'register'          => 'Zarejestruj si� jako go��',
    'register_info'     => 'Prosz� wype�ni� poni�sze pola. <strong>Nale�y poda� poprawny adres email</strong>, poniewa� zostanie na niego wys�any email weryfikuj�cy jego poprawno��.',
    'pass_note'         => 'Uwaga: Administrator tej strony mo�e zobaczy� Twoje has�o. <em>Nie u�ywaj</em> takiego samego has�a, jak do innych stron lub kont!',
    'show_email'        => 'Pokazuj m�j adres email w komentarzach',
    'notify'            => 'Powiadamiaj mnie o nowych wpisach',
    'def_notify'        => 'Domy�lnie powiadamiaj o odpowiedziach',
    'register'          => 'Zarejestruj si�',
    'pass_invalid'      => 'Nieprawid�owe has�o',
    'nouser'            => 'Podany u�ytkownik nie istnieje',
    'change_info'       => 'Tutaj mo�esz zmieni� informacje o sobie.',
    'pref_edit'         => 'Edytuj swoje ustawienia',
    'pref_change'       => 'Zmie� ustawienia',
    'options'           => 'Opcje',
    'user_exists'       => 'U�ytkownik ju� ustnieje. Wybierz prosz� inn� nazw�..',
    'email_note'        => 'Musisz poda� sw�j adres email, poniewa� inaczej nie b�dzie mo�liwa weryfikacja Twojego konta. Zawsze mo�esz wy��czy� pokazywanie Twojego adresu innym u�ytkownikom.',
    'stored'            => 'Zmiany zosta�y zapisane',
    'verified'          => 'Twoje konto zosta�o zweryfikowane. Prosz� si� zalogowa�.',
    'not_verified'      => 'Kod wygl�da na niepoprawny. Weryfikacja zako�czona niepowodzeniem.',
    'pass_sent'         => 'Twoje has�o zosta�o wys�ane na podany adres email.',
    'user_pass_nomatch' => 'Nazwa u�ytkownika i adres email nie pasuj� do siebie.',
    'pass_send'         => 'Wy�lij has�o',
    'pass_send_desc'    => 'Je�li zapomnia�e� has�a, wpisz swoj� nazw� u�ytkownika (login) i adres email. Pivot wy�le Twoje has�o na podany adres email. ',
    'oops'              => 'Oj',
    'back'              => 'Wr�� do',
    'back_login'        => 'Wr�� do logowania',
    'forgotten_pass_mail' => "Twoje zapomniane has�o dla konta '%name%': \n\n%pass%\n\nProsz�, nie zapomnij go znowu!\n\nAby zalogowa� si� kliknij na poni�szy link:\n %link%"
);

// A little tool to help you check if the file is correct..
if (count(get_included_files())<2) {

	$groups = count($lang);
	$total = 0;
	foreach ($lang as $langgroup) {
		$total += count($langgroup);
	}
	echo "<h2>Plik j�zykowy jest niepoprawny!</h2>";
	echo "This file contains $groups groups and a total of $total labels.";

}

?>
