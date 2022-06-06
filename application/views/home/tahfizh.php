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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae auctor aliquam mollis diam. Ultrices et nisi, aliquam ut neque venenatis elit faucibus faucibus. Tincidunt eleifend velit purus mattis orci turpis. Sodales a, fringilla fringilla nec. Malesuada tincidunt velit ipsum amet amet etiam elementum. Fermentum orci eros praesent tristique quam nunc orci. Egestas sit turpis volutpat viverra tristique metus habitasse. <br><br>
                At quam ut in eu mattis interdum faucibus ornare tellus. Cursus pharetra habitant lacinia est. Nunc, eget massa morbi id eu consectetur dui quam at. Nunc aliquet sit molestie eget auctor consequat. Rutrum feugiat at eget fames nullam habitant eu. Sapien sit volutpat dui amet, facilisis mauris. Nulla quis nisi, quam gravida in. Nisl ullamcorper massa et interdum a. Quis nibh bibendum maecenas lobortis erat sed. Habitasse velit dui cras nunc egestas mattis ut eu sit. In donec cursus aliquam, feugiat rhoncus risus. Sapien non eu, lacus ut morbi commodo viverra mattis sem. Purus mattis sed vestibulum ac facilisi pellentesque. <br><br>
                Semper at phasellus sed justo, aliquet. Ac habitant mollis ornare tellus eget tellus mi. In egestas morbi vestibulum urna turpis diam at quam. Egestas velit vitae vitae purus ornare et. Quis amet parturient ac mauris lorem ullamcorper. Dui lorem turpis tellus id ac. Metus nec eget aenean cursus. Ut vitae massa suspendisse egestas lorem. Pellentesque et fermentum in nulla. Nec diam interdum eu, a aliquam velit. Nunc vulputate ullamcorper condimentum pellentesque turpis aliquet. Est, et massa neque, aliquet bibendum.
              </p>
              <div class="uk-child-width-1-2@m" uk-grid uk-lightbox="animation: scale">
                <div style="margin-left: -13px;">
                  <a class="uk-inline" href="<?= base_url(); ?>assets/img/program/program2.png" data-caption="Lorem ipsum dolor sit">
                    <img src="<?= base_url(); ?>assets/img/program/program2.png" style="height: 218px;" alt="">
                  </a>
                  <p style="margin-left: 10px;font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 160%;color: #666666;">Lorem ipsum dolor sit</p>
                </div>
                <div>
                  <a class="uk-inline" href="<?= base_url(); ?>assets/img/program/program3.png" data-caption="Lorem ipsum dolor sit">
                    <img src="<?= base_url(); ?>assets/img/program/program3.png" alt="">
                  </a>
                  <p style="margin-left: 10px;font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 160%;color: #666666;">Lorem ipsum dolor sit</p>
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