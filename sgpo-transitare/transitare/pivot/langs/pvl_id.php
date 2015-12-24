<?php
//Bahasa Indonesia

//the above line is needed so that pivot knows how to display it in the user info.
//it also needs to be on the 2rd line.

// Bahasa Indonesia translation of Pivot lang file
// Created by Rosalin (rosa@crysantium.net)
// Last updated by Pivot Dev. (www.pivotlog.net) 20.10.2005

// allow for different encoding for non-western languages
$encoding="iso-8859-1";
$langname="id";


//		General		\\
$lang['general'] = array (
	'yes' => 'Ya',	//affirmative
	'no' => 'Tidak',//negative
	'go' => 'Lanjut!',//proceed

	'minlevel' => 'Anda tidak mempunyai ijin untuk menggunakan fasilitas ini',	
	'email' => 'Email',			
	'url' => 'URL',
	'further_options' => "Pilihan Lain",
	'basic_view' => "Tampilan Dasar",
	'basic_view_desc' => "Hanya tampilkan field paling umum",
	'extended_view' => "Tampilan Penuh",
	'extended_view_desc' => "Tampilkan semua field yang dapat diubah",
	'select' => "Pilih",
	'cancel' => "Batal",
	'delete' => 'Hapus',
	'welcome' => "Selamat Datang di %build%.",
	'write' => "Tulis",
	'write_open_error' => "Kesalahan Penulisan. Tidak dapat membuka file untuk ditulis",
	'write_write_error' => "Kesalahan Penulisan. Tidak dapat menulis ke file",
	'done' => "Selesai!",
	'shortcuts' => "Shortcut",
	'cantdelete' => "Anda tidak dapat menghapus entri %title%!",
	'cantdothat' => "Anda tidak dapat melakukannya dengan entri %title%!",
	'cantdeletelast' => "Anda tidak dapat menghapus entri terakhir. Anda harus membuat sebuah entri baru, sebelum menghapus entri ini",
);


$lang['userlevels'] = array (
		'Superadmin', 'Administrator', 'Advanced', 'Normal', 'Moblogger'
		//  this one might be a bit hard to translate, but basically it's an order of
		//  power or trust.  Superadmin would be the person in charge - no one can do
		//  anything about his decisions. Admin is only regulated by the Superadmin, 
		//  Advanced by the Admin and Superadmin, etc..
		//  Just get the idea of it.
);


$lang['numbers'] = array (
	'nol', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas', 'duabelas', 'tigabelas', 'empatbelas', 'limabelas', 'enambelas'
);


$lang['months'] = array (
	'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
);	

		
$lang['months_abbr'] = array (
	'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agts', 'Sep', 'Okt', 'Nov', 'Des'
);


$lang['days'] = array (
	'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'
);


$lang['days_abbr'] = array (
	'Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'	
);


$lang['days_calendar'] = array (
	'M', 'S', 'S', 'R', 'K', 'J', 'S'
); 


$lang['datetime_words'] = array (
	'Tahun', 'Bulan', 'Minggu', 'Hari', 'Jam', 'Menit', 'Detik'	//the actual words for them.
);


//		Login Page		\\
$lang['login'] = array (
	'title' => 'Login',
	'name' => 'Username',
	'pass' => 'Password',
	'remember' => 'Ingat',
	'rchoice' => array (
		'0' => 'Tidak ada yang perlu diingat',
		'1' => 'Username dan Passwordku',
		'2' => 'Bahwa saya ingin tetap login'
	),
	'delete_cookies_desc' => 'Jika Anda yakin bahwa Anda menggunakan username dan password yang 	tepat, tetapi Anda<br /> mempunyai masalah untuk masuk, Anda dapat mencoba menghapus Cookies untuk domain ini:',
	'delete_cookies' => 'Hapus cookies',
	'retry' => 'Username/Password Keliru',
	'banned' => 'Anda telah gagal memperoleh akses dalam 10 kesempatan. Akibatnya, IP ini telah dilarang untuk login selama 12 jam.',

);


//		Main Bar		\\
	$lang['userbar'] = array (
	'main' => 'Overview',
	'entries' => 'Entri',
	'submit' => 'Entri Baru',
	'comments' => 'Komentar',
	'trackbacks' => 'Trackback',
	'modify' => 'Ubah Entri',
	'userinfo' => 'Info-ku',
	'u_settings' => 'Setting',
	'u_marklet' => 'Bookmark',
	'files' => 'Atur Media',
	'upload' => 'Upload',
	'stats' => 'Statistik',
	'admin' => 'Administrasi',

	'main_title' => 'Global Overview dari Pivot',
	'entries_title' => 'Overview Entri',
	'submit_title' => 'Tulis dan Publikasikan sebuah entri baru',
	'comments_title' => 'Ubah atau Hapus Komentar',		
	'trackbacks_title' => 'Ubah atau Hapus Trackback',		
	'modify_title' => 'Ubah Entri',
	'userinfo_title' => 'Tampilkan Data Pribadi',
	'u_settings_title' => 'Ubah Setting Pribadi',
	'u_marklet_title' => 'Buat Bookmark',
	'files_title' => 'Atur dan Upload Media',
	'upload_title' => 'Upload File',
	'uploaded_success' => 'File telah di-upload',
	'stats_title' => 'Tampilkan Log dan Statistik.',
	'updatetitles_title' => 'Tampilkan Log dan Statistik.',
	'admin_title' => 'Overview dari Administrasi',
	'recent_entries' => 'Entri Terbaru',
	'recent_comments' => 'Komentar Terbaru',
);


$lang['adminbar'] = array (
	//		Admin Bar		\\
	//'trebuild' => 'Rebuild all Files', rolled into maintenance
	'seeusers' => 'User',
	'seeconfig' => 'Konfigurasi',
	'filemappings' => 'File Mapping',
	'templates' => 'Template',
	'maintenance' => 'Pemeliharaan',
	'regen' => 'Buat Kembali Semua File',
	'blogs' => 'Weblog',
	'categories' => 'Kategori',
	'verifydb' => 'Verifikasi Database',
	'buildindex' => 'Buat Kembali Index',
	'buildsearchindex' => 'Buat Kembali Index Pencarian',
	'buildfrontpage' => 'Buat Kembali Halaman Depan',
	'sendping' => 'Kirim Ping',


	'backup' => 'Backup',
	'description' => 'Deskripsi',
	'conversion' => 'Konversi',
	'seeusers_title' => 'Buat, Ubah dan Hapus Pengguna',
	'userfields' => 'Informasi Field User',
	'userfields_title' => 'Buat, Ubah dan Hapus Informasi Field Pengguna',
	'seeconfig_title' => 'Ubah File Konfigurasi',
	'filemappings_title' => 'Tampilkan dan overview dari file di situs Anda yang dibuat dan oleh weblog dalam Pivot ini',
	'templates_title' => 'Buat, Ubah dan Hapus Template',
	'maintenance_title' => 'Lakukan Pemeliharaan Rutin pada File-file Pivot',
	'regen_title' => 'Buat kembali File dan Arsip yang di-generate Pivot ',
	'blogs_title' => 'Buat, Ubah dan Hapus Weblog',
	'blogs_edit_title' => 'Ubah Setting Weblog Untuk ',
	'categories_title' => 'Buat, Ubah dan Hapus Kategori',	
	'verifydb_title' => 'Verifikasi Integritas Database Anda',
	'buildindex_title' => 'Buat Kembali Index Database Anda',
	'buildsearchindex_title' => 'Buat Kembali Index Pencarian, untuk memungkinkan pencarian entri',
	'buildfrontpage_title' => 'Buat Kembali Halaman Depan, Arsip Terakhir dan RSS File untuk setiap Weblog.',
	'backup_title' => 'Buat sebuah Backup dari Entri Anda',
	'backup_config' => 'Backup dari Konfigurasi File',
	'backup_config_desc' => 'Ini akan memungkinkan Anda men-download sebuah file zip yang berisi konfigurasi file Anda',
	'ipblocks' => 'IP blok',
	'ipblocks_title' => 'Lihat dan Ubah alamat IP yang di-blok.',
	'ipblocks_stored' => 'Alamat-alamat IP telah disimpan.',
	'ipblocks_store' => 'Simpan alamat IP ini',
	'ignoreddomains' => 'Ignored Domains',
	'ignoreddomains_title' => 'Lihat dan Ubah Domains yang diacuhkan.',
	'ignoreddomains_stored' => 'Domains yang diacuhkan telah disimpan.',
	'ignoreddomains_store' => 'Simpan Beberapa Domains yang diacuhkan ini', 
	'fileexplore' => 'File Explorer',
	'fileexplore_title' => 'Lihat file (baik file teks maupun database)',
	'sendping_title' => 'Kirim Ping untuk meng-Update Tracker.',
	'buildindex_start' => 'Proses membuat Index sedang berlangsung. Hal ini akan memerlukan sedikit waktu, jadi mohon agar tidak diganggu.',
	'buildsearchindex_start' => 'Proses pembuatan Index Pencarian sedang berlangsung. Hal ini akan memerlukan sedikit waktu, jadi mohon agar tidak diganggu.',
	'buildindex_finished' => 'Selesai! Pembuatan index memerlukan %num% detik',

	'filemappings_desc' => 'Di bawah ini Anda dapat melihat overview dari setiap weblog dalam instalasi Pivot ini, berikut file-file yang dibuat oleh Pivot dan template yang digunakan untuk membuat file-file ini. Ini akan sangat berguna ketika pinpointing bermasalah dengan pembuatan file-file.',
	
	'debug' => 'Buka jendela Debug',

	'latest_pivot_news' => "Berita Pivot Terbaru",
	'remove_setup_header' => "Script peng-install Pivot tersedia",
	'remove_setup' => "Script peng-install Pivot 'pivot-setup.php' masih ada di folder induk. Anda harus waspada bahwa hal ini adalah sebuah resiko keamanan yang potensial. Kami menyarankan Anda untuk memindahkannya, atau mengubah namanya, sehingga tidak dapat dijalankan oleh orang yang berniat jahat.",
	
);


