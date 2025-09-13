<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
     
    <label>Choose for arithmetic operation</label> <br>
     <input type="radio" name="choice" value="1" >Addition<br>
     <input type="radio" name="choice" value="2" >Subtraction<br>
     <input type="radio" name="choice" value="3" >Division<br>
     <input type="radio" name="choice" value="4"> Multiplication<br>
     <input type="radio" name="choice" value="5"> table of 2 <br>


     <label>Enter the value of A:</label>
    <input type="number" name="num1"><br>
    
    <label>Enter the value of B:</label>
    <input type="number" name="num2"><br>
    
    <input type="submit" value="calculate">

    </form>

    <?php
      
      $A=$_POST['num1'];
      $B=$_POST['num2'];

      $choice =$_POST['choice'];

      $result='';

      switch($choice){
       
        case 1:
            $result=$A+$B;
            echo "$result";
            break;
        case 2:
            $result=$A-$B;
            echo "$result";
            break;
        case 3:
            $result=$A/$B;
            echo "$result";
        case 4:
            $result=$A*$B;
            echo "$result";
        case 5:
            for($i=$A;$i<=$A;$i++){
            
                for($j=1;$j<=10;$j++){
                    $result=$i*$j;
                    echo "$result <br>";
                }

            }

      }
     

    ?>
</body>
</html>