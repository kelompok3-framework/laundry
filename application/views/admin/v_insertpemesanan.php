<div class="container-fluid">

    <ul  class="nav navbar-nav navbar-right">
                                <li>
                                    <?php 
                                    $keranjang = 'Pemesanan : ' .$this->cart->total_items().' items' ?>

                                    <?php echo anchor('admin/c_pemesanan/detail_pemesanan',$keranjang  ) ?>
                                </li>
                            </ul><br><br>
   <div class="alert alert-info">
        <h3 class="text-center align-middle">Kategori Kiloan</h3>
    </div>

    <div class="row text-center mt-3">
        
        <?php foreach ($kiloan as $kiloan) : ?>
            <?php 
            echo form_open('pesan/add');
            echo form_hidden('id', $kiloan->id_kategori);
            echo form_hidden('qty', 1);
            echo form_hidden('price', $kiloan->harga);
            echo form_hidden('name', $kiloan->nama_kategori);
            echo form_hidden('redirect_page', str_replace('index.php/','',current_url()));

             ?>
            <div class="card mr-3 mt-3" style="width: 16rem;">
              <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $kiloan->nama_kategori ?></h5>
                <span class="badge rounded-pill bg-warning mb-3">Rp. <?php echo $kiloan->harga?></span>
                <div class="row">
                    <div class="col-sm-4">
                        <input type="number" name="qty" class="form-control" value="1" min="1">
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-sm btn-primary">Pemesanan</button>
                    </div>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
        <?php endforeach; ?>
    </div><br><br>

    <div class="alert alert-info">
        <h3 class="text-center align-middle">Kategori Satuan</h3>
    </div>
    <div class="row text-center mt-3">
        
        <?php foreach ($satuan as $satuan) : ?>
            <?php 
            echo form_open('pesan/add');
            echo form_hidden('id', $satuan->id_kategori);
            echo form_hidden('qty', 1);
            echo form_hidden('price', $satuan->harga);
            echo form_hidden('name', $satuan->nama_kategori);
            echo form_hidden('redirect_page', str_replace('index.php/','',current_url()));

             ?>
            <div class="card mr-3 mt-3" style="width: 16rem;">
              <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $satuan->nama_kategori ?></h5>
                <span class="badge rounded-pill bg-warning mb-3">Rp. <?php echo $satuan->harga?></span>
               <div class="row">
                    <div class="col-sm-4">
                        <input type="number" name="qty" class="form-control" value="1" min="1">
                    </div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-sm btn-primary">Pemesanan</button>
                    </div>
                </div>
              </div>
            </div>
            <?php echo form_close(); ?>
        <?php endforeach; ?>
    </div><br><br><br>
</div>