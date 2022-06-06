<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= $title; ?></title>
  <meta name="google-site-verification" content="pOdWeq6cZ6E1pctlnfssuiGleFEwDqD1kcNrL-lMisg" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="<?= $title; ?>">
  <meta name="keyword" content="#">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="id_ID">
  <meta property="og:url" content="#">
  <meta property="og:site_name" content="<?= $title; ?>">
  <meta property="og:title" content="<?= $title; ?>" />
  <meta property="og:description" content="<?= $title; ?>" />
  <meta property="og:image" content="#" />

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
  function gtag(){dataLayer.push(arguments);}
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
