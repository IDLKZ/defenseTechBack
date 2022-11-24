<div class="table-responsive-sm">
    <table class="table table-striped" id="events-table">
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
        <th>{{__("validation.attributes.PublishedAt")}}</th>
        <th>{{__("validation.attributes.Status")}}</th>
                <th colspan="3">{{__("validation.attributes.Action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($events as $events)
            <tr>
                <td><img src="{{ $events->getFile("thumbnail")}}" style="max-width: 120px"></td>
            <td><img src="{{ $events->getFile("imageUrl")}}" style="max-width: 120px"></td>
            <td>{{ $events->alias }}</td>
            <td>{{ $events->link }}</td>
            <td>{{ $events->titleRu }}</td>
            <td>{{ $events->titleKz }}</td>
            <td>{{ $events->titleEn }}</td>
            <td>{{ $events->subtitleRu }}</td>
            <td>{{ $events->subtitleKz }}</td>
            <td>{{ $events->subtitleEn }}</td>
            <td>{{ $events->publishedAt }}</td>
            <td>{{ $events->status == true ? __("validation.attributes.Active") : __("validation.attributes.Non-Active") }}</td>
                <td>
                    {!! Form::open(['route' => ['events.destroy', $events->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('events.show', [$events->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('events.edit', [$events->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm(".__("validation.attributes.QuestionDelete").")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
