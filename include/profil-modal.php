<?php
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        $all = $stmt->fetchAll();

        foreach ($all as $user_all) {
            if ($user_all['user_id'] == $_SESSION['user_id']) continue;
?>


<!-- Profil Modal-->
    <div class="modal fade" id="ProfilModal<?=$user_all['user_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content" style="border-radius: 15px;">
                <div class="modal-header" id="modal-header">

                    <h5 class="modal-title text-white font-weight-bolder"id="exampleModalLabel">Profil of <?=$user_all['names']?></h5>
                    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <img class="img-profile img-small rounded-circle" id="profil" src="./upload/<?=$user_all['img']?>"></br>
                            <?php if(isset($conversation['last_seen'])){
                                if (last_seen($conversation['last_seen']) === "Just now") { ?>
                                <span class="mr-4 p-1 rounded text-white text-xs bg-success">online</span>
                            <?Php }else{?>
                                <span class="rounded text-danger m-1 text-xs bg-warning">Last seen : <?=last_seen($user_all['last_seen'])?></span>
                            <?php } } else{
                                if (last_seen($user_all['last_seen']) === "Just now") { ?>
                                <span class="mr-4 p-1 rounded text-white text-xs bg-success">online</span>
                            <?Php }else{?>
                                <span class="rounded text-danger m-1 text-xs bg-warning">Last seen : <?=last_seen($user_all['last_seen'])?></span>
                            <?php } } ?>
                        </div>
                        <div class="col-lg-6">

                            <div class="input-group has-validation" id="div-input">
                                <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-user"></i></span>
                                <h4 class="form-control" id="validationCustomUsername"><?=$user_all['names']?></h4>
                            </div>


                            <div class="input-group has-validation mt-2" id="div-input">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <h4 class="form-control" id="validationCustomUsername"><?=$user_all['email']?></h4>
                            </div>


                            <div class="input-group has-validation mt-2" id="div-input">
                                <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-calendar"></i></span>
                                <h4 class="form-control" id="validationCustomUsername"><?=$user_all['bday']?></h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="modal-footer bg-gray-200">
                    <form class="d-none w-100 d-inline-block form-inline">
                        <div class="input-group">
                            <input type="textarea" class="form-control text-dark bg-light border-0 small" placeholder="Type here ......"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-dark" type="submit" style="border-radius: 0px 7px 7px 0px;">Comment</button>
                            </div>

                            <a  class="btn btn-warning btn-circle mr-2 ml-2" href="chat.php?user=<?=$user_all['names']?>">
                                <i class="fas fa-pen"></i>
                            </a>
                            <button class="btn btn-danger btn-circle" data-dismiss="modal"><i class="fas fa-check"></i>
                            </button>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>


<?php }?>
<?php }
        else{ 

            
        
     } 
 ?>