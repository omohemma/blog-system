@extends('layouts.app')


@section('content')


<!-- ************************ -->
<!--   MAIN                   -->
<!-- ************************ -->

<main class="background-color clearfix dt">
	<div class="dtc">

		<div class="col-md-8 offset-md-2">

			<div class="page-title">
				<div class="text-center">
					<h1 class="uppercase">Services
						<span></span>
					</h1>
				</div>
			</div>
			<!-- End page-title -->

		</div>
		<!-- End col-md-8 offset-md-2 -->

		<div class="col-md-8 offset-md-2">

			<!-- ************************ -->
			<!--   SLDIER                 -->
			<!-- ************************ -->

			<div class="slider-emily-wrap margin-bottom70">

				<a href="#" class="emily-arrow-prev">
					<span>1/3</span>
					<i class="fa fa-long-arrow-left"></i>
				</a>

				<a href="#" class="emily-arrow-next">
					<i class="fa fa-long-arrow-right"></i>
					<span>1/3</span>
				</a>

				<div class="slider-emily">
					<!-- Slide -->
					<div class="slide">
						<div class="row">
							<div class="col-md-6">
								<img src="img/service_01.png" alt="image">
							</div>
							<div class="col-md-6 col-sm-12 mt60">
								<h5>Design</h5>
								<p>Nam viverra turpis quis ligula tincidunt, at commodo enim gravida. Aliquam
									tincidunt leo non sem tincidunt, pharetra sagittis. Nullam pulvinar aliquet mi,
									ut pellentesque tellus pretium non.
								</p>

								<a href="gallery.html" class="btn animsition-link">
									<span>view works</span>
								</a>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="slide">
						<div class="row">
							<div class="col-md-6">
								<img src="{{asset('frontend')}}/img/service_02.png" alt="image">
							</div>
							<div class="col-md-6 col-sm-12 mt60">
								<h5>Photography</h5>
								<p>Nam viverra turpis quis ligula tincidunt, at commodo enim gravida. Aliquam
									tincidunt leo non sem tincidunt, pharetra sagittis. Nullam pulvinar aliquet mi,
									ut pellentesque tellus pretium non.
								</p>

								<a href="gallery.html" class="btn animsition-link">
									<span>view works</span>
								</a>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="slide">
						<div class="row">
							<div class="col-md-6">
								<img src="{{asset('frontend')}}/img/service_03.png" alt="image">
							</div>
							<div class="col-md-6 col-sm-12 mt60">
								<h5>Branding</h5>
								<p>Nam viverra turpis quis ligula tincidunt, at commodo enim gravida. Aliquam
									tincidunt leo non sem tincidunt, pharetra sagittis. Nullam pulvinar aliquet mi,
									ut pellentesque tellus pretium non.
								</p>

								<a href="gallery.html" class="btn animsition-link">
									<span>view works</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- End slider-emily -->

			</div>
			<!-- End slider-emily-wrap -->

			<!-- ************************ -->
			<!--   SERVICE LIST           -->
			<!-- ************************ -->
			<div class="mt50 margin-bottom100">
				<div class="row">
					<div class="service-list">
						<div class="col-md-6 col-sm-6 service-item">
							<i class="pe-diamond"></i>
							<h6>creative design</h6>
							<p>Aenean tincidunt purus dui malesuada vehicula fringilla cursus</p>
						</div>
						<div class="col-md-6 col-sm-6 service-item">
							<i class="pe-like"></i>
							<h6>support 24/7</h6>
							<p>Nunc venenatis aliquam lacinia eleifend est erat, in malesuada</p>
						</div>
						<div class="col-md-6 col-sm-6 service-item">
							<i class="pe-anchor"></i>
							<h6>well documentation</h6>
							<p>Maecenas euismod lobortis risus congue nulla aliquam risus massa</p>
						</div>
						<div class="col-md-6 col-sm-6 service-item">
							<i class="pe-umbrella"></i>
							<h6>100% responsive</h6>
							<p>Cras sed dolor convallis, tique hendrerit, consectetur sapien</p>
						</div>
					</div>
				</div>

			</div>

		</div>
		<!-- End col-md-8 offset-md-2 -->

		<!-- ************************ -->
		<!--   INSTAFEED              -->
		<!-- ************************ -->

		<div class="col-md-12">
			<div class="row">
				<div class="instafeed clearfix">
					<ul class="list-none">
						<li>
							<div class="insta-img">
								<img src="{{asset('frontend')}}/img/instafeed/1.png" alt="image">
								<a href="" target="_blank" class="insta-overlay">
									<strong>#emily</strong>
								</a>
							</div>
						</li>
						<li>
							<div class="insta-img">
								<img src="{{asset('frontend')}}/img/instafeed/2.png" alt="image">
								<a href="" target="_blank" class="insta-overlay">
									<strong>#emily</strong>
								</a>
							</div>
						</li>
						<li>
							<div class="insta-img">
								<img src="{{asset('frontend')}}/img/instafeed/3.png" alt="image">
								<a href="" target="_blank" class="insta-overlay">
									<strong>#emily</strong>
								</a>
							</div>
						</li>
						<li>
							<div class="insta-img">
								<img src="{{asset('frontend')}}/img/instafeed/4.png" alt="image">
								<a href="" target="_blank" class="insta-overlay">
									<strong>#emily</strong>
								</a>
							</div>
						</li>
						<li>
							<div class="insta-img">
								<img src="{{asset('frontend')}}/img/instafeed/5.png" alt="image">
								<a href="" target="_blank" class="insta-overlay">
									<strong>#emily</strong>
								</a>
							</div>
						</li>
						<li>
							<div class="insta-img">
								<img src="{{asset('frontend')}}/img/instafeed/6.png" alt="image">
								<a href="" target="_blank" class="insta-overlay">
									<strong>#emily</strong>
								</a>
							</div>
						</li>
						<li>
							<div class="insta-img">
								<img src="{{asset('frontend')}}/img/instafeed/7.png" alt="image">
								<a href="" target="_blank" class="insta-overlay">
									<strong>#emily</strong>
								</a>
							</div>
						</li>
						<li>
							<div class="insta-img">
								<img src="{{asset('frontend')}}/img/instafeed/8.png" alt="image">
								<a href="" target="_blank" class="insta-overlay">
									<strong>#emily</strong>
								</a>
							</div>
						</li>
					</ul>
				</div>

			</div>
		</div>
		<!-- End col-md-12 -->
	</div>

</main>

@endsection