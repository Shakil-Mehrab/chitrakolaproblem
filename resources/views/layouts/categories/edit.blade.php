@extends('layouts.app')
@section('title', 'Edit Exibition')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-pencil"></i>
            </div>
            <div class="header-title">
                <h1>Edit Exibition</h1>
                <small>Edit Exibition</small>
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
                                <a class="btn btn-add " href="{{ url('admin/view/categories') }}">
                                    <i class="fa fa-eye"></i> View Exibitions </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-8" action="{{ url('/admin/update/this/category/' . $categoryDetails->id) }}"
                                method="post" enctype="multipart/form-data"> {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->name }}"
                                        name="category_name" id="category_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Slug (lower case of Name)</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->slug }}" name="slug"
                                        id="slug" required>
                                </div>
                                <div class="form-group">
                                    <label>Exibitor</label>
                                    <select name="artist_id" id="artist_id" class="form-control" required>
                                        <option value="">Select One</option>
                                        <option value="1" @if ($categoryDetails->artist_id == 1) selected
                                            @endif>Default</option>
                                        @foreach ($artists as $val)
                                            @if ($val->name != 'Default')
                                                <option value="{{ $val->id }}" @if ($val->id == $categoryDetails->artist_id) selected
                                            @endif>{{ $val->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group" style="width:95%">
                                    <label>Description (Optional)</label>
                                    <textarea name="category_description" id="category_description" class="form-control"
                                        rows="20">
                                    {{ $categoryDetails->description }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Picture upload (375 X 190 px)</label>
                                    <input type="file" name="image">
                                    <input type="hidden" name="current_image" value="{{ $categoryDetails->image }}">
                                    @if (!empty($categoryDetails->image))
                                        <img style="width:100px;margin-top:10px;"
                                            src="{{ asset('/uploads/categories/' . $categoryDetails->image) }}">
                                    @endif
                                </div>
                                <div class="reset-button">
                                    <input type="submit" class="btn btn-success" value="Update Exibition">
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
