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
	'yes' => 'Kyllä',	//affirmative
	'no' => 'Ei',		//negative
	'go' => 'Jatka!',	//proceed

	'minlevel' => 'Sinulla ei ole oikeuksia tähän Pivotin osaan',	
	'email' => 'Sähköposti',			
	'url' => 'URL',
	'further_options' => "Lisävalinnat",
	'basic_view' => "Normaali näkymä",
	'basic_view_desc' => "Näytä vain tavanomaiset kentät",
	'extended_view' => "Laajennettu näkymä",
	'extended_view_desc' => "Näytä kaikki muokattavissa olevat kentät",
	'select' => "Valitse",
	'cancel' => "Peruuta",
	'delete' => 'Poista',
	'welcome' => "Tämä on Pivotin versio %build%.",
	'write' => "Kirjoita",
	'write_open_error' => "Tallennusvirhe. Ei voitu avata tiedostoa tallennusta varten",
	'write_write_error' => "Tallennusvirhe. Tiedostoon ei voitu tallentaa",
	'done' => "Valmis!",
	'shortcuts' => "Pikalinkit",
	'cantdelete' => "Sinulla ei ole lupaa poistaa %title%!",
	'cantdothat' => "Toimenpide ei ole sallittu %title%lle!",
);


$lang['userlevels'] = array (
		'Supervalvoja', 'Järjestelmänvalvoja', 'Tehokäyttäjä', 'Tavis', 'Mobloggaaja'
		//  this one might be a bit hard to translate, but basically it's an order of
		//  power or trust.  Superadmin would be the person in charge - no one can do
		//  anything about his decisions. Admin is only regulated by the Superadmin, 
		//  Advanced by the Admin and Superadmin, etc..
		//  Just get the idea of it.
);


$lang['numbers'] = array (
	'nolla', 'yksi', 'kaksi', 'kolme', 'neljä', 'viisi', 'kuusi', 'seitsemän', 'kahdeksan', 'yhdeksän', 'kymmenen', 'yksitoista', 'kaksitoista', 'kolmetoista', 'neljätoista', 'viisitoista', 'kuusitoista'
);


$lang['months'] = array (
	'Tammikuu', 'Helmikuu', 'Maaliskuu', 'Huhtikuu', 'Toukokuu', 'Kesäkuu', 'Heinäkuu', 'Elokuu', 'Syyskuu', 'Lokakuu', 'Marraskuu', 'Joulukuu'
);	

		
$lang['months_abbr'] = array (
	'Tam', 'Hel', 'Maa', 'Huh', 'Tou', 'Kesä', 'Hei', 'Elo', 'Syys', 'Loka', 'Mar', 'Jou'
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
	'Vuosi', 'Kuukausi', 'Viikko', 'Viikonpäivä', 'Tunti', 'Minuutti', 'Sekunti'	//the actual words for them.
);


//		Login Page		\\
$lang['login'] = array (
	'title' => 'Kirjautuminen',
	'name' => 'Käyttäjätunnus',
	'pass' => 'Salasana',
	'remember' => 'Muista',
	'rchoice' => array (
		'0' => 'Ei mitään',
		'1' => 'Käyttäjänimeni ja salasanani',
		'2' => 'Että haluan pysyä sisäänkirjautuneena'
	),
	'delete_cookies_desc' => 'Mikäli olet varma, että käyttäjätunnus ja salasana olivat oikeat, mutta sinulla on vaikeuksia kirjautua sisään niin<br />tätä palvelinta koskevien evästeiden poisto voi auttaa:',
	'delete_cookies' => 'Poista evästeet',
	'retry' => 'Väärä käyttäjänimi/salasana',
	'banned' => '10 virheellistä sisäänkirjautumisyritystä. Sen johdosta tämän IP-osoitteen sisäänkirjautumisyritykset estetään 12 tunnin ajan.',

);


//		Main Bar		\\
	$lang['userbar'] = array (
	'main' => 'Päävalikko',
	'entries' => 'Kirjoitukset',
	'submit' => 'Uusi kirjoitus',
	'comments' => 'Kommentit',
	'modify' => 'Muokkaa kirjoituksia',
	'userinfo' => 'Käyttäjätiedot',
	'u_settings' => 'Käyttäjäasetukset',
	'u_marklet' => 'Kirjanmerkit',
	'files' => 'Mediatiedostot',
	'upload' => 'Siirrä palvelimelle',
	'stats' => 'Tilastot',
	'admin' => 'Blogin hallinnointi',

	'main_title' => 'Pivotin päävalikko',
	'entries_title' => 'Kirjoitusten päävalikko',
	'submit_title' => 'Julkaise uusi kirjoitus',
	'comments_title' => 'Muokkaa ja poista kommentteja',		
	'modify_title' => 'Muokkaa kirjoitusta',
	'userinfo_title' => 'Katso omat tiedot',
	'u_settings_title' => 'Muokkaa henkilökohtaisia asetuksia',
	'u_marklet_title' => 'Luo kirjainmerkkejä',
	'files_title' => 'Hallinnoi ja lataa tiedostoja',
	'upload_title' => 'Lataa tiedostot palvelimelle',
	'uploaded_success' => 'Tiedoston lataus suoritettu',
	'stats_title' => 'Katso lokeja ja tilastoja',
	'updatetitles_title' => 'Loit ja tilastot.',
	'admin_title' => 'Blogin hallinnan päävalikko',
	'recent_entries' => 'Uusimmat kirjoitukset',
	'recent_comments' => 'Uusimmat kommentit',
);


