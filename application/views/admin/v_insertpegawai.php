<!DOCTYPE html>
	<html>
	<head>
		<title>Insert Data</title>
	</head>
	<body>
		<div class="container-fluid">
			<br>
		<div class="row justify-content-center">
		<div class="col-md-8">
		    <div class="card card-warning">
		      <div class="card-header alert-success">
		      	<div class="text-center">
		        <h3 class="card-title">Input Data Pegawai</h3>
		    	</div>

		      </div>
		      <form action="<?= base_url()?>admin/c_pegawai/insert" method="post" enctype="multipart/form-data">
		        <div class="card-body">

		          <div class="form-group row">
		            <label for="nip" class="col-sm-3 col-form-label">NIP</label>
		            <div class="col-sm-9">
		              <input type="hidden" class="form-control" name="id_pegawai" id="id_pegawai">
		              <input type="text" class="form-control" name="nip" placeholder="NIP pegawai" required>
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="namaPegawai" class="col-sm-3 col-form-label">Nama</label>
		            <div class="col-sm-9">
		              <input type="text" class="form-control" name="nama" placeholder="Nama pegawai" required>
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
		            <div class="col-sm-9">
		              <input type="text" class="form-control" name="alamat" placeholder="Alamat Pegawai" required>
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="no_telp" class="col-sm-3 col-form-label">No Telp</label>
		            <div class="col-sm-9">
		              <input type="text" class="form-control" name="no_telp" placeholder="No Telp Pegawai" required>
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="jabatan" class="col-sm-3 col-form-label">Bagian</label>
		            <div class="col-sm-9">
		              <input type="text" class="form-control" name="jabatan" placeholder="Bagian" required>
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="username" class="col-sm-3 col-form-label">Username</label>
		            <div class="col-sm-9">
		              <input type="text" class="form-control" name="username" placeholder="Username" required>
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="username" class="col-sm-3 col-form-label">Password</label>
		            <div class="col-sm-9">
		              <input type="password" class="form-control" name="password" placeholder="Password" required>
		            </div>
		          </div>

		        </div>
		        <div class="card-footer alert-success">
		          <div class="modal-footer justify-content-between">
		        	 	<?php echo anchor('admin/c_pegawai/', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
		         		<button type="submit" class="btn btn-primary">Simpan</button>
		     		</div>
		        </div>
		      </form>
		    </div>
  		</div>
  	</div>
	</div>
</body>
</html>	