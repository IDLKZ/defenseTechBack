<!-- Parent Id Field -->
<div class="form-group">
    {!! Form::label('parent_id', __("validation.attributes.Category")) !!}
    <p>{{ $category->parent_id }}</p>
</div>

<!-- Alias Field -->
<div class="form-group">
    {!! Form::label('alias', __("validation.attributes.Alias")) !!}
    <p>{{ $category->alias }}</p>
</div>

<!-- Titleru Field -->
<div class="form-group">
    {!! Form::label('titleRu', __("validation.attributes.TitleRu")) !!}
    <p>{{ $category->titleRu }}</p>
</div>

<!-- Titlekz Field -->
<div class="form-group">
    {!! Form::label('titleKz', __("validation.attributes.TitleKz")) !!}
    <p>{{ $category->titleKz }}</p>
</div>

<!-- Titleen Field -->
<div class="form-group">
    {!! Form::label('titleEn', __("validation.attributes.TitleEn")) !!}
    <p>{{ $category->titleEn }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __("validation.attributes.Status")) !!}
    <p>{{ $category->status == true ? __("validation.attributes.Active") : __("validation.attributes.Non-Active") }}</p>
</div>

