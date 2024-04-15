@extends('backend.admin.layouts.master')
@section('titleAdmin','Post Categories List')
@section('contentAdmin')

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                @yield('backendTitle')
                <span class="float-right">Found {{$categories->count()}} categories.</strong>
                    <a href="{{route('admin.category.trashed')}}" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Deleted Categories ({{$trashed->count()}})</a>
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
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Post Count</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Post Count</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>

                            <td style="text-align:center;  vertical-align: middle;">
                                {{$category->id}}
                            </td>

                            <td style="text-align:center;  vertical-align: middle;">
                                <img src="{{$category->imageUrl}}" width="100" style="display:inline-block;"
                                     title="{{$category->imageUrl}}">
                            </td>

                            <td style="text-align:center; vertical-align: middle;"
                                title="{{$category->name}}"><a target="_blank" href="{{route('category',[$category->slug])}}" >
                                    {{$category->name}}</a> </td>

                            <td style="text-align:center; vertical-align: middle;">
                                {{$category->postPublishedCount()}} </td>

                            <td style="text-align:center; vertical-align: middle;">{{\Carbon\Carbon::parse($category->created_at)->format('d.m.Y')}}</td>

                            <td width="200" style="text-align:center;  vertical-align: middle;">
                                <a href="{{route('admin.categories.edit', $category->id)}}" title="Edit"
                                   class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                @if($category->id !=1 && $category->postPublishedCount() == 0)
                                    <a href="{{route('admin.category.delete', $category->id)}}" title="Delete"
                                       class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
