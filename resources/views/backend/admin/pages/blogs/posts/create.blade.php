@extends('backend.admin.layouts.master')
@section('titleAdmin','Posts')
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
            <form method="post" action="{{route('admin.posts.store')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Post Title</label>
                    <input type="text" name="postTitle" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label>Post Category</label>
                    <select name="categoryId" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <img id="categoryImagePreview"
                                 src="{{ (isset($post->imageUrl) && !empty($post->imageUrl)) ? asset($post->imageUrl) : asset('uploads/placeholder.jpg') }}"
                                 width="303" style="display:inline-block; border: 1px solid black;">
                        </div>

                        <div class="col-md-12 col-xl-8 align-self-center">
                            <label for="imageUrl">Post Image</label>
                            <input type="file" name="imageUrl" id="imageUrl" class="form-control"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Post Summary</label>
                    <textarea type="text" name="postSummary" class="form-control" required rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label>Post Contents</label>
                    <textarea id="summernote" name="postContent" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Post Published Time</label>
                    <input type="datetime-local" name="publishedTime" class="form-control" required value="<?php echo date('Y-m-d\TH:i'); ?>">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Create Post</button>
                </div>

            </form>

        </div>
    </div>

    @include('backend.admin.codes.summernote')
    @include('backend.admin.codes.imageUrl')

@endsection
