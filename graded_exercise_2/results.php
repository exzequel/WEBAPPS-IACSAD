<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Mono&display=swap');

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f2f2f2;
            font-family: 'Space Mono', monospace;
        }

        .container {
            width: 50%;
            padding: 2.5rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            background-color: white;
        }

        h1,
        h2,
        h3 {
            margin-top: 0;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            vertical-align: top;
        }

        th {
            background-color: #f2f2f2;
            font-weight: normal;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>RICHARD GWAPO COOPERATIVE INCORPORATED</h1>
        <h3>Forever Gwapo St., Mandaluyong City</h3>
        <h3>Telephone #: 143-4456</h3>
        <hr>
        <h1>Member Information</h1>

        <?php
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $middle_initial = $_POST['middle_initial'];

        $address = $_POST['address'];
        $contact_number = $_POST['contact_number'];
        $birthday = $_POST['birthday'];

        $gender = $_POST['gender'];

        $office_address = $_POST['office_address'];
        $phone = $_POST['phone'];

        $position = $_POST['position'];
        $employment_status = $_POST['employment_status'];

        $monthly_salary = $_POST['monthly_salary'];

        $co_borrower = $_POST['co_borrower'];

        ?>

        <table>
            <tr>
                <td>Name: </td>
                <td><?php echo "$last_name, $first_name $middle_initial"; ?></td>
            </tr>
            <tr>
                <td>Address: </td>
                <td><?php echo $address; ?></td>
            </tr>
            <tr>
                <td>Telephone #: </td>
                <td><?php echo $contact_number; ?></td>
            </tr>
            <tr>
                <td>Date of Birth: </td>
                <td><?php echo $birthday; ?></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td><?php echo $gender; ?></td>
            </tr>
            <tr>
                <td>Office Address: </td>
                <td><?php echo $office_address; ?></td>
            </tr>
            <tr>
                <td>Phone #: </td>
                <td><?php echo $phone; ?></td>
            </tr>
            <tr>
                <td>Position: </td>
                <td><?php echo $position; ?></td>
            </tr>
            <tr>
                <td>Employment Status: </td>
                <td><?php echo $employment_status; ?></td>
            </tr>
            <tr>
                <td>Monthly Salary: </td>
                <td><?php echo $monthly_salary; ?></td>
            </tr>
            <tr>
                <td>Co-Borrower: </td>
                <td><?php echo $co_borrower; ?></td>
            </tr>
        </table>

        <a href="index.html">Back to Form</a>
    </div>
</body>

</html>