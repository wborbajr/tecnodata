<?php
//Chinese Traditional (Big5)

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2rd line.

// Chinese Traditional translation of Pivot lang file
// Created by Linn1999 
// 

// allow for different encoding for non-western languages
$encoding="Big5";
$langname="zh";

//		普通的		\\
$lang['general'] = array (
	'yes' => '是',	//affirmative
	'no' => '否',		//negative
	'go' => '繼續',	//proceed

	'minlevel' => '你沒有權力訪問這個頁面',	
	'email' => '郵件',			
	'url' => 'URL',
	'further_options' => "更多的選項",
	'basic_view' => "基本查看",
	'basic_view_desc' => "只查看流行的區域",
	'extended_view' => "擴展查看",
	'extended_view_desc' => "查看所有的段落",
	'select' => "選擇",
	'cancel' => "取消",
	'delete' => '刪除',
	'welcome' => "歡迎來到 %build%.",
	'write' => "寫入",
	'done' => "完成!",
	'shortcuts' => "快捷",
	'cantdelete' => "You are not allowed to delete entry %title%!",
	'cantdothat' => "You are not allowed to do that with entry %title%!",
);


$lang['userlevels'] = array (
		'超級管理員', '管理員', '高級用戶', '普通用戶', 'Moblogger'
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

	
$lang['datetime_words'] = array (
	'年', '月', '周', '日', '時', '分', '秒'
);


//		登錄頁面		\\
$lang['login'] = array (
	'title' => '登入',
	'name' => '名稱',
	'pass' => '密碼',
	'remember' => '記錄',
	'rchoice' => array (
		'0' => '沒有',
		'1' => '我的名稱和密碼',
		'2' => '我希望保持登錄狀態',
	),
	'retry' => '錯誤的用戶名/密碼',
	'banned' => '你已經有過10次的錯誤登錄，所以你的IP將要被封鎖12個小時.',
);


//		主菜單		\\
	$lang['userbar'] = array (
	'main' => '總覽',
	'entries' => '條目',
	'submit' => '新的條目',
	'comments' => '評論',
	'modify' => '編輯條目',
	'userinfo' => '我的信息',
	'u_settings' => '我的設置',
	'u_marklet' => 'Bookmarklets',
	'files' => '文檔管理',
	'upload' => '上傳',
	'stats' => '統計',
	'admin' => '管理',

	'main_title' => 'Pivot的全部總覽',
	'entries_title' => '條目總覽',
	'submit_title' => '新的條目',
	'comments_title' => '編輯/刪除評論',		
	'modify_title' => '編輯條目',
	'userinfo_title' => '查看我的個人信息',
	'u_settings_title' => '編輯我的個人設定',
	'u_marklet_title' => 'Create Bookmarklets',
	'files_title' => '管理和上傳文檔',
	'upload_title' => '上傳文件',
	'uploaded_success' => '文件已經上傳',
	'stats_title' => '查看日志和統計.',
	'updatetitles_title' => '查看日志和統計.',
	'admin_title' => '管理員總覽',
	'recent_entries' => 'Recent Entries',
	'recent_comments' => 'Recent Comments',
);


$lang['adminbar'] = array (
	//		管理菜單		\\
	//'trebuild' => '從新建立所有的文件', 
	'seeusers' => '用戶',
	'seeconfig' => '設置',
	'templates' => '模板',
	'maintenance' => '維護',
	'regen' => '從新建立所有文件',
	'blogs' => 'Weblogs',
	'categories' => '分類',
	'verifydb' => '校驗數據庫',
	'buildindex' => '從新建立索引文件',
	'buildfrontpage' => '從新建立首頁',
	'sendping' => 'Send Pings',
	'backup' => '備份',
	'description' => '描述',
	'conversion' => '轉化',
	'seeusers_title' => '用戶管理',
	'userfields' => 'User Information Fields',
	'userfields_title' => '建立,編輯和刪除用戶的信息',
	'seeconfig_title' => '編輯配置文件',
	'templates_title' => '建立,編輯和刪除模板',
	'maintenance_title' => 'Pivot文件的執行日常保養',
	'regen_title' => '從新建立Pivot生成的文件和存檔',
	'blogs_title' => '建立,編輯和刪除Weblogs',
	'blogs_edit_title' => '編輯Weblog的設置 For ',
	'categories_title' => '建立,編輯和刪除分類',	
	'verifydb_title' => '檢查你的數據庫的完整性',
	'buildindex_title' => '重新建立數據庫的索引',
	'buildfrontpage_title' => '從新建立每個Weblog的首頁,存檔和RSS頻道.',
	'backup_title' => '把你輸入的條目做備份',
	'ipblocks' => 'IP訪問限制',
	'ipblocks_title' => '查看和編輯被限制的IP地�);.',
	'ipblocks_stored' => 'The IP-addresses have been stored.',
	'ipblocks_store' => 'Store these IP-addresses',
	'fileexplore' => '文件瀏覽器',
	'fileexplore_title' => '查看文件(文本文件和數據庫文件)',
	'sendping_title' => 'Send Pings to Update Trackers.',
	'buildindex_finished' => 'Generating index took %num% seconds',
);


$lang['templates'] = array (	
	'rollback' => '回檔',
	'create_template' => '建立模板',
	'create_template_info' => '從草稿建立一個Pivot的模板',
	'no_comment' => '沒有評論',
	'comment' => '評論*',
	'comment_note' => '(*注解:評論只能 be saved at <b>first</b> save of changes or creation)',
	'create' => '建立模板',
	'editing' => '編輯',
	'filename' => '文件名',
	'save_changes' => '保存更改!',
	'save_template' => '保存模板!',	
);


//		管理			\\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar_xxx_title'] ones
$lang['admin'] = array (
	'seeusers' => '建立,編輯和刪除用戶',
	'seeconfig' => '編輯配置文件',
	'templates' => '建立,編輯和刪除模板',
	'maintenance' => '把Pivot的所有文件執行日常保養',
	'regen' => '從新建立所有由Pivot產生的文件',
	'blogs' => '建立,編輯和刪除Pivot將要發布的不同的Weblog到',
);


//		維護		\\	
$lang['maint'] = array (
	'title' => '維護',	
	'gen_arc_title' => '建立存檔', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => '從新建立所有存檔', /* bob notes: redundant, see 'regen' */
	'xml_title' => '校驗XML文件和數據庫文件', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => '校驗和修復XML文件的完整性', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => '備份',
	'backup_text' => '建立所有Pivot基本文件的備份',
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

	'getting' => '獲得新的標題',
	'awhile' => '這將有段等待的時間,請不要中斷.',
	'firstpass' => 'First pass',
	'secondpass' => 'Second pass',
	'nowuptodate' => 'Your referer-title mappings are now up to date.',
	'finished' => '結束',
);


//		User Info		\\
	$lang['userinfo'] = array (
	'editfields' => '編輯用戶',
	'desc_editfields' => '編輯用戶的描述',
	'username' => '用戶名',
	'pass1' => '密碼',
	'pass2' => '確認密碼',
	'email' => '郵件',
	'userlevel' => '用戶級別',	
	'userlevel_desc' => '用戶級別決定了用戶在Pivot里面可以做的事情.',
	'language' => 'Language',	
	'edituser' => '編輯用戶',  //the link to.. well, edit the user (also the title)
	'edituserinfo' => '編輯用戶信息',
	'newuser' => '創建新的用戶',
	'desc_newuser' => '建立一個新的Pivot登錄賬號,允許他們寫Blog.',
	'newuser_button' => '建立',
	'edituser_button' => '改變',
	'pass_too_short' => '密碼長度必須大于6個字符',
	'pass_dont_match' => '兩次輸入的密碼不同',
	'username_in_use' => '用戶名已經被占用',
	'username_too_short' => '用戶名長度必須大于4個字符',
	'username_not_valid' => '用戶名只能包括英文字母,數字(A-Z, 0-9)和下划線(_).',
	'not_good_email' => '那不是一個合法的郵件地�);',	
	'c_admin_title' => '確定建立一個管理員',
	'c_admin_message' => '一個'.$lang['userlevels']['1'].' 有所有的權力,能夠編輯新的條目,所有的評論,改變每一個東西.你確定你要建立 %s 一個 '.$lang['userlevels']['1'].'嗎?',
);


//		設置頁面		\\		
	$lang['config'] = array (
	'save' => '保存設置',

	'sitename' => '網站名稱',
	'defaultlanguage' => '默認語言',
	'siteurl' => '網站URL',
	'header_fileinfo' => '文件信息',
	'localpath' => '本地路徑',
	'debug_options' => '調試選項',
	'debug' => '調試模式',
	'debug_desc' => '顯示隨機的調試信息',
	'log' => '日志文件',
	'log_desc' => '保留日志文件',

	'header_uploads' => '上傳文件',
	'upload_path' => '上傳文件路徑',	
	'upload_accept' => '支持的文件類型',				
	'upload_extension' => '默認的擴展名',
	'upload_save_mode' => '覆蓋方式',
	'make_safe' => '干淨的文件名',
	'c_upload_save_mode' => '文件名遞增',
	'max_filesize' => '最大文件大小',
	'header_datetime' => '日期/時間',
	'timeoffset_unit' => '時間調整工具',
	'timeoffset' => '時間調整',
	'header_extra' => '雜項設置',
	'wysiwyg' => '默認使用所見即所得編輯器',
	'wysiwyg_desc' => '決定是否默認使用所見即所得編輯器. 單獨的用戶可以在 \'我的信息\' 里更改這個設置.',
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

	'new_window' => '用新窗口打�);鏈接',
	'emoticons' => '使用表情',
	'javascript_email' => '用JavaScript編碼郵件地�);?',	
	'new_window_desc' => '決定所有的條目是否都用新的窗口打�);.',

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


//		Weblog設置	\\
$lang['weblog_config'] = array (
	'edit_weblog' => '編輯這個Weblog',
	'edit_blog' => '編輯Blogs',
	'new_weblog' => '新的Weblog',
	'new_weblog_desc' => '添加一個新的Weblog',
	'del_weblog' => '刪除Weblog',
	'del_this_weblog' => '刪除這個Weblog.',
	'create_new' => '創建新的Weblog',
	'subw_heading' => 'For each of the subweblogs that were found in the templates, you can configure what template they use, as well as what categories are published in them',
	'create' => '建立',
	
	'create_1' => '創建/編輯Weblog,步驟 1 of 3',
	'create_2' => '創建/編輯Weblog,步驟 2 of 3',
	'create_3' => '創建/編輯Weblog,步驟 3 of 3',

	'name' => 'Weblog名稱',
	'payoff' => '副標題',
	'payoff_desc' => '',
	'url' => 'URL to Weblog',
	'url_desc' => '如果沒有填寫Pivot將決定你的Weblog的URL. 如果你的Weblog是Frameset的一部分,或者是服務器端的include文件, 你可以用這個選項避免.',
	'index_name' => '首頁(Index)',
	'index_name_desc' => '首頁文件的文件名. 一般的像\'index.html\' 或者 \'index.php\'.',

	'ssi_prefix' => 'SSI Prefix',
	'ssi_prefix_desc' => 'If your weblog uses SSI (which is not recommended you can use this to prefix Pivot\'s filenames with the filename used for the SSI. eg. \'index.shtml?p=\'. You should just leave this blank, unless you know what you\'re doing.',

	'front_path' => '首頁的路徑',
	'front_path_desc' => 'Pivot將用與建立這個Blog首頁的相對或者絕對路徑.',
	'file_format' => '文件名',
	'entry_heading' => '條目設置',
	'entry_path' => '條目路徑',
	'entry_path_desc' => 'Pivot將用與建立條目頁面的相對或者絕對路徑.',
	'live_comments' => 'Live entries',
	'live_comments_desc' => 'If you use \'Live entries\', Pivot will not need to generate files for every single entry. This is the preferred setting.',
	'readmore' => '\'Read More\' Text',
	'readmore_desc' => 'The text that is used to indicate that there is more text in this entry than is shown on the front page. If you leave this blank, Pivot will use the default as defined by the language settings',
	
	'arc_heading' => '存檔設置',
	'arc_index' => '索引文件',
	'arc_path' => '存檔路徑',
	'archive_amount' => '存檔數量',
	'archive_unit' => '存檔類型',
	'archive_format' => '存檔格式',
	'archive_none' => '沒有存檔',
	'archive_weekly' => '每周存檔',
	'archive_monthly' => '每月存檔',

	'archive_link' => '存檔鏈接',
	'archive_linkfile' => '存檔鏈接文件',	

	'templates_heading' => '模板',
	'frontpage_template' => '首頁模板',
	'frontpage_template_desc' => '這個模板決定了Weblog首頁的顯示風格.',
	'archivepage_template' => '存檔頁模板',
	'archivepage_template_desc' => '這個模板決定了查看存檔的頁面的風格.這個也可以使用\'首頁模板\'.',	
	'entrypage_template' => '條目頁面模板',
	'entrypage_template_desc' => '這個模板決定了如何顯示每一個條目.',	

	'shortentry_template' => 'Shortentry Template',
	'shortentry_template_desc' => 'The Template which determines the layout of single entries, as they are shown within the weblog or archives.',	
	'num_entries' => '條目數量',
	'num_entries_desc' => '這個Weblog首頁顯示條目的數量.',	
	'offset' => 'Offset',
	'offset_desc' => 'If Offset is set to a number, that amount of entries will be skipped when generating the page. You can use this to make a \'Previous entries\' list, for example.',
	'comments' => '允許評論?',
	'comments_desc' => '這個Weblog是否允許用戶的評論.',	

	'setup_rss_head' => 'RSS 設置',
	'rss_use' => '使用RSS',
	'rss_use_desc' => 'Pivot為這個Weblog自動產生RSS文件.',
	'rss_filename' => 'RSS 文件名',
	'rss_path' => 'RSS 路徑',
	'rss_path_desc' => 'RSS文件存放的路徑(相對路徑或絕對路徑).',
	'rss_size' => 'RSS Entry Length',	
	'rss_size_desc' => 'The length (in characters) of an entry in the RSS file',	

	'lastcomm_head' => '最后評論欄設置',
	'lastcomm_amount' => '顯示數量',
	'lastcomm_length' => '剪切文字長度',
	'lastcomm_format' => '格式',
	'lastcomm_format_desc' => '設置是這個Weblog首頁上的最后評論欄.',

	'lastref_head' => 'Settings for Last Referers',
	'lastref_amount' => '顯示几個',
	'lastref_length' => '裁剪文本在',
	'lastref_format' => '格式',
	'lastref_format_desc' => '這些設置決定了首頁上的 \'last referers\'列表.',

	'various_head' => '其他設置',
	'emoticons' => '使用表情圖片',
	'emoticons_desc' => '決定了是否將:-)轉換為一個表情圖片.',
	'encode_email_addresses' => '編碼郵件地�);',
	'encode_email_addresses_desc' => '保護郵件地�);不被垃圾郵件侵擾.',
	'target_blank' => '彈出新窗口',
	'xhtml_workaround' => 'XHTML Workaround',
	'target_blank_desc' => '所有在條目中所寫的鏈接都將在新的窗口中被顯示.',

	'date_head' => '日期顯示設置',
	'full_date' => '完整日期格式',
	'full_date_desc' => '設置了完整日期的格式.大多用在每個單一條目頁面的上方',
	'entry_date' => '條目日期',
	'diff_date' => 'Diff Date',
	'diff_date_desc' => 'The \'Diff Date\' is most commonly used in conjunction with the \'Entry Date\'. The Entry Date is displayed on every entry on your log, while the Diff Date is only displayed if the date differs from the previous entry.',
	'language' => '語言',

	'comment_head' => '評論設置',
	'comment_sendmail' => '發送郵件l?',
	'comment_sendmail_desc' => '在用戶做評論之后,自動發送郵件給這個Weblog的管理員.',
	'comment_emailto' => '寄給',
	'comment_emailto_desc' => 'Specify the email address(es) to whom mail will be sent. seperate multiple addresses with a comma.',
	'comment_texttolinks' => '文字地�);轉換為鏈接',
	'comment_texttolinks_desc' => '當書寫一個鏈接或者郵件地�);的時候,可以在網頁上把他們變成一個可以點擊的鏈接.',
	'comment_wrap' => '評論換行在',
	'comment_wrap_desc' => '防止太長的字符串�);壞了你的網頁顯示結構.',
	'comments_text_0' => '當\'沒有評論\'時顯示',
	'comments_text_1' => '當\'只有一條評論\'時顯示',
	'comments_text_2' => '當\'n 條評論時\'時顯示',
	'comments_text_2_desc' => 'The text that is used to indicate how many comments there are. If you leave this blank, Pivot will use the default as defined by the language settings',

	'comment_pop' => '用彈出窗口顯示評論嗎?',
	'comment_pop_desc' => 'determines whether the comments page (or \'single entry\') will be shown in a popup window, or in the original browser window.',
	'comment_width' => '彈出窗口的寬度',
	'comment_height' => '彈出窗口的高度',
	'comment_height_desc' => '制定彈出窗口的寬度和高度(像素).',
			
	'comment_format' => "評論的格式",
	'comment_format_desc' => "制定了條目頁面里面的評論的格式.",

	'comment_textile' => 'Allow Textile',
	'comment_textile_desc' => 'If this is set to \'Yes\', visitors are allowed to use <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> in their comments.',

	'saved_create' => '新的Weblog已經建立了.',
	'saved_update' => 'Weblog已經更新了.',
	'deleted' => 'Weblog已經刪除了.',
	'confirm_delete' => '你決定刪除Weblog %1嗎?',

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
	'preview' => '預覽所有',
	'thumbs' => 'Thumbnail Preview',
	'create_thumb' => '(Create Thumbnail)',
	'title' => '文件',
	'thisfile' => '上傳一個新文件:',
	'button' => '上傳',
	'filename' => '文件名',
	'thumbnail' => 'Thumbnail',
	'date' => '日期',
	'filesize' => '文件大小',
	'dimensions' => '寬 x 高',		
	'delete_title' => '刪除圖片',
	'areyousure' => '你確定刪除 %s嗎?',
	'picheader' => '刪除這個圖片?',
	'create' => '建立',
	'edit' => '編輯',

	'insert_image' => '插入一個圖像',
	'insert_image_desc' => '你可以插入一個上傳的圖像或者以前上傳過的圖像.',
	'insert_image_popup' => '插入一個彈出的圖像窗口',
	'insert_image_popup_desc' => '你可以插入一個上傳的圖像或者以前上傳過的圖像.Then select a text or a thumbnail that triggers the popup.',
	'choose_upload' => '上傳',
	'choose_select' => '或者選擇',
	'imagename' => '圖像名稱',
	'alt_text' => '注釋文字',
	'align' => '排列',
	'border' => '邊界',
	'pixels' => '像素',
	'uploaded_as' => '你的文件被上傳了as \'%s\'.',
	'not_uploaded' => '你的文件沒有被上傳, 出現錯誤:',
	'center' => '中間(默認)',
	'left' => '左',
	'right' => '右',
	'inline' => 'Inline',		
	'notice_upload_first' => '你應該先選擇或上傳一個圖像',
	'select_image' => '選擇圖像',

	'for_popup' => '彈出窗口專用',		
	'use_thumbnail' => 'Use Thumbnail',		
	'edit_thumbnail' => 'edit thumbnail',		
	'use_text' => '使用文本',		
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => '插入一個鏈接',
	'insert_link_desc' => '填寫一個URL來插入一個鏈接.游客可以在把鼠標放在鏈接上時看到鏈接的信息.',
	'url' => 'URL',
	'title' => '標題',
	'text' => '文字',
);


//		分類		\\
$lang['category'] = array (
	'edit_who' => '編輯誰能在這個分類發貼 %s',
	'name' => '名稱',
	'users' => '用戶',
	'make_new' => '建立新的分類',
	'create' => '建立分類',
	'canpost' => '選擇可以在這個分類發貼的用戶',
	'same_name' => '分類名稱已經存在',
	'need_name' => '這個種類需要一個名稱',
	
	'allowed' => '允許的',
	'allow' => '允許 ',
	'denied' => '拒絕的',
	'deny' => '拒絕',
	'edit' => '編輯分類',
	
	'delete' => '刪除分類',
	'delete_desc' => 'Select \'yes\', if you wish to delete this category',

	'delete_message' => '在這個版本的Pivot中,只有分類的名稱是可以刪除的,在下一個版本的Pivot中,你可以刪除分類中的條目.',
);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "加入條目",
	'preview_entry' => "預覽條目",

	'first' => '第一個',
	'last' => '最后一個',
	'next' => '下一個',
	'previous' => '上一個',

	'title' => '標題',
	'subtitle' => '副題',
	'introduction' => '介紹',
	'body' => 'Body',
	'publish_on' => '發布在',
	'status' => '狀態',
	'post_status' => 'Post狀態',
	'category' => '分類',
	'select_multi_cats' => '(Ctrl-鼠標點擊來同時選擇多個分類)',
	'last_edited' => "最后編輯于",
	'created_on' => "建立于",		
	'date' => '日期',
	'author' => '作者',
	'code' => '編碼',
	'comm' => '# Comm',
	'allow_comments' => '允許評論',
	'convert_lb' => 'Convert Linebeaks',
	'always_off' => '(在所見即所得的模式下,這個選項是關閉的)',
	'be_careful' => '(注意這里!)',
	'edit_comments' => '編輯評論',
	'edit_comments_desc' => '編輯這個條目的評論',
	'edit_comment' => '編輯評論',
	'delete_comment' => '刪除評論',
	'block_single' => '封鎖 IP %s',
	'block_range' => '封鎖 IP 區域 %s',
	'unblock_single' => '解除 IP %s',
	'unblock_range' => '解除 IP 區域 %s',
	'trackback' => 'Trackback ping',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => '選擇全部',
	'c_none' => '不選擇',
	'choose' => '- 選擇一個動作 -',
	'publish' => '設置狀態為 \'發布\'',
	'hold' => '設置狀態為 \'暫不發布\'',
	'delete' => '刪除他們',
	'generate' => '產生文件�);發布',

	'with_checked_entries' => "選擇的條目,將要:",
	'with_checked_files' => "選擇的文件,將要:",
	'with_checked_templates' => '選擇的模板,將要:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => '不能打�);目錄,請檢查你的權限',
	'path_read' => '不能讀取目錄,請檢查你的權限',
	'path_write' => '不能寫入目錄,請檢查你的權限',

	'file_open' => '不能打�);文件,請檢查你的權限.',
	'file_read' => '不能讀取文件,請檢查你的權限.',
	'file_write' => '不能偕文件,請檢查你的權限.',
);


//		Notices			\\
$lang['notice'] = array (		
	'comment_saved' => "評論被保存了.",
	'comment_deleted' => "評論被刪除了.",
	'comment_none' => "沒有評論.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => '\'%val%\'票',
	'good' => '好',
	'bad' => '壞',
	'already' => '你已經給這個條目透過票了',
	'register' => '你的投票 \'%val%\' 已經提交了',
);


$lang['comment'] = array (
	'register' => '你的評論被提交了.',
	'preview' => '你正在預覽你寫的評論，點擊\'評論\'才能完成.',
	'duplicate' => '你的評論沒有被提交,因為你的評論和剛才的一樣.',
	'no_name' => 'You should type your name (or an alias) in the \'name\'-field. Be sure to click on \'Post Comment\' to store it permanently.',
	'no_comment' => 'You should type something in the \'comment\'-field. Be sure to click on \'Post Comment\' to store it permanently.',
);


$lang['comments_text'] = array (
	'0' => "0 條評論",
	'1' => "1 條評論",
	'2' => "%num% 條評論",
);


$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "存檔",
	'next_archive' => "下一存檔",
	'previous_archive' => "前一存檔",
	'last_comments' => "最后的評論",
	'last_referrers' => "Last Referrers",
	'calendar' => "日歷",
	'links' => "鏈接",
	'xml_feed' => "XML: RSS Feed",
	'powered_by' => "Powered by",
	'name' => "姓名",
	'email' => "Email",
	'url' => "URL",
	'date' => "日期",		
	'comment' => "評論",
	'ip' => "IP-地�);",		
	'yes' => "Yes",
	'no' => "No",
	'emoticons' => "表情",
	'emoticons_reference' => 'Open Emoticons Reference',
	'textile' => 'Textile',
	'textile_reference' => 'Open Textile Reference',
	'post_comment' => "評論",
	'preview_comment' => "預覽評論",
	'remember_info' => "記錄用戶信息?",
	'disclaimer' => "<b>Small print:</b> All html tags except &lt;b&gt; and &lt;i&gt; will be removed from your comment. You can make links by just typing the url or mail-address.",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Edit Userfields',
	'edit' => '編輯',
	'create' => '創建',

	'dispname' => '顯示的名稱',
	'intname' => '內部名稱',
	'intname_desc' => 'The Internal Name is the name of this item as it will appear when you tell pivot to display it in a template.',
	'size' => '大小',
	'rows' => '行',
	'cols' => '列',
	'maxlen' => '最大長度',
	'minlevel' => '最小用戶等級',	
	'filter' => '過濾 by',
	'filter_desc' => 'By filtering this item, you limit the type of input that can be used in it',
	'no_filter' => '沒有',
	'del_title' => '確認刪除',
	'del_desc' => 'Deleting this Userfield (<b>%s</b>) will also destroy all the data that users have stored withen it, and make any instances of it in a template appear empty.',	
	
	'already' => '名稱已經被占用',
	'int' => '內部名稱必須大于3個字符',
	'short_disp' => '顯示名稱必須大于3個字符',
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
