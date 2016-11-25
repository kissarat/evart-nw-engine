@extends('public.articles.article')

@section('article-title', trans('front/network/philosophy.title'))
@section('path', trans('front/navigation.network.title'))
@section('image-url', asset('assets_front/img/slider/1.jpg'))
@section('og.image', asset('assets_front/img/slider/1.jpg'))
@section('og.description', trans('front/network/philosophy.content.header') ?? trans('front/network/philosophy.content.article.1'))


@section('article')
    <div class="row">
        <div class="col-md-10">
            <div class="header">
                @lang('front/network/philosophy.content.header')
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <p>@lang('front/network/philosophy.content.article.1')</p>
        <ul>
            <li>@lang('front/network/philosophy.content.article.2')</li>
            <li>@lang('front/network/philosophy.content.article.3')</li>
            <li>@lang('front/network/philosophy.content.article.4')</li>
            <li>@lang('front/network/philosophy.content.article.5')</li>
        </ul>
        <h2 class="type-two">@lang('front/network/philosophy.content.article.6')</h2>
        <p>@lang('front/network/philosophy.content.article.7')</p>
        <p>@lang('front/network/philosophy.content.article.8')</p>
        <p>@lang('front/network/philosophy.content.article.9'):</p>
        <ul>
            <li>@lang('front/network/philosophy.content.article.10')</li>
            <li>@lang('front/network/philosophy.content.article.11')</li>
            <li>@lang('front/network/philosophy.content.article.12')</li>
        </ul>

        <p>@lang('front/network/philosophy.content.article.13')</p>
        <p>@lang('front/network/philosophy.content.article.14')</p>
        <p>@lang('front/network/philosophy.content.article.15')</p>
        <p>@lang('front/network/philosophy.content.article.16')</p>
        <p>@lang('front/network/philosophy.content.article.17')</p>
        <p>@lang('front/network/philosophy.content.article.18')</p>
        <p>@lang('front/network/philosophy.content.article.19')</p>
        <p>@lang('front/network/philosophy.content.article.20')</p>
        <p>@lang('front/network/philosophy.content.article.21')</p>
        <p><strong>@lang('front/network/philosophy.content.article.22')</strong></p>
    </div>
@endsection

