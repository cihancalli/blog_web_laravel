<!-- Experience Card 1-->
@foreach($experiences as $experience)
<div class="card shadow border-0 rounded-4 mb-5">
    <div class="card-body p-5">
        <div class="row align-items-center gx-5">
            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                <div class="bg-light p-4 rounded-4">
                    <div class="text-primary fw-bolder mb-2">
                        {{$experience->startDate}} - {{$experience->endDate}}
                    </div>
                    <div class="small fw-bolder">
                        {{$experience->companyDepartment}}

                    </div>
                    <div class="small text-muted">
                        {!! $experience->company !!}
                    </div>
                    <div class="small text-muted">
                        {!! $experience->companyAddress !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div>
                    {!! $experience->companyContent !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
