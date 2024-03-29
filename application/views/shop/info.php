<?php foreach ($barang as $b) {
    ?>
<section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="<?= base_url('assets_admin/img/gambar_barang/')?><?= $b->gambar; ?>" class="image-popup"><img src="<?= base_url('assets_admin/img/gambar_barang/')?><?= $b->gambar; ?>" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?= $b->nama_barang ?></h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
							</p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">300 <span style="color: #bbb;">Sold</span></a>
							</p>
						</div>
    				<p class="price"><span>Rp. <?= number_format($b->harga_barang, 2, ",", ".");?> / <?= $b->satuan ?></span></p>
    				<p><?= $b->keterangan_barang  ?></p>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                  <select name="sumber" id="" class="form-control">
	                  	<option value="">-Pilih Sumber-</option>
                        <?php foreach ($sumber as $s): ?>
                            <option value="<?= $s->id_sumber?>"><?= $s->nama_sumber?> - <?= $s->alamat_sumber?></option>
                        <?php endforeach; ?>
	                  </select>
	                </div>
		            </div>
							</div>
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
	          	</div>
	          	<div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #000;">Tersedia <?= $b->jumlah;?> <?= $b->satuan;?></p>
	          	</div>
          	</div>
          	<p>
                <?php if ($b->jumlah == 0){ ?>
                    <a href="cart.html" class="btn btn-black py-3 px-5 disabled">Add to Cart</a>
                <?php }else {?>
                    <a href="<?= base_url()?>index.php/shop/addCart/<?= $b->id_barang?>" class="btn btn-black py-3 px-5">Add to Cart</a>
                <?php } ?>
            </p>
    			</div>
    		</div>
    	</div>
    </section>
<?php } ?>
