@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Cart</h2>
                    <div class="bread-crumb"><a href="index.html">Home</a> / Cart</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Cart Section Start -->
    <section class="cart-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="woocommerce-cart-form" action="#">
                        <table class="cart-table">
                            <thead>
                            @foreach($orders as $order)
                                <tr>
                                    <th class="product-name-thumbnail">Product Name</th>
                                    <th class="product-price">Date</th>
                                    <th class="product-price">Status</th>
                                    <th class="product-total">Price</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr class="cart-item">
                                <td class="product-thumbnail-title">
                                    <a href="#">
                                        <img src="{{ 'storage/' . $order->product->img }}" alt="">
                                    </a>
                                    <a class="product-name" href="#">{{$order->product->title}}</a>
                                </td>
                                <td class="product-unit-price">
                                    <div class="product-price clearfix">
                                                <span class="price">
                                                    <span>{{$order->product->created_at}}</span>
                                                </span>
                                    </div>
                                </td>
                                <td class="product-unit-price">
                                    <div class="product-price clearfix">
                                                <span class="price">
                                                    <span> {{   }}</span>
                                                </span>
                                    </div>
                                </td>
                                <td class="product-total">
                                    <div class="product-price clearfix">
                                                <span class="price">
                                                    <span>42.00<span
                                                            class="woocommerce-Price-currencySymbol">&nbsp;XMR</span></span>
                                                </span>
                                    </div>
                                </td>
                                <td class="y">
                                    <a href="#">Gjlhj,yt</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->
@endsection
