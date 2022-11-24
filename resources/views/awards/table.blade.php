<div class="table-responsive-sm">
    <table class="table table-striped" id="awards-table">
        <thead>
            <tr>
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
                <th colspan="3">{{__("validation.attributes.Action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($awards as $award)
            <tr>
                <td>{{ $award->getFile("thumbnail") }}</td>
            <td>{{ $award->getFile("imageUrl") }}</td>
            <td>{{ $award->alias }}</td>
            <td>{{ $award->link }}</td>
            <td>{{ $award->titleRu }}</td>
            <td>{{ $award->titleKz }}</td>
            <td>{{ $award->titleEn }}</td>
            <td>{{ $award->subtitleRu }}</td>
            <td>{{ $award->subtitleKz }}</td>
            <td>{{ $award->subtitleEn }}</td>
                <td>
                    {!! Form::open(['route' => ['awards.destroy', $award->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('awards.show', [$award->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('awards.edit', [$award->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm(".__("validation.attributes.QuestionDelete").")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
