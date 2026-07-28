<?php
include "dbConnection.php";

if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $id = $_POST['id'];
        $name = $_POST['name'] ;
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $user_place = $_POST['user_place'];

        $sql = "UPDATE users SET 
        name=? ,
        email=? ,
        phone=? ,
        user_place=? 
        WHERE id=?
        ";
        $statment = $conn->prepare($sql);
        $statment->bind_param("ssisi",$name,$email,$phone,$user_place,$id);
        $result = $statment->execute();
        if($result == TRUE)
            {
                header("Location:admin.php?msgEditUser=تم تعديل بيانات المستخدم بنجاح");
            }
        else
            {
                echo "error";
            }
            $conn->close();
    }

?>

   