<!-- Profil Modal-->
    <div class="modal fade" id="ProfilModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content" style="border-radius: 15px;">
                <div class="modal-header" id="modal-header">

                    <h5 class="modal-title text-white text-uppercase"id="exampleModalLabel">Profil</h5>
                    <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-profile img-small rounded-circle" id="profil" src="img/undraw_profile.svg">
                </div>
                <div class="modal-footer bg-gray-200">
                    <form class="d-none w-100 d-inline-block form-inline">
                        <div class="input-group">
                            <input type="textarea" class="form-control text-dark bg-light border-0 small" placeholder="Type here ......"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-dark" type="submit" style="border-radius: 0px 7px 7px 0px;">Comment</button>
                            </div>
                            <a href="#" class="btn btn-warning btn-circle ml-1 mr-1" data-toggle="modal"  data-target="#messageModal"><i class="fas fa-pen"></i>
                            </a>
                            <button class="btn btn-danger btn-circle" data-dismiss="modal"><i class="fas fa-check"></i>
                            </button>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>