<div class="container-fluid">
   <div class="alert alert-info">
        <h3 class="text-center align-middle">Kategori Kiloan</h3>
    </div>

    <div class="row text-center mt-3">
        
        <?php foreach ($kiloan as $kiloan) : ?>
            <div class="card mr-3 mt-3/*8" style="width: 16rem;">
              <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $kiloan->nama_kategori ?></h5><br>
                <span class="badge rounded-pill bg-warning mb-3">Rp. <?php echo $kiloan->harga?></span>
              </div>
            </div>
        <?php endforeach; ?>
    </div><br><br>

    <div class="alert alert-info">
        <h3 class="text-center align-middle">Kategori Satuan</h3>
    </div>
    <div class="row text-center mt-3">
        
        <?php foreach ($satuan as $satuan) : ?>
            <div class="card mr-3 mt-3" style="width: 16rem;">
              <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $satuan->nama_kategori ?></h5><br>
                <span class="badge rounded-pill bg-warning mb-3">Rp. <?php echo $satuan->harga?></span>
              </div>
            </div>
        <?php endforeach; ?>
    </div><br><br><br>
</div>