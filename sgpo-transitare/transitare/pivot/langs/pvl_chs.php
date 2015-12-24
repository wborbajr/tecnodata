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


//		普通的		\\
$lang['general'] = array (
	'yes' => '是',	//affirmative
	'no' => '否',		//negative
	'go' => '继续',	//proceed

	'minlevel' => '你没有权力访问这个页面',	
	'email' => '邮件',			
	'url' => 'URL',
	'further_options' => "更多的选项",
	'basic_view' => "基本查看",
	'basic_view_desc' => "只查看流行的区域",
	'extended_view' => "扩展查看",
	'extended_view_desc' => "查看所有的段落",
	'select' => "选择",
	'cancel' => "取消",
	'delete' => '删除',
	'welcome' => "欢迎来到 %build%.",
	'write' => "写入",
	'done' => "完成!",
	'shortcuts' => "快捷",
	'cantdelete' => "You are not allowed to delete entry %title%!",
	'cantdothat' => "You are not allowed to do that with entry %title%!",
);


$lang['userlevels'] = array (
		'超级管理员', '管理员', '高级用户', '普通用户', 'Moblogger'	
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
	'一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'	
);	
		

$lang['months_abbr'] = array (
	'一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'
);


$lang['days'] = array (
	'星期天', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'
);


$lang['days_abbr'] = array (
	'周日', '周一', '周二', '周三', '周四', '周五', '周六'
);


$lang['days_calendar'] = array (
	'S', 'M', 'T', 'W', 'T', 'F', 'S'
); 

	
$lang['datetime_words'] = array (
	'年', '月', '周', '日', '时', '分', '秒'
);


//		登录页面		\\
$lang['login'] = array (
	'title' => '登入',
	'name' => '名称',
	'pass' => '密码',
	'remember' => '记录',
	'rchoice' => array (
		'0' => '没有',
		'1' => '我的名称和密码',
		'2' => '我希望保持登录状态',
	),
	'retry' => '错误的用户名/密码',
	'banned' => '你已经有过10次的错误登录，所以你的IP将要被封锁12个小时.',
);


//		主菜单		\\
	$lang['userbar'] = array (
	'main' => '总览',
	'entries' => '条目',
	'submit' => '新的条目',
	'comments' => '评论',
	'modify' => '编辑条目',
	'userinfo' => '我的信息',
	'u_settings' => '我的设置',
	'u_marklet' => 'Bookmarklets',
	'files' => '文档管理',
	'upload' => '上传',
	'stats' => '统计',
	'admin' => '管理',

	'main_title' => 'Pivot的全部总览',
	'entries_title' => '条目总览',
	'submit_title' => '新的条目',
	'comments_title' => '编辑/删除评论',		
	'modify_title' => '编辑条目',
	'userinfo_title' => '查看我的个人信息',
	'u_settings_title' => '编辑我的个人设定',
	'u_marklet_title' => 'Create Bookmarklets',
	'files_title' => '管理和上传文档',
	'upload_title' => '上传文件',
	'uploaded_success' => '文件已经上传',
	'stats_title' => '查看日志和统计.',
	'updatetitles_title' => '查看日志和统计.',
	'admin_title' => '管理员总览',
	'recent_entries' => 'Recent Entries',
	'recent_comments' => 'Recent Comments',
);


$lang['adminbar'] = array (
	//		管理菜单		\\
	//'trebuild' => '从新建立所有的文件', 
	'seeusers' => '用户',
	'seeconfig' => '设置',
	'templates' => '模板',
	'maintenance' => '维护',
	'regen' => '从新建立所有文件',
	'blogs' => 'Weblogs',
	'categories' => '分类',
	'verifydb' => '校验数据库',
	'buildindex' => '从新建立索引文件',
	'buildfrontpage' => '从新建立首页',
	'sendping' => 'Send Pings',
	'backup' => '备份',
	'description' => '描述',
	'conversion' => '转化',
	'seeusers_title' => '用户管理',
	'userfields' => 'User Information Fields',
	'userfields_title' => '建立,编辑和删除用户的信息',
	'seeconfig_title' => '编辑配置文件',
	'templates_title' => '建立,编辑和删除模板',
	'maintenance_title' => 'Pivot文件的执行日常保养',
	'regen_title' => '从新建立Pivot生成的文件和存档',
	'blogs_title' => '建立,编辑和删除Weblogs',
	'blogs_edit_title' => '编辑Weblog的设置 For ',
	'categories_title' => '建立,编辑和删除分类',	
	'verifydb_title' => '检查你的数据库的完整性',
	'buildindex_title' => '重新建立数据库的索引',
	'buildfrontpage_title' => '从新建立每个Weblog的首页,存档和RSS频道.',
	'backup_title' => '把你输入的条目做备份',
	'ipblocks' => 'IP访问限制',
	'ipblocks_title' => '查看和编辑被限制的IP地址.',
	'ipblocks_stored' => 'The IP-addresses have been stored.',
	'ipblocks_store' => 'Store these IP-addresses',
	'fileexplore' => '文件浏览器',
	'fileexplore_title' => '查看文件(文本文件和数据库文件)',
	'sendping_title' => 'Send Pings to Update Trackers.',
	'buildindex_finished' => 'Generating index took %num% seconds',
);


