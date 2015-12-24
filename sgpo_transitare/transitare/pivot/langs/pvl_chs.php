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


//		��ͨ��		\\
$lang['general'] = array (
	'yes' => '��',	//affirmative
	'no' => '��',		//negative
	'go' => '����',	//proceed

	'minlevel' => '��û��Ȩ���������ҳ��',	
	'email' => '�ʼ�',			
	'url' => 'URL',
	'further_options' => "�����ѡ��",
	'basic_view' => "�����鿴",
	'basic_view_desc' => "ֻ�鿴���е�����",
	'extended_view' => "��չ�鿴",
	'extended_view_desc' => "�鿴���еĶ���",
	'select' => "ѡ��",
	'cancel' => "ȡ��",
	'delete' => 'ɾ��',
	'welcome' => "��ӭ���� %build%.",
	'write' => "д��",
	'done' => "���!",
	'shortcuts' => "���",
	'cantdelete' => "You are not allowed to delete entry %title%!",
	'cantdothat' => "You are not allowed to do that with entry %title%!",
);


$lang['userlevels'] = array (
		'��������Ա', '����Ա', '�߼��û�', '��ͨ�û�', 'Moblogger'	
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
	'һ��', '����', '����', '����', '����', '����', '����', '����', '����', 'ʮ��', 'ʮһ��', 'ʮ����'	
);	
		

$lang['months_abbr'] = array (
	'һ��', '����', '����', '����', '����', '����', '����', '����', '����', 'ʮ��', 'ʮһ��', 'ʮ����'
);


$lang['days'] = array (
	'������', '����һ', '���ڶ�', '������', '������', '������', '������'
);


$lang['days_abbr'] = array (
	'����', '��һ', '�ܶ�', '����', '����', '����', '����'
);


$lang['days_calendar'] = array (
	'S', 'M', 'T', 'W', 'T', 'F', 'S'
); 

	
$lang['datetime_words'] = array (
	'��', '��', '��', '��', 'ʱ', '��', '��'
);


//		��¼ҳ��		\\
$lang['login'] = array (
	'title' => '����',
	'name' => '����',
	'pass' => '����',
	'remember' => '��¼',
	'rchoice' => array (
		'0' => 'û��',
		'1' => '�ҵ����ƺ�����',
		'2' => '��ϣ�����ֵ�¼״̬',
	),
	'retry' => '������û���/����',
	'banned' => '���Ѿ��й�10�εĴ����¼���������IP��Ҫ������12��Сʱ.',
);


//		���˵�		\\
	$lang['userbar'] = array (
	'main' => '����',
	'entries' => '��Ŀ',
	'submit' => '�µ���Ŀ',
	'comments' => '����',
	'modify' => '�༭��Ŀ',
	'userinfo' => '�ҵ���Ϣ',
	'u_settings' => '�ҵ�����',
	'u_marklet' => 'Bookmarklets',
	'files' => '�ĵ�����',
	'upload' => '�ϴ�',
	'stats' => 'ͳ��',
	'admin' => '����',

	'main_title' => 'Pivot��ȫ������',
	'entries_title' => '��Ŀ����',
	'submit_title' => '�µ���Ŀ',
	'comments_title' => '�༭/ɾ������',		
	'modify_title' => '�༭��Ŀ',
	'userinfo_title' => '�鿴�ҵĸ�����Ϣ',
	'u_settings_title' => '�༭�ҵĸ����趨',
	'u_marklet_title' => 'Create Bookmarklets',
	'files_title' => '������ϴ��ĵ�',
	'upload_title' => '�ϴ��ļ�',
	'uploaded_success' => '�ļ��Ѿ��ϴ�',
	'stats_title' => '�鿴��־��ͳ��.',
	'updatetitles_title' => '�鿴��־��ͳ��.',
	'admin_title' => '����Ա����',
	'recent_entries' => 'Recent Entries',
	'recent_comments' => 'Recent Comments',
);


