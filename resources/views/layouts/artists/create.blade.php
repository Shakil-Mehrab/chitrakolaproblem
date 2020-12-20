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
                            <form class="col-sm-8" action="{{ url('/admin/store/artist') }}" method="post"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Artist Name" name="name"
                                        id="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" class="form-control" placeholder="Enter Artist Designation"
                                        name="designation" id="designation" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone No" name="phone"
                                        id="phone" required>
                                </div>
                                <div class="form-group">
                                    <label>Mail</label>
                                    <input type="email" class="form-control" placeholder="Enter Mail" name="mail" id="mail"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Order (Integer)</label>
                                    <input type="text" class="form-control" placeholder="Enter Order" name="order"
                                        id="order" required>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Description (Optional)</label>
                                    <textarea name="description" id="description" class="form-control"></textarea>
                                </div> --}}
                                <div class="form-group">
                                    <label>Picture upload (200 X 200 px)</label>
                                    <input type="file" name="image">
                                </div>
                                <div class="reset-button">
                                    <input type="submit" class="btn btn-success" value="Add Artist">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
