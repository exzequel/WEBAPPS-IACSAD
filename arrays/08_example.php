<?php

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

asort($age);

echo "asort: <br>";
print_r($age);

ksort($age);
echo "<br> ksort: <br>";
print_r($age);

// $sort1 = asort($age);
// $sort2 = ksort($age);

// echo $sort1;
// echo $sort2;



?>