$lang['adminbar'] = array (
	//		Admin Bar		\\
	//'trebuild' => 'Tee kaikki tiedostot uudelleen', rolled into maintenance
	'seeusers' => 'Käyttäjät',
	'seeconfig' => 'Asetukset',
	'filemappings' => 'Tiedostorakenne',
	'templates' => 'Valmiit asettelut',
	'maintenance' => 'Ylläpito',
	'regen' => 'Tee kaikki tiedostot uudelleen',
	'blogs' => 'Blogit',
	'categories' => 'Kategoriat',
	'verifydb' => 'Tarkista tietokanta',
	'buildindex' => 'Tee hakemisto uudelleen',
	'buildsearchindex' => 'Indeksoi hakutietokanta uudelleen',
	'buildfrontpage' => 'Tee uudelleen etusivu(t)',
	'sendping' => 'Lähetä Ping',


	'backup' => 'Varmuuskopioi',
	'description' => 'Kuvaus',
	'conversion' => 'Muunnos',
	'seeusers_title' => 'Luo, muokkaa ja poista käyttäjiä',
	'userfields' => 'Käyttäjätietokentät',
	'userfields_title' => 'Luo, muokkaa ja poista käyttäjätietokenttiä',
	'seeconfig_title' => 'Muokkaa asetustiedostoa',
	'filemappings_title' => 'Yleisnäkymä tiedostoista, jotka on luotu Pivotin käyttöön',
	'templates_title' => 'Luo, muokkaa ja poista valmiita asetteluita',
	'maintenance_title' => 'Suorita Pivot-tiedostojen rutiinihuoltotoimia',
	'regen_title' => 'Tee uudelleen Pivotin luomat tiedostot ja arkistot',
	'blogs_title' => 'Luo, muokkaa ja poista blogeja',
	'blogs_edit_title' => 'Tee blogiasetukset (kenelle) ',
	'categories_title' => 'Luo, muokkaa ja poista kategorioita',	
	'verifydb_title' => 'Todenna tietokannan eheys',
	'buildindex_title' => 'Indeksoi tietokantasi uudelleen',
	'buildsearchindex_title' => 'Tee hakuindeksi uudelleen mahdollistaaksesi etsinnän myös uusista kirjoituksista',
	'buildfrontpage_title' => 'Tee kunkin blogin etusivu, viimeisimmät arkistoinnit ja RSS-tiedotteet uudelleen',
	'backup_title' => 'Luo kirjoituksistasi varmuuskopio',
	'backup_config' => 'Varmuuskopioi asetukset',
	'backup_config_desc' => 'Tästä voit ladata asetuksesi sisältävän zip-tiedoston',
	'ipblocks' => 'IP-estot',
	'ipblocks_title' => 'Katso ja muokkaa estettyjä IP-osoitteita.',
	'ipblocks_stored' => 'IP-osoitteet on varastoitu.',
	'ipblocks_store' => 'Varastoi nämä IP-osoitteet',
	'ignoreddomains' => 'Sivuutetut domainit',
	'ignoreddomains_title' => 'Katso ja muokkaa sivuutettuja domaineja.',
	'ignoreddomains_stored' => 'Sivuutetut domainit on varastoitu.',
	'ignoreddomains_store' => 'Varastoi nämä sivuutetut domainit',
	'fileexplore' => 'Tiedostoselain',
	'fileexplore_title' => 'Näytä tiedostot (sekä teksti- että tietokantatiedostot)',
	'sendping_title' => 'Lähetä Ping trackerien päivittämiseksi.',
	'buildindex_start' => 'Indeksoidaan. Tämä kestää hetken, joten odota valmistumista rauhassa.',
	'buildsearchindex_start' => 'Indeksoidaan. Tämä kestää hetken, joten odota valmistumista rauhassa.',
	'buildindex_finished' => 'Valmis! Indeksointi kesti %num% sekuntia',

	'filemappings_desc' => 'Alla näkymä tämän Pivot-asennuksen kustakin blogista, ja tiedostot, jotka Pivot luo ja mitä Asettelumalleja Pivot käyttää asentaessaan tiedostoja. Tästä tiedosta voi olla hyötyä myös kun etsitään mahdollista ongelmanaiheuttajaa Pivotin asennuksessa.',

);


$lang['templates'] = array (
	'rollback' => 'Peruuta toimenpide',
	'create_template' => 'Luo Asettelumalli',
	'create_template_info' => 'Luo Pivot Asettelumalli alusta alkaen',
	'no_comment' => 'Ei kommentteja',
	'comment' => 'Kommentti*',
	'comment_note' => '(*Huom: Kommentit voidaan tallentaan vain <b>ensimmäisellä</b> luonti- tai tallennuskerralla)',
	'create' => 'Luo Asettelumalli',
	'editing' => 'Muokkaus',
	'filename' => 'Tiedoston nimi',
	'save_changes' => 'Tallenna muutokset!',
	'save_template' => 'Tallenna Asettelumalli!',		
);


//		Admin			\\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar']['xxx_title'] ones
$lang['admin'] = array (
	'seeusers' => 'Luo, muokkaa ja poista käyttäjiä',
	'seeconfig' => 'Muokkaa asetustiedostoa',
	'templates' => 'Luo, muokkaa ja poista Asettelumalleja',
	'maintenance' => 'Suorita rutiinihuoltotoimia Pivot-tiedostoille , kuten \'Tee uudelleen tiedostot\', \'Todenna tietokanta\', \'Indeksoi uudelleen\' ja \'Varmuuskopioi\'.',
	'regen' => 'Tee uudelleen kaikki Pivotin luomat sivut',
	'blogs' => 'Luo, muokkaa ja poista blogeja, joita Pivotilla julkaistaan',
);


//		Maintenace		\\	
$lang['maint'] = array (
	'title' => 'Ylläpito',	
	'gen_arc_title' => 'Luo arkisto', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => 'Luo kaikki arkistot uudelleen', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'Todenna XML-tiedostot', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'Todenna (ja tarvittaessa korjaa) XML-tiedostojen eheys', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => 'Varmuuskopioi',
	'backup_text' => 'Varmuuskopioi kaikki Pivotin keskeiset tiedostot',
);


//		Stats and referers		\\
$lang['stats'] = array (
	'show_last' => "Näytä viimeisin",
	'20ref' => "20 viittaajaa",
	'50ref' => "50 viittaajaa",
	'allref' => "kaikki viittaajat",
	'showunblocked' => "vain sallitut rivit",
	'showall' => "sekä estetyt että sallitut rivit",
	'updateref' => "Päivitä viittaaja osoitelähteistöön",
	'hostaddress' => 'Host-osoitteet (ip-osoite)', 
	'whichpage' => 'Mikä sivu',

	'getting' => 'Hakee uudet aiheet',
	'awhile' => 'Kestää hetken. Odota, ole hyvä.',
	'firstpass' => 'Ensimmäinen kerta',
	'secondpass' => 'Toinen kerta',
	'nowuptodate' => 'Viittauslähteistö on nyt päivitetty.',
	'finished' => 'Valmis',
);


//		User Info		\\
	$lang['userinfo'] = array (
	'editfields' => 'Muokkaa käyttäjäkenttiä',
	'desc_editfields' => 'Muokkaa käytettävissä olevia käyttäjätietokenttiä',
	'username' => 'Käyttäjätunnus',
	'pass1' => 'Salasana',
	'pass2' => 'Salasana (uudelleen)',
	'email' => 'Sähköpostiosoite',
	'userlevel' => 'Käyttäjätaso',	
	'userlevel_desc' => 'Käyttäjätaso määrää millaisia toimia käyttäjä voi Pivotissa suorittaa.',
	'language' => 'Kieli',	
	'lastlogin' => 'Edellinen sisäänkirjaus',
	'edituser' => 'Muokkaa käyttäjää',  //linkki.. no, käyttäjämuokkaukseen (samoin otsake)
	'edituserinfo' => 'Muokkaa käyttäjätietoja',
	'newuser' => 'Luo uusi käyttäjä',
	'desc_newuser' => 'Luo uusi Pivot sisäänkirjautumistili, joka sallii blogiin kirjoittamisen.',
	'newuser_button' => 'Luo',	
	'edituser_button' => 'Vaihda',
	'pass_too_short' => 'Salasanan tulee olla väh. 4 merkkiä pitkä.',
	'pass_equal_name' => 'Salasana ei voi olla sama kuin käyttäjätunnus.',
	'pass_dont_match' => 'Salasanat eivät täsmää',
	'username_in_use' => 'Käyttäjätunnus on jo käytössä',
	'username_too_short' => 'Käyttäjätunnuksen vähimmäispituus on 3 merkkiä',
	'username_not_valid' => 'Käyttäjätunnuksessa voi olla vain alphanumeerisia merkkejä (A-Z, 0-9) tai alamerkkejä (_).',
	'not_good_email' => 'Sähköpostiosoite ei kelpaa',	
	'c_admin_title' => 'Vahvista järjestelmänvalvojatilin luominen',
	'c_admin_message' => ' '.$lang['userlevels']['1'].'lla on täydet oikeudet Pivotiin, voi muokata kaikkia uusia jutskia, kommentteja ja kaikkia asetuksia. Haluatko varmasti luoda %s  '.$lang['userlevels']['1'].'n?',
);


