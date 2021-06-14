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
    <h1 class="h3 mb-0 text-gray-800">Marketplace</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
  </div>
  <!-- Content Row -->
  <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Market Place</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url()?>index.php/Transaksi/TambahMarket" method="post" enctype="multipart/form-data">
          <div class="modal-body">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Market</label>
                    <input type="text" required class="form-control bg-light border-1 small" placeholder="Nama" name="nama_market" aria-label="namaPasar" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat Market</label>
                    <input type="text" required class="form-control bg-light border-1 small" placeholder="Alamat" name="alamat_market" aria-label="alamatPasar" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Keterangan Market</label>
                    <input type="text" required class="form-control bg-light border-1 small" placeholder="Keterangan" name="keterangan_market" aria-label="keteranganPasar" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Penanggung Jawab</label>
                    <input type="text" required class="form-control bg-light border-1 small" placeholder="Nama Penanggung Jawab" name="nama_penanggung_jawab" aria-label="namaPenanggungJawab" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">No. Telepon</label>
                    <input type="text" required class="form-control bg-light border-1 small" placeholder="Nomor_telepon" name="no_telepon" aria-label="nomorTelepon" aria-describedby="basic-addon2">
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
        </div>
      </div>
  </div>
  <!-- <div class="row"> -->
      <div class="card mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Data Market Place</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama Pasar</th>
                          <th>Alamat</th>
                          <th>Keterangan</th>
                          <th>Penanggung Jawab</th>
                          <th>No. Telepon</th>
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
                            foreach($market as $m){
                        ?>
                          <tr>
                              <td><?= $no;?></td>
                              <td><?= $m->nama_market; ?></td>
                              <td><?= $m->alamat_market; ?></td>
                              <td><?= $m->keterangan_market; ?></td>
                              <td><?= $m->nama_penanggung_jawab; ?></td>
                              <td><?= $m->no_telepon; ?></td>
                              <td>
                                  <a class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm" href="<?= base_url() ?>index.php/transaksi/editMarket/<?= $m->id_market ?>" data-toggle="modal" data-target="#editModal<?= $m->id_market ?>">
                                    <i class="fas fa-pen fa-sm text-white-50"></i> Edit
                                  </a>
                                  <!-- <a href="<?= base_url() ?>index.php/transaksi/editMarket/<?= $m->id_market ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                                      <i class="fas fa-pen fa-sm text-white-50"></i> Edit
                                  </a> -->
                                  <a href="<?= base_url() ?>index.php/transaksi/hapusMarket/<?= $m->id_market ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                      <i class="fas fa-trash fa-sm text-white-50"></i> Hapus
                                  </a>
                              </td>
                              <div class="modal fade" id="editModal<?= $m->id_market ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit Data Market</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form class="" action="<?= base_url('index.php/transaksi/editMarket') ?>" method="post">
                                        <input type="hidden" name="id_market" value="<?= $m->id_market ?>">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Market</label>
                                            <input name="nama_market" type="text" class="form-control" placeholder="" value="<?= $m->nama_market; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alamat Market</label>
                                            <input name="alamat_market" type="text" class="form-control" placeholder="" value="<?= $m->alamat_market; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Keterangan Market</label>
                                            <input name="keterangan_market" type="text" class="form-control" placeholder="" value="<?= $m->keterangan_market; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Penanggung Jawab</label>
                                            <input type="text" required class="form-control bg-light border-1 small" placeholder="Nama Penanggung Jawab" name="nama_penanggung_jawab" aria-label="namaPenanggungJawab" aria-describedby="basic-addon2">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">No. Telepon</label>
                                            <input type="text" required class="form-control bg-light border-1 small" placeholder="Nomor_telepon" name="no_telepon" aria-label="nomorTelepon" aria-describedby="basic-addon2">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                  <a class="btn btn-primary" href="<?= base_url()?>index.php/transaksi/editMarket">Update</a>
                                </div>
                              </div>
                              </div>
                              </div>
                          </tr>
                          <?php $no++; } ?>
                      </tbody>
                  </table>
                  <span>
                      <!-- <?php echo print_r($barang); ?> -->
                  </span>
              </div>
          </div>
      </div>
  <!-- </div> -->
