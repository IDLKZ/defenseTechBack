<div class="table-responsive-sm">
    <table class="table table-striped" id="shops-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.Logo")}}</th>
        <th>{{__("validation.attributes.Link")}}</th>
        <th>{{__("validation.attributes.TitleRu")}}</th>
        <th>{{__("validation.attributes.TitleKz")}}</th>
        <th>{{__("validation.attributes.TitleEn")}}</th>
        <th>{{__("validation.attributes.Location")}}</th>
        <th>{{__("validation.attributes.Phone")}}</th>
        <th>{{__("validation.attributes.Email")}}</th>
        <th>{{__("validation.attributes.Status")}}</th>
                <th colspan="3">{{__("validation.attributes.Action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shops as $shop)
            <tr>
                <td><img src="{{ $shop->getFile("logo") }}" style="max-width: 120px"></td>
            <td>{{ $shop->link }}</td>
            <td>{{ $shop->titleRu }}</td>
            <td>{{ $shop->titleKz }}</td>
            <td>{{ $shop->titleEn }}</td>
            <td>{{ $shop->location }}</td>
            <td>{{ $shop->phone }}</td>
            <td>{{ $shop->email }}</td>
            <td>{{ $shop->status }}</td>
                <td>
                    {!! Form::open(['route' => ['shops.destroy', $shop->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('shops.show', [$shop->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('shops.edit', [$shop->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm(".__("validation.attributes.QuestionDelete").")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
