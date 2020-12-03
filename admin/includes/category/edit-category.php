<?php 
    $source = "edit_category";
    $uploads_dir = 'images/';
    if( isset( $_GET['p_id'] ) ) {
        $edit_category_id = $_GET['p_id'];
       
        $query = "SELECT * FROM categories WHERE id = $edit_category_id";
        
        $edit_category_query = mysqli_query($connection, $query);
        
        if( $row = mysqli_fetch_assoc($edit_category_query) ){
            $category_id = $row['id'];
            $category_name = $row['category_name'];
            $category_image = $row['category_image'];
        }
    }
?>

<!-- Content Row -->
<div class="row">
<div class="col-md-6">
    <form  method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" id="category_name" class="form-control" value="<?php echo $category_name ?>" required> 
        </div>
         <input type="hidden" id="category_id" value="<?php echo $category_id ?>">
       <div class="form-group">
           <label>Current Image</label>
            <?php 
                if($category_image == "") 
                    echo "<h4>No Image Set</h4";
                else
                    echo "<img src = 'images/categories/$category_image' alt = 'Certificate Image' height = '120px'> ";
            ?>
            
        </div>
         <input type="hidden" id="cert_image" value="<?php echo $category_image ?>">
        <div class="form-group">
            <input type="file" id="category_image" class="form-control"> 
        </div>
    
        <div class="form-group">                       
            <button type="button" id="edit_category" class="btn btn-success">
            Edit Certification</button>
        </div>

    </form>
</div>
</div>
<!-- /.container-fluid -->