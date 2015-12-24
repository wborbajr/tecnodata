<?php
//Chinese Simplified (GB2312)

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2rd line.

// Chinese Simplified translation of Pivot lang file
// Created by Linn1999 
// 

// allow for different encoding for non-western languages
$encoding="GB2312";
$langname="zh";


//		ÆÕÍ¨µÄ		\\
$lang['general'] = array (
	'yes' => 'ÊÇ',	//affirmative
	'no' => '·ñ',		//negative
	'go' => '¼ÌÐø',	//proceed

	'minlevel' => 'ÄãÃ»ÓÐÈ¨Á¦·ÃÎÊÕâ¸öÒ³Ãæ',	
	'email' => 'ÓÊ¼þ',			
	'url' => 'URL',
	'further_options' => "¸ü¶àµÄÑ¡Ïî",
	'basic_view' => "»ù±¾²é¿´",
	'basic_view_desc' => "Ö»²é¿´Á÷ÐÐµÄÇøÓò",
	'extended_view' => "À©Õ¹²é¿´",
	'extended_view_desc' => "²é¿´ËùÓÐµÄ¶ÎÂä",
	'select' => "Ñ¡Ôñ",
	'cancel' => "È¡Ïû",
	'delete' => 'É¾³ý',
	'welcome' => "»¶Ó­À´µ½ %build%.",
	'write' => "Ð´Èë",
	'done' => "Íê³É!",
	'shortcuts' => "¿ì½Ý",
	'cantdelete' => "You are not allowed to delete entry %title%!",
	'cantdothat' => "You are not allowed to do that with entry %title%!",
);


$lang['userlevels'] = array (
		'³¬¼¶¹ÜÀíÔ±', '¹ÜÀíÔ±', '¸ß¼¶ÓÃ»§', 'ÆÕÍ¨ÓÃ»§', 'Moblogger'	
		//  this one might be a bit hard to translate, but basically it's an order of
		//  power or trust.  Superadmin would be the person in charge - no one can do
		//  anything about his decisions. Admin is only regulated by the Superadmin, 
		//  Advanced by the Admin and Superadmin, etc..
		//  Just get the idea of it.
);


$lang['numbers'] = array (
	'0', '1', '2', '3', '4', '5', '6', '7' //, 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen'
);


$lang['months'] = array (
	'Ò»ÔÂ', '¶þÔÂ', 'ÈýÔÂ', 'ËÄÔÂ', 'ÎåÔÂ', 'ÁùÔÂ', 'ÆßÔÂ', '°ËÔÂ', '¾ÅÔÂ', 'Ê®ÔÂ', 'Ê®Ò»ÔÂ', 'Ê®¶þÔÂ'	
);	
		

$lang['months_abbr'] = array (
	'Ò»ÔÂ', '¶þÔÂ', 'ÈýÔÂ', 'ËÄÔÂ', 'ÎåÔÂ', 'ÁùÔÂ', 'ÆßÔÂ', '°ËÔÂ', '¾ÅÔÂ', 'Ê®ÔÂ', 'Ê®Ò»ÔÂ', 'Ê®¶þÔÂ'
);


$lang['days'] = array (
	'ÐÇÆÚÌì', 'ÐÇÆÚÒ»', 'ÐÇÆÚ¶þ', 'ÐÇÆÚÈý', 'ÐÇÆÚËÄ', 'ÐÇÆÚÎå', 'ÐÇÆÚÁù'
);


$lang['days_abbr'] = array (
	'ÖÜÈÕ', 'ÖÜÒ»', 'ÖÜ¶þ', 'ÖÜÈý', 'ÖÜËÄ', 'ÖÜÎå', 'ÖÜÁù'
);


$lang['days_calendar'] = array (
	'S', 'M', 'T', 'W', 'T', 'F', 'S'
); 

	
$lang['datetime_words'] = array (
	'Äê', 'ÔÂ', 'ÖÜ', 'ÈÕ', 'Ê±', '·Ö', 'Ãë'
);


//		µÇÂ¼Ò³Ãæ		\\
$lang['login'] = array (
	'title' => 'µÇÈë',
	'name' => 'Ãû³Æ',
	'pass' => 'ÃÜÂë',
	'remember' => '¼ÇÂ¼',
	'rchoice' => array (
		'0' => 'Ã»ÓÐ',
		'1' => 'ÎÒµÄÃû³ÆºÍÃÜÂë',
		'2' => 'ÎÒÏ£Íû±£³ÖµÇÂ¼×´Ì¬',
	),
	'retry' => '´íÎóµÄÓÃ»§Ãû/ÃÜÂë',
	'banned' => 'ÄãÒÑ¾­ÓÐ¹ý10´ÎµÄ´íÎóµÇÂ¼£¬ËùÒÔÄãµÄIP½«Òª±»·âËø12¸öÐ¡Ê±.',
);


//		Ö÷²Ëµ¥		\\
	$lang['userbar'] = array (
	'main' => '×ÜÀÀ',
	'entries' => 'ÌõÄ¿',
	'submit' => 'ÐÂµÄÌõÄ¿',
	'comments' => 'ÆÀÂÛ',
	'modify' => '±à¼­ÌõÄ¿',
	'userinfo' => 'ÎÒµÄÐÅÏ¢',
	'u_settings' => 'ÎÒµÄÉèÖÃ',
	'u_marklet' => 'Bookmarklets',
	'files' => 'ÎÄµµ¹ÜÀí',
	'upload' => 'ÉÏ´«',
	'stats' => 'Í³¼Æ',
	'admin' => '¹ÜÀí',

	'main_title' => 'PivotµÄÈ«²¿×ÜÀÀ',
	'entries_title' => 'ÌõÄ¿×ÜÀÀ',
	'submit_title' => 'ÐÂµÄÌõÄ¿',
	'comments_title' => '±à¼­/É¾³ýÆÀÂÛ',		
	'modify_title' => '±à¼­ÌõÄ¿',
	'userinfo_title' => '²é¿´ÎÒµÄ¸öÈËÐÅÏ¢',
	'u_settings_title' => '±à¼­ÎÒµÄ¸öÈËÉè¶¨',
	'u_marklet_title' => 'Create Bookmarklets',
	'files_title' => '¹ÜÀíºÍÉÏ´«ÎÄµµ',
	'upload_title' => 'ÉÏ´«ÎÄ¼þ',
	'uploaded_success' => 'ÎÄ¼þÒÑ¾­ÉÏ´«',
	'stats_title' => '²é¿´ÈÕÖ¾ºÍÍ³¼Æ.',
	'updatetitles_title' => '²é¿´ÈÕÖ¾ºÍÍ³¼Æ.',
	'admin_title' => '¹ÜÀíÔ±×ÜÀÀ',
	'recent_entries' => 'Recent Entries',
	'recent_comments' => 'Recent Comments',
);


$lang['adminbar'] = array (
	//		¹ÜÀí²Ëµ¥		\\
	//'trebuild' => '´ÓÐÂ½¨Á¢ËùÓÐµÄÎÄ¼þ', 
	'seeusers' => 'ÓÃ»§',
	'seeconfig' => 'ÉèÖÃ',
	'templates' => 'Ä£°å',
	'maintenance' => 'Î¬»¤',
	'regen' => '´ÓÐÂ½¨Á¢ËùÓÐÎÄ¼þ',
	'blogs' => 'Weblogs',
	'categories' => '·ÖÀà',
	'verifydb' => 'Ð£ÑéÊý¾Ý¿â',
	'buildindex' => '´ÓÐÂ½¨Á¢Ë÷ÒýÎÄ¼þ',
	'buildfrontpage' => '´ÓÐÂ½¨Á¢Ê×Ò³',
	'sendping' => 'Send Pings',
	'backup' => '±¸·Ý',
	'description' => 'ÃèÊö',
	'conversion' => '×ª»¯',
	'seeusers_title' => 'ÓÃ»§¹ÜÀí',
	'userfields' => 'User Information Fields',
	'userfields_title' => '½¨Á¢,±à¼­ºÍÉ¾³ýÓÃ»§µÄÐÅÏ¢',
	'seeconfig_title' => '±à¼­ÅäÖÃÎÄ¼þ',
	'templates_title' => '½¨Á¢,±à¼­ºÍÉ¾³ýÄ£°å',
	'maintenance_title' => 'PivotÎÄ¼þµÄÖ´ÐÐÈÕ³£±£Ñø',
	'regen_title' => '´ÓÐÂ½¨Á¢PivotÉú³ÉµÄÎÄ¼þºÍ´æµµ',
	'blogs_title' => '½¨Á¢,±à¼­ºÍÉ¾³ýWeblogs',
	'blogs_edit_title' => '±à¼­WeblogµÄÉèÖÃ For ',
	'categories_title' => '½¨Á¢,±à¼­ºÍÉ¾³ý·ÖÀà',	
	'verifydb_title' => '¼ì²éÄãµÄÊý¾Ý¿âµÄÍêÕûÐÔ',
	'buildindex_title' => 'ÖØÐÂ½¨Á¢Êý¾Ý¿âµÄË÷Òý',
	'buildfrontpage_title' => '´ÓÐÂ½¨Á¢Ã¿¸öWeblogµÄÊ×Ò³,´æµµºÍRSSÆµµÀ.',
	'backup_title' => '°ÑÄãÊäÈëµÄÌõÄ¿×ö±¸·Ý',
	'ipblocks' => 'IP·ÃÎÊÏÞÖÆ',
	'ipblocks_title' => '²é¿´ºÍ±à¼­±»ÏÞÖÆµÄIPµØÖ·.',
	'ipblocks_stored' => 'The IP-addresses have been stored.',
	'ipblocks_store' => 'Store these IP-addresses',
	'fileexplore' => 'ÎÄ¼þä¯ÀÀÆ÷',
	'fileexplore_title' => '²é¿´ÎÄ¼þ(ÎÄ±¾ÎÄ¼þºÍÊý¾Ý¿âÎÄ¼þ)',
	'sendping_title' => 'Send Pings to Update Trackers.',
	'buildindex_finished' => 'Generating index took %num% seconds',
);


$lang['templates'] = array (
	'rollback' => '»Øµµ',
	'create_template' => '½¨Á¢Ä£°å',
	'create_template_info' => '´Ó²Ý¸å½¨Á¢Ò»¸öPivotµÄÄ£°å',
	'no_comment' => 'Ã»ÓÐÆÀÂÛ',
	'comment' => 'ÆÀÂÛ*',
	'comment_note' => '(*×¢½â:ÆÀÂÛÖ»ÄÜ be saved at <b>first</b> save of changes or creation)',
	'create' => '½¨Á¢Ä£°å',
	'editing' => '±à¼­',
	'filename' => 'ÎÄ¼þÃû',
	'save_changes' => '±£´æ¸ü¸Ä!',
	'save_template' => '±£´æÄ£°å!',	
);


//		¹ÜÀí			\\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar_xxx_title'] ones
$lang['admin'] = array (
	'seeusers' => '½¨Á¢,±à¼­ºÍÉ¾³ýÓÃ»§',
	'seeconfig' => '±à¼­ÅäÖÃÎÄ¼þ',
	'templates' => '½¨Á¢,±à¼­ºÍÉ¾³ýÄ£°å',
	'maintenance' => '°ÑPivotµÄËùÓÐÎÄ¼þÖ´ÐÐÈÕ³£±£Ñø',
	'regen' => '´ÓÐÂ½¨Á¢ËùÓÐÓÉPivot²úÉúµÄÎÄ¼þ',
	'blogs' => '½¨Á¢,±à¼­ºÍÉ¾³ýPivot½«Òª·¢²¼µÄ²»Í¬µÄWeblogµ½',
);


//		Î¬»¤		\\	
$lang['maint'] = array (
	'title' => 'Î¬»¤',	
	'gen_arc_title' => '½¨Á¢´æµµ', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => '´ÓÐÂ½¨Á¢ËùÓÐ´æµµ', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'Ð£ÑéXMLÎÄ¼þºÍÊý¾Ý¿âÎÄ¼þ', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'Ð£ÑéºÍÐÞ¸´XMLÎÄ¼þµÄÍêÕûÐÔ', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => '±¸·Ý',
	'backup_text' => '½¨Á¢ËùÓÐPivot»ù±¾ÎÄ¼þµÄ±¸·Ý',
);


