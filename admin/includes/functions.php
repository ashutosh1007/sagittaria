<?php 

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

    function getCategories(){
        global $connection;
        $query = "SELECT count(*) as total FROM categories";
        $select_all_categories_query = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($select_all_categories_query);
        $result = $row['total'];
        return $result;
    }

      function getProducts(){
        global $connection;
        $query = "SELECT count(*) as total FROM products";
        $select_all_products_query = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($select_all_products_query);
        $result = $row['total'];
        return $result;
    }

  function getCertifications(){
        global $connection;
        $query = "SELECT count(*) as total FROM certifications";
        $select_all_certifications_query = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($select_all_certifications_query);
        $result = $row['total'];
        return $result;
    }

  function getEnquiries(){
        global $connection;
        $query = "SELECT count(*) as total FROM enquiries";
        $select_all_enquiries_query = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($select_all_enquiries_query);
        $result = $row['total'];
        return $result;
    }
?>