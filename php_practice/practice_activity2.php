<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice Activity 2</title>
</head>
<body>
    
<?php
// PHP Practice Activity 2

// declare string content
$str = "My name is Khan"; 
$str5 = "my name is Sonoo jaiswal";

$str = strtolower($str); // modify ALL letters of string to lowercase
$str2 = strtoupper($str); // modify ALL letters of string to uppercase
$str3 = ucfirst($str); // modify FIRST character of string to uppercase
$str4 = lcfirst($str); // modify FIRST character of string to lowercase

$str6 = ucwords($str5); // modify FIRST CHARACTER of every word in a string to uppercase
$str7 = strrev($str5); // reverses the content of a string
$str8 = strlen($str5); // calculates the length of a string


echo "strtolower: " . $str . "<br/>"; 
echo "strtoupper: " . $str2 . "<br/>";
echo "ucfirst: " . $str3 . "<br/>";
echo "lcfirst: " . $str4 . "<br/>";

echo "<br />";

echo "ucwords: " . $str6 . "<br/>";
echo "strrev: " . $str7 . "<br/>";
echo "strlen: " . $str8 . "<br/>";

?>

</body>
</html>