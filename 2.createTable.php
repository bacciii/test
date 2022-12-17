<?php
    require("1.dbConnection.php");
    $tableName = "user";

    $sql = "CREATE TABLE $tableName(
        _id int,
        name varchar(45),
        date date
    
)";

$retval = mysqli_query($con, $sql);
if($retval){
    echo "Table: <i>$tableName</i> created in <i>$db</i> successfully";
}
else{
    die("Table <i> $tableName </i> can not be created");
}
