@extends('layouts.main')
@section('content')
    <section class="page-banner" style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Order</h2>
                    <div class="bread-crumb"><a href="/">Home / Order</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- History Section Start -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <h3 class="sec-title">Your order</h3>
                    <div class="info-contact">
                        <h5>Address: <p> {{$order->address}}</p></h5>
                        <h5>Link to the delivery service: <p><a href="{{$order->delivery}}">{{$order->delivery}}</a></p>
                        </h5>
                        <h5>Track number: <p> {{$order->track_number}}</p></h5>
                        <h5>Deal with:
                            <a href="{{ route('profile.main.show', $order->product->store->user->id) }}"><i
                                    class="twi-user"></i> &nbsp; Seller</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="contact-thumb">
                        {{--                        <img src="{{ asset('storage/' . $order->product->img) }}" alt="">--}}
                    </div>
                </div>
            </div>
            <?php
            $status = match ($order->status) {
                "0" => 'Cancelled',
                "1" => 'In processing',
                "2" => 'In the assembly',
                "3" => 'Shipped',
                "4" => 'Receipt confirmed',
                0 => 'Cancelled',
                1 => 'In processing',
                2 => 'Preparing for shipment',
                3 => 'Shipped',
                4 => 'Receipt confirmed',
            }
            ?>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="sec-title">Status: {{$status}}</h2>
                    @if($order->status != 4)
                    <p class="sec-desc">
                        After receiving the goods, you must click on the button!
                    </p>

                        <form action="{{ route('order.main.update', $order->id) }}" method="post" id="contact-form"
                              class="row">
                            @csrf
                            @method('patch')
                            <input type="text" hidden="hidden" name="status" value="4">
                            <button type="submit" style="background-color: #ee7926; color: white" class="goru-btn">Confirmation of receipt of the goods / Closing of the
                                order
                            </button>
                        </form>
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection
