<?php
    $query = "SELECT * FROM categories";
    $select_all_categories_query = mysqli_query($connection, $query);
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Categories</h6> </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Category Name</th>
                        <th>Category Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr No.</th>
                        <th>Category Name</th>
                        <th>Category Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                   
                    <?php
                        $id = 0;
                        while($row = mysqli_fetch_assoc($select_all_categories_query)) {
                            $id = $id+1;
                            $category_id = $row['id'];
                            $category_name = $row['category_name'];
                            $category_image = $row['category_image'];
                            
                            echo "<tr>";
                            
                            echo "<td>$id</td>";
                            echo "<td>$category_name</td>";
                            echo "<td><img src = 'images/categories/$category_image' alt = 'Category Image' height = '120px'></td>";
                            
                            echo "<td><a href='categories.php?source=edit_category&p_id=$category_id' class='btn btn-primary'><span class='fa fa-pen'></span> Edit</a></td> ";
                            
                            echo "<td> <button type='button' class='btn btn-danger' data-target='#confirmfordelete' data-toggle='modal'
                            data-cat_title = '$category_name' data-cat_id = '$category_id'> <span class='fa fa-times'></span> Delete </button></td>";
                            
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
        var_dump($delete_id);
        $query = "DELETE FROM categories WHERE id = $delete_id";
        $delete_query = mysqli_query($connection, $query);
        header("Location: categories.php");  
    }
?>
