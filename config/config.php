<?php
	session_start();

	// Define localhost database
	// define('dbhost', 'localhost');
	// define('dbuser', 'root');
	// define('dbpass', '');
	// define('dbname', 'newrent');

	//define remote database
	 
	define('dbhost', 'remotemysql.com');
	define('dbuser', 'WbCq4PE5nT');
	define('dbpass', 'yNNupchDR3');
	define('dbname', 'WbCq4PE5nT');

	// Connecting database
	try {
		$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>
