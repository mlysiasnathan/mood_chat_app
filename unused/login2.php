<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ChatEdge connect</title>
	<link rel="shortcut icon"  href="./img/logo.svg">
  <link href="./asset/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="./asset/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./asset/css/front_end.css">
	<script src="./asset/js/bootstrap.min2.js"></script>
</head>
<body class="body">
	<div class="container mt-5">
		
		<div id="carouselExampleDark" class="carousel carousel slide" data-bs-ride="carousel" data-bs-interval="false">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
			</div>
			<div class="carousel-inner" id="carousel-inner">
				<div class="carousel-item active">
					<img src="./img/16.jpg" class="d-block w-100" id="carousel-photo">
					<div class="carousel-caption d-none d-md-block">
						<div class="row mb-5">
							<div class="col-6 mb-5">
								<form class="row g-3 needs-validation" action="" method="POST" novalidate>
									<p class="h4 mt-3 mb-3 text-dark">Log in with your Username and Password</p>
									<div class="input-group has-validation" id="div-input">
										<span class="input-group-text" id="inputGroupPrepend">@</span>
										<input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Username or Email address :" name="email_user" required>
										<div class="invalid-feedback">
											Please Enter your username.
										</div>
										<div class="valid-feedback">
											Looks good!
										</div>
									</div>
									<div class="input-group has-validation" id="div-input">
										<span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-key"></i></span>
										<input type="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Password :" name="password_user" required>
										<div class="invalid-feedback">
											Please Compete your password.
										</div>
									</div>
									<button type="submit" id="btn-login" name="user_log_in" class="btn btn-outline-dark mb-3 mt-4"> Log in</button>
									<p>If you don't have an account
									<a class="" data-bs-slide="next" href="#carouselExampleDark" role="button"> Click here</a></p>
								</form>
							</div>
							<div class="col-6">
								<img src="./img/logo.svg" class="d-block w-100">
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="./img/182.jpg" class="d-block w-100" id="carousel-photo">
					<div class="carousel-caption d-none d-md-block">
						<div class="row mb-1 mt-3">
							<div class="col-6">
								<img src="./img/logo.svg" class="d-block w-100" id="">
							</div>
							<div class="col-6">

								<form class="row g-3 needs-validation" action="" method="POST" novalidate>
									<p class="h4 mt-3 text-white">Complete this form to create your account</p>
									<div class="input-group has-validation" id="div-input">
										<span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-user"></i></span>
										<input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Usernames :" name="username" required>
									</div>
									<div class="input-group has-validation" id="div-input">
										<span class="input-group-text" id="inputGroupPrepend">@</span>
										<input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Email address :" name="email_user" required>
										<div class="invalid-feedback">
											Please Enter a valid email address containing @
										</div>
									</div>
									<div class="input-group has-validation" id="div-input">
										<span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-calendar"></i></span>
										<input  type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Birth day :" name="bd_user" required>
									</div>
									<div class="input-group has-validation" id="div-input">
										<span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-key"></i></span>
										<input type="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Password :" name="password_user" required>
										<div class="invalid-feedback">
											Please Compete your password.
										</div>
									</div>
									<div class="input-group has-validation" id="div-input">
										<span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-key"></i></span>
										<input type="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Confirm Password :" name="conf_password" required>
										<div class="invalid-feedback">
											Type the same password.
										</div>
									</div>
									<button type="submit" id="btn-login" name="user_log_in" class="btn btn-outline-danger mb-3 mt-4">Sign in</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
</div>
<script type="text/javascript">
	// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</body>
</html>