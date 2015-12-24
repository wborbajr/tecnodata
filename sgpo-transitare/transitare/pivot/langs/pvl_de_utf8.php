<?php
//Deutsch (German) (Du) (UTF-8)

// die obige Zeile ist notwendig und darf nicht geändert werden. Sie bestimmt die Anzeige 
// der aktiven Sprach-Datei in der User-Info
// Achtung.: diese Angabe muß immer in der 2. Zeile stehen

// German translation of Pivot lang file
// Translated by: Teebee <tim@teebee.org> (www.teebee.org), and Knut <inbox@etribe.de> (www.etribe.de)
// Complete re-edited and corrected by: Nicole Simon (http://beissholz.de)
//
// updated by Daniel <djm@vfblog.com>, 02.06.2006
// Completely re-edited, extended und corrected by: Connie Müller-Gödecke (http://www.mueller-goedecke.de), 19.03.2007
// gemäß der Anforderungen der Pivot-Sprachseiten-Statistik http://www.pivotlog.net/dev/lang-stats/
//
// Beachte: Diese Sprachdatei nutzt teilweise die formlosere "Du" Form. 
// Weitere Sprachdateien gibt es zum Download auf http://www.pivotstyles.net/files.php?cat=11 
// eine deutsche Sprach-Datei mit formeller Anrede gibt es zur Zeit nicht.


// Einstellung für Zeichensatz und Länder-Code
$encoding="utf-8";
$langname="de";

//  Generelles
$lang['general'] = array (
        'yes'                        => "Ja",         
        'no'                         => "Nein",               
        'go'                         => "Weiter",     
        'continue'                   => "Fortfahren",  
        'minlevel'                   => "Du hast keine Berechtigung für diesen Bereich von Pivot.",
        'email'                      => "E-Mail",
        'url'                        => "URL",
        'further_options'            => "Weitere Optionen",
        'basic_view'                 => "Standard-Ansicht",
        'basic_view_desc'            => "Einfache Ansicht anzeigen",
        'extended_view'              => "Erweiterte Ansicht",
        'extended_view_desc'         => "Alle editierbaren Felder anzeigen",
        'toggle_view'                => "Wechseln zwischen einfacher und erweiterter Ansicht",
        'select'                     => "auswählen",
        'cancel'                     => "abbrechen",
        'delete'                     => "löschen",
        'approve'                    => "freigeben", 
        'edit'                       => "bearbeiten",
        'welcome'                    => "Willkommen zur Version <b>%build%</b>.",
        'write'                      => "Schreibe",
        'write_open_error'           => "Schreibfehler. Konnte die Datei nicht zum schreiben öffnen.",
        'write_write_error'          => "Schreibfehler. Konnte nicht in die Datei schreiben.",
        'done'                       => "Fertig!",
        'shortcuts'                  => "Abkürzungen",
        'cantdelete'                 => "Du hast keine Lösch-Berechtigung für den Artikel %title%!",
        'cantdothat'                 => "Du hast keine Berechtigung, dies mit dem Artikel %title% zu machen!",
        'cantdeletelast'             => "Du kannst den (aller)letzten Eintrag nicht löschen.<br /> Erstelle erst einen neuen Eintrag, um danach diesen Eintrag löschen zu können.",
        'more'                       => "mehr",
        'all'                        => "alle",
);

 
//  Berechtigungs-Pyramide: 
//  Superadmin hat die höchsten Rechte, niemand kann seine Rechte einschränken
//  Administrator kann vom Superadmin eingeschränkt werden und die anderen User-Gruppen einschränken,
//  Das ist die Idee dahinter
$lang['userlevels'] = array(
    "Superadmin", "Administrator", "Fortgeschritten", "Normal", "Moblogger"
);


$lang['numbers'] = array(
        "null", "ein", "zwei", "drei", "vier", "fünf", "sechs", "sieben", "acht", "neun", "zehn", "elf", "zwölf", "dreizehn", "vierzehn", "fünfzehn", "sechszehn"
);


$lang['months'] = array (
        "Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"
);


$lang['months_abbr'] = array (
        "Jan", "Feb", "März", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dez"
);


$lang['days'] = array (
        "Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag"
);


$lang['days_abbr'] = array (
        "So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"
);


$lang['days_calendar'] = array (
        "S", "M", "D", "M", "D", "F", "S"
);


$lang['datetime_words'] = array (
        "Jahr", "Monat", "Woche", "Wochentag", "Stunde", "Minute", "Sekunden"
);


//  Anmeldung 
$lang['login'] = array (
        'title'                      => "Login",
        'name'                       => "Benutzername",
        'pass'                       => "Passwort",
        'remember'                   => "folgende Daten <i>merken</i>",
        'rchoice' => array (
                              '0'    => "Nichts",
                              '1'    => "Meinen Benutzername und mein Passwort",
                              '2'     => "Pivot soll mich ab jetzt automatisch anmelden",
                             ),
        'delete_cookies_desc'        => "Wenn Du sicher bist, daß Du den korrekten Usernamen und Paßwort eingegeben hast, Du aber Probleme mit dem Einloggen hast, kannst Du versuchen, die Cookies für diese Domain zu löschen:",
        'delete_cookies'             => "Cookies löschen",
        'retry'                      => "Falscher Benutzernahme oder falsches Passwort",
        'banned'                     => "10 falsche Anmelde-Versuche. Deine IP ist für die nächsten 12 Stunden zum Einloggen gesperrt.",

);

//  Haupt-Seiten-Leiste
        $lang['userbar'] = array (
        'main'                       => "Übersicht",
        'entries'                    => "Artikel",
        'submit'                     => "Neuer Artikel",
        'comments'                   => "Kommentare",
        'trackbacks'                 => "Trackbacks",
        'modify'                     => "Artikel bearbeiten",
        'userinfo'                   => "User - Profil",
        'u_settings'                 => "User - Einstellungen",
        'u_marklet'                  => "User - Bookmarks",
        'files'                      => "Media - Dateien",
        'upload'                     => "Upload",
        'stats'                      => "Statistik",
        'admin'                      => "Administration",
        'main_title'                 => "Pivot - Haupt-Verwaltungsseite",
        'entries_title'              => "Artikel - Übersicht",
        'submit_title'               => "Neuen Artikel verfassen",
        'comments_title'             => "Bearbeite oder lösche Kommentare",
        'trackbacks_title'           => "Bearbeite oder lösche Trackbacks",
        'modify_title'               => "Artikel bearbeiten",
        'userinfo_title'             => "Meine persönlichen Informationen aufrufen",
        'u_settings_title'           => "User - Einstellungen bearbeiten",
        'u_marklet_title'            => "Lesezeichen erstellen",
        'files_title'                => "Verwaltung und Hochladen von Media-Dateien",
        'upload_title'               => "Dateien hochladen",
        'uploaded_success'           => "Datei wurde hochgeladen",
        'stats_title'                => "Statistiken und Logfiles ansehen.",
        'updatetitles_title'         => "Statistiken und Logfiles ansehen.",
        'admin_title'                => "Verwaltungs-Übersicht",
        'recent_entries'             => "Neueste Artikel",
        'recent_comments'            => "Neueste Kommentare",
        'moderate_comments'          => "Kommentare freischalten",
        'moderate_comments_desc'     => "%1 Kommentar(e) sind noch  nicht freigeschaltet.",
        'moderate_nocomments_desc'   => "Es warten keine Kommentare auf Freischaltung.",
        'moderate_autoapprove'       => "Kommentare dieser registrierten User in Zukunft immer sofort freigeben.",           
);

