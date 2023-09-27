@extends('layouts.main')
@section('content')
    <section class="page-banner " style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">Profile</h2>
                    <div class="bread-crumb"><a href="/">Home / Profile</a> </div>
                </div>
            </div>
        </div>
    </section>

    <section class="h-100"
             style="background-color: #2d3037;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row"
                             style="background-color: #2d3037; height:200px;">
                            <div class="ms-4 mt-1 d-flex flex-column" style="width: 150px;">
                                <img src="{{ asset('storage/' . $user->img) }}"
                                     alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                                     style="width: 150px; height: 165px; z-index: 1">
                            </div>
                            <div class="ms-3 " style="margin-top: 130px;">
                                <h5 style='color: white ;'>{{$user->name}}</h5>
                                <div class="d-flex">
                                    @if($user->id != auth()->user()->id)
                                        <div style="margin-right: 5px;" >
                                            <a href="{{ route('profile.chat.show', $user->id) }}" class="btn" style="background-color: #ee7926">Chat</a>
                                        </div>
                                    @endif
                                    @if($user->role == 1)
                                        <div class="">
                                            <a href="{{ route('market.category.storeProduct', $user->store->id) }}" class="btn" style="background-color: #ee7926">Seller's goods</a>
                                        </div>
                                    @endif
                                </div>

                            </div>

                        </div>
                        <div class="card-body p-4 text-black">
                            <div class="mb-5">
                                <p class="lead fw-normal mb-1">PGP key</p>
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    <p class="font-italic mb-1">{{$user->description}}</p>
{{--                                    <p class="font-italic mb-1">PGP key</p>--}}
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
            background: -webkit-linear-gradient(90deg, #cc7a5a, #914865, #382e55);
            background: linear-gradient(90deg, #cc7a5a, #914865, #382e55);
        }
    </style>
@endsection
