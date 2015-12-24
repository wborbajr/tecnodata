<?php 
//Suomi (Finnish)

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2rd line.

// Pivot kielitiedoston suomennus
// Laatinut kellarimummu  
// @ koti.mbnet.fi/harrys/blog

// allow for different encoding for non-western languages
$encoding="iso-8859-1";
$langname="fi";


//		General		\\
$lang['general'] = array (
	'yes' => 'Kyll�',	//affirmative
	'no' => 'Ei',		//negative
	'go' => 'Jatka!',	//proceed

	'minlevel' => 'Sinulla ei ole oikeuksia t�h�n Pivotin osaan',	
	'email' => 'S�hk�posti',			
	'url' => 'URL',
	'further_options' => "Lis�valinnat",
	'basic_view' => "Normaali n�kym�",
	'basic_view_desc' => "N�yt� vain tavanomaiset kent�t",
	'extended_view' => "Laajennettu n�kym�",
	'extended_view_desc' => "N�yt� kaikki muokattavissa olevat kent�t",
	'select' => "Valitse",
	'cancel' => "Peruuta",
	'delete' => 'Poista',
	'welcome' => "T�m� on Pivotin versio %build%.",
	'write' => "Kirjoita",
	'write_open_error' => "Tallennusvirhe. Ei voitu avata tiedostoa tallennusta varten",
	'write_write_error' => "Tallennusvirhe. Tiedostoon ei voitu tallentaa",
	'done' => "Valmis!",
	'shortcuts' => "Pikalinkit",
	'cantdelete' => "Sinulla ei ole lupaa poistaa %title%!",
	'cantdothat' => "Toimenpide ei ole sallittu %title%lle!",
);


$lang['userlevels'] = array (
		'Supervalvoja', 'J�rjestelm�nvalvoja', 'Tehok�ytt�j�', 'Tavis', 'Mobloggaaja'
		//  this one might be a bit hard to translate, but basically it's an order of
		//  power or trust.  Superadmin would be the person in charge - no one can do
		//  anything about his decisions. Admin is only regulated by the Superadmin, 
		//  Advanced by the Admin and Superadmin, etc..
		//  Just get the idea of it.
);


$lang['numbers'] = array (
	'nolla', 'yksi', 'kaksi', 'kolme', 'nelj�', 'viisi', 'kuusi', 'seitsem�n', 'kahdeksan', 'yhdeks�n', 'kymmenen', 'yksitoista', 'kaksitoista', 'kolmetoista', 'nelj�toista', 'viisitoista', 'kuusitoista'
);


$lang['months'] = array (
	'Tammikuu', 'Helmikuu', 'Maaliskuu', 'Huhtikuu', 'Toukokuu', 'Kes�kuu', 'Hein�kuu', 'Elokuu', 'Syyskuu', 'Lokakuu', 'Marraskuu', 'Joulukuu'
);	

		
$lang['months_abbr'] = array (
	'Tam', 'Hel', 'Maa', 'Huh', 'Tou', 'Kes�', 'Hei', 'Elo', 'Syys', 'Loka', 'Mar', 'Jou'
);


$lang['days'] = array (
	'Sunnuntai', 'Maanantai', 'Tiistai', 'Keskiviikko', 'Torstai', 'Perjantai', 'Lauantai'
);


$lang['days_abbr'] = array (
	'Su', 'Ma', 'Ti', 'Ke', 'To', 'Pe', 'La'	
);


$lang['days_calendar'] = array (
	'S', 'M', 'T', 'K', 'T', 'P', 'L'
); 


$lang['datetime_words'] = array (
	'Vuosi', 'Kuukausi', 'Viikko', 'Viikonp�iv�', 'Tunti', 'Minuutti', 'Sekunti'	//the actual words for them.
);


//		Login Page		\\
$lang['login'] = array (
	'title' => 'Kirjautuminen',
	'name' => 'K�ytt�j�tunnus',
	'pass' => 'Salasana',
	'remember' => 'Muista',
	'rchoice' => array (
		'0' => 'Ei mit��n',
		'1' => 'K�ytt�j�nimeni ja salasanani',
		'2' => 'Ett� haluan pysy� sis��nkirjautuneena'
	),
	'delete_cookies_desc' => 'Mik�li olet varma, ett� k�ytt�j�tunnus ja salasana olivat oikeat, mutta sinulla on vaikeuksia kirjautua sis��n niin<br />t�t� palvelinta koskevien ev�steiden poisto voi auttaa:',
	'delete_cookies' => 'Poista ev�steet',
	'retry' => 'V��r� k�ytt�j�nimi/salasana',
	'banned' => '10 virheellist� sis��nkirjautumisyrityst�. Sen johdosta t�m�n IP-osoitteen sis��nkirjautumisyritykset estet��n 12 tunnin ajan.',

);


//		Main Bar		\\
	$lang['userbar'] = array (
	'main' => 'P��valikko',
	'entries' => 'Kirjoitukset',
	'submit' => 'Uusi kirjoitus',
	'comments' => 'Kommentit',
	'modify' => 'Muokkaa kirjoituksia',
	'userinfo' => 'K�ytt�j�tiedot',
	'u_settings' => 'K�ytt�j�asetukset',
	'u_marklet' => 'Kirjanmerkit',
	'files' => 'Mediatiedostot',
	'upload' => 'Siirr� palvelimelle',
	'stats' => 'Tilastot',
	'admin' => 'Blogin hallinnointi',

	'main_title' => 'Pivotin p��valikko',
	'entries_title' => 'Kirjoitusten p��valikko',
	'submit_title' => 'Julkaise uusi kirjoitus',
	'comments_title' => 'Muokkaa ja poista kommentteja',		
	'modify_title' => 'Muokkaa kirjoitusta',
	'userinfo_title' => 'Katso omat tiedot',
	'u_settings_title' => 'Muokkaa henkil�kohtaisia asetuksia',
	'u_marklet_title' => 'Luo kirjainmerkkej�',
	'files_title' => 'Hallinnoi ja lataa tiedostoja',
	'upload_title' => 'Lataa tiedostot palvelimelle',
	'uploaded_success' => 'Tiedoston lataus suoritettu',
	'stats_title' => 'Katso lokeja ja tilastoja',
	'updatetitles_title' => 'Loit ja tilastot.',
	'admin_title' => 'Blogin hallinnan p��valikko',
	'recent_entries' => 'Uusimmat kirjoitukset',
	'recent_comments' => 'Uusimmat kommentit',
);


