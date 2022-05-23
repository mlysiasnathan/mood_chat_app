<!-- Message Modal-->
    <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content" style="border-radius: 15px;">
                <div class="modal-header" id="modal-header">
<!-- Profil receiver Modal-->
                    <a class="nav-link collapsed" href="#">
                        <img class="img-profile rounded-circle" src="img/me3.jpg" style="height: 50px;width: 50px;">
                        <span class="mr-2 text-white">Lysias Nathan</span>
                        <span class="mr-2 p-1 rounded text-white text-xs bg-success">online</span>
<!--                         <span class="mr-2 p-1 rounded text-white text-xs bg-warning">10m ago</span>
 -->                     
                    </a>
                    <h5 class="modal-title text-white" id="exampleModalLabel"></h5>
                    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
<!-- Scroll to Top Button-->
                    
                    <a class="scroll-to-downn rounded text-center text-light" href="#last-message">
                        <div class="col-lg bg-warning p-3" id="link-mes">
                        <i class="fas fa-angle-down"> Newer Messages</i>
                        </div>
                    </a>
<!-- =====================================================================================================================================
 -->
                    <div class="row md-4 mt-2">
                        <div class="col-8 p-1 w-80" id="you">
<!-- message threats and menu receiver - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow bg-warning" id="message-rec">
                                <h6 class="m-0 font-weight-bold text-xs text-danger">Do you Want to say Hi !</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-danger"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header text-warning">Message Options</div>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Received at</a>
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
                        </div>
                        <div class="row md-4 mt-2">
                            <div class="col-4"></div>
                            <div class="col p-2 w-80" id="me">
                                <div class="card-header px-3 d-flex flex-row align-items-center justify-content-between bg-danger shadow" id="message-sent">
                                    <h6 class="m-0 text-xs text-warning">Type the first message !</h6>
                                    <div class="dropdown no-arrow">
                                        
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-warning"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header text-danger">Message Options</div>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Delivered at</a>
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


<!-- =====================================================================================================================================
 -->
                        <div class="row md-4 mt-2">
                            <div class="col-8 p-1 w-80" id="you">
<!-- message not replied -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between shadow bg-warning" id="message-rec">
                                    <h6 class="m-0 font-weight-bold text-xs text-danger">Do you Want to say Hi !</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-danger"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header text-warning">Message Options</div>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Received at</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Reply</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                            <div class="dropdown-divider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row md-4 mt-2">
                            <div class="col-4"></div>
                            <div class="col p-2 w-80" id="me">
                                <div class="card-header px-3 d-flex flex-row align-items-center justify-content-between bg-danger shadow" id="message-sent">
                                    <h6 class="m-0 text-xs text-warning">Type the first message !</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-warning"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header text-danger">Message Options</div>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Delivered at</a>
                                            <a class="dropdown-item" href="#">Read at</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Reply</a>
                                            <a class="dropdown-item" href="#">Delete for me</a>
                                            <a class="dropdown-item" href="#">Delete for everyone</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




<!-- ==================================================================================================================================
 -->                    <div id="last-message"></div>
                </div>
<!-- End of modal body -->
                <div class="modal-footer bg-gray-200">
<!-- message text area -->
                    <form class="d-none w-100 d-inline-block form-inline needs-validation" action="" method="POST" novalidate>
                        <div class="input-group">
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
                            <button class="btn btn-danger btn-circle ml-2" type="submit">
                                    <i class="fab fa-telegram-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>