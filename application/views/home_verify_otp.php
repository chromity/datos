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
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5">
				<div class="card-body">
					<h5 id="home-form-desc" class="card-title text-center">Please check your phone messages for the verification code.</h5>
					<form class="form-signin" action="<?= base_url('Home/verify_otp') ?>" method="POST">
						<div class="form-label-group">
							<input type="text" id="otp" name="otp" class="form-control" placeholder="OTP"
								   required autofocus>
							<label for="otp">Verification Code</label>
						</div>
						<button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">VERIFY</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
