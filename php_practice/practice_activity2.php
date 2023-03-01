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

$str = "My name is Khan";
$str5 = "my name is Sonoo jaiswal";

$str = strtolower($str);
$str2 = strtoupper($str);
$str3 = ucfirst($str);
$str4 = lcfirst($str);

$str6 = ucwords($str5);
$str7 = strrev($str5);
$str8 = strlen($str5);



echo "strtolower: " . $str . "<br/>";
echo "strtoupper: " . $str2 . "<br/>";
echo "ucfirst: " . $str3 . "<br/>";
echo "lcfirst: " . $str4 . "<br/>";

echo "ucwords: " . $str6 . "<br/>";
echo "strrev: " . $str7 . "<br/>";
echo "strlen: " . $str8 . "<br/>";



?>

</body>
</html>