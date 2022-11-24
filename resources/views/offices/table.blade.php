<div class="table-responsive-sm">
    <table class="table table-striped" id="offices-table">
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
                <th>{{__("validation.attributes.Location")}}</th>
                <th>{{__("validation.attributes.Phone")}}</th>
                <th>{{__("validation.attributes.Email")}}</th>
                <th>{{__("validation.attributes.PublishedAt")}}</th>
                <th>{{__("validation.attributes.Status")}}</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($offices as $office)
            <tr>
                <td><img src="{{ $office->getFile("thumbnail")}}" style="max-width: 120px"></td>
            <td><img src="{{ $office->getFile("imageUrl")}}" style="max-width: 120px"></td>
            <td>{{ $office->alias }}</td>
            <td>{{ $office->link }}</td>
            <td>{{ $office->titleRu }}</td>
            <td>{{ $office->titleKz }}</td>
            <td>{{ $office->titleEn }}</td>
            <td>{{ $office->subtitleRu }}</td>
            <td>{{ $office->subtitleKz }}</td>
            <td>{{ $office->subtitleEn }}</td>
            <td>{{ $office->location }}</td>
            <td>{{ $office->phone }}</td>
            <td>{{ $office->email }}</td>
            <td>{{ $office->publishedAt }}</td>
            <td>{{ $office->status == true ? __("validation.attributes.Active") : __("validation.attributes.Non-Active") }}</td>
                <td>
                    {!! Form::open(['route' => ['offices.destroy', $office->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('offices.show', [$office->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('offices.edit', [$office->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm(".__("validation.attributes.QuestionDelete").")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
