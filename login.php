<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مشروع إيجار سيارات</title>
</head>
<body>
    <form action="validateDataLogin.php" method="post">
    <label for="email">Email</label>
    <input type="text" name="email" id="email"><br><br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password"><br><br>

    <input type="submit">
    </form>
</body>
</html>
<?php

if(isset($_GET['emptyEmail']))
    {
        $emptyEmail = $_GET['emptyEmail'] ;
       echo "<script>window.alert('$emptyEmail')</script>" ;
    }
    
if(isset($_GET['emptyPassword']))
    {
        $emptyPassword = $_GET['emptyPassword'];
        echo "<script>window.alert('$emptyPassword')</script>";
    }
if(isset($_GET['errorPassword']))
    {
        $errorPassword = $_GET['errorPassword'];
        echo "<script>window.alert('$errorPassword')</script>";
    }
if(isset($_GET['notRigsterd']))
    {
        $notRigsterd = $_GET['notRigsterd'];
        echo "<script>window.alert('$notRigsterd')</script>";
    }

?>