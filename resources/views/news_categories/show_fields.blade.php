<!-- Alias Field -->
<div class="form-group">
    {!! Form::label('alias', __("validation.attributes.Alias")) !!}
    <p>{{ $newsCategory->alias }}</p>
</div>

<!-- Titleru Field -->
<div class="form-group">
    {!! Form::label('titleRu', __("validation.attributes.TitleRu")) !!}
    <p>{{ $newsCategory->titleRu }}</p>
</div>

<!-- Titlekz Field -->
<div class="form-group">
    {!! Form::label('titleKz', __("validation.attributes.TitleKz")) !!}
    <p>{{ $newsCategory->titleKz }}</p>
</div>

<!-- Titleen Field -->
<div class="form-group">
    {!! Form::label('titleEn',__("validation.attributes.TitleEn")) !!}
    <p>{{ $newsCategory->titleEn }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __("validation.attributes.Status")) !!}
    <p>{{ $newsCategory->status == true ? __("validation.attributes.Active") : __("validation.attributes.Non-Active") }}</p>
</div>

