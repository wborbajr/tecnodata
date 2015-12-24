<?php
//Vietnamese (UTF-8)

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2rd line.

// Vietnamese translation of Pivot lang file
// Created by Truong Trong Hoang (hoangtt2@yahoo.com)

// allow for different encoding for non-western languages
$encoding="utf-8";
$langname="vi";

//		General		\\
$lang['general'] = array (
	'yes' => 'Đúng',	//affirmative
	'no' => 'Không',		//negative
	'go' => 'Thực hiện',	//proceed

	'minlevel' => 'Bạn không được truy cập vào chức năng này',	
	'email' => 'Email',			
	'url' => 'URL',
	'further_options' => "Tùy chọn khác",
	'basic_view' => "Khung cơ bản",
	'basic_view_desc' => "Chỉ xem những trường thông dụng nhất",
	'extended_view' => "Khung mở rộng",
	'extended_view_desc' => "Xem tất cả những trường có thể chỉnh sửa được",
	'select' => "Chọn",
	'cancel' => "Hủy",
	'delete' => "Xóa",
	'welcome' => "Chào mừng bạn đến với %build%",
	'write' => "Ghi",
	'write_open_error' => "Lỗi ghi. Không thể mở tập tin để ghi",
	'write_write_error' => "Lỗi ghi. Không thể ghi lên tập tin",
	'done' => "Đã xong",
	'shortcuts' => "Phím tắt",
	'cantdelete' => "Bạn không được phép xóa %title%!",
	'cantdothat' => "Bạn không được phép thực hiện hoạt động này đối với bài %title%!",
);


$lang['userlevels'] = array (
		'Siêu quản lý', 'Quản lý', 'Cao cấp', 'Bình thường', 'Moblogger'
		//  this one might be a bit hard to translate, but basically it's an order of
		//  power or trust.  Superadmin would be the person in charge - no one can do
		//  anything about his decisions. Admin is only regulated by the Superadmin, 
		//  Advanced by the Admin and Superadmin, etc..
		//  Just get the idea of it.
);


$lang['numbers'] = array (
	'không', 'một', 'hai', 'ba', 'bốn', 'năm', 'sáu', 'bảy', 'tám', 'chín', 'mười', 'mười một', 'mười hai', 'mười ba', 'mười bốn', 'mười lăm', 'mười sáu'
);


$lang['months'] = array (
	'Tháng Giêng', 'Tháng Hai', 'Tháng Ba', 'Tháng Tư', 'Tháng Năm', 'Tháng Sáu', 'Tháng Bảy', 'Tháng Tám', 'Tháng Chín', 'Tháng Mười', 'Tháng Mười một', 'Tháng Chạp'
);	

		
$lang['months_abbr'] = array (
	'1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'
);


$lang['days'] = array (
	'Chủ nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy'
);


$lang['days_abbr'] = array (
	'Chủ nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy'
);


$lang['days_calendar'] = array (
	'T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'CN'
); 


$lang['datetime_words'] = array (
	'Năm', 'Tháng', 'Tuần', 'Ngày', 'Giờ', 'Phút', 'Giây'	//the actual words for them.
);


//		Login Page		\\
$lang['login'] = array (
	'title' => 'Đăng nhập',
	'name' => 'Tên người sử dụng',
	'pass' => 'Mật mã',
	'remember' => 'Ghi nhớ',
	'rchoice' => array (
		'0' => 'Không',
		'1' => 'Tên và Mật mã của tôi',
		'2' => 'Duy trì việc đăng nhập'
	),
	'delete_cookies_desc' => 'Nếu bạn chắc chắn là bạn đã nhập đúng tên người sử dụng và mật mã nhưng vẫn không đăng nhập được, bạn hãy thử xóa cookies.',
	'delete_cookies' => 'Xóa cookies',
	'retry' => 'Tên người sử dụng/mật mã không đúng',
	'banned' => 'Bạn đã đăng nhập thất bại 10 lần. Do đó IP này sẽ không được đăng nhập trong vòng 12 giờ tới.',

);


//		Main Bar		\\
	$lang['userbar'] = array (
	'main' => 'Tổng quan',
	'entries' => 'Bài viết',
	'submit' => 'Bài viết mới',
	'comments' => 'Bàn luận',
	'modify' => 'Chỉnh sửa bài viết',
	'userinfo' => 'Thông tin tài khoản cá nhân',
	'u_settings' => 'Cấu hình tài khoản cá nhân',
	'u_marklet' => 'Các dấu mốc',
	'files' => 'Quản lý hình ảnh, âm thanh',
	'upload' => 'Tải lên',
	'stats' => 'Thống kê',
	'admin' => 'Quản lý',

	'main_title' => 'Tổng quan về Pivot',
	'entries_title' => 'Tổng quan về các bài viết',
	'submit_title' => 'Bài viết mới',
	'comments_title' => 'Biên tập hoặc Xóa các Ý kiến',		
	'modify_title' => 'Thay đổi Bài viết',
	'userinfo_title' => 'Xem các thông tin về tài khoản cá nhân',
	'u_settings_title' => 'Thay đổi các thông tin về tài khoản cá nhân',
	'u_marklet_title' => 'Tạo các mốc đánh dấu',
	'files_title' => 'Quản lý và Tải lên các tập tin đa phương tiện',
	'upload_title' => 'Tải tập tin lên',
	'uploaded_success' => 'Tập tin đã được tải lên',
	'stats_title' => 'Xem các bản ghi nhớ và thống kê',
	'updatetitles_title' => 'Xem các bản ghi nhớ và thống kê',
	'admin_title' => 'Tổng quan về Quản lý',
	'recent_entries' => 'Các bài viết mới',
	'recent_comments' => 'Các Góp ý mới',
);


