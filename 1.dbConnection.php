<?php
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "root123";
$db = "php_project";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

if(!$con){
    die ("Can NOT connect to MySQL");
}
else{
    echo "Connected to <i><mark>$dbhost: $dbuser: $db</mark> </i> succesfully<br><br><br>";
}
?>