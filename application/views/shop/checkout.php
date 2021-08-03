<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url('assets/') ?>images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Periksa</h1>
          </div>
        </div>
      </div>
    </div>

<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
			<form action="<?= base_url('index.php/shop/simpanOrderan/'); ?>" method="post" class="billing-form">
				<h3 class="mb-4 billing-heading">Detail Pembayaran</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Nama Depan</label>
	                  <input type="text" class="form-control" placeholder="" name="nama_depan" value="<?= $user->nama_depan; ?>">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Nama Belakang</label>
	                  <input type="text" class="form-control" placeholder="" name="nama_belakang" value="<?= $user->nama_belakang; ?>">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">Negara</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="negara" id="" class="form-control" name="negara">
                            <option value="IN">Indonesia</option>
		                  	<option value="FR">France</option>
		                    <option value="IT">Italy</option>
		                  </select>
		                </div>
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Alamat Lengkap</label>
	                  <input type="text" class="form-control" placeholder="" name="alamat" value="<?= $user->alamat_konsumen; ?>">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)" name="alamat_lengkap" value="">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Kota</label>
	                  <input type="text" class="form-control" placeholder="" name="kota" value="<?= $user->kota; ?>">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Kode Pos</label>
	                  <input type="text" class="form-control" placeholder="" name="kode_pos" value="">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">No Telephone</label>
	                  <input type="text" class="form-control" placeholder="" name="no_telp" value="<?= $user->no_telepon_konsumen; ?>">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email</label>
	                  <input type="text" class="form-control" placeholder="" name="email" value="<?= $user->email; ?>">
	                </div>
                </div>
                <div class="w-100"></div>
	            </div>
					</div>
					<div class="col-xl-5">
                <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Total Pembelian</h3>
	          			<p class="d-flex">
    						<span>Subtotal</span>
    						<span>Rp. <?= $checkout->jumlah_harga ?>.00</span>
                            <input type="hidden" name="jumlahbayar" value="<?= $checkout->jumlah_harga ?>">
                            <input type="hidden" name="jumlahbarang" value="<?= $checkout->jumlah_item?>">
    					</p>
    					<p class="d-flex">
    						<span>Ongkos Kirim</span>
    						<span>Rp. 0.00</span>
    					</p>
    					<!-- <p class="d-flex">
    						<span>Diskon</span>
    						<span>Rp. 0.00</span>
    					</p> -->
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>Rp. <?= $checkout->jumlah_harga ?>.00</span>
    					</p>
					</div>
	          	</div>
	          	<div class="col-md-12">
	          		<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Jenis Pembayaran</h3>
						<div class="form-group">
							<div class="col-md-12">
								<div class="radio">
								   <label><input type="radio" name="jenis_pembayaran" value="1" class="mr-2"> Transfer Bank</label>
								</div>
							</div>
						</div>
                        <div class="form-group">
							<div class="col-md-12">
								<div class="radio">
								   <label><input type="radio" name="jenis_pembayaran" value="2" class="mr-2"> Kartu Debit</label>
								</div>
							</div>
						</div>
                        <div class="form-group">
							<div class="col-md-12">
								<div class="radio">
								   <label><input type="radio" name="jenis_pembayaran" value="3" class="mr-2"> Paypal</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<div class="radio">
								   <label><input type="radio" name="jenis_pembayaran" value="4" class="mr-2"> Go-pay</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<div class="checkbox">
								   <label><input type="checkbox" value="" class="mr-2" name="setuju">Saya telah membaca dan menerima syarat dan ketentuan</label>
								</div>
							</div>
						</div>
                        <!-- <a href="#"class="btn btn-primary py-3 px-4">Pesan Sekarang</a> -->
						<p><input type="submit" class="btn btn-primary py-3 px-4" value="Pesan Sekarang"></p>
					</div>
                </form><!-- END -->
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
