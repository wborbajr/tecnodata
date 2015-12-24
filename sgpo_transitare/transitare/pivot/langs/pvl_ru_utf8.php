<?php
//&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081; (Russian) (UTF-8)

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2rd line.

// Russian translation of Pivot lang file (cyrilic)
// Original translation by Mikhail M. Pigulsky.
// Updated by Davron A. (Email - davron.ru@gmail.com, Website - http://davron.ru)

// allow for different encoding for non-western languages
$encoding="utf-8";
$langname="ru";

//		General		\\
$lang['general'] = array (
	'yes' => 'дЮ',	//affirmative
	'no' => 'мЕР',		//negative
	'go' => 'оНЬЕК!',	//proceed

	'minlevel' => 'с БЮЯ МЕР ОПЮБ ДКЪ ЩРНИ ВЮЯРХ Pivot\'a',
	'email' => 'Email',
	'url' => 'URL',
	'further_options' => "дНОНКМХРЕКЭМШЕ бНГЛНФМНЯРХ",
	'basic_view' => "нАШВМШИ БХД",
	'basic_view_desc' => "оНЙЮГЮРЭ РНКЭЙН НЯМНБМШЕ ОНКЪ",
	'extended_view' => "оПНДБХМСРШИ БХД",
	'extended_view_desc' => "оНЙЮГЮРЭ БЯЕ ХГЛЕМЪЕЛШЕ ОНКЪ",
	'toggle_view' => "лЕФДС оПНДБХМСРШЛ Х нАШВМШЛ бХДЮЛХ",
	'select' => "бШАПЮРЭ",
	'cancel' => "нРЛЕМЮ",
	'delete' => 'сДЮКХРЭ',
	'edit' => 'хГЛЕМХРЭ',
	'welcome' => "дНАПН ОНФЮКНБЮРЭ Б %build%.",
	'write' => "гЮОХЯЮРЭ",
	'write_open_error' => "нЬХАЙЮ ГЮОХЯХ. мЕ НРЙПШРЭ ТЮИК ДКЪ ГЮОХЯХ",
	'write_write_error' => "нЬХАЙЮ ГЮОХЯХ. мЕ БНГЛНФМН ГЮОХЯЮРЭ Б ТЮИК",
	'done' => "цНРНБН!",
	'shortcuts' => "ъПКШЙХ",
	'cantdelete' => "бЮЛ ГЮОПЕЫЕМН СДЮКХРЭ ГЮОХЯЭ %title%!",
	'cantdothat' => "бЮЛ ГЮОЕПЕЫЕМН ДЕКЮРЭ РЮЙНЕ Я ГЮОХЯЭЧ %title%!",
	'cantdeletelast' => "бШ МЕ ЛНФЕРЕ СДЮКЪРЭ ОНЯКЕДМЧЧ ГЮОХЯЭ. бШ ДНКФМШ ЯМЮВЮКЮ ГЮОХЯЮРЭ ДПСЦСЧ",
);


$lang['userlevels'] = array (
		'цКЮБМШИ бКЮДЕКЕЖ', 'юДЛХМ', 'оПНДБХМСРШИ', 'мНПЛЮКЭМШИ', 'лНАкНЦЦЕП'
		//  this one might be a bit hard to translate, but basically it's an order of
		//  power or trust.  Superadmin would be the person in charge - no one can do
		//  anything about his decisions. Admin is only regulated by the Superadmin,
		//  Advanced by the Admin and Superadmin, etc..
		//  Just get the idea of it.
);


$lang['numbers'] = array (
	'МНКЭ', 'НДХМ', 'ДБЮ', 'РПХ', 'ВЕРШПЕ', 'ОЪРЭ', 'ЬЕЯРЭ', 'ЯЕЛЭ', 'БНЯЕЛЭ', 'ДЕБЪРЭ', 'ДЕЯЪРЭ', 'НДХММЮДЖЮРЭ', 'ДБХМЮДЖЮРЭ', 'РПХМЮДЖЮРЭ', 'ВЕРШПМЮДЖЮРЭ', 'ОЪРМЮДЖЮРЭ', 'ЬЕЯМЮДЖЮРЭ'
);


$lang['months'] = array (
	'ъМБЮПЭ', 'тЕБПЮКЭ', 'лЮПР', 'юОПЕКЭ', 'лЮИ', 'хЧМЭ', 'хЧКЭ', 'юБЦСЯР', 'яЕМРЪАПЭ', 'нЙРЪАПЭ', 'мНЪАПЭ', 'дЕЙЮАПЭ'
);


$lang['months_abbr'] = array (
	'ъМБ', 'тЕБ', 'лЮП', 'юОП', 'лЮИ', 'хЧМ', 'хЧК', 'юБЦ', 'яЕМ', 'нЙР', 'мНЪ', 'дЕЙ'
);


$lang['days'] = array (
	'бНЯЙПЕЯЕМЭЕ', 'оНМЕДЕКЭМХЙ', 'бРНПМХЙ', 'яПЕДЮ', 'вЕРБЕПЦ', 'оЪРМХЖЮ', 'яСААНРЮ'
);


$lang['days_abbr'] = array (
	'бЯЙ', 'оМД', 'бРП', 'яПД', 'вРБ', 'оР', 'яА'
);


$lang['days_calendar'] = array (
	'б', 'о', 'б', 'я', 'в', 'о', 'я'
);


$lang['datetime_words'] = array (
	'цНД', 'лЕЯЪЖ', 'мЕДЕКЪ', 'дЕМЭ', 'вЮЯ', 'лХМСРЮ', 'яЕЙСМДЮ'	//the actual words for them.
);


//		Login Page		\\
$lang['login'] = array (
	'title' => 'кНЦХМ',
	'name' => 'хЛЪ оНКЭГНБЮРЕКЪ',
	'pass' => 'оЮПНКЭ',
	'remember' => 'гЮОНЛМХРЭ',
	'rchoice' => array (
		'0' => 'мХВЕЦН',
		'1' => 'лНЕ хЛЪ Х оЮПНКЭ',
		'2' => 'вРН Ъ БЯЕЦДЮ ЮРНПХГНБЮМ'
	),
	'delete_cookies_desc' => 'еЯКХ бШ СБЕПЕМШ ВРН ХЛЪ Х ОЮПНКЭ ОПЮБЕКЭМШ, МН бШ <br />МЕ ЛНФЕРЕ БНИРХ, РН ОНОПНАСИРЕ СДЮКХРЭ ЙСЙХ (cookies) ДКЪ ДЮММНЦН ДНЛЕМЮ:',
	'delete_cookies' => 'сДЮКХРЭ йСЙХ',
	'retry' => 'мЕБЕПМНЕ хЛЪ/оЮПНКЭ',
	'banned' => 'бШ МЕ ЯЛНЦКХ БНИРХ ОПХ 10-РХ ОНОШРЙЮУ. б ПЕГСКЭРЮРЕ, бЮЬ IP ГЮАКНЙХПНБЮМ МЮ 12 ВЮЯНБ (фпх ясйю)',

);


//		Main Bar		\\
	$lang['userbar'] = array (
	'main' => 'цКЮБМНЕ',
	'entries' => 'гЮОХЯХ',
	'submit' => 'мНБЮЪ ГЮОХЯЭ',
	'comments' => 'йНЛЛЕМРЮПХХ',
	'trackbacks' => 'рПЩЙаЩЙХ',
	'modify' => 'хГЛЕМХРЭ гЮОХЯХ',
	'userinfo' => 'лНХ дЮММШЕ',
	'u_settings' => 'лНХ мЮЯРПНИЙХ',
	'u_marklet' => 'ъПКШЙНБШЕ яЯШКЙХ',
	'files' => 'сОПЮБКЕМХЕ ЙЮПРХМНЙ',
	'upload' => 'бШЦПСГХРЭ',
	'stats' => 'яРЮРХЯРХЙЮ',
	'admin' => 'юДЛХМХЯРПЮЖХЪ',

	'main_title' => 'цКНАЮКЭМШИ ОПНЯЛНРП Pivot\'Ю',
	'entries_title' => 'цКНАЮКЭМШИ ОПНЯЛНРП ГЮОХЯЕИ',
	'submit_title' => 'мЮОХЯЮРЭ Х НОСАКХЙНБЮРЭ МНБСЧ ГЮОХЯЭ',
	'comments_title' => 'хГЛЕМХРЭ ХКХ СДЮКХРЭ ГЮОХЯХ',
	'trackbacks_title' => 'хГЛЕМХРЭ ХКХ СДЮКХРЭ рПЩЙаЩЙХ',
	'modify_title' => 'хГЛЕМХРЭ гЮОХЯЭ',
	'userinfo_title' => 'оПНЯЛНРП ХМТНПЛЮЖХХ Н ЯЕАЕ',
	'u_settings_title' => 'оПЮБЙЮ КХВМШУ МЮЯРПНЕЙ',
	'u_marklet_title' => 'яНГДЮРЭ ГЮЙКЮДЙХ',
	'files_title' => 'сОПЮБКЕМХЕ Х ГЮЙЮВЙЮ ТЮИКНБ',
	'upload_title' => 'гЮЦПСГХРЭ ТЮИКШ',
	'uploaded_success' => 'тЮИК АШК ГЮЦПСФЕМ',
	'stats_title' => 'оПНЯЛНРП КНЦНБ Х ЯРЮРХЯРХЙХ.',
	'updatetitles_title' => 'оПНЯЛНРП КНЦНБ Х ЯРЮРХЯРХЙХ.',
	'admin_title' => 'нЯЛНРП ЮДЛХМХЯРПХПНБЮМХЪ',
	'recent_entries' => 'оНЯКЕДМХЕ ГЮОХЯХ',
	'recent_comments' => 'оНЯКЕДМХЕ ЙНЛЛЕМРЮПХХ',
);


$lang['adminbar'] = array (
	//		Admin Bar		\\
	//'trebuild' => 'Rebuild all Files', rolled into maintenance
	'seeusers' => 'оНКЭГНБЮРЕКХ',
	'seeconfig' => 'мЮЯРПНИЙХ',
	'templates' => 'ьЮАКНМШ',
	'maintenance' => 'нОЕПЮЖХХ',
	'regen' => 'оЕПЕДЕКЮРЭ БЯЕ ТЮИКШ',
	'blogs' => 'бЕАКНЦХ',
	'categories' => 'йЮРЕЦНПХХ',
	'verifydb' => 'оПНБЕПХРЭ АЮГС ДЮММШУ',
	'buildindex' => 'оЕПЕДЕКЮРЭ ХМДЕЙЯ',
	'buildsearchindex' => 'оЕПЕДЕКЮРЭ АЮГС ДЮММШУ ОНХЯЙНБНИ ЯХЯРЕЛШ',
	'buildfrontpage' => 'оЕПЕДЕКЮРЭ ГЮЦКЮБМСЧ(ШЕ) ЯРПЮМХЖС(Ш)',
	'sendping' => 'нРОПЮБХРЭ ОХМЦХ',


	'backup' => 'пЕГЕПБМЮЪ ЙНОХЪ',
	'description' => 'нОХЯЮМХЕ',
	'conversion' => 'йНМБЕПРХПНБЮРЭ',
	'seeusers_title' => 'яНГДЮМХЕ, ОПЮБЙЮ Х СДЮКЕМХЕ ОНКЭГНБЮРЕКЕИ.',
	'userfields' => 'User Information Fields',
	'userfields_title' => 'яНГДЮМХЕ, ОПЮБЙЮ Х СДЮКЕМХЕ ОНКЭГНБЮРЕКЭЯЙХУ ОНКЕИ',
	'seeconfig_title' => 'хГЛЕМХРЭ ЙНМТХЦСПЮЖХНММШИ ТЮИК',
	'templates_title' => 'яНГДЮМХЕ, ОПЮБЙЮ Х СДЮКЕМХЕ ЬЮАКНМНБ',
	'maintenance_title' => 'бШОНКМЕМХЕ ПСРХМШУ НОЕПЮЖХИ Я ТЮИКЮЛХ Pivot\'Ю',
	'regen_title' => 'оЕПЕДЕКЮРЭ ТЮИКШ Х ЮПУХБШ ЙНРНПШЕ ЯНГДЮЕР Pivot',
	'blogs_title' => 'яНГДЮМХЕ, ОПЮБЙЮ Х СДЮКЕМХЕ БЕАКНЦНБ',
	'blogs_edit_title' => 'хГЛЕМХРЭ МЮЯРПНИЙХ БЕАКНЦЮ ДКЪ ',
	'categories_title' => 'яНГДЮМХЕ, ОПЮБЙЮ Х СДЮКЕМХЕ ЙЮРЕЦНПХИ',
	'verifydb_title' => 'оПНБЕПХРЭ ОПЮБХКЭМНЯРХ АЮГШ ДЮММШУ',
	'buildindex_title' => 'оЕПЕДЕКЮРЭ ХМДЕЙЯ АЮГШ ДЮММШУ',
	'buildsearchindex_title' => 'оЕПЕДЕКЮИРЕ ХМДЕЙЯ АЮГШ ДЮММШУ, ДКЪ ОНХЯЙЮ',
	'buildfrontpage_title' => 'оЕПЕДЕКЮРЭ ГЮЦКЮБМШЕ ТЮИКШ, ОНЯКЕДМХЕ ЮПУХБШ Х RSS КЕМРС ДКЪ ЙЮФДНЦН

БЕАКНЦЮ.',
	'backup_title' => 'яНГДЮРЭ ПЕГЕПБМСЧ ЙНОХЧ бЮЬХУ ГЮОХЯЕИ',
	'backup_config' => 'яНГДЮРЭ ПЕГЕПБМСЧ ЙНОХЧ бЮЬХУ МЮЯРПНЕЙ',
	'backup_config_desc' => 'щРН ДЮЕР БНГЛНФМНЯРЭ ЯЙЮВЮРЭ Zip-тЮИК Я ПЕГЕПБМШЛХ ТЮИКЮЛХ',
	'ipblocks' => 'IP АКНЙХПНБЙХ',
	'ipblocks_title' => 'оПНЯЛНРПЕРЭ ХКХ ХГЛЕМХРЭ гЮАКНЙХПНБЮММШЕ IP-ЮДПЕЯЮ.',
	'ipblocks_stored' => 'IP-юДПЕЯЮ ГЮОХЯЮМШ Х ЯНУПЮМЕМШ.',
	'ipblocks_store' => 'яНУПЮМХРЭ IP-ЮДПЕЯЮ',
	'ignoreddomains' => 'аКНЙХПНБЮРЭ тПЮГШ',
	'ignoreddomains_title' => 'гЮАКНЙХПНБЮРЭ тПЮГШ БН БУНДЪЫХУ ЯЯШКЙЮУ ОПНРХБ ЯОЮЛЮ',
	'ignoreddomains_stored' => 'гЮОПЕЫЕММШЕ тПЮГШ ГЮОХЯЮМШ.',
	'ignoreddomains_store' => 'яНУПЮМХРЭ ЯОХЯНЙ ГЮОПЕЫЕММШУ ТПЮГ',
	'ignoreddomains_asterisk' => 'яРПНЙЮ ОНЛЕВЕММЮЪ ГБЕГДНВЙНИ ( * ) АСДЕР РНКЭЙН ДКЪ АКНЙХПНБЙХ БУНДЪЫХИУ ЯЯШКНЙ (ПЕТЕППЕПНБ). нЯРЮКЭМШЕ АСДСР ДКЪ АКНЙХПНБЙХ бУНДЪЫХУ яЯШКНЙ (ПЕТЕППЕПНБ), ЙНЛЛЕМРЮПХЕБ Х рПЩЙаЩЙНБ ',
	'fileexplore' => 'оПНЯЛНРПЫХЙ тЮИКНБ',
	'fileexplore_title' => 'оНЯЛНРПЕРЭ ТЮИКШ (АЮГШ ДЮММШУ Х РЕЙЯРНБШЕ)',
	'sendping_title' => 'нРОПЮБХРЭ ОХМЦХ рПЩЙЕПЮЛ НАМНБКЕМХИ.',
	'buildindex_start' => 'нАМНБКЪЕРЯЪ ХМДЕЙЯ. дКЪ ЩРНЦН ОНРПЕАСЕРЯЪ МЕЙНРНПНЕ БПЕЛЪ, ОНФЮКСИЯРЮ МЕ ОПЕПШБЮИРЕ.',
	'buildsearchindex_start' => 'нАМНБКЕМХЕ АЮГШ ОНХЯЙЮ. дКЪ ЩРНЦН ОНРПЕАСЕРЯЪ МЕЙНРНПНЕ БПЕЛЪ, ОНФЮКСИЯРЮ МЕ ОПЕПШБЮИРЕ.',
	'buildindex_finished' => 'цНРНБН! пЕЦЕМЕПЮЖХЪ ГЮМЪКЮ %num% ЯЕЙСМД',

	'filemappings_desc' => 'мХФЕ бШ ЛНФЕРЕ ОНЯЛНРПЕРЭ МЮ БЯЕ бЩАКНЦХ ЯНГДЮММШЕ Pivot\'НЛ, бШ ЛНФЕРЕ БШАПЮРЭ НРДЕКЭМШЕ ТЮИКШ МЮАКНМНБ ДКЪ ЙЮФДНЦН АКНЦЮ Х ЛЕМЪРЭ МЮЯРПНИЙХ. щРН ЛНФЕР ОНЛНВЭ Я ОПНАКЕЛЮЛХ ТЮКНБ Х НЬХАНЙ Б АКНЦЮУ.',

	'debug' => 'нРЙПШРЭ DEBUG-НЙМН',

	'latest_pivot_news' => "оНЯКЕДМХЕ мНБНЯРХ НР Pivot",
	'remove_setup_header' => "яЙПХОР Pivot-ХМЯРЮККЪРНПЮ ОПЕДЯРЮБКЪЕР",
	'remove_setup' => "хМЯРЮККЪРНП Pivot\'a 'pivot-setup.php' ДН ЯХУ ОНП МЮУНДХРЯЪ Б ЙНПМЕБНИ ОЮОЙЕ. дКЪ бЮЬЕИ АЕГНОЮЯМНЯРХ, СДЮКХРЕ ТЮИК ХКХ ФЕ ОЕПЕХЛЕМСИРЕ",

);


$lang['templates'] = array (
	'rollback' => 'нРЙЮРЮРЭ',
	'create_template' => 'яНГДЮРЭ ЬЮАКНМ',
	'create_template_info' => 'яНГДЮРЭ ЬЮАКНМ ДКЪ Pivot\'a Я МСКЪ',
	'no_comment' => 'мЕР йНЛЛЕМРЮПХЕБ',
	'comment' => 'йНЛЛЕМРЮПХИ*',
	'comment_note' => '(*гЮЛЕРЙЮ: йНЛЛЕМРЮПХИ ЛНФЕР АШРЭ ЯНУПЮМЕМ РНКЭЙН ОПХ <b>ОЕПБНИ</b> ГЮОХЯХ ХКХ ХГЛЕМЕМХХ)',
	'create' => 'яНГДЮРЭ ЬЮАКНМ',
	'editing' => 'хГЛЕМЕМХЕ',
	'filename' => 'мЮГБЮМХЕ тЮИКЮ',
	'save_changes' => 'яНУПЮМХРЭ МЮЯРПНИЙХ!',
	'save_template' => 'яНУПЮМХРЭ ЬЮАКНМ!',
	'aux_template' => 'бЯОНЛНЦЮРЕКЭМШИ ЬЮАКНМ',
	'sub_template' => 'оНДьЮАКНМ',
	'standard_template' => 'мНПЛЮКЭМШИ ьЮАКНМ',
	'feed_template' => 'ьЮАКНМ КЕМРШ',
	'css_template' => 'CSS ТЮИК',
	'txt_template' => 'рЕЙЯРНБШИ ТЮИК',
	'php_template' => 'PHP ТЮИК',
);


//		Admin			\\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar']['xxx_title'] ones
$lang['admin'] = array (
	'seeusers' => 'яНГДЮМХЕ, ОПЮБЙЮ Х СДЮКЕМХЕ ОНКЭГНБЮРЕКЕИ',
	'seeconfig' => 'оПЮБЙЮ ТЮИКЮ МЮЯРПНЕЙ',
	'templates' => 'яНГДЮМХЕ, ОПЮБЙЮ Х СДЮКЕМХЕ ЬЮАКНМНБ',
	'maintenance' => 'бШОНКМЕМХЕ ПСРХМШУ НОЕПЮЖХИ Pivot\'Ю МЮД ТЮИКЮЛХ, МЮОПХЛЕП \'оЕПЕДЕКЮРЭ ТЮИКШ\',

\'яБЕПХРЭ АЮГС ДЮММШУ\', \'оЕПЕДЕКЮРЭ ХМДЕЙЯ\' Х \'яНГДЮМХЕ ПЕГЕПБМНИ ЙНОХХ\'.',
	'regen' => 'оЕПЕДЕКЮРЭ БЯЕ ЯРПЮМХЖШ ЙНРНПШЕ ЯНГДЮЕР Pivot',
	'blogs' => 'яНГДЮМХЕ, ОПЮБЙЮ Х СДЮКЕМХЕ ПЮГКХВМШУ БЕАКНЦНБ Б ЙНРНПШЕ АСДЕР ОХЯЮРЭ Pivot',
);

//		Maintenace		\\
$lang['maint'] = array (
	'title' => 'нОЕПЮЖХХ',
	'gen_arc_title' => 'яЦЕМЕПХПНБЮРЭ ЮПУХБ', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => 'оЕПЕЦЕМЕПХПНБЮРЭ БЯЕ ЮПУХБШ', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'оПНБЕПХРЭ XML ТЮИКШ', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'оПНБЕПХРЭ (Х ОНВХМХРЭ, ЕЯКХ МЮДН) ОПЮБХКЭМНЯРЭ БЯЕУ XML ТЮИКНБ', /* bob notes:

replace with more general 'Verify DB' */
	'backup_title' => 'пЕГЕПБМЮЪ ЙНОХЪ',
	'backup_text' => 'яДЕКЮРЭ ПЕГЕПБМСЧ ЙНОХЧ БЯЕУ ЯСЫЕЯРБЕММШУ ТЮИКНБ pivot\'Ю',
);


//      Stats and referers      \\
$lang['stats'] = array (
	'show_last' => "оНЙЮГЮРЭ ОНЯКЕДМХЕ",
	'20ref' => "20 ПЕТЕППЕПНБ",
	'50ref' => "50 ПЕТЕППЕПНБ",
	'allref' => "БЯЕУ ПЕТЕППЕПНБ",
	'updateref' => "нАМНБХРЭ ЯОХЯНЙ ПЕТЕППЕПНБ Б РХРСКЕ",
	'hostaddress' => 'уНЯР (ip-ЮДПЕЯ)',
	'which page' => 'ЙНРНПЮЪ ЯРПЮМХЖЮ',

	'getting' => 'оНКСВЮЕЛ МНБШЕ ГЮЦНКНБЙХ',
	'awhile' => 'щРН ЛНФЕР ГЮМЪРЭ МЕЙРНПНЕ БПЕЛЪ, ОНФЮКСИЯРЮ ОНДНФДХРЕ',
	'firstpass' => 'оЕПБШИ ОПНУНД',
	'secondpass' => 'бРНПНИ ОПНУНД',
	'nowuptodate' => 'бЯЕ ПЕТЕППЕПШ-ГЮЦНКНБЙХ НАМНБКЕМШ',
	'finished' => 'гЮЙНМВЕМН',
);


//		User Info		\\
	$lang['userinfo'] = array (
	'editfields' => 'оПЮБЙЮ ОНКЕИ',
	'desc_editfields' => 'оПЮБЙЮ ОНКЕИ ЙНРНПШЕ ОНКЭГНБЮРЕКХ ЛНЦСР ХЯОНКЭГНБЮРЭ ВРНАШ НОХЯюРЭ ЯЕАЪ',
	'username' => 'оНКЭГНБЮРЕКЭ',
	'pass1' => 'оЮПНКЭ',
	'pass2' => 'оЮПНКЭ (ЕЫЕ ПЮГ)',
	'email' => 'Email',
	'userlevel' => 'сПНБЕМЭ ОНКЭГНБЮРЕКЪ',
	'userlevel_desc' => 'сПНБЕМЭ ОНКЭГНБЮРЕКЪ НОПЕДЕКЪЕР ЙЮЙХЕ ДЕИЯРБХЪ НМ ЛНФЕР ОПНХГБНДХРЭ',
	'language' => 'ъГШЙ',
	'edituser' => 'ХГЛЕМЕМХЕ ОНКЭГНБЮРЕКЪ',  //the link to.. well, edit the user (also the title)
	'edituserinfo' => 'оПЮБЙЮ ХМТНПЛЮЖХХ Н ОНКЭГНБЮРЕКЕ',
	'newuser' => 'яНГДЮРЭ МНБНЦН ОНКЭГНБЮРЕКЪ',
	'desc_newuser' => 'яНГДЮРЭ МНБШИ ЮЙЙЮСМР ДКЪ Pivot\'Ю, ОНГБНКЪЧЫХИ ОНЯРХРЭ Б БЕАКНЦ.',
	'newuser_button' => 'яНГДЮРЭ',
	'edituser_button' => 'хГЛЕМХРЭ',
	'pass_too_short' => 'оЮПНКЭ ДНКФЕМ АШРЭ ЙЮЙ ЛХМХЛСЛ ХГ 4 ГМЮЙНБ.',
	'pass_dont_match' => 'оЮПНКХ МЕ ЯНБОЮДЮЧР',
	'username_in_use' => 'рЮЙНИ ОНКЭГНБЮРЕКЭ СФЕ ЯСЫЕЯРБЕР',
	'username_too_short' => 'хЛЪ ОНКЭГНБЮРЕКЪ ДНКФМН ЯНЯРНЪРЭ ХГ 3 ЯХЛБНКНБ ХКХ АНКЕЕ',
	'username_not_valid' => 'хЛЪ ОНКЭГНБЮРЕКЪ ДНКФМН ЯНДЕПФЮРЭ РНКЭЙН КЮРХМЯЙХЕ АСЙБШ Х ЖХТПШ (A-Z, a

-z, 0-9) Х ЯХЛБНК ОНДВЕПЙХБЮМХЪ (_).',
	'not_good_email' => 'бБЕДЕММШИ e-mail МЕОПЮБХКЭМШИ',
	'c_admin_title' => 'оНДРБЕПДХРЕ ЯНГДЮМХЕ ЮДЛХМХЯРПЮРНПЮ',
	'c_admin_message' => ''.$lang['userlevels']['1'].' ХЛЕЕР ОНКМШИ ДНЯРСО Й pivot\'С, ЛНФЕР ХГЛЕМЪРЭ

БЯЕ МНБНЯРМШЕ ОПЕДЛЕРШ, БЯЕ ЙНЛЛЕМРЮПХХ Х ХГЛЕМЪРЭ КЧАШЕ МЮЯРПНИЙХ. бШ СБЕПЕМШ ВРН УНРХРЕ ЯДЕКЮРЭ %s

'.$lang['userlevels']['1'].'?',
);


//		Config Page		\\
	$lang['config'] = array (
	'save' => 'яНУПЮМХРЭ МЮЯРПНИЙХ',

	'sitename' => 'мЮГБЮМХЕ ЯЮИРЮ',
	'defaultlanguage' => 'ъГШЙ ОН-СЛНКВЮМХЧ',
	'siteurl' => 'URL ЯЮИРЮ',
	'header_fileinfo' => 'хМТН Н ТЮИКЕ',
	'localpath' => 'кНЙЮКЭМШИ ОСРЭ',
	'debug_options' => 'мЮЯРПНИЙХ debug ПЕФХЛЮ',
	'debug' => 'Debug ПЕФХЛ',
	'debug_desc' => 'ОНЙЮГШБЮРЭ ПЮГКХВМСЧ debug ХМТНПЛЮЖХЧ РН РЮЛ, РН РС...',
	'log' => 'кНЦТЮИКШ',
	'log_desc' => 'УПЮМХРЭ КНЦТЮИКШ ПЮГКХВМШУ ДЕИЯРБХИ',

	'header_uploads' => 'гЮЦПСГЙЮ ТЮИКНБ',
	'upload_path' => 'оСРЭ ДКЪ ГЮЦПСГЙХ ТЮИКНБ',
	'upload_accept' => 'пЮГПЕЬЕММШЕ РХОШ ТЮИКНБ',
	'upload_extension' => 'пЮЯЬХПЕМХЕ ОН-СЛНКВЮМХЧ',
	'upload_save_mode' => 'оЕПЕОХЯШБЮРЭ',
	'make_safe' => 'вХЯРХРЭ ХЛЕМЮ ТЮИКНБ',
	'c_upload_save_mode' => 'сБЕКХВХБЮРЭ ВХЯКН Б МЮГБЮМХХ ТЮИКЮ',
	'max_filesize' => 'пЮГЛЕП ТЮИКЮ',
	'header_datetime' => 'дЮРЮ/бЕПЛЪ',
	'timeoffset_unit' => 'еДХМХЖЮ НРЯРЮБЮМХЪ',
	'timeoffset' => 'йНК-БН',
	'header_extra' => 'пЮГКХВМШЕ МЮЯРПНИЙХ',
	'wysiwyg' => 'хЯОНКЭГНБЮРЭ WYSIWYG ОН-СЛНКВЮМХЧ',
	'wysiwyg_desc' => 'нОПЕДЕКЪЕР БЙКЧВЕМ КХ ОН-СЛНКВЮМХЧ ПЕДЮЙРНП \'ВРН БХФС РН Х ОНКСВС\'. бЯЕ

ОНКЭГНБЮРЕКХ ЛНЦСР ХГЛЕМХРЭ ЩРНР ОСМЙР Б ЯБНХУ КХВМШУ МЮЯРПНИЙЮУ',
	'def_text_processing' => 'Default Text Processing',
	'text_processing' => 'Text Processing',
	'text_processing_desc' => 'Determines the default text processing, when a user is using the non-

wysiwyg editor. \'Convert Linebreaks\' does nothing more than change linebreaks to a &lt;br&gt;-tag. <a

href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> is a powerful, yet easy to learn

markup style.',
	'none' => 'None',
	'convert_br' => 'Convert Linebreaks to &lt;br /&gt;',
	'textile' => 'Textile',

	'setup_ping' => 'мЮЯРПНИЙХ ОХМЦЮ',
	'ping_use' => 'нАМНБКЪРЭ ОХМЦ-РПЮЙЕПШ',
	'ping_use_desc' => 'нОПЕДЕКЪЕР ДНКФМШ КХ РПЮЙЕПШ БХДЮ weblogs.com ЮБРНЛЮРХВЕЯЙХ НАМНБКЪРЭЯЪ

Pivot\'НЛ ЕЯКХ БШ ДЕКЮЕРЕ МНБСЧ ГЮОХЯЭ. яЕПБХЯШ РХОЮ blogrolling.com ГЮБХЯЪР НР ЩРХУ ОХМЦНБ',
	'ping_urls' => 'яЯШКЙХ ДКЪ ОХМЦНБ',
	'ping_urls_desc' => 'бШ ЛНФЕРЕ ОПЕДЯРЮБХРЭ МЕЯЙНКЭЙН ЯЯШКНЙ ДКЪ ОХМЦНБ. мЕ БОХЯШБЮИРЕ http://,

ХМЮВЕ ЩРН БЯЕ МЕ АСДЕР ПЮАНРЮРЭ. оПНЯРН БОХЯШБЮИРЕ ЙЮФДШИ ЯЕПБЕП МЮ МНБНИ ЯРПНЙЕ КХ ПЮГДЕКЪИРЕ ХУ ЯХЛБНКНЛ

<b>-</b> . мЕЙНРНПШЕ ЯЕПБЕПЮ ДКЪ ОХМЦНБЮМХЪ:<br /><b>rpc.weblogs.com/RPC2</b> (weblogs.com ОХМЦЕП, ЯЮЛШИ

ПЮЯОПНЯРЮПМЕММШИ)<br /><b>pivotlog.net/pinger</b> (pivotlog ОХМЦЕП, ОНЙЮ ВРН МЕ ПЮАНРЮЕР)<br

/><b>rcs.datashed.net/RPC2</b> (euro.weblogs.com ОХМЦЕП)<br /><b>ping.blo.gs</b> (blo.gs ОХМЦЕП)<br />',

	'new_window' => 'нРЙПШБЮРЭ ЯЯШКЙХ Б МНБНЛ НЙМЕ',
	'emoticons' => 'хЯОНКЭГНБЮРЭ ЦПЮТХВЕЯЙХЕ ЯЛЮИКШ',
	'javascript_email' => 'йНДХПНБЮРЭ Email ЮДПЕЯЮ?',
	'new_window_desc' => 'нОПЕДЕКЪЕР НРЙПШБЮРЭ ЯЯШКЙХ Б МНБНЛ НЙМЕ ХКХ Б РНЛ ФЕ.',

	'mod_rewrite' => 'хЯОНКЭГНБЮРЭ Filesmatch',
	'mod_rewrite_desc' => 'еЯКХ БШ ХЯОНКЭГСЕРЕ Apache\'s Filesmatch, Pivot АСДЕР ДЕКЮРЭ ЯЯШКЙХ БХДЮ

www.mysite.com/archive/2003/05/30/nice_weather, БЛЕЯРН www.mysite.com/pivot/entry.php?id=134. мЕ БЯЕ

ЯЕПБЕПЮ ОНДДЕПФХБЮЧР ДЮММШИ ЛНДСКЭ, РЮЙ ВРН ХЯОНКЭГСИРЕ ЩРН РНКЭЙН ОНЯКЕ ОПНВРЕМХЪ ЛЮМСЮКЮ.',
	'search_index' => 'нАМНБХРЭ ХМДЙЯ ОНХЯЙЮ',
	'search_index_desc' => 'Dit bepaalt of de zoekindex altijd wordt bijgewerkt als je een nieuw

artikel plaatst, of een artikel wijzigt.',

	'default_introduction' => 'хМРПНДСЙЖХЪ/РЕКН ОН СЛНКВЮМХЧ',
	'default_introduction_desc' => 'This will determine the default values for Introduction and Body

when an author writes a new entry. Normally this will be an empty paragraph, which makes the most sense

semantically.',

	'upload_autothumb'	=> 'юБРНЛЮРХВЕЯЙХЕ ЩЯЙХГШ',
	'upload_thumb_width' => 'ьХПХМЮ щЯЙХГЮ',
	'upload_thumb_height' => 'бШЯНРЮ щЯЙХГЮ',
	'upload_thumb_remote' => 'яЙПХОР нАПЮАНРЙХ ХГНАПЮФЕМХИ МЮ ДПСЦНЛ ЯЕПБЕПЕ',
	'upload_thumb_remote_desc' => 'еЯКХ БЮЬ ЯЕПБЕП МЕ ОНДДЕПФХБЮЕР НАПЮАНРЙС ХГНАПЮФЕМХИ, РН ЛНФМН ХЯОНКЭГНБЮРЭ ЯЙПХОР ДПСЦНЦН ЯЕПБЕПЮ',

	'extensions_header' => 'дХПЕЙРНПХЪ ДКЪ дНОНКМЕМХИ',
	'extensions_desc'   => 'оЮОЙЮ \'extensions\' (ДНОНКМЕМХЪ) ЩРН ТЮИКШ ДКЪ ДНОНКМЕМХИ Pivot\'a.
		щРН ДЕКЮЕР НАМНБКЕМХЕ МЮЛМНЦН КЕЦВЕ. вХРЮИРЕ ДНЙСЛЕМРЮЖХЧ ДКЪ ОНДПНАМНЯРЕИ.',
	'extensions_path'   => 'дХПЕЙРНПХЪ дНОНКМЕМХИ',

);


