@extends('public.master')

@section('body-class', 'side-filter--active')

@section('content')
    <section id="news" class="article">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <header>
                        <a href="#">NEWS</a>
                        <h1>{{$Publication['title']}}</h1>
                        <div class="description">
                            <time>06 Sep 2016</time>
                            <span>By Gary Manson</span>
                            <span>Read in 4 minutes</span>
                        </div>
                    </header>
                </div>
            </div>
        </div>
        <article class="side-filter--active">
            <div class="container">
                <div class="row">
                    {!! $Publication['article_'. (Cookie::get('locale_front') == 'ru' ? 'ru' : 'en')] !!}
                </div>
            </div>

        </article>
        <footer class="side-filter--active">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <span>Share</span>
                        <a href="#"><i class="icon icon-facebook"></i></a>
                        <a href="#"><i class="icon icon-twitter"></i></a>
                        <a href="#"><i class="icon icon-vk"></i></a>
                    </div>
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
                        <li><a href="#">Evart Network</a></li>
                        <li class="active"><a href="#">Success philosophy</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="icon icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon icon-vk"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection