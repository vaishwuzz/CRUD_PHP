<?php 

$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "contactme";

try {

   $con = new PDO("mysql:host=$dbHost;dbname=$dbName",'root','' );

   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e) {
  echo "DB Connection Failed: " . $e->getMessage();
}
?>