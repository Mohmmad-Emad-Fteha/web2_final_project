<?php
if(isset($_SESSION['role']) && $_SESSION['role'] == 0 )
    {
        header("Location:login.php");
    }
?>