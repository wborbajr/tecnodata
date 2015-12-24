<?php
//Espa&ntilde;ol (Spanish)
//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2rd line.

// Spanish translation of Pivot lang file
// Created by Juan Antonio L. Almagro | jaalmagro@yahoo.es | http://almagro.l1h.net
// Updated by Juan Antonio: 10.11.2004
//
// Latest Update: Pivot (www.pivotlog.net) 28.01.2005
// New English strings added to bring into line with v1.22. Translation required.
//

// allow for different encoding for non-western languages
$encoding="iso-8859-1";
$langname="es";


// General \\
$lang['general'] = array (
'yes' => 'S&iacute;', //affirmative
'no' => 'No', //negative
'go' => 'Proceder', //proceed

'minlevel' => 'No tienes permiso para acceder a esta &aacute;rea de Pivot',
'email' => 'Email',
'url' => 'URL',
'further_options' => "Opciones avanzadas",
'basic_view' => "Vista B&aacute;sica",
'basic_view_desc' => "Ver s&oacute;lo los campos m&aacute;s comunes",
'extended_view' => "Vista Extendida",
'extended_view_desc' => "Ver todos los campos editables",
'select' => "Seleccionar",
'cancel' => "Cancelar",
'delete' => 'Eliminar',
'welcome' => "Bienvenido a %build%.",
'write' => "Escribir",
'write_open_error' => "Error de escritura. No se pudo abrir el fichero para escribir",
'write_write_error' => "Error de escritura. No se pudo escribir en el fichero",
'done' => "Hecho!",
'shortcuts' => "Atajos",
'cantdelete' => "No posee autorizaci&oacute;n para eliminar la entrada %title%!",
'cantdothat' => "No posee autorizaci&oacute;n para realizar eso con la entrada %title%!",
);


$lang['userlevels'] = array (
'SuperAdministrador', 'Administrador', 'Avanzado', 'Normal', 'Moblogger'
// this one might be a bit hard to translate, but basically it's an order of
// power or trust. Superadmin would be the person in charge - no one can do
// anything about his decisions. Admin is only regulated by the Superadmin,
// Advanced by the Admin and Superadmin, etc..
// Just get the idea of it.
);


$lang['numbers'] = array (
'cero', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez', 'once', 'doce', 'trece', 'catorce', 'quince', 'diecis&eacute;is'
);


