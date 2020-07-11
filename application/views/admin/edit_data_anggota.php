<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $judul; ?>
  </h1>

  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $anggota['id']; ?>">
    <div class="form-group">
      <input type="text" class="form-control" id="nim" name="nim" placeholder="Nim" value="<?= $anggota['nim']; ?>">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $anggota['nama']; ?>">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Fakultas" value="<?= $anggota['fakultas']; ?>">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Prodi" value="<?= $anggota['prodi']; ?>">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="email" name="email" placeholder="Email" readonly value="<?= $anggota['email']; ?>">
    </div>
    <div class="form-group">
      <select class="form-control form-control-choose" id="bidang" name="bidang">
        <option>-Pilih Bidang-</option>
        <?php foreach ($bidang as $b) : ?>
          <?php if ($b == $anggota['bidang']) : ?>
            <option value="<?= $b; ?>" selected><?= $b; ?></option>
          <?php else : ?>
            <option value="<?= $b; ?>"><?= $b; ?></option>
          <?php endif; ?>
        <?php endforeach; ?>
      </select>
    </div>
    <button type="button" class="btn btn-secondary">Cancel</button>
    <button type="submit" name="edit_data_anggota" class="btn btn-primary">Edit</button>
  </form>
</div>