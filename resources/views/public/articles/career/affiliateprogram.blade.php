@extends('public.articles.article')

@section('article-title', trans('front/career/affiliateprogram.title'))
@section('path', trans('front/navigation.career.title'))
@section('image-url', '/assets_front/img/slider/1.jpg')

@section('article')
    <div class="row">
        <div class="col-md-10">
            <div class="header">
                @lang('front/career/affiliateprogram.content.header')
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <h2 class="type-one">@lang('front/career/marketing.content.article.1')</h2>
        <figure>
            <img src="/assets_front/img/lines.png" class="original-width" alt="@lang('front/navigation.career.title')">
        </figure>
    </div>
@endsection

