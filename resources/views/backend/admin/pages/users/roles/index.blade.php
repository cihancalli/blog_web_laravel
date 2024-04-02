@extends('backend.admin.layouts.master')
@section('titleAdmin','Roles')
@section('contentAdmin')

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                @yield('backendTitle')
                <span class="float-right">Found {{$roles->count()}} roles.</strong>
                    <a href="{{route('admin.role.trashed')}}" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Deleted Roles ({{$trashed->count()}})</a>
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
                    @foreach($roles as $role)
                        <tr>
                            <td style="text-align:center;  vertical-align: middle;">
                                <img src="{{$role->imageUrl}}" width="100" style="display:inline-block;"
                                     title="{{$role->imageUrl}}">
                            </td>

                            <td style="vertical-align: middle;"
                                title="{{$role->name}}">{{$role->name}}</td>

                            <td style="text-align:center; vertical-align: middle;">{{\Carbon\Carbon::parse($role->created_at)->format('d.m.Y')}}</td>

                            <td width="200" style="text-align:center;  vertical-align: middle;">
                                <a href="{{route('admin.roles.edit', $role->id)}}" title="Edit"
                                   class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                @if($role->id !=1)
                                    <a href="{{route('admin.role.delete', $role->id)}}" title="Delete"
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
