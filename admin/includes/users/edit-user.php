<?php 
    if( isset( $_GET['p_id'] ) ) {
        $edit_user_id = $_GET['p_id'];
       
        $query = "SELECT * FROM users WHERE id = $edit_user_id";
        
        $edit_category_query = mysqli_query($connection, $query);
        
        if( $row = mysqli_fetch_assoc($edit_category_query) ){
            $user_id = $row['id'];
            $first_name = $row['first_name']; 
            $last_name = $row['last_name']; 
            $email = $row['email'];
            $password = $row['password'];
            
        }
    }
?>
<!-- Content Row -->
<div class="row">
<div class="col-md-6">
    <form>
        <div class="form-group">
            <input type="text" id="first_name" class="form-control" value="<?php echo $first_name; ?>"> 
            <input type="hidden" id="user_id" value="<?php echo $user_id; ?>">
        </div>
        <div class="form-group">
            <input type="text" id="last_name" class="form-control" value="<?php echo $last_name ?>"> 
            
        </div><div class="form-group">
            <input type="text" id="email" class="form-control" value="<?php echo $email ?>"> 
            
        </div><div class="form-group">
            <input type="password" id="password" class="form-control" value="<?php echo $password ?>"> 
        </div>

        <div class="form-group">                       
            <button type="button" id="edit_user" class="btn btn-success">
             Edit User</button>
        </div>

    </form>
</div>
</div>
<!-- /.container-fluid -->