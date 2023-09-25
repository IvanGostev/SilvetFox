@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner" style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Orders</h2>
                    <div class="bread-crumb"><a href="/">Home / Orders</a></div>
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
                                <tr>
                                    <th class="product-name-thumbnail" style="color: white"  >Product Name</th>
                                    <th class="product-price" style="color: white" >Date</th>
                                    <th class="product-price" style="color: white" >Status</th>
                                    <th class="product-price" style="color: white" >Number</th>
                                    <th class="product-total" style="color: white" >Price</th>
                                    <th class="product-remove" >&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                    <?php $status = match ($order->status) {
                                    "0" => 'Cancelled',
                                    "1" => 'In processing',
                                    "2" => 'In the assembly',
                                    "3" => 'Shipped',
                                    "4" => 'Receipt confirmed',
                                    0 => 'Cancelled',
                                    1 => 'In processing',
                                    2 => 'In the assembly',
                                    3 => 'Shipped',
                                    4 => 'Receipt confirmed',
                                } ?>
                            <tr class="cart-item">
                                <td class="product-thumbnail-title">
                                    <a href="#">
                                        <img src="{{ asset('storage/' . $order->product->img )}}" alt="">
                                    </a>
                                    <a class="product-name" href="#">{{$order->product->title}}</a>
                                </td>
                                <td class="product-unit-price">
                                    <div class="product-price clearfix">
                                                <span class="price">
                                                    <span style="color: white" >{{$order->product->created_at}}</span>
                                                </span>
                                    </div>
                                </td>
                                <td class="product-unit-price">
                                    <div class="product-price clearfix">
                                                <span class="price">
                                                    <span style="color: white" > {{ $status }}</span>
                                                </span>
                                    </div>
                                </td>
                                <td class="product-unit-price">
                                    <div class="product-price clearfix">
                                                <span class="price">
                                                    <span style="color: white" > {{ $order->number }}</span>
                                                </span>
                                    </div>
                                </td>
                                <td class="product-total">
                                    <div class="product-price clearfix">
                                                <span class="price">
                                                    <span>{{$order->price}}<span
                                                            class="woocommerce-Price-currencySymbol">&nbsp;XMR</span></span>
                                                </span>
                                    </div>
                                </td>
                                <td class="y">
                                    <a href="{{ route('order.main.edit', $order->id) }}">More detailed</a>
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
