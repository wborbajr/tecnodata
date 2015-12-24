<?php
//Norsk Nynorsk (Norwegian Nynorsk)

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2rd line. 

// Norwegian NYNORSK translation of Pivot lang file/Nynorsk omsetjing av m�lbladet til Pivot
// Created by Leif H Silli (hyperlekken@lenk.no).

// allow for different encoding for non-western languages
$encoding="iso-8859-1";
$langname="nn";

//		General		\\
$lang['general'] = array (
	'yes' => 'Med',	//affirmative
	'no' => 'Utan',		//negative
	'continue' => 'Hald fram',
	'go' => 'K�yr!',	//proceed

	'minlevel' => 'Du har ikkje tilgangsl�yve til denne Pivot-deildi',
	'email' => 'Netpost',
	'url' => 'Netstad',
	'further_options' => "Innstillingar elles",
	'basic_view' => "Vanleg skrivesida",
	'basic_view_desc' => "Med vanleg skrivesida",
	'extended_view' => "Utvida skrivesida",
	'extended_view_desc' => "Med utvida skrivesida",
	'toggle_view' => "Skift mellom vanleg og utvida skrivesida",
	'select' => "Vel",
	'cancel' => "Avlys",
	'delete' => 'Sletta',
	'approve' => 'Godkjenn',
	'edit' => 'Endra p�',
	'welcome' => "Velkomen til innsida av %build%.",
	'write' => "Skriv",
	'write_open_error' => "Skreiveveila. Fekk ikkje opna bladet for skriving",
	'write_write_error' => "Skriveveila. Fekk ikkje skrive til bladet",
	'done' => "Gjort!",
	'shortcuts' => "Snarvegar",
	'cantdelete' => "Du har ikkje l�yve til � sletta innlegget �%title%�!",
	'cantdothat' => "Du har ikkje l�yve til � gjera det med innlegget �%title%�!",
	'cantdeletelast' => "Du kan ikkje sletta f�rre innlegget. Du lyt fyrst leggja inne eit nytt f�re du kan sletta dette.",
	'more' => "framhald",
);


$lang['userlevels'] = array (
		'H�gaste', 'Stort', 'Auka', 'Vanleg', 'Mobiltlf'
		//  this one might be a bit hard to translate, but basically it's an order of
		//  power or trust.  Superadmin would be the person in charge - no one can do
		//  anything about his decisions. Admin is only regulated by the Superadmin,
		//  Advanced by the Admin and Superadmin, etc..
		//  Just get the idea of it.
);


$lang['numbers'] = array (
	'Utan', 'Eitt', 'Tvo', 'Tri', 'Fire', 'Fem', 'Seks', 'Sju', '�tte', 'Nie', 'Tie', 'Elleve', 'Tolv', 'Trettan', 'Fjortan', 'Femtan', 'Sekstan'
);


$lang['months'] = array (
	'januar', 'februar', 'mars', 'april', 'mai', 'juni', 'juli', 'august', 'september', 'oktober', 'november', 'desember'
);


$lang['months_abbr'] = array (
	'jan', 'feb', 'mar', 'apr', 'mai', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'des'
);


$lang['days'] = array (
	'sundag', 'mondag', 'tysdag', 'onsdag', 'torsdag', 'fredag', 'laurdag'
);


$lang['days_abbr'] = array (
	'sun', 'mon', 'tys', 'ons', 'tors', 'fre', 'laur'
);


$lang['days_calendar'] = array (
	's', 'm', 't', 'o', 't', 'f', 'l'
);


$lang['datetime_words'] = array (
	'�r', 'm�nad', 'vika', 'dag', 'time', 'minutt', 'sekund'	//the actual words for them.
);


//		Login Page		\\
$lang['login'] = array (
	'title' => 'Inngang',
	'name' => 'Kontonamn',
	'pass' => 'L�ysnord',
	'remember' => 'Hugsing',
	'rchoice' => array (
		'0' => 'Utan',
		'1' => 'Med namn og l�ysnord',
		'2' => 'Som fast innskriven'
	),
	'delete_cookies_desc' => 'Dersom du veit at namnet og l�ysnordet er rett jamvel om du ikkje kjem deg inn, <br />kan du freista �ydeleggja kaka (infokapslane) for denne netstaden:',
	'delete_cookies' => '�ydelegg kakone',
	'retry' => 'Gali brukarnamn/l�ysnord',
	'banned' => 'Du har no freista koma inn 10 gonger p� rad. No er IP-tilskrifti di utestengd i 12 timar.',

);


//		Main Bar		\\
$lang['userbar'] = array (
	'main' => 'Innsida',
	'entries' => 'Innlegg',
	'submit' => 'Skrivesida',
	'comments' => 'Innspel',
	'trackbacks' => 'Attendespel',
	'modify' => 'Retting',
	'userinfo' => 'Ditt',
	'u_settings' => 'Ditt',
	'u_marklet' => 'Skrivebokmerke',
	'files' => 'Ilegg',
	'upload' => 'L�d opp',
	'stats' => 'Taloppg�vor',
	'admin' => 'Styr og stell',

	'main_title' => 'P� innsida av Pivot',
	'entries_title' => 'Handsaming og skriving av innlegg',
	'submit_title' => 'Skriv og send inn eit nytt innlegg',
	'comments_title' => 'Endra p� eller sletta innspel',
	'trackbacks_title' => 'Endra p� og sletta attendespel',
	'modify_title' => 'Endra p� innlegg',
	'userinfo_title' => 'Opplysingar om ditt',
	'u_settings_title' => 'Innstillingar for deg sj�lv',
	'u_marklet_title' => 'Gjer skrivebokmerke',
	'files_title' => 'Handsaming og opplegg av ilegg',
	'upload_title' => 'L�d opp blad',
	'uploaded_success' => 'Bladet er oppl�dd',
	'stats_title' => 'Syn loggar og tal.',
	'updatetitles_title' => 'Syn loggar og tal.',
	'admin_title' => 'Styretavla',
	'recent_entries' => 'Siste innlegg',
	'recent_comments' => 'Siste innspel',
	'moderate_comments' => 'Vurder innspel',
	'moderate_comments_desc' => '%1 innspel ventar p� godkjenning.',
	'moderate_nocomments_desc' => 'Ingi innspel ventar godkjenning.',
);


