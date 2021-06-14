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
    <h1 class="h3 mb-0 text-gray-800">Stok Gudang</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="window.print()"><i class="fas fa-download fa-sm text-white-50"></i> Cetak</a>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
  </div>
  <!-- Content Row -->
  <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Barang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url()?>index.php/Kelola/TambahBarang" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <p>Modal body text goes here.</p>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Barang</label>
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Nama Barang" name="nama_barang" aria-label="namaBarang" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jenis Barang</label>
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Jenis Barang" name="jenis_barang" aria-label="jenisBarang" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Harga Barang</label>
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Harga" name="harga_barang" aria-label="hargaBarang" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tanggal</label>
                    <input type="date" class="form-control bg-light border-1 small" placeholder="Tanggal" name="tanggal" aria-label="tanggal" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Keterangan</label>
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Keterangan" name="keterangan_barang" aria-label="Keterangan" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Gambar</label>
                    <input type="file" class="form-control bg-light border-1 small" placeholder="Keterangan" name="gambar" aria-label="Gambar" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Sumber</label>
                    <select class="form-control custom-select bg-light small" name="sumber">
                      <option selected>Pilih Sumber Barang</option>
                      <?php
                      foreach ($sumber as $s) {
                          // code...
                      ?>
                      <option value="<?= $s->id_sumber; ?>"><?= $s->nama_sumber ?></option>
                      <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Gudang</label>
                    <select class="form-control custom-select bg-light small" name="gudang">
                      <option selected>Pilih Gudang</option>
                      <?php
                      foreach ($gudang as $g) {
                          // code...
                      ?>
                      <option value="<?= $g->id_gudang; ?>"><?= $g->id_gudang; ?> - <?= $g->keterangan_gudang; ?></option>
                      <?php } ?>
                    </select>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
        </div>
      </div>
  </div>
  <!-- <div class="row"> -->
      <div class="card mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Data Barang</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama</th>
                          <th>Harga</th>
                          <!-- <th>Gambar</th> -->
                          <th>Kategori</th>
                          <th>Tanggal</th>
                          <th>Sumber</th>
                          <!-- <th>Gudang</th> -->
                          <th>Keterangan</th>
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
                            foreach($barang as $b){
                        ?>
                          <tr>
                              <td><?= $no;?></td>
                              <td><?= $b->nama_barang; ?></td>
                              <td><?= $b->harga_barang; ?></td>
                              <!-- <td><img src="<?= base_url('assets_admin/img/gambar_barang/'.$b->gambar); ?>" height="100"></td> -->
                              <td><?= $b->id_kategori; ?></td>
                              <td><?= $b->tanggal; ?></td>
                              <td><?= $b->id_sumber; ?>. <?=$b->nama_sumber?> - <?= $b->alamat_sumber?></td>
                              <!-- <td><?= $b->id_gudang; ?></td> -->
                              <td><?= $b->keterangan_barang; ?></td>
                              <td>
                                  <a href="<?= base_url() ?>index.php/kelola/editbarang/<?= $b->id_barang ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                                      <i class="fas fa-pen fa-sm text-white-50"></i> Edit
                                  </a>
                                  <a href="<?= base_url() ?>index.php/kelola/hapusbarang/<?= $b->id_barang ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                      <i class="fas fa-trash fa-sm text-white-50"></i> Hapus
                                  </a>
                              </td>
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
