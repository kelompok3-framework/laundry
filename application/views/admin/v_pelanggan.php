<div class="container-fluid">

    <div class="col-md-12">
    <div class="card card-warning">
      <div class="card-header alert-primary">
        <div class="text-center">
        <h3 class="card-title">Data Pelanggan Yang Registrasi</h3>
    </div>
      </div>
      <div class="card-body">
        <p>
            <form action="<?= base_url()?>admin/c_pelanggan" method="post">
            <table class="table table-striped">
              <tr>
                <td>
                  Cari Data
                </td>
                <td>
                  <input type="text" name="keyword" class="form-control" placeholder="Cari Data" autocomplete="off" autofocus>
                </td>
                <td>
                  <button type="submit" class="btn btn-info">Cari</button>
                </td>
              </tr>
              
            </table>
            </form>
        </p>

        <table class="table table-bordered">
          <thead class="text-center">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>No Telp</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($pelanggan as $pelanggan):?>
              <tr>
                <td><?= ++$start?></td>
                <td><?= $pelanggan->nama?></td>
                <td><?= $pelanggan->no_telp?></td>
                <td><?= $pelanggan->jenis_kelamin?></td>
                <td><?= $pelanggan->alamat?></td>
                    <td width="20px"><?php echo anchor('admin/c_pelanggan/delete/'.$pelanggan->id_user, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
        <?php echo $this->pagination->create_links(); ?>
      </div>
    </div>
  </div>

</div>