$lang['adminbar'] = array (
	//		Admin Bar		\\
	//'trebuild' => 'Tee kaikki tiedostot uudelleen', rolled into maintenance
	'seeusers' => 'K�ytt�j�t',
	'seeconfig' => 'Asetukset',
	'filemappings' => 'Tiedostorakenne',
	'templates' => 'Valmiit asettelut',
	'maintenance' => 'Yll�pito',
	'regen' => 'Tee kaikki tiedostot uudelleen',
	'blogs' => 'Blogit',
	'categories' => 'Kategoriat',
	'verifydb' => 'Tarkista tietokanta',
	'buildindex' => 'Tee hakemisto uudelleen',
	'buildsearchindex' => 'Indeksoi hakutietokanta uudelleen',
	'buildfrontpage' => 'Tee uudelleen etusivu(t)',
	'sendping' => 'L�het� Ping',


	'backup' => 'Varmuuskopioi',
	'description' => 'Kuvaus',
	'conversion' => 'Muunnos',
	'seeusers_title' => 'Luo, muokkaa ja poista k�ytt�ji�',
	'userfields' => 'K�ytt�j�tietokent�t',
	'userfields_title' => 'Luo, muokkaa ja poista k�ytt�j�tietokentti�',
	'seeconfig_title' => 'Muokkaa asetustiedostoa',
	'filemappings_title' => 'Yleisn�kym� tiedostoista, jotka on luotu Pivotin k�ytt��n',
	'templates_title' => 'Luo, muokkaa ja poista valmiita asetteluita',
	'maintenance_title' => 'Suorita Pivot-tiedostojen rutiinihuoltotoimia',
	'regen_title' => 'Tee uudelleen Pivotin luomat tiedostot ja arkistot',
	'blogs_title' => 'Luo, muokkaa ja poista blogeja',
	'blogs_edit_title' => 'Tee blogiasetukset (kenelle) ',
	'categories_title' => 'Luo, muokkaa ja poista kategorioita',	
	'verifydb_title' => 'Todenna tietokannan eheys',
	'buildindex_title' => 'Indeksoi tietokantasi uudelleen',
	'buildsearchindex_title' => 'Tee hakuindeksi uudelleen mahdollistaaksesi etsinn�n my�s uusista kirjoituksista',
	'buildfrontpage_title' => 'Tee kunkin blogin etusivu, viimeisimm�t arkistoinnit ja RSS-tiedotteet uudelleen',
	'backup_title' => 'Luo kirjoituksistasi varmuuskopio',
	'backup_config' => 'Varmuuskopioi asetukset',
	'backup_config_desc' => 'T�st� voit ladata asetuksesi sis�lt�v�n zip-tiedoston',
	'ipblocks' => 'IP-estot',
	'ipblocks_title' => 'Katso ja muokkaa estettyj� IP-osoitteita.',
	'ipblocks_stored' => 'IP-osoitteet on varastoitu.',
	'ipblocks_store' => 'Varastoi n�m� IP-osoitteet',
	'ignoreddomains' => 'Sivuutetut domainit',
	'ignoreddomains_title' => 'Katso ja muokkaa sivuutettuja domaineja.',
	'ignoreddomains_stored' => 'Sivuutetut domainit on varastoitu.',
	'ignoreddomains_store' => 'Varastoi n�m� sivuutetut domainit',
	'fileexplore' => 'Tiedostoselain',
	'fileexplore_title' => 'N�yt� tiedostot (sek� teksti- ett� tietokantatiedostot)',
	'sendping_title' => 'L�het� Ping trackerien p�ivitt�miseksi.',
	'buildindex_start' => 'Indeksoidaan. T�m� kest�� hetken, joten odota valmistumista rauhassa.',
	'buildsearchindex_start' => 'Indeksoidaan. T�m� kest�� hetken, joten odota valmistumista rauhassa.',
	'buildindex_finished' => 'Valmis! Indeksointi kesti %num% sekuntia',

	'filemappings_desc' => 'Alla n�kym� t�m�n Pivot-asennuksen kustakin blogista, ja tiedostot, jotka Pivot luo ja mit� Asettelumalleja Pivot k�ytt�� asentaessaan tiedostoja. T�st� tiedosta voi olla hy�ty� my�s kun etsit��n mahdollista ongelmanaiheuttajaa Pivotin asennuksessa.',

);


$lang['templates'] = array (
	'rollback' => 'Peruuta toimenpide',
	'create_template' => 'Luo Asettelumalli',
	'create_template_info' => 'Luo Pivot Asettelumalli alusta alkaen',
	'no_comment' => 'Ei kommentteja',
	'comment' => 'Kommentti*',
	'comment_note' => '(*Huom: Kommentit voidaan tallentaan vain <b>ensimm�isell�</b> luonti- tai tallennuskerralla)',
	'create' => 'Luo Asettelumalli',
	'editing' => 'Muokkaus',
	'filename' => 'Tiedoston nimi',
	'save_changes' => 'Tallenna muutokset!',
	'save_template' => 'Tallenna Asettelumalli!',		
);


//		Admin			\\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar']['xxx_title'] ones
$lang['admin'] = array (
	'seeusers' => 'Luo, muokkaa ja poista k�ytt�ji�',
	'seeconfig' => 'Muokkaa asetustiedostoa',
	'templates' => 'Luo, muokkaa ja poista Asettelumalleja',
	'maintenance' => 'Suorita rutiinihuoltotoimia Pivot-tiedostoille , kuten \'Tee uudelleen tiedostot\', \'Todenna tietokanta\', \'Indeksoi uudelleen\' ja \'Varmuuskopioi\'.',
	'regen' => 'Tee uudelleen kaikki Pivotin luomat sivut',
	'blogs' => 'Luo, muokkaa ja poista blogeja, joita Pivotilla julkaistaan',
);


//		Maintenace		\\	
$lang['maint'] = array (
	'title' => 'Yll�pito',	
	'gen_arc_title' => 'Luo arkisto', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => 'Luo kaikki arkistot uudelleen', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'Todenna XML-tiedostot', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'Todenna (ja tarvittaessa korjaa) XML-tiedostojen eheys', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => 'Varmuuskopioi',
	'backup_text' => 'Varmuuskopioi kaikki Pivotin keskeiset tiedostot',
);


//		Stats and referers		\\
$lang['stats'] = array (
	'show_last' => "N�yt� viimeisin",
	'20ref' => "20 viittaajaa",
	'50ref' => "50 viittaajaa",
	'allref' => "kaikki viittaajat",
	'showunblocked' => "vain sallitut rivit",
	'showall' => "sek� estetyt ett� sallitut rivit",
	'updateref' => "P�ivit� viittaaja osoitel�hteist��n",
	'hostaddress' => 'Host-osoitteet (ip-osoite)', 
	'whichpage' => 'Mik� sivu',

	'getting' => 'Hakee uudet aiheet',
	'awhile' => 'Kest�� hetken. Odota, ole hyv�.',
	'firstpass' => 'Ensimm�inen kerta',
	'secondpass' => 'Toinen kerta',
	'nowuptodate' => 'Viittausl�hteist� on nyt p�ivitetty.',
	'finished' => 'Valmis',
);


//		User Info		\\
	$lang['userinfo'] = array (
	'editfields' => 'Muokkaa k�ytt�j�kentti�',
	'desc_editfields' => 'Muokkaa k�ytett�viss� olevia k�ytt�j�tietokentti�',
	'username' => 'K�ytt�j�tunnus',
	'pass1' => 'Salasana',
	'pass2' => 'Salasana (uudelleen)',
	'email' => 'S�hk�postiosoite',
	'userlevel' => 'K�ytt�j�taso',	
	'userlevel_desc' => 'K�ytt�j�taso m��r�� millaisia toimia k�ytt�j� voi Pivotissa suorittaa.',
	'language' => 'Kieli',	
	'lastlogin' => 'Edellinen sis��nkirjaus',
	'edituser' => 'Muokkaa k�ytt�j��',  //linkki.. no, k�ytt�j�muokkaukseen (samoin otsake)
	'edituserinfo' => 'Muokkaa k�ytt�j�tietoja',
	'newuser' => 'Luo uusi k�ytt�j�',
	'desc_newuser' => 'Luo uusi Pivot sis��nkirjautumistili, joka sallii blogiin kirjoittamisen.',
	'newuser_button' => 'Luo',	
	'edituser_button' => 'Vaihda',
	'pass_too_short' => 'Salasanan tulee olla v�h. 4 merkki� pitk�.',
	'pass_equal_name' => 'Salasana ei voi olla sama kuin k�ytt�j�tunnus.',
	'pass_dont_match' => 'Salasanat eiv�t t�sm��',
	'username_in_use' => 'K�ytt�j�tunnus on jo k�yt�ss�',
	'username_too_short' => 'K�ytt�j�tunnuksen v�himm�ispituus on 3 merkki�',
	'username_not_valid' => 'K�ytt�j�tunnuksessa voi olla vain alphanumeerisia merkkej� (A-Z, 0-9) tai alamerkkej� (_).',
	'not_good_email' => 'S�hk�postiosoite ei kelpaa',	
	'c_admin_title' => 'Vahvista j�rjestelm�nvalvojatilin luominen',
	'c_admin_message' => ' '.$lang['userlevels']['1'].'lla on t�ydet oikeudet Pivotiin, voi muokata kaikkia uusia jutskia, kommentteja ja kaikkia asetuksia. Haluatko varmasti luoda %s  '.$lang['userlevels']['1'].'n?',
);


