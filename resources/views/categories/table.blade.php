<div class="table-responsive-sm">
    <table class="table table-striped" id="categories-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.Category")}}</th>
        <th>{{__("validation.attributes.Alias")}}</th>
        <th>{{__("validation.attributes.TitleRu")}}</th>
        <th>{{__("validation.attributes.TitleKz")}}</th>
        <th>{{__("validation.attributes.TitleEn")}}</th>
        <th>{{__("validation.attributes.Status")}}</th>
                <th colspan="3">{{__("validation.attributes.Action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->parent_id }}</td>
            <td>{{ $category->alias }}</td>
            <td>{{ $category->titleRu }}</td>
            <td>{{ $category->titleKz }}</td>
            <td>{{ $category->titleEn }}</td>
            <td>{{ $category->status == true ? __("validation.attributes.Active") : __("validation.attributes.Non-Active") }}</td>
                <td>
                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categories.show', [$category->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('categories.edit', [$category->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm(".__("validation.attributes.QuestionDelete").")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
