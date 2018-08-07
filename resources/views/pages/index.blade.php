@extends('layouts.app')


@section('content')


<!-- ************************ -->
<!--   MAIN                   -->
<!-- *********************	*** -->

<main class="index-img jarallax clearfix dt" style="background-image: url({{asset('frontend')}}/img/index-blue.jpg);">
	<div class="dtc">
		<div class="col-md-8 offset-md-1 col-lg-6 offset-lg-1">
			<div class="page-title">
				<div class="text-left">
					<h1 class="uppercase">hi! I am emily!
						<span></span>
					</h1>
					<p>Hello, I'm Emily! Equal parts writer, lover & fighter. My entire life has
						been about gaining and losing control. It’s why I get so much pleasure out of
						re-alphabetizing my bookshelf. It’s why I lay in bed at night spinning at the
					thought of all the things I didn’t do. And that's why I start a blog.</p>
				</div>
				<a href="/blog" class="btn animsition-link">
					<span>go to blog</span>
				</a>
			</div>
			<!-- End page-title -->

		</div>
		<!-- End col-md-8 offset-md-1 -->

	</div>

</main>

@endsection
