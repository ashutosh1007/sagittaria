<?php
    $query = "SELECT * FROM users";
    $select_all_users_query = mysqli_query($connection, $query);
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                   
                    <?php
                        $id = 0;
                        while($row = mysqli_fetch_assoc($select_all_users_query)) {
                            $id = $id+1;
                            $user_id = $row['id'];
                            $name = $row['first_name']." ".$row['last_name'];
                            $email = $row['email'];
                            $user_role = $row['user_role'];
                            echo "<tr>";
                            
                            echo "<td>$id</td>";
                            echo "<td>$name</td>";
                            echo "<td>$email</td>";
                            echo "<td>$user_role</td>";
                            
                            echo "<td><a href='users.php?source=edit_user&p_id=$user_id' class='btn btn-primary'><span class='fa fa-pen'></span> Edit</a></td> ";
                            
                            echo "<td> <button type='button' class='btn btn-danger' data-target='#confirmfordelete' data-toggle='modal'
                            data-user_name = '$name' data-user_id = '$user_id'> <span class='fa fa-times'></span> Delete </button></td>";
                            
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
        $query = "DELETE FROM users WHERE id = $delete_id";
        $delete_query = mysqli_query($connection, $query);
        header("Location: users.php");  
    }
?>
