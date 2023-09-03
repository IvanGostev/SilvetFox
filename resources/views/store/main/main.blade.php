@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner m-top-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Editing a store</h2>
                    <div class="bread-crumb"><a href="/">Home</a> / Store</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- History Section Start -->
    <section class="contact-section" style="padding: 50px 0">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{ asset('storage/' . $store->img) }}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title ">{{$store->title}}</h4>
                            <p class="card-text">{{$store->description}}</p>
                            <a href="{{ route('store.main.active', $store->id) }}"
                               class="btn btn-dark waves-effect waves-light">Activate/Deactivate</a>
                            <a href="{{ route('store.main.edit', $store->id) }}"
                               class="btn btn-dark waves-effect waves-light">Edit</a>
                        </div>
                    </div>
                </div> <!-- end col -->
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Products @if($countProducts < 3)
                                    <a href="{{ route('store.product.create') }}"
                                       class="btn btn-dark waves-effect waves-light">Create</a>
                                @endif
                            </h4>

                            <div class="table-responsive">
                                <table class="table table-editable table-nowrap align-middle table-edits">
                                    <thead>
                                    <tr style="cursor: pointer;">
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Activated</th>
                                        <th>Activate/Deactivate</th>
                                        <th>Images</th>
                                        <th>Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr data-id="1" style="cursor: pointer;">
                                            <td data-field="name">{{$product->title}}</td>
                                            @if($product->status == 0)
                                                <td data-field="gender">Inactive</td>
                                            @endif
                                            @if($product->status == 1)
                                                <td data-field="gender">Сheck</td>
                                            @endif
                                            @if($product->status == 2)
                                                <td data-field="gender">Active</td>
                                            @endif
                                            @if($product->active == 0)
                                                <td data-field="gender" class="text-danger">NO</td>
                                            @endif
                                            @if($product->active == 1)
                                                <td data-field="gender" class="text-success">YES</td>
                                            @endif
                                            <td style="width: 100px">
                                                <a href="{{ route('store.product.active', $store->id) }}}" class="btn btn-outline-info waves-effect">Activate/Deactivate</a>
                                            </td>
                                            <td style="width: 100px">
                                                <a href="{{ route('store.product.image.index', $product->id) }}" class="btn btn-outline-success waves-effect">See</a>
                                            </td>
                                            <td style="width: 100px">
                                                <a href="{{ route('store.product.edit', $product->id) }}"
                                                   class="btn btn-outline-primary waves-effect">Edit</a>
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
