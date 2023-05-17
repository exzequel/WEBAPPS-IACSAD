<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Forms</title>
</head>
<body>

<form action="connect.php" method="POST">

<p>
    <b>Name: </b><input type="text" name="name">
</p>

<p>
    <b>Age: </b><input type="number" name="age">
</p>
<p>
    <b>Gender: </b>
    <input type="radio" name="gender" value="Male" > Male
    <input type="radio" name="gender" value="Female" > Female
</p>

<input type="submit" value="Submit">

</form>
    
</body>
</html>