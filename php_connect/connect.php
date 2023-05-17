<?php
// MySQL Connect
$servername = 'localhost';
$username = 'root';
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
}

echo "Connected Successfully <br>";
// mysqli_close($conn);

// MySQL Create Database
// Create database
// $sql = "CREATE DATABASE testDB";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully <br>";
// } else {
//     "Error creating database: " . mysqli_error($conn);
// }

// MySQL Use Database
$sql = "USE testDB";
if (mysqli_query($conn, $sql)) {
    echo "Database successfully used <br>";
} else {
    echo "Erorr creating database: " . mysqli_error($conn);
}

// MySQL Create Table
// Create table
// $sql = "CREATE TABLE myForm (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     Name VARCHAR(30) NOT NULL,
//     Age VARCHAR(30) NOT NULL,
//     Gender VARCHAR(6),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";

if (mysqli_query($conn, $sql)) {
    echo "Table myForm created successfully <br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// MySQL Insert Data
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$sql = "INSERT INTO myForm (name, age, gender) VALUES
    ('$name', '$age', '$gender')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// MySQL Select
$sql = "SELECT id, name, age, gender FROM myForm";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo "id: " . $row['id'] . " - Name: " . $row['name'] . " " . $row['age'] . "<br>";
    }
} else {
    echo "0 results found";
}

// MySQL Delete
// Delete Record
$sql = "DELETE FROM myForm WHERE id=3";

if ($conn -> query($sql) === TRUE) {
    echo "Record deleted successfully <br>";
} else {
    echo "Error deleting record: " . $conn -> error;
}

// MySQL Update
$sql = "UPDATE myForm SET name='Jojo Reyes' WHERE id=2";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully <br>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


?>