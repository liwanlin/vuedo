@extends('themes.clean-blog.layouts.default')

@section('header')
    <header class="intro-header" style="background-image: url({{ $post->image_url or 'http://lorempixel.com/400/200'}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{$post->title}}</h1>
                        <h2 class="subheading">{{$post->description}}</h2>
                        <span class="meta">Posted by <a href="#">{{$post->owner->name}}</a> {{$post->moderated_at->diffForHumans()}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

@endsection

@section('content')
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {!! ParsedownExtra::instance()->parse($post->content) !!}
                </div>
            </div>
        </div>
    </article>
@endsection

@section('sidebar')
    <div class="col-lg-4 col-lg-offset-0 col-md-2 col-md-offset-0">
        有梦想的青年在路上不从不寂寞！
    </div>
@endsection