//		Stats and referers		\\
$lang['stats'] = array (
	'show_last' => "Show the last",
	'20ref' => "20 referrers",
	'50ref' => "50 referrers",
	'allref' => "all referrers",
	'updateref' => "Update the referer to title mappings",
	'hostaddress' => 'Host-address (ip-address)', 
	'which page' => 'welke pagina',

	'getting' => '»ñµÃÐÂµÄ±êÌâ',
	'awhile' => 'Õâ½«ÓÐ¶ÎµÈ´ýµÄÊ±¼ä,Çë²»ÒªÖÐ¶Ï.',
	'firstpass' => 'First pass',
	'secondpass' => 'Second pass',
	'nowuptodate' => 'Your referer-title mappings are now up to date.',
	'finished' => '½áÊø',
);


//		User Info		\\
	$lang['userinfo'] = array (
	'editfields' => '±à¼­ÓÃ»§',
	'desc_editfields' => '±à¼­ÓÃ»§µÄÃèÊö',
	'username' => 'ÓÃ»§Ãû',
	'pass1' => 'ÃÜÂë',
	'pass2' => 'È·ÈÏÃÜÂë',
	'email' => 'ÓÊ¼þ',
	'userlevel' => 'ÓÃ»§¼¶±ð',	
	'userlevel_desc' => 'ÓÃ»§¼¶±ð¾ö¶¨ÁËÓÃ»§ÔÚPivotÀïÃæ¿ÉÒÔ×öµÄÊÂÇé.',
	'language' => 'Language',	
	'edituser' => '±à¼­ÓÃ»§',  //the link to.. well, edit the user (also the title)
	'edituserinfo' => '±à¼­ÓÃ»§ÐÅÏ¢',
	'newuser' => '´´½¨ÐÂµÄÓÃ»§',
	'desc_newuser' => '½¨Á¢Ò»¸öÐÂµÄPivotµÇÂ¼ÕËºÅ,ÔÊÐíËûÃÇÐ´Blog.',
	'newuser_button' => '½¨Á¢',
	'edituser_button' => '¸Ä±ä',
	'pass_too_short' => 'ÃÜÂë³¤¶È±ØÐë´óÓÚ6¸ö×Ö·û',
	'pass_dont_match' => 'Á½´ÎÊäÈëµÄÃÜÂë²»Í¬',
	'username_in_use' => 'ÓÃ»§ÃûÒÑ¾­±»Õ¼ÓÃ',
	'username_too_short' => 'ÓÃ»§Ãû³¤¶È±ØÐë´óÓÚ4¸ö×Ö·û',
	'username_not_valid' => 'ÓÃ»§ÃûÖ»ÄÜ°üÀ¨Ó¢ÎÄ×ÖÄ¸,Êý×Ö(A-Z, 0-9)ºÍÏÂ»®Ïß(_).',
	'not_good_email' => 'ÄÇ²»ÊÇÒ»¸öºÏ·¨µÄÓÊ¼þµØÖ·',	
	'c_admin_title' => 'È·¶¨½¨Á¢Ò»¸ö¹ÜÀíÔ±',
	'c_admin_message' => 'Ò»¸ö'.$lang['userlevels']['1'].' ÓÐËùÓÐµÄÈ¨Á¦,ÄÜ¹»±à¼­ÐÂµÄÌõÄ¿,ËùÓÐµÄÆÀÂÛ,¸Ä±äÃ¿Ò»¸ö¶«Î÷.ÄãÈ·¶¨ÄãÒª½¨Á¢ %s Ò»¸ö '.$lang['userlevels']['1'].'Âð?',
);


