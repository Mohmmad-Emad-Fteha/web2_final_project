<?php
include "dbConnection.php";
require "authorities.php";

if(!$_SESSION['logged'])
    {
        header("Location:login.php");
    }
if(isset($_GET['welcome']))
    {
        $welcome = $_GET['welcome'];
        echo "<h1>$welcome</h1>";
    }
if(isset($_GET['hello']))
    {
        $hello = $_GET['hello'];
        echo "<h1>$hello</h1>";
    }

    if(isset($_GET['email']))
        {
        $email = $_GET['email'];
        $sql = "SELECT user_photo FROM users Where email='$email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $userPhoto = $row['user_photo'];
         echo "<img src=\"$userPhoto\" width=\"30%\"";
         echo "<br><br>";
         echo "<br><br>";

        }

echo "<a href='logout.php'>Logout</a><br><br>";
echo "<a href='cars.php'>cars</a><br><br>";
echo "<a href='conectUs.php'>Conect Us</a>";

$conn->close(); 
?>
