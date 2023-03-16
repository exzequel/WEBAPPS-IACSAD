<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adizon, Exequel B.</title>
</head>

<body>

    <h1>Enter Your Scores</h1>

    <form action="card.php" method="post">

        <label for="full_name">Enter Your Name</label>
        <input type="text" name="full_name" required><br><br>

        <label for="email">Enter Your Email</label>
        <input type="email" name="email" id="">

        <label for="gender">Gender</label>
        <input type="checkbox" name="male" value="male"> Male
        <input type="checkbox" name="female" id="" value="female"> Female

        <label for="section">Section: </label> <br>
        <input type="radio" name="iacsad" id="" value="section">I-ACSAD <br>
        <input type="radio" name="ibcsad" id="" value="section">I-BCSAD <br><br>


        <label for="quiz_score">Quiz Score:</label>
        <input type="number" name="quiz_score" id="quiz_score" min="0" max="100" required><br><br>

        <label for="midterm_score">Mid-term Score:</label>
        <input type="number" name="midterm_score" id="midterm_score" min="0" max="100" required><br><br>

        <label for="final_score">Final Score:</label>
        <input type="number" name="final_score" id="final_score" min="0" max="100" required><br><br>

        <button type="submit">Calculate Grade</button>
    </form>


    <?php

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];

    $gender = [$male, $female];
    $male = $_POST['male'];
    $female = $_POST['female'];

    $section = [$iacsad, $ibcsad];
    $iacsad = $_POST['i-acsad'];
    $ibcsad = $_POST['i-bcsad'];



    $quiz_score = $_POST['quiz_score'];
    $midterm_score = $_POST['midterm_score'];
    $final_score = $_POST['final_score'];

    $average = ($quiz_score + $midterm_score + $final_score) / 3;

    echo "$<h1>Hello $full_name your grade is sent to $email </h1>";

    if ($gender == $gender[$male]){
        echo "<h1>$full_name You are Male!";
    }
    else {
        echo "<h1>$full_name You are Female";
    }

    if ($section == $section[$iacsad]) {
        echo "<h1>$full_name Di ka maasim";
    } else {
        echo "<h1>$full_name Maasim ka";
    }

    if ($average >= 90.0) {
        echo "<h1>$full_name Your Grade is: A</h1>";
    } else if ($average >= 70.0 && $average < 90.0) {
        echo "<h1>$full_name Your Grade is: B</h1>";
    } else if ($average >= 50.0 && $average < 70.0) {
        echo "<h1>$full_name Your Grade is: C</h1>";
    } else {
        echo "<h1>$full_name Your Grade is: F</h1>";
    }



    ?>

</body>

</html>