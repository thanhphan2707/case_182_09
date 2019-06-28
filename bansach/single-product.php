<?php 
	if(isset($_POST['name'])){
		$hoten=$_POST['name'];
		$danhgia=$_POST['danhgia'];
		$noidung=$_POST['comment'];
		
		$idSP=$_POST['idSP'];
		$qt->LuuYKien($idSP,$hoten,$noidung,$danhgia);

	}
	
	if(isset($_GET['idSP'])){
		$idSP=$_GET['idSP'];
	}
	$kq1=$qt->chitietSP($idSP);
	$kq=$qt->SPBanChay() ;
	$kq2=$qt->LayYKien($idSP);
?> 

<div class="body-wrapper">
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li class="active">Chi tiết sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
	<!-- Phần giữa hiện thị sp - mua hàng-->
            <div class="content-wraper">
                <div class="container">
                    <div class="row single-product-area">
						<?php $row=$kq1->fetch_assoc();?>
                        <div class="col-lg-5 col-md-6">
                           <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
									<!--Hiển thị các ảnh liên quan -->
                                    <div class="lg-image">
                                        <a class="popup-img venobox vbox-item" href="<?= $row['UrlHinh']?>" data-gall="myGallery">
                                            <img src="<?= $row['UrlHinh']?>" alt="product image">
                                        </a>
                                    </div>
									<?php $kq3=$qt->GetImages($idSP);
									while($rowkq3=$kq3->fetch_assoc()){
									?>
                                    <div class="lg-image">
                                        <a class="popup-img venobox vbox-item" href="<?= $rowkq3['UrlHinh']?>" data-gall="myGallery">
                                            <img src="<?= $rowkq3['UrlHinh']?>" alt="product image">
                                        </a>
                                    </div>
									<?php }?>
                                </div>
								<!-- Các ảnh ở phía dưới-->
                                <div class="product-details-thumbs slider-thumbs-1">
									
									<?php $kq3=$qt->GetImages($idSP);
									while($rowkq3=$kq3->fetch_assoc()){
									?>
                                    <div class="sm-image"><img src="<?= $rowkq3['UrlHinh']?>" alt="product image thumb"></div>
									<?php }?>
                                    <div class="sm-image"><img src="<?= $row['UrlHinh']?>"></div>
									
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>
						

                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content pt-60">
                                <div class="product-info">
                                    <h2><?= $row['TenSP']?></h2>
									<?php 	$kq1=$qt->GetTenLSP($idSP);
													$rowkq1=$kq1->fetch_assoc()
																		?>
                                    <span class="product-details-ref"><?= $rowkq1['Ten']?></span>
                                    <div class="rating-box pt-20">
                                        <ul class="rating">				
											<?php for($i=1;$i<=$row['DanhGia'];$i++){?>
                                                 <li><i class="fa fa-star-o"></i></li>
											<?php }?>
											<?php 
												$nostar=5-$row['DanhGia'];
												for($i=1;$i<=$nostar;$i++){?>
                                               <li class="no-star"><i class="fa fa-star-o"></i></li>
											<?php }?>                 
                                        </ul>
                                    </div>
                                    <div class="price-box pt-20">
                                        <span class="new-price new-price-2">	<?php $giaMoi=$row['Gia']-$row['Gia']*$row['SaleOff']*0.01;?>
															<?= number_format($giaMoi) ?> VNĐ </span>
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                            <span><?= $row['MoTa']?>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="product-variants">
                                        <div class="produt-variants-size">
                                            <label>Chọn size</label>
                                            <select class="nice-select">
												<?php for($i=38;$i<=44;$i++){?>
                                                <option value="<?= $i?>" title="S" selected="selected"><?= $i?></option>
                                               <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="single-add-to-cart">
                                        <form action="update-shopping-cart.php?action=add&idSP=<?= $_GET['idSP']?>" class="cart-quantity" method="post">
                                            
                                            <button class="add-to-cart" type="submit">Chọn hàng</button>
                                        </form>
                                    </div>
                                   
                                    <div class="block-reassurance">
                                        <ul>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </div>
                                                    <p>Chính sách bảo mật </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-truck"></i>
                                                    </div>
                                                    <p>Giap hàng nhanh chóng</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-exchange"></i>
                                                    </div>
                                                    <p> Chính sách hoàn trả ( Trong vòng 2 ngày )</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="product-area pt-35">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                     
			<!-- Phần chuyển tab mô tả - nhận xét-->
		<li><a class="active" data-toggle="tab" href="#description"><span>Mô tả</span></a></li>
                                 
                                   <li><a data-toggle="tab" href="#reviews"><span>Các nhận xét</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
					<!-- Phần mô tả-->
                    <div class="tab-content">
                        <div id="description" class="tab-pane active show" role="tabpanel">
                            <div class="product-description">
                                <span><?= $row['MoTa']?></span>
                            </div>
                        </div>
                        <!-- Vùng hiển thị đã Được đánh giá-->
                        <div id="reviews" class="tab-pane" role="tabpanel">
                            <div class="product-reviews">
                                <div class="product-details-comment-block">
                                    <?php while($rowkq2=$kq2->fetch_assoc()){?> 
								
                                    <div class="comment-author-infos pt-25">
                                        <span>Tên:</span>
                                        <strong><?= $rowkq2['HoTen']?></strong>
                                    </div>
									<div class="comment-review">
                                        <span>Đánh giá:</span>
                                       <ul class="rating">
																
									<?php for($i=1;$i<=$rowkq2['DanhGia'];$i++){?>
                                            <li>
												<i class="fa fa-star-o"></i>
											</li>
									<?php }?>
									<?php 
										$nostar=5-$rowkq2['DanhGia'];
										for($i=1;$i<=$nostar;$i++){?>
                                             <li class="no-star">
												 <i class="fa fa-star-o"></i>
											</li>
									<?php }?>
                                        </ul>
                                    </div>
                                    <div class="comment-details">
                                        <h4 class="title-block">Nội dung bình luận:</h4>
                                        <p><?= $rowkq2['NoiDung']?></p>
                                    </div>
									<hr style="margin-bottom: 10px;margin-top: 0px;border: 1px solid #7C7272">
									<?php }?>
									
                                    <div class="review-btn">
                                        <a class="review-links" href="#" data-toggle="modal" data-target="#mymodal">Viết nhận xét của bạn:</a>
                                    </div>
                                    <!-- Vùng form bình luận-->
									
            <div class="modal fade modal-wrapper" id="mymodal" >
                 <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-body">
                          <h3 class="review-page-title">Viết nhận xét của bạn:</h3>
                          <div class="modal-inner-area row">
                              <div class="col-lg-6">
                                 <div class="li-review-product">
                                     <img src="<?= $row['UrlHinh']?>" width="300px" height="302px" alt="Li's Product">
                                     <div class="li-review-product-desc">
                                         <p class="li-product-name"><?= $row['TenSP']?></p>
                                        
                                         </div>
                                     </div>
                                  </div>
                           <div class="col-lg-6">
                               <div class="li-review-content">
                               <!-- Begin Feedback Area -->
                                   <div class="feedback-area">
                                       <div class="feedback">
                                           <h3 class="feedback-title">Phản hồi của bạn:</h3>
                                           <form action="index.php?p=chitiet&idSP=<?= $idSP ?>" method="post" name="nhanxet">
                                              <p class="your-opinion">
                                                <label>Đánh giá của bạn: </label>
                                            <span>
                                              <select class="star-rating" name="danhgia">
												  
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                 	<option value="3">3</option>
                                                   <option value="4">4</option>
                                                   <option value="5">5</option>
                                              </select>
                                            </span>
                                             </p>
											 
                                             <p class="feedback-form">
                                                  <label for="feedback">Nhận xét:</label>
                                              <textarea id="feedback" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                            </p>
                                            <div class="feedback-input">
                                              <p class="feedback-form-author">
                                              <label for="feedback">Tên:</label>
                                              <input  id="name" name="name" size="30" aria-required="true" type="text">
												  <input  id="idSP" name="idSP" size="30" aria-required="true" type="hidden" value="<?= $_GET['idSP']?>">
                                                 </p>
												<p class="feedback-form-author">
                                              
                                              
                                                 </p>
                                              
                                                   <div class="feedback-btn pb-15">
                                                   
                                                   <input type="submit" value="Gửi" style="background-color: black;color:white;font-weight: bold;font-size: 20px;cursor: pointer">
                                                   </div>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               <!-- Feedback Area End Here -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    <!-- end Vùng form bình luận--->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="product-area li-laptop-product pt-30 pb-50">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Những sản phẩm bán chạy :</span>
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
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            
          
        </div>

