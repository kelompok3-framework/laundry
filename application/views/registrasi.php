<div class="container"><br><br><br>
   <div class="row justify-content-center">

<body class="bg-gradient-primary">
  <div class="data-flush" data-flash="<?= $this->session->flashdata('pesan');?>"></div>
  <div class="login-box">
    <div class="login-logo">
      <div class="text-center">
      <h3 class="h4 text-gray-900 mb-4">REGISTRASI USER</h3>
    </div>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Lengkapi biodata anda</p>

        <form action="<?= base_url();?>authorization/insert" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="no_telp" placeholder="Kontak">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <select name="jenis_kelamin" class="form-control">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-transgender"></span>
              </div>
            </div>
          </div>
          
          <div class="input-group mb-3">
            <textarea type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap"></textarea>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-home"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user-circle"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-key"></span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <div>
              <a href="<?= base_url()?>authorization" type="submit" class="btn btn-secondary btn-block" style="margin-top: 0 !important ;">Kembali</a>
            </div>
              <div>
              <button type="submit" class="btn btn-primary btn-block">Registrasi</button>
              </div>
              
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
</div>
</body>
</div>