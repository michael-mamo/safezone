<?php

//create connection
            $db_host = '109.70.148.58';
            $db_name = 'safezoneelearnin_projectdb';
            $db_user = 'safezoneelearnin_root';
            $db_password = '0740730@Root';
            $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

            if($mysqli->connect_error){
            	printf("connect Failed: %s\n", $mysqli->connect_error);
            	exit();
            }


?>