<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $judul; ?>
  </h1>

  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $jad['id']; ?>">
    <form>
      <div class="form-group">
        <input type="text" class="form-control" id="hari" name="hari" placeholder="Hari" value="<?= $jad['hari']; ?>">
        <?= form_error('hari', ' <small class="text-danger ">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="date" class="form-control" id="tanggal" name="tanggal">
        <?= form_error('tanggal', ' <small class="text-danger ">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="time" class="form-control" id="waktu" name="waktu" placeholder="waktu" value="<?= $jad['waktu']; ?>">
        <?= form_error('waktu', ' <small class="text-danger ">', '</small>'); ?>
      </div>
      <button type="button" class="btn btn-secondary">Cancel</button>
      <button type="submit" name="edit_jadwal" class="btn btn-primary">Edit</button>
    </form>
</div>