<?php 

session_start();

# check if the user is logged in
if (isset($_SESSION['username'])) {

	if (isset($_POST['message']) && isset($_POST['to_id'])) {
	
	# database connection file
	include '../db_conn.php';

	# get data from XHR request and store them in var
	$message = $_POST['message'];
	$to_id = $_POST['to_id'];

	# get the logged in user's username from the SESSION
	$from_id = $_SESSION['user_id'];

	$sql = "INSERT INTO chats (from_id, to_id, message) VALUES (?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$res  = $stmt->execute([$from_id, $to_id, $message]);
    
    # if the message inserted
    if ($res) {
    	/**
       check if this is the first
       conversation between them
       **/
      $sql2 = "SELECT * FROM conversations WHERE (user_1=? AND user_2=?) OR (user_2=? AND user_1=?)";
      $stmt2 = $conn->prepare($sql2);
	   $stmt2->execute([$from_id, $to_id, $from_id, $to_id]);

	    // setting up the time Zone
		// It Depends on your location or your P.c settings
		define('TIMEZONE', 'Africa/Lubumbashi');
		date_default_timezone_set(TIMEZONE);

		$time = date("h:i:s a");

		if ($stmt2->rowCount() == 0 ) {
# insert them into conversations table 
			$sql3 = "INSERT INTO conversations(user_1, user_2) VALUES (?,?)";
			$stmt3 = $conn->prepare($sql3); 
			$stmt3->execute([$from_id, $to_id]);
		}
		?>





		<div class="row md-4 mt-2">
			<div class="col-4"></div>
				<div class="col p-2 w-80" id="me">
				   <h6 class="text-xs font-weight-bold text-danger text-right"><?=$time?></h6>
				   <div class="card-header px-3 d-flex flex-row align-items-center justify-content-between bg-danger shadow" id="message-sent">
				       <h6 class="m-0 rtext text-warning" style="font-size: 14px;"><?=$message?></h6>
				       <div class="dropdown no-arrow">
				           <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				               <i class="fas fa-ellipsis-v fa-sm fa-fw text-warning"></i>
				           </a>
				           <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
				               <div class="dropdown-header text-danger">Message Options</div>
				               <div class="dropdown-divider"></div>
				               <a class="dropdown-item" href="#">Delivered at <?=$time?></a>
				               <a class="dropdown-item" href="#">Read at</a>
				               <div class="dropdown-divider"></div>
				               <a class="dropdown-item" href="#">Reply</a>
				               <a class="dropdown-item" href="#">Delete for me</a>
				               <a class="dropdown-item" href="#">Delete for everyone</a>
				           </div>
				       </div>
				       <div class="dropdown no-arrow">
				           <a class="dropdown-toggle m-2" href="#" role="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				               <i class="fa fa-reply text-warning"></i>
				           </a>
				           <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in p-1" aria-labelledby="dropdownMenu">
				               <div class="dropdown-header text-warning">Replied from</div>
				               <div class="dropdown-divider"></div>
				               <a class="dropdown-item bg-warning" href="#you" id="message-rec">
				                   <h6 class="pt-2 text-xs text-danger">Do you Want to say Hi !</h6>
				               </a>
				           </div>
				       </div>
				   </div>
				</div>
			</div>


    <?php 
     }
  }
}else {
	header("Location: ../../index.php");
	exit;
}

?>