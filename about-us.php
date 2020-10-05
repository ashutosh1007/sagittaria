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
    <section id="experiences" style="width: 75%; margin: auto">
        <div class="row">
            <div class="col-md-3 experiences-pm experiences-card">
               <h2 class="text-center experiences-h2">
                   75+
               </h2>
                <p class="experiences-p-style" style="color: white">years experience</p>
            </div>
            <div class="col-md-3 experiences-pm experiences-card">
               <h2 class="text-center experiences-h2">
                   500+
               </h2>
                <p class="experiences-p-style" style="color: white">workers</p>
            </div>
            <div class="col-md-3 experiences-pm experiences-card">
               <h2 class="text-center experiences-h2">
                   9 mn
               </h2>
                <p class="experiences-p-style" style="color: white">bags annually</p>
            </div>
        </div>
    </section>
    <!--End of Experiences section-->

   <!--Certifications Section-->  
    <?php
       if($row == 0){
           
       }else{
    ?>
  
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
       }
            ?>
        </div>
    </section>
    <!--End of Certifications Section-->


     <!--Footer Section-->
        <?php 
            include_once('includes/footer.php');
       ?>
    <!--End of Footer Section-->

</body>
<!--JQuery-->
<script src="vendors/js/jquery.min.js"></script>

<!--FONT AWESOME-->
<script src="vendors/css/fontawesome/js/all.js"></script>

<!--BOOTSTRAP-->
<script src="vendors/js/bootstrap/bootstrap.min.js"></script>

</html>