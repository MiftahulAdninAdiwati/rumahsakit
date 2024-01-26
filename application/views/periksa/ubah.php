<div class="container">

    <div class="div">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Pemeriksaan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $periksa['id'];?>">
                        <div class="form-group">
                            <label for="nama">Nama Pasien</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?=$periksa['namapasien']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kodedokter">Kode Dokter</label>
                            <select class="form-control" id="kodedokter" 
                            name="kodedokter">
                            <?php foreach($dokter as $dr) : ?>
                                <option value="<?= $dr['kodedokter'] ?>"><?= $dr['spesialis'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="koderuang">Kode Ruang</label>
                            <select class="form-control" id="koderuang" 
                            name="koderuang">
                            <?php foreach($ruang as $rg) : ?>
                                <option value="<?= $rg['koderuang'] ?>"><?= $rg['namaruang'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="usia">Usia Pasien</label>
                            <input type="Text" name="usia" class="form-control" id="usia" value="<?=$periksa['usia']; ?>">
                            <small class="form-text text-danger"><?= form_error('usia'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Pasien</label>
                            <input type="Text" name="alamat" class="form-control" id="alamat" value="<?=$periksa['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nohp">No HP Pasien</label>
                            <input type="text" name="nohp" class="form-control" id="nohp" value="<?=$periksa['nohp']; ?>">
                            <small class="form-text text-danger"><?= form_error('nohp'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>