<!DOCTYPE html>
<html lang="en" style="direction: ltr;">
<head>

    <meta charset="utf-8">
    <title>SILVERFOX - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin &amp; Dashboard Template" name="description">
    <meta content="Themesdesign" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('asset/images/favicon.ico')}}">

    <!-- jvectormap -->
    <link href="{{ asset('asset/libs/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="{{ asset('asset/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('asset/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('asset/css/app-dark.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body data-sidebar="dark">


<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">

            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <i class="ri-search-line"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="mb-3 m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
                    <li class="menu-title">Меню</li>
                    <li>
                        <a href="{{ route('admin.main.edit') }}" class="waves-effect">
                            <span>Основные настройки</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.user.index') }}" class="waves-effect">
                            <span>Пользователи</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.store.index') }}" class=" waves-effect">
                            <span>Магазины</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.store.check') }}" class=" waves-effect">
                            <span>Магазины на проверки</span> @if($newStore == true)
                                <span class="badge bg-danger">New</span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.category.index') }}" class=" waves-effect">
                            <span>Категории товаров</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.product.index') }}" class=" waves-effect">
                            <span>Товары</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.product.check') }}" class=" waves-effect">
                            <span>Товары на проверке</span> @if($newProduct == true)
                                <span class="badge bg-danger">New</span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.balance.withdrawal.index') }}" class=" waves-effect">
                            <span>Заявки на вывод</span> @if($newW == true)
                                <span class="badge bg-danger">New</span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.balance.replenishment.index') }}" class="waves-effect">
                            <span>Заявки на пополнение</span> @if($newR == true)
                                <span class="badge bg-danger">New</span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.order.index') }}" class="waves-effect">
                            <span>Все активные заказы</span> @if($newOrders == true)
                                <span class="badge bg-danger">New</span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.order.completed') }}" class="waves-effect">
                            <span>Все выполненные заказы</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categoryPost.index') }}" class=" waves-effect">
                            <span>Категории новостей</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.news.index') }}" class="waves-effect">
                            <span>Новости</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.banner.index') }}" class="waves-effect">
                            <span>Баннеры на рассмотрение</span> @if($newBanner == true)
                                <span class="badge bg-danger">New</span>
                            @endif
                        </a>
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
    @yield('content')
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar="" class="h-100">
        <div class="rightbar-title d-flex align-items-center px-3 py-4">

            <h5 class="m-0 me-2">Settings</h5>

            <a href="#" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>

        <!-- Settings -->
        <hr class="mt-0">
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="{{ asset('asset/images/layouts/layout-1.png')}}" class="img-thumbnail" alt="layout-1">
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked="">
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('asset/images/layouts/layout-2.png')}}" class="img-thumbnail" alt="layout-2">
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch"
                       data-bsstyle="{{ asset('asset/css/bootstrap-dark.min.css')}}"
                       data-appstyle="{{ asset('asset/css/app-dark.min.css')}}">
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('asset/images/layouts/layout-3.png')}}" class="img-thumbnail" alt="layout-3">
            </div>
            <div class="form-check form-switch mb-5">
                <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch"
                       data-appstyle="{{ asset('asset/css/app-rtl.min.css')}}">
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>


        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- End Page-content -->

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Admin dashboard by <a href="/" target="_blank">SILVETFOX</a>
                </div>
            </div>
        </div>
    </div>
</footer>


</body>
</html>
