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
			<h3>Input Data Pemesanan</h3>

			<form method="post" action="<?php echo base_url() ?>pegawai/c_pemesanan/proses_pesanan">
				
				<div class="form-group">
					<label>Nota</label>
					<input type="text" name="nota" placeholder="Nota" class="form-control">
				</div>


				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" placeholder="Nama" class="form-control">
				</div>

				<div class="form-group">
					<label>No Telp</label>
					<input type="text" name="no_telp" placeholder="No Telp" class="form-control">
				</div>

				<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
				</div>

				<div class="form-group">
					<label>Tanggal Selesai</label>
					<input type="date" name="tgl_selesai" class="form-control">
				</div>

				<button type="submit" class="btn btn-sm btn-primary">Pesan</button><br><br><br>

			</form>

			<?php  
		}else{
			echo "<h4>Pemesanan Masih Kosong";
		}?>

		</div>

		<div class="col-md-2"></div>
	</div>
</div>