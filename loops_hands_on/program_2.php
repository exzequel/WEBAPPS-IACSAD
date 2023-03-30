<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 2</title>
</head>
<body>
<form action="program_2.php" method="POST">
    <label for="monthly_sales">Enter Monthly Sales: </label>
    <input type="number" name="monthly_sales" id="">
    <input type="submit" value="Calculate">

    <?php
    $monthly_sales = $_POST['monthly_sales'];

    switch ($monthly_sales) {
        case $monthly_sales > 200000:
            echo "Commision: " . ($monthly_sales * 0.30) + 3000;
            break;
        case $monthly_sales < 199999 || $monthly_sales > 150000:
            echo "Commision: " . ($monthly_sales * 0.25) + 2000;
            break;
        case $monthly_sales < 149999 || $monthly_sales > 100000:
            echo "Commision: " . ($monthly_sales * 0.15) + 1000;
            break;
        case $monthly_sales < 99999 || $monthly_sales > 50000:
            echo "Commision: " . ($monthly_sales * 0.10);
            break;
        case $monthly_sales < 49999:
            echo "Commision: " . ($monthly_sales * 0.05);
            break;
        default:
            echo "Invalid input";
    }

    ?>
</form>
</body>
</html>