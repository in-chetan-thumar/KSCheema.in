<h6>Apply</h6>
{{Form::open(['url'=>route('store.job.application'),'method'=>'post','files'=>true,'id'=>'store-job-application'])}}
{{Form::hidden('type',$params['type'])}}
@if($params['type'] == 0)
    {{Form::hidden('company_id',$params['company_id'])}}
    {{Form::hidden('job_id',$params['job_id'])}}
    {{Form::hidden('company_location_id',$params['company_location_id'])}}
    {{Form::hidden('job_department_id',$params['job_department_id'])}}
@endif
<div class="apply-position-list">
    <div class="form-group">
        <label for="firstname">First Name</label>
        {{Form::text('first_name','',['class'=>'first_name','placeholder'=>'First Name'])}}
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        {{Form::text('last_name','',['class'=>'last_name','placeholder'=>'Last Name'])}}
    </div>
    @if($params['type'] == 1)
        <div class="form-group">
            <label for="preferred-location">Preferred Company</label>
            {{Form::select('company_id',$companies,'',['class'=>'company','id'=>'company_id','placeholder'=>'Select company'])}}
        </div>

        <div class="form-group">
            <label for="preferred-location">Current Location</label>
            {{Form::text('current_location','',['class'=>'location current_location','placeholder'=>'Enter current location'])}}
        </div>

        <div class="form-group">
            <label for="preferred-location">Department</label>
            {{Form::select('job_department_id',$jobDepartments,'',['class'=>'form-select job_department_id','placeholder'=>"Select department"])}}
        </div>
    @endif
    <div class="form-group">
        <label for="total-experience">Total Experience</label>
        {{Form::select('total_experience',['1-2 Years'=>'1-2 Years','2-4 Years'=>'2-4 Years','4-6 Years'=>'4-6 Years','6-8 Years'=>'6-8 Years'],'',['class'=>'total_experience','placeholder'=>'Select experience'])}}
    </div>
    <div class="form-group">
        <label for="contact-number">Contact Number</label>
        {{Form::number('contact_number','',['class'=>'contact_number','placeholder'=>'Enter Phone Number'])}}
    </div>
    <div class="form-group">
        <label for="contact-number">Mail ID</label>
        {{Form::email('email','',['class'=>'email','placeholder'=>'sample@gmail.com'])}}
    </div>
</div>
<div class="uplode-submit-button">
    <div class="uplode-button">
        <input class="file-two" type="file" name="file_name">
        <img src="front/images/career/attach.png" alt="attach">
        <span>Attach CV</span>
    </div>
    <div class="submit-button">
        <button type="submit" class="form-button">Submit<img
                src="front/images/contact/Arrow-button.png" alt="">
        </button>
    </div>
</div>
{{Form::close()}}
{!! JsValidator::formRequest('App\Http\Requests\JobApplicationRequest', '#store-job-application'); !!}
<script>
    $("#store-job-application").on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData($('#store-job-application')[0]);
        var url = $(this).attr('action');
        var method = $(this).attr('method');

        if ($(this).valid()) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                processData: false,
                contentType: false,
                type: method,
                data: formData,
                success: function (data, textStatus, jqXHR) {
                    if (!data.error) {
                        $("#apply-position").modal('hide');
                        $("#apply-success").modal('show');

                    } else {
                        alert(data.message);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error occurred!');
                }
            });
        }
    });
</script>
