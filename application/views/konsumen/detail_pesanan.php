<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pesanan</h1>
  </div>
<!-- <div class="row"> -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Data Pesanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- <?php print_r($cart); ?> -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Id Pesanan</td>
                            <td>Nama Konsumen</td>
                            <td>Email</td>
                            <td>Nama Barang</td>
                            <td>Harga Satuan</td>
                            <td>Jumlah Barang</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach($cart as $p){
                        ?>
                          <tr>
                              <td><?= $no;?></td>
                              <td><?= $p->id_pesanan; ?></td>
                              <td><?= $p->nama_depan.' '.$p->nama_belakang; ?></td>
                              <td><?= $p->email; ?></td>
                              <td><?= $p->nama_barang; ?></td>
                              <td><?= $p->harga_barang; ?></td>
                              <td><?= $p->jumlah_barang; ?></td>
                              <!-- <td><img src="<?= base_url('assets_admin/img/gambar_barang/'.$b->gambar); ?>" width="100" height="100"></td> -->

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

</div>
