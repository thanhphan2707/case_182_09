<?php 

	if(!$_POST){
	$sosp=count($_SESSION['DaySoLuong']);}else{
	if(isset($_POST['hoten'])) 
		$_SESSION['DonHang']['hoten']=$_POST['hoten'];
	
	if(isset($_POST['diachi'])) 
		$_SESSION['DonHang']['diachi']=$_POST['diachi'];
	if(isset($_POST['email'])) 
		$_SESSION['DonHang']['email']=$_POST['email'];
	if(isset($_POST['sdt'])) 
		$_SESSION['DonHang']['sdt']=$_POST['sdt'];}
	
?>
<div class="col-lg-12 col-12">
                            <div class="your-order">
                                <h3>Đơn đặt hàng của bạn</h3>
								  <form method="post" action="index.php?p=dathang">
                                <div class="your-order-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
												<th class="cart-product-total">Ảnh</th>
                                                <th class="cart-product-name">Sản phẩm</th>
												<th class="cart-product-name">Số lượng</th>
												<th class="cart-product-name">Giá</th>
                                                <th class="cart-product-total">Thành Tiền</th>
												
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php 
											reset($_SESSION['DaySoLuong']);
											reset($_SESSION['DayTenSP']);
											reset($_SESSION['DayDonGia']);
											reset($_SESSION['DayHinhAnh']);
											$tongTien=$tongSoLuong=0;
										for($i=0;$i<count($_SESSION['DaySoLuong']);$i++){
												$idSP= key($_SESSION['DaySoLuong']);
												$tenSP= current($_SESSION['DayTenSP']);
												$soLuong=current($_SESSION['DaySoLuong']);
												$donGia=current($_SESSION['DayDonGia']);
												$hinhAnh=current($_SESSION['DayHinhAnh']);
												$tien=$donGia*$soLuong;
												$tongTien+=$tien;
												$tongSoLuong+=$soLuong;
											?>
                                            <tr class="cart_item">
												<td class="li-product-thumbnail"><a href="#"><img  width="100px" height="70px" src="<?= $hinhAnh?>" ></a></td>
                                              <td class="cart-product-name"> <?= $tenSP?></td>
											  <td class="product-quantity"><strong> ×&nbsp;<?= $soLuong?></strong></td>
                                              <td class="cart-product-total"><span class="amount"><?= number_format($donGia,0,",",".")?></span> VNĐ</td>  
												<td class="cart-product-total"><span class="amount"><?= number_format($tien,0,",",".")?></span> VNĐ</td>  
                                            </tr>
											<?php //Đưa con trỏ đến phần tử tiếp theo
												next($_SESSION['DaySoLuong']);
												next($_SESSION['DayTenSP']);
												next($_SESSION['DayDonGia']);
												next($_SESSION['DayHinhAnh']);
											?>
											<?php }?>
                                          
                                        </tbody>
                                        <tfoot>
                                            
                                            <tr class="order-total">
												 
                                                <th colspan="2"><strong>Tổng cộng</strong> </th>
												<td><strong><span class="amount"><?= $tongSoLuong?></span></strong></td>
												<td></td>
                                                <td><strong><span class="amount"><?= number_format($tongTien,0,",",".") ?> VNĐ</span></strong></td>
												
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div id="accordion">
                                          <div class="card">
                                            <div class="card-header" id="#payment-1">
                                              <h5 class="panel-title">
                                                <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Direct Bank Transfer.
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                              </div>
                                            </div>
                                          </div>
                                          
                                          <div class="card">
                                            <div class="card-header" id="#payment-3">
                                              <h5 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  PayPal
                                                </a>
                                              </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                              <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div><br>
                                        <div class="order-button-payment">
											<div>
											<a href="index.php?p=thanhtoan" class="btn btn-default" style="color: #a5a5a5;background-color: buttonface;width: 300px"><i class="fa fa-chevron-left"></i>&nbsp;Trở lại</a>
											<button type="submit" class="btn btn-template-main" style="float: right;width: 300px"> Đặt hàng &nbsp;<i class="fa fa-chevron-right"></i>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
									</form>
                        </div>
		