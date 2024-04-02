@extends('backend.admin.layouts.master')
@section('titleAdmin','Users')
@section('contentAdmin')

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                @yield('backendTitle')
                <span class="float-right">Found {{$users->count()}} users.</strong>
                    <a href="{{route('admin.user.trashed')}}" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Deleted Users ({{$trashed->count()}})</a>
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
                        <th style="text-align:center; vertical-align: middle;">Role</th>
                        <th style="text-align:center; vertical-align: middle;">Username</th>
                        <th style="text-align:center; vertical-align: middle;">User Code</th>
                        <th style="text-align:center; vertical-align: middle;">Full Name</th>

                        <th style="text-align:center; vertical-align: middle;">Email</th>
                        <th style="text-align:center; vertical-align: middle;">Phone Number</th>
                        <th style="text-align:center; vertical-align: middle;">Timezone</th>
                        <th style="text-align:center; vertical-align: middle;">Level</th>
                        <th style="text-align:center; vertical-align: middle;">Level Point</th>
                        <th style="text-align:center; vertical-align: middle;">Premium</th>

                        <th style="text-align:center; vertical-align: middle;">Status</th>
                        <th style="text-align:center; vertical-align: middle;">Created</th>
                        <th style="text-align:center; vertical-align: middle;">Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th style="text-align:center; vertical-align: middle;">#</th>
                        <th style="text-align:center; vertical-align: middle;">Role</th>
                        <th style="text-align:center; vertical-align: middle;">Username</th>

                        <th style="text-align:center; vertical-align: middle;">User Code</th>
                        <th style="text-align:center; vertical-align: middle;">Full Name</th>

                        <th style="text-align:center; vertical-align: middle;">Email</th>
                        <th style="text-align:center; vertical-align: middle;">Phone Number</th>
                        <th style="text-align:center; vertical-align: middle;">Timezone</th>

                        <th style="text-align:center; vertical-align: middle;">Level</th>
                        <th style="text-align:center; vertical-align: middle;">Level Point</th>
                        <th style="text-align:center; vertical-align: middle;">Premium</th>


                        <th style="text-align:center; vertical-align: middle;">Status</th>
                        <th style="text-align:center; vertical-align: middle;">Created</th>
                        <th style="text-align:center; vertical-align: middle;">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td style="text-align:center;  vertical-align: middle;"
                                title="{{$user->id}}">{{$user->id}}</td>
                            <td style="text-align:center;  vertical-align: middle;"
                                title="{{$user->getRole->nameEn}}">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{$user->getRole->imageUrl}}" width="100"
                                                 style="display:inline-block;"
                                                 title="{{$user->getRole->imageUrl}}">
                                        </div>
                                        <div class="col">
                                            {{$user->getRole->nameEn}}

                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td style="text-align:center;  vertical-align: middle;"
                                title="{{$user->username}}">{{$user->username}}</td>

                            <td style="text-align:center;  vertical-align: middle;"
                                title="{{$user->userCode}}">{{$user->userCode}}</td>
                            <td style="text-align:center;  vertical-align: middle;"
                                title="{{$user->firstname}} {{$user->lastname}}">{{$user->firstname}} {{$user->lastname}}</td>

                            <td style="text-align:center;  vertical-align: middle;"
                                title="{{$user->email}}">{{$user->email}}</td>
                            <td style="text-align:center;  vertical-align: middle;"
                                title="{{$user->phoneNumber}}">{{$user->phoneNumber}}</td>
                            <td style="text-align:center;  vertical-align: middle;"
                                title="{{$user->timezone}}">{{$user->timezone}}</td>

                            <td style="text-align:center;  vertical-align: middle;"
                                title="{{$user->userLevel}}">{{$user->userLevel}}</td>
                            <td style="text-align:center;  vertical-align: middle;"
                                title="{{$user->userLevelPoint}}">{{$user->userLevelPoint}}</td>
                            <td class="text-center" style="text-align:center;  vertical-align: middle;">
                                @if($user->userPremium == "1")
                                    <img src="{{route('home')}}/uploads/premium.png" width="100" style="display:inline-block;">
                                @else
                                    <strong class="text-danger">Free User</strong>
                                @endif
                            </td>

                            <td style="text-align:center; vertical-align: middle;" width="100%">
                                @if($user->getRole->id !=1)
                                    @if($user->status == 1)
                                        <a href="{{ route('admin.user.status', $user->id)}}">
                                            <button class="btn btn-success sml">Enabled</button>
                                        </a>
                                    @else
                                        <a href="{{ route('admin.user.status', $user->id)}}">
                                            <button class="btn btn-warning sml">Disabled</button>
                                        </a>
                                    @endif
                                @else
                                    <a class="alert alert-dark sml" style="text-decoration: none;pointer-events: none">Immutable</a>
                                @endif
                            </td>
                            <td style="text-align:center; vertical-align: middle;">{{\Carbon\Carbon::parse($user->created_at)->format('d.m.Y')}}</td>
                            <td width="200" style="text-align:center;  vertical-align: middle;">
                                <a href="{{route('admin.users.edit', $user->id)}}" title="Edit"
                                   class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                @if($user->id !=1)
                                    <a href="{{route('admin.user.delete', $user->id)}}" title="Delete"
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
