@extends('layouts.main')
@section('content')
    <html lang="en"><head>

        <meta charset="utf-8">
        <title>Inbox | Upzet - Admin &amp; Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin &amp; Dashboard Template" name="description">
        <meta content="Themesdesign" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box text-center">
                        <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="logo-sm-dark" height="22">
                                </span>
                            <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="logo-dark" height="24">
                                </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="logo-sm-light" height="22">
                                </span>
                            <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="logo-light" height="24">
                                </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="ri-search-line"></span>
                        </div>
                    </form>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="mb-3 m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-apps-2-line"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <div class="px-lg-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/github.png" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                            <span>Mail Chimp</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/slack.png" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="ri-fullscreen-line"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-notification-3-line"></i>
                            <span class="noti-dot"></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small"> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar="" style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="ri-shopping-cart-line"></i>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Your order is placed</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">James Lemire</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">It will seem like simplified English.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                        <i class="ri-checkbox-circle-line"></i>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Your item is shipped</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Salena Layfield</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <div class="d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-2.jpg" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1">Kevin</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My Wallet</a>
                            <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1">11</span><i class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="mdi mdi-cog"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar="" class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="index.html" class="waves-effect">
                                <i class="mdi mdi-home-variant-outline"></i><span class="badge rounded-pill bg-primary float-end">3</span>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="calendar.html" class=" waves-effect">
                                <i class="mdi mdi-calendar-outline"></i>
                                <span>Calendar</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-email-outline"></i>
                                <span>Email</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="email-inbox.html">Inbox</a></li>
                                <li><a href="email-read.html">Read Email</a></li>
                                <li><a href="email-compose.html">Email Compose</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">Layouts</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-gradient"></i>
                                <span>Vertical</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                                <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-page-layout-header"></i>
                                <span>Horizontal</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="layouts-horizontal.html">Default</a></li>
                                <li><a href="layouts-hori-topbar-dark.html">Topbar Dark</a></li>
                                <li><a href="layouts-hori-boxed-width.html">Boxed width</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">Pages</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-account-circle-outline"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="auth-login.html">Login</a></li>
                                <li><a href="auth-register.html">Register</a></li>
                                <li><a href="auth-recoverpw.html">Recover Password</a></li>
                                <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-format-page-break"></i>
                                <span>Utility</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-starter.html">Starter Page</a></li>
                                <li><a href="pages-maintenance.html">Maintenance</a></li>
                                <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                                <li><a href="pages-timeline.html">Timeline</a></li>
                                <li><a href="pages-faqs.html">FAQs</a></li>
                                <li><a href="pages-pricing.html">Pricing</a></li>
                                <li><a href="pages-404.html">Error 404</a></li>
                                <li><a href="pages-500.html">Error 500</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">Components</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-briefcase-variant-outline"></i>
                                <span>UI Elements</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-badge.html">Badge</a></li>
                                <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                                <li><a href="ui-images.html">Images</a></li>
                                <li><a href="ui-lightbox.html">Lightbox</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-offcanvas.html">Offcanvas</a></li>
                                <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                                <li><a href="ui-pagination.html">Pagination</a></li>
                                <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                <li><a href="ui-placeholders.html">Placeholders</a></li>
                                <li><a href="ui-sweet-alert.html">Sweetalert 2</a></li>
                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-toasts.html">Toasts</a></li>
                                <li><a href="ui-video.html">Video</a></li>
                                <li><a href="ui-popover-tooltips.html">Popovers &amp; Tooltips</a></li>
                                <li><a href="ui-rating.html">Rating</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="ri-eraser-fill"></i>
                                <span class="badge rounded-pill bg-danger float-end">8</span>
                                <span>Forms</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-advanced.html">Form Advanced Plugins</a></li>
                                <li><a href="form-editors.html">Form Editors</a></li>
                                <li><a href="form-uploads.html">Form File Upload</a></li>
                                <li><a href="form-xeditable.html">Form X-editable</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-mask.html">Form Mask</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-table-2"></i>
                                <span>Tables</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Tables</a></li>
                                <li><a href="tables-responsive.html">Responsive Table</a></li>
                                <li><a href="tables-editable.html">Editable Table</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-bar-chart-line"></i>
                                <span>Charts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="charts-apex.html">Apex Charts</a></li>
                                <li><a href="charts-chartjs.html">Chartjs Charts</a></li>
                                <li><a href="charts-flot.html">Flot Charts</a></li>
                                <li><a href="charts-knob.html">Jquery Knob Charts</a></li>
                                <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-brush-line"></i>
                                <span>Icons</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="icons-remix.html">Remix Icons</a></li>
                                <li><a href="icons-materialdesign.html">Material Design</a></li>
                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                <li><a href="icons-fontawesome.html">Font Awesome </a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-map-pin-line"></i>
                                <span>Maps</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="maps-google.html">Google Maps</a></li>
                                <li><a href="maps-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="ri-share-line"></i>
                                <span>Multi Level</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 1.1</a></li>
                                <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="javascript: void(0);">Level 2.1</a></li>
                                        <li><a href="javascript: void(0);">Level 2.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Inbox</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                                        <li class="breadcrumb-item active">Inbox</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">


                        <div class="col-xl-12">
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="btn-toolbar" role="toolbar">
                                    <div class="btn-group me-2 mb-3">
                                        <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-inbox"></i></button>
                                        <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-exclamation-circle"></i></button>
                                        <button type="button" class="btn btn-primary waves-light waves-effect"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                    <div class="btn-group me-2 mb-3">
                                        <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Updates</a>
                                            <a class="dropdown-item" href="#">Social</a>
                                            <a class="dropdown-item" href="#">Team Manage</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="btn-toolbar justify-content-md-end" role="toolbar">
                                    <div class="btn-group ms-md-2 mb-3">
                                        <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Updates</a>
                                            <a class="dropdown-item" href="#">Social</a>
                                            <a class="dropdown-item" href="#">Team Manage</a>
                                        </div>
                                    </div>

                                    <div class="btn-group ms-2 mb-3">
                                        <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            More <i class="mdi mdi-dots-vertical ms-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Mark as Unread</a>
                                            <a class="dropdown-item" href="#">Mark as Important</a>
                                            <a class="dropdown-item" href="#">Add to Tasks</a>
                                            <a class="dropdown-item" href="#">Add Star</a>
                                            <a class="dropdown-item" href="#">Mute</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-0">
                                <div class="card-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-justified nav-tabs-custom" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#custom-primary" role="tab">
                                                <i class="mdi mdi-inbox me-2 align-middle font-size-18"></i> <span class="d-none d-md-inline-block">Primary</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#custom-social" role="tab">
                                                <i class="mdi mdi-account-group-outline me-2 align-middle font-size-18"></i> <span class="d-none d-md-inline-block"> Social</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#custom-promotion" role="tab">
                                                <i class="mdi mdi-tag-multiple me-2 align-middle font-size-18"></i> <span class="d-none d-md-inline-block">Promotion</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active" id="custom-primary" role="tabpanel">
                                            <ul class="message-list mb-0">
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk1">
                                                            <label for="chk1" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Peter, me (3)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Hello – <span class="teaser">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                        </a>
                                                        <div class="date">Mar 6</div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk2">
                                                            <label for="chk2" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">me, Susanna (7)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-warning badge me-2">Freelance</span>Since you asked... and i'm
                                                            inconceivably bored at the train station –
                                                            <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                                        </a>
                                                        <div class="date">Mar. 6</div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk3">
                                                            <label for="chk3" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Web Support Dennis</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Re: New mail settings –
                                                            <span class="teaser">Will you answer him asap?</span>
                                                        </a>
                                                        <div class="date">Mar 7</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk4">
                                                            <label for="chk4" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">me, Peter (2)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-info badge me-2">Support</span>Off on Thursday -
                                                            <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4  4 mar 2014 at 5:55 pm</span>
                                                        </a>
                                                        <div class="date">Mar 4</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk5">
                                                            <label for="chk5" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Medium</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-primary badge me-2">Social</span>This Week's Top Stories –
                                                            <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America’s Ego</span>
                                                        </a>
                                                        <div class="date">Feb 28</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk6">
                                                            <label for="chk6" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Death to Stock</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Montly High-Res Photos –
                                                            <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                                        </a>
                                                        <div class="date">Feb 28</div>
                                                    </div>
                                                </li>

                                                <li class="unread">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk7">
                                                            <label for="chk7" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Randy, me (5)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-success badge me-2">Family</span>Last pic over my village –
                                                            <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                        </a>
                                                        <div class="date">5:01 am</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk8">
                                                            <label for="chk8" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Andrew Zimmer</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Mochila Beta: Subscription Confirmed
                                                            – <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                        </a>
                                                        <div class="date">Mar 8</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk9">
                                                            <label for="chk9" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Infinity HR</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Sveriges Hetaste sommarjobb –
                                                            <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                        </a>
                                                        <div class="date">Mar 8</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk10">
                                                            <label for="chk10" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Revibe</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-danger badge me-2">Friends</span>Weekend on Revibe –
                                                            <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                                        </a>
                                                        <div class="date">Feb 27</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk11">
                                                            <label for="chk11" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Erik, me (5)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Regarding our meeting –
                                                            <span class="teaser">That's great, see you on Thursday!</span>
                                                        </a>
                                                        <div class="date">Feb 24</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk12">
                                                            <label for="chk12" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">KanbanFlow</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-primary badge me-2">Social</span>Task assigned: Clone ARP's website
                                                            – <span class="teaser">You have been assigned a task by Alex@Work on the board Web.</span>
                                                        </a>
                                                        <div class="date">Feb 24</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk13">
                                                            <label for="chk13" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Tobias Berggren</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Let's go fishing! –
                                                            <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                                        </a>
                                                        <div class="date">Feb 23</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk14">
                                                            <label for="chk14" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Charukaw, me (7)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Hey man – <span class="teaser">Nah man sorry i don't. Should i get it?</span>
                                                        </a>
                                                        <div class="date">Feb 23</div>
                                                    </div>
                                                </li>
                                                <li class="unread">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk15">
                                                            <label for="chk15" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">me, Peter (5)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-info badge me-2">Support</span>Home again! – <span class="teaser">That's just perfect! See you tomorrow.</span>
                                                        </a>
                                                        <div class="date">Feb 21</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk16">
                                                            <label for="chk16" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Stack Exchange</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">1 new items in your Stackexchange inbox
                                                            – <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                                        </a>
                                                        <div class="date">Feb 21</div>
                                                    </div>
                                                </li>


                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="custom-social" role="tabpanel">
                                            <ul class="message-list mb-0">
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk17">
                                                            <label for="chk17" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Andrew Zimmer</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Mochila Beta: Subscription Confirmed
                                                            – <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                        </a>
                                                        <div class="date">Mar 8</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk18">
                                                            <label for="chk18" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Peter, me (3)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Hello – <span class="teaser">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                        </a>
                                                        <div class="date">Mar 6</div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk19">
                                                            <label for="chk19" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Web Support Dennis</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Re: New mail settings –
                                                            <span class="teaser">Will you answer him asap?</span>
                                                        </a>
                                                        <div class="date">Mar 7</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk20">
                                                            <label for="chk20" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">me, Peter (2)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-info badge me-2">Support</span>Off on Thursday -
                                                            <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4  4 mar 2014 at 5:55 pm</span>
                                                        </a>
                                                        <div class="date">Mar 4</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk21">
                                                            <label for="chk21" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Medium</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-primary badge me-2">Social</span>This Week's Top Stories –
                                                            <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America’s Ego</span>
                                                        </a>
                                                        <div class="date">Feb 28</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk22">
                                                            <label for="chk22" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">me, Susanna (7)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-warning badge me-2">Freelance</span>Since you asked... and i'm
                                                            inconceivably bored at the train station –
                                                            <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                                        </a>
                                                        <div class="date">Mar. 6</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk23">
                                                            <label for="chk23" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Infinity HR</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Sveriges Hetaste sommarjobb –
                                                            <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                        </a>
                                                        <div class="date">Mar 8</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk24">
                                                            <label for="chk24" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Death to Stock</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Montly High-Res Photos –
                                                            <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                                        </a>
                                                        <div class="date">Feb 28</div>
                                                    </div>
                                                </li>

                                                <li class="unread">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk25">
                                                            <label for="chk25" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Randy, me (5)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-success badge me-2">Family</span>Last pic over my village –
                                                            <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                        </a>
                                                        <div class="date">5:01 am</div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk26">
                                                            <label for="chk26" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Erik, me (5)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Regarding our meeting –
                                                            <span class="teaser">That's great, see you on Thursday!</span>
                                                        </a>
                                                        <div class="date">Feb 24</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk27">
                                                            <label for="chk27" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">KanbanFlow</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-primary badge me-2">Social</span>Task assigned: Clone ARP's website
                                                            – <span class="teaser">You have been assigned a task by Alex@Work on the board Web.</span>
                                                        </a>
                                                        <div class="date">Feb 24</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk28">
                                                            <label for="chk28" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Tobias Berggren</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Let's go fishing! –
                                                            <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                                        </a>
                                                        <div class="date">Feb 23</div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk29">
                                                            <label for="chk29" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Charukaw, me (7)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Hey man – <span class="teaser">Nah man sorry i don't. Should i get it?</span>
                                                        </a>
                                                        <div class="date">Feb 23</div>
                                                    </div>
                                                </li>
                                                <li class="unread">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk30">
                                                            <label for="chk30" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">me, Peter (5)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-info badge me-2">Support</span>Home again! – <span class="teaser">That's just perfect! See you tomorrow.</span>
                                                        </a>
                                                        <div class="date">Feb 21</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk31">
                                                            <label for="chk31" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Revibe</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-danger badge me-2">Friends</span>Weekend on Revibe –
                                                            <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                                        </a>
                                                        <div class="date">Feb 27</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk32">
                                                            <label for="chk32" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Stack Exchange</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">1 new items in your Stackexchange inbox
                                                            – <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                                        </a>
                                                        <div class="date">Feb 21</div>
                                                    </div>
                                                </li>


                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="custom-promotion" role="tabpanel">
                                            <ul class="message-list mb-0">
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk33">
                                                            <label for="chk33" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Peter, me (3)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Hello – <span class="teaser">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                        </a>
                                                        <div class="date">Mar 6</div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk34">
                                                            <label for="chk34" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">me, Susanna (7)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-warning badge me-2">Freelance</span>Since you asked... and i'm
                                                            inconceivably bored at the train station –
                                                            <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                                        </a>
                                                        <div class="date">Mar. 6</div>
                                                    </div>
                                                </li>


                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk35">
                                                            <label for="chk35" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Medium</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-primary badge me-2">Social</span>This Week's Top Stories –
                                                            <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America’s Ego</span>
                                                        </a>
                                                        <div class="date">Feb 28</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk36">
                                                            <label for="chk36" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">me, Peter (2)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-info badge me-2">Support</span>Off on Thursday -
                                                            <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4  4 mar 2014 at 5:55 pm</span>
                                                        </a>
                                                        <div class="date">Mar 4</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk37">
                                                            <label for="chk37" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Death to Stock</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Montly High-Res Photos –
                                                            <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                                        </a>
                                                        <div class="date">Feb 28</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk38">
                                                            <label for="chk38" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Web Support Dennis</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Re: New mail settings –
                                                            <span class="teaser">Will you answer him asap?</span>
                                                        </a>
                                                        <div class="date">Mar 7</div>
                                                    </div>
                                                </li>
                                                <li class="unread">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk39">
                                                            <label for="chk39" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Randy, me (5)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-success badge me-2">Family</span>Last pic over my village –
                                                            <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                        </a>
                                                        <div class="date">5:01 am</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk40">
                                                            <label for="chk40" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Andrew Zimmer</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Mochila Beta: Subscription Confirmed
                                                            – <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                        </a>
                                                        <div class="date">Mar 8</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk41">
                                                            <label for="chk41" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Infinity HR</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Sveriges Hetaste sommarjobb –
                                                            <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                                        </a>
                                                        <div class="date">Mar 8</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk42">
                                                            <label for="chk42" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Revibe</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-danger badge me-2">Friends</span>Weekend on Revibe –
                                                            <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                                        </a>
                                                        <div class="date">Feb 27</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk43">
                                                            <label for="chk43" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Erik, me (5)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Regarding our meeting –
                                                            <span class="teaser">That's great, see you on Thursday!</span>
                                                        </a>
                                                        <div class="date">Feb 24</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk44">
                                                            <label for="chk44" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">KanbanFlow</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-primary badge me-2">Social</span>Task assigned: Clone ARP's website
                                                            – <span class="teaser">You have been assigned a task by Alex@Work on the board Web.</span>
                                                        </a>
                                                        <div class="date">Feb 24</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk45">
                                                            <label for="chk45" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Tobias Berggren</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Let's go fishing! –
                                                            <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                                        </a>
                                                        <div class="date">Feb 23</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk46">
                                                            <label for="chk46" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Charukaw, me (7)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">Hey man – <span class="teaser">Nah man sorry i don't. Should i get it?</span>
                                                        </a>
                                                        <div class="date">Feb 23</div>
                                                    </div>
                                                </li>
                                                <li class="unread">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk47">
                                                            <label for="chk47" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">me, Peter (5)</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject"><span class="bg-info badge me-2">Support</span>Home again! – <span class="teaser">That's just perfect! See you tomorrow.</span>
                                                        </a>
                                                        <div class="date">Feb 21</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col-mail col-mail-1">
                                                        <div class="checkbox-wrapper-mail">
                                                            <input type="checkbox" id="chk48">
                                                            <label for="chk48" class="toggle"></label>
                                                        </div>
                                                        <a href="#" class="title">Stack Exchange</a>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <a href="#" class="subject">1 new items in your Stackexchange inbox
                                                            – <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                                        </a>
                                                        <div class="date">Feb 21</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row justify-content-end">
                        <div class="col-xl-9">
                            <div class="row my-4">
                                <div class="col-7">
                                    Showing 1 - 20 of 1,524
                                </div>
                                <div class="col-5">
                                    <div class="btn-group float-end">
                                        <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Upzet.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://1.envato.market/themesdesign" target="_blank">Themesdesign</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar="" class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0">
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.png" class="img-thumbnail" alt="layout-1">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked="">
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.png" class="img-thumbnail" alt="layout-2">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsstyle="assets/css/bootstrap-dark.min.css" data-appstyle="assets/css/app-dark.min.css">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-3.png" class="img-thumbnail" alt="layout-3">
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appstyle="assets/css/app-rtl.min.css">
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>


            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>



    </body></html>
@endsection
