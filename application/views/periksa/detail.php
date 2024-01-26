<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        Detail Data Pasien
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $periksa['namapasien']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $periksa['nohp']; ?></h6>
                        <p class="card-text"><?= $periksa['alamat']; ?></p>
                        <a href="<?= base_url(); ?>periksa" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
        
        </div>
    </div>
</div>