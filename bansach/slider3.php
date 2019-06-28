<?php $kq=$qt->SPCoSan(); ?>
<section class="product-area li-laptop-product pt-60 pb-45 pt-sm-50 pt-xs-60">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Sản phẩm có sẵn</span>
                                </h2>
                               
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
									<?php while($rowkq=$kq->fetch_assoc()){?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                 <a href="index.php?p=chitiet&idSP=<?= $rowkq['idSP']?>">
                                                    <img src="<?= $rowkq['UrlHinh']?>" alt="<?= $rowkq['TenSP']?>">
                                                </a>
                                                <span class="sticker">Còn </span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
					<?php 	$kq1=$qt->GetTenLSP($rowkq['idSP']);
									while($rowkq1=$kq1->fetch_assoc()){
														?>
                                                        <h5 class="manufacturer">
															
                                                            <a href="index.php?p=chitiet&idSP=<?= $rowkq['idSP']?>">
															<?= $rowkq1['Ten']?>
															</a>
                                                        </h5>
														<?php }?>
                                                        <div class="rating-box">
                                                            <ul class="rating">
																
					<?php 
							
							for($i=1;$i<=$rowkq['DanhGia'];$i++){?>
                                                                <li>
																	<i class="fa fa-star-o"></i>
																</li>
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
                                                    <h4><a class="product_name" href="index.php?p=chitiet&idSP=<?= $rowkq['idSP']?>"><?= $rowkq['TenSP']?></a></h4>
                                                    <div class="price-box">
														<span class="new-price new-price-2">
															<?php $giaMoi=$rowkq['Gia']-$rowkq['Gia']*$rowkq['SaleOff']*0.01;?>
															<?= number_format($giaMoi) ?> VNĐ</span>
                                                        <span class="old-price">
															<?php if($giaMoi!=$rowkq['Gia']){?>
															<?= number_format($rowkq['Gia']) ;?> 
															
															VNĐ<?php }?></span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="update-shopping-cart.php?action=add&idSP=<?= $rowkq['idSP']?>">Mua hàng</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
									<?php }?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>