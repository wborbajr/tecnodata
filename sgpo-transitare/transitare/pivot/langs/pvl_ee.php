<?php
//Eesti (Estonian)

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2rd line.

// Estonian translation of Pivot lang file
// Translated by: Sten A. Hankewitz <sten@hankewitz.ee>
//
// Latest Update: Pivot (www.pivotlog.net) 28.01.2005
// New English strings added to bring into line with v1.22. Translation required.
//

// allow for different encoding for non-western languages
$encoding="iso-8859-1";
$langname="et";


//        General        \\
$lang['general'] = array (
    'yes' => 'Jah',    //affirmative
    'no' => 'Ei',        //negative
    'go' => 'Minek!',    //proceed

    'minlevel' => 'Sul pole õigust seda muuta',
    'email' => 'E-post',
    'url' => 'Aadress',
    'further_options' => "Muud seaded",
    'basic_view' => "Tavaline vaade",
    'basic_view_desc' => "Vaata ainult tavalisi välju",
    'extended_view' => "Laiendatud vaade",
    'extended_view_desc' => "Vaata kõiki muudetavaid välju",
    'select' => "Vali",
    'cancel' => "Katkesta",
    'delete' => 'Kustuta',
    'welcome' => "Tere tulemast %build%.",
    'write' => "Kirjuta",
	'write_open_error' => "Write Error. Could not open file for writing",
	'write_write_error' => "Write Error. Could not write to file",
    'done' => "Valmis!",
    'shortcuts' => "Otseteed",
    'cantdelete' => "Sul pole õigust %title% kustutada!",
    'cantdothat' => "Sul pole õigust %title% 'ga seda teha!",
);


$lang['userlevels'] = array (
        'Superadmin', 'Administrator', 'Advanced', 'Normal', 'Moblogger'
        //  this one might be a bit hard to translate, but basically it's an order of
        //  power or trust.  Superadmin would be the person in charge - no one can do
        //  anything about his decisions. Admin is only regulated by the Superadmin,
        //  Advanced by the Admin and Superadmin, etc..
        //  Just get the idea of it.
);


$lang['numbers'] = array (
    'null', 'üks', 'kaks', 'kolm', 'neli', 'viis', 'kuus', 'seitse', 'kaheksa', 'üheksa', 'kümme', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen'
);


$lang['months'] = array (
    'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember'
);


$lang['months_abbr'] = array (
    'jaan', 'veeb', 'märts', 'apr', 'mai', 'juuni', 'juuli', 'aug', 'sept', 'okt', 'nov', 'dets'
);


$lang['days'] = array (
    'pühapäev', 'esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede', 'laupäev'
);


$lang['days_abbr'] = array (
    'P', 'E', 'T', 'K', 'N', 'R', 'L'
);


$lang['days_calendar'] = array (
	'S', 'M', 'T', 'W', 'T', 'F', 'S'
);


$lang['datetime_words'] = array (
    'aasta', 'kuu', 'nädal', 'päev', 'tund', 'minut', 'sekund'    //the actual words for them.
);


//        Login Page        \\
$lang['login'] = array (
    'title' => 'Login',
    'name' => 'Kasutaja',
    'pass' => 'Parool',
    'remember' => 'Pea meeles',
    'rchoice' => array (
        '0' => 'mitte midagi',
        '1' => 'mu kasutajanime ja parooli',
        '2' => 'Nii ma sisse logingi'
    ),
    'delete_cookies_desc' => 'If you are certain you\'re using the correct username and password, but you are <br />having problems logging in, you might try deleting the cookies for this domain:',
    'delete_cookies' => 'Kustuta küpsised',
    'retry' => 'Vale kasutajanimi või parool',
    'banned' => 'You have failed to gain access in 10 attempts. As a result, this IP has been banned from attempting to login for 12 hours.',

);


//        Main Bar        \\
    $lang['userbar'] = array (
    'main' => 'Üldvaade',
    'entries' => 'Postitused',
    'submit' => 'Uus postitus',
    'comments' => 'Kommentaarid',
    'modify' => 'Muuda postitusi',
    'userinfo' => 'Minu info',
    'u_settings' => 'Minu seaded',
    'u_marklet' => 'Lemmikud',
    'files' => 'Majanda meediaga',
    'upload' => 'Üleslaadimine',
    'stats' => 'Statistika',
    'admin' => 'Administratsioon',

    'main_title' => 'Pivoti üldvaade',
    'entries_title' => 'Postituste üldvaade',
    'submit_title' => 'Uus sisestus',
    'comments_title' => 'Muuda ja kustuta kommentaare',
    'modify_title' => 'Muuda postitust',
    'userinfo_title' => 'Vaata minu infot',
    'u_settings_title' => 'Muuda mu isiklikke seadeid',
    'u_marklet_title' => 'Loo lemmikuid',
    'files_title' => 'Majanda meediat või lae seda üles',
    'upload_title' => 'Lae üles faile',
    'uploaded_success' => 'Fail on üles laetud',
    'stats_title' => 'Vaata logisid ja statistikat.',
    'updatetitles_title' => 'Vaata logisid ja statistikat.',
    'admin_title' => 'Administreerimise üldvaade',
    'recent_entries' => 'Viimatised postitused',
    'recent_comments' => 'Viimatised kommentaarid',
);


$lang['adminbar'] = array (
    //        Admin Bar        \\
    //'trebuild' => 'Rebuild all Files', rolled into maintenance
    'seeusers' => 'Kasutajad',
    'seeconfig' => 'Seaded',
	'filemappings' => 'File Mappings',
    'templates' => 'Vorm',
    'maintenance' => 'Haldus',
    'regen' => 'Ehita kõik failid',
    'blogs' => 'Ajaveebid',
    'categories' => 'Kategooriad',
    'verifydb' => 'Kinnita andmebaasi',
    'buildindex' => 'Ehita indeks',
    'buildsearchindex' => 'Ehita otsinguindeks',
    'buildfrontpage' => 'Ehita esileht',
    'sendping' => 'Saada pinge',


    'backup' => 'Varukoopia',
    'description' => 'Kirjeldus',
    'conversion' => 'Muutmine',
    'seeusers_title' => 'Loo, muuda ja kustuta kasutajaid',
    'userfields' => 'Kasutaja info väljad',
    'userfields_title' => 'Loo, muuda ja kustuta kasutaja info välju',
    'seeconfig_title' => 'Muuda seadete faili',
    'templates_title' => 'Loo, muuda ja kustuta vorme',
    'maintenance_title' => 'Hoolda Pivoti faile',
    'regen_title' => 'Ehita üles falid ja arhiivid, mida Pivot loob',
    'blogs_title' => 'Loo, muuda ja kustuta ajaveebe',
    'blogs_edit_title' => 'Muuda ajaveebi seadeid ',
    'categories_title' => 'Loo, muuda ja kustuta kategooriaid',
	'categories_title' => 'Create, edit and delete the Categories',
    'verifydb_title' => 'Kontrolli andmebaasi õigsust',
    'buildindex_title' => 'Ehita andmebaasi indeks',
    'buildsearchindex_title' => 'Ehita otsinguindeks',
    'buildfrontpage_title' => 'Ehita esileht, arhiivid ja RSS.',
    'backup_title' => 'Tee oma sisestustest varukoopia',
	'backup_config' => 'Backup of configuration files',
	'backup_config_desc' => 'This will let you download a zip file containing your configuration files',
    'ipblocks' => 'IP blokeeringud',
    'ipblocks_title' => 'Vaata ja muuda blokeeritud IPsid.',
    'ipblocks_stored' => 'IP-aadressid on salvestatud.',
    'ipblocks_store' => 'Salvesta need IP-aadressid',
	'ignoreddomains' => 'Ignored Domains',
	'ignoreddomains_title' => 'View and Edit the Ignored Domains.',
	'ignoreddomains_stored' => 'The Ignored Domains have been stored.',
	'ignoreddomains_store' => 'Store these Ignored Domains',
    'fileexplore' => 'Failivaatleja',
    'fileexplore_title' => 'Vaata faile',
    'sendping_title' => 'Saada pinge.',
    'buildindex_start' => 'Toimub indeksi ehitamine, see võib võtta veidi aega, ära sega vahele.',
    'buildsearchindex_start' => 'Toimub otsinguindeksi ehitamine, see võib võtta veidi aega, ära sega vahele.',
    'buildindex_finished' => 'Valmis! Ehitamine võttis %num% sekundit',

	'filemappings_desc' => 'Below you can see an overview of each weblog in this Pivot installation, together with which files are created by Pivot and what templates it uses to create these files. This can also be very useful when pinpointing trouble with the creation of files.',

);


$lang['templates'] = array (
    'rollback' => 'Tagasikerimine',
    'create_template' => 'Loo vorm',
    'create_template_info' => 'Loo vorm valgelt lehelt',
    'no_comment' => 'Info puudub',
    'comment' => 'Info*',
    'comment_note' => '(*Märkus: Infot saab salvestada vaid <b>esimesel</b> salvestusel)',
    'create' => 'Loo vorm',
    'editing' => 'Muutmine',
    'filename' => 'Failinimi',
    'save_changes' => 'Salvesta muutused!',
    'save_template' => 'Salveta vorm!',
);


//        Admin            \\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar']['xxx_title'] ones
$lang['admin'] = array (
    'seeusers' => 'Loo, muuda ja kustuta kasutajaid',
    'seeconfig' => 'Muuda seadete faili',
    'templates' => 'Loo, muuda ja kustuta vorme',
    'maintenance' => 'Hoolda Pivoti faile',
    'regen' => 'Ehita kõik failid, mille Pivot loob',
    'blogs' => 'Loo, muuda ja kustuta erinevaid ajaveebe, mida Pivot avaldab',
);


//        Maintenace        \\
$lang['maint'] = array (
    'title' => 'Hooldus',
    'gen_arc_title' => 'Loo arhiiv', /* bob notes: redundant, see 'regen' */
    'gen_arc_text' => 'Taasloo kõik arhiivid', /* bob notes: redundant, see 'regen' */
    'xml_title' => 'Kontrolli XML-faile', /* bob notes: replace with more general 'Verify DB' */
    'xml_text' => 'Kontrolli ja paranda XML-failide õigsust', /* bob notes: replace with more general 'Verify DB' */
    'backup_title' => 'Varukoopia',
    'backup_text' => 'Loo varukoopia kõigist Pivoti olulistest failidest',
);


//        Stats and referers        \\
$lang['stats'] = array (
    'show_last' => "Näita viimaseid ",
    '20ref' => "20 viitajat ",
    '50ref' => "50 viitajat ",
    'allref' => "Kõik viitajad ",
    'updateref' => "Uuenda viitajaid ",
	'showall' => "both blocked and non-blocked lines",
	'updateref' => "Update the referer to title mappings",
    'hostaddress' => 'Peremees-aadress (ip-aadress)',
    'whichpage' => 'Milline lehekülg',

    'getting' => 'Uute pealkirjade saamine',
    'awhile' => 'See võib võtta aega, ära sega vahele.',
    'firstpass' => 'Esimene',
    'secondpass' => 'Teine',
    'nowuptodate' => 'Viitajate nimekiri on nüüd õige.',
    'finished' => 'Tehtud',
);


//        User Info        \\
    $lang['userinfo'] = array (
    'editfields' => 'Muuda kasutajate välju',
    'desc_editfields' => 'Muuda välju, mida kasutajad saavad kasutada enda kirjeldamiseks',
    'username' => 'Kasutajanimi',
    'pass1' => 'Parool',
    'pass2' => 'Parool veelkord',
    'email' => 'E-post',
    'userlevel' => 'Kasutaja tase',
    'userlevel_desc' => 'Kasutaja tase märgib, mida kasutaja saab Pivotis teha.',
    'language' => 'Keel',
	'lastlogin' => 'Last Login',
    'edituser' => 'Muuda kasutajat',  //the link to.. well, edit the user (also the title)
    'edituserinfo' => 'Muuda kasutaja infot',
    'newuser' => 'Loo uus kasutaja',
    'desc_newuser' => 'Loo uus kasutajakonto Pivotisse, lubades tal posititada ajaveebi.',
    'newuser_button' => 'Loo',
    'edituser_button' => 'Muuda',
    'pass_too_short' => 'Paroolis peab olema vähemalt neli märki.',
	'pass_equal_name' => 'Password can\'t be the same as username.',
    'pass_dont_match' => 'Paroolid ei ühildu',
    'username_in_use' => 'Kasutajanimi on juba kasutusel',
    'username_too_short' => 'Nimes peab olema vähemalt neli märki',
    'username_not_valid' => 'Kasutajanimedes võib olla ainult tähed ja numbrid (A-Z, 0-9) ja alakriips (_).',
    'not_good_email' => 'See pole kehtiv e-posti aadress',
    'c_admin_title' => 'Kinnita administraatori loomine',
    'c_admin_message' => ''.$lang['userlevels']['1'].' saab kogu kontrolli Pivoti üle, ta saab muuta uudiseid, kommentaare ja muta seadeid. Oled sa kindel, et panid kasutajataseme õigesti?',
);


//        Config Page        \\
    $lang['config'] = array (
    'save' => 'Salvesta seaded',

    'sitename' => 'Saidi nimi',
    'defaultlanguage' => 'Keel vaikimisi',
	'defaultencoding' => 'Use encoding',
	'defaultencoding_desc' => 'This defines the encoding that is used (like utf-8 or iso-8859-1). You should leave this blank, unless you know what you\'re doing. If you leave this blank it will use the appropriate settings from the language files.',
    'siteurl' => 'Saidi aadress',
    'header_fileinfo' => 'Faili info',
    'localpath' => 'Kohalik teerada (path)',
    'debug_options' => 'Silumisseaded',
    'debug' => 'Silumistase',
    'debug_desc' => 'Näita suvalist silumisinfot..',
    'log' => 'Logifailid',
    'log_desc' => 'Jäta tegevusest logifailid',

	'unlink' => 'Unlink Files',
	'unlink_desc' => 'Some instances of servers on which the ghastly safe_mode is enabled, might require playing with this option. On most servers this option will not have any effect',
	'chmod' => 'Chmod Files To',
	'chmod_desc' => 'Some servers require that created files are chmodded in a specific way. Common values are \'0644\' and \'0755\'. Do not change this, unless you know what you\'re doing.',
    'header_uploads' => 'Faili üleslaadimine',
    'upload_path' => 'Kuhu fail laadida (path)',
    'upload_accept' => 'Aktsepteeritud failitüübid',
    'upload_extension' => 'Vaikimisi laiend',
    'upload_save_mode' => 'Kirjuta üle',
    'make_safe' => 'Tühista failinimi',
    'c_upload_save_mode' => 'Ülimlik failinimi',
    'max_filesize' => 'Maksimaalne failisuurus',
    'header_datetime' => 'Kuupäev/kellaaeg',
    'timeoffset_unit' => 'Aja tasakaalustusühik',
    'timeoffset' => 'Aja tasakaalustamine',
    'header_extra' => 'Erinevad seaded',
    'wysiwyg' => 'Kasuta WYSIWYG\'d vaikimisi',
    'wysiwyg_desc' => 'Märgib, kas WYSIWYG (what you see is what you get) editor on vaikimisi töös. Iga kasutaja saab seda Info seadete alt muuta.',
	'basic_view' => 'Use Basic View',
	'basic_view_desc' => 'Determines whether the \'New Entry\' opens in Basic View or in Extended View.',
    'def_text_processing' => 'Vaikimisi tekstitöötlus',
    'text_processing' => 'Tekstitöötlus',
    'text_processing_desc' => 'Märgib, milline on vaikimisi tekstitöötlusprgramm, kui ei kasutata WYSIWYG editori.',
    'none' => 'Mite ühtegi',
    'convert_br' => 'Muuda reavahed &lt;br /&gt;',
    'textile' => 'Textile',

	'allowed_cats' => 'Allowed Categories',
	'allowed_cats_desc' => 'This user is allowed to post entries in the selected categories',
	'delete_user' => "Delete user",
	'delete_user_desc' => "You can delete this user if you would like. All of their posts will remain, but they will no longer be able to login",
	'delete_user_confirm' => 'You\'re about to remove access for %s. Are you sure you want to do this?',

    'setup_ping' => 'Pingi seaded',
    'ping_use' => 'Pingi uuendused',
    'ping_use_desc' => 'See märgib, milliseid uuendusi nagu weblogs.com Pivot automaatselt märgib, kui sa sisestad uue postituse. Teenused nagu blogrolling.com sõltuvad nendest pingidest',
    'ping_urls' => 'Aadressid pingimiseks',
    'ping_urls_desc' => 'Sa võid panna mitmeid aadresse, mida pingida. Ära lisa http:// muidu see ei tööta. Mõned tuntumad pingserverid:<br /><b>rpc.weblogs.com/RPC2</b> (weblogs.com pinger)<br /><b>pivotlog.net/pinger</b> (pivotlog pinger)<br /><b>rcs.datashed.net/RPC2</b> (euro.weblogs.com pinger)<br /><b>ping.blo.gs</b> (blo.gs pinger)<br />',

	'setup_tb' => 'Trackback Setup',
	'tb_password' => 'Password',
	'tb_password_desc' => 'This password is used to login when deleting trackbacks. If unset, deletion of Trackbacks is disabled.',
	'tb_email' => 'Email',
	'tb_email_desc' => 'If set, an email will be sent to this address when a Tracback is added.',
	'tb_rss' => 'Generate RSS for Trackbacks',

    'new_window' => 'Ava lingid uues aknas',
    'emoticons' => 'Kasuta smailisid',
    'javascript_email' => 'Kodeeri e-postiaadress?',
    'new_window_desc' => 'Märgib, kas linke tuleb avada uues brauseriaknas või -tabis.',

    'mod_rewrite' => 'Kasuta Filesmatchi',
    'mod_rewrite_desc' => 'Kui sa kasutad Apache\'i Filesmatchi, teeb Pivot urlid selliseks: www.mysite.com/archive/2003/05/30/nice_weather, mitte aga selliseks: www.mysite.com/pivot/entry.php?id=134. Kõik serverid paraku ei toeta seda.',

    'search_index' => 'Otsinguindeks automaatne uuendus',
    'search_index_desc' => 'See märgib, kas otsinguindeksit uuendatakse kohe, kui teed uue postituse või muudad olemasolevat.',

    'default_introduction' => 'Vaikimisi liid ja põhitekst',
    'default_introduction_desc' => 'See märgib, kas liidi ja põhiteksti pannakse vaikimisi väärtus, kui sa kirjutad uue postituse. Tavaliselt on see tühi paragrahv.',

  'maxhrefs' => 'Number of links',
  'maxhrefs_desc' => 'Maximum number of hyperlinks in allowed in comments. Useful to get rid of those pesky comment spammers. Set to 0 for unlimited links.',
  'rebuild_threshold' => 'Rebuild Threshold',
  'rebuild_threshold_desc' => 'The number of seconds rebuilding takes, before Pivot refreshes the page. The default is 28, but if you are having problems with rebuilding, try lowering this number to 10.',
	'default_introduction' => 'Default Introduction/Body',
	'default_introduction_desc' => 'This will determine the default values for Introduction and Body when an author writes a new entry. Normally this will be an empty paragraph, which makes the most sense semantically.',

    'upload_autothumb'    => 'Automaatsed väikepildid',
    'upload_thumb_width' => 'Väikepildi laius',
    'upload_thumb_height' => 'Väikepildi kõrgus',
    'upload_thumb_remote' => 'Kroppimisskript',
    'upload_thumb_remote_desc' => 'Kui su serveril pole vajalikke teeke, et pilti kroppida, saad kasutada välist kroppimisskripti.',

	'extensions_header' => 'Extensions directory',
	'extensions_desc'   => 'The \'extensions\' directory is the place to store your additions to Pivot.
		This makes updating a lot easier. See the Docs for more info.',
	'extensions_path'   => 'Extensions directory path',

);


