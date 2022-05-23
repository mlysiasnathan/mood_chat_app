


<!-- Profil Modal-->
<div class="modal fade" id="EditProfilModal<?=$_SESSION['user_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content" style="border-radius: 15px;">
            <div class="modal-header" id="modal-header">
                <h5 class="modal-title text-white font-weight-bolder"id="exampleModalLabel">Edit my profil</h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <hr>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <form method="POST" action="./include/update-profil.php">
                            <input type="hidden" name="user_id" value="<?php echo $mydata['user_id']?>">
                            <button class="btn btn-danger btn-circle mr-1" title="Delete my picture" name="delete-img"><i class="fa fa-trash"></i>
                            </button>
                        </form>
                        <img class="img-profile img-small rounded-circle" id="profil" src="./upload/<?=$mydata['img']?>">
                        
                        <form class="d-inline-block needs-validation" action="./include/update-profil.php" method="POST" enctype="multipart/form-data" novalidate>
                        <div class="input-group has-validation mt-1" id="div-input">
                            
                            <span class="input-group-text"id="inputGroupPrepend"><i class="fa fa-pen"></i></span>
                            <input type="file" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo $mydata['img']?>" name="img_user">

                        </div>
                    </div>
                    <div class="col-lg-8">
<!-- Error alerte -->
                <?php if (isset($_GET['error'])) {?>
                            <div class="alert alert-danger rounded text-center text-xs" role="alert">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <span class="sr-only">Error:</span>
                <?php echo htmlspecialchars($_GET['error']);?>
                            </div>
                <?php }

                    if (isset($_GET['username'])) {
                        $name = $_GET['username'];
                    }
                    else
                        $name = '';

                    if (isset($_GET['email'])) {
                        $email = $_GET['email'];
                    }
                    else
                        $email = '';

                    if (isset($_GET['birth_day'])) {
                        $bday = $_GET['birth_day'];
                    }
                    else
                        $bday = '';
                    
                ?>
                            <div class="input-group has-validation" id="div-input">
                                <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo $mydata['names']?>" placeholder="Usernames :" name="username_user"  required>
                            </div>


                            <div class="input-group has-validation mt-2" id="div-input">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo $mydata['email']?>" placeholder="Email address :" name="email_user"  required>
                            </div>


                            <div class="input-group has-validation mt-2" id="div-input">
                                <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-calendar"></i></span>
                                <input  type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?php echo $mydata['bday']?>" placeholder="Birth day :" name="bd_user"  required>
                            </div>


                            <div class="input-group has-validation mt-2" id="div-input">
                                <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-key"></i></span>
                                <input type="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="New Password :" name="password_user"  required>
                                <div class="invalid-feedback ml-2">
                                    Change your password.
                                </div>
                            </div>
                            <input type="hidden" name="user_id" value="<?php echo $mydata['user_id']?>">
                        </div>
                    </div>
                    <hr>
                    
                </div>
                
                <div class="modal-footer bg-gray-200">
                    <div class="input-group justify-content-center">
                        <div class="col-6">
                            <button class="p-2 col-12 rounded btn btn-outline-danger text-xs" data-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="p-2 col-12 rounded btn btn-danger text-xs" type="submit" name="profil-btn">
                                Update profil <i class="fas fa-check"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


