@extends('layouts.mainNew')
@section('content')
    <!-- Banner Start -->
    <section class="page-banner" style="background-color: rgb(49,96,216);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="round-shape"></span>
                    <h2 class="banner-title">News</h2>
                    <div class="bread-crumb"><a href="/">Home / News</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Blog Section Start -->
    <section class="blog-section" style="background-color: #2d3037;">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-5">
                    <div class="blog-sidebar bs-left">
                        <aside class="widget">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('news.main.category', $category->id) }}">{{$category->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-10 col-md-7">
                    <div class="row">
                        <div class="wrp">

                            <article class="static">

                                <div class="news-list row">
                                    @foreach($posts as $post)
                                        <div class="col-xs-6 col-sm-3 col-md-3 mb-3" style="max-height: 520px;">
                                            <div class="news-item">
                                                <a class="image " href="{{route('news.main.show', $post->id)}}">
                                                    <div class="labels">
                                                    </div>

                                                    <img src="{{ asset('storage/' . $post->img) }}" alt="">
                                                </a>
                                                <div class="news-item-content">
                                                    <div class="name">
                                                        <a href="http://qsw7iurcrdwyml5kg4oxbmtqrcnpxiag3iumdarefzeunnyc2dnyljad.onion/news/8">{{$post->title}}</a>
                                                    </div>
                                                    <div class="description" style="max-height: 300px;

    overflow: hidden;  text-overflow: ellipsis">{{$post->content}}</div>

                                                    <div class="date">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                             fill="currentColor" class="bi bi-clock"
                                                             viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                                            <path
                                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                                        </svg> &nbsp; {{$post->created_at}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                            </article>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection
