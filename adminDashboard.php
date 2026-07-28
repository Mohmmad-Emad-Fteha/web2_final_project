<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="addCar.php">Add Car</a></li>
        <li><a href="manageCars.php">View All Car</a></li>
        <li><a href="admin.php">Data Users</a></li>
        <li><a href="manageBookings.php">Manage Booking</a></li>
        <li><a href="manageMessages.php">Manage Messages</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>

<?php

if(isset($_GET["msgAddCar"]))
    {
        $msgAddCar = $_GET["msgAddCar"];
        echo "<script>window.alert('$msgAddCar');</script>";;
    }

?>