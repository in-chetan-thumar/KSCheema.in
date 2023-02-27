<div class="offcanvas offcanvas-end" style="width: 30% !important;" tabindex="-1" id="offcanvasCreate"
    aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">Edit Page Details</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        {!! Form::open([
            'url' => route('page.update', $pagedata->id),
            'method' => 'PATCH',
            'id' => 'page-form',
            'files' => true,
        ]) !!}
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('title', 'Title', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {!! Form::text('title', $pagedata->title, ['class' => 'form-control', 'id' => 'titley']) !!}
                        @error('title')
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
                        {!! Form::label('meta_keywords', 'Meta Keywords', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {!! Form::text('meta_keywords', $pagedata->meta_keywords, ['class' => 'form-control', 'id' => 'meta_keywords']) !!}
                        @error('meta_keywords')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('meta_description', 'Meta Description', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {!! Form::text('meta_description', $pagedata->meta_description, [
                            'class' => 'form-control',
                            'id' => 'meta_description',
                        ]) !!}
                        @error('meta_description')
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
{!! JsValidator::formRequest('App\Http\Requests\PageRequest', '#page-form') !!}
<script>
    // Save OR UPDATE DATA
    $('#page-form').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData($('#page-form')[0]);
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
