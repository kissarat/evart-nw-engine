@extends('public.articles.article')

@section('article-title', trans('front/career/safety.title'))
@section('path', trans('front/navigation.career.title'))
@section('image-url', '/assets_front/img/slider/1.jpg')')

@section('article')
    <div class="col-xs-12">
        <p>@lang('front/career/safety.content.article.1')</p>
        <p>@lang('front/career/safety.content.article.2')</p>
        <p><strong>@lang('front/career/safety.content.article.3')</strong></p>
        <p>@lang('front/career/safety.content.article.4')</p>
        <p>@lang('front/career/safety.content.article.5')</p>
        <p>@lang('front/career/safety.content.article.6')</p>
    </div>
@endsection

