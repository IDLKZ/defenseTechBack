<!-- Logo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('logo', "Logo:") !!}<br/>
    {!! Form::file('logo', null, ['class' => 'form-control']) !!}
</div>

<!-- Sloganru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sloganRu', __("validation.attributes.SloganRu")) !!} *
    {!! Form::text('sloganRu', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Slogankz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sloganKz', __("validation.attributes.SloganKz")) !!} *
    {!! Form::text('sloganKz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Sloganen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sloganEn', __("validation.attributes.SloganEn")) !!}
    {!! Form::text('sloganEn', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Descriptionru Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descriptionRu', __("validation.attributes.DescriptionRu")) !!} *
    {!! Form::textarea('descriptionRu', null, ['class' => 'form-control']) !!}
</div>

<!-- Descriptionkz Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descriptionKz', __("validation.attributes.DescriptionKz")) !!} *
    {!! Form::textarea('descriptionKz', null, ['class' => 'form-control']) !!}
</div>

<!-- Descriptionen Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descriptionEn', __("validation.attributes.DescriptionEn")) !!}
    {!! Form::textarea('descriptionEn', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('link', __("validation.attributes.Link")) !!} *
    {!! Form::textarea('link', null, ['class' => 'form-control']) !!}
</div>

<!-- Specific Field -->
<div class="form-group col-sm-6">
    {!! Form::label('specific', __("validation.attributes.Specific")) !!}
    {!! Form::text('specific', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', __("validation.attributes.Status")) !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__("validation.attributes.Save"), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('information.index') }}" class="btn btn-secondary">
        {{__("validation.attributes.Cancel")}}
    </a>
</div>
