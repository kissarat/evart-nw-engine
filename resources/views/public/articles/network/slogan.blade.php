@extends('public.articles.article')

@section('article-title', trans('front/network/slogan.title'))
@section('path', trans('front/navigation.network.title'))
@section('image-url', '/assets_front/img/slider/1.jpg')

@section('article')
    <div class="row">
        <div class="col-md-10">
            <div class="header">
                @lang('front/network/slogan.content.header')
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <h2 class="type-one">@lang('front/network/slogan.content.article.1')</h2>
        <p>@lang('front/network/slogan.content.article.2')</p>
        <p>@lang('front/network/slogan.content.article.3')</p>
        <p>@lang('front/network/slogan.content.article.4')</p>
        <h2 class="type-one">@lang('front/network/slogan.content.article.5')</h2>
        <p>@lang('front/network/slogan.content.article.6')</p>
        <p>@lang('front/network/slogan.content.article.7')</p>
        <h2 class="type-one">@lang('front/network/slogan.content.article.8')</h2>
        <p>@lang('front/network/slogan.content.article.9')</p>
        <p>@lang('front/network/slogan.content.article.10')</p>
        <p><strong>@lang('front/network/slogan.content.article.11')</strong></p>
        <blockquote>
            <p>@lang('front/network/slogan.content.article.12')</p>
            <cite>@lang('front/network/slogan.content.article.13')</cite>
        </blockquote>
    </div>
@endsection