//		Weblog Config	\\
$lang['weblog_config'] = array (
	'edit_weblog' => 'оПЮБЙЮ БЕАКНЦЮ',
	'edit_blog' => 'оПЮБЙЮ АКНЦНБ',
	'new_weblog' => 'мНБШИ БЕАКНЦ',
	'new_weblog_desc' => 'дНАЮБХРЭ МНБШИ БЕАКНЦ',
	'del_weblog' => 'сДЮКХРЭ БЕАКНЦ',
	'del_this_weblog' => 'сДЮКХРЭ ЩРНР БЕАКНЦ.',
	'create_new' => 'яНГДЮРЭ МНБШИ БЕАКНЦ',
	'subw_heading' => 'дКЪ ЙЮФДНЦН ОНДАКНЦЮ МЮИДЕММНЦН Б ЬЮАКНМЮУ БШ ЛНФЕРЕ СЙЮГЮРЭ ЙЮЙНИ ЬЮАКНМ ДКЪ

МХУ ХЯОНКЭГНБЮРЭ, Ю РЮЙ ФЕ ЙЮРЕЦНПХХ ЙНРНПШЕ АСДЕР Б МХУ НРНАПЮФЮРЭЯЪ',
	'create' => 'гЮЙНМВХРЭ',

	'create_1' => 'яНГДЮМХЕ / ОПЮБЙЮ БЕАКНЦЮ, ЬЮЦ 1 ХГ 3',
	'create_2' => 'яНГДЮМХЕ / ОПЮБЙЮ БЕАКНЦЮ, ЬЮЦ 2 ХГ 3',
	'create_3' => 'яНГДЮМХЕ / ОПЮБЙЮ БЕАКНЦЮ, ЬЮЦ 3 ХГ 3',

	'name' => 'мЮГБЮМХЕ БЕАКНЦЮ',
	'payoff' => 'оЩИнТТ',
	'payoff_desc' => 'оЩИНТТ ЛНФЕР АШРЭ ХЯОНКЭГНБЮМ ЙЮЙ ОНДГЮЦНКНБНЙ ХКХ ЙЮЙ ЙПЮРЙНЕ НОХЯЮМХЕ БЮЬЕЦН

БЕАКНЦЮ',
	'url' => 'URL Й БЕАКНЦС',
	'url_desc' => 'Pivot ЯЮЛ НОПЕДЕКХР ЯЯШКЙС МЮ БЕАКНЦ ЕЯКХ БШ НЯРЮБХРЕ ЩРН ОНКЕ ОСЯРШЛ. еЯКХ БШ

ХЯОНКЭГСЕРЕ ЯБНИ БЕАКНЦ ЙЮЙ ВЮЯРЭ ТПЕИЛЮ, ХКХ БЙКЧВЕМХЕ ЯН ЯРНПНМШ ЯЕПБЕПЮ, БШ ЛНФЕРЕ ХЯОНКЭГНБЮРЭ ЩРН

ОНКЕ ДКЪ ОЕПЕОХЯХ.',
	'index_name' => 'цКЮБМЮЪ ЯРПЮМХЖЮ (ХМДЕЙЯ)',
	'index_name_desc' => 'хЛЪ ХМДЕЙЯ-ТЮИКЮ. нАШВМН ЩРН ВРН-РН БПНДЕ \'index.html\' ХКХ

\'index.php\'.',

	'ssi_prefix' => 'оПЕТХЙЯ SSI',
	'ssi_prefix_desc' => 'еЯКХ БЮЬ АКНЦ ХЯОНКЭГСЕР SSI (ВРН МЕ ПЕЙНЛЕМДНБЮМН БШ ЛНФЕРЕ ХЯОНКЭГБЮРЭ

ДЮММНЕ ОНКЕ ВРНАШ НАНГМЮВХР ОПЕТХЙЯ ТЮИКНБ Pivot\'Ю ДКЪ SSI. мЮОПХЛЕП \'index.shtml?p=\'. нЯРЮБЭРЕ ОНКЕ

ОСЯРШЛ ЕЯКХ МЕ ГМЮЕРЕ ВРН ДЕКЮЕРЕ.',

	'front_path' => 'оСРЭ Й ГЮЦКЮБМНИ ЯРПЮМХЖЕ',
	'front_path_desc' => 'нРМНЯХРЕКЭМШИ ХКХ ЮАЯНКЧРМШИ ОСРЭ Й ЙЮРЮКНЦС Б ЙНРНПНЛ Pivot АСДЕР ЯНГДЮБЮРЭ

ЦКЮБМШЕ ЯРПЮМХЖШ Й АКНЦС.',
	'file_format' => 'хЛЪ ТЮИКЮ',
	'entry_heading' => 'мЮЯРПНИЙХ ГЮОХЯЕИ',
	'entry_path' => 'оСРЭ ГЮОХЯЕИ',
	'entry_path_desc' => 'нРМНЯХРЕКЭМШИ ХКХ ЮАЯНКЧРМШИ ОСРЭ Й ЙЮРЮКНЦС Б ЙНРНПНЛ Pivot АСДЕР ЯНГДЮБЮРЭ

НРДЕКЭМШЕ ЯРПЮМХЖШ ДКЪ ЙЮФДНИ ГЮОХЯХ (ЕЯКХ БШ БШАЕПХРЕ МЕ ХЯОНКЭГНБЮРЭ \'ФХБШЕ ГЮОХЯХ\')',
	'live_comments' => 'фХБШЕ ГЮОХЯХ',
	'live_comments_desc' => 'еЯКХ БШ ХЯОНКЭГСЕРЕ \'фХБШЕ ГЮОХЯХ\', Pivot МЕ АСДЕР ЯНГДЮБЮРЭ НРДЕКЭМСЧ

ЯРПЮМХЖС ДКЪ ЙЮФДНИ ГЮОХЯХ. щРН ЯРНХР ОН-СЛНКВЮМХЧ.',
	'readmore' => 'рЕЙЯР ДКЪ \'ДЮКЭМЕИЬЕЦН ВРЕМХЪ\' ГЮОХЯХ',
	'readmore_desc' => 'щРНР РЕЙЯР ОНЙЮГШБЮЕР ВРН ГЮОХЯЭ МЮЛМНЦН ДКХММЕЕ ВЕЛ ОНЙЮГЮМН МЮ ЦКЮБМНИ

ЯРПЮМХЖЕ Х ОПЕДКЮЦЮЕР ЯЯШКЙС ДКЪ ДЮКЭМЕИЬЕЦН ВРЕМХЪ. еЯКХ БШ НЯРЮБХРЕ ОНКЕ ОСЯРШЛ, АСДЕР ХЯОНКЭГНБЮМЮ

МЮЯРПНИЙЮ ХГ ЪГШЙНБНЦН ТЮИКЮ.',

	'arc_heading' => 'мЮЯРПНИЙХ ЮПУХБНБ',
	'arc_index' => 'цКЮБМШИ ТЮИК',
	'arc_path' => 'оСРЭ Й ЮПУХБС',
	'archive_amount' => 'йНКХВЕЯРБН ЮПУХБНБ',
	'archive_unit' => 'рХО ЮПУХБЮ',
	'archive_format' => 'тНПЛЮР ЮПУХБЮ',
	'archive_none' => 'мЕ ДЕКЮРЭ ЮПУХБНБ',
	'archive_weekly' => 'еФЕМЕДЕКЭМШЕ ЮПУХБШ',
	'archive_monthly' => 'лЕЯЪВМШЕ ЮПУХБШ',

	'archive_link' => 'юПУХБМЮЪ ЯЯШКЙЮ',
	'archive_linkfile' => 'тЮИКЯ-ЯШКЙЮ МЮ ЮПУХБ',
	'archive_order' => 'оНПЪДНЙ ЮПУХБЮ',
	'archive_ascending' => 'бНГПЮЯРЮМХЕ (ЯРЮПШЕ БМЮВЮКЕ)',
	'archive_descending' => 'сАШБЮМХЕ (МНБШЕ БМЮВЮКЕ)',

	'templates_heading' => 'ьЮАКНМШ',
	'frontpage_template' => 'ьЮАКНМ ЦКЮБМНИ ЯРПЮМХЖШ',
	'frontpage_template_desc' => 'бХД ГЮЦКЮБМНИ ЯРПЮМХЖШ ЩРНЦН АКНЦЮ.',
	'archivepage_template' => 'ьЮАКНМ ЯРПЮМХЖШ ЮПУХБНБ',
	'archivepage_template_desc' => 'бХД ЯРЮМХЖШ Я ЮПУХБЮЛХ. лНФЕР АШРЭ РЮЙХЛ ФЕ ЙЮЙ Х \'ьЮАКНМ ЦКЮБМНИ

ЯРПЮМХЖШ\'.',
	'entrypage_template' => 'ьЮАКНМ ГЮОХЯХ',
	'entrypage_template_desc' => 'бХД ЯРПЮМХЖШ ЙЮФДНИ НРДЕКЭМНИ ГЮОХЯХ.',
	'extrapage_template' => 'Extra-ьЮАКНМ',
	'extrapage_template_desc' => 'оНЙЮГШБЮЕР ЙЮЙ АСДЕР ОНЙЮГЮМЮ ЯРПЮМХЖЮ search.php .',

	'shortentry_template' => 'ьЮАКНМ ЙНПНРЙНИ ГЮОХЯХ',
	'shortentry_template_desc' => 'бХД ГЮОХЯЕИ Б ЙНПНРЙНЛ БХДЕ Б БКНЦЕ Х ЮПУХБЮУ.',
	'num_entries' => 'йНКХВЕЯРБН ГЮОХЯЕИ',
	'num_entries_desc' => 'яЙНКЭЙН ГЮОХЯЕИ АСДЕР ОНЙЮГЮМН МЮ ЦКЮБМНИ ЯРПЮМХЖЕ.',
	'offset' => 'Offset',
	'offset_desc' => 'еЯКХ НТТЯЕРС АСДЕР ОПХЯБНЕМ МНЛЕП, РН ХДЕМРХТХЙЮРНПШ ГЮОХЯЕИ АСДСР ОПНОСЫЕМШ ОПХ ПЕЦЕМЕПЮЖХХ. бШ ЛНФЕРЕ ХЯОНКЭГНБЮРЭ ЩРН ВРНАШ ЯНГДЮРЭ \'оПЕДШДСЫХЕ ГЮОХЯХ\' list, for example.',
	'comments' => 'оНГБНКХРЭ ЙНЛЛЕМРЮПХХ?',
	'comments_desc' => 'нОПЕДЕКЪЕР ЯЛНЦСР КХ ОНКЭГНБЮРЕКХ НЯРЮБКЪРЭ ЙНЛЛЕМРЮПХХ.',

	'setup_rss_head' => 'мЮЯРПНИЙЮ RSS',
	'rss_use' => 'хЯОНКЭГНБЮРЭ RSS',
	'rss_use_desc' => 'нОПЕДЕКЪЕР ЯРНХР КХ Pivot\'С ЯНГДЮБЮРЭ RSS КЕМРС ДКЪ ДЮММНЦН АКНЦЮ.',
	'rss_filename' => 'тЮИК Я RSS КЕМРНИ',
	'atom_filename' => 'Atom bestandsnaam',
	'rss_path' => 'оСРЭ Й RSS',
	'rss_path_desc' => 'нРМНЯХРЕКЭМШИ ХКХ ЮАЯНКЧРМШИ ОСРЭ Й RSS КЕМРЕ.',
	'rss_size' => 'дКХМЮ ГЮОХЯХ Б RSS',
	'rss_size_desc' => 'дКХМЮ ГЮОХЯХ (ЙНК-БН ЯХЛБНКНБ) ЙНРНПЮЪ АСДЕР Б RSS КЕМРЕ',

	'lastcomm_head' => 'мЮЯРПНИЙХ ОНЯКЕДМХУ ЙНЛЛЕМРЮПХЕБ',
	'lastcomm_amount' => 'яЙНКЭЙН ОНЙЮГШБЮРЭ',
	'lastcomm_length' => 'бШПЕГЮРЭ ОПХ ДКХМЕ',
	'lastcomm_format' => 'тНПЛЮР',
	'lastcomm_format_desc' => 'These settings determine the appearance of the \'last comments\' on the

weblog\'s frontpage.',

	'lastref_head' => 'Settings for Last Referers',
	'lastref_amount' => 'яЙНКЭЙН ОНЙЮГШБЮРЭ',
	'lastref_length' => 'нАПШБЮРЭ ОПХ ДКХМЕ',
	'lastref_format' => 'тНПЛЮР',
	'lastref_format_desc' => 'щРХ МЮЯРПНИЙХ ОНЙЮФСР БХД \'оНЯКЕДМХЕ пЕТЕППЕПШ\' МЮ ЦКЮБМНИ ЯРПЮМХЖЕ БЩАКНЦЮ',

	'various_head' => 'пЮГКХВМШЕ МЮЯРПНИЙХ',
	'emoticons' => 'хЯОНКЭГНБЮРЭ ЦПЮТ. ЯЛЮИКШ',
	'emoticons_desc' => 'нОПЕДЕКЪЕР ЯКЕДСЕР КХ РЕЙЯРНБШЕ ЯЛЮИКШ МЮОНДНАХЕ :-) РПЮМЯТНПЛХПНБЮРЭ Б ХУ

ЦПЮТХВЕЯЙХИ ЩЙБХБЮКЕМР.',
	'encode_email_addresses' => 'йНДХПНБЮРЭ Email ЮДПЕЯЮ',
	'encode_email_addresses_desc' => 'нОПЕДЕКЪЕР АСДСР КХ email-ДПЕЯЮ ГЮЙНДХПНБЮМШ ОПХ ОНЛНЫХ

javascript, ДКЪ ГЮЫХРШ НР ЯОЮЛ-АНРНБ.',
	'target_blank' => 'жЕКЭ ОСЯРЮ',
	'xhtml_workaround' => 'XHTML Workaround',
	'target_blank_desc' => 'еЯКХ ЯРНХР Б ГМЮВЕМХХ \'дЮ\', РН БЯЕ ЯЯШКЙХ АСДСР НРЙПШБЮРЭЯЪ Б МНБНЛ

НЙМЕ.',

	'date_head' => 'мЮЯРПНИЙЮ НРНАПЮФЕМХЪ ДЮРШ',
	'full_date' => 'оНКМШИ ТНПЛЮР ДЮРШ',
	'full_date_desc' => 'нОПЕДЕКЪЕР ТНПЛЮР ГЮОХЯХ ДЮРШ Х БПЕЛЕМХ. б НЯМНБМНЛ ХЯОНКЭГСЕРЯЪ Б ГЮОХЯЪУ.',
	'entry_date' => 'дЮРЮ ГЮОХЯХ',
	'diff_date' => 'пЮГКХВМШЕ ДЮРШ',
	'diff_date_desc' => '\'пЮГКХВМШЕ ДЮРШ\' ВЮЫЕ БЯЕЦН ХЯОНКЭГСЕРЯЪ Б ЯБЪГЙЕ Я  \'дЮРНИ ГЮОХЯХ\'. дЮРЮ

ГЮОХЯХ ОНЙЮГШБЮЕРЯЪ Б БЮЬЕЛ КНЦЕ, Б РН БПЕЛЪ ЙЮЙ ПЮГКХВМШЕ ДЮРШ ОНЙЮГШБЮЧРЯЪ РНКЭЙН ЕЯКХ ЕЯРЭ НРКХВХЕ НР

ОПНЬКНИ ГЮОХЯХ.',
	'language' => 'ъГШЙ',

	'comment_head' => 'мЮЯРПНИЙХ ЙНЛЛЕМРЮПХЕБ',
	'comment_sendmail' => 'нРЯШКЮРЭ ОН ОНВРЕ?',
	'comment_sendmail_desc' => 'оНЯКЕ РНЦН ЙЮЙ АШК НЯРЮБКЕМ ЙНЛЛЕМРЮПХИ, Pivot ЛНФЕР НРОПЮБХРЭ ОХЯЭЛН

БЕДСЫЕЛС АКНЦЮ.',
	'comment_emailto' => 'йНЛС',
	'comment_emailto_desc' => 'юДПЕЯ(Ю) МЮ ЙНРНПШЕ АСДЕР НРОПЮБКЕМН ЯННАЫЕМХЕ НА НЯРЮБКЕММНЛ

ЙНЛЛЕМРЮПХЕ. мЕЯЙНКЭЙН ЮДПЕЯНБ ЯКЕДСЕР ПЮГДЕКХРЭ ГЮОЪРНИ.',
	'comment_texttolinks' => 'рЕЙЯР Б ЯЯШКЙХ',
	'comment_texttolinks_desc' => 'сЙЮГШБЮЕР, ЯКЕДСЕР КХ МЮОХЯЮММШЕ ЮДПЕЯЮ ЯРПЮМХЖ Х e-mail\'НБ

ОЕПЕБНДХРЭ Б ЯЯШКЙХ.',
	'comment_wrap' => 'оЕПЕМНЯХРЭ ЙНЛЛЕМРЮПХИ ОНЯКЕ',
	'comment_wrap_desc' => 'вРНАШ НВЕМЭ ДКХММШЕ РЕЙЯРШ МЕ ОНПРХКХ БЮЬ ДХГЮИМ, РЕЙЯР ЛНФЕР АШРЭ

ОЕПЕМЕЯЕМ МЮ МНБСЧ ЯРПНЙС ОНЯКЕ ЙНКХВЕЯРБЮ СЙЮГЮММШУ ГМЮЙНБ.',
	'comments_text_0' => 'ГЮОХЯЭ ДКЪ \'МЕР ЙНЛЛЕМРЮПХЕБ\'',
	'comments_text_1' => 'ГЮОХЯЭ ДКЪ \'НДХМ ЙНЛЛЕМРЮПХИ\'',
	'comments_text_2' => 'ГЮОХЯЭ ДКЪ \'ЙНЛЛЕМРЮПХЕБ - у\'',
	'comments_text_2_desc' => 'сЙЮГШБЮЕР МЮ РЕЙЯР, ЙНРНПШИ АСДЕР ХЯОНКЭГНБЮМ ДКЪ НРНАПЮФЕМХЪ

ЙНКХВЕЯРБЮ НЯРЮБКЕММШУ ЙНЛЛЕМРЮПХЕБ. еЯКХ БШ НЯРЮБХРЕ ЩРХ ОНКЪ ОСЯРШЛХ, Pivot АСДЕР ХЯОНКЭГНБЮРЭ ГЮОХЯХ ХГ

ТЮИКЮ ЪГШЙЮ',

	'comment_pop' => 'йНЛЛЕМРЮПХХ Б МНБНЛ НЙМЕ?',
	'comment_pop_desc' => 'сЙЮГШБЮЕР, АСДСР КХ ЙНЛЛЕМРЮПХХ (ХКХ \'НРДЕКЭМШЕ ГЮОХЯХ\') ОНЙЮГШБЮРЭЯЪ Б

МНБНЛ НЙМЕ ХКХ Б НПХЦХМЮКЭМНЛ НЙМЕ АПЮСГЕПЮ.',
	'comment_width' => 'ьХПХМЮ НЙМЮ',
	'comment_height' => 'бШЯНРЮ НЙМЮ',
	'comment_height_desc' => 'сЙЮГШБЮЕР ЬХПХМС Х БШЯНРС (Б ОХЙЯЕКЮУ)НЙМЮ ДКЪ ЙНЛЛЕМРЮПХЕБ.',

	'comment_format' => "тНПЛЮР ЙНЛЛЕМРЮПХЕБ",
	'comment_format_desc' => "щРН ОНЙЮФЕР БХД ОНЯКЕДМХУ ЙНЛЛЕМРЮПХЕБ",

	'comment_textile' => 'пЮГПЕЬХРЭ Textile',
	'comment_textile_desc' => 'еЯКХ ЩРН ГМЮВЕМХЕ ЯРНХР \'дЮ\', РН ОНЯЕРХРЕКХ ЛНЦСР ХЯОНКЭГНБЮРЭ <a

href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> Б ХУ ЙНЛЛЕМРЮПХЪУ.',

	'saved_create' => 'мНБШИ АКНЦ АШК СЯОЕЬМН ЯНГДЮМ.',
	'saved_update' => 'бЕАКНЦ НАМНБКЕМ.',
	'deleted' => 'бЕАКНЦ АШК СДЮКЕМ.',
	'confirm_delete' => 'бШ ЯНАХПЮЕРЕЯЭ СДЮКХРЭ БЕАКНЦ %1. бШ СБЕПЕМШ?',

	'blogroll_heading' => 'яБНИЯРБЮ Blogroll',
	'blogroll_id' => 'Blogrolling ID #',
	'blogroll_id_desc' => 'бШ ЛНФЕРЕ БЙКЧВХРЭ <a href="http://www.blogrolling.com"

target="_blank">blogrolling.com</a> blogroll МЮ БЮЬ АКНЦ. Blogrolling НРКХВМШИ ЯОНЯНА ОНЙЮГЮРЭ ЯЯШКЙХ, ОНЙЮГШБЮЪ ОНЯКЕДМЕЕ НАМНБКЕМХЕ. еЯКХ МЕ УНРХРЕ, РН НЯРЮБЭРЕ ОНКЕ ОСЯРШЛ. еЯКХ ДЮ: When you\'re logged in to blogrolling.com, go to \'get code\', there

you will find links containing your blogroll\'s ID #. дНКФМН БШЦКЪДХРЭ БПНДЕ ЩРНЦН:

2ef8b42161020d87223d42ae18191f6d',
	'blogroll_fg' => 'жБЕР РЕЙЯРЮ',
	'blogroll_bg' => 'жБЕР ТНМЮ',
	'blogroll_line1' => 'жБЕР КХМХХ 1',
	'blogroll_line2' => 'жБЕР КХМХХ 2',
	'blogroll_c1' => 'жБЕР 1',
	'blogroll_c2' => 'жБЕР 2',
	'blogroll_c3' => 'жБЕР 3',
	'blogroll_c4' => 'жБЕР 4',
	'blogroll_c4_desc' => 'оНЙЮГШБЮЕР ЖБЕРЮ МЮ ЯЮИРЕ. жБЕР 1 ДН ЖБЕРЮ

4 ОНЙЮГШБЮЕР БХГСЮКЭМН ЙЮЙ ДЮБМН НАМНБКЕМЮ ЯЯШКЙЮ.',
);


$lang['upload'] = array (
	//		File Upload		\\
	'preview' => 'бЕЯЭ ЯОХЯНЙ',
	'thumbs' => 'оПЕДОПНЯЛНРП ЩЯЙХГНБ',
	'create_thumb' => '(ЯНГДЮРЭ ЩЯЙХГ)',
	'title' => 'тЮИКШ',
	'thisfile' => 'гЮЦПСГХРЭ МНБШИ ТЮИК:',
	'button' => 'гЮЦПСГХРЭ',
	'filename' => 'хЛЪ ТЮИКЮ',
	'thumbnail' => 'щЯЙХГ',
	'date' => 'дЮРЮ',
	'filesize' => 'пЮГЛЕП',
	'dimensions' => 'ьХПХМЮ x бШЯНРЮ',
	'delete_title' => 'сДЮКХРЭ ХГНАПЮФЕМХЕ',
	'areyousure' => 'бШ СБЕПЕМШ ВРН УНРХРЕ СДЮКХРЭ ТЮИК %s?',
	'picheader' => 'сДЮКХРЭ ДЮММНЕ ХГНАПЮФЕМХЕ?',
	'create' => 'ЯНГДЮРЭ',
	'edit' => 'ОПЮБЙЮ',

	'insert_image' => 'бЯРЮБХРЭ ХГНАПЮФЕМХЕ',
	'insert_image_desc' => 'вРНАШ БЯРЮБХРЭ ХГНАПЮФЕМХЕ, БШ ДНКФМШ ЕЦН ГЮЦПСГХРЭ ХКХ БШАПЮРЭ ПЮМЕЕ

ГЮЦПСФЕММНЕ.',
	'insert_image_popup' => 'бЯРЮБХРЭ БЯЙЮЙХБЮЧЫЕЕ ХГНАПЮФЕМХЕ',
	'insert_image_popup_desc' => 'еЯКХ БШ УНРХРЕ ЯДЕКЮРЭ БЯЙЮЙХБЮЧЫЕЕ НЙМН Я ХГНАПЮФЕМХЕЛ, БЮЛ МЮДН

БШАПЮРЭ ХГНАПЮФЕМХЕ КХ РЕЙЯР.',
	'choose_upload' => 'ГЮЦПСГХРЭ',
	'choose_select' => 'ХКХ БШАПЮРЭ',
	'imagename' => 'мЮГБЮМХЕ ХГНАПЮФЕМХЪ',
	'alt_text' => 'юКЭРЕПМЮРХБМШИ РЕЙЯР',
	'align' => 'оНКНФЕМХЕ',
	'border' => 'пЮЛЙЮ',
	'pixels' => 'ОХЙЯЕКЕИ',
	'uploaded_as' => 'бЮЬ ТЮИК АШК ГЮЦПСФЕМ ЙЮЙ \'%s\'.',
	'not_uploaded' => 'бЮЬ ТЮИК МЕ АШК ГЮЦПСФЕМ. оПНХГНЬКЮ ЯКЕДСЧЫЮЪ НЬХАЙЮ:',
	'center' => 'жЕМРП (ОН СЛНКВЮМХЧ)',
	'left' => 'кЕБН',
	'right' => 'оПЮБН',
	'inline' => 'бМСРПХ',
	'notice_upload_first' => 'дКЪ МЮВЮКЮ БШ ДНКФМШ БШАПЮРЭ ХКХ ГЮЦПСГХРЭ ХГНАПЮФЕМХЕ',
	'select_image' => 'бШАПЮРЭ ХГНАПЮФЕМХЕ',

	'for_popup' => 'дКЪ МНБНЦН НЙМЮ',
	'use_thumbnail' => 'хЯОНКЭГНБЮРЭ ЩЯЙХГ',
	'edit_thumbnail' => 'ОПЮБХРЭ ЩЯЙХГ',
	'use_text' => 'хЯОНКЭГНБЮРЭ РЕЙЯР',
	'insert_download' => 'бЯРЮБХРЭ гЮЦПСГЙС',
	'insert_download_desc' => 'вРНАШ ЯДЕКЮРЭ ТЮИК ДКЪ ГЮЦПСГЙХ, БШ ДНКФМШ БШЦПСГХРЭ ТЮИК ХКХ БШАПЮРЭ ПЮМЕЕ БШЦПСФЕММШИ ТЮИК. гЮРЕЛ БШАПЮРЭ РЕЙЯР ХКХ ХГНАПЮФЕМХЕ ДКЪ ЯЯШКЙХ МЮ ГЮЦПСГЙС',
	'use_icon' => 'хЯОНКЭГНБЮРЭ ХЙНМЙС',
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => 'бЯРЮБХРЭ ЯЯШКЙС',
	'insert_link_desc' => 'дКЪ РНЦН, ВРНАШ ЯДЕКЮРЭ ЯЯШКЙС, БЮЛ МЕНАУНДХЛН БШДЕКХРЭ РЕЙЯР. оНЯЕРХРЕКХ ОЕПЕИДСР ОН ЯЯШКЙЕ ОПХ МЮФЮРХХ МЮ МЕЕ.',
	'url' => 'URL',
	'title' => 'гЮЦКЮБХЕ',
	'text' => 'рЕЙЯР',
);


//		Categories		\\
$lang['category'] = array (
	'edit_who' => 'мЮЯРПНХРЭ РЕУ ЙРН ЛНФЕР ОХЯЮРЭ Б ЙЮРЕЦНПХЧ \'%s\'',
	'name' => 'хЛЪ',
	'users' => 'оНКЭГНБЮРЕКХ',
	'make_new' => 'яНГДЮРЭ МНБСЧ ЙЮРЕЦНПХЧ',
	'create' => 'яНГДЮРЭ ЙЮРЕЦНПХЧ',
	'canpost' => 'бШАЕПХРЕ ОНКЭГНБЮРЕКЕИ, ЙНРНПШЛ БШ УНРХРЕ ПЮГПЕЬХРЭ ОХЯЮРЭ Б ЩРС ЙЮРЕЦНПХЧ',
	'same_name' => 'йЮРЕЦНПХЪ Я РЮЙХЛ МЮГБЮМХЕЛ СФЕ ЯСЫЕЯРБСЕР',
	'need_name' => 'йЮРЕЦНПХЪ ДНКФМЮ АШРЭ МЮГБЮМЮ',

	'allowed' => 'оНГБНКЕМН',
	'allow' => 'оНГБНКХРЭ',
	'denied' => 'гЮОПЕЫЕМН',
	'deny' => 'гЮОПЕРХРЭ',
	'edit' => 'оПЮБХРЭ ЙЮРЕЦНПХЧ',

	'delete' => 'сДЮКХРЭ ЙЮРЕЦНПХЧ',
	'delete_desc' => 'бШАЕПХРЕ \'дЮ\', ДКЪ СДЮКЕМХЪ ГЮОХЯХ',

	'delete_message' => 'б ЩРНЛ АХКДЕ Pivot\'Ю ЙЮРЕЦНПХЪ АСДЕР ОПНЯРН СДЮКЕМЮ. б ЯКЕДСЧЫХУ ФЕ АХКДЮУ

БШ АСДЕРЕ БШАХПЮРЭ, ВРН ЯДЕКЮРЭ Я ГЮОХЯЪЛХ ХГ ДЮММНИ ЙЮРЕЦНПХХ.',
	'search_index_newctitle'   => 'хМДЕЙЯХПНБЮРЭ ДЮММСЧ ЙЮРЕЦНПХЧ',
	'search_index_newcdesc'    => 'бШАЕПХРЕ \'мЕР\' ЕЯКХ МЕ УНРХРЕ ВРНАШ ОНЯЕРХРЕКХ МЕ ЛНЦКХ ХЯЙЮРЭ Б ЩРНИ ЙЮРЕЦНПХХ.',
	'search_index_editcheader' => 'хМДЕЙЯХПНБЮМХЕ ЙЮРЕЦНПХХ',

	'order' => 'яНПРХПНБЙЮ',
	'order_desc' => 'йЮРЕЦНПХХ АСДСР ЯНПРХПНБЮРЭЯЪ ОН ЯОХЯЙС, Б МХФМЧЧ ЯРНПНМС. еЯКХ БШ ЯНУПЮМХРЕ БЯЕ МНЛЕПЮ, НМХ АСДСР ЯНУПЮМЪРЭЯЪ Б ЮКТЮБХРМНЛ ОНПЪДЙЕ',
	'public' => 'оСАКХВМЮЪ йЮРЕЦНПХЪ',
	'public_desc' => 'еЯКХ БШАПЮРЭ \'мЕР\', ЩРЮ ЙЮРЕЦНПХЪ АСДЕР БХДМЮ РНКЭЙН ДКЪ ГЮПЕЦХЯРПХПНБЮММШУ ОНЯЕРХРЕКЕИ. (РНКЭЙН ДКЪ "ФХБШУ" ЯРПЮМХЖ)',
	'hidden' => 'яЙПШРЮЪ ЙЮРЕЦНПХЪ',
	'hidden_desc' => 'ЕЯКХ БШАПЮРЭ \'дЮ\', ЩРЮ ЙЮРЕЦНПХЪ АСДЕР ЯЙПШРЮ Б ЮПУХБЮУ. (РНКЭЙН ДКЪ "ФХБШУ" ЯРПЮМХЖ)',

);


$lang['entries'] = array (
	'post_entry' => "гЮОХЯЮРЭ",
	'preview_entry' => "оПЕД-ОПНЯЛНРП",

	'first' => 'ОЕПБЮЪ',
	'last' => 'ОНЯКЕДМЪЪ',
	'next' => 'ЯКЕДСЧЫЮЪ',
	'previous' => 'ОПЕДШДСЫЮЪ',
	'jumptopage' => 'яРПЮМХЖЮ (%num%)',
	'filteron' => 'тХКЭРПНБЮРЭ ОН (%name%)',
	'filteroff' => 'МЕ ТХКЭРПНБЮРЭ - off',
	'title' => 'гЮЦНКНБНЙ',
	'subtitle' => 'оНДГЮЦНКНБНЙ',
	'introduction' => 'бЯРСОКЕМХЕ',
	'body' => 'рЕКН ГЮОХЯХ',
	'publish_on' => 'вХЯКН ДКЪ ГЮОХЯХ',
	'status' => 'яРЮРСЯ',
	'post_status' => 'яРЮРСЯ НРОПЮБЙХ',
	'category' => 'йЮРЕЦНПХЪ',
	'select_multi_cats' => '(Ctrl-ЙКХЙ ВРНАШ БШДЕКХРЭ МЕЯЙНКЭЙН ЙЮРЕЦНПХИ)',
	'last_edited' => "оНЯКЕДМХИ ПЮГ ОПЮБХКНЯЭ",
	'created_on' => "яНГДЮМН",
	'date' => 'дЮРЮ',
	'author' => 'юБРНП',
	'code' => 'йНД',
	'comm' => '# Comm',
	'allow_comments' => 'оНГБНКХРЭ ЙНЛЛЕМРХПНБЮРЭ',
	'convert_lb' => 'йНМБЕПРХПНБЮРЭ ОЕПЕУНДШ ЯРПНЙ',
	'always_off' => '(БЯЕЦДЮ БШЙКЧВЕМН ЙНЦДЮ Б ПЕФХЛЕ wysiwyg)',
	'be_careful' => '(АСДЭРЕ НЯРНПНФМШ Я ЩРХЛ!)',
	'edit_comments' => 'оПЮБХРЭ ЙНЛЛЕМРЮПХХ',
	'edit_comments_desc' => 'оПЮБХРЭ ЙНЛЛЕМРЮПХХ НЯРЮБКЕММШЕ ДКЪ ДЮММНИ ГЮОХЯХ',
	'edit_comment' => 'оПЮБЙЮ ЙНЛЛЕМРЮПХЪ',
	'delete_comment' => 'сДЮКХРЭ ЙНЛЛЕМРЮПХИ',
	'block_single' => 'гЮАКНЙХПНБЮРЭ IP %s',
	'block_range' => 'гЮАКНЙХПНБЮРЭ ДХЮОЮГНМ IP %s',
	'unblock_single' => 'пЮГАКНЙХПНБЮРЭ IP %s',
	'unblock_range' => 'пЮГАКНЙХПНБЮРЭ ДХЮОЮГНМ IP %s',
	'trackback' => 'оХМЦ рПЩЙаЩЙЮ',
	'trackback_desc' => 'НРОПЮБХРЭ ОХМЦХ ЯКЕДСЧЫХЛ ЯЕПБЕПЮЛ url(s). ДКЪ МЕЯЙНКЭЙХУ ЯЕПБЕПНБ, МЮОХЬХРЕ МЮ ЙЮФДНИ ЯРПНЙЕ.',
	'keywords' => 'йКЧВЕБШЕ яКНБЮ',
	'keywords_desc' => 'дКЪ ЯНГДЮМХЪ ЙКЧВЕБШУ ЯКНБ ДКЪ ГЮОХЯХ, ДКЪ РНЦН ВРНАШ ДНАЮБХРЭ ДНОНКМХРЕКЭМШЕ ЯКНБЮ ДКЪ ОНХЯЙЮ ГЮОХЯХ.',
	'vialink' => "бХЮ-кХМЙ",
	'viatitle' => "бХЮ-гЮЦКЮБХЕ",
	'via_desc' => 'хЯОНКЭГСИРЕ ЩРН ДКЪ ХЯРНВМХЙЮ ПЕЯСПЯЮ.',
	'entry_catnopost' => 'бЮЛ МЕ ПЮГПЕЬЕМН ДЕКЮРЭ ГЮОХЯЭ Б ЙЮРЕЦНПХХ:\'%s\'.',
	'entry_saved_ok' => 'бЮЬЮ ГЮОХЯЭ \'%s\' ГЮОХЯЮМЮ СЯОЕЬМН.',
	'entry_ping_sent' => 'яЯШКЙЮ рПЩЙаЩЙЮ НРОХМЦНБЮМЮ \'%s\'.',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => 'нРЛЕРХРЭ БЯЕ',
	'c_none' => 'яМЪРЭ НРЛЕРЙС ЯН БЯЕУ',
	'choose' => '- БШАЕПХРЕ -',
	'publish' => 'сЯРЮМНБХРЭ ЯРЮРСЯ Б \'НОСАКХЙНБЮМН\'',
	'hold' => 'сЯРЮМНБХРЭ ЯРЮРСЯ Б \'ОПХДЕПФЮРЭ\'',
	'delete' => 'сДЮКХРЭ ХУ',
	'generate' => 'нОСАКХЙНБЮРЭ Х ЯЦЕМЕПХПНБЮРЭ',

	'with_checked_entries' => "я НРЛЕВЕММШЛХ ГЮОХЯЪЛХ ЯДЕКЮРЭ:",
	'with_checked_files' => "я НРЛЕВЕММШЛХ ТЮИКЮЛХ ЯДЕКЮРЭ:",
	'with_checked_templates' => 'я НРЛЕВЕММШЛХ ЬЮАКНМЮЛХ ЯДЕКЮРЭ:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => 'МЕ ЛНЦС НРЙПШРЭ ДХПЕЙРНПХЧ, ОПНБЕПЭРЕ ОПЮБЮ.',
	'path_read' => 'МЕ ЛНЦС ОПНВХРЮРЭ ДХПЕЙРНПХЧ, ОПНБЕПЭРЕ ОПЮБЮ.',
	'path_write' => 'МЕ ЛНЦС ГЮОХЯЮРЭ Б ДХПЕЙРНПХЧ, ОПНБЕПЭРЕ ОПЮБЮ.',

	'file_open' => 'МЕ ЛНЦС НРЙПШРЭ ТЮИК, ОПНБЕПЭРЕ ОПЮБЮ.',
	'file_read' => 'МЕ ЛНЦС ОПНВХРЮРЭ ТЮИК, ОПНБЕПЭРЕ ОПЮБЮ.',
	'file_write' => 'МЕ ЛНЦС ГЮОХЯЮРЭ ТЮИК, ОПНБЕПЭРЕ ОПЮБЮ.',
);


//		Notices			\\
$lang['notice'] = array (
	'comment_saved' => "йНЛЛЕМРЮПХИ ЯНУПЮМЕМ.",
	'comment_deleted' => "йНЛЛЕМРЮПХИ СДЮКЕМ.",
	'comment_none' => "с ГЮОХЯХ МЕР ЙНЛЛЕМРЮПХИ.",
	'trackback_saved' => "рПЩЙаЩЙ ЯНУПЮМЕМ.",
	'trackback_deleted' => "рПЩЙаЩЙ СДЮКЕМ.",
	'trackback_none' => "с ГЮОХЯХ МЕР рПЩЙаЩЙНБ.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => 'оПНЦНКНЯНБЮРЭ \'%val%\' ГЮ ЩРС ГЮОХЯЭ',
	'good' => 'уНПНЬН',
	'bad' => 'оКНУН',
	'already' => 'бШ СФЕ ЦНКНЯНБЮКХ ГЮ ЩРС ГЮОХЯЭ ХКХ НОПНЯ',
	'register' => 'бЮЬ ЦНКНЯ \'%val%\' АШК ГЮОХЯЮМ',
);


$lang['comment'] = array (
	'register' => 'бЮЬ ЙНЛЛЕМРЮПХИ НЯРЮБКЕМ.',
	'preview' => 'бШ ОПНЯЛЮРПХБЮИРЕ БХД ЙНЛЛЕМРЮПХЪ, МН НМ ОНЙЮ МЕ НЯРЮБКЕМ. мЕ ГЮАСДЭРЕ МЮФЮРЭ \'нЯРЮБХРЭ ЙНЛЛЕМРЮПХИ\', ВРНАШ ЯНУПЮМХРЭ ЕЦН.',
	'duplicate' => 'йНЛЛЕМРЮПХИ МЕ ЯНУПЮМЕМ, бЮЬ ОПЕДШДСЫХИ ЙНЛЛЕМРЮПХИ БШЦКЪДХР РНВМН РЮЙФЕ.',
	'no_name' => 'бШ ДНКФМШ МЮОХЯЮРЭ БЮЬЕ ХЛЪ ХКХ МХЙ Б ОНКЕ \'хЛЪ\'. мЕ ГЮАСДЭРЕ МЮФЮРЭ \'нЯРЮБХРЭ ЙНЛЛЕМРЮПХИ\', ВРНАШ ЯНУПЮМХРЭ ЕЦН.',
	'no_comment' => 'бШ ДНКФМШ МЮОХЯЮРЭ ВРН-КХАН ДКЪ ЙНЛЛЕМРЮПХЪ. мЕ ГЮАСДЭРЕ МЮФЮРЭ \'нЯРЮБХРЭ ЙНЛЛЕМРЮПХИ\', ВРНАШ ЯНУПЮМХРЭ ЕЦН.',
	'too_many_hrefs' => 'яКХЬЙНЛ ЛМНЦН ЯЯШКНЙ Б бЮЬЕЛ ЙНЛЛЕМРЮПХЕ. лШ МЕ КЧАХЛ яОЮЛЛЕПНБ.',
    'email_subject' => '[Comment] Re:',
);


$lang['comments_text'] = array (
	'0' => "мЕР ЙНЛЛЕМРЮПХЕБ",
	'1' => "%num% ЙНЛЛЕМРЮПХИ",
	'2' => "ЙНЛЛЕМРЮПХЕБ: %num%",
);

$lang['trackbacks_text'] = array (
	'0' => "мЕР РПЩЙАЩЙНБ",
	'1' => "%num% РПЩЙАЩЙ",
	'2' => "%num% РПЩЙАЩЙНБ",
);

$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "юПУХБШ / Archives",
	'next_archive' => "яКЕДСЧЫХИ ЮПУХБ",
	'previous_archive' => "оПЕДШДСЫХИ ЮПУХБ",
	'last_comments' => "оНЯКЕДМХЕ ЙНЛЛЕМРЮПХХ",
	'last_referrers' => "бУНДЪЫХЕ ЯЯШКЙХ",
	'calendar' => "йЮКЕМДЮПЭ",
	'links' => "лЕМЧ",
	'xml_feed' => "RSS КЕМРЮ (2.0)",
	'powered_by' => "оНДДЕПФЮМН ",
	'name' => "хЛЪ",
	'email' => "Email",
	'url' => "URL",
	'date' => "дЮРЮ",
	'comment' => "йНЛЛЕМРЮПХИ",
	'ip' => "IP ЮДПЕЯ",
	'yes' => "дЮ",
	'no' => "мЕР",
	'emoticons' => "яЛЮИКШ",
	'emoticons_reference' => 'нРЙПШРЭ яЛЮИКХЙХ',
	'textile' => 'рЩЦХ',
	'textile_reference' => 'нРЙПШРЭ йНДХПНБЙС "Textile" - ДКЪ ОПНДБХМСРШУ ЙНЛЛЕМРЮРНПНБ.',
	'post_comment' => "нЯРЮБХРЭ ЙНЛЛЕМРЮПХИ (ok)",
	'preview_comment' => "оПЕД-ОПНЯЛНРП",
	'remember_info' => "гЮОНЛМХРЭ ЛЕМЪ",
	'disclaimer' => "<b>хМТНПЛЮЖХЪ:</b> бЯЕ ЙПНЛЕ &lt;b&gt; Х &lt;i&gt; СДЮКЪЧРЯЪ ХГ

ЙНЛЛЕМРЮПХЪ. вРНАШ ЯНГДЮРЭ ЯЯШКЙС, МЮОХЬХРЕ ЮДПЕЯ ХКХ Email.",
	'search_title' => "пЕГСКЭРЮРШ ОНХЯЙЮ",
	'search' => " Go! ",
	'nomatches' => "мХВЕЦН МЕ МЮИДЕМН ОН ГЮОПНЯС '%name%'. оНОПНАСИРЕ ОНХЯЙЮРЭ ВРН МХАСДЭ ЕЫ╦, СБЕПЕМ

ВРН бШ МЮИД╦РЕ ЙНЕ ВРН ОНКЕГМНЕ ХКХ ХМРЕПЕЯМНЕ, ЙКЧВЕБШЕ ЯКНБЮ МЮУНДЪРЯЪ Б РЕКЕ ГЮОХЯХ, МЕ Б ЕЦН ГЮЦНКНБЙЕ.",
	'matches' => "пЕГСКЭРЮРШ ОНХЯЙЮ ДКЪ '%name%':",
	'about' => "хМТНПЛЮЖХЪ",
	'stuff' => "мЮВХМЙЮ",
	'linkdump' => "яБЕФХЕ ГЮОХЯХ",
	'discreet' => "яЙПШРЭ email",
	'discreet_yes' => "дЮ, ЯЙПШРЭ ЛНИ email.",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'оПЮБЙЮ ОНКЭГНБЮРЕКЭЯЙХУ ОНКЕИ',
	'edit' => 'оПЮБЙЮ',
	'create' => 'яНГДЮРЭ',

	'dispname' => 'нРНАПЮФЮЕЛНЕ ХЛЪ',
	'intname' => 'бМСРПЕММЕ ХЛЪ',
	'intname_desc' => 'бМСРПЕММЕ ХЛЪ ЩРН ХЛЪ ОПЕДЛЕРЮ ЙНРНПШИ БШ ГЮУНРХРЕ ВРНАШ НМ НРПЮГХКЯЪ. нМН

АСДЕР ОНЙЮГЮМН Б ЬЮАКНМЮУ.',
	'size' => 'пЮГЛЕП',
	'rows' => 'пЪДНБ',
	'cols' => 'йНКНМ',
	'maxlen' => 'лЮЙЯ. ДКХМЮ',
	'minlevel' => 'лХМ. СПНБЕМЭ ОНКЭГНБЮРЕКЪ',
	'filter' => 'тХКЭРПНБЮРЭ',
	'filter_desc' => 'тХКЭРПСЪ ДЮММШИ ОПЕДЛЕР БШ НЦПЮМХВХБЮЕРЕ БЯЕ РН ВРН ЛНФЕР АШРЭ Б МЕЛ МЮОХЯЮМН',
	'no_filter' => 'мХВЕЦН',
	'del_title' => 'оНДРБЕПДХРЭ СДЮКЕМХЕ',
	'del_desc' => 'сДЮКЪЪ ДЮММНЕ ОНКЕ (<b>%s</b>) БШ РЮЙФЕ СМХВРНФХРЕ БЯЕ ДЮММШЕ ЙНРНПШЕ ОНКЭГНБЮРЕКХ

ГДЕЯЭ УПЮМХКХ.',

	'already' => 'дЮММНЕ ХЛЪ СФЕ ХЯОНКЭГСЕРЯЪ',
	'int' => 'бМСРПЕММЕ ХЛЪ ДНКФМН АШРЭ ДКХММЕЕ РПЕУ ЯХЛБНКНБ',
	'short_disp' => 'нРНАПЮФЮЕЛНЕ ХЛЪ ДНКФМН АШРЭ ДКХММЕЕ 3 ЯХЛБНКНБ',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => 'ъПКШЙХ',
	'bm_add' => 'дНАЮБХРЭ ъПКШЙ.',
	'bm_withlink' => 'Piv " New',
	'bm_withlink_desc' => 'нРЙПШБЮЕР НЙМН Я мНБНИ гЮОХЯЭЧ, ЙНРНПЮЪ ЯНДЕПФХР ЯЯШКЙС.',

	'bm_nolink' => 'Piv " New',
	'bm_nolink_desc' => 'нРЙПШБЮЕР НЙМН Я ВХЯРНИ ГЮОХЯЭЧ.',

	'bookmarklets_info' => 'You can use Bookmarklets to quickly write New Entries with Pivot. To add a

Bookmarklet to your browser, use one of the following options: (exact text varies, depending on which

browser you are using)',
	'bookmarklets_info_1' => 'Click and drag the bookmarklet to your \'Links\'-toolbar or your

browsers \'Bookmarks\'-button.',
	'bookmarklets_info_2' => 'Right-click on the bookmarklet and select \'Add to Bookmarks\'.',
);

