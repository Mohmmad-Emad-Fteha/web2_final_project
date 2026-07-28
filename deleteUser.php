<?php
include "dbConnection.php";

if(isset($_GET['id']))
{

$id = $_GET['id'] ;
$sql = "DELETE FROM users WHERE id = ?";
$statment = $conn->prepare($sql);
$statment->bind_param("i",$id); // must delete all sql injection because this is not login data
$result = $statment->execute();

if($result)
    {
        header("Location:admin.php?msgDelete=تم حذف المستخدم بنجاح");
    }
else
    {
        echo "error";
    }
}
else
    {
        echo "Error Hapaned";
    }

$conn->close();

?>
