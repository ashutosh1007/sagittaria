<?php
    include_once("../../includes/db.php");
    include_once("functions.php");

    $result = "success";
    $uploads_dir_products = '../images/products/';
    $uploads_dir_certifications = '../images/certifications/';
    $uploads_dir_categories = '../images/categories/';

if(isset($_POST['action'])){
        
        $action = $_POST['action'];      
        
        if( $action == "create_category" ){
            $category_name = $_POST['category_name'];
            $category_image = $_FILES['file']['name'];
            $category_image_temp = $_FILES['file']['tmp_name'];  
            $query = "SELECT * FROM categories where category_name='$category_name'";  
            $select_all_categories_query = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($select_all_categories_query);
            
            if($row>0){
                echo "warning";
            }else{
                move_uploaded_file($category_image_temp, $uploads_dir_categories.$category_image);
                $query = "INSERT INTO categories(category_name, category_image, created_at, updated_at, deleted_at) VALUES ('$category_name', '$category_image', now(), 0, 0)";
                $create_category_query = mysqli_query($connection, $query);
                confirmQuery($create_category_query);
                echo $result;
            }
    }
    
    elseif($action == "create_product" ){
        $product_name = $_POST['product_name'];
        $product_image = $_FILES['file']['name'];
        $product_image_temp = $_FILES['file']['tmp_name'];  
        $product_category_id = $_POST['category_id'];
        $product_description = $_POST['product_description'];
    
        $query = "SELECT * FROM products where product_name='$product_name'";  
        $select_all_products_query = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($select_all_products_query);
         
        if($row>0){
                echo "warning";
        }else{
            move_uploaded_file($product_image_temp, $uploads_dir_products.$product_image);
            $query = "INSERT INTO products(category_id, product_name, product_image, product_description, created_at, updated_at, deleted_at) VALUES ('$product_category_id','$product_name', '$product_image', '$product_description', now(), 0, 0)";
            $create_product_query = mysqli_query($connection, $query);       
            confirmQuery($create_product_query);
            echo $result;
        }
            
    } 
    
    elseif( $action == "create_certification" ){
        
        $colon = ", ";
        $certificate_name = $_POST['certification_name'];
        $certificate_image = $_FILES['file']['name'];
        $certificate_image_temp = $_FILES['file']['tmp_name'];

        move_uploaded_file($certificate_image_temp, $uploads_dir_certifications.$certificate_image);

        $query = "SELECT * FROM certifications where certificate_name='$certificate_name'";  
        $select_all_certifications_query = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($select_all_certifications_query);
         
        if($row>0){
                echo "warning";
        }else{
            $query = "INSERT INTO certifications(certificate_name, certificate_image, created_at, updated_at, deleted_at) VALUES ('$certificate_name$colon', '$certificate_image', now(), 0, 0)";

            $create_certification_query = mysqli_query($connection, $query);
            confirmQuery($create_certification_query);
            echo $result;
        }
    }
        
    elseif( $action == "create_user" ){
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $options = [
            'cost' => 12,
        ];
        
        $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);
       
        $query = "SELECT * FROM users where email='$email'";  
        $select_all_users_query = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($select_all_users_query);
            
        if($row>0){
            echo "warning";
        }else{
            $query = "INSERT INTO users(first_name, last_name, email, password, created_at, updated_at, deleted_at) VALUES ('$first_name', '$last_name',
            '$email', '$hashed_password', now(), 0, 0)";

            $create_user_query = mysqli_query($connection, $query);
            confirmQuery($create_user_query);
            echo $result;
        }
    }
    
    elseif( $action == "edit_category" ){
            $category_id = $_POST['category_id'];
            $category_name = $_POST['category_name'];
            if(isset($_FILES['file'])){
                $category_image = $_FILES['file']['name'];
                $category_image_temp = $_FILES['file']['tmp_name'];  
            
                move_uploaded_file($category_image_temp, $uploads_dir_categories.$category_image);
            }
            else {
                $query = "SELECT * FROM categories WHERE id = $category_id";
                $category_image_query = mysqli_query($connection, $query);
                confirmQuery($category_image_query);
            
                if($row = mysqli_fetch_assoc($category_image_query) ) {
                $category_image = $row['category_image'];    
            }
        }    
          
        $query = "UPDATE categories SET ";
        $query .= "category_name = '$category_name', ";
        $query .= "category_image = '$category_image', ";
        $query .= "updated_at =  now() ";
        $query .= "WHERE id = $category_id";

        $update_category_query = mysqli_query($connection, $query);

        confirmQuery($update_category_query);
        echo "success";
    }

    elseif( $action == "edit_product"){
            $product_id = $_POST['product_id'];
            $product_category_id = $_POST['product_category_id'];
            $product_name = $_POST['product_name'];
            if(isset($_FILES['file'])){
                $product_image = $_FILES['file']['name'];
                $product_image_temp = $_FILES['file']['tmp_name'];

                move_uploaded_file($product_image_temp, $uploads_dir_products.$product_image);
                
            }
            else{
                $query = "SELECT * FROM products WHERE product_id = $product_id";
                $product_image_query = mysqli_query($connection, $query);
                confirmQuery($product_image_query);
                if($row = mysqli_fetch_assoc($product_image_query) ) {
                    $product_image = $row['product_image'];
                }
            }
            
            $product_description = $_POST['product_description'];
            
            $query = "UPDATE products SET ";
            $query .= "category_id = '$product_category_id', ";
            $query .= "product_name = '$product_name', ";
            $query .= "product_image = '$product_image', ";
            $query .= "product_description = '$product_description', ";
            $query .= "updated_at =  now() ";
            $query .= "WHERE product_id = $product_id";

            $update_product_query = mysqli_query($connection, $query);

            confirmQuery($update_product_query);
            echo $result;
        }
    
    elseif( $action == "edit_certification" ){
        
        $cert_id = $_POST['cert_id'];
        $certificate_name = $_POST['certification_name'];
        if(isset($_FILES['file'])){
            $certificate_image = $_FILES['file']['name'];
            $certificate_image_temp = $_FILES['file']['tmp_name'];  
            
            move_uploaded_file($certificate_image_temp, $uploads_dir_certifications.$certificate_image);
        }
        else {
            $query = "SELECT * FROM certifications WHERE id = $cert_id";
            $certificate_image_query = mysqli_query($connection, $query);
            confirmQuery($certificate_image_query);
            
            if($row = mysqli_fetch_assoc($certificate_image_query) ) {
                $certificate_image = $row['certificate_image'];    
            }
        }    
          
        $query = "UPDATE certifications SET ";
        $query .= "certificate_name = '$certificate_name', ";
        $query .= "certificate_image = '$certificate_image', ";
        $query .= "updated_at =  now() ";
        $query .= "WHERE id = $cert_id";

        $update_certification_query = mysqli_query($connection, $query);

        confirmQuery($update_certification_query);
        echo "success";
    }
    
    elseif( $action == "edit_user" ){
        $user_id = $_POST['user_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $options = [
            'cost' => 12,
        ];
        
        $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);
       
        $query = "UPDATE users SET ";
        $query .= "first_name = '$first_name', ";
        $query .= "last_name = '$last_name', ";
        $query .= "email = '$email', ";
        $query .= "password = '$hashed_password', ";
        $query .= "updated_at =  now()";
        $query .= "WHERE id = $user_id";

        $update_user_query = mysqli_query($connection, $query);

        confirmQuery($update_user_query);
        echo $result;
    }
    else{
        echo "danger";
    }
}
?>