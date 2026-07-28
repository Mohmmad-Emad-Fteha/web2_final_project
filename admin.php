<?php
include "dbConnection.php";
require "authorities.php";
require "adminAuth.php";


echo " <table border='1' width='100%'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>User Place</th>
<th>Delete</th>
<th>Edit</th>
</tr>";
$sql = "SELECT id,name,email,phone,user_place From users";
$result = $conn->query($sql);

if($result->num_rows > 0 )
    {
        if(isset($_GET['msgDelete'])){
            $delete = $_GET['msgDelete'];
           echo "<script>window.alert('$delete');</script>";
        }

        if(isset($_GET['msgEditUser'])){
            $edit = $_GET['msgEditUser'];
           echo " <script>window.alert('$edit');</script>";
        }

        while($dataUser = $result->fetch_assoc())
         {
            $id = $dataUser["id"] ; 
            $name = $dataUser["name"] ; 
            $email = $dataUser["email"] ;
            $phone = $dataUser["phone"] ;
            $user_place = $dataUser["user_place"] ; 
            echo "
                <tr>
                <th>$id</th>
                <th>$name</th>
                <th>$email</th>
                <th>$phone</th>
                <th>$user_place</th> 
                <th><a href=\"deleteUser.php?id=$id\">Delete</a></th>
                <th><a href=\"editUser.php?id=$id\">Edit</a></th>
                </tr>
                ";
        }
            echo "</table>";
        
    }
        else
        {
            echo "<script>window.alert('لا يوجد طلاب');</script>";
        } 
$conn->close();
?>