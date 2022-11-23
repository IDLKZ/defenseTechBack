<!-- Titleru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titleRu', __("validation.attributes.TitleRu")) !!}
    {!! Form::text('titleRu', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Titlekz Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titleKz', __("validation.attributes.TitleKz")) !!}
    {!! Form::text('titleKz', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Titleen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titleEn', __("validation.attributes.TitleEn")) !!}
    {!! Form::text('titleEn', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
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
    <a href="{{ route('newsCategories.index') }}" class="btn btn-secondary">
        {{__("validation.attributes.Cancel")}}
    </a>
</div>
