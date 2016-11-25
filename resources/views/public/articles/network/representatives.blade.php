@extends('public.articles.article')

@section('article-title', trans('front/network/representatives.title'))
@section('path', trans('front/navigation.network.title'))
@section('image-url', asset('assets_front/img/slider/1.jpg'))
@section('og.image', asset('assets_front/img/slider/1.jpg'))
@section('og.description', trans('front/network/representatives.content.header') ?? trans('front/network/representatives.content.article.1'))

@section('article')
    <div class="row">
        <div class="col-md-10">
            <div class="header">
                @lang('front/network/representatives.content.header')
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <p>@lang('front/network/representatives.content.article.1')</p>
    </div>
@endsection

