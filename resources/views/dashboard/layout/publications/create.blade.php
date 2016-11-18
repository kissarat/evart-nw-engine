@extends('dashboard.master')

@section('scripts')
    <script src="{{asset('assets/editor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('assets/js/publications.js')}}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create {{str_singular($type)}}</div>

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
                        <form method="post" action="{{ isset($Item) ? route('dashboard.'. $type .'.update') : route('dashboard.' . $type . '.create')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @if(isset($Item))
                                <input type="hidden" name="id" value="{{$Item['id']}}">
                            @endif

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="One good title" value="@if(isset($Item)){{$Item['title']}}@endif">
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <input type="text" class="form-control" id="tags" name="tags" placeholder="evarnetwork evart" data-role="tagsinput" value="@if(isset($Item)){{$Item['keywords']}}@endif">
                            </div>
                            <div class="form-group">
                                <label for="image">Background image</label>
                                <input type="file" id="image" name="image">
                                <p class="help-block">only JPG and less than 400KB</p>
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#imagePreview">
                                    Preview
                                </button>
                            </div>
                            <div class="form-group">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li role="presentation" class="active"><a href="#ru" aria-controls="ru" role="tab" data-toggle="tab">Ru</a></li>
                                    <li role="presentation"><a href="#en" aria-controls="en" role="tab" data-toggle="tab">En</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="ru">
                                                <textarea class="form-control contentEdit" id="article_ru" name="article_ru">
                                                    @if(isset($Item)){{$Item['article_ru']}}@endif
                                                </textarea>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="en">
                                                <textarea class="form-control contentEdit" id="article_en" name="article_en">
                                                    @if(isset($Item)){{$Item['article_en']}}@endif
                                                </textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default">{{ isset($Item) ? "Update" : "Create"}}</button>
                            @if(isset($Item))
                                <input type="submit" class="btn btn-danger pull-right" form="deleteForm" value="Delete" />
                            @endif
                        </form>
                        @if(isset($Item))
                            <form id="deleteForm" action="{{route('dashboard.' . $type . '.delete')}}" method="post" style="display: none">
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