$lang['templates'] = array (
	'rollback' => '回档',
	'create_template' => '建立模板',
	'create_template_info' => '从草稿建立一个Pivot的模板',
	'no_comment' => '没有评论',
	'comment' => '评论*',
	'comment_note' => '(*注解:评论只能 be saved at <b>first</b> save of changes or creation)',
	'create' => '建立模板',
	'editing' => '编辑',
	'filename' => '文件名',
	'save_changes' => '保存更改!',
	'save_template' => '保存模板!',	
);


//		管理			\\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar_xxx_title'] ones
$lang['admin'] = array (
	'seeusers' => '建立,编辑和删除用户',
	'seeconfig' => '编辑配置文件',
	'templates' => '建立,编辑和删除模板',
	'maintenance' => '把Pivot的所有文件执行日常保养',
	'regen' => '从新建立所有由Pivot产生的文件',
	'blogs' => '建立,编辑和删除Pivot将要发布的不同的Weblog到',
);


//		维护		\\	
$lang['maint'] = array (
	'title' => '维护',	
	'gen_arc_title' => '建立存档', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => '从新建立所有存档', /* bob notes: redundant, see 'regen' */
	'xml_title' => '校验XML文件和数据库文件', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => '校验和修复XML文件的完整性', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => '备份',
	'backup_text' => '建立所有Pivot基本文件的备份',
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

	'getting' => '获得新的标题',
	'awhile' => '这将有段等待的时间,请不要中断.',
	'firstpass' => 'First pass',
	'secondpass' => 'Second pass',
	'nowuptodate' => 'Your referer-title mappings are now up to date.',
	'finished' => '结束',
);


//		User Info		\\
	$lang['userinfo'] = array (
	'editfields' => '编辑用户',
	'desc_editfields' => '编辑用户的描述',
	'username' => '用户名',
	'pass1' => '密码',
	'pass2' => '确认密码',
	'email' => '邮件',
	'userlevel' => '用户级别',	
	'userlevel_desc' => '用户级别决定了用户在Pivot里面可以做的事情.',
	'language' => 'Language',	
	'edituser' => '编辑用户',  //the link to.. well, edit the user (also the title)
	'edituserinfo' => '编辑用户信息',
	'newuser' => '创建新的用户',
	'desc_newuser' => '建立一个新的Pivot登录账号,允许他们写Blog.',
	'newuser_button' => '建立',
	'edituser_button' => '改变',
	'pass_too_short' => '密码长度必须大于6个字符',
	'pass_dont_match' => '两次输入的密码不同',
	'username_in_use' => '用户名已经被占用',
	'username_too_short' => '用户名长度必须大于4个字符',
	'username_not_valid' => '用户名只能包括英文字母,数字(A-Z, 0-9)和下划线(_).',
	'not_good_email' => '那不是一个合法的邮件地址',	
	'c_admin_title' => '确定建立一个管理员',
	'c_admin_message' => '一个'.$lang['userlevels']['1'].' 有所有的权力,能够编辑新的条目,所有的评论,改变每一个东西.你确定你要建立 %s 一个 '.$lang['userlevels']['1'].'吗?',
);