$lang['adminbar'] = array (
	//		Admin Bar		\\
	//'trebuild' => 'Tạo lại tất cả các tập tin', rolled into maintenance
	'seeusers' => 'Người dùng',
	'seeconfig' => 'Cấu hình',
	'filemappings' => 'Sơ đồ tập tin',
	'templates' => 'Các bộ mẫu',
	'maintenance' => 'Bảo trì',
	'regen' => 'Tạo lại tất cả các tập tin',
	'blogs' => 'Các weblog',
	'categories' => 'Các chủ đề',
	'verifydb' => 'Xác nhận sơ sở dữ liệu',
	'buildindex' => 'Tạo lại chỉ mục',
	'buildsearchindex' => 'Tạo lại chỉ mục tìm kiếm',
	'buildfrontpage' => 'Tạo lại các trang bìa',
	'sendping' => 'Gởi pings',


	'backup' => 'Sao lưu',
	'description' => 'Mô tả',
	'conversion' => 'Chuyển đổi',
	'seeusers_title' => 'Tạo, biên tập và xóa tài khoản người dùng',
	'userfields' => 'Các trường thông tin của người dùng',
	'userfields_title' => 'Tạo, biên tập và xóa các trường thông tin của người dùng',
	'seeconfig_title' => 'Biên tập tập tin cấu hình',
	'filemappings_title' => 'Cho xem tổng quát về các tập tin đã được tạo ra',
	'templates_title' => 'Tạo, biên tập và xóa các bộ mẫu định dạng',
	'maintenance_title' => 'Thực hiện việc bảo trì thường kỳ trên các tập tin',
	'regen_title' => 'Tạo lại các tập tin và bộ đóng tập mà Chương trình Pivot đã tạo ra',
	'blogs_title' => 'Tạo, biên tập và xóa các weblogs',
	'blogs_edit_title' => 'Biên tập cấu hình của weblog ',
	'categories_title' => 'Tạo, biên tập và xóa các chủ đề',	
	'verifydb_title' => 'Kiểm sự toàn vẹn của cơ sở dữ liệu',
	'buildindex_title' => 'Tạo lại chỉ mục của cơ sở dữ liệu',
	'buildsearchindex_title' => 'Tạo lại chỉ mục tìm kiếm cho phép tìm kiếm trong các bài viết',
	'buildfrontpage_title' => 'Tạo lại trang bìa, các bộ đóng tập cuối và các tập tin RSS cho mỗi weblogs',
	'backup_title' => 'Tạo bản dự phòng các bài viết',
	'ipblocks' => 'Các khối IP',
	'ipblocks_title' => 'Xem và biên tập các khối địa chỉ IP',
	'ipblocks_stored' => 'Các địa chỉ IP đã được lưu',
	'ipblocks_store' => 'Lưu các địa chỉ IP này',
	'fileexplore' => 'Chương trình quản lý tập tin',
	'fileexplore_title' => 'Xem các tập tin (cả văn bản và cơ sở dữ liệu)',
	'sendping_title' => 'Gởi pings đến bộ theo dõi cập nhật',
	'buildindex_start' => 'Đang tạo Chỉ mục. Có thể mất một ít thời gian, vui lòng không cắt ngang.',
	'buildsearchindex_start' => 'Đang tạo Chỉ mục tìm kiếm. Có thể mất một ít thời gian, vui lòng không cắt ngang.',
	'buildindex_finished' => 'Đã hoàn tất! Việc tạo Chỉ mục đã tốn %num% giây',

	'filemappings_desc' => 'Dưới đây bạn có thể xem tổng quát mỗi weblog trong phiên cài đặt này cùng với các tập tin được chương trình Pivot tạo ra và những bộ mẫu định dạng nào đã được dùng để tạo ra các tập tin này. Việc này có thể rất hữu ích khi xác định các trở ngại trong việc tạo ra các tập tin.',

);


$lang['templates'] = array (
	'rollback' => 'Quay lại',
	'create_template' => 'Tạo bộ mẫu',
	'create_template_info' => 'Tạo bộ mẫu từ đầu',
	'no_comment' => 'Không có góp ý',
	'comment' => 'Góp ý*',
	'comment_note' => '(*Lưu ý: Các góp ý chỉ có thể được lưu ở lần lưu <b>đầu tiên</b> khi tạo hoặc chỉnh sửa)',
	'create' => 'Tạo bộ mẫu',
	'editing' => 'Biên tập',
	'filename' => 'Tên tập tin',
	'save_changes' => 'Lưu các thay đổi!',
	'save_template' => 'Lưu bộ mẫu!',		
);


//		Admin			\\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar']['xxx_title'] ones
$lang['admin'] = array (
	'seeusers' => 'Tạo, biên tập và xóa các tài khoản cá nhân',
	'seeconfig' => 'Biên tập tập tin cấu hình',
	'templates' => 'Tạo, biên tập và xóa các bộ mẫu định dạng',
	'maintenance' => 'Thực hiện việc bảo trì thường kỳ trên các tập tin, chẳng hạn \'Tạo lại tập tin\', \'Kiểm định cơ sở dữ liệu\', \'Tạo lại chỉ mục\' and \'Sao lưu\'.',
	'regen' => 'Tạo lại tất cả các trang mà chương trình đã sinh ra',
	'blogs' => 'Tạo, biên tập và xóa các weblog khác nhau mà Chương trình Pivot sẽ sinh ra',
);


//		Maintenance		\\	
$lang['maint'] = array (
	'title' => 'Bảo trì',	
	'gen_arc_title' => 'Tạo bộ sưu tập', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => 'Tạo lại tất cả bộ sưu tập', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'Kiểm tra các tập tin XML', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'Kiểm tra (và sửa chửa nếu cần) sự toàn vẹn của các tập tin XML', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => 'Sao lưu',
	'backup_text' => 'Tạo bản sao lưu của tất cả các tập tin chủ yếu của pivot',
);


//		Stats and referers		\\
$lang['stats'] = array (
	'show_last' => "Trình bày referrer cuối cùng",
	'20ref' => "20 referrer",
	'50ref' => "50 referrer",
	'allref' => "all referrer",
	'updateref' => "Cập nhật referer",
	'hostaddress' => 'Địa chỉ Host (địa chỉ ip)', 
	'whichpage' => 'Trang nào',

	'getting' => 'Nhận các tựa đề mới',
	'awhile' => 'Có thể mất một ít thời gian, vui lòng không cắt ngang.',
	'firstpass' => 'Lượt đầu tiên',
	'secondpass' => 'Lượt thứ hai',
	'nowuptodate' => 'Bản đồ referer đã được cập nhật',
	'finished' => 'Hoàn tất',
);


