<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if ($this->session->flashdata('success')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
		</div>
	<?php endif; ?>
    <?php if ($this->session->flashdata('error')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
	<?php endif; ?>
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Sumber Dari Petani</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
  </div>
  <!-- Content Row -->
  <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Petani</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url()?>index.php/Kelola/tambahSumber" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <p>Tampah Data Sumber Petani</p>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Sumber</label>
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Nama Petani" name="nama_sumber" aria-label="namaSumber" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat Sumber</label>
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Alamat Sumber" name="alamat_sumber" aria-label="alamatSumber" aria-describedby="basic-addon2">
                </div>
                <!-- <div class="form-group">
                    <label for="exampleFormControlInput1">Keterangan Market</label>
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Keterangan Pasar" name="keterangan_market" aria-label="keteranganPasar" aria-describedby="basic-addon2">
                </div> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
        </div>
      </div>
  </div>
  <!-- <div class="row"> -->
      <div class="card mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Data Petani</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama Sumber</th>
                          <th>Alamat</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <!-- <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                      </tfoot> -->
                      <tbody>
                        <?php
                            $no = 1;
                            foreach($sumber as $s){
                        ?>
                          <tr>
                              <td><?= $no;?></td>
                              <td><?= $s->nama_sumber; ?></td>
                              <td><?= $s->alamat_sumber; ?></td>
                              <td>
                                  <a href="<?= base_url() ?>index.php/kelola/editSumber/<?= $s->id_sumber ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                                      <i class="fas fa-pen fa-sm text-white-50"></i> Edit
                                  </a>
                                  <a href="<?= base_url() ?>index.php/kelola/hapusSumber/<?= $s->id_sumber ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                      <i class="fas fa-trash fa-sm text-white-50"></i> Hapus
                                  </a>
                              </td>
                          </tr>
                          <?php $no++; } ?>
                      </tbody>
                  </table>
                  <span>
                      <!-- <?php echo print_r($sumber); ?> -->
                  </span>
              </div>
          </div>
      </div>
  <!-- </div> -->
