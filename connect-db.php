<?php
/* 
 CONNECT-DB.PHP
 Allows PHP to connect to your database
*/

 // Database Variables
 $server = 'db390469035.db.1and1.com';
 $user = 'dbo390469035';
 $pass = 'c15c0p1x';
 $db = 'db390469035';
 
 // Connect to Database
 $connection = mysql_connect($server, $user, $pass) 
 or die ("Could not connect to server ... \n" . mysql_error ());
 mysql_select_db($db) 
 or die ("Could not connect to database ... \n" . mysql_error ());


?>