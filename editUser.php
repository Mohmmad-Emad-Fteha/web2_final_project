<?php
include "dbConnection.php";

    if(isset($_GET['id']))
    {

    $id = $_GET['id'] ;
    $sql = "SELECT name,email,phone,user_place FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $previousUserData = $result->fetch_assoc();
  
    $name = $previousUserData["name"]; 
    $email = $previousUserData["email"];
    $phone = $previousUserData["phone"];
    $user_place = $previousUserData["user_place"];
    }
?>

<html>
<form action="updateUserData.php" method="post">
    
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <label for="name">Name</label><br>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br><br>

     <label for="email">Email</label><br>
    <input type="text" id="email" name="email" value="<?php echo $email; ?>"><br><br>

    <label for="phone">Phone</label><br>
    <input type="number" id="phone" name="phone" value="<?php echo $phone; ?>"><br><br>

    <label for="user_place">User Place</label><br>
    <input type="text" id="user_place" name="user_place" value="<?php echo $user_place; ?>"><br><br>

    <input type="submit" value="Edit User Data">

</from>
<html>

