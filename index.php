<?php session_start()?>

<?php include 'include/security.php';?>

<?php include 'include/user.php';?>

<?php include 'include/last_chat.php';?>

<?php include 'include/conversation.php';?>

<?php include 'include/timeAgo.php';?>

<?php
$user = getUser($_SESSION['username'], $conn);

?>


<?php
if (isset($user['user_id'])) {
    $conversations = getConversation($user['user_id'], $conn);
}else {
    $conversations = getConversation($_SESSION['user_id'], $conn);
}


$current_timestamp = strtotime(date('Y-m-d H:i:s') . '-10 second');
$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
?>


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
    <!-- <script href="include/ajax/jquery.min.js"></script> -->

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
                    
                    <!-- search people Card Example -->
                    <div class="" id="chatList">

                        
                    </div>
                    <?php if (isset($_GET['error'])) {?>
                                    
                        <div class="alert alert-danger rounded text-center text-xs" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            <?php echo htmlspecialchars($_GET['error']);?>
                        </div>
                    <?php }?>

<!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" id="online">
                        <h1 class="h3 mb-0 text-success">Online Friends</h1>
                        <a class="p-1 rounded btn btn-outline-success text-xs" href="#suggested">Skip
                            <i class="fas fa-angle-down"></i>
                        </a>
                    </div>


<!-- Content Row  online friend-->
                    <div class="row">
                        <?php if(!empty($conversations)) {
                            
                                foreach ($conversations as $conversation) {

                                    if (last_seen($conversation['last_seen']) === "Just now") {
                        ?>
                       
                        <div class="col-lg-6">
                            <div class="card mb-4 py-3 border-left-success">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h5 font-weight-bold text-success mb-1">
                                                <?=$conversation['names']?>
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-outline-success btn-circle mr-2">
                                            <i class="fas fa-phone"></i>
                                        </a>
                                        <a class="btn btn-outline-warning btn-circle mr-2" href="chat.php?user=<?=$conversation['names']?>">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-outline-danger btn-circle" data-toggle="modal"  data-target="#ProfilModal<?=$conversation['user_id']?>">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                
                    
                <?php } } if (last_seen($conversation['last_seen']) != "Just now"){
                ?>
                    <div class="col-12 alert alert-success text-center">
                            <i class="fa fa-user-times d-block fs-big"></i>
                            All users are offline
                    </div>
                <?php } }else{
                ?>
                    <div class="col-12 alert alert-info rounded text-center" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        <i class="fas fa-comments d-block fs-big"></i>
                            Start New Chat
                    </div>
                <?php
            } ?>
            </div>
<!--End Content Row -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" id="suggested">
                        <h1 class="h3 mb-0 text-warning">Suggested Friends</h1>
                        <a class="p-1 rounded btn btn-outline-warning text-xs" href="#recent">Skip
                            <i class="fas fa-angle-down"></i>
                        </a>
                    </div>

<!-- Content Row  suggested friend-->
                    

<!-- Suggested people Card Example -->
                    <div class="row">

                    <?php
						$sql = "SELECT * FROM users";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();

                        if($stmt->rowCount() > 0){ 
                            $all = $stmt->fetchAll();
                            foreach ($all as $user_all) {
                                if ($user_all['user_id'] == $_SESSION['user_id']) continue;
                    ?>

									

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning mb-1">
                                            <?=$user_all['names']?>
                                            </div>
                                        </div>
										<a class="btn btn-warning btn-circle mr-2" href="chat.php?user=<?=$user_all['names']?>">
											<i class="fas fa-pen"></i>
										</a>
										<a href="#" class="btn btn-danger btn-circle" data-toggle="modal"  data-target="#ProfilModal<?=$user_all['user_id']?>">
											<i class="fas fa-info-circle"></i>
										</a>
									</div>
                                </div>
                            </div>
                        </div>
            <?php } ?>	

                    </div>
    
            <?php } else { ?>

                    <div class="alert alert-danger text-center">
                        <i class="fa fa-user-times d-block fs-big"></i>
                        No users avalaible in out System
                    </div>

            <?php } ?>

                    
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" id="recent">
                        <h1 class="h3 mb-0 text-gray-800">Recent Chats</h1>
                        <a class="p-1 rounded btn btn-outline-secondary text-xs" href="#online">Skip
                            <i class="fas fa-angle-up"></i>
                        </a>
                    </div>
