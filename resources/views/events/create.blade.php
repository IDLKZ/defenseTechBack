@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('events.index') !!}">
             {{__("validation.attributes.Event")}}
         </a>
      </li>
      <li class="breadcrumb-item active">
          {{__("validation.attributes.Create")}}
      </li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>{{__("validation.attributes.Create")}}</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'events.store',"files"=>true]) !!}

                                   @include('events.fields')

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection
