<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];

echo "Thank you, <b>$name</b> for the following comments:
    <br/> <tt>$comments</tt><p> We will reply to you at
    <i>$email</i>.</p>";

?>
    
</body>
</html>