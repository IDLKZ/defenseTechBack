<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', __("validation.attributes.Category")) !!}
    <p>{{ $product->category_id }}</p>
</div>

<!-- Shop Id Field -->
<div class="form-group">
    {!! Form::label('shop_id', __("validation.attributes.Shop")) !!}
    <p>{{ $product->shop_id }}</p>
</div>

<!-- Thumbnail Field -->
<div class="form-group">
    {!! Form::label('thumbnail', __("validation.attributes.Thumbnail")) !!}
    <p><img src="{{ $product->getFile("thumbnail") }}" style="max-width: 120px"></p>
</div>

<!-- Imageurl Field -->
<div class="form-group">
    {!! Form::label('imageUrl',__("validation.attributes.ImageUrl")) !!}
    <p><img src="{{ $product->getFile("imageUrl") }}" style="max-width: 120px"></p>
</div>

<!-- Alias Field -->
<div class="form-group">
    {!! Form::label('alias', __("validation.attributes.Alias")) !!}
    <p>{{ $product->alias }}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', __("validation.attributes.Link")) !!}
    <p>{{ $product->link }}</p>
</div>

<!-- Titleru Field -->
<div class="form-group">
    {!! Form::label('titleRu', __("validation.attributes.TitleRu")) !!}
    <p>{{ $product->titleRu }}</p>
</div>

<!-- Titlekz Field -->
<div class="form-group">
    {!! Form::label('titleKz', __("validation.attributes.TitleKz")) !!}
    <p>{{ $product->titleKz }}</p>
</div>

<!-- Titleen Field -->
<div class="form-group">
    {!! Form::label('titleEn', __("validation.attributes.TitleEn")) !!}
    <p>{{ $product->titleEn }}</p>
</div>

<!-- Subtitleru Field -->
<div class="form-group">
    {!! Form::label('subtitleRu', __("validation.attributes.SubtitleRu")) !!}
    <p>{{ $product->subtitleRu }}</p>
</div>

<!-- Subtitlekz Field -->
<div class="form-group">
    {!! Form::label('subtitleKz', __("validation.attributes.SubtitleKz")) !!}
    <p>{{ $product->subtitleKz }}</p>
</div>

<!-- Subtitleen Field -->
<div class="form-group">
    {!! Form::label('subtitleEn', __("validation.attributes.SubtitleEn")) !!}
    <p>{{ $product->subtitleEn }}</p>
</div>

<!-- Descriptionru Field -->
<div class="form-group">
    {!! Form::label('descriptionRu', __("validation.attributes.DescriptionRu")) !!}
    <p>{{ $product->descriptionRu }}</p>
</div>

<!-- Descriptionkz Field -->
<div class="form-group">
    {!! Form::label('descriptionKz', __("validation.attributes.DescriptionKz")) !!}
    <p>{{ $product->descriptionKz }}</p>
</div>

<!-- Descriptionen Field -->
<div class="form-group">
    {!! Form::label('descriptionEn', __("validation.attributes.DescriptionEn")) !!}
    <p>{{ $product->descriptionEn }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', __("validation.attributes.Price")) !!}
    <p>{{ $product->price }}</p>
</div>

<!-- Oldprice Field -->
<div class="form-group">
    {!! Form::label('oldPrice', __("validation.attributes.OldPrice")) !!}
    <p>{{ $product->oldPrice }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __("validation.attributes.Status")) !!}
    <p>{{ $product->status == true ? __("validation.attributes.Active") : __("validation.attributes.Non-Active") }}</p>
</div>

