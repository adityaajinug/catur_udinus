<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
  <div class="col-lg-6">
    <div class="card  bg-light mb-3" style="max-width: 18rem;">
      <div class="card-header bg-primary text-white">Hello Admin</div>
      <div class="card-body">
        <?php date_default_timezone_set('Asia/Jakarta'); ?>
        <h4 class="card-title text-primary "> <?= date('l'); ?></h4>
        <h4 class="card-title text-primary mb-0"><i class="fas fa-clock"></i> <?= date('H:i'); ?></h4>
        <!-- <h6 class="card-title text-primary"><i class="fas fa-calendar-day"></i> </h6> -->
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->