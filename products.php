<?php
    include("includes/db.php");
    include("admin/includes/functions.php");
    $query = "SELECT * FROM products, categories where products.category_id = categories.id";
    $select_all_products_query = mysqli_query($connection, $query);  
   
    $query = "SELECT * FROM  categories";
    $select_all_categories_query = mysqli_query($connection, $query);  
    
?>
<html>
  <?php include_once('includes/header.php');
    ?>
<body>
    <!--Navbar Section-->
    <?php include_once('includes/navbar.php');
    ?>
    <!--End of Navbar section-->      
     
    <!--PORTFOLIO-->
    <div class="parallax">
        <section id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="text-center heading-color-white">Bags</h1>
                        </div>
                        <div class="col-md-12">
                            <div id="isotope-filters">
                                <button id="btn-filter" class="btn active" data-filter="*" type="button"><span><i class="fas fa-filter"></i>Filter</span></button>
                                <div class="filters" id="filters">
                                <?php
                                    while($row = mysqli_fetch_assoc($select_all_categories_query)) {
                                        $id = $row['id'];
                                        $category_name = $row['category_name'];
                                        if($row > 0 ){
                                            ?>
                                            <button class="btn" data-filter=".<?php echo $id; ?>" style="color: #1d3557"><span><?php echo $category_name ?></span></button>
                                        <?php 
                                        } else { }
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section id="portfolio-wrapper" class="mt-5">
                    <div class="container">
                        <div id="isotope" class="row">
                          
                            <?php
                               while($row = mysqli_fetch_assoc($select_all_products_query)){
                               
                                    $product_id = $row['product_id'];
                                    $id = $row['category_id'];
                                    $category_name = $row['category_name'];
                                    $product_name = $row['product_name'];
                                    $product_image = $row['product_image'];
                                    $product_description = $row['product_description'];
                                    ?>
                                    
                                    <div class="col-md-3 mb-5 <?php echo $id; ?>">
                                        <div class="portfolio-item">
                                            <a href="admin/images/products/<?php echo $product_image; ?>" title="<?php echo $product_name; ?>">
                                                <img src="admin/images/products/<?php echo $product_image; ?>" alt="" class="img-responsive product-img" width="245px" height="240px">
                                            </a>
                                        </div>
                                    </div> 
                            <?php
                                }

                            ?>
                        </div>
                    </div>
                </section>
        </section>
    </div>
    <!--End-->
     
    <!--Footer Section-->
        <?php 
            include_once('includes/footer.php');
       ?>
    <!--End of Footer Section-->
</body>
<script>
    
</script>
</html>