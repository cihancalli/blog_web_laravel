<!-- Project Card 1-->
@if (isset($projects) && count($projects) > 0)
    @foreach($projects as $project)
        <a href="{{route('project.page',[$project->getCategory->slug,$project->slug])}}">
            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                <div class="card-body p-0">
                    <div class="d-flex align-items-center">
                        <div class="p-5">
                            <h2 class="fw-bolder">
                                {{$project->projectTitle}}
                            </h2>
                            <p>
                                {{$project->projectSummary}}
                            </p>
                        </div>
                        <img class="img-fluid" style="width: 300px; height: 400px; object-fit: cover;"
                             src="{{$project->imageUrl}}"/>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
@else
    <div class="alert alert-secondary" role="alert">
        No projects found.
    </div>
@endif
