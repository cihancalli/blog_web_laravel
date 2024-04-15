@extends('backend.admin.layouts.master')
@section('titleAdmin','Update "'.$post->postTitle.'" Post')
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
                @method('PUT')
                <input type="hidden" name="id" value="{{$post->id}}">

                <div class="form-group">
                    <label>Post Title</label>
                    <input type="text" name="postTitle" value="{{$post->postTitle}}" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label>Post Category</label>
                    <select name="categoryId" class="form-control" value="{{$post->getCategory->name}}" required>
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
                    <textarea type="text" name="postSummary" class="form-control" required rows="5">{{$post->postSummary}}</textarea>
                </div>

                <div class="form-group">
                    <label>Post Contents</label>
                    <textarea id="summernote" name="postContent" class="form-control">{!!$post->postContent!!}</textarea>
                </div>

                <div class="form-group">
                    <label>Post Published Time</label>
                    <input type="datetime-local" name="publishedTime" value="{{ \Carbon\Carbon::parse($post->publishedTime)->timezone('Europe/Istanbul') }}" class="form-control" required >
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update Post</button>
                </div>

            </form>

        </div>
    </div>

    @include('backend.admin.codes.summernote')
    @include('backend.admin.codes.imageUrl')

@endsection
