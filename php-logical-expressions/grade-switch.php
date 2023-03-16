<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="grade-switch.php" method="post">
        <label for="quiz_score">Quiz Score:</label>
        <input type="number" name="quiz_score" id="quiz_score" min="0" max="100" required><br><br>

        <label for="midterm_score">Mid-term Score:</label>
        <input type="number" name="midterm_score" id="midterm_score" min="0" max="100" required><br><br>

        <label for="final_score">Final Score:</label>
        <input type="number" name="final_score" id="final_score" min="0" max="100" required><br><br>

        <button type="submit">Calculate Grade</button>
    </form>
</body>

</html>


<?php

$quiz_score = $_POST['quiz_score'];
$midterm_score = $_POST['midterm_score'];
$final_score = $_POST['final_score'];

$average = ($quiz_score + $midterm_score + $final_score) / 3;

switch($average) {
    case $average >= 90:
        echo "Your Grade is A";
        break;
    case $average >= 70.0 && $average < 90.0:
        echo "Your Grade is B";
        break;
    case $average >= 50.0 && $average < 70.0:
        echo "Your Grade is C";
        break;
    default:
        echo "Your Grade is F";
}

// if ($average >= 90.0) {
//     echo "<h1>$full_name Your Grade is: A</h1>";
// } else if ($average >= 70.0 && $average < 90.0) {
//     echo "<h1>$full_name Your Grade is: B</h1>";
// } else if ($average >= 50.0 && $average < 70.0) {
//     echo "<h1>$full_name Your Grade is: C</h1>";
// } else {
//     echo "<h1>$full_name Your Grade is: F</h1>";
// }

?>