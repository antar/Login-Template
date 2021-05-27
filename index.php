<?php

include_once("includes/dbh.inc.php");
include_once("header.php")

?>

<div id="container">
	  <div class="inner">
		<div id="content"> 
		  <div id="home" class="content-region hide">
			<h2>Home</h2>
			<p>
			  Some Guys have no clue, what they are doing at their job. <a href="https://wes.fm">Love</a>
			</p>
		  </div>
		</div>
	  </div>
</div>

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

<div id="container">
	  <div class="inner">
		<div id="content"> 
		  <div id="signup" class="content-region hide">
			  <h2>Please enter the fields bellow</h2>
			<form action="signup.inc.php" method="post">
				<input type="text" name="name" class="input-class" placeholder="Full name..." />
				<br>
				<input type="email" name="email" class="input-class" placeholder="Email..." />
				<br>
				<input type="text" name="uid" class="input-class" placeholder="Username..." />
				<br>
				<input type="password" name="pwd" class="input-class" placeholder="Password..." />
				<br>
				<input type="password" name="pwdrepeat" class="input-class" placeholder="Repeat password..." />
				<br>
				<button type="submit" class="input-class" name="submit">Sign Up </button>
			</form>
		  </div>
		</div>
	  </div>
</div>

<div id="container">
	  <div class="inner">
		<div id="content"> 
		  <div id="login" class="content-region hide">
			  <h2>Please enter the fields bellow</h2>
			<form action="login.inc.php" method="post">
				<input type="text" name="name" class="input-class" placeholder="Username/Email..." />
				<br>
				<input type="password" name="pwd" class="input-class" placeholder="Password..." />
				<br>
				<button type="submit" class="input-class" name="submit">Log In</button>
			</form>
		  </div>
		</div>
	  </div>
</div>

<?php

include_once("footer.php");

?>