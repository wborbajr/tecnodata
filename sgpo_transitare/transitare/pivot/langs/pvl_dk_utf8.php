<?php
//Dansk (Danish) (UTF-8)

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2nd line.

// Danish translation of Pivot lang file
// Created by Lars Egelund (lars@familien-egelund.dk), 2006.04.10 (Pivot 1.30 RC)
//

// allow for different encoding for non-western languages
$encoding="utf-8";
$langname="dk";


//		General		\\
$lang['general'] = array (
	'yes' => 'Ja',	//affirmative
	'no' => 'Nej',	//negative
	'go' => 'Gå!',	//proceed

	'minlevel' => 'Du har ikke adgang til dette område i Pivot',
	'email' => 'e-mail',
	'url' => 'URL',
	'further_options' => "Flere indstillinger",
	'basic_view' => "Enkel visning",
	'basic_view_desc' => "Vis kun de almindeligste feltene",
	'extended_view' => "Udvidet visning",
	'extended_view_desc' => "Vis alle felter som kan ændres",
	'toggle_view' => "Skift mellem enkel og udvidet visning",
	'select' => "Vælg",
	'cancel' => "Afbryd",
	'delete' => 'Slet',
	'edit' => 'Rediger',
	'welcome' => "Velkommen til %build%.",
	'write' => "Skriv",
	'write_open_error' => "Fejl ved skriving. Kan ikke åbne fil for skriving",
	'write_write_error' => "Fejl ved skriving. Kan ikke skrive til fil",
	'done' => "Færdig!",
	'shortcuts' => "Genveje",
	'cantdelete' => "Du har ikke lov til at slette indlæg %title%!",
	'cantdothat' => "Du har ikke lov til at gøre det med indlæg %title%!",
	'cantdeletelast' => "Du kan ikke slette det sidste indlæg. Du må først oprette en nyt indlæg før du sletter dette indlæg.",
	'more' => "mere",
);


$lang['userlevels'] = array (
		'Superadmin', 'Administrator', 'Avanceret', 'Normal', 'Moblogger'
		//  this one might be a bit hard to translate, but basically it's an order of
		//  power or trust.  Superadmin would be the person in charge - no one can do
		//  anything about his decisions. Admin is only regulated by the Superadmin,
		//  Advanced by the Admin and Superadmin, etc..
		//  Just get the idea of it.
);


$lang['numbers'] = array (
	'null', 'en', 'to', 'tre', 'fire', 'fem', 'seks', 'syv', 'otte', 'ni', 'ti', 'elleve', 'tolv', 'tretten', 'fjorten', 'femten', 'seksten'
);


$lang['months'] = array (
	'januar', 'februar', 'marts', 'april', 'maj', 'juni', 'juli', 'august', 'september', 'oktober', 'november', 'december'
);


$lang['months_abbr'] = array (
	'jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec'
);


$lang['days'] = array (
	'søndag', 'mandag', 'tirsdag', 'onsdag', 'torsdag', 'fredag', 'lørdag'
);


$lang['days_abbr'] = array (
	'søn', 'man', 'tir', 'ons', 'tor', 'fre', 'lør'
);


$lang['days_calendar'] = array (
	'S', 'M', 'T', 'O', 'T', 'F', 'L'
);


$lang['datetime_words'] = array (
	'år', 'måned', 'uge', 'dag', 'time', 'minut', 'sekund'	//the actual words for them.
);


//		Login Page		\\
$lang['login'] = array (
	'title' => 'Log ind',
	'name' => 'Brugernavn',
	'pass' => 'Kodeord',
	'remember' => 'Husk',
	'rchoice' => array (
		'0' => 'Ingenting',
		'1' => 'Mit brugernavn og kodeord',
		'2' => 'At jeg vil forblive logget ind'
	),
	'delete_cookies_desc' => 'Hvis du er sikker på at du bruger riktigt brugernavn og kodeord, men ligevel har problemer <br />med at logge ind, kan du prøve at slette cookies for dette domæne:',
	'delete_cookies' => 'Slet cookies',
	'retry' => 'Fejl i brugernavn/kodeord',
	'banned' => ' Du har brugt 10 forsøg på at logge ind. IP-adressen er blevet blokeret fra at logge ind i 12 timer.',

);


//		Main Bar		\\
	$lang['userbar'] = array (
	'main' => 'Oversigt',
	'entries' => 'indlæg',
	'submit' => 'Nyt indlæg',
	'comments' => 'Kommentarer',
	'trackbacks' => 'Trackbacks',
	'modify' => 'Ændre indlæg',
	'userinfo' => 'Mine oplysninger',
	'u_settings' => 'Mine indstillinger',
	'u_marklet' => 'Skriptbogmærker',
	'files' => 'Behandl mediafiler',
	'upload' => 'Upload',
	'stats' => 'Statistik',
	'admin' => 'Administration',

	'main_title' => 'Hovedoverskrift for Pivot',
	'entries_title' => 'Oversigt over indlæg',
	'submit_title' => 'Ny indlæg',
	'comments_title' => 'Ændre eller slet kommentarer',
	'trackbacks_title' => 'Ændre eller slette trackbacks',
	'modify_title' => 'Ændre indlæg',
	'userinfo_title' => 'Vis min personlige information',
	'u_settings_title' => 'Ændre mine personlige indstillinger',
	'u_marklet_title' => 'Oppret skriptbogmærker',
	'files_title' => 'Behandle og uploade mediafiler',
	'upload_title' => 'Upload filer',
	'uploaded_success' => 'Fil er uploaded',
	'stats_title' => 'Vis log og statistik',
	'updatetitles_title' => 'Vis log og statistik',
	'admin_title' => 'Oversigt over administration',
	'recent_entries' => 'Seneste indlæg',
	'recent_comments' => 'Seneste kommentarer ',
);


$lang['adminbar'] = array (
	//		Admin Bar		\\
	//'trebuild' => 'Rebuild all Files', rolled into maintenance
	'seeusers' => 'Brugere',
	'seeconfig' => 'Konfiguration',
	'filemappings' => 'Filmapning',
	'templates' => 'Skabelon',
	'maintenance' => 'Vedligehold',
	'regen' => 'Genopbyg alle filer',
	'blogs' => 'Blogger',
	'categories' => 'Kategorier',
	'verifydb' => 'Kontroller databasen',
	'buildindex' => 'Opdater indekset',
	'buildsearchindex' => 'Opdater søgeindekset',
	'buildfrontpage' => 'Opdater forsiden(e)',
	'sendping' => 'Send ping',


	'backup' => 'Backup',
	'description' => 'Beskrivelse',
	'conversion' => 'Konvertering',
	'seeusers_title' => 'Opret, ændre og slette brugere',
	'userfields' => 'Felt for brugerinformation',
	'userfields_title' => 'Opret, ændre og slette felt for brugerinformation',
	'seeconfig_title' => 'Ændre konfigurationsfilen',
	'filemappings_title' => 'Oversigt over hvilke filer som bliver gemt og brugt af Pivot for de forskellige blogge',
	'templates_title' => 'Opret, ændre og slette maler',
	'maintenance_title' => 'Udfør rutinemæssig vedligehold på Pivot filer',
	'regen_title' => 'Genopbyg filerne og arkivet som Pivot gemmer',
	'blogs_title' => 'Opret, ændre og slette blogger',
	'blogs_edit_title' => 'Ændre bloggindstilliger for ',
	'categories_title' => 'Opret, ændre og slette kategorier',
	'verifydb_title' => 'Kontroller integriteten for din database',
	'buildindex_title' => 'Genopbyg indeks for din database',
	'buildsearchindex_title' => 'Genopbyg søgeindeks sådan at folk kan søge i indlægene',
	'buildfrontpage_title' => 'Genopbyg forsiden, de sidste arkiver og RSS-filene for hver af bloggene.',
	'backup_title' => 'Opret en sikkerhedskopi af dine indlæg',
	'backup_config' => 'Opret en sikkerhedskopi af konfigurationsfilene',
	'backup_config_desc' => 'Dette lader dig downloade en zip-fil som indeholder alle dine konfigurationsfiler.',
	'ipblocks' => 'IP-blokker',
	'ipblocks_title' => 'Vis og ændre de blokkerede IP-adresser.',
	'ipblocks_stored' => 'IP-adresserne er blevet gemt.',
	'ipblocks_store' => 'Gem disse IP-adressr',
	'ignoreddomains' => 'Blokkerede udtryk',
	'ignoreddomains_title' => 'Vis og ændre de blokkede udtryk.',
	'ignoreddomains_stored' => 'De blokkerede udtryk er blevet gemt.',
	'ignoreddomains_store' => 'Gem disse blokkerede udtryk.',
	'ignoreddomains_asterisk' => 'Indlæg mærket med en stjerne (*) bliver kun brugt for at blokkere henvisninger. Alle andre indlæg bruges ligeledes for at blokkere henvisnings, kommentar- og trackback-spam.',
	'fileexplore' => 'Stifinder',
	'fileexplore_title' => 'Vis filer (både tekst- og databasefiler)',
	'sendping_title' => 'Send Ping opdateringsspor.',
	'buildindex_start' => 'Bygger indeks nu. Dette kan tage lidt tid, så afbryd ikke.',
	'buildsearchindex_start' => 'Bygger søgeindeks nu. Dette kan tage lidt tid, så afbryd ikke.',
	'buildindex_finished' => 'Færdig! Bygning af indeks tog %num% sekunder',

	'filemappings_desc' => 'Nedenfor ser du en oversigt over hver af bloggene i denne Pivot-installation sammen med filer gemt af Pivot og skabeloner som bruges for at gemme disse filer. Dette kan være nyttigt for at finde ud af  nøjagtig hvad som går galt ved Oprettelse af filer.',

	'debug' => 'Åbn fejlsøgingsvindue',

	'latest_pivot_news' => "Seneste nyheder om Pivot",
	'remove_setup_header' => "Pivot installationsscript tilstede",
	'remove_setup' => "Pivot installationsscriptet 'pivot-setup.php' er fortsat tilstede i forældremappen. Dette er en potentiel sikkerhedsrisiko. Vi anbefaler at du enten fjerner filen eller sætter et blankt kodeord sådan at det ikke kan blive anvendt af folk med stygge hensigter.",

);


$lang['templates'] = array (
	'rollback' => 'Restaurer',
	'create_template' => 'Opret mal',
	'create_template_info' => 'Opret en Pivot-skabelon fra grunden af',
	'no_comment' => 'Ingen kommentar',
	'comment' => 'Kommentar*',
	'comment_note' => '(*Bemærk: Kommentarer kan kun blive gemt ved <b>første</b> lagring af ændringer eller Oprettelse)',
	'create' => 'Opret skabelon',
	'editing' => 'Ændringer',
	'filename' => 'Filnavn',
	'save_changes' => 'Gem ændringer!',
	'save_template' => 'Gem skabelon!',
	'aux_template' => 'Hjælpeskabelon',
	'sub_template' => 'Underskabelon',
	'standard_template' => 'Standardskabelon',
	'feed_template' => 'Strømskabelon',
	'css_template' => 'CSS-fil',
	'txt_template' => 'Tekstfil',
	'php_template' => 'PHP-fil',
);


//		Admin			\\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar']['xxx_title'] ones
$lang['admin'] = array (
	'seeusers' => 'Opret, rediger og slette brugere',
	'seeconfig' => 'Rediger konfigurationsfilen',
	'templates' => 'Opret, rediger og slette skabeloner',
	'maintenance' => 'Udfør rutinemæssig vedligehold på Pivots filer, som \'Gjenoppbygg filer\', \'Kontroller databasen\', \'Gjenoppbygg indeksen\' og \'Sikkerhetskopiering\'.',
	'regen' => 'Gjenoppbygg alle siden som Pivot lager',
	'blogs' => 'Opret, ændre og slette de forskjellige bloggene som Pivot publiserer til',
);


//		Maintenace		\\
$lang['maint'] = array (
	'title' => 'Vedlikehold',
	'gen_arc_title' => 'Bygg arkiv', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => 'Gjenoppbygg alle dine arkiver', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'Kontroller XML-filef', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'Kontroller (og reparer hvis nødvendig) integriteten til XML-filene', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => 'Sikkerhetskopiering',
	'backup_text' => 'Opret en sikkerhetskopi af alle Pivot sine essensielle filer',
);


//		Stats and referers		\\
$lang['stats'] = array (
	'show_last' => "Vis de seneste",
	'20ref' => "20 referenter",
	'50ref' => "50 referenter",
	'allref' => "alle referencer",
	'showunblocked' => "kun ikke-blokkerede linjer",
	'showall' => "både blokkerede og ikke-blokkerede linjer",
	'updateref' => "Opdater referenter til titelmapninger",
	'hostaddress' => 'Hostadresse (IP-adresse)',
	'whichpage' => 'Hvilken side',

	'getting' => 'Henter nye titler',
	'awhile' => 'Dette kan tage lidt tid, så afbryd ikke.',
	'firstpass' => 'Første kørsel',
	'secondpass' => 'Anden kørsel',
	'nowuptodate' => 'Dine referenttitelmapninger er nu opdateret.',
	'finished' => 'Ferdig',
);


//		User Info		\\
$lang['userinfo'] = array (
	'editfields' => 'Rediger brugerfelt',
	'desc_editfields' => 'Rediger de felter som brugere kan anvende til at beskrive sig selv',
	'username' => 'Brugernavn',
	'pass1' => 'Kodeord',
	'pass2' => 'Kodeord (bekræft)',
	'email' => 'e-mail',
	'nickname' => 'Kaldenavn',
	'userlevel' => 'Brugerniveau',
	'userlevel_desc' => 'brugerniveau afgør hvilke handlinger brugeren kan udføre i Pivot.',
	'language' => 'Sprog',
	'lastlogin' => 'Seneste indlogning',
	'edituser' => 'Rediger bruger',  //the link to.. well, edit the user (also the title)
	'edituserinfo' => 'Rediger brugerinformation',
	'selfreg' => 'Selvregistrering',
	'newuser' => 'Opret ny bruger',
	'desc_newuser' => 'Opret en ny indlogningskonto for Pivot som tillader dem at postere i en blogg.',
	'newuser_button' => 'Opret',
	'edituser_button' => 'Rediger',
	'pass_too_short' => 'Kodeord skal have mindst 4 tegn.',
	'pass_equal_name' => 'Kodeordet kan ikke være det samme som brugernavnet.',
	'pass_dont_match' => 'Kodeordene er ikke ens',
	'username_in_use' => 'Brugernavn er allerede i brug',
	'username_too_short' => 'Navnet skal være tre bogstaver eller længere',
	'username_not_valid' => 'Brugernavn kan kun indeholde alfanumeriske tegn (A-Z, 0-9) og understreger (_).',
	'not_good_email' => 'Det er ingen gyldig e-mailadresse',
	'c_admin_title' => 'Bekræft Oprettelse af en '.$lang['userlevels']['1'],
	'c_admin_message' => 'En '.$lang['userlevels']['1'].' har fuld adgang til Pivot, kan redigere alle indlæg, kommentarer og indstillinger. Er du sikker på at du vil gøre %s til en '.$lang['userlevels']['1'].'?',
);


//		Config Page		\\
	$lang['config'] = array (
	'save' => 'gem indstillinger',

	'sitename' => 'Webstedets navn',
	'defaultlanguage' => 'Standard sprog',
	'defaultencoding' => 'Brug kodning',
	'defaultencoding_desc' => 'Dette definerer kodningen som er brugt (f.eks utf-8 eller iso-8859-1). Du bør lade dette felt være åbent hvis du ikke ved hvad du gør. Hvis du lader feltet være blankt, vælges samme koding som opgivet i sprog(filen) som du bruger.',
	'defaulttheme' => 'Tema',
	'selfreg' => 'Tillad selvregistrering',
	'selfreg_desc' => 'Hvis denne sættes til ja kan folk registrere sig som (almindelig) bruger og oprette indlæg. (Dette er ikke en "kommentar"-bruger.)',
	'siteurl' => 'Webstedets URL',
	'header_fileinfo' => 'Fil Info',
	'localpath' => 'Lokalsti',
	'debug_options' => 'Fejlsøgealternativ ',
	'debug' => 'Fejlsøgemodus',
	'debug_desc' => 'Vis vilkårlig fejlsøgeinformation',
	'log' => 'Loggfiler',
	'log_desc' => 'Lag loggfiler for forskjellige aktiviteter',

	'unlink' => 'Kobl filer fra',
	'unlink_desc' => 'Nogle servere som har safe_mode (PHP) aktiveret, kræver måske at man leger med denne indstilling. På de fleste severe har denne indstillingen ingen virkning',
	'chmod' => 'Rediger filrettigheder (chmod) til',
	'chmod_desc' => 'Nogle servere kræver at Oprettede filer får så rettighederne (chmod) på en speciel måde. Almindelige værdier er \'0644\' og \'0755\'. Ændre ikke denne, hvis du ikke er helt sikker på hvad du gør',
	'header_uploads' => 'Fil upload indstillinger',
	'upload_path' => 'Sti til fil upload',
	'upload_accept' => 'accepterede filtyper',
	'upload_extension' => 'Standard filefternavn',
	'upload_save_mode' => 'Overskriv',
	'make_safe' => 'Rent filnavn',
	'c_upload_save_mode' => 'Inkrementer filnavn',
	'max_filesize' => 'Maksimum filstørrelse',
	'header_datetime' => 'Dato/Tid',
	'timeoffset_unit' => 'Tidsenhed offset',
	'timeoffset' => 'Tid offset',
	'header_extra' => 'Forskellige indstillinger',
	'wysiwyg' => 'Anvend Wysiwyg-redigering',
	'wysiwyg_desc' => 'Afgør om Wysiwyg-redigering er standard. Individuelle brugere kan ændre dette under \'Mine indstillinger\'',
	'basic_view' => 'Brug enkel visning',
	'basic_view_desc' => 'Afgør om nye indlæg åbnes med enkel eller udvidet visning.',
	'def_text_processing' => 'Standard tekstbehandling',
	'text_processing' => 'Tekstbehandling',
	'text_processing_desc' => 'Afgør standard tekstbehandling når en bruger ikke har valgt Wysiwyg redigering. \'Konverter linjeskift\' ændrer kun linjeskift til en &lt;br&gt;-tagg. <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> er en kraftig, men alligevel let at lære, markeringsstil.',
	'none' => 'Ingen',
	'convert_br' => 'Konverter linjeskift til &lt;br /&gt;',
	'textile' => 'Textile',
	'markdown' => 'Markdown',
	'markdown_smartypants' => 'Markdown og Smartypants',

	'allowed_cats' => 'Tilladte kategorier',
	'allowed_cats_desc' => 'Denne bruger har tilladelse til at postere indlæg i de valgte kategorier.',
	'delete_user' => 'Slet bruger',
	'delete_user_desc' => 'Du kan slette denne bruger hvis du vil. Alle deres indlæg vil bestå, men de vil ikke længere kunne logge ind.',
	'delete_user_confirm' => 'Du er i gang med at fjerne adgangen for %s. Er du sikker på at du vil gøre dette?',

	'setup_ping' => 'Ping-opset ',
	'ping_use' => 'Ping opdateringssporer',
	'ping_use_desc' => 'Afgør om opdateringssporerne som weblogs.com automatisk skal varsles af Pivot når du postere et nyt indlæg. Tjenester som blogrolling.com afhænger af sådanne advarsler.',
	'ping_urls' => 'Send ping til følgende URL-er',
	'ping_urls_desc' => 'Du kan liste flere URL-er som der skal sendes ping til. Tag ikke \'http://\'-delen med, ellers virker det ikke. Placer hver server på en ny linje. Nogle almindelige servere er:<br /><b>rpc.weblogs.com/RPC2</b> (måske den mest anvendte)<br /><b>pivotlog.net/pinger</b> (ikke i brug endnu)<br /><b>rcs.datashed.net/RPC2</b> <br /><b>ping.blo.gs</b> <br />',

	'setup_tb' => 'Trackback Setup',
	'tb_email' => 'Email',
	'tb_email_desc' => 'Hvis sat, så vil en e-mail bli sendt til denne adresse når et trackback bliver tilføjet.',

	'new_window' => 'Åbn genveje i nye vinduer',
	'emoticons' => 'brug føleikon',
	'javascript_email' => 'Kod/skjul e-mailadresser?',
	'new_window_desc' => 'Afgør om alle genveje i et indlæg vil åbnes i et nyt vindue.',

	'mod_rewrite' => 'brug Mod_rewrite',
	'mod_rewrite_desc' => 'Hvis du anvender Apaches Mod_rewrite-indstilling, så vil Pivot lave URL-er som www.mysite.com/archive/2003/05/30/fin_tur, i steden for www.mysite.com/pivot/entry.php?id=134. Ikke alle servere understøtter dette.',
	'mod_rewrite_1' => 'Ja, som /archive/2005/04/28/title_of_entry',
	'mod_rewrite_2' => 'Ja, som /archive/2005-04-28/title_of_entry',
	'mod_rewrite_3' => 'Ja, som /entry/1234',
	'mod_rewrite_4' => 'Ja, som /entry/1234/title_of_entry',

	'search_index' => 'Opdater søgeindeks automatisk',
	'search_index_desc' => 'Afgør om søgeindeksfilene automatisk opdateres hver gang du postere et nyt indlæg eller ændrer en indlæg.',

	'default_allow_comments' => 'Tilad kommentarer som standard',
	'default_allow_comments_desc' => 'Afgør om indlæg er sat til at tillade kommentarer eller ej.',

	'maxhrefs' => 'Antal genveje',
	'maxhrefs_desc' => 'Maksimalt antal genveje tilladt i kommentarer. Nyttig for at blive de plagsomme kommentar-spammere kvit. Sæt til 0 for ubegrænset antal genveje.',
	'rebuild_threshold' => 'Genopbygningsgrænse',
	'rebuild_threshold_desc' => 'Antal sekunder det tager før Pivot opdaterer siden. Standardværdien er 28 sekunder, men hvis du har problemer så prøv at sænke værdien til 10.',
	'default_introduction' => 'Standard introduktion/krop',
	'default_introduction_desc' => 'Bestemmer standardværdiene for introduktion og krop for et nyt indlæg. Sædvanligvis er dette et tomt avsnit, som giver mest mening semantisk.',

	'upload_autothumb'	=> 'Automatiske miniatyrer',
	'upload_thumb_width' => 'Miniatyrebredde',
	'upload_thumb_height' => 'Miniatyrehøjde',
	'upload_thumb_remote' => 'Eksternt beskæringsværktøj',
	'upload_thumb_remote_desc' => 'Hvis din server ikke har de nødvendige biblioteker installeret, kan du bruge et eksternt beskjæringsværktøj',

        'extensions_header' => 'Mappe til udvidelser',
        'extensions_desc'   => '\'Udvidelser\'-mappen er placeret hvor du gemmer dine tilføjelser til Pivot.
                Dette gør opdatering af Pivot meget enklere - se dokumentation for mere information.',
        'extensions_path'   => 'Stien til mappen for udvidelser',

);


