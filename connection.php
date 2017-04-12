<?php
	
	define('DB_SERVER', 'dbms.iiitdmj.ac.in');
    define('DB_USERNAME', '2015009');
    define('DB_PASSWORD', '76e2b617');
    define('DB_DATABASE', '2015009');


	mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die("Unable to connect to the database");
	mysql_select_db(DB_DATABASE) or die(mysql_error())  or die("Unable to connect to the database");


?>