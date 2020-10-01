<?php
    $query = "SELECT * FROM products, categories where products.category_id = categories.id";
    $select_all_products_query = mysqli_query($connection, $query);  
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Products</h6> </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>     
                    <tr>
                        <th>Sr No.</th>
                        <th>Category Name</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Product Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr No.</th>
                        <th>Category Name</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Product Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                 <tbody>
                  <?php
                        $id = 0;
                        while($row = mysqli_fetch_assoc($select_all_products_query)) {
                            $id = $id+1;
                            $product_id = $row['product_id'];
                            $category_name = $row['category_name'];
                            $product_name = $row['product_name'];
                            $product_image = $row['product_image'];
                            $product_description = $row['product_description'];
                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$category_name</td>";
                            echo "<td>$product_name</td>";
                            echo "<td><img src = 'images/$product_image' alt = 'Product Image' height = '120px' width='200px'></td>";
                            echo "<td class='td'>$product_description</td>";
                            
                           echo "<td><a href='products.php?source=edit_product&p_id=$product_id' class='btn btn-primary'><span class='fa fa-pen'></span> Edit</a></td> ";
                            
                           echo "<td> <button type='button' class='btn btn-danger' data-target='#confirmfordelete' data-toggle='modal'
                            data-product_title = '$product_name' data-product_id = '$product_id'> <span class='fa fa-times'></span> Delete </button></td>";
                            
                            echo "</tr>";
                        }
                
                    ?>    
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
 if( isset($_GET['delete'] ) ) {
        $delete_id = $_GET['delete'];
        $query = "DELETE FROM products WHERE product_id = $delete_id";
        $delete_query = mysqli_query($connection, $query);     header("Location: products.php"); 
    }
?>
