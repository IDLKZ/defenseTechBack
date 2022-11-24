<div class="table-responsive-sm">
    <table class="table table-striped" id="taxBreaks-table">
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
        @foreach($taxBreaks as $taxBreak)
            <tr>
                <td><img src="{{ $taxBreak->getFile("thumbnail")}}" style="max-width: 120px"></td>
            <td><img src="{{ $taxBreak->getFile("imageUrl")}}" style="max-width: 120px"></td>
            <td>{{ $taxBreak->alias }}</td>
            <td>{{ $taxBreak->link }}</td>
            <td>{{ $taxBreak->titleRu }}</td>
            <td>{{ $taxBreak->titleKz }}</td>
            <td>{{ $taxBreak->titleEn }}</td>
            <td>{{ $taxBreak->subtitleRu }}</td>
            <td>{{ $taxBreak->subtitleKz }}</td>
            <td>{{ $taxBreak->subtitleEn }}</td>
            <td>{{ $taxBreak->publishedAt }}</td>
            <td>{{ $taxBreak->status }}</td>
                <td>
                    {!! Form::open(['route' => ['taxBreaks.destroy', $taxBreak->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('taxBreaks.show', [$taxBreak->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('taxBreaks.edit', [$taxBreak->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm(".__("validation.attributes.QuestionDelete").")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
