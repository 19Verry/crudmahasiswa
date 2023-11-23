<div class="container-fluid">
	<h1 class=" h3 mb-4 text-gray-800"><?= $judul ?></h1>
	<div class="row">
		<div class="col-md-6">
			<a href="<?= base_url('Dosen/tambah') ?>" class="btn btn-info mb-2">Tambah Dosen</a>
		</div>
		<div class="col-md-12">
			<?= $this->session->flashdata('message'); ?>
			<table class="table">
				<thead>
					<tr>
						<td>No</td>
						<td>Nama</td>
						<td>NIP</td>
						<td>Email</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
				<?php $i = 1;?>
				<?php foreach ($dosen as $us ) :?>
					<tr>
						<td><?= $i ?></td>
						<td><?= $us['nama']?></td>
						<td><?= $us['nip']?></td>
						<td><?= $us['email']?></td>
						<td>
							<a href="<?= base_url('Dosen/hapus/') . $us['id'] ?>" class="btn btn-danger">Hapus</a>
							<a href="<?= base_url('Dosen/edit/') . $us['id'] ?>" class="btn btn-warning">Edit</a>
							<a href="<?= base_url('Dosen/detail/') . $us['id'] ?>" class="btn btn-info">Detail</a>
						</td>
					</tr>
					<?php $i++ ?>
					<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>
