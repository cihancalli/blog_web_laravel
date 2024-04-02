
@extends('backend.admin.layouts.master')
@section('titleAdmin','Dashboard')
@section('contentAdmin')




    <!-- Monthly Card -->
    @include('backend.admin.widgets.contents.monthly-card')

    <!-- Chart -->
    @include('backend.admin.widgets.contents.chart')

    <!-- Content Row -->
    @include('backend.admin.widgets.contents.content')

@endsection
