<?php 
    session_start();
    $_SESSION['email'] = null;
    $_SESSION['user_id'] = null;

    header("Location: login.php");
?>