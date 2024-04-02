@extends('backend.admin.layouts.master')
@section('titleAdmin','Create Role')
@section('contentAdmin')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('adminTitle')</h6>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form method="post" action="{{route('admin.roles.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Role Name</label>
                    <input type="text" name="name" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label>Role Image</label>
                    <input type="file" name="imageUrl" class="form-control" required/>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Create Role</button>
                </div>

            </form>

        </div>
    </div>

@endsection
