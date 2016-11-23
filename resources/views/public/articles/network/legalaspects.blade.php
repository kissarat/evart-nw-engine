@extends('public.articles.article')

@section('article-title', trans('front/network/legalaspects.title'))
@section('path', trans('front/navigation.network.title'))
@section('image-url', '/assets_front/img/slider/1.jpg')

@section('article')
    <div class="row">
        <div class="col-md-10">
            <div class="header">
                @lang('front/network/legalaspects.content.header')
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <p>@lang('front/network/legalaspects.content.article.1')</p>
        <p>@lang('front/network/legalaspects.content.article.2')</p>
        <p>@lang('front/network/legalaspects.content.article.3')</p>
    </div>
@endsection

