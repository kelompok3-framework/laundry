<div class="container-fluid">
  <div class="col-md-12">
    <div class="card card-warning">
      <div class="card-header alert-primary">
      	<div class="text-center">
        <h3 class="card-title">Data User</h3>
    </div>
      </div>
      <div class="card-body">
        <p>
            <form action="<?= base_url()?>admin/c_user" method="post">
            <table class="table table-striped">
              <tr>
                <td>
                  Cari Data
                </td>
                <td>
                  <input type="text" name="keyword" class="form-control" placeholder="Cari Data" autocomplete="off" autofocus>
                </td>
                <td>
                  <button type="submit" class="btn btn-info">Cari</button>
                </td>
              </tr>
              
            </table>
           </form>
        </p>

        <table class="table table-bordered">
          <thead class="text-center">
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>Password</th>
              <th>Level</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($user as $user):?>
              <tr>
                <td><?= ++$start?></td>
                <td><?= $user->username?></td>
                <td><?= $user->password?></td>
                <td><?= $user->level?></td>
                <td><?= $user->status?></td>
                    <td width="20px"><?php echo anchor('admin/c_user/update/'.$user->id_user, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
        <?php echo $this->pagination->create_links(); ?>
      </div>
    </div>
  </div>
</div>