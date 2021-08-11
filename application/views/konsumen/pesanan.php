<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pesanan</h1>
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</button> -->
        <!-- <a href="#" class="btn btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> Cetak</a> -->
        <a href="#" class="btn btn-primary" onclick="window.print()"><i class="fas fa-download fa-sm text-white-50"></i> Cetak</a>
        <a href="<?= base_url()?>index.php/konsumen/excel" class="btn btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> Export</a>
        <a href="<?= base_url()?>index.php/konsumen/pdf_pesanan" class="btn btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> PDF</a>
    </div>
  </div>
<!-- <div class="row"> -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Data Pesanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- <?php print_r($pesanan); ?> -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Tanggal</td>
                            <td>Nama Konsumen</td>
                            <td>Jumlah Harga</td>
                            <td>Jumlah Barang</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach($pesanan as $p){
                        ?>
                          <tr>
                              <td><?= $no;?></td>
                              <td><?= $p->tanggal; ?></td>
                              <td><?= $p->nama_depan.' '.$p->nama_belakang; ?></td>
                              <td>Rp. <?= number_format($p->jumlah_harga, 2, ",", ".") ?></td>
                              <td><?= $p->jumlah_item; ?></td>
                              <!-- <td><img src="<?= base_url('assets_admin/img/gambar_barang/'.$b->gambar); ?>" width="100" height="100"></td> -->
                              <td>
                                  <?php  ?>
                                  <a href="<?= base_url() ?>index.php/konsumen/lihatPesanan/<?= $p->id_pesanan ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                      <i class="fas fa-search fa-sm text-white-50"></i> Lihat Pesanan
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
                    
                </table>
            </div>
        </div>
    </div>
<!-- </div> -->

</div>
