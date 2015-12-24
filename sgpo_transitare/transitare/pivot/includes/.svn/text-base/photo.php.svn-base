<?php

// some global initialisation stuff
$Pivot_Vars = array_merge($_GET , $_POST, $_SERVER);

if (base64_decode($Pivot_Vars['img']) &&
		(preg_match('#[^a-zA-Z0-9+/=]#',$Pivot_Vars['img']) == 0)) {
	$img = base64_decode($Pivot_Vars['img']);
} else {
	$img = $Pivot_Vars['img'];
}

if (base64_decode($Pivot_Vars['t']) &&
		(preg_match('#[^a-zA-Z0-9+/=]#',$Pivot_Vars['t']) == 0)) {
	$title = base64_decode($Pivot_Vars['t']);
} else {
	$title = $Pivot_Vars['t'];
}

?>
<html>
<head>
<title><?php echo htmlspecialchars($title); ?></title>
<script language="javaScript">
document.onkeypress = function esc(e) {
	if(typeof(e) == "undefined") { e=event; }
	if (e.keyCode == 27) { self.close(); }
}
</script>
</head>
<body bgcolor="#000000" leftmargin=0 topmargin=0  marginwidth=0 marginheight=0 onblur="self.close();" onload="self.focus();">
<img src="<?php echo htmlspecialchars($img); ?>" width=<?php echo intval($Pivot_Vars['w']); ?> height=<?php echo intval($Pivot_Vars['h']); ?> border='0'>
</body>
</html>
