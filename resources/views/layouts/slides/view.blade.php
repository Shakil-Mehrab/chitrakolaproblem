@extends('layouts.app')
@section('title', 'View Slides')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-eye"></i>
            </div>
            <div class="header-title">
                <h1>View Slides</h1>
                <small>Slides List</small>
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
                                    <h4>View Slides</h4>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="btn-group">
                                <div class="buttonexport" id="buttonlist">
                                    <a class="btn btn-add" href="{{ url('/admin/add/slide') }}"> <i class="fa fa-plus"></i>
                                        Add Slides
                                    </a>
                                </div>

                            </div>
                            <div class="table-responsive">
                                <table id="table_id" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="info">
                                            <th>ID</th>
                                            {{-- <th>Heading</th>
                                            <th>Sub Heading</th> --}}
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                {{-- <td>{{ $category->heading }}</td>
                                                <td>{{ $category->sub_heading }}</td> --}}
                                                <td>
                                                    @if (!empty($category->image))
                                                        <img src="{{ asset('/uploads/slides/' . $category->image) }}" alt=""
                                                            style="width:100px;">
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ url('/admin/edit/slide/' . $category->id) }}"
                                                        class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{ url('/admin/delete/slide/' . $category->id) }}"
                                                        class="btn btn-danger btn-sm slideDelete"><i
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
            $(".slideDelete").click(function(e) {
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
