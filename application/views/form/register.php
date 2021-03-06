<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login D-Farm</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?= base_url('index.php/user/actionregister')?>">
					<span class="login100-form-title p-b-34">
						Daftar Akun
					</span>

                    <div class="wrap-input100 rs1-wrap-input200 validate-input m-b-20" data-validate="Wajib di isi">
						<input class="input100" type="text" required name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Wajib di isi">
						<input class="input100" type="text" required name="nama_depan" placeholder="Nama Depan">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Wajib di isi">
						<input class="input100" type="text" required name="nama_belakang" placeholder="Nama Belakang">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 rs1-wrap-input200 validate-input m-b-20" data-validate="Wajib di isi">
						<input class="input100" type="text" required name="alamat" placeholder="Alamat">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Wajib di isi">
						<input class="input100" type="text" required name="kota" placeholder="Kota">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Wajib di isi">
						<input class="input100" type="text" required name="no_telepon_konsumen" placeholder="No. Telp.">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Wajib di isi">
						<input class="input100" type="text" required name="username" placeholder="User name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Wajib di isi">
						<input class="input100" type="password" required name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<!-- <span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a> -->
					</div>

					<div class="w-full text-center">
						<a href="#" class="txt3">
							Sign Up
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('<?php echo base_url()?>assets/images/bg-01.jpg');"></div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url()?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url()?>assets/js/main-login.js"></script>

</body>
</html>
