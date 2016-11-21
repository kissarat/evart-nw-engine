@extends('dashboard.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('dashboard.dashboard')</div>

                <div class="panel-body">
                    <h4>@lang('dashboard.welcome.welcome') {{title_case(Auth::user()->name)}}</h4>
                    <p>@lang('dashboard.welcome.logged')!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
