
<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <img src="./img/logo.svg" id="logo-navbar">
                </div>
                <div class="sidebar-brand-text mx-3">MooD</div>
            </a>

<!-- Divider -->
            <hr class="sidebar-divider my-0 bg-white">

<!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>People</span></a>
            </li>

<!-- Divider -->
            <hr class="sidebar-divider bg-white">

<!-- Heading -->
            <div class="sidebar-heading mb-2">
                
<!-- Sidebar Toggler (Sidebar) -->
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
                Chats
            </div>

            <hr class="sidebar-divider bg-white">
<!-- Nav Item - User -->            
            <li class="nav-item">
                <?php if(!empty($conversations)) {
                    foreach ($conversations as $conversation) { ?>
                    
                        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse<?=$conversation['user_id']?>" aria-expanded="true" aria-controls="collapseTwo">
                            <img class="img-profile rounded-circle" src="./upload/<?=$conversation['img']?>">
                            <span><?=$conversation['names']?></span>
                        </a>
                        <div id="collapse<?=$conversation['user_id']?>" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionSidebar">
                            <div class="row bg-white justify-content-center py-2 collapse-inner rounded">
                                <h6 class="collapse-header text-danger font-weight-bold">Last message:</h6>
                                <div class="bg-danger rounded m-1" href="#">
                                    <h6 class="p-2 text-xs text-warning">
                                        <?php 
                                            echo lastChat($_SESSION['user_id'], $conversation['user_id'], $conn);
                                        ?>
                                    </h6>
                                </div>
                                <a  class="btn btn-warning btn-circle mr-2" href="chat.php?user=<?=$conversation['names']?>">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </div>
                        </div>
                        <hr class="sidebar-divider">
                   <?php }?>

                <?php 

                }
                else{ ?>
                    <div class="alert alert-info rounded text-center m-2" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        <i class="fas fa-comments d-block fs-big"></i>
                            Start New Chat
                    </div>
                <?php } ?>

<!--End of Nav Item - User -->
            </li>
            
        </ul>
<!-- End of Sidebar -->
