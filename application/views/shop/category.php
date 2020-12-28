<section class="ftco-section">
    <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <!-- <span class="subheading">Featured Products</span> -->
        <h2 class="mb-4">Kategori Produk Kami</h2>
        <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
      </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- <?php print_r($this->session->userdata()) ?> -->
            <?php foreach ($category as $b) {
                ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="<?= base_url()?>index.php/shop/isiKategori/<?= $b->id_kategori?>" class="img-prod"><img class="img-fluid" src="<?= base_url('assets_admin/img/gambar_barang/'); ?>" alt="Colorlib Template">
                        <!-- <span class="status">30%</span> -->
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="<?= base_url()?>index.php/shop/isiKategori/<?= $b->id_kategori?>"><?= $b->kategori;?></a></h3>
                        
                    </div>
                </div>
            </div>
            <?php
        } ?>

        </div>
    </div>
</section>
