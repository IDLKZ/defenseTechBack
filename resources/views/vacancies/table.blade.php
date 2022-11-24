<div class="table-responsive-sm">
    <table class="table table-striped" id="vacancies-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.salaryMin")}}</th>
        <th>{{__("validation.attributes.salaryMax")}}</th>
        <th>{{__("validation.attributes.Alias")}}</th>
        <th>{{__("validation.attributes.Alias")}}</th>
        <th>{{__("validation.attributes.TitleRu")}}</th>
        <th>{{__("validation.attributes.TitleKz")}}</th>
        <th>{{__("validation.attributes.TitleEn")}}</th>
        <th>{{__("validation.attributes.SubtitleRu")}}</th>
        <th>{{__("validation.attributes.SubtitleKz")}}</th>
        <th>{{__("validation.attributes.SubtitleEn")}}</th>
        <th>{{__("validation.attributes.Location")}}</th>
        <th>{{__("validation.attributes.Phone")}}</th>
        <th>{{__("validation.attributes.Email")}}</th>
        <th>{{__("validation.attributes.Status")}}</th>
                <th colspan="3">{{__("validation.attributes.Status")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vacancies as $vacancy)
            <tr>
                <td>{{ $vacancy->salaryMin }}</td>
            <td>{{ $vacancy->salaryMax }}</td>
            <td>{{ $vacancy->alias }}</td>
            <td>{{ $vacancy->link }}</td>
            <td>{{ $vacancy->titleRu }}</td>
            <td>{{ $vacancy->titleKz }}</td>
            <td>{{ $vacancy->titleEn }}</td>
            <td>{{ $vacancy->subtitleRu }}</td>
            <td>{{ $vacancy->subtitleKz }}</td>
            <td>{{ $vacancy->subtitleEn }}</td>
            <td>{{ $vacancy->location }}</td>
            <td>{{ $vacancy->phone }}</td>
            <td>{{ $vacancy->email }}</td>
            <td>{{ $vacancy->status }}</td>
                <td>
                    {!! Form::open(['route' => ['vacancies.destroy', $vacancy->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('vacancies.show', [$vacancy->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('vacancies.edit', [$vacancy->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm(".__("validation.attributes.QuestionDelete").")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
