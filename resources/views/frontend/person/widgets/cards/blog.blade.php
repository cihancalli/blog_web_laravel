@foreach($posts as $post)
<!-- Blog Card 1-->
<a href="{{route('blog.page',[$post->getCategory->slug,$post->slug])}}">
    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
        <div class="card-body p-0">
            <div class="d-flex align-items-center">
                <div class="p-5">
                    <h2 class="fw-bolder">
                        {{$post->postTitle}}
                    </h2>
                    <p>
                        {{$post->postSummary}}
                    </p>
                </div>
                <img class="img-fluid" style="width: 300px; height: 400px; object-fit: cover;"
                     src="{{$post->imageUrl}}"
                     alt="..."/>
            </div>
        </div>
    </div>
</a>
@endforeach
