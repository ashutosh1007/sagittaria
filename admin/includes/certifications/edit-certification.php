<?php 
    $uploads_dir = 'images/';
    
    $query = "SELECT * FROM categories";    
    $select_all_categories_query = mysqli_query($connection, $query);

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

    if( isset( $_POST['edit_certification'] ) ) {
        if( isset( $_GET['p_id'] ) ) {
            $cert_id = $_GET['p_id'];
            $certificate_name = $_POST['certificate_name'];
       
            $certificate_image = $_FILES['certificate_image']['name'];
            $certificate_image_temp = $_FILES['certificate_image']['tmp_name'];
            
            if($certificate_image == ""){
                $query = "SELECT * FROM certifications WHERE id = $cert_id";
                $certificate_image_query = mysqli_query($connection, $query);
                confirmQuery($certificate_image_query);
                if($row = mysqli_fetch_assoc($certificate_image_query) ) {
                    $certificate_image = $row['certificate_image'];
                }
            }
                    
            move_uploaded_file($certificate_image_temp, $uploads_dir.$certificate_image);
            
            $query = "UPDATE certifications SET ";
            $query .= "certificate_name = '$certificate_name', ";
            $query .= "certificate_image = '$certificate_image' ";
            $query .= "WHERE id = $cert_id";

            $update_certification_query = mysqli_query($connection, $query);

            confirmQuery($update_certification_query);
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