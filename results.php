<?php

$w = $_POST['weight'];
$h = $_POST['height'];  
$category = "";

    if ($_POST['calculate']) {
    
        $total = $w / ($h / 100)**2;

        if($total <= 18.5){
            $category = "<h1 style= color:red>You are Underweight!</h1>";
        }
        else if ($total >= 18.5 and $total <=24.9) {
            $category = "<h1>You are Normal Weight!</h1>";
        }
        elseif ($total >= 25 and $total <=29.9) {
            $category = "<h1 style= color:pink>You are Overweight!</h1>";
        }
        else{
            $category = "<h1>You are Obese!</h1>";
        }
    }
    if (isset($_POST['back'])) {
        header("location: sd208_exercise_5-1.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FONT ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FONT-FAMILY -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Results</title>
<style>
   body{
       background-color:#20b7f7;
       font-family:'Poppins';
       color:white;
   }
   h1{
    font-size: 300%;

   } 
   ul li{
       list-style-type: none;
       font-size:150%;
   }
   /* ul{
       margin-left:30%;
       margin-right:30%;
   } */
   .row{
       margin-left: 25%;
       margin-right: 15%;
       margin-top:2%;
   }
   
</style>
</head>
<body>
<h1 class="text-center mt-5">Your Results</h1>
    <div class="container mt-5 text-center">
        <?php
            echo"<p style= font-size: 50%>$total</p>";
            echo"$category";
        ?>
        <br>
        <form action="" method="post">
         <input class="btn btn-primary" name="back" type="submit" value="Back to Calculator">
        </form>
    </div>
    
    
    <div class="mt-5">
        <h2 class="text-center ">BMI Categories</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <ul>
                        <li>Underweight</li>
                        <li>Normal weight</li>
                        <li>Overweight</li>
                        <li>Obesity</li>
                    </ul>
                </div>
                <div class="col-sm">
                    <ul>
                        <li>= < 18.5</li>
                        <li>= 18.5 - 24.9</li>
                        <li>= 25 - 29.9</li>
                        <li>= 30 and Above</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>