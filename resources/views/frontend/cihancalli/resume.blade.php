@extends('frontend.cihancalli.layouts.master')
@section('titleCihancalli','Resume')
@section('bodyClassCihancalli','h-100 bg-light')
@section('contentCihancalli')
    <!-- Page Content-->
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0">
            <span class="text-gradient d-inline">
                Resume
            </span>
            </h1>
        </div>
        <div class="row gx-1 justify-content-center">
            <div class="col-lg-11 col-xl-11 col-xxl-11">
                @include('frontend.cihancalli.widgets.sections.experience')
                @include('frontend.cihancalli.widgets.sections.education')
                <!-- Divider-->
                <div class="pb-5"></div>
                @include('frontend.cihancalli.widgets.sections.skills')
            </div>
        </div>
    </div>
@endsection
