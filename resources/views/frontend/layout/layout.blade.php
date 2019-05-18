<!DOCTYPE html>
<html lang="en">
	@include('frontend.layout.header')
	<body>
		
		<!-- Header -->
		<header id="header">
			<!-- Nav -->
			@include('frontend.layout.nav')
			<!-- /Nav -->
		</header>
		@yield('content')
	@include('frontend.layout.footer')
	</body>
</html>