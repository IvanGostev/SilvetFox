@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Rules</h2>
                    <div class="bread-crumb"><a href="/">Home</a> / Rules</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- History Section Start -->
    <section class="history-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="sec-title">Rules</h3>
                    <p>
                        {{$main->rules}}
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
