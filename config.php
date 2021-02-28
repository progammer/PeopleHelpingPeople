<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

/* TO BE REPLACED BY GOOGLE CLOUD SQL DETAILS */
define('DB_SERVER', '34.71.184.13');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'a7Nkqe7euZ46nvb_!*EC');
define('DB_NAME', 'hackutddatabase');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>