<!DOCTYPE html>
<html lang="en">
<?php
    include_once("includes/header.php");
?>
<?php
    $email = checkUser();
    $user_role = $_SESSION["user_role"];
    if($user_role == "admin"){
?>
<body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <?php
                include_once("includes/sidebar.php")
            ?>
                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">
                    <!-- Main Content -->
                    <div id="content">
                        <?php 
                         include_once("includes/navbar.php")
                        ?>
                            <!-- Begin Page Content -->
                            <div class="container-fluid">
                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> </div>
                                <?php 
                                    $source = "";
                                    if( isset( $_GET['source'] ) ){
                                        $source = $_GET['source'];  
                                    }
                                    switch($source){

                                        case 'add_user':
                                        include_once("register.php");
                                        break;

                                        case 'edit_user':
                                        include_once("includes/users/edit-user.php");
                                        break;

                                        default: 
                                        include_once("includes/users/view-user.php");
                                        break;
                                    }
                                    include_once("includes/modal-delete.php");
                                ?>
                            </div>
                            <!-- /.container-fluid -->
                    </div>
                    <!-- End of Main Content -->                
                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto"> <span>Copyright &copy; Your Website 2020</span> </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->
                </div>
                <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i> </a>
        <?php  include_once("includes/footer.php"); ?>
        
       <script>
            $('#confirmfordelete').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // DOM method because this toh modal return karega to button ke liye we use related target
                var user_name = button.data('user_name');
                var user_id = button.data('user_id');
                var delete_href = "users.php?delete=" + user_id;
                $('#btntodelete').attr('href', delete_href);
            });
        </script>
    </body>
    <?php }
    else{
    ?>
    <h1>Your are not allowed to view this part</h1> 
     <a href="logout.php">back</a>   
    <?php
    }
    ?>
</html>