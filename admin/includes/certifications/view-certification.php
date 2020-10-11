<?php
    $query = "SELECT * FROM certifications";
    
    $select_all_certifications_query = mysqli_query($connection, $query);
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Certifications</h6> </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Certificate Name</th>
                        <th>Certificate Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr No.</th>
                        <th>Certificate Name</th>
                        <th>Certificate Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                        $id = 0;
                        while($row = mysqli_fetch_assoc($select_all_certifications_query)) {
                            $id = $id+1;
                            $cert_id = $row['id'];
                            $certificate_name = $row['certificate_name'];
                            $certificate_image = $row['certificate_image'];
                         
                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$certificate_name</td>";
                            echo "<td><img src = 'images/certifications/$certificate_image' alt = 'Product Image' height = '120px'></td>";
                           
                            echo "<td><a href='certifications.php?source=edit_certification&p_id=$cert_id' class='btn btn-primary'><span class='fa fa-pen'></span> Edit</a></td> ";
                            
                            echo "<td> <button type='button' class='btn btn-danger' data-target='#confirmfordelete' data-toggle='modal'
                            data-certificate_title = '$certificate_name' data-certificate_id = '$cert_id'> <span class='fa fa-times'></span> Delete </button></td>";
                            
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
        $query = "DELETE FROM certifications WHERE id = $delete_id";
        $delete_query = mysqli_query($connection, $query);
        header("Location: certifications.php");  
    }
?>
