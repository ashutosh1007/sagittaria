<div id="navbar-contact-us" style="background-color: #085f48">
   <ul class="nav navbar-nav mr-3">
        <li class="header-nav-link ml-auto py-2" style="color:white !important"> 
            <i class="fa fa-envelope" aria-hidden="true"></i> info@sagittaria.in 
            <span class="mr-4"></span>
            <i class="fa fa-phone" aria-hidden="true"></i> +91 9820 467 586
        </li>
    </ul>
</div>

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.php"><img src="vendor/images/final-logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul id="nav" class="nav navbar-nav ml-auto mr-3">
            <li class="nav-item"> <a class="nav-link <?= $nav == 'home' ? 'active' : ''?>" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
            <li class="nav-item"> <a class="nav-link <?= $nav == 'about' ? 'active' : ''?>" href="about-us.php">About Us </a> </li>
            <li class="nav-item"> <a class="nav-link <?= $nav == 'sr' ? 'active' : ''?>" href="csr.php">CSR </a> </li>
            <li class="nav-item"> <a class="nav-link <?= $nav == 'products' ? 'active' : ''?>" href="products.php">Products </a> </li>
            <li class="nav-item"> <a class="nav-link <?= $nav == 'contact' ? 'active' : ''?>" href="contact-us.php">Contact Us</a> </li>
        </ul>
    </div>
</nav>