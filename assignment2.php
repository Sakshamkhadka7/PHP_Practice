<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2</title>
</head>
<body>
    
 <form method="post">
 
  <h1>Welcome to table World </h1>

 Enter first number :<input type="number" name="num1"> <br> <br>
 Enter second number :<input type="number" name="num2"> <br> <br>

 <input type="submit" name="btn" > <br><br>

 </form>
 

</body>
</html>



<?php
$first=$_POST['num1'];
$second=$_POST['num2'];

for($i=$first;$i<=$first;$i++){
 
    for($j=1;$j<=$second;$j++){
        $result=$i*$j; 

        
        echo $i . "*" .  $j  . "=" . $result . "<br>";

    }


}


?>
