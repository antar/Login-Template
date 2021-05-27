<?php

include_once("includes/dbh.inc.php");
include_once("header.php");


if (isset($_GET["error"])) {
	if ($_GET["error"] == "emptyinput") {
		echo "<p>Fill in all fields!</p>";
	}
	else if ($_GET["error"] == "invaliduid") { 
		echo "<p>Choose a proper username!</p>";
	}
	else if ($_GET["error"] == "invalidemail") { 
		echo "<p>Choose a proper email!</p>";
	}
	else if ($_GET["error"] == "passwordsdontmatch") { 
		echo "<p>Passwords doesn't match!</p>";
	}
	else if ($_GET["error"] == "usernametaken") { 
		echo "<p>Username already taken!</p>";
	}
	else if ($_GET["error"] == "emailtaken") { 
		echo "<p>Email already taken!</p>";
	}
	else if ($_GET["error"] == "emailtaken") { 
		echo "<p>Email already taken!</p>";
	}
	else if ($_GET["error"] == "none") { 
		echo "<p>You have signed up!</p>";
	}
	else if ($_GET["error"] == "stmtfailed") { 
		echo "<p>Something went wrong, try again!</p>";
	}
}

?>

<!-- Fuck style.css -->
<style>
	input  {
		  margin: 20px !important;
		  width: 50% !important;
		  height: 40px !important;
		}
	button {
		  margin: 20px !important;
		  width: 51% !important;
		  height: 40px !important;
		  cursor: pointer;
	}
</style>

<!-- Home -->
<div id="container">
	  <div class="inner">
		<div id="content"> 
		  <div>
			<h2>Home</h2>
			<p>
			  Some Guys have no clue, what they are doing at their job. <a href="https://wes.fm">Love</a>
			</p>
		  </div>
		</div>
	  </div>
</div>


<?php

include_once("footer.php");

?>