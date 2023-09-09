@extends('layouts.main')
@section('content')
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Profile</h2>
                    <div class="bread-crumb"><a href="/">Home</a> / Profile / Edit</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Checkout Section Start -->
    <section class="checkout-section" style="padding: 0 0 100px 0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="woocommerce-billing-fields">
                        <h3>My Profile</h3>
                        <form action="{{ route('profile.main.update') }}" method="post" enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                @method('patch')
                                <p class="col-lg-6">
                                    <label>Name</label>
                                    <input  name="name" type="text" value="{{ auth()->user()->name}}">
                                </p>
                                <p class="col-lg-6">
                                    <label>Old Password</label>
                                    <input  name="old_password" type="password">
                                </p>
                                <p class="col-lg-6">
                                    <label>New Password</label>
                                    <input  name="new_password" type="password">
                                </p>
                                <p class="col-lg-6">
                                    <label>Repeat password</label>
                                    <input  name="repeat_password" type="password">
                                </p>
                                <p class="col-lg-12">
                                    <label>Avatar</label>
                                    <input type="file" name=img>
                                </p>
                                <p class="col-lg-12">
                                    <label>Public PGP key</label>
                                    <textarea name="pgp_key"  placeholder="">{{auth()->user()->pgp_key ?? ''}}</textarea>
                                </p>
                                <div class="place-order">
                                    <button type="submit" class="button">Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
