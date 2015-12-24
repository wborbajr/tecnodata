<?php
//&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081; (Russian)

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2rd line.

// Russian translation of Pivot lang file (cyrilic)
// Original translation by Mikhail M. Pigulsky.
// Updated by Davron A. (Email - davron.ru@gmail.com, Website - http://davron.ru)

// allow for different encoding for non-western languages
$encoding="koi8-r";
$langname="ru";

//		General		\\
$lang['general'] = array (
	'yes' => '��',	//affirmative
	'no' => '���',		//negative
	'go' => '�����!',	//proceed

	'minlevel' => '� ��� ��� ���� ��� ���� ����� Pivot\'a',
	'email' => 'Email',
	'url' => 'URL',
	'further_options' => "�������������� �����������",
	'basic_view' => "������� ���",
	'basic_view_desc' => "�������� ������ �������� ����",
	'extended_view' => "����������� ���",
	'extended_view_desc' => "�������� ��� ���������� ����",
	'toggle_view' => "����� ����������� � ������� ������",
	'select' => "�������",
	'cancel' => "������",
	'delete' => '�������',
	'edit' => '��������',
	'welcome' => "����� ���������� � %build%.",
	'write' => "��������",
	'write_open_error' => "������ ������. �� ������� ���� ��� ������",
	'write_write_error' => "������ ������. �� �������� �������� � ����",
	'done' => "������!",
	'shortcuts' => "������",
	'cantdelete' => "��� ��������� ������� ������ %title%!",
	'cantdothat' => "��� ���������� ������ ����� � ������� %title%!",
	'cantdeletelast' => "�� �� ������ ������� ��������� ������. �� ������ ������� �������� ������",
);


$lang['userlevels'] = array (
		'������� ��������', '�����', '�����������', '����������', '���������'
		//  this one might be a bit hard to translate, but basically it's an order of
		//  power or trust.  Superadmin would be the person in charge - no one can do
		//  anything about his decisions. Admin is only regulated by the Superadmin,
		//  Advanced by the Admin and Superadmin, etc..
		//  Just get the idea of it.
);


$lang['numbers'] = array (
	'����', '����', '���', '���', '������', '����', '�����', '����', '������', '������', '������', '�����������', '����������', '����������', '������������', '����������', '����������'
);


$lang['months'] = array (
	'������', '�������', '����', '������', '���', '����', '����', '������', '��������', '�������', '������', '�������'
);


$lang['months_abbr'] = array (
	'���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���'
);


$lang['days'] = array (
	'�����������', '�����������', '�������', '�����', '�������', '�������', '�������'
);


$lang['days_abbr'] = array (
	'���', '���', '���', '���', '���', '��', '��'
);


$lang['days_calendar'] = array (
	'�', '�', '�', '�', '�', '�', '�'
);


$lang['datetime_words'] = array (
	'���', '�����', '������', '����', '���', '������', '�������'	//the actual words for them.
);


//		Login Page		\\
$lang['login'] = array (
	'title' => '�����',
	'name' => '��� ������������',
	'pass' => '������',
	'remember' => '���������',
	'rchoice' => array (
		'0' => '������',
		'1' => '��� ��� � ������',
		'2' => '��� � ������ ����������'
	),
	'delete_cookies_desc' => '���� �� ������� ��� ��� � ������ ���������, �� �� <br />�� ������ �����, �� ���������� ������� ���� (cookies) ��� ������� ������:',
	'delete_cookies' => '������� ����',
	'retry' => '�������� ���/������',
	'banned' => '�� �� ������ ����� ��� 10-�� ��������. � ����������, ��� IP ������������ �� 12 ����� (��� ����)',

);


//		Main Bar		\\
	$lang['userbar'] = array (
	'main' => '�������',
	'entries' => '������',
	'submit' => '����� ������',
	'comments' => '�����������',
	'trackbacks' => '��������',
	'modify' => '�������� ������',
	'userinfo' => '��� ������',
	'u_settings' => '��� ���������',
	'u_marklet' => '��������� ������',
	'files' => '���������� ��������',
	'upload' => '���������',
	'stats' => '����������',
	'admin' => '�������������',

	'main_title' => '���������� �������� Pivot\'�',
	'entries_title' => '���������� �������� �������',
	'submit_title' => '�������� � ������������ ����� ������',
	'comments_title' => '�������� ��� ������� ������',
	'trackbacks_title' => '�������� ��� ������� ��������',
	'modify_title' => '�������� ������',
	'userinfo_title' => '�������� ���������� � ����',
	'u_settings_title' => '������ ������ ��������',
	'u_marklet_title' => '������� ��������',
	'files_title' => '���������� � ������� ������',
	'upload_title' => '��������� �����',
	'uploaded_success' => '���� ��� ��������',
	'stats_title' => '�������� ����� � ����������.',
	'updatetitles_title' => '�������� ����� � ����������.',
	'admin_title' => '������ �����������������',
	'recent_entries' => '��������� ������',
	'recent_comments' => '��������� �����������',
);