//		User Info		\\
	$lang['userinfo'] = array (
	'editfields' => 'Biên tập các mục của tài khoản người sử dụng',
	'desc_editfields' => 'Biên tập các mục mà người sử dụng dùng để mô tả họ',
	'username' => 'Tên người sử dụng',
	'pass1' => 'Mật mã',
	'pass2' => 'Mật mã (Xác nhận)',
	'email' => 'Email',
	'userlevel' => 'Cấp sử dụng',	
	'userlevel_desc' => 'Cấp sử dụng sẽ xác định những hoạt động này người sử dụng có thể thực hiện.',
	'language' => 'Ngôn ngữ',	
	'edituser' => 'Biên tập tài khoản người sử dụng',  //the link to.. well, edit the user (also the title)
	'edituserinfo' => 'Thay đổi thông tin về người sử dụng',
	'newuser' => 'Tạo tài khoản người sử dụng mới',
	'desc_newuser' => 'Tạo một tài khoản đăng nhập mới, cho phép gởi thông tin đến một weblog',
	'newuser_button' => 'Khởi tạo',
	'edituser_button' => 'Thay đổi',
	'pass_too_short' => 'Mật mã phải gồm tối thiểu 4 ký tự',
	'pass_dont_match' => 'Mật mã không đúng',
	'username_in_use' => 'Tên này đã được sử dụng',
	'username_too_short' => 'Tên phải gồm 3 ký tự hoặc hơn',
	'username_not_valid' => 'Tên người sử dụng chỉ có thể chứa các ký tự A-Z, 0-9 và dấu gạch dưới _',
	'not_good_email' => 'Đây không phải là một địa chỉ email hợp lệ',	
	'c_admin_title' => 'Xác nhận khởi tạo một quản trị viên',
	'c_admin_message' => 'Một '.$lang['userlevels']['1'].' có toàn quyền biên tập mọi bài viết, mọi góp ý và cấu hình. Bạn có chắc bạn khởi tạo một %s '.$lang['userlevels']['1'].'?',
);


//		Config Page		\\		
	$lang['config'] = array (
	'save' => 'Lưu các cài đặt',

	'sitename' => 'Tên của khu web',
	'defaultlanguage' => 'Ngôn ngữ mặc định',
	'defaultencoding' => 'Cách mã hóa hiện dùng',
	'defaultencoding_desc' => 'Mục này xác định các mã hóa được dùng(ví dụ utf-8 hoặc iso-8859-1). Bạn nên để trống trừ phi bạn có chủ ý như vậy. Nếu bạn để trống, chương trình sẽ sử dụng cấu hình đã định trong tập tin ngôn ngữ.',
	'siteurl' => 'Địa chỉ URL',
	'header_fileinfo' => 'Thông tin về tập tin',
	'localpath' => 'Đường dẫn',
	'debug_options' => 'Các tùy chọn kiểm lỗi',
	'debug' => 'Chế độ kiểm lỗi',
	'debug_desc' => 'Trình bày các thông tin kiểm lỗi ngẫu nhiên',
	'log' => 'Tập tin ghi dấu',
	'log_desc' => 'Giữ tập tin ghi dấu về các hoạt động khác nhau',

	'unlink' => 'Các tập tin không liên kết',
	'unlink_desc' => 'Một số thời điểm của máy chủ mà chế độ an toàn được bật có thể đòi hỏi tùy chọn này. Trên đa số máy chủ tùy chọn này không có tác dụng nào',
	'chmod' => 'Đổi thuộc tính tập tin',
	'chmod_desc' => 'Một số máy chủ đòi hỏi các tập tin được đổi thuộc tính theo một cách đặc biệt. Các giá trị thông dụng là \'0644\' và \'0755\'. Không nên đổi trừ phi bạn có chủ ý',
	'header_uploads' => 'Cấu hình tải tập tin lên',
	'upload_path' => 'Đường dẫn tải tập tin lên',	
	'upload_accept' => 'Những kiểu được chấp nhận',			
	'upload_extension' => 'Phần mở rộng mặc định',
	'upload_save_mode' => 'Ghi chồng',
	'make_safe' => 'Xóa tên tập tin',
	'c_upload_save_mode' => 'Tên tập tin tăng dần',
	'max_filesize' => 'Kích thước tối đa của tập tin',
	'header_datetime' => 'Ngày/Giờ',
	'timeoffset_unit' => 'Đơn vị thời gian',
	'timeoffset' => 'Thời gian',
	'header_extra' => 'Các cấu hình khác',
	'wysiwyg' => 'Dùng phần biên tập WYSIWYG',
	'wysiwyg_desc' => 'Xác định xem có phải phần biên tập WYSIWYG là mặc định không. Người dùng cá nhân có thể thay đổi điều này trong phần cấu hình của mình',
	'def_text_processing' => 'Xử lý văn bản mặc định', 
	'text_processing' => 'Xử lý văn bản',
	'text_processing_desc' => 'Xác định quá trình xử lý văn bản mặc định khi sử dụng phần mềm biên tập không wysiwyg. \'Chuyển đổi dấu ngắt dòng\' chỉ đơn thuần dấu ngắt dòng thành &lt;br&gt;-tag. <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> là một cách để học hỏi về kiểu định dạng của ngôn ngữ đánh dấu của trang web.',
	'none' => 'Không',
	'convert_br' => 'Chuyển đổi dấu ngắt dòng thành &lt;br /&gt;',
	'textile' => 'Mẫu nền',

	'setup_ping' => 'Cấu hình Ping',
	'ping_use' => 'Những người theo dõi Ping',
	'ping_use_desc' => 'Xác định việc những người theo dõi ví dụ website weblogs.com có được tự động thông báo bởi chương trình Pivot khi bạn gởi một bài viết mới. Những dịch vụ như blogrolling.com phụ thuộc vào sự gởi ping này',
	'ping_urls' => 'Địa chỉ URL để ping',
	'ping_urls_desc' => 'Bạn có thể cung cấp nhiều địa chỉ url để gởi ping đến. Không cần gõ vào "http://", vì nếu gõ nó sẽ không hoạt động. Chỉ cần đặt mỗi địa chỉ ở một dòng riêng, hoặc ngăn cách bởi ký tự ống. Một số địa chỉ máy chủ để gởi ping là:<br /><b>rpc.weblogs.com/RPC2</b> (địa chỉ gởi ping weblogs.com pinger được sử dụng rộng rãi nhất)<br /><b>pivotlog.net/pinger</b> (địa chỉ gởi ping pivotlog, chưa vận hành)<br /><b>rcs.datashed.net/RPC2</b> (địa chỉ gởi ping euro.weblogs.com)<br /><b>ping.blo.gs</b> (địa chỉ gởi ping blo.gs)<br />',

	'new_window' => 'Mở liên kết trong một cửa sổ mới',
	'emoticons' => 'Dùng emoticons',
	'javascript_email' => 'Mã hóa địa chỉ email?',	
	'new_window_desc' => 'Xác định tất cả các liên kết trong bài viết sẽ mở liên kết trong một cửa sổ mới hay không.',

	'mod_rewrite' => 'Dùng Filesmatch',
	'mod_rewrite_desc' => 'Nếu bạn dùng tùy chọn Apache\'s Filesmatch, chương trình Pivot sẽ tạo ra địa chỉ liên kết ví dụ như www.mysite.com/archive/2003/05/30/nice_weather thay vì www.mysite.com/pivot/entry.php?id=134. Không phải tất cả máy chủ đề hỗ trợ điều này, do đó vui lòng đọc kỹ phần liên quan trong sách hướng dẫn.',

	'search_index' => 'Tự động cập nhật Chỉ mục tìm kiếm',
	'search_index_desc' => 'Tùy chọn này xác định các tập tin chỉ mục tìm kiếm sẽ được cập nhật mỗi khi bạn gởi một bài viết mới hoặc thay đổi một bài viết sẳn có.',

	'default_allow_comments' => 'Mặc định cho phép đóng góp ý kiến',
	'default_allow_comments_desc' => 'Xác định bài viết được cho phép góp ý hay không.',	

	'default_introduction' => 'Phần giới thiệu/thân bài mặc định',
	'default_introduction_desc' => 'Tùy chọn này xác định các giá trị mặc định cho phần Giới thiệu và Thân bài khi một tác giả viết bài viết mới. Thông thường đây là một đoạn trống.',

	'upload_autothumb'	=> 'Hình thu gọn tự động',
	'upload_thumb_width' => 'Độ rộng hình thu gọn',
	'upload_thumb_height' => 'Chiều cao hình thu gọn',
	'upload_thumb_remote' => 'Mã chương trình xén ảnh từ xa',
	'upload_thumb_remote_desc' => 'Nếu máy chủ của bạn không có cài đặt những thư viện cần thiết để thực hiện việc xén ảnh, bạn có thể dùng mã chương trình xén ảnh từ xa.',


);


