<?php $kq=$qt->SPSale();?>

<div class="col-lg-8 col-md-8">
                            <div class="slider-area pt-sm-30 pt-xs-30">
                                <div class="slider-active owl-carousel">
                                    <!-- Begin Single Slide Area -->
									<?php 
									while($rowkq=$kq->fetch_assoc()){
									?>
                                    <div class="single-slide align-center-left animation-style-01 bg-1" style="background-image: url(<?= $rowkq['UrlHinh']?>)">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Giá giảm sốc <span>-20% Off</span> Tuần này</h5>
                                            <h2><?= $rowkq['TenSP']?></h2>
                                            <h3>Chỉ với giá<span><?= $rowkq['Gia']?></span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="index.php?p=details">Mua ngay nào</a>
                                            </div>
                                        </div>
                                    </div><?php }?>
									
                                    
                                </div>
                            </div>
                        </div>