<?php 

	if (isset($_POST["submit"])) {
		
		$username = $_POST["uid"];
		$name = $_POST["name"];
		$email = $_POST["email"];
		$pwd = $_POST["pwd"];
		$pwdRepeat = $_POST["pwdrepeat"];
		
		require_once 'dbh.inc.php';
		require_once 'functions.inc.php';
		
		if (emptyInputSignup($username, $name, $email, $pwd, $pwdRepeat) !== false) {
			header("location: /JiraTicketSystem/signup.php?error=emptyinput");
			exit();
		}
		if (invalidUid($username) !== false) {
			header("location: /JiraTicketSystem/signup.php?error=invaliduid");
			exit();
		}
		if (invalidEmail($email) !== false) {
			header("location: /JiraTicketSystem/signup.php?error=invalidemail");
			exit();
		}
		if (pwdMatch($pwd, $pwdRepeat) !== false) {
			header("location: /JiraTicketSystem/signup.php?error=passwordsdontmatch");
			exit();
		}
		if (uidExists($conn, $username, $email) !== false) {
			header("location: /JiraTicketSystem/signup.php?error=usernametaken");
			exit();
		}
		
		createUser($conn, $username, $name, $email, $pwd);
		
	}
	else {
		header("location: /JiraTicketSystem/signup.php");
		exit();
	}

?> 