$lang['templates'] = array (
	'rollback' => 'Rollback',
	'create_template' => 'Buat template',
	'create_template_info' => 'Buat sebuah template Pivot dari awal', 
	'no_comment' => 'Tidak ada komentar',
	'comment' => 'Komentar*',
	'comment_note' => '(*Catatan : Komentar hanya dapat disimpan ketika <b>pertama kali</b> menyimpan perubahan atau pembuatan)',
	'create' => 'Buat template',
	'editing' => 'Proses Pengubahan',
	'filename' => 'Nama File',
	'save_changes' => 'Simpan Perubahan!',
	'save_template' => 'Simpan template!',		
	'aux_template' => 'Template Tambahan',
	'sub_template' => 'Subtemplate',
	'standard_template' => 'Template Normal',
	'feed_template' => 'Feed template', 
	'css_template' => 'File CSS',
	'txt_template' => 'File Text',	
	'php_template' => 'File PHP',	
);


//		Admin			\\
// bob notes: Mark made these, i think they should be replaced by the 'adminbar']['xxx_title'] ones
$lang['admin'] = array (
	'seeusers' => 'Buat, ubah dan hapus Pengguna',
	'seeconfig' => 'Ubah Konfigurasi File',
	'templates' => 'Buat, ubah dan hapus Template',
	'maintenance' => 'Lakukan Pemeliharaan Rutin pada File-file Pivot, seperti \'Membuat Kembali File\', \'Verifikasi Database\', \'Buat Kembali Index\' and \'Backup\'.', 
	'regen' => 'Buat kembali semua halaman yg di-generate Pivot',
	'blogs' => 'Buat, Ubah dan Hapus Weblog  Pivot yang berbeda yang akan dipublikasikan',
);


//		Maintenace		\\	
$lang['maint'] = array (
	'title' => 'Pemeliharaan',	
	'gen_arc_title' => 'Generate Arsip', /* bob notes: redundant, see 'regen' */
	'gen_arc_text' => 'Regenerate semua arsip Anda', /* bob notes: redundant, see 'regen' */
	'xml_title' => 'Verifikasi File-file XML', /* bob notes: replace with more general 'Verify DB' */
	'xml_text' => 'Verifikasi (dan perbaiki jika perlu) integritas dari file-file XML', /* bob notes: replace with more general 'Verify DB' */
	'backup_title' => 'Backup',
	'backup_text' => 'Buat backup dari semua file-file penting Pivot.',
);


//		Stats and referers		\\
$lang['stats'] = array (
	'show_last' => "Tampilkan yang terakhir",
	'20ref' => "20 referrer",
	'50ref' => "50 referrer",
	'allref' => "semua referrer",
	'showunblocked' => "hanya baris yang tidak diblok",
	'showall' => "baik baris yang diblok maupun tidak",
	'updateref' => "Update referer ke title mappings", 
	'hostaddress' => 'Alamat Host (alamat IP)', 
	'whichpage' => 'Halaman Mana',

	'getting' => 'Membuat Nama Baru', 
	'awhile' => 'Ini akan berlangsung agak lama, mohon jangan diganggu.',
	'firstpass' => 'Pass pertama',
	'secondpass' => 'Pass kedua',
	'nowuptodate' => 'Referer-title mapping Anda sudah diperbaharui.',
	'finished' => 'Selesai',
);


//		User Info		\\
	$lang['userinfo'] = array (
	'editfields' => 'Ubah Field Pengguna',
	'desc_editfields' => 'Ubah field yang dapat digunakan user untuk mendeskripsikan dirinya sendiri.',
	'username' => 'Username',
	'pass1' => 'Password',
	'pass2' => 'Password (konfirmasi)',
	'email' => 'Email',
	'nickname' => 'Nama Kecil',	
	'userlevel' => 'Tingkatan Pengguna',	
	'userlevel_desc' => 'Tingkatan Pengguna akan menentukan apa yang dapat dilakukan pengguna dalam Pivot.',
	'language' => 'Bahasa',	
	'lastlogin' => 'Login Terakhir',
	'edituser' => 'Ubah Pengguna',  //the link to.. well, edit the user (also the title)
	'edituserinfo' => 'Ubah Informasi Pengguna',
	'selfreg' => 'Pendaftaran otomatis',
	'newuser' => 'Buat Pengguna Baru',
	'desc_newuser' => 'Buat account login baru untuk Pivot, yang memungkinkan bagi pengiriman weblog baru.',
	'newuser_button' => 'Buat',
	'edituser_button' => 'Ubah',
	'pass_too_short' => 'Password terdiri atas minimal 4 huruf.',
	'pass_equal_name' => 'Password tidak boleh sama dengan nama pengguna.',
	'pass_dont_match' => 'Password tidak cocok',
	'username_in_use' => 'Nama Pengguna ini sudah terpakai',
	'username_too_short' => 'Nama terdiri atas 3 huruf atau lebih',
	'username_not_valid' => 'Nama pengguna hanya dapat berisi karakter alfanumerik (A-Z, 0-9) dan garis bawah (_).',
	'not_good_email' => 'Alamat email Anda tidak valid',	
	'c_admin_title' => 'Konfirmasi pembuatan administrator',
	'c_admin_message' => 'Seorang '.$lang['userlevels']['1'].' mempunyai akses penuh ke Pivot, dapat mengubah semua item baru, semua komentar dan mengubah semua setting. Anda yakin mau menambah  %s seorang '.$lang['userlevels']['1'].'?',
);


