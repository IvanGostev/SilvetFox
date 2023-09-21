@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner m-top-20" style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Add Images</h2>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="color: black!important;">Images @if($countImages < 3)
                                    <a href="{{ route('store.product.image.create', $product->id) }}"
                                       class="btn" style="background-color: #ee7926; color: white!important;" >Create</a>
                                @endif
                            </h4>

                            <div class="table-responsive">
                                <table class="table table-editable table-nowrap align-middle table-edits">
                                    <thead>
                                    <tr style="cursor: pointer;">
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $image)
                                        <tr data-id="1" style="cursor: pointer;">
                                            <td ><img width="150px" src="{{ asset('storage/' . $image->img) }}"></td>
                                            <td style="width: 100px">
                                                <form action="{{ route('store.product.image.destroy', $image->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn" style="background-color: #ee7926; color: white" >Delete</button>
                                                </form>
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
