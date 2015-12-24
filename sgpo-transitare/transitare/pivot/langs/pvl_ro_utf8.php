<?php
//Romanian (UTF-8)

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2rd line.

// Romanian translation of Pivot lang file
// Created by NLN (nick_ln@yahoo.com)
// Last updated by Pivot Dev. (www.pivotlog.net) 25.04.2005

// allow for different encoding for non-western languages
$encoding="utf-8";
$langname="ro";


//		General		\\
$lang['general'] = array (
	'yes' => 'Da',	//affirmative
	'no' => 'Nu',		//negative
	'continue' => 'Continua', //proceed 
	'go' => 'Go!',	//proceed

	'minlevel' => 'Nu ai permisiunea sa accesezi aceasta zona din Pivot',
	'email' => 'Email',
	'url' => 'URL',
	'further_options' => "Alte Optiuni",
	'basic_view' => "Vedere de Baza",
	'basic_view_desc' => "Vizualizeaza doar campurile cele mai comune",
	'extended_view' => "Vedere Extinsa",
	'extended_view_desc' => "Vizualizeaza toate campurile editabile",
	'toggle_view' => "Schimba intre vizualizarea de baza si cea extinsa",
	'select' => "Selecteaza",
	'cancel' => "Anuleaza",
	'delete' => 'Sterge',
	'approve' => 'Aproba',
	'edit' => 'Editeaza',
	'welcome' => "Bun venit la %build%.",
	'write' => "Scrie",
	'write_open_error' => "Eroare de Scriere. Nu s-a putut deschide fisierul pentru scriere",
	'write_write_error' => "Eroare de Scriere. Nu s-a putut scrie in fisier",
	'done' => "Gata!",
	'shortcuts' => "Scurtaturi",
	'cantdelete' => "Nu ai permisiunea sa stergi intrarea %title%!",
	'cantdothat' => "Nu ai permisiunea sa faci aceasta cu intrarea %title%!",
	'cantdeletelast' => "Nu poti sterge ultima intrare. Trebuie sa postezi mai intai o intrare noua, inainte de a sterge aceasta intrare",
	'more' => "mai multe...",
	'all' => "toate",
);


$lang['userlevels'] = array (
		'Superadmin', 'Administrator', 'Avansat', 'Normal', 'Moblogger'
		//  this one might be a bit hard to translate, but basically it's an order of
		//  power or trust.  Superadmin would be the person in charge - no one can do
		//  anything about his decisions. Admin is only regulated by the Superadmin,
		//  Advanced by the Admin and Superadmin, etc..
		//  Just get the idea of it.
);


$lang['numbers'] = array (
	'zero', 'un', 'doua', 'trei', 'patru', 'cinci', 'sase', 'sapte', 'opt', 'noua', 'zece', 'unsprezece', 'doisprezece', 'treisprezece', 'paisprezece', 'cinsprezece', 'saisprezece'
);


$lang['months'] = array (
	'Ianuarie', 'Februarie', 'Martie', 'Aprilie', 'Mai', 'Iunie', 'Iulie', 'August', 'Septembrie', 'Octobmrie', 'Noiembrie', 'Decembrie'
);


$lang['months_abbr'] = array (
	'Ian', 'Feb', 'Mar', 'Apr', 'Mai', 'Iun', 'Iul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
);


$lang['days'] = array (
	'Duminica', 'Luni', 'Marti', 'Miercuri', 'Joi', 'Vineri', 'Sambata'
);


$lang['days_abbr'] = array (
	'Dum', 'Lun', 'Mar', 'Mie', 'Joi', 'Vin', 'Sam'
);


$lang['days_calendar'] = array (
	'D', 'L', 'M', 'M', 'J', 'V', 'S'
);


$lang['datetime_words'] = array (
	'An', 'Luna', 'Saptamana', 'Zi', 'Ora', 'Minutul', 'Secunda'	//the actual words for them.
);


//		Login Page		\\
$lang['login'] = array (
	'title' => 'Autentificare',
	'name' => 'Nume User',
	'pass' => 'Parola',
	'remember' => 'Tine minte',
	'rchoice' => array (
		'0' => 'Nimic',
		'1' => 'Numele meu de User si Parola',
		'2' => 'Ca vreau sa stau autentificat'
	),
	'delete_cookies_desc' => 'Daca esti sigur ca folosesti numele de user si parola corecta, dar ai <br />probleme cu autentificarea, ai putea incerca sa stergi cookies pentru acest domeniu:',
	'delete_cookies' => 'Sterge cookies',
	'retry' => 'Nume de user / parola Incorecta',
	'banned' => 'Ai esuat sa ai acces din 10 incercari. Ca rezultat, acest IP a fost restrictionat de la incercarea de autentificare pentru 12 ore.',

);


//		Main Bar		\\
$lang['userbar'] = array (
	'main' => 'Vedere Generala',
	'entries' => 'Intrari',
	'submit' => 'Intrare Noua',
	'comments' => 'Comentarii',
	'trackbacks' => 'Depistari',
	'modify' => 'Modifica Intrari',
	'userinfo' => 'Informatiile Mele',
	'u_settings' => 'Setarile Mele',
	'u_marklet' => 'Insemne',
	'files' => 'Administrare Media',
	'upload' => 'Incarcare',
	'stats' => 'Statistici',
	'admin' => 'Administrare',

	'main_title' => 'Vedere Generala Globala a Pivot',
	'entries_title' => 'Vedere Generala a Intrarilor',
	'submit_title' => 'Scrie si Publica o Intrare Noua',
	'comments_title' => 'Editeaza sau Sterge Comentarii',
	'trackbacks_title' => 'Editeaza sau Sterge Depistari',
	'modify_title' => 'Modifica Intrare',
	'userinfo_title' => 'Vizualizeaza informatiile mele personale',
	'u_settings_title' => 'Editeaza Setarile mele personale',
	'u_marklet_title' => 'Creaza Insemne',
	'files_title' => 'Administreaza si Incarca Media',
	'upload_title' => 'Incarca Fisiere',
	'uploaded_success' => 'Fisierul a fost incarcat',
	'stats_title' => 'Vizualizare Jurnale si Statistici.',
	'updatetitles_title' => 'Vizualizare Jurnale si Statistici.',
	'admin_title' => 'Vedere Generala a functiilor Administrative',
	'recent_entries' => 'Intrari Recente',
	'recent_comments' => 'Comentarii Recente',
	'moderate_comments' => 'Modereaza Comentarii',
	'moderate_comments_desc' => 'Exista %1 comentarii ce asteapta sa fie aprobate.',
	'moderate_nocomments_desc' => 'Nici un comentariu de aprobat.',
	'moderate_autoapprove' => 'Aproba imedait comentarii din partea acestor Vizitatori Inregistrati in viitor.',
);


$lang['adminbar'] = array (
	//		Admin Bar		\\
	'seeusers' => 'Useri',
	'seecommusers' => 'Vizitatori Inregistrati',
	'seeconfig' => 'Configuratie',
	'filemappings' => 'Scanari Fisiere',
	'templates' => 'Sabloane',
	'maintenance' => 'Intretinere',
	'regen' => 'Recladeste Toate Fisierele',
	'blogs' => 'Weblog-uri',
	'categories' => 'Categorii',
	'verifydb' => 'Verifica Baza de Date',
	'buildindex' => 'Recladeste Indexul',
	'buildsearchindex' => 'Recladeste Indexul de Cautare',
	'buildfrontpage' => 'Recladeste Paginile Principale',
	'sendping' => 'Trimite Ping-uri',
	'backup' => 'Backup',
	'description' => 'Descriere',
	'conversion' => 'Conversie',
	'seeusers_title' => 'Creaza, editeaza si sterge Useri',
	'seecommusers_title' => 'Vizualizeaza si editeaza Vizitatorii Inregistrati',
	'userfields' => 'Campuri de Informatie User',
	'userfields_title' => 'Creaza, editeaza si sterge Campuri de Informatie User',
	'seeconfig_title' => 'Editeaza fisierul de Configuratie',
	'filemappings_title' => 'Arata si revizuieste care fisiere din site-ul tau sunt create si de weblog-urile din acest Pivot',
	'templates_title' => 'Creaza, editeaza si sterge Sabloane',
	'maintenance_title' => 'Indeplineste rutina de intretinere asupra fisierelor din Pivot',
	'regen_title' => 'Recladeste Fisierele si Arhivele pe care le genereaza Pivot',
	'blogs_title' => 'Creaza, editeaza si sterge Weblog-uri',
	'blogs_edit_title' => 'Editeaza Setarile de Weblog Pentru ',
	'categories_title' => 'Creaza, editeaza si sterge Categoriile',
	'verifydb_title' => 'Verifica integritaea Bazei tale de Date',
	'buildindex_title' => 'Recladeste indexul Bazei tale de Date',
	'buildsearchindex_title' => 'Recladeste Indexul de Cautare, pentru a permite cautare in intrari',
	'buildfrontpage_title' => 'Recladeste pagina principala, ultimele arhive si fisierele RSS pentru fiecare din weblog-uri.',
	'backup_title' => 'Creaza un Backup al Intrarilor tale',
	'backup_db' => 'Backup al Bazei de Date',
	'backup_db_desc' => 'Aceasta iti va permite sa descarci un fisier zip care contine baza ta de date (cu toate intrarile tale)',
	'backup_config' => 'Backup al Fisierelor de Configuratie',
	'backup_config_desc' => 'Aceasta iti va permite sa descarci un fisier zip care contine fisierele tale de configuratie',
	'ipblocks' => 'Blocari IP',
	'ipblocks_title' => 'Vizualizeaza si Editeaza adresele de IP blocate.',
	'ipblocks_stored' => 'Adresele IP au fost stocate.',
	'ipblocks_store' => 'Stocheaza aceste adrese IP',
	'ignoreddomains' => 'Fraze Blocate',
	'ignoreddomains_title' => 'Vizualizeaza si Editeaza Frazele Blocate pentru a combate spam-ul.',
	'ignoreddomains_stored' => 'Frazele Blocate au fost stocate.',
	'ignoreddomains_store' => 'Stocheaza aceste Fraze Blocate',
	'ignoreddomains_asterisk' => 'Lucrurile marcate cu un asterisk ( * ) vor fi folosite doar pentru a bloca referintele. Toate celelalte lucruri vor fi folosite pentru a bloca pe cei ce fac referintele, comentariile precum si depistarile.',
	'ignoreddomains_global' => 'Fraze blocate global.',
	'ignoreddomains_global_desc' => 'Pe langa Frazele Blocate mentionate mai sus, poti folosi de asemenea o lista actuala pe care o poate produce Pivot-ul tau de pe serverul pivotlog.net. In prezent aceasta lista contine urmatoarele fraze:',
	'ignoreddomains_global_empty' => 'Lista de Fraze Globale este goala',
	'ignoreddomains_global_update' => 'Actualizeaza lista de Fraze Globale de la pivotlog.net',
	'ignoreddomains_global_delete' => 'Sterge lista de Fraze Globale',
	'ignoreddomains_global_success' => 'Frazele Globale au fost stocate.',
	'ignoreddomains_global_failed' => 'Frazele Globale nu au putut fi stocate. Te rog sa incerci din nou mai tarziu!',
	'ignoreddomains_global_deleted' => 'Frazele Globale au fost sterse.',
 	'fileexplore' => 'Explorator de Fisiere',
	'fileexplore_title' => 'Vizualizeaza fisiere (atat cele de text cat si din baza de date)',
	'sendping_title' => 'Trimite Ping-uri pentru a Actualiza Depistatorii.',
	'buildindex_start' => 'Cladesc acum indexul. Aceasta ar putea dura ceva tip, te rog nu intrerupe.',
	'buildsearchindex_start' => 'Cladesc Indexul de Cautare. Aceasta ar putea dura ceva tip, te rog nu intrerupe.',
	'buildindex_finished' => 'Terminat! Generarea indexului a durat %num% secunde',

	'filemappings_desc' => 'Mai jos poti vedea o vedere generala a fiecarui weblog din instalarea acestui Pivot, impreuna cu acele fisiere ce sunt create de Pivot si sabloanele pe care le foloseste pentru a crea aceste fisiere. Aceasta poate fi de folos atunci cand se stabilesc probleme cu crearea de fisiere.',

	'debug' => 'Deschide fereastra de Debug',

	'latest_pivot_news' => "Ultimele Stiri Pivot",
	'remove_setup_header' => "Scriptul Instalator de Pivot prezent",
	'remove_setup' => "Scriptul de instalare Pivot 'pivot-setup.php' este inca prezent in folderul parinte. Ar trebui sa fii constient ca acesta este un risc potential de securitate. Te sfatuim sa il stergi, sau sa il redenumesti, asa incat sa nu fie executat de persoane cu rele intentii.",	
	'magic_quotes_header' => "Magic Quotes activat",
	'magic_quotes' => "Serverul tau are o optiune PHP setata care se numeste 'Citate Magice' si este activata. Aceasta ar putea cauza ca Pivot sa ruleze sub-optim. Vezi <a href='http://www.pivotlog.net/docs/doku.php?id=servers_with_magic_quotes'>aceasta pagina</a> pentru a remedia situatia.",
	'register_globals_header' => "Register Globals activat",
	'register_globals' => "Serverul tau are o optiune PHP setata care se numeste 'inregistrare globale' si este activata. Aceasta este o setare potential nesigura, si prin urmare ar trebui sa repari aceasta in cel mai scurt timp. Pentru a remedia situatia, vezi '<a href='http://www.pivotlog.net/docs/doku.php?id=servers_with_register_globals'>Serverele cu register_globals</a>' din documentatia Pivot.",	
	'spamprotection' => "Protectie Spam",
	'spamprotection_title' => "Vedere Generala a diferitelor unelte contra spam in weblog",
	'spamconfig' => "Configuratie spam",
	'spamconfig_title' => "Configurare unelte de Protectie Spam Protection (precum HashCash si SpamQuiz).",
	'seespamconfig_title' => 'Configurare unelte de Protectie Spam',
	'spamwasher' => 'Spalator de Spam',
	'spamwasher_title' => 'Cauta spam, si sterge totul din intrarile tale si din depistari.',
	'spamlog' => "Jurnal Spam",
	'spamlog_title' => "Vizualizeaza si Reseteaza Jurnalul de Spam.",
	'viewspamlog_title' => "Afisare Jurnal Spam",
);


$lang['templates'] = array (
	'rollback' => 'Ruleaza inapoi',
	'create_template' => 'Creaza sablon',
	'create_template_info' => 'Creaza un sablon Pivot din nimic',
	'no_comment' => 'Nici un Comentariu',
	'comment' => 'Comentariu*',
	'comment_note' => '(*Nota: Comentariile pot fi salvate doar la <b>prima</b> salvare a schimbarilor sau a crearii)',
	'create' => 'Creaza sablon',
	'editing' => 'Editare',
	'filename' => 'Nume Fisier',
	'save_changes' => 'Salveaza schimbarile!',
	'save_template' => 'Salveaza sablon!',
	'aux_template' => 'Sablon Auxiliar',
	'sub_template' => 'Sub-sablon',
	'standard_template' => 'Sablon Normal',
	'feed_template' => 'Sablon Feed',
	'css_template' => 'Fisier CSS',
	'txt_template' => 'Fisier Text',
	'php_template' => 'Fisier PHP',
);


//		Maintenace		\\
$lang['maint'] = array (
	'title' => 'Intretinere',
	'gen_arc_title' => 'Genereaza Arhiva', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => 'Re-genereaza toate arhivele tale', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'Verifica Fisierele XML', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'Verifica (si repara daca este nevoie) integritatea fisierelor XML', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => 'Backup',
	'backup_text' => 'Creaza un backup al tuturor fisierelor esentiale din pivot',
);


//		Spam Protection		\\
$lang['spam'] = array (
	'hc_options' => 'Optiuni HashCash',
	'hc' => 'Foloseste HashCash',
	'hc_desc' => "HashCash este cea mai puternica, complet invizibila protectie contra spam-ului care este disponibila. Aceasta necesita ca javascript sa fie permis in partea clientului. Daca nu este acceptabil aceasta pentru tine, atunci nu il activa.",
	'sq_options' => 'Optiuni SpamQuiz',
	'sq' => 'Foloseste SpamQuiz',
	'sq_desc' => "Inainte de a trimite un comentariu, userii tai trebuie sa raspunda corect la o intrebare simpla la care stie toata lumea raspunsul. Aceasta nedumereste complet motoarele automate de spam pentru ca fiecare blogger va alege ceva diferit.",
	'sq_question' => 'Intrebare',
	'sq_question_desc' => "Exemplu: Care sunt primele doua litere ale cuvantului 'spam'?",
	'sq_answer' => 'Raspuns',
	'sq_answer_desc' => 'Exemplu: <b>sp</b>',
	'sq_explain' => 'Explicatie',
	'sq_explain_desc' => 'Exemplu: Pentru a preveni spam-ul de comentarii automate, iti cerem sa raspunzi la aceasta intrebare prosteasca',
	'sq_days' => 'Limita de Varsta',
	'sq_days_desc' => 'Permite SpamQuiz doar pentru intrarile mai vechi de atatea zile. In mod normal spam-ul de comentarii este trimis doar la intrarile vechi si de aici s-ar putea sa nu fie necesar sa pui greutate pe userii tai regulati (care comenteaza in cadrul a, de ex., o saptamana).',
	'ht_options' => 'Optiuni Ingreunate de Depistare',
	'ht' => 'Foloseste Depistarea Ingreunata',
	'ht_desc' => "Depistarea Ingreunata este o protectie puternica contra spam de depistare. Acesta necesita ca javascript sa fie activat in partea clientului. Daca nu este acceptabil aceasta pentru tine, atunci nu il activa.",
	'tburl_gen' => 'Apasa pentru a genera un url de depistare',
	'tburl_gen_note' => 'Nota: url-ul generat e valabil doar pentru 15 minute si javascript trebuie sa fie pornit!',
	'tburl_gen_javascript' => 'Te rog sa permiti javascript pentru a se genera un url de depistare',
	'enable_js_comm' => 'Te rog permite Javascript (si reincarca aceasta pagina) pentru a adauga orice comentarii.',
	'empty_log' => 'Jurnalul de Spam este gol.',
	'reset_log' => 'Reseteaza Jurnalul de Spam',
	'reset_log_done' => 'Resetare Jurnal de Spam',
);


//		Stats and referers		\\
$lang['stats'] = array (
	'show_last' => "Arata ultimele",
	'20ref' => "20 referinte",
	'50ref' => "50 referinte",
	'allref' => "toate referintele",
	'showunblocked' => "doar liniile ne-blocate",
	'showall' => "atat liniile blocate cat si cele ne-blocate",
	'updateref' => "Actualizeaza referinta in scanarile de fisier",
	'hostaddress' => 'Adresa gazda (adresa ip)',
	'whichpage' => 'Care pagina',

	'getting' => 'Aduc titluri noi',
	'awhile' => 'Aceasta ar putea dura ceva timp, te rog nu intrerupe.',
	'firstpass' => 'Prima trecere',
	'secondpass' => 'A Doua trecere',
	'nowuptodate' => 'Scanarea titlului de referinta este de acum actualizata.',
	'finished' => 'Terminat',
);


