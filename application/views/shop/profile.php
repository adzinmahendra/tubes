<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url()?>assets/images/bg_1.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
      	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Profil</span></p>
        <h1 class="mb-0 bread">Profil</h1>
      </div>
    </div>
  </div>
</div>
<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
			<div class="row">
				<div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
		              </a>
		              <div class="text d-block pl-md-4">
		                <h3 class="heading"><a href="#">Profil</a></h3>
		                <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                        <div class="sidebar-box ftco-animate">
                        	<h3 class="heading">Informasi Konsumen</h3>
                          <ul class="categories">
                            <li><a href="#">Nama Lengkap <span><?= $konsumen->nama_depan;?> <?= $konsumen->nama_belakang;?></span></a></li>
                            <li><a href="#">No. Telepon <span><?= $konsumen->no_telepon_konsumen?></span></a></li>
                            <li><a href="#">Kota <span><?= $konsumen->kota?></span></a></li>
                            <li><a href="#">Kode Pos <span><?= $konsumen->kode_pos?></span></a></li>
                          </ul>
                        </div>
		                <p><a href="<?php echo base_url('index.php/shop/editProfile')?>" class="btn btn-primary py-2 px-3">Edit</a></p>
		              </div>
		            </div>
		          </div>

				</div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Alamat Lengkap</h3>
              <p><?= $konsumen->alamat_konsumen?></p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
