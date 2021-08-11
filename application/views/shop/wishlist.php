    <div class="hero-wrap hero-bread" style="background-image: url(<?php echo base_url()?>assets/images/bg_1.jpg);">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url()?>index.php/Shop">Beranda</a></span> <span>Daftar Keinginan</span></p>
            <h1 class="mb-0 bread">Daftar Keinginan</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <!-- <?php print_r($cart) ?> -->
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                          <tr class="text-center">
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <!-- <th>Banyak Barang</th> -->
                            <!-- <th>Total</th> -->
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($wishlist as $w) {
                                // code...
                            ?>
                          <tr class="text-center">
                            <td class="product-remove"><a href="<?= base_url('index.php/shop/delWish/')?><?= $w->id_barang?>"><span class="ion-ios-close"></span></a></td>

                            <td class="image-prod"><div class="img" style="background-image:url(<?= base_url('assets_admin/img/gambar_barang/')?><?= $w->gambar; ?>);"></div></td>

                            <td class="product-name">
                                <h3><?= $w->nama_barang?></h3>
                                <p><?= $w->keterangan_barang?></p>
                            </td>

                            <td class="price">Rp. <?= number_format($w->harga_barang, 2, ",", ".") ?></td>

                            <!-- <td class="quantity">
                                <div class="input-group mb-3">
                                <input type="text" name="quantity" class="quantity form-control input-number" value="<?= $w->jumlah?>" min="1" max="100">
                            </div> -->
                          </td>

                            <!-- <td class="total"><?php echo $w->harga_barang; ?></td> -->
                          </tr><!-- END TR-->
                      <?php } ?>
                        </tbody>
                      </table>
                  </div>
            </div>
        </div>
        </div>
    </section>
