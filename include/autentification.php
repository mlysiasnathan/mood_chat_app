<?php  
session_start();

# check if username & password  submitted
if(isset($_POST['username_user']) &&
   isset($_POST['password_user'])){

   # database connection file
   include'db_conn.php';
   
   # get data from POST request and store them in var
   // $password = $_POST['password_user'];
   $username = $_POST['username_user'];
   $password =  md5($_POST['password_user']);

   $data = 'username='.$username;
   
   #simple form Validation
   if(empty($username)){
      # error message
      $em = "Username is required";

      # redirect to 'index.php' and passing error message
      header("Location: ../login.php?error=$em&$data");
   }else if(empty($password)){
      # error message
      $em = "Password is required";

      # redirect to 'index.php' and passing error message
      header("Location: ../login.php?error=$em&$data");
   }
   else 
   {
		$sql  = "SELECT * FROM users WHERE email=? OR names='$username'";
		$stmt = $conn->prepare($sql);
		$stmt->execute([$username]);

      # if the username is exist
      if($stmt->rowCount() === 1){
        # fetching user data
        $user = $stmt->fetch();

        # if both username's are strictly equal
        if ($user['email'] === $username || $user['names'] === $username) {
           
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
      else {
          # error message
          $em = "You did not create your account yet";

          # redirect to 'index.php' and passing error message
          header("Location: ../login.php?error=$em&$data");
          exit;
        }
   }
}else {
  header("Location: ../login.php");
  exit;
}


?>






