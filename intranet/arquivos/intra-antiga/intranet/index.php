<?
//header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
//header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past 
//header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $expires) . 'GMT');
?>


<html>
  <head><title>Intranet [ Tecnodata ]</title>
  </head>
  <frameset rows="20,*"  frameborder="no" border="0" framespacing="0">
		    <frame src="online/online.php" scrolling="no">
		    <frame src="main.html" scrolling="auto" name="frm_baixo_1">
		  </frameset>

		  <noframes>
				<body topmargin="0" leftmargin="0">
				    <p>Esta página usa quadros (frames) mas seu navegador não suporta.</p>
				</body>
		  </noframes>
  </frameset>
</html>
