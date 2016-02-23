@extends('backend/layout/layout')

@section('meta')@endsection

@section('title')  

@endsection

@section('ppstyle')
  {{-- <link rel="stylesheet" href="{!! asset('/backend/assets/plugins/font-awesome/css/font-awesome.min.css') !!}"> --}}
@endsection

@section('pphscript')@endsection

@section('pageheader')
<ol class="breadcrumb">
    <li><a href="{!! url(getLang(). '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><a href="{!! url(getLang(). '/admin/menu') !!}"><i class="fa fa-cog"></i>Menus</a></li>
</ol>
<div class="page-header">
    <h1>Menus <small> | Control Panel</small></h1>
</div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- start: ALERTS PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bullhorn"></i>$MODEL_NAME_PLURAL$
                <div class="panel-tools">
           
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                    <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> 
                </div>
            </div>
            <div class="panel-body">
       
 
            @include('$MODEL_NAME_PLURAL_CAMEL$.show_fields')

            </div>
        </div>
        <!-- end: PANEL -->
    </div>
</div>

@endsection

@section('in-the-box-title')@endsection
@section('in-the-box-content')@endsection

@section('ppscript')
        {{-- <script src="{!! asset('/admin/assets/plugins/nestable/jquery.nestable.js') !!}"></script> --}}
        {{-- <script src="{!! asset('/admin/assets/js/ui-nestable.js') !!}"></script> --}}
@endsection

@section('ppinline')

@endsection