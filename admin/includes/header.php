<?php
    session_start();
    include("../includes/db.php");
    include("functions.php");
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - <?php echo $source; ?></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="vendor/toastr/toastr.min.css">

    <link rel="stylesheet" href="vendor/dropzone-5.7.0/dist/dropzone.css">    
    
    <link rel="stylesheet" href="css/styles.css">
    
    <style>
         .td {
            max-width: 150px;
            text-wrap: visible !important;
        }
        .error{
            color: red !important;
            font-size: 1em;
            width: 100%;
        }
    </style>
    
</head>