@extends('layouts.app')


@section('content')



<!-- ************************ -->
<!--   MAIN                   -->
<!-- ************************ -->

<main class="clearfix">

	<!-- ************************ -->
	<!--   PREVIEW POST           -->
	<!-- ************************ -->

	<div class="row">
		<div class="col-md-12 margin-bottom70">

			<div class="preview-post-slider-wrap">

				<div class="preview-post-nav-left">
					<i class="pe-angle-left"></i>
				</div>

				<div class="preview-post-nav-right">
					<i class="pe-angle-right"></i>
				</div>

				<div class="preview-post-slider">
					<div class="preview-post active">
						<div class="preview-post-content">
							<div class="post-counter">
								<span class="cur"></span>
								<span class="sep">/</span>
								<span class="sum"></span>
							</div>
							<h5 class="">
								<a href="">I was so consumed by being busy, that I didn't
								realize how much I wasn't enjoying my life.</a>
							</h5>
						</div>

					</div>
					<!-- End preview-post -->

					<div class="preview-post">
						<div class="preview-post-content">
							<div class="post-counter">
								<span class="cur"></span>
								<span class="sep">/</span>
								<span class="sum"></span>
							</div>
							<h5 class="">
								<a href="">Purpose and passion – this is what life is all
									about. We all need an element of both purpose...
								</a>
							</h5>
						</div>

					</div>
					<!-- End preview-post -->

					<div class="preview-post">
						<div class="preview-post-content">
							<div class="post-counter">
								<span class="cur"></span>
								<span class="sep">/</span>
								<span class="sum"></span>
							</div>
							<h5 class="">
								<a href="">Sometimes I Forget That I'm An Adult. Being a
								grown up isn't turning out the way I planned...</a>
							</h5>
						</div>

					</div>
					<!-- End preview-post -->

					<div class="preview-post">
						<div class="preview-post-content">
							<div class="post-counter">
								<span class="cur"></span>
								<span class="sep">/</span>
								<span class="sum"></span>
							</div>
							<h5 class="">
								<a href="">Have you ever beat yourself up over not
								responding to every message you received...</a>
							</h5>
						</div>

					</div>
					<!-- End preview-post -->

					<div class="preview-post">
						<div class="preview-post-content">
							<div class="post-counter">
								<span class="cur"></span>
								<span class="sep">/</span>
								<span class="sum"></span>
							</div>
							<h5 class="">
								<a href="">New York City, home to over 8.5 million people,
								contains so much to see and do, you can barely...</a>
							</h5>
						</div>
					</div>
					<!-- End preview-post -->

				</div>
				<!-- End preview-post-slider -->
			</div>
			<!-- End preview-post-slider-wrap -->

		</div>
		<!-- End col-md-12 -->
	</div>

	<div class="clearfix"></div>

	<div class="row">
		<div class="col-md-8 offset-md-2">

			<div class="blog-post-item-wrap">

				<!-- ************************ -->
				<!--   PJAX CONTAINER         -->
				<!-- ************************ -->

				<div class="pjax-container">
					<div class="blog-post-item">

						<div class="thumb">

							<div class="blog-thumb-image-wrap">
								<img src="{{ asset('frontend') }}/img/blog-01.png" alt="image">
							</div>

						</div>
						<!-- End thumb -->

						<h5 class="blog-title">I was so consumed by being busy, that I didn't realize
						how much I wasn't enjoying my life.</h5>
						<!-- End blog-title -->

						<div class="blog-meta clearfix">
							<ul class="list-none cat">
								<li>
									<a href="#">music</a>
								</li>
							</ul>
							<!-- End cat -->
							<span class="date">20.03.2016</span>
							<!-- End date -->

							<span class="post-info">
								<a href="#">
									<i class="fa fa-eye"></i>
								25</a>
								<a href="#">
									<i class="fa fa-comment-o"></i>
								2</a>
								<a href="#">
									<i class="fa fa-heart-o"></i>
								15</a>
							</span>
							<!-- End post-info -->
						</div>
						<!-- End blog-meta -->

						<div class="post-content">

							<p>Vivamus aliquet, ex non semper commodo, ipsum ante dapibus purus, at
								facilisis odio leo tristique mi. In dapibus, tortor sodales feugiat ultrices,
								dolor velit scelerisque lacus, vel varius ligula orci non ante. Vivamus molestie
								felis a libero cursus cursus. Integer aliquam tellus orci, at luctus ex varius
								nec. Quisque ultricies tortor quam, sed sollicitudin magna posuere ut. Vivamus
								imperdiet dolor nec libero blandit interdum. Vivamus sit amet velit ac augue
								blandit imperdiet.
							</p>

							<blockquote>Etiam porttitor tortor nisi, nec elementum odio sagittis ac. Nam
								vehicula faucibus pellentesque. Sed eget magna ut elit pretium varius. Quisque
								mollis consequat pharetra. Phasellus sit amet posuere quam. Nulla nec lacinia
							augue</blockquote>

							<p>Fusce nulla nisl, ullamcorper sed ante sit amet, aliquam auctor enim. Nullam
								vestibulum urna nec metus facilisis mollis. Ut lobortis lectus at turpis mollis
								semper. Suspendisse sed enim vitae mi dapibus viverra id mollis ligula. Maecenas
								at vestibulum enim. Aenean at iaculis justo, sit amet vestibulum magna. Vivamus
								auctor lectus a ex tempor elementum nunc. Phasellus vehicula a ipsum vel
							venenatis. Praesent dictum risus at commodo porta. Nam non luctus nibh.</p>

						</div>
						<!-- End post-content -->

						<div class="line-social margin-top80 margin-bottom80">
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
					<!-- End blog-post-item -->

					<div class="comments-wrap clearfix">
						<div class="text-center margin-bottom40">
							<h6 class="uppercase">comments (2)</h6>
						</div>

						<div class="comment-list margin-bottom40">

							<div class="media">
								<div class="pull-left">
									<img class="comment-img" src="{{ asset('frontend') }}/img/avatar_01.png" alt="avatar">
								</div>

								<div class="media-body">
									<div class="comment-meta clearfix">
										<h6 class="uppercase pull-left">Anna Morgan
											<span>21.03.2016
											</span>
										</h6>
										<a href="#" class="reply-btn pull-right">Reply</a>
									</div>
									<p>Suspendisse augue quam, tincidunt eget arcu a, congue viverra justo. Nunc in
										aliquam nisi, at posuere massa. Etiam bibendum, arcu a vestibulum iaculis,
										libero lacus feugiat tortor.
									</p>

								</div>
								<!-- End media-body -->
							</div>
							<!-- End media -->

							<div class="media reply-comment">
								<div class="pull-left">
									<img class="comment-img" src="{{ asset('frontend') }}/img/avatar_02.png" alt="avatar">
								</div>

								<div class="media-body">
									<div class="comment-meta clearfix">
										<h6 class="uppercase pull-left">Emma Smith
											<span>22.03.2016
											</span>
										</h6>
										<a href="#" class="reply-btn pull-right">Reply</a>
									</div>
									<p>Suspendisse augue quam, tincidunt eget arcu a, congue viverra justo. Nunc in
										aliquam nisi, at posuere massa. Etiam bibendum, arcu a vestibulum iaculis,
										libero lacus feugiat tortor.
									</p>

								</div>
								<!-- End media-body -->
							</div>
							<!-- End media -->
						</div>
						<!-- End comment-list -->

						<div class="add-comment clearfix margin-bottom80">
							<div class="text-center margin-bottom40">
								<h6 class="uppercase">leave a comment</h6>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-control">
										<input type="text" class="input-white" placeholder="Name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-control">
										<input type="text" class="input-white" placeholder="Email">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-control">
										<textarea class="input-white" placeholder="Comment"></textarea>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="text-center mt10">

										<a href="#" class="btn btn-color">
											<span>Submit</span>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- End add-comment -->

					</div>
					<!-- End comments-wrap -->
				</div>
				<!-- End pjax-container -->
			</div>
			<!-- End blog-post-item-wrap -->

		</div>
		<!-- End col-md-8 col-md-offset-2 -->
	</div>

	<div class="clearfix"></div>

	<!-- ************************ -->
	<!--   SIDEBAR                -->
	<!-- ************************ -->

	<div class="footer-sidebar margin-top70 margin-bottom80 clearfix">

		<div class="col-md-3 sm-margin-bottom40 clearfix">
			<div class="widget lastes-posts">
				<h5 class="widget-title">
					Recent Posts:
				</h5>
				<ul class="list-none">
					<li>
						<a href="#">Best winter holiday flight tours</a><br>
						<span>20.03.2016</span>
					</li>
					<li>
						<a href="#">Does inner wisdom breed outer peace?</a><br>
						<span>20.03.2016</span>
					</li>
					<li>
						<a href="#">For the love of Jane Austen</a><br>
						<span>20.03.2016</span>
					</li>
				</ul>
			</div>
		</div>
		<!-- End col-md-3 -->

		<div class="col-md-3 sm-margin-bottom40 clearfix">
			<div class="widget categories">
				<h5 class="widget-title">
					Categories:
				</h5>
				<ul class="list-none">
					<li>
						<ul class="list-none">
							<li>
								<a href="#">Travel (18)</a>
							</li>
							<li>
								<a href="#">LifeStyle (26)</a>
							</li>
							<li>
								<a href="#">Music (32)</a>
							</li>
							<li>
								<a href="#">Video (9)</a>
							</li>
						</ul>
					</li>
					<li>
						<ul class="list-none">
							<li>
								<a href="#">Latest Posts (21)</a>
							</li>
							<li>
								<a href="#">Popular Posts (12)</a>
							</li>
							<li>
								<a href="#">All Posts (85)</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- End col-md-3 -->

		<div class="col-md-3 sm-margin-bottom40 clearfix">
			<div class="widget tags">
				<h5 class="widget-title">
					Tags:
				</h5>
				<ul class="list-none">
					<li>
						<a href="#">lifestyle</a>
					</li>
					<li>
						<a href="#">music</a>
					</li>
					<li>
						<a href="#">history</a>
					</li>
					<li>
						<a href="#">holidays</a>
					</li>
					<li>
						<a href="#">love</a>
					</li>
					<li>
						<a href="#">books</a>
					</li>
					<li>
						<a href="#">food</a>
					</li>
					<li>
						<a href="#">video</a>
					</li>
					<li>
						<a href="#">photos</a>
					</li>
					<li>
						<a href="#">animals</a>
					</li>
					<li>
						<a href="#">travel</a>
					</li>
					<li>
						<a href="#">fashion</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- End col-md-3 -->

		<div class="col-md-3 sm-margin-bottom40 clearfix">
			<div class="widget">
				<h5 class="widget-title">
					Subscribe to Newsletter:
				</h5>
				<p>Fusce a hendrerit est. Integer at nisl. Pellentesque euismod arcu ac justo
					malesuada, porta.

					<div class="fields-newsletter">
						<input type="text" placeholder="Enter Email">
						<button>
							OK
						</button>
					</div>

				</p>
			</div>
		</div>
		<!-- End col-md-3 -->

	</div>
	<!-- End footer-sidebar -->

</main>




@endsection