//		Weblog Config	\\
$lang['weblog_config'] = array (
	'edit_weblog' => 'Rediger blogg ',
	'edit_blog' => 'Rediger blogger',
	'new_weblog' => 'Ny blogg',
	'new_weblog_desc' => 'Tilføj en ny blogg',
	'del_weblog' => 'Slet blogg',
	'del_this_weblog' => 'Slet denne blogg.',
	'create_new' => 'Opret ny blogg',
	'subw_heading' => 'For hver af underbloggene som blev fundet kan du bestemme hvilke skabeloner de bruger og hvilke kategorier som kan publiceres i dem',
	'create' => 'Fuldfør',

	'create_1' => 'Opret / rediger blogg, step 1 af 3',
	'create_2' => 'Opret / rediger blogg, step 2 af 3',
	'create_3' => 'Opret / rediger blogg, step 3 af 3',

	'name' => 'Bloggnavn',
	'payoff' => 'Undertitel',
	'payoff_desc' => 'Undertitel eller kort beskrivelse for bloggen (payoff)',
	'url' => 'URL til bloggen',
	'url_desc' => 'Pivot afgør URL-en til din blogg, hvis feltet er tomt. Hvis du bruger din blogg som en del af et frameset eller som en SSI (serverside include), så kan du bruge dette felt til at overstyre Pivot.',
	'index_name' => 'Forside (Index)',
	'index_name_desc' => 'Filnavnet for index-fil. Sædvanligvis \'index.html\' eller \'index.php\'.',

	'ssi_prefix' => 'SSI-prefiks',
	'ssi_prefix_desc' => 'Hvis din blogg bruger SSI (som ikke er anbefalet), kan du bruge denne til at præfikse Pivots filnavne med filnavnet brugt for SSI-en (\'index.shtml?p=\'). Hvis du ikke er 100% sikker på hvad du gør bør du lade dette felt stå tomt.',

	'front_path' => 'Sti til forsiden',
	'front_path_desc' => 'Den relative eller absolutte sti til mappen hvor Pivot vil Oprette forsiden for denne blogg.',
	'file_format' => 'Filnavn',
	'entry_heading' => 'Indstillinger for indlæg',
	'entry_path' => 'Sti til indlæg',
	'entry_path_desc' => 'Den relative eller absolutte sti til mappen hvor Pivot vil Oprette enlige indlægssider (hvis du vælger at ikke bruger \'Levende indlæg\')',
	'live_comments' => 'Levende indlæg',
	'live_comments_desc' => 'Hvis du bruger \'Levende indlæg\', behøver Pivot ikke at lave filer for hver enkelt indlæg. Dette er den foretrukne indstilling.',
	'readmore' => '\'Læs videre\'-tekst',
	'readmore_desc' => 'Teksten som fortæller at det er mere at læse i dette indlæg end det som er vist på forsiden. Hvis tom, vil Pivot bruge standarden defineret af det valgte sprog.',

	'arc_heading' => 'Arkivindstillinger',
	'arc_index' => 'Indeksfil',
	'arc_path' => 'Arkivsti',
	'archive_amount' => 'Arkivstørrelse',
	'archive_unit' => 'Arkivtype',
	'archive_format' => 'Arkivformat',
	'archive_none' => 'Intet arkiv',
	'archive_weekly' => 'Ugentligt arkiv',
	'archive_monthly' => 'Månedligt arkiv',
	'archive_yearly' => 'Årligt arkiv',

	'archive_link' => 'Arkivgenvej',
	'archive_linkfile' => 'Arkivlisteformat',
	'archive_order' => 'Arkivrækkefølge',
	'archive_ascending' => 'Ældste først',
	'archive_descending' => 'Nyeste først',

	'templates_heading' => 'Skabelon',
	'frontpage_template' => 'Forsideskabelon',
	'frontpage_template_desc' => 'Skabelonen som bestemmer udseende på forsiden for denne blogg.',
	'archivepage_template' => 'Arkivsideskabelon',
	'archivepage_template_desc' => 'Skabelonen som bestemmer udseende på arkivene. Dette kan være det samme som \'Forsideskabelon\'.',
	'entrypage_template' => 'Indlægsskabelon',
	'entrypage_template_desc' => 'Skabelonen som bestemmer udseende på enlige indlæg (på egen side).',
	'extrapage_template' => 'Ekstra skabelon',
	'extrapage_template_desc' => 'Skabelonen som bestemmer udseende på arkiv- og søgesiden.',

	'shortentry_template' => 'Skabelon til Kortindlægl',
	'shortentry_template_desc' => 'Skabelonen  som bestemmer udseende på enlige indlæg som de er vist i selve bloggen eller arkivet.',
	'num_entries' => 'Antal indlæg',
	'num_entries_desc' => 'Antal indlæg i denne underblogg som vil blive vist på forsiden.',
	'offset' => 'Forskydning',
	'offset_desc' => 'Hvis forskydning er sat til et tal, så vil den mængde af indlæg hoppes over når siden gemmes. Du kan bruge dette til at lave en \'Tidligere indlæg\'-liste for eksempel.',
	'comments' => 'Tillad kommentarer?',
	'comments_desc' => 'Afgør om besøgende/brugere er i stand til at lægge kommentarer i denne underblogg.',

	'publish_cats' => 'Publicér disse kategorier',

	'setup_rss_head' => 'RSS- og Atom-konfiguration',
	'rss_use' => 'Generer strømme',
	'rss_use_desc' => 'Afgør om Pivot automatisk laver en RSS- og Atom-strøm for denne blogg.',
	'rss_filename' => 'RSS-filnavn',
	'atom_filename' => 'Atom-filnavn',
	'rss_path' => 'Sti til strømme',
	'rss_path_desc' => 'Den relative eller absolutte sti til mappen hvor Pivot vil Oprette strømfilerne.',
//	'rss_size' => 'Feed Entry Length',	/* DEPRECATED */
//	'rss_size_desc' => 'The length (in characters) of an entry in the Feed files', /* DEPRECATED */
	'rss_full' => 'Generer fuldstændige strømme',
	'rss_full_desc' => 'Afgør om Pivot laver fuldstændige Atom- eller RSS-strømmer. Hvis sat til \'nej\', vil Pivot lave strømme som kun indeholder kort beskrivelse og dermed gøre strømmene mindre nyttige.',
	'rss_link' => 'Strøm link',
	'rss_link_desc' => 'Genvej som sendes sammen med strømmen for at pege til hovedsiden. Hvis du ikke opgiver en genvej, vil Pivot sende bloggens startside som genvej.',
	'rss_img' => 'Strømbillede',
	'rss_img_desc' => 'Du kan opgive et billede som sendes sammen med strømmen. Nogle strømlæssere vil vise dette billede ved siden af strømmen. Opgiv fuldstændig URL eller ingenting.',

	'lastcomm_head' => 'Indstillinger for seneste kommentarer',
	'lastcomm_amount' => 'Vis hvor mange',
	'lastcomm_length' => 'Klip ved længde',
	'lastcomm_format' => 'Format',
	'lastcomm_format_desc' => 'Bestemmer udseende for \'Seneste kommentarer\' på webloggens forside.',
	'lastcomm_nofollow' => 'brug \'Nofollow\'',
	'lastcomm_nofollow_desc' => 'For at modkæmpe henvisningsspam, kan du vælge at lægge attributten rel="nofollow" til alle genveje i kommentarer og henvisere, da dette vil hindre spammere i at få en bedre siderangering (pagerank) hos Google.',

	'lastref_head' => 'Indstillinger for seneste henvisere',
	'lastref_amount' => 'Vis hvor mange',
	'lastref_length' => 'Klip ved længde',
	'lastref_format' => 'Format',
	'lastref_format_desc' => 'Bestemmer udseende for \'Seneste henvisere\' på webloggens forside.',
	'lastref_graphic' => 'Anvend grafik',
	'lastref_graphic_desc' => 'Afgør om seneste henvisere bruger små ikoner for de mest almindelige søgemaskiner som besøgende kan komme via.',
	'lastref_redirect' => 'Omadresser henvisere',
	'lastref_redirect_desc' => 'For at modkæmpe henvisningsspam, kan du vælge at omadressere udgående genveje til henvisere, da dette ikke vil hjælpe spammere til at få en bedre siderangering (pagerank) hos Google.',

	'various_head' => 'Forskellige indstillinger',
	'emoticons' => 'Anvend føleikon',
	'emoticons_desc' => 'Afgør om føleikon som :-) bliver transformeret til sine grafiske ekvivalenter.',
	'encode_email_addresses' => 'Kod e-mailadresser',
	'encode_email_addresses_desc' => 'Afgør om e-mailadresser kodes i javascript for at beskytte mod e-mailsamlere (spam).',
	'target_blank' => 'Target Blank',
	'xhtml_workaround' => 'XHTML-fix',
	'target_blank_desc' => 'Hvis \'Ja\', så vil alle genveje i dine indlæg blive åbnet i et nyt vindue. Hvis \'XHTML-fix\', så vil alle genveje have en rel="external" attributt, som ikke ødelægger velformet XHTML',

	'date_head' => 'Datovisningsindstillinger',
	'full_date' => 'Fuldt datoformat',
	'full_date_desc' => 'Bestemmer formatet for fuld dato og tid. Som regel brugt på toppen af en enlig indlægsside',
	'entry_date' => 'Indlægsdato',
	'diff_date' => 'Diff Date',
	'diff_date_desc' => '\'Diff Date\' er sædvanligvis anvendt i forbindelse med \'indlægsdato\'. Indlægdatoen bliver vist på hvert indlæg i bloggen, mens \'Diff Date\' kun bliver vist hvis datoen er forskellig fra forrige indlæg.',
	'language' => 'Sprog',
	'language_desc' => 'Bestemmer på hvilket sprog datoer og tal bliver vist, og hvilket tegnsæt som bliver anvendt.',

	'comment_head' => 'Kommentarindstillinger',
	'comment_sendmail' => 'Sende e-mail?',
	'comment_sendmail_desc' => 'Efter at en kommentar er blevet placeret, kan e-mail blive sendt til bloggeieren.',
	'comment_emailto' => 'Send til',
	'comment_emailto_desc' => 'Opgiv e-mailadresse(r) til den som skal modtage melding. (Adskild adresserne med komma.)',
	'comment_texttolinks' => 'Tekst til genveje',
	'comment_texttolinks_desc' => 'Afgør om URL-er og e-mailadresse skal gøres klikbare.',
	'comment_wrap' => 'Ombryd linjene i kommentarer efter',
	'comment_wrap_desc' => 'For at hindre at lange tekststrenge ødelægger sideopsætningen, vil teksten bli ombrudt efter det opgivne antal tegn.',
	'comments_text_0' => 'Tekst for \'ingen kommentarer\'',
	'comments_text_1' => 'Tekst for \'en kommentar\'',
	'comments_text_2' => 'Tekst for \'X kommentarer\'',
	'comments_text_2_desc' => 'Teksten som fortæller hvor mange kommentarer der er. Hvis du lader feltet være tomt, vil Pivot bruge standard for det valgte sproget.',

	'comment_pop' => 'Kommentarer Popup?',
	'comment_pop_desc' => 'Afgør om kommentarside (eller \'enlig indlæg\') vises i et popupvindue eller i det originale vindue.',
	'comment_width' => 'Bredde for Popup',
	'comment_height' => 'Højde for Popup',
	'comment_height_desc' => 'Opgiv bredde og højde (i pixels) for kommentar popup.',

	'comment_format' => "Formatering af kommentarer",
	'comment_format_desc' => "Denne bestemmer formatering af kommentarer på siden for indlæg.",

	'comment_reply' => "Formatering af 'svar ..'",
	'comment_reply_desc' => "Denne bestemmer formatering af genveje som besøgende kan bruge for at svare på en specifik kommentar.",
	'comment_forward' => "Formatering af 'svar fra ..'",
	'comment_forward_desc' => "Denne bestemmer formatering af teksten som vises når en kommentar er besvaret med en anden kommentar.",
	'comment_backward' => "Formatering af 'svar på ..'",
	'comment_backward_desc' => "Denne bestemmer formatering af teksten som vises når en kommentar er svar på en anden kommentar.",

	'comment_textile' => 'Tillad Textile',
	'comment_textile_desc' => 'Hvis \'Ja\', så har besøgende lov til at anvende <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> kommentarer.',
	'save_comment' => 'Gem kommentar',
	'comment_gravatardefault' => 'Standard gravatar',
	'comment_gravatardefault_desc' => 'URL til standard gravatar-billede.  Starter med http://',
	'comment_gravatarhtml' => 'Gravatar-HTML',
	'comment_gravatarhtml_desc' => 'HTML som skal indsættes for en gravatar. %img% byttes ud med URL-en til billedet.',
	'comment_gravatarsize' => 'Gravatar-størrelse',
	'comment_gravatarsize_desc' => 'Størrelse (i pixels) for gravatar-billedet. Standardværdien er 48.',
	
	'trackback_head' => 'trackback indstillinger',
	'trackback_sendmail' => 'Send e-mail?',
	'trackback_sendmail_desc' => 'Efter at et trackback er blevet placeret, kan e-mail blive sendt til bloggeieren.',
	'trackback_emailto' => 'Send til',
	'trackback_emailto_desc' => 'Opgiv e-mailadresse(r) til den som skal modtage melding. (Adskil adresserne med komma.)',
	'trackbacks_text_0' => 'Tekst for \'ingen trackback\'',
	'trackbacks_text_1' => 'Tekst for \'et trackback\'',
	'trackbacks_text_2' => 'Tekst for \'X trackback\'',
	'trackbacks_text_2_desc' => 'Teksten som fortæller hvor mange trackbacks der er. Hvis du lader feltet være tomt, vil Pivot bruge standard for det valgte sprog.',
	'trackback_pop' => 'Trackback Popup?',
	'trackback_pop_desc' => 'Afgør om trackbackside (eller \'enlig indlæg\') vises i et popupvindue eller i det originale vindue.',
	'trackback_width' => 'Bredde for Popup',
	'trackback_height' => 'Højde for Popup',
	'trackback_height_desc' => 'Opgiv bredde og højde (i pixels) for trackback Popup.',
	'trackback_format' => "Formatering af trackback",
	'trackback_format_desc' => "Denne bestemmer formatering af trackback på siden for indlæg.",
	'trackback_link_format' => "Formatering af trackbackgenvej",
	'save_trackback' => 'Gem trackback',

	'saved_create' => 'Den nye blogg er blevet Oprettet.',
	'saved_update' => 'Bloggen er blevet opdateret.',
	'deleted' => 'Bloggen er blevet slettet.',
	'confirm_delete' => 'Du er i gang med at slette bloggen  %1. Er du sikker?',

	'blogroll_heading' => 'Blogroll-indstillinger',
	'blogroll_id' => 'Blogrolling ID #',
	'blogroll_id_desc' => 'Du kan frivillig inkludere en <a href="http://www.blogrolling.com" target="_blank">blogrolling.com</a>-blogroll i bloggen. Blogrolling er en fremragende tjeneste for at vedligeholde en liste af genveje, som viser hvornår de er opdateret. Hvis du ikke ønsker dette, kan du bare hoppe over disse felter.',
        'blogroll_fg' => 'Tekstfarve',
	'blogroll_bg' => 'Baggrundsfarve',
	'blogroll_line1' => 'Linjefarve 1',
	'blogroll_line2' => 'Linjefarve 2',
	'blogroll_c1' => 'Farve 1',
	'blogroll_c2' => 'Farve 2',
	'blogroll_c3' => 'Farve 3',
	'blogroll_c4' => 'Farve 4',
	'blogroll_c4_desc' => 'Disse farver afgør hvordan blogroll-en vil se ud. Farve 1 til 4 giver en visuel indikation på hvornår en genvej er opdateret.',
);


