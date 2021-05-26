<div class="container-fluid">

        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-warning">
              <div class="card-header alert-success">
                <div class="text-center">
                <h3 class="card-title">Hapus Data Pemesanan Ini?</h3>
                </div>

              </div>
              <form action="<?php echo base_url() ?>pegawai/c_pemesanan/update" method="POST">
                <?php foreach ($pemesanan as $pemesanan) : ?>
                <div class="card-body">

                  <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Kode Pemesanan</label>
                    <div class="col-sm-9">
                      <input type="hidden" class="form-control" name="id_pemesanan"  value="<?php echo $pemesanan->id_pemesanan ?>">
                      <input type="text" class="form-control" name="nota" value="<?php echo $pemesanan->nota ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tgl" class="col-sm-3 col-form-label">Tanggal Pemesanan</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="tgl_pemesanan" value="<?php echo $pemesanan->tgl_pemesanan ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tgl" class="col-sm-3 col-form-label">Nama Pemesan</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nama_pemesan" value="<?php echo $pemesanan->nama_pemesan ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tgl" class="col-sm-3 col-form-label">Kontak</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="no_telp" value="<?php echo $pemesanan->no_telp ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tgl" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="alamat" value="<?php echo $pemesanan->alamat ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="status" value="Batal" readonly>
                    </div>
                    </div>
     
                </div>
                <div class="card-footer alert-success">
                 <div class="modal-footer justify-content-between">
                      <?php echo anchor('pegawai/c_pemesanan/', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </div>
               <?php endforeach; ?>
              </form>
            </div>
        </div>
    </div>
</div>