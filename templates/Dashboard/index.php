<?= $this->Html->css('dashboard.css') ?>

<div class="content-body">
                <div id="user-profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="profile-header mb-2">
                                <div class="relative">
                                    <div class="cover-container">
                                        <img class="img-fluid bg-cover rounded-0 w-100" src="<?= $this->Url->Image('/files/default/banner.jpg') ?>" alt="User Profile Image" style="height: 300px;object-fit: cover;">
                                    </div>
                                    <div class="profile-img-container d-flex align-items-center justify-content-between">
                                        <img src="<?= $userData["hasPic"] ? $this->Url->Image('/files/userfiles/'.$userData["id"].'/picture/200.jpg') : $this->Url->Image('/files/default/defaultpic.jpg') ?>" style="width:150px;height:150px;object-fit:cover" class="rounded-circle img-border box-shadow-1" alt="Card image">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1 waves-effect waves-light">
                                                <i class="feather icon-edit-2"></i>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary waves-effect waves-light">
                                                <i class="feather icon-settings"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end align-items-center profile-header-nav">
                                    <nav class="navbar navbar-expand-sm w-100 pr-0">
                                        <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"><i class="feather icon-align-justify"></i></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav justify-content-around w-75 ml-sm-auto">
                                                <li class="nav-item px-sm-0">
                                                    <button type="button" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Publicaciones</button>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">About</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Photos</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Friends</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Videos</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Events</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="profile-info">
                        <div class="row">
                            <div class="col-lg-3 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>About</h4>
                                        <i class="feather icon-more-horizontal cursor-pointer"></i>
                                    </div>
                                    <div class="card-body">
                                        <p>Tart I love sugar plum I love oat cake. Sweet roll caramels I love jujubes. Topping cake wafer.</p>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Joined:</h6>
                                            <p>November 15, 2015</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Lives:</h6>
                                            <p>New York, USA</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Email:</h6>
                                            <p>bucketful@fiendhead.org</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Website:</h6>
                                            <p>www.pixinvent.com</p>
                                        </div>
                                        <div class="mt-1">
                                            <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25 waves-effect waves-light"><i class="feather icon-facebook"></i></button>
                                            <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25 waves-effect waves-light"><i class="feather icon-twitter"></i></button>
                                            <button type="button" class="btn btn-sm btn-icon btn-primary p-25 waves-effect waves-light"><i class="feather icon-instagram"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="card" style="margin-bottom:10px !important">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <fieldset class="form-label-group mb-0">
                                                    <textarea class="form-control char-textarea active" id="textarea-counter" rows="5" placeholder="¿Que hay de nuevo?" style="color: rgb(78, 81, 84);resize:none"></textarea>
                                                    <label for="textarea-counter">¿Que hay de nuevo?</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Publicar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="card" style="margin-bottom:10px !important">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-1">
                                                <img src="../../../app-assets/images/profile/user-uploads/user-01.jpg" alt="avtar img holder" height="45" width="45">
                                            </div>
                                            <div class="user-page-info">
                                                <p class="mb-0">Leeanna Alvord</p>
                                                <span class="font-small-2">12 Dec 2018 at 1:16 AM</span>
                                            </div>
                                            <div class="ml-auto user-like text-danger"><i class="fa fa-heart"></i></div>
                                        </div>
                                        <p>I love jujubes wafer pie ice cream tiramisu. Chocolate I love pastry pastry sesame snaps wafer. Pastry topping biscuit lollipop topping I love lemon drops sweet roll bonbon. Brownie donut icing.</p>
                                        <img class="img-fluid card-img-top rounded-sm mb-2" src="../../../app-assets/images/profile/post-media/2.jpg" alt="avtar img holder">
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-lg-3 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Latest Photos</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- <div class="col-md-4 col-6 user-latest-img">
                                                <img src="../../../app-assets/images/profile/user-uploads/user-01.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="../../../app-assets/images/profile/user-uploads/user-02.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="../../../app-assets/images/profile/user-uploads/user-03.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="../../../app-assets/images/profile/user-uploads/user-04.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="../../../app-assets/images/profile/user-uploads/user-05.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="../../../app-assets/images/profile/user-uploads/user-06.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="../../../app-assets/images/profile/user-uploads/user-07.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="../../../app-assets/images/profile/user-uploads/user-08.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div>
                                            <div class="col-md-4 col-6 user-latest-img">
                                                <img src="../../../app-assets/images/profile/user-uploads/user-09.jpg" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <div class="col-12 text-center">
                                <button type="button" class="btn btn-primary block-element mb-1 waves-effect waves-light">Load More</button>
                            </div> -->
                        </div>
                    </section>
                </div>

            </div>

<!-- <div class="card bg-analytics text-white">
    <div class="card-content">
        <div class="card-body text-center">
            <img src="< ?= $this->Url->Image('decore-left.png') ?>" class="img-left" alt="card-img-left">
            <img src="< ?= $this->Url->Image('decore-right.png') ?>" class="img-right" alt="card-img-right">
            <div class="avatar avatar-xl bg-primary shadow mt-0">
                <div class="avatar-content">
                    <i class="feather icon-award white font-large-1"></i>
                </div>
            </div>
            <div class="text-center">
                <h1 class="mb-2 text-white">¡Hola < ?= $userData["name_and_lastname"] ?>!</h1>
                <p class="m-auto w-75">Tienes <strong>mucho</strong> por descubrir hoy. Revisa tu <strong>perfil</strong> para actualizar.</p>
            </div>
        </div>
    </div>
</div> -->