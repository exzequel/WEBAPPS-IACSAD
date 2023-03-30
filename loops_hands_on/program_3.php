<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 3</title>
</head>

<body>
    <form action="program_3.php" method="POST">
        <label for="square">Enter the square side [1-20]: </label>
        <input type="number" name="square" id="" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['square'])) {
        $square = $_POST['square'];
        if ($square < 1 || $square > 20) {
            echo "Invalid input. Please enter a number between 1 and 20.";
        } else {
            // print the top edge of the square
            for ($i = 1; $i <= $square; $i++) {
                echo "* ";
            }
            echo "<br>";

            // print the middle section of the square
            for ($i = 2; $i < $square; $i++) {
                echo "*";
                for ($j = 2; $j < $square; $j++) {
                    if ($j == $square - 1) {
                        echo "&nbsp;&nbsp;&nbsp; ";
                    } else {
                        echo "&nbsp;&nbsp;&nbsp;";
                    }
                }
                echo "*<br>";
            }

            // print the bottom edge of the square
            if ($square > 1) {
                for ($i = 1; $i <= $square; $i++) {
                    echo "* ";
                }
                echo "<br>";
            }
        }
    }
    ?>
</body>

</html>