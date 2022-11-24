<!-- Thumbnail Field -->
<div class="form-group">
    {!! Form::label('thumbnail', __("validation.attributes.Thumbnail")) !!}
    <p><img src="{{ $events->getFile("thumbnail")}}" style="max-width: 120px"></p>
</div>

<!-- Imageurl Field -->
<div class="form-group">
    {!! Form::label('imageUrl',  __("validation.attributes.ImageUrl")) !!}
    <p><img src="{{ $events->getFile("imageUrl")}}" style="max-width: 120px"></p>
</div>

<!-- Alias Field -->
<div class="form-group">
    {!! Form::label('alias',  __("validation.attributes.Alias")) !!}
    <p>{{ $events->alias }}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link',  __("validation.attributes.Link")) !!}
    <p>{{ $events->link }}</p>
</div>

<!-- Titleru Field -->
<div class="form-group">
    {!! Form::label('titleRu',  __("validation.attributes.TitleRu")) !!}
    <p>{{ $events->titleRu }}</p>
</div>

<!-- Titlekz Field -->
<div class="form-group">
    {!! Form::label('titleKz',  __("validation.attributes.TitleKz")) !!}
    <p>{{ $events->titleKz }}</p>
</div>

<!-- Titleen Field -->
<div class="form-group">
    {!! Form::label('titleEn',  __("validation.attributes.TitleEn")) !!}
    <p>{{ $events->titleEn }}</p>
</div>

<!-- Subtitleru Field -->
<div class="form-group">
    {!! Form::label('subtitleRu',  __("validation.attributes.SubtitleRu")) !!}
    <p>{{ $events->subtitleRu }}</p>
</div>

<!-- Subtitlekz Field -->
<div class="form-group">
    {!! Form::label('subtitleKz', __("validation.attributes.SubtitleKz")) !!}
    <p>{{ $events->subtitleKz }}</p>
</div>

<!-- Subtitleen Field -->
<div class="form-group">
    {!! Form::label('subtitleEn',  __("validation.attributes.SubtitleEn")) !!}
    <p>{{ $events->subtitleEn }}</p>
</div>

<!-- Descriptionru Field -->
<div class="form-group">
    {!! Form::label('descriptionRu',  __("validation.attributes.DescriptionRu")) !!}
    <p>{{ $events->descriptionRu }}</p>
</div>

<!-- Descriptionkz Field -->
<div class="form-group">
    {!! Form::label('descriptionKz',  __("validation.attributes.DescriptionKz")) !!}
    <p>{{ $events->descriptionKz }}</p>
</div>

<!-- Descriptionen Field -->
<div class="form-group">
    {!! Form::label('descriptionEn',  __("validation.attributes.DescriptionEn")) !!}
    <p>{{ $events->descriptionEn }}</p>
</div>

<!-- Publishedat Field -->
<div class="form-group">
    {!! Form::label('publishedAt',  __("validation.attributes.PublishedAt")) !!}
    <p>{{ $events->publishedAt }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status',  __("validation.attributes.Status")) !!}
    <p>{{ $events->status == true ?  __("validation.attributes.Active") :  __("validation.attributes.Non-Active") }}</p>
</div>