//        Weblog Config    \\
$lang['weblog_config'] = array (
    'edit_weblog' => 'Muuda ajaveebi',
    'edit_blog' => 'Muuda ajaveebe',
    'new_weblog' => 'Uus ajaveeb',
    'new_weblog_desc' => 'Lisa uude ajaveebi',
    'del_weblog' => 'Kustuta ajaveeb',
    'del_this_weblog' => 'Kustuta see ajaveeb.',
    'create_new' => 'Loo uus ajaveeb',
    'subw_heading' => 'Igale alamajaveebile, mis on vormides kirjas, saab luua eraldi vormid jakategooriad',
    'create' => 'Valmis',

    'create_1' => 'Loo / muuda ajaveebi, 1. samm kolmest',
    'create_2' => 'Loo / muuda ajaveebi, 2. samm kolmest',
    'create_3' => 'Loo / muuda ajaveebi, 3. samm kolmest',

    'name' => 'Ajaveebi nimi',
    'payoff' => 'Alapealkiri',
    'payoff_desc' => 'Saad oma ajaveebile panna alapealkirja või lühikese kirjelduse',
    'url' => 'Ajaveebi aadress',
    'url_desc' => 'Pivot püüab ise leida su ajaveebi aadressi, kui sa jätad selle välja tühjaks.',
    'index_name' => 'Esilehekülg (indeks)',
    'index_name_desc' => 'Indeks-faili nimi. Tavaliselt on see index.html või index.php.',

    'ssi_prefix' => 'SSI prefiks',
    'ssi_prefix_desc' => 'Kui su ajaveeb kasutab SSI-d (see pole soovitav), saad kasutada seda failinimede prefiksiteks nende failide jaoks, mida kasutatakse SSI jaoks. Jäta see väli tühjaks, kui sa ei tea, mida teed.',

    'front_path' => 'Esilehe teerada (path)',
    'front_path_desc' => 'Teerada sinna, kuhu Pivot selle ajaveebi esilehe loob.',
    'file_format' => 'Failinimi',
    'entry_heading' => 'Postitusseaded',
    'entry_path' => 'Postituste teerada (path)',
    'entry_path_desc' => 'Teerada kataloogi, kuhu Pivot loob sisetuslehekülje (kui sa ei kasta otsest sisestust)',
    'live_comments' => 'Otsene sisestus',
    'live_comments_desc' => 'Kui sa kasutad otsest sisestust, ei pea Pivot iga postituse puhul faile genereerima. See on eelistatud seade.',
    'readmore' => '\'Loe edasi\' tekst',
    'readmore_desc' => 'Tekst, mis märgib, et postitus on pikem, kui esilehel näha. Kui sa jätad selle tühjaks, näitab Pivot vaikimisi keeleseadetes märgitut',

    'arc_heading' => 'Arhiiviseaded',
    'arc_index' => 'Indeksifail',
    'arc_path' => 'Arhiivi teerada (path)',
    'archive_amount' => 'Arhiivi maht',
    'archive_unit' => 'Arhiivi tüüp',
    'archive_format' => 'Arhiivi formaat',
    'archive_none' => 'Arhiive pole',
    'archive_weekly' => 'Nädalased arhiivid',
    'archive_monthly' => 'Kuised arhiivid',
	'archive_yearly' => 'Yearly Archives',

    'archive_link' => 'Arhiivi link',
    'archive_linkfile' => 'Arhiivi nimekirja formaat',
    'archive_order' => 'Arhiivi järjekord',
    'archive_ascending' => 'Vanemad enne',
    'archive_descending' => 'Uuemad enne',

    'templates_heading' => 'Vormid',
    'frontpage_template' => 'Esilehevorm',
    'frontpage_template_desc' => 'See vorm kirjeldab esilehe väljanägemist.',
    'archivepage_template' => 'Arhiivilehe vorm',
    'archivepage_template_desc' => 'See vorm kirjeldab arhiivilehe väljanägemist. Võib olla sama, mis esilehe vorm.',
    'entrypage_template' => 'Üksikpostituse vorm',
    'entrypage_template_desc' => 'See vorm kirjeldab üksikpostituse väljanägemist.',
	'extrapage_template' => 'Extra Template',
	'extrapage_template_desc' => 'The Template that defines what your archive and search.php will look like.',

    'shortentry_template' => 'Lühipostituse vorm',
    'shortentry_template_desc' => 'See vorm kirjeldab üksikpostituse väljangemist, mida näeb ajaveebist või arhiivist.',
    'num_entries' => 'Postituste arv',
    'num_entries_desc' => 'Postituste arv, mida esilehel näidatakse.',
    'offset' => 'Offset',
    'offset_desc' => 'Kui Offset on number, siis nii palju postitusi jäetakse vahele esilehe loomisel.',
    'comments' => 'Lubada kommentaare?',
    'comments_desc' => 'Märgib, kas kasutajad saavad postitusi kommenteerida.',

	'publish_cats' => 'Publish these categories',

    'setup_rss_head' => 'RSSi ja Atomi seaded',
    'rss_use' => 'Loo fiidid',
    'rss_use_desc' => 'See märgib, kas Pivot loob automaatselt RSSi ja Atomi fiidid.',
    'rss_filename' => 'RSSi failinimi',
    'atom_filename' => 'Atomi failinimi',
    'rss_path' => 'Fiidi teerada (path)',
    'rss_path_desc' => 'Kataloog, kuhu Pivot loob fiidi failid.',
//	'rss_size' => 'Feed Entry Length',	/* DEPRECATED */
//	'rss_size_desc' => 'The length (in characters) of an entry in the Feed files', /* DEPRECATED */
	'rss_full' => 'Create Full Feeds',
	'rss_full_desc' => 'Determines whether Pivot creates full Atom and RSS feeds. If set to \'no\' Pivot will create feeds that just contains short descriptions, thereby making your feeds less useful.',
    'rss_size' => 'Fiidi pikkus',
    'rss_size_desc' => 'Fidii sisestuse pikkus tähtedes',
	'rss_img' => 'Feed Image',
	'rss_img_desc' => 'You can specify an image to send with the Feed. Some feed readers will display this image along with your feed. Leave this blank, or specify a full URL.',

    'lastcomm_head' => 'Viimatiste kommentaaride seaded',
    'lastcomm_amount' => 'Mitut näidata',
    'lastcomm_length' => 'Lõigata',
    'lastcomm_format' => 'Formaat',
    'lastcomm_format_desc' => 'Need seaded näitavad esilehe viimatiste kommentaaride olekut.',
	'lastcomm_nofollow' => 'Use \'Nofollow\'',
	'lastcomm_nofollow_desc' => 'To combat refererspam you might choose to add a rel="nofollow" attribute to all links in comments and referers, as this will not help the spammer get a better pagerank in Google.',

    'lastref_head' => 'Viimaste viitajate seaded',
    'lastref_amount' => 'Mitut näidata',
    'lastref_length' => 'Lõigata',
    'lastref_format' => 'Formaat',
    'lastref_format_desc' => 'Need seaded näitavad esilehe viimatiste viitajate olekut.',
	'lastref_graphic' => 'Use graphics',
	'lastref_graphic_desc' => 'This determines if the last referers use small icons for the most common search engines through which visitors may arrive.',
	'lastref_redirect' => 'Redirect Referers',
	'lastref_redirect_desc' => 'To combat refererspam you might choose to redirect outgoing links to referers, as this will not help the spammer get a better pagerank in Google.',

    'various_head' => 'Muud seaded',
    'emoticons' => 'Kasuta smailisid',
    'emoticons_desc' => 'Märgib, kas smailid nagu :) muudetakse graafilisteks.',
    'encode_email_addresses' => 'Kodeeri e-posti aadressid',
    'encode_email_addresses_desc' => 'Märgib, kas e-posti aadressid kodeeritakse ümber, et spämmerid ei saaks neid korjata.',
    'target_blank' => 'Avada uues aknas',
    'xhtml_workaround' => 'XHTML Workaround',
    'target_blank_desc' => 'Kui sa paned selle tööle, siis avatakse kõik lingid uues aknas. Kui sa sead tööle \'XHTML workaround\', on kõigil linkidel rel="external" märge, mis ei murdu XHTMLis',

    'date_head' => 'Kuupäeva seaded',
    'full_date' => 'Terve kuupäeva formaat',
    'full_date_desc' => 'See märgib, kuidas näidata tervet kuupäeva.',
    'entry_date' => 'Sisestuskuupäev',
    'diff_date' => 'Erikuupäev',
    'diff_date_desc' => '\'Erikuupäeva\' kasutatakse koos sisestuskuupäevaga. Sisestuskuupäeva näidatakse iga postituse juures, erikuupäeva aga siis, kui kuupäev on eelmisest postitusest erinev.',
    'language' => 'Keel',
	'language_desc' => 'The Language determines in what language the dates and numbers will be output, and also determines the page\'s charset encoding (like iso-8859-1 or koi8-r, for example).',

    'comment_head' => 'Kommentaariseaded',
    'comment_sendmail' => 'Saada e-kiri?',
    'comment_sendmail_desc' => 'Kui kommentaar on kirjutatud, võib ajaveebi omanik saada selle kohta e-kirja.',
    'comment_emailto' => 'Kuhu kiri saata',
    'comment_emailto_desc' => 'Märgi e-posti aadress, kuhu kiri läheb. Kui paned mitu aadressi, erista nad komadega.',
    'comment_texttolinks' => 'Tekst linkideks',
    'comment_texttolinks_desc' => 'Märgi, kas aadressid ja e-posti aadressid on klikitavad.',
    'comment_wrap' => 'Paki kommentaarid kokku',
    'comment_wrap_desc' => 'Et pikad täheread ei läheks katki, saab teksti kokku pakkida, piirates seda kindla arvu tähtedeni.',
    'comments_text_0' => 'Tekst, kui \'kommentaare pole\'',
    'comments_text_1' => 'Tekst, kui on \'üks kommentaar\'',
    'comments_text_2' => 'Tekst, kui on \'X kommentaari\'',
    'comments_text_2_desc' => 'Seda teksti kasutatakse näitamaks, mitu kommentaari on. Kui sa jätad selle tühjaks, näitab Pivot seda nii, nagu on keeleseadetes kirjas',

    'comment_pop' => 'Kommentaaride hüpikaken?',
    'comment_pop_desc' => 'Märgib, kas kommentaare näeb hüpikaknas või samas lehitsejaaknas.',
    'comment_width' => 'Hüpikakna laius',
    'comment_height' => 'Hüpikakna kõrgus',
    'comment_height_desc' => 'Märgi kommentaaride hüpikakna laius ja kõrgus pikselites.',

    'comment_format' => "Kommentaaride formaat ",
    'comment_format_desc' => "See täpsustab kommentaaride formaati postituslehel.",

	'comment_reply' => "Format of 'reply ..'",
	'comment_reply_desc' => "This determines the formatting of the link that visitors can use to reply on a specific comment.",
	'comment_forward' => "Format of 'reply by ..'",
	'comment_forward_desc' => "This determines the formatting of the text that is displayed when the comment is replied by another comment.",
	'comment_backward' => "Format of 'reply on ..'",
	'comment_backward_desc' => "This determines the formatting of the text that is displayed when the comment is a reply on another comment.",

    'comment_textile' => 'Luba Textile',
    'comment_textile_desc' => 'Kui sa paned selle seadesse \'Jah\', saavad külastajad kasutada kommentaarides <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a>.',

    'saved_create' => 'See ajaveeb on loodud.',
    'saved_update' => 'See ajaveeb on uuendatud.',
    'deleted' => 'See ajaveeb on kustutatud.',
    'confirm_delete' => 'Sa hakkad kustutama ajaveebi %1. Oled kindel?',

    'blogroll_heading' => 'Blogrolli seades',
    'blogroll_id' => 'Blogrolling ID #',
    'blogroll_id_desc' => 'Sa võid lisada <a href="http://www.blogrolling.com" target="_blank">blogrolling.com</a> blogrolli oma ajaveebi. Blogrolling on teenus linginimekirja säilitamiseks.',
    'blogroll_fg' => 'Teksti värv',
    'blogroll_bg' => 'Tausta värv',
    'blogroll_line1' => 'Joone värv 1',
    'blogroll_line2' => 'Joone värv 2',
    'blogroll_c1' => 'Värv 1',
    'blogroll_c2' => 'Värv 2',
    'blogroll_c3' => 'Värv 3',
    'blogroll_c4' => 'Värv 4',
    'blogroll_c4_desc' => 'Need värvid näitavad, kuidas su blogroll välja näeb.',
);


