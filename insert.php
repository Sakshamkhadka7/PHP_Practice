<?php
echo "Welcome to Connection of SQL database <br>";

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsaksham";  // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}else{
    echo "Connection successful <br>";
}

// Create database (only run once)
$sql = "CREATE DATABASE dbsaksham";
mysqli_query($conn, $sql);

// Create Table
$table = "CREATE TABLE Trip (
    sno INT(6) NOT NULL AUTO_INCREMENT,
    Name VARCHAR(50) NOT NULL,
    dest VARCHAR(50) NOT NULL,
    PRIMARY KEY (sno)
)";

mysqli_query($conn,$table);
// Insert data into Table
$tableValues="INSERT INTO `Trip` (`Name`,`dest`) VALUES ('milan','rukum')" ;


// Execute query this is important
$result = mysqli_query($conn, $tableValues);

if($result){
    echo "The table was created and inserted successfully <br>";
}else{
    echo "The table and record was not created successfully because of this error: " . mysqli_error($conn);
}
?>