//		Weblog Config	\\
$lang['weblog_config'] = array (
	'edit_weblog' => 'Biên tập Weblog',
	'edit_blog' => 'Biên tập Weblogs',
	'new_weblog' => 'Tạo Weblog',
	'new_weblog_desc' => 'Thêm một Weblog mới',
	'del_weblog' => 'Hủy Weblog',
	'del_this_weblog' => 'Hủy weblog này',
	'create_new' => 'Tạo Weblog mới',
	'subw_heading' => 'Đối với mỗi subweblog tìm thấy trong bộ mẫu, bạn có thể cấu hình bộ mẫu nào chúng sử dụng, cũng như những chủ đề nào sẽ được xuất bản trong chúng',
	'create' => 'Kết thúc',
	
	'create_1' => 'Tạo / Biên tập Weblog, bước 1 trong 3',
	'create_2' => 'Tạo / Biên tập Weblog, bước 2 trong 3',
	'create_3' => 'Tạo / Biên tập Weblog, bước 2 trong 3',

	'name' => 'Tên Weblog',
	'payoff' => 'Payoff',
	'payoff_desc' => 'Payoff có thể được dùng như là một tiểu tựa hoặc một đoạn mô tả ngắn weblog của bạn',
	'url' => 'Địa chỉ URL trỏ đến Weblog',
	'url_desc' => 'Chương trình Pivot sẽ địa chỉ url của của weblog của bạn nếu bạn để khoản nhập này trống. Nếu bạn dùng weblog như là một phần của một bộ khung, hoặc một cài đặt trên máy chủ, bạn có thể dùng tùy chọn này để chép chồng lên nó.',
	'index_name' => 'Trang bìa (Index)',
	'index_name_desc' => 'Tên của tập tin gốc. Thông thường nó có tên \'index.html\' hoặc \'index.php\'.',

	'ssi_prefix' => 'SSI Prefix',
	'ssi_prefix_desc' => 'Nếu weblog của bạn sử dụng SSI (không khuyến cáo), bạn có thể dùng tùy chọn này để đặt trước các tên tập tin với tập tin dùng cho SSI, ví dụ \'index.shtml?p=\'. Bạn nên để tùy chọn này trống, trừ phi bạn cố ý làm vậy.',

	'front_path' => 'đường dẫn đến trang bìa',
	'front_path_desc' => 'Đường dẫn tương đối hoặc tuyệt đối đến thư mục nơi chương trình Pivot sẽ tạo ra trang bìa cho blog này.',
	'file_format' => 'Tên tập tin',
	'entry_heading' => 'Cấu hình của bài viết',
	'entry_path' => 'Đường dẫn đến các bài viết',
	'entry_path_desc' => 'Đường dẫn tương đối hoặc tuyệt đối đến thư mục nơi chương trình Pivot sẽ tạo ra các trang bài viết đơn (nếu bạn chọn không dùng \'bài viết động\')',
	'live_comments' => 'Bài viết động',
	'live_comments_desc' => 'Nếu bạn dùng \'bài viết động\', chương trình Pivot sẽ không tạo ra các tập tin cho mỗi bài viết riêng rẽ. Đây là cấu hình ưa chuộng.',
	'readmore' => 'Đoạn văn bản \'Đọc thêm\'',
	'readmore_desc' => 'Đoạn văn được dùng để chỉ còn phần văn bản khác ngoài phần đã hiện ở trang bìa. Nếu bạn để trống, chương trình Pivot sẽ dùng đoạn văn mặc định được xác định trong cài đặt ngôn ngữ',
	
	'arc_heading' => 'Cài đặt Bộ sưu tập',
	'arc_index' => 'Tập tin gốc',
	'arc_path' => 'Đường dẫn đến các bộ sưu tập',
	'archive_amount' => 'Số lượng bộ sưu tập',
	'archive_unit' => 'Kiểu bộ sưu tập',
	'archive_format' => 'Định dạng bộ sưu tập',
	'archive_none' => 'Không tạo bộ sưu tập',
	'archive_weekly' => 'Bộ sưu tập hàng tuần',
	'archive_monthly' => 'Bộ sưu tập hàng tháng',

	'archive_link' => 'Liên kết đến bộ sưu tầm',
	'archive_linkfile' => 'Định dạng danh sách bộ sưu tập',	
	'archive_order' => 'Thứ tự bộ sưu tập',
	'archive_ascending' => 'Tăng dần (cũ nhất ở đầu)',
	'archive_descending' => 'Giảm dần (mới nhất ở đầu)',

	'templates_heading' => 'Bộ mẫu định dạng',
	'frontpage_template' => 'Bộ mẫu định dạng cho trang bìa',
	'frontpage_template_desc' => 'Bộ mẫu định dạng trang gốc của weblog này.',
	'archivepage_template' => 'Bộ mẫu định dạng của bộ sưu tập',
	'archivepage_template_desc' => 'Bộ mẫu định dạng của các trang bộ sưu tập. Nó có thể giống như \'Bộ mẫu định dạng của trang bìa\'.',	
	'entrypage_template' => 'Bộ mẫu định dạng của trang bài viết',
	'entrypage_template_desc' => 'Bộ mẫu định dạng của các trang bài viết.',	
	'extrapage_template' => 'Bộ mẫu định dạng phụ',
	'extrapage_template_desc' => 'Bộ mẫu định dạng của bộ sưu tập và trang tìm kiếm search.php.',

	'shortentry_template' => 'Bộ mẫu định dạng của bài viết ngắn',
	'shortentry_template_desc' => 'Bộ mẫu định dạng của các bài viết được trình bày trong weblog hoặc bộ sưu tập.',	
	'num_entries' => 'Số bài viết',
	'num_entries_desc' => 'Số bài viết trình bày trong mỗi subweblog sẽ được trình bày ở trang bìa.',	
	'offset' => 'Số phụ',
	'offset_desc' => 'Nếu số phụ được đặt, số lượng bài viết bằng như vậy sẽ bị bỏ qua khi tạo ra một trang. Ví dụ bạn có thể dùng nó để tạo ra một danh sách \'Các bài viết trước\'.',
	'comments' => 'Cho phép Góp ý?',
	'comments_desc' => 'Xác định người sử dụng có thể góp ý cho bài viết trong subweblog này.',	

	'setup_rss_head' => 'Cấu hình RSS và Atom',
	'rss_use' => 'Tạo ra Feeds',
	'rss_use_desc' => 'Xác định chương trình Pivot sẽ tự động tạo ra một RSS và một Atomcho weblog này hay không.',
	'rss_filename' => 'Tên tập tin RSS',
	'atom_filename' => 'Tên tập tin Atom',
	'rss_path' => 'Đường dẫn đến Feed',
	'rss_path_desc' => 'Đường dẫn tương đối hoặc tuyệt đối đến thư mục nơi chương trình Pivot sẽ tạo ra các tập tin Feed.',
//	'rss_size' => 'Độ dài của Feed',	
//	'rss_size_desc' => 'Độ dài (số ký tự) của một bài viết trong các tập tin Feed',	
	'rss_full' => 'Tạo ra các Feed hoàn chỉnh',
	'rss_full_desc' => 'Xác định chương trình Pivot tạo ra các feed Atom và RSS hoàn chỉnh. Nếu đặt bằng \'không\' chương trình Pivot sẽ tạo ra các feed chỉ chứa những mô tả ngắn, vì thế làm cho các feed không hữu dụng lắm.',

	'lastcomm_head' => 'Cài đặt cho Góp ý cuối cùng',
	'lastcomm_amount' => 'Cho biết bao nhiêu',
	'lastcomm_length' => 'Cắt theo chiều dài',
	'lastcomm_format' => 'Định dạng',
	'lastcomm_format_desc' => 'Các cài đặt này xác định hình thức của \'góp ý cuối cùng\' trong trang bìa của weblog.',
	'lastcomm_redirect' => 'Chuyển hướng các Referers',
	'lastcomm_redirect_desc' => 'Để chống lại refererspam bạn có thể chọn định hướng lại các liên kết ra bên ngoài trong các góp ý, bằng cách đó các spammer không thể tăng tính ưu tiên trong kết quả tìm kiếm của Google.',

	'lastref_head' => 'Cấu hình cho các Referers cuối cùng',
	'lastref_amount' => 'Trình bày số lượng',
	'lastref_length' => 'Cắt theo chiều dài',
	'lastref_format' => 'Định dạng',
	'lastref_format_desc' => 'Cấu hình này xác định hình dáng của \'những referers cuối cùng\' trên trang bìa của weblog.',
	'lastref_graphic' => 'Sử dụng đồ họa',
	'lastref_graphic_desc' => 'Xác định nếu người referers cuối cùng dùng những icon nhỏ cho các động cơ tìm kiếm thông dụng nhất qua các khách viếng thăm.',
	'lastref_redirect' => 'Chuyển hướng Referers',
	'lastref_redirect_desc' => 'Để chống lại refererspam bạn có thể chọn định hướng lại các liên kết ra bên ngoài trỏ đến các referers, bằng cách đó các spammer không thể tăng tính ưu tiên trong kết quả tìm kiếm của Google.',

	'various_head' => 'Các cài đặt khác nhau',
	'emoticons' => 'Dùng Emoticons',
	'emoticons_desc' => 'Xác định có chuyển các emoticons như :-) thành dạng đồ họa tương đương.',
	'encode_email_addresses' => 'Mã hóa địa chỉ email',
	'encode_email_addresses_desc' => 'Xác định các địa chỉ email có được mã hóa trong javascript hay không, như là một cách bảo vệ khỏi những người săn spam.',
	'target_blank' => 'Trang trắng',
	'xhtml_workaround' => 'XHTML Workaround',
	'target_blank_desc' => 'Nếu đặt \'Đúng\', tất cả các liên kết được nhập trong bài viết của bạn sẽ được mở ra trong một của sổ duyệt mới. Nếu đặt \'XHTML workaround\', tất cả các liên kết sẽ có thuộc tính rel="external", điều này sẽ không làm hỏng tập tin XHTML thiết kế tốt',

	'date_head' => 'Các cài đặt trình bày ngày',
	'full_date' => 'Định dạng ngày đầy đủ',
	'full_date_desc' => 'Tùy chọn này xẽ xác định định dạng ngày và giờ đầy đủ. Thường được sử dụng vào đầu mỗi bài viết',
	'entry_date' => 'Ngày nhập bài',
	'diff_date' => 'Ngày khác',
	'diff_date_desc' => '\'Ngày khác \' thường được sử dụng kèm với \'Ngày nhập bài\'. Ngày nhập bài sẽ được trình bày trên mỗi bài viết, trong khi Ngày dạng khác chỉ được trình bày nếu ngày nhập khác với của bài viết trước.',
	'language' => 'Ngôn ngữ',
	'language_desc' => 'Tùy chọn Ngôn ngữ xác định ngôn ngữ của ngày và số trình bày cũng như sẽ xác định bộ mã ký tự hiện dùng (ví dụ iso-8859-1 hoặc koi8-r).',	

	'comment_head' => 'Các cài đặt của phần Góp ý',
	'comment_sendmail' => 'Gởi mail?',
	'comment_sendmail_desc' => 'Sau khi một góp ý được ghi, một mail sẽ được gởi những chủ của weblog này.',
	'comment_emailto' => 'Gởi mail đến',
	'comment_emailto_desc' => 'Xác định địa chỉ email mà mail sẽ được gởi đến. Nhớ ngăn cách các địa chỉ bằng một dấu phảy.',
	'comment_texttolinks' => 'Văn bản liên kết',
	'comment_texttolinks_desc' => 'Xác định những địa chỉ url và địa chỉ email có click chọn được không.',
	'comment_wrap' => 'Cuộn góp ý sau',
	'comment_wrap_desc' => 'Để ngăn những chuỗi ký tự dài khỏi làm hư dạng trình bày trang web của bạn, văn bản sẽ cuộn lại sau một số xác định các ký tự.',
	'comments_text_0' => 'nhãn cho \'không có góp ý nào\'',
	'comments_text_1' => 'nhãn cho \'một góp ý\'',
	'comments_text_2' => 'nhãn chó \'X góp ý\'',
	'comments_text_2_desc' => 'Đoạn văn bản được dùng để chỉ ra có bao nhiêu góp ý. Nếu bạn để trống tùy chọn này, chương trình Pivot sẽ dùng giá trị mặc định trong phần các cài đặt ngôn ngữ',

	'comment_pop' => 'Phần góp ý dạng cửa sổ nhỏ?',
	'comment_pop_desc' => 'Xác định trang góp ý (\'bài viết lẻ\') sẽ được trình bày dạng cửa sổ nhỏ (popup) hoặc trong của sổ duyệt web nguyên thủy.',
	'comment_width' => 'Độ rộng của cửa sổ nhỏ',
	'comment_height' => 'Chiều cao của cửa sổ nhỏ',
	'comment_height_desc' => 'Xác định độ rộng và chiều cao (tính bằng pixels)của Góp ý dạng của sổ nhỏ.',
			
	'comment_format' => "Định dạng của góp ý",
	'comment_format_desc' => "Tùy chọn này xác định định dạng của các góp ý cho các bài viết.",

	'comment_textile' => 'Cho phép hình mẫu nền',
	'comment_textile_desc' => 'Nếu tùy chọn được định là \'Đúng\', khác sẽ được sử dụng <a href="http://www.textism.com/tools/textile/" target="_blank">Mẫu nền</a> trong góp ý của họ.',

	'saved_create' => 'Weblog mới đã được tạo ra.',
	'saved_update' => 'Weblog đã được cập nhật.',
	'deleted' => 'Weblog đã bị xóa.',
	'confirm_delete' => 'Bạn sắp xóa một weblog. Bạn có chắc không?',	

	'blogroll_heading' => 'Cài đặt blogroller',
	'blogroll_id' => 'Blogroller số #',
	'blogroll_id_desc' => 'Bạn có thể tùy ý chọn blogroller của <a href="http://www.blogrolling.com" target="_blank">blogrolling.com</a> trong weblog của bạn. Blogroll là một dịch vụ xuất sắc để duy trì một danh sách các liên kết cho biết chúng được cập nhật gần đây hay không. Nếu bạn không muốn dùng chức năng này, bạn chỉ cần bỏ qua khoản nhập này. Bằng không khi bạn đăng nhập vào blogrolling.com, hãy đến \'get code\', bạn sẽ thấy những liên kết chứa blogroll số ID của bạn. Nó có thể có dạng như sau: 2ef8b42161020d87223d42ae18191f6d',
	'blogroll_fg' => 'Màu văn bản',
	'blogroll_bg' => 'Màu nền',
	'blogroll_line1' => 'Màu đường thẳng 1',
	'blogroll_line2' => 'Màu đường thẳng 2',
	'blogroll_c1' => 'Màu 1',
	'blogroll_c2' => 'Màu 2',
	'blogroll_c3' => 'Màu 3',
	'blogroll_c4' => 'Màu 4',
	'blogroll_c4_desc' => 'Những màu này xác định blogroll của sẽ trông như thế nào. Số 1 đến số 4 cho thấy một chỉ thị về mức độ mới cập nhật của một liên kết.',
);


