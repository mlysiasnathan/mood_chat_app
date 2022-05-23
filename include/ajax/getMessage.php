<?php 

session_start();

# check if the user is logged in
if (isset($_SESSION['username'])) {

	if (isset($_POST['id_2'])) {
	
	# database connection file
	include '../db_conn.php';

	$id_1  = $_SESSION['user_id'];
	$id_2  = $_POST['id_2'];
	$opend = 0;

	$sql = "SELECT * FROM chats WHERE to_id=? AND from_id= ? ORDER BY chat_id ASC";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$id_1, $id_2]);

	if ($stmt->rowCount() > 0) {
	    $chats = $stmt->fetchAll();

	    # looping through the chats
	    foreach ($chats as $chat) {
	    	if ($chat['opened'] == 0) {
	    		
	    		$opened = 1;
	    		$chat_id = $chat['chat_id'];

	    		$sql2 = "UPDATE chats SET opened = ? WHERE chat_id = ?";
	    		$stmt2 = $conn->prepare($sql2);
	            $stmt2->execute([$opened, $chat_id]); 

	            ?> 



	            <div class="row md-4 mt-2">
	                <div class="col-8 p-1 w-80" id="you">
	<!-- message threats and menu receiver - Dropdown -->
	                    <h6 class="text-xs font-weight-bold text-danger"><?=$chat['created_at']?></h6>
	                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow bg-warning" id="message-rec">
	                        <h6 class="m-0 font-weight-bold ltext text-danger" style="font-size: 14px;"><?=$chat['message']?></h6>
	                        <div class="dropdown no-arrow">
	                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-danger"></i>
	                            </a>
	                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
	                                <div class="dropdown-header text-warning">Message Options</div>
	                                <div class="dropdown-divider"></div>
	                                <a class="dropdown-item" href="#">Received at <?=$chat['created_at']?></a>
	                                <div class="dropdown-divider"></div>
	                                <a class="dropdown-item" href="#">Reply</a>
	                                <a class="dropdown-item" href="#">Delete</a>
	                                <div class="dropdown-divider"></div>
	                            </div>
	                        </div>
	                        <div class="dropdown no-arrow">
	                            <a class="dropdown-toggle m-2" href="#" role="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <i class="fa fa-share text-danger"></i>
	                            </a>
	                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in p-1" aria-labelledby="dropdownMenu">
	                                <div class="dropdown-header text-danger">Replied from</div>
	                                <div class="dropdown-divider"></div>
	                                <a class="dropdown-item bg-danger" href="#me" id="message-sent">
	                                    <h6 class="pt-2 text-xs text-warning">Type the first message !</h6>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-4"></div>
	            </div>
        
	            <?php
	    	}
	    }
	}

 }

}else {
	header("Location: ../../index.php");
	exit;
}

?>