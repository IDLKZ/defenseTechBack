<!-- Imageurl Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('imageUrl', __("validation.attributes.ImageUrl")) !!}
    {!! Form::file('imageUrl', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __("validation.attributes.Name")) !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Comment Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comment', __("validation.attributes.Comment")) !!}
    {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__("validation.attributes.Save"), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('reviews.index') }}" class="btn btn-secondary">{{__("validation.attributes.Cancel")}}</a>
</div>
