@extends('layouts.main')
@section('content')
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-top-25">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Withdrawal</h2>
                    <div class="bread-crumb"><a href="/">Home</a> / balance / Withdrawal</div>
                </div>
            </div>
        </div>
    </section>
    <section class="checkout-section" style="padding: 10px 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('profile.balance.withdrawalStore')}}" method="post">
                        @csrf
                        <div class="woocommerce-billing-fields">
                            <h3>Request for withdrawal</h3>
                            <div class="row">
                                <p class="col-lg-6">
                                    <label>The amount you specify will be deducted from your account. In case of refusal, it will be returned to the account. </label>
                                    <input placeholder="XMR" name="number" step="0.0001" type="number" required>

                                </p>
                                <p class="col-lg-12">
                                    <label>Message</label>
                                    <textarea name="message" required></textarea>
                                </p>
                                <p class="col-lg-6">
                                <div class="place-order">
                                    <button type="submit" class="button">Submit</button>
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
