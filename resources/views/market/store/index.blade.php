@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner" style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Stores</h2>
                    <div class="bread-crumb"><a href="/">Home / Stores</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Cart Section Start -->
    <section class="cart-section"    style="background-color: #2d3037;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="woocommerce-cart-form" action="#">
                        <table class="cart-table">
                            <thead>
                            @foreach($stores as $store)
                                <tr>
                                    <th class="product-name-thumbnail" style="color: white">Store Name</th>
                                    <th class="product-price" style="color: white">Description</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr class="cart-item">
                                <td class="product-thumbnail-title">
                                    <a href="{{ route('market.category.storeProduct', $store->id ) }}">
                                        <img src="{{ asset('storage/' . $store->img) }}" alt="">
                                    </a>
                                    <a class="product-name" href="{{ route('market.category.storeProduct', $store->id ) }}">{{$store->title}}</a>
                                </td>
                                <td class="product-unit-price">
                                    <div class="product-price clearfix">
                                                <span class="price">
                                                    <span>{{$store->description}}</span>
                                                </span>
                                    </div>
                                </td>
                                <td class="y">
                                    <a href="{{ route('market.category.storeProduct', $store->id ) }}">Go over</a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="row">
                            <div class="mx-auto">      {{$stores
->links()}}</div>

                            {{--                                                <div class="col-lg-10 offset-lg-1 col-md-12 mt-20">--}}
                            {{--              --}}
                            {{--                                                    <div class="goru-pagination text-center clearfix">--}}

                            {{--                                                        <a class="prev" href="{{$paginator->previousCursor()}}"><i class="twi-long-arrow-alt-left"></i></a>--}}
                            {{--                                                        <span class="current">1</span>--}}
                            {{--                                                        <a href="#">2</a>--}}
                            {{--                                                        <a class="next" href="{{$paginator->nextCursor()}}"><i class="twi-long-arrow-alt-right"></i></a>--}}
                            {{--                                                    </div>--}}
                        </div>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->
@endsection
