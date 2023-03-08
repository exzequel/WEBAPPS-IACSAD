<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBAPPS Assignment 3</title>
</head>
<body>

    <form action="php-converter.php" method="post">

        <div class="length-conversion">

            <h1>Length Conversion</h1>
            <label for="convert-length"></label> Enter length in centimeter: 
            <input type="number" name="convert-length"><br><br>
            <input type="submit" value="Convert">

        </div>

        <div class="rectangle-area">

            <h1>Area of the Rectangle</h1>
            <label for="rectangle-length"></label> Enter length: <input type="number" name="rectangle-length"><br><br>
            <label for="rectangle-width"></label> Enter width: <input type="number" name="rectangle-width"><br><br>
            <input type="submit" value="Calculate">


        </div>

        <div class="circle-area">

            <h1>Area of Circle</h1>
            <label for="radius"></label> Enter radius: 
            <input type="number" name="radius"><br><br>
            <input type="submit" value="Calculate">

        </div>

    </form>

</body>
</html>