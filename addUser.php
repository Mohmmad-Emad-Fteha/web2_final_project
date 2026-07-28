<?php
session_start();
include "dbConnection.php";
require_once "validation.php";

// The Problem is in Photo
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username  = GeneralValidate( $_POST['username']);
        $email = ValidationEmail(GeneralValidate(($_POST['email'])));
        if(!$email)
            {
                header("Location:signup.php?erorrEmail=InvalidEmail");
                exit();
            }
       
        $password = ValidatePassword($_POST['password']);
        if(!$password)
            {
                header("Location:signup.php?errorPassword=InvalidPassword");
                exit();
            }
        else
            {
                $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
            }

        $phone = ValdatePhone($_POST['phone']);

        if(!$phone)
            {
                header("Location:signup.php?errorPhone=invalidPhone");
                exit();
            }

        $user_place = $_POST['user_place'];

        if(isset($_FILES['user_photo']) && isset($_FILES['user_licence']))
            {
                $userPhoto =  $_FILES['user_photo']  ;
                $userPhotoName = $userPhoto["name"];
                $userPhotoTmpName = $userPhoto["tmp_name"];
                $userPhotoSize = $userPhoto["size"];
                $userPhotoErorr = $userPhoto["error"];
                $userPhotoExt = strtolower(pathinfo($userPhotoName , PATHINFO_EXTENSION));

                $userLicence = $_FILES['user_licence'] ;
                $userLicenceName = $userLicence["name"];
                $userLicenceTmpName = $userLicence["tmp_name"];
                $userLicenceSize = $userLicence["size"];
                $userLicenceErorr = $userLicence["error"];
                $userLicenceExt = strtolower(pathinfo($userLicenceName , PATHINFO_EXTENSION));

                $allowed = ["jpg","png","gif","jpeg"];

                if($userPhotoErorr === 0 && $userLicenceErorr === 0)
                    {

                    if(in_array($userPhotoExt,$allowed) && in_array($userLicenceExt,$allowed))
                        {

                        if($userPhotoSize < 5500000 && $userLicenceSize < 5500000)
                            {
                                $newUserPhotoName =  uniqid("userPhoto",true) . "." . $userPhotoExt;
                                $newUserLicenceName =  uniqid("userLicence",true) . "." . $userLicenceExt;

                                $newUserPhotoTmp = "upload/" . $newUserPhotoName ;
                                $newUserLicenceTmp = "upload/" . $newUserLicenceName ;

                                move_uploaded_file($userPhotoTmpName,$newUserPhotoTmp);
                                move_uploaded_file($userLicenceTmpName,$newUserLicenceTmp);
                            }
                        else 
                            {
                                echo "Please The Image > 5MB , please add image < 5MB ";
                            }
                        }
                    else
                        {
                            echo "The Destination is not Support in This Websit";
                        }
                    }
                else
                    {
                        echo "We Found Error";
                    }
            }
        
        $sql = "INSERT INTO users(name,phone,email,password,user_place,user_photo,user_licence,role)
         VALUES(?,?,?,?,?,?,?,?)" ;
         $stat = $conn->prepare($sql);
         if($email === "admin@gmail.com")
            {
                $role = 1 ;
            }
            else
            {
                $role = 0;
            }

         $stat->bind_param("sisssssi",$username,$phone,$email,$password,$user_place,$newUserPhotoTmp,$newUserLicenceTmp,$role);
         $result = $stat->execute();
         if($result)
            {
                $_SESSION['name'] = $username;
                $_SESSION['role'] = $role;
                $_SESSION['id'] = $conn->insert_id;
                $_SESSION['logged'] = TRUE;
                $welcome= "Welocme" . $username;
                $conn->close();
                if($role === 1)
                {
                  header("Location:adminDashboard.php");
                }
                 else
                {
                 header("Location:profileUser.php?welcome=Welocme $username&email=$email");
                }
                
            }
    }
?>