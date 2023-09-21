@extends('layouts.main')
@section('content')
    <section class="page-banner"  style="background-color: rgb(49,96,216);">
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
    <section class="blog-details-section" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-blog">
                        <div class="blog-thumb">
                            <img src="{{ asset('storage/' . $post->img) }}" alt="">
                        </div>
                        <div class="blog-post-meta">
                            <span><img src="{{ asset('storage/' . $user->img) }}" alt="">By <a href="{{ route('profile.main.show', $user->id) }}">{{$user->name}}</a> </span>
                            <span class="cate"><a href="#">{{$post->category->title}}</a></span>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="blog-content">
                                    <h3 class="blog-title">
                                       {{$post->title}}
                                    </h3>
                                    <p>
                                   {{$post->content}}
                                    </p>
                                </div>
                                <div class="comment-area">
                                    <h4 class="comment-title">COMMENT: <span>{{$countComments}}</span></h4>
                                    <ol class="comment-list">
                                        @foreach($post->comments as $comment)
                                            <li>
                                                <div class="single-comment">
                                                    <img src="{{ asset('storage/' . $comment->user->img) }}" alt="">
                                                    <h5><a href="{{ route('profile.main.show', $comment->user->id) }}">{{$comment->user->name}}</a><span>{{$comment->created_at}}</span></h5>
                                                    <div class="comment">
                                                        <p>
                                                             {{$comment->message}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ol>
                                    <div class="comment-form-wrapper">
                                        <h5>LEAVE A COMMENT</h5>
                                        <form action="{{ route('news.comment.store') }}" method="post" class="row comment-form">
                                            @csrf
                                            <div class="col-lg-12 col-md-12">
                                                <textarea name="message" placeholder="Your message"></textarea>
                                            </div>
                                            <input type="text" name="user_id" hidden="hidden" value="{{auth()->user()->id}}" >
                                            <input type="text" name="post_id" hidden="hidden" value="{{$post->id}}" >
                                            <div class="col-lg-12 col-md-12">
                                                <input  class="btn" style="background-color: #ee7926;" type="submit" name="submit" >
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
