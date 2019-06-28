
        <div class="body-wrapper">
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li class="active">Giỏ hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Shopping Cart Area Strat-->
            <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form method="post" action="update-shopping-cart.php?action=update">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
											<!-- Tag tr chứa tiêu đề sản phẩm-->
                                            <tr>
                                                <th class="li-product-remove">Xóa</th>
                                                <th class="li-product-thumbnail">Ảnh</th>
                                                <th class="cart-product-name">Tên sản phẩm</th>
                                                <th class="li-product-price">Giá</th>
                                                <th class="li-product-quantity">Số lượng</th>
                                                <th class="li-product-subtotal">Thành tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <!-- Tag tr chứa thông tin sản phẩm-->
											<!-- Reset lại con trỏ về đầu mảng -->
											<?php 
											if(isset($_SESSION['DaySoLuong'])&&isset($_SESSION['DayTenSP'])&&isset($_SESSION['DayDonGia'])&&isset($_SESSION['DayHinhAnh'])){
												reset($_SESSION['DaySoLuong']);
												reset($_SESSION['DayTenSP']);
												reset($_SESSION['DayDonGia']);
												reset($_SESSION['DayHinhAnh']);
											?>
											<?php 
											$tongTien=$tongSoLuong=0;
											for($i=0;$i<count($_SESSION['DaySoLuong']);$i++){
											?>
											<?php //Lấy các dữ liệu qua session 
												
												$idSP=key($_SESSION['DaySoLuong']);
												$tenSP=current($_SESSION['DayTenSP']);
												$soLuong=current($_SESSION['DaySoLuong']);
												$donGia=current($_SESSION['DayDonGia']);
												$hinhAnh=current($_SESSION['DayHinhAnh']);
												$tien=$donGia*$soLuong;
												$tongTien+=$tien;
												$tongSoLuong+=$soLuong;
											?>
	
                                            <tr>
                                                <td class="li-product-remove" ><a href="update-shopping-cart.php?action=remove&idSP=<?=$idSP?>"><i class="fa fa-times" style="padding: 100% 40% "></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#"><img src="<?= $hinhAnh?>" alt="Li's Product Image" width="150px" height="150px"></a></td>
                                                <td class="li-product-name"><a href="#"><?= $tenSP?></a></td>
                                                <td class="li-product-price"><span class="amount"><?= number_format($donGia,0,",",".")?> VNĐ</span></td>
												  <td width="100px	">
                                 <input type="number" value="<?=$soLuong?>" class="form-control" name="soLuongArr[]" style="width:60px" >		 <input type="hidden" value="<?=$idSP?>" name="idSPArr[]">

                                                    
                                                </td>
                                                
                                                <td class="product-subtotal"><span class="amount"><?= number_format($tien,0,",",".")?> VNĐ</span></td>
												 
                                            </tr>
											
											<?php //Đưa con trỏ đến phần tử tiếp theo
												next($_SESSION['DaySoLuong']);
												next($_SESSION['DayTenSP']);
												next($_SESSION['DayDonGia']);
												next($_SESSION['DayHinhAnh']);
											?>
											<?php } //Đóng ngoặc cho for?>
											
                                        </tbody><?php }?>
										
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Mã giảm giá" type="text">
                                                <input class="button" name="apply_coupon" value="Thêm mã giảm" type="submit">
                                            </div>
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Cập nhật giỏ hàng" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Tổng giỏ hàng</h2>
                                            <ul>
												
                                                <li>Tổng cộng <span>
							<?php if(isset($tongTien)){?>
													<?= number_format($tongTien,0,",",".");?> VNĐ</span></li><?php } else {?>
												0 VNĐ</span></li>
												<?php }?>

                                            </ul>
                                            <a href="index.php?p=thanhtoan">Thanh toán</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->
         
        </div>
       