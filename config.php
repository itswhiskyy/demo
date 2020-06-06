<?php

define('DB_SERVER', 'ec2-34-194-198-176.compute-1.amazonaws.com');
define('DB_USERNAME', 'lfvcclexmmkddq');
define('DB_PASSWORD', 'af6c3cb671b03a66a876c8c48bd2a2734c57859b93abfbe9801fb0f3b3fe0d35');
define('DB_NAME', 'd5b18v54uhic68');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
