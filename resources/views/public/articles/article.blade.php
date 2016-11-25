@extends('public.master')

@section('body-class', 'side-filter--active')

@section('og.title')@yield('article-title')@endsection

@section('content')
<section id="article" class="article">
    <header>
        <div class="img-wrapper">
            <img src="@yield('image-url')" alt="@yield('article-title')">
        </div>
        <div class="container flex">
            <h1>@yield('article-title')</h1>
        </div>

    </header>
    <article class="container">
        @yield('article')
    </article>
    <footer>
        <div class="container">
            <div class="col-xs-12">
                <span>Share</span>
                <a href="http://www.facebook.com/sharer/sharer.php?u={{URL::current()}}" target="_blank"><i class="icon icon-facebook"></i></a>
                <a href="javascript:void(0);"><i class="icon icon-twitter"></i></a>
                <a href="http://vk.com/share.php?url={{URL::current()}}" target="_blank"><i class="icon icon-vk"></i></a>
            </div>
        </div>
    </footer>
</section>
@endsection

@section('after-main')
    <section id="floatHeader">
        <div class="container">
            <div class="row">
                <div class="navbar" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/"><img src="/assets_front/img/logo.png" alt="Evart Network"></a>
                    </div>
                    <ul class="nav navbar-nav navbar-left breadcrumbs">
                        <li><a href="#">@yield('path')</a></li>
                        <li class="active"><a href="{{URL::current()}}">@yield('article-title')</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <a href="http://www.facebook.com/sharer/sharer.php?u={{URL::current()}}" target="_blank"><i class="icon icon-facebook"></i></a></li>
                        <li><a href="javascript:void(0);"><i class="icon icon-twitter"></i></a></li>
                        <li><a href="http://vk.com/share.php?url={{URL::current()}}" target="_blank"><i class="icon icon-vk"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection