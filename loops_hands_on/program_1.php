<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 1: Toll Charge</title>
</head>
<body>
<form action="program_1.php" method="POST">
    <label for="ticket">Enter ticket type [1-4]: </label>
    <input type="number" name="ticket" id="" required>
    <label for="kilometers">Enter kilometers travelled: </label>
    <input type="number" name="kilometers" id="" required>
    <input type="submit" value="Calculate">


    <?php
    if (isset($_POST['ticket'])) {
        $ticket = $_POST['ticket'];
        $kilometers = $_POST['kilometers'];

        switch ($ticket) {
            case 1:
                echo "<br>Ticket Color: Yellow<br>";
                echo "Vehicle Type: Car<br>";
                echo "Toll Charge: Php " . ($kilometers * 0.50);
                break;
            case 2:
                echo "<br>Ticket Color: Blue<br>";
                echo "Vehicle Type: Light Truck<br>";
                echo "Toll Charge: Php " . ($kilometers * 0.75);
                break;
            case 3:
                echo "<br>Ticket Color: Red<br>";
                echo "Vehicle Type: Bus<br>";
                echo "Toll Charge: Php " . ($kilometers * 1.00);
                break;
            case 4:
                echo "<br>Ticket Color: Orange<br>";
                echo "Vehicle Type: Heavy Truck<br>";
                echo "Toll Charge: Php " . ($kilometers * 1.25);
                break;
            default:
                echo "<br>Invalid ticket type. Please enter a number between 1 and 4.<br>";
        }
    }

    ?>
</form>
</body>
</html>