@extends('public.articles.article')

@section('article-title', trans('front/career/marketing.title'))
@section('path', trans('front/navigation.career.title'))
@section('image-url', '/assets_front/img/slider/1.jpg')

@section('article')
    <div class="row">
        <div class="col-md-10">
            <div class="header">
                @lang('front/career/marketing.content.header')
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <h2 class="type-one">@lang('front/career/marketing.content.article.1')</h2>
        <ul>
            <li>@lang('front/career/marketing.content.article.2', ['link' => route('front.network.globaltv')])</li>
            <li>@lang('front/career/marketing.content.article.3', ['link' => route('front.network.box')])</li>
            <li>@lang('front/career/marketing.content.article.4')</li>
            <li>@lang('front/career/marketing.content.article.5')</li>
        </ul>

        <p>@lang('front/career/marketing.content.article.6')</p>
        <p>@lang('front/career/marketing.content.article.7')</p>
        <p>@lang('front/career/marketing.content.article.8')</p>
        <p>@lang('front/career/marketing.content.article.9')</p>
        <p>@lang('front/career/marketing.content.article.10', ['link' => route('front.career.cases')])</p>
    </div>
@endsection

