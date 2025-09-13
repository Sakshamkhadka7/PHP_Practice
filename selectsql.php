<?php
$servername="localhost";
$username="root";
$password="";
$database="dbsaksham";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    echo "Sorry we failes to connect:" . mysqli_connect_error();
}else{
    echo "Connection was succesfull <br>";
}

$sql="SELECT * FROM  `trip`";
$result=mysqli_query($conn,$sql);

// Find the number of rows in database of your
$rows=  mysqli_num_rows($result);
echo $rows;
echo "<br> <br>";

// Display the rows returneb by sql quer;
if($rows>0){
 
    while($data=mysqli_fetch_assoc($result)){
    // var_dump($data);
    echo "Record found in data base <br>";
    echo $data['sno'] . " Hello " . $data['Name'] . " Welcome to " . $data['dest'] ;
    echo "<br> <br>";  

}

}




?>