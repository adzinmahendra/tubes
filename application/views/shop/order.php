<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url('assets/') ?>images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>

<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
				<h3 class="mb-4 billing-heading">Detail Pembayaran</h3>
	          	<div class="row align-items-end">

		            <div class="w-100"></div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Kode Pos</label>
	                  <input type="text" class="form-control" placeholder="" name="kode_pos" value="">
	                </div>
		            </div>
                <div class="w-100"></div>
	            </div>
			</div>
			<div class="col-xl-5">
                <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Total Belanjaan</h3>
	          			<p class="d-flex">
    						<span>Subtotal</span>
    						<span>Rp. <?= $checkout->jumlah_harga ?>.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Biaya Kirim</span>
    						<span>Rp. 0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Diskon</span>
    						<span>Rp. 0.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>Rp. <?= $checkout->jumlah_harga ?>.00</span>
    					</p>
					</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
