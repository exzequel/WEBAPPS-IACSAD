<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 4: Diamond</title>
</head>

<body>
    <form action="program_4.php" method="post">
        <label for="rows">Enter an odd number between 1 and 19:</label>
        <input type="number" name="rows" id="rows" required>
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['rows']))  {
        $rows = $_POST["rows"];
        while (true) {
            if ($rows % 2 == 0 || $rows > 19) {
                echo "Invalid input. Please enter an odd number between 1 and 19.<br>";
                break;
            }
            // print top half of diamond
            for ($i = 1; $i <= $rows; $i += 2) {
                for ($j = 1; $j <= ($rows - $i) / 2; $j++) {
                    echo "&nbsp; ";
                }
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }

            // print bottom half of diamond
            for ($i = $rows - 2; $i >= 1; $i -= 2) {
                for ($j = 1; $j <= ($rows - $i) / 2; $j++) {
                    echo "&nbsp; ";
                }
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;
        }
    }
    ?>
</body>

</html>