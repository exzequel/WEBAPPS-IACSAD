<?php

$cars = array("Volvo", "BMW", "Toyota");
echo asort($cars);

$clength = count ($cars);
    for($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }

?>