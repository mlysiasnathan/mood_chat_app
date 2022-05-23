<?php
session_start();


if (isset($_POST['logout_btn']))
{
    // code...
    
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['user_id']);
    unset($_SESSION['user_img']);
    unset($_SESSION['user_bday']);

    $em = "Start new session by loging in again";
    header("Location: ../login.php");

}


// if (isset($_POST['admin_logout_btn']))
// {
//     // code...
//     unset($_SESSION['admin']);
//     header('Location: home.php');

// }




?>