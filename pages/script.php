<?php

//Connect to the database.

   $mysqli = new mysqli('localhost', 'admin', 'admin_pass', 'pagination');

   if($mysqli->connect_errno != 0){
     echo $mysqli->connect_error;
     exit();
   }


   $result = $mysqli->query("SELECT * FROM products LIMIT 0, 4");