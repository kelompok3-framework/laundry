<div class="container-fluid">

      <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-warning">
          <div class="card-header alert-success">
            <div class="text-center">
            <h3 class="card-title">Update Profil Laundry</h3>
          </div>

          </div>
          <form action="<?php echo base_url() ?>admin/c_profil/update" method="POST">
            <?php foreach ($profil as $profil) : ?>
            <div class="card-body">

              <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama Laundry</label>
                <div class="col-sm-9">
                  <input type="hidden" class="form-control" name="id_profil"  value="<?php echo $profil->id_profil ?>">
                  <input type="text" class="form-control" name="nama_laundry" value="<?php echo $profil->nama_laundry ?>">
                </div>
              </div>

              <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="alamat" value="<?php echo $profil->alamat ?>">
                </div>
              </div>

              <div class="form-group row">
                <label for="no_telp" class="col-sm-3 col-form-label">No Telp</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="no_telp" value="<?php echo $profil->no_telp ?>">
                </div>
              </div>
     
            </div>
            <div class="card-footer alert-success">
             <div class="modal-footer justify-content-between">
                <?php echo anchor('admin/c_profil/', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
           <?php endforeach; ?>
          </form>
        </div>
      </div>
    </div>
</div>