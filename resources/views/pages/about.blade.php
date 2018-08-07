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
					<h1 class="uppercase">About Me
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

			<div class="slider-emily-wrap margin-bottom40">

				<a href="#" class="emily-arrow-prev">
					<span>1/3</span>
					<i class="fa fa-long-arrow-left"></i>
				</a>

				<a href="#" class="emily-arrow-next">
					<i class="fa fa-long-arrow-right"></i>
					<span>1/3</span>
				</a>

				<div class="slider-emily">
					<img src="{{asset('frontend')}}/img/about_01.png" alt="image">
					<img src="{{asset('frontend')}}/img/about_02.png" alt="image">
					<img src="{{asset('frontend')}}/img/about_03.png" alt="image">
				</div>
				<!-- End slider-emily -->

			</div>
			<!-- End slider-emily-wrap -->

			<p>Nam viverra turpis quis ligula tincidunt, at commodo enim gravida. Aliquam
				tincidunt leo non sem tincidunt, pharetra sagittis. Nullam pulvinar aliquet mi,
				ut pellentesque tellus pretium non. In magna orci, viverra ac consequat in,
			feugiat a lorem. In hac habitasse platea dictumst.</p>

			<!-- ************************ -->
			<!--   PROGRESS BAR           -->
			<!-- ************************ -->
			<div class="margin-bottom40">
				<ul class="progress-bar">

					<li>
						<p>
							<strong>Music</strong>
							<i>90</i>%</p>
							<div class="bar-wrap">
								<span data-width="90"></span>
							</div>
						</li>

						<li>
							<p>
								<strong>Travel</strong>
								<i>65</i>%</p>
								<div class="bar-wrap">
									<span data-width="65"></span>
								</div>
							</li>

							<li>
								<p>
									<strong>Lifestyle</strong>
									<i>75</i>%</p>
									<div class="bar-wrap">
										<span data-width="75"></span>
									</div>
								</li>

							</ul>
							<!-- End progress-bar -->
						</div>

						<p>
							Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
							Curae; Nullam ullamcorper quam leo. Aenean sodales, id eleifend massa posuere
							sed. Phasellus feugiat at orci vel rhoncus. Ut malesuada magna sed arcu finibus
							auctor ut a turpis. Sed vulputate ullamcorper nisi, non egestas enim ut.
							Praesent vel pellentesque eros. Nullam ut elit eget odio dapibus blandit vitae
							in est.
						</p>

						<p>
							Suspendisse tincidunt, et condimentum condimentum, nisi lectus rutrum enim,
							vulputate luctus nulla turpis id magna. Pellentesque at elit ut lacus viverra
						sollicitudin ut ac mi. Pellentesque mollis faucibus aliquam.</p>

						<div class="line-social line-social-black margin-top80 margin-bottom80">
							<ul class="list-none">
								<li>
									<a href="#" target=_blank>
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" target=_blank>
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#" target=_blank>
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- End line-social -->

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