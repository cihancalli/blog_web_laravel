@if (isset($skills) && count($skills) > 0)
    @foreach($skills as $skill)
        @if($skillCategory->id == $skill->categoryId)
            <div class="col mb-4 mb-md-4">
                <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                    {{$skill->name}}
                </div>
            </div>
        @endif
    @endforeach
@else
    <div class="alert alert-secondary" role="alert">
        No skills found.
    </div>
@endif
