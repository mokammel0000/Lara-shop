<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title> @yield('title') </title>
		<link rel="shortcut icon" href="assets/images/logo/favourite_icon_01.png">

		<!-- fraimwork - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

		<!-- icon - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">

		<!-- animation - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

		<!-- nice select - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/nice-select.css">

		<!-- carousel - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

		<!-- popup images & videos - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">

		<!-- jquery ui - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">

		<!-- custom - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	</head>

	<body class="home_supermarket">

		<!-- backtotop - start -->
		<div id="thetop"></div>
		<div class="backtotop bg_supermarket_red">
			<a href="#" class="scroll">
				<i class="far fa-arrow-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->

		<!-- preloader - start -->
		{{-- <div id="preloader"></div> --}}
		<!-- preloader - end -->

		@include('website.partials.header')
		@yield('buttom_header')

		<main>
			
			@yield('content')
			
		</main>
		
		@include('website.partials.footer')
		
		<!-- fraimwork - jquery include -->
		<script src="assets/js/jquery-3.5.1.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- mobile menu - jquery include -->
		<script src="assets/js/mCustomScrollbar.js"></script>

		<!-- animation - jquery include -->
		<script src="assets/js/parallaxie.js"></script>
		<script src="assets/js/wow.min.js"></script>

		<!-- nice select - jquery include -->
		<script src="assets/js/nice-select.min.js"></script>

		<!-- carousel - jquery include -->
		<script src="assets/js/slick.min.js"></script>

		<!-- countdown timer - jquery include -->
		<script src="assets/js/countdown.js"></script>

		<!-- popup images & videos - jquery include -->
		<script src="assets/js/magnific-popup.min.js"></script>

		<!-- filtering & masonry layout - jquery include -->
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/masonry.pkgd.min.js"></script>
		<script src="assets/js/imagesloaded.pkgd.min.js"></script>

		<!-- jquery ui - jquery include -->
        <script src="assets/js/jquery-ui.js"></script>

		<!-- custom - jquery include -->
		<script src="assets/js/custom.js"></script>

	</body>
</html>