//		Config Page		\\		
	$lang['config'] = array (
	'save' => 'Simpan Setting',

	'sitename' => 'Nama Situs',
	'defaultlanguage' => 'Bahasa Default',
	'defaultencoding' => 'Gunakan encoding',
	'defaultencoding_desc' => 'Ini menyatakan encoding yang digunakan (seperti utf-8 atau iso-8859-1). Anda harus membiarkannya kosong, kecuali Anda tahu benar apa yang Anda lakukan. Jika ini dibiarkan kosong, setting yang cocok akan digunakan dari file bahasa.',
	'defaulttheme' => 'Tema',
	'selfreg' => 'Pendaftaran otomatis dimungkinkan',
	'selfreg_desc' => 'Mengubah ini ke yang memungkinkan orang untuk mendaftar sebagai  (normal) pengguna sehingga dapat mengirim entri. (Ini bukan pengguna "komentar".)',
	'siteurl' => 'Situs URL',
	'header_fileinfo' => 'Informasi File',
	'localpath' => 'Path Lokal',
	'debug_options' => 'Opsi Debug',
	'debug' => 'Mode Debug',
	'debug_desc' => 'Tampilkan informasi debug secara acak, di sana sini..',
	'log' => 'File-file Log',
	'log_desc' => 'Simpan file-file log dari berbagai kegiatan',

	'unlink' => 'File yang tidak mempunyai link',
	'unlink_desc' => 'Beberapa instance dari server di mana safe_mode yang tidak menyenangkan diaktifkan, kemungkinan perlu bermain dengan opsi ini. Pada kebanyakan server opsi ini tidak akan mempunyai dampak.',
	'chmod' => 'Chmod File Pada',
	'chmod_desc' => 'Beberapa server mensyaratkan bahwa file yang telah dibuat di-chmod dengan cara yang spesifik. Nilai umumnya adalah \'0644\' dan \'0755\'. Jangan mengubah ini, kecuali Anda tahu apa yang sedang Anda lakukan.',
	'header_uploads' => 'Setting File Upload',
	'upload_path' => 'Path File Upload',	
	'upload_accept' => 'Tipe yang dapat diterima',			
	'upload_extension' => 'Extensi Default',
	'upload_save_mode' => 'Overwrite',
	'make_safe' => 'Bersihkan Nama File',
	'c_upload_save_mode' => 'Tambahkan Nama File',
	'max_filesize' => 'Ukuran File Maksimum',
	'header_datetime' => 'Tanggal/Waktu',
	'timeoffset_unit' => 'Unit Waktu Offset',
	'timeoffset' => 'Waktu Offset',
	'header_extra' => 'Berbagai Setting',
	'wysiwyg' => 'Gunakan Editor Wysiwyg',
	'wysiwyg_desc' => 'Tentukan apakah Editor Wysiwyg aktif secara default. Pengguna individual dapat mengganti ini pada setting \'Info-ku\'.',
	'basic_view' => 'Gunakan Tampilan Dasar',
	'basic_view_desc' => 'Tentukan apakah \'Entri Baru\' dibuka pada Tampilan Dasar atau pada Tampilan Penuh.',
	'def_text_processing' => 'Pengolah Teks Default', 
	'text_processing' => 'Pengolah Teks',
	'text_processing_desc' => 'Tentukan pengolah teks default, ketika pengguna menggunakan editor non-wysiwyg. \'Ubah Linebreak\' hanya mengubah linebreak ke sebuah &lt;br&gt;-tag. <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> adalah sebuah markup style yang sangat berguna, juga mudah dipelajari.',
	'none' => 'Tidak ada',
	'convert_br' => 'Ubah Linebreak ke &lt;br /&gt;',
	'textile' => 'Textile',
	'markdown' => 'Markdown',
	'markdown_smartypants' => 'Markdown dan Smartypants',
	
	'allowed_cats' => 'Kategori yang diperbolehkan',
	'allowed_cats_desc' => 'Pengguna ini diperbolehkan untuk mengirim entri dalam kategori yang terpilih',
	'delete_user' => "Hapus pengguna",
	'delete_user_desc' => "Anda dapat menghapus pengguna ini jika Anda mau. Semua kirimannya tetap ada, tetapi mereka tidak akan dapat login lagi",
	'delete_user_confirm' => 'Anda sedang menghilangkan akses untuk %s. Anda yakin ingin melakukan ini?',
	
	'setup_ping' => 'Ping Setup',
	'ping_use' => 'Ping update trackers',
	'ping_use_desc' => 'Ini menentukan apakah update trackers seperti weblogs.com akan diberitahu secara otomatis oleh Pivot jika Anda mengirim sebuah entri baru. Layanan seperti blogrolling.com tergantung pada ping-ping ini',	
	'ping_urls' => 'URL ke ping',
	'ping_urls_desc' => 'Anda dapat menyediakan beberapa URL untuk dikirimi ping. Jangan memasukkan bagian http:// , karena akan membuatnya tidak berfungsi. Tempatkan saja setiap server pada sebuah baris baru, atau dipisahkan oleh sebuah karakter pipa (\|). Beberapa server yang umum di-ping:<br /><b>rpc.weblogs.com/RPC2</b> (tukang ping weblogs.com, salah satu yang paling sering digunakan)<br /><b>pivotlog.net/pinger</b> (tukang ping pivotlog, belum beroperasi)<br /><b>rcs.datashed.net/RPC2</b> (tukang ping euro.weblogs.com)<br /><b>ping.blo.gs</b> (tukang ping blo.gs)<br />',

	'setup_tb' => 'Setup Trackback',
	'tb_email' => 'Email',
	'tb_email_desc' => 'Jika diatur, sebuah email akan dikirim ke alamat ini ketika sebuah Tracback ditambahkan.',

	'new_window' => 'Membuka link pada window baru',
	'emoticons' => 'Gunakan emoticon',
	'javascript_email' => 'Encode Alamat Email?',	
	'new_window_desc' => 'Menentukan apakah semua link yang digunakan dalam entri akan dibuka pada sebuah window baru.',
	'mod_rewrite' => 'Gunakan Mod_rewrite',
	'mod_rewrite_desc' => 'Jika Anda menggunakan opsi Mod_rewrite Apache, Pivot akan membuat URL seperti www.mysite.com/archive/2003/05/30/nice_weather, daripada www.mysite.com/pivot/entry.php?id=134. Tidak semua server mendukung ini, jadi bacalah bagian pada manual mengenai ini.',
	'mod_rewrite_1' => 'Ya, seperti /archive/2005/04/28/title_of_entry',
	'mod_rewrite_2' => 'Ya, seperti /archive/2005-04-28/title_of_entry',
	'mod_rewrite_3' => 'Ya, seperti /entry/1234',
	'mod_rewrite_4' => 'Ya, seperti /entry/1234/title_of_entry',

	'search_index' => 'Perbaharui Index Pencarian secara Otomatis',
	'search_index_desc' => 'Ini akan menentukan apakah Index Pencarian file akan di-update setiap kali Anda mengirimkan sebuah entri baru, atau Anda mengganti yang sudah ada.',

	'default_allow_comments' => 'Ijinkan komentar secara default',
	'default_allow_comments_desc' => 'Menentukan apakah entri diatur untuk memperbolehkan komentar atau tidak.',	

  'maxhrefs' => 'Jumlah Link',
  'maxhrefs_desc' => 'Jumlah hyperlink maksimal yang diperbolehkan dalam komentar. Berguna untuk menghilangkan komentar yang menggangu dari spammer. Diatur ke 0 untuk jumlah link yang tidak terbatas.',
  'rebuild_threshold' => 'Buat Kembali Threshold',
  'rebuild_threshold_desc' => 'Jumlah second yang diperlukan untuk rebuild, sebelum Pivot me-refresh halaman. Defaultnya adalah 28, tetapi jika Anda bermasalah dengan rebuild, coba turunkan angka ini ke 10.',
	'default_introduction' => 'Pendahuluan/Isi Default',
	'default_introduction_desc' => 'Ini akan menentukan nilai default untuk Pendahuluan dan Isi ketika seseorang menuliskan entri baru. Biasanya ini akan menjadi paragraf kosong, yang paling masuk akal secara semantik.',

	'upload_autothumb'	=> 'Thumbnail Otomatis',
	'upload_thumb_width' => 'Lebar Thumbnail',
	'upload_thumb_height' => 'Tinggi Thumbnail',
	'upload_thumb_remote' => 'Script Remote cropping',
	'upload_thumb_remote_desc' => 'Jika pada server Anda tidak ter-install library yang diperlukan untuk melakukan cropping gambar, Anda dapat menggunakan script remote cropping.',

	'extensions_header' => 'Direktori Extensi',
	'extensions_desc'   => 'Direktori \'extensi\' adalah tempat untuk menyimpan tambahan Anda ke Pivot.
		Hal ini membuat update menjadi jauh lebih mudah. Lihat Docs untuk informasi lebih lengkap.',
	'extensions_path'   => 'Path Direktori Extensi',

);


//		Weblog Config	\\
$lang['weblog_config'] = array (
	'edit_weblog' => 'Ubah Weblog',
	'edit_blog' => 'Ubah Weblogs',
	'new_weblog' => 'Weblog Baru',
	'new_weblog_desc' => 'Tambahkan sebuah Weblog Baru',
	'del_weblog' => 'Hapus Weblog',
	'del_this_weblog' => 'Hapus weblog ini.',
	'create_new' => 'Buat Weblog Baru',
	'subw_heading' => 'Untuk setiap subweblog yang ditemukan dalam template, Anda dapat mengkonfigurasi template apa yang digunakan, juga kategori yang dipublikasikan di dalamnya.',
	'create' => 'Selesai',
	
	'create_1' => 'Buat / Ubah Weblog, langkah 1 dari 3',
	'create_2' => 'Buat / Ubah Weblog, langkah 2 dari 3',
	'create_3' => 'Buat / Ubah Weblog, langkah 3 dari 3',

	'name' => 'Nama Weblog',
	'payoff' => 'Payoff',
	'payoff_desc' => 'Payoff dapat digunakan sebagai sub judul atau deskripsi singkat dari weblog Anda',
	'url' => 'URL ke Weblog',
	'url_desc' => 'Pivot akan menentukan URL weblog Anda jika Anda membiarkan field ini kosong. Jika Anda menggunakan weblog Anda sebagai bagian dari frameset, atau yang termasuk dalam serverside, Anda dapat menggunakan ini untuk mengatasinya.',
	'index_name' => 'Halaman Depan (Index)',
	'index_name_desc' => 'Nama file dari file-index. Umumnya diberi nama seperti \'index.html\' atau \'index.php\'.',

	'ssi_prefix' => 'Prefix SSI',
	'ssi_prefix_desc' => 'Jika weblog Anda menggunakan SSI (yang tidak direkomendasikan), Anda dapat menggunakan ini untuk mengawali nama file di Pivot dengan nama file yang digunakan untuk SSI. Contoh: \'index.shtml?p=\'. Sebaiknya Anda membiarkannya kosong, kecuali Anda tahu apa yang Anda lakukan.',

	'front_path' => 'Path Halaman Depan',
	'front_path_desc' => 'Path relatif atau path absolut ke direktori di mana Pivot akan membuat halaman depan blog ini.',
	'file_format' => 'Nama File',
	'entry_heading' => 'Setting Entri',
	'entry_path' => 'Path Entri',
	'entry_path_desc' => 'Path relatif atau absolut ke direktori di mana Pivot akan membuat halaman entri tunggal (jika Anda memilih tidak menggunakan  \'live entri\')',
	'live_comments' => 'Live entri',
	'live_comments_desc' => 'Jika Anda menggunakan \'Live entri\', Pivot tidak perlu men-generate file untuk setiap entri. Ini adalah entri yang lebih disukai.',
	'readmore' => '\'Baca Tambahan\' Teks',
	'readmore_desc' => 'Teks yang digunakan untuk menandakan adanya teks tambahan dalam entri ini dibanding yang terlihat pada halaman depan. Jika Anda membiarkannya kosong, Pivot akan menggunakan default seperti yang didefinisikan dalam Setting Bahasa',
	
	'arc_heading' => 'Setting Arsip',
	'arc_index' => 'File Index',
	'arc_path' => 'Path Arsip',
	'archive_amount' => 'Jumlah Arsip',
	'archive_unit' => 'Tipe Arsip',
	'archive_format' => 'Format Arsip',
	'archive_none' => 'Tidak Ada Arsip',
	'archive_weekly' => 'Arsip Mingguan',
	'archive_monthly' => 'Arsip Bulanan',
	'archive_yearly' => 'Arsip Tahunan',

	'archive_link' => 'Link Arsip',
	'archive_linkfile' => 'Format Daftar Arsip',	
	'archive_order' => 'Order Arsip',
	'archive_ascending' => 'Ascending (yang terlama dulu)',
	'archive_descending' => 'Descending (yang terbaru dulu)',

	'templates_heading' => 'Template',
	'frontpage_template' => 'Template Halaman Depan',
	'frontpage_template_desc' => 'Template yang menentukan tampilan dari halaman index weblog ini.',
	'archivepage_template' => 'Template Halaman Arsip',
	'archivepage_template_desc' => 'Template yang menentukan tampilan arsip Anda. Ini bisa sama dengan \'Template Halaman Depan\'.',	
	'entrypage_template' => 'Template Halaman Entri',
	'entrypage_template_desc' => 'Template yang menentukan layout dari setiap entri.',	
	'extrapage_template' => 'Template ekstra',
	'extrapage_template_desc' => 'Template yang menentukan tampilan arsip Anda dan halaman search.php .',

	'shortentry_template' => 'Template Entri Pendek',
	'shortentry_template_desc' => 'Template yang menentukan layout dari setiap entri, karena ditampilkan di dalam weblog atau arsip.',	
	'num_entries' => 'Jumlah Entri',
	'num_entries_desc' => 'Jumlah entri dalam subweblog yang akan ditampilkan di halaman depan..',	
	'offset' => 'Offset',
	'offset_desc' => 'Jika Offset diset ke sebuah angka, jumlah entri tersebut akan dilewati ketika men-generate halaman itu. Anda dapat menggunakan ini untuk membuat sebuah daftar \'Entri Sebelumnya\', sebagai contoh.',
	'comments' => 'Mau Komentar?',
	'comments_desc' => 'Menentukan apakah pengguna dapat memberi komentar pada entri di subweblog ini.',	

	'publish_cats' => 'Publikasikan kategori ini',

	'setup_rss_head' => 'RSS dan Konfigurasi Atom',
	'rss_use' => 'Generate Feeds',
	'rss_use_desc' => 'Ini menentukan apakah Pivot akan men-generate sebuah RSS dan sebuah Atom Feed secara otomatis atau tidak untuk weblog ini.',
	'rss_filename' => 'Nama File RSS',
	'atom_filename' => 'Nama File Atom',
	'rss_path' => 'Feed Path',
	'rss_path_desc' => 'Path relatif atau absolut ke direktori di mana Pivot akan membuat file-file Feed.',
//	'rss_size' => 'Panjang Entri Feed',	/* DEPRECATED */
//	'rss_size_desc' => 'Panjang sebuah entri (dalam karakter) pada file-file Feed', /* DEPRECATED */
	'rss_full' => 'Buat Feed Penuh',
	'rss_full_desc' => 'Menentukan apakah Pivot membuat Atom dan RSS Feed Penuh. Jika diatur ke \'tidak\' Pivot akan membuat Feed yang hanya berisi deskripsi pendek, sehingga membuat feed Anda kurang bermanfaat.',
	'rss_link' => 'Link Feed',
	'rss_link_desc' => 'Link untuk dikirim bersama Feed, untuk mengarah ke halaman utama. Jika dibiarkan kosong, Pivot akan mengirim index weblog sebagai link.',
	'rss_img' => 'Gambar Feed', 
	'rss_img_desc' => 'Anda dapat menyertakan sebuah gambar untuk dikirim bersama Feed. Beberapa pembaca feed akan menampilkan gambar ini bersama dengan Feed Anda. Biarkan kosong, atau masukkan sebuah URL lengkap.',
	
	'lastcomm_head' => 'Setting untuk Komentar-Komentar Terakhir',
	'lastcomm_amount' => 'Tampilkan berapa banyak',
	'lastcomm_length' => 'Potong panjangnya',
	'lastcomm_format' => 'Format',
	'lastcomm_format_desc' => 'Setting ini menentukan tampilan dari \'komentar terakhir\' pada halaman depan weblog.',
	'lastcomm_nofollow' => 'Gunakan \'Nofollow\'',
	'lastcomm_nofollow_desc' => 'Untuk melawan refererspam Anda dapat memilih untuk menambah atribut rel="nofollow" ke semua link dalam komentar dan referer, sehingga tidak dapat digunakan spammer untuk mendapat urutan halaman yang lebih baik dalam Google.',

	'lastref_head' => 'Setting untuk Referer Terakhir',
	'lastref_amount' => 'Tampilkan berapa banyak',
	'lastref_length' => 'Potong Panjangnya',
	'lastref_format' => 'Format',
	'lastref_format_desc' => 'Setting-setting ini menentukan tampilan dari \'referer terakhir\' pada halaman depan weblog.',
	'lastref_graphic' => 'Gunakan grafik',
	'lastref_graphic_desc' => 'Ini menentukan apakah referer terakhir menggunakan icon kecil untuk Search Engine yang paling umum dari mana pengunjung mendapat informasi.',
	'lastref_redirect' => 'Redirect Referer',
	'lastref_redirect_desc' => 'Untuk melawan refererspam Anda dapat memilih untuk redirect link keluar ke referer, agar tidak dapat digunakan spammer untuk mendapat peringkat yang lebih baik dalam Google.',

	'various_head' => 'Berbagai setting',
	'emoticons' => 'Gunakan Emoticon',
	'emoticons_desc' => 'Menentukan apakah emoticon seperti :-) akan diubah ke bentuk gambarnya.',
	'encode_email_addresses' => 'Encode Alamat Email',
	'encode_email_addresses_desc' => 'Menentukan apakah alamat email akan di-encode dalam javascript, sebagai perlindungan dari pembuat spam.',
	'target_blank' => 'Target Kosong',
	'xhtml_workaround' => 'XHTML Workaround',
	'target_blank_desc' => 'Jika diatur ke \'Ya\', semua link yang dimasukkan ke dalam entri akan dibuka dalam sebuah window browser yang baru. Jika diatur ke \'XHTML workaround\', semua link akan mempunyai atribut rel="external", yang tidak akan mengacaukan format XHTML',

	'date_head' => 'Setting tampilan tanggal',
	'full_date' => 'Format tanggal lengkap',
	'full_date_desc' => 'Ini menentukan format untuk tanggal dan waktu yang lengkap. Yang paling sering digunakan pada bagian atas dari sebuah halaman entri',
	'entry_date' => 'Tanggal Entri',
	'diff_date' => 'Diff Date',
	'diff_date_desc' => '\'Diff Date\' sering digunakan dalam hubungannya dengan \'Tanggal Entri\'. Tanggal Entri ditampilkan pada setiap entri pada log Anda, sementara Diff Date hanya ditampilkan jika tanggalnya berbeda dari entri sebelumnya.',
	'language' => 'Bahasa',
	'language_desc' => 'Bahasa menentukan dalam bahasa apa, tanggal dan angka akan ditampilkan, dan juga menentukan charset encoding (seperti iso-8859-1 atau koi8-r, misalnya) halaman itu.',	

	'comment_head' => 'Setting Proses Komentar',
	'comment_sendmail' => 'Kirim Email?',
	'comment_sendmail_desc' => 'Setelah sebuah komentar dibuat, email dapat dikirimkan ke pemelihara weblog ini.',
	'comment_emailto' => 'Email ke',
	'comment_emailto_desc' => 'Tentukan alamat-alamat email yang akan dikirim. Pisahkan alamat-alamat tersebut dengan koma.',
	'comment_texttolinks' => 'Teks ke link-link',
	'comment_texttolinks_desc' => 'Tentukan apakah URL dan alamat email yang dimasukkan dapat di-klik.',
	'comment_wrap' => 'Rapikan Komentar setelahnya',
	'comment_wrap_desc' => 'Untuk mencegah kalimat panjang yang dapat mengacaukan tampilan, teks akan dirapikan setelah sejumlah karakter tertentu.',
	'comments_text_0' => 'Label untuk \'tidak ada komentar\'',
	'comments_text_1' => 'Label untuk \'satu komentar\'',
	'comments_text_2' => 'Label untuk \'X komentar\'',
	'comments_text_2_desc' => 'Teks yang digunakan untuk menandakan berapa banyak komentar yang ada. Jika dibiarkan kosong, Pivot akan menggunakan default yang ditentukan oleh setting bahasa',

	'comment_pop' => 'Popup Komentar?',
	'comment_pop_desc' => 'menetukan apakah halaman komentar (atau \'entri tunggal\') akan ditampilkan dalam sebuah window popup, atau tetap dalam browser window semula.',
	'comment_width' => 'Lebar Popup',
	'comment_height' => 'Tinggi Popup',
	'comment_height_desc' => 'Tentukan lebar dan tinggi (dalam pixel) dari pop-up komentar-komentar.',
			
	'comment_format' => "Format dari Komentar",
	'comment_format_desc' => "Ini menentukan format dari komentar pada halaman entri.",

	'comment_reply' => "Format dari 'balasan ..'",
	'comment_reply_desc' => "Ini menentukan format dari link yang dapat digunakan pengunjung untuk membalas komentar tertentu.",
	'comment_forward' => "Format dari 'dibalas oleh ..'",
	'comment_forward_desc' => "Ini menentukan format dari teks yang ditampilkan jika komentar dibalas oleh komentar lain.",
	'comment_backward' => "Format dari 'balasan dari ..'",
	'comment_backward_desc' => "Ini menentukan format dari teks yang ditampilkan jika komentar merupakan balasan dari komentar lain.",
	
	'comment_textile' => 'Bolehkan Textile',
	'comment_textile_desc' => 'Jika ini diatur ke \'Ya\', para pengunjung diijinkan untuk menggunakan <a href="http://www.textism.com/tools/textile/" target="_blank">Textile</a> dalam komentar mereka.',
	'save_comment' => 'Simpan Komentar',
	'comment_gravatardefault' => 'Default Gravatar',
	'comment_gravatardefault_desc' => 'URL ke gambar Gravatar default. Dimulai dengan http://',
	'comment_gravatarhtml' => 'Gravatar HTML',
	'comment_gravatarhtml_desc' => 'HTML untuk menyisipkan sebuah gravatar. %img% akan digantikan oleh URL ke gambar.',
	'comment_gravatarsize' => 'Ukuran Gravatar',
	'comment_gravatarsize_desc' => 'Ukuran (dalam pixel) dari gravatar. Default-nya adalah 48.',
	
    'trackback_head' => 'Setting Trackback',
	'trackback_sendmail' => 'Kirim Email?',
	'trackback_sendmail_desc' => 'Setelah sebuah trackback dibuat, email dapat dikirimkan ke pemelihara dari weblog ini.',
	'trackback_emailto' => 'Email ke',
	'trackback_emailto_desc' => 'Tentukan alamat-alamat yang akan dikirimi email. Pisahkan setiap alamat dengan sebuah koma.',
	'trackbacks_text_0' => 'Label untuk \'tidak ada trackback\'',
	'trackbacks_text_1' => 'Label untuk \'satu trackback\'',
	'trackbacks_text_2' => 'Label untuk \'X trackback\'',
	'trackbacks_text_2_desc' => 'Teks yang digunakan untuk menandakan berapa banyak trackback yang ada. Jika dibiarkan kosong, Pivot akan menggunakan default yang ditentukan oleh setting bahasa',
	'trackback_pop' => 'Trackback Popup?',
	'trackback_pop_desc' => 'Menentukan apakah halaman trackback (atau \'entri tunggal\') akan ditampilkan dalam popup window, atau dalam window browser semula.',
	'trackback_width' => 'Lebar Popup',
	'trackback_height' => 'Tinggi Popup',
	'trackback_height_desc' => 'Tentukan lebar dan tinggi (dalam pixel) dari pop-up trackback.',
	'trackback_format' => "Format dari Trackback",
	'trackback_format_desc' => "Ini menentukan format dari trackback pada halaman entri.",
	'trackback_link_format' => "Format dari Link Trackback",
        'save_trackback' => 'Simpan Trackback',

	'saved_create' => 'Weblog baru telah dibuat.',
	'saved_update' => 'Weblog telah diperbaharui.',
	'deleted' => 'Weblog telah dihapus.',
	'confirm_delete' => 'Anda akan menghapus weblog %1. Anda yakin?',	

	'blogroll_heading' => 'Setting Blogroll',
	'blogroll_id' => 'Blogrolling ID #',
	'blogroll_id_desc' => 'Secara opsional, Anda dapat memasukkan <a href="http://www.blogrolling.com" target="_blank">blogrolling.com</a> blogroll dalam weblog Anda. Blogrolling adalah layanan yang sempurna untuk menjaga daftar link, yang menunjukkan seberapa baru link itu telah diperbaharui. Jika Anda tidak mau, lewati saja field input berikut. Jika tidak: Ketika Anda sedang login ke blogrolling.com, pergilah ke \'get code\', di sana Anda akan menemukan link yang berisi # ID blogroll Anda. Semestinya akan kelihatan seperti ini : 2ef8b42161020d87223d42ae18191f6d',
	'blogroll_fg' => 'Warna Teks',
	'blogroll_bg' => 'Warna Latar',
	'blogroll_line1' => 'Warna Garis 1',
	'blogroll_line2' => 'Warna Garis 2',
	'blogroll_c1' => 'Warna 1',
	'blogroll_c2' => 'Warna 2',
	'blogroll_c3' => 'Warna 3',
	'blogroll_c4' => 'Warna 4',
	'blogroll_c4_desc' => 'Warna-warna ini menentukan seperti apa blogroll Anda. Warna 1 hingga warna 6 memberi tanda seberapa baru sebuah link telah di-update.',
);


