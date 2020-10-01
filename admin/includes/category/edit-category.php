<?php 
    if( isset( $_GET['p_id'] ) ) {
        $edit_category_id = $_GET['p_id'];
       
        $query = "SELECT * FROM categories WHERE id = $edit_category_id";
        
        $edit_category_query = mysqli_query($connection, $query);
        
        if( $row = mysqli_fetch_assoc($edit_category_query) ){
            $category_id = $row['id'];
            $category_name = $row['category_name']; 
        }
    }

//    if( isset( $_POST['edit_category'] ) ) {
//        if( isset( $_GET['p_id'] ) ) {
//            $category_id = $_GET['p_id'];
//            $category_name = $_POST['category_name'];
//            
//            $query = "UPDATE categories SET ";
//            $query .= "category_name = '$category_name' ";
//            $query .= "WHERE id = $category_id";
//
//            $update_category_query = mysqli_query($connection, $query);
//
//            confirmQuery($update_category_query);
//            header("Location: categories.php");
//        }
//    }
?>

<!-- Content Row -->
<div class="row">
<div class="col-md-6">
    <form action="">
        <div class="form-group">
            <input type="text" id="category_name" class="form-control" value="<?php echo $category_name ?>"> 
            <input type="hidden" id="category_id" value="<?php echo $category_id ?>">
        </div>

        <div class="form-group">                       
            <button type="button" id="edit_category" class="btn btn-success">
             Edit Category</button>
        </div>

    </form>
</div>
</div>
<!-- /.container-fluid -->