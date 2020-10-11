<html>

   <?php
    include("includes/db.php");
    include("admin/includes/functions.php");
    include_once('includes/header.php');
?>

<body>
   
   <!--Navbar Section-->
    <?php include_once('includes/navbar.php');
    ?>
    <!--End of Navbar section-->      
     
<?php   
    if( isset( $_POST['add_enquiry'] ) ) {
        $name = $_POST['contact_name'];
        $company_name = $_POST['company_name'];
        $address = $_POST['address'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $pin_code = $_POST['pin_code'];
        $contact_number = $_POST['contact_number'];
        $email = $_POST['email'];
        $enquiry = $_POST['enquiry'];
        
        $query = "INSERT INTO enquiries( name, company_name, address, country, city, pin_code, contact_number, email, enquiry, 
        created_at, deleted_at) VALUES ('$name','$company_name', '$address', '$country', '$city', '$pin_code', '$contact_number',
        '$email', '$enquiry', now(), 0)";
        
        $create_enquiry_query = mysqli_query($connection, $query);
        
        confirmQuery($create_enquiry_query);
    }
?>
    <!--Parallax Image-->
    <div class="parallax">
        <!--Start of Container-->
        <div class="container">
            <section>
                <h1 class="text-center heading-color-white">CONTACT US</h1>
                <p class="text-center" style="color: #1d3557;">We are one of the Leading Indian Manufacturers and Exporters of eco friendly
                <br>Jute Bags and are further willing to expand our business globally.</p>
                <div class="row" id="contact-form">
                    <div class="col-md-12">
                        <h4 id="contact-form-h4">For enquiries please contact us at -</h4>
                        <form id="enquiry_form" method="post" role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control contact-input-outline" name="contact_name" placeholder="Your Name"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="company_name" placeholder="Company Name"> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea id="" class="form-control" cols="15" rows="5" name="address" placeholder="Address"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="country" placeholder="Country"> </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="city" placeholder="City"> </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="pin_code" name="pin_code" placeholder="Pin Code"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="contact_number" name="contact_number" placeholder="+91 88888 88888"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="someone@example.com"> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea id="" class="form-control" cols="15" rows="5" name="enquiry" placeholder="Enquiry"></textarea>
                            </div>
                            <button type="submit" class="form-control btn btn-success" name="add_enquiry">Submit</button>
                        </form>
                        <div class="row">
                            <div class="col-md-4 contact-styles" >
                                <div>
                                    <h4 class="h4-style text-center">
                                      Give us a call
                                    </h4> 
                                  <hr class="contact-horizontal-line">
                                  <p class="text-center">+91 9820 467 586</p>
                              </div>
                            </div>
                            <div class="col-md-4 contact-styles">
                                <div>
                                    <h4 class="h4-style text-center">
                                      Send an email
                                    </h4> 
                                  <hr class="contact-horizontal-line">
                                  <p class="text-center">info@sagittaria.in</p>        
                              </div>
                            </div>
                            <div class="col-md-4 contact-styles">
                                <div>
                                   <vr></vr>
                                    <h4 class="h4-style text-center">
                                      Address
                                    </h4>
                                    <hr class="contact-horizontal-line"> 
                                    <p class="text-center">307, Crescent Business Park, MTNL Road, Sakinaka, Andheri-East</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--End of Container-->
    
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

<!-- Page level custom scripts -->
<script src="admin/vendor/validation/jquery.validate.min.js"></script>

<script src="admin/js/scripts.js"></script>
<!--BOOTSTRAP-->
<script src="vendors/js/bootstrap/bootstrap.min.js"></script>

<script>

$(document).ready(function () {
    var pin_code = document.getElementById("pin_code");
    var contact_number = document.getElementById("contact_number");
    
    var invalidChars = [
      "-",
      "+",
      "e",
    ];

    pin_code.addEventListener("input", function() {
      this.value = this.value.replace(/[e\+\-]/gi, "");
    });

    pin_code.addEventListener("keydown", function(e) {
      if (invalidChars.includes(e.key)) {
        e.preventDefault();
      }
    });
    
    contact_number.addEventListener("input", function() {
      this.value = this.value.replace(/[e\+\-]/gi, "");
    });

    contact_number.addEventListener("keydown", function(e) {
      if (invalidChars.includes(e.key)) {
        e.preventDefault();
      }
    });
    
    $("#enquiry_form").validate({
            rules: {
                contact_name: {
                    required: true
                }
                , company_name: {
                    required: true
                }
                , address: {
                    required: true
                }
                , country: {
                    required: true
                }
                , city: {
                    required: true
                }
                , pin_code: {
                    required: true,
                    number: true,
                    minlength: 5,
                    maxlength: 5
                }
                , contact_number: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                }
                , email: {
                    required: true,
                    email: true,
                }
                , enquiry: {
                    required: true
                }
            }
            , messages: {
                contact_name: "Please Type Your Name"
                , company_name: "Please Type Your Company Name"
                , address: "Please Type Your Address"
                , country: "Please Type Your Country"
                , city: "Please Type City"
                , pin_code: "Please Type Pin Code"
                , contact_number: "Please Type Your Contact Number"
                , email: "Please Type Your Email Address"
                , enquiry: "Please Type Your Enquiry"
            , }
            , submitHandler: function (form) { 
                form.submit();
            }
    });
});
</script>
</html>