//  Administrations-Seiten-Leiste
$lang['adminbar'] = array (
        'seeusers'                      => "Benutzer",
        'seecommusers'                  => "Registrierter Benutzer",
        'seeconfig'                     => "Konfiguration",
        'filemappings'                  => "Datei-Übersicht",
        'templates'                     => "Templates",
        'maintenance'                   => "Wartung",
        'regen'                         => "Alle von Pivot generierten Dateien und Archive neu generieren",
        'blogs'                         => "Weblogs",
        'categories'                    => "Kategorien",
        'verifydb'                      => "Datenbank überprüfen",
        'buildindex'                    => "Index neu generieren",
        'buildsearchindex'              => "Such-Index neu erstellen",
        'buildfrontpage'                => "Startseite neu erstellen",
        'sendping'                      => "Ping senden",
        'backup'                        => "Sicherheitskopie",
        'description'                   => "Beschreibung",
        'conversion'                    => "Konvertierung",
        'seeusers_title'                => "Benutzer einrichten, bearbeiten und löschen",
        'seecommusers_title'            => "Registrierte Benutzer einrichten, bearbeiten und löschen",
        'userfields'                    => "Felder des Benutzerkontos",
        'userfields_title'              => "Felder des Benutzerkontos bearbeiten",
        'seeconfig_title'               => "Konfigurations - Datei bearbeiten",
        'filemappings_title'            => "Eine Übersicht aller Dateien die von Ihrem Weblog oder Pivot erstellt wurden",
        'templates_title'               => "Templates erstellen, bearbeiten oder löschen",
        'maintenance_title'             => "Standard-Wartung der Pivot-Dateien durchführen",
        'regen_title'                   => "Alle von Pivot erstellten Dateien und Archive neu generieren",
        'blogs_title'                   => "Weblogs erstellen, bearbeiten oder löschen",
        'blogs_edit_title'              => "Weblog - Einstellungen bearbeiten für ",
        'categories_title'              => "Kategorien erstellen, bearbeiten oder löschen",
        'verifydb_title'                => "Integritäts - Überprüfung der Datenbank",
        'buildindex_title'              => "Generiert den Index der Datenbank neu",
        'buildsearchindex_title'        => "Such-Index aktualisieren, um die Suche in den Artikeln zu ermöglichen",
        'buildfrontpage_title'          => "Hauptseite, Archive und den RSS-Feed Ihres Weblogs erneut generieren.",
        'backup_title'                  => "Sicherheitskopie Ihrer Artikel erstellen",
        'backup_db'                     => "Datenbank - Sicherung",
        'backup_db_desc'                => "Sicherungskopie der Datenbank im ZIP-Format zum Download (komplett mit allen Einträgen)",
        'backup_config'                 => "Sicherheitskopie der Konfigurations-Dateien",
        'backup_config_desc'            => "Sicherungskopie der Konfigurations-Dateien im ZIP-Format zum Download",
        'ipblocks'                      => "IP blockieren",
        'ipblocks_title'                => "Blockierte IP-Adressen anzeigen und bearbeiten.",
        'ipblocks_stored'               => "IP-Adressen wurden gespeichert.",
        'ipblocks_store'                => "Diese IP-Adressen speichern",
        'ignoreddomains'                => "Zu ignorierende Domains",
        'ignoreddomains_title'          => "Zu ignorierende Domains anschauen und bearbeiten.",
        'ignoreddomains_stored'         => "Die zu ignorierende Domains wurden gespeichert.",
        'ignoreddomains_store'          => "Speichere diese Ignorierten Domains",
        'ignoreddomains_asterisk'       => "Einträge, die mit einem Sternchen ( * ) markiert sind, werden nur zum Blockieren von Referern genutzt. Alle anderen Einträge blockieren Referer, Kommentare und Trackbacks gleichermaßen.",
        'ignoreddomains_global'         => "Global blockierte Phrasen (Satzteile).",
        'ignoreddomains_global_desc'    => "Unabhängig von den oben aufgeführten Begriffen kannst Du auch eine aktuelle Liste nutzen, die Dein Pivot vom pivotlog.net Server abrufen kann. Momentan beinhaltet die Liste folgende Phrasen:",
        'ignoreddomains_global_empty'   => "Die Liste der global blockierten Phrasen ist leer",
        'ignoreddomains_global_update'  => "Liste der globalen Phrasen aktualisieren (von pivotlog.net)",
        'ignoreddomains_global_delete'  => "Liste löschen",
        'ignoreddomains_global_success' => "Die Liste mit globalen Phrasen wurde aktualisiert und gespeichert.",
        'ignoreddomains_global_failed'  => "Die Liste mit globalen Phrasen konnte nicht geladen (und gespeichert) werden. Versuch es bitte später nocheinmal!",
        'ignoreddomains_global_deleted' => "Die Liste mit globalen Phrasen wurde gelöscht.",
        'fileexplore'                => "Datei-Explorer",
        'fileexplore_title'          => "Dateien ansehen, (sowohl Text- als auch Datenbankdateien)",
        'sendping_title'             => "Pings zu Update-Tracker(n) senden.",
        'buildindex_start'           => "Index wird erstellt ... Dies kann etwas dauern, bitte NICHT unterbrechen.",
        'buildsearchindex_start'     => "Such-Index wird erstellt ... Dies kann etwas dauern, bitte NICHT unterbrechen.",
        'buildindex_finished'        => "Die Erstellung des Index dauerte %num% Sekunden",
        'filemappings_desc'          => "Nachfolgend siehst Du eine Übersicht aller installierten Weblogs innerhalb dieses Pivots, zusammen mit den von Pivot erstellten Dateien und welche Templates dazu benutzt wurden.<br /> Dies kann sehr nützlich bei der Fehlersuche sein, falls Du Probleme beim Erstellen der Dateien hast.",
        'debug'                      => "Debug-Fenster öffnen",
        'latest_pivot_news'          => "Aktuelles und Neues von Pivot",
        'remove_setup_header'        => "Pivot-Installations-Skript existiert",
        'remove_setup'               => "Das Pivot-Installations-Skript 'pivot-setup.php' wurde im Pivot-Hauptverzeichnis gefunden. Das ist ein potenzielles Sicherheitsrisiko. Wir empfehlen, das Skript zu löschen oder umzubenennen, so daß es nicht mutwillig ausgeführt werden kann.",
        'magic_quotes_header'        => "<i>Magic quotes</i> sind aktiviert.",
        'magic_quotes'               => "Auf dem Server ist die PHP-Option 'Magic quotes' aktiviert. Dies kann die Nutzung von Pivot beeinträchtigen. Weitere Informationen zu dieser Thematik in der <a href='http://www.pivotlog.net/docs/doku.php?id=servers_with_magic_quotes'>Pivot-Dokumentation</a>.",
        'register_globals_header'    => "<i>Register Globals</i> ist aktiviert",
        'register_globals'           => "Auf dem Server ist die PHP-Option 'register globals' aktiviert. Diese Einstellung stellt ein ernsthaftes Sicherheitsrisiko dar und sollte ausgeschaltet werden. Lösungen und Anregungen hierzu in der Pivot-Dokumentation '<a href='http://www.pivotlog.net/docs/doku.php?id=servers_with_register_globals'>Servers with register_globals</a>'.",
        'spamprotection'             => "Spam - Schutz",
        'spamprotection_title'       => "Übersicht über die verschiedenen Tools, die dabei helfen, das Weblog spam-frei zu halten",
        'spamconfig'                 => "Spam Einstellungen",
        'spamconfig_title'           => "Anti-Spam-Tols (wie HashCash und SpamQuiz) konfigurieren.",
        'seespamconfig_title'        => "Anti-Spam-Tools konfigurieren",
        'spamwasher'                 => "Spam Washer",
        'spamwasher_title'           => "Sucht nach Spam und entfernt ihn aus den Einträgen und Trackbacks.",
        'spamlog'                    => "Spam Log",
        'spamlog_title'              => "Spam Log anzeigen und zurücksetzen.",
        'viewspamlog_title'          => "Spam Log anzeigen",
);


// Templates 
$lang['templates'] = array (
        'rollback'                   => "Rollback, rückgängig machen",
        'create_template'            => "Template erstellen",
        'create_template_info'       => "Neues Template anlegen",
        'no_comment'                 => "Keine Kommentare",
        'comment'                    => "Kommentar*",
        'comment_note'               => "(*Beachte: Kommentare können nur beim <b>ersten</b> Speichern erstellt werden.)",
        'create'                     => "Template erstellen",
        'editing'                    => "Bearbeiten",
        'filename'                   => "Dateiname",
        'save_changes'               => "Änderungen speichern!",
        'save_template'              => "Template speichern!",
        'aux_template'               => "Hilfs-Template",
        'sub_template'               => "Subtemplate",
        'standard_template'          => "Normales Template",
        'feed_template'              => "Feed-Template",
        'css_template'               => "CSS-Datei",
        'txt_template'               => "Text-Datei",
        'php_template'               => "PHP-Datei",
);

//  Wartung  
$lang['maint'] = array (
        'title'                      => "Wartung",
        'gen_arc_title'              => "Archiv generieren",  
        'gen_arc_text'               => "Alle Archive neu generieren",  
        'xml_title'                  => "Überprüfe XML-Dateien",  
        'xml_text'                   => "Überprüft  (und repariert, falls notwendig) die Integrität der XML-Dateien", 
        'backup_title'               => "Sicherheitskopie",
        'backup_text'                => "Erstellt eine Sicherheitskopie aller wichtigen Pivot-Dateien",
);

//  Spam - Schutz
$lang['spam'] = array (
        'hc_options'                 => "HashCash Optionen",
        'hc'                         => "HashCash einsetzen",
        'hc_desc'                    => "HashCash ist ein äußerst leistungsstarker, im Hintergrund wirkender Spamschutz. Er benötigt Javascript, um auf dem Client-Rechner zu funktionieren. Falls das für Dich nicht in Frage kommt, laß es einfach ausgeschaltet.",
        'sq_options'                 => "SpamQuiz Optionen",
        'sq'                         => "SpamQuiz einsetzen",
        'sq_desc'                    => "Bevor ein Kommentar eingetragen wird, müssen die Kommentierer eine einfache Frage richtig beantworten, deren Antwort jeder kennt. Dies verwirrt automatisierte Spam-bots, weil jeder Blogger etwas anderes wählt.",
        'sq_question'                => "Frage",
        'sq_question_desc'           => "Beispiel: Was sind die ersten beiden Buchstaben des Wortes 'Spam'?",
        'sq_answer'                  => "Antwort",
        'sq_answer_desc'             => "Beispiel: <b>Sp</b>",
        'sq_explain'                 => "Erklärung",
        'sq_explain_desc'            => "Beispiel: Um automatisiertem Kommentarspam vorzubeugen, muß diese einfache Frage beantwortet werden.",
        'sq_days'                    => "Verfallszeit",
        'sq_days_desc'               => "Aktiviert SpamQuiz nur für Einträge die älter sind als die hier angegebene Zahl an Tagen. Normalerweise sind nur ältere Einträge von automatisiertem Kommentarspam betroffen. Von daher ist es nicht unbedingt notwendig, die regelmäßigen Besucher mit diesem Quiz zu belästigen (die beispielsweise mehrfach pro Woche kommentieren).",
        'ht_options'                 => "Härtere Trackback Optionen",
        'ht'                         => "Benutze Härteren Trackback",
        'ht_desc'                    => "Härterer Trackback ist ein leistungsstarker Trackback Spam Schutz. Er benötigt Javascript, um auf dem Clientrechner zu funktionieren. Falls das für Dich nicht in Frage kommt, laß ihn einfach ausgeschaltet.",
        'tburl_gen'                  => "Klicken Sie, um eine Trackback - URL zu generieren",
        'tburl_gen_note'             => "Achtung: diese generierte URL ist nur 15 Minuten gültig und benötigt Javascript!",
        'tburl_gen_javascript'       => "Bitte Javascript im Browser aktivieren, um eine Trackback URL generieren zu können.",
        'enable_js_comm'             => "Bitte Javascript im Browser aktivieren (und diese Seite neu laden) um Kommentare hinzufügen zu können.",
        'empty_log'                  => "Spam Log ist leer.",
        'reset_log'                  => "Spam Log zurücksetzen",
        'reset_log_done'             => "Spam Log zurückgesetzt",
);


//  Statistik und Referer
$lang['stats'] = array (
          'show_last'                => "Zeige die neuesten",
          '20ref'                    => "20 Referer",
          '50ref'                    => "50 Referer",
          'allref'                   => "alle Referer",
          'updateref'                => "Aktualisiere die Referer zu den Titel-Listen.",
          'showunblocked'            => "nur nicht blockierte Zeilen",
          'showall'                  => "sowohl blockierte als auch nicht blockierte Zeilen",
          'hostaddress'              => "Host-Adresse (IP-Adresse)",
          'whichpage'                => "welche Seite",
          'getting'                  => "Sammle neue Titel",
          'awhile'                   => "Der Vorgang kann einige Zeit in Anspruch nehmen, bitte NICHT unterbrechen",
          'firstpass'                => "Erster Durchlauf",
          'secondpass'               => "Zweiter Durchlauf",
          'nowuptodate'              => "Die Referer - Liste wurde aktualisiert.",
          'finished'                 => "Erledigt",
 );


