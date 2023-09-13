@extends('layouts.main')
@section('content')

    <section class="shop-left-sidebar"
             style="background: -webkit-linear-gradient(90deg, #5e7078,#4a5559,#373a3a); background: linear-gradient(90deg, #5e7078,#4a5559,#373a3a);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="shop-sidebar">
                        <aside class="widget widget-categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('market.category.index', $category->id)}}">{{$category->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-10 m-top-45">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-6">
                                <div class="single-shop-product">
                                    <div class="sp-thumb">
                                        <img src="{{asset('storage/' . $product->img)}}" alt="" class="">
                                    </div>
                                    <div class="sp-details">
                                        <h4>{{$product->title}}</h4>
                                        <div class="product-price clearfix">
                                            <span class="price">
                                                <ins><span><span class="woocommerce-Price-currencySymbol"></span>{{$product->price}}</span>XMR</ins>
                                            </span>
                                        </div>
                                        <div class="sp-details-hover">
                                            <a class="sp-cart"
                                               href="{{ route('market.product.show', $product->id) }}"></i><span>More detailed</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{--                    </div>--}}
                        {{--                    <div class="row">--}}
                        {{--                        <div class="col-lg-10 offset-lg-1 col-md-12 mt-20">--}}
                        {{--                            <div class="goru-pagination text-center clearfix">--}}
                        {{--                                <a class="prev" href="#"><i class="twi-long-arrow-alt-left"></i></a>--}}
                        {{--                                <span class="current">1</span>--}}
                        {{--                                <a href="#">2</a>--}}
                        {{--                                <a href="#">3</a>--}}
                        {{--                                <a href="#">4</a>--}}
                        {{--                                <a href="#">5</a>--}}
                        {{--                                <a class="next" href="#"><i class="twi-long-arrow-alt-right"></i></a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
            </div>
    </section>

    <!-- Shop Section End -->
@endsection