$lang['upload'] = array (
	//		File Upload		\\
	'preview' => 'Hoàn chỉnh việc xem lướt danh sách',
	'thumbs' => 'Xem lướt các hình ảnh thu nhỏ',
	'create_thumb' => '(Tạo hình ảnh thu nhỏ)',
	'title' => 'Các tập tin',
	'thisfile' => 'Tải lên một tập tin mới:',
	'button' => 'Tải lên',
	'filename' => 'Tên tập tin',
	'thumbnail' => 'Hình thu nhỏ',
	'date' => 'Ngày',
	'filesize' => 'Kích thước tập tin',
	'dimensions' => 'Độ rồng x Chiều cao',		
	'delete_title' => 'Xóa hình',
	'areyousure' => 'Bạn có chắc bạn muốn xóa tập tin %s?',
	'picheader' => 'Xóa hình này?',
	'create' => 'tạo',
	'edit' => 'biên tập',

	'insert_image' => 'Chèn một hình',
	'insert_image_desc' => 'Để chèn một hình bạn cần tải lên hình ấy hoặc chọn một hình đã được tải lên.',
	'insert_image_popup' => 'Chèn một cửa sổ nhỏ hình',
	'insert_image_popup_desc' => 'Để tạo một cửa sổ nhỏ cho hình, bạn cần tải hình lên, hoặc chọn môt hình đã được tải lên. Kế đó chọn một đoạn văn bản hoặc một hình thu gọn kích hoạt của sổ nhỏ.',
	'choose_upload' => 'Tải lên',
	'choose_select' => 'hoặc chọn',
	'imagename' => 'Tên tập tin ảnh',
	'alt_text' => 'Phần chữ thay thế',
	'align' => 'Canh lề',
	'border' => 'Viền',
	'pixels' => 'pixels',
	'uploaded_as' => 'Tập tin của bạn đã được tải lên thành \'%s\'.',
	'not_uploaded' => 'Tập tin của bạn không tải lên được và lỗi sau đây đã xảy ra:',
	'center' => 'Canh giữa (mặd định)',
	'left' => 'Canh trái',
	'right' => 'Canh phải',
	'inline' => 'Kèm theo',		
	'notice_upload_first' => 'Đầu tiên bạn nên chọn hoặc tải lên một tập tin ảnh',
	'select_image' => 'Chọn tập tin ảnh',

	'for_popup' => 'Cho popup',		
	'use_thumbnail' => 'Dùng ảnh biểu tượng thu nhỏ',		
	'edit_thumbnail' => 'Biên tập biểu tượng thu nhỏ',		
	'use_text' => 'Dùng chữ',		
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => 'Chèn một liên kết',
	'insert_link_desc' => 'Chèn một liên kết, bằng cách gõ một địa chỉ trong khoản nhập dưới đây. Khách đến thăm website của bạn sẽ thấy tựa đề khi họ rà chuột lên liên kết.',
	'url' => 'URL',
	'title' => 'Tựa đề',
	'text' => 'Chữ',
);


