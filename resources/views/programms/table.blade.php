<div class="table-responsive-sm">
    <table class="table table-striped" id="programms-table">
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
        @foreach($programms as $programm)
            <tr>
                <td><img src="{{ $programm->getFile("thumbnail")}}" style="max-width: 120px"></td>
                <td><img src="{{ $programm->getFile("imageUrl")}}" style="max-width: 120px"></td>
            <td>{{ $programm->alias }}</td>
            <td>{{ $programm->link }}</td>
            <td>{{ $programm->titleRu }}</td>
            <td>{{ $programm->titleKz }}</td>
            <td>{{ $programm->titleEn }}</td>
            <td>{{ $programm->subtitleRu }}</td>
            <td>{{ $programm->subtitleKz }}</td>
            <td>{{ $programm->subtitleEn }}</td>
            <td>{{ $programm->publishedAt }}</td>
            <td>{{ $programm->status == true ?  __("validation.attributes.Active") :  __("validation.attributes.Non-Active") }}</td>
                <td>
                    {!! Form::open(['route' => ['programms.destroy', $programm->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('programms.show', [$programm->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('programms.edit', [$programm->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm(".__("validation.attributes.QuestionDelete").")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
