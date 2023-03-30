<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 5</title>
</head>
<body>
    <form action="program_5.php" method="POST">
        <label for="height">Enter the height of the pyramid [1-30]: </label>
        <input type="number" name="height" id="height" required>
        <input type="submit" value="Submit">
        <br>

        <?php
        if (isset($_POST['height'])) {
            $height = $_POST['height'];
            if ($height >= 1 && $height <= 30) {
                for ($i = 1; $i <= $height; $i++) {
                    // print spaces before the first asterisk
                    for ($j = 1; $j <= ($height - $i); $j++) {
                        echo "&nbsp;&nbsp; ";
                    }
                    // print the asterisks for this row
                    for ($j = 1; $j <= (2 * $i - 1); $j++) {
                        echo "* ";
                    }
                    // print a line break at the end of the row
                    echo "<br>";
                }
            } else {
                echo "Invalid input. Please pick another height between 1 and 30";
            }
        }
        ?>
    </form>
</body>
</html>
