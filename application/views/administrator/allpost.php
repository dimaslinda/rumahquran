<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Artikel</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>administrator">Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>administrator/allpost">Artikel</a></li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Semua Artikel</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <?= $this->session->flashdata('message'); ?>
                        <thead class="thead-light">
                            <tr>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Tanggal Pembuatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Tanggal Pembuatan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($artikel as $ar) : ?>
                                <tr>
                                    <td><?= $ar['judul']; ?></td>
                                    <td><?= $ar['kategori']; ?></td>
                                    <td><?= date('F d, Y', strtotime($ar['tanggal'])) ?></td>
                                    <td><a href="<?= base_url(); ?>administrator/editpost/<?= $ar['id_berita']; ?>" class="btn btn-sm btn-primary">Edit</a> <a href="<?= base_url(); ?>administrator/hapus_artikel/<?= $ar['id_berita']; ?>" onclick="return confirm('Yakin <?php echo $ar['judul']; ?> dihapus?');" class="btn btn-sm btn-danger">Hapus</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>