$lang['adminbar'] = array (
	//		Admin Bar		\\
	'seeusers' => 'Brukarar',
	'seecommusers' => 'Innskrivne gjester',
	'seeconfig' => 'Styr',
	'filemappings' => 'Bladvisar',
	'templates' => 'Sideoppset',
	'maintenance' => 'Stell',
	'regen' => 'Bygg om alt',
	'blogs' => 'Vevblad',
	'categories' => 'Teigar',
	'verifydb' => 'Stadfest tilfangslageret',
	'buildindex' => 'Bygg om innhaldsremsa',
	'buildsearchindex' => 'Bygg om s�kjeremsa',
	'buildfrontpage' => 'Bygg om framsida(-or)',
	'sendping' => 'Send pling',
	'backup' => 'Tryggleikskopi',
	'description' => 'Omtala',
	'conversion' => 'Omskaping',
	'seeusers_title' => 'Set opp, endra p� eller sletta brukarar',
	'seecommusers_title' => 'Vis og endra p� innskrivne gjester',
	'userfields' => 'Postar med brukaropplysningar',
	'userfields_title' => 'Set opp, endra p� eller sletta brukaropplysningar',
	'seeconfig_title' => 'Endra p� oppsetsbladet',
	'filemappings_title' => 'Syn kva blad som er vortne til for vevstaden og vevbladi til denne Pivoten',
	'templates_title' => 'Set opp, endra p� eller sletta sideoppset',
	'maintenance_title' => 'Vanleg stell av Pivot-bladi',
	'regen_title' => 'Bygg om bladi og arkivi som Pivot byggjer opp',
	'blogs_title' => 'Set opp, endra p� eller sletta vevblad',
	'blogs_edit_title' => 'Endra p� vevbladoppsetet for ',
	'categories_title' => 'Set opp, endra p� eller sletta teigar',
	'verifydb_title' => 'Stadfest at innhaldslageret er heilt',
	'buildindex_title' => 'Bygg om innhaldslagerremsa',
	'buildsearchindex_title' => 'Bygg om s�kjeremsa, for s�k i innleggi',
	'buildfrontpage_title' => 'Bygg om framsida, seinste arkiv og RSS-blad for kvart vevblad.',
	'backup_title' => 'Tak tryggleikskopi av innleggi',
	'backup_config' => 'Tak tryggleikskopi av oppsetsbladi',
	'backup_config_desc' => 'For nedl�ding av zip-pakka oppsetsblad',
	'ipblocks' => 'IP-talrekkjor',
	'ipblocks_title' => 'Syn og endra p� IP-tilskriftene.',
	'ipblocks_stored' => 'IP-tilskriftene er g�ymde.',
	'ipblocks_store' => 'G�ym p� desse IP-tilskriftene',
	'ignoreddomains' => 'Forbodne ordlag',
	'ignoreddomains_title' => 'Syn og endra p� ordlag som er forbodne pga bostilvising.',
	'ignoreddomains_stored' => 'Det forbodne ordlaget er g�ymd.',
	'ignoreddomains_store' => 'G�ym desse forbodne ordllagi',
	'ignoreddomains_asterisk' => 'Ordlag med stjerneteikn ( * ) er einast for � stengja for bostilvising. Alta anna vert nytta b�de for stengjing av tilvisingar, innspel og attendespel.',
	'ignoreddomains_global' => 'Heilt forbodne ordlag.',
	'ignoreddomains_global_desc' => 'Forutan dei heilt forbodne ordlagi nemnde ovan, kan du og ha ei etterf�rd ordremsa som Pivot sankar i hop fr� pivotlog-tenaren. For tidi ligg desse ordlagi i remsa:',
	'ignoreddomains_global_empty' => 'Forbodsremsa er tom',
	'ignoreddomains_global_update' => 'Etterf�r forbodsremsa fr� pivotlog.net',
	'ignoreddomains_global_delete' => 'Tak burt forbodsremsa',
	'ignoreddomains_global_success' => 'Forbodsremsa er g�ymd.',
	'ignoreddomains_global_failed' => 'Fekk ikkje g�ymd forbodsremsa. Pr�v seinare!',
	'ignoreddomains_global_deleted' => 'Forbodsremsa vart stroki.',
	'fileexplore' => 'Bladvisar',
	'fileexplore_title' => 'Syn blad (b�de tekstblad og tilfangslagerblad)',
	'sendping_title' => 'Send pling til etterf�ringssporarar.',
	'buildindex_start' => 'Byggjer no innhaldsremsa. Dette tek gjerne ei liti stund, berre venta lite grann.',
	'buildsearchindex_start' => 'Byggjer no s�kjeremsa. Dette tek gjerne ei liti stund, berre venta lite grann.',
	'buildindex_finished' => 'Gjort! � skapa innhaldsremsa tok %num% sekund',

	'filemappings_desc' => 'Nedan finn du ei oversyn over kvart vevblad i dette Pivot-oppsetet, saman med kva for nokre blad som vart sette opp av Pivot og kva sideoppset som vart nytta for p� setja dei opp. Dette kan og vera sers nyttugt n�r ein freistar setja fingen p� noko gali i bladoppseti.',

	'debug' => 'Opna avlusarvindauga',

	'latest_pivot_news' => "Siste nye om Pivot",
	'remove_setup_header' => "Pivot-oppsetsskrivet er tilstades",
	'remove_setup' => "Pivot-oppsetsskrivet 'pivot-setup.php' ligg framleis i modermappa. Du b�r vera merksam p� at dette er ein mogeleg tryggleiksf�re. Det beste er � taka det burt eller setja nytt namn p� so illviljugt folk ikkje kan fara ille �t med det.",

	'magic_quotes_header' => "Magic quotes p�slege",
	'magic_quotes' => "Vevtenaren din k�yrer med PHP-valet �Magic quotes� p�slege. Dette kan f�ra til at Pivot k�yrer mindre godt. Sj� p� <a href='http://www.pivotlog.net/docs/doku.php?id=servers_with_magic_quotes'>denne sida</a> for b�ta p� stoda.",
	'register_globals_header' => "Register Globals p�slege",
	'register_globals' => "Vevtenaren k�yrer med PHP-valet 'register globals' p�slege. Dete kan vera ei mogeleg utryggt oppset, og difor burde du verkeleg freista � f� dette v�lt. For � b�ta p� stoda kan du sj� p� '<a href='http://www.pivotlog.net/docs/doku.php?id=servers_with_register_globals'>Tenarar med register_globals</a>' i Pivot-dokumentasjonen.",


	'spamprotection' => "Bosverk",
	'spamprotection_title' => "Ulike vern mot bos i vevbladi",
	'spamconfig' => "Bosverk-val",
	'spamconfig_title' => "Oppset av bosverk (t.d. HashCash og SpamQuiz).",
	'seespamconfig_title' => 'Set opp bosverk',
	'spamwasher' => 'Bosreinsk',
	'spamwasher_title' => 'Finn bos og sletta det alt saman fr� innleggi og attendespeli dine.',
	'spamlog' => "Boslogg",
	'spamlog_title' => "Vis og t�m bosloggen.",
	'viewspamlog_title' => "Viser bosloggen",
);


$lang['templates'] = array (
	'rollback' => 'Set istand att',
	'create_template' => 'Set opp sideoppset',
	'create_template_info' => 'Set opp eit sideoppset for Pivot fr� botnen',
	'no_comment' => 'Utan innspel',
	'comment' => 'Innspel*',
	'comment_note' => '(*Merk: Innspel vert berre g�ymde etter g�yming av <b>fyrste</b> endring eller tilskiping.)',
	'create' => 'Set opp sideoppset',
	'editing' => 'Endra p�',
	'filename' => 'Bladnamn',
	'save_changes' => 'G�ym endringane!',
	'save_template' => 'G�ym sideoppsetet!',
	'aux_template' => 'Tilleggsoppset',
	'sub_template' => 'Postteig-oppset',
	'standard_template' => 'Vanleg sideoppset',
	'feed_template' => 'Kringkastingsblad',
	'css_template' => 'CSS-oppset',
	'txt_template' => 'Tekst-oppset',
	'php_template' => 'PHP-oppset',
);


//		Maintenace		\\
$lang['maint'] = array (
	'title' => 'Stell',
	'gen_arc_title' => 'Skipa arkiv', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => 'Skipa om arkivi dine', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'Stadfest XML-blad', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'Stadfest (og v�l etter torv) at XML-bladi er heile', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => 'Tryggleikskopi',
	'backup_text' => 'Tak tryggleikskopi av alle viktuge pivot-blad',
);



//		Spam Protection		\\
$lang['spam'] = array (
	'hc_options' => 'HashCash-val',
	'hc' => 'Med HashCash',
	'hc_desc' => "HashCash er det mest kraftfulle og usynlege bosverket som er, og krev at vevlesaren har javascript p�slege. Skulde det vera ulagomt, so sl�r du det berre ikkje p�.",
	'sq_options' => 'SpamQuiz-val',
	'sq' => 'Med SpamQuiz',
	'sq_desc' => "F�r vevbladet tek i mot innspel, lyt brukaren svara rett p� eit einfeldt sp�rsm�l alle (i lesarkrinsen) veit svaret p�. Dumme �bosprogram� skj�nar ikkje dei ulike sp�rsm�li p� norsk, dialekt, med rare skrivem�tar, rar logikk osb.",
	'sq_question' => 'Sp�rsm�l',
	'sq_question_desc' => "D�me: Kva er dei tvo fyrste bokstavane i ordet �bos�?",
	'sq_answer' => 'Svar',
	'sq_answer_desc' => 'D�me: <b>bo</b>',
	'sq_explain' => 'Forkl�ring',
	'sq_explain_desc' => 'D�me: Til vern mot innspelsbos-program, krev me at du svarar p� dette dumme sp�rsm�let',
	'sq_days' => 'Aldersgrensa',
	'sq_days_desc' => 'Lat SpamQuiz berre gjelda for innlegg eldre enn eit visst tal dagar. Innspelsbos kjem ofast  til gamle innlegg og difor er det gjerne ikkje turvande � lata den jamne lesar (som helst kjem med innspel n�r innleggi er nye).',
	'ht_options' => 'Tyngre attendespel-val',
	'ht' => 'Med tyngre attendespel',
	'ht_desc' => "Tyngre attendespel er eit kraftfult vern mot attendespel-bos som krev at vevlesaren har javascript p�slege. Skulde det vera ulagomt, so sl�r du det berre ikkje p�.",
	'tburl_gen' => 'Trykk for � f� ein attendespel-URL',
	'tburl_gen_note' => 'Merk: URL-en gjeld berre i femtan minuttar. Javascript m� vera p�slege!',
	'tburl_gen_javascript' => 'Ver gild � sl� p� Javascript for � f� ein attendespel-URL',
	'enable_js_comm' => 'Ver gild og sl� p� Javascript (og henta sida p� nytt) for skriving av innspel.',
	'empty_log' => 'Bosloggen er tom.',
	'reset_log' => 'T�m bosloggen',
	'reset_log_done' => 'Bosloggen t�md',
);