//		User Info		\\
$lang['userinfo'] = array (
	'editfields' => 'Editeaza Campuri User',
	'desc_editfields' => 'Editeaza campurile pe care le pot folosi userii pentru a se descrie',
	'username' => 'Nume User',
	'pass1' => 'Parola',
	'pass2' => 'Parola (confirma)',
	'email' => 'Email',
	'nickname' => 'Porecla',
	'url' => 'URL',
	'verified' => 'Verificat',
	'verified_desc' => 'Verifica contul acestui vizitator pentru user.',
	'disabled' => 'Dezactivat',
	'disabled_desc' => 'Dezactiveaza contul acestui vizitator (ca sa nu se mai faca alte comentarii cu acest nume).',
	'userlevel' => 'Nivel User',
	'userlevel_desc' => 'Nivelul de User va determina ce fel de actiuni poate indeplini acest user in pivot.',
	'language' => 'Limba',
	'lastlogin' => 'Ultima Autentificare',
	'users' => 'Useri',
	'commusers' => 'Vizitatori Inregistrati',
	'edituser' => 'Editare User',
	'editcommuser' => 'Editare Vizitator Inregistrat',
	'edituserinfo' => 'Editare Informatii User',
	'selfreg' => 'Auto-inregistrare',
	'newuser' => 'Creaza User Nou',
	'desc_newuser' => 'Creaza un nou cont de autentificare pentru Pivot, care sa le permita sa posteze intr-ul weblog.',
	'newuser_button' => 'Creaza',
	'edituser_button' => 'Schimba',
	'pass_too_short' => 'Parola trebuie sa fie de cel putin 4 litere.',
	'pass_equal_name' => 'Parola nu poate fi aceiasi cu numele de user.',
	'pass_dont_match' => 'Parolele nu corespund',
	'username_in_use' => 'Nume de User deja folosit',
	'username_too_short' => 'Numele trebuie sa fie de cel putin 3 litere sau mai lung',
	'username_not_valid' => 'Numele de useri poate contine numai caractere alfanumerice (A-Z, 0-9) si sublinieri (_).',
	'not_good_email' => 'Aceasta nu este o adresa de email valida',
	'c_admin_title' => 'Confirma crearea unui administator',
	'c_admin_message' => 'Un '.$lang['userlevels']['1'].' are acces deplin la pivot si poate edita toate lucrurile noi, toate comentariile si schimba orice setare. Esti sigur ca vrei sa faci pe %s un '.$lang['userlevels']['1'].'?',
);


//		Config Page		\\
$lang['config'] = array (
	'save' => 'Salveaza Setari',

	'sitename' => 'Nume Site',
	'defaultlanguage' => 'Limba implicita',
	'defaultencoding' => 'Foloseste encoding',
	'defaultencoding_desc' => 'Aceasta defineste encoding-ul care este folosit (cum ar fi utf-8 sau iso-8859-1). Ar trebui sa lasi aceasta necompletata, doar daca stii ceea ce faci. Daca lasi liber se va folosi setarile adecvate din fisierele de limbaj.',
	'defaulttheme' => 'Tema',
	'selfreg' => 'Permite auto-inregistrarea',
	'selfreg_desc' => 'Setand aceasta pe da va permite persoanelor s-a se inregistreze ca useri (normali) si astfel sa posteze intrari. (Acesta nu este un user de "comentariu".)',
	'xmlrpc' => 'Permite XML-RPC',
	'xmlrpc_desc' => 'Setand aceasta pe da iti permite sa postezi in blogul tau din alte aplicatii desktop (folosind MetaWeblog API).',
	'siteurl' => 'URL Site',
	'header_fileinfo' => 'Info Fisier',
	'localpath' => 'Calea Locala',
	'debug_options' => 'Optiuni de Debug',
	'debug' => 'Modul Debug',
	'debug_desc' => 'Arata informatii de debug la intamplare, ici si colo..',
	'log' => 'Jurnal de fisiere',
	'log_desc' => 'Tine jurnal al activitatilor variate',

	'unlink' => 'Desface Fisiere',
	'unlink_desc' => 'Anumite instante de fisiere pe care este activat inspaimantatorul safe_mode, ar putea cere jucarea cu aceasta optiune. Pe majoritatea serverelor aceasta optiune nu va avea nici un efect',
	'chmod' => 'Chmod Fisiere In',
	'chmod_desc' => 'Anumite servere cer ca fisierele create sa fie chmod-ate intr-un fel specific. Valorile comune sunt \'0644\' si \'0755\'. Nu schimba aceasta, decat daca stii ceea ce faci.',
	'header_uploads' => 'Setari de Incarcare Fisier',
	'upload_path' => 'Calea de Incarcare Fisier',
	'upload_accept' => 'Tipuri Acceptate',
	'upload_extension' => 'Extensia Implicita',
	'upload_save_mode' => 'Suprascrie',
	'make_safe' => 'Curata Numele de Fisier',
	'c_upload_save_mode' => 'Incrementeaza Numele de Fisier',
	'max_filesize' => 'Marimea Maxima de Fisier',
	'header_datetime' => 'Data/Timp',
	'timeoffset_unit' => 'Unitatea de Compensare Timp',
	'timeoffset' => 'Compensare Timp',
	'header_extra' => 'Setari Variate',
	'wysiwyg' => 'Foloseste editorul Wysiwyg',
	'wysiwyg_desc' => 'Determina daca editorul Wysiwyg este activ in mod implicit. Userii individuali pot schimba aceasta in setarile lor de \'Informatiile Mele\'.',
	'basic_view' => 'Foloseste Vizualizarea de Baza',
	'basic_view_desc' => 'Determina daca \'Intrare Noua\' se deschide in Vizualizare de Baza sau cea Extinsa.',
	'def_text_processing' => 'Procesarea Implicita de Text',
	'text_processing' => 'Procesarea de Text',
	'text_processing_desc' => 'Determina procesarea implicita de text, cand un user nu foloseste editorul wysiwyg. \'Converteste Spatile dintre Linii\' nu face nimic mai mult decat sa converteasca spatiile dintre linii intr-o eticheta &lt;br&gt;. <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> este un stil de marcat puternic, tosui usor de invatat.',
	'none' => 'Nici unu',
	'convert_br' => 'Converteste Spatiile dintre Linii in &lt;br /&gt;',
	'textile' => 'Textile',
	'markdown' => 'Markdown',
	'markdown_smartypants' => 'Markdown si Smartypants',

	'allowed_cats' => 'Categorii Permise',
	'allowed_cats_desc' => 'Acestui user i se permite sa posteze intrari in categoriile selectate',
	'delete_user' => "Sterge user",
	'delete_user_desc' => "Poti sterge acest user daca doresti. Toate postarile sale raman, insa nu va mai putea sa se autentifice",
	'delete_user_confirm' => 'Esti pe cale sa stergi accesul pentru %s. Esti sigur ca vrei sa faci aceasta?',
	'delete_commuser' => "Sterge vizitatorul inregistrat",
	'delete_commuser_desc' => "Poti sterge acest vizitator inregistrat daca doresti. Toate comentariile sale raman",
	'delete_commuser_confirm' => 'Esti pe cale sa stergi contul pentru %s. Esti sigur ca vrei sa faci aceasta?',

	'setup_ping' => 'Setare Ping',
	'ping_use' => 'Ping depistatorii de actualizare',
	'ping_use_desc' => 'Aceasta determina daca depistatorii de actualizare precum weblogs.com va fi notificat automat de Pivot daca postezi o intrare noua. Serviciile precum blogrolling.com depind de aceste ping-uri',
	'ping_urls' => 'URL-uri de ping',
	'ping_urls_desc' => 'Poti oferii cateva url-uri la care sa trimiti ping-uri. Nu include partea  http:// , altfel nu va functiona. Pune fiecare server pe cate o linie, sau separate printr-un caracter teava. Cateva servere comune sunt:<br /><b>rpc.weblogs.com/RPC2</b> (weblogs.com pinger, cel mai larg folosit)<br /><b>pivotlog.net/pinger</b> (pivotlog pinger, nu este inca operational)<br /><b>rcs.datashed.net/RPC2</b> (euro.weblogs.com pinger)<br /><b>ping.blo.gs</b> (blo.gs pinger)<br />',

	'setup_tb' => 'Setare Depistare',
	'tb_email' => 'Email',
	'tb_email_desc' => 'Daca este setat, un email va fi trimis la aceasta adresa cand un Depistator este adaugat.',

	'new_window' => 'Deschide link-uri in fereastra noua',
	'emoticons' => 'Foloseste iconite de emotie',
	'javascript_email' => 'Encodez Adresa de Email?',
	'new_window_desc' => 'Determina daca toate link-urile folosite in intrari vor deschide link-uri intr-o fereastra noua de browser.',

	'mod_rewrite' => 'Foloseste Mod_rewrite',
	'mod_rewrite_desc' => 'Daca folosesti optiunea din Apache Mod_rewrite, Pivot va face url-urile de genul www.mysite.com/archive/2003/05/30/nice_weather, in loc de www.mysite.com/pivot/entry.php?id=134. Nu toate serverele suporta aceasta, te rog sa citesti sectiunea din manual despre aceasta.',
	'mod_rewrite_1' => 'Da, de felul /arhiva/2005/04/28/titlul_intrarii',
	'mod_rewrite_2' => 'Da, de felul /arhiva/2005-04-28/titlul_intrarii',
	'mod_rewrite_3' => 'Da, de felul /intrare/1234',
	'mod_rewrite_4' => 'Da, de felul /intrare/1234/titlul_intrarii',

	'search_index' => 'Auto-actualizeaza Indexul de Cautare',
	'search_index_desc' => 'Aceasta va determina daca fisierele de Indexare a Cautarii vor fi actualizate de fiecare data cand postezi o intrare noua, sau cand schimbi una existenta.',

	'default_allow_comments' => 'Permite comentarii implicit',
	'default_allow_comments_desc' => 'Determina daca intrarile sunt setate sa permita comentarii sau nu.',
	'moderate_comments' => 'Modereaza comentarii',
	'moderate_comments_desc' => 'Determina daca treabuie sa fie aprobate comentariile inainte ca ele sa fie vizibile pe site.',

	'maxhrefs' => 'Numar de link-uri',
	'maxhrefs_desc' => 'Numarul maxim de hyperlink-uri permise in comentarii. Este folositoare pentru a te debarasa de acei spammeri de comentarii pisalogi. Pune la 0 pentru link-uri nelimitate.',
	'rebuild_threshold' => 'Recladeste Prag',
	'rebuild_threshold_desc' => 'Numarul de secunde pe care le ia recladirea, inainte ca Pivot sa improspateze pagina. Implicit este 28, dar daca ai probleme cu recladirea, incearca sa scazi numaru acesta la 10.',
	'default_introduction' => 'Introducerea / Trupul Implicit',
	'default_introduction_desc' => 'Aceasta va determina valorile implicite pentru Introducere si Trup cand un autor scrie o noua intrare. In mod normal acesta va fi un paragraf gol, care are sens in mod semantic.',

	'upload_autothumb'	=> 'Amprente Automatice',
	'upload_thumb_width' => 'Latime Amprenta - width',
	'upload_thumb_height' => 'Inaltime Amprenta - height',
	'upload_thumb_remote' => 'Script de cropping izolat',
	'upload_thumb_remote_desc' => 'Daca serverul tau nu are librariile necesare instalate pentru a indeplinii cropping-ul imaginii, poti folosi un script de cropping izolat.',

	'extensions_header' => 'Directorul de Extensii',
	'extensions_desc'   => 'Directorul de \'extensii\' este locul de stocare al adaugirilor tale la Pivot.
		Aceasta face actualizarea mult mai usoara. Vezi Documentatia pentru mai multe informatii.',
	'extensions_path'   => 'Calea directorului de Extensii',

	'tag_options' => 'Optiuni pentru Etichete',
	'tag_cache' => 'Durata de Cache',
	'tag_cache_desc' => 'Durata (in minute) in care este cached pagina de rezultat cu etichete.',
	'tag_flickr' => 'Arata Imagini Flickr',
	'tag_flickr_desc' => 'Daca e setat la \'da\', Pivot va produce imagini cu aceastra eticheta de la Flickr.com.',
	'tag_flickr_amount' => 'Numar de imagini',
	'tag_flickr_amount_desc' => 'Cantitatea de imagini de produs de pe Flickr.',
	'tag_fetcher' => 'Arata feed-uri',
	'tag_fetcher_desc' => 'Daca e setat la \'da\', Pivot va arata butoanele pentru a produce feed-uri cu aceasta eticheta din surse variate.',
	'tag_fetcher_amount' => 'Numarul de obiecte',
	'tag_fetcher_amount_desc' => 'Numarul de obiecte de produs din fiecare sursa',
	'tag_min_font' => 'Marimea Minima',
	'tag_max_font' => 'Marimea Maxima',
	'tag_max_font_desc' => 'Marimea (in pixeli) folosita pentru a afisa norul de etichete. Etichetele care sunt folosite mai des sunt aratate intr-un font mai mare.',
	
);


