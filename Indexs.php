<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My name is saksham</h1>

    <?php
 echo "Kuldeep sexy <br>";
 
$name="Saksham";

 $a=20;
 echo "My name is:$name <br>  I am $a years old<br>";
//  echo $a;

 $x=10;

 function myTest(){
     global $x; 
     echo $x;
     echo "<br>"; 
 }

 myTest();

 function paramter($a){
    echo $a;
    echo "<br>";
 }
 paramter(5);
 
 $i=0;
 for($i=0;$i<5;$i++){
    global $i;
    echo $i;
 }
 
 ?>
</body>
</html>