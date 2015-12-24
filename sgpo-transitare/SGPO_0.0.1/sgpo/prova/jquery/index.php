<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Ajax Messages App Built in PHP, Javascript, MySQL by Marc Grabanski</title>
        <link rel="stylesheet" type="text/css" href="css/site.css" />
        <script type="text/javascript" src="js/common.js"></script>
        <script type="text/javascript" src="js/site.js"></script>
    </head>
    <body>
        <div id="wrap">
            <h1>PHP/Ajax/MySQL Message App</h1>
			<p><strong>Please keep the messages clean!  Thank you.</strong></p>
            <form class="messagesForm">
                <h3>Compose a new message</h3>
                <label>Subject:</label><input id="subject" type="text" size="30" /><br />
                <label>Message:</label><textarea id="description" rows="4" cols="40" ></textarea><br />
                <input class="button" type="submit" value="Send Message" onclick="ajaxRequest.addMessage();return false" />
            </form>
			<div id="messages">
            <?php
				include("db.php");
				$sql = "SELECT * FROM messages ORDER BY timestamp DESC";
				$result=mysql_query($sql);

				while($row = mysql_fetch_array($result)) {
					$id = $row['id'];
					$desc = htmlspecialchars(stripslashes($row['description']));
					$subject = htmlspecialchars(stripslashes($row['subject']));
			?>
					<div id="<?php echo $id; ?>" class="message">
						<label>Subject:</label>
						<p class="DBsub"><?php echo $subject; ?></p>
						<label>Description:</label>
						<p class="DBdesc"><?php echo $desc; ?></p>
						<a class="delete" onclick="ajaxRequest.deleteMessage(this)"></a>
					</div>
			<?php
				}
			?>
			</div>
            <div style="clear: both;"></div>
        </div>
        <h2>Written by Marc Grabanski</h2>
    </body>
</html>
