@extends('backend/layout/content-layout')

@section('meta')@endsection

@section('ppstyle')
<link rel="stylesheet" href="{!! asset('/backend/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css') !!}">
@endsection

@section('pphscript')@endsection

@section('pageheader')
	<ol class="breadcrumb">
		<li> <i class="clip-home-3"></i> <a href="#"> Home </a> </li>
		<li><a href="{!! url(getLang(). '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		{{--<li class="active"><a href="{!! url(getLang(). '/admin/menu') !!}"><i class="fa fa-cog"></i>Menus</a></li>--}}
	</ol>
	<div class="page-header">
		<h1>Dashboard <small> | Version 1.0.0</small></h1>
	</div>
@endsection
 


@section('content')


	@include('flash::message')
	    @include('backend.layout.partials.dashboard.section-widgets')
	    <hr />
        @include('backend.layout.partials.dashboard.section-one')
        @include('backend.layout.partials.dashboard.section-two')
        @include('backend.layout.partials.dashboard.section-three')
        @include('backend.layout.partials.dashboard.section-four')
        {{-- @include('backend.layout.partials.dashboard.section-five') --}}

@endsection

@section('ppscript')
	<script src="{!! asset('/backend/assets/plugins/flot/jquery.flot.js') !!}"></script>
	<script src="{!! asset('/backend/assets/plugins/flot/jquery.flot.pie.js') !!}"></script>
	<script src="{!! asset('/backend/assets/plugins/flot/jquery.flot.resize.min.js') !!}"></script>
	<script src="{!! asset('/backend/assets/plugins/jquery.sparkline/jquery.sparkline.js') !!}"></script>
	<script src="{!! asset('/backend/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js') !!}"></script>
	<script src="{!! asset('/backend/assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') !!}"></script>
	<script src="{!! asset('/backend/assets/plugins/fullcalendar/fullcalendar/fullcalendar.js') !!}"></script>
	<script src="{!! asset('/backend/assets/js/index.js') !!}"></script>
@endsection
@section('ppinline')
Index.init();
@endsection