<?php 
    $uploads_dir = 'images/';
    $query = "SELECT * FROM categories";
    $select_all_categories_query = mysqli_query($connection, $query);
?>

<!-- Content Row -->
<div class="row">
    <div class="col-md-6">
        <form id="product_form" role="form">
            <div class="form-group">
                <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Enter Product Name" required> 
            </div>

           <div class="form-group">
                <input type="file" id="product_image" name="product_image" class="form-control" > 
            </div>

            <div class="form-group">
                <select id="category_id" class="form-control">
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
                <textarea id="product_description" name="product_description" class="form-control" cols="15" rows="5" placeholder="Product Description" ></textarea>            
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">
                 Add Product</button>
            </div>

        </form>
    </div>
</div>
<!-- /.container-fluid -->