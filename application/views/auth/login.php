<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-5">
			<div class="card shadow-lg border-0 rounded-lg mt-5">
				<div class="card-header">
					<h3 class="text-center font-weight-light my-4">Login</h3>
				</div>
				<div class="card-body">
					<?= $this->session->flashdata('message'); ?>
					<form method="post" action="<?= base_url('auth') ?>">
						<div class="form-floating mb-3">
							<input class="form-control" value="<?= set_value('email') ?>" id="inputEmail" name="email" type="email"
								placeholder="name@example.com" />
								<?= form_error('email','<small class="text-danger pl-3>','</small>') ?>
							<label for="inputEmail">Email address</label>
						</div>
						<div class="form-floating mb-3">
							<input class="form-control" value="<?= set_value('nama') ?>" id="inputPassword" name="password" type="password"
								placeholder="Password" />
								<?= form_error('password', '<small class="text-danger pl-3>', '</small>') ?>
							<label for="inputPassword">Password</label>
						</div>
						<div class="form-check mb-3">
							<input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
							<label class="form-check-label" for="inputRememberPassword">Remember
								Password</label>
						</div>
						<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
							<a class="small" style="text-decoration:none" href="password.html">Forgot Password?</a>
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</form>
				</div>
				<div class="card-footer text-center py-3">
					<div class="small"><a href="<?= base_url('Auth/register'); ?>" style="text-decoration:none">Need an
							account? Sign up!</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