$lang['upload'] = array (
	//		File Upload		\\
	'preview' => 'Preview Daftar yang Lengkap',
	'thumbs' => 'Thumbnail Preview',
	'create_thumb' => '(Buat Thumbnail)',
	'title' => 'File',
	'thisfile' => 'Upload sebuah File Baru:',
	'button' => 'Upload',
	'filename' => 'Nama File',
	'thumbnail' => 'Thumbnail',
	'date' => 'Tanggal',
	'filesize' => 'Ukuran File',
	'dimensions' => 'Lebar x Tinggi',		
	'delete_title' => 'Hapus Gambar',
	'areyousure' => 'Anda yakin ingin menghapus file %s?',
	'picheader' => 'Hapus gambar ini?',
	'create' => 'Buat',
	'edit' => 'Ubah',

	'insert_image' => 'Sisipkan sebuah gambar',
	'insert_image_desc' => 'Untuk menyisipkan sebuah gambar, Anda harus meng-upload sebuah gambar, atau memilih gambar yang telah di-upload sebelumnya.',
	'insert_image_popup' => 'Sisipkan sebuah Popup Gambar',
	'insert_image_popup_desc' => 'Untuk membuat popup pada sebuah gambar, Anda harus meng-upload sebuah gambar, atau memilih gambar yang telah di-upload sebelumnya. Lalu pilih teks atau thumbnail yang memicu popup.',
	'choose_upload' => 'upload',
	'choose_select' => 'atau pilih',
	'imagename' => 'Nama Gambar',
	'alt_text' => 'Teks alternatif',
	'align' => 'Align',
	'border' => 'Border',
	'pixels' => 'pixel',
	'uploaded_as' => 'File Anda telah di-upload sebagai \'%s\'.',
	'not_uploaded' => 'File Anda belum di-upload, dan kesalahan berikut terjadi:',
	'center' => 'Tengah (default)',
	'left' => 'Kiri',
	'right' => 'Kanan',
	'inline' => 'Sejajar',		
	'notice_upload_first' => 'Anda harus memilih atau meng-upload sebuah gambar terlebih dahulu',
	'select_image' => 'Pilih Gambar',
	'select_file' => 'Pilih File',

	'for_popup' => 'Untuk popup',		
	'use_thumbnail' => 'Gunakan Thumbnail',		
	'edit_thumbnail' => 'Ubah Thumbnail',		
	'use_text' => 'Gunakan Teks',		
	'insert_download' => 'Masukkan hasil download',
	'insert_download_desc' => 'Untuk membuat sebuah download file, Anda harus meng-upload sebuah file, atau memilih file yang telah di-upload sebelumnya. Lalu pilih apakah Anda ingin icon atau teks atau tumbnail yang memicu pen-download-an..',
	'use_icon' => 'Gunakan icon',
);


