@extends('frontend.person.layouts.master')
@section('titlePerson',$post->postTitle)
@section('bodyClassPerson','')
@section('contentPerson')


    <!-- Blog content-->
    <section class="py-5">
        <div class="container px-5">
            <!-- Blog -->
            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <div class="rounded-3 mb-3">
                        <img class="img-fluid  m-3"
                             src="{{$post->imageUrl}}"
                             alt="..."/>
                    </div>

                    <h1 class="fw-bolder">
                        {{$post->postTitle}}
                    </h1>
                    <p class="lead fw-normal text-muted mb-0">
                        {{$post->postSummary}}
                    </p>
                </div>
                <div class="row gx-5 justify-content-center">
                    {!!$post->postContent!!}
                </div>
            </div>
            <br>
            @include('frontend.person.widgets.sections.blog-categories')
            <br>
        </div>
    </section>

@endsection
