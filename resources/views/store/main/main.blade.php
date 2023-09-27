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
            @if($store->status == 1)<div class="badge-dark p-2"> <h3 class="banner-title text-warning">The store is being checked by the administration, it and its products are not displayed to customers.</h3> </div>@endif
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">

                            <label>{!!  $store->active == 1 ? ' <span class="text-success ">Activated</span>' : '<span class="text-danger">Deactivated</span>'!!}</label>
                            <br>
                            <a href="{{ route('store.main.active', $store->id) }}"
                                                    class="btn" style="background-color: #ee7926; color: white!important;" >Activate/Deactivate Store</a>
                            <a href="{{ route('store.main.edit', $store->id) }}"
                               class="btn" style="background-color: #ee7926; color: white!important;" >Edit</a></div>
                        <img class="card-img-top img-fluid" src="{{ asset('storage/' . $store->img) }}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title " style="color: black!important;">{{$store->title}}</h4>
                            <p class="card-text">{{$store->description}}</p>


                        </div>
                    </div>
                </div> <!-- end col -->
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="color: black!important;">Products @if($countProducts < 3)
                                    <a href="{{ route('store.product.create') }}"
                                       class="btn" style="background-color: #ee7926; color: white!important;" >Create</a>
                                @endif
                            </h4>

                            <div class="table-responsive">
                                <table class="table table-editable table-nowrap align-middle table-edits">
                                    <thead>
                                    <tr style="cursor: pointer;">
                                        <th style="color: black!important;">Title</th>
                                        <th style="color: black!important;">Status</th>
                                        <th style="color: black!important;">Activated</th>
                                        <th style="color: black!important;">Activate/Deactivate</th>
                                        <th style="color: black!important;">Images</th>
                                        <th style="color: black!important;">Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr data-id="1" style="cursor: pointer;">
                                            <td data-field="name">{{$product->title}}</td>
                                            @if($product->status == 0)
                                                <td data-field="gender"><span class="text-danger">Inactive</span></td>
                                            @endif
                                            @if($product->status == 1)
                                                <td data-field="gender"><span class="text-warning">Check</span></td>
                                            @endif
                                            @if($product->status == 2)
                                                <td data-field="gender"><span class="text-success  font-weight-bolder">Active</span></td>
                                            @endif
                                            @if($product->active == 0)
                                                <td data-field="gender" class="text-danger  font-weight-bolder">NO</td>
                                            @endif
                                            @if($product->active == 1)
                                                <td data-field="gender" class="text-success  font-weight-bolder">YES</td>
                                            @endif
                                            <td style="width: 100px" >
                                                <a href="{{ route('store.product.active', $product->id) }}" class="btn" style="background-color: #ee7926; color: white!important;" >Activate/Deactivate Product</a>
                                            </td>
                                            <td style="width: 100px">
                                                <a href="{{ route('store.product.image.index', $product->id) }}" class="btn" style="background-color: #ee7926; color: white!important;" >See</a>
                                            </td>
                                            <td style="width: 100px">
                                                <a  href="{{ route('store.product.edit', $product->id) }}"
                                                   class="btn" style="background-color: #ee7926; color: white!important;" >Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </section>
    <!-- History Section End -->
@endsection