$lang['adminbar'] = array (
	//		Admin Bar		\\
	//'trebuild' => 'Rebuild all Files', rolled into maintenance
	'seeusers' => '������������',
	'seeconfig' => '���������',
	'templates' => '�������',
	'maintenance' => '��������',
	'regen' => '���������� ��� �����',
	'blogs' => '�������',
	'categories' => '���������',
	'verifydb' => '��������� ���� ������',
	'buildindex' => '���������� ������',
	'buildsearchindex' => '���������� ���� ������ ��������� �������',
	'buildfrontpage' => '���������� ���������(��) ��������(�)',
	'sendping' => '��������� �����',


	'backup' => '��������� �����',
	'description' => '��������',
	'conversion' => '��������������',
	'seeusers_title' => '��������, ������ � �������� �������������.',
	'userfields' => 'User Information Fields',
	'userfields_title' => '��������, ������ � �������� ���������������� �����',
	'seeconfig_title' => '�������� ���������������� ����',
	'templates_title' => '��������, ������ � �������� ��������',
	'maintenance_title' => '���������� ������� �������� � ������� Pivot\'�',
	'regen_title' => '���������� ����� � ������ ������� ������� Pivot',
	'blogs_title' => '��������, ������ � �������� ��������',
	'blogs_edit_title' => '�������� ��������� ������� ��� ',
	'categories_title' => '��������, ������ � �������� ���������',
	'verifydb_title' => '��������� ������������ ���� ������',
	'buildindex_title' => '���������� ������ ���� ������',
	'buildsearchindex_title' => '����������� ������ ���� ������, ��� ������',
	'buildfrontpage_title' => '���������� ��������� �����, ��������� ������ � RSS ����� ��� �������

�������.',
	'backup_title' => '������� ��������� ����� ����� �������',
	'backup_config' => '������� ��������� ����� ����� ��������',
	'backup_config_desc' => '��� ���� ����������� ������� Zip-���� � ���������� �������',
	'ipblocks' => 'IP ����������',
	'ipblocks_title' => '����������� ��� �������� ��������������� IP-������.',
	'ipblocks_stored' => 'IP-������ �������� � ���������.',
	'ipblocks_store' => '��������� IP-������',
	'ignoreddomains' => '����������� �����',
	'ignoreddomains_title' => '������������� ����� �� �������� ������� ������ �����',
	'ignoreddomains_stored' => '����������� ����� ��������.',
	'ignoreddomains_store' => '��������� ������ ����������� ����',
	'ignoreddomains_asterisk' => '������ ���������� ���������� ( * ) ����� ������ ��� ���������� ��������� ������ (����������). ��������� ����� ��� ���������� �������� ������ (����������), ������������ � ��������� ',
	'fileexplore' => '����������� ������',
	'fileexplore_title' => '���������� ����� (���� ������ � ���������)',
	'sendping_title' => '��������� ����� �������� ����������.',
	'buildindex_start' => '����������� ������. ��� ����� ����������� ��������� �����, ���������� �� ����������.',
	'buildsearchindex_start' => '���������� ���� ������. ��� ����� ����������� ��������� �����, ���������� �� ����������.',
	'buildindex_finished' => '������! ����������� ������ %num% ������',

	'filemappings_desc' => '���� �� ������ ���������� �� ��� ������� ��������� Pivot\'��, �� ������ ������� ��������� ����� �������� ��� ������� ����� � ������ ���������. ��� ����� ������ � ���������� ����� � ������ � ������.',

	'debug' => '������� DEBUG-����',

	'latest_pivot_news' => "��������� ������� �� Pivot",
	'remove_setup_header' => "������ Pivot-������������ ������������",
	'remove_setup' => "����������� Pivot\'a 'pivot-setup.php' �� ��� ��� ��������� � �������� �����. ��� ����� ������������, ������� ���� ��� �� ������������",

);


$lang['templates'] = array (
	'rollback' => '��������',
	'create_template' => '������� ������',
	'create_template_info' => '������� ������ ��� Pivot\'a � ����',
	'no_comment' => '��� ������������',
	'comment' => '�����������*',
	'comment_note' => '(*�������: ����������� ����� ���� �������� ������ ��� <b>������</b> ������ ��� ���������)',
	'create' => '������� ������',
	'editing' => '���������',
	'filename' => '�������� �����',
	'save_changes' => '��������� ���������!',
	'save_template' => '��������� ������!',
	'aux_template' => '��������������� ������',
	'sub_template' => '���������',
	'standard_template' => '���������� ������',
	'feed_template' => '������ �����',
	'css_template' => 'CSS ����',
	'txt_template' => '��������� ����',
	'php_template' => 'PHP ����',
);


//		Admin			\\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar']['xxx_title'] ones
$lang['admin'] = array (
	'seeusers' => '��������, ������ � �������� �������������',
	'seeconfig' => '������ ����� ��������',
	'templates' => '��������, ������ � �������� ��������',
	'maintenance' => '���������� ������� �������� Pivot\'� ��� �������, �������� \'���������� �����\',

\'������� ���� ������\', \'���������� ������\' � \'�������� ��������� �����\'.',
	'regen' => '���������� ��� �������� ������� ������� Pivot',
	'blogs' => '��������, ������ � �������� ��������� �������� � ������� ����� ������ Pivot',
);

//		Maintenace		\\
$lang['maint'] = array (
	'title' => '��������',
	'gen_arc_title' => '������������� �����', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => '���������������� ��� ������', /* bob notes: redundant, see 'regen' */
	'xml_title' => '��������� XML �����', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => '��������� (� ��������, ���� ����) ������������ ���� XML ������', /* bob notes:

replace with more general 'Verify DB' */
	'backup_title' => '��������� �����',
	'backup_text' => '������� ��������� ����� ���� ������������ ������ pivot\'�',
);


//      Stats and referers      \\
$lang['stats'] = array (
	'show_last' => "�������� ���������",
	'20ref' => "20 ����������",
	'50ref' => "50 ����������",
	'allref' => "���� ����������",
	'updateref' => "�������� ������ ���������� � ������",
	'hostaddress' => '���� (ip-�����)',
	'which page' => '������� ��������',

	'getting' => '�������� ����� ���������',
	'awhile' => '��� ����� ������ �������� �����, ���������� ���������',
	'firstpass' => '������ ������',
	'secondpass' => '������ ������',
	'nowuptodate' => '��� ���������-��������� ���������',
	'finished' => '���������',
);


