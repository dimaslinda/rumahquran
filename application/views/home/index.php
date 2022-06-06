<!--==========================
    Intro Section
  ============================-->
<!-- head -->
<section id="intro" class="clearfix">
  <div class="container">
    <div class="row">
      <input type="radio" name="slider" id="item-1" checked>
      <input type="radio" name="slider" id="item-2">
      <input type="radio" name="slider" id="item-3">
      <div class="cardss">
        <label class="cards" for="item-1" id="song-1">
          <img src="<?= base_url(); ?>assets/img/slideshow/slideshow1.png" alt="song">
        </label>
        <label class="cards" for="item-2" id="song-2">
          <img src="<?= base_url(); ?>assets/img/slideshow/slideshow2.png" alt="song">
        </label>
        <label class="cards" for="item-3" id="song-3">
          <img src="<?= base_url(); ?>assets/img/slideshow/slideshow3.png" alt="song">
        </label>
      </div>
    </div>
  </div>
</section>
<!-- akhir head -->
<section id="intro1" class="clearfix">
  <div class="container">
    <div class="row row-eq-height justify-content-evenly">
      <div class="col-4 image-grid-item">
        <center><img src="<?= base_url(); ?>assets/img/tilawah.png" alt=""></center>
        <p>Tahsin Tilawah</p>
      </div>
      <div class="col-4 image-grid-item">
        <center><img src="<?= base_url(); ?>assets/img/huruf.png" alt=""></center>
        <p>Berantas Buta Huruf Qur'an</p>
      </div>
      <div class="col-4 image-grid-item">
        <center><img src="<?= base_url(); ?>assets/img/quran.png" alt=""></center>
        <p>Tahfizh Qur'an</p>
      </div>
    </div>
  </div>

</section>

