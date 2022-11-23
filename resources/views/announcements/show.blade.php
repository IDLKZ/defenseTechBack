@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('announcements.index') }}">
                    {{__("validation.attributes.Announcement")}}

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
                                 <strong>
                                     {{__("validation.attributes.Detail")}}

                                 </strong>
                                  <a href="{{ route('announcements.index') }}" class="btn btn-light">
                                      {{__("validation.attributes.Back")}}

                                  </a>
                             </div>
                             <div class="card-body">
                                 @include('announcements.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