//		设置页面		\\		
	$lang['config'] = array (
	'save' => '保存设置',

	'sitename' => '网站名称',
	'defaultlanguage' => '默认语言',
	'siteurl' => '网站URL',
	'header_fileinfo' => '文件信息',
	'localpath' => '本地路径',
	'debug_options' => '调试选项',
	'debug' => '调试模式',
	'debug_desc' => '显示随机的调试信息',
	'log' => '日志文件',
	'log_desc' => '保留日志文件',

	'header_uploads' => '上传文件',
	'upload_path' => '上传文件路径',	
	'upload_accept' => '支持的文件类型',				
	'upload_extension' => '默认的扩展名',
	'upload_save_mode' => '覆盖方式',
	'make_safe' => '干净的文件名',
	'c_upload_save_mode' => '文件名递增',
	'max_filesize' => '最大文件大小',
	'header_datetime' => '日期/时间',
	'timeoffset_unit' => '时间调整工具',
	'timeoffset' => '时间调整',
	'header_extra' => '杂项设置',
	'wysiwyg' => '默认使用所见即所得编辑器',
	'wysiwyg_desc' => '决定是否默认使用所见即所得编辑器. 单独的用户可以在 \'我的信息\' 里更改这个设置.',
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

	'new_window' => '用新窗口打开链接',
	'emoticons' => '使用表情',
	'javascript_email' => '用JavaScript编码邮件地址?',	
	'new_window_desc' => '决定所有的条目是否都用新的窗口打开.',

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


//		Weblog设置	\\
$lang['weblog_config'] = array (
	'edit_weblog' => '编辑这个Weblog',
	'edit_blog' => '编辑Blogs',
	'new_weblog' => '新的Weblog',
	'new_weblog_desc' => '添加一个新的Weblog',
	'del_weblog' => '删除Weblog',
	'del_this_weblog' => '删除这个Weblog.',
	'create_new' => '创建新的Weblog',
	'subw_heading' => 'For each of the subweblogs that were found in the templates, you can configure what template they use, as well as what categories are published in them',
	'create' => '建立',
	
	'create_1' => '创建/编辑Weblog,步骤 1 of 3',
	'create_2' => '创建/编辑Weblog,步骤 2 of 3',
	'create_3' => '创建/编辑Weblog,步骤 3 of 3',

	'name' => 'Weblog名称',
	'payoff' => '副标题',
	'payoff_desc' => '',
	'url' => 'URL to Weblog',
	'url_desc' => '如果没有填写Pivot将决定你的Weblog的URL. 如果你的Weblog是Frameset的一部分,或者是服务器端的include文件, 你可以用这个选项避免.',
	'index_name' => '首页(Index)',
	'index_name_desc' => '首页文件的文件名. 一般的像\'index.html\' 或者 \'index.php\'.',

	'ssi_prefix' => 'SSI Prefix',
	'ssi_prefix_desc' => 'If your weblog uses SSI (which is not recommended you can use this to prefix Pivot\'s filenames with the filename used for the SSI. eg. \'index.shtml?p=\'. You should just leave this blank, unless you know what you\'re doing.',

	'front_path' => '首页的路径',
	'front_path_desc' => 'Pivot将用与建立这个Blog首页的相对或者绝对路径.',
	'file_format' => '文件名',
	'entry_heading' => '条目设置',
	'entry_path' => '条目路径',
	'entry_path_desc' => 'Pivot将用与建立条目页面的相对或者绝对路径.',
	'live_comments' => 'Live entries',
	'live_comments_desc' => 'If you use \'Live entries\', Pivot will not need to generate files for every single entry. This is the preferred setting.',
	'readmore' => '\'Read More\' Text',
	'readmore_desc' => 'The text that is used to indicate that there is more text in this entry than is shown on the front page. If you leave this blank, Pivot will use the default as defined by the language settings',
	
	'arc_heading' => '存档设置',
	'arc_index' => '索引文件',
	'arc_path' => '存档路径',
	'archive_amount' => '存档数量',
	'archive_unit' => '存档类型',
	'archive_format' => '存档格式',
	'archive_none' => '没有存档',
	'archive_weekly' => '每周存档',
	'archive_monthly' => '每月存档',

	'archive_link' => '存档链接',
	'archive_linkfile' => '存档链接文件',	

	'templates_heading' => '模板',
	'frontpage_template' => '首页模板',
	'frontpage_template_desc' => '这个模板决定了Weblog首页的显示风格.',
	'archivepage_template' => '存档页模板',
	'archivepage_template_desc' => '这个模板决定了查看存档的页面的风格.这个也可以使用\'首页模板\'.',	
	'entrypage_template' => '条目页面模板',
	'entrypage_template_desc' => '这个模板决定了如何显示每一个条目.',	

	'shortentry_template' => 'Shortentry Template',
	'shortentry_template_desc' => 'The Template which determines the layout of single entries, as they are shown within the weblog or archives.',	
	'num_entries' => '条目数量',
	'num_entries_desc' => '这个Weblog首页显示条目的数量.',	
	'offset' => 'Offset',
	'offset_desc' => 'If Offset is set to a number, that amount of entries will be skipped when generating the page. You can use this to make a \'Previous entries\' list, for example.',
	'comments' => '允许评论?',
	'comments_desc' => '这个Weblog是否允许用户的评论.',	

	'setup_rss_head' => 'RSS 设置',
	'rss_use' => '使用RSS',
	'rss_use_desc' => 'Pivot为这个Weblog自动产生RSS文件.',
	'rss_filename' => 'RSS 文件名',
	'rss_path' => 'RSS 路径',
	'rss_path_desc' => 'RSS文件存放的路径(相对路径或绝对路径).',
	'rss_size' => 'RSS Entry Length',	
	'rss_size_desc' => 'The length (in characters) of an entry in the RSS file',	

	'lastcomm_head' => '最后评论栏设置',
	'lastcomm_amount' => '显示数量',
	'lastcomm_length' => '剪切文字长度',
	'lastcomm_format' => '格式',
	'lastcomm_format_desc' => '设置是这个Weblog首页上的最后评论栏.',

	'lastref_head' => 'Settings for Last Referers',
	'lastref_amount' => '显示几个',
	'lastref_length' => '裁剪文本在',
	'lastref_format' => '格式',
	'lastref_format_desc' => '这些设置决定了首页上的 \'last referers\'列表.',

	'various_head' => '其他设置',
	'emoticons' => '使用表情图片',
	'emoticons_desc' => '决定了是否将:-)转换为一个表情图片.',
	'encode_email_addresses' => '编码邮件地址',
	'encode_email_addresses_desc' => '保护邮件地址不被垃圾邮件侵扰.',
	'target_blank' => '弹出新窗口',
	'xhtml_workaround' => 'XHTML Workaround',
	'target_blank_desc' => '所有在条目中所写的链接都将在新的窗口中被显示.',

	'date_head' => '日期显示设置',
	'full_date' => '完整日期格式',
	'full_date_desc' => '设置了完整日期的格式.大多用在每个单一条目页面的上方',
	'entry_date' => '条目日期',
	'diff_date' => 'Diff Date',
	'diff_date_desc' => 'The \'Diff Date\' is most commonly used in conjunction with the \'Entry Date\'. The Entry Date is displayed on every entry on your log, while the Diff Date is only displayed if the date differs from the previous entry.',
	'language' => '语言',

	'comment_head' => '评论设置',
	'comment_sendmail' => '发送邮件l?',
	'comment_sendmail_desc' => '在用户做评论之后,自动发送邮件给这个Weblog的管理员.',
	'comment_emailto' => '寄给',
	'comment_emailto_desc' => 'Specify the email address(es) to whom mail will be sent. seperate multiple addresses with a comma.',
	'comment_texttolinks' => '文字地址转换为链接',
	'comment_texttolinks_desc' => '当书写一个链接或者邮件地址的时候,可以在网页上把他们变成一个可以点击的链接.',
	'comment_wrap' => '评论换行在',
	'comment_wrap_desc' => '防止太长的字符串破坏了你的网页显示结构.',
	'comments_text_0' => '当\'没有评论\'时显示',
	'comments_text_1' => '当\'只有一条评论\'时显示',
	'comments_text_2' => '当\'n 条评论时\'时显示',
	'comments_text_2_desc' => 'The text that is used to indicate how many comments there are. If you leave this blank, Pivot will use the default as defined by the language settings',

	'comment_pop' => '用弹出窗口显示评论吗?',
	'comment_pop_desc' => 'determines whether the comments page (or \'single entry\') will be shown in a popup window, or in the original browser window.',
	'comment_width' => '弹出窗口的宽度',
	'comment_height' => '弹出窗口的高度',
	'comment_height_desc' => '制定弹出窗口的宽度和高度(像素).',
			
	'comment_format' => "评论的格式",
	'comment_format_desc' => "制定了条目页面里面的评论的格式.",

	'comment_textile' => 'Allow Textile',
	'comment_textile_desc' => 'If this is set to \'Yes\', visitors are allowed to use <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> in their comments.',

	'saved_create' => '新的Weblog已经建立了.',
	'saved_update' => 'Weblog已经更新了.',
	'deleted' => 'Weblog已经删除了.',
	'confirm_delete' => '你决定删除Weblog %1吗?',

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
	'preview' => '预览所有',
	'thumbs' => 'Thumbnail Preview',
	'create_thumb' => '(Create Thumbnail)',
	'title' => '文件',
	'thisfile' => '上传一个新文件:',
	'button' => '上传',
	'filename' => '文件名',
	'thumbnail' => 'Thumbnail',
	'date' => '日期',
	'filesize' => '文件大小',
	'dimensions' => '宽 x 高',		
	'delete_title' => '删除图片',
	'areyousure' => '你确定删除 %s吗?',
	'picheader' => '删除这个图片?',
	'create' => '建立',
	'edit' => '编辑',

	'insert_image' => '插入一个图像',
	'insert_image_desc' => '你可以插入一个上传的图像或者以前上传过的图像.',
	'insert_image_popup' => '插入一个弹出的图像窗口',
	'insert_image_popup_desc' => '你可以插入一个上传的图像或者以前上传过的图像.Then select a text or a thumbnail that triggers the popup.',
	'choose_upload' => '上传',
	'choose_select' => '或者选择',
	'imagename' => '图像名称',
	'alt_text' => '注释文字',
	'align' => '排列',
	'border' => '边界',
	'pixels' => '像素',
	'uploaded_as' => '你的文件被上传了as \'%s\'.',
	'not_uploaded' => '你的文件没有被上传, 出现错误:',
	'center' => '中间(默认)',
	'left' => '左',
	'right' => '右',
	'inline' => 'Inline',		
	'notice_upload_first' => '你应该先选择或上传一个图像',
	'select_image' => '选择图像',

	'for_popup' => '弹出窗口专用',		
	'use_thumbnail' => 'Use Thumbnail',		
	'edit_thumbnail' => 'edit thumbnail',		
	'use_text' => '使用文本',		
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => '插入一个链接',
	'insert_link_desc' => '填写一个URL来插入一个链接.游客可以在把鼠标放在链接上时看到链接的信息.',
	'url' => 'URL',
	'title' => '标题',
	'text' => '文字',
);


//		分类		\\
$lang['category'] = array (
	'edit_who' => '编辑谁能在这个分类发贴 \'%s\'',
	'name' => '名称',
	'users' => '用户',
	'make_new' => '建立新的分类',
	'create' => '建立分类',
	'canpost' => '选择可以在这个分类发贴的用户',
	'same_name' => '分类名称已经存在',
	'need_name' => '这个种类需要一个名称',
	
	'allowed' => '允许的',
	'allow' => '允许',
	'denied' => '拒绝的',
	'deny' => '拒绝',
	'edit' => '编辑分类',
	
	'delete' => '删除分类',
	'delete_desc' => 'Select \'yes\', if you wish to delete this category',

	'delete_message' => '在这个版本的Pivot中,只有分类的名称是可以删除的,在下一个版本的Pivot中,你可以删除分类中的条目.',
);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "加入条目",
	'preview_entry' => "预览条目",

	'first' => '第一个',
	'last' => '最后一个',
	'next' => '下一个',
	'previous' => '上一个',

	'title' => '标题',
	'subtitle' => '副题',
	'introduction' => '介绍',
	'body' => 'Body',
	'publish_on' => '发布在',
	'status' => '状态',
	'post_status' => 'Post状态',
	'category' => '分类',
	'select_multi_cats' => '(Ctrl-鼠标点击来同时选择多个分类)',
	'last_edited' => "最后编辑于",
	'created_on' => "建立于",		
	'date' => '日期',
	'author' => '作者',
	'code' => '编码',
	'comm' => '# Comm',
	'allow_comments' => '允许评论',
	'convert_lb' => 'Convert Linebeaks',
	'always_off' => '(在所见即所得的模式下,这个选项是关闭的)',
	'be_careful' => '(注意这里!)',
	'edit_comments' => '编辑评论',
	'edit_comments_desc' => '编辑这个条目的评论',
	'edit_comment' => '编辑评论',
	'delete_comment' => '删除评论',
	'block_single' => '封锁 IP %s',
	'block_range' => '封锁 IP 区域 %s',
	'unblock_single' => '解除 IP %s',
	'unblock_range' => '解除 IP 区域 %s',
	'trackback' => 'Trackback ping',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => '选择全部',
	'c_none' => '不选择',
	'choose' => '- 选择一个动作 -',
	'publish' => '设置状态为 \'发布\'',
	'hold' => '设置状态为 \'暂不发布\'',
	'delete' => '删除他们',
	'generate' => '产生文件并发布',

	'with_checked_entries' => "选择的条目,将要:",
	'with_checked_files' => "选择的文件,将要:",
	'with_checked_templates' => '选择的模板,将要:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => '不能打开目录,请检查你的权限',
	'path_read' => '不能读取目录,请检查你的权限',
	'path_write' => '不能写入目录,请检查你的权限',

	'file_open' => '不能打开文件,请检查你的权限.',
	'file_read' => '不能读取文件,请检查你的权限.',
	'file_write' => '不能偕文件,请检查你的权限.',
);


