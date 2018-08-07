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
					<h1 class="uppercase">Contact
						<span></span>
					</h1>
				</div>
			</div>
			<!-- End page-title -->

		</div>
		<!-- End col-md-8 offset-md-2 -->

		<div class="col-md-8 offset-md-2">

			<p>Nam viverra turpis quis ligula tincidunt, at commodo enim gravida. Aliquam
				tincidunt leo non sem tincidunt, pharetra sagittis. Nullam pulvinar aliquet mi,
			ut pellentesque tellus pretium non.</p>

			<form
			class="mt40 margin-bottom100 contact-form form-black"
			id="contact-form"
			action="send_email.php"
			method="post"
			data-all-fields-required-msg="All fields are required"
			data-ajax-fail-msg="Ajax could not set the request"
			data-success-msg="Email successfully sent.">

			<div class="row">

				<div class="col-md-6">
					<div class="form-control">
						<input
						class="contact-form-name"
						type="text"
						name="name"
						placeholder="Your name:">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-control">
						<input
						class="contact-form-email"
						type="text"
						name="email"
						placeholder="Your email:">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-control">
						<textarea class="contact-form-message" name="message" placeholder="Message:"></textarea>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="text-center">
					</div>
				</div>
				<div class="col-md-12">
					<div class="margin-top10 text-center">
						<button class="btn">
							<span>Submit
								<i
								class="fa fa-spin fa-spinner ajax-loader"
								style="display: none; margin-left: 5px;"></i>
							</span>
						</button>
					</div>

				</div>
			</div>
		</form>
		<!-- End form -->

	</div>
</div>

</main>

@endsection