//		Weblog Config	\\
$lang['weblog_config'] = array (
	'edit_weblog' => 'Editare Weblog',
	'edit_blog' => 'Editare Weblog-uri',
	'new_weblog' => 'Weblog Nou',
	'new_weblog_desc' => 'Adauga un Weblog nou',
	'del_weblog' => 'Sterge Weblog',
	'del_this_weblog' => 'Sterge acest weblog.',
	'create_new' => 'Creaza un Weblog Nou',
	'subw_heading' => 'Pentru fiecare dintre sub-weblog-urile care s-au gasit in sabloane, poti configura ce sablon sa foloseasca ele, precum si categoriile in care sa se publice',
	'create' => 'Terminat',

	'create_1' => 'Creaza / Editeaza Weblog, pasul 1 din 3',
	'create_2' => 'Creaza / Editeaza Weblog, pasul 2 din 3',
	'create_3' => 'Creaza / Editeaza Weblog, pasul 3 din 3',

	'name' => 'Nume Weblog',
	'payoff' => 'Subtitlu',
	'payoff_desc' => 'Acesta poate fi o scurta descriere a weblog-ului tau',
	'url' => 'URL catre Weblog',
	'url_desc' => 'Pivot va determina url-ul weblog-ului tau daca lasi acest spatiu liber. Daca folosesti weblog-ul ca parte a unui cadru, sau ca o includere de partea serverului, poti folosi aceasta pentru a o suprascrie.',
	'index_name' => 'Pagina Principala (Index)',
	'index_name_desc' => 'Numele fisierului de index. In mod normal acesta e ceva de genul \'index.html\' sau \'index.php\'.',

	'ssi_prefix' => 'Prefix SSI',
	'ssi_prefix_desc' => 'Daca weblog-ul tau foloseste SSI (ceea ce nu este recomandat), poti folosi acesta pentru a pune prefix la numele fisierelor din Pivot cu cel folosit pentru SSI. ex. \'index.shtml?p=\'. Ar trebui sa lasi aceasta necompletata, doar daca stii ceea ce faci.',

	'front_path' => 'Calea Paginii Principale',
	'front_path_desc' => 'Calea relativa sau absoluta catre directorul unde Pivot va crea pagina principala catre acest blog.',
	'file_format' => 'Nume Fisier',
	'entry_heading' => 'Setari Intrare',
	'entry_path' => 'Cale Intrari',
	'entry_path_desc' => 'Calea relativa sau absoluta catre directorul unde Pivot va crea paginile de intrari singure (daca nu alegi sa folosesti \'intrari live\')',
	'live_comments' => 'Intrari Live',
	'live_comments_desc' => 'Daca folosesti \'Intrari Live\', Pivot nu va avea nevoie sa genereze fisiere pentru fiecare intrare singura. Aceasta este setarea preferata.',
	'readmore' => 'Textul \'Citeste Mai Departe\'',
	'readmore_desc' => 'Textul care este folosit pentru a indica ca exista mai mult text in intrare decat este afisat pe pagina principala. Daca lasi aceasta necompletat, Pivot va folosi cel implicit asa cum este din setarile de limba',

	'arc_heading' => 'Setari Arhiva',
	'arc_index' => 'Fisierul Index',
	'arc_path' => 'Calea Arhivei',
	'archive_amount' => 'Cantitatea Arhivei',
	'archive_unit' => 'Tipul Arhivei',
	'archive_format' => 'Formatul Arhivei',
	'archive_none' => 'Nici o Arhiva',
	'archive_weekly' => 'Arhive Saptamanale',
	'archive_monthly' => 'Arhive Lunare',
	'archive_yearly' => 'Arhive Anuale',

	'archive_link' => 'Link Arhiva',
	'archive_linkfile' => 'Formatul Listei Arhivei',
	'archive_order' => 'Ordinea Arhivei',
	'archive_ascending' => 'In urcare (cele mai vechi intai)',
	'archive_descending' => 'In coborare (cele mai noi intai)',

	'templates_heading' => 'Sabloane',
	'frontpage_template' => 'Sablon Pagina Principala',
	'frontpage_template_desc' => 'Sablonul care determina afisajul paginii de index a acestui weblog.',
	'archivepage_template' => 'Sablonul Paginii de Arhiva',
	'archivepage_template_desc' => 'Sablonul care determina afisajul arhivelor tale. Aceasa poate fi aceiasi ca \'Sablonul Paginii Principale\'.',
	'entrypage_template' => 'Sablonul Paginii cu Intrarea',
	'entrypage_template_desc' => 'Sablonul care determina afisajul intrarilor singure.',
	'extrapage_template' => 'Sablon Extra',
	'extrapage_template_desc' => 'Sablonul care defineste afisajul arhivei si a paginii search.php.',

	'shortentry_template' => 'Sablonul Intrari Scurte',
	'shortentry_template_desc' => 'Sablonul care determina afisajul intrarilor singure, asa cum sunt aratate ele in cadrul weblog-ului sau a arhivelor.',
	'num_entries' => 'Numar de Intrari',
	'num_entries_desc' => 'Numarul de intrari din acest sub-weblog care va fi aratat pe pagina principala.',
	'offset' => 'Compensare',
	'offset_desc' => 'Daca Compensarea este setata la un numar, cantitatea de intrari va fi sarita cand se genereaza pagina. Poti folosi aceasta pentru a face o lista cu \'Intrarile Anterioare\', de exemplu.',
	'comments' => 'Permite Comentarii?',
	'comments_desc' => 'Determina daca userii vor putea sa lase comentarii la intrarile din acest sub-weblog.',

	'publish_cats' => 'Publica aceste categorii',

	'setup_rss_head' => 'Configuratie RSS si Atom',
	'rss_use' => 'Genereaza Feed-uri',
	'rss_use_desc' => 'Aceasta determina daca sau nu pivot va genera automat un feed RSS si Atom pentru acest weblog.',
	'rss_filename' => 'Numele fisierului RSS',
	'atom_filename' => 'Numele fisierului Atom',
	'rss_path' => 'Calea Feed-ului',
	'rss_path_desc' => 'Calea relativa sau absoluta catre directorul unde Pivot va crea fisierele de Feed.',
//	'rss_size' => 'Lungimea Intrarii de Feed',	/* DEZAPROBAT */
//	'rss_size_desc' => 'Lungimea (in caractere) a unei intrari din fisierele de Feed', /* DEZAPROBAT */
	'rss_full' => 'Creaza Feed-uri complete',
	'rss_full_desc' => 'Determina daca Pivot creaza feed-uri Atom si RSS complete. Daca este setat la \'nu\' Pivot va crea feed-uri care contin doar descrierea scurta, prin urmare facand feed-urile tale mai putin folositoare.',
	'rss_link' => 'Link-ul Feed-ului',
	'rss_link_desc' => 'Link-ul de trimis cu Feed-ul, care sa indice spre pagina principala. Daca lasi aceasta necompletata, Pivot va trimite ca link indexul weblog-ului.',
	'rss_img' => 'Imagine Feed',
	'rss_img_desc' => 'Poti specifica o imagine de trimis cu Feed-ul. Anumite cititoare de feed-uri vor afisa aceasta imagine impreuna cu feed-ul tau. Lasa liber sau specifica un URL complet.',

	'lastcomm_head' => 'Setari pentru Ultimele Comentarii',
	'lastcomm_amount' => 'Arata cat de multe',
	'lastcomm_length' => 'Taie in lungime',
	'lastcomm_format' => 'Formatul',
	'lastcomm_format_desc' => 'Aceste setari determina aparitia \'ultimelor comentarii\' pe pagina principala a weblog-ului.',
	'lastcomm_nofollow' => 'Foloseste \'Nofollow\'',
	'lastcomm_nofollow_desc' => 'Pentru a combate spamul de referinta ai putea alege sa adaugi un atribut rel="nofollow" la toate link-urile din comentarii si referinte, aceasta nu va ajuta pe spammer sa obtina un rang de pagina mai bun in Google.',

	'lastref_head' => 'Setari pentru Ultimele Referinte',
	'lastref_amount' => 'Arata cat de multe',
	'lastref_length' => 'Taie in lungime',
	'lastref_format' => 'Formatul',
	'lastref_format_desc' => 'Aceste setari determina aparitia \'ultimelor referinte\' de pe pagina principala a weblog-ului.',
	'lastref_graphic' => 'Foloseste grafice',
	'lastref_graphic_desc' => 'Aceasta determina daca ultimele referinte folosesc iconite mici pentru cele mai comune motoare de cautare prin care ar putea sosii vizitatorii.',
	'lastref_redirect' => 'Redirectionare Referinte',
	'lastref_redirect_desc' => 'Pentru a combate spamul de referinta ai putea alege sa se redirectioneze link-urile de iesire catre cei ce fac referinta, aceasta nu va ajuta pe spammer sa obtina un rang de pagina mai bun in Google.',

	'various_head' => 'Setari Variate',
	'emoticons' => 'Foloseste Iconite de Emotie',
	'emoticons_desc' => 'Determina daca iconitele de emotie de genul :-) vor fi transformate in echivalentul lor grafic.',
	'encode_email_addresses' => 'Encodare Adrese de Email',
	'encode_email_addresses_desc' => 'Determina daca adresele de email vor fi encodate in javascript, ca o protectie pentru recoltatorii de spam.',
	'target_blank' => 'Tinta Goala',
	'xhtml_workaround' => 'Manevrare XHTML',
	'target_blank_desc' => 'Daca este setat la \'Da\', toate link-urile introduce in intrarile tale vor fi deschise intro fereastra noua de browser. Daca este setat la \'Manevrare XHTML\', toate link-urile vor avea un atribut rel="external", care nu va rupe XHTML-ul bine format',
	'search_format' => "Formatul Rezultatelor de Cautare",
	'search_format_desc' => "Aceasta specifica formatarea rezultatelor de cautare pe pagina de cautare. Aceasta contine cinci parti, despartite de o linie care contine '----': Top, sumar, inceputul listei, toate lucrurile din lista si finalul listei. Poti gasi detalii crude in cadrul <a href='http://pivotlog.net/docs/doku.php?id=working_with_search_results'>documentatiei</a>.",

	'date_head' => 'Setari afisare Data',
	'full_date' => 'Formatul Datei complete',
	'full_date_desc' => 'Aceasta determina formatul pentru timpul si data completa. Cel mai adesea este folosit in partea de sus a paginii cu o singura intrare',
	'entry_date' => 'Data Intrarii',
	'diff_date' => 'Data Diferita',
	'diff_date_desc' => '\'Data Dif\' este cel mai comun folosita in conjunctie cu \'Data Intrarii\'. Data Intrarii este afisata pe fiecare intrare din blog-ul tau, in timp ce Data Dif este afisat doar daca data difera de intrarea anterioara.',
	'language' => 'Limba',
	'language_desc' => 'Limba determina in ce limba sa fie afisate datele si numerele, si determina totodata caracterul de encoding al paginii (cum ar fi iso-8859-1 sau koi8-r, de exemplu).',

	'comment_head' => 'Setari Comentarii',
	'comment_sendmail' => 'Trimite Email?',
	'comment_sendmail_desc' => 'Dupa ce s-a pus un comentariu, se poate trimite email la cei care administreaza acest weblog.',
	'comment_emailto' => 'Email catre',
	'comment_emailto_desc' => 'Specifica adresa(adresele) de email catre cine se va trimite, separa adresele multiple cu o virgula.',
	'comment_texttolinks' => 'Text la link-uri',
	'comment_texttolinks_desc' => 'Defineste daca url-urile introduse si adresele de email vor fi facute clickable.',
	'comment_wrap' => 'Despartire comentarii',
	'comment_wrap_desc' => 'Pentru a preveni linii lungi de caractere din a strica afisajul, textul va fi despartit dupa un numar specificat de caractere.',
	'comments_text_0' => 'Eticheta pentru \'nici un comentariu\'',
	'comments_text_1' => 'Eticheta pentru \'un comentariu\'',
	'comments_text_2' => 'Eticheta pentru \'X comentarii\'',
	'comments_text_2_desc' => 'Textul care este folosit pentru a indica numarul de comentarii. Daca lasi aceasta liber, Pivot va folosi cele implicite asa cum sunt definite de setarile de limbaj',

	'comment_pop' => 'Popup Comentarii?',
	'comment_pop_desc' => 'Determina daca pagina de comentarii (sau \'intrarea singura\') va fi aratata intr-o fereastra popup, sau in fereastra originala a browserului.',
	'comment_width' => 'Latimea Popup',
	'comment_height' => 'Inaltimea Popup',
	'comment_height_desc' => 'Specifica lagimea si inaltimea (in pixeli) a popup-ului comentariilor.',

	'comment_format' => "Formatul Comentariilor",
	'comment_format_desc' => "Aceasta specifica formatul comentarilor pe paginile de intrari.",

	'comment_reply' => "Formatul la 'raspunde ..'",
	'comment_reply_desc' => "Aceasta determina formatul link-ului pe care il pot folosi vizitatorii la un comentariu specific.",
	'comment_forward' => "Formatul la 'replica de ..'",
	'comment_forward_desc' => "Aceasta determina formatul textului care este afisat cand se raspunde la un comentariu printr-un alt comentariu.",
	'comment_backward' => "Formatul la 'replica la ..'",
	'comment_backward_desc' => "Aceasta determina formatul textului care este afisat cand comentariul este o replica la un alt comentariu.",

	'comment_textile' => 'Permite Textile',
	'comment_textile_desc' => 'Daca este setat la \'Da\', vizitatorilor li se va permite sa foloseasca <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> in comentariile lor.',
	'save_comment' => 'Stocheaza Comentariu',
	'comment_gravatardefault' => 'Gravatar Implicit',
	'comment_gravatardefault_desc' => 'URL-ul catre imaginea Gravatar implicita. Incepe cu http://',
	'comment_gravatarhtml' => 'HTML Gravatar',
	'comment_gravatarhtml_desc' => 'HTML-ul de inserat pentru un gravatar. %img% va fi inlocuit de url-ul imaginii.',
	'comment_gravatarsize' => 'Marime Gravatar',
	'comment_gravatarsize_desc' => 'Marimea (in pixeli) a gravatarului. Implicit este 48.',

    'trackback_head' => 'Setari Depistare',
	'trackback_sendmail' => 'Trimite Email?',
	'trackback_sendmail_desc' => 'Dupa ce s-a plasat o depistare, se poate trimite email la administratorii acestui weblog.',
	'trackback_emailto' => 'Email catre',
	'trackback_emailto_desc' => 'Specifica adresa (adresele) de email la care sa se trimita. Separa adresele multiple cu o virgula.',
	'trackbacks_text_0' => 'Eticheta pentru \'nici o depistare\'',
	'trackbacks_text_1' => 'Eticheta pentru \'o depistare\'',
	'trackbacks_text_2' => 'Eticheta pentru \'X depistari\'',
	'trackbacks_text_2_desc' => 'Textul care este folosit pentru a indica cate depistari sunt. Daca lasi aceasta necompletata, Pivot va folosi implicitul asa cum este definit de setarile de limba',
	'trackback_pop' => 'Popup Depistari?',
	'trackback_pop_desc' => 'Determina daca pagina de depistari (sau \'intrarea singura\') va fi aratata intr-o fereasatra popup, sau in fereastra originala a browserului.',
	'trackback_width' => 'Latime Popup',
	'trackback_height' => 'Inaltime of Popup',
	'trackback_height_desc' => 'Specifica latimea si inaltimea (in pixeli) a popup-ului depistarilor.',
	'trackback_format' => "Formatul Depistarilor",
	'trackback_format_desc' => "Aceasta specifica formatul depistarilor pe paginile de intrari.",
	'trackback_link_format' => "Formatul Link-ului de Depistare",
        'save_trackback' => 'Stocheaza Depistare',

	'saved_create' => 'Noul weblog a fost creat.',
	'saved_update' => 'Weblog-ul a fost actualizat.',
	'deleted' => 'Weblog-ul a fost sters.',
	'confirm_delete' => 'Esti pe cale sa stergi weblog-ul %1. Esti sigur?',

	'blogroll_heading' => 'Setari Blogroll',
	'blogroll_id' => 'Blogrolling ID #',
	'blogroll_id_desc' => 'Poti include optional un <a href="http://www.blogrolling.com" target="_blank">blogrolling.com</a> blogroll in weblog-ul tau. Blogrolling Este un serviciu excelent de mentinere a unei liste de link-uri, care arata cat de recent au fost ele actualizate. Daca nu doresti aceasta, sari peste acest camp. Altfel: Cand esti autentificat in blogrolling.com, mergi la \'get code\', acolo vei gasi link-urile care contin ID-ul tau de blogroll. Ar trebui sa arate cam asa: 2ef8b42161020d87223d42ae18191f6d',
	'blogroll_fg' => 'Culoare Tex',
	'blogroll_bg' => 'Culoare Fundal',
	'blogroll_line1' => 'Culoare Linie 1',
	'blogroll_line2' => 'Culoare Linie 2',
	'blogroll_c1' => 'Culoare 1',
	'blogroll_c2' => 'Culoare 2',
	'blogroll_c3' => 'Culoare 3',
	'blogroll_c4' => 'Culoare 4',
	'blogroll_c4_desc' => 'Aceste culori determina felul cum va arata blogroll-ul tau. Culoare 1 la culoarea 4 da o indicatie vizuala fata de cat de recent este actualizat un link.',
);


