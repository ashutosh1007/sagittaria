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
$title = "Products";
$nav = "products";
include_once('includes/header.php');
?>
<body>
        <!--Navbar Section-->
        <?php include_once('includes/navbar.php');?>
        <!--End of Navbar section-->
            
        <!--PORTFOLIO-->
        <div class="parallax pb-5" id="portfolio-wrapper">
            <div class="row pb-2">
                <div class="col-md-12">
                    <?php $category_name = $row['category_name'];?>
                        <h2 class='pl-4'><?php echo $category_name; ?></h2>
                        <hr class="horizontal-line"> 
                </div>

<!--                <div class="container">-->
                    <div class="col-md-12" id="bags">
                        <div id="isotope" class="row mt-4 ml-4 mr-4 mb-4">
                            <?php 
                                while($row = mysqli_fetch_assoc($select_all_products_query)) {
                                    $product_name = $row['product_name'];
                                    $product_image = $row['product_image'];
                                ?>
                                <div class='col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-5 mx-auto'>
                                    <div class='portfolio-item'> 
                                        <a href='admin/images/products/<?php echo $product_image; ?>'> 
                                        <img src='admin/images/products/<?php echo $product_image; ?>' width="100%" alt='' class='product-img'> </a> 
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        <!--</div-->
        <!--End of portfolio-wrapper-->

        <!--Footer Section-->
        <?php 
            include_once('includes/footer.php');
        ?>
        <!--End of Footer Section-->
    </body>
    <script></script>

</html>