 @extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner m-top-20" style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Create product</h2>
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
                            <h4 class="card-title" style="color: #000!important;">Create product</h4>
                            <p style="text-transform: uppercase; color: red" >All fields are required!</p>
                            <form class="needs-validation" novalidate="" method="post" enctype="multipart/form-data"
                                  action="{{ route('store.product.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">Title</label>
                                            <input type="text" class="form-control" id="validationCustom01"
                                                   placeholder="Title" required="" name="title"
                                                   >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom02">Image</label>
                                            <input type="file" class="form-control" id="validationCustom02" required=""
                                                   name="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom02">Video</label>
                                        <input type="file" class="form-control" id="validationCustom02" required=""
                                               name="video">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">Select the regions to which you are delivering the goods</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="africa" id="inlineCheckbox1">
                                                <label class="form-check-label" for="inlineCheckbox1">Africa</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="north_america">
                                                <label class="form-check-label" for="inlineCheckbox2">North America</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="caribbean">
                                                <label class="form-check-label" for="inlineCheckbox2">Latin America and the Caribbean</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="asia">
                                                <label class="form-check-label" for="inlineCheckbox2">Asia</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="australia">
                                                <label class="form-check-label" for="inlineCheckbox2">Australia and Oceania</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="europe">
                                                <label class="form-check-label" for="inlineCheckbox2">Europe</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="russia">
                                                <label class="form-check-label" for="inlineCheckbox2">Russia</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <div>
                                            <textarea required="" name="description" class="form-control"
                                                      rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">XMR</label>
                                            <input type="number" class="form-control" id="validationCustom01"
                                                   placeholder="XMR" required="" value=""
                                                   name="price">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">$</label>
                                            <input type="number" class="form-control" id="validationCustom01"
                                                   placeholder="$" required="" value=""
                                                   name="dollars">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationCustom01">Category</label>
                                            <input type="text" hidden="hidden" name="category_id" value="{{$store->category_id}}">
                                                @foreach($categories as $category)
                                                    @if($store->category_id == $category->id)
                                                    <p class="form-p" for="validationCustom01">{{$category->title}}</p>
                                                    @endif
                                                @endforeach
                                        </div>
                                    </div>
                                </div>
                                <input name="store_id" value="{{$store->id}}" hidden="hidden">
                                <button class="btn" style="background-color: #ee7926; color: white"  type="submit">Create</button>
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