<main id="main">

  <!--==========================
      About Us Section
    ============================-->
  <section id="about">
    <div class="container">
      <div class="row row-cols-2 row-cols-lg-3 justify-content-between">
        <div class="col">
          <!-- kolom Sepekan Rumah Qur'an -->
          <div class="col" style="background: #FFFFFF;box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);border-radius: 20px;">
            <header class="section-header">
              <h3>Sepekan Rumah Qur'an</h3>
            </header>
            <div class="card mb-3" style="border: 1px solid transparent;margin:30px auto;">
              <?php foreach ($artikel as $ar) : ?>
                <div class="row g-0">
                  <div class="col-4">
                    <img src="<?= base_url(); ?>assets/img/artikel/<?= $ar['gambar']; ?>" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col">
                    <div class="card-body" style="padding: 0em;">
                      <a href="<?= base_url(); ?>home/detailartikel/<?= $ar['id_berita']; ?>">
                        <h5 class="card-title" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 24px;line-height: 30px;color: #666666;"><?= $ar['judul']; ?></h5>
                      </a>
                      <p class="card-text" style="margin-bottom: 16px;"><small style="font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;color: #666666;"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('F d, Y', strtotime($ar['tanggal'])); ?> <i class="fa fa-comments" aria-hidden="true"></i> <?= $ar['kategori']; ?></small></p>
                      <p class="card-text" style="font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 16px;line-height: 20px;color: #666666;"><?= substr_replace($ar['isi_berita'], "...", 200); ?></p>
                    </div>
                  </div>
                </div>
                <br><br>
              <?php endforeach; ?>
              <div style="border: 1px solid #666666;"></div>
              <br>
              <a href="<?= base_url(); ?>home/artikel" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #00A381;text-align:center;margin:0px auto;margin:15px auto;">Lihat Semua</a>
            </div>
          </div>
          <!-- kolom Artikel -->
          <div class="col" style="background: #FFFFFF;box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);border-radius: 20px;">
            <header class="section-header">
              <h3>Artikel</h3>
            </header>
            <!-- kolom artikel dalam -->
            <div class="col" id="dalam">
              <div class="card mb-3" style="border: 1px solid transparent;margin:-21px auto;background-color:transparent;">
                <?php foreach ($gallery as $gl) : ?>
                  <div class="row g-0" style="margin: 20px auto;">
                    <div class="col-4">
                      <img src="<?= base_url(); ?>assets/img/artikel/<?= $gl['gambar']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col">
                      <div class="card-body" style="padding: 0em;">
                        <a href="<?= base_url(); ?>home/detailgallery/<?= $gl['id_gallery']; ?>">
                          <h5 class="card-title" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 24px;line-height: 30px;color: #FFFFFF;"><?= $gl['judul']; ?></h5>
                        </a>
                        <p class="card-text" style="margin-bottom: 16px;"><small style="color: #FFFFFF;font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('F d, Y', strtotime($gl['tanggal'])); ?> <i class="fa fa-comments" aria-hidden="true"></i> <?= $gl['kategori']; ?> </small></p>
                        <p class="card-text" style="font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 16px;line-height: 20px;color: #FFFFFF;"><?= substr_replace($gl['isi_berita'], "...", 200); ?></p>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
                <br><br>
              </div>
            </div>
            <a href="#" id="lihatsemua">Lihat Semua</a>
          </div>
        </div>
        <!-- penutup col-7 -->
        <!-- awal col-4 -->
        <div class="col-4">
          <!-- col pertama -->
          <div class="col" id="col1">
            <header class="section-header">
              <h3>Video</h3>
            </header>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <button type="button" class="btn btn-success" style="background: #00A381;border-radius: 50px;">Terbaru</button>
              <button type="button" class="btn btn-success" style="background: #00A381;border-radius: 50px;">Terpopuler</button>
            </div>
            <br><br>
            <div class="uk-panel uk-panel-scrollable" id="colpertama">
              <ul class="uk-list">
                <li>
                  <img src="<?= base_url(); ?>assets/img/video/1.png" alt="">
                  <a href="#">Lorem ipsum dolor sit amet, consec.</a>
                </li>
                <li>
                  <img src="<?= base_url(); ?>assets/img/video/2.png" alt="">
                  <a href="#">Lorem ipsum dolor sit amet, consec.</a>
                </li>
                <li>
                  <img src="<?= base_url(); ?>assets/img/video/3.png" alt="">
                  <a href="#">Lorem ipsum dolor sit amet, consec.</a>
                </li>
                <li>
                  <img src="<?= base_url(); ?>assets/img/video/4.png" alt="">
                  <a href="#">Lorem ipsum dolor sit amet, consec.</a>
                </li>
                <li>
                  <img src="<?= base_url(); ?>assets/img/video/5.png" alt="">
                  <a href="#">Lorem ipsum dolor sit amet, consec.</a>
                </li>
              </ul>
            </div>
            <br>
            <div id="garis"></div>
            <a href="#" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #00A381;text-align:center;margin:0px auto;margin:0px 114px;">Lihat Semua</a>
          </div>
          <!-- akhir col -->
          <br>
          <!-- awal col -->
          <div class="col" id="col2">
            <header class="section-header">
              <h3>Instagram</h3>
            </header>
            <div class="uk-panel uk-panel-scrollable" id="colpertama">
              <ul class="uk-list">
                <li>
                  <img src="<?= base_url(); ?>assets/img/video/instagram.png" alt="">
                  <a href="#">Lorem ipsum dolor sit amet, consec.</a>
                </li>
                <li>
                  <img src="<?= base_url(); ?>assets/img/video/instagram.png" alt="">
                  <a href="#">Lorem ipsum dolor sit amet, consec.</a>
                </li>
                <li>
                  <img src="<?= base_url(); ?>assets/img/video/instagram.png" alt="">
                  <a href="#">Lorem ipsum dolor sit amet, consec.</a>
                </li>
                <li>
                  <img src="<?= base_url(); ?>assets/img/video/instagram.png" alt="">
                  <a href="#">Lorem ipsum dolor sit amet, consec.</a>
                </li>
                <li>
                  <img src="<?= base_url(); ?>assets/img/video/instagram.png" alt="">
                  <a href="#">Lorem ipsum dolor sit amet, consec.</a>
                </li>
              </ul>
            </div>
            <br>
            <div id="garis"></div>
            <a href="#" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #00A381;text-align:center;margin:0px auto;margin:0px 114px;">Lihat Semua</a>
          </div>
          <!-- akhir col -->
          <!-- awal col -->
          <div class="col" id="arsip1">
            <header class="section-header">
              <h3>Arsip</h3>
            </header>

            <div class="card text-white bg-dark mb-3" id="arsip">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">Juni 2021 <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin:0px 0px 0px 93px;">Lihat</button></div>
            </div>

            <div class="card text-white bg-dark mb-3" id="arsip">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">Juni 2021 <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin:0px 0px 0px 93px;">Lihat</button></div>
            </div>

            <div class="card text-white bg-dark mb-3" id="arsip">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">Juni 2021 <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin:0px 0px 0px 93px;">Lihat</button></div>
            </div>

            <div class="card text-white bg-dark mb-3" id="arsip">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">Juni 2021 <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin:0px 0px 0px 93px;">Lihat</button></div>
            </div>

            <div class="card text-white bg-dark mb-3" id="arsip">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">Juni 2021 <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin:0px 0px 0px 93px;">Lihat</button></div>
            </div>

            <div class="card text-white bg-dark mb-3" id="arsip">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">Juni 2021 <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin:0px 0px 0px 93px;">Lihat</button></div>
            </div>

            <div style="border: 1px solid #666666;margin:32px auto;"></div>
            <a href="#" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #00A381;text-align:center;margin:0px auto;margin:0px 114px;">Lihat Semua</a>
          </div>
          <!-- akhir col -->
          <!-- awal col -->
          <div class="col" id="arsip3">
            <header class="section-header" style="margin-bottom: -20px;">
              <h3>Jadwal Sholat</h3>
            </header>

            <div class="card text-white bg-dark mb-3" id="arsip">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">
                <div class="uk-width-expand" style="margin-top: 7px;margin-bottom: -11px;">
                  <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                    <li><a href="#" style="text-transform: none;font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">Dhuhr <br> Jakarta</a></li>
                    <li><a href="#" style="text-transform: none;font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">Remaining 00:34:03 <br>Azan time 11:42 <br>Tuesday</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="card text-white bg-dark mb-3" id="arsip">
              <iframe src="https://timesprayer.com/widgets.php?frame=2&amp;lang=en&amp;name=jakarta&amp;avachang=true&amp;time=0&amp;fcolor=06876C&amp;tcolor=00604C&amp;frcolor=49C4AA" style="border: none; overflow: hidden; width: 100%; height: 275px;" __idm_frm__="1237"></iframe>
            </div>
          </div>
          <!-- akhir col -->
          <!-- awal col -->
          <div class="col" id="arsipkunjungan">
            <header class="section-header">
              <h3>Statistik Kunjungan</h3>
            </header>
            <div class="card text-white bg-dark mb-3" id="arsip">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">
                <div class="col">
                  <a href="#" style="text-transform: none;font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 14px;line-height: 17px;color: #FFFFFF;">Hari ini <b style="margin-left: 47px;">78</b></a>
                  <a href="#" style="text-transform: none;font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 14px;line-height: 17px;color: #FFFFFF;margin-left: 13px;">kemarin <b style="margin-left: 16px;">45</b></a>
                </div>
                <br>
                <div class="col">
                  <a href="#" style="text-transform: none;font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 14px;line-height: 17px;color: #FFFFFF;">Minggu ini <b style="margin-left: 20px;">124</b></a>
                  <a href="#" style="text-transform: none;font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 14px;line-height: 17px;color: #FFFFFF;margin-left: 13px;">Bulan ini <b style="margin-left: 7px;">224</b></a>
                </div>
                <hr color="white">
                <div class="col">
                  <a href="#" style="text-transform: none;font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 20px;line-height: 25px;color: #FFFFFF;">Total Kunjungan 12455</a>
                </div>
              </div>
            </div>
          </div>
          <!-- akhir col -->
        </div>
        <!-- akhir col-4 -->
      </div>
      <!-- akhir row -->
    </div>
    <!-- akhir container -->
  </section><!-- #about -->
  <section id="donasi">
    <div class="container">
      <div class="row row-cols-2 row-cols-lg-3 justify-content-between">
        <div class="col-11" id="donasi2">
          <header class="section-header">
            <h3>Sepekan Rumah Qur'an</h3>
          </header>
          <img src="<?= base_url(); ?>assets/img/donasi.png" alt="">
          <section id="intro2" class="clearfix">
            <p id="p1">Gerakan Donasi Untuk Para <br> Penghafal dan Pembelajar Al-Qur’an</p>
          </section>

          <div class="card mb-3" id="donasi1">
            <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">
              <p style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 24px;line-height: 30px;text-align: center;background: -webkit-linear-gradient(164deg, #06876C, #49C4AA);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Rekening Donasi Sahabat Qur’an :</p>
              <p id='rekening'>Bank Syariah Mandiri (451) <br> No. Rekening <span style="color: #F28153;">703 7788 451</span> <br> a.n Yayasan Ihya Ul Ummah</p>
              <br>
              <p id="p2">
                “Sesungguhnya orang-orang yang selalu membaca kitab Allah dan mendirikan shalat dan menafkahkan sebahagian dari rezki yang Kami anugerahkan kepada mereka dengan diam-diam dan terang-terangan, mereka itu mengharapkan perniagaan yang tidak akan merugi, agar Allah menyempurnakan kepada mereka pahala mereka dan menambah kepada mereka dari karunia-Nya. Sesungguhnya Allah Maha Pengampun lagi Maha Mensyukuri.
                <br><br>(QS Al Fathir: 29-30)”
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>
</main>