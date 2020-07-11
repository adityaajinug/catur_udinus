
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos-delay="100">
      <!-- <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Catur Udinus</h1>
          <h2>Komunitas Catur Universitas Dian Nuswantoro </h2>
          <h7>Semarang</h7>
        </div>
      </div> -->
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column  justify-content-center text"
          data-aos="fade-up">
          <h2>Komunitas Catur</h2>
          <h3>Universitas Dian Nuswantoro</h3>
          <h5>Semarang</h5>
          <div class="btn-wrap icon-center">
            <a href="<?= base_url()?>auth/registrasi" class="btn daftar-btn ">Daftar</a>
            <a href="<?= base_url()?>#about" class="btn tentangr-btn ">Tentang</a>
          </div>


        </div>
        <div class=" col-lg-6 order-1 order-lg-2 hero-img justify-content-center text-center icon-center"
          data-aos="fade-left">
          <img src="<?= base_url()?>assets/img/logo/LOGO.png" alt="" class="img-new" width="90%">
        </div>
      </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="content">
          <h1>Tentang Kita</h1>
          <p>Terbentuknya Unit Kegiatan Mahasiswa CATUR UDINUS ini, dilatar belakangi atas dasar seseorang mahasiswa
            Udinus yang bernama Dede
            Arisko agustiawan asal kota palembang di tugaskan oleh dosennya untuk ikut lomba Catur di salah satu
            perguruan tinggi di Kota
            Semarang, PCMS (Persatuan Catur Mahasiswa Semarang) atas awal dasar tersebut dan dilihat banyaknya minat
            para mahasiswa Universitas
            Dian Nuswantoro terhadap Permainan Catur ini, maka atas izin tuhan yang Maha Esa terpikirlah di dalam benak
            mahasiswa tersebut 16 Mei
            2017 untuk mendirikan suatu Perkumpulan Organisasi Catur UDINUS yang di sahkan pada tanggal 27 Juli 2019
            Resmi Menjadi Komunitas.
          </p>
        </div>
      </div>
    </section>
    <!-- ======= Bidang Section ======= -->
    <section id="bidang" class="bidang section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Bidang</h2>

          <div class="gallery-details-container">

            <div class="owl-carousel owl-theme">
              <div class="item">
                <img src="<?= base_url()?>assets/img/logo/ppc.jpeg" class="img-fluid" alt="">
              </div>
              <div class="item">
                <img src="<?= base_url()?>assets/img/logo/scu.jpeg" class="img-fluid" alt="">
              </div>
              <div class="item">
                <img src="<?= base_url()?>assets/img/logo/pdc.jpeg" class="img-fluid" alt="">
              </div>
              <div class="item">
                <img src="<?= base_url()?>assets/img/logo/bhc.jpeg" class="img-fluid" alt="">
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- End Bidang Section -->

    <!-- ======= Event Section ======= -->
    <section id="event" class="event">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>event</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-4 col-md-6" data-aos="zoom-im" data-aos-delay="100">
            <div class="box">
              <h3>LTUC</h3>
              <img src="<?= base_url()?>assets/img/event/leadership.jpg" class="imgnew" alt="">
              <div class="btn-wrap">
                <a href="<?= base_url()?>catur/event1" class="btn-buy">Join Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-im" data-aos-delay="100">
            <div class="box">
              <h3>DNCC</h3>
              <img src="<?= base_url()?>assets/img/event/lomba.jpeg" class="imgnew" alt="">
              <div class="btn-wrap">
                <a href="<?= base_url()?>catur/event2" class="btn-buy">Join Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End event Section -->

    <!-- ======= gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="gallery-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-makrab">Makrab</li>
              <li data-filter=".filter-dncc">DNCC</li>
            </ul>
          </div>
        </div>

        <div class="row gallery-container" data-aos="fade-up" data-aos-delay="300">

          <div class="col-lg-4 col-md-6 gallery-item filter-makrab">
            <img src="<?= base_url()?>assets/img/gallery/1.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-makrab">
            <img src="<?= base_url()?>assets/img/gallery/2.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-makrab">
            <img src="<?= base_url()?>assets/img/gallery/5.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-makrab">
            <img src="<?= base_url()?>assets/img/gallery/7.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-dncc">
            <img src="<?= base_url()?>assets/img/gallery/13.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-dncc">
            <img src="<?= base_url()?>assets/img/gallery/15.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-dncc">
            <img src="<?= base_url()?>assets/img/gallery/20.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-dncc">
            <img src="<?= base_url()?>assets/img/gallery/21.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-dncc">
            <img src="<?= base_url()?>assets/img/gallery/23.jpg" class="img-fluid" alt="">
          </div>

        </div>
    </section><!-- End gallery Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Organisasi</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="<?= base_url()?>assets/img/team/1.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h5 style="font-weight: 700;margin-bottom: 5px;font-size: 15px;color: #124265;">Usman Sudibyo,S.si.,M.kom</h5>
                <span>Pembina Catur</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?= base_url()?>assets/img/team/2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h5 style="font-weight: 700;margin-bottom: 5px;font-size: 15px;color: #124265;">Dede Arisko Gustiawan</h5>
                <span>Perintis Catur</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?= base_url()?>assets/img/team/3.jpg" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h5 style="font-weight: 700;margin-bottom: 5px;font-size: 15px;color: #124265;">Raynaldi Bismantaka B</h5>
                <span>Ketua Catur</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="<?= base_url()?>assets/img/team/4.jpg" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h5 style="font-weight: 700;margin-bottom: 5px;font-size: 15px;color: #124265;">Gilang Novriatma</h5>
                <span>Wakil Ketua Catur</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?= base_url()?>assets/img/team/5.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h5 style="font-weight: 700;margin-bottom: 5px;font-size: 15px;color: #124265;">Elinda Yuliasari</h5>
                <span>Sekertaris</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?= base_url()?>assets/img/team/6.jpg" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h5 style="font-weight: 700;margin-bottom: 5px;font-size: 15px;color: #124265;">Lilik Irawati</h5>
                <span>Bendahara</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?= base_url()?>assets/img/team/7.jpg" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h5 style="font-weight: 700;margin-bottom: 5px;font-size: 15px;color: #124265;">Pandu Cahyoning Negoro</h5>
                <span>Ketua Publikasi dan Dokumentasi</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="<?= base_url()?>assets/img/team/8.jpg" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h5 style="font-weight: 700;margin-bottom: 5px;font-size: 15px;color: #124265;">Amin Mahendra</h5>
                <span>Ketua Perlengkapan dan Perwasitan</span>
              </div>
            </div>
          </div>



 

        </div>

      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Kontak Section ======= -->
    <section id="kontak" class="kontak">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
        </div>
        <div>
          <iframe style="border:0; width: 100%; height: 270px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2390351398053!2d110.40682491426588!3d-6.981095570301178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ea810c35d%3A0x8f7915145f0d49e0!2sPerpustakaan%20Udinus!5e0!3m2!1sid!2sid!4v1593179250075!5m2!1sid!2sid"
            frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>5-11 Nakula I Street Pendrikan Kidul<br>
                  Semarang Tengah, Jawa Tengah 50131<br>
                  Indonesia</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>caturudinus@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+62 821-3569-7755</p>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section><!-- End kontak Section -->

  </main><!-- End #main -->

