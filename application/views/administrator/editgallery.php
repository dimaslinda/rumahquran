<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Gallery</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>administrator">Home</a></li>
            <li class="breadcrumb-item">Gallery</li>
            <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url(); ?>administrator/editgallery">Edit Gallery</a></li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Gallery</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url(); ?>administrator/edit_gallery" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="hidden" name="id_gallery" value="<?= $detail['id_gallery']; ?>">
                            <input type="hidden" name="gambarlama" value="<?= $detail['gambar']; ?>">
                            <input type="text" class="form-control" id="judul" aria-describedby="Text" placeholder="Masukan Judul Artikel" name="judul" value="<?= $detail['judul']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" class="form-control" id="kategori" aria-describedby="emailHelp" placeholder="Contoh: Artikel" name="kategori" value="<?= $detail['kategori']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="isi_berita">Isi Berita Gallery</label>
                            <textarea class="form-control" id="isi_berita" name="isi_berita" rows="3"><?= $detail['isi_berita']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" class="form-control" size="20">
                        </div>
                        <div class="form-group">
                            <label for="keterangan_gambar">Keterangan gambar</label>
                            <input type="text" class="form-control" id="keterangan_gambar" name="keterangan_gambar" value="<?= $detail['keterangan_gambar']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>