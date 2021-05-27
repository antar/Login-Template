<?php
	session_start();
?>

<!doctype html>
<html>
  <head>
	<!-- Page setup -->
	<meta charset="utf-8">
	<title>Jira</title>
	<meta name="description" content="A brief description of your site for search engines">
	<meta name="author" content="Information about the author here">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	<link rel="icon" type="image/png" href="images/logo.jpg">
  
	<!-- Stylesheets -->
	<!-- Reset default styles and add support for google fonts -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" />
   
	<!-- Custom styles -->
	<link href="styles/style.css" rel="stylesheet" type="text/css" />

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>    

	<!-- Want to add Bootstrap? -->
	<!-- Visit: https://getbootstrap.com/docs/4.3/getting-started/introduction/ -->
	
  </head>
  
  <body>

	<header id="header">
		<!-- Welcome Information if User logged in -->
	  <?php 
	  if (isset($_SESSION["useruid"])) {
			echo "<h1 style='color: #ef6d3d;'>Welcome Back " . $_SESSION["useruid"] . "</h1>";
		}
	  ?>
	  <img src="images/logo.jpg">
	  <h1>Jira</h1>
	  
	  <!-- Menu link fragment #id should match a div id. Example: <a href="#home"> links to <div id="home"></div>  -->
	  <ul class="main-menu">
		<li><a id="home" href="index.php">Home</a></li>
		<?php
			if (isset($_SESSION["useruid"])) {
				echo "<li><a href='jira.php'>Jira Dashboard</a></li>";
				echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
			}
			else {
				echo "<li><a href='signup.php'>Sign Up</a></li>";
				echo "<li><a href='login.php'>Log In</a></li>";
			}
		?>
	  </ul>                 
	</header>