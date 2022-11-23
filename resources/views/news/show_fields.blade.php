<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', __("validation.attributes.CategoryId")) !!}
    <p>{{ $news->category_id }}</p>
</div>

<!-- Thumbnail Field -->
<div class="form-group">
    {!! Form::label('thumbnail', __("validation.attributes.Thumbnail")) !!}
    <img src="{{ $news->getFile("thumbnail") }}" style="max-width: 100px">
</div>

<!-- Imageurl Field -->
<div class="form-group">
    {!! Form::label('imageUrl',  __("validation.attributes.ImageUrl")) !!}
    <img src="{{ $news->getFile("imageUrl") }}" style="max-width: 100px">
</div>

<!-- Alias Field -->
<div class="form-group">
    {!! Form::label('alias', __("validation.attributes.Alias")) !!}
    <p>{{ $news->alias }}</p>
</div>

<!-- Titleru Field -->
<div class="form-group">
    {!! Form::label('titleRu', __("validation.attributes.TitleRu")) !!}
    <p>{{ $news->titleRu }}</p>
</div>

<!-- Titlekz Field -->
<div class="form-group">
    {!! Form::label('titleKz', __("validation.attributes.TitleKz")) !!}
    <p>{{ $news->titleKz }}</p>
</div>

<!-- Titleen Field -->
<div class="form-group">
    {!! Form::label('titleEn', __("validation.attributes.TitleEn")) !!}
    <p>{{ $news->titleEn }}</p>
</div>

<!-- Subtitleru Field -->
<div class="form-group">
    {!! Form::label('subtitleRu', __("validation.attributes.SubtitleRu")) !!}
    <p>{{ $news->subtitleRu }}</p>
</div>

<!-- Subtitlekz Field -->
<div class="form-group">
    {!! Form::label('subtitleKz', __("validation.attributes.SubtitleKz")) !!}
    <p>{{ $news->subtitleKz }}</p>
</div>

<!-- Subtitleen Field -->
<div class="form-group">
    {!! Form::label('subtitleEn', __("validation.attributes.SubtitleEn")) !!}
    <p>{{ $news->subtitleEn }}</p>
</div>

<!-- Descriptionru Field -->
<div class="form-group">
    {!! Form::label('descriptionRu', __("validation.attributes.DescriptionRu")) !!}
    <p>{{ $news->descriptionRu }}</p>
</div>

<!-- Descriptionkz Field -->
<div class="form-group">
    {!! Form::label('descriptionKz', __("validation.attributes.DescriptionKz")) !!}
    <p>{{ $news->descriptionKz }}</p>
</div>

<!-- Descriptionen Field -->
<div class="form-group">
    {!! Form::label('descriptionEn', __("validation.attributes.DescriptionEn")) !!}
    <p>{{ $news->descriptionEn }}</p>
</div>

<!-- Publishedat Field -->
<div class="form-group">
    {!! Form::label('publishedAt', __("validation.attributes.PublishedAt")) !!}
    <p>{{ $news->publishedAt }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __("validation.attributes.Status")) !!}
    <p>{{ $news->status == true ? __("validation.attributes.Active") :__("validation.attributes.Non-Active")  }}</p>
</div>

