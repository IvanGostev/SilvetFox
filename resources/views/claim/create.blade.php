@extends('layouts.main')
@section('content')
    <section class="page-banner" style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-top-25">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Create claim</h2>
                    <div class="bread-crumb"><a href="/">Home / Claim</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="checkout-section" style="padding: 10px 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('claim.store')}}" method="post">
                        @csrf
                        <div class="woocommerce-billing-fields">
                            <h3>Write your complaint below</h3>
                            <div class="row">
                                <p class="col-lg-6">
                                    <label>Title</label>
                                    <input name="title" type="text" required>

                                </p>
                                <p class="col-lg-12">
                                    <label>Message</label>
                                    <textarea name="message" required></textarea>
                                </p>
                                <p class="col-lg-6">
                                <div class="place-order">
                                    <button class="btn" style="background-color: #ee7926;" type="submit">Submit</button>
                                </div>
                                </p>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
