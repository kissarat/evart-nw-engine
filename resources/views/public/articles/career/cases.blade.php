@extends('public.master')


@section('content')
    <section id="cases" style="margin-top: 0px; padding-top: 50px">
        <div class="container">
            <div class="row text-center">
                <header style="display: inline-block; text-align: center;">
                    <h2 style="margin-bottom: 10px; color: #e4e5e6;  font-size: 30px; font-family: OpenSans Condensed Light, sans-serif;">@lang('front/cases.choose')</h2>
                    <hr>
                </header>
            </div>
            <div class="row">
                @each('public.indexPartials.case', $cases, 'case')
            </div>

        </div>
    </section>
@endsection

