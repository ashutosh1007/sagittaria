<?php
    include_once("includes/db.php");
    include_once("admin/includes/functions.php");
?>

<html>

<?php include_once('includes/header.php'); ?>

<body>
   
   <!--Navbar Section-->
    <?php include_once('includes/navbar.php');
    ?>
    <!--End of Navbar section-->  
        
    <!--About us section-->
    <div class="parallax">
        <h1 class="text-center">ABOUT US</h1>
        
        <p class="p-styles mb-4">We are in the Jute business since the last 75 years, which included manufacturing of commercial jute bags used for various purposes for the domestic market. In order to diversify the business, we entered into manufacturing of all kinds of Eco-friendly Jute &amp; Cotton Bags and to globalize the new product range, Eco Jute Pvt. Ltd. was established in 1998.</p>

        <p class="p-styles mb-4">We are in the Jute business since the last 75 years, which included manufacturing of commercial jute bags used for various purposes for the domestic market. In order to diversify the business, we entered into manufacturing of all kinds of Eco-friendly Jute &amp; Cotton Bags and to globalize the new product range, Eco Jute Pvt. Ltd. was established in 1998.</p>

        <p class="p-styles mb-4">We are in the Jute business since the last 75 years, which included manufacturing of commercial jute bags used for various purposes for the domestic market. In order to diversify the business, we entered into manufacturing of all kinds of Eco-friendly Jute &amp; Cotton Bags and to globalize the new product range, Eco Jute Pvt. Ltd. was established in 1998.</p>
    </div>
    <!--End of About us section-->
    
    <!--Experiences section-->    
    <section id="experiences" class="parallax-3" style="height: 15em;">
        <div class="row ml-5">
            <div class="col-md-3 experiences-pm experiences-card">
               <h2 class="counter text-center experiences-h2 ">75</h2>
                <p class="experiences-p-style" style="color: white">years experience</p>
            </div>
            <div class="col-md-3 experiences-pm experiences-card">
               <h2 class="counter text-center experiences-h2">500</h2>
                <p class="experiences-p-style" style="color: white">workers</p>
            </div>
            <div class="col-md-3 experiences-pm experiences-card">
                <h2 class="counter text-center experiences-h2">9000000</h2>
                <p class="experiences-p-style" style="color: white">bags annually</p>
            </div>
            </div>
    </section>
    <!--End of Experiences section-->

    <!--Certifications Section-->
        <?php 
            include_once('includes/certification.php');
        ?>
    <!--End of Certifications Section-->


    <!--Footer Section-->
        <?php 
            include_once('includes/footer.php');
       ?>
    <!--End of Footer Section-->
</body>

</html>