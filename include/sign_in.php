<?php
session_start(); 


	if (isset($_POST['username_user']) &&
		isset($_POST['email_user']) &&
		isset($_POST['bd_user']) &&
		isset($_POST['password_user']) &&
		isset($_POST['conf_password'])) {
		// code...
	include'db_conn.php';

		$name = $_POST['username_user'];
		$email = $_POST['email_user'];
		$bday = $_POST['bd_user'];
		$password =  md5($_POST['password_user']);
		$cpassword = md5($_POST['conf_password']);

		$data = 'username='.$name.'&email='.$email.'&birth_day='.$bday;

		if (empty($name)) {
			// code...

			$em = "Names are required";
			header("Location: ../register.php?error=$em&$data");
			exit;
		}

		elseif (empty($email)) {
			// code...

			$em = "Email is required";
			header("Location: ../register.php?error=$em&$data");
			exit;
		}

		elseif (empty($bday)) {
			// code...

			$em = "Birthday is required";
			header("Location: ../register.php?error=$em&$data");
			exit;
		}

		elseif (empty($password)) {
			// code...

			$em = "Password is required";
			header("Location: ../register.php?error=$em&$data");
			exit;
		}

		elseif (empty($cpassword)) {
			// code...

			$em = "Repeate the password";
			header("Location: ../register.php?error=$em&$data");
			exit;
		}
		else{
			

			if ($password == $cpassword){
				$sql = "SELECT email FROM users WHERE email=?";
				$stmt = $conn->prepare($sql);
				$stmt->execute([$email]);

				if ($stmt->rowCount() > 0) {
					// code...
					$em="The email ($email) is already used";
					header("Location: ../register.php?error=$em&$data");
					exit;
				}
				else{
					$sql2 = "SELECT names FROM users WHERE names=?";
					$stmt2 = $conn->prepare($sql2);
					$stmt2->execute([$name]);

					if ($stmt2->rowCount() > 0) {
						// code...
						$em="The names ($name) are already used";
						header("Location: ../register.php?error=$em&$data");
						exit;
					}
					else{
						// password hashing
						$password = $password;
						$sql = "INSERT INTO users(names, email, bday, password)
											VALUES(?,?,?,?)";
						$stmt = $conn->prepare($sql);
						$stmt->execute([$name, $email, $bday, $password]);
											
					}


// small log in inside=====================================================================================
					$sm = "Account created successfully";
					$sql  = "SELECT * FROM users WHERE email=? OR names='$name'";
					$stmt = $conn->prepare($sql);
					$stmt->execute([$name]);

			      # if the username is exist
			      if($stmt->rowCount() === 1){
			        # fetching user data
			        $user = $stmt->fetch();

			        # if both username's are strictly equal
			        if ($user['email'] === $name || $user['names'] === $name) {
			           
			           # verifying the encrypted password
			          if ($password === $user['password']) {


			            # successfully logged in
			            # creating the SESSION
			            $_SESSION['username'] = $user['names'];
			            $_SESSION['email'] = $user['email'];
			            $_SESSION['user_id'] = $user['user_id'];
			            $_SESSION['user_img'] = $user['img'];
			            $_SESSION['user_bday'] = $user['bday'];

			            # redirect to 'index.php'
			            header("Location: ../index.php");

			          }else {
			            # error message
			            $em = "Incorect Username or password oops";

			            # redirect to 'index.php' and passing error message
			            header("Location: ../login.php?error=$em&$data");
			          }
			        }else {
			          # error message
			          $em = "Incorect Username or password";

			          # redirect to 'index.php' and passing error message
			          header("Location: ../login.php?error=$em&$data");
			          exit;
			        }
			      }

// ========================================================================================================
				}
            }
            else{
            	$em="Passwords not match";
					header("Location: ../register.php?error=$em&$data");
					exit;
            }
		}

	}
	else{
		header("Location: ../register.php");
		exit;
	}




?>