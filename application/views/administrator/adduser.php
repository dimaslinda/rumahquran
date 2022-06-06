<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah User Baru</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>/administrator">Beranda</a></li>
            <li class="breadcrumb-item">User</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <div class="card-body">
                    <form method="post" action="<?= base_url(); ?>administrator/adduser">
                        <div class="form-group">
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" name="username" id="Username" aria-describedby="Text" placeholder="Masukan Username" value="<?= set_value('username'); ?>">
                            <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password1">Kata Sandi</label>
                            <input type="password" class="form-control" name="password1" id="password1" placeholder="Masukan Kata Sandi">
                            <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password2">Ulangi Kata Sandi</label>
                            <input type="password" class="form-control" name="password2" id="password2" placeholder="Konfirmasi Kata Sandi">
                        </div>
                        <div class="form-group">
                            <label for="Nama Lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" id="Nama Lengkap" aria-describedby="Text" placeholder="Masukan Nama Lengkap" value="<?= set_value('nama_lengkap'); ?>">
                            <?= form_error('nama_lengkap', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Masukan alamat email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <!-- <div class="form-group">
                            <label for="gambar">Foto Profil</label>
                            <input type="file" class="form-control" name="gambar" id="gambar">
                        </div> -->
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </form>
                </div>
            </div>

            <!-- Documentation Link -->