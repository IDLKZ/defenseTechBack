<div class="table-responsive-sm">
    <table class="table table-striped" id="tags-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.TitleRu")}}</th>
        <th>{{__("validation.attributes.TitleKz")}}</th>
        <th>{{__("validation.attributes.TitleEn")}}</th>
        <th>{{__("validation.attributes.Status")}}</th>
                <th colspan="3">{{__("validation.attributes.Action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr>
                <td>{{ $tag->titleRu }}</td>
            <td>{{ $tag->titleKz }}</td>
            <td>{{ $tag->titleEn }}</td>
            <td>{{ $tag->status == true ?__("validation.attributes.Active") : __("validation.attributes.Non-Active") }}</td>
                <td>
                    {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tags.show', [$tag->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('tags.edit', [$tag->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm(".__("validation.attributes.QuestionDelete").")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
