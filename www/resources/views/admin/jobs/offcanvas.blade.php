<div class="offcanvas offcanvas-end" style="width: 40% !important;" tabindex="-1" id="offcanvasCreate"
    aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{ isset($newsdata) ? 'Edit' : 'Create' }} Job
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        @if (isset($job))
            {!! Form::open([
                'url' => route('job.update', $job->id),
                'method' => 'PATCH',
                'id' => 'job-form',
                'files' => true,
            ]) !!}
        @else
            {!! Form::open(['url' => route('job.store'), 'method' => 'POST', 'id' => 'job-form', 'files' => true]) !!}
        @endif

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('company_id', 'Company', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {{Form::select('company_id',$companies,isset($job) ? $job->company_id : old('company_id'),['class'=>'form-select company','placeholder'=>"Select company"])}}
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('company_location_id', 'Company location', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {{Form::select('company_location_id',isset($job)?$locations:[],isset($job) ? $job->company_location_id:'',['class'=>'form-select location','placeholder'=>"Select location"])}}
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('job_department_id', 'Department', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {{Form::select('job_department_id',$jobDepartments,isset($job) ? $job->job_department_id : old('job_department_id'),['class'=>'form-select department','placeholder'=>"Select department"])}}
                    </div>
                </div>
            </div>

            <div class="col-12" id="title1">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('title', 'Title', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {!! Form::text('title', isset($job) ? $job->title : old('title'), ['class' => 'form-control']) !!}
                        @error('title')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12" id="title1">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('sub_title', 'Sub title', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {!! Form::text('sub_title', isset($job) ? $job->sub_title : old('sub_title'), ['class' => 'form-control']) !!}
                        @error('sub_title')
                        <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('description', 'Description', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {!! Form::textarea('description', isset($job) ? $job->description : old('description'), [
                            'class' => 'form-control',
                        ]) !!}
                        @error('description')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>
{!! JsValidator::formRequest('App\Http\Requests\JobRequest', '#job-form') !!}
<script>
    //CK Editor
    CKEDITOR.replace('description', {
        extraPlugins: 'colorbutton,colordialog,font'
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
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error occurred!');
                }
            });
        }
    });

    // Save OR UPDATE DATA
    $('#job-form').on('submit', function(e) {
        e.preventDefault();
        CKEDITOR.instances['description'].updateElement();
        var formData = new FormData($('#job-form')[0]);
        var url = $(this).attr('action');
        var method = $(this).attr('method');

        if ($(this).valid()) {
            $('#status').show();
            $('#preloader').show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                processData: false,
                contentType: false,
                type: method,
                data: formData,
                success: function(data, textStatus, jqXHR) {
                    if (!data.error) {
                        $('#status').hide();
                        $('#preloader').hide();
                        $(".divtable").html(data.view);

                        toastr.success(data.message);
                        let closeCanvas = document.querySelector('[data-bs-dismiss="offcanvas"]');
                        closeCanvas.click();
                        //location.reload();
                    } else {
                        $('#status').hide();
                        $('#preloader').hide();
                        toastr.error(data.message);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#status').hide();
                    $('#preloader').hide();
                    toastr.error('Error occurred!');
                }
            });
        }
    })
</script>