$lang['upload'] = array (
	//		File Upload		\\
	'preview' => 'Previzualizare Lista Completa',
	'thumbs' => 'Previzualizare Amprenta',
	'create_thumb' => '(Creaza Amprenta)',
	'title' => 'Fisiere',
	'thisfile' => 'Incarca un fisier Nou:',
	'button' => 'Incarca',
	'filename' => 'Nume Fisier',
	'thumbnail' => 'Amprenta',
	'date' => 'Data',
	'filesize' => 'Marime Fisier',
	'dimensions' => 'Latime x Inaltime',
	'delete_title' => 'Sterge Imagine',
	'areyousure' => 'Esti sigur ca vrei sa stergi fisierul %s?',
	'picheader' => 'Stergi aceasta imagine?',
	'create' => 'creaza',
	'edit' => 'editeaza',

	'insert_image' => 'Insereaza o Imagine',
	'insert_image_desc' => 'Pentru a insera o imagine, ar trebui sa incarci o imagine, sau sa selectezi o imagine incarcata anterior.',
	'insert_image_popup' => 'Insereaza un Popup de Imagine',
	'insert_image_popup_desc' => 'Pentru a face un popup la o imagine, ar trebui sa incarci o imagine, sau sa selectezi o imagine incarcata anterior. Apoi selecteaza un text sau o amprenta care sa initieze popup-ul.',
	'choose_upload' => 'incarca',
	'choose_select' => 'sau selecteaza',
	'imagename' => 'Nume imagine',
	'alt_text' => 'Text Alternativ',
	'align' => 'Aliniere',
	'border' => 'Chenar',
	'pixels' => 'pixeli',
	'uploaded_as' => 'Fisierul sau a fost incarcat drept \'%s\'.',
	'not_uploaded' => 'Fisierul tau nu a fost incarcat, si au avut loc urmatoarele erori:',
	'center' => 'Centru (implicit)',
	'left' => 'Stanga',
	'right' => 'Dreapta',
	'inline' => 'In linie',
	'notice_upload_first' => 'Ar trebui sa selectezi mai intai sau sa incarci o imagine',
	'select_image' => 'Selecteaza Imagine',
	'select_file' => 'Selecteaza Fisier',

	'for_popup' => 'Pentru popup',
	'use_thumbnail' => 'Foloseste Amprenta',
	'edit_thumbnail' => 'editeaza amprenta',
	'use_text' => 'Foloseste text',
	'insert_download' => 'Insereaza un Download',
	'insert_download_desc' => 'Pentru a face un fisier sa se poata descarca, ar trebui sa incarci un fisier, sau sa selectezi un fisier incarcat anterior. Apoi selecteaza daca doresti o iconita sau un text sau o amprenta care sa initieze download-ul.',
	'use_icon' => 'Foloseste iconita',
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => 'Insereaza un link',
	'insert_link_desc' => 'Insereaza un link, prin introducerea unui url in campul de mai jos. Vizitatorii la site-ul tau vor vedea titlul cand vor trece cu mouse-ul peste link.',
	'url' => 'URL',
	'title' => 'Titlu',
	'text' => 'Text',
);


