<div class="table-responsive-sm">
    <table class="table table-striped" id="products-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.Category")}}</th>
        <th>{{__("validation.attributes.Shop")}}</th>
        <th>{{__("validation.attributes.Thumbnail")}}</th>
        <th>{{__("validation.attributes.ImageUrl")}}</th>
        <th>{{__("validation.attributes.Alias")}}</th>
        <th>{{__("validation.attributes.Link")}}</th>
        <th>{{__("validation.attributes.TitleRu")}}</th>
        <th>{{__("validation.attributes.TitleKz")}}</th>
        <th>{{__("validation.attributes.TitleEn")}}</th>
        <th>{{__("validation.attributes.SubtitleRu")}}</th>
        <th>{{__("validation.attributes.SubtitleKz")}}</th>
        <th>{{__("validation.attributes.SubtitleEn")}}</th>
        <th>{{__("validation.attributes.Price")}}</th>
        <th>{{__("validation.attributes.OldPrice")}}</th>
        <th>{{__("validation.attributes.Status")}}</th>
                <th colspan="3">{{__("validation.attributes.Action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->category_id }}</td>
            <td>{{ $product->shop_id }}</td>
            <td><img src="{{ $product->getFile("thumbnail") }}" style="max-width: 120px"></td>
            <td><img src="{{ $product->getFile("imageUrl") }}" style="max-width: 120px"></td>
            <td>{{ $product->alias }}</td>
            <td>{{ $product->link }}</td>
            <td>{{ $product->titleRu }}</td>
            <td>{{ $product->titleKz }}</td>
            <td>{{ $product->titleEn }}</td>
            <td>{{ $product->subtitleRu }}</td>
            <td>{{ $product->subtitleKz }}</td>
            <td>{{ $product->subtitleEn }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->oldPrice }}</td>
            <td>{{ $product->status == true ? __("validation.attributes.Active") : __("validation.attributes.Non-Active") }}</td>
                <td>
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$product->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('products.edit', [$product->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm(".__("validation.attributes.QuestionDelete").")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
