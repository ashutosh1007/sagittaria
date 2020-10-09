<?php

define("SERVER", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DB", "sagittaria");

global $connection;
$connection = mysqli_connect(SERVER, USER, PASSWORD, DB);

if($connection){
//    echo "We are connected!!";
}

ob_start(); // yeh code teri jab ini file banegi usmai daal dena ! without fail 

    $email = 'admin';
    $query = "SELECT * FROM users where email='$email'";  
    $select_all_users_query = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($select_all_users_query);
            
    if($row>0){ } else{
        $password = 'admin';

        $options = [
            'cost' => 12,
        ];

        $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);

        $data = 0;
        $query = "INSERT INTO `users`(`first_name`, `last_name`, `email`, `password`, `user_role`, `created_at`, `updated_at`, `deleted_at`) VALUES ('admin', 'admin', '$email', '$hashed_password', 'admin', 'now', $data, $data)";

        $create_user_query= mysqli_query($connection, $query);
    }
?> 
