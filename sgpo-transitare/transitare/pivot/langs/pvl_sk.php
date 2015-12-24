<?php
//Slovensky (Slovak)

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2rd line.

// Slovak translation of Pivot lang file
// Created by Markoff (www.markoff.biz)
// http://www.pivotlog.net

// version: 1.0 Markoff
// allow for different encoding for non-western languages
$encoding="windows-1250";
$langname="sk";


//		General		\\
$lang['general'] = array (
	'yes' => 'Áno',	//affirmative
	'no' => 'Nie',		//negative
	'go' => 'Vykonaj!',	//proceed

	'minlevel' => 'Nemáte oprávnenie k vstupu do tejto oblasti Pivotu',	
	'email' => 'Email',			
	'url' => 'URL',
	'further_options' => "Ïalšie nastavenia",
	'basic_view' => "Základnı poh¾ad",
	'basic_view_desc' => "Prezeranie najobvyklejších polí",
	'extended_view' => "Rozšírenı poh¾ad",
	'extended_view_desc' => "Prezeranie všetkıch editovate¾nıch polí",
	'select' => "Vybra",
	'cancel' => "Zruši",
	'delete' => 'Odstráni',
	'welcome' => "Vitajte v %build%.",
	'write' => "Zápis",
	'write_open_error' => "Chyba zápisu. Nemôem otvori súbor pro zápis",
	'write_write_error' => "Chyba zápisu. Nemôem zapisova do súboru",
	'done' => "Hotovo!",
	'shortcuts' => "Skratky",
	'cantdelete' => "Nie je vám povolené odstráni záznam %title%!",
	'cantdothat' => "Nie je vám povolené upravova záznam %title%!",
);


$lang['userlevels'] = array (
		'Superadmin', 'Administrátor', 'Pokroèilı', 'Benı', 'Moblogger'
		//  this one might be a bit hard to translate, but basically it's an order of
		//  power or trust.  Superadmin would be the person in charge - no one can do
		//  anything about his decisions. Admin is only regulated by the Superadmin, 
		//  Advanced by the Admin and Superadmin, etc..
		//  Just get the idea of it.
);


$lang['numbers'] = array (
	'iadny', 'jeden', 'dva', 'tri', 'štyri', 'pä', 'šes', 'sedem', 'osem', 'devä', 'desa', 'jedenás', 'dvanás', 'trinás', 'štrnás', 'pätnás', 'šestnás'
);


$lang['months'] = array (
	'Január', 'Február', 'Marec', 'Apríl', 'Máj', 'Jún', 'Júl', 'August', 'September', 'Október', 'November', 'December'
);	

		
$lang['months_abbr'] = array (
	'Jan', 'Feb', 'Mar', 'Apr', 'Máj', 'Jún', 'Júl', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'
);


$lang['days'] = array (
	'Nede¾a', 'Pondelok', 'Utorok', 'Streda', 'Štvrtok', 'Piatok', 'Sobota'
);


$lang['days_abbr'] = array (
	'Ne', 'Po', 'Ut', 'St', 'Št', 'Pi', 'So'	
);

	
$lang['datetime_words'] = array (
	'Rok', 'Mesiac', 'Tıdeò', 'Deò', 'Hodina', 'Minúta', 'Sekunda'	//the actual words for them.
);


//		Login Page		\\
$lang['login'] = array (
	'title' => 'Prihlásenie',
	'name' => 'Uívate¾ské meno',
	'pass' => 'Heslo',
	'remember' => 'Zapamäta si',
	'rchoice' => array (
		'0' => 'Niè',
		'1' => 'Moje meno a heslo',
		'2' => 'Chcem zosta prihlásenı'
	),
	'delete_cookies_desc' => 'Pokia¾ ste si istí, e pouívate správne meno a heslo, <br />ale stále máte problémy s prihlásením, skúste odstráni cookies domény weblogu.',
	'delete_cookies' => 'Odstráni cookies',
	'retry' => 'Zlé meno/heslo',
	'banned' => '10x sa vám nepodarilo prihlási. IP adresa, z ktorej sa uskutoènili pokusy bude na 12 hodín zablokovaná.',

);


//		Main Bar		\\
	$lang['userbar'] = array (
	'main' => 'Preh¾ad',
	'entries' => 'Záznamy',
	'submit' => 'Novı záznam',
	'comments' => 'Komentáre',
	'modify' => 'Zmeni záznamy',
	'userinfo' => 'Moje info',
	'u_settings' => 'Moje nastavenia',
	'u_marklet' => 'Bookmarklety',
	'files' => 'Správa médií',
	'upload' => 'Upload',
	'stats' => 'Štatistiky',
	'admin' => 'Administrácia',

	'main_title' => 'Globálny preh¾ad Pivotu',
	'entries_title' => 'Preh¾ad záznamov',
	'submit_title' => 'Novı záznam',
	'comments_title' => 'Editácia alebo odstránenie komentára',		
	'modify_title' => 'Zmena záznamu',
	'userinfo_title' => 'Prezeranie osbnıch informácií',
	'u_settings_title' => 'Editácia osobnıch nastavení',
	'u_marklet_title' => 'Vytvorenie bookmarkletu',
	'files_title' => 'Správa a upload médií',
	'upload_title' => 'Upload súborov',
	'uploaded_success' => 'Súbor bol uploadovanı',
	'stats_title' => 'Prezeranie logov a štatistík',
	'updatetitles_title' => 'Prezeranie logov a štatistík',
	'admin_title' => 'Preh¾ad administrácie',
	'recent_entries' => 'Posledné záznamy',
	'recent_comments' => 'Posledné komentáre',
);


