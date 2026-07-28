<?php
include "dbConnection.php";

if(isset($_GET['id']))
    {
        $problem_id = $_GET['id'];

        $sql = "DELETE FROM problem WHERE id=?";
        $statment = $conn->prepare($sql);
        $statment->bind_param("i",$problem_id);
        $result = $statment->execute();
        if($result)
            {
                header("Location:manageMessages.php?msg=تم حذف الرسالة بنجاح");
            }
    }

?>