//		Config Page		\\		
	$lang['config'] = array (
	'save' => 'Tallenna asetukset',

	'sitename' => 'Sivuston nimi',
	'defaultlanguage' => 'Oletuskieli',
	'defaultencoding' => 'Käytä kielikoodausta',
	'defaultencoding_desc' => 'Tämä määrittää kielikoodin, jota käytetään (kuten utf-8 tai iso-8859-1). Jätä tämä tyhjäksi, jos olet epävarma. Mikäli valintaa ei suoriteta, kelvolliset asetukset ladataan kielitiedostosta.',
	'siteurl' => 'Sivuston URL',
	'header_fileinfo' => 'Tiedot',
	'localpath' => 'Paikallinen hakemistopolku',
	'debug_options' => 'Vianetsintäasetukset',
	'debug' => 'Vianetsintätila',
	'debug_desc' => 'Näytä satunnaisia vianmääritystietoja, siellä sun täällä..',
	'log' => 'Lokitiedostot',
	'log_desc' => 'Pidä lokikirjaa erinäisistä toiminnoista',

	'unlink' => 'Poista tiedostolinkitykset',
	'unlink_desc' => 'Jotkin palvelimet, joissa pirullinen safe-mode on kytketty päälle, saattavat vaatia näpräilyä tällä valinnalla. Useimmilla palvelimella valinnalla ei ole mitään vaikutusta',
	'chmod' => 'CHMODaa tiedostot tilaan',
	'chmod_desc' => 'Jotkut palvelimet vaativat että luodut tiedostot on CHMODattu tietyllä tapaa. Tyypilliset arvot ovat \'0644\' ja \'0755\'. Älä muuta tätä, ellet tiedä varmasti mitä olet tekemässä.',
	'header_uploads' => 'Palvelimelle latauksen asetukset',
	'upload_path' => 'Palvelimelle latauksen hakemistopolku',	
	'upload_accept' => 'Hyväksytyt tiedostotyypit',			
	'upload_extension' => 'Oletustiedostotarkennin',
	'upload_save_mode' => 'Kirjoita päälle',
	'make_safe' => 'Siisti tiedostonimi',
	'c_upload_save_mode' => 'Kasvata tiedostonnimeä',
	'max_filesize' => 'Enimmäiskoko',
	'header_datetime' => 'Päivä/Aika',
	'timeoffset_unit' => 'Aikayksikkö',
	'timeoffset' => 'Aika-asetus',
	'header_extra' => 'Erinäiset asetukset',
	'wysiwyg' => 'Käytä Wysiwyg editoria',
	'wysiwyg_desc' => 'Määrittää onko wysiwyg-editori oletuksena käytössä. Kukin käyttäjä voi muuttaa tätä omassa \'Omat asetukset\' valintaikkunassaan.',
	'basic_view' => 'Käytä normaalia näkymää',
	'basic_view_desc' => 'Määrittää aukeaako \'Uusi kirjoitus\' normaalissa vai laajennetussa näkymässä.',
	'def_text_processing' => 'Oletustekstinmuokkaus', 
	'text_processing' => 'Tekstinmuokkaus',
	'text_processing_desc' => 'Määrittää oletustekstinmuokkauksen, kun käyttäjällä ei ole wysiwyg-editori käytössään \'Muunna rivinvaihdot\' muuttaa rivinvaihdot &lt;br&gt;-tagiksi. <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> on arvostettu, silti helposti opittavissa oleva merkkaustyyli.',
	'none' => 'Ei mitään',
	'convert_br' => 'Muunna rivinvaihdot &lt;br /&gt;',
	'textile' => 'Textile',

	'allowed_cats' => 'Sallitut kategoriat',
	'allowed_cats_desc' => 'Tällä käyttäjällä on oikeus kirjoittaa mainittuihin kategorioihin',
	'delete_user' => "Poista käyttäjä",
	'delete_user_desc' => "Voit halutessasi poistaa tämän käyttäjän. Kaikki lähetty dokumentaatio säilyy, mutta he eivät voi enää kirjautua sisään",
	'delete_user_confirm' => 'Olet poistamassa käyttäjää %s. Haluatko varmasti tehdä niin?',
	
	'setup_ping' => 'Ping asetukset',
	'ping_use' => 'Lähetä ping trackereille',
	'ping_use_desc' => 'tämä valinta määrittää ilmoitetaanko trackereille kuten weblogs.com, kun teet uuden kirjauksen. Palvelut kuten blogrolling.com ovat riippuvaisia näistä pingauksista',	
	'ping_urls' => 'URLit, joille ping lähetetään',
	'ping_urls_desc' => 'Voit syöttää useampia osoitteita, joihin päivitys ilmoitetaan. Älä syötä http:// -osaa osoitteesta, muutoin osoite ei toimi. Laita jokainen palvelin uudelle riville, tai erota ne | (pystyviiva) -merkillä. Palvelimia ovat esim:<br /><b>rpc.weblogs.com/RPC2</b> (weblogs.com pinger)<br /><b>pivotlog.net/pinger</b> (pivotlog pinger)<br /><b>rcs.datashed.net/RPC2</b> (euro.weblogs.com pinger)<br /><b>ping.blo.gs</b> (blo.gs pinger)<br />',

	'setup_tb' => 'Trackback asetukset',
	'tb_password' => 'Salasana',
	'tb_password_desc' => 'Tätä salasanaa käytetään Trackbackien poistamisessa. Mikäli sitä ei aseteta, Trackbackien poisto ei ole käytettävissä',
	'tb_email' => 'Sähköpostiosoite',
	'tb_email_desc' => 'Jos asetat sähköpostiosoitteen tähän, niin sähköpostitiedote lähetetään kyseiseen osoitteeseen, kun Trackback lisätään.',
	'tb_rss' => 'Luo RSS-syöte Trackbackeille',

	'new_window' => 'Avaa linkit uudessa ikkunassa',
	'emoticons' => 'Käytä hymiöitä',
	'javascript_email' => 'Muunna sähköpostiosoite?',	
	'new_window_desc' => 'Määrittää aukeavatko linkit uudessa selainikkunassa.',

	'mod_rewrite' => 'Käytä Mod_rewrite',
	'mod_rewrite_desc' => 'Jos käytössä on Apachen Mod_rewrite valinta, Pivot tekee urlit tähän tapaan www.mysite.com/archive/2003/05/30/nice_weather, tällaisen sijasta www.mysite.com/pivot/entry.php?id=134. Kaikki palvelimet eivät tue em. ominaisuutta, joten lue tarvittaessa manuaalia.',

	'search_index' => 'Päivitä hakuindeksi automaattisesti',
	'search_index_desc' => 'Määrittää päivitetäänkö hakuindeksi joka kerta, kun uusi kirjoitus lisätään.',

	'default_allow_comments' => 'Kommentit sallitaan oletuksena',
	'default_allow_comments_desc' => 'Määrittää onko kirjoitukset asetettu sallimaan kommentit vai ei.',	

  'maxhrefs' => 'Linkkien lukumäärä',
  'maxhrefs_desc' => 'Linkkien enimmäismäärä kommenteissa. Käytännöllinen toiminto, kun haluat päästä eroon kommenttispämmäreistä. 0 tarkoittaa rajoittamatonta määrää linkkejä.',
  'rebuild_threshold' => 'Uudelleentekokynnys',
  'rebuild_threshold_desc' => 'Sekuntimäärä, jonka uudelleentekeminen saa kestää, ennen kuin Pivot päivittää sivun. Oletus on 28, mutta mikäli uudelleenteossa on ongelmia, yritä asettamalla arvoksi 10.',
	'default_introduction' => 'Oletus Johdanto/Leipäteksti',
	'default_introduction_desc' => 'Tämä määrittää uusien kirjoitusten johdanto- ja leipätekstiosioiden oletusarvon. Normaalisti tämä on tyhjä kappale.',

	'upload_autothumb'	=> 'Automaattiset thumbnail-kuvat',
	'upload_thumb_width' => 'Thumbnail-kuvan leveys',
	'upload_thumb_height' => 'Thumbnail-kuvan korkeus',
	'upload_thumb_remote' => 'Kuvanrajausskripti etänä',
	'upload_thumb_remote_desc' => 'Jos palvelimellasi ei ole asennettuna tarvittavia ohjelmakirjastoja kuvien rajauksen suorittamiseksi, voit käyttää tarvittavaa skriptiä etänä.',

	'extensions_header' => 'Laajennushakemisto',
	'extensions_desc'   => 'Laajennushakemistoon talletetaan Pivotiin tehtyjä lisäosia.
		Tämä helpottaa päivittämistä huomattavasti. Lue ohjekirjat aiheesta.',
	'extensions_path'   => 'Laajennusten hakemistopolku',

);


