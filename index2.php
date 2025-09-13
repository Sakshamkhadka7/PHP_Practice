<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <form method="post">
    
     <label>Enter the value of A:</label>
    <input type="number" name="num1"><br>
    
    <label>Enter the value of B:</label>
    <input type="number" name="num2"><br>
    
    <input type="submit" value="calculate">

     </form>
    

    <?php
      
      $A=$_POST["num1"];
      $B=$_POST["num2"];

      $sum=$A+$B;

      echo " <script> alert('Result: ".$sum."')  </script>";

    ?>

</body>
</html>