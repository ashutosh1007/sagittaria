<?php
    include_once("includes/db.php");
    include_once("admin/includes/functions.php");
?>

<html>

<?php 
    $title = "About Us";
    include_once('includes/header.php'); ?>

<body>
   
   <!--Navbar Section-->
    <?php include_once('includes/navbar.php');
    ?>
    <!--End of Navbar section-->  
        
    <!--CSR section-->
    <div class="parallax">
        <h1 class="text-center">CSR</h1>
        <hr class="horizontal-line">
        <p class="p-styles pb-4">Sagittaria Exports Pvt. Ltd. is a prominent manufacturer and exporter since 2018 and is a fast-growing certified company in India. We specialize in manufacturing and exporting of
            wide range of canvas bags, jute bags, aprons and textile made ups for various domestic and
            business requirements. We at Sagittaria Exports Pvt Ltd. think it is vital to make ecologically
            positive decision today for the environment, health of our families and for generations to
            come.</p>

        <p class="p-styles pb-4">The company is a dream work of <span id="director">Mr. Ryan Merchant (Director)</span> who is innovatively and
            environmentally inclined to work with people who can turn concepts and designs into
            reality. Sagittaria Exports Pvt. Ltd. is a subsidiary of CSI (Carlo Sacchettini Import), a France
            based company.</p>

        <p class="p-styles pb-4">Our complete range of products are manufactured from high grade raw material, 100%
            Organic and Fairtrade cotton.</p>
        
        <p class="p-styles pb-4">We are proud to offer these ecologically responsible products that are exclusive in trend and appeal to the end-users.</p>
    </div>
    <!--End of CSR section-->
    
    <!--Footer Section-->
        <?php 
            include_once('includes/footer.php');
       ?>
    <!--End of Footer Section-->
    </body>

</html>