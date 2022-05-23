<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mood - Register</title>

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

<body class="bg-gradient-primary" id="body">

    <div class="container">
<!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" id="row">
                    <div class="card-body p-0">
<!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-register-image">
                                <img src="./img/logo.svg" id="logo">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h6 text-gray-900 mb-2">Create an Account</h1>
                                    </div>
                                    <form class="row g-3 needs-validation" action="" method="POST" novalidate>
                                        <div class="input-group has-validation" id="div-input">
                                            <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Usernames :" name="username" required>
                                        </div>
                                        <div class="input-group has-validation mt-2" id="div-input">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Email address :" name="email_user" required>
                                        </div>
                                        <div class="input-group has-validation mt-2" id="div-input">
                                            <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-calendar"></i></span>
                                            <input  type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Birth day :" name="bd_user" required>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-sm-0">
                                                <div class="input-group has-validation mt-2" id="div-input">
                                                    <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-key"></i></span>
                                                    <input type="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Password :" name="password_user" required>
                                                    <div class="invalid-feedback ml-2">
                                                        Please Compete your password.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group has-validation mt-2" id="div-input">
                                                    <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-key"></i></span>
                                                    <input type="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Repeate Password :" name="conf_password" required>
                                                    <div class="invalid-feedback ml-2">
                                                        Repeate the same password.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" id="btn-login" name="user_log_in" class="btn btn-outline-danger mt-2">Sign in</button>
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Already have an account? Login!</a>
                                    </div>
                                    <a href="#" class="btn btn-google btn-user btn-block" id="link">
                                        <i class="fab fa-google fa-fw"></i> Register with Google
                                    </a>
                                    <a href="#" class="btn btn-facebook btn-user btn-block" id="link">
                                        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                    </a>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

<!-- for disabling form submissions if there are invalid inputs-->
    <?php include 'include/input-validation.php';?>

</body>

</html>