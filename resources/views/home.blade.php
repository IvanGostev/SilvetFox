{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <title>Goru – Ecommerce HTML5 Responsive Template</title>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width">--}}


{{--    <!-- Include All CSS -->--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/themewar-icons.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/settings.css')}}">--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css')}}">--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/preset.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/ignore_in_wp.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/theme.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}"/>--}}
{{--    <!-- End Include All CSS -->--}}

{{--    <!-- Favicon Icon -->--}}
{{--    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png')}}">--}}
{{--    <!-- Favicon Icon -->--}}
{{--</head>--}}
{{--<body>--}}
{{--<!-- Preloader Start -->--}}

{{--<!-- Preloader End -->--}}

{{--<!-- Header Start -->--}}
{{--<header class="header-01 fix-header">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-2 col-md-2">--}}
{{--                <div class="logo">--}}
{{--                    <a href="index.html">--}}
{{--                        <img src="{{ asset('assets/images/logo.png')}}" alt="Goru"/>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-10 col-md-10">--}}
{{--                <nav class="mainmenu mobile-menu">--}}
{{--                    <div class="mobile-btn">--}}
{{--                        <a href="javascript: void(0);"><span>Menu</span><i class="twi-bars"></i></a>--}}
{{--                    </div>--}}
{{--                    <ul class="d-flex justify-content-between">--}}
{{--                        <li class="active menu-item-has-children">--}}
{{--                            <a href="#">Home</a>--}}
{{--                            <ul class="sub-menu">--}}
{{--                                <li><a href="index.html">Home One</a></li>--}}
{{--                                <li><a href="index2.html">Home Two</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="menu-item-has-children">--}}
{{--                            <a href="#">Shop</a>--}}
{{--                            <ul class="sub-menu">--}}
{{--                                <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>--}}
{{--                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>--}}
{{--                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>--}}
{{--                                <li><a href="single-product.html">Shop Details</a></li>--}}
{{--                                <li><a href="cart.html">Cart Page</a></li>--}}
{{--                                <li><a href="checkout.html">Checkout Page</a></li>--}}
{{--                                <li><a href="wishlist.html">Wishlist Page</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="menu-item-has-children">--}}
{{--                            <a href="#">Pages</a>--}}
{{--                            <ul class="sub-menu">--}}
{{--                                <li><a href="about.html">About Page</a></li>--}}
{{--                                <li><a href="newsletter.html">Newsletter Page</a></li>--}}
{{--                                <li><a href="login-register.html">Login Register Page</a></li>--}}
{{--                                <li><a href="404.html">404 Page</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="menu-item-has-children">--}}
{{--                            <a href="#">News</a>--}}
{{--                            <ul class="sub-menu">--}}
{{--                                <li><a href="blog-right-sidebar.html">News Right Sidebar</a></li>--}}
{{--                                <li><a href="blog-left-sidebar.html">News Left Sidebar</a></li>--}}
{{--                                <li><a href="blog-fullwidth.html">News Full Width</a></li>--}}
{{--                                <li><a href="blog-details.html">News Details</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li><a href="contact.html">Contact</a></li>--}}
{{--                        <li class="menu-item-has-children">--}}
{{--                            <a href="#"><i class="twi-user-circle"></i> &nbsp;<span>Account</span></a>--}}
{{--                            <ul class="sub-menu">--}}
{{--                                <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>--}}
{{--                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>--}}
{{--                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>--}}
{{--                                <li><a href="single-product.html">Shop Details</a></li>--}}
{{--                                <li><a href="cart.html">Cart Page</a></li>--}}
{{--                                <li><a href="checkout.html">Checkout Page</a></li>--}}
{{--                                <li><a href="wishlist.html">Wishlist Page</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--</header>--}}
<!-- Header End -->
@extends('layouts.main')
@section('content')

<!-- Categories Section Start -->
<section class="coupone-discount-sec" id="coupone">

    <!-- Section Heading -->
    <div class="sec-heading rotate-tb">Coupon <span>Deals</span></div>
    <!-- Section Heading -->

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5">
                <div class="dis-product-detail">
                    <h4>Weekly Deal</h4>
                    <div class="product-price clearfix">
                                <span class="price">
                                    <span><span class="woocommerce-Price-currencySymbol">$</span>179.00</span>
                                </span>
                    </div>
                    <div id="countdown-coupone" class="clearfix" data-day="01" data-month="10" data-year="2020"></div>
                    <a class="goru-btn" href="single-product.html">Shop Now</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="dis-pro-thumb">
                    <img src="{{ asset('assets/images/home/1.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- shape -->
    <div class="couple-shape"><img src="{{ asset('assets/images/home/shape3.png')}}" alt=""></div>
</section>
<!-- Categories Section End -->

<!-- Service Section Start -->
<section class="service-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <img src="{{ asset('assets/images/home/truck.png')}}" alt="">
                    <h4>100% Free Shipping</h4>
                    <p>We ship all our products for free as long as you buying within the USA.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <img src="{{ asset('assets/images/home/headphone.png')}}" alt="">
                    <h4>24/7 Support</h4>
                    <p>Our support team is extremely active, you will get response within 2 minutes.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <img src="{{ asset('assets/images/home/undo.png')}}" alt="">
                    <h4>30 Day Return</h4>
                    <p>Our 30 day return program is open from customers, just fill up a simple form.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Section End -->

<!-- Trending Section Start -->
<section class="trending-section" style="background-image: url({{ asset('assets/images/home/shape2.png')}});">

    <!-- Section Heading -->
    <div class="sec-heading rotate-tb">Trending <span> Products</span></div>
    <!-- Section Heading -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="sec-title">Trending Products</h2>
                <p class="sec-desc">
                    Sed ut perspiciatis unde omnis iste natus er<br> sit voluptatem accusantium dolore.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="trending-slider owl-carousel">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="single-trending-product">
                                <div class="trend-thumb">
                                    <img src="{{ asset('assets/images/home/t1.jpg')}}" alt="">
                                </div>
                                <div class="tr-pro-detail">
                                    <h3>
                                        <a href="single-product.html">TV Remove Controller</a>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>112.00</span>
                                                    </span>
                                        </div>
                                    </h3>
                                    <p>
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur magni dolores eos qui ratione voluptatem sequid.
                                    </p>
                                    <a class="tr-atc" href="#">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="single-trending-product">
                                <div class="trend-thumb">
                                    <img src="{{ asset('assets/images/home/t2.jpg')}}" alt="">
                                </div>
                                <div class="tr-pro-detail">
                                    <h3>
                                        <a href="single-product.html">Camera Lenses</a>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>72.00</span>
                                                    </span>
                                        </div>
                                    </h3>
                                    <p>
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia conse.
                                    </p>
                                    <a class="tr-atc" href="#">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="single-trending-product">
                                <div class="trend-thumb">
                                    <img src="{{ asset('assets/images/home/t2.jpg')}}" alt="">
                                </div>
                                <div class="tr-pro-detail">
                                    <h3>
                                        <a href="single-product.html">Camera Lenses</a>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>72.00</span>
                                                    </span>
                                        </div>
                                    </h3>
                                    <p>
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia conse.
                                    </p>
                                    <a class="tr-atc" href="#">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="single-trending-product">
                                <div class="trend-thumb">
                                    <img src="{{ asset('assets/images/home/t1.jpg')}}" alt="">
                                </div>
                                <div class="tr-pro-detail">
                                    <h3>
                                        <a href="single-product.html">TV Remove Controller</a>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>112.00</span>
                                                    </span>
                                        </div>
                                    </h3>
                                    <p>
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur magni dolores eos qui ratione voluptatem sequid.
                                    </p>
                                    <a class="tr-atc" href="#">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trending Section End -->

<!-- Popular Section Start -->
<section class="popular-section">

    <!-- Shape Round -->
    <div class="shape-round">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Shape Round -->

    <!-- Section Heading -->
    <div class="sec-heading rotate-rl">Most <span>Popular</span></div>
    <!-- Section Heading -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="sec-title">Most Popular</h2>
                <ul class="product-tab-title nav nav-tabs">
                    <li><a class="active" href="#all" data-toggle="tab">All</a></li>
                    <li><a href="#smartphones" data-toggle="tab">Smartphones</a></li>
                    <li><a href="#camera" data-toggle="tab">Camera</a></li>
                    <li><a href="#gadgets" data-toggle="tab">Gadgets</a></li>
                    <li><a href="#others" data-toggle="tab">Others</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show in active" id="all" role="tabpanel">
                        <div class="popular-tab-slider owl-carousel">
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p1.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p4.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p2.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p5.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p6.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p3.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p6.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p3.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p1.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p4.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p2.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p5.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="smartphones" role="tabpanel">
                        <div class="popular-tab-slider owl-carousel">
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p6.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p5.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p4.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p3.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p2.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p1.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p6.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p3.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p1.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p4.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p2.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p5.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="camera" role="tabpanel">
                        <div class="popular-tab-slider owl-carousel">
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p2.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p3.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p4.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p1.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p5.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p6.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p6.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p3.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p1.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p4.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p2.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p5.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="gadgets" role="tabpanel">
                        <div class="popular-tab-slider owl-carousel">
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p5.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p6.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p1.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p2.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p3.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p4.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p6.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p3.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p1.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p4.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p2.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p5.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="others" role="tabpanel">
                        <div class="popular-tab-slider owl-carousel">
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p4.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p3.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p1.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p2.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p5.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p6.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p6.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="out-of-stock">Out of Stock</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>32.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>28.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p3.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Controller</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p1.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Gaming Headset</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p4.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="sale">Sale</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Camera Lens</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <del><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>52.00</span></del>
                                                        <ins><span><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>48.00</span></ins>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pp-single-slider">
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p2.jpg')}}" alt="">
                                        <div class="pro-badge">
                                            <p class="hot">Hot</p>
                                        </div>
                                    </div>
                                    <div class="sp-details">
                                        <h4>Novo Headset A30</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-popular-product">
                                    <div class="sp-thumb">
                                        <img src="{{ asset('assets/images/home/p5.jpg')}}" alt="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>TV Monitor Screen</h4>
                                        <div class="product-price clearfix">
                                                    <span class="price">
                                                        <span><span class="woocommerce-Price-currencySymbol">$</span>222.00</span>
                                                    </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart" href="#"><i
                                                    class="twi-cart-plus"></i><span>Add to cart</span></a>
                                            <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Popular Section End -->

<!-- Coupon Discount Start -->
<section class="categorie-section">

    <!-- Section Heading -->
    <div class="sec-heading rotate-rl">Product <span> Categories</span></div>
    <!-- Section Heading -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="sec-title">Product Categories</h2>
                <p class="sec-desc">
                    Sed ut perspiciatis unde omnis iste natus<br> er sit voluptatem accusantium dolore.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-4">
                <a href="#" class="single-cate">
                    <i class="flaticon-smart-watch"></i>
                </a>
            </div>
            <div class="col-lg-2 col-md-4">
                <a href="#" class="single-cate">
                    <i class="flaticon-drone"></i>
                </a>
            </div>
            <div class="col-lg-2 col-md-4">
                <a href="#" class="single-cate">
                    <i class="flaticon-console"></i>
                </a>
            </div>
            <div class="col-lg-2 col-md-4">
                <a href="#" class="single-cate">
                    <i class="flaticon-smartphone"></i>
                </a>
            </div>
            <div class="col-lg-2 col-md-4">
                <a href="#" class="single-cate">
                    <i class="flaticon-television"></i>
                </a>
            </div>
            <div class="col-lg-2 col-md-4">
                <a href="#" class="single-cate">
                    <i class="flaticon-headphones"></i>
                </a>
            </div>
            <div class="col-lg-2 col-md-4">
                <a href="#" class="single-cate">
                    <i class="flaticon-photo-camera"></i>
                </a>
            </div>
            <div class="col-lg-2 col-md-4">
                <a href="#" class="single-cate">
                    <i class="flaticon-wifi-router"></i>
                </a>
            </div>
            <div class="col-lg-2 col-md-4">
                <a href="#" class="single-cate">
                    <i class="flaticon-pc"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- shpage -->
    <div class="cate-shage"><img src="{{ asset('assets/images/home/shape1.png')}}" alt=""></div>
</section>

<!-- Coupon Discount End -->

<!-- News Section Start -->
<section class="news-section">

    <!-- Shape Round -->
    <div class="shape-round">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Shape Round -->

    <!-- Section Heading -->
    <div class="sec-heading rotate-tb">Latest <span>News</span></div>
    <!-- Section Heading -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="sec-title">Latest News</h2>
                <p class="sec-desc">
                    Sed ut perspiciatis unde omnis iste<br> natus er sit voluptatem accusantium dolore.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-news">
                    <div class="news-thumb">
                        <img src="{{ asset('assets/images/home/blog/1.jpg')}}" alt="">
                    </div>
                    <div class="news-details">
                        <span class="post-meta"><a href="#">In TV</a>, 1 week a go</span>
                        <h4>
                            <a href="single-post.html">
                                Ut enim ad minim venium eos qui
                                odit lorem telica comuo fira mende
                            </a>
                        </h4>
                        <a class="read-more" href="single-post.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-news">
                    <div class="news-thumb">
                        <img src="{{ asset('assets/images/home/blog/2.jpg')}}" alt="">
                    </div>
                    <div class="news-details">
                        <span class="post-meta"><a href="#">In Smartwatch</a>, 1 week a go</span>
                        <h4>
                            <a href="single-post.html">
                                Excepteur sint occaecat cupidatat
                                non proident, sunt in culpa
                            </a>
                        </h4>
                        <a class="read-more" href="single-post.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-news">
                    <div class="news-thumb">
                        <img src="{{ asset('assets/images/home/blog/3.jpg')}}" alt="">
                    </div>
                    <div class="news-details">
                        <span class="post-meta"><a href="#">In Drones</a>, 1 week a go</span>
                        <h4>
                            <a href="single-post.html">
                                Ut enim ad minim venium eos qui
                                odit lorem telica comuo fira mende
                            </a>
                        </h4>
                        <a class="read-more" href="single-post.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-top-45">
            <div class="col-lg-12 text-center">
                <a href="#" class="goru-btn">view more</a>
            </div>
        </div>
    </div>
</section>
<!-- News Section End -->

<!-- Client Section Start -->
<!-- Client Section End -->

<!-- Mailchimp Section Start -->
<section class="mailchimp-section">

    <!-- Section Heading -->
    <div class="sec-heading rotate-rl">Newsletter <span>Sign-Up</span></div>
    <!-- Section Heading -->

    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-center mx-auto">
                <h3 class="sec-title">Get Discount 30% Off</h3>
                <form class="mailchimp-form" action="#" method="post">
                    <input type="email" name="email" placeholder="your email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>

    <!-- shape -->
    <div class="mailchimp-shape"><img src="{{ asset('assets/images/home/shape4.png')}}" alt=""></div>
</section>
@endsection
