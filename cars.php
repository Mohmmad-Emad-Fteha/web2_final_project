<?php
include "dbConnection.php";

$sql = "SELECT * FROM cars";
$result = $conn->query($sql);
if(isset($_GET['msgSuccessBooking']))
    {
        $msgSuccessBooking = $_GET['msgSuccessBooking'];
        echo "<script>window.alert('$msgSuccessBooking');</script>";
    }
while($car = $result->fetch_assoc())
    {
        $car_photo = $car['car_photo'];
        $car_name = $car['car_name'];
        $model_year = $car['model_year'];
        $car_color = $car['car_color'];
        $price = $car['price'];

        echo " <form action=\"bookingCar.php\" method=\"post\">

        <img src=\"$car_photo\" width=\"20%\"><br><br>

        <label for=\"car_name\">Car Name</label>
        <input type=\"text\" name=\"car_name\" value=\"$car_name\" readonly><br><br>

        <label for=\"model_year\">Model Year</label>
        <input type=\"number\" name=\"model_year\" value=\"$model_year\" readonly><br><br>

        <label for=\"color\">Enter Your Car Color </label><br>
        <input type=\"text\" name=\"car_color\" value=\"$car_color\" readonly><br><br>

        <label for=\"price\">Car Price</label>
        <input type=\"text\" name=\"price\" value=\"$price\" readonly><br><br>

        <lable id=\"booking_date\">Date Of Booking (From - To)</lable><br>
        <input type=\"date\" name=\"booking_date_from\" id=\"booking_date\" required><br><br>
        <input type=\"date\" name=\"booking_date_to\" id=\"booking_date\" required><br><br>

        <input type=\"submit\" value=\"Booking Car\">
        </form> ";
    }


?>
