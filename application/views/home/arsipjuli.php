<main id="main">

  <!--==========================
  About Us Section
============================-->
  <section id="tentangkami">
    <div class="container">
      <div class="row row-cols-2 row-cols-lg-3 justify-content-between">
        <div class="col" id="artikel">
          <!-- kolom Sepekan Rumah Qur'an -->
          <div class="col" style="background: #fff;box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);border-radius: 20px;">
            <header class="section-header">
              <h3>Arsip Artikel Bulan Juli</h3>
            </header>
            <!-- kolom artikel dalam -->
            <div class="col" style="background: linear-gradient(180deg, #49C4AA 0%, #06876C 100%);border-radius: 10px;height: 1397px;">
              <div class="card mb-3" style="border: 1px solid transparent;margin:-21px auto;background-color:transparent;">
                <?php foreach ($detail as $d) : ?>
                  <div class="row g-0" style="margin: 20px auto;">
                    <div class="col-4">
                      <img src="<?= base_url(); ?>assets/img/artikel/<?= $d['gambar']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col">
                      <div class="card-body" style="padding: 0em;">
                        <a href="<?= base_url(); ?>home/detailartikel/<?= $d['id_berita']; ?>">
                          <h5 class="card-title" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 24px;line-height: 30px;color: #FFFFFF;"><?= $d['judul']; ?></h5>
                        </a>
                        <p class="card-text" style="margin-bottom: 16px;"><small style="color: #FFFFFF;font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('F d, Y', strtotime($d['tanggal'])); ?> <i class="fa fa-comments" aria-hidden="true"></i> <?= $d['kategori']; ?></small></p>
                        <p class="card-text" style="font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 16px;line-height: 20px;color: #FFFFFF;"><?= substr_replace($d['isi_berita'], "...", 200); ?></p>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
                <br><br>
              </div>
            </div>
            <?= $this->pagination->create_links(); ?>
          </div>
          <!-- kolom Artikel -->
        </div>
        <!-- penutup col-7 -->
        <!-- awal col-4 -->
        <div class="col">
          <!-- awal col -->
          <div class="col" id="sidebargaleri">
          <header class="section-header">
              <h3>Arsip</h3>
            </header>

            <div class="card text-white bg-dark mb-3" id="arsip">
              <div class="card-header" style="ont-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;    float: left;">November 2022 <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin: 0px 0px 0px 0px;
    float: right;">Lihat</button></div>
            </div>

            <div class="card text-white bg-dark mb-3" id="arsip">
              <div class="card-header" style="ont-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;    float: left;">Oktober 2022 <a href="<?= base_url(); ?>home/arsipoktober">
              <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin: 0px 0px 0px 0px;
    float: right;">Lihat</button>
              </a> </div>
            </div>

            <div class="card text-white bg-dark mb-3" id="arsip">
              <div class="card-header" style="ont-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;    float: left;">September 2022 <a href="<?= base_url(); ?>home/arsipseptember">
              <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin: 0px 0px 0px 0px;
    float: right;">Lihat</button>
              </a> </div>
            </div>

            <div class="card text-white bg-dark mb-3" id="arsip">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;    float: left;">Agustus 2022 <a href="<?= base_url(); ?>home/arsipagustus">
                  <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin: 0px 0px 0px 0px;
    float: right;">Lihat</button>
                </a> </div>
            </div>

            <div class="card text-white bg-dark mb-3" id="arsip">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;    color: #FFFFFF;">July 2022 <a href="<?= base_url(); ?>home/arsipjuli">
                  <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin: 0px 0px 0px 0px;
    float: right;">Lihat</button>
                </a> </div>
            </div>

            <div class="card text-white bg-dark mb-3" id="arsip">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 27px;">Juni 2022 <a href="<?= base_url(); ?>home/arsipjuni"><button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin: 0px 0px 0px 0px;
    float: right;">Lihat</button></a>
              </div>
            </div>

            <div style="border: 1px solid #666666;margin:32px auto;"></div>
            <a href="#" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #00A381;text-align:center;margin:0px auto;margin:0px 114px;">Lihat Semua</a>
          </div>
          <!-- akhir col -->
          <br>
          <!-- awal col -->
          <div class="col" id="sidebargaleri2">
            <header class="section-header" style="margin-bottom: -20px;">
              <h3>Jadwal Sholat</h3>
            </header>

            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;background: linear-gradient(180deg, #49C4AA 0%, #06876C 100%);border-radius: 10px;margin-left: 18px;">

              <iframe src="https://timesprayer.com/widgets.php?frame=2&amp;lang=en&amp;name=jakarta&amp;avachang=true&amp;time=0&amp;fcolor=06876C&amp;tcolor=00604C&amp;frcolor=49C4AA" style="border: none; overflow: hidden; width: 100%; height: 275px;" __idm_frm__="1237"></iframe>
            </div>
          </div>
          <!-- akhir col -->
          <!-- awal col -->
          <div class="col" id="sidebargaleri3">
            <header class="section-header">
              <h3>Statistik Kunjungan</h3>
            </header>
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;background: linear-gradient(180deg, #49C4AA 0%, #06876C 100%);border-radius: 10px;margin-left: 18px;">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">
                <div class="col">
                  <a href="#" style="text-transform: none;font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 14px;line-height: 17px;color: #FFFFFF;">Pengunjung Hari ini <b style="margin-left: 47px;"><?= $pengunjunghariini; ?></b></a>
                </div>
                <br>
                <div class="col">
                  <a href="#" style="text-transform: none;font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 14px;line-height: 17px;color: #FFFFFF;">Pengunjung Online <b style="margin-left: 20px;"><?= $pengunjungonline; ?></b></a>
                </div>
                <hr color="white">
                <div class="col">
                  <a href="#" style="text-transform: none;font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 20px;line-height: 25px;color: #FFFFFF;">Total Kunjungan <?= $totalpengunjung; ?></a>
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
</main>