$lang['link'] = array (
	//		Link Insertion \\
	'insert_link' => 'Sisipkan sebuah link',
	'insert_link_desc' => 'Sisipkan sebuah link, dengan mengetik sebuah URL pada field di bawah. Pengunjung situs Anda dapat melihat judulnya ketika hover mouse mereka berada di atas link.',
	'url' => 'URL',
	'title' => 'Judul',
	'text' => 'Teks',
);


//		Categories		\\
$lang['category'] = array (
	'edit_who' => 'Ubah siapa saja yang dapat mengirim ke kategori \'%s\'',
	'name' => 'Nama',
	'users' => 'Pengguna',
	'make_new' => 'Buat Kategori Baru',
	'create' => 'Buat Kategori',
	'canpost' => 'Pilih pengguna yang Anda beri ijin untuk mengirim ke kategori ini',
	'same_name' => 'Kategori dengan nama ini sudah ada',
	'need_name' => 'Anda belum memberi nama kategori ini',
	
	'allowed' => 'Sudah diijinkan',
	'allow' => 'Ijinkan',
	'denied' => 'Sudah ditolak',
	'deny' => 'Tolak',
	'edit' => 'Ubah Kategori',
	
	'delete' => 'Hapus Kategori',
	'delete_desc' => 'Pilih \'ya\', jika Anda ingin menghapus kategori ini',

	'delete_message' => 'Dalam pembuatan Pivot ini, hanya nama kategori yang akan dihapus. Dalam pembuatan berikutnya, Anda dapat memilih apa yang harus dilakukan dengan entri pada kategori ini.',
	'search_index_newctitle'   => 'Buat indeks untuk kategori ini',
	'search_index_newcdesc'    => 'Hanya diatur ke \'Tidak\' jika Anda tidak ingin pengunjung situs Anda mencari dalam kategori ini.',
	'search_index_editcheader' => 'Indeks kategori',
	
	'order' => 'Susunan pengurutan',
	'order_desc' => 'Kategori dengan urutan yang lebih rendah akan ditampilkan di bagian atas dari daftar. Jika urutannya sama, maka akan diurutkan menurut abjad',
	'public' => 'Kategori Umum',
	'public_desc' => 'Jika diatur ke \'Tidak\', kategori ini hanya dapat dilihat oleh pengunjung yang terdaftar. (hanya berlaku untuk halaman yang aktif)',
	'hidden' => 'Kategori tersembunyi',
	'hidden_desc' => 'Jika diatur ke \'Ya\', kategori ini akan tersembunyi dalam daftar arsip. (hanya berlaku untuk halaman yang aktif)',
		
);


