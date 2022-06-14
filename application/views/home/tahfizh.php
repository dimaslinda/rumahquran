<main id="main">

  <!--==========================
  About Us Section
============================-->
  <section id="tentangkami">
    <div class="container">
      <div class="row row-cols-2 row-cols-lg-3 justify-content-between">
        <div class="col" id="artikel">
          <!-- kolom Sepekan Rumah Qur'an -->
          <div class="col" style="background: transparent;">
            <header class="section-header">
              <h3>Program "Tahfizh Qur'an"</h3>
            </header>
            <div class="card mb-3" style="border: 1px solid transparent;margin:30px auto;background:transparent;">
              <img src="<?= base_url(); ?>assets/img/program/tahfizh.png" alt="">
              <br>
              <h2 style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 34px;line-height: 50px;background: linear-gradient(358deg, #06876C 25%, #49C4AA 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Program Tahfizh Qur'an</h2>
              <p style="font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 16px;line-height: 20px;color: #666666;">

                Dasar program in mengacu pada sabda nabi Muhammad SAW, “ Sesungguhnya jiwa yang tiada dalam dadanya Al Qur’an, seperti rumah yang runtuh.” Maka setelah santri selesai di jenjang tahsin, selanjutnya ke program tahfidz.
                <br><br>
                Program Tahfdiz al – Qur’an ini merupakan program pendidikan al – Qur’an untuk Anak – Remaja – Dewasa. Adapun tujuan program Tahfizh Qur’an ini adalah selain membiasakan diri dalam berinteraksi dengan Al Qur’an yang akan menjadi ahlullah (keluarga Allah) diakhirat kelak. Sedangkan target program Tahfizh Qur’an adalah 2 juz dalam 3 semester, dengan masing – masing 1 semester sebanyak 1 juz.
                <br><br>
                Dalam setoran hafalan yang diterapkan di Rumah Qur’an Ihya Ul Ummah ini di awali dari juz 30,29,28 dan seterusnya. Adapun materi penunjang yang di berikan dalam proses menghafal ini diantaranya adalah memperkuat “Murojaah” dan “Tahsin Tilawah” ( Memperbaiki bacaan Al – Qur’an). Seseorang yang sudah mampu membaca Al Qur’an dengan lancar dan benar maka ia disebut Mahir atau Mutqin.

              </p>
              <div class="uk-child-width-1-2@m" uk-grid uk-lightbox="animation: scale">
                <div style="margin-left: -13px;">
                  <a class="uk-inline" href="<?= base_url(); ?>assets/img/program/tahfizh1.jpg" data-caption="Lorem ipsum dolor sit">
                    <img src="<?= base_url(); ?>assets/img/program/tahfizh1.jpg" style="height: 218px;" alt="">
                  </a>
                  <p style="margin-left: 10px;font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 160%;color: #666666; margin-top: 20px;">Murojaah bersama selalu di lakukan oleh santri Tahfidz Rumah Qur’an di awal pembukaan kelas hal ini bertujuan agar hafalan yang sudah di hafal semakin melekat dan mutqin.</p>
                </div>
                <div>
                  <a class="uk-inline" href="<?= base_url(); ?>assets/img/program/tahfizh2.jpg" data-caption="Lorem ipsum dolor sit">
                    <img src="<?= base_url(); ?>assets/img/program/tahfizh2.jpg" alt="">
                  </a>
                  <p style="margin-left: 10px;font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 160%;color: #666666; margin-top: 20px;">Sesi ziyadah yaitu sesi dimana para santri menyiapkan hafalan barunya untuk di setorkan kepada gurunya. </p>
                </div>
              </div>
            </div>
          </div>
          <!-- kolom Artikel -->
        </div>
        <!-- penutup col-7 -->
        <!-- awal col-4 -->
        <div class="col">
          <!-- awal col -->
          <div class="col" id="sidebarbbq">
            <header class="section-headerbbq">
              <h3>Artikel</h3>
            </header>
            <div class="uk-panel uk-panel-scrollable" id="sidebarbbq1">
              <ul class="uk-list">
                <?php foreach ($artikel as $ar) : ?>
                  <li>
                    <img src="<?= base_url(); ?>assets/img/artikel/<?= $ar['gambar']; ?>" style="width: 80px;" alt="">
                    <a href="<?= base_url(); ?>home/detailartikel/<?= $ar['id_berita']; ?>"><?= $ar['judul']; ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <br>
            <div style="border: 1px solid #666666;margin:32px auto;margin-bottom: 21px;"></div>
            <a href="<?= base_url(); ?>home/artikel" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #00A381;text-align:center;margin:0px auto;margin:0px 114px;">Lihat Semua</a>
          </div>
          <!-- akhir col -->
          <br>
          <!-- awal col -->
          <div class="col" id="sidebarbbq2">
            <header class="section-header" style="margin-bottom: -20px;">
              <h3>Jadwal Sholat</h3>
            </header>

            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;background: linear-gradient(180deg, #49C4AA 0%, #06876C 100%);border-radius: 10px;margin-left: 18px;">
              <iframe src="https://timesprayer.com/widgets.php?frame=2&amp;lang=en&amp;name=jakarta&amp;avachang=true&amp;time=0&amp;fcolor=06876C&amp;tcolor=00604C&amp;frcolor=49C4AA" style="border: none; overflow: hidden; width: 100%; height: 275px;" __idm_frm__="1237"></iframe>
            </div>
          </div>
          <!-- akhir col -->
          <!-- awal col -->
          <div class="col" id="sidebarbbq3">
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