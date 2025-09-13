<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <h1>Php Array</h1>

       <?php

     $subject=array("Saksham","Saroj","milan","kuldeep","adarsha");
      
    foreach($subject as $name){
       echo $name . "<br>";
     }
     print_r($subject);

     $marks=array("English"=>89,"Math"=>92,"DSA"=>93);

     print_r($marks);
     foreach($marks as $mark){
        echo $mark . "<br>";
     }


     $fav_col=array("milan"=>"pink" ,"sakhsam"=>"blue","Bishal"=>"blue");

     foreach($fav_col as $key => $value){
        echo "<br> Favorite color of $key is $value";
     }


       ?>
</body>
</html>