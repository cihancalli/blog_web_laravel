@extends('backend.admin.layouts.master')
@section('titleAdmin','Trashed Categories List')
@section('contentAdmin')

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                @yield('backendTitle')
                <span class="float-right">Found {{$categories->count()}} trashed categories.</strong>

            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"
                       id="dataTable"
                       width="100%"
                       cellspacing="0">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td style="text-align:center;  vertical-align: middle;">
                                <img src="{{$category->imageUrl}}" width="100" style="display:inline-block;"
                                     title="{{$category->imageUrl}}">
                            </td>

                            <td style="vertical-align: middle;"
                                title="{{$category->name}}"><a target="_blank" href="{{route('category',[$category->slug])}}" >{{$category->name}}</a> </td>

                            <td style="text-align:center; vertical-align: middle;">{{\Carbon\Carbon::parse($category->created_at)->format('d.m.Y')}}</td>

                            <td width="200" style="text-align:center;  vertical-align: middle;">
                                <a href="{{route('admin.category.undelete', $category->id)}}" title="Edit"
                                   class="btn btn-sm btn-warning"><i class="fa fa-undo"></i></a>
                                <a href="{{route('admin.category.harddelete', $category->id)}}" title="Delete"
                                   class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
