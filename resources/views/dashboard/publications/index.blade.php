@extends('dashboard.master')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Blog</div>

                        <div class="panel-body">
                            @if (session('status'))
                                    <div class="alert alert-{{session('status')}}">
                                        <p>{!! session('msg') !!}</p>
                                    </div>
                            @endif

                            @if(count($News) > 0)
                                    @foreach($News as $article)
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">{{$article['title']}}</h4>
                                                {!! mb_strimwidth(strip_tags($article['article_ru']), 0, 97, '...') !!}

                                            </div>
                                            <div class="media-right"> <a href="#"> <a href="{{route('dashboard.publications.update')}}/{{$article['id']}}" class="btn btn-info">Edit</a></a> </div>
                                        </div>
                                    @endforeach

                            @else
                                <h2>Nothing to show.</h2>
                            @endif
                        </div>
                        <div class="panel-footer">
                            <a href="{{route('dashboard.publications.create')}}" class="btn btn-primary">Create new</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                {{ $News->links() }}
            </div>
        </div>
@endsection