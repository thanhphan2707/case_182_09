
        <div class="body-wrapper">
            
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li class="active">Thanh toán</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Checkout Area Strat-->
            <div class="checkout-area pt-60 pb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <form method="post" action="index.php?p=thanhtoan2">
                                <div class="checkbox-form">
                                    <h3>Chi tiết hóa đơn</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Họ Tên<span class="required">*</span></label>
                                                <input placeholder="Nhập họ tên" type="text" id="hoten" name="hoten" required oninvalid="this.setCustomValidity('Mời bạn nhập họ tên ');" oninput="this.setCustomValidity('');">
                                            </div>
                                        </div>
                                       
										
										 
										
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ nhận hàng<span class="required">*</span></label>
                                                <input placeholder="Nhập địa chỉ nhận hàng" type="text" id="diachi" name="diachi" required oninvalid="this.setCustomValidity('Bạn cho biết địa chỉ nhé');" oninput="this.setCustomValidity('');">
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="col-md-8">
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ Email<span class="required">*</span></label>
                                                <input placeholder="Email có dạng: abc@gmail.com" type="email" id="email" name="email" required oninvalid="this.setCustomValidity('Bạn thân mến! Còn email nữa');" oninput="this.setCustomValidity('');">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="checkout-form-list">
                                                <label>Số điện thoại<span class="required">*</span></label>
                                                <input placeholder="Nhập số điện thoại" type="text"  id="sdt" name="sdt" required oninvalid="this.setCustomValidity('Bạn ơi số điện thoại của bạn chưa có.');" oninput="this.setCustomValidity('');" >
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
								<div>
									<a href="index.php?p=giohang" class="btn btn-default" style="color: #a5a5a5;background-color: buttonface"><i class="fa fa-chevron-left"></i>&nbsp;Xem lại giỏ hàng </a>
									<button type="submit" class="btn btn-template-main" style="float: right"> Qua bước kế &nbsp;<i class="fa fa-chevron-right"></i>
								</div>
                            </form>
                        </div>
                       <!-- Chỗ lấy checkout2-->
                    </div>
                </div>
            </div>
            <!--Checkout Area End-->
          
        </div>
       
        