//		User Info		\\
	$lang['userinfo'] = array (
	'editfields' => '������ �����',
	'desc_editfields' => '������ ����� ������� ������������ ����� ������������ ����� ������� ����',
	'username' => '������������',
	'pass1' => '������',
	'pass2' => '������ (��� ���)',
	'email' => 'Email',
	'userlevel' => '������� ������������',
	'userlevel_desc' => '������� ������������ ���������� ����� �������� �� ����� �����������',
	'language' => '����',
	'edituser' => '��������� ������������',  //the link to.. well, edit the user (also the title)
	'edituserinfo' => '������ ���������� � ������������',
	'newuser' => '������� ������ ������������',
	'desc_newuser' => '������� ����� ������� ��� Pivot\'�, ����������� ������� � ������.',
	'newuser_button' => '�������',
	'edituser_button' => '��������',
	'pass_too_short' => '������ ������ ���� ��� ������� �� 4 ������.',
	'pass_dont_match' => '������ �� ���������',
	'username_in_use' => '����� ������������ ��� ���������',
	'username_too_short' => '��� ������������ ������ �������� �� 3 �������� ��� �����',
	'username_not_valid' => '��� ������������ ������ ��������� ������ ��������� ����� � ����� (A-Z, a

-z, 0-9) � ������ ������������� (_).',
	'not_good_email' => '��������� e-mail ������������',
	'c_admin_title' => '����������� �������� ��������������',
	'c_admin_message' => ''.$lang['userlevels']['1'].' ����� ������ ������ � pivot\'�, ����� ��������

��� ��������� ��������, ��� ����������� � �������� ����� ���������. �� ������� ��� ������ ������� %s

'.$lang['userlevels']['1'].'?',
);


//		Config Page		\\
	$lang['config'] = array (
	'save' => '��������� ���������',

	'sitename' => '�������� �����',
	'defaultlanguage' => '���� ��-���������',
	'siteurl' => 'URL �����',
	'header_fileinfo' => '���� � �����',
	'localpath' => '��������� ����',
	'debug_options' => '��������� debug ������',
	'debug' => 'Debug �����',
	'debug_desc' => '���������� ��������� debug ���������� �� ���, �� ��...',
	'log' => '��������',
	'log_desc' => '������� �������� ��������� ��������',

	'header_uploads' => '�������� ������',
	'upload_path' => '���� ��� �������� ������',
	'upload_accept' => '����������� ���� ������',
	'upload_extension' => '���������� ��-���������',
	'upload_save_mode' => '������������',
	'make_safe' => '������� ����� ������',
	'c_upload_save_mode' => '����������� ����� � �������� �����',
	'max_filesize' => '������ �����',
	'header_datetime' => '����/�����',
	'timeoffset_unit' => '������� ����������',
	'timeoffset' => '���-��',
	'header_extra' => '��������� ���������',
	'wysiwyg' => '������������ WYSIWYG ��-���������',
	'wysiwyg_desc' => '���������� ������� �� ��-��������� �������� \'��� ���� �� � ������\'. ���

������������ ����� �������� ���� ����� � ����� ������ ����������',
	'def_text_processing' => 'Default Text Processing',
	'text_processing' => 'Text Processing',
	'text_processing_desc' => 'Determines the default text processing, when a user is using the non-

wysiwyg editor. \'Convert Linebreaks\' does nothing more than change linebreaks to a &lt;br&gt;-tag. <a

href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> is a powerful, yet easy to learn

markup style.',
	'none' => 'None',
	'convert_br' => 'Convert Linebreaks to &lt;br /&gt;',
	'textile' => 'Textile',

	'setup_ping' => '��������� �����',
	'ping_use' => '��������� ����-�������',
	'ping_use_desc' => '���������� ������ �� ������� ���� weblogs.com ������������� �����������

Pivot\'�� ���� �� ������� ����� ������. ������� ���� blogrolling.com ������� �� ���� ������',
	'ping_urls' => '������ ��� ������',
	'ping_urls_desc' => '�� ������ ����������� ��������� ������ ��� ������. �� ���������� http://,

����� ��� ��� �� ����� ��������. ������ ���������� ������ ������ �� ����� ������ �� ���������� �� ��������

<b>-</b> . ��������� ������� ��� ����������:<br /><b>rpc.weblogs.com/RPC2</b> (weblogs.com ������, �����

����������������)<br /><b>pivotlog.net/pinger</b> (pivotlog ������, ���� ��� �� ��������)<br

/><b>rcs.datashed.net/RPC2</b> (euro.weblogs.com ������)<br /><b>ping.blo.gs</b> (blo.gs ������)<br />',

	'new_window' => '��������� ������ � ����� ����',
	'emoticons' => '������������ ����������� ������',
	'javascript_email' => '���������� Email ������?',
	'new_window_desc' => '���������� ��������� ������ � ����� ���� ��� � ��� ��.',

	'mod_rewrite' => '������������ Filesmatch',
	'mod_rewrite_desc' => '���� �� ����������� Apache\'s Filesmatch, Pivot ����� ������ ������ ����

www.mysite.com/archive/2003/05/30/nice_weather, ������ www.mysite.com/pivot/entry.php?id=134. �� ���

������� ������������ ������ ������, ��� ��� ����������� ��� ������ ����� ��������� �������.',
	'search_index' => '�������� ����� ������',
	'search_index_desc' => 'Dit bepaalt of de zoekindex altijd wordt bijgewerkt als je een nieuw

artikel plaatst, of een artikel wijzigt.',

	'default_introduction' => '�����������/���� �� ���������',
	'default_introduction_desc' => 'This will determine the default values for Introduction and Body

when an author writes a new entry. Normally this will be an empty paragraph, which makes the most sense

semantically.',

	'upload_autothumb'	=> '�������������� ������',
	'upload_thumb_width' => '������ ������',
	'upload_thumb_height' => '������ ������',
	'upload_thumb_remote' => '������ ��������� ����������� �� ������ �������',
	'upload_thumb_remote_desc' => '���� ��� ������ �� ������������ ��������� �����������, �� ����� ������������ ������ ������� �������',

	'extensions_header' => '���������� ��� ����������',
	'extensions_desc'   => '����� \'extensions\' (����������) ��� ����� ��� ���������� Pivot\'a.
		��� ������ ���������� ������� �����. ������� ������������ ��� ������������.',
	'extensions_path'   => '���������� ����������',

);


