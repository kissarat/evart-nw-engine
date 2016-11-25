@extends('public.articles.article')

@section('article-title', trans('front/network/box.title'))
@section('path', trans('front/navigation.network.title'))
@section('image-url', asset('assets_front/img/slider/1.jpg'))
@section('og.image', asset('assets_front/img/slider/1.jpg'))
@section('og.description', trans('front/network/box.content.header') ?? trans('front/network/box.content.article.1'))

@section('article')
    <div class="row">
        <div class="col-md-10">
            <div class="header">@lang('front/network/box.content.header')</div>
        </div>
    </div>

    <div class="col-xs-12">
        <p>@lang('front/network/box.content.article.1')</p>
        <p>@lang('front/network/box.content.article.2')</p>
        <h2 class="type-one">@lang('front/network/box.content.article.3')</h2>
        <ul>
            <li>@lang('front/network/box.content.article.4')</li>
            <li>@lang('front/network/box.content.article.5')</li>
            <li>@lang('front/network/box.content.article.6')</li>
        </ul>
        <p>@lang('front/network/box.content.article.7')</p>
    </div>
@endsection

