<!-- Thumbnail Field -->
<div class="form-group">
    {!! Form::label('thumbnail', __("validation.attributes.Thumbnail")) !!}
    <p><img src="{{ $programm->getFile("thumbnail")}}" style="max-width: 120px"></p>
</div>

<!-- Imageurl Field -->
<div class="form-group">
    {!! Form::label('imageUrl',  __("validation.attributes.ImageUrl")) !!}
    <p><img src="{{ $programm->getFile("imageUrl")}}" style="max-width: 120px"></p>
</div>

<!-- Alias Field -->
<div class="form-group">
    {!! Form::label('alias',  __("validation.attributes.Alias")) !!}
    <p>{{ $programm->alias }}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link',  __("validation.attributes.Link")) !!}
    <p>{{ $programm->link }}</p>
</div>

<!-- Titleru Field -->
<div class="form-group">
    {!! Form::label('titleRu',  __("validation.attributes.TitleRu")) !!}
    <p>{{ $programm->titleRu }}</p>
</div>

<!-- Titlekz Field -->
<div class="form-group">
    {!! Form::label('titleKz',  __("validation.attributes.TitleKz")) !!}
    <p>{{ $programm->titleKz }}</p>
</div>

<!-- Titleen Field -->
<div class="form-group">
    {!! Form::label('titleEn',  __("validation.attributes.TitleEn")) !!}
    <p>{{ $programm->titleEn }}</p>
</div>

<!-- Subtitleru Field -->
<div class="form-group">
    {!! Form::label('subtitleRu',  __("validation.attributes.SubtitleRu")) !!}
    <p>{{ $programm->subtitleRu }}</p>
</div>

<!-- Subtitlekz Field -->
<div class="form-group">
    {!! Form::label('subtitleKz', __("validation.attributes.SubtitleKz")) !!}
    <p>{{ $programm->subtitleKz }}</p>
</div>

<!-- Subtitleen Field -->
<div class="form-group">
    {!! Form::label('subtitleEn',  __("validation.attributes.SubtitleEn")) !!}
    <p>{{ $programm->subtitleEn }}</p>
</div>

<!-- Descriptionru Field -->
<div class="form-group">
    {!! Form::label('descriptionRu',  __("validation.attributes.DescriptionRu")) !!}
    <p>{{ $programm->descriptionRu }}</p>
</div>

<!-- Descriptionkz Field -->
<div class="form-group">
    {!! Form::label('descriptionKz',  __("validation.attributes.DescriptionKz")) !!}
    <p>{{ $programm->descriptionKz }}</p>
</div>

<!-- Descriptionen Field -->
<div class="form-group">
    {!! Form::label('descriptionEn',  __("validation.attributes.DescriptionEn")) !!}
    <p>{{ $programm->descriptionEn }}</p>
</div>

<!-- Publishedat Field -->
<div class="form-group">
    {!! Form::label('publishedAt',  __("validation.attributes.PublishedAt")) !!}
    <p>{{ $programm->publishedAt }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status',  __("validation.attributes.Status")) !!}
    <p>{{ $programm->status == true ?  __("validation.attributes.Active") :  __("validation.attributes.Non-Active") }}</p>
</div>

