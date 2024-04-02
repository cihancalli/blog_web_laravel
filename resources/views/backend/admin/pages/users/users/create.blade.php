@extends('backend.admin.layouts.master')
@section('titleAdmin','Create User')
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
                    <label>Profile Image</label>
                    <input type="file" name="imageUrl" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label>User Role</label>
                    <select name="categoryId" class="form-control" required>
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
                    <input type="tel" name="email" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required/>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Create User</button>
                </div>

            </form>

        </div>
    </div>

@endsection
