<!-- Salarymin Field -->
<div class="form-group">
    {!! Form::label('salaryMin', __("validation.attributes.salaryMin")) !!}
    <p>{{ $vacancy->salaryMin }}</p>
</div>

<!-- Salarymax Field -->
<div class="form-group">
    {!! Form::label('salaryMax', __("validation.attributes.salaryMax")) !!}
    <p>{{ $vacancy->salaryMax }}</p>
</div>

<!-- Alias Field -->
<div class="form-group">
    {!! Form::label('alias', __("validation.attributes.Alias")) !!}
    <p>{{ $vacancy->alias }}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', __("validation.attributes.Link")) !!}
    <p>{{ $vacancy->link }}</p>
</div>

<!-- Titleru Field -->
<div class="form-group">
    {!! Form::label('titleRu', __("validation.attributes.TitleRu")) !!}
    <p>{{ $vacancy->titleRu }}</p>
</div>

<!-- Titlekz Field -->
<div class="form-group">
    {!! Form::label('titleKz', __("validation.attributes.TitleKz")) !!}
    <p>{{ $vacancy->titleKz }}</p>
</div>

<!-- Titleen Field -->
<div class="form-group">
    {!! Form::label('titleEn', __("validation.attributes.TitleEn")) !!}
    <p>{{ $vacancy->titleEn }}</p>
</div>

<!-- Subtitleru Field -->
<div class="form-group">
    {!! Form::label('subtitleRu', __("validation.attributes.SubtitleRu")) !!}
    <p>{{ $vacancy->subtitleRu }}</p>
</div>

<!-- Subtitlekz Field -->
<div class="form-group">
    {!! Form::label('subtitleKz', __("validation.attributes.SubtitleKz")) !!}
    <p>{{ $vacancy->subtitleKz }}</p>
</div>

<!-- Subtitleen Field -->
<div class="form-group">
    {!! Form::label('subtitleEn', __("validation.attributes.SubtitleEn")) !!}
    <p>{{ $vacancy->subtitleEn }}</p>
</div>

<!-- Descriptionru Field -->
<div class="form-group">
    {!! Form::label('descriptionRu', __("validation.attributes.DescriptionRu")) !!}
    <p>{{ $vacancy->descriptionRu }}</p>
</div>

<!-- Descriptionkz Field -->
<div class="form-group">
    {!! Form::label('descriptionKz', __("validation.attributes.DescriptionKz")) !!}
    <p>{{ $vacancy->descriptionKz }}</p>
</div>

<!-- Descriptionen Field -->
<div class="form-group">
    {!! Form::label('descriptionEn', __("validation.attributes.DescriptionEn")) !!}
    <p>{{ $vacancy->descriptionEn }}</p>
</div>

<!-- Location Field -->
<div class="form-group">
    {!! Form::label('location', __("validation.attributes.Location")) !!}
    <p>{{ $vacancy->location }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __("validation.attributes.Phone")) !!}
    <p>{{ $vacancy->phone }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __("validation.attributes.Email")) !!}
    <p>{{ $vacancy->email }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __("validation.attributes.Status")) !!}
    <p>{{ $vacancy->status == true ? __("validation.attributes.Active") : __("validation.attributes.Non-Active") }}</p>
</div>

