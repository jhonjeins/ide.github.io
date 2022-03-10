<?php
 #Archivo de configuracion de la base de datos
 
        define("PG_DB"  , "dab7ebpk5lgobn");
	define("PG_HOST", "ec2-18-214-140-149.compute-1.amazonaws.com");
	define("PG_USER", "zcmqvtzldkdvwv");
	define("PG_PSWD", "f0fb0e27d4d0e85d969d59d18aeca7ad5bb4c1a11173731efd9a385b727e6ba9");
	define("PG_PORT", "5432");
	
	$dbcon = pg_connect("dbname=".PG_DB." host=".PG_HOST." user=".PG_USER ." password=".PG_PSWD." port=".PG_PORT."");


?>
