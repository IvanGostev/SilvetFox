@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Stores</h2>
                    <div class="bread-crumb"><a href="/">Home</a> / Stores</div>
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
                            @foreach($stores as $store)
                                <tr>
                                    <th class="product-name-thumbnail">Store Name</th>
                                    <th class="product-price">Date</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr class="cart-item">
                                <td class="product-thumbnail-title">
                                    <a href="#">
                                        <img src="{{ asset('storage/' . $store->img) }}" alt="">
                                    </a>
                                    <a class="product-name" href="#">{{$store->title}}</a>
                                </td>
                                <td class="product-unit-price">
                                    <div class="product-price clearfix">
                                                <span class="price">
                                                    <span>{{$store->created_at}}</span>
                                                </span>
                                    </div>
                                </td>
                                <td class="y">
                                    <a href="#">Go over</a>
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
