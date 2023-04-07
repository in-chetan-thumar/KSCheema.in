@extends('front.layouts.master')

@section('title') Careers @endsection

@section('content')
    <div class="container career-section view-open-page">
        <div class="container">
            <h1>Join A Team That's Dedicated To Helping You Succeed</h1>
        </div>
    </div>

    <div class="container">
        <form class="open-positions-form">
            <h2 class="number_of_jobs">{{$jobs->count()}} Open Positions</h2>
            <div class="open-positions">
                <div class="input-group">
                    <label class="select-label">Choose Company</label>
                    <div class="form-group input-box select-box">
                        {{Form::select('',$companies,'',['class'=>'form-select company','placeholder'=>"Select company"])}}
                    </div>
                </div>
                <div class="input-group">
                    <label class="select-label">Choose Location</label>
                    <div class="form-group input-box select-box">
                        {{Form::select('',[],'',['class'=>'form-select location','placeholder'=>"Select location"])}}
                    </div>
                </div>
                <div class="input-group">
                    <label class="select-label">Choose Department</label>
                    <div class="form-group input-box select-box">
                        {{Form::select('',$jobDepartments,'',['class'=>'form-select department','placeholder'=>"Select department"])}}
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="container search-job-main">
        <h2>Sales</h2>
        <div class="search-job">
            <input class="search-job-input form-control input" placeholder="Search with job title" type="text">
            <span class="search-icon"><img src="front/images/career/search.png" alt="search-icon"></span>
        </div>
    </div>

    <div class="accordion accordion-flush container joblist" id="accordionExample">
        {!! $job_list_view !!}
    </div>

    <div class="drop-your">
        <div class="container">
            <h6>Drop your CV here for our records and future requirements</h6>
            <button class="form-button apply-job" data-type="1">Apply Now<img
                    src="front/images/contact/Arrow-button.png" alt="">
            </button>
            <p>Follow us on <a href="#">LinkedIn</a> to explore future job openings.</p>
        </div>
    </div>

    <div class="modal fade" id="apply-position" tabindex="-1" aria-labelledby="cardekho" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="apply-position-form">

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="apply-success" tabindex="-1" aria-labelledby="cardekho" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="succeed-item">
                    <h5>SUCCESSFULLY APLLIED!</h5>
                    <img src="front/images/career/applay.png" alt="applay">
                    <p>Thanks for your interest in the position, we will contact you soon.</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js')}}"></script>

    <script>

        $(".apply-job").on('click', function (e) {
            var formData = new FormData();
            formData.append('type',$(e.currentTarget).data('type'))
            formData.append('company_id',$(e.currentTarget).data('company-id'))
            formData.append('job_id',$(e.currentTarget).data('job-id'))
            formData.append('company_location_id',$(e.currentTarget).data('company-location-id'))
            formData.append('job_department_id',$(e.currentTarget).data('job-department-id'))
            var url = window.origin+"/view-apply-form";

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                processData: false,
                contentType: false,
                type: 'POST',
                data: formData,
                success: function (data, textStatus, jqXHR) {
                    if (!data.error) {
                        $("#apply-position").modal('show')
                        $(".apply-position-form").html(data.view)
                    } else {
                        alert(data.message);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error occurred!');
                }
            });
        });


        $(".company").on('change', function (e) {
            var company_id = $(e.currentTarget).val();
            if (company_id != '') {
                $(".location").empty();
                e.preventDefault();
                var url = window.origin + "/view-open-positions/company/" + company_id;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: "get",
                    data: {},
                    success: function (data, textStatus, jqXHR) {
                        if (!data.error) {
                            $(".location").html(data.options)
                            refreshJobList();
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert('Error occurred!');
                    }
                });
            }
        });

        $(".location").on('change', function (e) {
            refreshJobList();
        });
        $(".department").on('change', function (e) {
            refreshJobList();
        });
        $(".search-job-input").on('input', function (e) {
            var queryString = $(this).val();
            refreshJobList(queryString);
        })

        function refreshJobList(queryString = '') {
            var company = $(".company").val();
            var location = $(".location").val();
            var department = $(".department").val();

            var formData = new FormData();
            formData.append('query_str', queryString);
            formData.append('company_id', company);
            formData.append('company_location_id', location);
            formData.append('job_department_id', department);
            var url = window.origin + "/view-open-positions/job";
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                processData: false,
                contentType: false,
                type: "POST",
                data: formData,
                success: function (data, textStatus, jqXHR) {
                    if (!data.error) {
                        $(".joblist").html(data.view)
                        $(".number_of_jobs").text(data.number_of_jobs)
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error occurred!');
                }
            });
        }
    </script>
@endsection