//		ÉèÖÃÒ³Ãæ		\\		
	$lang['config'] = array (
	'save' => '±£´æÉèÖÃ',

	'sitename' => 'ÍøÕ¾Ãû³Æ',
	'defaultlanguage' => 'Ä¬ÈÏÓïÑÔ',
	'siteurl' => 'ÍøÕ¾URL',
	'header_fileinfo' => 'ÎÄ¼þÐÅÏ¢',
	'localpath' => '±¾µØÂ·¾¶',
	'debug_options' => 'µ÷ÊÔÑ¡Ïî',
	'debug' => 'µ÷ÊÔÄ£Ê½',
	'debug_desc' => 'ÏÔÊ¾Ëæ»úµÄµ÷ÊÔÐÅÏ¢',
	'log' => 'ÈÕÖ¾ÎÄ¼þ',
	'log_desc' => '±£ÁôÈÕÖ¾ÎÄ¼þ',

	'header_uploads' => 'ÉÏ´«ÎÄ¼þ',
	'upload_path' => 'ÉÏ´«ÎÄ¼þÂ·¾¶',	
	'upload_accept' => 'Ö§³ÖµÄÎÄ¼þÀàÐÍ',				
	'upload_extension' => 'Ä¬ÈÏµÄÀ©Õ¹Ãû',
	'upload_save_mode' => '¸²¸Ç·½Ê½',
	'make_safe' => '¸É¾»µÄÎÄ¼þÃû',
	'c_upload_save_mode' => 'ÎÄ¼þÃûµÝÔö',
	'max_filesize' => '×î´óÎÄ¼þ´óÐ¡',
	'header_datetime' => 'ÈÕÆÚ/Ê±¼ä',
	'timeoffset_unit' => 'Ê±¼äµ÷Õû¹¤¾ß',
	'timeoffset' => 'Ê±¼äµ÷Õû',
	'header_extra' => 'ÔÓÏîÉèÖÃ',
	'wysiwyg' => 'Ä¬ÈÏÊ¹ÓÃËù¼û¼´ËùµÃ±à¼­Æ÷',
	'wysiwyg_desc' => '¾ö¶¨ÊÇ·ñÄ¬ÈÏÊ¹ÓÃËù¼û¼´ËùµÃ±à¼­Æ÷. µ¥¶ÀµÄÓÃ»§¿ÉÒÔÔÚ \'ÎÒµÄÐÅÏ¢\' Àï¸ü¸ÄÕâ¸öÉèÖÃ.',
	'def_text_processing' => 'Default Text Processing', 
	'text_processing' => 'Text Processing',
	'text_processing_desc' => 'Determines the default text processing, when a user is using the non-wysiwyg editor. \'Convert Linebreaks\' does nothing more than change linebreaks to a &lt;br&gt;-tag. <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> is a powerful, yet easy to learn markup style.',
	'none' => 'None',
	'convert_br' => 'Convert Linebreaks to &lt;br /&gt;',
	'textile' => 'Textile',

	'setup_ping' => 'Ping Setup',
	'ping_use' => 'Ping update trackers',
	'ping_use_desc' => 'This determines whether update trackers like weblogs.com will be automatically notified by Pivot if you post a new entry. Services like blogrolling.com depend on these pings',	
	'ping_urls' => 'URLs to ping',
	'ping_urls_desc' => 'You can provide several urls to send pings to. Do not include the http:// part, otherwise it won\'t work. Just place each server on a new line, or seperated by a pipe character. Some common servers to ping are:<br /><b>rpc.weblogs.com/RPC2</b> (weblogs.com pinger, the one most widely used)<br /><b>pivotlog.net/pinger</b> (pivotlog pinger, not yet operational)<br /><b>rcs.datashed.net/RPC2</b> (euro.weblogs.com pinger)<br /><b>ping.blo.gs</b> (blo.gs pinger)<br />',

	'new_window' => 'ÓÃÐÂ´°¿Ú´ò¿ªÁ´½Ó',
	'emoticons' => 'Ê¹ÓÃ±íÇé',
	'javascript_email' => 'ÓÃJavaScript±àÂëÓÊ¼þµØÖ·?',	
	'new_window_desc' => '¾ö¶¨ËùÓÐµÄÌõÄ¿ÊÇ·ñ¶¼ÓÃÐÂµÄ´°¿Ú´ò¿ª.',

	'mod_rewrite' => 'Use Filesmatch',
	'mod_rewrite_desc' => 'If you use Apache\'s Filesmatch option, Pivot will make urls like www.mysite.com/archive/2003/05/30/nice_weather, instead of www.mysite.com/pivot/entry.php?id=134. Not all servers support this, so please read the section in the manual about this.',

	'default_introduction' => 'Default Introduction/Body',
	'default_introduction_desc' => 'This will determine the default values for Introduction and Body when an author writes a new entry. Normally this will be an empty paragraph, which makes the most sense semantically.',

	'upload_autothumb'	=> 'Automatic Thumbnails',
	'upload_thumb_width' => 'Thumbnail width',
	'upload_thumb_height' => 'Thumbnail height',
	'upload_thumb_remote' => 'Remote cropping script',
	'upload_thumb_remote_desc' => 'If your server does not have the necessary libraries installed to perform image cropping, you can use a remote cropping script.',


);


