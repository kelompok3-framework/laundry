<div class="container-fluid">
	<div class="row">
  <div class="col-md-12">
    <div class="card card-warning">
      <div class="card-header alert-primary">
      	<div class="text-center">
        <h3 class="card-title">Data Pemesanan</h3>
    </div>
      </div>
      <div class="card-body">
      	<?php echo anchor('admin/c_pemesanan/insert','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data</button>')?>
          <?php echo anchor('admin/c_pemesanan/detail','<button class="btn btn-sm btn-info mb-3"><i class="fas fa-eye fa-sm"></i> Detail Data</button>')?>
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
              aria-controls="nav-home" aria-selected="true">Proses</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
              aria-controls="nav-profile" aria-selected="false">Selesai</a>
            <a class="nav-item nav-link" id="nav-batal-tab" data-toggle="tab" href="#nav-batal" role="tab"
              aria-controls="nav-profile" aria-selected="false">Batal</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <table class="table table-bordered">
              <thead class="alert-secondary text-center">
                <tr>
                  <th>Kode Pemesanan</th>
                  <th>Nama</th>
                  <th>Kontak</th>
                  <th>Alamat</th>
                  <th>Tanggal Pemesanan</th>
                  <th>Status</th>
                  <th style="width: 15%">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no = 1;
                  foreach($data as $item):?>
                <tr>
                  <td><?= $item->nota?></td>
                  <td><?= $item->nama_pemesan?></td>
                  <td><?= $item->no_telp?></td>
                  <td><?= $item->alamat?></td>
                  <td><?= $item->tgl_pemesanan?></td>
                  <td><?= $item->status?></td>
                  <td>
                    <?php echo anchor('admin/c_pemesanan/update/'.$item->id_pemesanan, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?>
                    <?php
                          if($item->status=='Boking'){?>
                    <?php echo anchor('admin/c_pemesanan/hapus/'.$item->id_pemesanan, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?><?php }?>
                    </td>
                </tr>
                <?php
                  $no++;
                 endforeach;?>
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <table class="table table-bordered">
              <thead class="alert-info text-center">
                <tr>
                  <th>Kode Pemesanan</th>
                  <th>nama_pemesan</th>
                  <th>Kontak</th>
                  <th>Alamat</th>
                  <th>Tanggal Pemesanan</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $no = 1;
                    foreach($selesai as $item):?>
                <tr>
                  <td><?= $item->nota?></td>
                  <td><?= $item->nama_pemesan?></td>
                  <td><?= $item->no_telp?></td>
                  <td><?= $item->alamat?></td>
                  <td><?= $item->tgl_pemesanan?></td>
                  <td><?= $item->status?></td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="nav-batal" role="tabpanel" aria-labelledby="nav-batal-tab">
            <table class="table table-bordered text-center">
                <tr>
                  <th>Kode Pemesanan</th>
                  <th>nama_pemesan</th>
                  <th>Kontak</th>
                  <th>Alamat</th>
                  <th>Tanggal Pemesanan</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $no = 1;
                    foreach($batal as $item):?>
                <tr>
                  <td><?= $item->nota?></td>
                  <td><?= $item->nama_pemesan?></td>
                  <td><?= $item->no_telp?></td>
                  <td><?= $item->alamat?></td>
                  <td><?= $item->tgl_pemesanan?></td>
                  <td><?= $item->status?></td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</div>