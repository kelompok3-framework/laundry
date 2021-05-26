<div class="container-fluid">

    <div class="col-md-12">
    <div class="card card-warning">
      <div class="card-header alert-primary">
        <div class="text-center">
        <h3 class="card-title">Data Profil Laundry</h3>
    </div>
      </div>
      <div class="card-body">

        
        <table class="table table-bordered">
          <thead class="text-center">
            <tr>
              <th>No</th>
              <th>Nama Laundry</th>
              <th>Alamat</th>
              <th>No Telp</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 1;
              foreach($profil as $profil):?>
              <tr>
                <td><?= $no++?></td>
                <td><?= $profil->nama_laundry?></td>
                <td><?= $profil->alamat?></td>
                <td><?= $profil->no_telp?></td>
                    <td width="20px"><?php echo anchor('admin/c_profil/update/'.$profil->id_profil, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
                    
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
	
</div>