@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner" style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Escrow</h2>
                    <div class="bread-crumb"><a href="/">Home / Escrow</a></div>
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
                    <h3 class="sec-title">Escrow</h3>
                    <p>
                        {!! $main->escrow !!}}
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
