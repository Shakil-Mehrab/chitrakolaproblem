@extends('layouts.app')
@section('title', 'Add Art News')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-product-hunt"></i>
            </div>
            <div class="header-title">
                <h1>Add Art News</h1>
                <small>Add Art News</small>
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
                                    <i class="fa fa-eye"></i> View Arts News</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-8" action="{{ url('/admin/store/news') }}" method="post"
                                enctype="multipart/form-data"> {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" placeholder="Enter Heading" name="heading"
                                        id="heading" required>
                                </div>
                                <div class="form-group" style="width: 95%">
                                    <label>Description (Optional)</label>
                                    <textarea name="description" id="description" class="form-control" rows="20">
                                                                             </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Picture upload (Optional)</label>
                                    <input type="file" name="image">
                                </div>
                                <div class="reset-button">
                                    <input type="submit" class="btn btn-success" value="Add News">
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
