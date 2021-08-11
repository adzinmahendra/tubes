<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Penjualan</h1>
  </div>
<!-- <div class="row"> -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Data Penjualan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- <?php print_r($jumlah_harga); ?> -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Harga Barang</td>
                            <td>Kuantitas</td>
                            <td>Email</td>
                            <!-- <td>Action</td> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($penjualan as $p): ?>
                        <tr>
                            <td><?php $no++; echo $no; ?></td>
                            <td>Rp. <?= number_format($p->jumlah_bayar, 2, ",", "."); ?></td>
                            <td><?= $p->jumlah_item ?></td>
                            <td><?= $p->email ?></td>
                            <!-- <td>
                                <a href="<?= base_url() ?>index.php/kelola/gudang" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                                    <i class="fas fa-pen fa-sm text-white-50"></i> Update
                                </a>
                            </td> -->
                        </tr>
                        <?php endforeach; ?>
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
