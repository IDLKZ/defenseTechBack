<!-- Thumbnail Field -->
<div class="form-group">
    {!! Form::label('thumbnail', __("validation.attributes.Thumbnail")) !!}
    <p><img src="{{ $office->getFile("thumbnail")}}" style="max-width: 120px"></p>
</div>

<!-- Imageurl Field -->
<div class="form-group">
    {!! Form::label('imageUrl',  __("validation.attributes.ImageUrl")) !!}
    <p><img src="{{ $office->getFile("imageUrl")}}" style="max-width: 120px"></p>
</div>

<!-- Alias Field -->
<div class="form-group">
    {!! Form::label('alias',  __("validation.attributes.Alias")) !!}
    <p>{{ $office->alias }}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link',  __("validation.attributes.Link")) !!}
    <p>{{ $office->link }}</p>
</div>

<!-- Titleru Field -->
<div class="form-group">
    {!! Form::label('titleRu',  __("validation.attributes.TitleRu")) !!}
    <p>{{ $office->titleRu }}</p>
</div>

<!-- Titlekz Field -->
<div class="form-group">
    {!! Form::label('titleKz',  __("validation.attributes.TitleKz")) !!}
    <p>{{ $office->titleKz }}</p>
</div>

<!-- Titleen Field -->
<div class="form-group">
    {!! Form::label('titleEn',  __("validation.attributes.TitleEn")) !!}
    <p>{{ $office->titleEn }}</p>
</div>

<!-- Subtitleru Field -->
<div class="form-group">
    {!! Form::label('subtitleRu',  __("validation.attributes.SubtitleRu")) !!}
    <p>{{ $office->subtitleRu }}</p>
</div>

<!-- Subtitlekz Field -->
<div class="form-group">
    {!! Form::label('subtitleKz', __("validation.attributes.SubtitleKz")) !!}
    <p>{{ $office->subtitleKz }}</p>
</div>

<!-- Subtitleen Field -->
<div class="form-group">
    {!! Form::label('subtitleEn',  __("validation.attributes.SubtitleEn")) !!}
    <p>{{ $office->subtitleEn }}</p>
</div>

<!-- Descriptionru Field -->
<div class="form-group">
    {!! Form::label('descriptionRu',  __("validation.attributes.DescriptionRu")) !!}
    <p>{{ $office->descriptionRu }}</p>
</div>

<!-- Descriptionkz Field -->
<div class="form-group">
    {!! Form::label('descriptionKz',  __("validation.attributes.DescriptionKz")) !!}
    <p>{{ $office->descriptionKz }}</p>
</div>

<!-- Descriptionen Field -->
<div class="form-group">
    {!! Form::label('descriptionEn',  __("validation.attributes.DescriptionEn")) !!}
    <p>{{ $office->descriptionEn }}</p>
</div>

<!-- Location Field -->
<div class="form-group">
    {!! Form::label('location', __("validation.attributes.Location")) !!}
    <p>{{ $office->location }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone',  __("validation.attributes.Phone")) !!}
    <p>{{ $office->phone }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email',  __("validation.attributes.Email")) !!}
    <p>{{ $office->email }}</p>
</div>

<!-- Publishedat Field -->
<div class="form-group">
    {!! Form::label('publishedAt',  __("validation.attributes.PublishedAt")) !!}
    <p>{{ $office->publishedAt }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __("validation.attributes.Status")) !!}
    <p>{{ $office->status == true ? __("validation.attributes.Active") : __("validation.attributes.Non-Active") }}</p>
</div>

