<div class="table-responsive-sm">
    <table class="table table-striped" id="information-table">
        <thead>
            <tr>
                <th>{{__("validation.attributes.Logo")}}</th>
                <th>{{__("validation.attributes.SloganRu")}}</th>
                <th>{{__("validation.attributes.SloganKz")}}</th>
                <th>{{__("validation.attributes.SloganEn")}}</th>
                <th>{{__("validation.attributes.DescriptionRu")}}</th>
                <th>{{__("validation.attributes.DescriptionKz")}}</th>
                <th>{{__("validation.attributes.DescriptionEn")}}</th>
                <th>{{__("validation.attributes.Link")}}</th>
                <th>{{__("validation.attributes.Specific")}}</th>
                <th>{{__("validation.attributes.Status")}}</th>
                <th colspan="3">{{__("validation.attributes.Action")}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($information as $information)
            <tr>
                <td><img src="{{ $information->getFile("logo") }}" style="max-width: 100px"></td>
            <td>{{ $information->sloganRu }}</td>
            <td>{{ $information->sloganKz }}</td>
            <td>{{ $information->sloganEn }}</td>
            <td>{{ $information->descriptionRu }}</td>
            <td>{{ $information->descriptionKz }}</td>
            <td>{{ $information->descriptionEn }}</td>
            <td>{{ $information->link }}</td>
            <td>{{ $information->specific }}</td>
                <td>{{ $information->status == true ? __("validation.attributes.Active") :__("validation.attributes.Non-Active")  }}</td>
                <td>
                    {!! Form::open(['route' => ['information.destroy', $information->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('information.show', [$information->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('information.edit', [$information->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm(".__("validation.attributes.QuestionDelete").")"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
