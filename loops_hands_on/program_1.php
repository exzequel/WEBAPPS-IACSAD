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
    <label for="ticket">Enter ticket type (1, 2, 3, 4): </label>
    <input type="number" name="ticket" id="">
    <label for="kilometers">Enter kilometers travelled: </label>
    <input type="number" name="kilometers" id="">
    <input type="submit" value="Calculate">


    <?php
    $ticket = $_POST['ticket'];
    $kilometers = $_POST['kilometers'];

    switch($ticket) {
        case 1:
            echo "Ticket Color: Yellow<br>";
            echo "Vehicle Type: Car<br>";
            echo "Toll Charge: Php " . ($kilometers * 0.50);
            break;
        case 2:
            echo "Ticket Color: Blue<br>";
            echo "Vehicle Type: Light Truck<br>";
            echo "Toll Charge: Php " . ($kilometers * 0.75);
            break;
        case 3:
            echo "Ticket Color: Red<br>";
            echo "Vehicle Type: Bus<br>";
            echo "Toll Charge: Php " . ($kilometers * 1.00);
            break;
        case 4:
            echo "Ticket Color: Orange<br>";
            echo "Vehicle Type: Heavy Truck<br>";
            echo "Toll Charge: Php " . ($kilometers * 1.25);
            break;
        default:
            echo "Invalid ticket type";
 
    }
    ?>
</form>
</body>
</html>