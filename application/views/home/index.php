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
        <a href="<?= base_url(); ?>home/tahsin">
          <center><img src="<?= base_url(); ?>assets/img/tilawah.png" alt=""></center>
          <p>Tahsin Tilawah</p>
        </a>
      </div>

      <div class="col-4 image-grid-item">
        <a href="<?= base_url(); ?>home/program">
          <center><img src="<?= base_url(); ?>assets/img/huruf.png" alt=""></center>
          <p>Berantas Buta Huruf Qur'an</p>
        </a>
      </div>

      <div class="col-4 image-grid-item">
        <a href="<?= base_url(); ?>home/tahfizh">
          <center><img src="<?= base_url(); ?>assets/img/quran.png" alt=""></center>
          <p>Tahfizh Qur'an</p>
        </a>
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
                        <p class="card-text" style="margin-bottom: 16px;"><small style="color: #FFFFFF;font-family: Quicksand;font-style: normal;font-weight: 500;font-size: 12px;line-height: 15px;"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('F d, Y', strtotime($gl['tanggal'])); ?> <i class="fa fa-comments" aria-hidden="true"></i> <?= $gl['kategori']; ?></small></p>
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
                <?php
                function get_CURL($url)
                {
                  $curl = curl_init();
                  curl_setopt($curl, CURLOPT_URL, $url);
                  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                  $result = curl_exec($curl);
                  curl_close($curl);
                  return json_decode($result, true);
                }
                $result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC7qrOky08rwTPLKrizVb_iA&key=AIzaSyCAm2zDkW3X-tOlQ45ZWoiQ-BvM15PIAFA');
                $youtubeProfilepic = $result['items'][0]['snippet']['thumbnails']['default']['url'];
                $channelName = $result['items'][0]['snippet']['title'];

                // last video
                $urlplaylistvideo = 'https://www.googleapis.com/youtube/v3/playlists?channelId=UC7qrOky08rwTPLKrizVb_iA&maxResults=50&key=AIzaSyCAm2zDkW3X-tOlQ45ZWoiQ-BvM15PIAFA&part=snippet';
                $result = get_CURL($urlplaylistvideo);
                $urlplaylistvideoId1 = $result['items'][0]['id'];
                $judulplaylistvideo1 = $result['items'][0]['snippet']['title'];
                $urlplaylistvideoId2 = $result['items'][1]['id'];
                $judulplaylistvideo2 = $result['items'][1]['snippet']['title'];
                $urlplaylistvideoId3 = $result['items'][2]['id'];
                $judulplaylistvideo3 = $result['items'][2]['snippet']['title'];
                $urlplaylistvideoId4 = $result['items'][3]['id'];
                $judulplaylistvideo4 = $result['items'][3]['snippet']['title'];
                $urlplaylistvideoId5 = $result['items'][4]['id'];
                $judulplaylistvideo5 = $result['items'][4]['snippet']['title'];
                ?>
                <li>
                  <iframe width="120" height="90" src="https://www.youtube.com/embed/videoseries?list=<?= $urlplaylistvideoId1; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <a href="https://www.youtube.com/watch?v=Eay0RyVzh34&list=<?= $urlplaylistvideoId1; ?>" target="_blank"><?= $judulplaylistvideo1; ?></a>
                </li>
                <li>
                  <iframe width="120" height="90" src="https://www.youtube.com/embed/videoseries?list=<?= $urlplaylistvideoId2; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <a href="https://www.youtube.com/watch?v=Eay0RyVzh34&list=<?= $urlplaylistvideoId2; ?>" target="_blank"><?= $judulplaylistvideo2; ?></a>
                </li>
                <li>
                  <iframe width="120" height="90" src="https://www.youtube.com/embed/videoseries?list=<?= $urlplaylistvideoId3; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <a href="https://www.youtube.com/watch?v=Eay0RyVzh34&list=<?= $urlplaylistvideoId3; ?>" target="_blank"><?= $judulplaylistvideo3; ?></a>
                </li>
                <li>
                  <iframe width="120" height="90" src="https://www.youtube.com/embed/videoseries?list=<?= $urlplaylistvideoId4; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <a href="https://www.youtube.com/watch?v=Eay0RyVzh34&list=<?= $urlplaylistvideoId4; ?>" target="_blank"><?= $judulplaylistvideo4; ?></a>
                </li>
                <li>
                  <iframe width="120" height="90" src="https://www.youtube.com/embed/videoseries?list=<?= $urlplaylistvideoId5; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <a href="https://www.youtube.com/watch?v=Eay0RyVzh34&list=<?= $urlplaylistvideoId5; ?>" target="_blank"><?= $judulplaylistvideo5; ?></a>
                </li>
              </ul>
            </div>
            <br>
            <div id="garis"></div>
            <a href="https://www.youtube.com/c/SahabatQuranOfficial/" target="_blank" style="font-family: Quicksand;font-style: normal;font-weight: bold;font-size: 16px;line-height: 20px;color: #00A381;text-align:center;margin:0px auto;margin:0px 114px;">Lihat Semua</a>
          </div>
          <!-- akhir col -->
          <br>
          <!-- awal col -->
          <div class="col" id="col2">
            <header class="section-header">
              <h3>Facebook</h3>
            </header>
            <div class="uk-panel" id="colpertama">
              <ul class="uk-list">
                <li>
                  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsahabatquran.info%2F&tabs=timeline&width=320&height=400&small_header=false&adapt_container_width=false&hide_cover=true&show_facepile=true&appId=340266081602049" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </li>
            </div>
            <br>
          </div>
          <!-- akhir col -->
          <!-- awal col -->
          <div class="col" id="arsip1">
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
              <p id='rekening'>Bank Syariah Mandiri (451) <br> No. Rekening <span style="color: #F28153;">703 - 1726 - 403</span> <br> a.n Yayasan Ihya Ul Ummah</p>
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