//  User-Daten
$lang['userinfo'] = array (
        'editfields'                 => "Benutzerfelder bearbeiten",
        'desc_editfields'            => "Eingabefelder, die der Benutzer für sein Profil verwenden kann.",
        'username'                   => "Benutzername",
        'pass1'                      => "Passwort",
        'pass2'                      => "Passwort - Bestätigung",
        'email'                      => "E-Mail",
        'nickname'                   => "Spitzname",
        'url'                        => "URL",
        'verified'                   => "überprüft.",
        'verified_desc'              => "Nutzer-Konto dieses Benutzers überprüfen.",
        'disabled'                   => "Deaktviert",
        'disabled_desc'              => "Nutzer-Konto deaktivieren (keine Kommentare mit diesem Konto mehr möglich).",
        'userlevel'                  => "Benutzer-Level",
        'userlevel_desc'             => "Der Benutzer-Level legt die Berechtigungen für den Benutzer in Pivot fest.",
        'language'                   => "Sprache",
        'lastlogin'                  => "Letzer Login",
        'users'                      => "Benutzer",
        'commusers'                  => "Registrierte Nutzer",
        'edituser'                   => "Bearbeite Benutzer",  
        'editcommuser'               => "Bearbeite registrierte Nutzer",
        'edituserinfo'               => "Bearbeite Benutzer-Informationen",
        'selfreg'                    => "Selbstregistrierung",
        'newuser'                    => "Neuen Benutzer einrichten",
        'desc_newuser'               => "Einen neuen Account in Pivot einrichten, um dem Benutzer das Erstellen von Artikel zu ermöglichen.",
        'newuser_button'             => "Erstellen",
        'edituser_button'            => "Ändern",
        'pass_too_short'             => "Passwort muß mindestens 4 Zeichen lang sein.",
        'pass_equal_name'            => "Das Passwort darf nicht identisch mit dem Usernamen sein.",
        'pass_dont_match'            => "Passwörter stimmen nicht überein",
        'username_in_use'            => "Benutzername existiert bereits",
        'username_too_short'         => "Benutzername muß mindestens 4 Zeichen lang sein.",
        'username_not_valid'         => "Benutzernamen können nur alphanumerische Zeichen (A bis Z, 0 bis 9) und Unterstriche (_) enthalten.",
        'not_good_email'             => "Die eingegebene E-Mailadresse ist ungültig",
        'c_admin_title'              => "Bitte bestätige, daß ein Administrator definiert wurde.",
        'c_admin_message'            => "Ein '".$lang['userlevels']['1']."' hat alle Rechte in Pivot, kann alle Artikel und Kommentare verändern, und ist in der Lage alle Einstellungen zu ändern. Bist Du sicher, dass Du aus %s einen '".$lang['userlevels']['1']."' machen willst?",
);


//  Konfigurations-Seite
$lang['config'] = array (
        'save'                       => "Einstellungen speichern.",
        'sitename'                   => "Seiten-Name",
        'defaultlanguage'            => "Standard - Sprache",
        'defaultencoding'            => "Kodierung anwenden",
        'defaultencoding_desc'       => "Definiert den Zeichensatz (encoding), der eingesetzt wird (z.B. UTF-8 oder iso-8859-1).<br />Trage hier nichts ein, wenn Du Dich nicht auskennst.<br />Dann gelten die Einstellungen der vorher ausgewählten Sprachdatei.",
        'defaulttheme'               => "Standard-Theme",
        'selfreg'                    => "Selbstregistrierung zulassen",
        'selfreg_desc'               => "Wenn hier <b>Ja</b> gewählt wird, können Benutzer sich als (normalen) Benutzer registrieren und damit auch Einträge erstellen. (Achtung: Das ist kein <b>Kommentar</b> Benutzer, sondern jemand der dann - ähnlich wie Du - Einträge schreiben kann.)",
        'xmlrpc'                     => "XML-RPC aktivieren",
        'xmlrpc_desc'                => "<b>Ja</b>  ermöglicht, Blog-Einträge auch von sog. <b>Desktop Blog Applikationen</b> aus einzutragen (es wird dann die MetaWeblog API genutzt).",
        'siteurl'                    => "URL der Seite",
        'header_fileinfo'            => "Datei-Info",
        'localpath'                  => "Lokaler Pfad",
        'debug_options'              => "Debug-Optionen",
        'debug'                      => "Debug-Modus",
        'debug_desc'                 => "Gelegentlich Debug-Informationen anzeigen ...",
        'log'                        => "Logdateien",
        'log_desc'                   => "Logdateien für verschiedene Aktivitäten erstellen",
        'unlink'                     => "Geblockte Dateien wieder freisetzen",
        'unlink_desc'                => "Auf einigen Servern, bei denen der unselige safe_mode eingeschaltet ist, muß man ein wenig mit dieser Option herumprobieren.<br />Bei den meisten Servern dürfte diese Option aber keine Auswirkungen haben.",
        'chmod'                      => "Chmod-Rechte für Dateien",
        'chmod_desc'                 => "Einige Server verlangen spezielle Rechte für erstellte Dateien. Mögliche Werte wären '0644' und '0755'.<br />Wenn Du dich damit nicht auskennst, ändere hier besser nichts.",
        'header_uploads'             => "Dateien hochladen",
        'upload_path'                => "Upload-Pfad",
        'upload_accept'              => "Zulässige Dateiformate",
        'upload_extension'           => "Standard-Datei-Endung",
        'upload_save_mode'           => "Überschreiben",
        'make_safe'                  => "In websicheren Dateinamen umwandeln",
        'c_upload_save_mode'         => "Dateinamen werden hochgezählt",
        'max_filesize'               => "Maximale Dateigröße",
        'header_datetime'            => "Datum/Uhrzeit",
        'timeoffset_unit'            => "Einheit, in der der Zeitunterschied gemessen wird",
        'timeoffset'                 => "Zeitunterschied <b>lokale Zeit - Serverzeit</b>",
        'header_extra'               => "Weitere Einstellungen",
        'wysiwyg'                    => "WYSIWYG-Editor standardmäßig aktivieren",
        'wysiwyg_desc'               => "Legt fest, ob der WYSIWYG-Editor standardmäßig eingestellt sein soll.<br />Jeder Benutzer kann dies für sich selbst in seinem Profil definieren.",
        'basic_view'                 => "Grundansicht benutzen",
        'basic_view_desc'            => "Legt fest, ob der <b>neue Eintrag</b> in der Grundansicht oder in der erweiterten Ansicht geöffnet wird.",
        'def_text_processing'        => "Standardverhalten bei der Texteingabe",
        'text_processing'            => "Texteingabe",
        'text_processing_desc'       => "Legt fest, wie der Benutzer den Text eingeben kann, wenn kein  WYSIWYG-Editor verwendet wird.<br /> 'Konvertiere Absätze' ändert nur die Zeilenumbrüche in einen &lt;br&gt;-Tag.<br /><a href=\"http://www.textism.com/tools/textile/\" target=\"_blank\">Textile</a> ist eine mächtige und zugleich einfach zu erlernende Textformatierungssprache.",
        'none'                       => "Nichts",
        'convert_br'                 => "Konvertiere Absätze zu &lt;br /&gt;",
        'textile'                    => "Textile benutzen",
        'markdown'                   => "Markdown",
        'markdown_smartypants'       => "Markdown und SmartyPants ( = Zeichensetzung für Webseiten)",
        'allowed_cats'               => "erlaubte Kategorien",
        'allowed_cats_desc'          => "Der User kann Einträge in den gewählten Kategorien erstellen.",
        'delete_user'                => "User löschen",
        'delete_user_desc'           => "Du kannst diesen User löschen, wenn Du möchtest. Seine Postings bleiben zwar erhalten, aber er sich nicht mehr anmelden können.",
        'delete_user_confirm'        => "Der Zugang für %s soll dauerhaft gesperrt werden (User wird gelöscht). Bist Du sicher?",
        'delete_commuser'            => "Registrierten Nutzer löschen",
        'delete_commuser_desc'       => "Der registrierte Nutzer kann gelöscht werden. Seine Kommentare werden damit nicht gelöscht.",
        'delete_commuser_confirm'    => "Das Nutzer-Konto von %s wird gelöscht. Bist du sicher?",
        'setup_ping'                 => "Ping-Einstellungen",
        'ping_use'                   => "Erlaube Update - Tracker",
        'ping_use_desc'              => "Dieses Feature sendet Update - Trackern wie z.B. weblogs.com Informationen, wenn ein neuer Artikel gepostet wurde.<br />Webseiten wie blogrolling.com brauchen diesen Ping.",
        'ping_urls'                  => "URLs, die angepingt werden sollen",
        'ping_urls_desc'             => "Du kannst mehrere URLS definieren, an die Update-Informationen geschickt werden sollen.<br />Schreibe jeden Servernamen OHNE http://, jeweils eine URL pro Zeile, getrennt durch ein \"|\" Zeichen. Bekannte Server sind z.B.:<br /><b>rpc.weblogs.com/RPC2</b> (weblogs.com pinger, der Bekannteste)<br /><b>pivotlog.net/pinger</b> (pivotlog pinger, noch nicht online)<br /><b>rcs.datashed.net/RPC2</b> (euro.weblogs.com pinger)<br /><b>ping.blo.gs</b> (blo.gs pinger). Für deutschsprachige Artikel ist auch blogg.de interessant.<br />",
        'setup_tb'                   => "Trackback - Einstellungen",
        'tb_email'                   => "Email",
        'tb_email_desc'              => "Wenn aktiviert, wird eine Email an diese Adresse geschickt, sobald ein Trackback hinzugefügt wurde.",
        'new_window'                 => "Links in einem neuen Fenster öffnen",
        'emoticons'                  => "Emoticons benutzen",
        'javascript_email'           => "E-Mailadresse codieren",
        'new_window_desc'            => "Legt fest, ob Links im Artikeltext in einem neuen Fenster geöffnet werden sollen.",
        'mod_rewrite'                => "Mod_rewrite (Filesmatch) benutzen",
       'mod_rewrite_desc'           => "Wenn <i>Apache mod_rewrite</i> gewählt ist, wird Pivot URLs wie <i>www.mysite.com/archive/2003/05/30/nice_weather</i>\nanstelle von <i>www.mysite.com/pivot/entry.php?id=134</i>\nerzeugen.\n<br /><b>Achtung: Voraussetzung für das Funktionieren dieser Einstellung ist, daß die Datei <i>example.htaccess</i> in <i>.htaccess</i> umbenannt wird.<br />\nLade diese Datei dann in das Hauptverzeichnis deiner Pivot-Installation hoch.</b>\n<br />Weitere Informationen zu diesem Thema gibt es im Abschnitt <a href=\"http://www.pivotlog.net/docs/doku.php?id=using_apache_s_mod_rewrite\">Using Apache's Mod_rewrite</a> in der Pivot-Dokumentation.\n<br />Wähle nun hier das gewünschte Format aus.<br />Nicht alle Server unterstützen diese Funktion.<br />Im Zweifelsfall findest du Infos in der Server-Dokumentation oder erkundige Dich bei Deinem Provider.",
        'mod_rewrite_1'              => "Ja, /archive/2005/04/28/title_of_entry",
        'mod_rewrite_2'              => "Ja, /archive/2005-04-28/title_of_entry",
        'mod_rewrite_3'              => "Ja, /entry/1234",
        'mod_rewrite_4'              => "Ja, /entry/1234/title_of_entry",
        'default_introduction'       => "Standardvorlage für neuen Artikel (Einleitung / Haupttext)",
        'default_introduction_desc'  => "Dies legt die Standardwerte für Einleitung / Haupttext in einem neuen Artikel fest. Standardmäßig ist dieser Eintrag leer.",
        'search_index'               => "Suchindex automatisch aktualisieren",
        'search_index_desc'          => "Dies legt fest, ob der Suchindex automatisch aktualisiert wird, wenn ein neuer Artikel verfasst oder ein bestehender Artikel geändert wird.",
        'default_allow_comments'     => "Kommentieren generell erlauben",
        'default_allow_comments_desc' => "Legt fest, ob das Kommentieren von Einträgen generell erlaubt ist oder nicht.",
        'moderate_comments'          => "Kommentare freischalten",
        'moderate_comments_desc'     => "%1 Kommentar(e) sind noch  nicht freigeschaltet.",
        'moderate_comments_desc'     => "Legt fest, ob Kommentare freigegeben werden müssen, bevor sie auf der Seite ausgegeben werden.",
        'maxhrefs'                   => "Anzahl an Links",
        'maxhrefs_desc'              => "Die maximale Anzahl an Links die pro Kommentar erlaubt sind. Sehr nützlich um die nervigen Kommentarspammer abzuwimmeln. Eine \"0\" (null) hebt die Beschränkung auf.",
        'rebuild_threshold'          => "Rebuild Grenzwert",
        'rebuild_threshold_desc'     => "Die Zeit (in Sekunden), die für den Wiederaufbau der Seiten benötigt wird, bevor Pivot die Seite neu lädt.<br /> Standardmäßig ist 28 eingestellt.<br />Versuche den Wert auf 10 zu senken, falls Probleme beim Regenerieren der Seite auftreten.",
        'default_introduction'       => "Grundeinstellungen für Einleitung/Inhalt",
        'default_introduction_desc'  => "Standardwerte für die Einleitung und den Inhalt der neuen Einträge, wenn ein Autor einen solchen verfaßt.<br />Normalerweise wird das Feld leer gelassen.",
        'upload_autothumb'           => "Automatische Thumbnails",
        'upload_thumb_width'         => "Thumbnail-Breite",
        'upload_thumb_height'        => "Thumbnail-Höhe",
        'upload_thumb_remote'        => "Externes cropping-Script",
        'upload_thumb_remote_desc'   => "Wenn auf dem Server nicht die notwendigen Bibliotheken für automatisierte Imagebeschneidung (Cropping) zur Verfügung stehen, kann hier ein externes Cropping-Script eingebunden werden.",
        'extensions_header'          => "Extensions-Verzeichnis (Erweiterungen)",
        'extensions_desc'            => "Das 'extensions'-Verzeichnis, in dem die Erweiterungen für Pivot gespeichert werden.<br />Das vereinfacht das Updaten erheblich.<br />Mehr Informationen dazu gibts in der Dokumentation.",
        'extensions_path'            => "Pfad zum Extensions-Verzeichnis",
        'tag_options'                => "Tag-Optionen",
        'tag_cache'                  => "Lebensdauer des Caches",
        'tag_cache_desc'             => "Zeitraum (in Minuten) für das Vorhalten der Tag-Seite im Cache.",
        'tag_flickr'                 => "Flickr Bilder anzeigen",
        'tag_flickr_desc'            => "Bei <b>Ja</b> wird Pivot Bilder von Flickr.com, die mit dem gleichen Tag gekennzeichnet sind, einbinden.",
        'tag_flickr_amount'          => "Anzahl Bilder",
        'tag_flickr_amount_desc'     => "Anzahl der Bilder, die von Flickr eingebunden werden sollen.",
        'tag_fetcher'                => "Feeds anzeigen",
        'tag_fetcher_desc'           => "Wenn <b>Ja</b> gewählt ist, wird Pivot Buttons anzeigen, die Feeds mit dem gleichen Tag von verschiedenen Web-Seiten anzeigen.",
        'tag_fetcher_amount'         => "Anzahl Einträge",
        'tag_fetcher_amount_desc'    => "Die Zahl der Einträge, die pro Feed eingebunden werden.",
        'tag_min_font'               => "Minimal-Größe",
        'tag_max_font'               => "Maximal-Größe",
        'tag_max_font_desc'          => "Die Größe (in Pixels), die für das Einbinden der Tag-Cloud freigehalten wird.<br />Häufig genutzte Tags werden in größerer Schrift angezeigt.",  
);