// Accessibility - These are used for form fields, labels, fieldsets etc.
// for Web Content Accessibility Guidelines & 508 compliancy issues.
// see: http://bobby.watchfire.com/bobby/html/en/index.jsp
// JM =*=*= 2004/10/04
// 2004/11/25 =*=*= JM - minor correction for tim
$lang['accessibility'] = array(
	'search_idname'      => 'оНХЯЙ',
	'search_formname'    => 'оНХЯЙ Б ЯКНБЮУ ГЮОХЯЕИ ЯЮИРЮ',
	'search_fldname'     => 'бБЕДХРЕ ЯКНБН[Ю] ДКЪ ОНХЯЙЮ:',
	'search_placeholder' => 'бБЕДХРЕ ЙКЧВЕБШЕ ЯКНБЮ',

	'calendar_summary'   => 'щРН ЙЮКЕМДЮПЭ ГЮОХЯЕИ ЩРНЦН АКНЦЮ ЯН ЯЯШКЙЮЛХ МЮ ГЮОХЯХ ОН ДЮРЮЛ.',
	'calendar_noscript'  => 'йЮКЕМДЮПЭ ОНГБНКЪЕР ХЯЙЮРЭ ГЮОХЯХ ОН ДЮРЕ',
	/*
	2-letter language code, used to designate the principal language used on the site
	see: http://www.oasis-open.org/cover/iso639a.html
	*/

	'lang' => $langname,
) ;


