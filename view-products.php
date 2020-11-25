<?php
    include("includes/db.php");
    include("admin/includes/functions.php");
    
    $id = $_GET['cat-id'];
    $query = "SELECT * FROM products where category_id = $id";
    $select_all_products_query = mysqli_query($connection, $query);  
   
    $query = "SELECT * FROM  categories where id = $id";
    $select_category_query = mysqli_query($connection, $query); 
    $row = mysqli_fetch_assoc($select_category_query)
?>
    
    <html>
    <?php 
        $title =  "Products";
        include_once('includes/header.php');
    ?>
        <body>
            <!--Navbar Section-->
                <?php include_once('includes/navbar.php'); ?>
            <!--End of Navbar section-->
            
            <section id="portfolio-wrapper" class="parallax">
                <div class="container">
                    <div id="heading" class="row">
                      <?php $category_name = $row['category_name'];
                        ?>
                        <h3 class='text-center mx-auto'><?php echo $category_name; ?></h3> </div>
                    <div id="isotope" class="row mt-5 pb-5">
                       <?php 
                        while($row = mysqli_fetch_assoc($select_all_products_query)) {
                            $product_name = $row['product_name'];
                            $product_image = $row['product_image'];
                        ?>    
                        <div class='col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4'>
                            <div class='portfolio-item'>
                                <a href='admin/images/products/<?php echo $product_image; ?>'> <img src='admin/images/products/<?php echo $product_image; ?>' alt='' class='img-responsive product-img'> </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </section>
     
            <!--Footer Section-->
                <?php include_once('includes/footer.php'); ?>
            <!--End of Footer Section-->
        </body>
    </html>