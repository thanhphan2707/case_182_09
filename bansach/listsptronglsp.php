<?php
$idLSP=$_GET['idLSP']; settype($idLSP, "int");  
$kq=$qt->TotalRecords3($idLSP); 
$rowkq=$kq->fetch_assoc();
$totalRecord=$rowkq['count(*)'];
$current_Page = isset($_GET['pageNum']) ? $_GET['pageNum'] : 1;
$limit = 3;
$total_Page = ceil($totalRecord/ $limit);
if ($current_Page > $total_Page){
	$current_Page = $total_Page;
}
else if ($current_Page < 1){
	$current_Page = 1;
}
$start = ($current_Page - 1) * $limit;
$kq = $qt->SPTrongLSP($idLSP,$start,$limit);								


?>

<?php if(isset($_GET['k'])){
		$k=$_GET['k'];
		if($k=="giohang") require("shopping-cart.php");} else {?>
<div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li class="active">Cửa hàng sách </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Content Wraper Area -->
            <div class="content-wraper pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-2 order-lg-1">
                            <!-- Begin Li's Banner Area -->
                            <div class="single-banner shop-page-banner">
                                <a href="#">
                                    <img src="images/bg-banner/2.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                            <!-- Li's Banner Area End Here -->
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar mt-30">
                                <div class="shop-bar-inner">
                                    <div class="product-view-mode">
                                        <!-- shop-item-filter-list start -->
                                        <ul class="nav shop-item-filter-list" role="tablist">
                                          
                                            <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                        </ul>
                                        <!-- shop-item-filter-list end -->
                                    </div>
                                    <div class="toolbar-amount">
                                        <span>Hiện thị sản phẩm </span>
                                    </div>
                                </div>
                                <!-- product-select-box start -->
                                <div class="product-select-box">
                                    <div class="product-short">
                                        <p>Sort By:</p>
                                        <select class="nice-select">
                                            <option value="trending">Relevance</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low &gt; High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- product-select-box end -->
                            </div>
                            <div class="shop-products-wrapper">
								
                                <div class="tab-content">
                                    
                                    <div id="list-view" class="tab-pane fade product-list-view active show" role="tabpanel">
                                        <div class="row">
                                            <div class="col">
                                                <?php while($rowkq=$kq->fetch_assoc()){?>
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="index.php?p=chitiet&idSP=<?= $rowkq['idSP']?>">
                                                                <img src="<?= $rowkq['UrlHinh']?>" alt="">
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
													<?php 	$kq1=$qt->GetTenLSP($rowkq['idSP']);
													while($rowkq1=$kq1->fetch_assoc()){
																		?>
                                                                    <h5 class="manufacturer">
                                                                        <a href="index.php?p=chitiet&idSP=<?= $rowkq['idSP']?>"><?= $rowkq1['Ten'] ?></a>
                                                                    </h5>
																	<?php }?>
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
                                                                    <span class="new-price"><?php $giaMoi=$rowkq['Gia']-$rowkq['Gia']*$rowkq['SaleOff']*0.01;?>
															<?= number_format($giaMoi) ?> VNĐ</span>
                                                                </div>
                                                                <p><?= $rowkq['MoTa']?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="update-shopping-cart.php?action=add&idSP=<?= $rowkq['idSP']?>">Chọn hàng</a></li>
                                                                <li></li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php }?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- phân trang -->
									  <div class="paginatoin-area">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p>Hiển thị 1-3 sản phẩm của <?= $total_Page?> trang</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="pagination-box">
								<?php if ($current_Page > 1 && $total_Page > 1){?>
                                                    <li><a href="index.php?p=sanpham&idTLSP=<?= $idTLSP?>&pageNum=<?=($current_Page-1)?>" class="Previous"><i class="fa fa-chevron-left"></i> Trước</a>
                                                    </li>
													<?php }?>
													<!-- Trang hiện tại thì thẻ span-->
													<?php for ($i = 1; $i <= $total_Page; $i++){
													 if ($i == $current_Page){
													?>
													 <li ><span style="font-weight: bold;color: red;"><?= $i?></span></li>
													<?php }
													else {
													?>
                                                    <li ><a href="index.php?p=sanpham&idTLSP=<?= $idTLSP?>&pageNum=<?= $i?>"><?= $i?></a></li>
                                                    <?php }}?>
                                                    <li>
														<?php if ($current_Page < $total_Page && $total_Page > 1){?>
                                                      <a href="index.php?p=sanpham&idTLSP=<?= $idTLSP?>&pageNum=<?=($current_Page+1)?>" class="Next"> Tiếp <i class="fa fa-chevron-right"></i></a><?php }?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><?php }?>
                            </div>
                            <!-- shop-products-wrapper end -->
                        </div>
                        
                    </div>
                </div>
            </div>
            
       
        