//		Config Page		\\		
	$lang['config'] = array (
	'save' => 'Tallenna asetukset',

	'sitename' => 'Sivuston nimi',
	'defaultlanguage' => 'Oletuskieli',
	'defaultencoding' => 'K�yt� kielikoodausta',
	'defaultencoding_desc' => 'T�m� m��ritt�� kielikoodin, jota k�ytet��n (kuten utf-8 tai iso-8859-1). J�t� t�m� tyhj�ksi, jos olet ep�varma. Mik�li valintaa ei suoriteta, kelvolliset asetukset ladataan kielitiedostosta.',
	'siteurl' => 'Sivuston URL',
	'header_fileinfo' => 'Tiedot',
	'localpath' => 'Paikallinen hakemistopolku',
	'debug_options' => 'Vianetsint�asetukset',
	'debug' => 'Vianetsint�tila',
	'debug_desc' => 'N�yt� satunnaisia vianm��ritystietoja, siell� sun t��ll�..',
	'log' => 'Lokitiedostot',
	'log_desc' => 'Pid� lokikirjaa erin�isist� toiminnoista',

	'unlink' => 'Poista tiedostolinkitykset',
	'unlink_desc' => 'Jotkin palvelimet, joissa pirullinen safe-mode on kytketty p��lle, saattavat vaatia n�pr�ily� t�ll� valinnalla. Useimmilla palvelimella valinnalla ei ole mit��n vaikutusta',
	'chmod' => 'CHMODaa tiedostot tilaan',
	'chmod_desc' => 'Jotkut palvelimet vaativat ett� luodut tiedostot on CHMODattu tietyll� tapaa. Tyypilliset arvot ovat \'0644\' ja \'0755\'. �l� muuta t�t�, ellet tied� varmasti mit� olet tekem�ss�.',
	'header_uploads' => 'Palvelimelle latauksen asetukset',
	'upload_path' => 'Palvelimelle latauksen hakemistopolku',	
	'upload_accept' => 'Hyv�ksytyt tiedostotyypit',			
	'upload_extension' => 'Oletustiedostotarkennin',
	'upload_save_mode' => 'Kirjoita p��lle',
	'make_safe' => 'Siisti tiedostonimi',
	'c_upload_save_mode' => 'Kasvata tiedostonnime�',
	'max_filesize' => 'Enimm�iskoko',
	'header_datetime' => 'P�iv�/Aika',
	'timeoffset_unit' => 'Aikayksikk�',
	'timeoffset' => 'Aika-asetus',
	'header_extra' => 'Erin�iset asetukset',
	'wysiwyg' => 'K�yt� Wysiwyg editoria',
	'wysiwyg_desc' => 'M��ritt�� onko wysiwyg-editori oletuksena k�yt�ss�. Kukin k�ytt�j� voi muuttaa t�t� omassa \'Omat asetukset\' valintaikkunassaan.',
	'basic_view' => 'K�yt� normaalia n�kym��',
	'basic_view_desc' => 'M��ritt�� aukeaako \'Uusi kirjoitus\' normaalissa vai laajennetussa n�kym�ss�.',
	'def_text_processing' => 'Oletustekstinmuokkaus', 
	'text_processing' => 'Tekstinmuokkaus',
	'text_processing_desc' => 'M��ritt�� oletustekstinmuokkauksen, kun k�ytt�j�ll� ei ole wysiwyg-editori k�yt�ss��n \'Muunna rivinvaihdot\' muuttaa rivinvaihdot &lt;br&gt;-tagiksi. <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> on arvostettu, silti helposti opittavissa oleva merkkaustyyli.',
	'none' => 'Ei mit��n',
	'convert_br' => 'Muunna rivinvaihdot &lt;br /&gt;',
	'textile' => 'Textile',

	'allowed_cats' => 'Sallitut kategoriat',
	'allowed_cats_desc' => 'T�ll� k�ytt�j�ll� on oikeus kirjoittaa mainittuihin kategorioihin',
	'delete_user' => "Poista k�ytt�j�",
	'delete_user_desc' => "Voit halutessasi poistaa t�m�n k�ytt�j�n. Kaikki l�hetty dokumentaatio s�ilyy, mutta he eiv�t voi en�� kirjautua sis��n",
	'delete_user_confirm' => 'Olet poistamassa k�ytt�j�� %s. Haluatko varmasti tehd� niin?',
	
	'setup_ping' => 'Ping asetukset',
	'ping_use' => 'L�het� ping trackereille',
	'ping_use_desc' => 't�m� valinta m��ritt�� ilmoitetaanko trackereille kuten weblogs.com, kun teet uuden kirjauksen. Palvelut kuten blogrolling.com ovat riippuvaisia n�ist� pingauksista',	
	'ping_urls' => 'URLit, joille ping l�hetet��n',
	'ping_urls_desc' => 'Voit sy�tt�� useampia osoitteita, joihin p�ivitys ilmoitetaan. �l� sy�t� http:// -osaa osoitteesta, muutoin osoite ei toimi. Laita jokainen palvelin uudelle riville, tai erota ne | (pystyviiva) -merkill�. Palvelimia ovat esim:<br /><b>rpc.weblogs.com/RPC2</b> (weblogs.com pinger)<br /><b>pivotlog.net/pinger</b> (pivotlog pinger)<br /><b>rcs.datashed.net/RPC2</b> (euro.weblogs.com pinger)<br /><b>ping.blo.gs</b> (blo.gs pinger)<br />',

	'setup_tb' => 'Trackback asetukset',
	'tb_password' => 'Salasana',
	'tb_password_desc' => 'T�t� salasanaa k�ytet��n Trackbackien poistamisessa. Mik�li sit� ei aseteta, Trackbackien poisto ei ole k�ytett�viss�',
	'tb_email' => 'S�hk�postiosoite',
	'tb_email_desc' => 'Jos asetat s�hk�postiosoitteen t�h�n, niin s�hk�postitiedote l�hetet��n kyseiseen osoitteeseen, kun Trackback lis�t��n.',
	'tb_rss' => 'Luo RSS-sy�te Trackbackeille',

	'new_window' => 'Avaa linkit uudessa ikkunassa',
	'emoticons' => 'K�yt� hymi�it�',
	'javascript_email' => 'Muunna s�hk�postiosoite?',	
	'new_window_desc' => 'M��ritt�� aukeavatko linkit uudessa selainikkunassa.',

	'mod_rewrite' => 'K�yt� Mod_rewrite',
	'mod_rewrite_desc' => 'Jos k�yt�ss� on Apachen Mod_rewrite valinta, Pivot tekee urlit t�h�n tapaan www.mysite.com/archive/2003/05/30/nice_weather, t�llaisen sijasta www.mysite.com/pivot/entry.php?id=134. Kaikki palvelimet eiv�t tue em. ominaisuutta, joten lue tarvittaessa manuaalia.',

	'search_index' => 'P�ivit� hakuindeksi automaattisesti',
	'search_index_desc' => 'M��ritt�� p�ivitet��nk� hakuindeksi joka kerta, kun uusi kirjoitus lis�t��n.',

	'default_allow_comments' => 'Kommentit sallitaan oletuksena',
	'default_allow_comments_desc' => 'M��ritt�� onko kirjoitukset asetettu sallimaan kommentit vai ei.',	

  'maxhrefs' => 'Linkkien lukum��r�',
  'maxhrefs_desc' => 'Linkkien enimm�ism��r� kommenteissa. K�yt�nn�llinen toiminto, kun haluat p��st� eroon kommenttisp�mm�reist�. 0 tarkoittaa rajoittamatonta m��r�� linkkej�.',
  'rebuild_threshold' => 'Uudelleentekokynnys',
  'rebuild_threshold_desc' => 'Sekuntim��r�, jonka uudelleentekeminen saa kest��, ennen kuin Pivot p�ivitt�� sivun. Oletus on 28, mutta mik�li uudelleenteossa on ongelmia, yrit� asettamalla arvoksi 10.',
	'default_introduction' => 'Oletus Johdanto/Leip�teksti',
	'default_introduction_desc' => 'T�m� m��ritt�� uusien kirjoitusten johdanto- ja leip�tekstiosioiden oletusarvon. Normaalisti t�m� on tyhj� kappale.',

	'upload_autothumb'	=> 'Automaattiset thumbnail-kuvat',
	'upload_thumb_width' => 'Thumbnail-kuvan leveys',
	'upload_thumb_height' => 'Thumbnail-kuvan korkeus',
	'upload_thumb_remote' => 'Kuvanrajausskripti et�n�',
	'upload_thumb_remote_desc' => 'Jos palvelimellasi ei ole asennettuna tarvittavia ohjelmakirjastoja kuvien rajauksen suorittamiseksi, voit k�ytt�� tarvittavaa skripti� et�n�.',

	'extensions_header' => 'Laajennushakemisto',
	'extensions_desc'   => 'Laajennushakemistoon talletetaan Pivotiin tehtyj� lis�osia.
		T�m� helpottaa p�ivitt�mist� huomattavasti. Lue ohjekirjat aiheesta.',
	'extensions_path'   => 'Laajennusten hakemistopolku',

);