$lang['upload'] = array (
	//		File Upload		\\
	'preview' => 'Fuldstændig liste preview',
	'thumbs' => 'Miniatyrer preview',
	'create_thumb' => '(Lav miniatyrer)',
	'title' => 'Filer',
	'thisfile' => 'Upload en ny fil:',
	'button' => 'Upload',
	'filename' => 'Filnavn',
	'thumbnail' => 'Miniatyre',
	'date' => 'Dato',
	'filesize' => 'Filstørrelse',
	'dimensions' => 'Bredde x højde',
	'delete_title' => 'Slet billede',
	'areyousure' => 'Er du sikker på at du vil slette filen %s?',
	'picheader' => 'Slet dette billede?',
	'create' => 'opret',
	'edit' => 'rediger',

	'insert_image' => 'Indsæt et billede',
	'insert_image_desc' => 'For at indsætte et billede må du uploade et billede eller vælge et billede som allerede er uploaded.',
	'insert_image_popup' => 'Indsæt et popup billede',
	'insert_image_popup_desc' => 'For at lave et popup til et billede må du uploade et billede eller vælge et billede som allerede er uploaded. Derefter skal du vælge tekst eller miniatyre som udløser popupen',
	'choose_upload' => 'upload',
	'choose_select' => 'eller vælg',
	'imagename' => 'billedenavn',
	'alt_text' => 'Alternativ tekst (alt-tagg)',
	'align' => 'Align',
	'border' => 'Kant',
	'pixels' => 'pixels',
	'uploaded_as' => 'Filen blev uploaded som \'%s\'.',
	'not_uploaded' => 'Filen blev ikke uploaded, og følgende fejl opstod:',
	'center' => 'Centrer (standard)',
	'left' => 'Venstre',
	'right' => 'Højre',
	'inline' => 'Inline',
	'notice_upload_first' => 'Du må først vælge eller uploade et billede',
	'select_image' => 'Vælg billede',
	'select_file' => 'Vælg fil',

	'for_popup' => 'For Popup',
	'use_thumbnail' => 'anvend miniatyr',
	'edit_thumbnail' => 'rediger miniatyr',
	'use_text' => 'Anvend tekst',
	'insert_download' => 'Indsæt en Download',
	'insert_download_desc' => 'For at foretage en fil download, skal du uploade en fil eller vælge en tidligere uploaded fil. Derefter vælger du om du vil bruge et ikon, tekst eller en miniatyre til at starte download.',
	'use_icon' => 'brug ikon',
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => 'Indsæt en genvej',
	'insert_link_desc' => 'Indsæt en genvej, ved at skrive en URL i feltet herunder. Besøgende vil se titelen når de har musen over genvejen.',
	'url' => 'URL',
	'title' => 'Titel',
	'text' => 'Tekst',
);


