<!doctype html>
<html lang="en">


<!-- Mirrored from mobilekit.bragherstudio.com/view5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 07:13:26 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Sistema de CAPA</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <!-- <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32"> -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png"> -->
    <?= $this->Html->css('/theme/mobilekit/assets/css/styleb6f5.css?v=10') ?>
    <!-- <link rel="manifest" href="__manifest.json"> -->
    <?= $this->Html->script('/theme/mobilekit/assets/js/lib/jquery-3.4.1.min.js') ?>
    <style>
        .bg-primary {
            background: #009EC8 !important;
            color: #FFF;
        }
        .appBottomMenu .item.active .icon, .appBottomMenu .item.active ion-icon, .appBottomMenu .item.active strong {
            color: #009EC8 !important;
            font-weight: 500;
        }
        .appBottomMenu .item.active:before {
            background: #009EC8;
        }
        /* .sidebar-balance {
            padding: 6px 16px;
            background: #009EC8;
        } */
        .action-group {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            padding: 0px 16px 10px 16px;
            background: #009EC8;
        }
        .appHeader .pageTitle .logo {
            max-height: 50px;
        }
        .wallet-card-section:before {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            content: "";
            display: block;
            height: 140px;
            background: #009EC8;
        }
        .btn-primary {
            background: #009EC8 !important;
            border-color: #009EC8 !important;
            color: #FFFFFF !important;
        }
        .btn-primary:hover {
            background: #00b8e8  !important;
            border-color: #00b8e8  !important;
            color: #FFFFFF !important;
        }
        .wallet-card .balance {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            height: 200px;
            justify-content: center;
        }
        .custom-control .custom-control-input:checked~.custom-control-label:before {
            background: #45b8d7 !important;
            border-color: #009ec8 !important;
        }
        .text-primary, a.text-primary {
            color: #45b8d7 !important;
        }
        .avatar-section .button {
            background: #45b8d7;
            color: #FFF;
            width: 32px;
            height: 32px;
            border-radius: 100%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            position: absolute;
            right: 0;
            bottom: 0;
        }
        .profileBox {
            padding-left: 16px;
            padding-right: 16px;
            display: flex;
            align-items: center;
            position: relative;
            background: #009ec8;
            box-shadow: 0 3px 6px 0 rgba(0,0,0,0.1), 0 1px 3px 0 rgba(0,0,0,0.08);
            position: fixed;
            z-index: 100;
            left: 0;
            top: 0;
            margin-top: env(safe-area-inset-top);
            right: 0;
        }
        body.dark-mode-active .appHeader {
            background: #0F1C2F !important;
            border-bottom-color: #1B283B;
        }
        .fab-button .fab, .fab-button .fab {
            background: #ffffff !important;
            color: black !important;
        }
    </style>
</head>

<body style="background-image:url(<?= $this->Url->Image('fondocapa.jpg') ?>);">

    <!-- loader -->
    <div id="loader">
        <img src="<?= $this->Url->Image('/theme/finapp/assets/img/logo-icon_capa.png'); ?>" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    
    <!-- App Header -->
    <?= $this->fetch('appheader'); ?>
    <!-- * App Header -->



    <!-- App Capsule -->
    <div id="appCapsule">
        <?= $this->fetch('content') ?>
    </div>
    <!-- * App Capsule -->


    <!-- ///////////// Js Files ////////////////////  -->
     <!-- Bootstrap-->
         <?= $this->Html->script('/theme/mobilekit/assets/js/lib/popper.min.js') ?>
        <?= $this->Html->script('/theme/mobilekit/assets/js/lib/bootstrap.min.js') ?>
        <!-- Ionicons -->
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
        <?= $this->Html->script('/theme/mobilekit/assets/js/plugins/owl-carousel/owl.carousel.min.js') ?>
        <?= $this->Html->script('/theme/mobilekit/assets/js/plugins/jquery-circle-progress/circle-progress.min.js') ?>
        <!-- Base Js File -->
        <?= $this->Html->script('/theme/mobilekit/assets/js/baseb6f5.js?v=10') ?>

    <script>
        // setTimeout(() => {
        //     notification('notification-welcome', 5000);
        // }, 2000);
    </script>

</body>


<!-- Mirrored from mobilekit.bragherstudio.com/view5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Apr 2020 07:13:32 GMT -->
</html>