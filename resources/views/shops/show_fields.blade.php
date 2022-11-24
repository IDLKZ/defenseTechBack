<!-- Logo Field -->
<div class="form-group">
    {!! Form::label('logo', __("validation.attributes.Logo")) !!}
    <p><img src="{{ $shop->getFile("logo") }}" style="max-width: 120px"></p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', __("validation.attributes.Link")) !!}
    <p>{{ $shop->link }}</p>
</div>

<!-- Titleru Field -->
<div class="form-group">
    {!! Form::label('titleRu', __("validation.attributes.TitleRu")) !!}
    <p>{{ $shop->titleRu }}</p>
</div>

<!-- Titlekz Field -->
<div class="form-group">
    {!! Form::label('titleKz', __("validation.attributes.TitleKz")) !!}
    <p>{{ $shop->titleKz }}</p>
</div>

<!-- Titleen Field -->
<div class="form-group">
    {!! Form::label('titleEn', __("validation.attributes.TitleEn")) !!}
    <p>{{ $shop->titleEn }}</p>
</div>

<!-- Descriptionru Field -->
<div class="form-group">
    {!! Form::label('descriptionRu', __("validation.attributes.DescriptionRu")) !!}
    <p>{{ $shop->descriptionRu }}</p>
</div>

<!-- Descriptionkz Field -->
<div class="form-group">
    {!! Form::label('descriptionKz', __("validation.attributes.DescriptionKz")) !!}
    <p>{{ $shop->descriptionKz }}</p>
</div>

<!-- Descriptionen Field -->
<div class="form-group">
    {!! Form::label('descriptionEn', __("validation.attributes.DescriptionEn")) !!}
    <p>{{ $shop->descriptionEn }}</p>
</div>

<!-- Location Field -->
<div class="form-group">
    {!! Form::label('location', __("validation.attributes.Location")) !!}
    <p>{{ $shop->location }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', __("validation.attributes.Phone")) !!}
    <p>{{ $shop->phone }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', __("validation.attributes.Email")) !!}
    <p>{{ $shop->email }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __("validation.attributes.Status")) !!}
    <p>{{ $shop->status = true ? __("validation.attributes.Active") : __("validation.attributes.Non-Active") }}</p>
</div>

