<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Barang</h1>
  </div>
  <!-- <?php echo print_r($barang) ?> -->
  <div class="card mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-success">Data Barang</h6>
      </div>
          <form action="<?= base_url()?>index.php/Kelola/UpdateBarang" method="post">
          <div class="card-body">
            <p>Modal body text goes here.</p>
                <?php
                foreach($barang as $b){
                ?>
                <input type="hidden" name="id_barang" value="<?php echo $b->id_barang ?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Barang</label>
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Nama Barang" value="<?php echo $b->nama_barang; ?>" name="nama_barang" aria-label="namaBarang" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jenis Barang</label>
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Jenis Barang" value="<?php echo $b->jenis; ?>" name="jenis" aria-label="jaenisBarang" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Harga Barang</label>
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Harga" value="<?php echo $b->harga_barang; ?>" name="harga_barang" aria-label="hargaBarang" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tanggal</label>
                    <input type="date" class="form-control bg-light border-1 small" placeholder="Tanggal" value="<?php echo $b->tanggal; ?>" name="tanggal" aria-label="tanggal" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Keterangan</label>
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Keterangan" value="<?php echo $b->keterangan_barang; ?>" name="keterangan_barang" aria-label="Keterangan" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Gambar</label>
                    <img src="<?= base_url('assets_admin/img/gambar_barang/'.$b->gambar); ?>" alt="gambar_barang" width="100">
                    <input type="file" class="form-control bg-light border-1 small" placeholder="Keterangan" value="" name="gambar" aria-label="gambar" aria-describedby="basic-addon2">
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
            <?php } ?>
          </div>
          <div class="card-footer d-flex justify-content-end">
            <button type="submit" class="btn btn-success position-bottom">Simpan</button>
          </div>
        </form>
      </div>
