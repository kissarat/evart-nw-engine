@extends('public.master')

@section('body-class', 'side-filter--active')

@section('content')
    @include('public.indexPartials.blog', ['mb' => true])
    {{ $Publications->links() }}
@endsection