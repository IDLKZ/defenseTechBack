<!-- Thumbnail Field -->
<div class="form-group">
    {!! Form::label('thumbnail', __("validation.attributes.Thumbnail")) !!}<br>
    <img src="{{ $award->getFile("thumbnail") }}" style="max-width: 120px">
</div>

<!-- Imageurl Field -->
<div class="form-group">
    {!! Form::label('imageUrl', __("validation.attributes.ImageUrl")) !!}<br>
    <img src="{{ $award->getFile("imageUrl") }}" style="max-width: 120px">

</div>

<!-- Alias Field -->
<div class="form-group">
    {!! Form::label('alias', __("validation.attributes.Alias")) !!}
    <p>{{ $award->alias }}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', __("validation.attributes.Link")) !!}
    <p>{{ $award->link }}</p>
</div>

<!-- Titleru Field -->
<div class="form-group">
    {!! Form::label('titleRu', __("validation.attributes.TitleRu")) !!}
    <p>{{ $award->titleRu }}</p>
</div>

<!-- Titlekz Field -->
<div class="form-group">
    {!! Form::label('titleKz', __("validation.attributes.TitleKz")) !!}
    <p>{{ $award->titleKz }}</p>
</div>

<!-- Titleen Field -->
<div class="form-group">
    {!! Form::label('titleEn', __("validation.attributes.TitleEn")) !!}
    <p>{{ $award->titleEn }}</p>
</div>

<!-- Subtitleru Field -->
<div class="form-group">
    {!! Form::label('subtitleRu', __("validation.attributes.SubtitleRu")) !!}
    <p>{{ $award->subtitleRu }}</p>
</div>

<!-- Subtitlekz Field -->
<div class="form-group">
    {!! Form::label('subtitleKz', __("validation.attributes.SubtitleKz")) !!}
    <p>{{ $award->subtitleKz }}</p>
</div>

<!-- Subtitleen Field -->
<div class="form-group">
    {!! Form::label('subtitleEn', __("validation.attributes.SubtitleEn")) !!}
    <p>{{ $award->subtitleEn }}</p>
</div>

<!-- Descriptionru Field -->
<div class="form-group">
    {!! Form::label('descriptionRu', __("validation.attributes.DescriptionRu")) !!}
    <p>{{ $award->descriptionRu }}</p>
</div>

<!-- Descriptionkz Field -->
<div class="form-group">
    {!! Form::label('descriptionKz', __("validation.attributes.DescriptionKz")) !!}
    <p>{{ $award->descriptionKz }}</p>
</div>

<!-- Descriptionen Field -->
<div class="form-group">
    {!! Form::label('descriptionEn', __("validation.attributes.DescriptionEn")) !!}
    <p>{{ $award->descriptionEn }}</p>
</div>

