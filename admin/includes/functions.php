<?php 
//session_start();
function confirmQuery($result) {
    global $connection;
    if(!$result) {
        die("Query Failed : " . mysqli_error( $connection ) );
    }
}

function checkUser(){
    if(!isset($_SESSION['email'])) {
            die ("<h3 style = 'color: red'> You have not logged in please Login from <a href = '../admin/login.php'>here</h3>");
    }else{
        $email = $_SESSION["email"];
        return $email;
    }
}

?>