@extends('layouts.mainNew')
@section('content')

    <section class="cart-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header_shop  bg ">
                        <div class="wrp">
                            <div class="header_shop__top"
                                 style="background-image: url({{ asset('storage/' . $store->img) }})">

                                <img alt="" class="logo" title="Copycat  Documentation Shop"
                                     src="{{ asset('storage/' . $store->img)}}">
                                <div class="header_shop__info">
                                    <h1 class="title over" style="font-size: 20px">
                                        {{$store->title}}qq
                                    </h1>
                                    <ul class="text-muted">
                                        <li>
                                            <div class="rating_star " title="Оценка 0" style="width: 150px">
                                                <div  class="rating_star_yellow" >
                                                    {!! $store->rating !!}
                                                </div>
                                            </div>
                                            <a style="color: white!important;" href="/">{{$store->countOrders}}+ deals</a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                            <nav class="header_shop__second text-muted">
                                <div style="display: none;" class="dropdown-wrp pull-right">
                                    <div class="dropdown">
                                        <a id="dLabel" type="button" class="" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            Still
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dLabel">
                                        </ul>
                                    </div>
                                </div>

                                <a STYLE="font-size: 16PX" href="{{ route('market.store.show', $store->id) }}" class="first  active ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-shop" viewBox="0 0 16 16">
                                        <path
                                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                                    </svg> &nbsp; Showcase</a>
                                <a  STYLE="font-size: 16PX" href="{{ route('market.store.about', $store->id) }}" class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-info-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path
                                            d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                    </svg> &nbsp; About Store</a>
                                <a STYLE="font-size: 16PX" href="{{ route('market.store.comments', $store->id) }}" class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-chat-dots" viewBox="0 0 16 16">
                                        <path
                                            d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        <path
                                            d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
                                    </svg> &nbsp; Reviews
                                    <span>{{$store->countComments}}</span>
                                </a>

                                <!--            <a href="/market/495/claims"
                                               class=""><i class="fas fa-edit"></i></i> Claims</a>-->

                            </nav>
                        </div>
                    </div>




                    <div id="content" class="box">

                        <div class="tileitems__box">
                            <div class="wrp">
                                <div class="row tile__list tileproduct__list">
                                    @foreach($products as $product)
                                        <div class="col-xs-6 col-sm-3  tile__item " data-regions="{&quot;3&quot;:3}">
                                            <div class="pad">
                                                <figure class="img">
                                                    <a href="{{ route('market.product.show', $product->id) }}">
                                                        <img style="  height: 100%;
        width: auto;"
                                                            src="{{ asset('storage/' . $product->img) }}"

                                                            class="unveil" title="university degree in east africa"
                                                            alt="">
                                                        <div class="photo_desc">{{$product->description}}</div>
                                                    </a>
                                                </figure>
                                                <div class="title over"><a
                                                        href="{{ route('market.product.show', $product->id) }}">{{$product->title}}</a>
                                                </div>

                                                <div class="text">{{$product->description}}</div>

                                                <div class="tileproduct_info">
                                                    <div class="tileproduct_info_in">
                                                        <ul class="text-muted i_location ">
{{--                                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">--}}
{{--                                                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>--}}
{{--                                                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>--}}
{{--                                                                </svg>Texas</li>--}}
                                                        </ul>
                                                        <div class="foot">
                                            <span class="price">
<span>{{$product->price}} XMR / {{$product->dollars}} USD</span>
</span>
                                                            <div class="rating_star  pull-right ">
                                                                <div style="width: 0%;" class="rating_star_yellow">
                                                                    {!!( $product['rating']) !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="load_more"></div>


                            </div>
                        </div>

                    </div>

                    <div class="heading_sep">
                        <div class="wrp">
                            <h3 class="title">About Store</h3>
                        </div>
                    </div>
                    <div id="about" class="box">
                        <div class="tileitems__box">
                            <div class="wrp">
                                <div class="static">
                                    <p style="
                        white-space: pre-line;">{{$store->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-bottom">
                        <div class="wrp"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
