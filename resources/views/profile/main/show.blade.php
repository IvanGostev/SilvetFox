@extends('layouts.main')
@section('content')
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Profile</h2>
                    <div class="bread-crumb"><a href="/">Home</a> / Profile</div>
                </div>
            </div>
        </div>
    </section>

    <section class="h-100 gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="{{ asset('storage/' . $user->img) }}"
                                     alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                     style="width: 150px; z-index: 1">
                            </div>
                            <div class="ms-3" style="margin-top: 130px;">
                                <h5>{{$user->name}}</h5>
                            </div>
                        </div>
                        <div class="card-body p-4 text-black">
                            <div class="mb-5">
                                <p class="lead fw-normal mb-1">About</p>
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    <p class="font-italic mb-1">{{$user->description}}</p>
                                    <p class="font-italic mb-1">PGP key</p>
                                    <p class="font-italic mb-1">{{$user->pgp_key}}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>
    .gradient-custom-2 {
        /* fallback for old browsers */
        background: -webkit-linear-gradient(90deg, #cc7a5a,#914865,#382e55);background: linear-gradient(90deg, #cc7a5a,#914865,#382e55);
    }
</style>
@endsection