//  Weblog-Konfiguration
$lang['weblog_config'] = array (
        'edit_weblog'                => "Weblog bearbeiten:",
        'edit_blog'                  => "Weblogs bearbeiten:",
        'new_weblog'                 => "Neues Weblog",
        'new_weblog_desc'            => "Neues Weblog hinzufügen",
        'del_weblog'                 => "Weblog löschen",
        'del_this_weblog'            => "Dieses Weblog löschen.",
        'create_new'                 => "Neues Weblog erstellen",
        'subw_heading'               => "Du kannst für jedes Subweblog festlegen, welches Templates es benutzen soll und welche Kategorien diesem Weblog zur Verfügung stehen.",
        'create'                     => "Fertig",
        'create_1'                   => "Erstellen  / Ändern Weblog, Schritt 1 von 3",
        'create_2'                   => "Erstellen  / Ändern Weblog, Schritt 2 von 3",
        'create_3'                   => "Erstellen  / Ändern Weblog, Schritt 3 von 3",
        'name'                       => "Weblog - Name",
        'payoff'                     => "Untertitel",
        'payoff_desc'                => "Gib hier einen Untertitel oder Slogan ein. (optional)",
        'url'                        => "Weblog - URL",
        'url_desc'                   => "Pivot legt die URL selbst fest, wenn dieses Eingabefeld leerbleibt.<br />Ist das Weblog jedoch Teil eines Framesets oder eines Server-Side-Includes, sollte der Name hier unbedingt festgelegt werden.",
        'index_name'                 => "Hauptseite (Index)",
        'index_name_desc'            => "Der Dateiname der Index-Datei.<br /> Meistens so etwas wie 'index.html' oder 'index.php'.",
        'ssi_prefix'                 => "SSI-Prefix",
        'ssi_prefix_desc'            => "Wenn das Weblog SSI benutzt (was nicht empfehlenswert ist), kannst Du dieses Eingabefeld benutzen, um die SSI-Dateinamen für die Pivotdateien anzugeben. 'index.shtml?p='.<br />Laß dieses Eingabefeld einfach leer, es sei denn, Du weißt genau was Du tust.",
        'front_path'                 => "Pfad zur Hauptseite",
        'front_path_desc'            => "Der relative oder absolute Pfad für die Erstellung der Hauptseite.",
        'file_format'                => "Dateiname",
        'entry_heading'              => "Artikel-Einstellungen",
        'entry_path'                 => "Artikel-Pfad",
        'entry_path_desc'            => "Der relative oder absolute Pfad für die Generierung der Artikelseiten.",
        'live_comments'              => "Live-Artikel",
        'live_comments_desc'         => "Wenn Du 'Live-Artikel' benutzt, muß Pivot nicht für jeden Beitrag eine neue Seite erstellen.<br />Diese Einstellung wird empfohlen.",
        'readmore'                   => "'weiterlesen'-Text",
        'readmore_desc'              => "Link-Text zur Anzeige des gesamten Artikels",
        'arc_heading'                => "Archiv-Einstellungen",
        'arc_index'                  => "Index - Datei",
        'arc_path'                   => "Archiv - Pfad",
        'archive_amount'             => "Anzahl der Archive",
        'archive_unit'               => "Archiv - Art",
        'archive_format'             => "Archiv - Format",
        'archive_none'               => "Keine Archive",
        'archive_weekly'             => "Archive pro Woche",
        'archive_monthly'            => "Archive pro Monat",
        'archive_yearly'             => "Archive pro Jahr",
        'archive_link'               => "Archiv - Link",
        'archive_linkfile'           => "Archiv - Linkformat",
        'archive_order'              => "Archiv - Sortierung",
        'archive_ascending'          => "Aufsteigend (älteste zuerst)",
        'archive_descending'         => "Absteigend (neueste zuerst)",
        'templates_heading'          => "Templates",
        'frontpage_template'         => "Template für die Hauptseite",
        'frontpage_template_desc'    => "definiert das Layout der Hauptseite.",
        'archivepage_template'       => "Template für die Archivseite",
        'archivepage_template_desc'  => "definiert das Layout für die Archivseiten.<br />Dies kann das gleiche Template sein wie das der Hauptseite.",
        'entrypage_template'         => "Template für einen kompletten Artikel",
        'entrypage_template_desc'    => "Template für die Anzeige eines einzelnen Artikels",
        'extrapage_template'         => "Template für die Extra-Seite",
        'extrapage_template_desc'    => "Template für das Layout der Archiv-Anzeige und der Such-Seite (search.php)",
        'shortentry_template'        => "Template für den 'Kurzeintrag'",
        'shortentry_template_desc'   => "Das Template, welches das Layout eines 'Kurzeintrag' bestimmt, so wie es in dem Weblog oder in den Archiven angezeigt wird, quasi die Kurzversion inklusive eines möglichen 'weiterlesen'.",
        'num_entries'                => "Anzahl der Artikel",
        'num_entries_desc'           => "Die Zahl der Artikel, die auf der Hauptseite gezeigt werden sollen",
        'offset'                     => "Offset",
        'offset_desc'                => "Festlegen, wieviel Einträge übersprungen werden sollen, wenn beispielsweise eine Liste mit <i>älteren Einträgen</i> erstellt werden soll.",
        'comments'                   => "Kommentare erlauben?",
        'comments_desc'              => "Legt fest, ob generell Kommentare zu den Beiträge geschrieben werden können.<br />(Du kannst in den erweiterten Einstellungen für jeden Artikel festlegen, ob hierfür Kommentare erlaubt sind oder nicht.) ",
        'publish_cats'               => "Diese Kategorien stehen dem neuen Weblog zur Verfügung.<br />Wähle aus, welche tatsächlich eingesetzt werden dürfen.",
        'setup_rss_head'             => "RSS und Atom-Konfiguration",
        'rss_use'                    => "Erzeuge RSS-Feeds",
        'rss_use_desc'               => "Legt fest, ob Pivot automatisch einen RSS-Feed und einen Atom-Feed für dieses Weblog generiert.",
        'rss_filename'               => "RSS - Dateiname",
        'atom_filename'              => "Atom - Dateiname",
        'rss_path'                   => "Pfad zum RSS-Feed",
        'rss_path_desc'              => "Der relative oder absolute Pfad, in dem Pivot die RSS-Feed-Dateien erzeugen soll.",
        'rss_full'                   => "erstelle komplette Feeds",
        'rss_full_desc'              => "Bestimmt, ob Pivot komplette Atom-Feeds oder RSS Feeds erstellen soll. Wenn <b>nein</b> gewählt wird, wird Pivot Feeds erstellen, die nur kurze Beschreibungen enthalten.<br />Dies mindert den Nutzen der Feeds.",
        'rss_link'                   => "Feed - Link",
        'rss_link_desc'              => "Der Link, der im Feed  auf die Hauptseite des Weblogs verweist.<br />Wenn Du dieses Feld leer läßt, wird Pivot die Weblog-Index-Seite nehmen.",
        'rss_img'                    => "Feed - Image",
        'rss_img_desc'               => "Du kannst eine Grafik angeben, die in den Feed eingebettet wird.<br />Bei einigen Feed-Readern wird das Bild zusammen mit dem Feed angezeigt.<br />Laß das Feld leer oder gib eine komplette URL an.",
        'lastcomm_head'              => "Einstellungen für 'Neueste Kommentare'",
        'lastcomm_amount'            => "Zahl der anzuzeigenden Kommentare",
        'lastcomm_length'            => "nach wieviel Zeichen abschneiden:",
        'lastcomm_format'            => "Format",
        'lastcomm_format_desc'       => "Diese Einstellungen verändern die Ausgabe 'Neueste Kommentare' ([[last_comments]]) ",
        'lastcomm_nofollow'          => "Benutze 'Nofollow'",
        'lastcomm_nofollow_desc'     => "Um den Refererspam zu bekämpfen, kannst du das Attribut rel='nofollow' an alle Links in Kommentaren und Verweisen hinzufügen.<br />Dadurch wird verhindert, dass die Spammer einen höheren Pagerank bei Google bekommen.",
        'lastref_head'               => "Einstellungen für 'Neueste Referer'",
        'lastref_amount'             => "Anzahl der zu anzeigenden Referer",
        'lastref_length'             => "Schneide ab nach wieviel Zeichen",
        'lastref_format'             => "Format",
        'lastref_format_desc'        => "Diese Einstellungen verändern die Ausgabe 'Neueste Referer' ([[last_referrers]])",
        'lastref_graphic'            => "Grafiken benutzen",
        'lastref_graphic_desc'       => "Hier wird eingestellt, ob in der Refererliste Grafiken benutzt werden sollen, um die bekanntesten Suchmaschinen anzuzeigen, von denen die Besucher kommen.",
        'lastref_redirect'           => "Referer umleiten",
        'lastref_redirect_desc'      => "Um den Refererspam zu bekämpfen, kannst Du die ausgehenden Links umleiten.<br />Dadurch wird verhindert, daß Spammer einen besseren PageRank bei Google erreichen.",
        'various_head'               => "Weitere Einstellungen",
        'emoticons'                  =>  "Emoticons verwenden",
        'emoticons_desc'             => "Legt fest, ob zum Beispiel :- ) zu einen Smiley konvertiert wird.",
        'encode_email_addresses'     => "E-Mailadressen codieren",
        'encode_email_addresses_desc' => "Definiert, ob E-Mailadressen mit Javascript geschützt werden, um das automatisierte Sammeln von E-Mailadressen durch sog. <i>Spam-Harvester</i> zu vermeiden.",
        'target_blank'               => "Neues Fenster",
        'xhtml_workaround'           => "XHTML-Workaround",
        'target_blank_desc'          => "Falls <b>Ja</b>, werden alle Links in den Artikeln in einem neuen Fenster geöffnet.<br />Wähle 'XHTML workaround' damit alle Links einen rel='external' erhalten, um ein 'wellformed XML' zu erreichen.",
        'search_format'              => "Format der Such-Ergebnisse",
        'search_format_desc'         => "Dies regelt das Format der Such-Ergebnisse auf der Such-Seite.<br />Es wird in 5 Teilen, zeilenweise, separiert durch eine Zeile mit  '----' festgelegt:<br />Top, Zusammenfassung, Listen-Anfang, alle Listeneinträge und Listen-Ende.<br />Genauere Info über diese Details gibt es in der <a href='http://pivotlog.net/docs/doku.php?id=working_with_search_results'>Pivot Dokumentation</a>.",
        'date_head'                  => "Datumseinstellungen ",
        'full_date'                  => "Schreibweise des vollständigen Datums",
        'full_date_desc'             => "Format-Festlegung für das ausführliche Datum (full date).<br />Wird meistens zu Beginn eines einzelnen Artikels ausgegeben",
        'entry_date'                 => "Veröffentlichungs-Datum (entry_date)",
        'diff_date'                  => "Alternatives Datum (diff_date)",
        'diff_date_desc'             => "Das alternative Datum wird meistens zusammen mit dem Artikeldatum verwendet.<br />Im Gegensatz zum Artikeldatum wird es nur angezeigt, wenn sich das Tages- (Veröffentlichungs- )Datum von dem des vorherigen Artikels unterscheidet.",
        'language'                   => "Sprache",
        'language_desc'              => "Definition der Sprache für die Anzeige von Daten und Zahlen sowie Festlegung des Zeichensatzes für die Webseite, z.B. 'iso-8859-1' oder 'UTF-8'.",
        'comment_head'               => "Kommentar-Einstellungen",
        'comment_sendmail'           => "Benachrichtigung bei neuen Kommentaren",
        'comment_sendmail_desc'      => "Versendet automatisch eine E-Mail bei neuen Kommentaren",
        'comment_emailto'            => "E-Mailadressen der Empfänger",
        'comment_emailto_desc'       => "An welche Adresse(n) sollen die Kommentarbenachrichtigungen geschickt werden?<br />Mehrere Adressen bitte <b>kommagetrennt</b> (,) getrennt eingeben.",
        'comment_texttolinks'        => "Text zu Links konvertieren",
        'comment_texttolinks_desc'   => "Sollen eingegebene URLs und Mailadressen automatisch in klickbare Links konvertiert werden?",
        'comment_wrap'               => "Automatischer Zeilenumbruch",
        'comment_wrap_desc'          => "Damit das Seiten-Layout nicht zerstört wird, wird der Kommentartext nach einer gewissen Anzahl von Zeichen automatisch umbrochen",
        'comments_text_0'            => "Text für 'kein Kommentar'",
        'comments_text_1'            => "Text für 'einen Kommentar'",
        'comments_text_2'            => "Text für 'X Kommentare'",
        'comments_text_2_desc'       => "Text zur Anzeige der Zahl der Kommentare.<br />Wird hier nichts eingegeben, wird Pivot Standardtexte benutzen.",
        'comment_pop'                => "Kommentare in einem Popup-Fenster anzeigen?",
        'comment_pop_desc'           => "Kommentare werden in einem Popup-Fenster geöffnet.",
        'comment_width'              => "Popup-Fenster-Breite",
        'comment_height'             => "Popup-Fenster-Höhe",
        'comment_height_desc'        => "Legt Breite und Höhe des Kommentar-Popup-Fensters fest.",
        'comment_format'             => "Format der Kommentare",
        'comment_format_desc'        => "Legt fest, wie Kommentare auf den Artikelseiten angezeigt werden sollen.",
        'comment_reply'              => "Format von 'antworten ..'",
        'comment_reply_desc'         => "Legt das Format des Links fest, den die Besucher benutzen können, um auf einen bestimmten Kommentar zu antworten.",
        'comment_forward'            => "Format von 'Antwort von ..'",
        'comment_forward_desc'       => "Legt das Format des Textes fest, der angezeigt wird, wenn ein Kommentar kommentiert (erwidert) wurde.",
        'comment_backward'           => "Format von 'Antwort an ..'",
        'comment_backward_desc'      => "Legt das Format des Textes fest, der angezeigt wird, wenn der Kommentar sich auf einen anderen Kommentar bezieht, diesen beantwortet.",
        'comment_textile'            => "Textile erlauben",
        'comment_textile_desc'       => "Wenn hier <b>Ja</b> gewählt ist, können Besucher <a href='http://www.textism.com/tools/textile' target='_blank'>Textile</a>  in ihren Kommentaren verwenden.",
        'save_comment'               => "Kommentar speichern",
        'comment_gravatardefault'    => "voreingestellter Gravatar",
        'comment_gravatardefault_desc' => "URL zu dem voreingestellten Gravatar Bild. Beginnt mit http://",
        'comment_gravatarhtml'       => "Gravatar HTML",
        'comment_gravatarhtml_desc'  => "HTML, um einen Gravatar einzubinden.<br />%img% wird dabei durch die URL des Bildes ersetzt.",
        'comment_gravatarsize'       => "Größe des Gravatars",
        'comment_gravatarsize_desc'  => "Größe (in Pixel) des Gravatars. Vorgabewert ist 48.",
        'trackback_head'             => "Trackback - Einstellungen",
        'trackback_sendmail'         => "Email senden?",
        'trackback_sendmail_desc'    => "Soll eine Benachrichtigungs-Mail an den Administrator geschickt werden, wenn ein Trackback gesetzt wird?",
        'trackback_emailto'          => "Email an",
        'trackback_emailto_desc'     => "Hier wird die Emailadresse angegeben, an welche die Mail geschickt werden soll.<br />Mehrere Adressen können, mit Komma getrennt, eingegeben werden.",
        'trackbacks_text_0'          => "Text für 'keine trackbacks'",
        'trackbacks_text_1'          => "Text für 'ein trackback'",
        'trackbacks_text_2'          => "Text für 'X trackbacks'",
        'trackbacks_text_2_desc'     => "Text zur Anzeige der Anzahl der Trackbacks.<br />Wenn Du diese Felder leer läßt, wird Pivot die standardmäßig eingestellten Texte verwenden, die in den Spracheinstellungen angegeben sind.",
        'trackback_pop'              => "Trackbacks Popup?",
        'trackback_pop_desc'         => "Hier wird eingestellt, ob die Trackbackseite (oder ein 'Einzel Eintrag') in einem Popup-Fenster oder in dem aktuellen Browserfenster angezeigt werden soll.",
        'trackback_width'            => "Popup-Fenster-Breite",
        'trackback_height'           => "Popup-Fenster-Höhe",
        'trackback_height_desc'      => "Definiere die Höhe und Breite des Trackback-Popup-Fensters (in Pixel).",
        'trackback_format'           => "Format des Trackbacks",
        'trackback_format_desc'      => "Das Format der Trackbacks auf den Eintragseiten wird hier festgelegt.",
        'trackback_link_format'      => "Format des Trackback-Links",
        'save_trackback'             => "Trackback speichern",
        'saved_create'               => "Das neue Weblog wurde erstellt.",
        'saved_update'               => "Das Weblog wurde erfolgreich modifiziert.",
        'deleted'                    => "Das Weblog wurde gelöscht.",
        'confirm_delete'             => "Du willst das Weblog %1 löschen. Bist Du sicher?",
        'blogroll_heading'           => "Blogroll Einstellungen",
        'blogroll_id'                => "Blogrolling ID #",
        'blogroll_id_desc'           => "Optional kannst Du eine <a href='http://www.blogrolling.com' target='_blank'>blogrolling.com</a>-Blogroll in Deinem Weblog einsetzen.<br /><i>Blogrolling</i> ist nützlich zum automatischen Erstellen und Updaten einer Linkliste.<br />Wenn Du das nicht willst, kannst Du diese Eingabe ignorieren.<br />Andernfalls logge Dich bitte bei blogrolling.com ein, schaue nach 'get code' und suche nach Links, die Deine blogrol-ID beinhalten - sie sollten aussehen wie dieser String: 2ef8b42161020d87223d42ae18191f6d",
        'blogroll_fg'                => "Text-Farbe",
        'blogroll_bg'                => "Hintergrund-Farbe",
        'blogroll_line1'             => "Farbe Line 1",
        'blogroll_line2'             => "Farbe Line 2",
        'blogroll_c1'                => "Farbe 1",
        'blogroll_c2'                => "Farbe 2",
        'blogroll_c3'                => "Farbe 3",
        'blogroll_c4'                => "Farbe 4",
        'blogroll_c4_desc'           => "Diese Farben legen fest, wie Dein Blogroll aussehen wird.<br /> Farbe 1  bis 4 zeigt visuell an, wie lang es her ist seit ein Link aktualisiert wurde.",
);