//		Stats and referers		\\
$lang['stats'] = array (
	'show_last' => "Syn s�ste",
	'20ref' => "20 tilvisingar",
	'50ref' => "50 tilvisingar",
	'allref' => "alle tilvisingar",
	'showunblocked' => "berre linor m. ustengde",
	'showall' => "b�de linor m. avstengde og ustengde",
	'updateref' => "Etterf�r tilvisingi med titteloversynet",
	'hostaddress' => 'Verts-tilskrift (ip-tilskrift)',
	'whichpage' => 'Kva sida',

	'getting' => 'Henta nye titlar',
	'awhile' => 'Dette tek gjerne ei stund, brot ikkje av.',
	'firstpass' => 'Fyrste gjenomgang',
	'secondpass' => 'Andre gjenomgang',
	'nowuptodate' => 'Titteloversynet for tilvisingane er no etterf�rde.',
	'finished' => 'Gjort',
);


//		User Info		\\
$lang['userinfo'] = array (
	'editfields' => 'Endra p� postane i Ditt-sidone',
	'desc_editfields' => 'Endra p� postane brukarane kan stilla sj�lve',
	'username' => 'Brukarnamn',
	'pass1' => 'L�ysnord',
	'pass2' => 'L�ysnord (stadfest)',
	'email' => 'Netpost',
	'nickname' => 'Klengjenamn',
	'url' => 'URL',
	'verified' => 'Stadfest',
	'verified_desc' => 'Stadfest denne gjestekontoen.',
	'disabled' => 'Stengd',
	'disabled_desc' => 'Steng denne gjestekontoen (s� ingi innspel kan gjerast med dette namnet).',
	'userlevel' => 'Bruksl�yve',
	'userlevel_desc' => 'Bruksl�yvet avgjer kva ting ein har l�yve til � gjera i Pivot.',
	'language' => 'M�lform',
	'lastlogin' => 'Sist innom',
	'users' => 'Brukarar',
	'commusers' => 'Innskrivne gjester',
	'edituser' => 'Brukarendring',  //the link to.. well, edit the user (also the title)
	'editcommuser' => 'Endra registerf�rd gjest',
	'edituserinfo' => 'Endra p� brukaropplysing',
	'selfreg' => 'Sj�lvinnskriving',
	'newuser' => 'Set opp ny brukar',
	'desc_newuser' => 'Skipa ny Pivot-brukarkonto, med innleggsl�yve til eit av vevbladi.',
	'newuser_button' => 'Set opp',
	'edituser_button' => 'Skift',
	'pass_too_short' => 'L�ysnordet lyt vera minst 4 bokstavar langt.',
	'pass_equal_name' => 'L�ysnord og brukarnamn kan kje vera likt.',
	'pass_dont_match' => 'L�ysnordi ikkje like',
	'username_in_use' => 'Brukarnamnet er oppteke',
	'username_too_short' => 'Namnet lyt ha tri bokstavar eller meir',
	'username_not_valid' => 'Namet m� skrivast med bokstavar og tal og understrik (A-Z,0-9 og _).',
	'not_good_email' => 'Det er ikkje ei s�tande netposttilskrift',
	'c_admin_title' => 'Stadfest oppset av bladstyrar',
	'c_admin_message' => 'Med '.$lang['userlevels']['1'].' l�yve til � endra p�, f�r ein alle rettar p� pivot og kan endra p� alle innlegg, alle innspel og alle oppset. Er du viss p� at du vil gje %s '.$lang['userlevels']['1'].'endringsl�yve?',
);


//		Config Page		\\
	$lang['config'] = array (
	'save' => 'G�ym oppsetet',

	'sitename' => 'Stadnamn',
	'defaultlanguage' => 'Hovudm�l',
	'defaultencoding' => 'Tekstomkoding',
	'defaultencoding_desc' => 'Dette avgjer kva tekstomkoding som skal nyttast (so som utf-8 eller iso-8859-1). Berre leiv dette tomt, minder du veit kva du gjer. Leiver du det tomt, vert det valt som er nytta i hovudm�let.',
	'defaulttheme' => 'Fast fellesutsj�nad',
	'selfreg' => 'Sj�lvinnskriving',
	'selfreg_desc' => 'Med sj�lvinnskriving kan lesarane sj�lve setja seg opp som (vanlege) brukarar som kan koma med innlegg. (Ikkje det same som ein �innspel-brukar�.)',
	'siteurl' => 'Stad-URL',
	'xmlrpc' => 'Tillat XML-RPC',
	'xmlrpc_desc' => 'Med godtaking av dette, kan du skriva i vevbladet fr� eit skrivebordsprogram for vevbladskriving (MetaWeblog-grensesnittet).',
	'header_fileinfo' => 'Bladopplysing',
	'localpath' => 'Datamaskinstad',
	'debug_options' => 'Avlusing',
	'debug' => 'Lusframvisar',
	'debug_desc' => 'Syner tilfellelege lyser, d� og d�.',
	'log' => 'Loggblad',
	'log_desc' => 'F�rer handlingslogg i ymsne loggblad',

	'unlink' => 'Bladutkopling',
	'unlink_desc' => 'P� sume vevtenarar med det gyslege �safe_mode� p�slege, lyt ein gjerne leika seg med denne innstillingi. Oftast har dette valet inkje � segja',
	'chmod' => 'CHMOD-val',
	'chmod_desc' => 'Sume vevtenarar lyt ha blad som er chmod-handsama slik og slik. Dei vanlege verdi er �0644� og �0755�. Minder du veit kva du lyt gjera, b�r du ikkje tenkja p� saki.',
	'header_uploads' => 'Bladoppl�dingsval',
	'upload_path' => 'Bladoppl�dingsplass',
	'upload_accept' => 'Godtekne slag',
	'upload_extension' => 'Fast etterlekk',
	'upload_save_mode' => 'Ved overskrivingsf�re',
	'make_safe' => 'Reinska bladnamnet',
	'c_upload_save_mode' => 'Auka namnelengdi',
	'max_filesize' => 'Bladstorleik p� det mesta',
	'header_datetime' => 'Dag og tid',
	'timeoffset_unit' => 'Tidsavvikseining',
	'timeoffset' => 'Tidsavvik',
	'header_extra' => 'Ulike val',
	'wysiwyg' => 'Grafisk teksthandsamar',
	'wysiwyg_desc' => 'Avgjer om den grafiske teksthandsamaren er fast f�reval eller ikkje. Kvar kan sj�lv stilla dette i �Ditt�-innstillingane.',
	'basic_view' => 'Vanleg skrivesida',
	'basic_view_desc' => 'Avgjer om �Skrivesida� skal opna vanleg eller utvida skrivesida.',
	'def_text_processing' => 'Fast teksthandsamar',
	'text_processing' => 'Teksthandsamar',
	'text_processing_desc' => 'Avgjer tekshandsamar for dei utan grafisk teksthandsamar.  �Gjer om lineskift�  set einast om lineskift til <a href="http://www.w3.org/TR/html4/struct/text.html#edef-BR" title="Forkl�ring av BR-taggen" target="_blank">BR</a>-taggar. <a href="http://www.textism.com/tools/textile/" target="_blank" title="Forkl�ring av Textile">Textile</a> er eit kraftigt men lettvint og lettl�rd tekstmerkjingsopplegg.',
	'none' => 'utan',
	'convert_br' => 'Gjer om lineskift til &lt;br /&gt;',
	'textile' => 'Textile',
	'markdown' => 'Markdown',
	'markdown_smartypants' => 'Markdown med Smartypants',

	'allowed_cats' => 'L�yvde teigar',
	'allowed_cats_desc' => 'Brukaren har l�yve til � senda inn innlegg til dei utvalde teigane',
	'delete_user' => "Sletta brukaren",
	'delete_user_desc' => "Du kan sletta denne brukaren dersom du ynskjer. Innleggi �t strokne brukarar vert verande, men dei misser tilgjenge til Pivot",
	'delete_user_confirm' => 'Du er ved � taka burt tilgjenget for %s. Er du viss p� at du ynskjer det?',
	'delete_commuser' => "Sletta innskriven gjest",
	'delete_commuser_desc' => "Du kan sletta denne innskrivne gjesten dersom du vil. Innspeli hans vert vertande",
	'delete_commuser_confirm' => 'Du er ved � taka burt kontoen til %s. Held du fram med det?',


	'setup_ping' => 'Pling-oppset',
	'ping_use' => 'Etterf�ringssporingspling',
	'ping_use_desc' => 'Avgjer om Pivot av seg sj�lv skal senda melding til etterf�ringssporarar, slik som t.d. weblogs.com, kvar gong du kjem med nye innlegg. Tenestor so som blogrolling.com, byggjer p� desse plingi.',
	'ping_urls' => 'URL-ar � plinga',
	'ping_urls_desc' => 'Ein kan ha fleire URL-ar � plinga. Tak ikkje med http://-deildi, for d� verkar det ikkje. Set kvar tenar p� ei ny lina, eller skil dei med r�yrteiknet (|). Tenarar det er gjengs � plinga er:<br /><b>rpc.weblogs.com/RPC2</b> (weblogs.com-plingaren er mest nytta)<br /><b>pivotlog.net/pinger</b> (pivotlog-plingaren er ikkje i stand enno)<br /><b>rcs.datashed.net/RPC2</b> (euro.weblogs.com-plingaren)<br /><b>ping.blo.gs</b> (blo.gs-plingaren)<br />',

	'setup_tb' => 'Attendespel-oppset',
	'tb_email' => 'Netpost',
	'tb_email_desc' => 'Dersom valt, vert det send brev til denne tilskrifti n�r ei Attendespel vert lagd til.',

	'new_window' => 'Opnar lenker i nytt vindauga',
	'emoticons' => 'Med smiletryne',
	'javascript_email' => 'Koda om netposttilskrifter?',
	'new_window_desc' => 'Avgjer om innleggslenkene skal opnast i same eller eit nytt vindauga.',

	'mod_rewrite' => 'Mod_rewrite-val',
	'mod_rewrite_desc' => 'Med Apache mod_rewrite, vert URL-ane slik: www.minstad.no/arkiv/2003/05/30/fint_v�r, i staden for www.minstad.no/pivot/innlegg.php?id=134. Ikkje alle vevtenarar er i stand til dette - sj� i handboki.',
	'mod_rewrite_1' => 'Med /archive/2005/04/28/namn_p�_innlegg',
	'mod_rewrite_2' => 'Med /archive/2005-04-28/namn_p�_innlegg',
	'mod_rewrite_3' => 'Med /entry/1234',
	'mod_rewrite_4' => 'Med /entry/1234/namn_p�_innlegg',

	'search_index' => 'Etterf�ring av s�kjeremsa',
	'search_index_desc' => 'Dette avgjer om S�kjeremsa vert etterf�rd for kvart nytt innlegg/innleggsendring.',

	'default_allow_comments' => 'H�ve til innspel',
	'default_allow_comments_desc' => 'Avgjer om innleggi skal vera oppsette med h�ve til innspel.',
	'moderate_comments' => 'Vurder innspel',
	'moderate_comments_desc' => 'Valet avgjer om innspel lyt godkjennast f�rr dei kjem ut p� netstaden.',


  'maxhrefs' => 'Lenkjartal i innspel',
  'maxhrefs_desc' => 'Tal hyperlenker p� det mesta i innspel. Ei hjelp for � verta kvitt bosinnspel. Skriv 0 for eit utal lenker.',
  'rebuild_threshold' => 'Ombyggingsterskel',
  'rebuild_threshold_desc' => 'Avgjer kor lenge etter ombyggjing Pivot skal etterf�ra sida. Fastoppsetet er 28, men ved ombyggjingsvanskar , kan du freista med 10.',
	'default_introduction' => 'Fast innleiings-/br�dtekstsoppset',
	'default_introduction_desc' => 'Dette avgjer dei faste verdi for Innleiing og Br�dtekst, dersom ein brukar skriv eit nytt innlegg. Til vanleg er dette eit tomt avsned, det gjev best meining semantiskt sett.',

	'upload_autothumb'	=> 'Sj�lvhjulpen tommelnagl',
	'upload_thumb_width' => 'Tommelnaglbreidd',
	'upload_thumb_height' => 'Tommelnaglbreidd',
	'upload_thumb_remote' => 'Bortskjeringsskriv',
	'upload_thumb_remote_desc' => 'Dersom tenaren ikkje har nadusynlege bibliotek for bilettilskjering, kan ein nytta eit fjerntilskjeringsskriv i staden.',

	'extensions_header' => 'Tilleggsmappa',
	'extensions_desc'   => 'I mappa �extensions� kan du ha Pivot-tilleggi dine.
		Slik vert etterf�ring av Pivot mykje lettare. Sj� om dette i handboki.',
	'extensions_path'   => 'Tilleggsmappeplass',

);