$lang['upload'] = array (
    //        File Upload        \\
    'preview' => 'Täielik nimekirja eelvaade',
    'thumbs' => 'Väikepildi eelvaade',
    'create_thumb' => '(Loo väikepilt)',
    'title' => 'Failid',
    'thisfile' => 'Lae uus fail:',
    'button' => 'Lae üles',
    'filename' => 'Failinimi',
    'thumbnail' => 'Väikepilt',
    'date' => 'Kuupäev',
    'filesize' => 'Faili suurus',
    'dimensions' => 'Laius x kõrgus',
    'delete_title' => 'Kustuta pilt',
    'areyousure' => 'Oled sa kindel, et soovid faili %s kustutada?',
    'picheader' => 'Kustua see pilt?',
    'create' => 'loo',
    'edit' => 'muuda',

    'insert_image' => 'Siseta pilt',
    'insert_image_desc' => 'Pildi sisestamiseks tuleb pilt enne üles laadida või valida üleslaetud pilt.',
    'insert_image_popup' => 'Sisesta pildi hüpikaken',
    'insert_image_popup_desc' => 'Et sisestada pildi hüpikakent, peab olema pilt üles laetud või tuleb valida juba üleslaetud pilt. Seejärel vali tekst või väikepilt, mis hüpikakna tekitab.',
    'choose_upload' => 'lae üles',
    'choose_select' => 'või vali',
    'imagename' => 'Pildi nimi',
    'alt_text' => 'Alt tekst',
    'align' => 'Joondu',
    'border' => 'Piir',
    'pixels' => 'pikselid',
    'uploaded_as' => 'Su fail on üles laetud \'%s\'.',
    'not_uploaded' => 'Su faili ei laetud üles, tekkis järgnev viga:',
    'center' => 'Keskel (vaikimisi)',
    'left' => 'Vasakul',
    'right' => 'Paremal',
    'inline' => 'Teksti sees',
    'notice_upload_first' => 'Vali kõigepealt või lae pilt üles',
    'select_image' => 'Vali pilt',
	'select_file' => 'Select File',

    'for_popup' => 'Hüpikaknale',
    'use_thumbnail' => 'Kasuta väikepilti',
    'edit_thumbnail' => 'Muuda väikepilti',
    'use_text' => 'Kasuta teksti',
	'insert_download' => 'Insert a Download',
	'insert_download_desc' => 'To make a file download, you should upload a file, or select a previously uploaded file. Then select whether you want an icon or a text or a thumbnail that triggers the download.',
	'use_icon' => 'Use icon',
);


