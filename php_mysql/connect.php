<?php

$servername = 'localhost';
$username = 'root';
$password = '';

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";
// mysqli_close($conn);

// Create database
// $sql = 'CREATE DATABASE myDBase';
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }

$sql = "USE myDBase";
if (mysqli_query($conn, $sql)) {
    echo "Database successfully used <br>";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Create Table

$sql = "CREATE TABLE myForm (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(30) NOT NULL,
    Age VARCHAR(3) NOT NULL,
    Gender VARCHAR(6),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// if (mysqli_query($conn, $sql)) {
//     echo "Table myForm created successfully <br>";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

// MySQL Insert DATA

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$sql = "INSERT INTO myForm (name, age, gender) VALUES ('$name', '$age', '$gender')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Delete record

// $sql = "DELETE FROM myDB"

// Update record

// $sql = "UPDATE myDBase SET name='Doe' WHERE id='2'";

// if (mysqli_query($conn, $sql)) {
//     echo "Record updated successfully";
// } else {

// }

// MYSQL SELECT
$sql = "SELECT id, name, age FROM myForm";
$result = $conn -> query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row['id'] . " - Name: " . $row['name'] . " " . $row['age'] . " <br";
    }    
} else {
    echo "O results";
}



?>