//		Weblog Config	\\
$lang['weblog_config'] = array (
	'edit_weblog' => '������ �������',
	'edit_blog' => '������ ������',
	'new_weblog' => '����� ������',
	'new_weblog_desc' => '�������� ����� ������',
	'del_weblog' => '������� ������',
	'del_this_weblog' => '������� ���� ������.',
	'create_new' => '������� ����� ������',
	'subw_heading' => '��� ������� �������� ���������� � �������� �� ������ ������� ����� ������ ���

��� ������������, � ��� �� ��������� ������� ����� � ��� ������������',
	'create' => '���������',

	'create_1' => '�������� / ������ �������, ��� 1 �� 3',
	'create_2' => '�������� / ������ �������, ��� 2 �� 3',
	'create_3' => '�������� / ������ �������, ��� 3 �� 3',

	'name' => '�������� �������',
	'payoff' => '������',
	'payoff_desc' => '������ ����� ���� ����������� ��� ������������ ��� ��� ������� �������� ������

�������',
	'url' => 'URL � �������',
	'url_desc' => 'Pivot ��� ��������� ������ �� ������ ���� �� �������� ��� ���� ������. ���� ��

����������� ���� ������ ��� ����� ������, ��� ��������� �� ������� �������, �� ������ ������������ ���

���� ��� ��������.',
	'index_name' => '������� �������� (������)',
	'index_name_desc' => '��� ������-�����. ������ ��� ���-�� ����� \'index.html\' ���

\'index.php\'.',

	'ssi_prefix' => '������� SSI',
	'ssi_prefix_desc' => '���� ��� ���� ���������� SSI (��� �� ������������� �� ������ �����������

������ ���� ����� ��������� ������� ������ Pivot\'� ��� SSI. �������� \'index.shtml?p=\'. �������� ����

������ ���� �� ������ ��� �������.',

	'front_path' => '���� � ��������� ��������',
	'front_path_desc' => '������������� ��� ���������� ���� � �������� � ������� Pivot ����� ���������

������� �������� � �����.',
	'file_format' => '��� �����',
	'entry_heading' => '��������� �������',
	'entry_path' => '���� �������',
	'entry_path_desc' => '������������� ��� ���������� ���� � �������� � ������� Pivot ����� ���������

��������� �������� ��� ������ ������ (���� �� �������� �� ������������ \'����� ������\')',
	'live_comments' => '����� ������',
	'live_comments_desc' => '���� �� ����������� \'����� ������\', Pivot �� ����� ��������� ���������

�������� ��� ������ ������. ��� ����� ��-���������.',
	'readmore' => '����� ��� \'����������� ������\' ������',
	'readmore_desc' => '���� ����� ���������� ��� ������ ������� ������� ��� �������� �� �������

�������� � ���������� ������ ��� ����������� ������. ���� �� �������� ���� ������, ����� ������������

��������� �� ��������� �����.',

	'arc_heading' => '��������� �������',
	'arc_index' => '������� ����',
	'arc_path' => '���� � ������',
	'archive_amount' => '���������� �������',
	'archive_unit' => '��� ������',
	'archive_format' => '������ ������',
	'archive_none' => '�� ������ �������',
	'archive_weekly' => '������������ ������',
	'archive_monthly' => '�������� ������',

	'archive_link' => '�������� ������',
	'archive_linkfile' => '�����-����� �� �����',
	'archive_order' => '������� ������',
	'archive_ascending' => '����������� (������ �������)',
	'archive_descending' => '�������� (����� �������)',

	'templates_heading' => '�������',
	'frontpage_template' => '������ ������� ��������',
	'frontpage_template_desc' => '��� ��������� �������� ����� �����.',
	'archivepage_template' => '������ �������� �������',
	'archivepage_template_desc' => '��� ������� � ��������. ����� ���� ����� �� ��� � \'������ �������

��������\'.',
	'entrypage_template' => '������ ������',
	'entrypage_template_desc' => '��� �������� ������ ��������� ������.',
	'extrapage_template' => 'Extra-������',
	'extrapage_template_desc' => '���������� ��� ����� �������� �������� search.php .',

	'shortentry_template' => '������ �������� ������',
	'shortentry_template_desc' => '��� ������� � �������� ���� � ����� � �������.',
	'num_entries' => '���������� �������',
	'num_entries_desc' => '������� ������� ����� �������� �� ������� ��������.',
	'offset' => 'Offset',
	'offset_desc' => '���� ������� ����� �������� �����, �� �������������� ������� ����� ��������� ��� �����������. �� ������ ������������ ��� ����� ������� \'���������� ������\' list, for example.',
	'comments' => '��������� �����������?',
	'comments_desc' => '���������� ������ �� ������������ ��������� �����������.',

	'setup_rss_head' => '��������� RSS',
	'rss_use' => '������������ RSS',
	'rss_use_desc' => '���������� ����� �� Pivot\'� ��������� RSS ����� ��� ������� �����.',
	'rss_filename' => '���� � RSS ������',
	'atom_filename' => 'Atom bestandsnaam',
	'rss_path' => '���� � RSS',
	'rss_path_desc' => '������������� ��� ���������� ���� � RSS �����.',
	'rss_size' => '����� ������ � RSS',
	'rss_size_desc' => '����� ������ (���-�� ��������) ������� ����� � RSS �����',

	'lastcomm_head' => '��������� ��������� ������������',
	'lastcomm_amount' => '������� ����������',
	'lastcomm_length' => '�������� ��� �����',
	'lastcomm_format' => '������',
	'lastcomm_format_desc' => 'These settings determine the appearance of the \'last comments\' on the

weblog\'s frontpage.',

	'lastref_head' => 'Settings for Last Referers',
	'lastref_amount' => '������� ����������',
	'lastref_length' => '�������� ��� �����',
	'lastref_format' => '������',
	'lastref_format_desc' => '��� ��������� ������� ��� \'��������� ���������\' �� ������� �������� �������',

	'various_head' => '��������� ���������',
	'emoticons' => '������������ ����. ������',
	'emoticons_desc' => '���������� ������� �� ��������� ������ ��������� :-) ���������������� � ��

����������� ����������.',
	'encode_email_addresses' => '���������� Email ������',
	'encode_email_addresses_desc' => '���������� ����� �� email-����� ������������ ��� ������

javascript, ��� ������ �� ����-�����.',
	'target_blank' => '���� �����',
	'xhtml_workaround' => 'XHTML Workaround',
	'target_blank_desc' => '���� ����� � �������� \'��\', �� ��� ������ ����� ����������� � �����

����.',

	'date_head' => '��������� ����������� ����',
	'full_date' => '������ ������ ����',
	'full_date_desc' => '���������� ������ ������ ���� � �������. � �������� ������������ � �������.',
	'entry_date' => '���� ������',
	'diff_date' => '��������� ����',
	'diff_date_desc' => '\'��������� ����\' ���� ����� ������������ � ������ �  \'����� ������\'. ����

������ ������������ � ����� ����, � �� ����� ��� ��������� ���� ������������ ������ ���� ���� ������� ��

������� ������.',
	'language' => '����',

	'comment_head' => '��������� ������������',
	'comment_sendmail' => '�������� �� �����?',
	'comment_sendmail_desc' => '����� ���� ��� ��� �������� �����������, Pivot ����� ��������� ������

�������� �����.',
	'comment_emailto' => '����',
	'comment_emailto_desc' => '�����(�) �� ������� ����� ���������� ��������� �� �����������

�����������. ��������� ������� ������� ��������� �������.',
	'comment_texttolinks' => '����� � ������',
	'comment_texttolinks_desc' => '���������, ������� �� ���������� ������ ������� � e-mail\'��

���������� � ������.',
	'comment_wrap' => '���������� ����������� �����',
	'comment_wrap_desc' => '����� ����� ������� ������ �� ������� ��� ������, ����� ����� ����

��������� �� ����� ������ ����� ���������� ��������� ������.',
	'comments_text_0' => '������ ��� \'��� ������������\'',
	'comments_text_1' => '������ ��� \'���� �����������\'',
	'comments_text_2' => '������ ��� \'������������ - �\'',
	'comments_text_2_desc' => '��������� �� �����, ������� ����� ����������� ��� �����������

���������� ����������� ������������. ���� �� �������� ��� ���� �������, Pivot ����� ������������ ������ ��

����� �����',

	'comment_pop' => '����������� � ����� ����?',
	'comment_pop_desc' => '���������, ����� �� ����������� (��� \'��������� ������\') ������������ �

����� ���� ��� � ������������ ���� ��������.',
	'comment_width' => '������ ����',
	'comment_height' => '������ ����',
	'comment_height_desc' => '��������� ������ � ������ (� ��������)���� ��� ������������.',

	'comment_format' => "������ ������������",
	'comment_format_desc' => "��� ������� ��� ��������� ������������",

	'comment_textile' => '��������� Textile',
	'comment_textile_desc' => '���� ��� �������� ����� \'��\', �� ���������� ����� ������������ <a

href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> � �� ������������.',

	'saved_create' => '����� ���� ��� ������� ������.',
	'saved_update' => '������ ��������.',
	'deleted' => '������ ��� ������.',
	'confirm_delete' => '�� ����������� ������� ������ %1. �� �������?',

	'blogroll_heading' => '�������� Blogroll',
	'blogroll_id' => 'Blogrolling ID #',
	'blogroll_id_desc' => '�� ������ �������� <a href="http://www.blogrolling.com"

target="_blank">blogrolling.com</a> blogroll �� ��� ����. Blogrolling �������� ������ �������� ������, ��������� ��������� ����������. ���� �� ������, �� �������� ���� ������. ���� ��: When you\'re logged in to blogrolling.com, go to \'get code\', there

you will find links containing your blogroll\'s ID #. ������ ��������� ����� �����:

2ef8b42161020d87223d42ae18191f6d',
	'blogroll_fg' => '���� ������',
	'blogroll_bg' => '���� ����',
	'blogroll_line1' => '���� ����� 1',
	'blogroll_line2' => '���� ����� 2',
	'blogroll_c1' => '���� 1',
	'blogroll_c2' => '���� 2',
	'blogroll_c3' => '���� 3',
	'blogroll_c4' => '���� 4',
	'blogroll_c4_desc' => '���������� ����� �� �����. ���� 1 �� �����

4 ���������� ��������� ��� ����� ��������� ������.',
);


$lang['upload'] = array (
	//		File Upload		\\
	'preview' => '���� ������',
	'thumbs' => '������������ �������',
	'create_thumb' => '(������� �����)',
	'title' => '�����',
	'thisfile' => '��������� ����� ����:',
	'button' => '���������',
	'filename' => '��� �����',
	'thumbnail' => '�����',
	'date' => '����',
	'filesize' => '������',
	'dimensions' => '������ x ������',
	'delete_title' => '������� �����������',
	'areyousure' => '�� ������� ��� ������ ������� ���� %s?',
	'picheader' => '������� ������ �����������?',
	'create' => '�������',
	'edit' => '������',

	'insert_image' => '�������� �����������',
	'insert_image_desc' => '����� �������� �����������, �� ������ ��� ��������� ��� ������� �����

�����������.',
	'insert_image_popup' => '�������� ������������ �����������',
	'insert_image_popup_desc' => '���� �� ������ ������� ������������ ���� � ������������, ��� ����

������� ����������� �� �����.',
	'choose_upload' => '���������',
	'choose_select' => '��� �������',
	'imagename' => '�������� �����������',
	'alt_text' => '�������������� �����',
	'align' => '���������',
	'border' => '�����',
	'pixels' => '��������',
	'uploaded_as' => '��� ���� ��� �������� ��� \'%s\'.',
	'not_uploaded' => '��� ���� �� ��� ��������. ��������� ��������� ������:',
	'center' => '����� (�� ���������)',
	'left' => '����',
	'right' => '�����',
	'inline' => '������',
	'notice_upload_first' => '��� ������ �� ������ ������� ��� ��������� �����������',
	'select_image' => '������� �����������',

	'for_popup' => '��� ������ ����',
	'use_thumbnail' => '������������ �����',
	'edit_thumbnail' => '������� �����',
	'use_text' => '������������ �����',
	'insert_download' => '�������� ��������',
	'insert_download_desc' => '����� ������� ���� ��� ��������, �� ������ ��������� ���� ��� ������� ����� ����������� ����. ����� ������� ����� ��� ����������� ��� ������ �� ��������',
	'use_icon' => '������������ ������',
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => '�������� ������',
	'insert_link_desc' => '��� ����, ����� ������� ������, ��� ���������� �������� �����. ���������� �������� �� ������ ��� ������� �� ���.',
	'url' => 'URL',
	'title' => '��������',
	'text' => '�����',
);


//		Categories		\\
$lang['category'] = array (
	'edit_who' => '��������� ��� ��� ����� ������ � ��������� \'%s\'',
	'name' => '���',
	'users' => '������������',
	'make_new' => '������� ����� ���������',
	'create' => '������� ���������',
	'canpost' => '�������� �������������, ������� �� ������ ��������� ������ � ��� ���������',
	'same_name' => '��������� � ����� ��������� ��� ����������',
	'need_name' => '��������� ������ ���� �������',

	'allowed' => '���������',
	'allow' => '���������',
	'denied' => '���������',
	'deny' => '���������',
	'edit' => '������� ���������',

	'delete' => '������� ���������',
	'delete_desc' => '�������� \'��\', ��� �������� ������',

	'delete_message' => '� ���� ����� Pivot\'� ��������� ����� ������ �������. � ��������� �� ������

�� ������ ��������, ��� ������� � �������� �� ������ ���������.',
	'search_index_newctitle'   => '������������� ������ ���������',
	'search_index_newcdesc'    => '�������� \'���\' ���� �� ������ ����� ���������� �� ����� ������ � ���� ���������.',
	'search_index_editcheader' => '�������������� ���������',

	'order' => '����������',
	'order_desc' => '��������� ����� ������������� �� ������, � ������ �������. ���� �� ��������� ��� ������, ��� ����� ����������� � ���������� �������',
	'public' => '��������� ���������',
	'public_desc' => '���� ������� \'���\', ��� ��������� ����� ����� ������ ��� ������������������ �����������. (������ ��� "�����" �������)',
	'hidden' => '������� ���������',
	'hidden_desc' => '���� ������� \'��\', ��� ��������� ����� ������ � �������. (������ ��� "�����" �������)',

);


$lang['entries'] = array (
	'post_entry' => "��������",
	'preview_entry' => "����-��������",

	'first' => '������',
	'last' => '���������',
	'next' => '���������',
	'previous' => '����������',
	'jumptopage' => '�������� (%num%)',
	'filteron' => '����������� �� (%name%)',
	'filteroff' => '�� ����������� - off',
	'title' => '���������',
	'subtitle' => '������������',
	'introduction' => '����������',
	'body' => '���� ������',
	'publish_on' => '����� ��� ������',
	'status' => '������',
	'post_status' => '������ ��������',
	'category' => '���������',
	'select_multi_cats' => '(Ctrl-���� ����� �������� ��������� ���������)',
	'last_edited' => "��������� ��� ���������",
	'created_on' => "�������",
	'date' => '����',
	'author' => '�����',
	'code' => '���',
	'comm' => '# Comm',
	'allow_comments' => '��������� ��������������',
	'convert_lb' => '�������������� �������� �����',
	'always_off' => '(������ ��������� ����� � ������ wysiwyg)',
	'be_careful' => '(������ ��������� � ����!)',
	'edit_comments' => '������� �����������',
	'edit_comments_desc' => '������� ����������� ����������� ��� ������ ������',
	'edit_comment' => '������ �����������',
	'delete_comment' => '������� �����������',
	'block_single' => '������������� IP %s',
	'block_range' => '������������� �������� IP %s',
	'unblock_single' => '�������������� IP %s',
	'unblock_range' => '�������������� �������� IP %s',
	'trackback' => '���� ��������',
	'trackback_desc' => '��������� ����� ��������� �������� url(s). ��� ���������� ��������, �������� �� ������ ������.',
	'keywords' => '�������� �����',
	'keywords_desc' => '��� �������� �������� ���� ��� ������, ��� ���� ����� �������� �������������� ����� ��� ������ ������.',
	'vialink' => "���-����",
	'viatitle' => "���-��������",
	'via_desc' => '����������� ��� ��� ��������� �������.',
	'entry_catnopost' => '��� �� ��������� ������ ������ � ���������:\'%s\'.',
	'entry_saved_ok' => '���� ������ \'%s\' �������� �������.',
	'entry_ping_sent' => '������ �������� ����������� \'%s\'.',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => '�������� ���',
	'c_none' => '����� ������� �� ����',
	'choose' => '- �������� -',
	'publish' => '���������� ������ � \'������������\'',
	'hold' => '���������� ������ � \'����������\'',
	'delete' => '������� ��',
	'generate' => '������������ � �������������',

	'with_checked_entries' => "� ����������� �������� �������:",
	'with_checked_files' => "� ����������� ������� �������:",
	'with_checked_templates' => '� ����������� ��������� �������:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => '�� ���� ������� ����������, ��������� �����.',
	'path_read' => '�� ���� ��������� ����������, ��������� �����.',
	'path_write' => '�� ���� �������� � ����������, ��������� �����.',

	'file_open' => '�� ���� ������� ����, ��������� �����.',
	'file_read' => '�� ���� ��������� ����, ��������� �����.',
	'file_write' => '�� ���� �������� ����, ��������� �����.',
);


//		Notices			\\
$lang['notice'] = array (
	'comment_saved' => "����������� ��������.",
	'comment_deleted' => "����������� ������.",
	'comment_none' => "� ������ ��� �����������.",
	'trackback_saved' => "������� ��������.",
	'trackback_deleted' => "������� ������.",
	'trackback_none' => "� ������ ��� ���������.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => '������������� \'%val%\' �� ��� ������',
	'good' => '������',
	'bad' => '�����',
	'already' => '�� ��� ���������� �� ��� ������ ��� �����',
	'register' => '��� ����� \'%val%\' ��� �������',
);


$lang['comment'] = array (
	'register' => '��� ����������� ��������.',
	'preview' => '�� �������������� ��� �����������, �� �� ���� �� ��������. �� �������� ������ \'�������� �����������\', ����� ��������� ���.',
	'duplicate' => '����������� �� ��������, ��� ���������� ����������� �������� ����� �����.',
	'no_name' => '�� ������ �������� ���� ��� ��� ��� � ���� \'���\'. �� �������� ������ \'�������� �����������\', ����� ��������� ���.',
	'no_comment' => '�� ������ �������� ���-���� ��� �����������. �� �������� ������ \'�������� �����������\', ����� ��������� ���.',
	'too_many_hrefs' => '������� ����� ������ � ����� �����������. �� �� ����� ���������.',
    'email_subject' => '[Comment] Re:',
);


$lang['comments_text'] = array (
	'0' => "��� ������������",
	'1' => "%num% �����������",
	'2' => "������������: %num%",
);

$lang['trackbacks_text'] = array (
	'0' => "��� ���������",
	'1' => "%num% �������",
	'2' => "%num% ���������",
);

$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "������ / Archives",
	'next_archive' => "��������� �����",
	'previous_archive' => "���������� �����",
	'last_comments' => "��������� �����������",
	'last_referrers' => "�������� ������",
	'calendar' => "���������",
	'links' => "����",
	'xml_feed' => "RSS ����� (2.0)",
	'powered_by' => "���������� ",
	'name' => "���",
	'email' => "Email",
	'url' => "URL",
	'date' => "����",
	'comment' => "�����������",
	'ip' => "IP �����",
	'yes' => "��",
	'no' => "���",
	'emoticons' => "������",
	'emoticons_reference' => '������� ��������',
	'textile' => '����',
	'textile_reference' => '������� ��������� "Textile" - ��� ����������� �������������.',
	'post_comment' => "�������� ����������� (ok)",
	'preview_comment' => "����-��������",
	'remember_info' => "��������� ����",
	'disclaimer' => "<b>����������:</b> ��� ����� &lt;b&gt; � &lt;i&gt; ��������� ��

�����������. ����� ������� ������, �������� ����� ��� Email.",
	'search_title' => "���������� ������",
	'search' => " Go! ",
	'nomatches' => "������ �� ������� �� ������� '%name%'. ���������� �������� ��� ������ ���, ������

��� �� ������ ��� ��� �������� ��� ����������, �������� ����� ��������� � ���� ������, �� � ��� ���������.",
	'matches' => "���������� ������ ��� '%name%':",
	'about' => "����������",
	'stuff' => "�������",
	'linkdump' => "������ ������",
	'discreet' => "������ email",
	'discreet_yes' => "��, ������ ��� email.",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => '������ ���������������� �����',
	'edit' => '������',
	'create' => '�������',

	'dispname' => '������������ ���',
	'intname' => '��������� ���',
	'intname_desc' => '��������� ��� ��� ��� �������� ������� �� �������� ����� �� ���������. ���

����� �������� � ��������.',
	'size' => '������',
	'rows' => '�����',
	'cols' => '�����',
	'maxlen' => '����. �����',
	'minlevel' => '���. ������� ������������',
	'filter' => '�����������',
	'filter_desc' => '�������� ������ ������� �� ������������� ��� �� ��� ����� ���� � ��� ��������',
	'no_filter' => '������',
	'del_title' => '����������� ��������',
	'del_desc' => '������ ������ ���� (<b>%s</b>) �� ����� ���������� ��� ������ ������� ������������

����� �������.',

	'already' => '������ ��� ��� ������������',
	'int' => '��������� ��� ������ ���� ������� ���� ��������',
	'short_disp' => '������������ ��� ������ ���� ������� 3 ��������',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => '������',
	'bm_add' => '�������� �����.',
	'bm_withlink' => 'Piv " New',
	'bm_withlink_desc' => '��������� ���� � ����� �������, ������� �������� ������.',

	'bm_nolink' => 'Piv " New',
	'bm_nolink_desc' => '��������� ���� � ������ �������.',

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
	'search_idname'      => '�����',
	'search_formname'    => '����� � ������ ������� �����',
	'search_fldname'     => '������� �����[�] ��� ������:',
	'search_placeholder' => '������� �������� �����',

	'calendar_summary'   => '��� ��������� ������� ����� ����� �� �������� �� ������ �� �����.',
	'calendar_noscript'  => '��������� ��������� ������ ������ �� ����',
	/*
	2-letter language code, used to designate the principal language used on the site
	see: http://www.oasis-open.org/cover/iso639a.html
	*/

	'lang' => $langname,
) ;


