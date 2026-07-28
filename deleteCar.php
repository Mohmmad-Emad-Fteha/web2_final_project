<?php
include "dbConnection.php";

if(isset($_GET['id']))
    {
        $car_id = $_GET['id'];

        $sql = "DELETE FROM cars WHERE id=?";
        $statment = $conn->prepare($sql);
        $statment->bind_param("i",$car_id);
        $result = $statment->execute();
        if($result)
            {
                header("Location:manageCars.php?msg=تم حذف السيارة بنجاح");
            }
    }

?>