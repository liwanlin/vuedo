@extends('themes.clean-blog.layouts.default')

@section("header")
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>H&E</h1>
                        <hr class="small">
                        <span class="subheading">无论工作还是旅行，于我，都是生活!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="col-lg-8 col-lg-offset-0 col-md-10 col-md-offset-0">
        @include('themes.clean-blog.partials.posts-list', $posts)
    </div>
@endsection

@section('sidebar')
    <div class="col-lg-4 col-lg-offset-0 col-md-2 col-md-offset-0">
        有梦想的青年在路上不从不寂寞！
    </div>
@endsection