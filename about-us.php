<?php
    include_once("includes/db.php");
    include_once("admin/includes/functions.php");
?>

<html>

<?php 
    $title = "About Us";
    $nav = "about";
    include_once('includes/header.php'); ?>

<body>
   <!--Navbar Section-->
    <?php include_once('includes/navbar.php');
    ?>
    <!--End of Navbar section-->  
    <div class="parallax">
    <!--About us section-->
        <h2 class="pl-4">About us</h2>
        <hr class="horizontal-line">
        <p class="p-styles">Sagittaria Exports Pvt. Ltd. is a prominent manufacturer and exporter since 2018 and is a fast-growing certified company in India. We specialize in manufacturing and exporting of
            wide range of canvas bags, jute bags, aprons and textile made ups for various domestic and
            business requirements. We at Sagittaria Exports Pvt Ltd. think it is vital to make ecologically
            positive decision today for the environment, health of our families and for generations to
            come.</p>

        <p class="p-styles">Sagittaria Exports Pvt. Ltd. is a Subsidiary of CARLO SACCHETTINI IMPORT (SAS CSI) FRANCE</p>

        <p class="p-styles">Our complete range of products are manufactured from high grade raw material, 100%
            Organic and Fairtrade cotton.</p>
        
        <p class="p-styles">We are proud to offer these ecologically responsible products that are exclusive in trend and appeal to the end-users.</p>
    <!--End of About us section-->
    
    <div class="row" style="width:100%; margin: 0 auto">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6" style="width:100%; margin:1em 0">
                    <img src="vendor/images/Factory.jpg" alt="" width="100%" height="300px" style="border: 1px solid black">
            </div>
            
             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6" style="width:100%; margin:1em 0">
                    <img src="vendor/images/QualityControl.jpg" alt="" width="100%" height="300px" style="border: 1px solid black">
            </div>
            
             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6" style="width:100%; margin:1em 0">
                    <img src="vendor/images/CottonMachine.jpg" alt=""  width="100%" height="300px" style="border: 1px solid black">
            </div> 
      </div>
    </div> 

    <!--Footer Section-->
        <?php 
            include_once('includes/footer.php');
       ?>
    <!--End of Footer Section-->
    </body>

</html>