//  Datei hochladen
$lang['upload'] = array (
        'preview'                    => "Vorschau der vollständigen Liste",
        'thumbs'                     => "Thumbnail-Vorschau",
        'create_thumb'               => "(Thumbnail erstellen)",
        'title'                      => "Dateien",
        'thisfile'                   => "Neue Datei hochladen:",
        'button'                     => "Hochladen",
        'filename'                   => "Dateiname",
        'thumbnail'                  => "Thumbnail",
        'date'                       => "Datum",
        'filesize'                   => "Größe",
        'dimensions'                 => "Breite x Höhe",
        'delete_title'               => "Bild löschen",
        'areyousure'                 => "Bist Du sicher, das Du die Datei %s löschen willst?",
        'picheader'                  => "Dieses Bild löschen?",
        'create'                     => "erstellen",
        'edit'                       => "bearbeiten",
        'insert_image'               => "Bild einfügen",
        'insert_image_desc'          => "Um ein Bild einzufügen, muß zuerst ein Bild hochgeladen oder ein bereits hochgeladenes Bild ausgewählt werden",
        'insert_image_popup'         => "Popup-Bild einfügen",
        'insert_image_popup_desc'    => "Um ein Popup-Bild einzufügen, muß zuerst ein Bild hochgeladen oder ein bereits hochgeladenes Bild ausgewählt werden.<br />Danach wählst Du einen Text oder ein Thumbnail-Bild aus, welches als Trigger für das Popup-Fenster dienen soll.",
        'choose_upload'              => "hochladen",
        'choose_select'              => "oder auswählen",
        'imagename'                  => "Name des Bildes",
        'alt_text'                   => "Alternativer Text",
        'align'                      => "Ausrichtung",
        'border'                     => "Rahmen",
        'pixels'                     => "Pixel",
        'uploaded_as'                => "Deine Datei wurde als <b>%s</b> hochgeladen.",
        'not_uploaded'               => "Die Datei wurde nicht hochgeladen. Folgende Fehler traten auf:",
        'center'                     => "Zentrieren (Standard)",
        'left'                       => "Links",
        'right'                      => "Rechts",
        'inline'                     => "Inline",
        'notice_upload_first'        => "Du mußt zuerst ein Bild hochladen oder auswählen",
        'select_image'               => "Bild auswählen",
        'select_file'                => "Datei auswählen",
        'for_popup'                  => "Für das Popup-Fenster",
        'use_thumbnail'              => "Verwende Thumbnail",
        'edit_thumbnail'             => "Bearbeite Thumbnail",
        'use_text'                   => "Verwende Text",
        'insert_download'            => "Download erstellen",
        'insert_download_desc'       => "Um einen Download zu erstellen, mußt Du eine Datei hochladen, oder eine bereits hochgeladene Datei auswählen.<br />Dann wählst Du einen Text, ein Icon, oder ein Thumbnail um den Download zu starten.",
        'use_icon'                   => "Icon anwenden",
);


