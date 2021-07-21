<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengadaan Barang</h1>
  </div>
<!-- <div class="row"> -->
    <div class="card mb-4">
        <?php foreach ($barang as $b) {
            ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Data Pengadaan <?php echo $b->nama_barang; ?></h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?= base_url('assets_admin/img/gambar_barang/')?><?= $b->gambar; ?>" class="img-fluid" alt="Colorlib Template">
                </div>
                <div class="col-sm-8">
                    <form class="" action="<?= base_url(); ?>index.php/transaksi/editPengadaan" method="post">
                        <input type="hidden" required name="id_barang" value="<?php echo $b->id_barang ?>">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Barang</label>
                            <h1 class="display-4"><?php echo $b->nama_barang; ?></h1>
                            <!-- <input type="text" class="form-control bg-light border-1 small" placeholder="Nama Barang" value="<?php echo $b->nama_barang; ?>" name="nama_barang" aria-label="namaBarang" aria-describedby="basic-addon2"> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Harga Barang</label>
                            <h2>Rp. <?php echo $b->harga_barang; ?></h2>
                            <!-- <input type="text" class="form-control bg-light border-1 small" placeholder="Harga" value="<?php echo $b->harga_barang; ?>" name="harga_barang" aria-label="hargaBarang" aria-describedby="basic-addon2"> -->
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleFormControlInput1">Jumlah</label>
                            <input type="number" required class="form-control bg-light border-1 small" placeholder="Jumlah" value="<?php echo $b->jumlah; ?>" name="jumlah" aria-label="jumlah" aria-describedby="basic-addon2">
                        </div> -->
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jenis</label>
                            <?php if ($b->id_kategori == 0): ?>
                                <select name="jenis" class="form-control bg-light border-1 small" required>
                                    <option value="">-Pilih Kategori-</option>
                                    <?php foreach ($jenis as $k): ?>
                                        <option value="<?= $k->id_kategori?>"><?= $k->kategori?></option>
                                    <?php endforeach; ?>
                                </select>
                            <?php else: ?>
                                <input type="text" disabled required class="form-control bg-light border-1 small" placeholder="Jenis" value="<?php echo $b->jenis; ?>" name="jenis" aria-label="Jenis" aria-describedby="basic-addon2" required>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Satuan</label>
                            <input type="text" required class="form-control bg-light border-1 small" placeholder="Satuan" value="<?php echo $b->satuan; ?>" name="satuan" aria-label="Satuan" aria-describedby="basic-addon2">
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleFormControlInput1">Sumber</label>
                            <select name="sumber" class="form-control bg-light border-1 small">
                                <option value="">-Pilih Sumber-</option>
                                <?php foreach ($sumber as $s): ?>
                                    <option value="<?= $s->id_sumber?>"><?= $s->nama_sumber?> - <?= $s->alamat_sumber?></option>
                                <?php endforeach; ?>
                            </select>
                            <input type="text" disabled required class="form-control bg-light border-1 small" placeholder="Satuan" value="<?php echo $b->id_sumber; ?>" name="id_sumber" aria-label="Sumber" aria-describedby="basic-addon2">
                        </div> -->
                        <button type="submit" class="btn btn-success position-bottom">Update</button>
                    </form>
                </div>
            </div>
        <?php } ?>
            <div class="table-responsive">
                <!-- <?php print_r($jumlah_harga); ?> -->

            </div>
        </div>
    </div>
<!-- </div> -->

</div>