$lang['snippets_text'] = array (
    'word_plural'     => 'ЯКНБ(Ю)',
    'image_single'    => 'ХГНАПЮФЕМХЕ',
    'image_plural'    => 'ХГНАПЮФЕМХЪ',
    'download_single' => 'ТЮИК',
    'download_plural' => 'ТЮИКШ',
);

$lang['trackback'] = array (
    'register' => 'бЮЬ рПЩЙаЩЙ ЯНУПЮМЕМ.',
    'duplicate' => 'бЮЬ рПЩЙаЩЙ МЕ ЯНУПЮМЕМ, РЮЙ ЙЮЙ ОПЕДШДСЫХИ РНВМН РЮЙНИФЕ.',
    'too_many_hrefs' => 'яКХЬЙНЛ ЛМНЦН ЯЯШКНЙ. лШ МЕ КЧАХЛ ЯОЮЛ.',
    'noid'      => 'мЕР ХДЕМРХТХЙЮРНПЮ РПЩЙАЩЙЮ (ID) (tb_id)',
    'nourl'     => 'мЕР URL (url)',
    'tracked'   => 'нРЙЮРЮМН',
    'email_subject' => '[Trackback] Re:',
);

$lang['commentuser'] = array (
    'title'             => 'бУНД ДКЪ ОНКЭГНБЮРЕКЕИ',
    'header'            => 'бНИРХ ЙЮЙ ГЮПЕЦХЯРПХПНБЮММШИ',
    'logout'            => 'бШИРХ.',
    'loggedout'         => 'бШ БШЬКХ ХГ ЮЙЙЮСМРЮ',
    'login'             => 'кНЦХМ',
    'loggedin'          => 'бУНД ЯНБЕПЬЕМ',
    'loggedinas'        => 'бШ БНЬКХ ЙЮЙ',
    'pass_forgot'       => 'гЮАШКХ ОЮПНКЭ?',
    'register_new'      => 'гЮПЕЦХЯРПХПСИРЕЯЭ.',
    'register'          => 'гЮПЕЦХЯРПХПСИРЕЯЭ ЙЮЙ ОНКЭГНБЮРЕКЭ',
    'register_info'     => 'оНФЮКСИЯРЮ ГЮОНКМХРЕ ЯКЕДСЧЫХЕ ОНКЪ. <strong>сАЕДХРЕЯЭ ВРН бШ ДЮКХ ОПЮБХКЭМШИ email</strong>, РЮЙ ЙЮЙ ЛШ НРОПЮБХЛ БЮЛ ОХЯЭЛН Я ОНДРБЕПФДЕМХЕЛ.',
    'pass_note'         => 'гЮЛЕРЙЮ: мЕ ЯРЮБЭРЕ БЮФМШЕ ХКХ КЕЦЙХЕ ОЮПНКХ. <br /> рЮЙ ФЕ ЙЮЙ Х ДПСЦХЕ ЯЮИРШ БЮЬ ОЮПНКЭ <em>БЮФЕМ</em> <br /> БЮФЕМ ДКЪ БЮЯ ФЕ ЯЮЛХУ!',
    'show_email'        => 'оНЙЮГШБЮРЭ ЛНИ ГЮЬХТПНБЮММШИ email Б ЙНЛЛЕМРЮПХЪУ',
    'notify'            => 'нРОПЮБКЪРЭ ЛМЕ ЯННАЫЕМХЪ Н МНБШУ ГЮОХЯЪУ',
    'def_notify'        => 'бЯЕЦДЮ ОНЛЕВЮРЭ ОНКЕ "яННАЫХРЭ НА НРБЕРЮУ"',
    'register'          => 'гЮПЕЦХЯРПХПНБЮРЭЯЪ',
    'pass_invalid'      => 'мЕБЕПМШИ ОЮПНКЭ',
    'nouser'            => 'мЕР РЮЙНЦН ОНКЭГНБЮРЕКЪ..',
    'change_info'       => 'гДЕЯЭ бШ ЛНФЕРЕ ХГЛЕМХРЭ бЮЬС ХМТНПЛЮЖХЧ.',
    'pref_edit'         => 'хГЛЕМХРЭ ЛНХ ДЮММШЕ',
    'pref_change'       => 'хГЛЕМХРЭ МЮЯРПНИЙХ',
    'options'           => 'мЮЯРПНИЙХ',
    'user_exists'       => 'рЮЙНИ ОНКЭГНБЮРЕКЭ СФЕ ЯСЫЕЯРБСЕР.. оНФЮКСИЯРЮ ББЕДХРЕ ДПСЦНЕ ХЛЪ.',
    'email_note'        => 'бШ ДНКФМШ ДЮРЭ ЯБНИ ЩКЕЙРПНММШИ ЮДПЕЯ, РЮЙ ЙЮЙ БШ МЕ ЯЛНФЕРЕ ОНДРБЕПДХРЭ ОНКЭГНБЮРЕКЪ АЕГ ЩРНЦН. бЮЬ ЮДПЕЯ МЕ АСДЕР БХДЕМ МХЙНЛС ЙПНЛЕ бЮЯ Х АСДЕР ЬХТПНБЮРЭЯЪ.',
    'stored'            => 'хГЛЕМЕМХЪ ЯНУПЮМЕМШ',
    'verified'          => 'бЮЬ ОНКЭГНБЮРЕКЭ ЯНУПЮМЕМ. оНФЮКСИЯРЮ БНИДХРЕ..',
    'not_verified'      => 'йЮФЕРЯЪ, ВРН ЙНД МЕБЕПМШИ. хГБХМХРЕ, МН ОНКЭГНБЮРЕКЭ МЕ ЯЛНЦ ОНДРБЕПДХРЭЯЪ.',
    'pass_sent'         => 'бЮЬ ОЮПНКЭ НРОПЮБКЕМ МЮ бЮЬ ЮДПЕЯ ЩКЕЙРПНММШИ ЮДПЕЯ email..',
    'user_pass_nomatch' => 'хЛЪ ОНКЭГНБЮРЕКЪ Х email ОНВЕЛС-РН МЕ ЯНБОЮДЮЧР..',
    'user_stored'       => 'оНКЭГНБЮРЕКЭ ГЮПЕЦХЯРПХПНБЮМ!',
    'user_stored_failed' => 'мЕ БНГЛНФМН ЯНУПЮМХРЭ МНБНЦН ОНКЭГНБЮРЕКЪ!!',
    'pass_send'         => 'нРОПЮБХРЭ ОЮПНКЭ',
    'pass_send_desc'    => 'еЯКХ бШ ГЮАШКХ бЮЬ ОЮПНКЭ, НМ АСДЕР БШЯКЮМ МЮ бЮЬ email. ',
    'oops'              => 'нИ',
    'back'              => 'мЮГЮД',
    'back_login'        => 'мЮГЮД МЮ ЯРПЮМХЖС БУНДЮ',
    'forgotten_pass_mail' => "бЮЬ ГЮАШРШИ ОЮПНКЭ ДКЪ '%name%': \n\n%pass%\n\nоНФЮКСИЯРЮ АНКЭЬЕ МЕ ГЮАШБЮИРЕ!\n\nдКЪ РНЦН ВРНАШ БНИРХ, МЮФЛХРЕ ЯКЕДСЧЫСЧ ЯЯШКЙС:\n %link%",
    'registered'        => "бШ ГЮПЕЦХЯРПХПНБЮМШ '%s'",
    'reg_confirmation'  => 'оНДРБЕПФДЕМХЕ ПЕЦХЯРПЮЖХХ',
    'reg_verify_short'  => 'оНДРБЕПФДЕМХЕ БЮЬЕЦН ОНКЭГНБЮРЕКЪ',
    'reg_verify_long'   => "дКЪ ОНДРБЕПФДЕМХЪ БЮЬЕЦН ОНКЭГНБЮРЕКЪ, ОНФЮКСИЯРЮ ОЕПЕИДХРЕ ОН ЯКЕДСЧЫЕИ ЯЯШКЙЕ:\n %s",
    'reg_verification'  => 'оНДРБЕПФДЕМХЕ НРОПЮБКЕМН МЮ %s. оНФЮКСИЯРЮ ОПНБЕПЭРЕ бЮЬ email ДКЪ ОНДРБЕПФДЕМХЪ.'
);

// A little tool to help you check if the file is correct..
if (count(get_included_files())<2) {

	$groups = count($lang);
	$total = 0;
	foreach ($lang as $langgroup) {
		$total += count($langgroup);
	}
	echo "<h2>Language file is correct! тЮИК ЙНППЕЙРЕМ!</h2>";
	echo "This file contains $groups groups and a total of $total labels.";

}

?>