//		Weblog Config	\\
$lang['weblog_config'] = array (
	'edit_weblog' => 'Endra p� vevbladet',
	'edit_blog' => 'Endra p� vevbladi',
	'new_weblog' => 'Nytt vevblad',
	'new_weblog_desc' => 'Set opp nytt vevblad',
	'del_weblog' => 'Sletta vevbladet',
	'del_this_weblog' => 'Sletta dette vevbladet.',
	'create_new' => 'Set opp nytt vevblad',
	'subw_heading' => 'For kvar av vevbladdeildene i sideoppseti, kan du setja opp kva for oppset dei skal nytta, so vel som kva teigar som kjem ut i dei',
	'create' => 'Gjer ferdug',

	'create_1' => 'Set opp / endra p� vevblad, steg 1 av 3',
	'create_2' => 'Set opp / endra p� vevblad, steg 2 av 3',
	'create_3' => 'Set opp / endra p� vevblad, steg 3 av 3',

	'name' => 'Vevbladnamn',
	'payoff' => 'Slagord',
	'payoff_desc' => 'Slagordet kan vera eit tilleggsnamn/undertittel eller ei stutt omtala av vevbladet',
	'url' => 'URL til vevbladet',
	'url_desc' => 'Pivot avgjer URL-en til vevbladet dersom du leiver denne posten tom. Dersom vevbladet er deild av eit r�meset, ellder eit tenarside-ilegg, kan du nytta desse til � skriva over det.',
	'index_name' => 'Framside-/indexblad',
	'index_name_desc' => 'Namn p� framsidebladet. Oftast ord p� index med etterlekk; helst �index.html� eller �index.php�.',

	'ssi_prefix' => 'SSI-f�relekk',
	'ssi_prefix_desc' => 'Dersom vevbladet nyttar SSI (noko som ikkje er tilr�dd), kan du nytta dette som f�relekk i Pivot-bladnamni, med bladnamnet til bruk i SSI. T.d. �index.shtml?p=�. Du b�r berre leiva det tomt, minder du veit kva du gjer.',

	'front_path' => 'Framsideplass',
	'front_path_desc' => 'Relativ eller absolutt plassering av mappa der Pivot set opp framsida til dette vevbladet.',
	'file_format' => 'Bladnamn',
	'entry_heading' => 'Innleggsoppset',
	'entry_path' => 'Innleggsplass',
	'entry_path_desc' => 'Relativ eller absolutt plassering av mappa der Pivot set opp eittinnleggssidone (dersom du vel � ikkje nytta �Innleggi radt ut�).',
	'live_comments' => 'Innleggi radt ut',
	'live_comments_desc' => 'Med �Innleggi radt ut� er ikkje Pivot n�ydd � skipa sidor for kvar eittinnleggssida. Dette er den f�redregne innstillingi.',
	'readmore' => '�Framhald�',
	'readmore_desc' => 'Ord som skal fortelja at teksti held fram p� ei onnor sida. Ved � leiva posten tom, kjem Pivot til � nytta det faste, slike det er sett opp i m�lforminnstillingane',

	'arc_heading' => 'Arkivinnstilling',
	'arc_index' => 'Innhaldsblad',
	'arc_path' => 'Arkivstad',
	'archive_amount' => 'Arkivstorleik',
	'archive_unit' => 'Arkivtype',
	'archive_format' => 'Arkivoppset',
	'archive_none' => 'Utan arkiv',
	'archive_weekly' => 'Vekearkiv',
	'archive_monthly' => 'M�nadsarkiv',
	'archive_yearly' => '�rsarkiv',

	'archive_link' => 'Arkivlenk',
	'archive_linkfile' => 'Arkivremseoppset',
	'archive_order' => 'Arkivfylgd',
	'archive_ascending' => 'Stigande (eldste �vst)',
	'archive_descending' => 'S�kkjande (nyaste �vst)',

	'templates_heading' => 'Sideoppset',
	'frontpage_template' => 'Framsideoppset',
	'frontpage_template_desc' => 'Sideoppsetet som avgjer oppsetet av framsida til vevbladet.',
	'archivepage_template' => 'Arkivsideoppset',
	'archivepage_template_desc' => 'Sideoppset for oppset av arkivi dykkar. Ein kan �g nytta �Framsideoppsetet�.',
	'entrypage_template' => 'Innleggssideoppset',
	'entrypage_template_desc' => 'Sideoppset for oppset av eittinnleggssida.',
	'extrapage_template' => 'Tilleggssideoppset',
	'extrapage_template_desc' => 'Oppset som avgjer koss arkiv- og s�kssida (search.php) skal sj� ut.',

	'shortentry_template' => 'Stuttinnleggssideoppset',
	'shortentry_template_desc' => 'Sideoppset for oppset av eittinnleggssidor, slik dei visest i vevbladet eller i arkivi.',
	'num_entries' => 'Tal innlegg',
	'num_entries_desc' => 'Tal innlegg i denne vevbladdeildi som skal visast p� framsida.',
	'offset' => 'Avvik',
	'offset_desc' => 'Dersom avviket er sett til eit tal, vert so mange innlegg hoppa over n�r sida vert sett opp. Ein kan nytta dette for � skipa listor med �Eldre innlegg�, t.d.',
	'comments' => 'L�yv innspel?',
	'comments_desc' => 'Avgjer om lesarane skal f� koma med innspel til innleggi i denne vevbladdeildi.',

	'publish_cats' => 'Gjev desse teigane ut',

	'setup_rss_head' => 'RSS & Atom-kringkastingsoppset',
	'rss_use' => 'Kringkasting',
	'rss_use_desc' => 'Avgjer om Pivot skal kringkasta vevbladet som RSS- og Atom-sendingar.',
	'rss_filename' => 'RSS-bladnamn',
	'atom_filename' => 'Atom-bladnamn',
	'rss_path' => 'Utg�veplass',
	'rss_path_desc' => 'Relativ eller absolutt plass for mappa der Pivot skipar kringkastingssidone.',
//	'rss_size' => 'Utsendingsinnleggslengd',	/* DEPRECATED */
//	'rss_size_desc' => 'Lengdi (tal teikn) p� eit innlegg i kringkastingsbladi', /* DEPRECATED */
	'rss_full' => 'Fullkringkasting',
	'rss_full_desc' => 'Avgjer om Pivot skipar fulle Atom- og RSS-kringkastingar. Med �Utan� sender Pivot berre ut innleggsomtalor i staden for heile innlegg.',
	'rss_link' => 'Kringkastingslenk',
	'rss_link_desc' => 'Lenken som fylgjer med sendingi og som peikar til hovudsida. Dersom tom, fyller Pivot berre inn ein lenk til framsida av vevbladet.',
	'rss_img' => 'Kringkastingsbilete',
	'rss_img_desc' => 'Du kan setja opp eit bilete til utsendingi. Sume leseprogram kan visa biletet saman med sendingi. Leiv det tomt eller legg inn ein heil URL.',

	'lastcomm_head' => 'Oppset av Siste innspel',
	'lastcomm_amount' => 'Syn kor mange',
	'lastcomm_length' => 'Lengdekutting',
	'lastcomm_format' => 'Oppset',
	'lastcomm_format_desc' => 'Innstillingar av utsj�naden p� �Siste innspel� p� vevbladframsida.',
	'lastcomm_nofollow' => 'Med �Nofollow�',
	'lastcomm_nofollow_desc' => 'I kampen mot boset og bostilvisingane kan du velja � ha rel="nofollow" i alle tilvisings- og innspel-lenker, sidan dette hindrar at bos-t�marane f�r h�gare rangering i Google.',

	'lastref_head' => 'Innstilling av Siste tilvisingar',
	'lastref_amount' => 'Syn kor mange',
	'lastref_length' => 'Lengdekutting',
	'lastref_format' => 'Oppset',
	'lastref_format_desc' => 'Innstillingar av utsj�naden p� �Siste tilvisingar� i vevbladframsida.',
	'lastref_graphic' => 'Med grafikk',
	'lastref_graphic_desc' => 'Avgjer om dei siste tilvisingane skal ha sm�bilete for die vanlegaste s�kjemotorane lesarane kan koma gjenom.',
	'lastref_redirect' => 'Burttilvising',
	'lastref_redirect_desc' => 'I kampen mot boset kan du visa burt utgangande lenker til tilvisingar, d� dette ikkje hindar bospostaren i � f� h�gare siderangering hj� Google.',

	'various_head' => 'Ymsne innstillingar',
	'emoticons' => 'Med smiletryne',
	'emoticons_desc' => 'Avgjer om smiletryne, so som :-), skal bytast ut med tilsvarande bilete.',
	'encode_email_addresses' => 'Omkoding av netposttilskrifter',
	'encode_email_addresses_desc' => 'Avgjer om netposttilskrifter skal kodast om i Javascript, til vern mot tilskriftshaustarar.',
	'target_blank' => 'Tomt lenkm�l',
	'xhtml_workaround' => 'XHTML-omveg',
	'target_blank_desc' => 'Med �Med�, vert alle lenker i innleggi dine opna i nye vindaugo. Med �XHTML-omveg�, f�r d� alle lenker tillegget rel="external", so dei ikkje skal bryta mot reglane for velformulera XHTML',

	'date_head' => 'Tidsvisings-innstillingar',
	'full_date' => 'Fullt tidsstempel',
	'full_date_desc' => 'Avgjer oppsetet p� det fulle tidsstempelet. Stend oftast �vst p� ei eittinnleggssida',
	'entry_date' => 'Innleggstidspunkt',
	'diff_date' => 'Ulike-tidspunkt',
	'diff_date_desc' => '�Ulike-tidspunkt� vert oftast nytta i lag med �Innleggstidspunkt�. Innleggstidspunktet stend ved kvart innlegg i vevbladet, medan Ulike-tidspunkt berre kjem fram dersom tidspunktet er ulikt f�rre innlegget.',
	'language' => 'M�lform',
	'language_desc' => 'M�lformi avgjer skrivem�ten for tidspunkt, tal og tekstomkoding (dvs t.d. iso-8859-1 og koi8-r).',

	'comment_head' => 'Innspel-innstillingar',
	'comment_sendmail' => 'Senda netpost?',
	'comment_sendmail_desc' => 'N�r det er kome innspel, kan vevbladeigaren f� netpost.',
	'comment_emailto' => 'Netpost til',
	'comment_emailto_desc' => 'Skriv netposttilskriftene som skal f� brev. Nytta komma til skiljeteikn.',
	'comment_texttolinks' => 'Tekst p� lenker',
	'comment_texttolinks_desc' => 'Avgjer om innskrivne URL-ar og netposttilskrifter skal kunna klikkast.',
	'comment_wrap' => 'Linebrot etter',
	'comment_wrap_desc' => 'Til f�rebyggjing mot lange tekststrenger som �ydelegg oppsetet, vert tekstene brotne etter eit visst tal teikn.',
	'comments_text_0' => 'merkjelapp for �utan innspel�',
	'comments_text_1' => 'merkjelapp for  �eitt innspel�',
	'comments_text_2' => 'merkjelapp for  �X innspel�',
	'comments_text_2_desc' => 'Teksti som vert nytta til � syna kor mange innspel som er komne til. Leiver du det tomt, vel Pivot det som stend i m�lformoppsetet',

	'comment_pop' => 'Innspel-sprett opp?',
	'comment_pop_desc' => 'Avgjer om innspel-sida (eller �eittinnleggssida�) skal visast i eit sprett opp-vindauga, eller i gjeldande vindauga.',
	'comment_width' => 'Sprett opp-breidd',
	'comment_height' => 'Sprett opp-h�gd',
	'comment_height_desc' => 'Set inn breidd og h�gd (i biletpunkt) for innspel-sprett opp.',

	'comment_format' => "Innspelsoppset",
	'comment_format_desc' => "Avgjer innspelsoppsetet p� innleggssidone.",

	'comment_reply' => "Oppset av 'Innspel ..'",
	'comment_reply_desc' => "Avgjer lenkoppsetet p� innspel til tidlegare innspel.",
	'comment_forward' => "Oppset av 'Innspel fr� ..'",
	'comment_forward_desc' => "Avgjer innspelstekstoppsetet p� innspel med andre innspel til.",
	'comment_backward' => "Oppset av 'Innspel til ...'",
	'comment_backward_desc' => "Avgjer innspelstekstoppsetet p� innspel til andre innspel.",

	'comment_textile' => 'Textile-handsamar',
	'comment_textile_desc' => 'Valet �Med� gjev vitjande h�ve til � nytta <a href="http://www.textism.com/tools/textile/" target="_blank" title="forkl�ring av Textile">Textile</a> i innspel.',
	'save_comment' => 'G�ym p� innspelet',
	'comment_gravatardefault' => 'Din eigen avatar',
	'comment_gravatardefault_desc' => 'URL til ditt eige avatar-bilete. Byrja med http://',
	'comment_gravatarhtml' => 'Avatar-HTML',
	'comment_gravatarhtml_desc' => 'HTML for innset av avatar. Byt ut %img% med URL-en til biletet.',
	'comment_gravatarsize' => 'Avatar-storleik',
	'comment_gravatarsize_desc' => 'Storleiken (i biletpunkt) til avataren. Det faste er 48.',

        'trackback_head' => 'Attendespel-oppset',
	'trackback_sendmail' => 'Send netpost?',
	'trackback_sendmail_desc' => 'Etter at ei attendespel har vorte  plassera, kan det sendast netpost til dei som driv dette vevbladet.',
	'trackback_emailto' => 'Send til',
	'trackback_emailto_desc' => 'Set inn tilskrifti �t vedkomande som skal f� netpost. Set komma mellom dersom det er fleire tilskrifter.',
	'trackbacks_text_0' => 'Merkjelapp for �utan attendespel�',
	'trackbacks_text_1' => 'Merkjelapp for �ei attendespel�',
	'trackbacks_text_2' => 'Merkjelapp for �X attendespel�',
	'trackbacks_text_2_desc' => 'Teksti som viser kor mange attendespel det er. Dersom tomt, kjem Pivot med den faste teksti i m�lformsoppsetet',
	'trackback_pop' => 'Attendespel-sprett opp?',
	'trackback_pop_desc' => 'avgjer om attendespel-sida (eller �eineinnlegg�) skal visast i eit sprett opp-vindauga eller i det opphavlege lesevindauga.',
	'trackback_width' => 'Sprett opp-breidd',
	'trackback_height' => 'Sprett opp-h�gd',
	'trackback_height_desc' => 'Set inn breidd og h�gd (i biletpunkt) p� attendespel-sprett opp.',
	'trackback_format' => "Attendespel-oppset",
	'trackback_format_desc' => "Avgjer oppsetet p� innleggsside-attendespel.",
	'trackback_link_format' => "Attendespel-lenk-oppset",
        'save_trackback' => 'G�ym attendespeli',

	'saved_create' => 'Det nye vevbladet er sett opp.',
	'saved_update' => 'Vevbladet er etterf�rd.',
	'deleted' => 'Vevbladet er stroke.',
	'confirm_delete' => 'Du er ved � sletta vevbladet %1. Vil du det?',

	'blogroll_heading' => 'Vevbladrull-innstilling',
	'blogroll_id' => 'Vevbladrull-ID-nr',
	'blogroll_id_desc' => 'Ved h�ve kan du leggja inn vevbladrullaren <a href="http://www.blogrolling.com" target="_blank" title="Ei vevbladrull-tenesta">blogrolling.com</a> i vevbladet ditt. Vevbladrulling er ei utmerkt tenesta for stell av ei lenkremsa, som syner kva tid dei vart etterf�rde. Dersom du ikkje ynskjer dette, kan du berre sletta dess utfyllingspostane. Elles, kan du, inne i blogrolling.com, velja �get code�, for � finna lenker med nett ditt blogroll-ID-nummer. Det ser nokonlunde soleis ut: 2ef8b42161020d87223d42ae18191f6d',
	'blogroll_fg' => 'Tekstlet',
	'blogroll_bg' => 'Bakgrunnlet',
	'blogroll_line1' => 'Fyrstelinelet',
	'blogroll_line2' => 'Andrelinelet',
	'blogroll_c1' => 'Let 1',
	'blogroll_c2' => 'Let 2',
	'blogroll_c3' => 'Let 3',
	'blogroll_c4' => 'Let 4',
	'blogroll_c4_desc' => 'Desse letene avgjer koss vevbladrullen skal sj� ut. Letene 1 til 4 gjev med fargevalet eit synleg vink om kor lenge sidan det er at vedkomande lenk vart etterf�rd.',
);


