<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Objects Practice</title>
</head>
<body>
    
<?php
// ADIZON, EXEQUEL
// Class definition
class greeting {
    //properties
    public $str = "Hello World";

    //methods
    function show_greeting() {
        return $this->str;
    }
}

// Create object from class
$message = new greeting;
var_dump($message);

?>

</body>
</html>