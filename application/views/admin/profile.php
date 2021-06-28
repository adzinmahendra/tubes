<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profile</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="window.print()"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>

  <!-- Content Row -->

    <!-- Area Chart -->
    <div class="col-xl col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Account</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
              <div class="dropdown-header">Dropdown Header:</div>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <form class="" action="<?= base_url()?>index.php/admin/update_profile" method="post" enctype="multipart/form-data">
                            <img src="<?= $admin->gambar ?? "https://source.unsplash.com/QAB-WJcbgJk/60x60"?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <input type="file" id="formFile" name="gambar" class="form-control md-3">
                                <p class="card-text">Biarkan foto kosong jika tidak ingin menggantinya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-12">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="text" name="email" value="<?= $profile->email ?>" class="form-control mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Username</label>
                                <input type="text" name="username" value="<?= $profile->username ?>" class="form-control mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="nama_depan" value="" class="form-control mb-3" placeholder="Nama Depan">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="nama_belakang" value="" class="form-control mb-3" placeholder="Nama Belakang">
                                    </div>
                                </div>
                                <label for="exampleFormControlInput1" class="form-label">Password</label>
                                <input type="password" name="password" value="<?= $profile->password ?>" class="form-control mb-3">
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                <input type="submit" name="" value="Simpan" class="btn btn-success">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