$lang['upload'] = array (
	//		File Upload		\\
	'preview' => 'Full listevising',
	'thumbs' => 'Tommelnaglvising',
	'create_thumb' => '(Set opp tommelnagl)',
	'title' => 'Blad',
	'thisfile' => 'L�d opp nytt blad:',
	'button' => 'L�d opp',
	'filename' => 'Bladnamn',
	'thumbnail' => 'Tommelnagl',
	'date' => 'P� den',
	'filesize' => 'Bladstorleik',
	'dimensions' => 'Breidd og h�gd',
	'delete_title' => 'Sletta bilete',
	'areyousure' => 'Er du viss p� at du vil sletta %s?',
	'picheader' => 'Sletting av biletet?',
	'create' => 'Set opp',
	'edit' => 'Endra p�',

	'insert_image' => 'Set inn bilete',
	'insert_image_desc' => 'Innset av bilete krev at du l�der opp eit biletblad eller vel eit som alt er oppl�dd.',
	'insert_image_popup' => 'Set inn sprett opp-bilete',
	'insert_image_popup_desc' => '� skapa eit sprett opp-bilete krev at du l�der up eit biletblad eller vel eit som alt er oppl�dd. Din�st vel du ei tekst eller tommelnagl til utl�ysing av biletet.',
	'choose_upload' => 'l�d opp',
	'choose_select' => 'eller vel',
	'imagename' => 'biletnamn',
	'alt_text' => 'I staden for-tekst',
	'align' => 'Stilling',
	'border' => 'Bord',
	'pixels' => 'biletpunkt',
	'uploaded_as' => 'Bladet er no oppl�dd som �%s�.',
	'not_uploaded' => 'Bladet vart ikkje oppl�dd. Fylgjande veilor kom f�re:',
	'center' => 'Midstilt (fast)',
	'left' => 'Vinstrestilt',
	'right' => 'H�grestilt',
	'inline' => 'Innbunde',
	'notice_upload_first' => 'Du b�r helst fyrst velja eller l�da opp eit bilete',
	'select_image' => 'Biletval',
	'select_file' => 'Bladval',

	'for_popup' => 'Til sprett opp',
	'use_thumbnail' => 'Med tommmelnagl',
	'edit_thumbnail' => 'Endra p� tommelnagli',
	'use_text' => 'Med tekst',
	'insert_download' => 'Set inn til nedl�ding',
	'insert_download_desc' => 'For � setja inn eit blad som kan l�dast ned, b�r du fyrste l�da eit blad opp eller velja eit alt oppl�dd blad. So vel du anten eit bilete, ei tekst eller ei tommelnagl som nedl�dingsutl�ysar.',
	'use_icon' => 'Med bilete',
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => 'Set inn lenk',
	'insert_link_desc' => 'Set inn lenk ved innskrift av URL i posten nedan. Lesarane f�r fram lenk-tittelen ved � peika p� lenken med musi.',
	'url' => 'URL',
	'title' => 'Tittel',
	'text' => 'Tekst',
);


