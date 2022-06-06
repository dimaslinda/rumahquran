       <!-- Container Fluid-->
       <div class="container-fluid" id="container-wrapper">
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
               <h1 class="h3 mb-0 text-gray-800">Selamat Datang, <b><?= $user['nama_lengkap']; ?></b></h1>
               <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="<?= base_url(); ?>administrator">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
               </ol>
           </div>

           <!-- Datatables -->
           <div class="row">
               <div class="col-lg-12 mb-4">
                   <!-- Simple Tables -->
                   <div class="card">
                       <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                           <h6 class="m-0 font-weight-bold text-primary">All User</h6>
                       </div>
                       <div class="table-responsive">
                           <table class="table align-items-center table-flush">
                               <thead class="thead-light">
                                   <tr>
                                       <th>Nama Lengkap</th>
                                       <th>Email</th>
                                       <th>Level</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php foreach ($users as $us) : ?>
                                       <tr>
                                           <td><?= $us['nama_lengkap']; ?></td>
                                           <td><?= $us['email']; ?></td>
                                           <td><span class="badge badge-warning"><?= $us['level']; ?></span></td>
                                           <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                                       </tr>
                                   <?php endforeach; ?>
                               </tbody>
                           </table>
                       </div>
                       <div class="card-footer"></div>
                   </div>
               </div>
           </div>
           <!--Row-->