$lang['adminbar'] = array (
	//		Admin Bar		\\
	//'trebuild' => 'Rebuild all Files', rolled into maintenance
	'seeusers' => 'Uívatelia',
	'seeconfig' => 'Konfigurácia',
	'filemappings' => 'Mapovanie súborov',
	'templates' => 'Šablóny',
	'maintenance' => 'Údrba',
	'regen' => 'Prerobi všetky súbory',
	'blogs' => 'Weblogy',
	'categories' => 'Kategórie',
	'verifydb' => 'Skontroluj databázu',
	'buildindex' => 'Prerobi index',
	'buildsearchindex' => 'Prerobi index vyh¾adávania',
	'buildfrontpage' => 'Prerobi úvodnú stránku(y)',
	'sendping' => 'Posla pingy',


	'backup' => 'Záloha',
	'description' => 'Popis',
	'conversion' => 'Konverzia',
	'seeusers_title' => 'Vytvorenie, editácia a odstraòovanie uívate¾ov',
	'userfields' => 'Informácie o uívate¾ovi',
	'userfields_title' => 'Vytvorenie, editácia a odstraòovanie informácií o uívate¾ovi',
	'seeconfig_title' => 'Editácia konfiguraènıch súborov',
	'filemappings_title' => 'Preh¾ad súborov, vytvorenıch Pivotom pre weblogy na tomto webe',
	'templates_title' => 'Vytvorenie, editácia a odstraòovanie šablón',
	'maintenance_title' => 'Vykonanie benej údrby súborov Pivota',
	'regen_title' => 'Prerobenie súborov a archívov generovanıch Pivotom',
	'blogs_title' => 'Vytvorenie, editácia a odstraòovanie weblogov',
	'blogs_edit_title' => 'Editácia nastavení weblogu ',
	'categories_title' => 'Vytvorenie, editácia a odstraòovanie kategorií',	
	'verifydb_title' => 'Kontrola integrity databázy',
	'buildindex_title' => 'Prerobenie indexu databázy',
	'buildsearchindex_title' => 'Prerobenie indexu pre vyh¾adávanie v záznamoch',
	'buildfrontpage_title' => 'Prerobenie úvodnej stránky, posledného archívu a RSS pre všetky weblogy.',
	'backup_title' => 'Vytvorenie zálohy vašich záznamov',
	'ipblocks' => 'Blokované IP',
	'ipblocks_title' => 'Prezeranie a editácia blokovanıch IP adries',
	'ipblocks_stored' => 'IP-adresa bola uloená.',
	'ipblocks_store' => 'Uloi tieto IP adresy',
	'fileexplore' => 'Prieskumník súborov',
	'fileexplore_title' => 'Prezeranie súborov (textovıch i databázovıch)',
	'sendping_title' => 'Posielanie pingov pre obnovenie sledovania.',
	'buildindex_start' => 'Vytváram index. Môe to chví¾ku trva, prosím neprerušova.',
	'buildsearchindex_start' => 'Vytváram index vyh¾adávania. Môe to chví¾ku trva, prosím neprerušova.',
	'buildindex_finished' => 'Hotovo! Vytvorenie indexu trvalo %num% sekúnd',

	'filemappings_desc' => 'Nišie môete vidie preh¾ad všetkıch weblogov tejto inštalácie Pivota spoloène so súbormi a šablónami, pouitımi Pivotom k ich vytvoreniu. Je to ve¾mi uitoèné pri h¾adaní vzniku problému pri vytváraní súborov.',

);


$lang['templates'] = array (
	'rollback' => 'Vráti spä',
	'create_template' => 'Vytvori šablónu',
	'create_template_info' => 'Vytvorenie šablóny Pivota od zaèiatku',
	'no_comment' => 'Bez komentára',
	'comment' => 'Komentár*',
	'comment_note' => '(*Pozn.: Komentáre môu by uloené len pri <b>prvom</b> uloení zmien alebo pri vytvorení)',
	'create' => 'Vytvori šablónu',
	'editing' => 'Editácia',
	'filename' => 'Názov súboru',
	'save_changes' => 'Uloi zmeny!',
	'save_template' => 'Uloi šablónu!',		
);


//		Admin			\\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar']['xxx_title'] ones
$lang['admin'] = array (
	'seeusers' => 'Vytvorenie, editácia a odstraòovanie uívate¾ov',
	'seeconfig' => 'Editácia konfiguraènıch súborov',
	'templates' => 'Vytvorenie, editácia a odstraòovanie šablón',
	'maintenance' => 'Vykonanie benej údrby súborov Pivota, ako \'Prerobenie súborov\', \'Overenie databáze\', \'Prerobenie indexu\' a \'Zálohovanie\'.',
	'regen' => 'Prerobi všetky stránky generované Pivotom',
	'blogs' => 'Vytvorenie, editácia a odstraòovanie weblogov publikovanıch Pivotom',
);


//		Maintenace		\\	
$lang['maint'] = array (
	'title' => 'Údrba',	
	'gen_arc_title' => 'Generovanie archívu', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => 'Regenerácia všetkıch archívov', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'Kontrola XML súborov', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'Kontrola (a pokia¾ je to nutné aj oprava) integrity XML súborov', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => 'Zálohovanie',
	'backup_text' => 'Vytvorenie zálohy všetkıch dôleitıch súborov Pivota',
);