$lang['entries'] = array (
	//		Entries			\\
	'post_entry' => "Kirim Entri",
	'preview_entry' => "Preview Entri",

	'first' => 'pertama',
	'last' => 'terakhir',
	'next' => 'berikutnya',
	'previous' => 'sebelumnya',

	'jumptopage' => 'lompat ke halaman (%num%)',
	'filteron' => 'saring berdasarkan (%name%)',
	'filteroff' => 'saringan tidak aktif',
	'title' => 'Judul',
	'subtitle' => 'Sub Judul',
	'introduction' => 'Pendahuluan',
	'body' => 'Isi',
	'publish_on' => 'Publikasi aktif',
	'status' => 'Status',
	'post_status' => 'Kirim Status',
	'category' => 'Kategori',
	'select_multi_cats' => '(Ctrl-klik untuk memilih lebih dari satu kategori)',
	'last_edited' => "Terakhir diubah pada",
	'created_on' => "Dibuat pada",		
	'date' => 'Tanggal',
	'author' => 'Penulis',
	'code' => 'Kode',
	'comm' => '# Kom',
	'track' => '# Track',
	'name' => 'Nama',
	'allow_comments' => 'Ijinkan Komentar',

	'delete_entry' => "Hapus Entri",
	'delete_entry_desc' => "Hapus entri ini dan komentar-komentarnya",
	'delete_one_confirm' => "Anda yakin ingin menghapus entri ini?",
	'delete_multiple_confirm' => "Anda yakin ingin menghapus beberapa entri ini?",
	
	'convert_lb' => 'Ubah Linebreak',
	'always_off' => '(Ini selalu tidak aktif, jika dalam mode Wysiwyg)',
	'be_careful' => '(Berhati-hatilah dengan ini!)',
	'edit_comments' => 'Ubah Komentar',
	'edit_comments_desc' => 'Ubah komentar yang telah dikirim untuk entri ini',
	'edit_comment' => 'Ubah Komentar',
	'delete_comment' => 'Hapus Komentar',
	'edit_trackback' => 'Ubah Trackback',
	'delete_trackback' => 'Hapus Trackback',
	'block_single' => 'Blok IP %s',
	'block_range' => 'Blok IP range %s',
	'unblock_single' => 'Jangan blok IP %s',
	'unblock_range' => 'Jangan blok IP range %s',
	'trackback' => 'Trackback ping',
	'trackback_desc' => 'Kirim Ping Trackback ke URL berikut. Untuk mengirim ke banyak URL, masukkan satu URL pada sebuah baris terpisah.',
	'keywords' => 'Kata Kunci',
	'keywords_desc' => 'Gunakan ini untuk mengatur beberapa kata kunci yang dapat digunakan untuk menemukan entri ini, atau untuk mengatur non-crufty url untuk entri ini.',
	'vialink' => "Via link",
	'viatitle' => "Via judul",
	'via_desc' => 'Gunakan ini untuk mengatur sebuah link ke asal dari entri ini.',
	'entry_catnopost' => 'Anda tidak diijinkan untuk mengirim ke kategori :\'%s\'.',
	'entry_saved_ok' => 'Entri Anda \'%s\' sudah berhasil disimpan.',
	'entry_ping_sent' => 'Sebuah ping trackback telah dikirim ke \'%s\'.',
);


//		Form Fun		\\
$lang['forms'] = array (
	'c_all' => 'Centang semua',
	'c_none' => 'Hilangkan semua centang',
	'choose' => '- Pilih sebuah opsi -',
	'publish' => 'Atur Status ke \'publikasi\'',
	'hold' => 'Atur Status ke \'hold\'',
	'delete' => 'Hapus',
	'generate' => 'Publikasi dan generate',

	'with_checked_entries' => "Dengan entri yang dicentang, lakukan:",
	'with_checked_files' => "Dengan file yang dicentang, lakukan:",
	'with_checked_templates' => 'Dengan template yang dicentang, lakukan:',
);


//		Errors			\\
$lang['error'] = array (
	'path_open' => 'Tidak dapat membuka dir, periksa hak akses Anda.',
	'path_read' => 'Tidak dapat membaca dir, periksa hak akses Anda.',
	'path_write' => 'Tidak dapat membuat dir, periksa hak akses Anda.',

	'file_open' => 'Tidak dapat membuka file, periksa hak akses Anda.',
	'file_read' => 'Tidak dapat membaca file, periksa hak akses Anda.',
	'file_write' => 'Tidak dapat menulis ke file, periksa hak akses Anda.',
);


//		Notices			\\
$lang['notice'] = array (		
	'comment_saved' => "Komentar telah disimpan.",
	'comment_deleted' => "Komentar telah dihapus.",
	'comment_none' => "Entri ini tidak mempunyai komentar.",
	'trackback_saved' => "Trackback telah disimpan.",
	'trackback_deleted' => "Trackback telah dihapus.",
	'trackback_none' => "Entri ini tidak mempunyai trackback.",
);


// Comments, Karma and voting \\
$lang['karma'] = array (
	'vote' => 'Pilih \'%val%\' pada entri ini',
	'good' => 'Baik',
	'bad' => 'Jelek',
	'already' => 'Anda telah memilih untuk entri atau jajak pendapat ini',
	'register' => 'Pilihan Anda untuk \'%val%\' telah didaftarkan',
);


$lang['comment'] = array (
	'register' => 'Komentar Anda telah disimpan.',
	'preview' => 'Anda sedang melakukan preview untuk komentar Anda. Pastikan Anda telah meng-klik \'Kirim Komentar\' untuk menyimpannya.',
	'duplicate' => 'Komentar Anda belum disimpan, karena sepertinya sama dengan entri sebelumnya',
	'no_name' => 'Anda harus memasukkan nama (atau alias) pada field \'nama\'. Pastikan telah meng-klik \'Kirim Komentar\' untuk menyimpannya terus.',
	'no_comment' => 'Anda harus memasukkan sesuatu pada field \'komentar\'. Pastikan telah meng-klik \'Kirim Komentar\' untuk terus menyimpannya.',
	'too_many_hrefs' => 'Jumlah maksimum hyperlink telah dilewati. Berhenti spamming.',
    'email_subject' => '[Komentar] Re:',	
);


$lang['comments_text'] = array (
	'0' => "Tidak ada komentar",
	'1' => "%num% komentar",
	'2' => "%num% komentar",
);

$lang['trackbacks_text'] = array (
	'0' => "Tidak ada trackback",
	'1' => "%num% trackback",
	'2' => "%num% trackback",
);

$lang['weblog_text'] = array (
	// these are used in the weblogs, for the labels related to archives
	'archives' => "Arsip",
	'next_archive' => "Arsip Berikutnya",
	'previous_archive' => "Arsip Sebelumnya",
	'last_comments' => "Komentar Terakhir",
	'last_referrers' => "Referrer Terakhir",
	'calendar' => "Kalender",
	'links' => "Link",
	'xml_feed' => "XML: RSS Feed",
	'atom_feed' => "XML: Atom Feed",
	'powered_by' => "Powered by",
	'blog_name' => "Nama Weblog",
	'title' => "Judul",
	'excerpt' => "Excerpt",
	'name' => "Nama",
	'email' => "Email",
	'url' => "URL",
	'date' => "Tanggal",		
	'comment' => "Komentar",
	'ip' => "Alamat IP",		
	'yes' => "Ya",
	'no' => "Tidak",
	'emoticons' => "Emoticon",
	'emoticons_reference' => "Buka Referensi Emoticon",
	'textile' => "Textile",
	'textile_reference' => "Buka Referensi Textile",
	'post_comment' => "Kirim Komentar",
	'preview_comment' => "Preview Komentar",
	'remember_info' => "Ingat informasi pribadi?",
	'notify' => "Ingatkan",
	'notify_yes' => "Ya, kirimi saya email jika ada yang membalas.",
	'register' => "Daftarkan username Anda / Log in",
	'disclaimer' => "<b>Catatan kecil:</b> Semua tag html kecuali &lt;b&gt; dan &lt;i&gt; akan dihilangkan dari komentar. Anda dapat membuat link hanya dengan mengetikkan URL atau alamat email.",	
	'search_title' => "Cari Hasil",
	'search' => "Cari!",
	'nomatches' => "Tidak ada yg ditemukan untuk '%name%'. Cobalah yang lain.",
	'matches' => "Ditemukan untuk '%name%':",
	'about' => "Tentang",
	'stuff' => "Stuff",
	'linkdump' => "Linkdump",
);


$lang['ufield_main'] = array (
	//		Userfields		\\
	'title' => 'Ubah Userfield',
	'edit' => 'Ubah',
	'create' => 'Buat',

	'dispname' => 'Tampilkan Nama',
	'intname' => 'Nama Internal',
	'intname_desc' => 'Nama Internal adalah nama item ini yang akan ditampilkan ketika Anda meminta Pivot untuk menampilkannya dalam sebuah template.',
	'size' => 'Ukuran',
	'rows' => 'Baris',
	'cols' => 'Kolom',
	'maxlen' => 'Panjang Maksimum',
	'minlevel' => 'Level Min. Pengguna',	
	'filter' => 'Disaring oleh',
	'filter_desc' => 'Dengan menyaring item ini, Anda membatasi jenis input yang dapat digunakan di situ',
	'no_filter' => 'Tidak ada',
	'del_title' => 'Konfirmasi Penghapusan',
	'del_desc' => 'Penghapusan userfield (<b>%s</b>) juga akan menghilangkan semua data yang disimpan pengguna di dalamnya, dan membuat semua isiannya dalam template tampil kosong.',	
	
	'already' => 'Nama ini telah digunakan',
	'int' => 'Nama Internal harus lebih panjang dari 3 karakter',
	'short_disp' => 'Tampilan Nama harus lebih panjang dari 3 karakter',
);


$lang['bookmarklets'] = array (
	'bookmarklets' => 'Bookmarklet',
	'bm_add' => 'Tambahkan Bookmarklet.',
	'bm_withlink' => 'Pivot » Baru',
	'bm_withlink_desc' => 'Bookmarklet ini akan membuka sebuah window dengan Entri Baru, yang berisi link dari halaman yang dibukanya.',

	'bm_nolink' => 'Pivot » Baru',
	'bm_nolink_desc' => 'Bookmarklet ini membuka window dengan sebuah Entri Baru yang kosong.',

	'bookmarklets_info' => 'Anda dapat menggunakan Bookmarklet untuk menulis Entri Baru pada Pivot dengan cepat. Untuk menambahkan sebuah Bookmarklet ke browser Anda, gunakan salah satu pilihan berikut: (variasi teks yang tepat, tergantung pada browser yang Anda gunakan)',
	'bookmarklets_info_1' => 'Klik dan tarik bookmarklet ke toolbar \'Link\' Anda atau tombol  \'Bookmarks\' pada browser Anda.',
	'bookmarklets_info_2' => 'Klik kanan pada bookmarklet dan pilih \'Tambahkan ke Bookmarks\'.',
);

// Accessibility - These are used for form fields, labels, fieldsets etc.
// for Web Content Accessibility Guidelines & 508 compliancy issues.
// see: http://bobby.watchfire.com/bobby/html/en/index.jsp
// JM =*=*= 2004/10/04
// 2004/11/25 =*=*= JM - minor correction for tim
$lang['accessibility'] = array(
	'search_idname'      => 'cari',
	'search_formname'    => 'Cari kata-kata yang digunakan entri pada website',
	'search_fldname'     => 'Masukkan kata[-kata] yang akan dicari disini :',
	'search_placeholder' => 'Masukkan kata yang dicari',

	'calendar_summary'   => 'Tabel ini mewakili sebuah kalender dari entri-entri pada weblog dengan hyperlinks pada tanggal beserta entri-nya.',
	'calendar_noscript'  => 'Kalender menyediakan cara untuk mengakses entri dalam weblog ini',
	/* 
	2-letter language code, used to designate the principal language used on the site
	see: http://www.oasis-open.org/cover/iso639a.html
	*/

	'lang' => $langname,
) ;


$lang['snippets_text'] = array (
    'word_plural'     => 'kata-kata',
    'image_single'    => 'gambar',
    'image_plural'    => 'gambar-gambar',
    'download_single' => 'file',
    'download_plural' => 'file-file',
); 

$lang['trackback'] = array (
    'register' => 'Trackback Anda telah disimpan.',
    'duplicate' => 'Trackback Anda belum disimpan, karena kelihatannya merupakan duplikat dari entri sebelumnya',
    'too_many_hrefs' => 'Jumlah hyperlink telah melewati angka maksimum. Hentikan spamming.',
    'noid'      => 'Tidak ada ID Trackback (tb_id)',
    'nourl'     => 'Tidak ada URL (url)',
    'tracked'   => 'Tracked',
    'email_subject' => '[Trackback] Re:',
);

$lang['commentuser'] = array (
    'title'             => 'Login Pengguna Pivot',
    'header'            => 'Log in sebagai pengunjung terdaftar',
    'logout'            => 'Log out.',
    'loggedout'         => 'Sudah Log out',
    'login'             => 'Login',
    'loggedin'          => 'Sudah Log in',
    'loggedinas'        => 'Sudah Log in sebagai',
    'pass_forgot'       => 'Lupa password Anda?',
    'register_new'      => 'Daftar username baru.',
    'register'          => 'Daftar sebagai pengunjung',
    'register_info'     => 'Silahkan mengisi informasi berikut. <strong>Pastikan Anda telah memasukkan alamat email yang valid</strong>, karena kami akan mengirimkan email verifikasi ke alamat tersebut.',
    'pass_note'         => 'Catatan : Pemilik situs ini mungkin <br /> dapat melihat password Anda.. <em>Jangan</em> menggunakan password<br /> yang digunakan untuk website/account lain!',
    'show_email'        => 'Tampilkan alamat email beserta komentar',
    'notify'            => 'Beritahu saya via email jika ada entri baru',
    'def_notify'        => 'Default Pemberitahuan Balasan',
    'register'          => 'Daftar',
    'pass_invalid'      => 'Password Salah',
    'nouser'            => 'Tidak ada pengguna itu..',
    'change_info'       => 'Anda dapat mengubah informasi Anda di sini.',
    'pref_edit'         => 'Ubah pilihan Anda',
    'pref_change'       => 'Ubah pilihan',
    'options'           => 'Opsi',
    'user_exists'       => 'Pengguna sudah ada.. Silahkan memilih nama lain.',
    'email_note'        => 'Anda harus memasukkan alamat email, jika tidak Anda tidak dapat mem-verifikasi account Anda. Anda selalu dapat memilih untuk tidak menampilkan alamat Anda kepada pengunjung lain.',
    'stored'            => 'Perubahan telah disimpan',
    'verified'          => 'Account Anda telah diverifikasi. Silahkan log in..',
    'not_verified'      => 'Kode yang Anda masukkan sepertinya salah. Maaf, tapi kami tidak dapat mem-verifikasinya.',
    'pass_sent'         => 'Password Anda telah dikirim ke mailbox yang diberikan..',
    'user_pass_nomatch' => 'Username dan alamat email itu sepertinya tidak cocok.',
    'pass_send'         => 'Kirim Password',
    'pass_send_desc'    => 'Jika Anda lupa password, isikan username dan alamat email, dan Pivot akan mengirimkan password ke alamat email Anda. ',
    'oops'              => 'Ups',
    'back'              => 'Kembali ke',
    'back_login'        => 'Kembali login',
    'forgotten_pass_mail' => "Password yang Anda lupa untuk Pivot '%name%' adalah: \n\n%pass%\n\nMohon jangan lupa lagi!\n\nUntuk log in ke account Anda, klik link berikut:\n %link%"
);

// A little tool to help you check if the file is correct..
if (count(get_included_files())<2) {

	$groups = count($lang);
	$total = 0;
	foreach ($lang as $langgroup) {
		$total += count($langgroup);
	}
	echo "<h2>File bahasa benar!</h2>";
	echo "File ini berisi $groups group dan sejumlah $total label.";

}

?>
