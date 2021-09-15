<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        
                    </div>
                    <ul class="nav navbar-nav float-right">
                    
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link"  id="changeTheme" onclick="changeeTheme();" >
                                <i id="iconThemee" class="ficon feather <?= $theme == "light" ? "icon-moon" : "icon-sun" ?>"></i>
                            </a>
                        </li>
                

                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name text-bold-600"><?= $userData["name_and_lastname"] ?></span>
                                    <span class="user-status"><?= $userData["roleUser"] ?></span>
                                </div>
                                <span>
                                    <img class="round" src="<?= $userData["hasPic"] ? $this->Url->Image('/files/userfiles/'.$userData["id"].'/picture/200.jpg') : $this->Url->Image('/files/default/defaultpic.jpg') ?>" alt="avatar" height="40" width="40">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="feather icon-user"></i> Editar perfil
                                </a> -->
                              
                                <!-- <div class="dropdown-divider"></div> -->
                                <?= $this->Html->link(' <i class="feather icon-power"></i> Cerrar sesión',['escape'=>false,'controller'=>'users','action'=>'logout'],['escape'=>false,'class'=>'dropdown-item']) ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>