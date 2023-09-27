@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner m-top-20" style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Application for opening a store</h2>
                    <div class="bread-crumb"><a href="/">Home / Store</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- History Section Start -->
    <section class="contact-section" style="background-color: #2d3037;">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="sec-title">You don't have a store. Want to open it?</h2>
                    <p class="sec-desc">
                        To open a store, top up your balance with the amount of the deposit. <br> The amount of the
                        deposit depends on the category of the store. The store category applies to all products of the
                        store.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form text-center">
                        <form action="{{ route('store.main.open') }}" method="post" id="contact-form" class="row">
                            @csrf
                            <div class="mb-3 row d-flex">
                                <label class="col-md-2 col-form-label" style="color: white;">Category</label>
                                <div class="col-md-8">
                                    <select class="form-select" required name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">
                                                <span>{{$category->title}}</span>
                                                <span>Deposit: {{$category->deposit}} XMR</span>
                                                <p style="color: yellow!important; text-align: right" class="col-md-2 ">click for select category <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                                                    </svg></p>

                                            </option>
                                        @endforeach

                                    </select>

                                </div>

                            </div>
                            <input hidden="hidden" name="user_id" value="{{auth()->user()->id}}">
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="goru-btn" style="background-color: #ee7926">Open</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- History Section End -->
@endsection
