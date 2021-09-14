<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Inicio - Sistema de Mutualista</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= $this->Url->Image('logo.png') ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <?= $this->Html->css('/themes/vue/vendors/css/vendors.min.css') ?>
    <?= $this->Html->css('/themes/vue/vendors/css/charts/apexcharts.css') ?>
    <?= $this->Html->css('/themes/vue/vendors/css/extensions/tether-theme-arrows.css') ?>
    <?= $this->Html->css('/themes/vue/vendors/css/extensions/tether.min.css') ?>
    <?= $this->Html->css('/themes/vue/vendors/css/extensions/shepherd-theme-default.css') ?>
    <?= $this->Html->css('/themes/vue/vendors/css/forms/select/select2.min.css') ?>
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <?= $this->Html->css('/themes/vue/css/bootstrap.css') ?>
    <?= $this->Html->css('/themes/vue/css/bootstrap-extended.css') ?>
    <?= $this->Html->css('/themes/vue/css/colors.css') ?>
    <?= $this->Html->css('/themes/vue/css/components.css') ?>
    <?= $this->Html->css('/themes/vue/css/themes/dark-layout.css') ?>
    <?= $this->Html->css('/themes/vue/css/themes/semi-dark-layout.css') ?>

    <!-- BEGIN: Page CSS-->
    <?= $this->Html->css('/themes/vue/css/core/menu/menu-types/vertical-menu.css') ?>
    <?= $this->Html->css('/themes/vue/css/core/colors/palette-gradient.css') ?>
    <?= $this->Html->css('/themes/vue/css/pages/dashboard-analytics.css') ?>
    <?= $this->Html->css('/themes/vue/css/pages/card-analytics.css') ?>
    <?= $this->Html->css('/themes/vue/css/plugins/tour/tour.css') ?>
    <?= $this->Html->css('/themes/vue/css/pages/app-ecommerce-shop.css') ?>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <?= $this->Html->css('/themes/vue/style.css') ?>
    <!-- END: Custom CSS-->

    <?= $this->Html->script('jquery-3.6.0.js') ?>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<!-- ELECCION THEME -->

<?php

    $_theme = "";

    if($theme == "light"){
        $_theme = "";
    }
    if($theme == "dark"){
        $_theme = "dark-layout";
    }


?>

<script>

    var mode_white = <?php if($_theme== ""){ echo "true";}else{ echo "false"; } ?>;
    var mode_dark = <?php if($_theme == "dark-layout"){ echo "true";}else{ echo "false"; } ?>;

</script>

<body id="bodyEelements" class=" <?= $_theme ?> vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?= $this->element('header') ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?= $this->element('menu') ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
             <?= $this->Flash->render() ?>
             <?= $this->fetch('content') ?>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="text-bold-800 grey darken-2" href="#">Consultoría Integral SM2,</a> Todos los derechos reservados</span><span class="float-md-right d-none d-md-block"<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->

    <script>
    
     /***************/var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;/********************* */
     var route_theme_change = "<?= $this->Url->build(["controller" => "users","action" => "settheme"]);?>";

    </script>


    <!-- BEGIN: Vendor JS-->
    <?= $this->Html->script('/themes/vue/vendors/js/vendors.min.js') ?>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <?= $this->Html->script('/themes/vue/vendors/js/charts/apexcharts.min.js') ?>
    <?= $this->Html->script('/themes/vue/vendors/js/extensions/tether.min.js') ?>
    <?= $this->Html->script('/themes/vue/vendors/js/forms/select/select2.full.min.js') ?>
    <!-- < ?= $this->Html->script('/themes/vue/vendors/js/extensions/shepherd.min.js') ?> -->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <?= $this->Html->script('/themes/vue/js/core/app-menu.js') ?>
    <?= $this->Html->script('/themes/vue/js/core/app.js') ?>
    <?= $this->Html->script('/themes/vue/js/scripts/components.js') ?>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <?= $this->Html->script('/themes/vue/js/scripts/pages/dashboard-analytics.js') ?>
    <?= $this->Html->script('/themes/vue/js/scripts/pages/app-ecommerce-shop.js') ?>
    <?= $this->Html->script('/themes/vue/js/scripts/forms/select/form-select2.js') ?>
    <!-- END: Page JS-->

    <!--  Theme -->
    <?= $this->Html->script('theme.js') ?>
    <!--  End:: Theme -->
     
</body>
<!-- END: Body-->

</html>
