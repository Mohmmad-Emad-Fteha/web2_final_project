<?php
session_start();
include "dbConnection.php";


if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $car_name = $_POST['car_name'];
        $model_year = $_POST['model_year'];
        $car_color = $_POST['car_color'];
        $price = $_POST['price'] . "$";
        
        $booking_date_from = $_POST['booking_date_from'];
        $booking_date_to = $_POST['booking_date_to'];
        $booking_date = $booking_date_from . " To " . $booking_date_to; 

    $id = $_SESSION['id'];  

    $sql = "SELECT id,name,phone,user_place FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();

    $user_id = $data['id'];
    $userName = $data['name'];
    $userPhone = $data['phone'];
    $userPlace = $data['user_place'];

$q = "INSERT INTO booking_detailes(user_id,username,user_phone,user_place,booking_price,car_name,model_year,car_color,booking_date)
VALUES (?,?,?,?,?,?,?,?,?)";
        $statment = $conn->prepare($q);
        $statment->bind_param("isssssiss",$user_id,$userName,$userPhone,$userPlace,$price,$car_name,$model_year,$car_color,$booking_date);
        $result = $statment->execute();
        $conn->close();
        if($result)
            {
                header("Location:cars.php?msgSuccessBooking=تم حجز السيارة بنجاح");
            }
         }
?>

