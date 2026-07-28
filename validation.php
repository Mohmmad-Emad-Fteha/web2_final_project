<?php
include "dbConnection.php";

function GeneralValidate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data ;
}

function ValidationEmail($email)
{
     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return $email;
        }
    return false ;
}

function ValidatePassword($password)
{
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\w_]).{6,}$/";
    if(preg_match($pattern,$password))
        {
            return $password;
        }
    return false;
}

function ValdatePhone($phone)
{
    $phone = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    $phone = str_replace("-","",$phone);
    if(preg_match("/^05[69][0-9]{7}$/",$phone))
        {
            return $phone;
        }
        else
        {
        return false;
        }
}

?>