                    <br><br>
                    <br><br>
                    <div class="shop-section section pt-60 pt-lg-40 pt-md-30 pt-sm-20 pt-xs-30  pb-70 pb-lg-50 pb-md-40 pb-sm-20 pb-xs-20">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="shop-product">
                                                <div id="myTabContent-2" class="tab-content">
                                                    <div id="grid" class="tab-pane fade active show">
                                                        <div class="product-grid-view">
                                                            <div class="row">
                                                                <?php foreach ($rumah as $r): ?>
                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span><font color="white"><?php echo $r->no_rumah ?></font></span>
                                                                            </div>
                                                                            <a href="#">
                                                                                <img src="<?= base_url() ?>foto_rumah/<?php echo "$r->gambar"; ?>" class="img-fluid" alt="">
                                                                                <img src="<?= base_url() ?>foto_rumah/<?php echo "$r->gambar"; ?>" class="img-fluid" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html"><?php echo $r->nama_rumah ?></a></h3>
                                                                            <p class="product-price"><span class="discounted-price"><?php echo "Rp "; echo $r->harga_rumah ?></span>
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                </div>
                                                                <?php endforeach ?>
                                                             </div>

                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                             </div>   
                        </div>
                    </div>    

