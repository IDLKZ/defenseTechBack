@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Programms</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Programms
                             <a class="pull-right" href="{{ route('programms.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body table-responsive">
                             @include('programms.table')
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

