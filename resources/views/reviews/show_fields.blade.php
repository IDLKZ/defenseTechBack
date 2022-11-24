<!-- Imageurl Field -->
<div class="form-group">
    {!! Form::label('imageUrl', __("validation.attributes.ImageUrl")) !!}
    <p><img src="{{ $review->getFile("imageUrl") }}" style="max-width: 120px"> </p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __("validation.attributes.Name")) !!}
    <p>{{ $review->name }}</p>
</div>

<!-- Comment Field -->
<div class="form-group">
    {!! Form::label('comment', __("validation.attributes.Comment")) !!}
    <p>{{ $review->comment }}</p>
</div>

