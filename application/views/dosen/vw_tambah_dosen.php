<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header justify-content-center">
					Form Tambah Data Prodi
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group mb-2 ">
							<label for="nama_dosen">Nama Dosen</label>
							<input type="text" name="nama" value="<?= set_value('nama') ?>" id="nama_dosen" class="form-control" placeholder="Nama Dosen">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="nip">NIP</label>
							<input type="text" name="nip" id="nip" class="form-control" value="<?= set_value('nip') ?>" placeholder="NIP">
							<?= form_error('nip', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="alamat">Alamat</label>
							<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" value="<?= set_value('alamat') ?>">
							<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="no_hp">No Hp</label>
							<input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="No Hp" value="<?= set_value('no_hp') ?>">
							<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
						<label for="jenis_kelamin">Jenis Kelamin</label>
							<select name="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>" id="jk" class="form-control">
								<option value="">Jenis Kelamin</option>
								<option value="Laki-Laki">Laki Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
							<?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?= set_value('email') ?>">
							<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<a href="<?= base_url('Dosen') ?>" class="btn mt-2 btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn mt-2 btn-primary float-right">Tambah Prodi</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