//		Weblog Config	\\
$lang['weblog_config'] = array (
	'edit_weblog' => 'Muokkaa blogia',
	'edit_blog' => 'Muokkaa blogeja',
	'new_weblog' => 'Uusi blogi',
	'new_weblog_desc' => 'Lisää uusi blogi',
	'del_weblog' => 'Poista blogi',
	'del_this_weblog' => 'Poista tämä blogi.',
	'create_new' => 'Luo uusi blogi',
	'subw_heading' => 'Voit määrittää blogiosioissa käytettävät valmiit asettelumallit sekä niissä julkaistavat kategoriat',
	'create' => 'Valmis',
	
	'create_1' => 'Luo / Muokkaa blogia, vaihe 1 / 3',
	'create_2' => 'Luo / Muokkaa blogia, vaihe 2 / 3',
	'create_3' => 'Luo / Muokkaa blogia, vaihe 3 / 3',

	'name' => 'Blogin nimi',
	'payoff' => 'Esittely',
	'payoff_desc' => 'Esittelyä voit käyttää joko otsikkona tai lyhyenä kuvauksena blogistasi.',
	'url' => 'Blogin url-osoite',
	'url_desc' => 'Pivot määrittää blogin url-osoitteen, mikäli kenttä jätetään tyhjäksi. Jos käytät blogia osana sivustoasi, tai palvelinpuolen lisukkeena, voit käyttää tätä osoitteen valintamahdollisuutta.',
	'index_name' => 'Etusivu(hakemisto)',
	'index_name_desc' => 'Index- eli etusivu(hakemisto)-tiedoston nimi. Normaalisti se on \'index.html\', \'index.php\' tai vastaava.',

	'ssi_prefix' => 'SSI Prefix',
	'ssi_prefix_desc' => 'Jos blogisi käyttää SSI:tä (ei suositella), voit käyttää tätä fixaamaan Pivotin tiedostonimet SSI:n käyttämällä tiedostonimellä, esim. \'index.shtml?p=\'. Tämä kohta tulisi jättää tyhjäksi, ellet ole varma mitä teet.',

	'front_path' => 'Etusivun hakemistopolku',
	'front_path_desc' => 'Suhteellinen tai absoluuttinen polku hakemistoon, jonne Pivot tekee blogin etusivun.',
	'file_format' => 'Tiedostonimi',
	'entry_heading' => 'Kirjoitusasetukset',
	'entry_path' => 'Kirjoitusten hakemisto',
	'entry_path_desc' => 'Suhteellinen tai absoluuttinen polku hakemistoon, jonne Pivot laittaa yksittäiset kirjoitussivut  (ellet käytä toimintoa \'live entries\')',
	'live_comments' => 'Live entries',
	'live_comments_desc' => 'Jos käytät toimintoa \'Live entries\', Pivotin ei tarvitse luoda tiedostoja joka ainoalle kirjoitukselle. Live entryjä suositellaan.',
	'readmore' => '\'Lue lisää\' Teksti',
	'readmore_desc' => 'Teksti, jota näytetään osoittamaan, että kaikki teksti ei ole näkyvissä etusivulla.. Jos jätät tämän tyhjäksi, Pivot käyttää kielivalinnoissa määriteltyä oletusarvoa',
	
	'arc_heading' => 'Arkistoasetukset',
	'arc_index' => 'Arkiston indeksitiedosto',
	'arc_path' => 'Arkiston hakemistopolku',
	'archive_amount' => 'Arkiston lukumäärä',
	'archive_unit' => 'Arkistotyyppi',
	'archive_format' => 'Arkistomuoto',
	'archive_none' => 'Ei arkistoa',
	'archive_weekly' => 'Viikottaiset arkistot',
	'archive_monthly' => 'Kuukausittaiset arkistot',
	'archive_yearly' => 'Vuosittaiset arkistot',

	'archive_link' => 'Arkistolinkki',
	'archive_linkfile' => 'Arkistolistausmuotoilu',	
	'archive_order' => 'Arkiston järjestys',
	'archive_ascending' => 'Nouseva (vanhin ensin)',
	'archive_descending' => 'Laskeva (uusin ensin)',

	'templates_heading' => 'Vakioasettelumallit',
	'frontpage_template' => 'Etusivun asettelumalli',
	'frontpage_template_desc' => 'Asettelumalli, joka määrittää blogin etusivun asettelun.',
	'archivepage_template' => 'Arkistosivun asettelumalli',
	'archivepage_template_desc' => 'Asettelumalli, joka määrittää arkistosivun asettelun. Voi olla sama kuin \'Etusivun asettelumalli\'.',	
	'entrypage_template' => 'Kirjoitussivun asettelumalli',
	'entrypage_template_desc' => 'Asettelumalli, joka määrittää yksittäisten kirjoitusten sivuasettelun.',	
	'extrapage_template' => 'Lisäasettelumalli',
	'extrapage_template_desc' => 'Asettelumalli, joka määrittää miltä arkisto ja search.php -hakutoiminto näyttävät.',

	'shortentry_template' => 'Lyhennelmien asettelumalli',
	'shortentry_template_desc' => 'Asettelumalli, joka määrittää yksittäisten kirjoitusten asettelun sellaisena kuin ne näkyvät osana blogia tai arkistoa.',	
	'num_entries' => 'Kirjoitusten lukumäärä',
	'num_entries_desc' => 'Tämän blogiosion kirjoitusten lukumäärä, joka näytetään blogin etusivulla.',	
	'offset' => 'Offset',
	'offset_desc' => 'Mikäli asetettu numeroksi, kyseinen määrä kirjoituksia ohitetaan sivua luotaessa. Tätä voidaan käyttää luotaessa esim. \'Aiemmat kirjoitukset\' listaa.',
	'comments' => 'Salli kommentit?',
	'comments_desc' => 'Määrittää voivatko lukijat jättää kommentteja tähän blogin osaan.',	

	'publish_cats' => 'Julkaise nämä kategoriat',

	'setup_rss_head' => 'RSS ja Atom -asetukset',
	'rss_use' => 'Luo syötteet',
	'rss_use_desc' => 'Määrittää luoko Pivot automaattisesti RSS- ja Atom-syötteet tälle blogille.',
	'rss_filename' => 'RSS tiedostonimi',
	'atom_filename' => 'Atom tiedostonimi',
	'rss_path' => 'Syötehakemisto',
	'rss_path_desc' => 'Suhteellinen tai absoluuttinen polku hakemistoon, jonne Pivot luo syötetiedostot.',
//	'rss_size' => 'Syötteen pituus',	/* DEPRECATED */
//	'rss_size_desc' => 'Syötekirjoituksen pituus (kirjaimina)', /* DEPRECATED */
	'rss_full' => 'Luo täydet syötteet',
	'rss_full_desc' => 'Määrittää luoko Pivot täydet Atom- ja RSS-syötteet. Mikäli asetus on \'ei\' Pivot luo syötteet, jotka sisältävät vain lyhyet kuvaukset, tehden syötteet vähemmän käyttökelpoisiksi.',
	'rss_link' => 'Syötelinkki',
	'rss_link_desc' => 'Linkki lähetettäväksi syötteen mukana osoittamaan pääsivulle. Mikäli jätät tämän kohdan tyhjäksi, Pivot lähettää linkin, joka osoittaa blogin etusivulle.',
	'rss_img' => 'Syötekuva', 
	'rss_img_desc' => 'Voit määrittää kuvan lähetettäväksi syötteen mukana. Jotkin lukuohjelmat näyttävät tämän kuvan syötteen mukana. Jätä tyhjäksi, tai anna tarkka urli.',
	
	'lastcomm_head' => 'Viimeisten kommenttien asetukset',
	'lastcomm_amount' => 'Montako näytetään',
	'lastcomm_length' => 'Katkaise pituuteen',
	'lastcomm_format' => 'Muoto',
	'lastcomm_format_desc' => 'Nämä asetukset määräävät \'Viimeiset kommentit\' -osion asetukset blogin etusivulla',
	'lastcomm_nofollow' => 'Käytä \'Nofollow\'',
	'lastcomm_nofollow_desc' => 'Viittausspämmiä (refererspam) vastaan  voit valita lisättäväksi rel="nofollow" attribuutin kaikkiin kommentti- ja viittauslinkkeihin. Tämän pitäisi omalta osaltaan estää spämmääjää saamasta ansiotonta arvonnousua Googlen hakutuloksissa.',

	'lastref_head' => 'Viimeiset viittaajat -asetukset',
	'lastref_amount' => 'Montako näytetään',
	'lastref_length' => 'Katkaise pituuteen',
	'lastref_format' => 'Muoto',
	'lastref_format_desc' => 'Nämä asetukset määrittävät \'Viimeiset viittaukset\' -osion asettelun etusivulla.',
	'lastref_graphic' => 'Käytä kuvakkeita',
	'lastref_graphic_desc' => 'Tämä määrittää sen, näytetäänkö Viimeiset viittaukset -osiossa pienet ikonit niille tyypillisille hakukoneille, joiden kautta blogiin on tultu.',
	'lastref_redirect' => 'Uudelleenohjaa viittaajat',
	'lastref_redirect_desc' => 'Viittausspämmiä vastaan voit uudelleenohjata viittaajaan osoittavat linkit. Tämän pitäisi omalta osaltaan estää spämmääjää saamasta ansiotonta arvonnousua Googlen hakutuloksissa.',

	'various_head' => 'Sekalaiset asetukset',
	'emoticons' => 'Käytä hymiöitä',
	'emoticons_desc' => 'Määrittää muutetaanko hymiöt kuten :-) graafisiksi.',
	'encode_email_addresses' => 'Muunna sähköpostiosoite',
	'encode_email_addresses_desc' => 'Määrittää käytetäänkö javascriptiä suojelemaan sähköpostiosoitettasi yksityisyyttä roskapostiharavoijilta.',
	'target_blank' => 'Target Blank',
	'xhtml_workaround' => 'XHTML Workaround',
	'target_blank_desc' => 'Mikäli valitset \'Kyllä\', kaikki kirjoituksissa olevat linkit aukeavat uuteen ikkunaan. Mikäli valintasi on \'XHTML workaround\', kaikki linkit sisältävät rel="external" attribuutin, jolloin ei rikota oikeinmuotoiltua XHTML:ää',

	'date_head' => 'Päivämääräasetukset',
	'full_date' => 'Täydellinen päivämäärä',
	'full_date_desc' => 'Tämä määrittää asetukseksi täyden päivämäärän ja kellonajan. Käytetään yksittäiskirjoitussivun yläosassa',
	'entry_date' => 'Kirjoituspäivä',
	'diff_date' => 'Diff Date',
	'diff_date_desc' => '\'Diff Date\'ta käytetään useimmiten \'Kirjoituspäivän\' yhteydessä. \'Kirjoituspäivä\' näytetään jokaisen kirjoituksen yhteydessä, kun taas \'Diff Date\' näytetään ainoastaan, jos se eroaa edellisestä kirjoituksesta.',
	'language' => 'Kieli',
	'language_desc' => 'Kieli määrää numeroiden ja päivämäärien ulkoasun, ja myös sivun kielikoodauksen (kuten esimerkiksi iso-8859-1 tai koi8-r).',	

	'comment_head' => 'Kommentointiasetukset',
	'comment_sendmail' => 'Lähetä postia?',
	'comment_sendmail_desc' => 'Kun joku on kommentoinut, niin blogin ylläpitäjälle voidaan lähettää siitä tieto sähköpostilla.',
	'comment_emailto' => 'Osoitteeseen',
	'comment_emailto_desc' => 'Määritä sähköpostiosoitteet, johon posti lähetetään. Erota osoitteet toisistaan pilkulla, mikäli annat useamman kuin yhden osoitteen.',
	'comment_texttolinks' => 'Tee linkit',
	'comment_texttolinks_desc' => 'Määritä tehdäänkö kirjoitetuista www-osoitteista ja sähköpostiosoitteista suoraan klikattavia hyperlinkkejä.',
	'comment_wrap' => 'Kommenttien tasoitusraja',
	'comment_wrap_desc' => 'Asettelusi suojaamiseksi pitkät merkkijonot tasataan tietyn merkkimäärän jälkeen.',
	'comments_text_0' => 'teksti näkymälle \'Ei kommentteja\'',
	'comments_text_1' => 'teksti näkymälle \'yksi kommentti\'',
	'comments_text_2' => 'teksti näkymälle \'X kommenttia\'',
	'comments_text_2_desc' => 'Tekstit, jotka osoittavat olemassaolevien kommenttien lukumäärän. Jos jätät nämä tekstikohdat tyhjiksi, niin Pivot käyttää näkyvissä olevia oletusasetuksia',

	'comment_pop' => 'Ponnahtavat kommentit?',
	'comment_pop_desc' => 'määrittää näytetäänkö kommenttisivu (tai \'yksittäinen kirjoitus\') ponnahdusikkunassa, vai alkuperäisessä selainikkunassa.',
	'comment_width' => 'Ponnahdusikkunan leveys',
	'comment_height' => 'Ponnahdusikkunan korkeus',
	'comment_height_desc' => 'Anna (pikseleinä) kommenttiponnahdusikkunan leveys ja korkeus.',
			
	'comment_format' => 'Kommenttien muotoilu',
	'comment_format_desc' => 'Määrittää kommenttien muotoilun kirjoitussivulla.',

	'comment_reply' => "Muokkaa tekstiä 'vastaa ..'",
	'comment_reply_desc' => "Määrittää vierailijoiden käytössä olevien vastauslinkkien muotoilun, kun he vastaavat tiettyyn kommenttiin.",
	'comment_forward' => "Muokkaa tekstiä 'vastaa kommenttiin ..'",
	'comment_forward_desc' => "Määrittää sen tekstin muotoilun, joka näytetään, kun kommenttiin vastataan toisella kommentilla.",
	'comment_backward' => "Muokkaa tekstiä 'vastauksena ..'",
	'comment_backward_desc' => "Määrittää sen tekstin muotoilun, joka näytetään, kun kommentti on vastaus toiseen kommenttiin.",
	
	'comment_textile' => 'Salli Textile',
	'comment_textile_desc' => 'Mikäli asetettu \'Kyllä\', vierailijat voivat käyttää <a href="http://www.textism.com/tools/textile/" target="_blank">Textilea</a> kommenteissaan.',

	'saved_create' => 'Uusi blogi on luotu.',
	'saved_update' => 'Blogi on päivitetty.',
	'deleted' => 'Blogi on poistettu.',
	'confirm_delete' => 'Olet poistamassa blogin %1. Haluatko todellakin poistaa sen?',	

	'blogroll_heading' => 'Blogroll-asetukset',
	'blogroll_id' => 'Blogrolling ID-tunnus',
	'blogroll_id_desc' => 'Voit halutessasi sisällyttää <a href="http://www.blogrolling.com" target="_blank">blogrolling.com</a> blogrollin blogiisi. Blogrollingin avulla pidät linkkilistaa, josta näet milloin linkkisi viimeksi päivittyivät. Mikäli et halua kyseistä palvelua, niin voit ohittaa nämä valintakohdat. Muussa tapauksessa: Kun olet kirjautuneena blogrolling.comiin, mene \'get code\' -kohtaan, löydät sieltä linkit, jotka sisältävät sinun blogroll ID -tunnuksesi. Sen pitäisi näyttää suunnilleen tältä: 2ef8b42161020d87223d42ae18191f6d',
	'blogroll_fg' => 'Tekstin väri',
	'blogroll_bg' => 'Taustaväri',
	'blogroll_line1' => 'Rivi väri 1',
	'blogroll_line2' => 'Rivi väri 2',
	'blogroll_c1' => 'Väri 1',
	'blogroll_c2' => 'Väri 2',
	'blogroll_c3' => 'Väri 3',
	'blogroll_c4' => 'Väri 4',
	'blogroll_c4_desc' => 'Nämä värit määräävät sen miltä blogrollisi näyttää. Värit yhdestä neljään osoittavat visuaalisesti sen kauanko linkin päivittymisestä on kulunut aikaa.',
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
	'picheader' => 'Poista tämä tiedosto?',
	'create' => 'luo',
	'edit' => 'muokkaa',

	'insert_image' => 'Lisää kuva',
	'insert_image_desc' => 'Lisätäksesi kuvan, siirrä kuva palvelimelle, tai valitse aiemmin siirretty kuva.',
	'insert_image_popup' => 'Lisää kuvalle ponnahdusikkuna',
	'insert_image_popup_desc' => 'Lisätäksesi kuvalle ponnahdusikkunan, siirrä kuva palvelimelle, tai valitse jo aiemmin siirretty kuva. Valitse sen jälkeen teksti tai thumbnail-kuva, joka laukaisee ponnahdusikkunan.',
	'choose_upload' => 'siirrä',
	'choose_select' => 'tai valitse',
	'imagename' => 'kuvan nimi',
	'alt_text' => 'Vaihtoehtoinen teksti',
	'align' => 'Keskitä',
	'border' => 'Reunus',
	'pixels' => 'pikseliä',
	'uploaded_as' => 'Tiedostosi on siirretty nimellä \'%s\'.',
	'not_uploaded' => 'Tiedostoa ei siirretty, koska siirrossa ilmeni seuraavat virheet:',
	'center' => 'Keskelle (oletus)',
	'left' => 'Vasemmalle',
	'right' => 'Oikealle',
	'inline' => 'Sisäkkäin',		
	'notice_upload_first' => 'Sinun pitää ensin valita tai siirtää kuva',
	'select_image' => 'Valitse kuva',
	'select_file' => 'Valitse tiedosto',

	'for_popup' => 'Ponnahdusikkunaan',		
	'use_thumbnail' => 'Käytä Thumbnail-kuvaa',		
	'edit_thumbnail' => 'Muokkaa Thumbnail-kuvaa',		
	'use_text' => 'Käytä tekstiä',		
	'insert_download' => 'Lisää ladattava',
	'insert_download_desc' => 'Ladataksesi tiedoston, siirrä ensin tiedosto, tai käytä jo siirrettyä tiedostoa. Sitten valitse haluatko kuvakkeen, tekstin vai thumbnail-kuvan painalluksen käynnistävän latauksen.',
	'use_icon' => 'Käytä kuvaketta',
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => 'Lisää linkki',
	'insert_link_desc' => 'Lisää linkki kirjoittamalla url-osoite alla olevaan kenttään. Vierailijat näkevät nimikkeen, kun kuljettavat hiirtään linkin ylitse.',
	'url' => 'URL',
	'title' => 'Nimike',
	'text' => 'Teksti',
);


