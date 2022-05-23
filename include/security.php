<?php
include'db_conn.php';


if(!$_SESSION['username'] AND !$_SESSION['email'] AND !$_SESSION['user_id'] AND !$_SESSION['user_img']) 
{
        $em = "Start new session by loging in again";
	header("Location: ./login.php?error=$em");

}


?>