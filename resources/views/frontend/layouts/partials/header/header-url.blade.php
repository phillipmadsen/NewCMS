@section('headinjection')
    <script type="text/javascript"> document.addEventListener('DOMContentLoaded',function() { prettyPrint(); }); </script>
@endsection

<!-- Header ============================================= -->
<header id="header" class="transparent-header semi-transparent dark full-header">
	<div id="header-wrap">
		<div class="container clearfix">
			<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
			<!-- Logo
			============================================= -->
			<div id="logo">
				<a href="{!! url('/' . getLang()) !!}" class="standard-logo" data-dark-logo="{!! asset('/frontend/images/grace-logo-light.png') !!}"><img src="{!! asset('/frontend/images/grace-logo-light.png') !!}" alt="Grace Logo"></a>
				<a href="{!! url('/' . getLang()) !!}" class="retina-logo" data-dark-logo="{!! asset('/frontend/images/grace-logo-light.png') !!}"><img src="{!! asset('/frontend/images/grace-logo-light.png') !!}" alt="GraceLogo"></a>
			</div><!-- #logo end -->
			<!-- Primary Navigation ============================================= -->
			<nav id="primary-menu">
				<ul class="sf-js-enabled" style="touch-action: pan-y;">
				<li>MENU HERE</li>
					 {{ Sentinel::getUser()->first_name }}  {{ Sentinel::getUser()->last_name }}
				 {{ @$user->profile->username }}
				</ul>
			</nav><!-- #primary-menu end -->
		</div>
	</div>
</header><!-- #header end -->