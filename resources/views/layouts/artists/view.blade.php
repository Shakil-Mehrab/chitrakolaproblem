@extends('layouts.app')
@section('title', 'View Artists')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-eye"></i>
            </div>
            <div class="header-title">
                <h1>View Artists</h1>
                <small>Artists List</small>
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
                                    <h4>View Artists</h4>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="btn-group">
                                <div class="buttonexport" id="buttonlist">
                                    <a class="btn btn-add" href="{{ url('/admin/add/artist') }}"> <i class="fa fa-plus"></i>
                                        Add Artist
                                    </a>
                                </div>

                            </div>
                            <div class="table-responsive">
                                <table id="table_id" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="info">
                                            <th>Order</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Mail</th>
                                            {{-- <th>Designation</th>
                                            --}}
                                            <th>Number Of Exibition</th>
                                            <th>Number Of Arts</th>
                                            <th>Publish</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $category->order }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->phone }}</td>
                                                <td>{{ $category->mail }}</td>
                                                {{-- <td>{{ $category->designation }}</td>
                                                --}}
                                                <td>{{ $category->categories->count() }}</td>
                                                <td>{{ $category->arts->count() }}</td>
                                                <td>
                                                    @if ($category->name != 'Default')
                                                        <input type="checkbox" id="toggle-demo"
                                                            class="ArtistsStatus btn btn-success" rel="{{ $category->id }}"
                                                            data-toggle="toggle" data-on="Enabled" data-of="Disabled"
                                                            data-onstyle="success" data-offstyle="danger" @if ($category['status'] == '1') checked
                                                    @endif>
                                                    <div id="myElem" style="display:none;" class="alert alert-success">
                                                        Status Enabled
                                                    </div>
                                        @endif
                                        </td>
                                        <td>
                                            @if (!empty($category->image))
                                                <img src="{{ asset('/uploads/artists/' . $category->image) }}" alt=""
                                                    style="width:100px;">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($category->name != 'Default')
                                                <a href="{{ url('/admin/edit/artist/' . $category->id) }}"
                                                    class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a href="{{ url('/admin/delete/artist/' . $category->id) }}"
                                                    class="btn btn-danger btn-sm artistDelete"><i class="fa fa-trash-o"></i>
                                                </a>
                                                {{-- <a
                                                    href="{{ url('/admin/view-product/bycategory/' . $category->id) }}"
                                                    class="btn btn-add btn-sm"><i class="fa fa-eye"></i></a>
                                                --}}
                                            @endif

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
            //Update Category Status
            $(".ArtistsStatus").change(function() {
                var id = $(this).attr('rel');
                if ($(this).prop("checked") == true) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'post',
                        url: '/admin/update/artist/status',
                        data: {
                            status: '1',
                            id: id
                        },
                        success: function(data) {
                            $("#message_success").show();
                            setTimeout(function() {
                                $("#message_success").fadeOut('slow');
                            }, 2000);
                        },
                        error: function() {
                            alert("Error");
                        }
                    });

                } else {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'post',
                        url: '/admin/update/artist/status',
                        data: {
                            status: '0',
                            id: id
                        },
                        success: function(resp) {
                            $("#message_error").show();
                            setTimeout(function() {
                                $("#message_error").fadeOut('slow');
                            }, 2000);
                        },
                        error: function() {
                            alert("Error");
                        }
                    });
                }
            });
            $(".artistDelete").click(function(e) {
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