//		WeblogÉèÖÃ	\\
$lang['weblog_config'] = array (
	'edit_weblog' => '±à¼­Õâ¸öWeblog',
	'edit_blog' => '±à¼­Blogs',
	'new_weblog' => 'ÐÂµÄWeblog',
	'new_weblog_desc' => 'Ìí¼ÓÒ»¸öÐÂµÄWeblog',
	'del_weblog' => 'É¾³ýWeblog',
	'del_this_weblog' => 'É¾³ýÕâ¸öWeblog.',
	'create_new' => '´´½¨ÐÂµÄWeblog',
	'subw_heading' => 'For each of the subweblogs that were found in the templates, you can configure what template they use, as well as what categories are published in them',
	'create' => '½¨Á¢',
	
	'create_1' => '´´½¨/±à¼­Weblog,²½Öè 1 of 3',
	'create_2' => '´´½¨/±à¼­Weblog,²½Öè 2 of 3',
	'create_3' => '´´½¨/±à¼­Weblog,²½Öè 3 of 3',

	'name' => 'WeblogÃû³Æ',
	'payoff' => '¸±±êÌâ',
	'payoff_desc' => '',
	'url' => 'URL to Weblog',
	'url_desc' => 'Èç¹ûÃ»ÓÐÌîÐ´Pivot½«¾ö¶¨ÄãµÄWeblogµÄURL. Èç¹ûÄãµÄWeblogÊÇFramesetµÄÒ»²¿·Ö,»òÕßÊÇ·þÎñÆ÷¶ËµÄincludeÎÄ¼þ, Äã¿ÉÒÔÓÃÕâ¸öÑ¡Ïî±ÜÃâ.',
	'index_name' => 'Ê×Ò³(Index)',
	'index_name_desc' => 'Ê×Ò³ÎÄ¼þµÄÎÄ¼þÃû. Ò»°ãµÄÏñ\'index.html\' »òÕß \'index.php\'.',

	'ssi_prefix' => 'SSI Prefix',
	'ssi_prefix_desc' => 'If your weblog uses SSI (which is not recommended you can use this to prefix Pivot\'s filenames with the filename used for the SSI. eg. \'index.shtml?p=\'. You should just leave this blank, unless you know what you\'re doing.',

	'front_path' => 'Ê×Ò³µÄÂ·¾¶',
	'front_path_desc' => 'Pivot½«ÓÃÓë½¨Á¢Õâ¸öBlogÊ×Ò³µÄÏà¶Ô»òÕß¾ø¶ÔÂ·¾¶.',
	'file_format' => 'ÎÄ¼þÃû',
	'entry_heading' => 'ÌõÄ¿ÉèÖÃ',
	'entry_path' => 'ÌõÄ¿Â·¾¶',
	'entry_path_desc' => 'Pivot½«ÓÃÓë½¨Á¢ÌõÄ¿Ò³ÃæµÄÏà¶Ô»òÕß¾ø¶ÔÂ·¾¶.',
	'live_comments' => 'Live entries',
	'live_comments_desc' => 'If you use \'Live entries\', Pivot will not need to generate files for every single entry. This is the preferred setting.',
	'readmore' => '\'Read More\' Text',
	'readmore_desc' => 'The text that is used to indicate that there is more text in this entry than is shown on the front page. If you leave this blank, Pivot will use the default as defined by the language settings',
	
	'arc_heading' => '´æµµÉèÖÃ',
	'arc_index' => 'Ë÷ÒýÎÄ¼þ',
	'arc_path' => '´æµµÂ·¾¶',
	'archive_amount' => '´æµµÊýÁ¿',
	'archive_unit' => '´æµµÀàÐÍ',
	'archive_format' => '´æµµ¸ñÊ½',
	'archive_none' => 'Ã»ÓÐ´æµµ',
	'archive_weekly' => 'Ã¿ÖÜ´æµµ',
	'archive_monthly' => 'Ã¿ÔÂ´æµµ',

	'archive_link' => '´æµµÁ´½Ó',
	'archive_linkfile' => '´æµµÁ´½ÓÎÄ¼þ',	

	'templates_heading' => 'Ä£°å',
	'frontpage_template' => 'Ê×Ò³Ä£°å',
	'frontpage_template_desc' => 'Õâ¸öÄ£°å¾ö¶¨ÁËWeblogÊ×Ò³µÄÏÔÊ¾·ç¸ñ.',
	'archivepage_template' => '´æµµÒ³Ä£°å',
	'archivepage_template_desc' => 'Õâ¸öÄ£°å¾ö¶¨ÁË²é¿´´æµµµÄÒ³ÃæµÄ·ç¸ñ.Õâ¸öÒ²¿ÉÒÔÊ¹ÓÃ\'Ê×Ò³Ä£°å\'.',	
	'entrypage_template' => 'ÌõÄ¿Ò³ÃæÄ£°å',
	'entrypage_template_desc' => 'Õâ¸öÄ£°å¾ö¶¨ÁËÈçºÎÏÔÊ¾Ã¿Ò»¸öÌõÄ¿.',	

	'shortentry_template' => 'Shortentry Template',
	'shortentry_template_desc' => 'The Template which determines the layout of single entries, as they are shown within the weblog or archives.',	
	'num_entries' => 'ÌõÄ¿ÊýÁ¿',
	'num_entries_desc' => 'Õâ¸öWeblogÊ×Ò³ÏÔÊ¾ÌõÄ¿µÄÊýÁ¿.',	
	'offset' => 'Offset',
	'offset_desc' => 'If Offset is set to a number, that amount of entries will be skipped when generating the page. You can use this to make a \'Previous entries\' list, for example.',
	'comments' => 'ÔÊÐíÆÀÂÛ?',
	'comments_desc' => 'Õâ¸öWeblogÊÇ·ñÔÊÐíÓÃ»§µÄÆÀÂÛ.',	

	'setup_rss_head' => 'RSS ÉèÖÃ',
	'rss_use' => 'Ê¹ÓÃRSS',
	'rss_use_desc' => 'PivotÎªÕâ¸öWeblog×Ô¶¯²úÉúRSSÎÄ¼þ.',
	'rss_filename' => 'RSS ÎÄ¼þÃû',
	'rss_path' => 'RSS Â·¾¶',
	'rss_path_desc' => 'RSSÎÄ¼þ´æ·ÅµÄÂ·¾¶(Ïà¶ÔÂ·¾¶»ò¾ø¶ÔÂ·¾¶).',
	'rss_size' => 'RSS Entry Length',	
	'rss_size_desc' => 'The length (in characters) of an entry in the RSS file',	

	'lastcomm_head' => '×îºóÆÀÂÛÀ¸ÉèÖÃ',
	'lastcomm_amount' => 'ÏÔÊ¾ÊýÁ¿',
	'lastcomm_length' => '¼ôÇÐÎÄ×Ö³¤¶È',
	'lastcomm_format' => '¸ñÊ½',
	'lastcomm_format_desc' => 'ÉèÖÃÊÇÕâ¸öWeblogÊ×Ò³ÉÏµÄ×îºóÆÀÂÛÀ¸.',

	'lastref_head' => 'Settings for Last Referers',
	'lastref_amount' => 'ÏÔÊ¾¼¸¸ö',
	'lastref_length' => '²Ã¼ôÎÄ±¾ÔÚ',
	'lastref_format' => '¸ñÊ½',
	'lastref_format_desc' => 'ÕâÐ©ÉèÖÃ¾ö¶¨ÁËÊ×Ò³ÉÏµÄ \'last referers\'ÁÐ±í.',

	'various_head' => 'ÆäËûÉèÖÃ',
	'emoticons' => 'Ê¹ÓÃ±íÇéÍ¼Æ¬',
	'emoticons_desc' => '¾ö¶¨ÁËÊÇ·ñ½«:-)×ª»»ÎªÒ»¸ö±íÇéÍ¼Æ¬.',
	'encode_email_addresses' => '±àÂëÓÊ¼þµØÖ·',
	'encode_email_addresses_desc' => '±£»¤ÓÊ¼þµØÖ·²»±»À¬»øÓÊ¼þÇÖÈÅ.',
	'target_blank' => 'µ¯³öÐÂ´°¿Ú',
	'xhtml_workaround' => 'XHTML Workaround',
	'target_blank_desc' => 'ËùÓÐÔÚÌõÄ¿ÖÐËùÐ´µÄÁ´½Ó¶¼½«ÔÚÐÂµÄ´°¿ÚÖÐ±»ÏÔÊ¾.',

	'date_head' => 'ÈÕÆÚÏÔÊ¾ÉèÖÃ',
	'full_date' => 'ÍêÕûÈÕÆÚ¸ñÊ½',
	'full_date_desc' => 'ÉèÖÃÁËÍêÕûÈÕÆÚµÄ¸ñÊ½.´ó¶àÓÃÔÚÃ¿¸öµ¥Ò»ÌõÄ¿Ò³ÃæµÄÉÏ·½',
	'entry_date' => 'ÌõÄ¿ÈÕÆÚ',
	'diff_date' => 'Diff Date',
	'diff_date_desc' => 'The \'Diff Date\' is most commonly used in conjunction with the \'Entry Date\'. The Entry Date is displayed on every entry on your log, while the Diff Date is only displayed if the date differs from the previous entry.',
	'language' => 'ÓïÑÔ',

	'comment_head' => 'ÆÀÂÛÉèÖÃ',
	'comment_sendmail' => '·¢ËÍÓÊ¼þl?',
	'comment_sendmail_desc' => 'ÔÚÓÃ»§×öÆÀÂÛÖ®ºó,×Ô¶¯·¢ËÍÓÊ¼þ¸øÕâ¸öWeblogµÄ¹ÜÀíÔ±.',
	'comment_emailto' => '¼Ä¸ø',
	'comment_emailto_desc' => 'Specify the email address(es) to whom mail will be sent. seperate multiple addresses with a comma.',
	'comment_texttolinks' => 'ÎÄ×ÖµØÖ·×ª»»ÎªÁ´½Ó',
	'comment_texttolinks_desc' => 'µ±ÊéÐ´Ò»¸öÁ´½Ó»òÕßÓÊ¼þµØÖ·µÄÊ±ºò,¿ÉÒÔÔÚÍøÒ³ÉÏ°ÑËûÃÇ±ä³ÉÒ»¸ö¿ÉÒÔµã»÷µÄÁ´½Ó.',
	'comment_wrap' => 'ÆÀÂÛ»»ÐÐÔÚ',
	'comment_wrap_desc' => '·ÀÖ¹Ì«³¤µÄ×Ö·û´®ÆÆ»µÁËÄãµÄÍøÒ³ÏÔÊ¾½á¹¹.',
	'comments_text_0' => 'µ±\'Ã»ÓÐÆÀÂÛ\'Ê±ÏÔÊ¾',
	'comments_text_1' => 'µ±\'Ö»ÓÐÒ»ÌõÆÀÂÛ\'Ê±ÏÔÊ¾',
	'comments_text_2' => 'µ±\'n ÌõÆÀÂÛÊ±\'Ê±ÏÔÊ¾',
	'comments_text_2_desc' => 'The text that is used to indicate how many comments there are. If you leave this blank, Pivot will use the default as defined by the language settings',

	'comment_pop' => 'ÓÃµ¯³ö´°¿ÚÏÔÊ¾ÆÀÂÛÂð?',
	'comment_pop_desc' => 'determines whether the comments page (or \'single entry\') will be shown in a popup window, or in the original browser window.',
	'comment_width' => 'µ¯³ö´°¿ÚµÄ¿í¶È',
	'comment_height' => 'µ¯³ö´°¿ÚµÄ¸ß¶È',
	'comment_height_desc' => 'ÖÆ¶¨µ¯³ö´°¿ÚµÄ¿í¶ÈºÍ¸ß¶È(ÏñËØ).',
			
	'comment_format' => "ÆÀÂÛµÄ¸ñÊ½",
	'comment_format_desc' => "ÖÆ¶¨ÁËÌõÄ¿Ò³ÃæÀïÃæµÄÆÀÂÛµÄ¸ñÊ½.",

	'comment_textile' => 'Allow Textile',
	'comment_textile_desc' => 'If this is set to \'Yes\', visitors are allowed to use <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> in their comments.',

	'saved_create' => 'ÐÂµÄWeblogÒÑ¾­½¨Á¢ÁË.',
	'saved_update' => 'WeblogÒÑ¾­¸üÐÂÁË.',
	'deleted' => 'WeblogÒÑ¾­É¾³ýÁË.',
	'confirm_delete' => 'Äã¾ö¶¨É¾³ýWeblog %1Âð?',

	'blogroll_heading' => 'Blogroll settings',
	'blogroll_id' => 'Blogrolling ID #',
	'blogroll_id_desc' => 'You can optionally include a <a href="http://www.blogrolling.com" target="_blank">blogrolling.com</a> blogroll in your weblog. Blogrolling is an excellent service to maintain a list of links, which shows how recently they were updated. If you do not want this, just skip skip these input field. Otherwise: When you\'re logged in to blogrolling.com, go to \'get code\', there you will find links containing your blogroll\'s ID #. It should look somthing like this: 2ef8b42161020d87223d42ae18191f6d',
	'blogroll_fg' => 'Text Color',
	'blogroll_bg' => 'Background Color',
	'blogroll_line1' => 'Line Color 1',
	'blogroll_line2' => 'Line Color 2',
	'blogroll_c1' => 'Color 1',
	'blogroll_c2' => 'Color 2',
	'blogroll_c3' => 'Color 3',
	'blogroll_c4' => 'Color 4',
	'blogroll_c4_desc' => 'These colors determine what your blogroll will look like. Color 1 to color 4 give a visual indication as to how recently updated a link is.',
);


$lang['upload'] = array (
	//		File Upload		\\
	'preview' => 'Ô¤ÀÀËùÓÐ',
	'thumbs' => 'Thumbnail Preview',
	'create_thumb' => '(Create Thumbnail)',
	'title' => 'ÎÄ¼þ',
	'thisfile' => 'ÉÏ´«Ò»¸öÐÂÎÄ¼þ:',
	'button' => 'ÉÏ´«',
	'filename' => 'ÎÄ¼þÃû',
	'thumbnail' => 'Thumbnail',
	'date' => 'ÈÕÆÚ',
	'filesize' => 'ÎÄ¼þ´óÐ¡',
	'dimensions' => '¿í x ¸ß',		
	'delete_title' => 'É¾³ýÍ¼Æ¬',
	'areyousure' => 'ÄãÈ·¶¨É¾³ý %sÂð?',
	'picheader' => 'É¾³ýÕâ¸öÍ¼Æ¬?',
	'create' => '½¨Á¢',
	'edit' => '±à¼­',

	'insert_image' => '²åÈëÒ»¸öÍ¼Ïñ',
	'insert_image_desc' => 'Äã¿ÉÒÔ²åÈëÒ»¸öÉÏ´«µÄÍ¼Ïñ»òÕßÒÔÇ°ÉÏ´«¹ýµÄÍ¼Ïñ.',
	'insert_image_popup' => '²åÈëÒ»¸öµ¯³öµÄÍ¼Ïñ´°¿Ú',
	'insert_image_popup_desc' => 'Äã¿ÉÒÔ²åÈëÒ»¸öÉÏ´«µÄÍ¼Ïñ»òÕßÒÔÇ°ÉÏ´«¹ýµÄÍ¼Ïñ.Then select a text or a thumbnail that triggers the popup.',
	'choose_upload' => 'ÉÏ´«',
	'choose_select' => '»òÕßÑ¡Ôñ',
	'imagename' => 'Í¼ÏñÃû³Æ',
	'alt_text' => '×¢ÊÍÎÄ×Ö',
	'align' => 'ÅÅÁÐ',
	'border' => '±ß½ç',
	'pixels' => 'ÏñËØ',
	'uploaded_as' => 'ÄãµÄÎÄ¼þ±»ÉÏ´«ÁËas \'%s\'.',
	'not_uploaded' => 'ÄãµÄÎÄ¼þÃ»ÓÐ±»ÉÏ´«, ³öÏÖ´íÎó:',
	'center' => 'ÖÐ¼ä(Ä¬ÈÏ)',
	'left' => '×ó',
	'right' => 'ÓÒ',
	'inline' => 'Inline',		
	'notice_upload_first' => 'ÄãÓ¦¸ÃÏÈÑ¡Ôñ»òÉÏ´«Ò»¸öÍ¼Ïñ',
	'select_image' => 'Ñ¡ÔñÍ¼Ïñ',

	'for_popup' => 'µ¯³ö´°¿Ú×¨ÓÃ',		
	'use_thumbnail' => 'Use Thumbnail',		
	'edit_thumbnail' => 'edit thumbnail',		
	'use_text' => 'Ê¹ÓÃÎÄ±¾',		
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => '²åÈëÒ»¸öÁ´½Ó',
	'insert_link_desc' => 'ÌîÐ´Ò»¸öURLÀ´²åÈëÒ»¸öÁ´½Ó.ÓÎ¿Í¿ÉÒÔÔÚ°ÑÊó±ê·ÅÔÚÁ´½ÓÉÏÊ±¿´µ½Á´½ÓµÄÐÅÏ¢.',
	'url' => 'URL',
	'title' => '±êÌâ',
	'text' => 'ÎÄ×Ö',
);


