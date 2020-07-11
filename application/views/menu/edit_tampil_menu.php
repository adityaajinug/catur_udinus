<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $judul; ?>
  </h1>

  <form action="" method="post">
    <input type="hidden" class="form-control" id="id" name="id" placeholder="id" value="<?= $access['id']; ?>">
    <div class="form-group">
      <input type="text" class="form-control" id="role_id" name="role_id" placeholder="role_id" value="<?= $access['role_id']; ?>">
      <?= form_error('role_id', ' <small class="text-danger ">', '</small>'); ?>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="menu_id" name="menu_id" placeholder="menu_id" value="<?= $access['menu_id']; ?>">
      <?= form_error('menu_id', ' <small class="text-danger ">', '</small>'); ?>
    </div>
    <button type="button" class="btn btn-secondary">Cancel</button>
    <button type="submit" name="edit_access_menu" class="btn btn-primary">Edit</button>
  </form>
</div>