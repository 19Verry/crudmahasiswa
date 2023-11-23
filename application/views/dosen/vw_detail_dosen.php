<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Dosen
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $dosen['nama']?></h2>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $dosen['email'] ?></h6>
                    <div class="row">
                        <div class="col-md-4">NIP</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $dosen['nip'] ?></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">Jenis Kelamin</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $dosen['jenis_kelamin'] ?></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">No HP</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $dosen['no_hp'] ?></div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">Alamat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $dosen['alamat'] ?></div>
                    </div>
                    
                </div>
            </div>
            <div class="card-footer justify-content-center">
                <a href="<?= base_url('Dosen')?>" class="btn btn-danger">Tutup</a>
            </div>
        </div>
    </div>
</div>