//		Categories		\\
$lang['category'] = array (
	'edit_who' => 'Angiv hvem som kan redigere i kategorien \'%s\'',
	'name' => 'Navn',
	'users' => 'brugere',
	'make_new' => 'Opret ny kategori',
	'create' => 'Opret kategori',
	'canpost' => 'Vælg de brugere du vil give lov til at postere i denne kategori',
	'same_name' => 'En kategori med dette navn findes allerede',
	'need_name' => 'Denne kategorien behøver et navn',

	'allowed' => 'Tilladt',
	'allow' => 'Tillad',
	'denied' => 'Forbudt',
	'deny' => 'Forbyd',
	'edit' => 'Rediger kategori',

	'delete' => 'Slet kategori',
	'delete_desc' => 'Vælg \'ja\', hvis du vil slette denne kategori',

	'delete_message' => 'I denne utgave (1.10) af Pivot slettes kun kategorinavnet. I senere udgaver kan du vælge hvad du vil gøre med indlægene i kategorien.',
	'search_index_newctitle'   => 'Indeksér denne kategori',
	'search_index_newcdesc'    => 'Sæt til \'Nej\' kun hvis du ikke vil at besøgende skal kunne søge i denne kategori.',
	'search_index_editcheader' => 'Indeksér kategori',

	'order' => 'Sorteringsregler',
	'order_desc' => 'Kategorier med lav sorteringsværdi vil vises højere i listen. Hvis alle nummerne er de samme, så sorteres kategoriene alfabetisk.',
	'public' => 'Offentlig kategori',
	'public_desc' => 'Hvis sat til \'Nej\', så vil denne kategorien kun være synlig for registrerede besøgende. (Gælder kun for levende sider.)',
	'hidden' => 'Skjult kategori',
	'hidden_desc' => 'Hvis sat til \'Ja\', så vil denne kategorien blive skjult i arkivindlægene. (Gælder kun for levende sider.)',
		
);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "Send indlæg",
	'preview_entry' => "Vis indlæg",
	'edit_entry' => "Rediger indlæg",
	'edit_entry_desc' => "Rediger dette indlæg",

	'first' => 'først',
	'last' => 'sidst',
	'next' => 'næste',
	'previous' => 'forrige',

	'jumptopage' => 'hop til side (%num%)',
	'filteron' => 'filtrer med (%name%)',
	'filteroff' => 'filtrering af',
	'title' => 'Titel',
	'subtitle' => 'Undertitel',
	'introduction' => 'Introduktion',
	'body' => 'Krop',
	'publish_on' => 'Publiseret på',
	'status' => 'Status',
	'post_status' => 'Status for indlæg',
	'category' => 'Kategori',
	'select_multi_cats' => '(Ctrl-klikk for at vælge flere kategorier samtidig)',
	'last_edited' => "Senest ændret den",
	'created_on' => "Oprettet den",
	'date' => 'Dato',
	'author' => 'Forfatter',
	'code' => 'Kode',
	'comm' => '# Komm',
	'track' => '# Spor',
	'name' => 'Navn',
	'allow_comments' => 'Tillad kommentarer',

	'delete_entry' => "Slet indlæg",
	'delete_entry_desc' => "Slet dette indlæg og tilhørende kommentarer",
	'delete_one_confirm' => "Er du sikker på at du vil slette dette indlæg?",
	'delete_multiple_confirm' => "Er du sikker på at du vil slette disse indlæg?",

	'convert_lb' => 'Konverter linjeskift',
	'always_off' => '(Denne er altid fra under Wysiwyg-redigering)',
	'be_careful' => '(Vær forsigtig med dette!)',
	'edit_comments' => 'Rediger kommentarer',
	'edit_comments_desc' => 'Rediger kommentarerne som er blevet posteret på dette indlæg',
	'edit_comment' => 'Rediger kommentar',
	'delete_comment' => 'Slet kommentar',
	'edit_trackback' => 'Rediger trackback',
	'edit_trackback_desc' => 'Rediger trackback som er blevet posteret på dette indlæg',
	'delete_trackback' => 'Slet trackback',
	'block_single' => 'Blokker IP %s',
	'block_range' => 'Blokker IP-område %s',
	'unblock_single' => 'Afblokker IP %s',
	'unblock_range' => 'Afblokker IP-område %s',
	'trackback' => 'Trackback-ping',
	'trackback_desc' => 'Send trackback-pinger til følgende URL(-er). For at sende til flere URL-er, placer hver URL på en separat linje.',
	'keywords' => 'Nøgleord',
	'keywords_desc' => 'Anvend denne for at sætte nøgleord som kan søges efter til at finde dette indlæg, eller for at sætte en enklere URL for dette indlæg.',
	'vialink' => "Via-genvej ",
	'viatitle' => "Via-titel",
	'via_desc' => 'Anvend denne for at sætte en genvej til kilden for dette indlæg.',
	'entry_catnopost' => 'Du har ikke lov til at poste i kategorien: \'%s\'.',
	'entry_saved_ok' => 'Dit indlæg \'%s\' blev gemt uden problemer.',
	'entry_ping_sent' => 'Et trackback-ping er blevet sendt til \'%s\'.',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => 'AfKryds alle',
	'c_none' => 'Fjern alle afkrydsninger',
	'choose' => '- vælg et alternativ -',
	'publish' => 'Sæt status til \'publiseret\'',
	'hold' => 'Sæt status til \'vent\'',
	'delete' => 'Slet dem',
	'generate' => 'Publicer og generer',

	'with_checked_entries' => "Med de afkryssede indlæg, udfør:",
	'with_checked_files' => "Med de afkryssede filer, udfør:",
	'with_checked_templates' => 'Med de afkryssede skabeloner, udfør:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => 'kan ikke åbne mappe, kontroller dine rettigheder.',
	'path_read' => 'kan ikke lese mappe, kontroller dine rettigheder.',
	'path_write' => 'kan ikke skrive til mappe, kontroller dine rettigheder.',

	'file_open' => 'kan ikke åbne fil, kontroller dine rettigheder.',
	'file_read' => 'kan ikke lese fil, kontroller dine rettigheder.',
	'file_write' => 'kan ikke skrive til fil, kontroller dine rettigheder.',
);


