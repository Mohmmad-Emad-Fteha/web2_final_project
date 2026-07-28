<?php
include "dbConnection.php";

if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM booking_detailes WHERE id=$id";
        if($conn->query($sql))
            {
                header("Location:manageBookings.php?msgSuccess=تم حذف الحجز بنجاح");
            }
    }
$conn->close();
?>