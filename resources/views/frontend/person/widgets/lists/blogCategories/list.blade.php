@isset($categories)
    <div class="row row-cols-1 row-cols-md-3 mb-4">
        @if (isset($categories) && count($categories) > 0)
            @foreach($categories as $category)
                <div class="col mb-4">
                    <div class=" align-items-center bg-light rounded-3 p-2 h-100 justify-content-center">
                        <div class="col text-center">
                            <a href="{{route('category',$category->slug)}}">{{$category->name }}</a>
                            <i class="fa fa-share-alt"> </i>
                            {{$category->postPublishedCount()}}
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-secondary" role="alert">
                No categories found.
            </div>
        @endif
    </div>
@endif
