@extends('public.articles.article')

@section('article-title', trans('front/career/statuses.title'))
@section('path', trans('front/navigation.career.title'))
@section('image-url', '/assets_front/img/slider/1.jpg')

@section('article')
    <div class="col-xs-12">
        <figure>
            <img src="/assets_front/img/status.png" alt="@lang('front/career/statuses.title')">
        </figure>
    </div>
@endsection