//		Stats and referers		\\
$lang['stats'] = array (
	'show_last' => "Zobraz poslednıch",
	'20ref' => "20 odkazov",
	'50ref' => "50 odkazov",
	'allref' => "všetky odkazy",
	'updateref' => "Aktualizuj mapovanie titulkov na odkazy",
	'hostaddress' => 'Hostite¾ské adresy (IP)', 
	'whichpage' => 'Aká stránka',

	'getting' => 'Získaj nové titulky',
	'awhile' => 'Môe to chví¾ku trva, prosím neprerušova.',
	'firstpass' => 'Prvı priechod',
	'secondpass' => 'Druhı priechod',
	'nowuptodate' => 'Vaše mapovanie odkaz-titulok je aktualizované.',
	'finished' => 'Hotovo',
);


//		User Info		\\
	$lang['userinfo'] = array (
	'editfields' => 'Editova poloky uívate¾a',
	'desc_editfields' => 'Editácia poloiek pre popis uívate¾ov',
	'username' => 'Uívate¾ské meno',
	'pass1' => 'Heslo',
	'pass2' => 'Heslo (potvrdenie)',
	'email' => 'Email',
	'userlevel' => 'Úroveò uívate¾a',	
	'userlevel_desc' => 'Úroveò uívate¾a urèuje aké akcie bude ma povolené.',
	'language' => 'Jazyk',	
	'edituser' => 'Editova uívate¾a',  //the link to.. well, edit the user (also the title)
	'edituserinfo' => 'Editova informácie o uívate¾ovi',
	'newuser' => 'Vytvori nového uívate¾a',
	'desc_newuser' => 'Vytvorenie nového úètu v Pivote, umoòujúceho prispieva do weblogu.',
	'newuser_button' => 'Vytvori',
	'edituser_button' => 'Zmeni',
	'pass_too_short' => 'Heslo musí by dlhé min. 6 znakov.',
	'pass_dont_match' => 'Hesla sa nezhodujú',
	'username_in_use' => 'Uívate¾ské meno u existuje',
	'username_too_short' => 'Meno musí ma aspoò 4 znaky.',
	'username_not_valid' => 'Uívate¾ské meno môe obsahova len alfanumerické znaky (A-Z, 0-9) a podèiarkovník (_).',
	'not_good_email' => 'Neplatná emailová adresa',	
	'c_admin_title' => 'Potvrïte vytvorenie aministrátora',
	'c_admin_message' => 'Uívate¾ '.$lang['userlevels']['1'].' má plnı prístup k Pivotu, môe editova všetky nové poloky, komentáre a meni nastavenia. Ste si istí, e chcete aby %s bol '.$lang['userlevels']['1'].'?',
);


//		Config Page		\\		
	$lang['config'] = array (
	'save' => 'Uloi nastavenia',

	'sitename' => 'Názov webu',
	'defaultlanguage' => 'Predvolenı jazyk',
	'siteurl' => 'URL webu',
	'header_fileinfo' => 'Súbor informacií',
	'localpath' => 'Miestna cesta',
	'debug_options' => 'Monos debugova',
	'debug' => 'Mód debugovania',
	'debug_desc' => 'Uká obèas náhodné debugovacie informácie..',
	'log' => 'Logovacie súbory',
	'log_desc' => 'Uchovávaj logy rôznych aktivít',

	'unlink' => 'Odstraòovanie súborov',   
	'unlink_desc' => 'Niektoré servery, pouívajúce safe_mode, môu vyadova pouitie tohto nastavenia. Na väèšine serverov však nebude potrebná iadna zmena.',
	'chmod' => 'Zmeò práva súborov na',
	'chmod_desc' => 'Niektoré servery vyadujú zmeni práva vytváranıch súborov na urèitú hodnotu. Obvyklé hodnoty sú \'0644\' a \'0755\'. Nemeòte tieto hodnoty pokia¾ si nie ste istí èo robíte.',
	'upload_path' => 'Cesta k uploadovanım súborom',	
	'upload_accept' => 'Povolené typy',			
	'upload_extension' => 'Predvolená prípona',
	'upload_save_mode' => 'Prepisova',
	'make_safe' => 'Vyèisti názov súboru',
	'c_upload_save_mode' => 'Èíslovanie súborov',
	'max_filesize' => 'Maximálna ve¾kos súboru',
	'header_datetime' => 'Dátum/èas',
	'timeoffset_unit' => 'Jednotka èasového posunu',
	'timeoffset' => 'Èasovı posun',
	'header_extra' => 'Ïalšie nastavenia',
	'wysiwyg' => 'Pouíva WYSIWYG editor',
	'wysiwyg_desc' => 'Urèuje, èi je predvolenı editor WYSIWYG. Jednotliví uívatelia si toto nastavenie môu zmeni v nastavení \'Moje informácie\'.',
	'def_text_processing' => 'Predvolenı spôsob spracovania textu', 
	'text_processing' => 'Spracovanie textu',
	'text_processing_desc' => 'Urèuje spôsob spracovania textu pri nepouití WYSIWYG editoru. \'Konvertova konce riadkov\' nerobí niè iné ne e mení konce riadkov na  &lt;br&gt;-tag. <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> je kvalitnı, ale ¾ahko ovládate¾nı znaèkovací stıl.',
	'none' => 'Niè',
	'convert_br' => 'Konvertuj konce riadkov na &lt;br /&gt;',
	'textile' => 'Textile',

	'setup_ping' => 'Nastavenie pingu',
	'ping_use' => 'Aktualizácia sledovania pingu',
	'ping_use_desc' => 'Urèuje, èi budú sledovaèe ako weblogs.com automaticky informované Pivotom, pokia¾ pridáte novı príspevok. Sluby ako blogrolling.com sú na tom priamo závislé.',
	'ping_urls' => 'URL kam pingova',
	'ping_urls_desc' => 'Sem môete zada nieko¾ko adries, kde sa bude posiela ping. Nevkladajte reazec http://, inak to nebude fungova. Len vlote adresu - na kadı riadok jednu, alebo ich oddelte znakom rúry (|). Niektoré známe servery:<br /><b>rpc.weblogs.com/RPC2</b> (weblogs.com ping, jeden z najpouívanejších)<br /><b>pivotlog.net/pinger</b> (pivotlog ping, zatia¾ nefunkènı)<br /><b>rcs.datashed.net/RPC2</b> (euro.weblogs.com ping)<br /><b>ping.blo.gs</b> (blo.gs pinger)<br />',

	'new_window' => 'Otvára linky v novıch oknách',
	'emoticons' => 'Pouíva emotikony', 
	'javascript_email' => 'Kódova emailové adresy?',	
	'new_window_desc' => 'Urèuje, èi budú všetky linky v odkazoch otvára nové okno browsera.',

	'mod_rewrite' => 'Porovnávaj súbory',
	'mod_rewrite_desc' => 'Pokia¾ pouívate porovnávanie súborov z Apache, Pivot vytvorí URL ako www.mysite.com/archive/2003/05/30/nice_weather, namiesto www.mysite.com/pivot/entry.php?id=134. Nie všetky servery to podporujú. Pozrite sa do manuálu.',

	'search_index' => 'Automaticky aktualizova index vyh¾adávania',
	'search_index_desc' => 'Urèuje, èi bude index vyh¾adávania aktualizovanı vdy, keï vloíte novı zıznam alebo zmeníte existujúci.',

	'default_introduction' => 'Predvolenı úvod/telo',
	'default_introduction_desc' => 'Urèuje predvolenı obsah úvodu a tela záznamu. Normálne je to prázdny odstavec.',

	'upload_autothumb'	=> 'Automaticky vytvára náh¾ady',
	'upload_thumb_width' => 'Šírka náh¾adu',
	'upload_thumb_height' => 'Vıška náh¾adu',
	'upload_thumb_remote' => 'Externı orezávací skript', 
	'upload_thumb_remote_desc' => 'Pokia¾ váš server nemá potrebné kninice pre orezávanie obrázkov, môete poui externı skript.',


);


//		Weblog Config	\\
$lang['weblog_config'] = array (
	'edit_weblog' => 'Editova weblog',
	'edit_blog' => 'Editova blog',
	'new_weblog' => 'Novı weblog',
	'new_weblog_desc' => 'Prida novı weblog',
	'del_weblog' => 'Odstráni weblog',
	'del_this_weblog' => 'Odstráni tento weblog.',
	'create_new' => 'Vytvori novı weblog',
	'subw_heading' => 'Pre kadı zaloenı subweblog môete nastavi pouitú šablónu rovnako ako kategórii, v ktorej má by publikovanı',
	'create' => 'Dokonèi',
	
	'create_1' => 'Vytvorenie / editácia weblogu, krok 1 z 3',
	'create_2' => 'Vytvorenie / editácia weblogu, krok 2 z 3',
	'create_3' => 'Vytvorenie / editácia weblogu, krok 3 z 3',

	'name' => 'Názov weblogu',
	'payoff' => 'Podtitulok',
	'payoff_desc' => 'Podtitulok môe obsahova krátky popis weblogu',
	'url' => 'URL weblogu',
	'url_desc' => 'Pokia¾ necháte políèko prázdne, Pivot sám urèí URL weblogu. Pokia¾ pouívate weblog ako súèas rámcov alebo ako serverside include, pouite toto nastavenie.',
	'index_name' => 'Úvodná stránka (Index)',
	'index_name_desc' => 'Názov index súboru. Obvykle je to \'index.html\' alebo \'index.php\'.',

	'ssi_prefix' => 'Prefix SSI',
	'ssi_prefix_desc' => 'Pokia¾ váš weblog pouíva SSI (neodporúèame), pouite nastavenie prefixu mien súborov Pivotu pre SSI. Napr. \'index.shtml?p=\'. Pokia¾ neviete k èomu slúi nastavenie, nechajte ho prázdne.',

	'front_path' => 'Cesta k úvodnej stránke',
	'front_path_desc' => 'Relatívna alebo absolútna cesta, kde Pivot vytvorí úvodnú stránku weblogu.',
	'file_format' => 'Názov súboru',
	'entry_heading' => 'Nastavenie záznamov',
	'entry_path' => 'Cesta k záznamom',
	'entry_path_desc' => 'Relatívna alebo absolútna cesta, kde Pivot vytvorí záznam stránky, pokia¾ nepouijete  \'ivé vstupy\'.',
	'live_comments' => 'ivé vstupy',
	'live_comments_desc' => 'Pokia¾ pouívate \'ivé vstupy\', Pivot nebude vytvára súbory pre jednotlivé záznamy. Preferované nastavenie.',
	'readmore' => '\'Celı èlánok...\'',
	'readmore_desc' => 'Text pouitı k upozorneniu na pokraèovanie textu záznamu. Pokia¾ necháte nastavenie nevyplnené, Pivot pouije nastavenie z príslušného jazyka.',
	
	'arc_heading' => 'Nastavenie archívu',
	'arc_index' => 'Súbor indexu',
	'arc_path' => 'Cesta k archívom',
	'archive_amount' => 'Poèet archívov',
	'archive_unit' => 'Typ archívov',
	'archive_format' => 'Formát archívu',
	'archive_none' => 'iadne archívy',
	'archive_weekly' => 'Tıdenné archívy',
	'archive_monthly' => 'Mesaèné archívy',

	'archive_link' => 'Odkaz na archív',
	'archive_linkfile' => 'Formát zoznamu archívov',	
	'archive_order' => 'Poradie archívov',
	'archive_ascending' => 'Vzostupne (najstarší prvı)',
	'archive_descending' => 'Zostupne (najnovší prvı)',

	'templates_heading' => 'Šablóny',
	'frontpage_template' => 'Šablóna úvodnej stránky',
	'frontpage_template_desc' => 'Šablóna urèujúca vzh¾ad úvodnej stránky weblogu.',
	'archivepage_template' => 'Šablóna stránky s archívmi',
	'archivepage_template_desc' => 'Šablóna urèujúca vzh¾ad archívov. Môe by rovnaká ako \'Šablóna úvodnej stránky\'.',	
	'entrypage_template' => 'Šablóna záznamu',
	'entrypage_template_desc' => 'Šablóna urèujúca vzh¾ad jednotlivıch záznamov.',	
	'extrapage_template' => 'Ïalšie šablóny',
	'extrapage_template_desc' => 'Šablóna urèujúca vzh¾ad stránky pre vyh¾adávanie v archíve.',

	'shortentry_template' => 'Šablóna skráteného záznamu',
	'shortentry_template_desc' => 'Šablóna urèujúca vzh¾ad skráteného záznamu pre weblog a archív.',	
	'num_entries' => 'Poèet záznamov',
	'num_entries_desc' => 'Poèet záznamov subweblogu na úvodnej stránke.',	
	'offset' => 'Posun',
	'offset_desc' => 'Posun urèuje poèet záznamov, ktoré budú preskoèené pri generovaní stránky. Vyuitie napr. pre vytvorenie zoznamu \'Predchádzajúce záznamy\'.',
	'comments' => 'Povoli komentáre?',
	'comments_desc' => 'Urèuje, èi budú ma uívatelia monos pridáva komentáre k záznamom subweblogu',	

	'setup_rss_head' => 'Konfigurácia RSS a Atom',
	'rss_use' => 'Vytvára kanály',
	'rss_use_desc' => 'Urèuje, èi bude Pivot automaticky generova kanály RSS a Atom pre tento weblog.',
	'rss_filename' => 'Súbor pre RSS',
	'atom_filename' => 'Súbor pre Atom',
	'rss_path' => 'Cesta k RSS kanálu',
	'rss_path_desc' => 'Relatívna alebo absolútna cesta k adresáru, kde Pivot vytvorí súbor pre RSS kanál.',
	'rss_size' => 'Dåka záznamu pre RSS kanál',	
	'rss_size_desc' => 'Dåka (poèet znakov) kadého záznamu pre RSS kanál',	

	'lastcomm_head' => 'Nastavenie poslednıch komentárov',
	'lastcomm_amount' => 'Poèet',
	'lastcomm_length' => 'Dåka',
	'lastcomm_format' => 'Formát',
	'lastcomm_format_desc' => 'Tieto nastavenia urèujú vzh¾ad zoznamu \'Poslednıch komentárov\' na úvodnej stránke weblogu.',
	'lastcomm_redirect' => 'Presmerováva odkazy',
	'lastcomm_redirect_desc' => 'Pre úèinnejší boj so spamom môete odkazy presmerováva. To saí spamerom zvyšovanie pozície v Google.',

	'lastref_head' => 'Nastavenie poslednıch odkazov',
	'lastref_amount' => 'Poèet',
	'lastref_length' => 'Dåka',
	'lastref_format' => 'Formát',
	'lastref_format_desc' => 'Tieto nastavenia urèujú vzh¾ad zoznamu \'Poslednıch odkazov\' na úvodnej stránke weblogu.',
	'lastref_graphic' => 'Pouíva grafiku',
	'lastref_graphic_desc' => 'Urèuje èi budú posledné odkazy zvıraznené malou ikonkou pod¾a vyhladávaèov cez ktoré návštevníci prichádzajú.',
	'lastref_redirect' => 'Presmerováva odkazy',
	'lastref_redirect_desc' => 'Pre úèinnejší boj so spamom môete odkazy presmerováva. To saí spamerom zvyšovanie pozície v Google.',

	'various_head' => 'Ïalšie nastavenia',
	'emoticons' => 'Pouíva emotikony',
	'emoticons_desc' => 'Urèuje èi budú emotikony ako :-) prevedené na grafické ekvivalenty.',
	'encode_email_addresses' => 'Kódova emailové adresy',
	'encode_email_addresses_desc' => 'Urèuje, èi budú emailové adresy kódováné pomocou javascriptu, aby boli chránené pred spamom.',
	'target_blank' => 'Otvori v novom okne',
	'xhtml_workaround' => 'XHTML kódovanie',  
	'target_blank_desc' => 'Pokia¾ zvolíte \'Áno\', budú sa všetky odkazy v záznamoch otvára do nového okna browsera. Pokia¾ zvolíte \'XHTML kódovanie\', budú ma odkazy príznak rel="external", èo neporuší správny XHTML kód.',

	'date_head' => 'Nastavenie zobrazenia dátumu',
	'full_date' => 'Formát úplného dátumu',
	'full_date_desc' => 'Urèuje formát úplného dátumu a èasu. Najèastejšie je pouitı na zaèiatku stránky s jednım záznamom',
	'entry_date' => 'Èas záznamu', 
	'diff_date' => 'Dátum zmeny',
	'diff_date_desc' => '\'Dátum zmeny\' súvisí s \'èasom záznamu\'. Zatia¾ èo èas je zobrazenı u kadého záznamu, dátum len keï sa líši od predchádzajúceho.',
	'language' => 'Jazyk',
	'language_desc' => 'Urèuje, v akom jazyku sa budú zobrazova dátumy a aké bude kódovanie stránky (napr. iso-8859-1, koi8-r atd.).',	

	'comment_head' => 'Nastavenie komentárov',
	'comment_sendmail' => 'Posiela maily?',
	'comment_sendmail_desc' => 'Správcovi weblogu môu by preposielané komentáre mailom.',
	'comment_emailto' => 'Posla na',
	'comment_emailto_desc' => 'Vpíšte adresy kam si prajete komentáre, oddelte ich èiarkou.',
	'comment_texttolinks' => 'Konvertova text na odkazy',
	'comment_texttolinks_desc' => 'Urèuje, èi budú URL vloené do textu konvertované na klikacie odkazy.',
	'comment_wrap' => 'Zalamova komentáre po',
	'comment_wrap_desc' => 'Aby ste sa vyhli dlhım riadkom v komentároch, ktoré by mohli poškodi vzh¾ad stránky, urèite poèet znakov pre zalomenie.',
	'comments_text_0' => 'oznaèenie pre \'iadny komentár\'iadny komentár',  
	'comments_text_1' => 'oznaèenie pre \'jeden komentár\'Jeden komentár',  
	'comments_text_2' => 'oznaèenie pre \'X komentárov\'Komentárov: ',      
	'comments_text_2_desc' => 'Text pre zobrazenie poètu komentárov u záznamu. Pokia¾ zanecháte vo¾né bude dosadenı pod¾a jazyka.',

	'comment_pop' => 'Komentáre v popup okne?',
	'comment_pop_desc' => 'Urèuje, èi sa budú komentáre zobrazova v pôv. alebo popup (vyskakovacom) okne.',
	'comment_width' => 'Šírka okna',
	'comment_height' => 'Vıška okna',
	'comment_height_desc' => 'Urèenie rozmerov popup okna.',
			
	'comment_format' => "Formát komentárov",
	'comment_format_desc' => "Urèuje spôsob formátovania komentárov k záznamu.",

	'comment_textile' => 'Povoli Textile',
	'comment_textile_desc' => 'Pokia¾ nastavíte \'Áno\' , návštevníci môu v komentároch pouíva <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a>.',

	'saved_create' => 'Novı weblog bol vytvorenı.',
	'saved_update' => 'Weblog bol aktualizovanı.',
	'deleted' => 'Weblog bol odstránenı.',
	'confirm_delete' => 'Chystáte sa odstráni weblog %1. Ste si tım istí?',	

	'blogroll_heading' => 'Nastavenie sluby Blogroll',
	'blogroll_id' => 'Blogrolling ID #',
	'blogroll_id_desc' => 'Tu môete nastavi <a href="http://www.blogrolling.com" target="_blank">blogrolling.com</a> ako slubu blogroll. Je to vıborná sluba pre správu odkazov, ktorá ukazuje kedy boli naposledy aktualizované. Pokia¾ túto slubu nepouívate, nastvenie ignorujte. Po prihlásení na blogrolling.com zvo¾te \'get code\', kde nájdete odkaz, obsahujúci vaše ID. Vypadá zhruba takto: 2ef8b42161020d87223d42ae18191f6d',
	'blogroll_fg' => 'Farba textu',
	'blogroll_bg' => 'Farba pozadia',
	'blogroll_line1' => 'Farba riadku 1',
	'blogroll_line2' => 'Farba riadku 2',
	'blogroll_c1' => 'Farba 1',
	'blogroll_c2' => 'Farba 2',
	'blogroll_c3' => 'Farba 3',
	'blogroll_c4' => 'Farba 4',
	'blogroll_c4_desc' => 'Tieto farby urèujú ako bude vyzera váš blogroll. Farby 1 a 4 indikujú aktuálnos odkazu.',
);


$lang['upload'] = array (
	//		File Upload		\\
	'preview' => 'Kompletnı zoznam',
	'thumbs' => 'Náh¾ad',
	'create_thumb' => '(Vytvori náh¾ad)',
	'title' => 'Súbory',
	'thisfile' => 'Upload nového súboru:',
	'button' => 'Upload',
	'filename' => 'Názov súboru',
	'thumbnail' => 'Náh¾ad',
	'date' => 'Dátum',
	'filesize' => 'Ve¾kos súboru',
	'dimensions' => 'Šírka x Vıška',		
	'delete_title' => 'Odstráni obrázok',
	'areyousure' => 'Ste si istí, e chcete odstráni súbor %s?',
	'picheader' => 'Odstráni tento obrázok?',
	'create' => 'vytvori',
	'edit' => 'editova',

	'insert_image' => 'Vloi obrázok',
	'insert_image_desc' => 'Aby ste mohli obrázok vloi, musíte ho najprv uploadova alebo vybra.',
	'insert_image_popup' => 'Vloi okno s obrázkom',
	'insert_image_popup_desc' => 'Aby ste mohli vytvori okno, musíte uploadova obrázok alebo vybra u exitujúci. Potom vyberte text alebo náh¾ad, ktorı bude umiestnenı v okne.',
	'choose_upload' => 'upload',
	'choose_select' => 'alebo vybra',
	'imagename' => 'Názov obrázku',
	'alt_text' => 'Alternatívny text',
	'align' => 'Zarovna',
	'border' => 'Okraje',
	'pixels' => 'pixelov',
	'uploaded_as' => 'Váš súbor bol uloenı ako \'%s\'.',
	'not_uploaded' => 'Váš súbor nebol uloenı. Nastala nasledujúca chyba:',
	'center' => 'Centrova (predvolené)',
	'left' => 'V¾avo',
	'right' => 'Vpravo',
	'inline' => 'V rade',		
	'notice_upload_first' => 'Najprv musíte vybra alebo uploadova obrázok',
	'select_image' => 'Vyberte obrázok',

	'for_popup' => 'Do popup okna',		
	'use_thumbnail' => 'Poui náh¾ad',		
	'edit_thumbnail' => 'editova náh¾ad',		
	'use_text' => 'Poui text',		
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => 'Vloi odkaz',
	'insert_link_desc' => 'Vlote text do políèka nišie. Návštevníci vašich stránok uvidia tento text pri prejdení myšou cez odkaz.',
	'url' => 'URL',
	'title' => 'Titulok',
	'text' => 'Text',
);


