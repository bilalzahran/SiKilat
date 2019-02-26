<body class="account-pages">
	<!-- Begin page -->
	<div class="accountbg" style="background: url('assets/images/bg-1.jpg');background-size: cover;background-position: center;"></div>
	<div class="wrapper-page account-page-full">
		<div class="card">
			<div class="card-block">
				<div class="account-box">
					<div class="card-box p-5">
						<h2 class="text-uppercase text-center pb-4">
						<a href="index.php" class="text-success">
							Login Pelanggan
						</a>
						</h2>
						<form class="" action="Login.php" method="POST">
							<div class="form-group m-b-20 row">
								<div class="col-12">
									<label for="emailaddress">Username</label>
									<input class="form-control" type="text" id="emailaddress" required="" placeholder="Masukkan Username" name="username">
								</div>
							</div>
							<div class="form-group row m-b-20">
								<div class="col-12">									
									<label for="password">Kata Sandi</label>
									<input class="form-control" type="password" required="" id="password" placeholder="Masukkan Kata Sandi" name="password">
								</div>
							</div>							
							<div class="form-group row text-center m-t-10">
								<div class="col-12">
									<input class="btn btn-block btn-custom waves-effect waves-light" type="submit" value="Masuk" name="submit"></input>
								</div>
							</div>
						</form>
						<div class="row m-t-50">
							<div class="col-sm-12 text-center">
								<p class="text-muted">Belum punya akun? <a href="page-register.php" class="text-dark m-l-5"><b>Daftar</b></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="m-t-40 text-center">
			<p class="account-copyright">SiKilat - Pengiriman cepat dan aman</p>
		</div>
	</div>	
</body>
</html>