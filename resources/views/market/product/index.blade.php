@extends('layouts.main')
@section('content')

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
                                        <a href="{{route('market.category.index', $category->id)}}">{{$category->title}} ({{$category['count']}})</a>
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