//		Categories		\\
$lang['category'] = array (
	'edit_who' => 'Biên tập ai có thể gởi bài cho chủ đề \'%s\'',
	'name' => 'Tên',
	'users' => 'Người sử dụng',
	'make_new' => 'Tạo Chủ đề mới',
	'create' => 'Khởi tạo Chủ đề',
	'canpost' => 'Chọn những người sử dụng mà bạn muốn cho phép gởi bài vào chủ đề này',
	'same_name' => 'Một chủ đề cùng tên đã có rồi',
	'need_name' => 'Chủ đề này cần một tên',
	
	'allowed' => 'Cho phép',
	'allow' => 'Cho phép',
	'denied' => 'Từ chối',
	'deny' => 'Từ chối',
	'edit' => 'Biên tập chủ đề',
	
	'delete' => 'Xóa chủ đề',
	'delete_desc' => 'Chọn \'Đúng\' nếu bạn muốn xóa chủ đề này',

	'delete_message' => 'Trong phiên bản này của Pivot, chỉ tên chủ đề bị xóa. Trong các phiên bản sau, bạn có thể chọn điều gì bạn có thể làm với các bài viết trong chủ đề này.',
);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "Gởi bài",
	'preview_entry' => "Xem lại bài viết",

	'first' => 'đầu tiên',
	'last' => 'cuối cùng',
	'next' => 'kế',
	'previous' => 'trước',

	'jumptopage' => 'nhảy đến trang (%num%)',
	'filteron' => 'lọc dựa trên (%name%)',
	'filteroff' => 'tắt chức năng lọc',
	'title' => 'Tựa đề',
	'subtitle' => 'Tiểu tựa',
	'introduction' => 'Phần giới thiệu',
	'body' => 'Thân bài',
	'publish_on' => 'Xuất bài viết theo',
	'status' => 'Trạng thái',
	'post_status' => 'Trạng thái gửi bài',
	'category' => 'Chủ đề',
	'select_multi_cats' => '(Dùng Ctrl-click để chọn nhiều chủ đề)',
	'last_edited' => "Biên tập lần cuối vào ",
	'created_on' => "Biên tập vào",		
	'date' => 'Ngày',
	'author' => 'Tác giả',
	'code' => 'Mã',
	'comm' => '# Comm',
	'name' => 'Tên',
	'allow_comments' => 'Cho phép góp ý',

	'convert_lb' => 'Chuyển đổi dấu ngắt dòng',
	'always_off' => '(Luôn luôn tắt khi ở chế Wysiwyg)',
	'be_careful' => '(Cẩn thận với việc này!)',
	'edit_comments' => 'Biên tập các góp ý',
	'edit_comments_desc' => 'Biên tập các góp ý đã có với bài viết này',
	'edit_comment' => 'Biên tập Góp ý',
	'delete_comment' => 'Xóa góp ý',
	'block_single' => 'Khóa IP %s',
	'block_range' => 'Khóa dãy IP %s',
	'unblock_single' => 'Mở khóa IP %s',
	'unblock_range' => 'Mở khóa dãy IP %s',
	'trackback' => 'Trackback ping',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => 'Đánh dấu tất cả',
	'c_none' => 'Bỏ đánh dấu tất cả',
	'choose' => '- chọn một tùy chọn -',
	'publish' => 'Đặt trạng thái thành \'Xuất bài\'',
	'hold' => 'Đặt trạng thái thành \'Giữ lại\'',
	'delete' => 'Xóa chúng',
	'generate' => 'Xuất bài và sinh trang web',

	'with_checked_entries' => "Với các bài đã chọn, thực hiện việc:",
	'with_checked_files' => "Với các tập tin đã chọn, thực hiện việc:",
	'with_checked_templates' => 'Với các bộ mẫu đã chọn, thực hiện:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => 'không thể mở thư mục, kiểm quyền can thiệp của bạn.',
	'path_read' => 'không thể đọc thư mục, kiểm quyền can thiệp của bạn.',
	'path_write' => 'không thể ghi thư mục, kiểm quyền can thiệp của bạn.',

	'file_open' => 'không thể mở tập tin, kiểm quyền can thiệp của bạn.',
	'file_read' => 'không thể đọc tập tin, kiểm quyền can thiệp của bạn.',
	'file_write' => 'không thể ghi tập tin, kiểm quyền can thiệp của bạn.',
);


