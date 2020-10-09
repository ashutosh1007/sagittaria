<?php
    include_once("includes/db.php");
    include_once("admin/includes/functions.php");
?>
<html>
<?php include_once('includes/header.php'); ?>
    <body>
        <!--Navbar Section-->
        <?php include_once('includes/navbar.php'); ?>
        <!--End of Navbar section-->
        
        <!--Parallax Image-->
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col-md-4" id="caption">
                        <div class="row caption">REDUCE</div>
                        <div class="row caption">RECYLE</div>
                        <div class="row caption">REUSE</div>
                    </div>
                    <div class="col-md-8" id="image"> <img class="mySlides animated fadeIn" src="vendors/images/hand-bag-1.png" height="400px"> <img class="mySlides animated fadeIn" src="vendors/images/hand-bag-2.png" height="400px"> <img class="mySlides animated fadeIn" src="vendors/images/hand-bag-3.png" height="400px"> </div>
                </div>
            </div>
        </div>
        <!--End of Parallax Image-->
            
        <!--What we Do section-->
        <section id="whatWeDo" class="parallax-2">
            <!--Start of Container-->
            <div class="container">
                <h1 class="text-center"> What we do? </h1>
                <hr class="horizontal-line">
                <h5 class="text-center"> Odio, fuga. Excepturi, illo officia. Eveniet recusandae dicta possimus, quae. Nam, neque, reiciendis </h5>
                <p class="p-styles"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore laboriosam provident voluptatibus in, fugiat non praesentium? Odio, fuga. Excepturi, illo officia. Eveniet recusandae dicta possimus, quae. Nam, neque, reiciendis. </p>
                <div class="product-image"></div>
            </div>
            <!--End of Container-->
        </section>
        <!--End of What we do Section-->
            
        <!--Our Designs Sections-->
        <section id="ourDesigns">
            <div class="container">
                <h1 class="text-center">Our Designs</h1>
                <hr class="horizontal-line">
                <p class="p-styles" style="padding-bottom: 1em"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore laboriosam provident voluptatibus in, fugiat non praesentium? Odio, fuga. Excepturi, illo officia. Eveniet recusandae dicta possimus, quae. Nam, neque, reiciendis. </p>
            </div>
        </section>
        <!--End of Designs Section-->
        
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
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2500);
        }
    </script>

</html>