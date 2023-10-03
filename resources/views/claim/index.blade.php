@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner" style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Claims</h2>
                    <div class="bread-crumb"><a href="/">Home / Claims</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Cart Section Start -->
    <section class="cart-section" style="padding-top: -80px; margin-top: -80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a  href="{{ route('claim.create') }}" class=" goru-btn" style="color: #fff;  border-radius: 10px; background: -webkit-linear-gradient(90deg, #f08323,#e86028); background: linear-gradient(90deg, #f08323,#e86028); ">Create claim</a>
                    <br>
                    <br>
                    <form class="woocommerce-cart-form" action="#">
                        <table class="cart-table">
                            <thead>
                                <tr>
                                    <th class="product-price" style="color: greenyellow" >Title</th>
                                    <th class="product-price" style="color: white" >MESSAGE</th>
                                    <th class="product-price" style="color: greenyellow" >Status</th>
                                    <th class="product-price" style="color: white" >View the response</th>
                                    <th class="product-price" style="color: greenyellow" >DATE</th>
                                    <th class="product-remove" >&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($claims as $claim)
                                    <?php $status = match ($claim->status) {
                                    "0" => 'Cancelled',
                                    "1" => 'In processing',
                                    "2" => 'Answered',
                                    0 => 'Cancelled',
                                    1 => 'In processing',
                                    2 => 'Answered',
                                } ?>
                            <tr class="cart-item">
                                <td class="product-thumbnail-title">
                                    <a class="product-name"  href="#">  <span  style="color: greenyellow">{{$claim->title}}</span></a>
                                </td>
                                <td class="product-unit-price">
                                    <div class="product-price clearfix">
                                                <span class="price">
                                                    <span style="color: white">{{$claim->message}}</span>
                                                </span>
                                    </div>
                                </td>
                                &nbsp;
                                &nbsp;
                                <td class="product-unit-price" style="padding-right: 10px; padding-left: 10px">
                                    <div class="product-price clearfix">
                                                <span class="price">
                                                    <span  style="color: greenyellow" > {{ $status }}</span>
                                                </span>
                                    </div>
                                </td>
                                &nbsp;
                                &nbsp;
                                <td class="product-unit-price">
                                    <div class="product-price clearfix">
                                                <span class="price">
                                                    <span style="color: white" > {{ $claim->answer ?? "---"}}</span>
                                                </span>
                                    </div>
                                </td>
                                <td class="product-total">
                                    <div class="product-price clearfix">
                                                    <span style="color: greenyellow">{{$claim->created_at}}</span>
                                    </div>
                                </td>
{{--                                <td class="y">--}}
                                {{--                                    <a href="{{ route('claim.main.edit', $claim->id) }}">More detailed</a>--}}
                                {{--                                </td>--}}
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
