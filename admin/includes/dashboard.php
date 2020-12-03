<?php
    $categoryResult = getCategories();
    $productResult = getProducts();
    $certificationResult = getCertifications();
    $enquiryResult = getEnquiries();
    $source = "home";
?>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Categories</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $categoryResult; ?>
                        </div>
                    </div>
                    <div class="col-auto"> <i class="fa fa-list-alt fa-2x text-gray-300"></i> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Products</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $productResult; ?>
                        </div>
                    </div>
                    <div class="col-auto"> <i class="fab fa-product-hunt fa-2x text-gray-300"></i> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Certifications</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $certificationResult; ?>
                        </div>
                    </div>
                    <div class="col-auto"> <i class="fa fa-certificate fa-2x text-gray-300"></i> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Enquiry</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $enquiryResult; ?>
                        </div>
                    </div>
                    <div class="col-auto"> <i class="fa fa-question-circle fa-2x text-gray-300"></i> </div>
                </div>
            </div>
        </div>
    </div>