//  Link Insertion 
$lang['link'] = array (
        'insert_link'                => "Einen Link einfügen",
        'insert_link_desc'           => "Link-Beschreibung, die angezeigt wird, wenn man mit der Maus über den Link fährt.<br />Unten im Feld eintragen.",
        'url'                        => "URL",
        'title'                      => "Titel",
        'text'                       => "Text",
);

//  Kategorien           
$lang['category'] = array (
        'edit_who'                   => "Definieren, wer die Kategorie '%s' in seinem Artikel einsetzen kann.",
        'name'                       => "Name",
        'users'                      => "Benutzer",
        'make_new'                   => "Neue Kategorie erstellen",
        'create'                     => "Kategorie erstellen",
        'canpost'                    => "Bitte die Benutzer auswählen, die in dieser Kategorie Artikel verfassen dürfen",
        'same_name'                  => "Eine Kategorie mit diesem Namen existiert bereits",
        'need_name'                  => "Bitte gib einen Namen ein",
        'allowed'                    => "Erlaubt",
        'allow'                      => "Erlauben",
        'denied'                     => "Verweigert",
        'deny'                       => "verweigern",
        'edit'                       => "Kategorie bearbeiten",
        'delete'                     => "Kategorie löschen",
        'delete_desc'                => "Wähle <b>Ja</b>, um diese Kategorie zu löschen",
        'delete_message'             => "In dieser Version wird nur der Kategoriename gelöscht, in späteren Versionen kannst Du im gleichen Moment auch entscheiden, was mit den Artikel aus dieser Kategorie geschehen soll.",
        'search_index_newctitle'     => "Diese Kategorie indexieren",
        'search_index_newcdesc'      => "Nur dann auf <b>Nein</b> setzen, wenn diese Kategorie von den Seitenbesuchern nicht durchsucht werden darf.",
        'search_index_editcheader'   => "Index Kategorie",
        'order'                      => "Anzeige - Reihenfolge in der Kategorie - Auswahlbox",
        'order_desc'                 => "Kategorien mit einem niedrigeren Wert werden in der Liste zuerst angezeigt.<br />Wenn alle Kategorien den gleichen Wert zugeteilt bekommen, werden sie alphabetisch geordnet",
        'public'                     => "öffentliche Kategorie",
        'public_desc'                => "Wenn hier <b>Nein</b> ausgewählt ist, ist diese Kategorie nur für registrierte Besucher sichtbar.<br />(das gilt nur für die live Pages)",
        'hidden'                     => "Kategorie verbergen",
        'hidden_desc'                => "Wenn hier <b>Ja</b> ausgewählt ist, wird der Eintrag in den Archiv Listen versteckt.<br />(das gilt nur für die live Pages)",

);


//  Blog-Einträge    
$lang['entries'] = array (
        'post_entry'                 => "Artikel veröffentlichen",
        'preview_entry'              => "Vorschau",
        'edit_entry'                 => "Artikel bearbeiten",
        'edit_entry_desc'            => "diesen Artikel bearbeiten",
        'first'                      => "erster",
        'last'                       => "letzter",
        'next'                       => "nächster",
        'previous'                   => "vorheriger",
        'jumptopage'                 => "springe zu Seite (%num%)",
        'filteron'                   => "Filter auf (%name%)",
        'filteroff'                  => "Filter aus",
        'title'                      => "Titel",
        'subtitle'                   => "Untertitel",
        'introduction'               => "Einleitung Artikel",
        'body'                       => "Haupttext",
        'publish_on'                 => "Veröffentlicht am",
        'status'                     => "Status",
        'post_status'                => "Artikel-Status",
        'category'                   => "Kategorie",
        'select_multi_cats'          => "(STRG + Klick um mehrere Kategorien auszuwählen)",
        'last_edited'                => "Zuletzt bearbeitet am",
        'created_on'                 => "Erstellt am",
        'date'                       => "Datum",
        'author'                     => "Verfasser",
        'code'                       => "Code",
        'comm'                       => "# Kommentare",
        'track'                      => "# Track",
        'name'                       => "Name",
        'allow_comments'             => "Kommentare erlauben",
        'delete_entry'               => "Eintrag löschen",
        'delete_entry_desc'          => "diesen Eintrag und die dazugehörigen Kommentare löschen",
        'delete_one_confirm'         => "Willst Du diesen Eintrag wirklich löschen?",
        'delete_multiple_confirm'    => "Willst Du diese Einträge wirklich löschen?",
        'convert_lb'                 => "Zeilenumbrüche konvertieren",
        'always_off'                 => "(Wenn Du im WYSIWYG-Modus arbeitest, ist dies standardmässig ausgeschaltet)",
        'be_careful'                 => "(Achtung, heikel! Sei lieber vorsichtig!)",
        'edit_comments'              => "Kommentare bearbeiten",
        'edit_comments_desc'         => "Kommentare dieses Artikels bearbeiten",
        'edit_comment'               => "Kommentare bearbeiten",
        'delete_comment'             => "Kommentar löschen",
        'report_comment'             => "Kommentar melden",
        'edit_trackback'             => "Trackback bearbeiten",
        'edit_trackback_desc'        => "Die Trackbacks bearbeiten, die zu diesem Artikel eingetragen wurden.",
        'delete_trackback'           => "Trackback löschen",
        'report_trackback'           => "Trackback melden",
        'block_single'               => "IP %s blockieren",
        'block_range'                => "IP-Bereich %s blockieren",
        'unblock_single'             => "Blockierung der IP %s aufheben",
        'unblock_range'              => "Blockierung des IP-Bereiches %s aufheben",
        'trackback'                  => "Trackback - Ping",
        'trackback_desc'             => "Trackback - Ping an die hier eingetragenen URL(s) senden.<br />Um gleichzeitg an mehrere URL´s zu senden, ist jede URL in eine separate Zeile zu schreiben.",
        'keywords'                   => "Keywords",
        'keywords_desc'              => "Hier können Stichwörter angegeben werden, um den Eintrag zu finden, oder um die non-crufty URL für diesen Artikel zu setzen.<br />(Das ist eine URL ohne Sonder -z.B. Frage- Zeichen.<br />Also: www.mysite.com/archive/2003/05/30/nice_weather, statt www.mysite.com/pivot/entry.php?id=134)",
        'vialink'                    => "Via Link",
        'viatitle'                   => "Via Titel",
        'via_desc'                   => "Setzt einen Link direkt zu diesen Eintrag.",
        'entry_catnopost'            => "Du bist nicht berechtigt in der Kategorie:<b>%s</b> zu posten.",
        'entry_saved_ok'             => "Dein Eintrag <b>%s</b> wurde erfolgreich gespeichert.",
        'entry_ping_sent'            => "Ein Trackback Ping wurde gesendet an: <b>%s</b>.",
        'encoding_warning'           => "Du hast diesen Artikel in %s geschrieben, obwohl mindestens eines Deiner Weblogs eine andere Codierung verwendet.<br />Um Probleme wie dieses zu vermeiden solltest Du sicherstellen, daß alle Nutzer und Weblogs die gleiche Codierung nutzen.",
);


