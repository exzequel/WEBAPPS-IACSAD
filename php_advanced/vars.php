<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to my home page!</h1>
    <?php 
        require 'vars.php';
        echo "I have a $color $car.";
    ?>
</body>
</html>


<?php

$color = 'red';
$car = 'BMW';

?>