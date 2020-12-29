<section class="ftco-section">
    <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <!-- <span class="subheading">Featured Products</span> -->
        <h2 class="mb-4">Produk Kami</h2>
        <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> -->
      </div>
    </div>
    </div>
    <div class="container">
        <div class="d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Cari Barang" id="keyword">
                <button type="button" class="btn btn-success" id="btn-search">Search</button>
                <a href="<?php echo base_url('index.php/shop'); ?>" class="btn btn-primary"><button type="button" class="btn btn-primary">Reset</button></a>
              </div>
            </form>
        </div>
    <br>
        <div class="row" id="view">
            <!-- <?php print_r($this->session->userdata()) ?> -->
            <?php $this->load->view('shop/find', array('barang'=>$barang));?>
        </div>
    </div>
</section>
