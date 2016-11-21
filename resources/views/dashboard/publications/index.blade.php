@extends('dashboard.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{title_case(trans_choice('dashboard.'.str_singular($type), 2))}}</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-{{session('status')}}">
                                <p>{!! session('msg') !!}</p>
                            </div>
                        @endif
                        @if(count($Publications) > 0)
                            @foreach($Publications as $publication)
                                <div class="media">
                                    <div class="media-left">
                                        <a href="{{$publication['image_path']}}" data-toggle="lightbox">
                                            <img class="img-fluid" src="{{$publication['image_path']}}" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{$publication['title_' . getLangRU_EN('locale_back')]}}</h4>
                                        {!! mb_strimwidth(strip_tags($publication['article_' . getLangRU_EN('locale_back')]), 0, 100, '...') !!}

                                    </div>
                                    <div class="media-right">
                                        <a href="{{route('dashboard.'. $type .'.update')}}/{{$publication['id']}}" class="btn btn-info">
                                            @lang('dashboard.buttons.edit')
                                        </a>
                                        <form action="{{route('dashboard.'. $type .'.publish')}}" method="post">
                                            <input type="hidden" name="id" value="{{$publication['id']}}">
                                            {{csrf_field()}}
                                            <button type="submit" class="btn btn-info">{{$publication['published'] ? trans('dashboard.buttons.unpublish') : trans('dashboard.buttons.publish')}}</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach

                        @else
                            <h2>@lang('dashboard.noitems')</h2>
                        @endif
                    </div>
                    <div class="panel-footer">
                        <a href="{{route('dashboard.'. $type .'.create')}}" class="btn btn-primary">@lang('dashboard.buttons.new')</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            {{ $Publications->links() }}
        </div>
    </div>
@endsection