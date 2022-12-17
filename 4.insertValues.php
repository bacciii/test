<?php
require("1.dbConnection.php");
$tableName = "user";

$_id = $_POST["_id"];
$name = $_POST["name"];
$date = $_POST["date"];


$sql1 = "INSERT into $tableName(_id,name,date) Values ('$_id','$name','$date')";

$retval1 = mysqli_query($con,$sql1);
if($retval1){
    echo "Data was successfully inserted to: <mark>$tableName</mark>";
}
else{
    die("-- Data was NOT inserted --");
}
