<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta
	name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="">

	<title>Iwrite</title>

	<link rel="shortcut icon" href="{{asset('frontend')}}/img/favicon.ico" type="image/x-icon">

	<!-- Plugins -->
	<link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/css/animsition.min.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/css/slick.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/css/nivo-lightbox.css">

	<!-- Icons -->
	<link rel="stylesheet" href="{{asset('frontend')}}/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/css/font-awesome.min.css">

	<!-- Select Primary Color -->
	<link rel="stylesheet" href="{{asset('frontend')}}/css/colors/blue.css">
	<!-- <link rel="stylesheet" href="css/colors/yellow.css"> -->
	<!-- <link rel="stylesheet" href="css/colors/pink.css"> -->

</head>

<body id="top" class="home">

	<div class="animsition">

		<!-- ************************ -->
		<!--   PRELOADER BLOG         -->
		<!-- ************************ -->

		<div class="preloader-blog">
			<span></span>
		</div>

		<!-- ************************ -->
		<!--   NAVBAR                 -->
		<!-- ************************ -->

		<div class="vl-navbar-wrap">

			<div class="container">
				<div class="vl-navbar clearfix">
					<div class="row">

						<div class="col-xs-6">

							<a href="index.html" class="logo pull-left">Emily</a>

							<ul class="post-categories pull-right hidden-md-down">
								<li class="active">
									<a href="blog.html" class="animsition-link">All</a>
								</li>
								<li>
									<a href="blog.html" class="animsition-link">Travel</a>
								</li>
								<li>
									<a href="blog.html" class="animsition-link">Lifestyle</a>
								</li>
								<li>
									<a href="blog.html" class="animsition-link">Music</a>
								</li>
								<li>
									<a href="blog.html" class="animsition-link">Video</a>
								</li>
							</ul>
							<!-- End post-categories -->
						</div>
						<!-- End col-xs-6 -->

						<div class="col-xs-6">

							<div class="row">
								<div class="col-xs-6">
									<div class="navbar-search pull-left hidden-md-down">
										<input type="text" placeholder="search">
										<div class="line-input"></div>
										<button>
											<i class="pe-search"></i>
										</button>
									</div>
								</div>
								<!-- End col-xs-8 -->
								<div class="col-xs-6">
									<a href="#" class="menu-toggle pull-right">
										<i class="burger-icon">
											<i></i>
										</i>
									</a>
								</div>
								<!-- End col-xs-4 -->
							</div>

						</div>
						<!-- End col-xs-6 -->
					</div>
				</div>
			</div>
			<!-- End container -->
		</div>
		<!-- End vl-navbar-wrap -->

		@include('inc.navbar')

		<div class="clearfix"></div>

		<div class="container">
			@yield('content') 
		</div>
		<!-- End container -->

		<!-- ************************ -->
		<!--   FOOTER                 -->
		<!-- ************************ -->

		<div class="clearfix"></div>

		<div class="container">
			<footer class="footer">
				<div class="row">

					<div class="col-sm-6">

						<p class="copy">
							&copy; 2016, Designed by
							<a href="#">Unvab</a>. Coded by
							<a href="#">VLThemes</a>
						</p>

					</div>
					<!-- End col-sm-6 -->

					<div class="col-sm-6">

						<ul class="list-none footer-social sm-mt10">
							<li>
								<a href="#" target="_blank">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<i class="fa fa-dribbble"></i>
								</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<i class="fa fa-behance"></i>
								</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
						</ul>
						<!-- End footer-social -->

					</div>
					<!-- End col-sm-6 -->
				</div>
			</footer>
			<!-- End footer -->
		</div>
		<!-- End container -->

	</div>
	<!-- End animsition -->

	<!-- ************************ -->
	<!--   SCRIPTS                -->
	<!-- ************************ -->

	<script src="{{asset('frontend')}}/vendors/jquery-1.12.0.min.js"></script>
	<script src="{{asset('frontend')}}/vendors/jquery-ui.min.js"></script>

	<!-- Plugins -->
	<script src="{{asset('frontend')}}/scripts/libs.js"></script>

	<!-- Custom -->
	<script src="{{asset('frontend')}}/vendors/vlthemes-ptf.js"></script>
	<script src="{{asset('frontend')}}/scripts/emily.js"></script>

</body>
</html>