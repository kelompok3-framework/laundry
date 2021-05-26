<!DOCTYPE html>
	<html>
	<head>
		<title>Update Data</title>
	</head>
	<body>
		<div class="container-fluid">
			<br>
		<div class="row justify-content-center">
		<div class="col-md-8">
		    <div class="card card-warning">
		      <div class="card-header alert-success">
		      	<div class="text-center">
		        <h3 class="card-title">Update Data Pegawai</h3>
		    	</div>

		      </div>
		     
		      <form action="<?php echo base_url() ?>admin/c_pegawai/update" method="POST">
		      	 <?php foreach ($pegawai as $pegawai): ?>
		        <div class="card-body">

		          <div class="form-group row">
		            <label for="nip" class="col-sm-3 col-form-label">NIP</label>
		            <div class="col-sm-9">
		              <input type="hidden" class="form-control" name="id_pegawai"  value="<?php echo $pegawai->id_pegawai ?>">
		              <input type="text" class="form-control" name="nip" value="<?php echo $pegawai->nip ?>">
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="namaPegawai" class="col-sm-3 col-form-label">Nama</label>
		            <div class="col-sm-9">
		              <input type="text" class="form-control" name="nama" value="<?php echo $pegawai->nama ?>">
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
		            <div class="col-sm-9">
		              <input type="text" class="form-control" name="alamat" value="<?php echo $pegawai->alamat ?>">
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="no_telp" class="col-sm-3 col-form-label">No Telp</label>
		            <div class="col-sm-9">
		              <input type="text" class="form-control" name="no_telp" value="<?php echo $pegawai->no_telp ?>">
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="jabatan" class="col-sm-3 col-form-label">Bagian</label>
		            <div class="col-sm-9">
		              <input type="text" class="form-control" name="jabatan" value="<?php echo $pegawai->jabatan ?>">
		              <input type="hidden" class="form-control" name="id_user" value="<?php echo $pegawai->id_user ?>">
		            </div>
		          </div>
		        </div>
		        <div class="card-footer alert-success">
		         <div class="modal-footer justify-content-between">
		        	 	<?php echo anchor('admin/c_pegawai/', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
		         		<button type="submit" class="btn btn-primary">Update</button>
		     		</div>
		        </div>
		         <?php endforeach; ?>
		      </form>
		    
		    </div>
  		</div>
  	</div>
	</div>
</body>
</html>	