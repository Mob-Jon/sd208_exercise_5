<?php

//    if(isset($_POST['calculate'])){
//         header("Location:http://localhost:8081/sd208_exercise_5/results.php");
//     }

//     ?>

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
    <title>BMI CALCULATOR</title>

<style>
    body{
        background-image:url("https://blog.gympass.com/wp-content/uploads/2018/03/ThinkstockPhotos-892146834-1.jpg");
        background-repeat:no-repeat;
        background-size:100% auto;
        margin:0;
        font-family:'Poppins';
        color:white;
    }
    form{
        margin-top:10%;
    }
    label{
        font-size:150%;
    }
</style>
</head>
<body>
    <div class="float-right mr-5">
            <h1 class="text-center mt-5">Calculate my BMI please!</h1>
            <form action="results.php" method="post">
                <div class="form-group row">
                    <div class="col-xs-4 ml-5">
                        <label>Height(cm)</label>
                        <input class="form-control" name="height" placeholder="Enter height" type=number>
                    </div>
                    <div class="col-xs-4 ml-5">
                        <label>Weight(kg)</label>
                        <input class="form-control" name="weight" placeholder="Enter weight" type=number>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <input class="btn btn-primary btn-lg" name="calculate" type="submit" value="Calculate BMI">
                </div>
            </form>
    </div>
</body>
</html>