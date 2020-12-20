@extends('layouts.app')
@section('title', 'Edit Art News')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-pencil"></i>
            </div>
            <div class="header-title">
                <h1>Edit Art News</h1>
                <small>Edit Art News</small>
            </div>
        </section>
        @if (Session::has('flash_message_error'))
            <div class="alert alert-sm alert-danger alert-block" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif

        @if (Session::has('flash_message_success'))
            <div class="alert alert-sm alert-success alert-block" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group" id="buttonlist">
                                <a class="btn btn-add " href="{{ url('admin/view/news') }}">
                                    <i class="fa fa-eye"></i> View Art News </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-8" action="{{ url('/admin/update/this/news/' . $categoryDetails->id) }}"
                                method="post" enctype="multipart/form-data"> {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->heading }}"
                                        name="heading" id="heading" required>
                                </div>
                                <div class="form-group" style="width: 95%">
                                    <label>Description (Optional)</label>
                                    <textarea name="description" id="froala-editor" class="form-control" rows="20">
                                    {{ $categoryDetails->description }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Picture upload (Optional)</label>
                                    <input type="file" name="image">
                                    <input type="hidden" name="current_image" value="{{ $categoryDetails->image }}">
                                    @if (!empty($categoryDetails->image))
                                        <img style="width:100px;margin-top:10px;"
                                            src="{{ asset('/uploads/news/' . $categoryDetails->image) }}">
                                    @endif
                                </div>
                                <div class="reset-button">
                                    <input type="submit" class="btn btn-success" value="Update News">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });

    </script>
@endsection
