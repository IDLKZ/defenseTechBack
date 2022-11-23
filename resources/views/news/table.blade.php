<div class="table-responsive-sm">
    <table class="table table-striped" id="news-table">
        <thead>
            <tr>
         <th>{{__("validation.attributes.CategoryId")}}</th>
        <th>{{__("validation.attributes.Thumbnail")}}</th>
        <th>{{__("validation.attributes.ImageUrl")}}</th>
        <th>{{__("validation.attributes.Alias")}}</th>
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
        @foreach($news as $news)
            <tr>
                <td>{{ $news->category_id }}</td>
            <td>    <img src="{{ $news->getFile("thumbnail") }}" style="max-width: 100px"></td>
            <td>    <img src="{{ $news->getFile("imageUrl") }}" style="max-width: 100px"></td>
            <td>{{ $news->alias }}</td>
            <td>{{ $news->titleRu }}</td>
            <td>{{ $news->titleKz }}</td>
            <td>{{ $news->titleEn }}</td>
            <td>{{ $news->subtitleRu }}</td>
            <td>{{ $news->subtitleKz }}</td>
            <td>{{ $news->subtitleEn }}</td>
            <td>{{ $news->publishedAt }}</td>
            <td> {{ $news->status == true ? __("validation.attributes.Active") :__("validation.attributes.Non-Active")  }}</td>
                <td>
                    {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('news.show', [$news->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('news.edit', [$news->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm(".__("validation.attributes.QuestionDelete").")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
