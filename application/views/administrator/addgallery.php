<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah gallery baru</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>administrator">Home</a></li>
            <li class="breadcrumb-item">Gallery</li>
            <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url(); ?>administrator/addgallery">Tambah Gallery</a></li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Gallery</h6>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <div class="card-body">
                    <form method="post" action="<?= base_url(); ?>administrator/addgallery" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" aria-describedby="Text" placeholder="Masukan Judul Artikel" name="judul" value="<?= set_value('judul'); ?>">
                            <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" class="form-control" id="kategori" aria-describedby="emailHelp" placeholder="Contoh: Artikel" name="kategori" value="<?= set_value('kategori'); ?>">
                            <?= form_error('kategori', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="isi_berita">Isi Berita Gallery</label>
                            <textarea class="form-control" id="isi_berita" name="isi_berita" rows="3" aria-valuetext="<?= set_value('isi_berita'); ?>"></textarea>
                            <?= form_error('isi_berita', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" class="form-control" size="20">
                            <?= form_error('gambar', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="keterangan_gambar">Keterangan gambar</label>
                            <input type="text" class="form-control" id="keterangan_gambar" name="keterangan_gambar" value="<?= set_value('keterangan_gambar'); ?>">
                            <?= form_error('keterangan_gambar', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="user" name="user" value="<?= $user['nama_lengkap']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>