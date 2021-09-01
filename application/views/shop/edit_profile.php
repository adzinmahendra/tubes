<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url()?>assets/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Edit Profil</span></p>
            <h1 class="mb-0 bread">Edit Profil</h1>
          </div>
        </div>
      </div>
    </div>
<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
			<div class="col-md-12 d-flex ftco-animate">
	            <div class="blog-entry align-self-stretch d-md-flex">
	              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
	              </a>
	              <div class="text d-block pl-md-4">
	                <h3 class="heading"><a href="#">Edit Profil Konsumen</a></h3>
	                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                    <div class="comment-form-wrap pt-5">
                        <form action="<?= base_url('index.php/shop/saveProfile'); ?>" method="post" class="p-5 bg-light">
                            <!-- <h3 class="mb-5">Edit Profil</h3> -->
                          <div class="form-group">
                            <label for="name">Name Lengkap*</label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" id="first_name" value="<?= $konsumen->nama_depan;?>" name="nama_depan">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" id="last_name" value="<?= $konsumen->nama_belakang;?>" name="nama_belakang">
                                </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="email">Nomor Telepon *</label>
                            <input type="text" class="form-control" id="phone" value="<?= $konsumen->no_telepon_konsumen?>" name="nomor_telepon">
                          </div>
                          <div class="form-group">
                            <label for="website">Kota</label>
                            <input type="text" class="form-control" id="city" value="<?= $konsumen->kota?>" name="kota">
                          </div>

                          <div class="form-group">
                            <label for="website">Kode Pos</label>
                            <input type="text" class="form-control" id="postalCode" value="<?= $konsumen->kode_pos?>" name="kode_pos">
                          </div>

                          <div class="form-group">
                            <label for="message">Alamat Lengkap</label>
                            <textarea name="alamat_lengkap" id="address" cols="30" rows="10" class="form-control"><?= $konsumen->alamat_konsumen?></textarea>
                          </div>
                          <div class="form-group">
                            <input type="submit" value="Simpan" class="btn py-3 px-4 btn-primary">
                          </div>

                        </form>
                    </div>
	              </div>
	            </div>
	          </div>
        </div>
      </div>
    </section> <!-- .section -->
