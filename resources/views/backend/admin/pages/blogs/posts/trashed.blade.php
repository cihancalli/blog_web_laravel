@extends('backend.admin.layouts.master')
@section('titleAdmin','Posts')
@section('contentAdmin')

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                @yield('backendTitle')
                <span class="float-right">Found {{$posts->count()}} trashed categories.</strong>
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
                        <th style="text-align:center; vertical-align: middle;">#</th>
                        <th style="text-align:center; vertical-align: middle;">Image</th>
                        <th style="text-align:center; vertical-align: middle;">Views</th>
                        <th style="text-align:center; vertical-align: middle;">Title</th>
                        <th style="text-align:center; vertical-align: middle;">Category</th>
                        <th style="text-align:center; vertical-align: middle;">Created</th>
                        <th style="text-align:center; vertical-align: middle;">Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th style="text-align:center; vertical-align: middle;">#</th>
                        <th style="text-align:center; vertical-align: middle;">Image</th>
                        <th style="text-align:center; vertical-align: middle;">Views</th>
                        <th style="text-align:center; vertical-align: middle;">Title</th>
                        <th style="text-align:center; vertical-align: middle;">Category</th>
                        <th style="text-align:center; vertical-align: middle;">Created</th>
                        <th style="text-align:center; vertical-align: middle;">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td style="text-align:center; vertical-align: middle;">
                                {{$post->id}}
                            </td>

                            <td style="text-align:center;  vertical-align: middle;">
                                <img src="{{$post->imageUrl}}" width="100"
                                     style="display:inline-block;">
                            </td>

                            <td style="text-align:center; vertical-align: middle;">{{$post->view}} <i
                                    class="fa fa-eye"></i></td>
                            <td style="text-align:center;  vertical-align: middle;">
                                <a target="_blank"
                                   href="{{route('blog.page',[$post->getCategory->slug,$post->slug])}}">{{$post->postTitle}}</a>
                            </td>


                            <td style="text-align:center;  vertical-align: middle;"
                                title="{{$post->getCategory->name}}">

                                <a target="_blank" href="{{route('category',[$post->getCategory->slug])}}">
                                    {{$post->getCategory->name}} ({{$post->getCategory->postPublishedCount()}}) </a>

                            </td>


                            <td style="text-align:center; vertical-align: middle;">
                                <div class="container">
                                    <div class="col justify-content-center">

                                        <img src="{{$post->getUser->getRole->imageUrl}}" width="100"
                                             style="display:inline-block;">
                                    </div>
                                    <div class="col justify-content-center">
                                        <strong>{{$post->getUser->username}}</strong>
                                    </div>
                                    <hr class="sidebar-divider">
                                    <div class="col justify-content-center">
                                        {{\Carbon\Carbon::parse($post->created_at)->format('d.m.Y-h:m')}}
                                    </div>
                                </div>


                            </td>

                            <td width="200" style="text-align:center;  vertical-align: middle;">
                                <a href="{{route('admin.post.undelete', $post->id)}}" title="Edit"
                                   class="btn btn-sm btn-warning"><i class="fa fa-undo"></i></a>
                                <a href="{{route('admin.post.harddelete', $post->id)}}" title="Delete"
                                   class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
