@extends('layouts.app')
@section('title', 'Add Artist')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-product-hunt"></i>
            </div>
            <div class="header-title">
                <h1>Add Artist</h1>
                <small>Add Artist</small>
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
                                <a class="btn btn-add " href="{{ url('/admin/view/artists') }}">
                                    <i class="fa fa-eye"></i> View Artists </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-8" action="{{ url('/admin/store/slide') }}" method="post"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{-- <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" placeholder="Enter Heading" name="heading"
                                        id="heading" required>
                                </div>
                                <div class="form-group">
                                    <label>Sub Heading</label>
                                    <input type="text" class="form-control" placeholder="Enter Sub Heading"
                                        name="sub_heading" id="sub_heading" required>
                                </div> --}}
                                <div class="form-group">
                                    <label>Picture upload (1920 x 900)</label>
                                    <input type="file" name="image">
                                </div>
                                <div class="reset-button">
                                    <input type="submit" class="btn btn-success" value="Add Slide">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
