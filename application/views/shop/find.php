<?php foreach ($barang as $b) {
                ?>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="<?= base_url()?>index.php/shop/info/<?= $b->id_barang?>" class="img-prod"><img class="img-fluid" src="<?= base_url('assets_admin/img/gambar_barang/'.$b->gambar); ?>" alt="Colorlib Template">
                        <!-- <span class="status">30%</span> -->
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="<?= base_url()?>index.php/shop/info/<?= $b->id_barang?>"><?= $b->nama_barang;?></a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price">
                                    <!-- <span class="mr-2 price-dc">$120.00</span> -->
                                    <span class="price-sale">Rp. <?= $b->harga_barang;?></span>
                                </p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="<?= base_url()?>index.php/shop/info/<?= $b->id_barang?>" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <?php if ($b->jumlah == 0): ?>
                                    <a href="#" onclick="kosong()" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <script>
                                        function kosong() {
                                            alert("Maaf, Stok tidak tersedia");
                                        }
                                        </script>
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                <?php else: ?>
                                    <a href="<?= base_url()?>index.php/shop/addCart/<?= $b->id_barang?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                <?php endif; ?>
                                <a href="<?= base_url()?>index.php/shop/addWishlist/<?= $b->id_barang?>" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } ?>