<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 2: Commision</title>
</head>

<body>
    <form action="program_2.php" method="POST">
        <label for="monthly_sales">Enter Monthly Sales: </label>
        <input type="number" name="monthly_sales" id="" required>
        <input type="submit" value="Calculate">

        <?php
        $monthly_sales = $_POST['monthly_sales'];

        if (isset($_POST['monthly_sales'])) {
            if ($monthly_sales >= 200000) {
                $commission = ($monthly_sales * 0.30) + 3000;
            } elseif ($monthly_sales >= 150000 && $monthly_sales <= 199999) {
                $commission = ($monthly_sales * 0.25) + 2000;
            } elseif ($monthly_sales >= 100000 && $monthly_sales <= 149999) {
                $commission = ($monthly_sales * 0.15) + 1000;
            } elseif ($monthly_sales >= 50000 && $monthly_sales <= 99999) {
                $commission = ($monthly_sales * 0.10);
            } elseif ($monthly_sales <= 49999) {
                $commission = ($monthly_sales * 0.05);
            } else {
                echo "Invalid input";
            }
            echo "<br>Commission: " . $commission;
        }
        ?>
    </form>
</body>

</html>