<!-- Titleru Field -->
<div class="form-group">
    {!! Form::label('titleRu', __("validation.attributes.TitleRu")) !!}
    <p>{{ $tag->titleRu }}</p>
</div>

<!-- Titlekz Field -->
<div class="form-group">
    {!! Form::label('titleKz', __("validation.attributes.TitleKz")) !!}
    <p>{{ $tag->titleKz }}</p>
</div>

<!-- Titleen Field -->
<div class="form-group">
    {!! Form::label('titleEn', __("validation.attributes.TitleEn")) !!}
    <p>{{ $tag->titleEn }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __("validation.attributes.Status")) !!}
    <p>{{ $tag->status == true ? __("validation.attributes.Active") : __("validation.attributes.Non-Active") }}</p>
</div>

