@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner m-top-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Application for opening a store</h2>
                    <div class="bread-crumb"><a href="/">Home</a> / Store</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- History Section Start -->
    <section class="contact-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="sec-title">You don't have a store. Want to open it?</h2>
                    <p class="sec-desc">
                        You don't have a store. Do you want to open it? To open a store, top up your balance.<br> $20 will be debited from your balance.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form text-center">
                        <form action="{{ route('store.main.open') }}" method="post" id="contact-form" class="row">
                            @csrf
                            <input hidden="hidden" name="user_id" value="{{auth()->user()->id}}">
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="goru-btn">Open</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- History Section End -->
@endsection
