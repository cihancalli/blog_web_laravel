<!-- Professional skills list-->
<div class="mb-5">
    @if (isset($skillCategories) && count($skillCategories) > 0)
        @foreach($skillCategories as $skillCategory)
            <div class="d-flex align-items-center mb-4">
                <div
                        class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                    <i class="bi bi-tools"></i>
                </div>

                <h3 class="fw-bolder mb-0">
            <span
                    class="text-gradient d-inline">
                @section('skillCategoryID',$skillCategory->id)
                {{$skillCategory->name}}
            </span>
                </h3>
            </div>
            @include('frontend.cihancalli.widgets.lists.skills.list')
        @endforeach
    @else
        <div class="alert alert-secondary" role="alert">
            No skill categories found.
        </div>
    @endif
</div>