//		Categories		\\
$lang['category'] = array (
	'edit_who' => 'Muokkaa kuka voi kirjoittaa kategoriaan \'%s\'',
	'name' => 'Nimi',
	'users' => 'Käyttäjät',
	'make_new' => 'Luo uusi kategoria',
	'create' => 'Luo kategoria',
	'canpost' => 'Valitse käyttäjät, joille haluat antaa oikeudet kirjoittaa tähän kategoriaan',
	'same_name' => 'Tämänniminen kategoria on jo olemassa',
	'need_name' => 'Tämä kategoria täytyy nimetä',
	
	'allowed' => 'Sallittu',
	'allow' => 'Salli',
	'denied' => 'Evätty',
	'deny' => 'Epää',
	'edit' => 'Muokkaa kategoriaa',
	
	'delete' => 'Poista kategoria',
	'delete_desc' => 'Valitse \'kyllä\', mikäli haluat poistaa tämän kategorian',

	'delete_message' => 'Pivotin tässä versiossa vain kategorian nimi poistetaan. Myöhemmissä versioissa voit itse valita mitä tehdä tämän kategorian kirjoituksille.',
	'search_index_newctitle'   => 'Indeksoi tämä kategoria',
	'search_index_newcdesc'    => 'Valitse \'Ei\' ainoastaan mikäli et halua sisällyttää hakutuloksiin tämän kategorian kirjoituksia.',
	'search_index_editcheader' => 'Indeksoi kategoria',
	
	'order' => 'Lajittelujärjestys',
	'order_desc' => 'Alemman lajittelujärjestyksen kategoriat näkyvät korkeammalla tuloksissa. Mikäli kaikki numerot ovat samansuuruiset, tulokset järjestetään aakkosten mukaan',
	'public' => 'Julkinen kategoria',
	'public_desc' => 'Jos valitset \'Ei\', kategoriaa voivat katsella vain rekisteröityneet käyttäjät. (koskee vain live pages -sivuja)',
	'hidden' => 'Piilotettu kategoria',
	'hidden_desc' => 'Mikäli valitset \'Kyllä\', tämä kategoria pysyy piilossa arkistoinneilta. (koskee vain live pages -sivuja)',
		
);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "Lisää kirjoitus",
	'preview_entry' => "Esikatsele",

	'first' => 'ensimmäinen',
	'last' => 'viimeinen',
	'next' => 'seuraava',
	'previous' => 'edellinen',

	'jumptopage' => 'mene sivulle (%num%)',
	'filteron' => 'suodatin (%name%)',
	'filteroff' => 'suodatin ei käytössä',
	'title' => 'Otsikko',
	'subtitle' => 'Alaotsikko',
	'introduction' => 'Johdanto',
	'body' => 'Leipäteksti',
	'publish_on' => 'Julkaisupvm',
	'status' => 'Tila',
	'post_status' => 'Kirjoituksen tila',
	'category' => 'Kategoria',
	'select_multi_cats' => '(Ctrl-näppäin pohjassa voit valita useampia kategorioita)',
	'last_edited' => "Muokattu viimeksi",
	'created_on' => "Luotu",		
	'date' => 'Pvm',
	'author' => 'Kirjoittaja',
	'code' => 'Koodi',
	'comm' => 'Kommenttien määrä',
	'name' => 'Nimi',
	'allow_comments' => 'Salli kommentit',

	'delete_entry' => "Poista kirjoitus",
	'delete_entry_desc' => "Poista tämä kirjoitus ja siihen kuuluvat kommentit",
	'delete_one_confirm' => "Haluatko nyt ihan toden totta varmasti todellakin poistaa tämän kirjoituksen?",
	'delete_multiple_confirm' => "Halauatko varmasti poistaa nämä kirjoitukset?",
	
	'convert_lb' => 'Muunna rivinvaihdot',
	'always_off' => '(Tämä on aina pois päältä, kun olet Wysiwyg-tilassa)',
	'be_careful' => '(Nyt kannattaa olla tarkkana!)',
	'edit_comments' => 'Muokkaa kommentteja',
	'edit_comments_desc' => 'Muokkaa tämän kirjoituksen kommentteja',
	'edit_comment' => 'Muokkaa kommenttia',
	'delete_comment' => 'Poista kommentti',
	'block_single' => 'Estä IP-osoite %s',
	'block_range' => 'Estä IP-osoitteet väliltä %s',
	'unblock_single' => 'Poista esto IP-osoitteelta %s',
	'unblock_range' => 'Poista estot IP-osoitteilta %s',
	'trackback' => 'Trackback pingaamalla',
	'trackback_desc' => 'Trackbackaa seuraavat url-osoitteet pingaamalla. Trackbackataksesi useampia osoitteita, lisää kukin omalle rivilleen.',
	'keywords' => 'Avainsanat',
	'keywords_desc' => 'Käytä tätä asettaaksesi avainsanoja, joiden avulla hakukoneiden on helpompi löytää tämä kirjoitus, tai asettaaksesi käyttökelpoisemman url-osoitteen kirjoitukselle',
	'vialink' => "Linkin kautta",
	'viatitle' => "Nimikkeen kautta",
	'via_desc' => 'Käytä tätä lisätäksesi linkki kirjoituksen alkuperään.',
	'entry_catnopost' => 'Sinulla ei ole oikeuksia kirjoittaa kategoriaan:\'%s\'.',
	'entry_saved_ok' => 'Kirjoituksesi \'%s\' tallennus onnistui.',
	'entry_ping_sent' => 'Trackbackpingaus on lähetetty kohteeseen \'%s\'.',
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
	'comment_none' => "Tätä kirjoitusta ei ole kommentoitu.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => 'Arvostele \'%val%\' kirjoitus',
	'good' => 'Hyvä',
	'bad' => 'Huono',
	'already' => 'Olet jo äänestänyt tätä kirjoitusta tai tässä äänestyksessä',
	'register' => 'Äänesi \'%val%\' on rekisteröity',
);


