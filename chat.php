<?php session_start()?>

<?php include 'include/security.php';?>

<?php include 'include/user.php';?>

<?php include 'include/chatWith.php';?>

<?php include 'include/opened.php';?>

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


if (!isset($_GET['user'])) {
        header('Location: index.php');
        exit;
    }

    # Getting User data data
    $chatWith = getUser($_GET['user'], $conn);

    if (empty($chatWith)) {
        header('Location: index.php');
        exit;
    }

    $chats = getChats($_SESSION['user_id'], $chatWith['user_id'], $conn);

    opened($chatWith['user_id'], $conn, $chats);

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MooD - Chat <?php echo $_GET['user']?></title>

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
                <div class="" id="">

                                        
                </div>
                <div class="row justify-content-center">
                    
<!-- Dropdown Card Example -->
                    <div class="card shadow mt-0 mb-4" style="border-radius: 15px;" id="online">
<!-- Card Header - Dropdown -->
                        <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between" id="modal-header" style="border-radius: 15px 15px 0px 0px;">
                            <a class="nav-link collapsed" href="#"  data-toggle="modal"  data-target="#ProfilModal<?=$chatWith['user_id']?>">
                                <img class="img-profile rounded-circle" src="./upload/<?=$chatWith['img']?>?>" style="height: 50px;width: 50px;">
                                <span class="text-white h5"><?=$chatWith['names']?></span>
                                <div>
                            <?php if(isset($conversation['last_seen'])){
                                if (last_seen($conversation['last_seen']) === "Just now") { ?>
                                <span class="mr-4 p-1 rounded text-white text-xs bg-success">online</span>
                            <?Php }else{?>
                                <span class="rounded text-danger m-1 text-xs bg-warning">Last seen : <?=last_seen($chatWith['last_seen'])?></span>
                            <?php } } else{
                                if (last_seen($chatWith['last_seen']) === "Just now") { ?>
                                <span class="mr-4 p-1 rounded text-white text-xs bg-success">online</span>
                            <?Php }else{?>
                                <span class="rounded text-danger m-1 text-xs bg-warning">Last seen : <?=last_seen($chatWith['last_seen'])?></span>
                            <?php } } ?>
                            </div>
                            </a>
                            <a class="btn btn-warning btn-circle ml-1" title="Back" href="index.php">
                                    <i class="fas fa-reply"></i>
                            </a>
                        </div>
<!-- Card Body -->
                        <div class="card-body chat-box" id="chatBox" style="overflow-y: auto;max-height: 50vh;overflow-x: hidden;">
                            
                            <a class="p-2 col-12 rounded btn btn-outline-danger text-xs" href="#last-message">
                                Unread Messages
                                <i class="fas fa-angle-down"></i>
                            </a>
                            
<!-- ====================================================================================================================================-->
                    <?php if (!empty($chats)) { 
                        foreach ($chats as $chat) {
                            // code...
                            if ($chat['from_id'] == $_SESSION['user_id']) { ?>

                            <div class="row md-4 mt-2">
                                <div class="col-4"></div>
                                <div class="col p-2 w-80" id="me">
                                    <h6 class="text-xs font-weight-bold text-danger text-right"><?=last_seen($chat['created_at'])?></h6>
                                    <div class="card-header px-3 d-flex flex-row align-items-center justify-content-between bg-danger shadow" id="message-sent">
                                        <h6 class="m-0 rtext text-warning" style="font-size: 14px;"><?=$chat['message']?></h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-warning"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header text-danger">Message Options</div>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Sent at <?=$chat['created_at']?></a>
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

                        <?php } else { ?>




                            <div class="row md-4 mt-2">
                                <div class="col-8 p-1 w-80" id="you">
<!-- message threats and menu receiver - Dropdown -->
                                    <h6 class="text-xs font-weight-bold text-danger"><?=last_seen($chat['created_at'])?></h6>
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



                <?php   }}
                    ?>
                                                        

                <?php } else { ?>

                            <div class="alert alert-info rounded text-center mt-4" role="alert">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <span class="sr-only">Error:</span>
                                <i class="fas fa-comments d-block fs-big"></i>
                                        Start New Chat
                            </div>



                <?php } ?>


<!-- ====================================================================================================================================-->    


<!-- ==================================================================================================================-->                <div id="last-message"></div>
            </div>
             





            <div class="modal-footer bg-gray-400" style="border-radius: 0px 0px 15px 15px;">
<!-- message text area -->
<!--                     <form class="d-none w-100 d-inline-block form-inline needs-validation" method="POST" novalidate>
 -->                        <div class="input-group">
<!--if msg was been replied message text area -->
                            <div class="input-group-append">
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle btn btn-outline-danger" href="#" role="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="border-radius: 7px 0px 0px 7px;">
                                        <i class="fa fa-reply"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left shadow animated--fade-in p-1" aria-labelledby="dropdownMenu">
                                        <div class="dropdown-header text-danger">Replied from</div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item bg-danger" href="#me" id="message-sent">
                                            <h6 class="pt-2 text-xs text-warning">Type the first message !</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
<!-- Text area for typing msg -->
                            <textarea class="form-control has-invalid text-danger bg-light border-0  small" id="validationTextarea" placeholder="Type your message" style="height: 38px;" required></textarea>
                            <div class="input-group-append">
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle btn btn-outline-danger" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 0px 7px 7px 0px;">
                                        <i class="fas fa-laugh-wink"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header text-danger">Emoji  <i class="fas fa-laugh-wink"></i>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Delivered at</a>
                                        <a class="dropdown-item" href="#">Read at</a>
                                        <a class="dropdown-item" href="#">Delete for me</a>
                                        <a class="dropdown-item" href="#">Delete for everyone</a>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger btn-circle ml-2" id="sendBtn">
                                    <i class="fab fa-telegram-plane"></i>
                            </button>
                        </div>
<!--                     </form>
 -->                </div>


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
<!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link bg-light d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <span class="text-white">Copyright &copy; MooD Official 2022</span>
                        <button class="btn btn-outline-light btn-circle ml-3" title="About us" data-toggle="modal"  data-target="#ProfilModal">
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
     var scrollDown = function(){
        let chatBox = document.getElementById('chatBox');
        chatBox.scrollTop = chatBox.scrollHeight;
    }

    scrollDown();
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

       $(document).ready(function(){
            $("#sendBtn").on('click', function(){
                message = $("#validationTextarea").val();
                
                if (message == "") return;

                $.post("include/ajax/insert.php",
                {
                    message: message,
                    to_id: <?=$chatWith['user_id']?>
                },
                function(data, status){
                    $("#validationTextarea").val("");
                    $("#chatBox").append(data);
                    scrollDown();
                });
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
      setInterval(lastSeenUpdate, 500);

      let fechData = function(){
        $.post("include/ajax/getMessage.php",
                {
                    id_2: <?=$chatWith['user_id']?>
                },
                function(data, status){
                    $("#chatBox").append(data);
                    if (data != "") scrollDown();
                });
      }
      fechData();
      setInterval(fechData, 1000);


    });





</script>

<!-- for disabling form submissions if there are invalid inputs-->
    <?php include 'include/input-validation.php';?>

</body>

</html>