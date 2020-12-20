@extends('layouts.app')
@section('title', 'Add 3d Exhibition')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-product-hunt"></i>
            </div>
            <div class="header-title">
                <h1>Add 3d Exhibition</h1>
                <small>Add 3d Exhibition</small>
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
                                <a class="btn btn-add " href="{{ url('admin/view/virtuals') }}">
                                    <i class="fa fa-eye"></i> View 3d Exhibition </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-6" action="{{ url('/admin/store/virtual') }}" method="post"
                                enctype="multipart/form-data"> {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" placeholder="Enter Heading" name="heading"
                                        id="heading" required>
                                </div>
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text" class="form-control" placeholder="Enter Link" name="link" id="link"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select name="type" id="type" class="form-control" required>
                                        <option value="">Select One</option>
                                        <option value="youtube">Youtube</option>
                                        <option value="facebook">Facebook</option>
                                        <option value="virtual">Virtual</option>
                                    </select>
                                </div>
                                <div class="reset-button">
                                    <input type="submit" class="btn btn-success" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