//  Formularkram     
$lang['forms'] = array (
        'c_all'                      => "alles auswählen",
        'c_none'                     => "nichts auswählen",
        'choose'                     => "- Wähle eine Option -",
        'publish'                    => "Status auf <b>veröffentlicht</b> setzen",
        'hold'                       => "Status auf <b>Noch nicht veröffentlichen</b> setzen",
        'delete'                     => "Löschen",
        'generate'                   => "Erstellen und Veröffentlichen",
        'with_checked_entries'       => "Die ausgewählten Artikel:",
        'with_checked_files'         => "Die ausgewählten  Dateien:",
        'with_checked_templates'     => "Die ausgewählten Templates:",
);


//  Fehlermeldungen
$lang['error'] = array (
        'path_open'                  => "Verzeichnis kann nicht geöffnet werden, kontrolliere die Rechte.",
        'path_read'                  => "Verzeichnis kann nicht gelesen werden, kontrolliere die Rechte.",
        'path_write'                 => "In das Verzeichnis kann nicht geschrieben werden, kontrolliere die Rechte.",
        'file_open'                  => "Datei kann nicht geöffnet werden, kontrolliere die Rechte.",
        'file_read'                  => "Datei kann nicht gelesen werden, kontrolliere die Rechte.",
        'file_write'                 => "In die Datei kann nicht geschreiben werden, kontrolliere die Rechte.",
        'reg_required'               => "Hierfür ist eine Registration notwendig",
        'entry_404'                  => "Dieser Eintrag existiert nicht!",  
        'entry_404_desc'             => "Diesen Eintrag gibt es noch nicht oder er ist noch nicht publiziert.",  
        'category_404'               => "Diese Kategorie gibt es nicht.",  
        'category_404_desc'          => "Diese Kategorie gibt es nicht oder sie ist noch in keinem Weblog publiziert.",          
);


//  Hinweise
$lang['notice'] = array (
        'comment_saved'              => "Der Kommentar wurde gespeichert.",
        'comment_deleted'            => "Der Kommentar wurde gelöscht.",
        'comment_none'               => "Zu diesem Artikel gibt es keine Kommentare.",
        'trackback_saved'            => "Der Trackback wurde gespeichert.",
        'trackback_deleted'          => "Der Trackback wurde gelöscht.",
        'trackback_none'             => "Zu diesem Eintrag gibt es keine Trackbacks.",
);


//  Kommentare,  Karma und Abstimmungen 
$lang['karma'] = array (
        'vote'                       => "Wähle '%val%' für diesen Artikel",
        'good'                       => "Gut",
        'bad'                        => "Schlecht",
        'already'                    => "Du hast schonmal für diesen Artikel abgestimmt.",
        'register'                   => "Deine Wahl für '%val%' wurde registriert",
);

// oben 
$lang['comment'] = array (
        'register'                   => "Dein Kommentar wurde gespeichert.",
        'preview'                    => "Dies ist die Vorschau, wähle 'Beitrag veröffentlichen' um den Kommentar zu speichern.",
        'duplicate'                  => "Dein Kommentar wurde nicht gespeichert, weil er identisch mit einem anderen Kommentar ist",
        'no_name'                    => "Bitte gib Deinen Name oder einen Alias ein.<br />Denke daran, den Kommentar zu veröffentlichen.",
        'no_comment'                 => "Du mußt im 'Kommentar'-Eingabefeld etwas eintragen.",
        'too_many_hrefs'             => "Die maximale Anzahl an Hyperlinks wurde erreicht. Hör auf zu Spammen!",
        'email_subject_comm'         => "[Kommentar]",
        'email_subject_notify'       => "[Benachrichtigung]",
        'email_posted_comm'          => "Von '%s' stammt der folgende Kommentar",
        'email_comm_on'              => "Dieser Kommentar bezieht sich auf '%s'",
        'email_allow_comm'           => "Kommentar freigeben",
        'email_delete_comm'          => "Kommentar löschen",
        'email_view_comm'            => "Kommentar aufrufen",
        'email_edit_comm'            => "Kommentar bearbeiten",
        'email_posted_entry'         => "der folgende Kommentar stammt von '%s'",
        'email_view_entry'           => "Den Eintrag aufrufen",
        'email_view_fullentry'       => "Eintrag komplett aufrufen",
        'email_view_settings'        => "Deine Einstellungen",
        'email_sent_to'              => "Die Email wurde versandt an",
        'email_notified'             => "Benachrichtigung wurde versandt an",
        'email_posted_tb'            => "der nachstehende Trackback stammt von '%s' ",
        'email_tb_on'                => "Dieser Trackback bezieht sich auf '%s'",
        'email_edit_tb'              => "Trackback editieren",
        'email_block_ip'             => "Diese IP blocken",
        'notifications'              => "Benachrichtungen",
        'oneclickdelete'             => "Löschen mit einem Klick.",
        'oneclickreport'             => "Löschen und Melden mit einem Klick.",
        'moderated'                  => "moderiert",
        'moderate_queue_on'          => "Auf dieser Seite werden die Kommentare moderiert.<br />Das bedeutet, daß die Kommentare erst dann veröffentlicht werden, wenn sie freigeschaltet wurden.",
        'moderate_stored'            => "Ihr Kommentar ist nun gespeichert und muß nun freigeschaltet werden.",
        'moderate_waiting'           => "Einer oder mehrere Kommentare sind noch nicht freigeschaltet.",
);


$lang['comments_text'] = array (
        '0'                          => "Kein Kommentar",
        '1'                          => "%num% Kommentar",
        '2'                          => "%num% Kommentare",
);

$lang['trackbacks_text'] = array (
        '0'                          => "Kein Trackback",
        '1'                          => "%num% Trackback",
        '2'                          => "%num% Trackbacks",
);



//  diese werden in den Weblogs für die Archiv-Labels genutzt 
$lang['weblog_text'] = array (
        'archives'                   => "Archive",
        'next_archive'               => "Nächstes Archiv",
        'previous_archive'           => "Vorheriges Archiv",
        'last_comments'              => "Neueste Kommentare",
        'last_referrers'             => "Neueste Verweise:",
        'calendar'                   => "Kalender",
        'links'                      => "Links",
        'xml_feed'                   => "XML-Feed (RSS 1.0)",
        'atom_feed'                  => "XML: Atom Feed",
        'powered_by'                 => "Powered by",
        'blog_name'                  => "Weblog Name",
        'title'                      => "Title",
        'excerpt'                    => "Zitat",
        'name'                       => "Name",
        'email'                      => "E-Mail",
        'url'                        => "URL",
        'date'                       => "Datum",
        'comment'                    => "Kommentar",
        'ip'                         => "IP-Adresse",
        'yes'                        => "Ja",
        'no'                         => "Nein",
        'emoticons'                  => "Emoticons",
        'emoticons_reference'        => "Emoticons-Übersicht anzeigen",
        'textile'                    => "Textile",
        'textile_reference'          => "Textile-Übersicht anzeigen",
        'post_comment'               => "Kommentar veröffentlichen",
        'preview_comment'            => "Vorschau",
        'remember_info'              => "Persönliche Informationen speichern?",
        'notify'                     => "Benachrichtigen",
        'notify_yes'                 => "Ja, ich möchte bei Antworten per Email benachrichtig werden.",
        'register'                   => "Benutzername registrieren, Anmelden",
        'registered'                 => "Registriert",
        'moderated'                  => "freigegeben",
        'waiting_moderation'         => "Dieser Kommentar ist noch nicht freigeschaltet.",
        'disclaimer'                 => "Alle HTML-Tags außer &lt;b&gt; und &lt;i&gt; werden aus Deinem Kommentar entfernt.<br />URLs oder Mailadressen werden automatisch umgewandelt.",
        'search_title'               => "Suchergebnisse",
        'search'                     => "Suche",
        'nomatches'                  => "Kein Treffer für '%name%'. Bitte einen anderen Suchbegriff nehmen.",
        'matches'                    => "Treffer für '%name%':",
        'about'                      => "Über",
        'stuff'                      => "Zeugs",
        'linkdump'                   => "Linkdump",
        'discreet'                   => "E-mail nicht anzeigen",
        'discreet_yes'               => "Ja, meine Email-Adresse soll nicht angezeigt werden.",
);

