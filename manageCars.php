<?php
include "dbConnection.php";

if(isset($_GET['msg']))
    {
            $msgDelete = $_GET['msg'];
            echo "<script>window.alert('$msgDelete');</script>";
    }

$sql = "SELECT id,car_name,model_year,car_color,price FROM cars";

$result = $conn->query($sql);
echo"<table border='1'>
<tr>
<th>Car ID</th>
<th>Car Name</th>
<th>Model Year</th>
<th>Car Color</th>
<th>Price</th>
<th>Delete</th>
</tr>";
if($result->num_rows > 0 )
{
    while($row = $result->fetch_assoc())
    {
        if(isset($row["id"]))
        {
        $id = $row["id"];
        $car_name = $row["car_name"];
        $model_year = $row["model_year"];
        $car_color = $row["car_color"];
        $price = $row["price"];

        echo "<tr>
        <td>$id</td>
        <td>$car_name</td>
        <td>$model_year</td>
        <td>$car_color</td>
        <td>$price</td>
        <td><a href=\"deleteCar.php?id=$id\">Delete</a></td>
        </tr>";
        }
    }  
}
 else
    {
        echo "<script>window.alert('لا يوجد سيارات');</script>";
    }
echo "</table>";
 

?>