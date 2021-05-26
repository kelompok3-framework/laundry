<div class="container-fluid">
	<h4>Detail Pesanan</h4>

	<?php echo form_open('pesan/update') ?>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<td>Jenis Laundry</td>
			<td width="75px">Jumlah (kg/Satuan)</td>
			<td class="text-center">Aksi</td>
			<td>Harga</td>
			<td>Sub-Total</td>
			
		</tr>

		<?php $i =1; ?>
		<?php 
		foreach($this->cart->contents() as $items) :?>
			<?php echo form_hidden($i . '[rowid]', $items['rowid']) ;?>

			<tr>
				<td><?php echo $items['name']; ?></td>
				<td><?php echo form_input(array('name'=>$i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3','min'=>'0', 'size' =>'5' , 'type'=> 'number', 'class'=>'form-control')); ?></td>
				<td class="text-center"><a href="<?= base_url('pesan/delete/'.$items['rowid'])?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
				<td align="right">Rp. <?php echo number_format($items['price'], 0,',','.')?></td>
				<td align="right">Rp. <?php echo number_format($items['subtotal'], 0,',','.' )?></td>
			</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
			<tr>
				<td colspan="4"></td>
				<td align="right">Rp. <?php echo number_format($this->cart->total(),0,',','.') ?></td>
			</tr>

	</table>
	<div align="right">
		<a href="<?php echo base_url('pegawai/c_pemesanan/hapus_pemesanan') ?>"><div class="btn btn-sm btn-danger">Hapus Semua Pesanan</div></a>
		<a href="<?php echo base_url('pegawai/c_pemesanan/insert') ?>"><div class="btn btn-sm btn-primary">Lanjutkan Pemesanan</div></a>
		<a href="<?php echo base_url('pegawai/c_pemesanan/pengisian_data') ?>"><div class="btn btn-sm btn-success">Pengisian Data</div></a>
		<button type="submit" class="btn btn-sm btn-info">Update Pesanan</button>
	</div>
<?php echo form_close(); ?>

</div>