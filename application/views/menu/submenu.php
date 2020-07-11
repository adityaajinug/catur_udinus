<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $judul; ?>
  </h1>


  <div class="row">
    <div class="col-lg">
      <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
      <?php endif; ?>

      <?= $this->session->flashdata('pesan'); ?>
      <a href="http://" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Submenu</a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Menu_id</th>
            <th scope="col">Url</th>
            <th scope="col">Icon</th>
            <th scope="col">Active</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $no = 1;

          foreach ($submenu as $m) : ?>
            <tr>
              <th scope="row"><?= $no++ ?></th>
              <td><?= $m['judul']; ?></td>
              <td><?= $m['menu_id']; ?></td>
              <td><?= $m['url']; ?></td>
              <td><?= $m['icon']; ?></td>
              <td><?= $m['is_active']; ?></td>
              <td>
                <a href="<?= base_url() ?>menu/edit_sub_menu/<?= $m['id']; ?>" class="badge badge-success"> Edit</a>
                <a href="<?= base_url() ?>menu/hapussub/<?= $m['id']; ?>" class="badge badge-danger"> Hapus</a>
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
      <form action="<?= base_url('menu/submenu') ?>" method="post">
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Submenu">
            </div>
            <div class="form-group">
              <select name="menu_id" id="menu_id" class="form-control">
                <option value="">Pilih Menu</option>
                <?php foreach ($menu as $m) : ?>
                  <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="url" name="url" placeholder="Url Submenu">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="icon" name="icon" placeholder="icon Submenu">
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                <label class="form-check-label" for="defaultCheck1">
                  Active?
                </label>
              </div>
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