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
                        <div class="card mb-3" style="border: 1px solid transparent;margin:30px auto;background:transparent;">
                            <img src="<?= base_url(); ?>assets/img/artikel/<?= $detail['gambar']; ?>" alt="">
                            <br>
                            <h2 style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 34px;line-height: 50px;background: linear-gradient(358deg, #06876C 25%, #49C4AA 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><?= $detail['judul']; ?></h2>
                            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                <li><a style="text-transform: none;font-family: Quicksand;font-style: normal;font-weight: bold;color: #666666;" href="#">Ditulis oleh : <span style="color:#00A381;">dr. Fitrina Aprilia</span></a></li>
                                <li><a style="text-transform: none;font-family: Quicksand;font-style: normal;font-weight: bold;color: #666666;" href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('F d, Y', strtotime($detail['tanggal'])); ?></a></li>
                            </ul>
                            <p style="font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 16px;line-height: 20px;color: #666666;">
                                <?= $detail['isi_berita']; ?>
                            </p>
                            <p style="font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 16px;line-height: 20px;color: #666666;">Baca juga : <span style="color:#00A381;"><b>Suka Makanan Asin. Ini Tanda Tubuh Kelebihan Garam</b></span></p>
                        </div>
                    </div>

                </div>
                <!-- penutup col-7 -->
                <!-- awal col-4 -->
                <div class="col">
                    <!-- awal col -->
                    <div class="col" id="sidebarbbq">
                        <header class="section-headerbbq">
                            <h3>Artikel Lainnya</h3>
                        </header>
                        <div class="uk-panel uk-panel-scrollable" style="height: 366px;resize: none;margin:-22px auto;">
                            <ul class="uk-list">
                                <?php foreach ($artikel as $ar) : ?>
                                    <li>
                                        <img src="<?= base_url(); ?>assets/img/artikel/<?= $ar['gambar']; ?>" style="width: 80px;" alt="">
                                        <a href="<?= base_url(); ?>home/detailartikel/<?= $ar['id_berita']; ?>" style="font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 16px;line-height: 20px;text-align: justify;color: #666666;"><?= $ar['judul']; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <br>
                        <div style="border: 1px solid #666666;margin:32px auto;"></div>
                        <a href="#" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #00A381;text-align:center;margin:0px auto;margin:0px 114px;">Lihat Semua</a>
                    </div>
                    <!-- akhir col -->
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