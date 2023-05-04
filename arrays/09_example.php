<?php

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
arsort($age);

foreach ($age as $x => $value) {
    echo"Key = " . "$x" , "Value = " . "$x value";

}

?>