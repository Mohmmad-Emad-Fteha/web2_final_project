<?php
include "dbConnection.php";
session_start();

if(isset($_POST["email"]) && isset($_POST["password"]))
    {
         $email = $_POST['email'] ;
         $password = $_POST['password'];

        if(empty($email))
        {
            header("location:login.php?emptyEmail=The Email is Empty");
            exit();
        }
         if(empty($password))
        {
            header("location:login.php?emptyPassword=The Password is Empty");
            exit();
        }

        $sql ="SELECT * FROM users WHERE email=?";
        $statment = $conn->prepare($sql);
        $statment->bind_param("s",$email);
        $statment->execute();
        $result= $statment->get_result();
            if($result->num_rows === 1)
                {
                    $row = $result->fetch_assoc();
                    $name = $row["name"];
                    $id = $row["id"];
                    $role = $row['role'];
                    if(password_verify($password,$row["password"]))
                        {
                            $_SESSION['name'] = $name;
                            $_SESSION['id'] = $id;
                            $_SESSION['role'] = $role;
                            $_SESSION['logged'] = TRUE;
                            $hello = "Hello " . $name;
                            if($role === 1)
                            {
                                 header("Location:adminDashboard.php?hello=$hello");
                            }
                              else
                            {
                                header("Location:profileUser.php?welcome=Welocme $username");
                            }
                         
                        }
                    else
                        {
                            header("Location:login.php?errorPassword=The Password Is Not Correct");
                        }
                }
            else
                {
                    header("Location:login.php?notRigsterd=You Are Not Registerd");
                }
    }

$conn->close();

?>