<!DOCTYPE html>
<html lang="en">
<head>
    <title>SilvetFox</title>
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
                    <a href="/">
                        <img src="{{ asset('logo.jpg') }}" alt="SilvetFox"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <nav class="mainmenu mobile-menu">
                    <div class="mobile-btn">
                    </div>
                    <ul class="d-flex justify-content-between">
                        <li><a href="{{ route('market.product.index') }}">Products</a></li>
                        <li><a href="{{ route('market.stores.index') }}">Stores</a></li>
                        <li><a href="{{ route('news.main.index') }}">News</a></li>
                        <li><a href="{{ route('order.main.index') }}">ORDERS</a></li>
                        <li><a href="{{ route('main.escrow') }}">escrow</a></li>
                        <li><a href="{{ route('main.rules') }}">RULES</a></li>
                        @auth()
                            <a class="select-currency" href="{{ route('profile.balance.index') }}">Your bill&nbsp;{{auth()->user()->balance}}&nbsp;XMR</a>
                            <li class="menu-item-has-children">
                                <a class="user-login" href="{{ route('profile.main.show', auth()->user()->id) }}"><i class="twi-user-circle"></i><span>Account</span></a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('profile.main.edit') }}">Edit profile</a></li>
                                    <li><a href="{{ route('order.main.index') }}">Orders</a></li>
                                    <li><a href="{{ route('profile.balance.index') }}">Balance history</a></li>
                                    <li><a href="{{ route('store.main.start') }}">My store</a></li>
                                    @if(auth()->user()->role == 1) <li><a href="{{ route('store.order.index') }}">Orders from my store</a></li> @endif
                                    <li><a href="{{ route('profile.chat.index') }}">Chats</a></li>
                                    @if(auth()->user()->role >= 2) <li><a href="{{ route('admin.user.index') }}">Admin panel</a></li> @endif
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button
                                                style="display: inline-block;  font-weight: 600; font-size: 14px ; padding: 9px 20px; border: none; color: black; background-color: transparent;"
                                                type="submit">Logout
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
