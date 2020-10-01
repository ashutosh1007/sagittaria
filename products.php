<?php
    include("includes/db.php");
    include("admin/includes/functions.php");
    $query = "SELECT * FROM products, categories where products.category_id = categories.id";
    $select_all_products_query = mysqli_query($connection, $query);  
   
    $query = "SELECT * FROM  categories";
    $select_all_categories_query = mysqli_query($connection, $query);  
    
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
    
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="vendors/css/bootstrap/bootstrap.min.css">
    
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="vendors/css/fontawesome/css/all.css">
    
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="vendors/css/styles.css">
    
     <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="vendors/css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/css/owl-carousel/owl.theme.default.min.css">

    <!-- Responsive Tabs CSS -->
    <link rel="stylesheet" href="vendors/css/responsive-tabs/responsive-tabs.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="vendors/css/magnific-popup/magnific-popup.min.css">

    <!--CUSTOM FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--Navbar Section-->
    <nav class="navbar navbar-expand-lg navbar-light" role="navigation">
        <a class="navbar-brand" href="#"><img src="vendors/images/Final-green-logo.jpg" alt="" width="100px" height="75px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-auto mr-5" >
                <li class="nav-item active mx-5"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item mx-5"> <a class="nav-link" href="about-us.html">About Us</a> </li>
                <li class="nav-item mx-5"> <a class="nav-link" href="products.html">Products</a> </li>
                <li class="nav-item mx-5"> <a class="nav-link" href="contact-us.html">Contact Us</a> </li>
            </ul>
        </div>
    </nav>
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
                                <button class="btn active" data-filter="*" style="color: white"><span>All</span></button>
                                 <?php
                                        while($row = mysqli_fetch_assoc($select_all_categories_query)) {
                                            $id = $row['id'];
                                            $category_name = $row['category_name'];       
                                      ?>
                                    <button class="btn" data-filter=".<?php echo $category_name ?>" style="color: white"><span><?php echo $category_name ?></span></button>    
                                    <?php
                                    }
                                ?>
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
                                    $category_name = $row['category_name'];
                                    $product_name = $row['product_name'];
                                    $product_image = $row['product_image'];
                                    $product_description = $row['product_description'];
                                    ?>
                                    <div class="col-md-3 mb-5 <?php echo $category_name ?>">
                                        <div class="portfolio-item">
                                            <a href="admin/images/<?php echo $product_image; ?>" title="<?php echo $product_name; ?>">
                                                <img src="admin/images/<?php echo $product_image; ?>" alt="HEy" class="img-responsive" width="245px" height="240px">
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
    <div id="footer">
        <div class="row">
            <div class="col-md-5">
                <h5 class="footer-h5">Contact Us</h5>
                <div>
                    <ul>
                        <li class="footer-li"><span><i class="fas fa-map-marker-alt fa-lg footer-icon pr-1"></i></span> Kolkata, West Bengal, India.</li>
                        <li class="footer-li"><span><i class="fas fa-phone fa-lg footer-icon pr-1"></i></span> +91 33 2290 1540 / 1543</li>
                        <li class="footer-li"><span><i class="fas fa-envelope fa-lg footer-icon pr-1"></i></span> info@ecojuteindia.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7">
                <h5 class="footer-h5">Stay Updated</h5>
                <p>Join our email list to get the latest updates and information.</p>
                <form action="">
                    <input id="footer-email" class="mb-3" type="email" placeholder="your email address">
                    <button type="submit" class="btn btn-success py-2 mb-1">Sign Up</button>     
                </form>
            </div>
        </div>
        <hr class="footer-horizontal-line"> 
        <p style="color: #849e42; margin-bottom: -2em" class="text-center">Copyright &copy; 2020 </p>
    </div>
    <!--End of Footer Section-->
</body>
    <!--JQuery-->
    <script src="vendors/js/jquery.min.js"></script>

    <!--FONT AWESOME-->
    <script src="vendors/css/fontawesome/js/all.js"></script>

    <!--BOOTSTRAP-->
    <script src="vendors/js/bootstrap/bootstrap.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="vendors/js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Isotope -->
    <script src="vendors/js/isotope/isotope.pkgd.min.js"></script>

    <!-- Magnific Popup -->
    <script src="vendors/js/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="vendors/css/fontawesome/js/all.js"></script>
    
    <script src="vendors/js/scripts.js"></script>
</html>