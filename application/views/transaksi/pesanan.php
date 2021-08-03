<div class="hero-wrap hero-bread" style="background-image: url(<?php echo base_url()?>assets/images/bg_1.jpg);">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url()?>index.php/Shop">Home</a></span> <span>Daftar Pesanan</span></p>
        <h1 class="mb-0 bread">Daftar Pesanan</h1>
      </div>
    </div>
  </div>
</div>
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
        <div class="col-md-12 ftco-animate">
            <div class="cart-list">
                <table class="table">
                    <thead class="thead-primary">
                      <tr class="text-center">
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Jumlah Barang</th>
                        <th>Jumlah Harga</th>
                        <!-- <th>Status</th> -->
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pesanan as $w) {
                            // code...
                        ?>
                      <tr class="text-center">
                        <td class="product-remove"><a href="<?= base_url('index.php/shop/delWish/')?><?= $w->id_pesanan?>"><span class="ion-ios-close"></span></a></td>

                        <td class="product-name">
                            <h3><?= $w->tanggal?></h3>
                            <p><?= $w->nama_depan.' '.$w->nama_belakang?></p>
                        </td>

                        <td class="product-name">
                            <h3><?= $w->jumlah_item?> Kg</h3>
                        </td>

                        <td class="price">Rp. <?= number_format($w->jumlah_harga, 2, ",", ".");?></td>

                        <!-- <td class="quantity">
                            <div class="input-group mb-3">
                            <input type="text" name="quantity" class="quantity form-control input-number" value="<?= $w->jumlah?>" min="1" max="100">
                        </div> -->
                        <!-- <td class="product-name">
                            ha
                        </td> -->
                        <td class="product-name">
                            <button>cek</button>
                        </td>
                      </tr><!-- END TR-->
                  <?php } ?>
                    </tbody>
                  </table>
              </div>
        </div>
    </div>
    </div>
</section>
