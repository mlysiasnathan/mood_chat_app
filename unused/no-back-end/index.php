<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MooD - People & Messages</title>

<!-- Custom fonts for this template-->
    <link rel="shortcut icon"  href="./img/logo.svg">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

<!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/front_end.css">

</head>

<body id="page-top">

<!-- Page Wrapper -->
    <div id="wrapper">

<!-- Sidebar -->
<?php require_once('include/sidebar.php'); ?>

<!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
            <div id="content">

<!-- Topbar -->
<?php require_once('include/topbar.php'); ?>

<!-- Begin Page Content -->
                <div class="container-fluid">

<!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Online Friends</h1>
                    </div>

<!-- Content Row  online friend-->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card mb-4 py-3 border-left-success">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h5 font-weight-bold text-success mb-1">
                                                Lysias Nathan
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-outline-success btn-circle mr-2">
                                            <i class="fas fa-phone"></i>
                                        </a>
                                        <a href="#" class="btn btn-outline-warning btn-circle mr-2" data-toggle="modal"  data-target="#messageModal">
                                            <i class="fas fa-pen"></i>
                                            <a href="#last-message"></a>
                                        </a>
                                        <a href="#" class="btn btn-outline-danger btn-circle" data-toggle="modal"  data-target="#ProfilModal">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card mb-4 py-3 border-left-success">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h5 font-weight-bold text-success mb-1">
                                                Jason Derulo
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-outline-success btn-circle mr-2">
                                            <i class="fas fa-phone"></i>
                                        </a>
                                        <a href="#" class="btn btn-outline-warning btn-circle mr-2" data-toggle="modal"  data-target="#messageModal">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-outline-danger btn-circle" data-toggle="modal"  data-target="#ProfilModal">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
<!--End Content Row -->

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Suggested Friends</h1>
                    </div>

<!-- Content Row  suggested friend-->
                    <div class="row">

<!-- Suggested people Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning mb-1">
                                                Lysias Nathan
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-warning btn-circle mr-2" data-toggle="modal"  data-target="#messageModal">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-circle" data-toggle="modal"  data-target="#ProfilModal">
                                            <i class="fas fa-info-circle"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning mb-1">
                                                Kevin King
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-warning btn-circle mr-2" data-toggle="modal"  data-target="#messageModal">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-circle" data-toggle="modal"  data-target="#ProfilModal">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning mb-1">
                                                Sam Smith
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-warning btn-circle mr-2" data-toggle="modal"  data-target="#messageModal">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-circle" data-toggle="modal"  data-target="#ProfilModal">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!-- End of container-fluid -->

            </div>
<!-- End of Main Content -->

<!-- Footer -->
            <footer class="sticky-footer bg-warning shadow-xl" id="footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span class="text-white">Copyright &copy; MooD Official website 2022</span>
                    </div>
                </div>
            </footer>
<!-- End of Footer -->

        </div>
<!-- End of Content Wrapper -->

    </div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<!-- Logout Modal-->
<?php require_once('include/logout-modal.php'); ?>

<!-- Profil friend Modal-->
<?php require_once('include/profil-modal.php'); ?>

<!-- Message Modal-->
<?php require_once('include/message-modal.php'); ?>


<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

<!-- for disabling form submissions if there are invalid inputs-->
    <?php include 'include/input-validation.php';?>

</body>

</html>