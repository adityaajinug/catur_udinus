<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Registrasi</h1>
            </div>
            <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="nim" name="nim" placeholder="Nim" value="<?= set_value('nim') ?>">
                  <?= form_error('nim', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>">
                  <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="fakultas" name="fakultas" placeholder="Fakultas" value="<?= set_value('fakultas') ?>">
                <?= form_error('fakultas', ' <small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="Prodi" name="prodi" placeholder="Prodi" value="<?= set_value('prodi') ?>">
                <?= form_error('prodi', ' <small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" placeholder="Alamat Email" name="email" value="<?= set_value('email') ?>">
                <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                <select class="form-control form-control-choose" id="bidang" name="bidang" value="<?= set_value('bidang') ?>">
                  <option>-Pilih Bidang-</option>
                  <option value="Publikasi Dokumentasi">Publikasi Dokumentasi</option>
                  <option value="Perkap dan Perwasitan">Perkap dan Perwasitan</option>
                  <option value="Sekretaris">Sekretaris</option>
                  <option value="Bendahara">Bendahara</option>
                </select>
                <?= form_error('bidang', ' <small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password1"><?= form_error('password1', ' <small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password" name="password2">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block">
                Registrasi Akun
              </button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="forgot-password.html">Lupa Password?</a>
            </div>
            <div class="text-center">
              <a class="small" href="<?= base_url(); ?>auth">Sudah Punya Akun? Login!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>