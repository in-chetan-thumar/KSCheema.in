<div class="offcanvas offcanvas-end" style="width: 30% !important;" tabindex="-1" id="offcanvasCreate"
    aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{ isset($newsdata) ? 'Edit' : 'Create Fresh' }} News Details
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        @if (isset($newsdata))
            {!! Form::open([
                'url' => route('news.update', $newsdata->id),
                'method' => 'PATCH',
                'id' => 'news-form',
                'files' => true,
            ]) !!}
        @else
            {!! Form::open(['url' => route('news.store'), 'method' => 'POST', 'id' => 'news-form', 'files' => true]) !!}
        @endif

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('checkbox', 'Category', ['style' => 'justify-content: right']) !!}<span class="required">*</span><br>
                        {!! Form::radio('category', 'LATEST_NEWS', false, ['onclick' => 'javascript:yesCheck()', 'id' => 'latest_news',]) !!}
                        {!! Form::label('latest news', 'Latest News') !!}

                        {!! Form::radio('category', 'ARTICALES', false, ['onclick' => 'javascript:yesCheck()', 'id' => 'articales']) !!}
                        {!! Form::label('artical', 'Articales') !!}
                        
                        {!! Form::radio('category', 'FEATURED_STORIES', false, ['onclick' => 'javascript:yesCheck()', 'id' => 'featured_stories',]) !!}
                        {!! Form::label('fatured stories', 'Featured Stories') !!}

                        @error('redio')
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
                        {!! Form::label('title', 'Title', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {!! Form::text('title', isset($newsdata) ? $newsdata->title : old('title'), ['class' => 'form-control']) !!}
                        @error('title')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12" id="description">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('description', 'Description', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {!! Form::textarea('description', isset($newsdata) ? $newsdata->description : old('description'), [
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

        <div class="row" id="cover_image" style="display: none">
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('image', 'Select Cover Image', ['style' => 'justify-content: right']) !!}
                        <span class="required">*</span>
                        {{-- <span class="required">@if (!isset($newsdata))*@endif</span> --}}
                        {!! Form::file('cover_image', ['class' => 'form-control', 'id' => 'image']) !!}
                        @error('image')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="media_image" style="display: none">
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('image', 'Select Media Image', ['style' => 'justify-content: right']) !!}
                        <span class="required">*</span>
                        {{-- <span class="required">@if (!isset($newsdata))*@endif</span> --}}
                        {!! Form::file('media_image', ['class' => 'form-control', 'id' => 'image', 'multiple' => true]) !!}
                        @error('image')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12" id="link" style="display: none">
            <div class="mb-3">
                <div class="form-group">
                    {!! Form::label('link', 'Link', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                    {!! Form::text('link', isset($newsdata) ? $newsdata->link : old('link'), ['class' => 'form-control']) !!}
                    @error('link')
                        <span style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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

{!! JsValidator::formRequest('App\Http\Requests\NewsRequest', '#news-form') !!}
<script>
    function yesCheck() {
        $('#link').hide();
            $('#cover_image').hide();
            $('#media_image').hide();
        if ($('input[name="category"]:checked').val() == 'ARTICALES'){
            $('#link').show();
        }
        else
        { 
            $('#link').show();
            $('#cover_image').show();
            $('#media_image').show();
         }
    }

    // Save OR UPDATE DATA
    $('#news-form').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData($('#news-form')[0]);
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