//		Categories		\\
$lang['category'] = array (
	'edit_who' => 'Editeaza cine poate posta la categoria \'%s\'',
	'name' => 'Nume',
	'users' => 'Useri',
	'make_new' => 'Creaza o Categorie Noua',
	'create' => 'Creaza Categorie',
	'canpost' => 'Selecteaza Userii la care vrei sa le dai permisiune sa posteze in aceasta categorie',
	'same_name' => 'O categorie cu acest nume exista deja',
	'need_name' => 'Aceasta categorie are nevoie de un nume',

	'allowed' => 'Permis',
	'allow' => 'Permite',
	'denied' => 'Negat',
	'deny' => 'Neaga',
	'edit' => 'Editeaza Categorie',

	'delete' => 'Sterge Categorie',
	'delete_desc' => 'Selecteaza \'da\', daca doresti sa stergi aceasta categorie',

	'delete_message' => 'In aceasta constructie de Pivot, doar numele categoriei va fi sters. In constructiile de mai apoi, vei putea sa alegi ceea ce sa faci cu intrarile folosind aceasta categorie.',
	'search_index_newctitle'   => 'Indexeaza aceasta categorie',
	'search_index_newcdesc'    => 'Seteaza la \'Nu\' doar daca nu vrei ca vizitatorii site-ului tau sa nu caute in aceasta categorie.',
	'search_index_editcheader' => 'Indexare Categorie',

	'order' => 'Ordine de Sortare',
	'order_desc' => 'Categoriile cu o sortare de ordine mai joasa vor aparea mai sus in lista. Daca vrei sa mentii toate numerele la fel, ele vor fi sortate alfabetic',
	'public' => 'Categorie Publica',
	'public_desc' => 'Daca este setat la \'Nu\', aceasta categorie va fi vizibila doar vizitatorilor inregistrati. (se aplica numai la paginile live)',
	'hidden' => 'Categorie Ascunsa',
	'hidden_desc' => 'Daca este setat la \'Da\', aceasta categorie va fi ascunsa in listele de arhiva. (se aplica numai la paginile live)',

);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "Postare Intrare",
	'preview_entry' => "Previzualizare Intrare",
	'edit_entry' => "Editare Intrare",
	'edit_entry_desc' => "Editeaza aceasta Intrare",

	'first' => 'prima',
	'last' => 'ultima',
	'next' => 'urmatoarea',
	'previous' => 'anterioara',

	'jumptopage' => 'sari la pagina (%num%)',
	'filteron' => 'filtrare la (%name%)',
	'filteroff' => 'filtrare dezactivata',
	'title' => 'Titlu',
	'subtitle' => 'Subtitlu',
	'introduction' => 'Introducere',
	'body' => 'Trup',
	'publish_on' => 'Publica in',
	'status' => 'Status',
	'post_status' => 'Status Postare',
	'category' => 'Categorie',
	'select_multi_cats' => '(Ctrl-click pentru a selecta categorii multiple)',
	'last_edited' => "Ultima data editat pe",
	'created_on' => "Creat in",
	'date' => 'Data',
	'author' => 'Autor',
	'code' => 'Cod',
	'comm' => '# Com',
	'track' => '# Track',
	'name' => 'Nume',
	'allow_comments' => 'Permite Comentarii',

	'delete_entry' => "Sterge Intrare",
	'delete_entry_desc' => "Sterge aeasta Intrare si Comentariile corespunzatoare ",
	'delete_one_confirm' => "Esti sigur ca vrei sa stergi aceasta intrare?",
	'delete_multiple_confirm' => "Esti sigur ca vrei sa stergi aceste intrari?",

	'convert_lb' => 'Converteste Spatiile dintre Linii',
	'always_off' => '(Aceasta este intotdeauna dezactivata, cand este in modul Wysiwyg)',
	'be_careful' => '(Fi atent cu asta!)',
	'edit_comments' => 'Editeaza Comentarii',
	'edit_comments_desc' => 'Editeaza comentariile care au fost postate la aceasta intrare',
	'edit_comment' => 'Editare Comentariu',
	'delete_comment' => 'Stege Comentariu',
	'report_comment' => 'Raporteaza Comentariu',
	'edit_trackback' => 'Editare Depistare',
	'edit_trackback_desc' => 'Editeaza depistarile care au fost postate la aceasta intrare',
	'delete_trackback' => 'Stege Depistare',
	'report_trackback' => 'Raporteaza Depistare',
	'block_single' => 'Blocheaza IP %s',
	'block_range' => 'Blocheaza rangul de IP %s',
	'unblock_single' => 'Deblocheaza IP %s',
	'unblock_range' => 'Deblocheaza rangul de IP %s',
	'trackback' => 'Ping Depistare',
	'trackback_desc' => 'Trimite Ping-uri de depistare la urmatoarele url-uri. Pentru a trimite la url-uri multiple, pune pe fiecare pe o linie separata.',
	'keywords' => 'Cuvinte cheie',
	'keywords_desc' => 'Foloseste aceasta pentru a seta anumite cuvinte cheie care pot fi folosite la gasirea acestei intrari, sau sa setezi url-ul pentru aceasta intrare.',
	'vialink' => "Via link",
	'viatitle' => "Via titlu",
	'via_desc' => 'Foloseste aceasta pentru a seta un link la sura acestei intrari.',
	'entry_catnopost' => 'Nu ai permisiune sa postezi in categoria:\'%s\'.',
	'entry_saved_ok' => 'Intrarea ta \'%s\' a fost salvata cu succes.',
	'entry_ping_sent' => 'Un ping de depistare a fost trimis la \'%s\'.',
	'encoding_warning' =>'Scrii aceasta intrare in %s, in timp ce cel putin unul din weblog-uurile tale foloseste o alta encodare. Pentru a preveni problemele cu aceasta, ar trebui sa te asiguri ca toti userii si weblog-urile folosesc aceiasi encodare.',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => 'Selecteaza Toate',
	'c_none' => 'Deselecteaza Toate',
	'choose' => '- alege o optiune -',
	'publish' => 'Setare Status-ul la \'publica\'',
	'hold' => 'Setare Status-ul la \'retine\'',
	'delete' => 'Stege-le',
	'generate' => 'Publica si genereaza',

	'with_checked_entries' => "Cu intrarile selectate, aplica:",
	'with_checked_files' => "Cu fisierele selectate, aplica:",
	'with_checked_templates' => 'Cu sabloanele selectate, aplica:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => 'nu pot deschide dir, verifica drepturile tale.',
	'path_read' => 'nu pot citi dir, verifica drepturile tale.',
	'path_write' => 'nu pot scrie dir, verifica drepturile tale.',

	'file_open' => 'nu pot deschide fisier, verifica drepturile tale.',
	'file_read' => 'nu pot citi fisier, verifica drepturile tale.',
	'file_write' => 'nu pot scrie fisier, verifica drepturile tale.',

	'reg_required' => 'Se Impune Inregistrarea',
	'entry_404' => 'Intrarea Nu Exista!',  
	'entry_404_desc' => "Acea intrare nu exista, sau nu este publicata inca.",  
	'category_404' => 'Categoria Nu Exista',  
	'category_404_desc' => "Acea categorie nu exista, sau nu este publicata de nici un weblog.",  
);


