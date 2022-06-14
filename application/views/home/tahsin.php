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
              <h3>Program "Tahsin Tilawah"</h3>
            </header>
            <div class="card mb-3" style="border: 1px solid transparent;margin:30px auto;background:transparent;">
              <img src="<?= base_url(); ?>assets/img/program/tahsin.png" alt="">
              <br>
              <h2 style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 34px;line-height: 50px;background: linear-gradient(358deg, #06876C 25%, #49C4AA 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Program Tahsin Tilawah</h2>
              <p style="font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 16px;line-height: 20px;color: #666666;">
              Dasar program ini mengacu pada sabda Nabi Muhammad SAW, “bacalah dengan tartil sebagaimana kamu membacanya dengan tartil pada waktu kamu masih di dunia, karena sesungguhnya tempatmu tergantung pada akhir ayat yang kamu baca.” ( HR. Abu Daud dan Tirmidzi).
<br><br>
Hal itu, karena membaca Al Qur’an dengan tartil dapat membantu untuk mentadabburi dan memikirkan maknanya, menggeraakkan hati, dapat beribadah dengan ayat – ayatnya dan dapat menjadikan diri bersiap – siap siaga secara sempurna ( focus ) kepadanya.
<br><br>
Sehingga terdengan bacaan yang tak tergesa – gesa, dan lebih terasa indah dikala seorang membaca Al Qur’an dengan baik dan benar, sesuai hukum – hukum yang telah disepakati para pakar ulama tajwid, untuk mempermudah para santri RQIU dalam mempelajarinya, maka di buatkan dengan 4 tingkatan tahsin :
<ol>
        <li>Tahsin Tilawah  Semester 1 </li>
        <li>Tahsin Tilawah  Semester 2 </li>
        <li>Tahsin Tilawah  Semester 3 </li>
        <li>	Tahsin Tilawah  Semester 4 </li>
    </ol>

              </p>
              <div class="uk-child-width-1-2@m" uk-grid uk-lightbox="animation: scale">
                <div style="margin-left: -13px;">
                  <a class="uk-inline" href="<?= base_url(); ?>assets/img/program/tahsin1.jpg" data-caption="Lorem ipsum dolor sit">
                    <img src="<?= base_url(); ?>assets/img/program/tahsin1.jpg" style="height: 218px;" alt="">
                  </a>
                  <p style="margin-left: 10px;font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 160%;color: #666666;     margin-top: 20px;">Talaqqi Mitsaliyah yaitu menerangkan pokok – pokok pelajaran secara klasikal menggunakan peraga dengan suara lantang dan jelas kemudia santri menyimak stelah itu mengikutinya.</p>
                </div>
                <div>
                  <a class="uk-inline" href="<?= base_url(); ?>assets/img/program/tahsin2.jpg" data-caption="Lorem ipsum dolor sit">
                    <img src="<?= base_url(); ?>assets/img/program/tahsin2.jpg" alt="">
                  </a>
                  <p style="margin-left: 10px;font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 160%;color: #666666;     margin-top: 20px;">Selain talaqqi mitsaliyah guru Rumah Qur’an juga memeberikan materi penunjang yaitu latihan Ilmu Tajwid.</p>
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