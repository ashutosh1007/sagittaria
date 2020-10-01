<?php 
    $uploads_dir = 'images/';
    
    $query = "SELECT * FROM  categories";
    $select_all_categories_query = mysqli_query($connection, $query);

    if( isset( $_GET['p_id'] ) ) {
        $edit_product_id = $_GET['p_id'];
       
        $query = "SELECT * FROM products WHERE product_id = $edit_product_id";
        
        $edit_product_query = mysqli_query($connection, $query);
        
        if( $row = mysqli_fetch_assoc($edit_product_query) ){
            $product_id = $row['product_id'];
            $product_name = $row['product_name'];
            $product_image = $row['product_image'];
            $product_description = $row['product_description'];
        }
    }
?>

<!-- Content Row -->
<div class="row">
<div class="col-md-6">
    <form action="" >
       <input type="hidden" id="product_id" value="<?php echo $product_id ?>"> 
        <div class="form-group">
            <input type="text" id="product_name" class="form-control" value="<?php echo $product_name ?>" required> 
        </div>

       <div class="form-group">
           <label>Current Image</label>
            <?php 
                if($product_image == "") 
                    echo "<h4>No Image Set</h4";
                else
                    echo "<img src = 'images/$product_image' alt = 'Product Image' height = '120px'> ";
            ?>
            
        </div>
        <div class="form-group">
            <input type="file" id="product_image" class="form-control"> 
        </div>
        
        <div class="form-group">
            <select id="category_id"  class="form-control">
               <?php
                    while($row = mysqli_fetch_assoc($select_all_categories_query)) {
                        $category_id = $row['id'];
                        $category_name = $row['category_name'];
                        echo "<option value='$category_id'>$category_name</option>";
                    }
                ?>     
            </select>
        </div>
        
        <div class="form-group">
            <textarea id="product_description" class="form-control" cols="15" rows="5" required><?php echo $product_description ?></textarea>            
        </div>

        <div class="form-group">                       
            <button type="button" id="edit_product" class="btn btn-success">
            Edit Product</button>
        </div>

    </form>
</div>
</div>
<!-- /.container-fluid -->