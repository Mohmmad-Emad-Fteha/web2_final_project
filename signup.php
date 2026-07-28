<?php

if(isset($_GET['errorEmail']))
    {
        $errorEmail = $_GET['errorEmail'];
        echo "<script>window.alert('$errorEmail');</script>";
    }

if(isset($_GET['errorPhone']))
    {
        $errorPhone= $_GET['errorPhone'];
        echo "<script>window.alert('$errorPhone');</script>";
    }
if (isset($_GET['errorPassword']))
    {
        $errorPassword = $_GET['errorPassword'];
        echo "<script>window.alert('$errorPassword');</script>";
    }
       

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مشروع إيجار سيارات</title>
</head>
<body>
    <form action="addUser.php" method="post" enctype="multipart/form-data">
   <label for="username">Username</label><br>
    <input type="text" name="username" id="username"><br><br>

    <label for="email">Email</label><br>
    <input type="text" name="email" id="email"><br><br>

    <label for="password">Password</label><br>
    <input type="password" name="password" id="password" title="Must Content Capital and Small letter and $!#@ and number"><br><br>

        <label for="phone">Phone</label><br>
    <input type="number" name="phone" id="phone"><br><br>

    <label for="user_place">User Place</label><br>
    <select name="user_place" id="user_place">
        <option value="شمال غزة">شمال غزة</option>
        <option value="غزة">غزة</option>
        <option value="الوسطى">الوسطى</option>
        <option value="خانيونس">خانيونس</option>
        <option value="رفح">رفح</option>
    </select><br><br>

    <label for="user_photo">Add Your Image : </label><br>
    <input type="file" name="user_photo" id="user_photo"><br><br>

    <label for="user_licence">Add Your Licence : </label><br>
    <input type="file" name="user_licence" id="user_licence"><br><br>


    <input type="submit" value="تسجيل الدخول">
    </form>
</body>
</html>