//		Weblog Config	\\
$lang['weblog_config'] = array (
	'edit_weblog' => 'Muokkaa blogia',
	'edit_blog' => 'Muokkaa blogeja',
	'new_weblog' => 'Uusi blogi',
	'new_weblog_desc' => 'Lis�� uusi blogi',
	'del_weblog' => 'Poista blogi',
	'del_this_weblog' => 'Poista t�m� blogi.',
	'create_new' => 'Luo uusi blogi',
	'subw_heading' => 'Voit m��ritt�� blogiosioissa k�ytett�v�t valmiit asettelumallit sek� niiss� julkaistavat kategoriat',
	'create' => 'Valmis',
	
	'create_1' => 'Luo / Muokkaa blogia, vaihe 1 / 3',
	'create_2' => 'Luo / Muokkaa blogia, vaihe 2 / 3',
	'create_3' => 'Luo / Muokkaa blogia, vaihe 3 / 3',

	'name' => 'Blogin nimi',
	'payoff' => 'Esittely',
	'payoff_desc' => 'Esittely� voit k�ytt�� joko otsikkona tai lyhyen� kuvauksena blogistasi.',
	'url' => 'Blogin url-osoite',
	'url_desc' => 'Pivot m��ritt�� blogin url-osoitteen, mik�li kentt� j�tet��n tyhj�ksi. Jos k�yt�t blogia osana sivustoasi, tai palvelinpuolen lisukkeena, voit k�ytt�� t�t� osoitteen valintamahdollisuutta.',
	'index_name' => 'Etusivu(hakemisto)',
	'index_name_desc' => 'Index- eli etusivu(hakemisto)-tiedoston nimi. Normaalisti se on \'index.html\', \'index.php\' tai vastaava.',

	'ssi_prefix' => 'SSI Prefix',
	'ssi_prefix_desc' => 'Jos blogisi k�ytt�� SSI:t� (ei suositella), voit k�ytt�� t�t� fixaamaan Pivotin tiedostonimet SSI:n k�ytt�m�ll� tiedostonimell�, esim. \'index.shtml?p=\'. T�m� kohta tulisi j�tt�� tyhj�ksi, ellet ole varma mit� teet.',

	'front_path' => 'Etusivun hakemistopolku',
	'front_path_desc' => 'Suhteellinen tai absoluuttinen polku hakemistoon, jonne Pivot tekee blogin etusivun.',
	'file_format' => 'Tiedostonimi',
	'entry_heading' => 'Kirjoitusasetukset',
	'entry_path' => 'Kirjoitusten hakemisto',
	'entry_path_desc' => 'Suhteellinen tai absoluuttinen polku hakemistoon, jonne Pivot laittaa yksitt�iset kirjoitussivut  (ellet k�yt� toimintoa \'live entries\')',
	'live_comments' => 'Live entries',
	'live_comments_desc' => 'Jos k�yt�t toimintoa \'Live entries\', Pivotin ei tarvitse luoda tiedostoja joka ainoalle kirjoitukselle. Live entryj� suositellaan.',
	'readmore' => '\'Lue lis��\' Teksti',
	'readmore_desc' => 'Teksti, jota n�ytet��n osoittamaan, ett� kaikki teksti ei ole n�kyviss� etusivulla.. Jos j�t�t t�m�n tyhj�ksi, Pivot k�ytt�� kielivalinnoissa m��ritelty� oletusarvoa',
	
	'arc_heading' => 'Arkistoasetukset',
	'arc_index' => 'Arkiston indeksitiedosto',
	'arc_path' => 'Arkiston hakemistopolku',
	'archive_amount' => 'Arkiston lukum��r�',
	'archive_unit' => 'Arkistotyyppi',
	'archive_format' => 'Arkistomuoto',
	'archive_none' => 'Ei arkistoa',
	'archive_weekly' => 'Viikottaiset arkistot',
	'archive_monthly' => 'Kuukausittaiset arkistot',
	'archive_yearly' => 'Vuosittaiset arkistot',

	'archive_link' => 'Arkistolinkki',
	'archive_linkfile' => 'Arkistolistausmuotoilu',	
	'archive_order' => 'Arkiston j�rjestys',
	'archive_ascending' => 'Nouseva (vanhin ensin)',
	'archive_descending' => 'Laskeva (uusin ensin)',

	'templates_heading' => 'Vakioasettelumallit',
	'frontpage_template' => 'Etusivun asettelumalli',
	'frontpage_template_desc' => 'Asettelumalli, joka m��ritt�� blogin etusivun asettelun.',
	'archivepage_template' => 'Arkistosivun asettelumalli',
	'archivepage_template_desc' => 'Asettelumalli, joka m��ritt�� arkistosivun asettelun. Voi olla sama kuin \'Etusivun asettelumalli\'.',	
	'entrypage_template' => 'Kirjoitussivun asettelumalli',
	'entrypage_template_desc' => 'Asettelumalli, joka m��ritt�� yksitt�isten kirjoitusten sivuasettelun.',	
	'extrapage_template' => 'Lis�asettelumalli',
	'extrapage_template_desc' => 'Asettelumalli, joka m��ritt�� milt� arkisto ja search.php -hakutoiminto n�ytt�v�t.',

	'shortentry_template' => 'Lyhennelmien asettelumalli',
	'shortentry_template_desc' => 'Asettelumalli, joka m��ritt�� yksitt�isten kirjoitusten asettelun sellaisena kuin ne n�kyv�t osana blogia tai arkistoa.',	
	'num_entries' => 'Kirjoitusten lukum��r�',
	'num_entries_desc' => 'T�m�n blogiosion kirjoitusten lukum��r�, joka n�ytet��n blogin etusivulla.',	
	'offset' => 'Offset',
	'offset_desc' => 'Mik�li asetettu numeroksi, kyseinen m��r� kirjoituksia ohitetaan sivua luotaessa. T�t� voidaan k�ytt�� luotaessa esim. \'Aiemmat kirjoitukset\' listaa.',
	'comments' => 'Salli kommentit?',
	'comments_desc' => 'M��ritt�� voivatko lukijat j�tt�� kommentteja t�h�n blogin osaan.',	

	'publish_cats' => 'Julkaise n�m� kategoriat',

	'setup_rss_head' => 'RSS ja Atom -asetukset',
	'rss_use' => 'Luo sy�tteet',
	'rss_use_desc' => 'M��ritt�� luoko Pivot automaattisesti RSS- ja Atom-sy�tteet t�lle blogille.',
	'rss_filename' => 'RSS tiedostonimi',
	'atom_filename' => 'Atom tiedostonimi',
	'rss_path' => 'Sy�tehakemisto',
	'rss_path_desc' => 'Suhteellinen tai absoluuttinen polku hakemistoon, jonne Pivot luo sy�tetiedostot.',
//	'rss_size' => 'Sy�tteen pituus',	/* DEPRECATED */
//	'rss_size_desc' => 'Sy�tekirjoituksen pituus (kirjaimina)', /* DEPRECATED */
	'rss_full' => 'Luo t�ydet sy�tteet',
	'rss_full_desc' => 'M��ritt�� luoko Pivot t�ydet Atom- ja RSS-sy�tteet. Mik�li asetus on \'ei\' Pivot luo sy�tteet, jotka sis�lt�v�t vain lyhyet kuvaukset, tehden sy�tteet v�hemm�n k�ytt�kelpoisiksi.',
	'rss_link' => 'Sy�telinkki',
	'rss_link_desc' => 'Linkki l�hetett�v�ksi sy�tteen mukana osoittamaan p��sivulle. Mik�li j�t�t t�m�n kohdan tyhj�ksi, Pivot l�hett�� linkin, joka osoittaa blogin etusivulle.',
	'rss_img' => 'Sy�tekuva', 
	'rss_img_desc' => 'Voit m��ritt�� kuvan l�hetett�v�ksi sy�tteen mukana. Jotkin lukuohjelmat n�ytt�v�t t�m�n kuvan sy�tteen mukana. J�t� tyhj�ksi, tai anna tarkka urli.',
	
	'lastcomm_head' => 'Viimeisten kommenttien asetukset',
	'lastcomm_amount' => 'Montako n�ytet��n',
	'lastcomm_length' => 'Katkaise pituuteen',
	'lastcomm_format' => 'Muoto',
	'lastcomm_format_desc' => 'N�m� asetukset m��r��v�t \'Viimeiset kommentit\' -osion asetukset blogin etusivulla',
	'lastcomm_nofollow' => 'K�yt� \'Nofollow\'',
	'lastcomm_nofollow_desc' => 'Viittaussp�mmi� (refererspam) vastaan  voit valita lis�tt�v�ksi rel="nofollow" attribuutin kaikkiin kommentti- ja viittauslinkkeihin. T�m�n pit�isi omalta osaltaan est�� sp�mm��j�� saamasta ansiotonta arvonnousua Googlen hakutuloksissa.',

	'lastref_head' => 'Viimeiset viittaajat -asetukset',
	'lastref_amount' => 'Montako n�ytet��n',
	'lastref_length' => 'Katkaise pituuteen',
	'lastref_format' => 'Muoto',
	'lastref_format_desc' => 'N�m� asetukset m��ritt�v�t \'Viimeiset viittaukset\' -osion asettelun etusivulla.',
	'lastref_graphic' => 'K�yt� kuvakkeita',
	'lastref_graphic_desc' => 'T�m� m��ritt�� sen, n�ytet��nk� Viimeiset viittaukset -osiossa pienet ikonit niille tyypillisille hakukoneille, joiden kautta blogiin on tultu.',
	'lastref_redirect' => 'Uudelleenohjaa viittaajat',
	'lastref_redirect_desc' => 'Viittaussp�mmi� vastaan voit uudelleenohjata viittaajaan osoittavat linkit. T�m�n pit�isi omalta osaltaan est�� sp�mm��j�� saamasta ansiotonta arvonnousua Googlen hakutuloksissa.',

	'various_head' => 'Sekalaiset asetukset',
	'emoticons' => 'K�yt� hymi�it�',
	'emoticons_desc' => 'M��ritt�� muutetaanko hymi�t kuten :-) graafisiksi.',
	'encode_email_addresses' => 'Muunna s�hk�postiosoite',
	'encode_email_addresses_desc' => 'M��ritt�� k�ytet��nk� javascripti� suojelemaan s�hk�postiosoitettasi yksityisyytt� roskapostiharavoijilta.',
	'target_blank' => 'Target Blank',
	'xhtml_workaround' => 'XHTML Workaround',
	'target_blank_desc' => 'Mik�li valitset \'Kyll�\', kaikki kirjoituksissa olevat linkit aukeavat uuteen ikkunaan. Mik�li valintasi on \'XHTML workaround\', kaikki linkit sis�lt�v�t rel="external" attribuutin, jolloin ei rikota oikeinmuotoiltua XHTML:��',

	'date_head' => 'P�iv�m��r�asetukset',
	'full_date' => 'T�ydellinen p�iv�m��r�',
	'full_date_desc' => 'T�m� m��ritt�� asetukseksi t�yden p�iv�m��r�n ja kellonajan. K�ytet��n yksitt�iskirjoitussivun yl�osassa',
	'entry_date' => 'Kirjoitusp�iv�',
	'diff_date' => 'Diff Date',
	'diff_date_desc' => '\'Diff Date\'ta k�ytet��n useimmiten \'Kirjoitusp�iv�n\' yhteydess�. \'Kirjoitusp�iv�\' n�ytet��n jokaisen kirjoituksen yhteydess�, kun taas \'Diff Date\' n�ytet��n ainoastaan, jos se eroaa edellisest� kirjoituksesta.',
	'language' => 'Kieli',
	'language_desc' => 'Kieli m��r�� numeroiden ja p�iv�m��rien ulkoasun, ja my�s sivun kielikoodauksen (kuten esimerkiksi iso-8859-1 tai koi8-r).',	

	'comment_head' => 'Kommentointiasetukset',
	'comment_sendmail' => 'L�het� postia?',
	'comment_sendmail_desc' => 'Kun joku on kommentoinut, niin blogin yll�pit�j�lle voidaan l�hett�� siit� tieto s�hk�postilla.',
	'comment_emailto' => 'Osoitteeseen',
	'comment_emailto_desc' => 'M��rit� s�hk�postiosoitteet, johon posti l�hetet��n. Erota osoitteet toisistaan pilkulla, mik�li annat useamman kuin yhden osoitteen.',
	'comment_texttolinks' => 'Tee linkit',
	'comment_texttolinks_desc' => 'M��rit� tehd��nk� kirjoitetuista www-osoitteista ja s�hk�postiosoitteista suoraan klikattavia hyperlinkkej�.',
	'comment_wrap' => 'Kommenttien tasoitusraja',
	'comment_wrap_desc' => 'Asettelusi suojaamiseksi pitk�t merkkijonot tasataan tietyn merkkim��r�n j�lkeen.',
	'comments_text_0' => 'teksti n�kym�lle \'Ei kommentteja\'',
	'comments_text_1' => 'teksti n�kym�lle \'yksi kommentti\'',
	'comments_text_2' => 'teksti n�kym�lle \'X kommenttia\'',
	'comments_text_2_desc' => 'Tekstit, jotka osoittavat olemassaolevien kommenttien lukum��r�n. Jos j�t�t n�m� tekstikohdat tyhjiksi, niin Pivot k�ytt�� n�kyviss� olevia oletusasetuksia',

	'comment_pop' => 'Ponnahtavat kommentit?',
	'comment_pop_desc' => 'm��ritt�� n�ytet��nk� kommenttisivu (tai \'yksitt�inen kirjoitus\') ponnahdusikkunassa, vai alkuper�isess� selainikkunassa.',
	'comment_width' => 'Ponnahdusikkunan leveys',
	'comment_height' => 'Ponnahdusikkunan korkeus',
	'comment_height_desc' => 'Anna (pikselein�) kommenttiponnahdusikkunan leveys ja korkeus.',
			
	'comment_format' => 'Kommenttien muotoilu',
	'comment_format_desc' => 'M��ritt�� kommenttien muotoilun kirjoitussivulla.',

	'comment_reply' => "Muokkaa teksti� 'vastaa ..'",
	'comment_reply_desc' => "M��ritt�� vierailijoiden k�yt�ss� olevien vastauslinkkien muotoilun, kun he vastaavat tiettyyn kommenttiin.",
	'comment_forward' => "Muokkaa teksti� 'vastaa kommenttiin ..'",
	'comment_forward_desc' => "M��ritt�� sen tekstin muotoilun, joka n�ytet��n, kun kommenttiin vastataan toisella kommentilla.",
	'comment_backward' => "Muokkaa teksti� 'vastauksena ..'",
	'comment_backward_desc' => "M��ritt�� sen tekstin muotoilun, joka n�ytet��n, kun kommentti on vastaus toiseen kommenttiin.",
	
	'comment_textile' => 'Salli Textile',
	'comment_textile_desc' => 'Mik�li asetettu \'Kyll�\', vierailijat voivat k�ytt�� <a href="http://www.textism.com/tools/textile/" target="_blank">Textilea</a> kommenteissaan.',

	'saved_create' => 'Uusi blogi on luotu.',
	'saved_update' => 'Blogi on p�ivitetty.',
	'deleted' => 'Blogi on poistettu.',
	'confirm_delete' => 'Olet poistamassa blogin %1. Haluatko todellakin poistaa sen?',	

	'blogroll_heading' => 'Blogroll-asetukset',
	'blogroll_id' => 'Blogrolling ID-tunnus',
	'blogroll_id_desc' => 'Voit halutessasi sis�llytt�� <a href="http://www.blogrolling.com" target="_blank">blogrolling.com</a> blogrollin blogiisi. Blogrollingin avulla pid�t linkkilistaa, josta n�et milloin linkkisi viimeksi p�ivittyiv�t. Mik�li et halua kyseist� palvelua, niin voit ohittaa n�m� valintakohdat. Muussa tapauksessa: Kun olet kirjautuneena blogrolling.comiin, mene \'get code\' -kohtaan, l�yd�t sielt� linkit, jotka sis�lt�v�t sinun blogroll ID -tunnuksesi. Sen pit�isi n�ytt�� suunnilleen t�lt�: 2ef8b42161020d87223d42ae18191f6d',
	'blogroll_fg' => 'Tekstin v�ri',
	'blogroll_bg' => 'Taustav�ri',
	'blogroll_line1' => 'Rivi v�ri 1',
	'blogroll_line2' => 'Rivi v�ri 2',
	'blogroll_c1' => 'V�ri 1',
	'blogroll_c2' => 'V�ri 2',
	'blogroll_c3' => 'V�ri 3',
	'blogroll_c4' => 'V�ri 4',
	'blogroll_c4_desc' => 'N�m� v�rit m��r��v�t sen milt� blogrollisi n�ytt��. V�rit yhdest� nelj��n osoittavat visuaalisesti sen kauanko linkin p�ivittymisest� on kulunut aikaa.',
);


