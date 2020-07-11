<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $judul; ?>
  </h1>


  <div class="row">
    <div class="col-lg-6">
      <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
      <?php endif; ?>

      <?= $this->session->flashdata('pesan'); ?>
      <a href="http://" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Tampil Menu & Submenu</a>
      <p>Tampil Menu & Submenu digunakan untuk menampilkan Menu dan Submenu baru </p>
      <p class="mb-0">Role_id Admin = 1</p>
      <p>Role_id Member = 2</p>
      <p class="mb-0"><i>Untuk Menampilkan Menu dan Submenu pada field Menu_id table berikut diisi :</i></p>
      <p><b>id</b> Menu Management = <b>menu_id</b> Submenu Management</p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Role_id</th>
            <th scope="col">Menu_id</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $no = 1;

          foreach ($access as $a) : ?>
            <tr>
              <th scope="row"><?= $no++; ?></th>
              <td><?= $a['role_id']; ?></td>
              <td><?= $a['menu_id']; ?></td>
              <td>
                <a href="<?= base_url(); ?>menu/edit_access_menu/<?= $a['id']; ?>" class="badge badge-success"> Edit</a>
                <a href="<?= base_url(); ?>menu/hapus_tampil/<?= $a['id']; ?>" class="badge badge-danger" data-toggle="modal" data-target="#menuModal"> Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('menu/tampil') ?>" method="post">
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="role_id" name="role_id" placeholder="role_id baru">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="menu_id" name="menu_id" placeholder="menu_id baru">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Hapus Modal-->
<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Yakin Hapus Data?</h5>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a class="btn btn-primary" href="<?= base_url(); ?>menu/hapus_tampil/<?= $a['id']; ?>">Hapus</a>
      </div>
    </div>
  </div>
</div>