<div class="container-fluid">

    <div class="col-md-12">
    <div class="card card-warning">
      <div class="card-header alert-primary">
        <div class="text-center">
        <h3 class="card-title">Data Jenis Laundry</h3>
    </div>
      </div>
      <div class="card-body">
        <p>
            <form action="<?= base_url()?>admin/c_kategori" method="post">
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
        
        <?php echo anchor('admin/c_kategori/insert','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>Tambah Data</button>')?>
        <table class="table table-bordered">
          <thead class="text-center">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis Laundry</th>
              <th>Harga</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($kategori as $kategori):?>
              <tr>
                <td><?= ++$start?></td>
                <td><?= $kategori->nama_kategori?></td>
                <td><?= $kategori->jenis?></td>
                <td><?= $kategori->harga?></td>
                    <td width="20px"><?php echo anchor('admin/c_kategori/update/'.$kategori->id_kategori, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
                    <td width="20px"><?php echo anchor('admin/c_kategori/delete/'.$kategori->id_kategori, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
        <?php echo $this->pagination->create_links(); ?>
      </div>
    </div>
  </div>
	
</div>