//  Nutzer-Details 
$lang['ufield_main'] = array (
        'title'                     => "Benutzerfelder bearbeiten",
        'edit'                       => "bearbeiten",
        'create'                     => "erstellen",
        'dispname'                   => "Name anzeigen",
        'intname'                    => "Interner Name",
        'intname_desc'               => "Der interne Name ist der Name, der im Template als User-Name ausgegeben wird",
        'size'                       => "Größe",
        'rows'                       => "Reihen",
        'cols'                       => "Spalten",
        'maxlen'                     => "Maximale Länge",
        'minlevel'                   => "Kleinster Benutzer-Level",
        'filter'                     => "Filter auf",
        'filter_desc'                => "Diese Option schränkt die Eingabe ein",
        'no_filter'                  => "kein Filter",
        'del_title'                  => "Löschen bestätigen",
        'del_desc'                   => "Durch das Löschen dieses Benutzerfeldes (<b>%s</b>) werden auch alle Daten, die von Benutzern in diese Felder eingegeben worden sind, gelöscht, sowie alle Stellen im Template, von denen auf dieses Eingabefeld zurückgegriffen wird.",
        'already'                    => "Der Name wird bereits benutzt.",
        'int'                        => "Der interne Name muß länger als 3 Zeichen sein",
        'short_disp'                 => "Der angezeigte Name muß länger als 3 Zeichen sein",
);

//  Bookmarks
$lang['bookmarklets'] = array (
        'bookmarklets'               => "Lesezeichen",
        'bm_add'                     => "Lesezeichen hinzufügen.",
        'bm_withlink'                => "Pivot » Neu",
        'bm_withlink_desc'           => "Dieses Lesezeichen öffnet ein separates Fenster, in dem ein neuer Artikel eingegeben werden kann.<br />Der Artikel enthält bereits einen Link auf die Seite, von der aus das Eingabe-Fenster aufgerufen wurde.",
        'bm_nolink'                  => "Pivot » Neu",
        'bm_nolink_desc'             => "Dieses Lesezeichen öffnet ein separates Eingabe - Fenster für einen neuen Artikel.",
        'bookmarklets_info'          => "Lesezeichen können zum schnellen Erstellen von neuen Artikeln verwendet werden.<br />Um ein Lesezeichen zu Deinem Browser hinzuzufügen, verwende bitte eine der folgenden Optionen:<br />(Text kann je nach Browser unterschiedlich lauten)",
        'bookmarklets_info_1'        => "Ziehe mit einem Klick das Lesezeichen auf die Favoriten-Symbolleiste Deines Browsers.",
        'bookmarklets_info_2'        => "Klicke mit der rechten Maustaste auf das Lesezeichen und wähle 'Lesezeichen hinzufügen'.",
);

/*  Accessibility - Diese Einträge werden für Formular-Felder, Label und Fieldsets genutzt
   um den "Web Content Accessibility Guidelines & 508 compliancy issues" zu entsprechen.
   siehe hier: http://webxact.watchfire.com/
*/
   
$lang['accessibility'] = array(
        'search_idname'              => "Suche",
        'search_formname'            => "Suche nach Wörtern in Einträgen dieser Webseite.",
        'search_fldname'             => "Gib die zu suchenden Wörter hier ein:",
        'search_placeholder'         => "Suchstring eingeben",
        'calendar_summary'           => "Diese Tabelle stellt einen Kalender dar. Die Einträge sind hier per Eintragsdatum verlinkt.",
        'calendar_noscript'          => "Der Kalender bietet die Möglichkeit, auf die Einträge in diesem Weblog zuzugreifen.",
        
/*      der Ländercode (2 Zeichen) um die Hauptsprache dieses Weblogs zu benennen
            siehe hier: http://www.oasis-open.org/cover/iso639a.html  
*/
        'lang'                       => $langname,
);

$lang['snippets_text'] = array (
        'word_plural'                => "Wörter",
        'image_single'               => "Bild",
        'image_plural'               => "Bilder",
        'download_single'            => "Datei",
        'download_plural'            => "Dateien",
);

$lang['trackback'] = array (
        'register'                   => "Dein Trackback wurde gespeichert.",
        'duplicate'                  => "Dein Trackback wurde nicht gespeichert, den gibt es wohl bereits.",
        'too_many_hrefs'             => "Die maximale Anzahl an Links wurde erreicht. Hör auf zu Spammen!",
        'noid'                       => "Keine TrackBack ID (tb_id)",
        'nourl'                      => "Keine URL (url)",
        'tracked'                    => "Tracked",
        'email_subject'              => "[Trackback] neuer Trackback",
);


$lang['commentuser'] = array (
        'title'                       => "Pivot Benutzer Login",
        'header'                      => "Als ein registrierter Besucher anmelden.",
        'logout'                      => "Abmelden.",
        'loggedout'                   => "Abgemeldet",
        'login'                       => "Anmelden",
        'loggedin'                    => "Angemeldet",
        'loggedinas'                  => "Angemeldet als",
        'pass_forgot'                 => "Passwort vergessen?",
        'register_new'                => "Neuen Benutzername registrieren.",
        'register'                    => "Als Benutzer registrieren",
        'register_info'               => "Bitte trage die folgenden Informationen ein. <strong>Pass auf, daß Du eine gültige Email - Adresse angibst</strong>, da an diese Adresse eine Bestätigungs - Mail geschickt wird.",
        'pass_note'                   => "Beachte: Der Inhaber der Webseite hat die Möglichkeit Dein Passwort einzusehen... <br /> Nutze <em>kein</em> Passwort<br /> welches Du auch für andere Webseiten / Accounts nutzt!",
        'show_email'                  => "Zeige meine Email Adresse bei Kommentaren.",
        'notify'                      => "Benachrichtige mich bei neuen Einträgen.",
        'def_notify'                  => "Standard-Benachrichtigung für Antworten",
        'register'                    => "Registrieren",
        'pass_invalid'                => "Falsches Passwort",
        'user_disabled'               => "Nutzer deaktiviert",
        'nouser'                      => "Benutzername nicht gefunden..",
        'change_info'                 => "Hier kannst Du Deine Informationen ändern.",
        'pref_edit'                   => "Einstellungen berbeiten",
        'pref_change'                 => "Einstellungen ändern",
        'options'                     => "Optionen",
        'user_exists'                 => "Benutzer existiert bereitss.. Bitte wähle einen anderen Namen.",
        'email_note'                  => "Du mußt eine Email Adresse angeben, da es ansonsten unmöglich ist Deinen Account freizuschalten.<br />Du kannst jederzeit angeben das Deine Email Adresse für keine anderen Besucher sichtbar ist.",
        'stored'                      => "Einstellungen wurden gespeichert",
        'verified'                    => "Dein Account wurde freigeschaltet. Bitte melde Dich an..",
        'not_verified'                => "Der Code scheint falsch zu sein. Du kannst leider nicht freigeschaltet werden.",
        'pass_sent'                   => "Dein Passwort wurde an Deine Email Adresse gesandt..",
        'user_pass_nomatch'           => "Der Benutzername und die Email-Adresse stimmen nicht überein.",
        'user_stored'                 => "Benutzer gespeichert!",
        'user_stored_failed'          => "Konnte den neuen Benutzer nicht speichern!!",
        'pass_send'                   => "Sende Passwort",
        'pass_send_desc'              => "Wenn Du Dein Passwort vergessen hast, trag Deinen Benutzernamen und Deine Email Adresse ein, und Pivot wird Dir Dein Passwort zuschicken.",
        'oops'                        => "Ach Herrje!",
        'back'                        => "Zurück",
        'back_login'                  => "Zurück zur Anmeldung",
        'forgotten_pass_mail'         => "Dein vergessenes Passwort für Pivot <b>%name%</b> lautet: \n\n%pass%\n\nBitte vergiss es nicht gleich wieder... \n\nUm dich anzumelden klicke auf den folgenden Link:\n %link% ",
        'registered'                  => "Du hast dich als Benutzer <b>%s</b> bei Pivot angemeldet",
        'reg_confirmation'            => "Bestätigung der Registrierung",
        'reg_verify_short'            => "Bestätige Deinen Account.",
        'reg_verify_long'             => "Um Deinen Account zu bestätigen klicke bitte folgenden Link:\n%s%",
        'reg_verification'            => "Die Email - Bestätigung wurde an %s gesandt.<br />Innerhalb der nächsten Minuten müsste bei Dir eine E-mail eingehen, mit der Du den Account bestätigen kannst.",
);


//  Tags 
$lang['tags'] = array (
        'tag'                         => "Tag / Stichwort",
        'tags'                        => "Tags / Stichworte",
        'tags_in_posting'             => "beitragsbezogene Tags/Stichworte",
        'click_for_universe'          => "Anzeige aller Stichwörter des gesamten Weblogs in alphabetischer Reihenfolge (Cosmos-Cloud). ",
        'localcosmos_description'     => "Anklickbares Stichwortverzeichnis des gesamten Weblogs.<br />Die Schriftgröße ist relativ zur Häufigkeit des Stichwortes gesetzt.<br/><br/>",
        'tagoverview_header'          => "Tag-Übersicht für: ",
        'entries_with_tag'            => "Einträge auf dieser Seite mit  ",
        'related_tags'                => "sinnverwandte Tags",
        'no_related_tags'             => "Keine sinnverwandten Tags",
        'latest_on'                   => "Zuletzt",
        'flickr_images'               => "Flickr Bilder für",
        'external_feeds'              => "Externe Feeds für",
        'nothing_on'                  => "Nichts auf",
        'click_icon'                  => "Zur Anzeige der Linkliste auf das Icon klicken",
        'on'                          => "auf",
        'for'                         => "für",
        'found_on'                    => "gefunden auf",
        'tag_ext_link'                => "ge-taggter extener Link",
        'other_posts_with_tag'        => "Andere Beiträge zum Thema",
        'used_tags'                   => "gesetzte Tags",
        'suggested_tags'              => "Vorgeschlagene Tags",
        'insert_tag'                  => "Tag eintragen",
        'insert_tag_desc'             => "Im Beitrag einen Tag (eventuell mit einem Link) einbinden.<br />Man kann auch einen Tag aus der unten nur auszugsweise angezeigten Tag-Cloud auswählen."
);

/* Ein kleines Tool, um die Dateien zu überprüfen .. */
if (count(get_included_files())<2) {

        $groups = count($lang);
        $total = 0;
        foreach ($lang as $langgroup) {
                $total += count($langgroup);
        }
        echo "<h2>Die Sprachdatei ist in Ordnung! Korrekt!</h2>";
        echo "Diese Datei enthält $groups Gruppen und insgesamt $total Labels.";
}

?>
