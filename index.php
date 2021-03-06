<?php
    include_once("includes/db.php");
    include_once("admin/includes/functions.php");
?>
<html>
<?php 
    $title = "Home";
    $nav = "home";
    include_once('includes/header.php'); ?>
    <body>
        <!--Navbar Section-->
        <?php include_once('includes/navbar.php'); ?>
        <!--End of Navbar section-->
                
        <div id="home">
            <img src="vendor/images/Company.jpg" alt="" id="img-home" width="100%">
        </div>
        
        <section class="parallax-2">
           <h2 class="text-center">Manufacturer and Exporter of all types of Cotton and Jute bags</h2>
           <h5 class="text-center">We guarantee reactivity and reliability thanks to our presence on the production site.</h5>
            <!--Start of Container-->
            <div class="container">
                <div class="row">
                    <div id="about-us" class="col-lg-3 col-md-4 col-xs-2 green-card-pm green-card" onclick="location.href='about-us.php';">
                       <h2 class="text-center green-card-h2">About Us</h2>
                    </div>
                    <div id="products" class="col-lg-3 col-md-4 col-xs-2 green-card-pm green-card" onclick="location.href='products.php';">
                       <h2 class="text-center green-card-h2">Our Products</h2>
                    </div>
                    <div id="contact-us" class="col-lg-3 col-md-4 col-xs-2 green-card-pm green-card" onclick="location.href='contact-us.php';">
                        <h2 class="text-center green-card-h2">Contact Us</h2>
                    </div>
                </div>
            </div>
            <!--End of Container-->
        </section>
        <!--End of What we do Section-->
        
        <!--Footer Section-->
        <?php 
            include_once('includes/footer.php');
        ?>
        <!--End of Footer Section-->
    </body>
</html>