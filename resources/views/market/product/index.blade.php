@extends('layouts.mainNew')
@section('content')
    <style>
        ol, ul {
            padding-left: 0;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/new.css') }}">
    <section class="shop-left-sidebar"
             style="background-color: #2d3037;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="shop-sidebar">
                        <aside class="widget widget-categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{route('market.category.index', $category->id)}}">{{$category->title}}
                                            ({{$category['count']}})</a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-10 m-top-45">
                    <div class="row">
                        @foreach($banners as $banner)
                            <div style="max-height: 60px; max-width: 468px; margin: 2px;"><a href="{{$banner->link}}">
                                    <img src="{{ asset('storage/' . $banner->img) }}"></a></div>

                        @endforeach
                    </div>
                    <div class="row m-top-20">


                        <div id="side-content" class="col-md-10 tileitems__box">

                            <div class="row tile__list tileitems_filter pad15 tileproduct__list">
                                @foreach($products as $product)

                                    <div class="catalog_item ">
                                        <div class="photo">
                                            <a href="{{ route('market.product.show', $product->id) }}">
                                                <img width="200px" height="200px"
                                                    src="{{ asset('storage/' . $product->img) }}"
                                                    class="unveil jsOnly">

                                                <span>

                                            </span>
                                                <div class="photo_desc">
                                                    {{$product->description}}
                                                </div>
                                            </a>
                                        </div>
                                        <div class="desc">
                                            <div class="title"><a
                                                    href="{{ route('market.product.show', $product->id) }}"> {{$product->title}}</a>
                                            </div>
                                            <div class="market over">
                                                <i class="i_crown"></i>
                                                <a href="{{ route('market.product.show', $product->id) }}"> {{$product->store->title}}</a>
                                            </div>
                                            <div class="text">{{$product->description}}
                                            </div>
                                            <div class="info">
                                                <ul class="text-muted">
                                                    <li class="over">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                        </svg>
                                                        @foreach($product['regions'] as $region)
                                                                <?php
                                                                $result = match ($region) {
                                                                    '' => '',
                                                                    '1' => 'Africa',
                                                                    '2' => 'North America',
                                                                    '3' => 'Latin America and the Caribbean',
                                                                    '4' => 'Asia',
                                                                    '5' => 'Australia and Oceania',
                                                                    '6' => 'Europe',
                                                                    '7' => 'Russia',
                                                                };
                                                                ?>{{  $result . ', '}}
                                                        @endforeach
                                                    </li>
                                                </ul>
                                                <div class="foot">
                                            <span class="price">
<span>{{$product->price}}  XMR / {{$product->dollars}}  USD</span>
                                            </span>
                                                    <div class="rating_star  pull-right ">
                                                        <div style="width: 100%;" class="rating_star_yellow">
                                                            {!!$product->rating!!}
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>


                        {{--                        @foreach($products as $product)--}}
                        {{--                            <div class="col-lg-4 col-md-6">--}}
                        {{--                                <div class="single-shop-product">--}}
                        {{--                                    <div class="sp-thumb">--}}
                        {{--                                        <img src="{{asset('storage/' . $product->img)}}" alt="" class="">--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="sp-details">--}}
                        {{--                                        <h4>{{$product->title}}</h4>--}}
                        {{--                                        <div class="product-price clearfix">--}}
                        {{--                                            <span class="price">--}}
                        {{--                                                <ins><span><span class="woocommerce-Price-currencySymbol"></span>{{$product->price}}</span>XMR</ins>--}}
                        {{--                                            </span>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="sp-details-hover">--}}
                        {{--                                            <a class="sp-cart"--}}
                        {{--                                               href="{{ route('market.product.show', $product->id) }}"></i><span>More detailed</span></a>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        @endforeach--}}
                    </div>
                    <div class="row">
                        <div class="mx-auto">      {{$products->links()}}</div>

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
            </div>
        </div>
        </div>
    </section>

    <!-- Shop Section End -->
@endsection
