@extends('layouts.app')
@section('title', 'Edit Slides')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-pencil"></i>
            </div>
            <div class="header-title">
                <h1>Edit Slides</h1>
                <small>Edit Slides</small>
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
                                <a class="btn btn-add " href="{{ url('admin/view/slides') }}">
                                    <i class="fa fa-eye"></i> View Slides </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-8" action="{{ url('/admin/update/this/slide/' . $categoryDetails->id) }}"
                                method="post" enctype="multipart/form-data"> {{ csrf_field() }}
                                {{-- <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->heading }}"
                                        name="heading" id="heading" required>
                                </div>
                                <div class="form-group">
                                    <label>Sub Heading</label>
                                    <input type="text" class="form-control" value="{{ $categoryDetails->sub_heading }}"
                                        name="sub_heading" id="sub_heading" required>
                                </div> --}}
                                <div class="form-group">
                                    <label>Picture upload (1920 x 900)</label>
                                    <input type="file" name="image">
                                    <input type="hidden" name="current_image" value="{{ $categoryDetails->image }}">
                                    @if (!empty($categoryDetails->image))
                                        <img style="width:100px;margin-top:10px;"
                                            src="{{ asset('/uploads/slides/' . $categoryDetails->image) }}">
                                    @endif
                                </div>
                                <div class="reset-button">
                                    <input type="submit" class="btn btn-success" value="Update Slide">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
