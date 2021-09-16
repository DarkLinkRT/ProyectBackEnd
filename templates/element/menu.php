<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                        <!-- <div class="brand-logo"></div> -->
                        <img src="<?= $this->Url->Image('logo.png') ?>" width="30px" alt="">
                        <h2 class="brand-text mb-0" style="color: #4972d4 !important;">Ingeniat</h2>
                    </a></li>
                <!-- <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li> -->
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span>MENÚ</span>
                </li>
                    <?php    
                      
                        foreach($menusDB as $Menu)
                        {
                            ?>
                                <?php
                                $icono = (!empty($Menu->icon))?$Menu->icon:'';
                                if(!empty($Menu->children_menus))                           
                                {
                                    ?>
                                    <li class="nav-item has-sub">
                                        <a href="#">
                                            <i class="feather <?= $Menu->icon ?>"></i>
                                            <span class="menu-title" data-i18n="<?= $Menu->name ?>"><?= $Menu->name ?></span>
                                        </a>
                                        <ul class="menu-content">
                                            <?php
                                                foreach($Menu->children_menus as $submenu)
                                                {
                                                    ?>
                                                        <li class="<?= "/" . $this->request->getParam('controller') . "/" .  $this->request->getParam('action')  == $submenu->href ? "active" : "/" .  $this->request->getParam('controller') . "/" .  $this->request->getParam('action') . "/"  == $submenu->href  ? "active"  : ""  ?>">
                                                            <?= $this->Html->link('<i class="feather icon-circle"></i> <span class="menu-title" data-i18n="'.$submenu->name.'">'.$submenu->name.'</span>',$submenu->href,['escape'=>false]) ?>
                                                        </li>
                                                    <?php
                                                }
                                            ?>   
                                        </ul>
                                    </li>
                                    <?php
                                    
                                }
                                else       
                                {     
                                    ?>
                                        <li class="nav-item <?= "/" . $this->request->getParam('controller') . "/" .  $this->request->getParam('action')  == $Menu->href ? "active" : "/" .  $this->request->getParam('controller') . "/" .  $this->request->getParam('action') . "/"  == $Menu->href  ? "active"  : ""  ?>">
                                            <?= $this->Html->link('<i class="feather '.$icono.'"></i> <span class="menu-title" data-i18n="'.$Menu->name.'">'.$Menu->name.'</span>',$Menu->href,['escape'=>false]) ?>
                                        </li>
                                    <?php     
                                }
                                ?>
                            <?php
                        }
                ?>
            </ul>
        </div>
    </div>