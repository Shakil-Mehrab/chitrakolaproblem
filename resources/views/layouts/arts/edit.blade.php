@extends('layouts.app')
@section('title', 'Edit Art')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-pencil"></i>
            </div>
            <div class="header-title">
                <h1>Edit Art</h1>
                <small>Edit Art</small>
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
                                <a class="btn btn-add " href="{{ url('admin/view/arts') }}">
                                    <i class="fa fa-eye"></i> View Arts </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-8" action="{{ url('/admin/update/this/art/' . $categoryDetails->id) }}"
                                method="post" enctype="multipart/form-data"> {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->name }}" name="name"
                                        id="name" required>
                                </div>

                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->slug }}" name="slug"
                                        id="slug" required>
                                </div>
                                <div class="form-group">
                                    <label>Code</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->code }}" name="code"
                                        id="code" required>
                                </div>
                                <div class="form-group">
                                    <label>Under Exibition</label>
                                    <select name="category_id" id="category_id" class="form-control" required>
                                        <option value="">Select One</option>
                                        <option value="1" @if ($categoryDetails->category_id == 1) selected @endif>Default</option>
                                        @forelse($categories as $cat)
                                            @if ($cat->slug != 'default')
                                                <option value="{{ $cat->id }}" @if ($cat->id == $categoryDetails->category_id) selected
                                            @endif>{{ $cat->name }}</option>
                                            @endif
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Under Artist</label>
                                    <select name="artist_id" id="artist_id" class="form-control" required>
                                        <option value="">Select One</option>
                                        <option value="1" @if ($categoryDetails->artist_id == 1) selected @endif>Default</option>
                                        @forelse($artists as $cat)
                                            @if ($cat->name != 'Default')
                                                <option value="{{ $cat->id }}" @if ($cat->id == $categoryDetails->artist_id) selected
                                            @endif>{{ $cat->name }}</option>
                                            @endif
                                        @empty
                                        @endforelse
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->price }}"
                                        name="price" id="price" required>
                                </div>
                                <div class="form-group">
                                    <label>Size</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->size }}" name="size"
                                        id="size" required>
                                </div>
                                <div class="form-group">
                                    <label>Year</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->year }}" name="year"
                                        id="year" required>
                                </div>
                                <div class="form-group">
                                    <label>Media</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->media }}"
                                        name="media" id="media" required>
                                </div>
                                <div class="form-group">
                                    <label>Order (Integer)</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->order }}"
                                        name="order" id="order" required>
                                </div>
                                <div class="form-group" style="width:95%">
                                    <label>Description (Optional)</label>
                                    <textarea name="description" id="description" class="form-control" rows="15">
                                    {{ $categoryDetails->description }}
                                    </textarea>
                                </div>
                                <div class="form-group {{$errors->has('image')?'has-error':''}}">
                                    <label>Picture upload (Optional)</label>
                                    <input type="file" name="image">
                                     @if($errors->has('image'))
                                    <span class="help-block">
                                        <strong style="color:red">{{$errors->first('image')}}</strong>
                                    </span>
                                    @endif
                                    <input type="hidden" name="current_image" value="{{ $categoryDetails->image }}">
                                    @if (!empty($categoryDetails->image))
                                        <img style="width:100px;margin-top:10px;"
                                            src="{{ asset('/uploads/arts/' . $categoryDetails->image) }}">
                                    @endif
                                </div>
                                <div class="reset-button">
                                    <input type="submit" class="btn btn-success" value="Update Art">
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
