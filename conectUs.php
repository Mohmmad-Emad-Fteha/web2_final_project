<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="addProblem.php" method="post">

    <label for="problem_title">Problem Title</label><br>
    <input type="text" name="problem_title" id="problem_title"><br><br>

    <label for="problem">Enter The Problem Details Please</label><br>
    <textarea name="problem" id="problem" cols="30" rows="10">
        
    </textarea><br>
    <input type="submit">
    </form>
</body>
</html>

<?php

if(isset($_GET['msgSuccess']))
    {
       $msgSuccess = $_GET['msgSuccess'];
       echo "<script>window.alert('$msgSuccess');</script>";
    }

?>