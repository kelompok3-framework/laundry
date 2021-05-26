<div class="container-fluid">

		<div class="row justify-content-center">
		<div class="col-md-8">
		    <div class="card card-warning">
		      <div class="card-header alert-success">
		      	<div class="text-center">
		        <h3 class="card-title">Update Data User</h3>
		    	</div>

		      </div>
		      <form action="<?php echo base_url() ?>admin/c_user/update" method="POST">
		      	<?php foreach ($user as $user) : ?>
		        <div class="card-body">

		          <div class="form-group row">
		            <label for="nama" class="col-sm-3 col-form-label">Username</label>
		            <div class="col-sm-9">
		              <input type="hidden" class="form-control" name="id_user"  value="<?php echo $user->id_user ?>">
		              <input type="text" class="form-control" name="username" value="<?php echo $user->username ?>" readonly>
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="tgl" class="col-sm-3 col-form-label">Password</label>
		            <div class="col-sm-9">
		              <input type="password" class="form-control" name="password" value="<?php echo $user->password ?>" readonly>
		            </div>
		          </div>

		          <div class="form-group row">
		            <label for="tgl" class="col-sm-3 col-form-label">Level</label>
		            <div class="col-sm-9">
		              <input type="text" class="form-control" name="level" value="<?php echo $user->level ?>" readonly>
		            </div>
		          </div>

		          <div class="form-group row">
		    			<label for="status" class="col-sm-3 col-form-label">Status</label>
		    			<div class="col-sm-9">
		    			<select name="status" class="form-control">
				    		<option value="Aktif" <?php echo $user->status == 'Aktif' ? "selected" : ""; ?>>Aktif</option>
				    		<option value="Tidak" <?php echo $user->status == 'Tidak' ? "selected" : ""; ?>>Tidak</option>
				    	</select>
				    </div>
		    		</div>
     
		        </div>
		        <div class="card-footer alert-success">
		         <div class="modal-footer justify-content-between">
		        	 	<?php echo anchor('admin/c_user/', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
		         		<button type="submit" class="btn btn-primary">Update</button>
		     		</div>
		        </div>
		       <?php endforeach; ?>
		      </form>
		    </div>
  		</div>
  	</div>
</div>