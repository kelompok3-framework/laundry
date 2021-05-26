<div class="container-fluid">

			<div class="row justify-content-center">
		<div class="col-md-8">
		    <div class="card card-warning">
		      <div class="card-header alert-success">
		      	<div class="text-center">
		        <h3 class="card-title">Update Data Jenis Laundry</h3>
		    	</div>

		      </div>
		      <form action="<?php echo base_url() ?>admin/c_kategori/update" method="POST">
		      	<?php foreach ($kategori as $kategori) : ?>
		        <div class="card-body">

		          <div class="form-group row">
		            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
		            <div class="col-sm-9">
		              <input type="hidden" class="form-control" name="id_kategori"  value="<?php echo $kategori->id_kategori ?>">
		              <input type="text" class="form-control" name="nama_kategori" value="<?php echo $kategori->nama_kategori ?>">
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="jenis" class="col-sm-3 col-form-label">Jenis Laundry</label>
		            <div class="col-sm-9">
		              <input type="text" class="form-control" name="jenis" value="<?php echo $kategori->jenis ?>" readonly>
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="harga" class="col-sm-3 col-form-label">Harga</label>
		            <div class="col-sm-9">
		              <input type="text" class="form-control" name="harga" value="<?php echo $kategori->harga ?>">
		            </div>
		          </div>
     
		        </div>
		        <div class="card-footer alert-success">
		         <div class="modal-footer justify-content-between">
		        	 	<?php echo anchor('admin/c_kategori/', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
		         		<button type="submit" class="btn btn-primary">Update</button>
		     		</div>
		        </div>
		       <?php endforeach; ?>
		      </form>
		    </div>
  		</div>
  	</div>
</div>