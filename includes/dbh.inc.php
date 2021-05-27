<?php

class Dbh {
	
	private $servername;
	private $dbname;
	private $username;
	private $password;
	private $charset;
	
	public function connect() {
		$this->servername = "";
		$this->dbname = "";
		$this->username = "";
		$this->password = "";
		$this->charset = "";
		
		try {
			  $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
			  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e) {
			  echo "Connection failed: " . $e->getMessage();
			}
	}
}

?>