<!-- Recent people Card Example -->
                    <div class="row">

                    <?php if(!empty($conversations)) {

                        foreach ($conversations as $conversation) { ?>

                        <div class="col-lg-4 mb-4">
                            <div class="card shadow">
    <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample<?=$conversation['user_id']?>" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 h5 font-weight-bold text-gray-800"><?=$conversation['names']?></h6>
                                </a>
    <!-- Card Content - Collapse -->
                                <div class="collapse" id="collapseCardExample<?=$conversation['user_id']?>">
                                    <div class="card-body">
                                        <h6 class="m-0 font-weight-bold text-danger mb-2">Last message</h6>
                                        <a href="chat.php?user=<?=$conversation['names']?>">
                                            <h6 class="rounded p-2 text-xs font-weight-bold text-warning btn-danger">
                                            <?php 
                                            echo lastChat($_SESSION['user_id'], $conversation['user_id'], $conn);
                                            ?>
                                            </h6>
                                        </a>
                                        <h6 class="text-xs">click to the last message to reply</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php } } else { ?>

                        <div class="col-12 alert alert-info rounded text-center" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            <i class="fas fa-comments d-block fs-big"></i>
                                Start New Chat
                        </div>

                <?php } ?>

                    </div>
                </div>
<!-- End of container-fluid -->

            </div>
<!-- End of Main Content -->

<!-- Footer -->
            <footer class="sticky-footer bg-warning shadow-xl" id="footer">

                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
<!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link bg-light d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <span class="text-white">Copyright &copy; MooD Official 2022</span>
                        <button class="btn btn-outline-light btn-circle ml-3" title="About us" data-toggle="modal"  data-target="#AboutUsModal">
                            <i class="fas fa-info-circle"></i>
                        </button>
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

<!-- Edit my profil Modal-->
<?php require_once('include/edit-profil-modal.php'); ?>


<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
    <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

<!-- Page level custom scripts -->
    <!-- <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script> -->
    <script src="include/ajax/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<script>
     
    $(document).ready(function(){
      // Search
       $("#searchText").on("input", function(){
         var searchText = $(this).val();
         if(searchText == "") return;
         $.post('include/ajax/search.php', 
                 {
                    key: searchText
                 },
               function(data, status){
                  $("#chatList").html(data);
               });
       });


       $("#searchText2").on("input", function(){
         var searchText = $(this).val();
         if(searchText == "") return;
         $.post('include/ajax/search.php',
                 {
                    key: searchText
                 },
               function(data, status){
                  $("#chatList").html(data);
               });
       });

       // Search using the button
       $("#serachBtn").on("click", function(){
         var searchText = $("#searchText").val();
         if(searchText == "") return;
         $.post('include/ajax/search.php', 
                 {
                    key: searchText
                 },
               function(data, status){
                  $("#chatList").html(data);
               });
       });

       $("#serachBtn2").on("click", function(){
         var searchText = $("#searchText2").val();
         if(searchText == "") return;
         $.post('include/ajax/search.php', 
                 {
                    key: searchText
                 },
               function(data, status){
                  $("#chatList").html(data);
               });
       });
      


      /** 
      auto update last seen 
      for logged in user
      **/
      let lastSeenUpdate = function(){
        $.get("include/ajax/update_last_seen.php");
      }
      lastSeenUpdate();
      /** 
      auto update last seen 
      every 10 sec
      **/
      setInterval(lastSeenUpdate, 1500);

    });
</script>

<!-- for disabling form submissions if there are invalid inputs-->
    <?php include 'include/input-validation.php';?>

</body>

</html>