@extends('frontend.cihancalli.layouts.master')
@section('titleCihancalli','Blogs')
@section('bodyClassCihancalli','h-100 bg-light')
@section('contentCihancalli')
    <!-- Blogs Section-->
    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0">
                <span class="text-gradient d-inline">
                    Blogs
                </span>
                </h1>
            </div>

            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    @include('frontend.cihancalli.widgets.sections.blog-categories')
                    @include('frontend.cihancalli.widgets.cards.blog')
                    @if (isset($posts) && count($posts) > 0)
                        {{$posts->links('vendor.pagination.custom')}}
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
