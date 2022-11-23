@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('announcements.index') !!}">
                 {{__("validation.attributes.Announcement")}}
             </a>
          </li>
          <li class="breadcrumb-item active">
              {{__("validation.attributes.Edit")}}
          </li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>
                                  {{__("validation.attributes.Edit")}}

                              </strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($announcement, ['route' => ['announcements.update', $announcement->id], 'method' => 'patch',"files"=>true]) !!}

                              @include('announcements.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