$lang['upload'] = array (
	//		File Upload		\\
	'preview' => 'Koko listan esikatselu',
	'thumbs' => 'Thumbnail esikatselu',
	'create_thumb' => '(Luo Thumbnail)',
	'title' => 'Tiedostot',
	'thisfile' => 'Lataa palvelimelle uusi tiedosto:',
	'button' => 'Lataa',
	'filename' => 'Tiedoston nimi',
	'thumbnail' => 'Thumbnail',
	'date' => 'Pvm',
	'filesize' => 'Tiedoston koko',
	'dimensions' => 'Leveys x Korkeus',		
	'delete_title' => 'Poista kuva',
	'areyousure' => 'Haluatko varmasti poistaa tiedoston %s?',
	'picheader' => 'Poista t�m� tiedosto?',
	'create' => 'luo',
	'edit' => 'muokkaa',

	'insert_image' => 'Lis�� kuva',
	'insert_image_desc' => 'Lis�t�ksesi kuvan, siirr� kuva palvelimelle, tai valitse aiemmin siirretty kuva.',
	'insert_image_popup' => 'Lis�� kuvalle ponnahdusikkuna',
	'insert_image_popup_desc' => 'Lis�t�ksesi kuvalle ponnahdusikkunan, siirr� kuva palvelimelle, tai valitse jo aiemmin siirretty kuva. Valitse sen j�lkeen teksti tai thumbnail-kuva, joka laukaisee ponnahdusikkunan.',
	'choose_upload' => 'siirr�',
	'choose_select' => 'tai valitse',
	'imagename' => 'kuvan nimi',
	'alt_text' => 'Vaihtoehtoinen teksti',
	'align' => 'Keskit�',
	'border' => 'Reunus',
	'pixels' => 'pikseli�',
	'uploaded_as' => 'Tiedostosi on siirretty nimell� \'%s\'.',
	'not_uploaded' => 'Tiedostoa ei siirretty, koska siirrossa ilmeni seuraavat virheet:',
	'center' => 'Keskelle (oletus)',
	'left' => 'Vasemmalle',
	'right' => 'Oikealle',
	'inline' => 'Sis�kk�in',		
	'notice_upload_first' => 'Sinun pit�� ensin valita tai siirt�� kuva',
	'select_image' => 'Valitse kuva',
	'select_file' => 'Valitse tiedosto',

	'for_popup' => 'Ponnahdusikkunaan',		
	'use_thumbnail' => 'K�yt� Thumbnail-kuvaa',		
	'edit_thumbnail' => 'Muokkaa Thumbnail-kuvaa',		
	'use_text' => 'K�yt� teksti�',		
	'insert_download' => 'Lis�� ladattava',
	'insert_download_desc' => 'Ladataksesi tiedoston, siirr� ensin tiedosto, tai k�yt� jo siirretty� tiedostoa. Sitten valitse haluatko kuvakkeen, tekstin vai thumbnail-kuvan painalluksen k�ynnist�v�n latauksen.',
	'use_icon' => 'K�yt� kuvaketta',
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => 'Lis�� linkki',
	'insert_link_desc' => 'Lis�� linkki kirjoittamalla url-osoite alla olevaan kentt��n. Vierailijat n�kev�t nimikkeen, kun kuljettavat hiirt��n linkin ylitse.',
	'url' => 'URL',
	'title' => 'Nimike',
	'text' => 'Teksti',
);


//		Categories		\\
$lang['category'] = array (
	'edit_who' => 'Muokkaa kuka voi kirjoittaa kategoriaan \'%s\'',
	'name' => 'Nimi',
	'users' => 'K�ytt�j�t',
	'make_new' => 'Luo uusi kategoria',
	'create' => 'Luo kategoria',
	'canpost' => 'Valitse k�ytt�j�t, joille haluat antaa oikeudet kirjoittaa t�h�n kategoriaan',
	'same_name' => 'T�m�nniminen kategoria on jo olemassa',
	'need_name' => 'T�m� kategoria t�ytyy nimet�',
	
	'allowed' => 'Sallittu',
	'allow' => 'Salli',
	'denied' => 'Ev�tty',
	'deny' => 'Ep��',
	'edit' => 'Muokkaa kategoriaa',
	
	'delete' => 'Poista kategoria',
	'delete_desc' => 'Valitse \'kyll�\', mik�li haluat poistaa t�m�n kategorian',

	'delete_message' => 'Pivotin t�ss� versiossa vain kategorian nimi poistetaan. My�hemmiss� versioissa voit itse valita mit� tehd� t�m�n kategorian kirjoituksille.',
	'search_index_newctitle'   => 'Indeksoi t�m� kategoria',
	'search_index_newcdesc'    => 'Valitse \'Ei\' ainoastaan mik�li et halua sis�llytt�� hakutuloksiin t�m�n kategorian kirjoituksia.',
	'search_index_editcheader' => 'Indeksoi kategoria',
	
	'order' => 'Lajitteluj�rjestys',
	'order_desc' => 'Alemman lajitteluj�rjestyksen kategoriat n�kyv�t korkeammalla tuloksissa. Mik�li kaikki numerot ovat samansuuruiset, tulokset j�rjestet��n aakkosten mukaan',
	'public' => 'Julkinen kategoria',
	'public_desc' => 'Jos valitset \'Ei\', kategoriaa voivat katsella vain rekister�ityneet k�ytt�j�t. (koskee vain live pages -sivuja)',
	'hidden' => 'Piilotettu kategoria',
	'hidden_desc' => 'Mik�li valitset \'Kyll�\', t�m� kategoria pysyy piilossa arkistoinneilta. (koskee vain live pages -sivuja)',
		
);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "Lis�� kirjoitus",
	'preview_entry' => "Esikatsele",

	'first' => 'ensimm�inen',
	'last' => 'viimeinen',
	'next' => 'seuraava',
	'previous' => 'edellinen',

	'jumptopage' => 'mene sivulle (%num%)',
	'filteron' => 'suodatin (%name%)',
	'filteroff' => 'suodatin ei k�yt�ss�',
	'title' => 'Otsikko',
	'subtitle' => 'Alaotsikko',
	'introduction' => 'Johdanto',
	'body' => 'Leip�teksti',
	'publish_on' => 'Julkaisupvm',
	'status' => 'Tila',
	'post_status' => 'Kirjoituksen tila',
	'category' => 'Kategoria',
	'select_multi_cats' => '(Ctrl-n�pp�in pohjassa voit valita useampia kategorioita)',
	'last_edited' => "Muokattu viimeksi",
	'created_on' => "Luotu",		
	'date' => 'Pvm',
	'author' => 'Kirjoittaja',
	'code' => 'Koodi',
	'comm' => 'Kommenttien m��r�',
	'name' => 'Nimi',
	'allow_comments' => 'Salli kommentit',

	'delete_entry' => "Poista kirjoitus",
	'delete_entry_desc' => "Poista t�m� kirjoitus ja siihen kuuluvat kommentit",
	'delete_one_confirm' => "Haluatko nyt ihan toden totta varmasti todellakin poistaa t�m�n kirjoituksen?",
	'delete_multiple_confirm' => "Halauatko varmasti poistaa n�m� kirjoitukset?",
	
	'convert_lb' => 'Muunna rivinvaihdot',
	'always_off' => '(T�m� on aina pois p��lt�, kun olet Wysiwyg-tilassa)',
	'be_careful' => '(Nyt kannattaa olla tarkkana!)',
	'edit_comments' => 'Muokkaa kommentteja',
	'edit_comments_desc' => 'Muokkaa t�m�n kirjoituksen kommentteja',
	'edit_comment' => 'Muokkaa kommenttia',
	'delete_comment' => 'Poista kommentti',
	'block_single' => 'Est� IP-osoite %s',
	'block_range' => 'Est� IP-osoitteet v�lilt� %s',
	'unblock_single' => 'Poista esto IP-osoitteelta %s',
	'unblock_range' => 'Poista estot IP-osoitteilta %s',
	'trackback' => 'Trackback pingaamalla',
	'trackback_desc' => 'Trackbackaa seuraavat url-osoitteet pingaamalla. Trackbackataksesi useampia osoitteita, lis�� kukin omalle rivilleen.',
	'keywords' => 'Avainsanat',
	'keywords_desc' => 'K�yt� t�t� asettaaksesi avainsanoja, joiden avulla hakukoneiden on helpompi l�yt�� t�m� kirjoitus, tai asettaaksesi k�ytt�kelpoisemman url-osoitteen kirjoitukselle',
	'vialink' => "Linkin kautta",
	'viatitle' => "Nimikkeen kautta",
	'via_desc' => 'K�yt� t�t� lis�t�ksesi linkki kirjoituksen alkuper��n.',
	'entry_catnopost' => 'Sinulla ei ole oikeuksia kirjoittaa kategoriaan:\'%s\'.',
	'entry_saved_ok' => 'Kirjoituksesi \'%s\' tallennus onnistui.',
	'entry_ping_sent' => 'Trackbackpingaus on l�hetetty kohteeseen \'%s\'.',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => 'Valitse kaikki',
	'c_none' => 'Poista valinta kaikista',
	'choose' => '- valitse vaihtoehto -',
	'publish' => 'Aseta tilaksi \'julkaise\'',
	'hold' => 'Aseta tilaksi \'odottaa julkaisua\'',
	'delete' => 'Poista ne',
	'generate' => 'Julkaise ja luo',

	'with_checked_entries' => "Valituille kirjoituksille, tee:",
	'with_checked_files' => "Valituille tiedostoille, tee:",
	'with_checked_templates' => 'Valituille asettelumalleille, tee:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => 'ei voi avata hakemistoa, tarkista oikeutesi.',
	'path_read' => 'ei voi lukea hakemistosta, tarkista oikeutesi.',
	'path_write' => 'ei voi kirjoittaa hakemistoon, tarkista oikeutesi.',

	'file_open' => 'ei voi avata tiedostoa, tarkista oikeutesi.',
	'file_read' => 'ei voi lukea tiedostoa, tarkista oikeutesi.',
	'file_write' => 'ei voi kirjoittaa tiedostoon, tarkista oikeutesi.',
);