//		Notices			\\
$lang['notice'] = array (		
	'comment_saved' => "评论被保存了.",
	'comment_deleted' => "评论被删除了.",
	'comment_none' => "没有评论.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => '\'%val%\'票',
	'good' => '好',
	'bad' => '坏',
	'already' => '你已经给这个条目透过票了',
	'register' => '你的投票 \'%val%\' 已经提交了',
);


$lang['comment'] = array (
	'register' => '你的评论被提交了.',
	'preview' => '你正在预览你写的评论，点击\'评论\'才能完成.',
	'duplicate' => '你的评论没有被提交,因为你的评论和刚才的一样.',
	'no_name' => 'You should type your name (or an alias) in the \'name\'-field. Be sure to click on \'Post Comment\' to store it permanently.',
	'no_comment' => 'You should type something in the \'comment\'-field. Be sure to click on \'Post Comment\' to store it permanently.',
);


$lang['comments_text'] = array (
	'0' => "0 条评论",
	'1' => "1 条评论",
	'2' => "%num% 条评论",
);


$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "存档",
	'next_archive' => "下一存档",
	'previous_archive' => "前一存档",
	'last_comments' => "最后的评论",
	'last_referrers' => "Last Referrers",
	'calendar' => "日历",
	'links' => "链接",
	'xml_feed' => "XML: RSS Feed",
	'powered_by' => "Powered by",
	'name' => "姓名",
	'email' => "Email",
	'url' => "URL",
	'date' => "日期",		
	'comment' => "评论",
	'ip' => "IP-地址",		
	'yes' => "Yes",
	'no' => "No",
	'emoticons' => "表情",
	'emoticons_reference' => 'Open Emoticons Reference',
	'textile' => 'Textile',
	'textile_reference' => 'Open Textile Reference',
	'post_comment' => "评论",
	'preview_comment' => "预览评论",
	'remember_info' => "记录用户信息?",
	'disclaimer' => "<b>Small print:</b> All html tags except &lt;b&gt; and &lt;i&gt; will be removed from your comment. You can make links by just typing the url or mail-address.",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Edit Userfields',
	'edit' => '编辑',
	'create' => '创建',

	'dispname' => '显示的名称',
	'intname' => '内部名称',
	'intname_desc' => 'The Internal Name is the name of this item as it will appear when you tell pivot to display it in a template.',
	'size' => '大小',
	'rows' => '行',
	'cols' => '列',
	'maxlen' => '最大长度',
	'minlevel' => '最小用户等级',	
	'filter' => '过滤 by',
	'filter_desc' => 'By filtering this item, you limit the type of input that can be used in it',
	'no_filter' => '没有',
	'del_title' => '确认删除',
	'del_desc' => 'Deleting this Userfield (<b>%s</b>) will also destroy all the data that users have stored withen it, and make any instances of it in a template appear empty.',	
	
	'already' => '名称已经被占用',
	'int' => '内部名称必须大于3个字符',
	'short_disp' => '显示名称必须大于3个字符',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => 'Bookmarklets',
	'bm_add' => 'Add Bookmarklet.',
	'bm_withlink' => 'Piv � New',
	'bm_withlink_desc' => 'This Bookmarklet opens a window with a New Entry, which contains a link to the page it was opened from.',

	'bm_nolink' => 'Piv � New',
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