@extends('frontend.cihancalli.layouts.master')
@section('titleCihancalli','Home')
@section('bodyClassCihancalli','h-100')
@section('contentCihancalli')
    <!-- Header-->
    <header class="py-5">
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-5">
                    <!-- Header text content-->
                    <div class="text-center text-xxl-start">
                        <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                            <div class="text-uppercase">
                                Design &middot; Development &middot; Marketing
                            </div>
                        </div>
                        <div class="fs-3 fw-light text-muted">
                            I can help your business to
                        </div>
                        <h1 class="display-3 fw-bolder mb-5">
                                <span class="text-gradient d-inline">
                                    Get online and grow fast
                                </span>
                        </h1>
                        <div
                                class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                            @include('frontend.cihancalli.widgets.buttons.resume')
                            @include('frontend.cihancalli.widgets.buttons.projects')

                        </div>
                    </div>
                </div>
                <div class="col-xxl-7">
                    <!-- Header profile picture-->
                    <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                        <div class="profile bg-gradient-primary-to-secondary">
                            @include('frontend.cihancalli.widgets.images.logo')
                            @include('frontend.cihancalli.widgets.svg.dots1')
                            @include('frontend.cihancalli.widgets.svg.dots2')
                            @include('frontend.cihancalli.widgets.svg.dots3')
                            @include('frontend.cihancalli.widgets.svg.dots4')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
