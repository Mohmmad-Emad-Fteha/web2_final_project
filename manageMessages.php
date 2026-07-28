<?php
include "dbConnection.php";

if(isset($_GET['msg']))
    {
            $msgDelete = $_GET['msg'];
            echo "<script>window.alert('$msgDelete');</script>";
    }
$sql = "SELECT * FROM problem";

$result = $conn->query($sql);
echo"<table border='1'>
<tr>
<th>Problem ID</th>
<th>Problem Title</th>
<th>Problem Detalies</th>
<th>Delete</th>
</tr>";
if($result->num_rows > 0 )
{
    while($row = $result->fetch_assoc())
    {
        if(isset($row["problem_title"]) && isset($row["problem"]))
        {
        $id = $row["id"];
        $problem_title = $row["problem_title"];
        $problem = $row["problem"];

        echo "<tr>
        <td>$id</td>
        <td>$problem_title</td>
        <td>$problem</td>
        <td><a href=\"deleteProblem.php?id=$id\">Delete</a></td>
        </tr>";
        }
    }  
}
 else
    {
        echo "<script>window.alert('لا يوجد رسائل');</script>";
    }
echo "</table>";
 

?>