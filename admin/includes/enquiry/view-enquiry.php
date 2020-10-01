<?php
    $query = "SELECT * FROM enquiries";
    
    $select_all_enquiries_query = mysqli_query($connection, $query);
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Enquiries</h6> 
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Company Name</th>
                        <th>Address Image</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Pin Code</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Enquiry</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                       <th>Sr No.</th>
                        <th>Name</th>
                        <th>Company Name</th>
                        <th>Address Image</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Pin Code</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Enquiry</th>
                        <th>Delete</th>

                    </tr>
                </tfoot>
                <tbody>
                    <?php
                        $id = 0;
                        while($row = mysqli_fetch_assoc($select_all_enquiries_query)) {
                            $id = $id+1;
                            $enquiry_id = $row['id'];
                            $contact_name = $row['name'];
                            $company_name = $row['company_name'];
                            $address = $row['address'];
                            $country = $row['country'];
                            $city = $row['city'];
                            $pin_code = $row['pin_code'];
                            $contact_number = $row['contact_number'];
                            $email = $row['email'];
                            $enquiry = $row['enquiry'];
                         
                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$contact_name</td>";
                            echo "<td>$company_name</td>";
                            echo "<td>$address</td>";
                            echo "<td>$country</td>";
                            echo "<td>$city</td>";
                            echo "<td>$pin_code</td>";
                            echo "<td>$contact_number</td>";
                            echo "<td>$email</td>";
                            echo "<td>$enquiry</td>";
                            
                             echo "<td> <button type='button' class='btn btn-danger' data-target='#confirmfordelete' data-toggle='modal'
                            data-contact_name = '$contact_name' data-enquiry_id = '$enquiry_id'> <span class='fa fa-times'></span> Delete </button></td>";
                            
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
        $query = "DELETE FROM enquiries WHERE id = $delete_id";
        $delete_query = mysqli_query($connection, $query);
        header("Location: enquiry.php");  
    }
?>
