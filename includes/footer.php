<div id="footer">
    <div class="row">
        <div class="col-md-5">
            <h5 class="footer-h5">Contact Us</h5>
            <div>
                <ul>
                    <li class="footer-li"><span><i class="fas fa-map-marker-alt fa-lg footer-icon pr-1"></i></span>307, Crescent Business Park,<br>MTNL Road, Sakinaka, Andheri-East</li>
                    <li class="footer-li"></li>
                    <li class="footer-li"><span><i class="fas fa-phone fa-lg footer-icon pr-1"></i>9820467586</span></li>
                    <li class="footer-li"><span><i class="fas fa-envelope fa-lg footer-icon pr-1"></i></span> info@sagittaria.in</li>
                </ul>
            </div>
        </div>
        <div class="col-md-7">
            <h5 class="footer-h5">Stay Updated</h5>
            <p style="font-size: 1em;">Join our email list to get the latest updates and information.</p>
            <form action="">
                <input id="footer-email" class="mb-3" type="email" placeholder="your email address">
                <button type="submit" class="btn btn-success py-2 mb-1 footer-btn-submit">Sign Up</button>
            </form>
        </div>
    </div>
    <hr class="footer-horizontal-line">
    <p style="color: #B8B08D; margin-bottom: -2em" class="text-center">Copyright &copy; 2020 </p>
</div>

<!--JQuery-->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<!--<script src="vendors/js/jquery.min.js"></script>-->

<!--POPPER JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!--BOOTSTRAP-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!--FONT AWESOME-->
<script src="vendors/css/fontawesome/js/all.js"></script>

<!-- Owl Carousel JS -->
<script src="vendors/js/owl-carousel/owl.carousel.min.js"></script>

<!-- Isotope -->
<script src="vendors/js/isotope/isotope.pkgd.min.js"></script>

<!-- Magnific Popup -->
<script src="vendors/js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- CUSTOM SCRIPTS -->
<script src="vendors/js/scripts.js"></script>


<script>
$(function(){
    var width = $(window).width();
    
    $(window).on("load", function() {
       
        if($(this).width() == 500){
            $('#nav>li>a span').removeClass('vline').addClass(''); 
        }
        else{
            $('#nav>li>a span').removeClass('').addClass('vline');
        }
    });
    
    $(window).bind("resize",function(){
        
        if($(this).width() < 600){
            $('#nav>li>a span').removeClass('vline').addClass('');
        }
        else{
            $('#nav>li>a span').removeClass('').addClass('vline'); 
        }
     });

});
</script>