$lang['comment'] = array (
	'register' => 'Kommenttisi on talletettu.',
	'preview' => 'Esikatselet kommenttiasi. Muista klikata \'Lisää kommentti\' tallettaaksesi kommentin.',
	'duplicate' => 'Kommenttiasi ei talletettu, koska se näyttää olevan kopio aiemmasta kirjoituksesta',
	'no_name' => 'Kirjoita nimesi (tai alias) \'nimi\'-kenttään. Muista klikata \'Lisää kommentti\' tallettaaksesi sen pysyvästi.',
	'no_comment' => 'Kirjoita jotain \'kommentoi\'-kenttään. Muista klikata \'Lisää kommentti\' tallettaaksesi sen pysyvästi.',
    'too_many_hrefs' => 'Sallittu linkkien maksimimäärä ylittyi. Lopeta spämmäys.',
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
	'last_comments' => "Viimeisimmät kommentit",
	'last_referrers' => "Viimeisimmät viittaajat",
	'calendar' => "Kalenteri",
	'links' => "Linkit",
	'xml_feed' => "XML: RSS Feed",
	'atom_feed' => "XML: Atom Feed",
	'powered_by' => "Powered by",
	'name' => "Nimi",
	'email' => "Sähköposti",
	'url' => "URL",
	'date' => "Pvm",		
	'comment' => "Kommentti",
	'ip' => "IP-osoite",		
	'yes' => "Kyllä",
	'no' => "Ei",
	'emoticons' => "Hymiöt",
	'emoticons_reference' => "Avaa hymiöt-hakemisto",
	'textile' => "Textile",
	'textile_reference' => "Avaa Textile-hakemisto",
	'post_comment' => "Lisää kommentti",
	'preview_comment' => "Esikatsele kommenttia",
	'remember_info' => "Muista henkilökohtaiset tiedot?",
	'notify' => "Muistuta",
	'notify_yes' => "Kyllä, lähetä sähköpostia, kun kirjoitukseeni vastataan tai sitä kommentoidaan.",
	'register' => "Rekisteröi käyttäjänimesi / Kirjaudu",
	'disclaimer' => "<b>Pienellä painettua:</b> Kaikki html-tagit paitsi &lt;b&gt; and &lt;i&gt; poistetaan kommenteista. Klikattavat linkit tehdään automaattisesti lisätessäsi url- tai sähköpostiosoitteen.",	
	'search_title' => "Hakutulokset",
	'search' => "Hae!",
	'nomatches' => "Ei löytynyt yhtää osumaa haulle '%name%'. Kokeile jotain toista hakutermiä.",
	'matches' => "Osumia haulle '%name%':",
	'about' => "Esittely",
	'stuff' => "Jutskat",
	'linkdump' => "Linkkiloota",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Muokkaa käyttäjäkenttiä',
	'edit' => 'Muokkaa',
	'create' => 'Luo',

	'dispname' => 'Näytä nimi',
	'intname' => 'Sisäinen nimi',
	'intname_desc' => 'Sisäinen nimi on tämän kohteen nimi sellaisena kuin se näkyy, kun määrität Pivotin näyttämään sen asettelumallissa.',
	'size' => 'Koko',
	'rows' => 'Rivit',
	'cols' => 'Sarakkeet',
	'maxlen' => 'Enimmäispituus',
	'minlevel' => 'Väh. käyttäjätaso',	
	'filter' => 'Suodata',
	'filter_desc' => 'Tällä suodatuksella rajoitat käytettävissä olevaa syötetapaa',
	'no_filter' => 'Ei mitään',
	'del_title' => 'Vahvista poisto',
	'del_desc' => 'Poistamalla käyttäjäkentän (<b>%s</b>) tuhoat myös kaikki tiedot, jotka käyttäjät ovat siihen liittäneet, ja teet myös kaikki vastaavat kohdat asettelumallissa tyhjiksi.',	
	
	'already' => 'Nimi on jo käytössä',
	'int' => 'Sisäisen nimen tulee olla pidempi kuin kolme kirjainta',
	'short_disp' => 'Näyttönimen tulee olla pidempi kuin kolme kirjainta',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => 'Älykkäät kirjanmerkit',
	'bm_add' => 'Lisää kirjanmerkki.',
	'bm_withlink' => 'Piv » Uusi',
	'bm_withlink_desc' => 'Tämä kirjanmerkki avaa \'Uusi kirjoitus\' -ikkunan, ja kirjoitukseen lisätään automaattisesti sen sivun osoite, josta ikkuna avattiin.',

	'bm_nolink' => 'Piv » Uusi',
	'bm_nolink_desc' => 'Tämä kirjainmerkki avaa \'Uusi kirjoitus\' -ikkunan.',

	'bookmarklets_info' => 'Kirjanmerkkien avulla voit helposti lisätä uuden kirjoituksen. Lisätäksesi kirjanmerkin selaimeesi, valitse joku seuraavista: (näkyvä teksti voi vaihdella, riippuen käyttämästäsi selaimesta)',
	'bookmarklets_info_1' => 'Klikkaa ja raahaa kirjanmerkki \'Linkit\'-työkaluriville tai selaimen \'Kirjanmerkit\'-painikkeeseen.',
	'bookmarklets_info_2' => 'Klikkaa hiiren oikealla painikkeella kirjanmerkin päällä ja valitse \'Lisää suosikkeihin\', \'Bookmark link\' tms.',
);

