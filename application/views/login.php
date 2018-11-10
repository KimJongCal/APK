<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<title>Login</title>

	<!-- Fontfaces CSS-->
	<link href="<?=base_url('assets/theme/CoolAdmin/css/font-face.css') ?>" rel="stylesheet" media="all">
	<link href="<?=base_url('assets/theme/CoolAdmin/vendor/font-awesome-4.7/css/font-awesome.min.css') ?>" rel="stylesheet"
	 media="all">
	<link href="<?=base_url('assets/theme/CoolAdmin/vendor/font-awesome-5/css/fontawesome-all.min.css') ?>" rel="stylesheet"
	 media="all">
	<link href="<?=base_url('assets/theme/CoolAdmin/vendor/mdi-font/css/material-design-iconic-font.min.css') ?>" rel="stylesheet"
	 media="all">

	<!-- Bootstrap CSS-->
	<link href="<?=base_url('assets/theme/CoolAdmin/vendor/bootstrap-4.1/bootstrap.min.css') ?>" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="<?=base_url('assets/theme/CoolAdmin/vendor/animsition/animsition.min.css') ?>" rel="stylesheet" media="all">
	<link href="<?=base_url('assets/theme/CoolAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') ?>"
	 rel="stylesheet" media="all">
	<link href="<?=base_url('assets/theme/CoolAdmin/vendor/wow/animate.css') ?>" rel="stylesheet" media="all">
	<link href="<?=base_url('assets/theme/CoolAdmin/vendor/css-hamburgers/hamburgers.min.css') ?>" rel="stylesheet" media="all">
	<link href="<?=base_url('assets/theme/CoolAdmin/vendor/slick/slick.css') ?>" rel="stylesheet" media="all">
	<link href="<?=base_url('assets/theme/CoolAdmin/vendor/select2/select2.min.css') ?>" rel="stylesheet" media="all">
	<link href="<?=base_url('assets/theme/CoolAdmin/vendor/perfect-scrollbar/perfect-scrollbar.css') ?>" rel="stylesheet"
	 media="all">

	<!-- Main CSS-->
	<link href="<?=base_url('assets/theme/CoolAdmin/css/theme.css') ?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
	<div class="page-wrapper">
		<div class="page-content--bge5">
			<div class="container">
				<div class="login-wrap">
					<div class="login-content">
						<div class="login-logo">
							<a href="<?=base_url('assets/theme/CoolAdmin/#') ?>">
								<img src="<?=base_url('assets/theme/CoolAdmin/images/icon/logo.png') ?>" alt="CoolAdmin">
							</a>
						</div>
                        <?php $this->load->view('message')?>
						<div class="login-form">
							<form action="<?=base_url('index.php/Auth/actionLogin')?>" method="post">
								<div class="form-group">
									<label>Username</label>
									<input class="au-input au-input--full" type="text" name="username" placeholder="Username">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="au-input au-input--full" type="password" name="password" placeholder="Password">
								</div>
								<div class="login-checkbox">
									<label>
										<input type="checkbox" name="remember">Remember Me
									</label>
								</div>
								<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Jquery JS-->
	<script src="<?=base_url('assets/theme/CoolAdmin/vendor/jquery-3.2.1.min.js') ?>"></script>
	<!-- Bootstrap JS-->
	<script src="<?=base_url('assets/theme/CoolAdmin/vendor/bootstrap-4.1/popper.min.js') ?>"></script>
	<script src="<?=base_url('assets/theme/CoolAdmin/vendor/bootstrap-4.1/bootstrap.min.js') ?>"></script>
	<!-- Vendor JS       -->
	<script src="<?=base_url('assets/theme/CoolAdmin/vendor/slick/slick.min.js') ?>">
	</script>
	<script src="<?=base_url('assets/theme/CoolAdmin/vendor/wow/wow.min.js') ?>"></script>
	<script src="<?=base_url('assets/theme/CoolAdmin/vendor/animsition/animsition.min.js') ?>"></script>
	<script src="<?=base_url('assets/theme/CoolAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>">
	</script>
	<script src="<?=base_url('assets/theme/CoolAdmin/vendor/counter-up/jquery.waypoints.min.js') ?>"></script>
	<script src="<?=base_url('assets/theme/CoolAdmin/vendor/counter-up/jquery.counterup.min.js') ?>">
	</script>
	<script src="<?=base_url('assets/theme/CoolAdmin/vendor/circle-progress/circle-progress.min.js') ?>"></script>
	<script src="<?=base_url('assets/theme/CoolAdmin/vendor/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
	<script src="<?=base_url('assets/theme/CoolAdmin/vendor/chartjs/Chart.bundle.min.js') ?>"></script>
	<script src="<?=base_url('assets/theme/CoolAdmin/vendor/select2/select2.min.js') ?>">
	</script>

	<!-- Main JS-->
	<script src="<?=base_url('assets/theme/CoolAdmin/js/main.js') ?>"></script>

</body>

</html>
<!-- end document-->