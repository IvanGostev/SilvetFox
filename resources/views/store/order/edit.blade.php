@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner m-top-20" style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Order information and status</h2>
                    <div class="bread-crumb"><a href="/">Home / Order information and status</a></div>
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
                            <h4 class="card-title" style="color: #000!important;">Order information and status</h4>
                            <p>If you don't want to update the images, don't attach them!</p>
                            <form class="needs-validation" novalidate="" method="post" enctype="multipart/form-data"
                                  action="{{ route('store.order.update', $order->id) }}">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">Link to the delivery
                                                service</label>
                                            <input type="text" class="form-control" id="validationCustom01"
                                                   placeholder="link" required="" name="delivery"
                                                   value="{{$order->delivery}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">Track number</label>
                                            <input type="text" class="form-control" id="validationCustom01"
                                                   placeholder="number" required="" name="track_number"
                                                   value="{{$order->track_number}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom01">Status</label>
                                        <select class="form-select" name="status" id="inlineFormSelectPref">
                                            <option {{ $order->status == 2 ? 'selected' : ' '}} value="2">{{'In the assembly'}}</option>
                                            <option {{ $order->status == 3 ? 'selected' : ' '}} value="3">{{'Shipped'}}</option>
                                        </select>
                                    </div>

                                    <button class="btn" style="background-color: #ee7926; color: white!important;" type="submit">Edit</button>
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
