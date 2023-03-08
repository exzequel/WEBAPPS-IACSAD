<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBAPPS Assignment 3</title>
</head>
<body>

<?php

    $length = $_POST['convert-length'];
    $meter = $length/100;
    $kilometer = $length/100000;

    $rectangle_length = $_POST['rectangle-length'];
    $rectangle_width = $_POST['rectangle-width'];
    $rectangle_area = $rectangle_length * $rectangle_width;

    $radius = $_POST['radius'];
    $pi = 3.1416;
    $area = $pi * pow($radius, 2);

?>

 <form action="convert.php" method="post">

        <div class="length-conversion">

            <h1>Length Conversion</h1>
            <label for="convert-length"></label> Enter length in centimeter: 
            <input type="number" name="convert-length" ><br><br>
            <input type="submit" value="Convert">

            <?php
            echo "<br>Length in meter: ".$meter;
            echo "<br>Length in kilometer: ".$kilometer;
            ?>
            
        </div>

        <div class="rectangle-area">

            <h1>Area of the Rectangle</h1>
            <label for="rectangle-length"></label> Enter length: <input type="number" name="rectangle-length" ><br><br>
            <label for="rectangle-width"></label> Enter width: <input type="number" name="rectangle-width" ><br><br>
            <input type="submit" value="Calculate">

            <?php 
            echo "<br>Area of rectangle: ".$rectangle_area;
            ?>


        </div>

        <div class="circle-area">

            <h1>Area of Circle</h1>
            <label for="radius"></label> Enter radius: 
            <input type="number" name="radius" ><br><br>
            <input type="submit" value="Calculate">

            <?php
            echo "<br>Area of circle: ".$area;
            ?>

        </div>
        <br>        
        <button><a href="php-converter.html">Restart</a></button>

</form>
    
</body>
</html>