//		Categories		\\
$lang['category'] = array (
	'edit_who' => 'Zvolte, kto môe pripieva do kategórie \'%s\'',
	'name' => 'Názov',
	'users' => 'Uívatelia',
	'make_new' => 'Vytvori novú kategóriu',
	'create' => 'Vytvori kategóriu',
	'canpost' => 'Vyberte uívate¾ov s právom prispieva do tejto kategórie',
	'same_name' => 'Kategória s tımto názvom u existuje',
	'need_name' => 'Kategória potrebuje názov',
	
	'allowed' => 'Povolené',
	'allow' => 'Povoli',
	'denied' => 'Zakázané',
	'deny' => 'Zakáza',
	'edit' => 'Editova kategóriu',
	
	'delete' => 'Odstráni kategóriu',
	'delete_desc' => 'Zvo¾te \'Áno\', pokia¾ chcete odstráni túto kategóriu',

	'delete_message' => 'V tejto verzii Pivotu budú odstránené len názvy kategórií. V bud. verziách si bude moné vybra, èo sa má vykona so záznamami, ktoré do nich patria.',
);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "Vloi záznam",
	'preview_entry' => "Náh¾ad záznamu",

	'first' => 'prvı',
	'last' => 'poslednı',
	'next' => 'ïalší',
	'previous' => 'predchádazjúci',

	'jumptopage' => 'skoèi na stránku (%num%)',
	'filteron' => 'filtrova (%name%)',
	'filteroff' => 'filter vyp.',
	'title' => 'Titulok',
	'subtitle' => 'Podtitulok',
	'introduction' => 'Úvod',
	'body' => 'Telo',
	'publish_on' => 'Publikováné',
	'status' => 'Stav',
	'post_status' => 'Stav vloenia',
	'category' => 'Kategória',
	'select_multi_cats' => '(Ctrl-klik pre vıber viac kategórií)',
	'last_edited' => "Naposledy zmenené",
	'created_on' => "Vytvorené",		
	'date' => 'Dátum',
	'author' => 'Autor',
	'code' => 'Kód',
	'comm' => 'Poèet kom.',
	'name' => 'Meno',
	'allow_comments' => 'Povoli komentáre',
	'convert_lb' => 'Konvertova konce riadkov',
	'always_off' => '(Vdy vypnuté, pokia¾ pouívate WYSIWYG mód)',
	'be_careful' => '(Pouívajte opatrne!)',
	'edit_comments' => 'Editova komentáre',
	'edit_comments_desc' => 'Editácia komentárov k tomuto záznamu',
	'edit_comment' => 'Editova komentár',
	'delete_comment' => 'Odstráni komentár',
	'block_single' => 'Blokova IP %s',
	'block_range' => 'Blokova IP rozsah %s',
	'unblock_single' => 'Odblokova IP %s',
	'unblock_range' => 'Odblokova IP rozsah %s',
	'trackback' => 'Spätné sledovanie',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => 'Vybra všetko',
	'c_none' => 'Zrušit vıber',
	'choose' => '- vyberte monos -',
	'publish' => 'Nastavi stav \'publikované\'',
	'hold' => 'Nastavi stav \'pozdrané\'',
	'delete' => 'Odstránit',
	'generate' => 'Publikova a generova',

	'with_checked_entries' => "S vybranımi záznamami vykonaj:",
	'with_checked_files' => "S vybranımi súbormi vykonaj:",
	'with_checked_templates' => 'S vybranımi šablónami vykonaj:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => 'nemôem otvori adresár, skontrolujte práva.',
	'path_read' => 'nemôem èíta z adresára, skontrolujte práva.',
	'path_write' => 'nemôem zapisova do adresára, skontrolujte práva.',

	'file_open' => 'nemôem otvori súbor, skontrolujte práva.',
	'file_read' => 'nemôem èíta súbor, skontrolujte práva.',
	'file_write' => 'nemôem zapisova do súboru, skontrolujte práva.',
);


//		Notices			\\
$lang['notice'] = array (		
	'comment_saved' => "Komentáre boli uloené.",
	'comment_deleted' => "Komentáre boli odstránené.",
	'comment_none' => "iadne komentáre k tomuto záznamu.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => 'Hlasov \'%val%\' pre tento záznam',
	'good' => 'Dobrı',
	'bad' => 'Zlı',
	'already' => 'U ste pre tento záznam hlasoval/a',
	'register' => 'Váš hlas pre \'%val%\' bol zaznamenanı',
);


$lang['comment'] = array (
	'register' => 'Vïaka za komentár.',
	'preview' => 'Prezeranie vášho komentára. Nezabudnite kliknú na \'Vloi komentár\', aby sa skutoène uloil.',
	'duplicate' => 'Váš komentáø nebol uloenı, pretoe je kópiou predchádzajúceho záznamu.',
	'no_name' => 'Mali by ste vloi vaše meno alebo prezıvku do políèka \'meno\'. Nezabudnite kliknú na \'Vloi komentár\', aby sa skutoène uloil.',
	'no_comment' => 'Mali by ste nieèo napísa do políèka \'komentár\'. Nezabudnite kliknú na \'Vloi komentár\', aby sa skutoène uloil.',
);


$lang['comments_text'] = array (
	'0' => "iadne komentáre",
	'1' => "Jeden komentár",
	'2' => "Komentárov: %num%", 
);


$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "Archívy",
	'next_archive' => "Ïalší archív",
	'previous_archive' => "Predchádzajúci archív",
	'last_comments' => "Posledné komentáre",
	'last_referrers' => "Posledné odkazy",
	'calendar' => "Kalendár",
	'links' => "Odkazy",
	'xml_feed' => "XML kanál (RSS 1.0)",
	'powered_by' => "Vyuíva",
	'name' => "Meno",
	'email' => "Email",
	'url' => "URL",
	'date' => "Dátum",		
	'comment' => "Komentár",
	'ip' => "IP-adresa",		
	'yes' => "Áno",
	'no' => "Nie",
	'emoticons' => "Emotikony",
	'emoticons_reference' => "Otvori zoznam emotikonov",
	'textile' => "Textile",
	'textile_reference' => "Otvori nápovedu Textile",  
	'post_comment' => "Vloi komentár",
	'preview_comment' => "Náh¾ad komentára",
	'remember_info' => "Pamäta si osobné informácie?",
	'disclaimer' => "<b>Malé upozornenie:</b> všetky HTML tagy okrem &lt;b&gt; a &lt;i&gt; budú odstránené. Odkazy a maily staèí vloi zapísaním obyèajného textu.",	
	'search_title' => "Vısledky h¾adania",
	'search' => "H¾ada!",
	'nomatches' => "Pre '%name%' nebol nájdenı iadny záznam. Skúste vloi nieèo iné.",
	'matches' => "Vısledky pre '%name%':",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Editova uívate¾ské polia',
	'edit' => 'Editova',
	'create' => 'Vytvori',

	'dispname' => 'Zobrazené meno',
	'intname' => 'Vnútorné meno',
	'intname_desc' => 'Vnútorné meno je meno poloky, ktoré bude zobrazené, pokia¾ poiadate Pivot o zobrazenie šablóny.',
	'size' => 'Ve¾kos',
	'rows' => 'Riadky',
	'cols' => 'Ståpce',
	'maxlen' => 'Maximálna dåka',
	'minlevel' => 'Min. úroveò uívate¾a',	
	'filter' => 'Filtrova pod¾a',
	'filter_desc' => 'Filtrováním pod¾a tejto poloky môete obmedzi vstup, ktorı v òom môe by.',
	'no_filter' => 'Niè',
	'del_title' => 'Potvrdi odstránenie',
	'del_desc' => 'Odstránenie políèka (<b>%s</b>) uívate¾ského záznamu odstráni tie všetky záznamy, ktoré v òom uívate¾ uloil, a miesto neho bude v šablónach prádzne miesto.',	
	
	'already' => 'Toto meno sa u pouíva',
	'int' => 'Vnútorné meno musí by dlhšie ako 3 znaky',
	'short_disp' => 'Zobrazené meno musí by dlhšie ako 3 znaky',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => 'Bookmarklety',
	'bm_add' => 'Prida bookmarklet.',
	'bm_withlink' => 'Novı Pivot',
	'bm_withlink_desc' => 'Bookmarklet otvorí nové okno so záznamom, ktorı bude obsahova odkaz na stránku, z ktorej bol otvorenı.',

	'bm_nolink' => 'Novı Pivot',
	'bm_nolink_desc' => 'Bookmarklet otvorí okno s prázdnym záznamom.',

	'bookmarklets_info' => 'Bookmarklety môete poui k rıchlemu vkladaniu novıch záznamov do Pivota. Pre vloenie bookmarkletu do vášho browsera postupujte nasledovne (postup sa môe mierne líši pod¾a pouitého browsera)',
	'bookmarklets_info_1' => 'Kliknite a pretiahnite bookmarklet do vašej lišty s odkazmi alebo na tlaèidlo \'Bookmarks\' (Záloky).',
	'bookmarklets_info_2' => 'Pravım tl. na myši kliknite na bookmarklet a vyberte \'Add to Bookmarks\' (Prida do záloiek).',
);


// A little tool to help you check if the file is correct..
if (count(get_included_files())<2) {

	$groups = count($lang);
	$total = 0;
	foreach ($lang as $langgroup) {
		$total += count($langgroup);
	}
	echo "<h2>Jazykovı súbor je v poriadku!</h2>";
	echo "Tento súbor obsahuje $groups skupín a celkom $total nápisov.";

}

?>