//		Notices			\\
$lang['notice'] = array (
	'comment_saved' => "Comentariul a fost salvat.",
	'comment_deleted' => "Comentariul a fost sters.",
	'comment_none' => "Intrarea nu are nici un comentariu.",
	'trackback_saved' => "Depistarea a fost salvata.",
	'trackback_deleted' => "Depistarea a fost stearsa.",
	'trackback_none' => "Aceasta intrare nu are nici o depistare.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => 'Voteaza \'%val%\' din aceasta intrare',
	'good' => 'Bun',
	'bad' => 'Rau',
	'already' => 'Ai votat deja pentru aceasta intrare sau sondaj',
	'register' => 'Votul tau pentru \'%val%\' a fost inregistrat',
);


$lang['comment'] = array (
	'register' => 'Comentariul tau a fost stocat.',
	'preview' => 'Previzualizezi comentariul tau. Asigura-te ca apesi pe \'Postare Comentariu\' pentru a-l stoca.',
	'duplicate' => 'Comentariul tau nu a fost stocat, pentru ca se pare ca este un duplicat al unei intrari anterioare',
	'no_name' => 'Ar trebui sa scrii un nume (sau ceva asemanator) in campul \'nume\'. Asigura-te ca apesi pe \'Postare Comentariu\' pentru a-l stoca permanent.',
	'no_comment' => 'Ar trebui sa scrii ceva in campul \'comentariu\'. Asigura-te ca apesi pe \'Postare Comentariu\' pentru a-l stoca permanent.',
	'too_many_hrefs' => 'Numarul maxim de hyperlink-uri a fost depasit. Stop spamming.',
	'email_subject_comm' => '[Comentariu]',
	'email_subject_notify' => '[Notificare]',
	'email_posted_comm' => "'%s' postat urmatorul comentariu",
	'email_comm_on' => "Acesta este un comentariu la intrarea '%s'",
	'email_allow_comm' => "Permite acest comentariu",
	'email_delete_comm' => "Sterge acest comentariu",
	'email_view_comm' => "Vizualizeaza acest comentariu",
	'email_edit_comm' => "Editeaza acest comentariu",
	'email_posted_entry' => "'%s' a postat urmatoare intrare",
	'email_view_entry' => "Vizualizeaza aceasta intrare",
	'email_view_fullentry' => "Vizualizeaza intrarea completa",
	'email_view_settings' => "Vizualizeaza setarile tale",
	'email_sent_to' => "Acest email a fost trimis la",
	'email_notified' => "Notificarile au fost trimise la",
	'email_posted_tb' => "'%s' a postat urmatoarea depistare",
	'email_tb_on' => "Aceasta este o depistare la intrarea '%s'",
	'email_edit_tb' => "Editeaza aceasta depistare",
	'email_block_ip' => "Blocheaza acest IP",
	'notifications' => "notificari",
	'oneclickdelete' => "Sterge cu un singur click.",
	'oneclickreport' => "Raporteaza si sterge cu un singur click.",
	'moderated' => "Moderat",
	'moderate_queue_on' => "Moderarea de comentarii este activata pe acest site. Aceasta inseamna ca nu va fi vizibil comentariul tau pe acest site pana ce nu va fi aprobat de un editor.",
	'moderate_stored' => "Comentariul tau a fost stocat. Datorita moderarii comentariului care este activat, acesta asteapta aprobarea unui editor.",
	'moderate_waiting' => "Unu sau mai multe comentarii asteapta sa fie aprobate de catre un editor."
);


$lang['comments_text'] = array (
	'0' => "Nici un comentariu",
	'1' => "%num% comentariu",
	'2' => "%num% comentari",
);

$lang['trackbacks_text'] = array (
	'0' => "Nici o depistare",
	'1' => "%num% depistare",
	'2' => "%num% depistari",
);

$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "Arhiva",
	'next_archive' => "Arhiva Urmatoare",
	'previous_archive' => "Arhiva Anterioara",
	'last_comments' => "Ultimele Comentarii",
	'last_referrers' => "Ultimele Referinte",
	'calendar' => "Calendar",
	'links' => "Link-uri",
	'xml_feed' => "XML: RSS Feed",
	'atom_feed' => "XML: Atom Feed",
	'powered_by' => "Powered by",
	'blog_name' => "Nume Weblog",
	'title' => "Titlu",
	'excerpt' => "Extras",
	'name' => "Nume",
	'email' => "Email",
	'url' => "URL",
	'date' => "Data",
	'comment' => "Comentariu",
	'ip' => "adresa IP",
	'yes' => "Da",
	'no' => "Nu",
	'emoticons' => "Iconite de Emotie",
	'emoticons_reference' => "Deschide Referinta Iconitelor de Emotie",
	'textile' => "Textile",
	'textile_reference' => "Deschide Referinta Textile",
	'post_comment' => "Postare Comentariu",
	'preview_comment' => "Previzualizare Comentariu",
	'remember_info' => "Remember personal info?",
	'notify' => "Notificare",
	'notify_yes' => "Da, trimite-mi email cand cineva raspunde.",
	'register' => "Inregistreaza numele tau de user / Autentificare",
	'registered' => "Inregistrat",
	'disclaimer' => "<b>Anunt:</b> Toate etichetele html cu exceptia &lt;b&gt; si &lt;i&gt; vor fi inlaturate din comentariul tau. Poti face link-uri prin simpla tastare a url-ului sau a adresei de email.",
	'search_title' => "Rezultate Cautare",
	'search' => "Cauta!",
	'nomatches' => "Nu s-a gasit nimic pentru '%name%'. Incearca altceva.",
	'matches' => "Potriviri pentru '%name%':",
	'about' => "Despre",
	'stuff' => "Stuff",
	'linkdump' => "Linkuri blog",
	'discreet' => "Ascunde email",
	'discreet_yes' => "Da, ascunde adresa mea de email.",
    'moderated' => "Moderat",
    'waiting_moderation' => "Acest comentariu nu este inca moderat.",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Editare Campuri User',
	'edit' => 'Editare',
	'create' => 'Creaza',

	'dispname' => 'Nume Afisat',
	'intname' => 'Nume Intern',
	'intname_desc' => 'Numele Intern este numele acestui lucru cum va apare atunci cand ii spui lui pivot sa il afiseze intr-ul sablon.',
	'size' => 'Marime',
	'rows' => 'Randuri',
	'cols' => 'Coloane',
	'maxlen' => 'Lungime Maxima',
	'minlevel' => 'Nivel Minim User',
	'filter' => 'Filtrare dupa',
	'filter_desc' => 'Prin filtrarea acestui lucru, limiteyi tipul de input care poate fi folosit in el',
	'no_filter' => 'Nimic',
	'del_title' => 'Confirma Stergere',
	'del_desc' => 'Stergerea Campului de User (<b>%s</b>) va distruge totodata toate datele pe care le-au stocat userii din el, si vor face orice instanta a acestuia din sablon sa apara goala.',

	'already' => 'Acest nume este deja folosit',
	'int' => 'Numele Intern trebuie sa fie mai lung de 3 caractere',
	'short_disp' => 'Numele Afisat trebuie sa fie mai lung de 3 caractere',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => 'Insemnari',
	'bm_add' => 'Adauga Insemnare.',
	'bm_withlink' => 'Pivot &raquo; Nou',
	'bm_withlink_desc' => 'Aceasta Insemnare deschide o fereastra noua cu o Noua Intrare, care contine un link la pagina de unde s-a deschis.',

	'bm_nolink' => 'Pivot &raquo; Nou',
	'bm_nolink_desc' => 'Aceasta Insemnare deschide o fereastra cu o Intrare Noua goala.',

	'bookmarklets_info' => 'Poti folosi Insemnarile pentru a scrie rapid Intrari Noi in Pivot. Pentru a adauga o Insemanre la browser-ul tau, foloseste una din urmatoarele optiuni: (textul exact variaza, depinzand de care browser folosesti)',
	'bookmarklets_info_1' => 'Apasa si trage insemnarea catre bara \'Links\' din butonul \'Bookmarks\' a browser-ului tau.',
	'bookmarklets_info_2' => 'Fa click de dreapta pe insemnare si selecteaza \'Add to Bookmarks\'.',
);

