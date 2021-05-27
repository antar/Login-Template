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

<!-- Log IN -->
<div id="container">
	  <div class="inner">
		<div id="content"> 
		  <div>
			<h2>Log In</h2>
			<form action="includes/login.inc.php" method="post">
				<input type="text" name="uid" class="input-class" placeholder="Username/Email..." />
				<br>
				<input type="password" name="pwd" class="input-class" placeholder="Password..." />
				<br>
				<button type="submit" class="input-class" name="submit">Log In</button>
			</form>
			<?php 
			if (isset($_GET["error"])) {
				if ($_GET["error"] == "emptyinput") {
					echo "<p>Fill in all fields!</p>";
				}
				else if ($_GET["error"] == "wronglogin") { 
					echo "<p>Incorrect login information!</p>";
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