//		Notices			\\
$lang['notice'] = array (		
	'comment_saved' => "Góp ý đã được lưu.",
	'comment_deleted' => "Góp ý đã được xóa.",
	'comment_none' => "Bài viết này không có góp ý.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => 'Bình chọn \'%val%\' cho bài viết này',
	'good' => 'Tốt',
	'bad' => 'Xấu',
	'already' => 'Bạn đã bình chọn cho bài viết này',
	'register' => 'Bình chọn của bạn mức \'%val%\' đã được đăng ký',
);


$lang['comment'] = array (
	'register' => 'Góp ý của bạn đã được lưu.',
	'preview' => 'Bạn đang xem trước góp ý của bạn. Cần chắc chắn khi bấm nút \'Gởi góp ý\' để lưu nó.',
	'duplicate' => 'Góp ý của bạn không lưu được vì có vẻ nó trùng với một bài viết trước',
	'no_name' => 'Bạn nên gõ tên của bạn (hoặc bí danh) trong khoản nhập \'tên\'. Cần chắc chắn khi bấm nút \'Gởi góp ý\' để lưu nó thường trực.',
	'no_comment' => 'Bạn nên gõ cái gì đó vào trong khoản nhập \'góp ý\'. Cần chắc chắn khi bấm nút \'Gởi góp ý\' để lưu nó thường trực.',
);


