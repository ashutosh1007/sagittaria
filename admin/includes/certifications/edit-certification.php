<?php 
    $source = "edit_certification";
    $uploads_dir = 'images/';
    if( isset( $_GET['p_id'] ) ) {
        $edit_certification_id = $_GET['p_id'];
       
        $query = "SELECT * FROM certifications WHERE id = $edit_certification_id";
        
        $edit_certification_query = mysqli_query($connection, $query);
        
        if( $row = mysqli_fetch_assoc($edit_certification_query) ){
            $cert_id = $row['id'];
            $certificate_name = $row['certificate_name'];
            $certificate_image = $row['certificate_image'];
        }
    }
?>

<!-- Content Row -->
<div class="row">
<div class="col-md-6">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" id="certification_name" class="form-control" value="<?php echo $certificate_name ?>" required> 
        </div>
         <input type="hidden" id="cert_id" value="<?php echo $cert_id ?>">
       <div class="form-group">
           <label>Current Image</label>
            <?php 
                if($certificate_image == "") 
                    echo "<h4>No Image Set</h4";
                else
                    echo "<img src = 'images/certifications/$certificate_image' alt = 'Certificate Image' height = '120px'> ";
            ?>
            
        </div>
         <input type="hidden" id="cert_image" value="<?php echo $certificate_image ?>">
        <div class="form-group">
            <input type="file" id="certification_image" class="form-control"> 
        </div>
    
        <div class="form-group">                       
            <button type="button" id="edit_certification" class="btn btn-success">
            Edit Certification</button>
        </div>

    </form>
</div>
</div>
<!-- /.container-fluid -->