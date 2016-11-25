@extends('public.articles.article')

@section('article-title', trans('front/career/statuses.title'))
@section('path', trans('front/navigation.career.title'))
@section('image-url', asset('assets_front/img/slider/1.jpg'))
@section('og.image', asset('assets_front/img/slider/1.jpg'))
@section('og.description', trans('front/career/statuses.content.header') ?? trans('front/career/statuses.content.article.1'))

@section('article')
    <div class="col-xs-12">
        <figure>
            <img src="/assets_front/img/status.png" alt="@lang('front/career/statuses.title')">
        </figure>
    </div>
@endsection

