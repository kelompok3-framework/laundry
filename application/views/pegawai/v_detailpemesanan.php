<div class="container-fluid">

    <div class="col-md-12">
    <div class="card card-warning">
      <div class="card-header alert-primary">
        <div class="text-center">
        <h3 class="card-title">Detail Pemesanan</h3>
    </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead class="alert-warning">
            <tr>
              <th>No</th>
              <th>Kode Pemesanan</th>
              <th>Nama</th>
              <th>Kontak</th>
              <th>Alamat</th>
              <th>Tanggal Pemesanan</th>
              <th>Jenis Laundry</th>
              <th>Jumlah</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 1;
              foreach($join_pemesanan_detail_kategori as $data):?>
              <tr>
                <td><?= $no++?></td>
                <td><?= $data->nota?></td>
                <td><?= $data->nama?></td>
                <td><?= $data->no_telp?></td>
                <td><?= $data->alamat?></td>
                <td><?= $data->tgl_pemesanan?></td>
                <td><?= $data->nama_kategori?></td>
                <td><?= $data->jumlah?></td>
                <td><?= $data->status?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
        <?php echo anchor ('pegawai/c_pemesanan','<div class="btn btn-sm btn-danger">Kembali</div>') ?><br><br>
      </div>
    </div>
  </div>
	
</div>