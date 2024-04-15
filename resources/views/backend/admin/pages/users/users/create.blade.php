@extends('backend.admin.layouts.master')
@section('titleAdmin','Create A New User')
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
            <form method="post" action="{{route('admin.users.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <img id="categoryImagePreview"
                                 src="{{ (isset($user->imageUrl) && !empty($user->imageUrl)) ? asset($user->imageUrl) : asset('uploads/placeholder.jpg') }}"
                                 width="303" style="display:inline-block; border: 1px solid black;">
                        </div>

                        <div class="col-md-12 col-xl-8 align-self-center">
                            <label for="imageUrl">User Image</label>
                            <input type="file" name="imageUrl" id="imageUrl" class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>User Role</label>
                    <select name="roleId" class="form-control" required>
                        <option value="">Please Select Role</option>
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="firstname" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lastname" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required/>
                </div>


                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="tel" name="phoneNumber" class="form-control" required/>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Create User</button>
                </div>

            </form>

        </div>
    </div>
    @include('backend.admin.codes.imageUrl')

@endsection
