@extends('public.master')

@section('body-class', 'side-filter--active')
@section('article.title', $Publication['title_'. getLangRU_EN()])
@section('keywords', $Publication['keywords'])

@section('og.image', asset($Publication['image_path']))
@section('og.description', $Publication['title_'. getLangRU_EN()])

@section('content')
    <section id="{{$Publication['type']}}" class="article">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <header>
                        <a href="#">{{trans('front/news.'.$Publication['type'])}}</a>
                        <h1>{{$Publication['title_'. getLangRU_EN()]}}</h1>
                        <div class="description">
                            <time>{{dateparse_format($Publication['updated_at'])}}</time>
                            <span>@lang('front/news.by') {{title_case($Publication->user->name)}}</span>
                            <span>@lang('front/news.published') {{dateparse_timeAgo($Publication['updated_at'])}}</span>
                        </div>
                    </header>
                </div>
            </div>
        </div>
        <article class="side-filter--active">
            <div class="container">
                <div class="row">
                    {!! $Publication['article_'. getLangRU_EN()] !!}
                </div>
            </div>

        </article>
        <footer class="side-filter--active">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <span>Share</span>
                        <<a href="http://www.facebook.com/sharer/sharer.php?u={{URL::current()}}" target="_blank"><i class="icon icon-facebook"></i></a>
                        <a href="javascript:void(0);"><i class="icon icon-twitter"></i></a>
                        <a href="http://vk.com/share.php?url={{URL::current()}}" target="_blank"><i class="icon icon-vk"></i></a>
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
                        <li><a href="/">Evart Network</a></li>
                        <li class="active"><a href="#">{{ str_width($Publication['title_'. getLangRU_EN()], 50) }}</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://www.facebook.com/sharer/sharer.php?u={{URL::current()}}" target="_blank"><i class="icon icon-facebook"></i></a></li>
                        <li><a href="javascript:void(0);"><i class="icon icon-twitter"></i></a></li>
                        <li><a href="http://vk.com/share.php?url={{URL::current()}}" target="_blank"><i class="icon icon-vk"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection