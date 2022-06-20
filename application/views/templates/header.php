<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?= $title; ?></title>
  <meta name="google-site-verification" content="pOdWeq6cZ6E1pctlnfssuiGleFEwDqD1kcNrL-lMisg" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="Rumah Qur’an Ihya Ul Ummah (RQIU) merupakan salah satu program unggulan Yayasan Ihya Ul Ummah yang secara khusus dirancang untuk mendekatkan dan membumikan al Qur’an di tengah-tengah masyarakat.">
  <meta name="keyword" content="rumah quran, belajar ngaji, belajar Quran">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="id_ID">
  <meta property="og:url" content="<?= base_url(); ?>">
  <meta property="og:site_name" content="<?= $title; ?>">
  <meta property="og:title" content="<?= $title; ?>" />
  <meta property="og:description" content="Rumah Qur’an Ihya Ul Ummah (RQIU) merupakan salah satu program unggulan Yayasan Ihya Ul Ummah yang secara khusus dirancang untuk mendekatkan dan membumikan al Qur’an di tengah-tengah masyarakat." />
  <meta property="og:image" content="data:image/jpeg;base64,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" />

  <!-- Favicons -->
  <link href="<?= base_url(); ?>assets/img/favicon.png" rel="icon">
  <link href="<?= base_url(); ?>assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Mukta' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Paytone One' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Exo' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <!-- Libraries CSS Files -->
  <link href="<?= base_url(); ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/uikit.min.css" />

  <!-- UIkit JS -->
  <script src="<?= base_url(); ?>assets/js/uikit.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/uikit-icons.min.js"></script>

  <!-- Main Stylesheet File -->
  <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132833691-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-132833691-2');
  </script>
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">
      <div class="logo float-left">
        <a href="<?= base_url(); ?>" class="scrollto"><img src="<?= base_url(); ?>assets/img/logo.png" alt="Logo Ihya" class="img-fluid"></a>
      </div>
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= base_url(); ?>">Beranda</a></li>
          <li class="drop-down"><a href="#">Program</a>
            <ul>
              <li><a href="<?= base_url(); ?>home/program" style="color: #FFFFFF;">Berantas Buta Huruf Qur’an</a></li>
              <li><a href="<?= base_url(); ?>home/tahsin" style="color: #FFFFFF;">Tahsin Tilawah</a></li>
              <li><a href="<?= base_url(); ?>home/tahfizh" style="color: #FFFFFF;">Tahfizh Qur’an</a></li>
            </ul>
          </li>
          <li>
            <a href="<?= base_url(); ?>home/gallery">Galery</a>
          </li>
          <li>
            <a href="<?= base_url(); ?>home/artikel">Artikel</a>
          </li>
          <li>
            <a href="<?= base_url(); ?>home/donasi">Donasi</a>
          </li>
          <li>
            <a href="<?= base_url(); ?>home/kontak">Kontak</a>
          </li>
          <li>
            <a href="<?= base_url(); ?>home/about">Tentang Kami</a>
          </li>
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header><!-- #header -->