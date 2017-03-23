<?php
   // define database related variables
   $database = 'olvoting';
   $host = 'localhost';
   $user = 'root';
   $pass = '';

   // try to conncet to database
   $dbh = new PDO("mysql:dbname={$database};host={$host};port={8282}", $user, $pass);

   if(!$dbh){

      echo "unable to connect to database";
   }
   
?>