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
                                  <img src="<?= base_url('assets_admin/img/gambar_bukti_bayar/').$transaksi->bukti_transaksi?>" alt="" height="50px">
                                  <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                      <i class="fas fa-eye"></i> Bukti Bayar
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                              <h5>Bukti Pembayaran</h5>
                                              <img src="<?= base_url('assets_admin/img/gambar_bukti_bayar/').$transaksi->bukti_transaksi?>" alt="" width="100%">

                                              <!-- <p>This<a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p> -->
                                              <hr>
                                              <form class="form" action="<?= base_url('index.php/konsumen/unggahResi')?>" method="post">
                                                  <h5>Proses Pesanan</h5>
                                                  <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Kode Resi</label>
                                                    <input type="hidden" name="id_pesanan" value="<?= $p->id_pesanan?>">
                                                    <input type="text" class="form-control" id="exampleInput" aria-describedby="Help" name="resi" placeholder="Masukan kode resi pengiriman" required>
                                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                                  </div>
                                                  <!-- <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                                    <input type="kurir" class="form-control" id="exampleInputPassword1">
                                                  </div> -->
                                                  <!-- <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p> -->


                                            </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Proses</button>
                                        </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
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
