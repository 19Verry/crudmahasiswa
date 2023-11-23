<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">
		<?= $judul ?>
	</h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header justify-content-center">
					Form Ubah Data Dosen
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?= $dosen['id'] ?>" id="id" class="form-control">
						<div class="form-group mb-2 ">
							<label for="nama">Nama dosen</label>
							<input type="text" value="<?= $dosen['nama'] ?>" name="nama" id="nama" class="form-control" placeholder="Nama dosen">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="nip">NIP</label>
							<input type="text" value="<?= $dosen['nip'] ?>" name="nip" id="nip" class="form-control" placeholder="nip">
							<?= form_error('nip', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="alamat">Alamat</label>
							<input type="text" value="<?= $dosen['alamat'] ?>" name="alamat" id="alamat" class="form-control" placeholder="alamat">
							<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="no_hp">No Hp</label>
							<input type="text" value="<?= $dosen['no_hp'] ?>" name="no_hp" id="no_hp" class="form-control" placeholder="no_hp">
							<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="jenis_kelamin">Jenis Kelamin</label>
							<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
								<option value="<?= $dosen['jenis_kelamin'] ?>">
									<?= $dosen['jenis_kelamin'] ?>
								</option>
								<option value="Laki-Laki" <?php if ($dosen['jenis_kelamin'] == "Laki-laki") ?>>Laki
									Laki</option>
								<option value="Perempuan" <?php if ($dosen['jenis_kelamin'] == "Perempuan") ?>>
									Perempuan</option>
							</select>
							<?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="email">Email</label>
							<input type="email" value="<?= $dosen['email'] ?>" name="email" id="email" class="form-control" placeholder="Email">
							<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<a href="<?= base_url('dosen') ?>" class="btn mt-2 btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn mt-2 btn-primary float-right">Ubah dosen</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>