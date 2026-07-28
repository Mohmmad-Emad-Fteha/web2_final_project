<?php
include "dbConnection.php";
if(isset($_GET['msgSuccess']))
    {
        $msgSuccess = $_GET['msgSuccess'];
        echo "<script>window.alert('$msgSuccess');</script>";
    }
echo " <table border='1' width='100%'>
<tr>
<th>ID</th>
<th>User Id</th>
<th>User Name</th>
<th>Phone</th>
<th>Booking Price</th>
<th>User Place</th>
<th>Car Name</th>
<th>Model Year</th>
<th>Car Color</th>
<th>Booking Date</th>
<th>Delete</th>
</tr>";
$sql = "SELECT id,user_id,username,user_phone,user_place,booking_price,car_name,model_year,car_color,booking_date From booking_detailes";
$result = $conn->query($sql);

if($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc())
    {
        $id = $row['id'];
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_phone = $row['user_phone'];
        $booking_price = $row['booking_price'];
        $user_place = $row['user_place'];
        $car_name = $row['car_name'];
        $model_year = $row['model_year'];
        $car_color = $row['car_color'];        
        $booking_date = $row['booking_date'];

            echo "
                <tr>
                <td>$id</td>
                <td>$user_id</td>
                <td>$username</td>
                <td>$user_phone</td>
                <td>$booking_price</td>
                <td>$user_place</td>
                <td>$car_name</td>
                <td>$model_year</td>
                <td>$car_color</td>
                <td>$booking_date</td>
                <th><a href=\"deleteBooking.php?id=$id\">Delete</a></th>
                </tr>
                ";
        }
            echo "</table>";
    }
        else
        {
            echo "<script>window.alert('لا يوجد حجوزات');</script>";
        }
    
$conn->close();

?>
