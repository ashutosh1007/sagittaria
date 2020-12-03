<html>

   <?php
        include("includes/db.php");
        include("admin/includes/functions.php");
        $title = "Contact Us";
        $nav = "contact";
        include_once('includes/header.php');
        
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
        use PHPMailer\PHPMailer\SMTP;
    
        // Load Composer's autoloader
        require 'vendor/autoload.php';
    
        $query = "SELECT * FROM  categories";
        $select_all_categories_query = mysqli_query($connection, $query);  
    ?>
    
<body>
   
    <!--Navbar Section-->
    <?php include_once('includes/navbar.php');
    ?>
    <!--End of Navbar section-->
       
    <!--Parallax Image-->
    <div class="parallax">
        <!--Start of Container-->
        <div class="pb-5 ">
                <h2 class="pl-4">Contact Us</h2>
                <hr class="horizontal-line">
                <p class="pl-4">If you have any questions or requests for quotes, please do not hesitate to contact us. We are here to answer you</p>
                <div class="container ">
                   <div class="row pb-5" id="contact-form">
                    <div class="col-md-12">
                        <h4 id="contact-form-h4">For enquiries please contact us at -</h4>
                        <form id="enquiry_form" role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-control">Name
                                        <input type="text" id="contact_name" class="form-control" name="contact_name"></label> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-control">Company
                                        <input type="text" id="company_name" class="form-control" name="company_name"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-control">Email
                                        <input type="email" id="email" class="form-control" name="email" placeholder="someone@example.com"> </label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="form-control">I would like to receive information about the : 
                                         <?php
                                        while($row = mysqli_fetch_assoc($select_all_categories_query)) {
                                        $id = $row['id'];
                                        $category_name = $row['category_name'];
                                            if($row > 0 ){
                                                ?>
                                                <label for="category_<?php echo $category_name ?>">
                                                <input type="checkbox" id="category_<?php echo $category_name ?>" class="category" name="category_<?php echo $category_name ?>" value="<?php echo $category_name ?>">
                                                <?php echo $category_name ?></label>
                                            <?php 
                                            } else { }
                                            }
                                        ?></label>
                                         </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-md-6 ml-auto">
                                    <div class="form-group">
                                        <label for="" class="form-control">Your Message
                                        <textarea id="your_message" class="form-control" cols="15" rows="5" name="your_message"></textarea></label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="form-control btn btn-success">Submit</button>
                        </form>
                        <div class="row mt-5">
                            <div class="col-md-4 contact-styles" >
                                <div>
                                    <h2 class="text-center">
                                      <i class="fa fa-phone" aria-hidden="true"></i>
                                    </h2> 
                                  <p class="text-center">+91 9820 467 586</p>
                              </div>
                            </div>
                            <div class="col-md-4 contact-styles">
                                <div>
                                    <h2 class="text-center">
                                      <i class="fas fa-envelope"></i>
                                    </h2> 
                                  <p class="text-center">info@sagittaria.in</p>        
                              </div>
                            </div>
                            <div class="col-md-4 contact-styles">
                                <div>
                                    <h2 class="text-center">
                                     <i class="fas fa-map-marker-alt"></i>
                                    </h2>
                                    <p class="text-center">307, Crescent Business Park, MTNL Road, Sakinaka, Andheri-East, Mumbai - 400072, INDIA</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
    <!--End of Container-->
    
    <!--Footer Section-->
        <?php 
            include_once('includes/footer.php');
       ?>
    <!--End of Footer Section-->
</body>

<!--FONT AWESOME-->
<script src="vendors/css/fontawesome/js/all.js"></script>

<!--BOOTSTRAP-->
<script src="vendors/js/bootstrap/bootstrap.min.js"></script>

</html>
