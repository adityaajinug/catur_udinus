<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $judul; ?>
  </h1>

  <form action="" method="post">
    <form>
      <div class="form-group">
        <input type="text" class="form-control" id="id" name="id" placeholder="id" value="<?= $menu['id']; ?>" readonly>
        <?= form_error('id', ' <small class="text-danger ">', '</small>'); ?>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="menu" name="menu" placeholder="menu" value="<?= $menu['menu']; ?>">
        <?= form_error('menu', ' <small class="text-danger ">', '</small>'); ?>
      </div>
      <button type="button" class="btn btn-secondary">Cancel</button>
      <button type="submit" name="edit_menu" class="btn btn-primary">Edit</button>
    </form>
</div>