$lang['adminbar'] = array (
	//		����˵�		\\
	//'trebuild' => '���½������е��ļ�', 
	'seeusers' => '�û�',
	'seeconfig' => '����',
	'templates' => 'ģ��',
	'maintenance' => 'ά��',
	'regen' => '���½��������ļ�',
	'blogs' => 'Weblogs',
	'categories' => '����',
	'verifydb' => 'У�����ݿ�',
	'buildindex' => '���½��������ļ�',
	'buildfrontpage' => '���½�����ҳ',
	'sendping' => 'Send Pings',
	'backup' => '����',
	'description' => '����',
	'conversion' => 'ת��',
	'seeusers_title' => '�û�����',
	'userfields' => 'User Information Fields',
	'userfields_title' => '����,�༭��ɾ���û�����Ϣ',
	'seeconfig_title' => '�༭�����ļ�',
	'templates_title' => '����,�༭��ɾ��ģ��',
	'maintenance_title' => 'Pivot�ļ���ִ���ճ�����',
	'regen_title' => '���½���Pivot���ɵ��ļ��ʹ浵',
	'blogs_title' => '����,�༭��ɾ��Weblogs',
	'blogs_edit_title' => '�༭Weblog������ For ',
	'categories_title' => '����,�༭��ɾ������',	
	'verifydb_title' => '���������ݿ��������',
	'buildindex_title' => '���½������ݿ������',
	'buildfrontpage_title' => '���½���ÿ��Weblog����ҳ,�浵��RSSƵ��.',
	'backup_title' => '�����������Ŀ������',
	'ipblocks' => 'IP��������',
	'ipblocks_title' => '�鿴�ͱ༭�����Ƶ�IP��ַ.',
	'ipblocks_stored' => 'The IP-addresses have been stored.',
	'ipblocks_store' => 'Store these IP-addresses',
	'fileexplore' => '�ļ������',
	'fileexplore_title' => '�鿴�ļ�(�ı��ļ������ݿ��ļ�)',
	'sendping_title' => 'Send Pings to Update Trackers.',
	'buildindex_finished' => 'Generating index took %num% seconds',
);


$lang['templates'] = array (
	'rollback' => '�ص�',
	'create_template' => '����ģ��',
	'create_template_info' => '�Ӳݸ彨��һ��Pivot��ģ��',
	'no_comment' => 'û������',
	'comment' => '����*',
	'comment_note' => '(*ע��:����ֻ�� be saved at <b>first</b> save of changes or creation)',
	'create' => '����ģ��',
	'editing' => '�༭',
	'filename' => '�ļ���',
	'save_changes' => '�������!',
	'save_template' => '����ģ��!',	
);


//		����			\\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar_xxx_title'] ones
$lang['admin'] = array (
	'seeusers' => '����,�༭��ɾ���û�',
	'seeconfig' => '�༭�����ļ�',
	'templates' => '����,�༭��ɾ��ģ��',
	'maintenance' => '��Pivot�������ļ�ִ���ճ�����',
	'regen' => '���½���������Pivot�������ļ�',
	'blogs' => '����,�༭��ɾ��Pivot��Ҫ�����Ĳ�ͬ��Weblog��',
);


//		ά��		\\	
$lang['maint'] = array (
	'title' => 'ά��',	
	'gen_arc_title' => '�����浵', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => '���½������д浵', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'У��XML�ļ������ݿ��ļ�', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'У����޸�XML�ļ���������', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => '����',
	'backup_text' => '��������Pivot�����ļ��ı���',
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

	'getting' => '����µı���',
	'awhile' => '�⽫�жεȴ���ʱ��,�벻Ҫ�ж�.',
	'firstpass' => 'First pass',
	'secondpass' => 'Second pass',
	'nowuptodate' => 'Your referer-title mappings are now up to date.',
	'finished' => '����',
);


//		User Info		\\
	$lang['userinfo'] = array (
	'editfields' => '�༭�û�',
	'desc_editfields' => '�༭�û�������',
	'username' => '�û���',
	'pass1' => '����',
	'pass2' => 'ȷ������',
	'email' => '�ʼ�',
	'userlevel' => '�û�����',	
	'userlevel_desc' => '�û�����������û���Pivot���������������.',
	'language' => 'Language',	
	'edituser' => '�༭�û�',  //the link to.. well, edit the user (also the title)
	'edituserinfo' => '�༭�û���Ϣ',
	'newuser' => '�����µ��û�',
	'desc_newuser' => '����һ���µ�Pivot��¼�˺�,��������дBlog.',
	'newuser_button' => '����',
	'edituser_button' => '�ı�',
	'pass_too_short' => '���볤�ȱ������6���ַ�',
	'pass_dont_match' => '������������벻ͬ',
	'username_in_use' => '�û����Ѿ���ռ��',
	'username_too_short' => '�û������ȱ������4���ַ�',
	'username_not_valid' => '�û���ֻ�ܰ���Ӣ����ĸ,����(A-Z, 0-9)���»���(_).',
	'not_good_email' => '�ǲ���һ���Ϸ����ʼ���ַ',	
	'c_admin_title' => 'ȷ������һ������Ա',
	'c_admin_message' => 'һ��'.$lang['userlevels']['1'].' �����е�Ȩ��,�ܹ��༭�µ���Ŀ,���е�����,�ı�ÿһ������.��ȷ����Ҫ���� %s һ�� '.$lang['userlevels']['1'].'��?',
);


//		����ҳ��		\\		
	$lang['config'] = array (
	'save' => '��������',

	'sitename' => '��վ����',
	'defaultlanguage' => 'Ĭ������',
	'siteurl' => '��վURL',
	'header_fileinfo' => '�ļ���Ϣ',
	'localpath' => '����·��',
	'debug_options' => '����ѡ��',
	'debug' => '����ģʽ',
	'debug_desc' => '��ʾ����ĵ�����Ϣ',
	'log' => '��־�ļ�',
	'log_desc' => '������־�ļ�',

	'header_uploads' => '�ϴ��ļ�',
	'upload_path' => '�ϴ��ļ�·��',	
	'upload_accept' => '֧�ֵ��ļ�����',				
	'upload_extension' => 'Ĭ�ϵ���չ��',
	'upload_save_mode' => '���Ƿ�ʽ',
	'make_safe' => '�ɾ����ļ���',
	'c_upload_save_mode' => '�ļ�������',
	'max_filesize' => '����ļ���С',
	'header_datetime' => '����/ʱ��',
	'timeoffset_unit' => 'ʱ���������',
	'timeoffset' => 'ʱ�����',
	'header_extra' => '��������',
	'wysiwyg' => 'Ĭ��ʹ�����������ñ༭��',
	'wysiwyg_desc' => '�����Ƿ�Ĭ��ʹ�����������ñ༭��. �������û������� \'�ҵ���Ϣ\' ������������.',
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

	'new_window' => '���´��ڴ�����',
	'emoticons' => 'ʹ�ñ���',
	'javascript_email' => '��JavaScript�����ʼ���ַ?',	
	'new_window_desc' => '�������е���Ŀ�Ƿ����µĴ��ڴ�.',

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


//		Weblog����	\\
$lang['weblog_config'] = array (
	'edit_weblog' => '�༭���Weblog',
	'edit_blog' => '�༭Blogs',
	'new_weblog' => '�µ�Weblog',
	'new_weblog_desc' => '���һ���µ�Weblog',
	'del_weblog' => 'ɾ��Weblog',
	'del_this_weblog' => 'ɾ�����Weblog.',
	'create_new' => '�����µ�Weblog',
	'subw_heading' => 'For each of the subweblogs that were found in the templates, you can configure what template they use, as well as what categories are published in them',
	'create' => '����',
	
	'create_1' => '����/�༭Weblog,���� 1 of 3',
	'create_2' => '����/�༭Weblog,���� 2 of 3',
	'create_3' => '����/�༭Weblog,���� 3 of 3',

	'name' => 'Weblog����',
	'payoff' => '������',
	'payoff_desc' => '',
	'url' => 'URL to Weblog',
	'url_desc' => '���û����дPivot���������Weblog��URL. ������Weblog��Frameset��һ����,�����Ƿ������˵�include�ļ�, ����������ѡ�����.',
	'index_name' => '��ҳ(Index)',
	'index_name_desc' => '��ҳ�ļ����ļ���. һ�����\'index.html\' ���� \'index.php\'.',

	'ssi_prefix' => 'SSI Prefix',
	'ssi_prefix_desc' => 'If your weblog uses SSI (which is not recommended you can use this to prefix Pivot\'s filenames with the filename used for the SSI. eg. \'index.shtml?p=\'. You should just leave this blank, unless you know what you\'re doing.',

	'front_path' => '��ҳ��·��',
	'front_path_desc' => 'Pivot�����뽨�����Blog��ҳ����Ի��߾���·��.',
	'file_format' => '�ļ���',
	'entry_heading' => '��Ŀ����',
	'entry_path' => '��Ŀ·��',
	'entry_path_desc' => 'Pivot�����뽨����Ŀҳ�����Ի��߾���·��.',
	'live_comments' => 'Live entries',
	'live_comments_desc' => 'If you use \'Live entries\', Pivot will not need to generate files for every single entry. This is the preferred setting.',
	'readmore' => '\'Read More\' Text',
	'readmore_desc' => 'The text that is used to indicate that there is more text in this entry than is shown on the front page. If you leave this blank, Pivot will use the default as defined by the language settings',
	
	'arc_heading' => '�浵����',
	'arc_index' => '�����ļ�',
	'arc_path' => '�浵·��',
	'archive_amount' => '�浵����',
	'archive_unit' => '�浵����',
	'archive_format' => '�浵��ʽ',
	'archive_none' => 'û�д浵',
	'archive_weekly' => 'ÿ�ܴ浵',
	'archive_monthly' => 'ÿ�´浵',

	'archive_link' => '�浵����',
	'archive_linkfile' => '�浵�����ļ�',	

	'templates_heading' => 'ģ��',
	'frontpage_template' => '��ҳģ��',
	'frontpage_template_desc' => '���ģ�������Weblog��ҳ����ʾ���.',
	'archivepage_template' => '�浵ҳģ��',
	'archivepage_template_desc' => '���ģ������˲鿴�浵��ҳ��ķ��.���Ҳ����ʹ��\'��ҳģ��\'.',	
	'entrypage_template' => '��Ŀҳ��ģ��',
	'entrypage_template_desc' => '���ģ������������ʾÿһ����Ŀ.',	

	'shortentry_template' => 'Shortentry Template',
	'shortentry_template_desc' => 'The Template which determines the layout of single entries, as they are shown within the weblog or archives.',	
	'num_entries' => '��Ŀ����',
	'num_entries_desc' => '���Weblog��ҳ��ʾ��Ŀ������.',	
	'offset' => 'Offset',
	'offset_desc' => 'If Offset is set to a number, that amount of entries will be skipped when generating the page. You can use this to make a \'Previous entries\' list, for example.',
	'comments' => '��������?',
	'comments_desc' => '���Weblog�Ƿ������û�������.',	

	'setup_rss_head' => 'RSS ����',
	'rss_use' => 'ʹ��RSS',
	'rss_use_desc' => 'PivotΪ���Weblog�Զ�����RSS�ļ�.',
	'rss_filename' => 'RSS �ļ���',
	'rss_path' => 'RSS ·��',
	'rss_path_desc' => 'RSS�ļ���ŵ�·��(���·�������·��).',
	'rss_size' => 'RSS Entry Length',	
	'rss_size_desc' => 'The length (in characters) of an entry in the RSS file',	

	'lastcomm_head' => '�������������',
	'lastcomm_amount' => '��ʾ����',
	'lastcomm_length' => '�������ֳ���',
	'lastcomm_format' => '��ʽ',
	'lastcomm_format_desc' => '���������Weblog��ҳ�ϵ����������.',

	'lastref_head' => 'Settings for Last Referers',
	'lastref_amount' => '��ʾ����',
	'lastref_length' => '�ü��ı���',
	'lastref_format' => '��ʽ',
	'lastref_format_desc' => '��Щ���þ�������ҳ�ϵ� \'last referers\'�б�.',

	'various_head' => '��������',
	'emoticons' => 'ʹ�ñ���ͼƬ',
	'emoticons_desc' => '�������Ƿ�:-)ת��Ϊһ������ͼƬ.',
	'encode_email_addresses' => '�����ʼ���ַ',
	'encode_email_addresses_desc' => '�����ʼ���ַ���������ʼ�����.',
	'target_blank' => '�����´���',
	'xhtml_workaround' => 'XHTML Workaround',
	'target_blank_desc' => '��������Ŀ����д�����Ӷ������µĴ����б���ʾ.',

	'date_head' => '������ʾ����',
	'full_date' => '�������ڸ�ʽ',
	'full_date_desc' => '�������������ڵĸ�ʽ.�������ÿ����һ��Ŀҳ����Ϸ�',
	'entry_date' => '��Ŀ����',
	'diff_date' => 'Diff Date',
	'diff_date_desc' => 'The \'Diff Date\' is most commonly used in conjunction with the \'Entry Date\'. The Entry Date is displayed on every entry on your log, while the Diff Date is only displayed if the date differs from the previous entry.',
	'language' => '����',

	'comment_head' => '��������',
	'comment_sendmail' => '�����ʼ�l?',
	'comment_sendmail_desc' => '���û�������֮��,�Զ������ʼ������Weblog�Ĺ���Ա.',
	'comment_emailto' => '�ĸ�',
	'comment_emailto_desc' => 'Specify the email address(es) to whom mail will be sent. seperate multiple addresses with a comma.',
	'comment_texttolinks' => '���ֵ�ַת��Ϊ����',
	'comment_texttolinks_desc' => '����дһ�����ӻ����ʼ���ַ��ʱ��,��������ҳ�ϰ����Ǳ��һ�����Ե��������.',
	'comment_wrap' => '���ۻ�����',
	'comment_wrap_desc' => '��ֹ̫�����ַ����ƻ��������ҳ��ʾ�ṹ.',
	'comments_text_0' => '��\'û������\'ʱ��ʾ',
	'comments_text_1' => '��\'ֻ��һ������\'ʱ��ʾ',
	'comments_text_2' => '��\'n ������ʱ\'ʱ��ʾ',
	'comments_text_2_desc' => 'The text that is used to indicate how many comments there are. If you leave this blank, Pivot will use the default as defined by the language settings',

	'comment_pop' => '�õ���������ʾ������?',
	'comment_pop_desc' => 'determines whether the comments page (or \'single entry\') will be shown in a popup window, or in the original browser window.',
	'comment_width' => '�������ڵĿ��',
	'comment_height' => '�������ڵĸ߶�',
	'comment_height_desc' => '�ƶ��������ڵĿ�Ⱥ͸߶�(����).',
			
	'comment_format' => "���۵ĸ�ʽ",
	'comment_format_desc' => "�ƶ�����Ŀҳ����������۵ĸ�ʽ.",

	'comment_textile' => 'Allow Textile',
	'comment_textile_desc' => 'If this is set to \'Yes\', visitors are allowed to use <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> in their comments.',

	'saved_create' => '�µ�Weblog�Ѿ�������.',
	'saved_update' => 'Weblog�Ѿ�������.',
	'deleted' => 'Weblog�Ѿ�ɾ����.',
	'confirm_delete' => '�����ɾ��Weblog %1��?',

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
	'preview' => 'Ԥ������',
	'thumbs' => 'Thumbnail Preview',
	'create_thumb' => '(Create Thumbnail)',
	'title' => '�ļ�',
	'thisfile' => '�ϴ�һ�����ļ�:',
	'button' => '�ϴ�',
	'filename' => '�ļ���',
	'thumbnail' => 'Thumbnail',
	'date' => '����',
	'filesize' => '�ļ���С',
	'dimensions' => '�� x ��',		
	'delete_title' => 'ɾ��ͼƬ',
	'areyousure' => '��ȷ��ɾ�� %s��?',
	'picheader' => 'ɾ�����ͼƬ?',
	'create' => '����',
	'edit' => '�༭',

	'insert_image' => '����һ��ͼ��',
	'insert_image_desc' => '����Բ���һ���ϴ���ͼ�������ǰ�ϴ�����ͼ��.',
	'insert_image_popup' => '����һ��������ͼ�񴰿�',
	'insert_image_popup_desc' => '����Բ���һ���ϴ���ͼ�������ǰ�ϴ�����ͼ��.Then select a text or a thumbnail that triggers the popup.',
	'choose_upload' => '�ϴ�',
	'choose_select' => '����ѡ��',
	'imagename' => 'ͼ������',
	'alt_text' => 'ע������',
	'align' => '����',
	'border' => '�߽�',
	'pixels' => '����',
	'uploaded_as' => '����ļ����ϴ���as \'%s\'.',
	'not_uploaded' => '����ļ�û�б��ϴ�, ���ִ���:',
	'center' => '�м�(Ĭ��)',
	'left' => '��',
	'right' => '��',
	'inline' => 'Inline',		
	'notice_upload_first' => '��Ӧ����ѡ����ϴ�һ��ͼ��',
	'select_image' => 'ѡ��ͼ��',

	'for_popup' => '��������ר��',		
	'use_thumbnail' => 'Use Thumbnail',		
	'edit_thumbnail' => 'edit thumbnail',		
	'use_text' => 'ʹ���ı�',		
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => '����һ������',
	'insert_link_desc' => '��дһ��URL������һ������.�οͿ����ڰ�������������ʱ�������ӵ���Ϣ.',
	'url' => 'URL',
	'title' => '����',
	'text' => '����',
);


//		����		\\
$lang['category'] = array (
	'edit_who' => '�༭˭����������෢�� \'%s\'',
	'name' => '����',
	'users' => '�û�',
	'make_new' => '�����µķ���',
	'create' => '��������',
	'canpost' => 'ѡ�������������෢�����û�',
	'same_name' => '���������Ѿ�����',
	'need_name' => '���������Ҫһ������',
	
	'allowed' => '�����',
	'allow' => '����',
	'denied' => '�ܾ���',
	'deny' => '�ܾ�',
	'edit' => '�༭����',
	
	'delete' => 'ɾ������',
	'delete_desc' => 'Select \'yes\', if you wish to delete this category',

	'delete_message' => '������汾��Pivot��,ֻ�з���������ǿ���ɾ����,����һ���汾��Pivot��,�����ɾ�������е���Ŀ.',
);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "������Ŀ",
	'preview_entry' => "Ԥ����Ŀ",

	'first' => '��һ��',
	'last' => '���һ��',
	'next' => '��һ��',
	'previous' => '��һ��',

	'title' => '����',
	'subtitle' => '����',
	'introduction' => '����',
	'body' => 'Body',
	'publish_on' => '������',
	'status' => '״̬',
	'post_status' => 'Post״̬',
	'category' => '����',
	'select_multi_cats' => '(Ctrl-�������ͬʱѡ��������)',
	'last_edited' => "���༭��",
	'created_on' => "������",		
	'date' => '����',
	'author' => '����',
	'code' => '����',
	'comm' => '# Comm',
	'allow_comments' => '��������',
	'convert_lb' => 'Convert Linebeaks',
	'always_off' => '(�����������õ�ģʽ��,���ѡ���ǹرյ�)',
	'be_careful' => '(ע������!)',
	'edit_comments' => '�༭����',
	'edit_comments_desc' => '�༭�����Ŀ������',
	'edit_comment' => '�༭����',
	'delete_comment' => 'ɾ������',
	'block_single' => '���� IP %s',
	'block_range' => '���� IP ���� %s',
	'unblock_single' => '��� IP %s',
	'unblock_range' => '��� IP ���� %s',
	'trackback' => 'Trackback ping',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => 'ѡ��ȫ��',
	'c_none' => '��ѡ��',
	'choose' => '- ѡ��һ������ -',
	'publish' => '����״̬Ϊ \'����\'',
	'hold' => '����״̬Ϊ \'�ݲ�����\'',
	'delete' => 'ɾ������',
	'generate' => '�����ļ�������',

	'with_checked_entries' => "ѡ�����Ŀ,��Ҫ:",
	'with_checked_files' => "ѡ����ļ�,��Ҫ:",
	'with_checked_templates' => 'ѡ���ģ��,��Ҫ:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => '���ܴ�Ŀ¼,�������Ȩ��',
	'path_read' => '���ܶ�ȡĿ¼,�������Ȩ��',
	'path_write' => '����д��Ŀ¼,�������Ȩ��',

	'file_open' => '���ܴ��ļ�,�������Ȩ��.',
	'file_read' => '���ܶ�ȡ�ļ�,�������Ȩ��.',
	'file_write' => '�������ļ�,�������Ȩ��.',
);


//		Notices			\\
$lang['notice'] = array (		
	'comment_saved' => "���۱�������.",
	'comment_deleted' => "���۱�ɾ����.",
	'comment_none' => "û������.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => '\'%val%\'Ʊ',
	'good' => '��',
	'bad' => '��',
	'already' => '���Ѿ��������Ŀ͸��Ʊ��',
	'register' => '���ͶƱ \'%val%\' �Ѿ��ύ��',
);


$lang['comment'] = array (
	'register' => '������۱��ύ��.',
	'preview' => '������Ԥ����д�����ۣ����\'����\'�������.',
	'duplicate' => '�������û�б��ύ,��Ϊ������ۺ͸ղŵ�һ��.',
	'no_name' => 'You should type your name (or an alias) in the \'name\'-field. Be sure to click on \'Post Comment\' to store it permanently.',
	'no_comment' => 'You should type something in the \'comment\'-field. Be sure to click on \'Post Comment\' to store it permanently.',
);


$lang['comments_text'] = array (
	'0' => "0 ������",
	'1' => "1 ������",
	'2' => "%num% ������",
);


$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "�浵",
	'next_archive' => "��һ�浵",
	'previous_archive' => "ǰһ�浵",
	'last_comments' => "��������",
	'last_referrers' => "Last Referrers",
	'calendar' => "����",
	'links' => "����",
	'xml_feed' => "XML: RSS Feed",
	'powered_by' => "Powered by",
	'name' => "����",
	'email' => "Email",
	'url' => "URL",
	'date' => "����",		
	'comment' => "����",
	'ip' => "IP-��ַ",		
	'yes' => "Yes",
	'no' => "No",
	'emoticons' => "����",
	'emoticons_reference' => 'Open Emoticons Reference',
	'textile' => 'Textile',
	'textile_reference' => 'Open Textile Reference',
	'post_comment' => "����",
	'preview_comment' => "Ԥ������",
	'remember_info' => "��¼�û���Ϣ?",
	'disclaimer' => "<b>Small print:</b> All html tags except &lt;b&gt; and &lt;i&gt; will be removed from your comment. You can make links by just typing the url or mail-address.",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Edit Userfields',
	'edit' => '�༭',
	'create' => '����',

	'dispname' => '��ʾ������',
	'intname' => '�ڲ�����',
	'intname_desc' => 'The Internal Name is the name of this item as it will appear when you tell pivot to display it in a template.',
	'size' => '��С',
	'rows' => '��',
	'cols' => '��',
	'maxlen' => '��󳤶�',
	'minlevel' => '��С�û��ȼ�',	
	'filter' => '���� by',
	'filter_desc' => 'By filtering this item, you limit the type of input that can be used in it',
	'no_filter' => 'û��',
	'del_title' => 'ȷ��ɾ��',
	'del_desc' => 'Deleting this Userfield (<b>%s</b>) will also destroy all the data that users have stored withen it, and make any instances of it in a template appear empty.',	
	
	'already' => '�����Ѿ���ռ��',
	'int' => '�ڲ����Ʊ������3���ַ�',
	'short_disp' => '��ʾ���Ʊ������3���ַ�',
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