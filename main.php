<?php 

	if (isset($_GET['username']) 
		&& $_GET['username'] != "" 
		&& isset($_GET['message']) 
		&& $_GET['message'] != "") {

			require_once('dbManager.php');

			$username = trim ($_GET['username']);
			$message = trim ($_GET['message']);

			send_message($username, $message);
	}
	
	if (isset($_GET['refresh'])){
		require_once('dbManager.php');
		show_messages();
	}


?>