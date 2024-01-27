<div class="container">
    <?php if ( $this->session->flashdata('flash') ): ?>
    <div class="row mt-3">
        <div class="com-md-6">
            <div class="alert alert-success alert-dismissible fade show" 
            role="alert">
                Data Pasien<strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" 
                aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>periksa/tambah" class="btn btn-primary">Tambah Data Pemeriksaan</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Pasien.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Pemeriksaan Pasien</h3>
            <?php if( empty($periksa) ) : ?>
                <div class="alert alert-danger" role="alert">
                Data Pasien Tidak Ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach( $periksa as $prs ) : ?>
                    <li class="list-group-item">
                        <?= $prs['namapasien']; ?>
                        <a href="<?= base_url(); ?>periksa/hapus/<?= $prs['id']; ?>"
                        class="badge badge-danger float-right mr-2" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
                        <a href="<?= base_url(); ?>periksa/ubah/<?= $prs['id']; ?>"
                        class="badge badge-success float-right mr-2">Ubah</a>
                        <a href="<?= base_url(); ?>periksa/detail/<?= $prs['id']; ?>"
                        class="badge badge-primary float-right mr-2">Detail</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

</div>