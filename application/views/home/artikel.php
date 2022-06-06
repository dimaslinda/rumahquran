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
              <h3>Artikel</h3>
            </header>
            <!-- kolom artikel dalam -->
            <div class="col" style="background: linear-gradient(180deg, #49C4AA 0%, #06876C 100%);border-radius: 10px;height: 1295px;">
              <div class="card mb-3" style="border: 1px solid transparent;margin:-21px auto;background-color:transparent;">
                <?php foreach ($artikel as $ar) : ?>
                  <div class="row g-0" style="margin: 20px auto;">
                    <div class="col-4">
                      <img src="<?= base_url(); ?>assets/img/artikel/<?= $ar['gambar']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col">
                      <div class="card-body" style="padding: 0em;">
                        <a href="<?= base_url(); ?>home/detailartikel/<?= $ar['id_berita']; ?>">
                          <h5 class="card-title" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 24px;line-height: 30px;color: #FFFFFF;"><?= $ar['judul']; ?></h5>
                        </a>
                        <p class="card-text" style="margin-bottom: 16px;"><small style="color: #FFFFFF;font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('F d, Y', strtotime($ar['tanggal'])); ?> <i class="fa fa-comments" aria-hidden="true"></i> <?= $ar['kategori']; ?></small></p>
                        <p class="card-text" style="font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 16px;line-height: 20px;color: #FFFFFF;"><?= substr_replace($ar['isi_berita'], "...", 200); ?></p>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
                <br><br>
              </div>
            </div>
            <a href="#" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 67px;color: #666666;text-align:center;">Page 1 of 8</a>
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

            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;background: linear-gradient(180deg, #49C4AA 0%, #06876C 100%);border-radius: 10px;margin-top:-25px;margin-left: 18px;">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">Juni 2021 <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin:0px 0px 0px 93px;">Lihat</button></div>
            </div>

            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;background: linear-gradient(180deg, #49C4AA 0%, #06876C 100%);border-radius: 10px;margin-left: 18px;">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">Juni 2021 <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin:0px 0px 0px 93px;">Lihat</button></div>
            </div>

            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;background: linear-gradient(180deg, #49C4AA 0%, #06876C 100%);border-radius: 10px;margin-left: 18px;">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">Juni 2021 <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin:0px 0px 0px 93px;">Lihat</button></div>
            </div>

            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;background: linear-gradient(180deg, #49C4AA 0%, #06876C 100%);border-radius: 10px;margin-left: 18px;">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">Juni 2021 <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin:0px 0px 0px 93px;">Lihat</button></div>
            </div>

            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;background: linear-gradient(180deg, #49C4AA 0%, #06876C 100%);border-radius: 10px;margin-left: 18px;">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">Juni 2021 <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin:0px 0px 0px 93px;">Lihat</button></div>
            </div>

            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;background: linear-gradient(180deg, #49C4AA 0%, #06876C 100%);border-radius: 10px;margin-left: 18px;">
              <div class="card-header" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #FFFFFF;">Juni 2021 <button type="button" class="btn btn-primary" style="background: #F28153;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 50px;width:80px;margin:0px 0px 0px 93px;">Lihat</button></div>
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
</main>