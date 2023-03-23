<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
    <link rel="stylesheet" href="04_example.css">
</head>

<body>
    <div class="container">
        <form method="post">
            <h1>Find the Factorial of a Number</h1>
            <label for="factorial">Enter a number to find its factorial: </label>
            <input type="number" required name="factorial">
            <button type="submit" class="btn">Calculate</button>
        </form>

        <?php
        // ADIZON, EXEQUEL B.
        if (isset($_POST['factorial'])) {
            $factorial = $_POST['factorial'];

            // For Loop
            $result = 1;
            for ($i = $factorial; $i > 1; $i--) {
                $result *= $i;
            }
            echo "Factorial of $factorial using for loop: $result<br>";

            // While Loop
            $result = 1;
            $i = $factorial;
            while ($i > 1) {
                $result *= $i;
                $i--;
            }
            echo "Factorial of $factorial using while loop: $result<br>";

            // Do-while Loop
            $result = 1;
            $i = $factorial;
            do {
                $result *= $i;
                $i--;
            } while ($i > 1);
            echo "Factorial of $factorial using do-while loop: $result";
        }
        ?>
    </div>
</body>

</html>