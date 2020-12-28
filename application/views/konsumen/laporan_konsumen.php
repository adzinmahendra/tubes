  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Konsumen</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a> -->
  </div>
  <!-- Content Row -->
  <!-- <div class="row"> -->
      <div class="card mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Daftar Konsumen</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama Konsumen</th>
                          <th>Keterangan</th>
                          <th>Alamat</th>
                          <th>Kota</th>
                          <th>NomorTelepon</th>
                          <th>Kode Pos</th>
                          <th>Email</th>
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
                            foreach($konsumen as $k){
                        ?>
                          <tr>
                              <td><?= $no;?></td>
                              <td><?= $k->nama_depan; ?> <?= $k->nama_belakang; ?></td>
                              <td><?= $k->keterangan_konsumen; ?></td>
                              <td><?= $k->alamat_konsumen; ?></td>
                              <td><?= $k->kota; ?></td>
                              <td><?= $k->no_telepon_konsumen; ?></td>
                              <td><?= $k->kode_pos; ?></td>
                              <td><?= $k->email; ?></td>
                              <td>
                                  <a href="<?= base_url() ?>index.php/konsumen/lihatPesanan/<?= $k->id_konsumen ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                      <i class="fas fa-eye fa-sm text-white-50"></i> Lihat pesanan
                                  </a>
                                  <!-- <a href="<?= base_url() ?>index.php/konsumen/hapusKonsumen/<?= $k->id_konsumen ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                      <i class="fas fa-trash fa-sm text-white-50"></i> Hapus
                                  </a> -->
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
