@extends('public.master')

@section('body-class', 'side-filter--active')

@section('content')
    @include('public.indexPartials.blog', ['mb' => true])
    <div class="container">
        <div class="text-center">
            {{ $Publications->links() }}
        </div>
    </div>

@endsection