//		Notices			\\
$lang['notice'] = array (		
	'comment_saved' => "Kommentti on talletettu.",
	'comment_deleted' => "Kommentti on poistettu.",
	'comment_none' => "T�t� kirjoitusta ei ole kommentoitu.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => 'Arvostele \'%val%\' kirjoitus',
	'good' => 'Hyv�',
	'bad' => 'Huono',
	'already' => 'Olet jo ��nest�nyt t�t� kirjoitusta tai t�ss� ��nestyksess�',
	'register' => '��nesi \'%val%\' on rekister�ity',
);


$lang['comment'] = array (
	'register' => 'Kommenttisi on talletettu.',
	'preview' => 'Esikatselet kommenttiasi. Muista klikata \'Lis�� kommentti\' tallettaaksesi kommentin.',
	'duplicate' => 'Kommenttiasi ei talletettu, koska se n�ytt�� olevan kopio aiemmasta kirjoituksesta',
	'no_name' => 'Kirjoita nimesi (tai alias) \'nimi\'-kentt��n. Muista klikata \'Lis�� kommentti\' tallettaaksesi sen pysyv�sti.',
	'no_comment' => 'Kirjoita jotain \'kommentoi\'-kentt��n. Muista klikata \'Lis�� kommentti\' tallettaaksesi sen pysyv�sti.',
    'too_many_hrefs' => 'Sallittu linkkien maksimim��r� ylittyi. Lopeta sp�mm�ys.',
);


$lang['comments_text'] = array (
	'0' => "Ei kommentteja",
	'1' => "%num% kommentti",
	'2' => "%num% kommenttia",
);


$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "Arkisto",
	'next_archive' => "Seuraava arkisto",
	'previous_archive' => "Edellinen arkisto",
	'last_comments' => "Viimeisimm�t kommentit",
	'last_referrers' => "Viimeisimm�t viittaajat",
	'calendar' => "Kalenteri",
	'links' => "Linkit",
	'xml_feed' => "XML: RSS Feed",
	'atom_feed' => "XML: Atom Feed",
	'powered_by' => "Powered by",
	'name' => "Nimi",
	'email' => "S�hk�posti",
	'url' => "URL",
	'date' => "Pvm",		
	'comment' => "Kommentti",
	'ip' => "IP-osoite",		
	'yes' => "Kyll�",
	'no' => "Ei",
	'emoticons' => "Hymi�t",
	'emoticons_reference' => "Avaa hymi�t-hakemisto",
	'textile' => "Textile",
	'textile_reference' => "Avaa Textile-hakemisto",
	'post_comment' => "Lis�� kommentti",
	'preview_comment' => "Esikatsele kommenttia",
	'remember_info' => "Muista henkil�kohtaiset tiedot?",
	'notify' => "Muistuta",
	'notify_yes' => "Kyll�, l�het� s�hk�postia, kun kirjoitukseeni vastataan tai sit� kommentoidaan.",
	'register' => "Rekister�i k�ytt�j�nimesi / Kirjaudu",
	'disclaimer' => "<b>Pienell� painettua:</b> Kaikki html-tagit paitsi &lt;b&gt; and &lt;i&gt; poistetaan kommenteista. Klikattavat linkit tehd��n automaattisesti lis�tess�si url- tai s�hk�postiosoitteen.",	
	'search_title' => "Hakutulokset",
	'search' => "Hae!",
	'nomatches' => "Ei l�ytynyt yht�� osumaa haulle '%name%'. Kokeile jotain toista hakutermi�.",
	'matches' => "Osumia haulle '%name%':",
	'about' => "Esittely",
	'stuff' => "Jutskat",
	'linkdump' => "Linkkiloota",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Muokkaa k�ytt�j�kentti�',
	'edit' => 'Muokkaa',
	'create' => 'Luo',

	'dispname' => 'N�yt� nimi',
	'intname' => 'Sis�inen nimi',
	'intname_desc' => 'Sis�inen nimi on t�m�n kohteen nimi sellaisena kuin se n�kyy, kun m��rit�t Pivotin n�ytt�m��n sen asettelumallissa.',
	'size' => 'Koko',
	'rows' => 'Rivit',
	'cols' => 'Sarakkeet',
	'maxlen' => 'Enimm�ispituus',
	'minlevel' => 'V�h. k�ytt�j�taso',	
	'filter' => 'Suodata',
	'filter_desc' => 'T�ll� suodatuksella rajoitat k�ytett�viss� olevaa sy�tetapaa',
	'no_filter' => 'Ei mit��n',
	'del_title' => 'Vahvista poisto',
	'del_desc' => 'Poistamalla k�ytt�j�kent�n (<b>%s</b>) tuhoat my�s kaikki tiedot, jotka k�ytt�j�t ovat siihen liitt�neet, ja teet my�s kaikki vastaavat kohdat asettelumallissa tyhjiksi.',	
	
	'already' => 'Nimi on jo k�yt�ss�',
	'int' => 'Sis�isen nimen tulee olla pidempi kuin kolme kirjainta',
	'short_disp' => 'N�ytt�nimen tulee olla pidempi kuin kolme kirjainta',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => '�lykk��t kirjanmerkit',
	'bm_add' => 'Lis�� kirjanmerkki.',
	'bm_withlink' => 'Piv � Uusi',
	'bm_withlink_desc' => 'T�m� kirjanmerkki avaa \'Uusi kirjoitus\' -ikkunan, ja kirjoitukseen lis�t��n automaattisesti sen sivun osoite, josta ikkuna avattiin.',

	'bm_nolink' => 'Piv � Uusi',
	'bm_nolink_desc' => 'T�m� kirjainmerkki avaa \'Uusi kirjoitus\' -ikkunan.',

	'bookmarklets_info' => 'Kirjanmerkkien avulla voit helposti lis�t� uuden kirjoituksen. Lis�t�ksesi kirjanmerkin selaimeesi, valitse joku seuraavista: (n�kyv� teksti voi vaihdella, riippuen k�ytt�m�st�si selaimesta)',
	'bookmarklets_info_1' => 'Klikkaa ja raahaa kirjanmerkki \'Linkit\'-ty�kaluriville tai selaimen \'Kirjanmerkit\'-painikkeeseen.',
	'bookmarklets_info_2' => 'Klikkaa hiiren oikealla painikkeella kirjanmerkin p��ll� ja valitse \'Lis�� suosikkeihin\', \'Bookmark link\' tms.',
);

