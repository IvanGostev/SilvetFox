@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner m-top-20" style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Add image</h2>
                    <div class="bread-crumb"><a href="/">Home / Store / Product</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- History Section Start -->
    <section class="contact-section" style="padding: 50px 0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="color: black!important;">Add image</h4>
                            <p>The image should be a square. Minimum size 200x200</p>
                            <form class="needs-validation" novalidate="" method="post" enctype="multipart/form-data"
                                  action="{{ route('store.product.image.store') }}">
                                @csrf
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Image</label>
                                            <input type="file" class="form-control" id="validationCustom02" required=""
                                                   name="img">
                                        </div>
                                    </div>
                                </div>
                                <input type="text" hidden="hidden" value="{{$product->id}}" name="product_id">
                                <button class="btn" style="background-color: #ee7926; color: white" type="submit">Add</button>
                            </form>
                        </div>
                    </div>
                    <!-- end card -->
                </div> <!-- end col -->
            </div>
        </div>
    </section>
    <!-- History Section End -->
@endsection
