<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $judul; ?>
  </h1>
  <?php date_default_timezone_set('Asia/Jakarta'); ?>

  <div class="row">
    <div class="col-lg-4">
      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <?php

        foreach ($jadwal as $j) :
          // echo "";
        ?>
          <div class="card-header text-primary"><?= $j['hari']; ?></div>
          <div class="card-body">
            <h5 class="card-title"><?= $j['tanggal']; ?></h5>
            <p class="card-text"><?= $j['waktu']; ?></p>
          </div>
        <?php


        endforeach; ?>
      </div>
      <?= $this->pagination->create_links(); ?>
    </div>
    <div class="col-lg-8">
    <div class="card">
    <iframe style="border:0; width: 100%; height: 380px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2390351398053!2d110.40682491426588!3d-6.981095570301178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ea810c35d%3A0x8f7915145f0d49e0!2sPerpustakaan%20Udinus!5e0!3m2!1sid!2sid!4v1593179250075!5m2!1sid!2sid"
            frameborder="0" allowfullscreen></iframe>
  <div class="card-body">
    <h3 class="card-text text-center"><b>Tempat Latihan</b></h3>
  </div>
</div>
    
    </div>
  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->