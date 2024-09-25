<?php
$serverName="localhost";
$dbUsername="gallery";
$dbPassword=".bc][A3TguzJHauB";
$dbName="ourgallery_login1";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed : " .mysqli_connect_error());

}
