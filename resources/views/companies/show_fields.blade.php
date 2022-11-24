<!-- Titleru Field -->
<div class="form-group">
    {!! Form::label('titleRu', __("validation.attributes.TitleRu")) !!}
    <p>{{ $company->titleRu }}</p>
</div>

<!-- Titlekz Field -->
<div class="form-group">
    {!! Form::label('titleKz',__("validation.attributes.TitleKz")) !!}
    <p>{{ $company->titleKz }}</p>
</div>

<!-- Titleen Field -->
<div class="form-group">
    {!! Form::label('titleEn', __("validation.attributes.TitleEn")) !!}
    <p>{{ $company->titleEn }}</p>
</div>

<!-- Subtitleru Field -->
<div class="form-group">
    {!! Form::label('subtitleRu', __("validation.attributes.SubtitleRu")) !!}
    <p>{{ $company->subtitleRu }}</p>
</div>

<!-- Subtitlekz Field -->
<div class="form-group">
    {!! Form::label('subtitleKz', __("validation.attributes.SubtitleKz")) !!}
    <p>{{ $company->subtitleKz }}</p>
</div>

<!-- Subtitleen Field -->
<div class="form-group">
    {!! Form::label('subtitleEn', __("validation.attributes.SubtitleEn")) !!}
    <p>{{ $company->subtitleEn }}</p>
</div>

<!-- Descriptionru Field -->
<div class="form-group">
    {!! Form::label('descriptionRu', __("validation.attributes.DescriptionRu")) !!}
    <p>{{ $company->descriptionRu }}</p>
</div>

<!-- Descriptionkz Field -->
<div class="form-group">
    {!! Form::label('descriptionKz', __("validation.attributes.DescriptionKz")) !!}
    <p>{{ $company->descriptionKz }}</p>
</div>

<!-- Descriptionen Field -->
<div class="form-group">
    {!! Form::label('descriptionEn', __("validation.attributes.DescriptionEn")) !!}
    <p>{{ $company->descriptionEn }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __("validation.attributes.Status")) !!}
    <p>{{ $company->status == true ? __("validation.attributes.Active") : __("validation.attributes.Non-Active") }}</p>
</div>

