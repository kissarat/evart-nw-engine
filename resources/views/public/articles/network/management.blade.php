@extends('public.articles.article')

@section('article-title', trans('front/network/management.title'))
@section('path', trans('front/navigation.network.title'))
@section('image-url', '/assets_front/img/slider/1.jpg')

@section('article')
    <div class="row">
        <div class="col-md-10">
            <div class="header">
               @lang('front/network/management.content.header')
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <p>@lang('front/network/management.content.article.1')</p>
        <p>@lang('front/network/management.content.article.2')</p>
        <p>@lang('front/network/management.content.article.3')</p>
        <p>@lang('front/network/management.content.article.4')</p>
    </div>
@endsection

