<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Numbers and Concatenate Strings</title>

    <!-- CSS Styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            padding: 30px;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
            max-width: 400px;
        }
        input {
            padding: 8px;
            margin: 5px 0;
            width: 95%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
          
        }
        button:hover {
            background-color: #45a049;
              margin-left:80px;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e8f5e9;
            border-left: 5px solid #4CAF50;
        }
    </style>

   
</head>
<body>

    <form method="post">
        <!-- Numbers -->
        Enter first number:  
        <input type="text" name="num1" /><br><br>

        Enter second number:  
        <input type="text" name="num2" /><br><br>  

        <!-- Names -->
        Enter the first Name:
        <input type="text" name="num3" /><br><br>

        Enter the second Name:
        <input type="text" name="num4" /> <br><br>

        <button type="submit" name="submit" >Calculate</button>
    </form>

    <?php
    if(isset($_POST['num1']) && isset($_POST['num2'])){    
        $first=$_POST['num1'];
        $second=$_POST['num2'];
        $sum=(int)$first + (int)$second;
        echo "<div class='result'><h3>Server Number Result: $first + $second = $sum</h3></div>"
        echo "<script> alert($sum) </script>";
    }

    if(isset($_POST['num3']) && isset($_POST['num4'])){
        $firstName=$_POST['num3'];
        $secondName=$_POST['num4'];
        $joined=$firstName . " " . $secondName;
        echo "<script>   alert($joined)  </script>";;
    }
    ?>

</body>
</html>
