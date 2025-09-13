<?php
$servername="localhost";
$username="root";
$password="";
$database="dbsaksham";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Sorry we failed to connoect to database"). mysqli_connect_error();
}else{
    echo "Connection was Succesfully";
}

$sql="SELECT * FROM `trip` WHERE `dest` ='australia' ";

$result=mysqli_query($conn,$sql);

$num=mysqli_num_rows($result);
echo "<br>";
echo $num;
echo "<br>";
echo "Record found in database <br>";


if($num>0){
 
    while($data=mysqli_fetch_assoc($result)){
    
        echo $data['sno'] . " hello " . $data['Name'] . " Welcome to " . $data['dest'] . "<br>";
    }

}

// Usage of where to update database

$sql="UPDATE `trip` SET `Name` = 'adarsha3' WHERE `sno` = 4 ";
$result=mysqli_query($conn,$sql);

if($result){
    echo "Updated successfully";
}else{
    echo "We could not updated database succesfully";
}

?>