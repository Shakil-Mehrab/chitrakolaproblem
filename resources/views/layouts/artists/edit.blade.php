@extends('layouts.app')
@section('title', 'Edit Artist')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-pencil"></i>
            </div>
            <div class="header-title">
                <h1>Edit Artist</h1>
                <small>Edit Artist</small>
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
                                <a class="btn btn-add " href="{{ url('admin/view/artists') }}">
                                    <i class="fa fa-eye"></i> View Artist </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-8" action="{{ url('/admin/update/this/artist/' . $categoryDetails->id) }}"
                                method="post" enctype="multipart/form-data"> {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->name }}" name="name"
                                        id="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->designation }}"
                                        name="designation" id="designation" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->phone }}"
                                        name="phone" id="phone" required>
                                </div>
                                <div class="form-group">
                                    <label>Mail</label>
                                    <input type="email" class="form-control" value="{{ $categoryDetails->mail }}"
                                        name="mail" id="mail" required>
                                </div>
                                <div class="form-group">
                                    <label>Order (Integer)</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->order }}"
                                        name="order" id="order" required>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Description (Optional)</label>
                                    <textarea name="description" id="description" class="form-control">
                                    {{ $categoryDetails->description }}
                                    </textarea>
                                </div> --}}
                                <div class="form-group">
                                    <label>Picture upload (200 X 200 px)</label>
                                    <input type="file" name="image">
                                    <input type="hidden" name="current_image" value="{{ $categoryDetails->image }}">
                                    @if (!empty($categoryDetails->image))
                                        <img style="width:100px;margin-top:10px;"
                                            src="{{ asset('/uploads/artists/' . $categoryDetails->image) }}">
                                    @endif
                                </div>
                                <div class="reset-button">
                                    <input type="submit" class="btn btn-success" value="Update Artists">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
