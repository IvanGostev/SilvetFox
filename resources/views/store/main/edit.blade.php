@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner m-top-20" style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Editing a store</h2>
                    <div class="bread-crumb"><a href="/">Home / Store</a></div>
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
                            <h4 class="card-title" style="color: black!important;" >Еditing a store</h4>
                            <p>If you don't want to update the photo, don't attach them.</p>
                            <form class="needs-validation" novalidate="" method="post" enctype="multipart/form-data" action="{{ route('store.main.update', $store->id) }}">
                                @csrf
                                @method("patch")
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">Title</label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Title" required="" name="title" value="{{$store->title}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Image</label>
                                            <input type="file" class="form-control" id="validationCustom02" name="img" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <div>
                                            <textarea required="" name="description" class="form-control" rows="5">{{$store->description}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn" style="background-color: #ee7926; color: white"  type="submit">Edit</button>
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
