@extends('frontend.cihancalli.layouts.master')
@section('titleCihancalli','Projects')
@section('bodyClassCihancalli','h-100 bg-light')
@section('contentCihancalli')
    <!-- Projects Section-->

    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0">
                <span class="text-gradient d-inline">
                     Projects
                </span>
                </h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    @include('frontend.cihancalli.widgets.cards.project')
                </div>
            </div>
        </div>
    </section>

@endsection
