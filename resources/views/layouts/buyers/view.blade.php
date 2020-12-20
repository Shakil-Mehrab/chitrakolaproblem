@extends('layouts.app')
@section('title', 'View Buyers')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-eye"></i>
            </div>
            <div class="header-title">
                <h1>View Buyers</h1>
                <small>Buyers List</small>
            </div>
        </section>
        @if (Session::has('flash_message_error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{ session('flash_message_error') }}</strong>
            </div>
        @endif
        @if (Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{ session('flash_message_success') }}</strong>
            </div>
        @endif

        <div id="message_success" style="display:none;" class="alert alert-sm alert-success">Status Enabled</div>
        <div id="message_error" style="display:none;" class="alert alert-sm alert-danger">Status Disabled</div>
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group" id="buttonexport">
                                <a href="#">
                                    <h4>View Buyers</h4>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <!--<div class="btn-group">-->
                            <!--    <div class="buttonexport" id="buttonlist">-->
                            <!--        <a class="btn btn-add" href="{{ url('/admin/add/buyers') }}"> <i class="fa fa-plus"></i>-->
                            <!--            Add Buyers-->
                            <!--        </a>-->
                            <!--    </div>-->

                            <!--</div>-->
                            <div class="table-responsive">
                                <table id="table_id" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="info">
                                            <th>ID</th>
                                            <th>Code</th>
                                            <th>Art Title</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->code }}</td>
                                                <td>{{ $category->art_name }}</td>

                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->phone }}</td>
                                                <td>{{ $category->email }}</td>
                                                <td>{{ $category->address }}</td>
                                                <td>{{ $category->created_at->diffForHumans() }}</td>
                                                <td>
                                                    {{-- <a
                                                        href="{{ url('/admin/edit/category/' . $category->id) }}"
                                                        class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></a>
                                                    --}}
                                                    <a href="{{ url('/admin/delete/buyer/' . $category->id) }}"
                                                        class="btn btn-danger btn-sm buyerDelete"><i
                                                            class="fa fa-trash-o"></i> </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script>
        // delete
        $(document).ready(function() {
            $(".buyerDelete").click(function(e) {
                e.preventDefault();
                var link = $(this).attr("href");
                bootbox.confirm("Are you sure to delete", function(confirmed) {
                    if (confirmed) {
                        // alert(link)
                        window.location.href = link;
                    };
                });
            });
        });

    </script>
@endsection