// Accessibility - These are used for form fields, labels, fieldsets etc.
// for Web Content Accessibility Guidelines & 508 compliancy issues.
// see: http://bobby.watchfire.com/bobby/html/en/index.jsp
// JM =*=*= 2004/10/04
// 2004/11/25 =*=*= JM - minor correction for tim
$lang['accessibility'] = array(
	'search_idname'      => 'haku',
	'search_formname'    => 'Hae sivuston sisällöstä',
	'search_fldname'     => 'Kirjoita hakutermi[t] tähän:',
	'search_placeholder' => 'Syötä hakutermit',

	'calendar_summary'   => 'Tässä kalenterissa on linkit kirjoituksiin asianomaisen päivän kohdalla.',
	'calendar_noscript'  => 'Kalenterin auttaa sinua löytämään blogikirjoitukset',
	/* 
	2-kirjaiminen kielikoodi, osoittaa sivuston pääasiallisen kielen
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
    'tburl'     => 'Trackbackaa URL tähän kirjoitukseen',
    'delete'    => '[POISTA]',
    'yoursite'  => 'Onko tämä sinun sivustosi?',
    'todelete'  => ' poistaaksesi pingit.',
    'login'     => 'Kirjaudu sisään',
    'logout'    => 'Kirjaudu ulos',
    'sendping'  => 'Lähetä ping',
    'unaut'     => 'Sinulla ei ole oikeuksia',
    'pinged'    => 'Ping lähetettiin onnistuneesti',
    'notpinged' => 'Virhe: Ei voitu pingata URL:ia',
    'invalid'   => 'Kirjautuminen epäonnistui',
    'disabled'  => 'Kirjautumista ei ole käytössä',
    'loggedout' => 'Uloskirjautunut',
    'tracked'   => 'Trackeroitu',
    'pass'      => 'Salasana',
    'email_subject' => '[Trackback] uusi trackback',
    'email_txt' => 'Uusi trackback jätetty sivustoosi',
);

$lang['commentuser'] = array (
    'title'             => 'Pivot käyttäjän sisäänkirjautuminen',
    'header'            => 'Kirjaudu sisään rekisteröityneenä vierailijana',
    'logout'            => 'Kirjaudu ulos.',
    'loggedout'         => 'Uloskirjautunut',
    'login'             => 'Sisäänkirjautuminen',
    'loggedin'          => 'Sisäänkirjautuneena',
    'loggedinas'        => 'Sisäänkirjautuneena nimellä',
    'pass_forgot'       => 'Salasana unohtunut?',
    'register_new'      => 'Rekisteröi uusi käyttäjätunnus.',
    'register'          => 'Rekisteröidy vierailijana',
    'register_info'     => 'Täytä seuraavat tiedot. <strong>Anna omassa käytössäsi oleva, toimiva sähköpostiosoite</strong>, koska varmistussähköposti lähetetään antamaasi sähköpostiosoitteeseen.',
    'pass_note'         => 'Huom: Tämän sivuston ylläpitäjä <br /> pystyy näkemään salasanasi.. Senpä takia <em>älä</em> käytä samaa salasanaa<br /> joka on käytössäsi muilla sivustoilla / tileillä!',
    'show_email'        => 'Näytä sähköpostiosoitteeni kommentti-osiossa',
    'notify'            => 'Lähetä minulle ilmoitus sähköpostitse uusista kirjoituksista',
    'def_notify'        => 'Oletusilmoitus vastauksista',
    'register'          => 'Rekisteröidy',
    'pass_invalid'      => 'Väärä salasana',
    'nouser'            => 'Tuollaista käyttäjää ei ole olemassakaan..',
    'change_info'       => 'Tästä voit muuttaa tietojasi.',
    'pref_edit'         => 'Muokkaa asetuksiasi',
    'pref_change'       => 'Vaihda asetuksiasi',
    'options'           => 'Valinnat',
    'user_exists'       => 'Tuollainen käyttäjä on jo.. Valitse vähän mielikuvituksellisempi nimi, vassokuu.',
    'email_note'        => 'Sinun täytyy antaa sähköpostiosoitteesi, muutoin tiliäsi on mahdotonta varmentaa. Voit kuitenkin aina piilottaa sähköpostiosoitteesi muilta käyttäjiltä niin halutessasi.',
    'stored'            => 'Muutokset on talletettu',
    'verified'          => 'Tilisi on varmennettu. Voit kirjautua sisään..',
    'not_verified'      => 'Koodi ei tunnu täsmäävän. Valitettavasti sitä ei pystytty varmentamaan.',
    'pass_sent'         => 'Salasanasi on lähetetty antamaasi sähköpostiosoitteeseen..',
    'user_pass_nomatch' => 'Käyttäjänimi ja sähköpostiosoite eivät täsmää.',
    'pass_send'         => 'Lähetä salasana',
    'pass_send_desc'    => 'Mikäli olet unohtanut salasanasi, täytä käyttäjänimesi ja sähköpostiosoitteesi, jolloin Pivot lähettää salasanasi sähköpostiosoitteeseesi. ',
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

