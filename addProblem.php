<?php
include "dbConnection.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $problemTitle = $_POST['problem_title'];
        $problem = $_POST['problem']; 

        $sql = "INSERT INTO problem(problem_title,problem) VALUES (?,?)";
        $statment = $conn->prepare($sql);
        $statment->bind_param("ss",$problemTitle,$problem);
        $result = $statment->execute();

        if($result === TRUE)
            {
                header("Location:conectUs.php?msgSuccess=Thanks You We Are Process your Problem !");
            }
    }

?>