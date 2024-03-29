<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Pengadaan Barang</h1>
  </div>
<!-- <div class="row"> -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Data Pengadaan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- <?php print_r($jumlah_harga); ?> -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Nama Barang</td>
                            <td>Harga Barang</td>
                            <td>Jumlah</td>
                            <td>Satuan</td>
                            <td>Keterangan Barang</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach($barang as $b){
                        ?>
                          <tr>
                              <td><?= $no;?></td>
                              <td><?= $b->nama_barang; ?></td>
                              <td>Rp. <?= number_format($b->harga_barang, 2, ",", ".") ?></td>
                              <td>
                                  <div class="row justify-content-between mr-1 ml-1">
                                      <!-- <?= $b->jumlah; ?> -->
                                      <?php  ?>
                                      <a href="<?= base_url() ?>index.php/transaksi/tambah_pengadaan/<?= $b->id_barang ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                          <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
                                      </a>
                                      <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                          <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
                                        </button> -->
                                  </div>

                              </td>
                              <td><?= $b->satuan; ?></td>
                              <!-- <td><img src="<?= base_url('assets_admin/img/gambar_barang/'.$b->gambar); ?>" width="100" height="100"></td> -->
                              <td><?= $b->keterangan_barang; ?></td>
                              <td>
                                  <?php  ?>
                                  <a href="<?= base_url() ?>index.php/transaksi/edit_pengadaan/<?= $b->id_barang ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                                      <i class="fas fa-pen fa-sm text-white-50"></i> Edit
                                  </a>
                              </td>
                          </tr>
                          <?php $no++; } ?>
                        <!-- <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="<?= base_url() ?>index.php/kelola/gudang" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                                    <i class="fas fa-pen fa-sm text-white-50"></i> Edit
                                </a>
                            </td>
                        </tr> -->
                    </tbody>

                    <!-- <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Action</th>
                      </tr>
                    </thead> -->
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
                    <!-- <tbody>
                      <?php
                          $no = 1;
                          foreach($barang as $b){
                      ?>
                        <tr>
                            <td><?= $no;?></td>
                            <td><?= $b->nama_barang; ?></td>
                            <td>Rp. <?= $b->harga_barang; ?></td>
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
                    </tbody> -->
                </table>
            </div>
        </div>
    </div>
<!-- </div> -->
<?php foreach ($barang as $b): ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

</div>