$lang['comments_text'] = array (
	'0' => "Không có góp ý",
	'1' => "%num% góp ý",
	'2' => "%num% góp ý",
);


$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "Bộ sưu tập",
	'next_archive' => "Bộ sưu tập kế",
	'previous_archive' => "Bộ sưu tập trước",
	'last_comments' => "Góp ý gần đây nhất",
	'last_referrers' => "Những Referrers gần đây nhất",
	'calendar' => "Lịch",
	'links' => "Liên kết",
	'xml_feed' => "XML: RSS Feed",
	'powered_by' => "Sử dụng gói phần mềm",
	'name' => "Tên",
	'email' => "Email",
	'url' => "URL",
	'date' => "Ngày",		
	'comment' => "Góp ý",
	'ip' => "Địa chỉ IP",		
	'yes' => "Vâng",
	'no' => "Không",
	'emoticons' => "Emoticons",
	'emoticons_reference' => "Mở bảng Emoticon",
	'textile' => "Mẫu nền",
	'textile_reference' => "Mở bảng mẫu nền",
	'post_comment' => "Gởi góp ý",
	'preview_comment' => "Xem trước Góp ý",
	'remember_info' => "Ghi nhớ thông tin cá nhân?",
	'disclaimer' => "<b>In thu gọn:</b> Mọi tag html ngoại trừ &lt;b&gt; và &lt;i&gt; sẽ bị gỡ bỏ khỏi góp ý của bạn. Bạn có thể tạo ra liên kết bằng cách gõ vào địa chỉ url hoặc địa chỉ email.",	
	'search_title' => "Lết quả tìm kiếm",
	'search' => "Tìm!",
	'nomatches' => "Không có bài nào có chứa '%name%'. Thử từ khóa khác.",
	'matches' => "Những bài có chứa '%name%':",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Thay đổi các mục thông tin về người sử dụng',
	'edit' => 'Thay đổi',
	'create' => 'Khởi tạo',

	'dispname' => 'Tên xuất hiện',
	'intname' => 'Tên nội bộ',
	'intname_desc' => 'Tên nội bộ là tên của một đối tượng sẽ xuất hiện khi bạn bảo chương trình Pivot trình bày nó trong bộ mẫu định dạng.',
	'size' => 'Kích thước',
	'rows' => 'Hàng',
	'cols' => 'Cột',
	'maxlen' => 'Độ dài tối đa',
	'minlevel' => 'Cấp độ người dùng Tối thiểu',	
	'filter' => 'Lọc bỏ bởi',
	'filter_desc' => 'Bằng cách lọc bỏ đối tượng này, bạn giới hạn loại đối tượng nhập được sử dụng',
	'no_filter' => 'Không có gì hết',
	'del_title' => 'Xác nhận Xóa',
	'del_desc' => 'Xóa khoản nhập người sử dụng này (<b>%s</b>) sẽ cũng xóa tất cả thông tin mà người sử dụng đã lưu và các xuất hiện khác liên quan trong bộ mẫu định dạng.',	
	
	'already' => 'Tên này đã được sử dụng',
	'int' => 'Tên nội bộ phải gồm hơn 3 ký tự',
	'short_disp' => 'Tên trình bày phải gồm hơn 3 ký tự',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => 'Bookmarklets',
	'bm_add' => 'Thêm Bookmarklet.',
	'bm_withlink' => 'Piv » Mới',
	'bm_withlink_desc' => 'Bookmarklet này mở ra một cửa sổ với khung nhập bài mới có chứa một liên kết đến trang đã được mở ra từ đó.',

	'bm_nolink' => 'Piv » Mới',
	'bm_nolink_desc' => 'Bookmarklet này mở ra một cửa sổ với khung bài viết mới trống.',

	'bookmarklets_info' => 'Bạn có thể dùng các Bookmarklets để soạn nhanh các bài viết với Pivot. Để thêm một Bookmarklet cho cửa sổ trình duyệt của bạn, hãy dùng một trong các tùy chọn sau: (phần văn bản chính xác thay đổi tùy thuộc vào trình duyệt bạn đang sử dụng)',
	'bookmarklets_info_1' => 'Bấm và kéo bookmarklet đến thanh công cụ \'Liên kết\' hoặc nút \'Bookmarks\'.',
	'bookmarklets_info_2' => 'Bấm nút phải chuột trên bookmarklet và chọn \'Add to Bookmarks\'.',
);


// A little tool to help you check if the file is correct..
if (count(get_included_files())<2) {

	$groups = count($lang);
	$total = 0;
	foreach ($lang as $langgroup) {
		$total += count($langgroup);
	}
	echo "<h2>Tập tin ngôn ngữ không đúng!</h2>";
	echo "Tập tin này chứa $groups nhóm và tổng cộng $total nhãn.";

}

?>
