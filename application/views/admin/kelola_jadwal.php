<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $judul; ?>
  </h1>


  <div class="row">
    <div class="col-lg">
      <?= form_error('pesan', '<div class="alert alert-danger" role="alert"> ', '
    </div>'); ?>

      <?= $this->session->flashdata('pesan'); ?>
      <a href="http://" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Jadwal</a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Hari</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Waktu</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          <?php

          $no = 1;
          foreach ($jadwal as $u) : ?>
            <tr>
              <th scope="row"><?= $no++; ?></th>
              <td><?= $u['hari']; ?></td>
              <td><?= $u['tanggal']; ?></td>
              <td><?= $u['waktu']; ?></td>
              <td>
                <a href="<?= base_url(); ?>admin/edit_jadwal/<?= $u['id']; ?>" class="badge badge-success"> Edit</a>
                <a href="<?= base_url(); ?>admin/hapus_jadwal/<?= $u['id']; ?>" class="badge badge-danger" data-toggle="modal" data-target="#hapusJadwalModal"> Hapus</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/jadwal'); ?>" method="post">
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="hari" name="hari" placeholder="Hari">
            </div>
            <div class="form-group">
              <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>
            <div class="form-group">
              <input type="time" class="form-control" id="waktu" name="waktu" placeholder="waktu">
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
<div class="modal fade" id="hapusJadwalModal" tabindex="-1" role="dialog" aria-labelledby="hapusJadwalModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Yakin Hapus Data?</h5>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a class="btn btn-primary" href="<?= base_url(); ?>admin/hapus_jadwal/<?= $u['id']; ?>">Hapus</a>
      </div>
    </div>
  </div>
</div>