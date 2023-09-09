@extends('layouts.main')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">News</h2>
                    <div class="bread-crumb"><a href="/">Home</a> / News</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Blog Section Start -->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog-sidebar bs-left">
                        <aside class="widget">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="{{ route('news.main.category', $category->id) }}">{{$category->title}}</a></li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-lg-6">
                                <div class="single-news">
                                    <div class="news-thumb">
                                        <img src="{{ asset('storage/' . $post->img)}}" alt="">
                                    </div>
                                    <div class="news-details">
                                        <span class="post-meta">By<a href="#"> Admin</a>, {{$post->created_at}}</span>
                                        <h4>
                                            <a href="{{ route('news.main.show', $post->id) }}">
                                                {{$post->title}}
                                            </a>
                                        </h4>
                                        <a class="read-more" href="{{route('news.main.show', $post->id)}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
{{--                    <div class="row m-top-20">--}}
{{--                        <div class="col-lg-12 text-center">--}}
{{--                            <a href="#" class="goru-btn">view more</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection
