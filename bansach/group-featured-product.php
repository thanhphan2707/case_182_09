<?php 
	$kq=$qt->GetLogo();
?>
<div class="group-featured-product pt-60 pb-40 pb-xs-25">
                <div class="container">
                    <div class="row">
                        <!-- Begin Featured Product Area -->
						<?php while($rowkq=$kq->fetch_assoc()){?>
                        <div class="col-lg-4">
                            <div class="featured-product">
                                <div class="li-section-title">
                                    <h2>
                                        <span><?= $rowkq['Ten']?></span>
                                    </h2>
                                </div>
                                <div class="featured-product-active-2 owl-carousel feature">
                                    <div class="featured-product-bundle">
                                        <div class="row">
                                            <div class="group-featured-pro-wrapper">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img alt="<?= $rowkq['Ten']?>" src="<?= $rowkq['UrlHinh'];?>" style="width:120px;height: 200px">
                                                    </a>
                                                </div>
                                                <div class="featured-pro-content">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="product-details.html"><?= $rowkq['Ten']?></a>
                                                        </h5>
                                                    </div>
                                                    <div class="rating-box">
                                                        <ul class="rating">
															<?php for($i=1;$i<=$rowkq['DanhGia'];$i++){?>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <?php }?>
															<?php 
																$nostar=5-$rowkq['DanhGia'];
														for($i=1;$i<=$nostar;$i++){?>
                                                               <li class="no-star"><i class="fa fa-star-o"></i>
																</li>
																<?php }?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
							<?php }?>
                       
                    </div>
                </div>
            </div>