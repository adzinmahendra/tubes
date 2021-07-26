<div class="hero-wrap hero-bread" style="background-image: url(<?php echo base_url()?>assets/images/bg_1.jpg);">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url()?>index.php/Shop">Beranda</a></span> <span>Kontak</span></p>
        <h1 class="mb-0 bread">Kontak Kami</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section contact-section bg-light">
  <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="w-100"></div>
        <div class="col d-flex">
          <div class="info bg-white p-4">
              <p><span>Kontak:</span>
                  <div class="form-group">
                    <a class="btn-success py-3 px-5" href="https://wa.me/62XXXXXXXXXXX?text=Saya%20tertarik%20dengan%20Komoditas%20Anda%20yang%20dijual">Hubungi melalui whatsapp</a></p>
                  </div>
            </div>
        </div>
      </div>
    <div class="row d-flex mb-5 contact-info">
      <div class="w-100"></div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
            <p><span>Alamat:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
          </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
            <p><span>Telepon:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
          </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
          </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
            <p><span>Website</span> <a href="#">yoursite.com</a></p>
          </div>
      </div>
    </div>
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="<?= base_url();?>index.php/Shop/berikanSaran" method="post" class="bg-white p-5 contact-form">
          <?php if ($this->session->userdata('status') == 'login'): ?>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nama Anda" name="nama" value="<?= $this->session->userdata('nama') ?>">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email Anda" name="email" value="<?= $this->session->userdata('email') ?>">
              </div>
          <?php else: ?>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nama Anda" name="nama">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email Anda" name="email">
              </div>
          <?php endif; ?>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject" name="subject">
          </div>
          <div class="form-group">
            <textarea name="pesan" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
      <div class="col-md-6 d-flex">
        <div id="map" class="bg-white"></div>
      </div>
    </div>
  </div>
</section>
