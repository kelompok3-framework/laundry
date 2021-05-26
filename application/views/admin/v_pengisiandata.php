<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $items) {
						$grand_total = $grand_total + $items['subtotal'];
					}

					echo "<h4>Total Pemesanan : Rp. ".number_format($grand_total,0,',','.');
				
				?>
			</div><br><br>
		</div>
	</div>

			<div class="row justify-content-center">
			<div class="col-md-8">
		    <div class="card card-warning">
		      <div class="card-header alert-success">
		      	<div class="text-center">
		        <h3 class="card-title">Input Data Pemesan</h3>
		    	</div>

		      </div>
			<form method="post" action="<?php echo base_url() ?>admin/c_pemesanan/proses_pesanan">
				 <div class="card-body">
				<div class="form-group row">
					<label>Nota</label>
					<input type="text" name="nota" placeholder="Nota" class="form-control" required>
				</div>

				<div class="form-group row">
					<label>Nama</label>
					<input type="hidden" class="form-control" name="id_pemesanan" id="id_pemesanan">
					<input type="text" name="nama_pemesan" placeholder="Nama" class="form-control" required>
				</div>

				<div class="form-group row">
					<label>No Telp</label>
					<input type="text" name="no_telp" placeholder="No Telp" class="form-control" required>
				</div>

				<div class="form-group row">
					<label>Alamat</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control" required>
				</div>

				<div class="form-group row">
					<label>Tanggal Selesai</label>
					<input type="date" name="tgl_selesai" class="form-control" required>
				</div>
			</div>

				<div class="card-footer alert-success">
					<div class="modal-footer justify-content-between">
						<?php echo anchor('admin/c_pemesanan/detail_pemesanan', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
						<button type="submit" class="btn btn-sm btn-primary">Pesan</button>
					</div>
			</div>
			</form>
 		</div>
  	</div>
  </div>
			<?php  
		}else{
			echo "<h4>Pemesanan Masih Kosong";
		}?>

		</div>

		<div class="col-md-2"></div>