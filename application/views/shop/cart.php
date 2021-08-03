<div class="hero-wrap hero-bread" style="background-image: url(<?php echo base_url()?>assets/images/bg_1.jpg);">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda</a></span> <span>Keranjang</span></p>
            <h1 class="mb-0 bread">Keranjang Ku</h1>
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
						        <th>Banyak Barang</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
								<?php
                                $sum = 0;
                                $sum_p = 0;
                                foreach ($cart as $c) {
									// code...
								?>
						      <tr class="text-center">
						        <td class="product-remove"><a href="<?= base_url('index.php/shop/delCart/')?><?= $c->id_barang?>"><span class="ion-ios-close"></span></a></td>

						        <td class="image-prod"><div class="img" style="background-image:url(<?= base_url('assets_admin/img/gambar_barang/')?><?= $c->gambar; ?>);"></div></td>

						        <td class="product-name">
						        	<h3><?= $c->nama_barang?></h3>
						        	<p><?= $c->keterangan_barang?></p>
						        </td>

						        <td class="price">Rp. <?= number_format($c->harga_barang, 2, ",", ".");?></td>

						        <td class="quantity">
                                    <form class="form-control" action="<?= base_url('index.php/shop/updateCart'); ?>" method="post">
                                        <div class="input-group mb-3">
                                            <input type="hidden" name="id_cart" value="<?= $c->id_cart; ?>">
                                            <input type="number" name="quantity" class="quantity form-control input-number" value="<?= $c->jumlah_barang?>" min="1" max="100">
                                            <input type="submit" name="update" value="update" class="">
                                        </div>
                                    </form>
					          </td>

						        <td class="total">Rp. <?= number_format(($c->harga_barang*$c->jumlah_barang), 2, ",", "."); ?></td>
						      </tr><!-- END TR-->
                              <?php $sum+= $c->jumlah_barang; ?>
                              <?php $sum_p+= ($c->jumlah_barang*$c->harga_barang); ?>
						  <?php } ?>
						  	  <tr>
								  <td></td>
								  <td></td>
								  <td></td>
                                  <td>Jumlah</td>
								  <td><?= $sum; ?></td>
								  <td>Rp. <?= number_format($sum_p, 2, ",", "."); ?></td>
							  </tr>
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Coupon Code</h3>
    					<p>Enter your coupon code if you have one</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Coupon code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="Maaf website sedang dalam pengembangan" disabled>
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4 disabled" disabled>Apply Coupon</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Estimate shipping and tax</h3>
    					<p>Enter your destination to get a shipping estimate</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Country</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">State/Province</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">Zip/Postal Code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
    			</div>

                <!-- Hasil harga -->
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Total Keranjang</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>Rp. <?= number_format($sum_p, 2, ",", "."); ?></span>
    					</p>
    					<p class="d-flex">
    						<span>Biaya Kirim</span>
    						<span>Rp. 0.00</span>
    					</p>
    					<!-- <p class="d-flex">
    						<span>Discount</span>
    						<span>Rp. 0.00</span>
    					</p> -->
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>Rp. <?= number_format($sum_p, 2, ",", "."); ?></span>
    					</p>
    				</div>
                    <?php
                        if($this->session->userdata('status') != "login"){
                            // redirect(base_url("login"));
                    ?>
                    <p><a href="<?= base_url('index.php/shop/checkout'); ?>" class="btn btn-primary py-3 px-4">Lanjut ke Checkout !</a></p>
                    <?php
                        }
                    ?>
                    <?php
                        if($this->session->userdata('status') == "login"){
                            // redirect(base_url("login"));
                    ?>
                    <form class="" action="<?= base_url('index.php/shop/saveCheckout'); ?>" method="post">
                        <input type="hidden" name="jumlah_harga" value="<?= $sum_p; ?>">
                        <input type="hidden" name="jumlah_barang" value="<?= $sum; ?>">
                        <input class="btn btn-primary py-3 px-4" type="submit" name="" value="Proceed to Checkout">
                    </form>
                    <!-- <p><a href="<?= base_url('index.php/shop/checkout'); ?>" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p> -->
                    <?php
                        }
                    ?>
    				<!-- <p><a href="<?= base_url('index.php/shop/checkout'); ?>" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p> -->
                    <!-- <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"> -->
                        <!-- <p class="text text-white">Launch demo modal</p> -->
                        <!-- <a href="#" class="btn btn-primary py-3 px-4">Estimate</a> -->
                    <!-- </button> -->
    			</div>
    		</div>

			</div>
		</section>
        <!-- Button trigger modal -->