//		Categories		\\
$lang['category'] = array (
	'edit_who' => 'Endra p� kven som kan senda inn innlegg til teigen �%s�',
	'name' => 'Namn p�',
	'users' => 'Brukarar',
	'make_new' => 'Set opp ny teig',
	'create' => 'Set opp teigen',
	'canpost' => 'Vel kven som kan senda inn innlegg til teigen',
	'same_name' => 'Ein teig med det namnet finst alt',
	'need_name' => 'Teigen lyt ha eit namn',

	'allowed' => 'L�yvd',
	'allow' => 'L�yv',
	'denied' => 'Ul�yvd',
	'deny' => 'L�yva ikkje',
	'edit' => 'Endra p� teigen',

	'delete' => 'Sletta teigen',
	'delete_desc' => 'Vel �Med� dersom du vil sletta denne teigen',

	'delete_message' => 'I dette Pivot-bygget, vert einast teignamnet teke burt. I seinare bygg kjem du til � f� velja kva som skal henda med teiginnleggi.',
	'search_index_newctitle'   => 'Teigen p� s�kjeremsa',
	'search_index_newcdesc'    => 'Val av �Utan� hindrar lesarane i � s�kja i teigen.',
	'search_index_editcheader' => 'Teiginnhald',

	'order' => 'Radfylgd',
	'order_desc' => 'Teig med l�gre radtal kjem h�gare opp p� remsa. Dersom nokon f�r same radtalet, kjem dei i bokstavfylgd i staden',
	'public' => 'Ope teiginnsyn',
	'public_desc' => 'Val av �Utan� hindrar at andre enn innskrivne gjester f�r lesa (berre for �Radt ut�-sidor)',
	'hidden' => 'L�ynt teiginnsyn',
	'hidden_desc' => 'Val av �Med� tek teigen ut or arkivremsa (berre for �Radt ut�-sidor).',

);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "Send innlegget",
	'preview_entry' => "F�re�tvising",
	'edit_entry' => "Endra p� innlegget",
	'edit_entry_desc' => "Endra p� dette innlegget",

	'first' => 'fyrste',
	'last' => 'siste',
	'next' => 'n�ste',
	'previous' => 'f�rre',

	'jumptopage' => 'hoppa til sida (%num%)',
	'filteron' => 'vis alt i teigen (%name%)',
	'filteroff' => 'utsiling av',
	'title' => 'Namn p�',
	'subtitle' => 'Tilleggsnamn',
	'introduction' => 'Innleiing',
	'body' => 'Br�dtekst',
	'publish_on' => 'P� den',
	'status' => 'Gjerning',
	'post_status' => 'Gjerning',
	'category' => 'I teigen',
	'select_multi_cats' => '(Ktrl-klikk for val av fleire teigar)',
	'last_edited' => "Siste etterf�rsel",
	'created_on' => "Utgjeve den",
	'date' => 'P� den',
	'author' => 'Av',
	'code' => 'Kode',
	'comm' => 'Innspel #',
	'track' => 'Attendespel #',
	'name' => 'Namn',
	'allow_comments' => 'Innspel',

	'delete_entry' => "Sletta innlegg",
	'delete_entry_desc' => "Sletta innlegget og innspeli til ",
	'delete_one_confirm' => "Veit du visst at du vil sletta innlegget?",
	'delete_multiple_confirm' => "Veit du visst at du vil sletta desse innleggi?",

	'convert_lb' => 'Gjer om lineskift',
	'always_off' => '(St�dt avslege i grafisk teksthandsamar)',
	'be_careful' => '(Ver varsam med dette!)',
	'edit_comments' => 'Endra p� innspel',
	'edit_comments_desc' => 'Endra p� innspeli som er komnne til dette innlegget',
	'edit_comment' => 'Endra p� innspelet',
	'delete_comment' => 'Sletta innspelet',
	'report_comment' => 'Meld innspelet',
	'edit_trackback' => 'Endra p� attendespeli',
	'edit_trackback_desc' => 'Endra p� attendespeli som er komne for dette innlegget',
	'delete_trackback' => 'Sletta attendespel',
	'report_trackback' => 'Meld attendespel',
	'block_single' => 'Utesteng IP %s',
	'block_range' => 'Utesteng IP-rekkja %s',
	'unblock_single' => 'Opna for IP-en %s',
	'unblock_range' => 'Opna for IP-rekkja %s',
	'trackback' => 'Attendespel-pling',
	'trackback_desc' => 'Send attendespelpling til fylgjande URL(-ar). For � senda fleire URL-ar set ein kvar URL p� ei eigi lina.',
	'keywords' => 'Nykelord',
	'keywords_desc' => 'Her kan ein setja opp nykelord som kan nyttast for � finna innlegget, eller for � skapa ein lettvint-URL til innlegget.',
	'vialink' => "Viser til-lenk",
	'viatitle' => "Viser til-tittel",
	'via_desc' => 'Skriv lenk til utspel som dette innlegget svarar/viser attende p�.',
	'entry_catnopost' => 'Du har ikkje l�yve � leggja ut i teigen �%s�.',
	'entry_saved_ok' => 'G�ymde utan vanskar  innlegget  �%s�.',
	'entry_ping_sent' => 'Sende ein attendespel-ping til �%s�.',
  'encoding_warning' =>'Du skriv dette innlegg i %s, medan resten av vevbladi dine nyttar ei onnor omkoding. For � f�rebyggja vanskar pga. dette, burde du sett til at alle lesarar/brukarar og vevblad nyttar same omkoding.',

);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => 'Haka av alle',
	'c_none' => 'Utan avhakingar',
	'choose' => 'Vel gjerning',
	'publish' => 'Lat dei vera �Utgjevne�',
	'hold' => 'Lat dei vera �Atthaldne�',
	'delete' => 'Sletta dei',
	'generate' => 'Gjev ut og skipa til',

	'with_checked_entries' => "Med desse innleggi,",
	'with_checked_files' => "Med desse bladi,",
	'with_checked_templates' => 'Med avmerkte sideoppset,',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => 'f�r kje opna mappa - sj� p� rettane dine.',
	'path_read' => 'f�r kje lese mappa - sj� p� rettane dine.',
	'path_write' => 'f�r kje skrive mappa - sj� p� rettane dine.',

	'file_open' => 'f�r kje opna bladet - sj� p� rettane dine.',
	'file_read' => 'f�r kje lese bladet - sj� p� rettane dine.',
	'file_write' => 'f�r kje opna bladet - sj� p� rettane dine.',
);


