<?php 
/*require("class/quantritin.php");
$qt=new quantritin;*/
if(isset($_GET['p'])){
	$p=$_GET['p'];}


$kq=$qt->TotalRecords(); 
$rowkq=$kq->fetch_assoc();
$totalRecord=$rowkq['count(*)'];
$current_Page = isset($_GET['pageNum']) ? $_GET['pageNum'] : 1;
$limit = 12;
$total_Page = ceil($totalRecord/ $limit);
if ($current_Page > $total_Page){
	$current_Page = $total_Page;
}
else if ($current_Page < 1){
	$current_Page = 1;
}
$start = ($current_Page - 1) * $limit;
								
$kq=$qt->ListSP($start,$limit);
?> 
<?php 
			if(isset($_GET['action'])&isset($_GET['idSP'])){$action=$_GET['action'];
			$idSP=$_GET['idSP'];
			$qt->CapNhatGioHang($action,$idSP);}
	if(isset($_GET['k'])){
			$k=$_GET['k'];
			if($k=="giohang") 

				require ("shopping-cart.php");
	
	} 
	else {?>
        <div class="body-wrapper">
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li class="active">Tất cả sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content-wraper pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php require "saleoff.php"?>
                            <div class="shop-top-bar mt-30">
                                <div class="shop-bar-inner">
                                    <div class="product-view-mode">
                                        <!-- shop-item-filter-list start -->
                                        <ul class="nav shop-item-filter-list" role="tablist">
                                            <li class="active" role="presentation" ><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                            
                                        </ul>
                                        <!-- shop-item-filter-list end -->
                                    </div>
                                    <div class="toolbar-amount">
                                        <span>Hiển thị sản phẩm </span>
                                    </div>
                                </div>
                                <!-- product-select-box start -->
                                <div class="product-select-box">
                                    <div class="product-short">
                                        <p>Sắp xếp theo: </p>
                                        <select class="nice-select">
                                            <option value="trending">Chọn...</option>
                                            <option value="sales">Tên(A - Z)</option>
                                            <option value="sales">Tên (Z - A)</option>
                                            <option value="rating">Giá (Thấp &gt; Cao)</option>
                                            <option value="date">Đánh giá </option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <!-- product-select-box end -->
                            </div>
                            <!-- shop-top-bar end -->
                            <!-- shop-products-wrapper start -->
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
								
                                        <?php require "listsp1.php";?>
									 <!-- Phân trang-->
									
                                   
								<div class="paginatoin-area">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <p>Hiển thị 1-8 sản phẩm của <?= $total_Page?> trang</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul class="pagination-box">
								<?php if ($current_Page > 1 && $total_Page > 1){?>
                                                    <li><a href="index.php?p=details&pageNum=<?=($current_Page-1)?>" class="Previous"><i class="fa fa-chevron-left"></i> Trước</a>
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
                                                    <li ><a href="index.php?p=details&pageNum=<?= $i?>"><?= $i?></a></li>
                                                    <?php }}?>
                                                    <li>
														<?php if ($current_Page < $total_Page && $total_Page > 1){?>
                                                      <a href="index.php?p=details&pageNum=<?=($current_Page+1)?>" class="Next"> Tiếp <i class="fa fa-chevron-right"></i></a><?php }?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
									<?php ?>
									
                                    
                                </div>
                            </div>
                            <!-- shop-products-wrapper end -->
                        </div>
                    </div>
                </div>
            </div>