$lang['snippets_text'] = array (
    'word_plural'     => '����(�)',
    'image_single'    => '�����������',
    'image_plural'    => '�����������',
    'download_single' => '����',
    'download_plural' => '�����',
);

$lang['trackback'] = array (
    'register' => '��� ������� ��������.',
    'duplicate' => '��� ������� �� ��������, ��� ��� ���������� ����� �������.',
    'too_many_hrefs' => '������� ����� ������. �� �� ����� ����.',
    'noid'      => '��� �������������� �������� (ID) (tb_id)',
    'nourl'     => '��� URL (url)',
    'tracked'   => '��������',
    'email_subject' => '[Trackback] Re:',
);

$lang['commentuser'] = array (
    'title'             => '���� ��� �������������',
    'header'            => '����� ��� ������������������',
    'logout'            => '�����.',
    'loggedout'         => '�� ����� �� ��������',
    'login'             => '�����',
    'loggedin'          => '���� ��������',
    'loggedinas'        => '�� ����� ���',
    'pass_forgot'       => '������ ������?',
    'register_new'      => '�����������������.',
    'register'          => '����������������� ��� ������������',
    'register_info'     => '���������� ��������� ��������� ����. <strong>��������� ��� �� ���� ���������� email</strong>, ��� ��� �� �������� ��� ������ � ��������������.',
    'pass_note'         => '�������: �� ������� ������ ��� ������ ������. <br /> ��� �� ��� � ������ ����� ��� ������ <em>�����</em> <br /> ����� ��� ��� �� �����!',
    'show_email'        => '���������� ��� ������������� email � ������������',
    'notify'            => '���������� ��� ��������� � ����� �������',
    'def_notify'        => '������ �������� ���� "�������� �� �������"',
    'register'          => '������������������',
    'pass_invalid'      => '�������� ������',
    'nouser'            => '��� ������ ������������..',
    'change_info'       => '����� �� ������ �������� ���� ����������.',
    'pref_edit'         => '�������� ��� ������',
    'pref_change'       => '�������� ���������',
    'options'           => '���������',
    'user_exists'       => '����� ������������ ��� ����������.. ���������� ������� ������ ���.',
    'email_note'        => '�� ������ ���� ���� ����������� �����, ��� ��� �� �� ������� ����������� ������������ ��� �����. ��� ����� �� ����� ����� ������ ����� ��� � ����� �����������.',
    'stored'            => '��������� ���������',
    'verified'          => '��� ������������ ��������. ���������� �������..',
    'not_verified'      => '�������, ��� ��� ��������. ��������, �� ������������ �� ���� �������������.',
    'pass_sent'         => '��� ������ ��������� �� ��� ����� ����������� ����� email..',
    'user_pass_nomatch' => '��� ������������ � email ������-�� �� ���������..',
    'user_stored'       => '������������ ���������������!',
    'user_stored_failed' => '�� �������� ��������� ������ ������������!!',
    'pass_send'         => '��������� ������',
    'pass_send_desc'    => '���� �� ������ ��� ������, �� ����� ������ �� ��� email. ',
    'oops'              => '��',
    'back'              => '�����',
    'back_login'        => '����� �� �������� �����',
    'forgotten_pass_mail' => "��� ������� ������ ��� '%name%': \n\n%pass%\n\n���������� ������ �� ���������!\n\n��� ���� ����� �����, ������� ��������� ������:\n %link%",
    'registered'        => "�� ���������������� '%s'",
    'reg_confirmation'  => '������������� �����������',
    'reg_verify_short'  => '������������� ������ ������������',
    'reg_verify_long'   => "��� ������������� ������ ������������, ���������� ��������� �� ��������� ������:\n %s",
    'reg_verification'  => '������������� ���������� �� %s. ���������� ��������� ��� email ��� �������������.'
);

// A little tool to help you check if the file is correct..
if (count(get_included_files())<2) {

	$groups = count($lang);
	$total = 0;
	foreach ($lang as $langgroup) {
		$total += count($langgroup);
	}
	echo "<h2>Language file is correct! ���� ���������!</h2>";
	echo "This file contains $groups groups and a total of $total labels.";

}

?>