//		Notices			\\
$lang['notice'] = array (
	'comment_saved' => "Innspelet er g�ymd.",
	'comment_deleted' => "Innspelet er stroke.",
	'comment_none' => "Innlegg utan innspel.",
	'trackback_saved' => "Attendespelet er g�ymd.",
	'trackback_deleted' => "Attendespelet er stroke.",
	'trackback_none' => "Innlegg utan innspel.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => 'R�ysta �%val%� til innlegget',
	'good' => 'Godt',
	'bad' => 'L�kt',
	'already' => 'Du he alt r�yst p� innlegget/avr�ystingi',
	'register' => 'R�ysti �%val%� er tald ned',
);


$lang['comment'] = array (
	'register' => 'Innspelet ditt er arkivera.',
	'preview' => 'Du f�re�tsyner innspelet. Hugsa p� � trykkja �Send innspel� for � arkivera det.',
	'duplicate' => 'Innspeler er ikkje arkivera d� det verkar som ein kopi av sist innlegg',
	'no_name' => 'Du kannn skriva inn namnet ditt (eller aliaset) i �namne�-teigen. Ver viss p� trykkja  �Send innspelet� for trygg arkivering.',
	'no_comment' => 'Du b�r skriva noko i �Innspel�-teigen. Hugsa p� � trykkja �Send innspelet�, for trygg arkivering.',
	'too_many_hrefs' => 'Lenkjartalgrensa n�dd. Stogga boset.',
    'email_subject' => '[Kommentar] Til:',
    'oneclickdelete' => "Sletta med eitt klikk.",
    'oneclickreport' => "Meld og sletta med eitt klikk.",
    'moderated' => "Med vurdering",
    'moderate_queue_on' => "Innspelsvurdering er p� p� denne staden. Dette tyder at innspel ikkje kjem ut f�r dei er godkjende av ein endringsbrukar.",
    'moderate_stored' => "Innspelet ditt er arkivera. Avdi alle innspel vert vurderte fyrst, lyt det no venta p� ein endringsbrukar.",
    'moderate_waiting' => "Minst eit innspel ventar p� godkjenning av ein endringsbrukar."
);


$lang['comments_text'] = array (
	'0' => "Utan innspel",
	'1' => "%num% innspel",
	'2' => "%num% innspel",
);

$lang['trackbacks_text'] = array (
	'0' => "Utan attendespel",
	'1' => "%num% attendespel",
	'2' => "%num% itlbakespel",
);

