<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$json = json_decode("keys.json");
/* TO BE REPLACED BY GOOGLE CLOUD SQL DETAILS */
define('DB_SERVER', $json["gcloudsql"]["server"]);
define('DB_USERNAME', $json["gcloudsql"]["name"]);
define('DB_PASSWORD', $json["gcloudsql"]["pass"]);
define('DB_NAME', $json["gcloudsql"]["name"]);

// $servername = $json["gcloudsql"]["server"];
// $myDB = $json["gcloudsql"]["name"];
// $un = $json["gcloudsql"]["user"];
// $pw = $json["gcloudsql"]["pass"];

$user = getenv('CLOUDSQL_USER');
$db = getenv('CLOUDSQL_DB');
$pass = getenv('CLOUDSQL_PASSWORD');
$inst = getenv('CLOUDSQL_DSN');

// try {
//   $link = new PDO("mysql:host=$servername;dbname=$myDB", $un, $pw);
//   // set the PDO error mode to exception
//   $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }
/* Attempt to connect to MySQL database */
//mysqli_connect(host, username, password, dbname, port, socket)
$link = mysqli_connect(null, $user, $pass, $db, "34.71.184.13", $inst);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

