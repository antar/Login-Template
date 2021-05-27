<?php

	session_start();
	session_unset();
	session_destroy();
	
	header("location: /JiraTicketSystem/index.php");
	exit();

?>