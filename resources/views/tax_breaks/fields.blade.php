<!-- Thumbnail Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('thumbnail', __("validation.attributes.Thumbnail")) !!}
    {!! Form::file('thumbnail', null, ['class' => 'form-control']) !!}
</div>

<!-- Imageurl Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('imageUrl', __("validation.attributes.ImageUrl")) !!}
    {!! Form::file('imageUrl', null, ['class' => 'form-control']) !!}
</div>


<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', __("validation.attributes.Link")) !!}
    {!! Form::text('link', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Titleru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titleRu', __("validation.attributes.TitleRu")) !!}
    {!! Form::text('titleRu', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Titlekz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titleKz', __("validation.attributes.TitleKz")) !!}
    {!! Form::text('titleKz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Titleen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titleEn', __("validation.attributes.TitleEn")) !!}
    {!! Form::text('titleEn', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Subtitleru Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('subtitleRu', __("validation.attributes.SubtitleRu")) !!}
    {!! Form::textarea('subtitleRu', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtitlekz Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('subtitleKz',__("validation.attributes.SubtitleKz")) !!}
    {!! Form::textarea('subtitleKz', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtitleen Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('subtitleEn', __("validation.attributes.SubtitleEn")) !!}
    {!! Form::textarea('subtitleEn', null, ['class' => 'form-control']) !!}
</div>

<!-- Descriptionru Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descriptionRu', __("validation.attributes.DescriptionRu")) !!}
    {!! Form::textarea('descriptionRu', null, ['class' => 'form-control']) !!}
</div>

<!-- Descriptionkz Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descriptionKz', __("validation.attributes.DescriptionKz")) !!}
    {!! Form::textarea('descriptionKz', null, ['class' => 'form-control']) !!}
</div>

<!-- Descriptionen Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descriptionEn', __("validation.attributes.DescriptionEn")) !!}
    {!! Form::textarea('descriptionEn', null, ['class' => 'form-control']) !!}
</div>

<!-- Publishedat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publishedAt', __("validation.attributes.PublishedAt")) !!}
    {!! Form::text('publishedAt', null, ['class' => 'form-control','id'=>'publishedAt']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#publishedAt').datetimepicker({
            format: 'DD-MM-YYYY HH:mm:ss',
            useCurrent: true,
            icons: {
                up: "icon-arrow-up-circle icons font-2xl",
                down: "icon-arrow-down-circle icons font-2xl"
            },
            sideBySide: true
        })
    </script>
@endpush


<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', __("validation.attributes.Status")) !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__("validation.attributes.Save"), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('events.index') }}" class="btn btn-secondary">{{__("validation.attributes.Cancel")}}</a>
</div>
