<?php 

$kq=$qt->SPBanChay() ;
$kq1=$qt->SPMoiNhat() ;


?>
<div class="product-area pt-55 pb-25 pt-xs-50">
                <div class="container">
					<!-- Phần tên chuyển-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Sản phẩm mới</span></a></li>
                                   <li><a data-toggle="tab" href="#li-bestseller-product"><span>Bán chạy nhất</span></a></li>
                                   
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
					<!-- Nội dung dưới-->
                    <div class="tab-content">
						<!--New Arrival-->
                        <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                   <?php while($rowkq1=$kq1->fetch_assoc()){?>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="index.php?p=chitiet&idSP=<?= $rowkq1['idSP']?>">
                                                    <img src="<?= $rowkq1['UrlHinh']?>" alt="<?= $rowkq1['TenSP']?>">
                                                </a>
                                                <span class="sticker">Mới </span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
					<?php 	$kq2=$qt->GetTenLSP($rowkq1['idSP']);
									while($rowkq2=$kq2->fetch_assoc()){
														?>
                                                        <h5 class="manufacturer">
															
                                                            <a href="index.php?p=chitiet&idSP=<?= $rowkq1['idSP']?>">
															<?= $rowkq2['Ten']?>
															</a>
                                                        </h5>
														<?php }?>
                                                        <div class="rating-box">
                                                            <ul class="rating">
																
					<?php for($i=1;$i<=$rowkq1['DanhGia'];$i++){?>
                                                                <li>
																	<i class="fa fa-star-o"></i>
																</li>
																<?php }?>
																<?php 
																$nostar=5-$rowkq1['DanhGia'];
														for($i=1;$i<=$nostar;$i++){?>
                                                               <li class="no-star"><i class="fa fa-star-o"></i>
																</li>
																<?php }?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="index.php?p=chitiet&idSP=<?= $rowkq1['idSP']?>" style="height: 38px;overflow: hidden"><?= $rowkq1['TenSP']?></a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">
															<?php $giaMoi=$rowkq1['Gia']-$rowkq1['Gia']*$rowkq1['SaleOff']*0.01;?>
															<?= number_format($giaMoi) ?> VNĐ</span>
                                                        <span class="old-price">
															<?php if($giaMoi!=$rowkq1['Gia']){?>
															<?= number_format($rowkq1['Gia']) ;?> 
															
															VNĐ<?php }?></span>
                                                        
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="update-shopping-cart.php?action=add&idSP=<?= $rowkq1['idSP']?>">Mua hàng</a></li>
                                                        
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
                        <div id="li-bestseller-product" class="tab-pane" role="tabpanel">
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
                                                
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                <?php 	$kq2=$qt->GetTenLSP($rowkq['idSP']);
									while($rowkq2=$kq2->fetch_assoc()){
														?>
														<h5 class="manufacturer">
                                                            <a href="index.php?p=chitiet&idSP=<?= $rowkq['idSP']?>"><?= $rowkq2['Ten']?></a>
                                                        </h5><?php }?>
                                                        <div class="rating-box">
                                                            <ul class="rating">
																<?php for($i=1;$i<=$rowkq['DanhGia'];$i++){?>
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
                        
                    </div>
                </div>
            </div>