@foreach($jobs as $job_key => $job)
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading{{$job_key}}">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse{{$job_key}}" aria-expanded="true" aria-controls="collapse{{$job_key}}">
                <div class="heading">
                    <h3>{{$job['title']}}</h3>
                    
                    <p>{{ $job->company->company_name }} - {{ $job->company_locations->city}}, {{ $job->company_locations->state}}</p>
                </div>
                <div class="form-button">View More<img src="front/images/contact/Arrow-button.png" alt=""></div>
            </button>
        </h2>
        <div id="collapse{{$job_key}}" class="accordion-collapse collapse" aria-labelledby="heading{{$job_key}}"
             data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="sub-detail">
                    {!! $job['description'] !!}
                    <div class="form-button apply-job" data-type="0" data-job-id="{{$job['id']}}" data-company-id="{{$job['company_id']}}"
                         data-company-location-id="{{$job['company_location_id']}}"
                         data-job-department-id="{{$job['job_department_id']}}"
                    >Apply for this
                        position<img src="front/images/contact/Arrow-button.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>

@endforeach

