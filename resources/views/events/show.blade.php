@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('events.index') }}">
                    {{__("validation.attributes.Event")}}
                </a>
            </li>
            <li class="breadcrumb-item active">
                {{__("validation.attributes.Detail")}}
            </li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>{{__("validation.attributes.Detail")}}</strong>
                                  <a href="{{ route('events.index') }}" class="btn btn-light">{{__("validation.attributes.Back")}}</a>
                             </div>
                             <div class="card-body">
                                 @include('events.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
