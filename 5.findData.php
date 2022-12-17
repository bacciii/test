<?php
require("1.dbConnection.php");
$dbName = "user";

$_id = $_POST["_id"];
$name = $_POST["name"];

$condition1 = "_id = '$_id'";
$condition2 = "name = '$name'";

$sql1 = "SELECT * FROM $dbName WHERE $condition1 ";//AND $condition2";
$retval1 = mysqli_query($con, $sql1);

if (!$retval1) {
    echo "Error in SQL query";
}

$row = mysqli_fetch_assoc($retval1);
echo "id: $row[_id] name:  $row[name] date $row[date]";
