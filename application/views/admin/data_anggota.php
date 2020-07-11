<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $judul; ?>
  </h1>


  <div class="row">
    <div class="col-lg">
      <?= form_error('p', '<div class="alert alert-danger" role="alert"> ', '
    </div>'); ?>
      <a href="<?= base_url('admin/exportpdf'); ?>" class="btn btn-info mb-3" target="blank">Download Data</a>
      <?= $this->session->flashdata('pesan'); ?>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Fakultas</th>
            <th scope="col">Prodi</th>
            <th scope="col">Email</th>
            <th scope="col">Bidang</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $no = 1;
          foreach ($database as $u) : ?>
            <tr>
              <th scope="row"><?= $no++; ?></th>
              <td><?= $u['nim']; ?></td>
              <td><?= $u['nama']; ?></td>
              <td><?= $u['fakultas']; ?></td>
              <td><?= $u['prodi']; ?></td>
              <td><?= $u['email']; ?></td>
              <td><?= $u['bidang']; ?></td>
              <td>
                <a href="<?= base_url(); ?>admin/edit_data_anggota/<?= $u['id']; ?>" class="badge badge-success "> Edit</a>
                <a href="<?= base_url(); ?>admin/hapus/<?= $u['id']; ?>" class="badge badge-danger" data-toggle="modal" data-target="#hapusModal"> Hapus</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/edit_data_anggota'); ?>" method="post">
        <input type="hidden" name="id" value="<?= $user['id']; ?>">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="nim" name="nim" placeholder="Nim" value="<?= $user['nim']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $user['nama']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Fakultas" value="<?= $user['fakultas']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Prodi" value="<?= $user['prodi']; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" readonly value="<?= $user['email']; ?>">
          </div>
          <div class="form-group">
            <select class="form-control form-control-choose" id="bidang" name="bidang">
              <option>-Pilih Bidang-</option>
              <?php foreach ($bidang as $b) : ?>
                <?php if ($b == $user['bidang']) : ?>
                  <option value="<?= $b; ?>" selected><?= $b; ?></option>
                <?php else : ?>
                  <option value="<?= $b; ?>"><?= $b; ?></option>
                <?php endif; ?>
              <?php endforeach; ?>
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" name="edit_data_anggota" class="btn btn-primary">Ubah</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Hapus Modal-->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Yakin Hapus Data?</h5>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a class="btn btn-primary" href="<?= base_url(); ?>admin/hapus/<?= $u['id']; ?>">Hapus</a>
      </div>
    </div>
  </div>
</div>