<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Centro medico</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
    
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>images/brand-logos/favicon.ico" type="image/x-icon">
    
    <!-- Choices JS -->
    <script src="<?php echo base_url(); ?>public/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="<?php echo base_url(); ?>public/js/main.js"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="<?php echo base_url(); ?>public/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="<?php echo base_url(); ?>public/css/styles.min.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="<?php echo base_url(); ?>public/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="<?php echo base_url(); ?>public/libs/node-waves/waves.min.css" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="<?php echo base_url(); ?>public/libs/simplebar/simplebar.min.css" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/libs/choices.js/public/assets/styles/choices.min.css">


    <link rel="stylesheet" href="<?php echo base_url(); ?>public/libs/jsvectormap/css/jsvectormap.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/libs/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/libs/prismjs/themes/prism-coy.min.css">

    <script src="<?php echo base_url(); ?>public/js/jquery-3.7.1.js"></script>
</head>
<body>

    <!-- Start Switcher -->
        <!-- <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <nav class="border-bottom border-block-end-dashed">
                    <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                        <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                            type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                        <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                            type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                        tabindex="0">
                        <div class="">
                            <p class="switcher-style-head">Theme Color Mode:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-light-theme">
                                            Light
                                        </label>
                                        <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                            checked>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-dark-theme">
                                            Dark
                                        </label>
                                        <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="switcher-style-head">Directions:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-ltr">
                                            LTR
                                        </label>
                                        <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-rtl">
                                            RTL
                                        </label>
                                        <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="switcher-style-head">Navigation Styles:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-vertical">
                                            Vertical
                                        </label>
                                        <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                            checked>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-horizontal">
                                            Horizontal
                                        </label>
                                        <input class="form-check-input" type="radio" name="navigation-style"
                                            id="switcher-horizontal">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navigation-menu-styles">
                            <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                            <div class="row switcher-style gx-0 pb-2 gy-2">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-menu-click">
                                            Menu Click
                                        </label>
                                        <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                            id="switcher-menu-click">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-menu-hover">
                                            Menu Hover
                                        </label>
                                        <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                            id="switcher-menu-hover">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-icon-click">
                                            Icon Click
                                        </label>
                                        <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                            id="switcher-icon-click">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-icon-hover">
                                            Icon Hover
                                        </label>
                                        <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                            id="switcher-icon-hover">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidemenu-layout-styles">
                            <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                            <div class="row switcher-style gx-0 pb-2 gy-2">
                                <div class="col-sm-6">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-default-menu">
                                            Default Menu
                                        </label>
                                        <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                            id="switcher-default-menu" checked>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-closed-menu">
                                            Closed Menu
                                        </label>
                                        <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                            id="switcher-closed-menu">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-icontext-menu">
                                            Icon Text
                                        </label>
                                        <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                            id="switcher-icontext-menu">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-icon-overlay">
                                            Icon Overlay
                                        </label>
                                        <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                            id="switcher-icon-overlay">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-detached">
                                            Detached
                                        </label>
                                        <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                            id="switcher-detached">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-double-menu">
                                            Double Menu
                                        </label>
                                        <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                            id="switcher-double-menu">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="switcher-style-head">Page Styles:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-regular">
                                            Regular
                                        </label>
                                        <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                            checked>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-classic">
                                            Classic
                                        </label>
                                        <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-modern">
                                            Modern
                                        </label>
                                        <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="switcher-style-head">Layout Width Styles:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-full-width">
                                            Full Width
                                        </label>
                                        <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                            checked>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-boxed">
                                            Boxed
                                        </label>
                                        <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="switcher-style-head">Menu Positions:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-menu-fixed">
                                            Fixed
                                        </label>
                                        <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                            checked>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-menu-scroll">
                                            Scrollable
                                        </label>
                                        <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="switcher-style-head">Header Positions:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-header-fixed">
                                            Fixed
                                        </label>
                                        <input class="form-check-input" type="radio" name="header-positions"
                                            id="switcher-header-fixed" checked>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-header-scroll">
                                            Scrollable
                                        </label>
                                        <input class="form-check-input" type="radio" name="header-positions"
                                            id="switcher-header-scroll">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="switcher-style-head">Loader:</p>
                            <div class="row switcher-style gx-0">
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-loader-enable">
                                            Enable
                                        </label>
                                        <input class="form-check-input" type="radio" name="page-loader"
                                            id="switcher-loader-enable">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check switch-select">
                                        <label class="form-check-label" for="switcher-loader-disable">
                                            Disable
                                        </label>
                                        <input class="form-check-input" type="radio" name="page-loader"
                                            id="switcher-loader-disable" checked>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                        <div>
                            <div class="theme-colors">
                                <p class="switcher-style-head">Menu Colors:</p>
                                <div class="d-flex switcher-style pb-2">
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                            id="switcher-menu-light">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                            id="switcher-menu-dark" checked>
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                            id="switcher-menu-primary">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                            id="switcher-menu-gradient">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-transparent"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                            type="radio" name="menu-colors" id="switcher-menu-transparent">
                                    </div>
                                </div>
                                <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                            </div>
                            <div class="theme-colors">
                                <p class="switcher-style-head">Header Colors:</p>
                                <div class="d-flex switcher-style pb-2">
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                            id="switcher-header-light" checked>
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                            id="switcher-header-dark">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                            id="switcher-header-primary">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                            id="switcher-header-gradient">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                            id="switcher-header-transparent">
                                    </div>
                                </div>
                                <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                            </div>
                            <div class="theme-colors">
                                <p class="switcher-style-head">Theme Primary:</p>
                                <div class="d-flex flex-wrap align-items-center switcher-style">
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-primary-1" type="radio"
                                            name="theme-primary" id="switcher-primary">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-primary-2" type="radio"
                                            name="theme-primary" id="switcher-primary1">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                            id="switcher-primary2">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                            id="switcher-primary3">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                            id="switcher-primary4">
                                    </div>
                                    <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                        <div class="theme-container-primary"></div>
                                        <div class="pickr-container-primary"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-colors">
                                <p class="switcher-style-head">Theme Background:</p>
                                <div class="d-flex flex-wrap align-items-center switcher-style">
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-bg-1" type="radio"
                                            name="theme-background" id="switcher-background">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-bg-2" type="radio"
                                            name="theme-background" id="switcher-background1">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                            id="switcher-background2">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-bg-4" type="radio"
                                            name="theme-background" id="switcher-background3">
                                    </div>
                                    <div class="form-check switch-select me-3">
                                        <input class="form-check-input color-input color-bg-5" type="radio"
                                            name="theme-background" id="switcher-background4">
                                    </div>
                                    <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                        <div class="theme-container-background"></div>
                                        <div class="pickr-container-background"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-image mb-3">
                                <p class="switcher-style-head">Menu With Background Image:</p>
                                <div class="d-flex flex-wrap align-items-center switcher-style">
                                    <div class="form-check switch-select m-2">
                                        <input class="form-check-input bgimage-input bg-img1" type="radio"
                                            name="theme-background" id="switcher-bg-img">
                                    </div>
                                    <div class="form-check switch-select m-2">
                                        <input class="form-check-input bgimage-input bg-img2" type="radio"
                                            name="theme-background" id="switcher-bg-img1">
                                    </div>
                                    <div class="form-check switch-select m-2">
                                        <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                                            id="switcher-bg-img2">
                                    </div>
                                    <div class="form-check switch-select m-2">
                                        <input class="form-check-input bgimage-input bg-img4" type="radio"
                                            name="theme-background" id="switcher-bg-img3">
                                    </div>
                                    <div class="form-check switch-select m-2">
                                        <input class="form-check-input bgimage-input bg-img5" type="radio"
                                            name="theme-background" id="switcher-bg-img4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid canvas-footer"> 
                        <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1">Reset</a> 
                    </div>
                </div>
            </div>
        </div> -->
    <!-- End Switcher -->


    <!-- Loader -->
        <!-- <div id="loader" >
            <img src="<?php echo base_url(); ?>public/images/media/loader.svg" alt="">
        </div> -->
    <!-- Loader -->

    <div class="page">
         <!-- app-header -->
         <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="#" class="header-logo">
                                <img src="<?php echo base_url(); ?>public/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                <img src="<?php echo base_url(); ?>public/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                <img src="<?php echo base_url(); ?>public/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                                <img src="<?php echo base_url(); ?>public/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                                <img src="<?php echo base_url(); ?>public/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                                <img src="<?php echo base_url(); ?>public/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element header-search">
                        <!-- Start::header-link -->
                        <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="bx bx-search-alt-2 header-link-icon"></i>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->


                    <!-- Start::header-element -->
                    <div class="header-element header-fullscreen">
                        <!-- Start::header-link -->
                        <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                            <i class="bx bx-fullscreen full-screen-open header-link-icon"></i>
                            <i class="bx bx-exit-fullscreen full-screen-close header-link-icon d-none"></i>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="me-sm-2 me-0">
                                    <img src="<?php echo base_url(); ?>public/images/faces/user.png" alt="img" width="32" height="32" class="rounded-circle">
                                </div>
                                <div class="d-sm-block d-none">
                                    <p class="fw-semibold mb-0 lh-1">Edwin Orantes</p>
                                    <span class="op-7 fw-normal d-block fs-11">Desarrollador Web</span>
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                            <li><a class="dropdown-item d-flex" href="sign-in-cover.html"><i class="ti ti-logout fs-18 me-2 op-7"></i> Salir </a></li>
                        </ul>
                    </div>  
                    <!-- End::header-element -->
                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="#" class="header-logo">
                    <img src="<?php echo base_url(); ?>public/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="<?php echo base_url(); ?>public/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                    <img src="<?php echo base_url(); ?>public/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                    <img src="<?php echo base_url(); ?>public/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                    <img src="<?php echo base_url(); ?>public/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                    <img src="<?php echo base_url(); ?>public/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="bx bx-user side-menu__icon"></i>
                                <span class="side-menu__label">Pacientes</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide">
                                    <a href="<?php echo base_url(); ?>Paciente/" class="side-menu__item">Agregar</a>
                                    <a href="<?php echo base_url(); ?>Paciente/buscar_paciente" class="side-menu__item">Buscar paciente</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->