//		Notices			\\
$lang['notice'] = array (
	'comment_saved' => "Kommentaren er blevet gemt.",
	'comment_deleted' => "Kommentaren er blevet slettet.",
	'comment_none' => "Dette indlæg har ingen kommentarer.",
	'trackback_saved' => "Trackbacket er blevet gemt.",
	'trackback_deleted' => "Trackbacket er blevet slettet.",
	'trackback_none' => "Dette indlæg har ingen trackback.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => 'Stem \'%val%\' på dette indlæg',
	'good' => 'Godt',
	'bad' => 'Dårligt',
	'already' => 'Du har allerede stemt på dette indlæg',
	'register' => 'Din stemme for  \'%val%\' er blevet registreret',
);


$lang['comment'] = array (
	'register' => 'Din kommentar er blevet gemt.',
	'preview' => 'Vis kommentar. Klik \'Send kommentar\' for at gemme den.',
	'duplicate' => 'Kommentaren er ikke blevet gemt, da den ser ud til at være en duplikat af et tidligere indlæg',
	'no_name' => 'Du skal skrive dit navn (eller et alias) i \'navn\'-feltet. Klik \'Send kommentar\' for at gemme den permanent.',
	'no_comment' => 'Du skal skrive noget i \'kommentar\'-feltet. Klik \'Send kommentar\' for at gemme den permanent.',
	'too_many_hrefs' => 'Maksimalt antal genveje oversteget. Stop spamming.',
        'email_subject' => '[Kommentar]',
);


$lang['comments_text'] = array (
	'0' => "Ingen kommentarer",
	'1' => "Kun en kommentar",
	'2' => "Allerede %num% kommentarer",
);

$lang['trackbacks_text'] = array (
	'0' => "Ingen trackback",
	'1' => "Kun et trackback",
	'2' => "Allerede %num% trackback",
);

$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "Arkiv",
	'next_archive' => "Næste arkiv",
	'previous_archive' => "Forrige arkiv",
	'last_comments' => "Seneste kommentarer",
	'last_referrers' => "Seneste referencer",
	'calendar' => "Kalender",
	'links' => "Genveje",
	'xml_feed' => "XML: RSS-strøm (2.0)",
        'atom_feed' => "XML: Atom-strøm",
	'powered_by' => "Drevet af",
	'blog_name' => "Bloggnavn",
	'title' => "Titel",
	'excerpt' => "Uddrag",
	'name' => "Navn",
	'email' => "e-mail",
	'url' => "URL",
	'date' => "Dato",
	'comment' => "Kommentar",
	'ip' => "IP-adresse",
	'yes' => "Ja",
	'no' => "Nej",
	'emoticons' => "Føleikon",
	'emoticons_reference' => "Åbn reference for føleikon",
	'textile' => "Textile",
	'textile_reference' => "Åbn reference for Textile",
	'post_comment' => "Send kommentar",
	'preview_comment' => "Vis kommentar",
	'remember_info' => "Husk personlig info?",
        'notify' => "Påmindelse",
	'notify_yes' => "Ja, send mig en e-mail når nogen svarer.",
	'register' => "Registrer dit brugernavn / log ind",
	'disclaimer' => "<b>Bemærk:</b> Alle HTML-tags udenom &lt;b&gt; og &lt;i&gt; fjernes fra kommentarer. Du kan lave genveje ved at skrive URLen eller e-mailadressen direkte ind i teksten.",
	'search_title' => "Søgeresultat",
	'search' => "Søg!",
	'nomatches' => "Ingen resultater for '%name%'. Prøv med noget andet.",
	'matches' => "Resultat for '%name%':",
	'about' => "Om",
	'stuff' => "Diverse",
	'linkdump' => "Genvejsdump",
	'discreet' => "Skjul e-mail",
	'discreet_yes' => "Ja, skjul min e-mailadresse.",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Rediger brugerfelt',
	'edit' => 'Rediger',
	'create' => 'Opret',

	'dispname' => 'Vis navn',
	'intname' => 'Internt navn',
	'intname_desc' => 'Internt navn er navnet på dette felt som det vil vises når du fortæller Pivot at vise det i en skabelon.',
	'size' => 'Størrelse',
	'rows' => 'Rækker',
	'cols' => 'Kolonner',
	'maxlen' => 'Maksimum længde',
	'minlevel' => 'Min. brugerniveau',
	'filter' => 'Filtrer med',
	'filter_desc' => 'Ved at filtrere dette felt, kan du begrænse hvilken slags inddata som kan blive anvendt',
	'no_filter' => 'Ingenting',
	'del_title' => 'Bekræft sletning',
	'del_desc' => 'Sletning af dette brugerfelt (<b>%s</b>) vil også slette alle data som brugerne har gemt i det, samt at alle instanser af det i skabelonen vil vises tomt.',

	'already' => 'Dette navn er allerede i brug',
	'int' => 'Internt navn skal være længere end 3 tegn',
	'short_disp' => 'Visningsnavn skal være længere end 3 tegn',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => 'Bogmærker',
	'bm_add' => 'Tilføj bogmærke',
	'bm_withlink' => 'Pivot » Ny (med link)',
	'bm_withlink_desc' => 'Dette bogmærke åbner et vindue med et nyt indlæg som indeholder en genvej til siden den blev åbnet fra.',

	'bm_nolink' => 'Pivot » Ny',
	'bm_nolink_desc' => 'Dette bogmærke åbner et vindue med et nyt tomt indlæg.',

	'bookmarklets_info' => 'Du kan bruge bogmærker til hurtigt at skrive nye indlæg med Pivot. For at lægge  et bogmærke i en browser, brug et af følgende valg: (Eksakt tekst varierer fra browser til browser.)',
	'bookmarklets_info_1' => 'Klik og træk bogmærke til din genvejsværktøjslinje eller din browsers \'Bogmærker\'-knap.',
	'bookmarklets_info_2' => 'Højreklik på bogmærke og vælg \'Tilføj i bogmærker\'.',
);

// Accessibility - These are used for form fields, labels, fieldsets etc.
// for Web Content Accessibility Guidelines & 508 compliancy issues.
// see: http://bobby.watchfire.com/bobby/html/en/index.jsp
// JM =*=*= 2004/10/04
// 2004/11/25 =*=*= JM - minor correction for tim
$lang['accessibility'] = array(
        'search_idname'      => 'søg',
        'search_formname'    => 'Søg efter ord brugt i indlæg på dette websted',
        'search_fldname'     => 'Skriv søgeord her:',
        'search_placeholder' => 'Skriv søgeord',

        'calendar_summary'   => 'Denne tabel repræsenterer en kalender over indlægene i webloggen med genveje på dage med indlæg.',
        'calendar_noscript'  => 'Denne kalender gør det muligt at vælge indlæg i denne weblog',
        /*
        2-letter language code, used to designate the principal language used on the site
        see: http://www.oasis-open.org/cover/iso639a.html
        */

        'lang' => $langname,
) ;


$lang['snippets_text'] = array (
    'word_plural'     => 'ord',
    'image_single'    => 'billed',
    'image_plural'    => 'billeder',
    'download_single' => 'fil',
    'download_plural' => 'filer',
);

$lang['trackback'] = array (
    'register' => 'Dit trackback er blevet gemt.',
    'duplicate' => 'Trackbacket er ikke blevet gemt, da den ser ud til at være en duplikat.',
    'too_many_hrefs' => 'Maksimalt antal genveje oversteget. Stop spamming.',
    'noid'      => 'Ingen trackback-ID (tb_id)',
    'nourl'     => 'Ingen URL (url)',
    'tracked'   => 'Trackbacket',
    'email_subject' => '[Trackback]',
);

$lang['commentuser'] = array (
    'title'             => 'Pivot bruger log ind',
    'header'            => 'Log ind som registrert besøgende',
    'logout'            => 'Log ud.',
    'loggedout'         => 'Logget ud',
    'login'             => 'Log ind',
    'loggedin'          => 'Logget ind',
    'loggedinas'        => 'Logget ind som',
    'pass_forgot'       => 'Glemt kodeordet?',
    'register_new'      => 'Registrer et nyt brugernavn.',
    'register'          => 'Registrer som en besøgende',
    'register_info'     => 'Udfyld følgende information. <strong>Vær sikker på at e-mailadressen er gyldig</strong>, fordi vi sender e-mail med verifikationsdata til denne adresse.',
    'pass_note'         => 'Bemærk: Det er mulig for ejeren af dette websted at se dir kodeord. <br />Anvend <em>Ikke</em> et passord som du er øm om eller bruger andre steder!',
    'show_email'        => 'Vis e-mailadressen sammen med kommentaren',
    'notify'            => 'Påmind om nye indlæg på e-mail',
    'def_notify'        => 'Standard påmindelse ved svar',
    'register'          => 'Registrer',
    'pass_invalid'      => 'Ugyldig kodeord',
    'nouser'            => 'Ukendt brugernavn',
    'change_info'       => 'Her kan du ændre dine informationer.',
    'pref_edit'         => 'Rediger dine indstillinger.',
    'pref_change'       => 'Rediger indstillinger',
    'options'           => 'Indstillinger',
    'user_exists'       => 'brugernavn eksisterer allerede - vælg et andet navn.',
    'email_note'        => 'Du må opgive en gyldig e-mailadresse, sådan at vi kan verificere din konto. Du kan også vælge at vise e-mailadressen efter kommentarene som du skriver.',
    'stored'            => 'Ændringerne er blevet gemt',
    'verified'          => 'Kontoen er verificeret. Log ind.',
    'not_verified'      => 'Verifikationskoden ser ud til at være ugyldig.',
    'pass_sent'         => 'Kodeord er sendt til e-mailadressen du opgav.',
    'user_pass_nomatch' => 'brugernavn og kodeord stemmer ikke overens.',
    'user_stored'       => 'Bruger gemt!',
    'user_stored_failed' => 'Kunne ikke gemme ny bruger!!',
    'pass_send'         => 'Send kodeord',
    'pass_send_desc'    => 'Hvis du har glemt kodeordet, udfyld brugernavn og e-mailadresse og så vil Pivot sende dig kodeordet på e-mail.',
    'oops'              => 'Ups',
    'back'              => 'Tilbage til',
    'back_login'        => 'Tilbage til log ind',
    'forgotten_pass_mail' => "Dit glemte kodeord for Pivot '%name%' er: \n\n%pass%\n\nGlem det ikke igen ;-)\n\nFor at logge ind på din konto, brug følgende genvej:\n %link%",
    'registered'        => "Du har registreret dig som en ny bruger på Pivot '%s'",
    'reg_confirmation'  => 'Bekræftelse af registrering',
    'reg_verify_short'  => 'Verificer din konto',
    'reg_verify_long'   => "For at verificere din kontoen, klik på følgende genvej:\n %s",
    'reg_verification'  => 'e-mailverificering sendt til %s. Check din e-mailen om et minutt eller to for at bekræfte din konto.'
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
