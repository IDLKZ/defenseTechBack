<div class="table-responsive-sm">
    <table class="table table-striped" id="companies-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.TitleRu")}}</th>
        <th>{{__("validation.attributes.TitleKz")}}</th>
        <th>{{__("validation.attributes.TitleEn")}}</th>
        <th>{{__("validation.attributes.SubtitleRu")}}</th>
        <th>{{__("validation.attributes.SubtitleKz")}}</th>
        <th>{{__("validation.attributes.SubtitleEn")}}</th>
        <th>{{__("validation.attributes.Status")}}</th>
                <th colspan="3">{{__("validation.attributes.Action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{ $company->titleRu }}</td>
            <td>{{ $company->titleKz }}</td>
            <td>{{ $company->titleEn }}</td>
            <td>{{ $company->subtitleRu }}</td>
            <td>{{ $company->subtitleKz }}</td>
            <td>{{ $company->subtitleEn }}</td>
            <td>{{ $company->status == true ? __("validation.attributes.Active") : __("validation.attributes.Non-Active") }}</td>
                <td>
                    {!! Form::open(['route' => ['companies.destroy', $company->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('companies.show', [$company->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('companies.edit', [$company->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
