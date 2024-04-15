@extends('backend.admin.layouts.master')
@section('titleAdmin','Edit Role: '.$role->name.' / '.$role->userCount())
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

            <form method="post" action="{{ route('admin.roles.update',$role->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="id" value="{{$role->id}}">

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <img id="categoryImagePreview"
                                 src="{{ (isset($role->imageUrl) && !empty($role->imageUrl)) ? asset($role->imageUrl) : asset('uploads/placeholder.jpg') }}"
                                 width="303" style="display:inline-block; border: 1px solid black;">
                        </div>

                        <div class="col-md-12 col-xl-8 align-self-center">
                            <label for="imageUrl">Role Image</label>
                            <input type="file" name="imageUrl" id="imageUrl" class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Role Name </label>
                    <input type="text" name="name" class="form-control" value="{{$role->name}}" required/>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update Role</button>
                </div>
            </form>
        </div>
    </div>
    @include('backend.admin.codes.imageUrl')
@endsection
