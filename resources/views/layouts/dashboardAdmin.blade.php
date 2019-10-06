@include( 'layouts/head' )

		<!-- Main Theme -->
		<link rel="stylesheet" type="text/css" href="{{asset( config( 'assets.MAIN' ) )}}">
		<link rel="stylesheet" type="text/css" href="{{asset( config('assets.FULLCALENDAR_CSS') )}}">
		<link rel="stylesheet" type="text/css" href="{{asset( config('assets.DAYGRID_CSS') )}}">
		<link rel="stylesheet" href="{{ asset( config('assets.CLOCKPICKER_CSS') ) }}">
		<script type="text/javascript" src="{{asset( config('assets.FULLCALENDAR_JS') )}}"></script>
		<script type="text/javascript" src="{{asset( config('assets.INTERACTION') )}}"></script>
		<script type="text/javascript" src="{{asset( config('assets.MOMENT_JS') )}}"></script>
		<script type="text/javascript" src="{{asset( config('assets.DAYGRID_JS') )}}"></script>
		<script type="text/javascript" src="{{asset( config('assets.SPANISH') )}}"></script>	


		@include( 'layouts/navbarAdmin' )
		@include( 'layouts/sidebarAdmin' )
			
			<!-- contenido de la página  -->
			@yield('content') 

		<!-- Ventanas Modales -->
		@include('layouts.modalDashboard')
		@include('layouts.modalDashboardAdmin')
	
		<!-- JQuery -->
		<script type="text/javascript" src="{{asset( config( 'assets.JQUERY' ) )}}"></script>
	
		<!-- Bootstrap min.js -->
		<script text="text/javascript" src="{{asset( config('assets.BOOTSTRAP_JS') )}}"></script>
		<script src="{{ asset( config( 'assets.CLOCKPICKER_JS' ) ) }}"></script>
		<script type="text/javascript" src="{{asset( config('assets.CUSTOM_CALENDAR') )}}"></script>
	</body>
</html>