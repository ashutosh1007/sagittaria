<!-- Sidebar -->
<?php 
$source;
if(isset($_GET['source'])){
    $src = $_GET['source'];
}
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15"> <i class="fas fa-laugh-wink"></i> </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link <?= $source == 'Dashboard' ? 'active' : ''?>" href="index.php"> <i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link <?= $source == 'Category' ? 'active' : 'collapsed'?>" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <i class="fa fa-list-alt"></i> <span>
              Category
          </span> </a>
        <div id="collapseOne" class="collapse <?= $source == 'Category' ? 'show' : ''?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6> 
                    <a class="collapse-item <?= $src == 'add_category' ? 'active-sub' : ''?>" href="categories.php?source=add_category">Add</a> 
                    <a class="collapse-item <?= $src == 'view_category' ? 'active-sub' : ''?>" href="categories.php?source=view_category">View</a> 
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link <?= $source == 'Product' ? 'active' : 'collapsed'?>" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fab fa-product-hunt"></i> <span>Products</span> </a>
        <div id="collapseTwo" class="collapse <?= $source == 'Product' ? 'show' : ''?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6>
                    <a class="collapse-item <?= $src == 'add_product' ? 'active-sub' : ''?>" href="products.php?source=add_product">Add</a>
                    <a class="collapse-item <?= $src == 'view_product' ? 'active-sub' : ''?>" href="products.php?source=view_product">View</a> 
            </div>
        </div>
    </li>

   <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link <?= $source == 'Certification' ? 'active' : 'collapsed'?>" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"> <i class="fa fa-certificate"></i> <span>Certifications</span> </a>
        <div id="collapseThree" class="collapse <?= $source == 'Certification' ? 'show' : ''?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6>
                    <a class="collapse-item <?= $src == 'add_certification' ? 'active-sub' : ''?>" href="certifications.php?source=add_certification">Add</a>
                    <a class="collapse-item <?= $src == 'view_certification' ? 'active-sub' : ''?>" href="certifications.php?source=view_certification">View</a> 
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link <?= $source == 'Enquiry' ? 'active' : 'collapsed'?>" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour"> <i class="fa fa-question-circle"></i> <span>Enquiry</span> </a>
        <div id="collapseFour" class="collapse <?= $source == 'Enquiry' ? 'show' : ''?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6> 
                <a class="collapse-item <?= $src == 'view_enquiry' ? 'active-sub' : ''?>" href="enquiry.php?source=view_enquiry">View</a> </div>
        </div>
    </li>
    
     <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link <?= $source == 'User' ? 'active' : 'collapsed'?>" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive"> <i class="fa fa-user"></i> <span>User</span> </a>
        <div id="collapseFive" class="collapse <?= $source == 'User' ? 'show' : ''?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options:</h6> 
                <a class="collapse-item <?= $src == 'view_user' ? 'active-sub' : ''?>" href="users.php?source=view_user">View</a> </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->