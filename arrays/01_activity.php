<?php

$scores = array(60, 35, 100, 48);
$highest = $scores[0];

// Display scores stored in array
for ($i = 0; $i < 4; $i++) {
    echo "Score " . ($i + 1) . "=" . $scores[$i] . "<br>";
}

?>