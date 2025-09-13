<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Matrix World</title>
    <script>
 
   function radioSubmit(){
   document.getElementById("matrixForm").submit();
   }

    </script>
</head>
<body>
 
<form method="post" id="matrixForm">
<h1>Welcome to 2*2 matrix</h1>
Enter First number <input type="number" name="a" > <br> <br> 
Enter Second number <input type="number" name="b" >  <br> <br>
Enter Third number <input type="number" name="c" ><br> <br>
Enter Fourth number <input type="number" name="d" > <br> <br>
Enter Fifth number <input type="number" name="e" > <br> <br> 
Enter Sixth number <input type="number" name="f" >  <br> <br>
Enter Seventh number <input type="number" name="g" ><br> <br>
Enter Eight number <input type="number" name="h" > <br> <br>


<label>Choose for operation </label> <br><br>

  <input type="radio" name="matrix"  value="1" onclick="radioSubmit()"> Addition<br><br>
  <input type="radio" name="matrix" value="2" onclick="radioSubmit()">Subtraction<br><br>
<input type="radio" name="matrix" value="3" onclick="radioSubmit()"> Multiplication<br><br>
  <input type="radio" name="matrix" value="4"  onclick="radioSubmit()"> Division<br><br>
 <input type="submit" value="calculate" onclick="radioSubmit()"> <br><br>
</form>

<?php
$A=$_POST['a'];
$B=$_POST['b'];
$C=$_POST['c'];
$D=$_POST['d'];
$E=$_POST['e'];
$F=$_POST['f'];
$G=$_POST['g'];
$H=$_POST['h'];




$arr=array(
 array($A,$B),
 array($C,$D)
);

$arr2=array( 
    array($E,$F),
    array($G,$H)
);

$choice=$_POST['matrix'];


$result=array();

switch($choice){
    case 1:
    Addition($arr,$arr2);
    break;

    case 2:
    Subtraction($arr,$arr2);
    break;

    case 3:
     Multiply($arr,$arr2);
    break;

    case 4:
    Division($arr,$arr2);
    break;



 }


 function Addition($arr,$arr2){
   
    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr[$i]);$j++){
       
            $result[$i][$j]=$arr[$i][$j] + $arr2[$i][$j];
        }
    }

    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr[$i]);$j++){
          echo   $result[$i][$j] . " " ;
          
        }
        echo "<br>";
    }

 }


  function Subtraction($arr,$arr2){
   
    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr[$i]);$j++){
       
            $result[$i][$j]=$arr[$i][$j] - $arr2[$i][$j];
        }
    }

    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr[$i]);$j++){
       
          echo   $result[$i][$j] . " " ;
          
        }
        echo "<br>";
    }

 }
 function Division($arr,$arr2){
   
    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr[$i]);$j++){
       
            $result[$i][$j]=$arr[$i][$j] / $arr2[$i][$j];
        }
    }

    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr[$i]);$j++){
       
          echo   $result[$i][$j] . " " ;
          
        }
        echo "<br>";
    }

 }

  function Multiply($arr,$arr2){
   
    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr[$i]);$j++){
             $sum=0;
            for($k=0;$k<count($arr[$i]);$k++){
                $sum+=$arr[$i][$k] * $arr2[$k][$j];
            }
            $result[$i][$j]=$sum;
        }
    }

    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr[$i]);$j++){
       
          echo   $result[$i][$j] . " " ;
          
        }
        echo "<br>";
    }

 }

 



?>



</body>
</html>