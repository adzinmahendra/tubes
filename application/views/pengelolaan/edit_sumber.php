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
          <form action="<?= base_url()?>index.php/Kelola/UpdateSumber" method="post">
          <div class="card-body">
            <!-- <p>Modal body text goes here.</p> -->
                <?php
                foreach($sumber as $s){
                ?>
                <input type="hidden" name="id_sumber" value="<?php echo $s->id_sumber ?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Petani</label>
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Nama Barang" value="<?php echo $s->nama_sumber; ?>" name="nama_sumber" aria-label="namaSumber" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat Sumber</label>
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Alamat" value="<?php echo $s->alamat_sumber; ?>" name="alamat_sumber" aria-label="alamatSumber" aria-describedby="basic-addon2">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">No. Telepon</label>
                    <input type="text" class="form-control bg-light border-1 small" placeholder="No. Telepon" value="<?php echo $s->no_telepon; ?>" name="no_telepon" aria-label="noTelepon" aria-describedby="basic-addon2">
                </div>
            <?php } ?>
          </div>
          <div class="card-footer d-flex justify-content-end">
            <button type="submit" class="btn btn-success position-bottom">Save changes</button>
          </div>
        </form>
      </div>
