@extends('dashboard.master')
@section('scripts')
    <script src="{{asset('assets/editor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('assets/js/publications.js')}}"></script>
@endsection

@section('content')
    <script> var lang = '{{getLangRU_EN('locale_back')}}'</script>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('dashboard.buttons.create') {{trans_choice('dashboard.'.str_singular($type), 1)}}</div>

                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{ isset($Item) ? route('dashboard.'. str_plural($type) .'.update') : route('dashboard.' . str_plural($type) . '.create')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @if(isset($Item))
                                <input type="hidden" name="id" value="{{$Item['id']}}">
                            @endif

                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                            <div class="form-group">
                                <label for="title">Русский заголовок</label>
                                <input type="text" class="form-control" id="title_ru" name="title_ru" placeholder="Введите русский заголовок"
                                       value="@if(isset($Item)){{$Item['title_ru']}}@else{{old('title_ru') }}@endif">
                            </div>
                            <div class="form-group">
                                <label for="title">English title</label>
                                <input type="text" class="form-control" id="title_en" name="title_en" placeholder="Enter english title"
                                       value="@if(isset($Item)){{$Item['title_en']}}@else{{old('title_en') }}@endif">
                            </div>
                            <div class="form-group">
                                <label for="tags">@lang('dashboard.keywords')</label>
                                <input type="text" class="form-control" id="tags" name="tags" placeholder="evarnetwork evart" data-role="tagsinput"
                                       value="@if(isset($Item)){{$Item['keywords']}}@else{{old('tags') }}@endif">
                            </div>
                            <div class="form-group">
                                <label for="image">@lang('dashboard.item.image')</label>
                                <input type="file" id="image" name="image">
                                <p class="help-block">@lang('dashboard.item.description', ['formats' => 'JPG', 'size' => 400])</p>
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#imagePreview">
                                    @lang('dashboard.item.preview')
                                </button>
                            </div>
                            <div class="form-group">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li role="presentation" class="active"><a href="#ru" aria-controls="ru" role="tab" data-toggle="tab">Русский вариант</a></li>
                                    <li role="presentation"><a href="#en" aria-controls="en" role="tab" data-toggle="tab">English variant</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="ru">
                                                <textarea class="form-control contentEdit" id="article_ru" name="article_ru">
                                                    @if(isset($Item)){{$Item['article_ru']}}@else{{old('article_ru') }}@endif
                                                </textarea>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="en">
                                                <textarea class="form-control contentEdit" id="article_en" name="article_en">
                                                    @if(isset($Item)){{$Item['article_en']}}@else{{old('article_en') }}@endif
                                                </textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default">{{ isset($Item) ? trans('dashboard.buttons.update') : trans('dashboard.buttons.create')}}</button>
                            @if(isset($Item))
                                <input type="submit" class="btn btn-danger pull-right" form="deleteForm" value="@lang('dashboard.buttons.delete')" />
                            @endif
                        </form>
                        @if(isset($Item))
                            <form id="deleteForm" action="{{route('dashboard.' . str_plural($type) . '.delete')}}" method="post" style="display: none">
                                <input type="hidden" name="id" value="{{$Item['id']}}">
                                {{csrf_field()}}
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="imagePreview" tabindex="-1" role="dialog" aria-labelledby="imagePreview">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img id="imagePreviewSrc" src="@if(isset($Item)){{$Item['image_path']}}@endif" alt="Background image preview" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
@endsection