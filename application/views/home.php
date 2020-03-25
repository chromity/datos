<html>
<head>
	<title>Datos</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

	<script
		src="https://code.jquery.com/jquery-3.4.1.js"
		integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
		crossorigin="anonymous"></script>

	<script src="<?php echo base_url(); ?>assets/js/home.js"></script>

	<link href="https://fonts.googleapis.com/css?family=PT+Sans|Rajdhani&display=swap" rel="stylesheet">

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
			integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
			crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
			integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
			crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="#">Datos</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
					   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Links
					</a>
					<!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
					<div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">About</a>
						<a class="dropdown-item" href="#">Disclaimer</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="https://ncovtracker.doh.gov.ph/">DOH COVID TRACKER</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-5 col-lg-7 mx-auto">
			<div class="card card-signin my-5">
				<div class="card-body">
					<p id="information">DATOS is an information dissemination application that sends daily
						updates regarding Philippines COVID statistics sourced from Department of Health official
						tracker.</p>
					<p id="information">Everyday at 6AM and 6PM, users who will register their mobile numbers will
						receive counts regarding the total confirmed cases, recovered, and other related information
						through SMS.</p>
					<p id="information">To start, please register and verify your mobile number in the right.</p>
				</div>
			</div>
			<div class="card card-signin my-5">
				<div class="card-body">
					<a href="https://ncovtracker.doh.gov.ph/"
					   style="font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, sans-serif; font-size: 13.008px;"
					   target="_blank">
						<iframe height="600px" src="https://ncovtracker.doh.gov.ph" width="100%"></iframe>
					</a>
				</div>
			</div>
		</div>
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5">
				<div class="card-body">
					<h5 id="home-form-desc" class="card-title text-center">Receive daily PH COVID-19 Updates</h5>
					<form class="form-signin" action="<?= base_url('Home/send_otp_sms') ?>" method="POST">
						<div class="form-label-group">
							<input type="text" id="phone-number" name="phone" class="form-control" placeholder="Mobile Number"
								   required autofocus>
							<label for="phone-number">Mobile Number</label>
						</div>
						<button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">CONFIRM</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
