@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner m-top-20" style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Banners</h2>
                    <div class="bread-crumb"><a href="/">Home / Banners</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- History Section Start -->
    <section class="contact-section" style="background-color: #2d3037;">
        <div class="container">
            @if(count($banners) > 0)
                <div class="row">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="color: white" scope="col">Date of creation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($banners as $banner)
                            <tr>
                                <td style="color: white">{{$banner->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <h2 class="sec-title">You don't have banners</h2>
            @endif

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="sec-title">Creating a banner</h2>
                    <p class="sec-desc">
                        After purchase, the banner will be on the site for 30 days, the cost of one
                        banner {{$main->advertisement}} XMR
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form text-center">
                        <form action="{{ route('banner.store') }}" method="post" id="contact-form" class="row"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label" style="color: white;">The picture should be in
                                    the gif extension and the size is 468x60</label>
                                <div class="col-md-10">
                                    <input type="file" name="img" required>
                                </div>
                            </div>
                            <input hidden="hidden" name="user_id" value="{{auth()->user()->id}}">
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="goru-btn" style="background-color: #ee7926">Bye</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- History Section End -->
@endsection
