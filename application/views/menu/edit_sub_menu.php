<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $judul; ?>
  </h1>

  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $submenu['id']; ?>" readonly>
    <form>
      <div class="form-group">
        <input type="text" class="form-control" id="judul" name="judul" placeholder="judul" value="<?= $submenu['judul']; ?>">
        <?= form_error('judul', ' <small class="text-danger ">', '</small>'); ?>
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
        <input type="text" class="form-control" id="url" name="url" placeholder="url" value="<?= $submenu['url']; ?>">
        <?= form_error('url', ' <small class="text-danger ">', '</small>'); ?>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="icon" name="icon" placeholder="icon" value="<?= $submenu['icon']; ?>">
        <?= form_error('icon', ' <small class="text-danger ">', '</small>'); ?>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
          <label class="form-check-label" for="defaultCheck1">
            Active?
          </label>
        </div>
      </div>
      <button type="button" class="btn btn-secondary">Cancel</button>
      <button type="submit" name="edit_sub_menu" class="btn btn-primary">Edit</button>
    </form>
</div>