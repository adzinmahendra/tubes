<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" type="button" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
  </div>
  <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Barang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url()?>index.php/Kelola/TambahKategori" method="post" enctype="multipart/form-data">
          <div class="modal-body">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Kategori</label>
                    <input type="text" class="form-control bg-light border-1 small" placeholder="Nama Kategori" name="nama_kategori" aria-label="namaKategori" aria-describedby="basic-addon2">
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
  <!-- <?php echo print_r($barang) ?> -->
    <?php
    foreach($kategori as $k){
    ?>
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample<?= $k->id_kategori?>" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary"><?= $k->kategori?></h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse" id="collapseCardExample<?= $k->id_kategori?>" style="">
            <div class="card-body">
                <?php
                // print_r($barang);
                    foreach ($barang as $b) {
                        if ($b->id_kategori == $k->id_kategori) {
                            echo $b->nama_barang;
                        }
                    }

                ?>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <a href="<?= base_url()?>index.php/Kelola/cekListKategori/<?= $k->id_kategori?>" class="btn btn-primary position-bottom">Cek</a>
            <a href="<?= base_url()?>index.php/Kelola/hapusKategori/<?= $k->id_kategori?>" class="btn btn-danger position-bottom">Hapus</a>
        </div>
    </div>
    <?php } ?>