// Accessibility - These are used for form fields, labels, fieldsets etc.
// for Web Content Accessibility Guidelines & 508 compliancy issues.
// see: http://bobby.watchfire.com/bobby/html/en/index.jsp
// JM =*=*= 2004/10/04
// 2004/11/25 =*=*= JM - minor correction for tim
$lang['accessibility'] = array(
	'search_idname'      => 'haku',
	'search_formname'    => 'Hae sivuston sis�ll�st�',
	'search_fldname'     => 'Kirjoita hakutermi[t] t�h�n:',
	'search_placeholder' => 'Sy�t� hakutermit',

	'calendar_summary'   => 'T�ss� kalenterissa on linkit kirjoituksiin asianomaisen p�iv�n kohdalla.',
	'calendar_noscript'  => 'Kalenterin auttaa sinua l�yt�m��n blogikirjoitukset',
	/* 
	2-kirjaiminen kielikoodi, osoittaa sivuston p��asiallisen kielen
	ks: http://www.oasis-open.org/cover/iso639a.html
	*/

	'lang' => $langname,
) ;


$lang['snippets_text'] = array (
    'word_plural'     => 'sanat',
    'image_single'    => 'kuva',
    'image_plural'    => 'kuvat',
    'download_single' => 'tiedosto',
    'download_plural' => 'tiedostot',
); 

$lang['trackback'] = array (
    'noid'      => 'Ei trackback-tunnusta (tb_id)',
    'nourl'     => 'Ei URL:ia (url)',
    'noping'    => 'Ei pingattua URL:ia',
    'tburl'     => 'Trackbackaa URL t�h�n kirjoitukseen',
    'delete'    => '[POISTA]',
    'yoursite'  => 'Onko t�m� sinun sivustosi?',
    'todelete'  => ' poistaaksesi pingit.',
    'login'     => 'Kirjaudu sis��n',
    'logout'    => 'Kirjaudu ulos',
    'sendping'  => 'L�het� ping',
    'unaut'     => 'Sinulla ei ole oikeuksia',
    'pinged'    => 'Ping l�hetettiin onnistuneesti',
    'notpinged' => 'Virhe: Ei voitu pingata URL:ia',
    'invalid'   => 'Kirjautuminen ep�onnistui',
    'disabled'  => 'Kirjautumista ei ole k�yt�ss�',
    'loggedout' => 'Uloskirjautunut',
    'tracked'   => 'Trackeroitu',
    'pass'      => 'Salasana',
    'email_subject' => '[Trackback] uusi trackback',
    'email_txt' => 'Uusi trackback j�tetty sivustoosi',
);

$lang['commentuser'] = array (
    'title'             => 'Pivot k�ytt�j�n sis��nkirjautuminen',
    'header'            => 'Kirjaudu sis��n rekister�ityneen� vierailijana',
    'logout'            => 'Kirjaudu ulos.',
    'loggedout'         => 'Uloskirjautunut',
    'login'             => 'Sis��nkirjautuminen',
    'loggedin'          => 'Sis��nkirjautuneena',
    'loggedinas'        => 'Sis��nkirjautuneena nimell�',
    'pass_forgot'       => 'Salasana unohtunut?',
    'register_new'      => 'Rekister�i uusi k�ytt�j�tunnus.',
    'register'          => 'Rekister�idy vierailijana',
    'register_info'     => 'T�yt� seuraavat tiedot. <strong>Anna omassa k�yt�ss�si oleva, toimiva s�hk�postiosoite</strong>, koska varmistuss�hk�posti l�hetet��n antamaasi s�hk�postiosoitteeseen.',
    'pass_note'         => 'Huom: T�m�n sivuston yll�pit�j� <br /> pystyy n�kem��n salasanasi.. Senp� takia <em>�l�</em> k�yt� samaa salasanaa<br /> joka on k�yt�ss�si muilla sivustoilla / tileill�!',
    'show_email'        => 'N�yt� s�hk�postiosoitteeni kommentti-osiossa',
    'notify'            => 'L�het� minulle ilmoitus s�hk�postitse uusista kirjoituksista',
    'def_notify'        => 'Oletusilmoitus vastauksista',
    'register'          => 'Rekister�idy',
    'pass_invalid'      => 'V��r� salasana',
    'nouser'            => 'Tuollaista k�ytt�j�� ei ole olemassakaan..',
    'change_info'       => 'T�st� voit muuttaa tietojasi.',
    'pref_edit'         => 'Muokkaa asetuksiasi',
    'pref_change'       => 'Vaihda asetuksiasi',
    'options'           => 'Valinnat',
    'user_exists'       => 'Tuollainen k�ytt�j� on jo.. Valitse v�h�n mielikuvituksellisempi nimi, vassokuu.',
    'email_note'        => 'Sinun t�ytyy antaa s�hk�postiosoitteesi, muutoin tili�si on mahdotonta varmentaa. Voit kuitenkin aina piilottaa s�hk�postiosoitteesi muilta k�ytt�jilt� niin halutessasi.',
    'stored'            => 'Muutokset on talletettu',
    'verified'          => 'Tilisi on varmennettu. Voit kirjautua sis��n..',
    'not_verified'      => 'Koodi ei tunnu t�sm��v�n. Valitettavasti sit� ei pystytty varmentamaan.',
    'pass_sent'         => 'Salasanasi on l�hetetty antamaasi s�hk�postiosoitteeseen..',
    'user_pass_nomatch' => 'K�ytt�j�nimi ja s�hk�postiosoite eiv�t t�sm��.',
    'pass_send'         => 'L�het� salasana',
    'pass_send_desc'    => 'Mik�li olet unohtanut salasanasi, t�yt� k�ytt�j�nimesi ja s�hk�postiosoitteesi, jolloin Pivot l�hett�� salasanasi s�hk�postiosoitteeseesi. ',
    'oops'              => 'Hupsista keikkaa',
    'back'              => 'Takaisin',
    'back_login'        => 'Takaisin kirjautumiseen'
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

