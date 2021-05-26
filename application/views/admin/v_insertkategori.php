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
		        <h3 class="card-title">Input Data Jenis Laundry</h3>
		    	</div>

		      </div>
		      <form action="<?= base_url()?>admin/c_kategori/insert" method="post" enctype="multipart/form-data">
		        <div class="card-body">

		          <div class="form-group row">
		            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
		            <div class="col-sm-9">
		              <input type="hidden" class="form-control" name="id_kategori" id="id_kategori">
		              <input type="text" class="form-control" name="nama_kategori" required>
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="Jenis" class="col-sm-3 col-form-label">Jenis Laundry</label>
		            <div class="col-sm-9">
		              <select name="jenis" class="form-control">
		    		<option value="">-- Jenis Laundry --</option>
		    		<option>Kiloan</option>
		    		<option>Satuan</option>
		    	</select>
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="harga" class="col-sm-3 col-form-label">Harga</label>
		            <div class="col-sm-9">
		              <input type="text" class="form-control" name="harga" required>
		            </div>
		          </div>

		        </div>
		        <div class="card-footer alert-success">
		            <div class="modal-footer justify-content-between">
		            	<?php echo anchor('admin/c_kategori/', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
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