// Accessibility - These are used for form fields, labels, fieldsets etc.
// for Web Content Accessibility Guidelines & 508 compliancy issues.
// see: http://bobby.watchfire.com/bobby/html/en/index.jsp
// JM =*=*= 2004/10/04
// 2004/11/25 =*=*= JM - minor correction for tim
$lang['accessibility'] = array(
	'search_idname'      => 'cauta',
	'search_formname'    => 'Cauta cuvinte folosite in intrarile din acest site',
	'search_fldname'     => 'Introdu cuvintele de cautat aici:',
	'search_placeholder' => 'Termeni de cautat...',

	'calendar_summary'   => 'Acest tabel reprezinta un calendar al intrarilor in weblog cu hyperlink-uri la datele cu intari.',
	'calendar_noscript'  => 'Calendarul ofera un mijloc de accesare a intrarilor in acest weblog',
	/*
	2-letter language code, used to designate the principal language used on the site
	see: http://www.oasis-open.org/cover/iso639a.html
	*/

	'lang' => $langname,
) ;


$lang['snippets_text'] = array (
    'word_plural'     => 'cuvinte',
    'image_single'    => 'imagine',
    'image_plural'    => 'imagini',
    'download_single' => 'fisier',
    'download_plural' => 'fisiere',
);

$lang['trackback'] = array (
    'register' => 'Depistarea ta a fost stocata.',
    'duplicate' => 'Depistarea ta nu a fost stocata, pentru ca se pare ca este un duplicat al unei intrari anterioare',
    'too_many_hrefs' => 'Numarul maxim de hyperlink-uri s-a depasit. Stop spamming.',
    'noid'      => 'Nici un ID de Depistare (tb_id)',
    'nourl'     => 'Nici un URL (url)',
    'tracked'   => 'Depistat',
    'email_subject' => '[Depistare] Re:',
);

$lang['commentuser'] = array (
    'title'             => 'Autentificare user Pivot',
    'header'            => 'Autentificare ca vizitator inregistrat',
    'logout'            => 'Iesire.',
    'loggedout'         => 'Dez-autentificat',
    'login'             => 'Autentificare',
    'loggedin'          => 'Autentificat',
    'loggedinas'        => 'Autentificat drept',
    'pass_forgot'       => 'Ti-ai uitat parola?',
    'register_new'      => 'Inregistreaza un nou nume de user.',
    'register'          => 'Inregistreaza-te ca vizitator',
    'register_info'     => 'Te rog sa completezi urmatoarele informatii. <strong>Sa te asiguri ca oferi o adresa de email valida</strong>, pentru ca vom trimite un email de verificare la acea adresa.',
    'pass_note'         => 'Nota: Este posibil pentru administratorul acestui site sa iti vada parola.. <br /> <em>Nu</em> folosi o parola pe care o utilizezi pentru alte site-uri / conturi!',
    'show_email'        => 'Arata adresa mea de email cu comentarii',
    'notify'            => 'Notifica-ma pe email de intrarile noi',
    'def_notify'        => 'Notificarea implicita de replici',
    'register'          => 'Inregistrare',
    'pass_invalid'      => 'Parola Incorecta',
    'user_disabled'     => 'User dezactivat',
    'nouser'            => 'Nu exista un astfel de user..',
    'change_info'       => 'De aici iti poti schimba informatiile tale.',
    'pref_edit'         => 'Editeaza preferintele tale',
    'pref_change'       => 'Schimba preferintele',
    'options'           => 'Optiuni',
    'user_exists'       => 'User deja existent.. Te rog sa alegi alt nume.',
    'email_note'        => 'Trebuie sa oferi adresa ta de email, din moment ce este imposibil de verificat contul tau. Poti alege sa nu ti se arate deloc adresa ta catre alti vizitatori.',
    'stored'            => 'Schimbarile au fost stocate',
    'verified'          => 'Contul tau este verificat. Te rog autentifica-te..',
    'not_verified'      => 'Codul pare a fi incorect. Imi pare rau, nu pot verifica.',
    'pass_sent'         => 'Parola ta a fost trimisa la casuta postala oferita..',
    'user_pass_nomatch' => 'Acel nume de user si parola nu corespund.',
    'user_stored'       => 'User stocat!',
    'user_stored_failed' => 'Nu s-a putut stoca noul user!!',
    'pass_send'         => 'Trimite parola',
    'pass_send_desc'    => 'Daca ti-ai uitat parola, completeaza numele tau de user si adresa de email, si Pivot iti va trimite parola la adresa ta de email. ',
    'oops'              => 'Oops',
    'back'              => 'Revenire',
    'back_login'        => 'Inapoi la autentificare',
    'forgotten_pass_mail' => "Parola ta uitata pentru Pivot '%name%' este: \n\n%pass%\n\nNu o mai uita, te rog!\n\nPentru a te autentifica in contul tau, apasa pe urmatorul link:\n %link%",
    'registered'        => "Te-ai inregistrat ca user in Pivot '%s'",
    'reg_confirmation'  => 'Confirmare Inregistrare',
    'reg_verify_short'  => 'Verificare contul tau',
    'reg_verify_long'   => "Pentru a-ti verifica contul, apasa pe urmatorul link:\n %s",
    'reg_verification'  => 'Email de verificare trimis la %s. Verifica-ti email-ul in circa un minut pentru a-ti confirma contul.'
);

$lang['tags'] = array (
    'tag'               => "Eticheta",
    'tags'              => "Etichete",
    'tags_in_posting'	=> "Etichete folosite in aceasta postare",
    'click_for_universe'	=> "Apasa pentru pagina de Eticheta Cosmos locala. ",
    'localcosmos_description'	=> "Acesta este Cosmosul de Etichete local pentru acest weblog. Cu cat este mai larga eticheta, cu atat mai multe intrari din acest blog sunt relatate acesteia. Etichetele sunt ordonate alfabetic. Apasa pe orice eticheta pentru a afla mai multe.<br/><br/>",
    'tagoverview_header'	=> "Vedere generala de Etichete pentru: ",
    'entries_with_tag'	=> "Intrari din acest site cu ",
    'related_tags'	=> "Etichete Relatate",
    'no_related_tags'	=> "Nici o eticheta relatata",
    'latest_on'	        => "Ultimele din",
    'flickr_images'	=> "Imagini Flickr pentru",
    'external_feeds'	=> "Feed-uri externe pentru",
    'nothing_on'	=> "Nimic din",
    'click_icon'	=> "Apasa pe iconita pentru o lista de link-uri din",
    'on'                => "din",
    'for'               => "pentru",
    'found_on'	        => "gasit din",
    'tag_ext_link'      => "Link extern Etichetat",
    'other_posts_with_tag'	=> "Alte intrari despre",
    'used_tags'		=> "Etichete folosite",
    'suggested_tags' => "Etichete Sugerate",
    'insert_tag' => "Insereaza o Eticheta",
    'insert_tag_desc' => "Insereaza o eticheta in intrarea ta cu un link optional. Poti totodata selecta o eticheta din Norul de Etichete (partial) de mai jos."
);


// A little tool to help you check if the file is correct..
if (count(get_included_files())<2) {

	$groups = count($lang);
	$total = 0;
	foreach ($lang as $langgroup) {
		$total += count($langgroup);
	}
	echo "<h2>Fisierul de limbaj este corect!</h2>";
	echo "Acest fisier a fost tradus de NLN - martie 2007. Email: nick_ln@yahoo.com.</br>";
	echo "Acest fisier contine $groups grupe si un total de $total etichete.";

}

?>