$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "Arkiv",
	'next_archive' => "N�ste arkiv",
	'previous_archive' => "F�rre arkiv",
	'last_comments' => "Siste innspel",
	'last_referrers' => "Siste tilvising",
	'calendar' => "Almanakk",
	'links' => "Lenker",
	'xml_feed' => "XML: RSS-kringkasting",
	'atom_feed' => "XML: Atom-kringkasting",
	'powered_by' => "K�yrer p�",
	'blog_name' => "Namn p� vevbladet",
	'title' => "Namn p�",
	'excerpt' => "Utdrag",
	'name' => "Namn",
	'email' => "Netpost",
	'url' => "URL",
	'date' => "P� den",
	'comment' => "Innspel",
	'ip' => "IP-tilskrift",
	'yes' => "Ja",
	'no' => "Nei",
	'emoticons' => "Smiletryne",
	'emoticons_reference' => "Opna smiletryneordboki",
	'textile' => "Textile",
	'textile_reference' => "Opna Textile-ordboki",
	'post_comment' => "Gjev innspel",
	'preview_comment' => "F�re�tvis innspelet",
	'remember_info' => "Hugsa opplysningene om deg?",
	'notify' => "Meld fr�",
	'notify_yes' => "Ja, send netpost dersom nokon gjev innspel.",
	'register' => "Set opp brukarnamnet / Gakk inn",
	'registered' => "Registerf�rd",
	'disclaimer' => "<b>Med liti skrift:</b> Ingi HTML-taggar forutan &lt;b&gt; og &lt;i&gt; kjem med i innspel. Lenker legg ein inn ved � berre skriva netstad- eller netposttilskrift.",
	'search_title' => "Funn",
	'search' => "S�k!",
	'nomatches' => "Utan tilslag for '%name%'. Freista noko annat.",
	'matches' => "Tilslag for '%name%':",
	'about' => "Om",
	'stuff' => "Ymist",
	'linkdump' => "Lenkdunge",
	'discreet' => "L�yn netpost",
	'discreet_yes' => "Ja, l�yn netposttilskrifti.",
	'moderated' => "Til vurdering",
    'waiting_moderation' => "Innspel som ikkje er vurdert.",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Endra p� brukarpostar',
	'edit' => 'Endra p�',
	'create' => 'Set opp',

	'dispname' => 'Synt namn',
	'intname' => 'Indre namn',
	'intname_desc' => 'Det indre nament er namnet p� denne tingen slik han kjem til synes n�r du bed pivot visa honom i eit sideoppset.',
	'size' => 'Storleik',
	'rows' => 'Rader',
	'cols' => 'Rekkjor',
	'maxlen' => 'Lengste lengd',
	'minlevel' => 'L�gste b.l�yve',
	'filter' => 'Finn alt p�',
	'filter_desc' => 'Med filtreing p� denne tingen avgrensar du kva som kan skrivast i han',
	'no_filter' => 'Inkje',
	'del_title' => 'Stadfest sletting',
	'del_desc' => '� sletta brukarposten (<b>%s</b>) kjem og til � �ydeleggja alt som vedkomande har arkivera med honom, og gjera at alle innslag med honom i sideoppseti, ser tome ut.',

	'already' => 'Namnet er alt i bruk',
	'int' => 'Indre namn lyt vera p� meir enn 3 bokstavar',
	'short_disp' => 'Synt namn lyt vera p� meir enn 3 bokstavar',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => 'Skrivebokmerke',
	'bm_add' => 'Legg til skrivebokmerke.',
	'bm_withlink' => 'Pivot &#8674; Skrivesida med lenk i',
	'bm_withlink_desc' => 'Skrivebokmerke som opnar ei Skrivesida med ein lenk til sida du las d� du opna skrivesida.',

	'bm_nolink' => 'Pivot &#8674; Skrivesida - tom',
	'bm_nolink_desc' => 'Skrivebokmerke som opnar ei tom Skrivesida.',

	'bookmarklets_info' => 'Med skrivebokmerke kan ein lettvint skriva nye innlegg i Pivot. For � leggja til eit nytt skrivebokmerke i vevlesaren, har du tvo val: (sj�lve teksti ymsar etter som kva for vevlesar du nyttar)',
	'bookmarklets_info_1' => 'Klikka og drag skrivebokmerket til �Bokmerke�-radi eller �Bokmerke�-knappen.',
	'bookmarklets_info_2' => 'Klikka med h�gre musknapp p� skrivebokmerket og vel �Legg til Bokmerke�.',
);

// Accessibility - These are used for form fields, labels, fieldsets etc.
// for Web Content Accessibility Guidelines & 508 compliancy issues.
// see: http://bobby.watchfire.com/bobby/html/en/index.jsp
// JM =*=*= 2004/10/04
// 2004/11/25 =*=*= JM - minor correction for tim
$lang['accessibility'] = array(
	'search_idname'      => 's�k',
	'search_formname'    => 'Leit i innleggi',
	'search_fldname'     => 'Set inn s�kjeord:',
	'search_placeholder' => 'Vel s�kjeord',

	'calendar_summary'   => 'Denne tabellen hyser ein innleggskalender for vevbladet, med lenker og innleggsdag.',
	'calendar_noscript'  => 'Kalenderen er ein m�te � f� tilgjenge til vevblad-innleggi p�.',
	/*
	2-letter language code, used to designate the principal language used on the site
	see: http://www.oasis-open.org/cover/iso639a.html
	*/

	'lang' => $langname,
) ;


$lang['snippets_text'] = array (
    'word_plural'     => 'ord',
    'image_single'    => 'bilete',
    'image_plural'    => 'bilete',
    'download_single' => 'blad',
    'download_plural' => 'blad',
);

$lang['trackback'] = array (
    'register' => 'Attendespelet ditt er g�ymd.',
    'duplicate' => 'Attendespelet vart ikkje g�ymd d� det verkar som ein kopi av f�rre innlegg',
    'too_many_hrefs' => 'Lenkjartal-grensa broten. Stogga boset.',
    'noid'      => 'Utan attendespel-ID (tb_id)',
    'nourl'     => 'Utan URL (url)',
    'tracked'   => 'Attendespelt',
    'email_subject' => '[Trackback] Til:',
);

$lang['commentuser'] = array (
    'title'             => 'Pivot brukarinngang',
    'header'            => 'Kom inn som innskriven gjest',
    'logout'            => 'Gakk ut.',
    'loggedout'         => 'Ute',
    'login'             => 'Innskriving',
    'loggedin'          => 'Innkomen',
    'loggedinas'        => 'Komm inn som',
    'pass_forgot'       => 'Gl�ymd l�ysnord?',
    'register_new'      => 'Skriv deg inn med nytt brukarnamn.',
    'register'          => 'Skriv deg inn som gjest',
    'register_info'     => 'Ver gild og fyll ut fylgjande opplysningar. <strong>Ver n�gje med � skriva rett netposttilskrift</strong> d� me kjem til � senda eit stadfestingsbrev dit.',
    'pass_note'         => 'Merk: Vedkomande som driv netstaden <br /> vil kunna sj� l�ysnordet. Vel <em>ikkje</em> eit l�ysnord<br /> du nyttar andre stader!',
    'show_email'        => 'Syn netposttilsskrifti attmed innspel',
    'notify'            => 'Meld fr� med netpost ved nye innspel',
    'def_notify'        => 'V�r faste skikk ved innspel',
    'register'          => 'Registerf�r deg',
    'pass_invalid'      => 'Gali l�ysnord',
    'user_disabled'     => 'Stengd brukar',
    'nouser'            => 'Ukjend brukar.',
    'change_info'       => 'Her kan du stilla opplysningane dine.',
    'pref_edit'         => 'Endra p� innstillingane dine',
    'pref_change'       => 'Byt innstillingar',
    'options'           => 'Tilval',
    'user_exists'       => 'Brukar som alt finst. Ver gild og vel eit annat namn.',
    'email_note'        => 'Du lyt koma med netposttilskrifti di, elles kan ikkje kontoen stadfestast. Dessutan kan du stilla inn at netposttilskrifti di ikkje skal visast til andre.',
    'stored'            => 'Endra p�a er vorte lagde til',
    'verified'          => 'Kontoen din er stadfest. Du kan no kokma inn.',
    'not_verified'      => 'Den koden verkar galen. Divverre, dette kan eg ikkje stadfesta.',
    'pass_sent'         => 'L�ysnordet vart send til oppgjevne postkassa.',
    'user_pass_nomatch' => 'Brukarnamn og postadressa tykkjest ikkje h�yra saman.',
    'user_stored'       => 'Brukaren lagd til!',
    'user_stored_failed' => 'Fekk ikkej lagd til ny brukar!!',
    'pass_send'         => 'Send l�ysnordet',
    'pass_send_desc'    => 'Dersom du har gl�ydm l�ysnordet, kan du fylla ut brukarnamn og netpost, og so kjem Pivot til det til deg. ',
    'oops'              => 'Hoisann!',
    'back'              => 'Attende til',
    'back_login'        => 'Attende til inngang',
    'forgotten_pass_mail' => "Pivot-l�ysnet du gl�ymde, '%name%', er: \n\n%pass%\n\nVer gild � ikkje gl�ma det att!\n\nFor � komma inn i kontoen din, trykkjer du p� fylgjande lenk:\n %link%",
    'registered'        => "Du har registerf�rd deg som Pivot-brukar '%s'",
    'reg_confirmation'  => 'Registerf�ringa stadfest',
    'reg_verify_short'  => 'Stadfest kontoen din',
    'reg_verify_long'   => "For � stadfesta kontoen lyt du trykkja  p� fylgjande lenk:\n %s",
    'reg_verification'  => 'Netpoststadfesting sendt til %s. Ver gild � sj� etter brevet for � stadfesta kontoen din.'
);

// A little tool to help you check if the file is correct..
if (count(get_included_files())<2) {

	$groups = count($lang);
	$total = 0;
	foreach ($lang as $langgroup) {
		$total += count($langgroup);
	}
	echo "<h2>M�lbladet er rett!</h2>";
	echo "Dette m�lbladet inneheld $groups groppor og ialt $total merkjelappar.";

}

?>
