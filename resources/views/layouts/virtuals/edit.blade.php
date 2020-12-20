@extends('layouts.app')
@section('title', 'Edit 3D Exhibition')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-pencil"></i>
            </div>
            <div class="header-title">
                <h1>Edit 3D Exhibition</h1>
                <small>Edit 3D Exhibition </small>
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
                                <a class="btn btn-add " href="{{ url('admin/view/virtual') }}">
                                    <i class="fa fa-eye"></i> View 3D Exhibition </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-6" action="{{ url('/admin/update/this/virtual/' . $categoryDetails->id) }}"
                                method="post" enctype="multipart/form-data"> {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->heading }}"
                                        name="heading" id="heading" required>
                                </div>

                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->link }}" name="link"
                                        id="link" required>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select name="type" id="type" class="form-control" required>
                                        <option value="">Select One</option>
                                        <option value="youtube" @if ($categoryDetails->type == 'youtube') selected @endif>Youtube</option>
                                        <option value="facebook" @if ($categoryDetails->type == 'facebook') selected @endif>Facebook</option>
                                        <!--<option value="virtual" @if ($categoryDetails->type == 'virtual') selected @endif>Virtual</option>-->
                                    </select>
                                </div>
                                <div class="reset-button">
                                    <input type="submit" class="btn btn-success" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