$lang['months'] = array (
'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);


$lang['months_abbr'] = array (
'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'
);


$lang['days'] = array (
'Domingo', 'Lunes', 'Martes', 'Mi&eacute;rcoles', 'Jueves', 'Viernes', 'S&aacute;bado'
);


$lang['days_abbr'] = array (
'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'
);


$lang['days_calendar'] = array (
'D', 'L', 'M', 'X', 'J', 'V', 'S'
);


$lang['datetime_words'] = array (
'A&ntilde;o', 'Mes', 'Semana', 'D&iacute;a', 'Hora', 'Minuto', 'Segundo' //the actual words for them.
);


// Login Page \\
$lang['login'] = array (
'title' => 'Validaci&oacute;n',
'name' => 'Usuario',
'pass' => 'Contrase&ntilde;a',
'remember' => 'Recordar',
'rchoice' => array (
'0' => 'Nada',
'1' => 'Mi Usuario y Contrase&ntilde;a',
'2' => 'Que deseo permanecer validado'
),
'delete_cookies_desc' => 'Si cree realmente que est&aacute; usando el usuario y contrase&ntilde;a correctos, pero tiene <br />problemas para validarse, deber&iacute;a intentar eliminar las \'cookies\' para este dominio:',
'delete_cookies' => 'Eliminar \'cookies\'',
'retry' => 'Usuario/contrase&ntilde;a incorrectos',
'banned' => 'Ha fallado 10 veces en lograr la validaci&oacute;n. Como medida, durante 12 horas esta IP estar&aacute; bloqueada para nuevos intentos de acceso.'
);


// Main Bar \\
$lang['userbar'] = array (
'main' => 'Men&uacute; General',
'entries' => 'Entradas',
'submit' => 'Nueva Entrada',
'comments' => 'Comentarios',
'modify' => 'Modificar Entradas',
'userinfo' => 'Mi Informaci&oacute;n',
'u_settings' => 'Mis Preferencias',
'u_marklet' => 'Favoritos',
'files' => 'Gesti&oacute;n de Multimedia',
'upload' => 'Subir ficheros',
'stats' => 'Estad&iacute;sticas',
'admin' => 'Administraci&oacute;n',

'main_title' => 'Men&uacute; General de Pivot',
'entries_title' => 'Men&uacute; de Entradas',
'submit_title' => 'Nueva Entrada',
'comments_title' => 'Editar or Eliminar Comentarios',
'modify_title' => 'Modificar Entrada',
'userinfo_title' => 'Ver mi Informaci&oacute;n Personal',
'u_settings_title' => 'Editar mis Preferencias Personales',
'u_marklet_title' => 'Crear Favoritos',
'files_title' => 'Gestionar y Subir multimedia',
'upload_title' => 'Subir Ficheros',
'uploaded_success' => 'El fichero ha sido subido',
'stats_title' => 'Ver Logs y Estad&iacute;sticas.',
'updatetitles_title' => 'Ver Logs y Estad&iacute;sticas.',
'admin_title' => 'Men&uacute; de Administraci&oacute;n',
'recent_entries' => 'Entradas Recientes',
'recent_comments' => 'Comentarios Recientes',
);


$lang['adminbar'] = array (
// Admin Bar \\
//'trebuild' => 'Rebuild all Files', rolled into maintenance
'seeusers' => 'Usuarios',
'seeconfig' => 'Configuraci&oacute;n',
'filemappings' => 'File Mappings',
'templates' => 'Plantillas',
'maintenance' => 'Mantenimiento',
'regen' => 'Reconstruir Todos los Ficheros',
'blogs' => 'Weblogs',
'categories' => 'Categor&iacute;as',
'verifydb' => 'Verificar la Base de Datos',
'buildindex' => 'Reconstruir el &Iacute;ndice',
'buildsearchindex' => 'Reconstruir el &Iacute;ndice de B&uacute;squeda',
'buildfrontpage' => 'Reconstruir P&aacute;gina(s) de Portada',
'sendping' => 'Enviar Pings',


'backup' => 'Copia de Seguridad',
'description' => 'Descripci&oacute;n',
'conversion' => 'Conversi&oacute;n',
'seeusers_title' => 'Crear, editar y eliminar Usuarios',
'userfields' => 'Campos de Informaci&oacute;n del Usuario',
'userfields_title' => 'Crear, editar y eliminar Campos de Informaci&oacute;n del Usuario',
'seeconfig_title' => 'Editar el fichero de Configuraci&oacute;n',
'filemappings_title' => 'Detalles de qu&eacute; ficheros de su sitio son creados y por qué weblogs, en este Pivot',
'templates_title' => 'Crear, editar y eliminar Plantillas',
'maintenance_title' => 'Ejecutar rutina de mantenimiento de los ficheros de Pivot',
'regen_title' => 'Reconstruir los Ficheros e Hist&oacute;ricos que Pivot genera',
'blogs_title' => 'Crear, editar y eliminar Weblogs',
'blogs_edit_title' => 'Editar Preferencias para el Weblog',
'categories_title' => 'Crear, editar y eliminar las Categor&iacute;as',
'verifydb_title' => 'Verificar la integridad de su Base de Datos',
'buildindex_title' => 'Reconstruir el &Iacute;ndice de su Base de Datos',
'buildsearchindex_title' => 'Reconstruir el &Iacute;ndicede B&uacute;squeda, para permitir la b&uacute;squeda en las entradas',
'buildfrontpage_title' => 'Reconstruir la P&aacute;gina de Portada, los &uacute;ltimos hist&oacute;ricos y los ficheros RSS para cada weblog.',
'backup_title' => 'Crear una copia de seguridad de sus Entradas',
'backup_config' => 'Copia de seguridad de los ficheros de configuraci&oacute;n',
'backup_config_desc' => 'Esto le permitirá descargar un archivo zip conteniendo sus ficheros de configuración',
'ipblocks' => 'Bloqueos de IP',
'ipblocks_title' => 'Ver y Editar las direcciones IP bloquedas.',
'ipblocks_stored' => 'Las direcciones IP han sido almacenadas.',
'ipblocks_store' => 'Almacenar estas direcciones IP',
	'ignoreddomains' => 'Ignored Domains',
	'ignoreddomains_title' => 'View and Edit the Ignored Domains.',
	'ignoreddomains_stored' => 'The Ignored Domains have been stored.',
	'ignoreddomains_store' => 'Store these Ignored Domains',
'fileexplore' => 'Explorador de Ficheros',
'fileexplore_title' => 'Ver Ficheros (tanto de texto como de la base de datos)',
'sendping_title' => 'Enviar Pings a los rastreadores de actualizaciones.',
'buildindex_start' => 'Construyendo ahora el &iacute;ndice. El proceso tardar&aacute; poco tiempo, as&iacute; que, por favor, no lo interrumpa.',
'buildsearchindex_start' => 'Construyendo ahora el &iacute;ndice de b&uacute;squeda. El proceso tardar&aacute; poco tiempo, as&iacute; que, por favor, no lo interrumpa.',
'buildindex_finished' => '&iexcl;Terminado! La generaci&oacute;n del &iacute;ndice tard&oacute; %num% segundos',

'filemappings_desc' => 'Abajo puede ver una informaci&oacute;n general de cada weblog en esta instalaci&oacute;n de Pivot, junto a los ficheros que son creados por Pivot y qu&eacute; plantillas usa para crear dichos ficheros. Puede ser también muy &uacute;til a la hora de se&ntilde;alar con exactitud los problemas en la creaci&oacute;n de ficheros.',

);


$lang['templates'] = array (
'rollback' => 'Deshacer',
'create_template' => 'Crear plantilla',
'create_template_info' => 'Crear la plantilla Pivot desde cero',
'no_comment' => 'Sin Comentarios',
'comment' => 'Comentario*',
'comment_note' => '(*Nota: Los comentarios s&oacute;lo se pueden guardar en la<b>primera</b> grabaci&oacute;n de cambios o creaci&oacute;n)',
'create' => 'Crear plantilla',
'editing' => 'Editando',
'filename' => 'Nombre del fichero',
'save_changes' => '&iexcl;Guardar cambios!',
'save_template' => '&iexcl;Guardar plantilla!',
);


// Admin \\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar']['xxx_title'] ones
$lang['admin'] = array (
'seeusers' => 'Crear, editar y eliminar usuarios',
'seeconfig' => 'Editar el fichero de configuraci&oacute;n',
'templates' => 'Crear, editar y eliminar plantillas',
'maintenance' => 'Ejecutar las rutinas de mantenimiento de los ficheros de Pivot, como \'Reconstruir los Ficheros\', \'Verificar la Base de Datos\', \'Reconstruir el &Iacute;ndice\' y \'Copia de Seguridad\'.',
'regen' => 'Reconstruir todas las p&aacute;ginas que Pivot genera',
'blogs' => 'Crear, editar y eliminar los diferentes Weblogs que Pivot publicar&aacute;',
);


// Maintenace \\
$lang['maint'] = array (
'title' => 'Mantenimiento',
'gen_arc_title' => 'Generar Hist&oacute;rico', /* bob notes: redundant, see 'regen' */
'gen_arc_text' => 'Regenerar todos sus hist&oacute;ricos', /* bob notes: redundant, see 'regen' */
'xml_title' => 'Verificar Ficheros XML', /* bob notes: replace with more general 'Verify DB' */
'xml_text' => 'Verificar (y reparar si se necesitara) la integridad de los ficheros XML', /* bob notes: replace with more general 'Verify DB' */
'backup_title' => 'Copia de Seguridad',
'backup_text' => 'Crear una copia de seguridad de todos los ficheros esenciales de Pivot',
);


// Stats and referers \\
$lang['stats'] = array (
'show_last' => "Mostrar los &uacute;ltimos",
'20ref' => "20 referentes",
'50ref' => "50 referentes",
'allref' => "todos los referentes",
	'showunblocked' => "only non-blocked lines",
	'showall' => "both blocked and non-blocked lines",
'updateref' => "Actualizar el mapeo de referentes a los t&iacute;tulos",
'hostaddress' => 'Direcci&oacute;n Host (direcci&oacute;n IP)',
'whichpage' => 'Qu&eacute; p&aacute;gina',

'getting' => 'Obteniendo nuevos t&iacute;tulos',
'awhile' => 'El proceso tardar&aacute; un tiempo, por favor no lo interrumpa.',
'firstpass' => 'Primer paso',
'secondpass' => 'Segundo paso',
'nowuptodate' => 'El mapeo de referentes a los t&iacute;tulos est&aacute; ahora actualizado.',
'finished' => 'Terminado',
);


// User Info \\
$lang['userinfo'] = array (
'editfields' => 'Editar Campos de Usuario',
'desc_editfields' => 'Editar los campos que los usuarios pueden usar para describirse a s&iacute; mismos',
'username' => 'Usuario',
'pass1' => 'Contrase&ntilde;a',
'pass2' => 'Contrase&ntilde;a (confirmaci&oacute;n)',
'email' => 'E-mail',
'userlevel' => 'Nivel de usuario',
'userlevel_desc' => 'El nivel de usuario determinar&aacute; qu&eacute; tipo de acciones puede realizar en Pivot.',
'language' => 'Idioma',
	'lastlogin' => 'Last Login',
'edituser' => 'Editar Usuario', //the link to.. well, edit the usuario (also the title)
'edituserinfo' => 'Editar Informaci&oacute;n de Usuario',
'newuser' => 'Crear Nuevo Usuario',
'desc_newuser' => 'Crear una nueva cuenta de acceso para Pivot, permiti&eacute;ndoles publicar un weblog.',
'newuser_button' => 'Crear',
'edituser_button' => 'Cambiar',
'pass_too_short' => 'Contrase&ntilde;a debe tener al menos 4 caracteres de longitud.',
	'pass_equal_name' => 'Password can\'t be the same as username.',
'pass_dont_match' => 'Contrase&ntilde;as no coinciden',
'username_in_use' => 'Nombre de Usuario ya en uso',
'username_too_short' => 'Nombre necesita tener 3 caracteres o m&aacute;s',
'username_not_valid' => 'Los nombres de usuario s&oacute;lo pueden contener caracteres alfanum&eacute;ricos (A-Z, 0-9) y subrayados (_).',
'not_good_email' => 'Esa no es una direcci&oacute;n email v&aacute;lida',
'c_admin_title' => 'Confirme la creaci&oacute;n de un administrador',
'c_admin_message' => 'Un '.$lang['userlevels']['1'].' tiene total acceso a Pivot, puede editar todas las entradas, todos los comentarios y cambiar cualquier opci&oacute;n. &iquest;Est&aacute; seguro que desea convertir a %s en '.$lang['userlevels']['1'].'?',
);


// Config Page \\
$lang['config'] = array (
'save' => 'Save Settings',

'sitename' => 'Nombre del Sitio',
'defaultlanguage' => 'Idioma por defecto',
'defaultencoding' => 'Usar codificación',
'defaultencoding_desc' => 'Define la codificación que es usada (como utf-8 o iso-8859-1). Debería dejar esto en blanco, a no ser que sepa lo que está haciendo. Si lo deja en blanco, se usarán las propiedades adecuadas de los ficheros del idioma.',
'siteurl' => 'URL del Sitio',
'header_fileinfo' => 'Informaci&oacute;n de Fichero',
'localpath' => 'Ruta Local',
'debug_options' => 'Opciones de Depuraci&oacute;n',
'debug' => 'Modo Depuraci&oacute;n',
'debug_desc' => 'Mostrar informaci&oacute;n de depuraci&oacute;n aleatoriamente, aqu&iacute; y all&aacute;...',
'log' => 'Ficheros de Log',
'log_desc' => 'Mantener los Ficheros de Log de varias actividades',

'unlink' => 'Unlink Ficheros',
'unlink_desc' => 'Algunas instancias de servidores en los que está habilitado el desagradable modo \'safe_mode\', pueden requerir jugar con esta opci&oacute;. En la mayoría de servidores esta opción no tendrá ningún efecto',
'chmod' => 'Cambiar permisos (\'Chmod\') de los ficheros a',
'chmod_desc' => 'Algunos servidores puede requerir que a los ficheros creados se les cambien los permisos de un modo especial. Son valores comunes \'0644\' y \'0755\'. No cambie esto a no ser que sepa lo que est&aacute; haciendo.',
'header_uploads' => 'Subir Fichero',
'upload_path' => 'Ruta del fichero a subir',
'upload_accept' => 'Tipos Aceptados',
'upload_extension' => 'Extensi&oacute;n por defecto',
'upload_save_mode' => 'Sobreescribir',
'make_safe' => 'Limpiar el nombre de fichero',
'c_upload_save_mode' => 'Incrementar el nombre de fichero',
'max_filesize' => 'Tama&ntilde;o m&aacute;ximo del fichero',
'header_datetime' => 'Fecha/Hora',
'timeoffset_unit' => 'Unidad de Diferencia Horaria',
'timeoffset' => 'Diferencia Horaria',
'header_extra' => 'Preferencias varias',
'wysiwyg' => 'Usar WYSIWYG por defecto',
'wysiwyg_desc' => 'Determina si el editor WYSIWYG est&aacute; activo por defecto. Los usuarios pueden cambiar esto en las preferencias de \'Mi Informaci&oacute;n\'.',
'basic_view' => 'Usar Vista B&aacute;sicaBasic',
'basic_view_desc' => 'Determina si la opción \'Nueva Entrada\' se abre in Vista Básica o en Vista Extendida.',
'def_text_processing' => 'Procesamiento de texto por defecto',
'text_processing' => 'Procesamiento de texto',
'text_processing_desc' => 'Determina el procesamiento de texto por defecto, cuando un usuario no est&aacute; usando el editor WYSIWYG. \'Convertir Fines de L&iacute;nea\' no hace m&aacute;s que cambiar los finales de l&iacute;nea a <br&amp;gt;-tag. <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> es un estilo de marcas poderoso y sencillo de aprender.',
'none' => 'Ninguno',
'convert_br' => 'Convertir Finales de L&iacute;nea a &lt;br /&amp;gt;',
'textile' => 'Textile',

	'allowed_cats' => 'Allowed Categories',
	'allowed_cats_desc' => 'This user is allowed to post entries in the selected categories',
	'delete_user' => "Delete user",
	'delete_user_desc' => "You can delete this user if you would like. All of their posts will remain, but they will no longer be able to login",
	'delete_user_confirm' => 'You\'re about to remove access for %s. Are you sure you want to do this?',

'setup_ping' => 'Configuraci&oacute;n Ping',
'ping_use' => 'Ping rastreadores de actualizaci&oacute;n',
'ping_use_desc' => 'Esto determina cuando los rastreadores de actualizaci&oacute;n como weblogs.com ser&aacute;n autom&aacute;ticamente notificados por Pivot si se publica una nueva entrada. Servicios como blogrolling.com dependen de estos pings',
'ping_urls' => 'URLs a realizar ping',
'ping_urls_desc' => 'Puede proporcionar varias urls a las que realizar pings. No incluya la parte http://, o no funcionar&aacute;. S&oacute;lo coloque cada servidor en una nueva l&iacute;nea o separados por un caracter \'tuber&iacute;a\' como |. Algunos servidores comunes para realizar ping son:<br /><b>rpc.weblogs.com/RPC2</b> (weblogs.com pinger, el m&aacute;s usado mundialmente)<br /><b>pivotlog.net/pinger</b> (pivotlog pinger, todav&iacute;a no operacional)<br /><b>rcs.datashed.net/RPC2</b> (euro.weblogs.com pinger)<br /><b>ping.blo.gs</b> (blo.gs pinger)<br />',

	'setup_tb' => 'Trackback Setup',
	'tb_password' => 'Password',
	'tb_password_desc' => 'This password is used to login when deleting trackbacks. If unset, deletion of Trackbacks is disabled.',
	'tb_email' => 'Email',
	'tb_email_desc' => 'If set, an email will be sent to this address when a Tracback is added.',
	'tb_rss' => 'Generate RSS for Trackbacks',

'new_window' => 'Abrir los enlaces en una nueva ventana',
'emoticons' => 'Usar emoticonos',
'javascript_email' => '&iquest;Codificar Direcci&oacute;n Email?',
'new_window_desc' => 'Determina si todos los enlaces usados en las entradas se abrir&aacute;n en una nueva ventana del buscador.',

'mod_rewrite' => 'Usar Coincidencia de Ficheros (FilesMatch)',
'mod_rewrite_desc' => 'Si usa la opci&oacute;n de Coincidencia de Ficheros (FilesMatch) de Apache, Pivot crear&aacute; las urls como www.mysite.com/archive/2003/05/30/nice_weather, en lugar de www.mysite.com/pivot/entry.php?id=134. No todos los servidores lo soportan, as&iacute; que, por favor, lea la secci&oacute;n del manual sobre esto.',

'search_index' => 'Autoactualizar &Iacute;ndice de B&uacute;squeda',
'search_index_desc' => 'Esto determinar&aacute; si los ficheros del &Iacute;ndice de B&uacute;squeda ser&aacute;n actualizados cada vez introduzca una nueva entrada, o cambie alguna.',

'default_allow_comments' => 'Permitir comentarios por defecto',
'default_allow_comments_desc' => 'Determina si las entradas permiten comentarios o no.',

'maxhrefs' => 'Número de enlaces (links)',
'maxhrefs_desc' => 'Máximo número de hiperenlaces permitidos en los comentarios. Útil para evitar a esos molestos \'spammers\' de comentarios. Asigne 0 para un número ilimitado de enlaces.',
  'rebuild_threshold' => 'Rebuild Threshold',
  'rebuild_threshold_desc' => 'The number of seconds rebuilding takes, before Pivot refreshes the page. The default is 28, but if you are having problems with rebuilding, try lowering this number to 10.',
'default_introduction' => 'Introducci&oacute;n/Cuerpo por defecto',
'default_introduction_desc' => 'Esto determinar&aacute; los valores por defecto para la introducci&oacute;n y el \'cuerpo\' del mensaje cuando un autor escribe una nueva entrada. Normalmente ser&aacute; un p&aacute;rrafo vac&iacute;o, que da el mayor sentido sem&aacute;nticamente.',

'upload_autothumb' => 'Miniaturas (Thumbnails) Autom&aacute;ticas',
'upload_thumb_width' => 'Ancho miniatura',
'upload_thumb_height' => 'Altura miniatura',
'upload_thumb_remote' => 'Script remoto de recorte',
'upload_thumb_remote_desc' => 'Si su servidor no posee las librer&iacute;as necesarias instaladas para realizar el recorte de im&aacute;genes, puede usar un script remoto de recorte.',

'extensions_header' => 'Directorio Extensions',
'extensions_desc' => 'El directorio \'extensions\' es el lugar donde almacenar sus adiciones a Pivot.
Esto hace la actualización mucho más sencilla. Lea la documentación (Docs) para más información.',
'extensions_path' => 'Ruta del directorio Extensions',

);


// Weblog Config \\
$lang['weblog_config'] = array (
'edit_weblog' => 'Editar Weblog ',
'edit_blog' => 'Editar Weblogs',
'new_weblog' => 'Nuevo Weblog',
'new_weblog_desc' => 'A&ntilde;adir un nuevo Weblog',
'del_weblog' => 'Eliminar Weblog',
'del_this_weblog' => 'Eliminar este weblog.',
'create_new' => 'Crear nuevo Weblog',
'subw_heading' => 'Para cada uno de los subweblogs que se encontraron en las plantillas, puede configurar las plantillas que usan, as&iacute; como las categor&iacute;as que se publican en ellos',
'create' => 'Finalizar',

'create_1' => 'Crear / Editar Weblog, paso 1 de 3',
'create_2' => 'Crear / Editar Weblog, paso 2 de 3',
'create_3' => 'Crear / Editar Weblog, paso 3 de 3',

'name' => 'Nombre del Weblog',
'payoff' => 'Descripci&oacute;n',
'payoff_desc' => 'Use la descripci&oacute;n como un lema corto o un subt&iacute;tulo de su weblog',
'url' => 'URL del Weblog',
'url_desc' => 'Pivot determinar&aacute; la url de su weblog si deja este campo en blanco. Si usa su weblog como parte de un marco, o inclu&iacute;do en el lado del servidor, puede usar esto para sobreescribirla.',
'index_name' => 'P&aacute;gina de Portada (Index)',
'index_name_desc' => 'El nombre del fichero \'index\'. Normalmente es algo como \'index.html\' o \'index.php\'.',

'ssi_prefix' => 'Prefijo SSI',
'ssi_prefix_desc' => 'Si su weblog usa SSI (lo cual no se recomienda), puede usar este prefijo de los ficheros de Pivot con el nombre usado por el SSI. ejem. \'index.shtml?p=\'. Deber&iacute;a dejar esto en blanco a no ser que sepa lo que est&aacute; haciendo.',

'front_path' => 'Ruta de la P&aacute;gina de Portada',
'front_path_desc' => 'La ruta relativa o absoluta del directorio donde Pivot crear&aacute; la p&aacute;gina de portada para este blog.',
'file_format' => 'Nombre del fichero',
'entry_heading' => 'Preferencias de la Entrada',
'entry_path' => 'Ruta de las Entradas',
'entry_path_desc' => 'la ruta relativa o absoluta del directorio donde Pivot crear&aacute; las p&aacute;ginas de las entradas (si escoge no usar las \'Entradas Vivas\')',
'live_comments' => 'Entradas Vivas',
'live_comments_desc' => 'Si usa las \'Entradas Vivas\', Pivot no necesitar&aacute; generar ficheros para cada entrada. Es la opci&oacute;n preferida.',
'readmore' => ' Texto de \'Leer m&aacute;s\'',
'readmore_desc' => 'El texto que se usa para indicar que hay m&aacute;s texto en esta entrada del que se muestra en la p&aacute;gina de portada. Si deja este campo en blanco, Pivot usar&aacute; lo definido por defecto en las preferencias del idioma',

'arc_heading' => 'Preferencias del Hist&oacute;rico',
'arc_index' => 'Fichero de &Iacute;ndice',
'arc_path' => 'Ruta del Hist&oacute;rico',
'archive_amount' => 'Tama&ntilde;o del Hist&oacute;rico',
'archive_unit' => 'Tipo de Hist&oacute;rico',
'archive_format' => 'Formato del Hist&oacute;rico',
'archive_none' => 'No hay Hist&oacute;ricos',
'archive_weekly' => 'Hist&oacute;ricos semanales',
'archive_monthly' => 'Hist&oacute;ricos mensuales',

'archive_link' => 'Enlace del Hist&oacute;rico',
'archive_linkfile' => 'Formato de la lista de Hist&oacute;ricos',
'archive_order' => 'Orden del Hist&oacute;rico',
'archive_ascending' => 'Ascendente (el m&aacute;s antiguo primero)',
'archive_descending' => 'Descendente (el m&aacute;s reciente primero)',

'templates_heading' => 'Plantillas',
'frontpage_template' => 'Plantilla de la P&aacute;gina de Portada',
'frontpage_template_desc' => 'La plantilla que determina el dise&ntilde;o de la p&aacute;gina &iacute;ndice de este weblog.',
'archivepage_template' => 'Plantilla de la p&aacute;gina de Hist&oacute;ricos',
'archivepage_template_desc' => 'La plantilla que determina el dise&ntilde;o de sus hist&oacute;ricos. Puede ser la misma que la \'Plantilla de la P&aacute;gina de Portada\'.',
'entrypage_template' => 'Plantilla de las Entradas',
'entrypage_template_desc' => 'La plantilla que determina el dise&ntilde;o de las entradas.',
'extrapage_template' => 'Plantilla Extra',
'extrapage_template_desc' => 'La plantilla que determina c&oacute;mo se ver&aacute; su hist&oacute;rico y su search.php.',

'shortentry_template' => 'Plantilla de las Entradas cortas',
'shortentry_template_desc' => 'La plantilla que determina el dise&ntilde;o de las entradas, cuando se muestran dentro del weblog o de los hist&oacute;ricos.',
'num_entries' => 'N&uacute;mero de Entradas',
'num_entries_desc' => 'El n&uacute;nmero de entradas en este subweblog que ser&aacute;n mostradas en la p&aacute;gina de portada.',
'offset' => 'Diferencia',
'offset_desc' => 'Si la Diferencia contiene un n&uacute;mero, tal cantidad de entradas se saltar&aacute;n cuando se genere la p&aacute;gina. Puede usar esto para realizar una lista de \'Previsualizaci&oacute;n de Entradas\', por ejemplo.',
'comments' => '&iquest;Permitir Comentarios?',
'comments_desc' => 'Determina si los usuarios podr&aacute;n dejar comentarios a las entradas en este subweblog.',

'publish_cats' => 'Publicar estas categor&iacute;as',

'setup_rss_head' => 'Configuraci&oacute;n RSS y Atom',
'rss_use' => 'Generar Feeds',
'rss_use_desc' => 'Esto determina si Pivot generar&aacute; o no autom&aacute;ticamente una semilla (feed) de RSS y Atom para este weblog.',
'rss_filename' => 'Nombre del fichero RSS',
'atom_filename' => 'Nombre del fichero Atom',
'rss_path' => 'Ruta del Feed',
'rss_path_desc' => 'La ruta relativa o absoluta del directorio donde Pivot crear&aacute; los ficheros Feed.',
'rss_size' => 'Longitud de la Entrada Feed',
'rss_size_desc' => 'La longitud (en caracteres) de la entrada en los ficheros Feed',
'rss_full' => 'Crear Feeds Completas',
'rss_full_desc' => 'Determina si Pivot crea semillas completas (ful feeds) para Atom y RSS. Si selecciona \'no\' Pivot crear&aacute; feeds que sólo contendrán descripciones cortas, haciendo sus feeds menos &uacute;tiles.',
'rss_link' => 'Enlace del Feed ',
'rss_link_desc' => 'El enlace (link) que se env&iacute;a con el Feed, para apuntar a la p&aacute;gina principal. Si deja esto en blanco, Pivot enviar&aacute; un enlace al &iacute;ndice del weblog.',
'rss_img' => 'Imagen del Feed',
'rss_img_desc' => 'Puede especificar si enviar una imagen con el Feed. Algunos lectores de feeds mostrar&aacute;n esta imagen junto a su feed. D&eacute;jelo en blanco o especifique una URL completa.',

'lastcomm_head' => 'Preferencias para los &uacute;ltimos Comentarios',
'lastcomm_amount' => 'Cu&aacute;ntos mostrar',
'lastcomm_length' => 'Longitud a la que cortar',
'lastcomm_format' => 'Formato',
'lastcomm_format_desc' => 'Estas preferencias determinan la apariencia de los \'&uacute;ltimos comentarios\' en la p&aacute;gina de portada del weblog.',
	'lastcomm_nofollow' => 'Use \'Nofollow\'',
	'lastcomm_nofollow_desc' => 'To combat refererspam you might choose to add a rel="nofollow" attribute to all links in comments and referers, as this will not help the spammer get a better pagerank in Google.',

'lastref_head' => 'Preferencias para los &Uacute;ltimos Referentes',
'lastref_amount' => 'Cu&aacute;ntos mostrar',
'lastref_length' => 'Longitud a la que cortar',
'lastref_format' => 'Formato',
'lastref_format_desc' => 'Estas preferencias determinan la apariencia de los \'&Uacute;ltimos referentes\' en la p&aacute;gina de portada del weblog.',
'lastref_graphic' => 'Usar gr&aacute;ficos',
'lastref_graphic_desc' => 'Esto determina si los &uacute;ltimos referentes usan pequeños iconos para los motores m&aacute;s comunes de b&uacute;squeda a trav&eacute;s de los cuales pueden llegar los visitantes.',
'lastref_redirect' => 'Redireccionar Referentes',
'lastref_redirect_desc' => 'Para combatir el spam de referentes puede elegir el redireccionar los enlaces salientes a los referentes, no ayudando así a que los spammers obtengan una mejor puntuación (pagerank) en Google.',

'various_head' => 'Preferencias Varias',
'emoticons' => 'Usar Emoticonos',
'emoticons_desc' => 'Determina si los emoticonos como :-) se transformar&aacute;n en sus equivalentes gr&aacute;ficos.',
'encode_email_addresses' => 'Codificar Direcciones Email',
'encode_email_addresses_desc' => 'Determina si las direcciones de email ser&aacute;n codificadas en javascript, como protecci&oacute;n protecci&oacute;n frente a los cosechadores de spam.',
'target_blank' => 'Destino en blanco',
'xhtml_workaround' => 'XHTML Workaround',
'target_blank_desc' => 'Si seleccciona \'S&iacute;\', todos los enlaces mostrados en sus entradas se abrir&aacute;n en una nueva ventana del navegador. Si selecciona \'XHTML workaround\', todos los enlaces tendr&aacute;n un atributo rel="external", el cual no romper&aacute; los XHTML bien formados',

'date_head' => 'Preferencias de la Fecha mostrada',
'full_date' => 'Formato Fecha Completa',
'full_date_desc' => 'Determina el formato de la fecha y hora completa. Usado normalmente al principio de una entrada',
'entry_date' => 'Introducir Fecha',
'diff_date' => 'Diferencia en Fecha',
'diff_date_desc' => 'La \'Diferencia en Fecha\' se usa com&uacute;nmente junto con \'Introducir Fecha\'. La introducci&oacute;n de Fecha se muestra en cada entrada de su log, mientras que la Diferencia en Fecha s&oacute;lo se muestra si la fecha difiere de la entrada previa.',
'language' => 'Idioma',
'language_desc' => 'Determina en qu&eacute; idioma ser&aacute;n mostrados las fechas y n&uacute;meros, y también determina la codificaci&oacute;n de los caracteres de la p&aacute;gina (como iso-8859-1 o koi8-r, por ejemplo).',

'comment_head' => 'Preferencias al Comentar',
'comment_sendmail' => '&iquest;Enviar Correo?',
'comment_sendmail_desc' => 'Despu&eacute;s de que se haya escrito un comentario, se puede enviar un correo a los administradores de este weblog.',
'comment_emailto' => 'Enviar correo a',
'comment_emailto_desc' => 'Especifique las direcciones email a las que se enviar&aacute; el correo. Separe las direcciones con una coma.',
'comment_texttolinks' => 'Texto de los enlaces',
'comment_texttolinks_desc' => 'Defina si las urls y direcciones email introducidas ser&aacute;n \'clickeables\'.',
'comment_wrap' => 'Ajustar los comentarios a',
'comment_wrap_desc' => 'Para prevenir que cadenas largas de caracteres rompan su dise&ntilde;o, el texto ser&aacute; ajustado al n&uacute;mero de caracteres especificado.',
'comments_text_0' => 'Etiqueta para \'Sin comentarios\'',
'comments_text_1' => 'Etiqueta para \'Un comentario\'',
'comments_text_2' => 'Etiqueta para \'X comentarios\'',
'comments_text_2_desc' => 'El texto que se usa para indicar cu&aacute;ntos comentarios hay. Si lo deja en blanco, Pivot usar&aacute; lo definido por defecto en las preferencias del idioma.',

'comment_pop' => '&iquest;Ventanas emergentes (\'Popups\')para Comentarios?',
'comment_pop_desc' => 'Determina si los p&aacute;gina de comentarios (o \'Entrada\') se mostrar&aacute; en una ventana \'popup\' (o emergente), o en la ventana original.',
'comment_width' => 'Ancho del Popup',
'comment_height' => 'Alto de Popup',
'comment_height_desc' => 'Especifique el ancho y el alto (en p&iacute;xeles) de los pop-up de comentarios.',

'comment_format' => "Formato de los Comentarios",
'comment_format_desc' => "Esto especifica el formateo de los comentarios en la entradas.",

'comment_reply' => "Formato de 'Responder...'",
'comment_reply_desc' => "Determina el formato del enlace que los visitantes pueden usar para responder a un comentario específico.",
'comment_forward' => "Formato de 'respondido por...'",
'comment_forward_desc' => "Esto determina el formato del texto que se muestra cuando el comentario es respondido por otro comentario.",
'comment_backward' => "Formato de 'respuesta a...'",
'comment_backward_desc' => "Esto determina el formato del texto que se muestra cuando el comentario es la respuesta a otro comentario.",

'comment_textile' => 'Permitir Textile',
'comment_textile_desc' => 'Si se selecciona que \'S&iacute;\', los visitantes tienen permiso para usar <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> en sus comentarios.',

'saved_crear' => 'El nuevo weblog ha sido creado.',
'saved_update' => 'El weblog ha sido actualizado.',
'eliminard' => 'El weblog ha sido eliminado.',
'confirm_eliminar' => 'Va a eliminar el weblog %1. &iquest;Est&aacute; seguro?',

'blogroll_heading' => 'Preferencias de Blogroll',
'blogroll_id' => 'Blogrolling ID #',
'blogroll_id_desc' => 'Opcionalmente puede incluir un <a href="http://www.blogrolling.com" target="_blank">blogrolling.com</a> blogroll en su weblog. Blogrolling es un servicio excelente que mantiene una lista de enlaces, que muestra c&uacute;anto hace que se actualizaron. Si no quiere esto, simplemente ignore estos campos. En otro caso: Cuando se valide en blogrolling.com, vaya a \'get code\', y all&iacute; encontrar&aacute; enlaces que contienen su ID # de blogroll. Deber&iacute;a ser algo como esto: 2ef8b42161020d87223d42ae18191f6d',
'blogroll_fg' => 'Color del Texto',
'blogroll_bg' => 'Color del Fondo',
'blogroll_line1' => 'Color de L&iacute;nea 1',
'blogroll_line2' => 'Color de L&iacute;nea 2',
'blogroll_c1' => 'Color 1',
'blogroll_c2' => 'Color 2',
'blogroll_c3' => 'Color 3',
'blogroll_c4' => 'Color 4',
'blogroll_c4_desc' => 'Estos colores determinan c&oacute;mo se ver&aacute; su blogroll. Del color 1 al color 4 ofrecen una indicaci&oacute;n visual de lo recientemente actualizado de un enlace.',
);


$lang['upload'] = array (
// File Upload \\
'preview' => 'Lista completa de previsualizaci&oacute;n',
'thumbs' => 'Previsualizaci&oacute;n de Miniaturas (Thumbnails)',
'create_thumb' => '(Crear Miniatura)',
'title' => 'Ficheros',
'thisfile' => 'Subir un Nuevo fichero:',
'button' => 'Subir',
'filename' => 'Nombre del fichero',
'thumbnail' => 'Miniatura',
'date' => 'Fecha',
'filesize' => 'Tama&ntilde;o',
'dimensions' => 'Anchura x Altura',
'delete_title' => 'Eliminar Imagen',
'areyousure' => '&iquest;Est&aacute; seguro de eliminar el fichero %s?',
'picheader' => '&iquest;Eliminar esta foto?',
'create' => 'Crear',
'edit' => 'Editar',

'insert_image' => 'Insertar una Imagen',
'insert_image_desc' => 'Para insertar una imagen, debe subir una imagen o seleccionar una previamente subida.',
'insert_image_popup' => 'Insertar una Imagen Popup',
'insert_image_popup_desc' => 'Para insertar una imagen, debe subir una imagen, o selecccionar una previamente subida. Entonces seleccione el texto o una miniatura que lanzar&aacute; el popup.',
'choose_upload' => 'subir',
'choose_select' => 'o seleccionar',
'imagename' => 'Nombre de la Imagen',
'alt_text' => 'Texto alternativo',
'align' => 'Alineaci&oacute;n',
'border' => 'Bordes',
'pixels' => 'p&iacute;xeles',
'uploaded_as' => 'Su fichero ha sido subido como \'%s\'.',
'not_uploaded' => 'Su fichero no fue subido y ocurrieron los siguientes errores:',
'center' => 'Centrado (por defecto)',
'left' => 'Izquierda',
'right' => 'Derecha',
'inline' => 'Entrel&iacute;neas',
'notice_upload_first' => 'Primero debe seleccionar o subir una imagen',
'select_image' => 'Seleccionar Imagen',
'select_file' => 'Select File',

'for_popup' => 'Para el popup',
'use_thumbnail' => 'Usar miniatura',
'edit_thumbnail' => 'Editar miniatura',
'use_text' => 'Usar texto',
'insert_download' => 'Insertar una Descarga',
'insert_download_desc' => 'Para hacer una descarga, debe subir un fichero o seleccionar un previamente subido. Seleccione entonces si quiere un icono o un texto o una miniatura que dispare la descarga.',
'use_icon' => 'Usar icono',
);


$lang['link'] = array (
// Link Insertion \\
'insert_link' => 'Insertar un enlace',
'insert_link_desc' => 'Inserte un enlace, introduciendo la url en la campo siguiente. Los visitantes de su sitio ver&aacute;n el t&iacute;tulo al detener el puntero del rat&oacute;n sobre el enlace.',
'url' => 'URL',
'title' => 'T&iacute;tulo',
'text' => 'Texto',
);


// Categories \\
$lang['category'] = array (
'edit_who' => 'Editar qui&eacute;n puede publicar en esta categor&iacute;a\'%s\'',
'name' => 'Nombre',
'users' => 'Usuarios',
'make_new' => 'Crear Nueva Categor&iacute;a',
'create' => 'Crear Categor&iacute;a',
'canpost' => 'Seleccione los usuarios que desee que tengan permiso para escribir en esta categor&iacute;a',
'same_name' => 'Ya existe una categor&iacute;a con este nombre',
'need_name' => 'Esta categor&iacute;a necesita un nombre',

'allowed' => 'Permitido',
'allow' => 'Permitir',
'denied' => 'Denegado',
'deny' => 'Denegar',
'edit' => 'Editar Categor&iacute;a',

'delete' => 'Eliminar Categor&iacute;a',
'delete_desc' => 'Seleccione \'s&iacute;\', si desea eliminar esta categor&iacute;a',

'delete_message' => 'En esta versi&oacute;n de Pivot, s&oacute;lo se eliminar&aacute; el nombre de la categor&iacute;a. En versiones posteriores, podr&aacute; escoger qu&eacute; hacer con las entradas que usan esta categor&iacute;a.',
'search_index_newctitle' => 'Indexar esta categor&iacute;a',
'search_index_newcdesc' => 'S&oacute;lo asigne a \'No\' si no desea que los visitantes de su sutio busquen en esta categor&iacute;a.',
'search_index_editcheader' => 'Indexar Categor&iacute;',

	'order' => 'Ordenación',
	'order_desc' => 'Las categor&iacute;as con un orden bajo aparecer&aacute;n m&aacute;s arriba en la lista. Si mantiene todos los n&uacute;meros iguales, se ordenar&aacute;n alfab&eacute;ticamente',
	'public' => 'Categoría p&uacute;blica',
	'public_desc' => 'Si asigna \'No\', esta categor&iacute;a ser&aacute; visible s&oacute;lo para los usuarios registrados. (se aplica s&oacute;lo en las p&aacute;ginas vivas)',
	'hidden' => 'Hidden Category',
	'hidden_desc' => 'If set to \'Yes\', this category will be hidden in archive listings. (applies only to live pages)',

);


$lang['entries'] = array (
// Entries \\
'post_entry' => "Publicar Entrada",
'preview_entry' => "Previsualizaci&oacute;n de Entradas",

'first' => 'Primera',
'last' => '&Uacute;ltima',
'next' => 'Siguiente',
'previous' => 'Anterior',

'jumptopage' => 'Saltar a la p&aacute;gina (%num%)',
'filteron' => 'Filtrar por (%name%)',
'filteroff' => 'Quitar filtro',
'title' => 'T&iacute;tulo',
'subtitle' => 'Subt&iacute;tulo',
'introduction' => 'Introducci&oacute;n',
'body' => 'Cuerpo',
'publish_on' => 'Publicar',
'status' => 'Estado',
'post_status' => 'Publicar Estado',
'category' => 'Categor&iacute;a',
'select_multi_cats' => '(Ctrl-click para seleccionar varias categor&iacute;as)',
'last_edited' => "&Uacute;ltima modificaci&oacute;n",
'created_on' => "Creaci&oacute;n",
'date' => 'Fecha',
'author' => 'Autor',
'code' => 'C&oacute;digo',
'comm' => '# Coment',
'name' => 'Nombre',
'allow_comments' => 'Permitir Comentarios',

'delete_entry' => "Eliminar Entrada",
'delete_entry_desc' => "Eliminar esta Entrada y sus Comentarios correspondientes ",
'delete_one_confirm' => "&iquest;Est&aacute; seguro de eliminar esta entrada?",
'delete_multiple_confirm' => "&iquest;Est&aacute; seguro de eliminar estas entradas?",

'convert_lb' => 'Convertir Finales de l&iacute;nea',
'always_off' => '(Esto siempre est&aacute; deshabilitado, en el modo WYSIWYG)',
'be_careful' => '(&iexcl;Cuidado con esto!)',
'edit_comments' => 'Editar Comentarios',
'edit_comments_desc' => 'Editar los comentarios que han sido escritos sobre esta entrada',
'edit_comment' => 'Editar Comentarios',
'delete_comment' => 'Eliminar Comentario',
'block_single' => 'Bloquear IP %s',
'block_range' => 'Bloquear rango de IP %s',
'unblock_single' => 'Desbloquear IP %s',
'unblock_range' => 'Desbloquear rango de IP %s',
'trackback' => 'Rastrear ping',
'trackback_desc' => 'Enviar Rastreos de pings a las siguientes url(s). Para enviar a m&uacute;ltiples urls, coloque cada una en una l&iacute;nea separada.',
'keywords' => 'Palabras Clave (Keywords)',
'keywords_desc' => 'Use esto para asignar algunas palabras clave que puedan ser usadas para encontrar esta entrada, o asigne la url non-crufty para esta entrada.',
'vialink' => "Via link",
'viatitle' => "Via t&iacute;tulo",
'via_desc' => 'Use esto para asignar un enlace a la fuente de esta entrada.',
'entry_catnopost' => 'No está autorizado a publicar en esta categor&iacute;a:\'%s\'.',
'entry_saved_ok' => 'Su entrada \'%s\' se guard&oacute; con &eacute;xito.',
'entry_ping_sent' => 'Un rastreo de rastreo ha sido enviado a \'%s\'.',
);


// Form Fun \\
$lang['forms'] = array (
'c_all' => 'Marcar todo',
'c_none' => 'Desmarcar todo',
'choose' => '- seleccione una opci&oacute;n -',
'publish' => 'Poner estado a \'publicado\'',
'hold' => 'Poner estado a \'en espera\'',
'delete' => 'Eliminarlos',
'generate' => 'Publicar y generar',

'with_checked_entries' => "Con las entradas marcadas, hacer:",
'with_checked_files' => "Con los ficheros marcados, hacer:",
'with_checked_templates' => 'Con las plantillas marcadas, hacer:',
);


// Errors \\
$lang['error'] = array (
'path_open' => 'no se puede abrir el directorio, compruebe sus permisos.',
'path_read' => 'no se puede leer el directorio, compruebe sus permisos.',
'path_write' => 'no se puede escribir el directorio, compruebe sus permisos.',

'file_open' => 'no se puede abrir el fichero, compruebe sus permisos.',
'file_read' => 'no se puede leer el fichero, compruebe sus permisos.',
'file_write' => 'no se puede escribir el fichero, compruebe sus permisos.',
);


// Notices \\
$lang['notice'] = array (
'comment_saved' => "El comentario ha sido guardado.",
'comment_eliminard' => "El comentario ha sido eliminado.",
'comment_none' => "Esta entrada no tiene comentarios.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
'vote' => 'Votar \'%val%\' a esta entrada',
'good' => 'Bien',
'bad' => 'Mal',
'already' => 'Ya ha votado a esta entrada o encuesta',
'register' => 'Su voto \'%val%\' ha sido registrado',
);


$lang['comment'] = array (
'register' => 'Su comentario se ha guardado.',
'preview' => 'Est&aacute; previsualizando su comentario. Aseg&uacute;rese de hacer click en \'Publicar Comentario\' para guardarlo.',
'duplicate' => 'Su comentario no se ha guardado, porque parece ser una duplicaci&oacute;n de una entrada previa',
'no_name' => 'Debe introducir su nombre (o alias) en el campo \'nombre\'. Aseg&uacute;rese de hacer click en \'Publicar Comentario\' para guardarlo permanentemente.',
'no_comment' => 'Debe introducir algo en el campo \'comentario\'. Aseg&uacute;rese de hacer click en \'Publicar Comentario\' para guardarlo permanentemente.',
'too_many_hrefs' => 'Se excedió en el número máximo  de hiperenlaces. No haga spamming.',
);


$lang['comments_text'] = array (
'0' => "Sin comentarios",
'1' => "%num% comentario",
'2' => "%num% comentarios",
);


$lang['weblog_text'] = array (
// these are used in the weblogs, for the labels related to archives
'archives' => "Hist&oacute;ricos",
'next_archive' => "Siguiente Hist&oacute;rico",
'previous_archive' => "Hist&oacute;rico Anterior",
'last_comments' => "&Uacute;ltimos Comentarios",
'last_referrers' => "&Uacute;ltimos Referentes",
'calendar' => "Calendario",
'links' => "Enlaces",
'xml_feed' => "XML: RSS Feed",
'atom_feed' => "XML: Atom Feed",
'powered_by' => "Powered by",
'name' => "Nombre",
'email' => "E-mail",
'url' => "URL",
'date' => "Fecha",
'comment' => "Comentario",
'ip' => "Direcci&oacute;n IP",
'yes' => "S&iacute;",
'no' => "No",
'emoticons' => "Emoticonos",
'emoticons_reference' => "Abrir la Referencia de Emoticonos",
'textile' => "Textile",
'textile_reference' => "Abrir la Referencia Textile",
'post_comment' => "Publicar Comentario",
'preview_comment' => "Previsualizar Comentario",
'remember_info' => "&iquest;Recordar informaci&oacute;n personal?",
'notify' => "Notificar",
'notify_yes' => "S&iacute;, env&iacute;eme un email cuando alguien responda.",
'register' => "Registrar su nombre de usuario / Validarse",
'disclaimer' => "<b>Letra peque&ntilde;a:</b> Todas las etiquetas html excepto <b&amp;gt; e <i&amp;gt; ser&aacute;n eliminadas de su comentario. Puede introducir enlaces simplemente escribiendo la url o direcciones de e-mail.",
'search_title' => "Resultados de la B&uacute;squeda",
'search' => "&iexcl;Buscar!",
'nomatches' => "No hubo coincidencias para '%name%'. Intente otra cosa.",
'matches' => "Coincidencias para '%name%':",
'about' => "Sobre...",
'stuff' => "Cosas",
'linkdump' => "Linkdump",
);


$lang['ufield_main'] = array (
// userfields \\
'title' => 'Editar campos del usuario',
'edit' => 'Editar',
'create' => 'Crear',

'dispname' => 'Nombre a mostrar',
'intname' => 'Nombre Interno',
'intname_desc' => 'El nombre Interno es el nombre de este &iacute;tem tal y como aparecer&aacute; cuando le indique a Pivot que los muestre en una plantilla.',
'size' => 'Tama&ntilde;o',
'rows' => 'Filas',
'cols' => 'Columnas',
'maxlen' => 'Longitud m&aacute;xima',
'minlevel' => 'Min. nivel de usuario ',
'filter' => 'Filtrar por',
'filter_desc' => 'Filtrando por este &iacute;tem, limita el tipo de lo que se puede introducir en &eacute;l',
'no_filter' => 'Nada',
'del_title' => 'Confirmar eliminaci&oacute;n',
'del_desc' => 'Al borrar este campo de usuario (<b>%s</b>) tambi&eacute;n destruir&aacute; todos los datos que lo usuarios hayan guardado en &eacute;l, y har&aacute; que todas sus ocurrencias en una plantilla aparezcan vac&iacute;as.',

'already' => 'Este nombre ya est&aacute; en uso',
'int' => 'El Nombre Interno debe ser mayor a 3 caracteres',
'short_disp' => 'El Nombre a Mostrar debe ser mayor a 3 caracteres',
);


$lang['bookmarklets'] = array (
'bookmarklets' => 'Favoritos',
'bm_add' => 'A&ntilde;adir Favoritos.',
'bm_withlink' => 'Piv » Nuevo',
'bm_withlink_desc' => 'Abre una ventana con una Entrada Nueva, que contiene un enlace a la p&aacute;gina desde la que se abri&oacute;.',

'bm_nolink' => 'Piv &raquo; Nuevo',
'bm_nolink_desc' => 'Abre una ventana con una Entrada Nueva en blanco.',

'bookmarklets_info' => 'Puede usar sus favoritos para escribir r&aacute;pidamente Entradas Nuevas con Pivot. Para a&ntilde;adirlos a su buscador, use una de las siguientes opciones: (el texto exacto var&iacute;a, dependiendo del navegador que est&eacute; usando)',
'bookmarklets_info_1' => 'Haga click y arrastre los enlaces favoritos a su barra de \'V&iacute;nculos\' o al bot&oacute;n \'Favoritos\' de su navegador.',
'bookmarklets_info_2' => 'Haga click en el bot&oacute;n derecho en el enlace favorito y seleccione \'Agregar a Favoritos\'.',
);

// Accessibility
// These are used for form fields, labels, fieldsets etc.
// for Web Content Accessibility Guidelines &amp; 508 compliancy issues.
// see: http://bobby.watchfire.com/bobby/html/en/index.jsp
// JM =*=*= 2004/10/04
$lang['accessibility'] = array(
'search_idname' => 'buscar',
'search_formname' => 'Buscar palabras usadas en las entradas de este website',
'search_fldname' => 'Introduzca aqu&iacute; la[s] palabra[s] a buscar:',
'search_placeholder' => 'Introduca los t&eacute;rminos de b&uacute;squeda',

'calendar_summary' => 'Esta tabla representa un calendario de entradas en el weblog con hiperenlaces en las fechas con entradas.',
'calendar_noscript' => 'El calendario provee un acceso a las entradas en este weblog',
/*
2-letter language code, used to designate the principal language used on the site
see: http://www.oasis-open.org/cover/iso639a.html
*/

'lang' => $langname,
) ;


$lang['snippets_text'] = array (
'word_plural' => 'palabras',
'image_single' => 'imagen',
'image_plural' => 'im&aacute;genes',
'download_single' => 'fichero',
'download_plural' => 'ficheros',
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
	echo "<h2>&iexcl;El fichero de idioma es correcto!</h2>";
	echo "Este fichero contiene $groups grupos y un total de $total etiquetas.";

}

?>
