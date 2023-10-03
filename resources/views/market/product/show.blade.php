@extends('layouts.main')
@section('content')
    <section class="page-banner" style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-4">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">{{$product->store->title}}</h2>
                    <div class="bread-crumb"><a href="/">Home</a> / <a
                            href="/">{{$product->store->title}} / {{$product->category->title}}</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->


    <!-- Shop Section Start -->
    <section class="single-product-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div id="product-slider" class="carousel slide product-slider" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="ps-img"><a href="{{ asset('storage/' . $product->img)}}">
                                        <img src="{{ asset('storage/' . $product->img)}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators clearfix">
                            @foreach($images as $image)
                                <li data-target="#product-slider" data-slide-to="0" class="active"><a
                                        href="{{ asset('storage/' . $image->img)}}"><img
                                            src="{{ asset('storage/' . $image->img)}}" alt=""></a></li>
                            @endforeach
                        </ol>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="sin-product-details">
                        <h3>{{$product->title}}</h3>
                        <div class="woocommerce-product-rating">
                            {!! $rating !!}
                            <a href="#customer" class="woocommerce-review-link"><span class="count">{{$countComments}}</span>
                                customer reviews
                            </a>
                        </div>
                        <div class="product-price clearfix">
                                <span class="price">

                                    <span style="color: yellow!important;">
                                           PRICE</span>
                                </span>
                                    <span><span
                                            class="woocommerce-Price-currencySymbol"></span>{{ $product->price }}</span>&nbsp;XMR
                                </span>
                            <span class="price">
                                    <span><span
                                            class="woocommerce-Price-currencySymbol"></span>{{ $product->dollars }}</span>&nbsp;$
                                </span>
                        </div>
                        <div class="pro-excerp">
                            <p>
                                {{$product->description}}
                            </p>
                        </div>
                        <div class="product-cart-qty">
                            <form action="{{ route('order.main.create', $product->id) }}" method="post" >
                                @csrf
{{--                                <label>Stars</label>--}}
                                <input type="number" min="1" max="99" name="number" value="1">
                                <button type="submit"
                                        style="color: #fff;   background: -webkit-linear-gradient(90deg, #f08323,#e86028); background: linear-gradient(90deg, #f08323,#e86028);"
                                        class="btn">Buy</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="divider"></div>
                </div>
            </div>
            <div class="row" id="customer">
                <div class="col-lg-8 col-md-8">
                    <div class="product-tabarea">
                        <ul class="nav nav-tabs productTabs" id="productTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab"
                                   aria-controls="reviews" aria-selected="false">Reviews ({{$countComments}} )</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="productTabContent">
                            <div class="tab-pane fade show active" id="reviews" role="tabpanel"
                                 aria-labelledby="descriptions-tab">
                                <div class="comment-area">
                                    <h4 class="comment-title">{{$countComments}} Reviews to “{{$product->title}}”</h4>
                                    <ol class="comment-list">
                                        @foreach($product->comments as $comment)
                                            <li>
                                                <div class="single-comment">
                                                    <img src="{{ asset('storage/' . $comment->user->img)}}" alt="">
                                                    <h5>
                                                        <a href="{{ route('profile.main.show', $comment->user->id) }}">{{$comment->user->name}}</a><span>{{$comment->created_at}}</span>
                                                    </h5>
                                                    <div class="comment">
                                                        <p>
                                                            {{$comment->message}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ol>
                                    <div class="comment-form-wrapper">
                                        <h5>Add Reivew</h5>
                                        <form action="{{ route('market.product.comment.store' )}}" method="post"
                                              class="row comment-form">
                                            @csrf
                                            <div class="col-lg-10 col-md-10">
                                                <textarea name="message" placeholder="Reviews"></textarea>
                                            </div>
                                            <div class="col-lg-2 col-md-2">
                                                <label>Stars</label>
                                                <input type="number" min="1" max="5" name="rating" value="5">
                                            </div>
                                            <input hidden="hidden" value="{{$product->id}}" name="product_id">
                                            <input hidden="hidden" value="{{auth()->user()->id}}" name="user_id">
                                            <div class="col-lg-9 col-md-9">
                                                <input type="submit" class="btn"
                                                       style="color: #fff;   background: -webkit-linear-gradient(90deg, #f08323,#e86028); background: linear-gradient(90deg, #f08323,#e86028); "
                                                       name="submit" value="Submit Review">
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">

                    <div class="product-speciality">
                        <a href="{{ route('profile.main.show', $product->store->user->id) }}" class="btn" style="background: -webkit-linear-gradient(90deg, #f08323,#e86028); background: linear-gradient(90deg, #f08323,#e86028);" >Profile seller</a> <br>
                        <br>
                        <a href="{{ asset('storage/' . $product->video)}}">Click if the video is not displayed</a>
                        <video height="180px">
                            <source src="{{ asset('storage/' . $product->video)}}">
                        </video>
                        <h5>Specifications</h5>
                        <ul>
                            <li>Store: {{$product->store->title}}</li>
                            <li>Category: {{$product->category->title}}</li>
                            <li>Regions to which the goods are delivered:
                                @foreach($regions as $region)
                                        <?php
                                          $result =  match ($region) {
                                                '' => '',
                                                '1' => 'Africa',
                                                '2' => 'North America',
                                                '3' => 'Latin America and the Caribbean',
                                                '4' => 'Asia',
                                                '5' => 'Australia and Oceania',
                                                '6' => 'Europe',
                                                '7' => 'Russia',
                                            };
                                        ?>
                                    {{  $result . ', '}}


                                @endforeach


                            </li>
                            <li>Description: {{$product->description}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="related-product-area">
                        <h3>Related Products</h3>
                        <div class="related-slider owl-carousel owl-loaded owl-drag">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(-1170px, 0px, 0px); transition: all 0.7s ease 0s; width: 2340px;">
                                    <div class="owl-item" style="width: 360px; margin-right: 30px;">
                                        <div class="single-shop-product">
                                            <div class="sp-thumb">
                                                <img src="{{ asset('assets/images/shop/5.jpg')}}" alt="" class="">
                                                <div class="pro-badge">
                                                    <p class="sale">Sale</p>
                                                </div>
                                            </div>
                                            <div class="sp-details">
                                                <h4>VRBOX Gaming</h4>
                                                <div class="product-price clearfix">
                                            <span class="price">
                                                <del><span><span class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                <ins><span><span class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                            </span>
                                                </div>
                                                <div class="sp-details-hover">
                                                    <a class="sp-cart" href="#"><i class="twi-cart-plus"></i><span>Add to cart</span></a>
                                                    <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 360px; margin-right: 30px;">
                                        <div class="single-shop-product">
                                            <div class="sp-thumb">
                                                <img src="{{ asset('assets/images/shop/1.jpg')}}" alt="" class="">
                                                <div class="pro-badge">
                                                    <p class="hot">Hot</p>
                                                </div>
                                            </div>
                                            <div class="sp-details">
                                                <h4>Gaming Mouse</h4>
                                                <div class="product-price clearfix">
                                            <span class="price">
                                                <del><span><span class="woocommerce-Price-currencySymbol">$</span>42.00</span></del>
                                                <ins><span><span class="woocommerce-Price-currencySymbol">$</span>38.00</span></ins>
                                            </span>
                                                </div>
                                                <div class="sp-details-hover">
                                                    <a class="sp-cart" href="#"><i class="twi-cart-plus"></i><span>Add to cart</span></a>
                                                    <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 360px; margin-right: 30px;">
                                        <div class="single-shop-product">
                                            <div class="sp-thumb">
                                                <img src="{{ asset('assets/images/shop/8.jpg')}}" alt="" class="">
                                            </div>
                                            <div class="sp-details">
                                                <h4>Wirless Headset</h4>
                                                <div class="product-price clearfix">
                                            <span class="price">
                                                <span><span
                                                        class="woocommerce-Price-currencySymbol">$</span>122.00</span>
                                            </span>
                                                </div>
                                                <div class="sp-details-hover">
                                                    <a class="sp-cart" href="#"><i class="twi-cart-plus"></i><span>Add to cart</span></a>
                                                    <a class="sp-wishlist" href="#"><i class="twi-heart2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach($products as $productR)
                                        <div class="owl-item active" style="width: 360px; margin-right: 30px;">
                                            <div class="single-shop-product">
                                                <div class="sp-thumb">
                                                    <img src="{{ asset('storage/' . $productR->img)}}" alt="" class="">
                                                </div>
                                                <div class="sp-details">
                                                    <h4>{{$productR->title}}</h4>
                                                    <div class="product-price clearfix">
                                            <span class="price">
                                                <span><span
                                                        class="woocommerce-Price-currencySymbol">{{$productR->price}}</span>XMR</span>
                                            </span>
                                                    </div>
                                                    <div class="sp-details-hover">
                                                        <a class="sp-cart"
                                                           href="{{ route('market.product.show', $productR->id) }}"><span>More detailed</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev"><span
                                        aria-label="Previous">‹</span></button>
                                <button type="button" role="presentation" class="owl-next"><span
                                        aria-label="Next">›</span></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
@endsection
