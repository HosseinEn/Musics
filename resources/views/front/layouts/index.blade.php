<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>@yield('title', 'Melodi')</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="Hossein Enshaei">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('img/logo/favicon.ico') }}">

		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	</head>

	<body dir="rtl">

		<!-- modal for booking ticket form -->
		<div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="BookTicket">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Name of The Event &nbsp; <small><span class="label label-success">Available</span> &nbsp; <span class="label label-danger">Not Available</span></small></h4>
					</div>
					<!-- form for events ticket booking -->
					<form>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@mail.com">
							</div>
							<div class="form-group">
								<label for="exampleInputContact">Contact</label>
								<input type="text" class="form-control" id="exampleInputContact" placeholder="+91 55 5555 5555">
							</div>
							<div class="form-group">
								<label for="exampleInputSeats">Number of Tickets</label>
								<select class="form-control" id="exampleInputSeats">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> I accept the Terms of Service
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<!-- link to payment gatway here -->
							<button type="button" class="btn btn-primary">Book Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- wrapper -->
		<div class="wrapper" id="home">

            @include('front.layouts.header')

			@yield('content')

	        @include('front.layouts.footer')

			<!-- Scroll to top -->
			<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span>

		</div>

		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <!-- Javascript files -->
		<!-- jQuery -->
		<script src="{{ asset('js/jquery.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<!-- WayPoints JS -->
		<script src="{{ asset('js/waypoints.min.js') }}"></script>
		<!-- Include js plugin -->
		<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
		<!-- One Page Nav -->
		<script src="{{ asset('js/jquery.nav.js') }}"></script>
		<!-- Respond JS for IE8 -->
		<script src="{{ asset('js/respond.min.js') }}"></script>
		<!-- HTML5 Support for IE -->
		<script src="{{ asset('js/html5shiv.js') }}"></script>
		<!-- Custom JS -->
	</body>
</html>