//		·ÖÀà		\\
$lang['category'] = array (
	'edit_who' => '±à¼­Ë­ÄÜÔÚÕâ¸ö·ÖÀà·¢Ìù \'%s\'',
	'name' => 'Ãû³Æ',
	'users' => 'ÓÃ»§',
	'make_new' => '½¨Á¢ÐÂµÄ·ÖÀà',
	'create' => '½¨Á¢·ÖÀà',
	'canpost' => 'Ñ¡Ôñ¿ÉÒÔÔÚÕâ¸ö·ÖÀà·¢ÌùµÄÓÃ»§',
	'same_name' => '·ÖÀàÃû³ÆÒÑ¾­´æÔÚ',
	'need_name' => 'Õâ¸öÖÖÀàÐèÒªÒ»¸öÃû³Æ',
	
	'allowed' => 'ÔÊÐíµÄ',
	'allow' => 'ÔÊÐí',
	'denied' => '¾Ü¾øµÄ',
	'deny' => '¾Ü¾ø',
	'edit' => '±à¼­·ÖÀà',
	
	'delete' => 'É¾³ý·ÖÀà',
	'delete_desc' => 'Select \'yes\', if you wish to delete this category',

	'delete_message' => 'ÔÚÕâ¸ö°æ±¾µÄPivotÖÐ,Ö»ÓÐ·ÖÀàµÄÃû³ÆÊÇ¿ÉÒÔÉ¾³ýµÄ,ÔÚÏÂÒ»¸ö°æ±¾µÄPivotÖÐ,Äã¿ÉÒÔÉ¾³ý·ÖÀàÖÐµÄÌõÄ¿.',
);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "¼ÓÈëÌõÄ¿",
	'preview_entry' => "Ô¤ÀÀÌõÄ¿",

	'first' => 'µÚÒ»¸ö',
	'last' => '×îºóÒ»¸ö',
	'next' => 'ÏÂÒ»¸ö',
	'previous' => 'ÉÏÒ»¸ö',

	'title' => '±êÌâ',
	'subtitle' => '¸±Ìâ',
	'introduction' => '½éÉÜ',
	'body' => 'Body',
	'publish_on' => '·¢²¼ÔÚ',
	'status' => '×´Ì¬',
	'post_status' => 'Post×´Ì¬',
	'category' => '·ÖÀà',
	'select_multi_cats' => '(Ctrl-Êó±êµã»÷À´Í¬Ê±Ñ¡Ôñ¶à¸ö·ÖÀà)',
	'last_edited' => "×îºó±à¼­ÓÚ",
	'created_on' => "½¨Á¢ÓÚ",		
	'date' => 'ÈÕÆÚ',
	'author' => '×÷Õß',
	'code' => '±àÂë',
	'comm' => '# Comm',
	'allow_comments' => 'ÔÊÐíÆÀÂÛ',
	'convert_lb' => 'Convert Linebeaks',
	'always_off' => '(ÔÚËù¼û¼´ËùµÃµÄÄ£Ê½ÏÂ,Õâ¸öÑ¡ÏîÊÇ¹Ø±ÕµÄ)',
	'be_careful' => '(×¢ÒâÕâÀï!)',
	'edit_comments' => '±à¼­ÆÀÂÛ',
	'edit_comments_desc' => '±à¼­Õâ¸öÌõÄ¿µÄÆÀÂÛ',
	'edit_comment' => '±à¼­ÆÀÂÛ',
	'delete_comment' => 'É¾³ýÆÀÂÛ',
	'block_single' => '·âËø IP %s',
	'block_range' => '·âËø IP ÇøÓò %s',
	'unblock_single' => '½â³ý IP %s',
	'unblock_range' => '½â³ý IP ÇøÓò %s',
	'trackback' => 'Trackback ping',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => 'Ñ¡ÔñÈ«²¿',
	'c_none' => '²»Ñ¡Ôñ',
	'choose' => '- Ñ¡ÔñÒ»¸ö¶¯×÷ -',
	'publish' => 'ÉèÖÃ×´Ì¬Îª \'·¢²¼\'',
	'hold' => 'ÉèÖÃ×´Ì¬Îª \'ÔÝ²»·¢²¼\'',
	'delete' => 'É¾³ýËûÃÇ',
	'generate' => '²úÉúÎÄ¼þ²¢·¢²¼',

	'with_checked_entries' => "Ñ¡ÔñµÄÌõÄ¿,½«Òª:",
	'with_checked_files' => "Ñ¡ÔñµÄÎÄ¼þ,½«Òª:",
	'with_checked_templates' => 'Ñ¡ÔñµÄÄ£°å,½«Òª:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => '²»ÄÜ´ò¿ªÄ¿Â¼,Çë¼ì²éÄãµÄÈ¨ÏÞ',
	'path_read' => '²»ÄÜ¶ÁÈ¡Ä¿Â¼,Çë¼ì²éÄãµÄÈ¨ÏÞ',
	'path_write' => '²»ÄÜÐ´ÈëÄ¿Â¼,Çë¼ì²éÄãµÄÈ¨ÏÞ',

	'file_open' => '²»ÄÜ´ò¿ªÎÄ¼þ,Çë¼ì²éÄãµÄÈ¨ÏÞ.',
	'file_read' => '²»ÄÜ¶ÁÈ¡ÎÄ¼þ,Çë¼ì²éÄãµÄÈ¨ÏÞ.',
	'file_write' => '²»ÄÜÙÉÎÄ¼þ,Çë¼ì²éÄãµÄÈ¨ÏÞ.',
);


