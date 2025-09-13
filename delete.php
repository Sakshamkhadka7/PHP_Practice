<?php
$servername="localhost";
$username="root";
$password="";
$database="dbsaksham";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo "Sorry we failed to connect" . mysqli_connect_error();
}else{
    echo "Connetion was succesfull <br>";
}

$sql= "DELETE FROM `trip` WHERE `trip` . `dest` = 'rukum' LIMIT 6  ";
$result=mysqli_query($conn,$sql); 
$aff=mysqli_affected_rows($conn);

echo "Number of effected rows is $aff <br> " ;
if($result){
    echo "Sucessfull deleted";
}else{
    $err=mysqli_error($conn);
   echo "Something went wrong ---> $err"  ;
}


?>