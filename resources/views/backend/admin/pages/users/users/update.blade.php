@extends('backend.admin.layouts.master')
@section('titleAdmin','Edit Role')
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
                    <label>Role Name (Tr)</label>
                    <input type="text" name="nameTr" class="form-control" value="{{$role->nameTr}}" required/>
                </div>

                <div class="form-group">
                    <label>Role Name (En)</label>
                    <input type="text" name="nameEn" class="form-control" value="{{$role->nameEn}}" required/>
                </div>

                <div class="form-group">
                    <label>Role Image (Tr)</label>
                    <img src="{{$role->imageUrlTr}}" class="img-thumbnail rounded" width="200"><br/><br/>
                    <input type="file" name="imageUrlTr" class="form-control" required/>
                </div>


                <div class="form-group">
                    <label>Role Image (En)</label>
                    <img src="{{$role->imageUrlEn}}" class="img-thumbnail rounded" width="200"><br/><br/>
                    <input type="file" name="imageUrlEn" class="form-control" required/>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update Role</button>
                </div>
            </form>
        </div>
    </div>
@endsection