//		Notices			\\
$lang['notice'] = array (		
	'comment_saved' => "ÆÀÂÛ±»±£´æÁË.",
	'comment_deleted' => "ÆÀÂÛ±»É¾³ýÁË.",
	'comment_none' => "Ã»ÓÐÆÀÂÛ.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => '\'%val%\'Æ±',
	'good' => 'ºÃ',
	'bad' => '»µ',
	'already' => 'ÄãÒÑ¾­¸øÕâ¸öÌõÄ¿Í¸¹ýÆ±ÁË',
	'register' => 'ÄãµÄÍ¶Æ± \'%val%\' ÒÑ¾­Ìá½»ÁË',
);


$lang['comment'] = array (
	'register' => 'ÄãµÄÆÀÂÛ±»Ìá½»ÁË.',
	'preview' => 'ÄãÕýÔÚÔ¤ÀÀÄãÐ´µÄÆÀÂÛ£¬µã»÷\'ÆÀÂÛ\'²ÅÄÜÍê³É.',
	'duplicate' => 'ÄãµÄÆÀÂÛÃ»ÓÐ±»Ìá½»,ÒòÎªÄãµÄÆÀÂÛºÍ¸Õ²ÅµÄÒ»Ñù.',
	'no_name' => 'You should type your name (or an alias) in the \'name\'-field. Be sure to click on \'Post Comment\' to store it permanently.',
	'no_comment' => 'You should type something in the \'comment\'-field. Be sure to click on \'Post Comment\' to store it permanently.',
);


$lang['comments_text'] = array (
	'0' => "0 ÌõÆÀÂÛ",
	'1' => "1 ÌõÆÀÂÛ",
	'2' => "%num% ÌõÆÀÂÛ",
);


$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "´æµµ",
	'next_archive' => "ÏÂÒ»´æµµ",
	'previous_archive' => "Ç°Ò»´æµµ",
	'last_comments' => "×îºóµÄÆÀÂÛ",
	'last_referrers' => "Last Referrers",
	'calendar' => "ÈÕÀú",
	'links' => "Á´½Ó",
	'xml_feed' => "XML: RSS Feed",
	'powered_by' => "Powered by",
	'name' => "ÐÕÃû",
	'email' => "Email",
	'url' => "URL",
	'date' => "ÈÕÆÚ",		
	'comment' => "ÆÀÂÛ",
	'ip' => "IP-µØÖ·",		
	'yes' => "Yes",
	'no' => "No",
	'emoticons' => "±íÇé",
	'emoticons_reference' => 'Open Emoticons Reference',
	'textile' => 'Textile',
	'textile_reference' => 'Open Textile Reference',
	'post_comment' => "ÆÀÂÛ",
	'preview_comment' => "Ô¤ÀÀÆÀÂÛ",
	'remember_info' => "¼ÇÂ¼ÓÃ»§ÐÅÏ¢?",
	'disclaimer' => "<b>Small print:</b> All html tags except &lt;b&gt; and &lt;i&gt; will be removed from your comment. You can make links by just typing the url or mail-address.",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Edit Userfields',
	'edit' => '±à¼­',
	'create' => '´´½¨',

	'dispname' => 'ÏÔÊ¾µÄÃû³Æ',
	'intname' => 'ÄÚ²¿Ãû³Æ',
	'intname_desc' => 'The Internal Name is the name of this item as it will appear when you tell pivot to display it in a template.',
	'size' => '´óÐ¡',
	'rows' => 'ÐÐ',
	'cols' => 'ÁÐ',
	'maxlen' => '×î´ó³¤¶È',
	'minlevel' => '×îÐ¡ÓÃ»§µÈ¼¶',	
	'filter' => '¹ýÂË by',
	'filter_desc' => 'By filtering this item, you limit the type of input that can be used in it',
	'no_filter' => 'Ã»ÓÐ',
	'del_title' => 'È·ÈÏÉ¾³ý',
	'del_desc' => 'Deleting this Userfield (<b>%s</b>) will also destroy all the data that users have stored withen it, and make any instances of it in a template appear empty.',	
	
	'already' => 'Ãû³ÆÒÑ¾­±»Õ¼ÓÃ',
	'int' => 'ÄÚ²¿Ãû³Æ±ØÐë´óÓÚ3¸ö×Ö·û',
	'short_disp' => 'ÏÔÊ¾Ãû³Æ±ØÐë´óÓÚ3¸ö×Ö·û',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => 'Bookmarklets',
	'bm_add' => 'Add Bookmarklet.',
	'bm_withlink' => 'Piv » New',
	'bm_withlink_desc' => 'This Bookmarklet opens a window with a New Entry, which contains a link to the page it was opened from.',

	'bm_nolink' => 'Piv » New',
	'bm_nolink_desc' => 'This Bookmarklet opens a window with a blank New Entry.',

	'bookmarklets_info' => 'You can use Bookmarklets to quickly write New Entries with Pivot. To add a Bookmarklet to your browser, use one of the following options: (exact text varies, depending on which browser you are using)',
	'bookmarklets_info_1' => 'Click and drag the bookmarklet to your \'Links\'-toolbar or your browsers \'Bookmarks\'-button.',
	'bookmarklets_info_2' => 'Right-click on the bookmarklet and select \'Add to Bookmarks\'.',
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