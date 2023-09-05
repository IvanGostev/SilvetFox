<!DOCTYPE html>
<html lang="en">
<head>
    <title>Goru – Ecommerce HTML5 Responsive Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">


    {{--    Products--}}


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('asset/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('asset/images/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/images/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('asset/images/icons/site.webmanifest')}}">
    <link rel="mask-icon" href="{{ asset('asset/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="{{ asset('asset/images/icons/favicon.ico')}}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#3160da">
    <meta name="msapplication-config" content="{{ asset('asset/images/icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/plugins/nouislider/nouislider.css')}}">


    {{--    Products--}}










    <!-- Include All CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/themewar-icons.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/settings.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/preset.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/ignore_in_wp.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}"/>


</head>
<body>
<!-- Preloader Start -->

<!-- Preloader End -->

<!-- Header Start -->
<header class="header-01 fix-header sticky animated fadeIn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/images/logo.png" alt="Goru"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <nav class="mainmenu mobile-menu">
                    <div class="mobile-btn">
                        <a href=""><span>Menu</span><i class="twi-bars"></i></a>
                    </div>
                    <ul class="d-flex justify-content-between">
                        <li><a href="contact.html">Products</a></li>
                        <li><a href="contact.html">Stores</a></li>
                        <li><a href="contact.html">News</a></li>
                        <li><a href="contact.html">ORDERS</a></li>
                        <li><a href="contact.html">RULES</a></li>
                        @auth()
                            <a class="select-currency" href="#">Your bill&nbsp;{{auth()->user()->balance}}&nbsp;XMR</a>
                            <li class="menu-item-has-children">
                                <a class="user-login" href="#"><i class="twi-user-circle"></i><span>Account</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-fullwidth.html">Orders</a></li>
                                    <li><a href="shop-left-sidebar.html">Order history</a></li>
                                    <li><a href="shop-right-sidebar.html">Balance history</a></li>
                                    <li><a href="single-product.html">My store</a></li>
                                    <li><a href="cart.html">Communication</a></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button style="display: inline-block;  font-weight: 600; font-size: 14px ; padding: 9px 20px; border: none; color: black; background-color: transparent;" type="submit">Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
@yield('content')



</body>
</html>
