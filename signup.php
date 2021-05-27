<?php

include_once("includes/dbh.inc.php");
include_once("header.php");


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

<!-- Sign Up -->
<div id="container">
	  <div class="inner">
		<div id="content"> 
		  <div>
			<h2>Sign Up</h2>
			<form action="includes/signup.inc.php" method="post">
				<input type="text" name="name" class="input-class" placeholder="Full name..." />
				<br>
				<input type="text" name="email" class="input-class" placeholder="Email..." />
				<br>
				<input type="text" name="uid" class="input-class" placeholder="Username..." />
				<br>
				<input type="password" name="pwd" class="input-class" placeholder="Password..." />
				<br>
				<input type="password" name="pwdrepeat" class="input-class" placeholder="Repeat password..." />
				<br>
				<button type="submit" class="input-class" name="submit">Sign Up </button>
			</form>
			<?php 
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
		  </div>
		</div>
	  </div>
</div>

<?php

include_once("footer.php");

?>