<!-- Thumbnail Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('thumbnail', __("validation.attributes.Thumbnail")) !!}<br>
    {!! Form::file('thumbnail', null, ['class' => 'form-control']) !!}
</div>

<!-- Imageurl Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('imageUrl', __("validation.attributes.ImageUrl")) !!}<br>
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
    {!! Form::label('subtitleKz', __("validation.attributes.SubtitleKz")) !!}
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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__("validation.attributes.Save"), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('awards.index') }}" class="btn btn-secondary">{{__("validation.attributes.Cancel")}}</a>
</div>
