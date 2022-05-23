<?php

session_start();

# check if the user is logged in
if (isset($_SESSION['username'])) {
    # check if the key is submitted
    if(isset($_POST['key'])){
       # database connection file
	   include '../db_conn.php';

	   # creating simple search algorithm :) 
	   $key = "%{$_POST['key']}%";
     
	   $sql = "SELECT * FROM users WHERE names LIKE ? OR names LIKE ?";
	   $stmt = $conn->prepare($sql);
	   $stmt->execute([$key, $key]);

       if($stmt->rowCount() > 0){ 
         $users = $stmt->fetchAll();
?>
         	<div class="d-sm-flex align-items-center justify-content-between mb-4">
         		<h1 class="h3 mb-0 text-primary">Searching Result</h1>
         		<a class="p-1 rounded btn btn-outline-primary text-xs" href="#online">Skip
         			<i class="fas fa-angle-down"></i>
         		</a>
         	</div>
         	<div class="row">

<?php
					foreach ($users as $user) {
						if ($user['user_id'] == $_SESSION['user_id']) continue;
?>
					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary mb-1">
											<?=$user['names']?>
										</div>
									</div>
										<a href="chat.php?user=<?=$user['names']?>" class="btn btn-primary btn-circle mr-2">
											<i class="fas fa-pen"></i>
										</a>
										<a href="#" class="btn btn-primary btn-circle" data-toggle="modal"  data-target="#ProfilModal<?=$user['user_id']?>">
											<i class="fas fa-info-circle"></i>
										</a>
									</div>
							</div>
						</div>
					</div>
<?php 

}?>	

				</div>
<?php

      }
      else { ?>
      	<div class="d-sm-flex align-items-center justify-content-between mb-4" id="online">
         		<h1 class="h3 mb-0 text-primary">Searching Result</h1>
         		<a class="p-1 rounded btn btn-outline-primary text-xs" href="#online">Skip
         			<i class="fas fa-angle-down"></i>
         		</a>
        </div>
        <div class="alert alert-danger text-center">
		   			<i class="fa fa-user-times d-block fs-big"></i>
           The user "<?=htmlspecialchars($_POST['key'])?>"
           is  not found.
        </div>
<?php }

    }

}else {
	header("Location: ../../login.php");
	exit;
}

?>