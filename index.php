<?php
    include_once("includes/db.php");
    include_once("admin/includes/functions.php");

    $certificate_info = "";
    $query = "SELECT * FROM certifications";
    $select_certification_query = mysqli_query($connection, $query);
    confirmQuery($select_certification_query);

    while($row = mysqli_fetch_assoc($select_certification_query)){
        $certificate_info .= $row['certificate_name'];
        $certificates[] = $row;
    }
?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
    
     <!--CUSTOM CSS-->
    <link rel="stylesheet" href="vendors/css/styles.css">
    
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="vendors/css/bootstrap/bootstrap.min.css">
    
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="vendors/css/fontawesome/css/all.css">
    
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
            <ul class="nav navbar-nav ml-auto mr-5">
                <li class="nav-item active mx-5"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item mx-5"> <a class="nav-link" href="about-us.html">About Us</a> </li>
                <li class="nav-item mx-5"> <a class="nav-link" href="">CSR</a> </li>
                <li class="nav-item mx-5"> <a class="nav-link" href="products.php">Products</a> </li>
                <li class="nav-item mx-5"> <a class="nav-link" href="contact-us.php">Contact Us</a> </li>
            </ul>
        </div>
    </nav>
    <!--End of Navbar section-->  
    
    <!--Parallax Image-->
        <div class="parallax" style="height: 100%">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"> </div>
                    <div class="col-md-8">
                        <!--<img src="vendors/images/background.png" alt="">-->
                    </div>
                </div>
            </div>
        </div>
    <!--End of Parallax Image-->
    
    <!--What we Do section-->
    <section id="whatWeDo">
        <!--Start of Container-->
        <div class="container">
            <h1 class="text-center">
                What we do?
            </h1>
            <hr class="horizontal-line">
            <h5 class="text-center">
                Odio, fuga. Excepturi, illo officia. Eveniet recusandae dicta possimus, quae. Nam, neque, reiciendis
            </h5>
            <p class="p-styles"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore laboriosam provident voluptatibus in, fugiat non praesentium? Odio, fuga. Excepturi, illo officia. Eveniet recusandae dicta possimus, quae. Nam, neque, reiciendis. </p>
            <div class="product-image"></div>
        </div>
        <!--End of Container-->
   </section>
   <!--End of What we do Section-->
    
    <!--Our Designs Sections-->
    <section id="ourDesigns">
        <div class="container">
            <h1 class="text-center">
                Our Designs
            </h1>
            <hr class="horizontal-line">
            <p class="p-styles"> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore laboriosam provident voluptatibus in, fugiat non praesentium? Odio, fuga. Excepturi, illo officia. Eveniet recusandae dicta possimus, quae. Nam, neque, reiciendis. </p>
        </div>
    </section>
    <!--End of Designs Section-->
        
    <!--Certifications Section-->
    <section id="certifications" class="mb-4">
        <div class="container">
            <h1 class="text-center">
                Certifications
            </h1>
            <hr class="horizontal-line">
              <p class="p-styles"> 
              <?php echo $certificate_info; ?>
            </p>
            <?php
                foreach ($certificates as $certificate){
            ?>
                <img src="admin/images/<?php echo $certificate['certificate_image']; ?>" class="mx-2 my-2" alt="" width="150px" height="100px">
            <?php 
                } 
            ?>
        </div>
    </section>
    <!--End of Certifications Section-->
    
    <!--Footer Section-->
    <div id="footer">
        <div class="row">
            <div class="col-md-5">
                <h5 class="footer-h5">Contact Us</h5>
                <div>
                    <ul>
                        <li class="footer-li"><span><i class="fas fa-map-marker-alt fa-lg footer-icon pr-1"></i></span>307, CRESCENT BUSINESS PARK,</li>
                        <li class="footer-li">MTNL ROAD, SAKINAKA, ANDHERI-EAST</li>
                        <li class="footer-li"><span><i class="fas fa-phone fa-lg footer-icon pr-1"></i>9820467586</span></li>
                        <li class="footer-li"><span><i class="fas fa-envelope fa-lg footer-icon pr-1"></i></span> info@sagittaria.in</li>
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
</html>