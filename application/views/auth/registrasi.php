<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-7">
			<div class="card shadow-lg border-0 rounded-lg mt-5">
				<div class="card-header">
					<h3 class="text-center font-weight-light my-4">Create Account</h3>
				</div>
				<div class="card-body">
					<form method="post" action="<?= base_url('auth/register') ?>">
						<div class="row mb-3">
							<div class="col-md-12">
								<div class="form-floating mb-3 mb-md-0">
									<input class="form-control" value="<?= set_value('nama') ?>" name="nama"
										id="inputFirstName" type="text" placeholder="Enter your name" />
									<?= form_error('nama', '<small class = "text-danger pl-3">', '</small>'); ?>
									<label for="inputFirstName"> nama</label>
								</div>
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-md-12">
								<div class="form-floating mb-3 mb-md-0">
									<input class="form-control" name="email" id="inputFirstName"
										value="<?= set_value('email') ?>" type="email" placeholder="Enter your email" />
									<?= form_error('email', '<small class = "text-danger pl-3">', '</small>'); ?>
									<label for="inputFirstName"> email</label>
								</div>
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-md-6">
								<div class="form-floating mb-3 mb-md-0">
									<input class="form-control" name="password1" value="<?= set_value('password1') ?>"
										id="inputFirstName" type="password" placeholder="Enter your password" />
									<?= form_error('password1', '<small class = "text-danger pl-3">', '</small>'); ?>
									<label for="inputFirstName"> password</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-floating mb-3 mb-md-0">
									<input class="form-control" name="password2" value="<?= set_value('password2') ?>"
										id="inputFirstName" type="password" placeholder="Enter your password" />
									<?= form_error('password2', '<small class = "text-danger pl-3">', '</small>'); ?>
									<label for="inputFirstName">verification password</label>
								</div>
							</div>
						</div>
				




				<div class="mt-4 mb-0">
					<div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Create
							Account</button></div>
				</div>
				</form>
			</div>
			<div class="card-footer text-center py-3">
				<div class="small"><a href="<?= base_url('Auth') ?>" style="text-decoration:none">Have an account?
						Go to login</a></div>
			</div>
		</div>
	</div>
</div>
</div>