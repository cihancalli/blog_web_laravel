<!-- Education Card 1-->
@if (isset($educations) && count($educations) > 0)
    @foreach($educations as $education)
        <div class="card shadow border-0 rounded-4 mb-5">
            <div class="card-body p-5">
                <div class="row align-items-center gx-5">
                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                        <div class="bg-light p-4 rounded-4">
                            <div class="text-secondary fw-bolder mb-2">
                                {{$education->startDate}} - {{$education->startDate}}
                            </div>
                            <div class="mb-2">
                                <div class="small fw-bolder">
                                    {!! $education->educationName !!}
                                </div>
                                <div class="small text-muted">
                                    {{$education->address}}
                                </div>
                            </div>
                            <div class="fst-italic">
                                <div class="small text-muted">
                                    {{$education->educationType}}
                                </div>
                                <div class="small text-muted">
                                    {{$education->educationDepartment}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div>
                            {!! $education->educationContent !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="alert alert-secondary" role="alert">
        No educations found.
    </div>
@endif
