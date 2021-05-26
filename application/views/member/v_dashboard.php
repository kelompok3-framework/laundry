<div class="container-fluid">

    <div class="alert alert-primary" role="alert">
      <div class="alert alert-info alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <marquee direction="left" scrollamount="6" align="center"><h4>Selamat Datang Member di Sistem Informasi Manajemen Loundry "XYZ" - Created By : Kelompok 3</h4></marquee>
      </div>
    </div>

    <div class="center">
        <center>
             <?php foreach ($profil as $profil) : ?>
            <span style="font-size:45px; margin-bottom:-20px"><b>SISTEM INFORMASI LAUNDRY</b></span><br>
            <span style="font-size:40px; margin-top:-20px"><b><?= strtoupper($profil->nama_laundry);?></b></span><br>
            <span style="font-size:17px; font-style:italic;">alamat: <?= $profil->alamat?> Tlp. <?= $profil->no_telp?></span>
            <?php endforeach; ?>
        </center>
    </div>
   
</div>
