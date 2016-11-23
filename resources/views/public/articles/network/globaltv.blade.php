@extends('public.articles.article')

@section('article-title', trans('front/network/globaltv.title'))
@section('path', trans('front/navigation.network.title'))
@section('image-url', '/assets_front/img/slider/1.jpg')

@section('article')
    <div class="row">
        <div class="col-md-10">
            <div class="header">
                @lang('front/network/globaltv.content.header')
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <p>
            @lang('front/network/globaltv.content.article.1')
        </p>
        <p>
            @lang('front/network/globaltv.content.article.2')
        </p>
        <ul>
            <li>@lang('front/network/globaltv.content.article.3')</li>
            <li>@lang('front/network/globaltv.content.article.4')</li>
            <li>@lang('front/network/globaltv.content.article.5')</li>
        </ul>
        <p>@lang('front/network/globaltv.content.article.6')</p>
        <p>@lang('front/network/globaltv.content.article.7')</p>
        <p>@lang('front/network/globaltv.content.article.8')</p>
        <p>@lang('front/network/globaltv.content.article.9')</p>
        <p>@lang('front/network/globaltv.content.article.10')</p>
        <p>@lang('front/network/globaltv.content.article.11')</p>
        <p><strong>@lang('front/network/globaltv.content.article.12').</strong></p>
    </div>
@endsection