$lang['link'] = array (
    //        Link Insertion \\
    'insert_link' => 'Sisesta link',
    'insert_link_desc' => 'Sisesta link, kirjutades aadress. Külalised näevad pealkirja, kui nad viivad hiire lingile.',
    'url' => 'Aadress',
    'title' => 'Pealkiri',
    'text' => 'Tekst',
);


//        Categories        \\
$lang['category'] = array (
    'edit_who' => 'Muuda, kes saab \'%s\' kategooriasse postitada',
    'name' => 'Nimi',
    'users' => 'Kasutajad',
    'make_new' => 'Loo uus kategooria',
    'create' => 'Loo kategooria',
    'canpost' => 'Vali kasutajad, kes tohivad sellesse kategooriasse postitada',
    'same_name' => 'Selle nimega kategooria on juba olemas',
    'need_name' => 'Pane sellele kategooriale nimi',

    'allowed' => 'Lubatud',
    'allow' => 'Luba',
    'denied' => 'Keelatud',
    'deny' => 'Keela',
    'edit' => 'Muuda kategooriat',

    'delete' => 'Kustuta kategooria',
    'delete_desc' => 'Vali \'jah\', kui soovid kustutada seda kategooriat',

    'delete_message' => 'Selles Pivoti versioonis kustutatakse ainult kategooria nimi.',
	'search_index_newctitle'   => 'Index this category',
	'search_index_newcdesc'    => 'Only set to \'No\' if you do not want visitors to your site to search in this category.',
	'search_index_editcheader' => 'Index Category',

	'order' => 'Sorting Order',
	'order_desc' => 'Categories with a lower sorting order will appear higher in the list. If you keep all the numbers the same, they will be sorted alphabetically',
	'public' => 'Public Category',
	'public_desc' => 'If set to \'No\', this category will only be viewable for registered visitors. (applies only to live pages)',

);


$lang['entries'] = array (
    //        Entries            \\
    'post_entry' => "Sisesta postitus ",
    'preview_entry' => "Postituse eelvaade ",

    'first' => 'esimene',
    'last' => 'viimane',
    'next' => 'järgmine',
    'previous' => 'eelmine',

    'jumptopage' => 'mine leheküljele (%num%)',
    'filteron' => 'fitreeri (%name%)',
    'filteroff' => 'filter väljas',
    'title' => 'Pealkiri',
    'subtitle' => 'alapealkiri',
    'introduction' => 'Tutvustus',
    'body' => 'Sisu',
    'publish_on' => 'Avalda',
    'status' => 'Staatus',
    'post_status' => 'Postituse staatus',
    'category' => 'Kategooria',
    'select_multi_cats' => '(Ctrl-klikk mitme kategooria valimiseks)',
    'last_edited' => "Viimati muudetud",
    'created_on' => "Loodud",
    'date' => 'Kuupäev',
    'author' => 'Autor',
    'code' => 'Kood',
    'comm' => '# Komm',
    'name' => 'Nimi',
    'allow_comments' => 'Luba kommentaare',

	'delete_entry' => "Delete Entry",
	'delete_entry_desc' => "Delete this Entry and the corresponding Comments ",
	'delete_one_confirm' => "Are you sure you want to delete this entry?",
	'delete_multiple_confirm' => "Are you sure you want to delete these entries?",

	'convert_lb' => 'Convert Linebreaks',
    'always_off' => '(Kui kasutad WYSIWYGd, siis on see alati väljas)',
    'be_careful' => '(Ole sellega ettevaatlik!)',
    'edit_comments' => 'Muuda kommentaare',
    'edit_comments_desc' => 'Muuda sellele postitusele lisatud kommentaare',
    'edit_comment' => 'Muuda kommentaari',
    'delete_comment' => 'Kustuta kommentaar',
    'block_single' => 'Blokeeri IP %s',
    'block_range' => 'Blokeeri IP ulatus %s',
    'unblock_single' => 'Võta blokeering maha IP %s',
    'unblock_range' => 'Võta blokeering maha IP ulatuselt %s',
    'trackback' => 'Trackback ping',
	'trackback_desc' => 'Send Trackback Pings to the following url(s). To send to multiple urls, place each one on a seperate line.',
	'keywords' => 'Keywords',
	'keywords_desc' => 'Use this to set some keywords that can be used to find this entry, or to set the non-crufty url for this entry.',
	'vialink' => "Via link",
	'viatitle' => "Via title",
	'via_desc' => 'Use this to set a link to the source of this entry.',
	'entry_catnopost' => 'You are not allowed to post in category:\'%s\'.',
	'entry_saved_ok' => 'Your entry \'%s\' was successfully saved.',
	'entry_ping_sent' => 'A trackback ping has been sent to \'%s\'.',
);


//        Form Fun        \\
$lang['forms'] = array (
    'c_all' => 'Vali kõik',
    'c_none' => 'Ära vali ühtegi',
    'choose' => '- Vali tegevus -',
    'publish' => 'Muuda staatus \'avalda\'',
    'hold' => 'Muuda staatus \'säilita\'',
    'delete' => 'Kustuta need',
    'generate' => 'Avalda ja genereeri',

    'with_checked_entries' => "Valitud sisestustega tee:",
    'with_checked_files' => "Valitud failidega tee:",
    'with_checked_templates' => 'Valitud vormidega tee:',
);


//        Errors            \\
$lang['error'] = array (
    'path_open' => 'Ei saa avada, kontrolli oma õigusi.',
    'path_read' => 'Ei saa lugeda, kontrolli oma õigusi.',
    'path_write' => 'Ei saa kirjutada, kontrolli oma õigusi.',

    'file_open' => 'Ei saa avada, kontrolli oma õigusi.',
    'file_read' => 'Ei saa lugeda, kontrolli oma õigusi.',
    'file_write' => 'Ei saa kirjutada, kontrolli oma õigusi.',
);


//        Notices            \\
$lang['notice'] = array (
    'comment_saved' => "Kommentaar salvestati.",
    'comment_deleted' => "Kommentaar kustutati.",
    'comment_none' => "Siin pole kommentaare.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
    'vote' => 'Hääleta \'%val%\' seda postitust',
    'good' => 'Hea',
    'bad' => 'Halb',
    'already' => 'Sa juba hääletasid seda sisestust või küsitlust',
    'register' => 'Su hääl \'%val%\' registreeriti',
);


$lang['comment'] = array (
    'register' => 'Su kommentaar on salvestatud.',
    'preview' => 'Sa näed kommentaari eelvaadet. Vajuta kindlasti \'Saada kommentaar\' nuppu salvestamiseks.',
    'duplicate' => 'Su kommentaari ei salvestatud, sest see on eelmise postituse koopia',
    'no_name' => 'Kirjuta oma nimi vormi \'nimi\'.',
    'no_comment' => 'Kirjuta midagi vormi \'ommentaar\'.',
	'too_many_hrefs' => 'The maximum number of hyperlinks was exceeded. Stop spamming.',
);


$lang['comments_text'] = array (
    '0' => "Kommentaare pole ",
    '1' => "%num% kommentaar",
    '2' => "%num% kommentaari ",
);


$lang['weblog_text'] = array (
    // these are used in the weblogs, for the labels related to archives
    'archives' => "Arhiivid",
    'next_archive' => "Järgmine arhiiv ",
    'previous_archive' => "Eelmine arhiiv ",
    'last_comments' => "Viimased kommentaarid ",
    'last_referrers' => "Viimased viitajad",
    'calendar' => "Kalender",
    'links' => "Lingid",
    'xml_feed' => "XML: RSS Feed",
	'atom_feed' => "XML: Atom Feed",
    'powered_by' => "Powered by",
    'name' => "Nimi",
    'email' => "E-post",
    'url' => "Aadress",
    'date' => "Kuupäev",
    'comment' => "Kommentaar",
    'ip' => "IP-aadress",
    'yes' => "Jah",
    'no' => "Ei",
    'emoticons' => "Smailid",
    'emoticons_reference' => "Ava smailide esitus ",
    'textile' => "Textile",
    'textile_reference' => "Ava Textile esitus ",
    'post_comment' => "Saada kommentaar ",
    'preview_comment' => "Kommentaari eelvaade ",
    'remember_info' => "Jäta info meelde?",
    'disclaimer' => "<b>Märkus:</b> Kogu html peale &lt;b&gt; ja &lt;i&gt; eemaldatakse.",
	'notify_yes' => "Yes, send me email when someone replies.",
	'register' => "Register your username / Log in",
	'disclaimer' => "<b>Small print:</b> All html tags except &lt;b&gt; and &lt;i&gt; will be removed from your comment. You can make links by just typing the url or mail-address.",
    'search_title' => "Otsingutulemused",
    'search' => "Otsi!",
    'nomatches' => "'%name%' polnud vasteid. Otsi midagi muud.",
    'matches' => "'%name%' vasted:",
	'about' => "About",
	'stuff' => "Stuff",
	'linkdump' => "Linkdump",
);


$lang['ufield_main'] = array (
    //        Userfields        \\
    'title' => 'Muuda kasutajavälja',
    'edit' => 'Muuda',
    'create' => 'Loo',

    'dispname' => 'Nimi',
    'intname' => 'Pärisnimi',
    'intname_desc' => 'Pärisnimi on selle eseme nimi, kui ta ilmub siis, kui sa palud Pivotil seda näidata vormis.',
    'size' => 'Suurus',
    'rows' => 'Read',
    'cols' => 'Veerud',
    'maxlen' => 'Maksimaalne pikkus',
    'minlevel' => 'Minimaalne kasutajatase',
    'filter' => 'Filter',
    'filter_desc' => 'Seda eset filtreerides piirad sa sisestuse tüüpi',
    'no_filter' => 'Ei midagi',
    'del_title' => 'Kinnita kustutus',
    'del_desc' => 'Kustutades selle kasutajavälja (<b>%s</b>) kaotad ka kõik andmed, mida need kasutajad on säilitanud..',

    'already' => 'See nimi on juba kasutusel',
    'int' => 'Pärisnimi peab olema pikem kui 3 tähte',
    'short_disp' => 'Näidatav nimi peab olema pikem kui 3 tähte',
);


$lang['bookmarklets'] = array (
    'bookmarklets' => 'Lemmikud',
    'bm_add' => 'Lisa lemmik.',
    'bm_withlink' => 'Piv » Uus',
    'bm_withlink_desc' => 'See lemmik avab akna uue postitusega, millel on link sellele lehele.',

    'bm_nolink' => 'Piv » Uus',
    'bm_nolink_desc' => 'See lemmik avab akna tühja uue postitusega.',

    'bookmarklets_info' => 'Kasuta seda lemmikut, et kirjutada kiiresti uus postitus. Lemmiku lisamiseks oma lehitsejasse kasuta järgmisi variante: (täpne tekst on erinev olenevalt lehitsejast)',
    'bookmarklets_info_1' => 'Kliki ja tiri see lemmik oma \'Linkide\' tööristaribale.',
    'bookmarklets_info_2' => 'Parem klikk lemmikul ja vali \'Lisa lemmikutesse\'.',
);

// Accessibility
// These are used for form fields, labels, fieldsets etc.
// for Web Content Accessibility Guidelines & 508 compliancy issues.
// see: http://bobby.watchfire.com/bobby/html/en/index.jsp
// JM =*=*= 2004/10/04
$lang['accessibility'] = array(
	'search_idname'      => 'search',
	'search_formname'    => 'Search for words used in entries on this website',
	'search_fldname'     => 'Enter the word[s] to search for here:',
	'search_placeholder' => 'Enter searchterms',

	'calendar_summary'   => 'This table represents a calendar of entries in the weblog with hyperlinks on dates with entries.',
	'calendar_noscript'  => 'The calendar provides a means to access entries in this weblog',
	/*
	2-letter language code, used to designate the principal language used on the site
	see: http://www.oasis-open.org/cover/iso639a.html
	*/

	'lang' => $langname,
) ;


$lang['snippets_text'] = array (
    'word_plural'     => 'words',
    'image_single'    => 'image',
    'image_plural'    => 'images',
    'download_single' => 'file',
    'download_plural' => 'files',
);

$lang['trackback'] = array (
    'noid'      => 'No TrackBack ID (tb_id)',
    'nourl'     => 'No URL (url)',
    'noping'    => 'No ping URL',
    'tburl'     => 'TrackBack URL for this entry',
    'delete'    => '[DELETE]',
    'yoursite'  => 'Is this your site?',
    'todelete'  => ' to delete pings.',
    'login'     => 'Log in',
    'logout'    => 'Log out',
    'sendping'  => 'Send a ping',
    'unaut'     => 'You are not authorized',
    'pinged'    => 'Ping successfully sent',
    'notpinged' => 'Error: Couldn´t ping url',
    'invalid'   => 'Invalid login',
    'disabled'  => 'Login disabled',
    'loggedout' => 'Logged out',
    'tracked'   => 'Tracked',
    'pass'      => 'Password',
    'email_subject' => '[Trackback] new Trackback',
    'email_txt' => 'Someone left a new trackback on your website',
);

$lang['commentuser'] = array (
    'title'             => 'Pivot user login',
    'header'            => 'Log in as a registered visitor',
    'logout'            => 'Log out.',
    'loggedout'         => 'Logged out',
    'login'             => 'Login',
    'loggedin'          => 'Logged in',
    'loggedinas'        => 'Logged in as',
    'pass_forgot'       => 'Forgotten your password?',
    'register_new'      => 'Register a new username.',
    'register'          => 'Register as a visitor',
    'register_info'     => 'Please fill out the following information. <strong>Be sure to give a valid email address</strong>, because we will send a verification email to that address.',
    'pass_note'         => 'Note: It\'s possible for the maintainer of this site <br /> to see your password.. Do <em>not</em> use a password<br /> that you use for other websites / accounts!',
    'show_email'        => 'Show my email address with comments',
    'notify'            => 'Notify me via email of new entries',
    'def_notify'        => 'Default notification of replies',
    'register'          => 'Register',
    'pass_invalid'      => 'Incorrect password',
    'nouser'            => 'No such user..',
    'change_info'       => 'Here you can change your information.',
    'pref_edit'         => 'Edit your preferences',
    'pref_change'       => 'Change preferences',
    'options'           => 'Options',
    'user_exists'       => 'User already exists.. Please pick another name.',
    'email_note'        => 'You must give your email address, since it\'ll be impossible to verify your account. You can always choose not to show your address to other visitors.',
    'stored'            => 'The changes have been stored',
    'verified'          => 'Your account is verified. Please log in..',
    'not_verified'      => 'That Code seems to incorrect. I\'m sorry, but I can\'t verify.',
    'pass_sent'         => 'Your password was sent to the mailbox given..',
    'user_pass_nomatch' => 'That username and email address do not seem to match.',
    'pass_send'         => 'Send password',
    'pass_send_desc'    => 'If you\'ve forgotten your password, fill in your username and e-mail address, and Pivot will send your password to your email address. ',
    'oops'              => 'Oops',
    'back'              => 'Back to',
    'back_login'        => 'Back to login'
);

// A little tool to help you check if the file is correct..
if (count(get_included_files())<2) {

    $groups = count($lang);
    $total = 0;
    foreach ($lang as $langgroup) {
        $total += count($langgroup);
    }
    echo "<h2>Language file is correct!</h2>";
    echo "This file contains $groups groups and a total of $total labels.";

}

?>
