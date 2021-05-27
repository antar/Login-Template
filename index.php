<?php

include_once("includes/dbh.inc.php");

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
		$object = new Dbh;
		$object->connect();
		?>
	</body>
</html>