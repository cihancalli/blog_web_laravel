@extends('backend.admin.layouts.master')
@section('titleAdmin','Create A New Category')
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
            <form method="post" action="{{route('admin.categories.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" name="name" class="form-control" required/>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <img id="categoryImagePreview"
                                 src="{{ (isset($category->imageUrl) && !empty($category->imageUrl)) ? asset($category->imageUrl) : asset('uploads/placeholder.jpg') }}"
                                 width="303" style="display:inline-block; border: 1px solid black;">
                        </div>

                        <div class="col-md-12 col-xl-8 align-self-center">
                            <label for="imageUrl">Category Image</label>
                            <input type="file" name="imageUrl" id="imageUrl" class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Create Category</button>
                </div>

            </form>

        </div>
    </div>
    @section('imageUrl')
        @include('backend.admin.codes.imageUrl')
    @endsection

@endsection
