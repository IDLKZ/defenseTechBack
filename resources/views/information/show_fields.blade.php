<!-- Logo Field -->
<div class="form-group">
    {!! Form::label('logo', __("validation.attributes.Logo")) !!}
    <p><img src="{{ $information->getFile("logo") }}" style="max-width: 100px"></p>
</div>

<!-- Sloganru Field -->
<div class="form-group">
    {!! Form::label('sloganRu', __("validation.attributes.SloganRu")) !!}
    <p>{{ $information->sloganRu }}</p>
</div>

<!-- Slogankz Field -->
<div class="form-group">
    {!! Form::label('sloganKz', __("validation.attributes.SloganKz")) !!}
    <p>{{ $information->sloganKz }}</p>
</div>

<!-- Sloganen Field -->
<div class="form-group">
    {!! Form::label('sloganEn', __("validation.attributes.SloganEn")) !!}
    <p>{{ $information->sloganEn }}</p>
</div>

<!-- Descriptionru Field -->
<div class="form-group">
    {!! Form::label('descriptionRu', __("validation.attributes.DescriptionRu")) !!}
    <p>{{ $information->descriptionRu }}</p>
</div>

<!-- Descriptionkz Field -->
<div class="form-group">
    {!! Form::label('descriptionKz', __("validation.attributes.DescriptionKz")) !!}
    <p>{{ $information->descriptionKz }}</p>
</div>

<!-- Descriptionen Field -->
<div class="form-group">
    {!! Form::label('descriptionEn', __("validation.attributes.DescriptionEn")) !!}
    <p>{{ $information->descriptionEn }}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', __("validation.attributes.Link")) !!}
    <p>{{ $information->link }}</p>
</div>

<!-- Specific Field -->
<div class="form-group">
    {!! Form::label('specific', __("validation.attributes.Specific")) !!}
    <p>{{ $information->specific }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __("validation.attributes.Status")) !!}
    <p>{{ $information->status == true ? __("validation.attributes.Active") :__("validation.attributes.Non-Active")  }}</p>
</div>

