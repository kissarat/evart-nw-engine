@extends('public.master')

@section('body-class', 'side-filter--active')

@section('content')

    @include('public.indexPartials.header')

    @include('public.indexPartials.partners')

    @include('public.indexPartials.join')

    @include('public.indexPartials.presentation')

    @include('public.indexPartials.cases')

    @include('public.indexPartials.blog')

@endsection