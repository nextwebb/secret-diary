<?php

   define("DB_SERVER", "localhost");
	define("DB_USER", "peterson");
	define("DB_PASSWORD", "peterson");
	define("DB_DATABASE", "secret");

	$link = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>