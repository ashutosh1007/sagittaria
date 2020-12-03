<?php
    include("includes/db.php");
    include("admin/includes/functions.php");
    $query = "SELECT * FROM products, categories where products.category_id = categories.id";
    $select_all_products_query = mysqli_query($connection, $query);  
   
    $query = "SELECT * FROM  categories";
    $select_all_categories_query = mysqli_query($connection, $query);  
    
?>
<html>
  <?php 
    $title =  "Products";
    $nav = "products";
    include_once('includes/header.php');
    ?>
<body>
    <!--Navbar Section-->
    <?php include_once('includes/navbar.php');
    ?>
    <!--End of Navbar section-->      
     
    <!--PORTFOLIO-->
    <div class="parallax">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="pl-4">Our Products</h2>
                    <hr class="horizontal-line">
                </div>
                 <div class="col-md-12" id="bags">  
                    <?php
                        while($row = mysqli_fetch_assoc($select_all_categories_query)) {
                            $id = $row['id'];
                            $category_name = $row['category_name'];
                            $category_image = $row['category_image'];
                            if($row > 0 ){
                                ?>
                                    <button type="submit" onclick="location.href='view-products.php?cat-id=<?php echo $id; ?>';" class="col-xl-3 col-lg-5 col-md-5 col-sm-6 btn button categories mr-5 mb-5" style="width:100%;"  ><img src="admin/images/categories/<?php echo $category_image ?>" alt="" width="100%" height="100%" style="border: 1px solid black">
                                         <div class="py-2 mt-2" style="background-color: #085f48; border: 1px solid black; color: white; width: 100%">
                                             <?php echo $category_name ?>
                                         </div>
                                    </button> 
                                 <?php 
                            } else { }
                        }
                    ?>
                </div>
            </div>
            <!--Certifications Section-->
            <?php 
                include_once('includes/certification.php');
            ?>
            <!--End of Certifications Section-->
        </div>
    <!--End
     
    <!--Footer Section-->
        <?php 
            include_once('includes/footer.php');
       ?>
    <!--End of Footer Section-->
</body>
<script></script>
</html>