<!-- Imageurl Field -->
<div class="form-group">
    {!! Form::label('imageUrl', __("validation.attributes.ImageUrl")) !!}
    <p><img src="{{ $announcement->getFile("imageUrl") }}" style="max-width: 100px"></p>
</div>

<!-- Titleru Field -->
<div class="form-group">
    {!! Form::label('titleRu', __("validation.attributes.TitleRu")) !!}
    <p>{{ $announcement->titleRu }}</p>
</div>

<!-- Titlekz Field -->
<div class="form-group">
    {!! Form::label('titleKz', __("validation.attributes.TitleKz")) !!}
    <p>{{ $announcement->titleKz }}</p>
</div>

<!-- Titleen Field -->
<div class="form-group">
    {!! Form::label('titleEn', __("validation.attributes.TitleEn")) !!}
    <p>{{ $announcement->titleEn }}</p>
</div>

<!-- Subtitleru Field -->
<div class="form-group">
    {!! Form::label('subtitleRu', __("validation.attributes.SubtitleRu")) !!}
    <p>{{ $announcement->subtitleRu }}</p>
</div>

<!-- Subtitlekz Field -->
<div class="form-group">
    {!! Form::label('subtitleKz', __("validation.attributes.SubtitleKz")) !!}
    <p>{{ $announcement->subtitleKz }}</p>
</div>

<!-- Subtitleen Field -->
<div class="form-group">
    {!! Form::label('subtitleEn', __("validation.attributes.SubtitleEn")) !!}
    <p>{{ $announcement->subtitleEn }}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', __("validation.attributes.Link")) !!}
    <p>{{ $announcement->link }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __("validation.attributes.Status")) !!}
    <p>{{ $announcement->status == true ? __("validation.attributes.Active") :__("validation.attributes.Non-Active")  }}</p>
</div>

<!-- Publishedat Field -->
<div class="form-group">
    {!! Form::label('publishedAt', __("validation.attributes.PublishedAt")) !!}
    <p>{{ $announcement->publishedAt }}</p>
</div>

