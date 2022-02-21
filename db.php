<?php 

$connection = mysqli_connect('localhost','root','','royalvison');
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "royalvison";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if(!$connection){
    echo "Db is not connected";
}
?>