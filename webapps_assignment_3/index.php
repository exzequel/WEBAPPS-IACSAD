<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBAPPS Assignment 3</title>
</head>
<body>

    <div class="length-conversion">
		<form name="length-conversion" method="post">
			<h1>Length Conversion</h1>
			Enter length in centimeter: <input type="number" name="length"><br><br>
			<input type="submit" value="Convert">
		</form>
		<?php
		if(isset($_POST['length'])) {
			$length = $_POST['length'];
			$meter = $length/100;
			$kilometer = $length/100000;
			echo "<br>Length in meter: ".$meter;
			echo "<br>Length in kilometer: ".$kilometer;
		}
    ?>
    </div>

    <div class="rectangle-area">
		<form name="rectangle-area" method="post">
			<h1>Area of a Rectangle</h1>
			Enter length: <input type="number" name="length"><br><br>
			Enter width: <input type="number" name="width"><br><br>
			<input type="submit" value="Calculate">
		</form>
		
		<?php
		if(isset($_POST['length']) && isset($_POST['width'])) {
			$length = $_POST['length'];
			$width = $_POST['width'];
			$area = $length * $width;
			echo "<br>Area of rectangle: ".$area;w
		}
		?>
    </div>

    <div class="circle-area">
		
		<form name="circle-area" method="post">
			<h1>Area of a Circle</h1>
			Enter radius: <input type="number" name="radius"><br><br>
			<input type="submit" value="Calculate">
		</form>
		<?php
		if(isset($_POST['radius'])) {
			$radius = $_POST['radius'];
			$pi = 3.1416;
			$area = $pi * pow($radius, 2);
			echo "<br>Area of circle: ".$area;
		}
		?>
    </div>

    
</body>
</html>