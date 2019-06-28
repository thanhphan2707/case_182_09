<?php
if (isset($_POST['Ten'])){ 
   $Ten = $_POST['Ten'];
   $ThuTu = $_POST['ThuTu'];
   $UrlHinh = $_POST['HinhAnh'];
   $DanhGia = $_POST['DanhGia'];
   $qt->LoaiSP_Them($Ten, $ThuTu, $UrlHinh,$DanhGia);
   echo "<script>document.location='index.php?p=loaitin_ds';</script>";
   exit();
}
?>


<style>
.form-group .form-line {border-bottom:none}
.form-group .form-control {padding:3px; border:1px solid #999}
.form-group .form-line.abc {padding-top:5px;}
</style>
<div class="row clearfix">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 center-block" style="float:none">
                    <div class="card">
                        <div class="header">
                            <h2>
                                THÊM LOẠI SẢN PHẨM
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form class="form-horizontal" method="post" action="">
                                <div class="row clearfix">
                                    <div class="col-sm-2 form-control-label">
                                        <label for="Ten">Tên</label>
                                    </div>
									<!-- Nhập tên input -->
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" id="Ten" name="Ten" class="form-control" placeholder="Nhập tên loại sản phẩm"  maxlength="20" minlength="3" required >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
								<div class="row clearfix">
									<div class="col-sm-2 form-control-label">
									<label for="ThuTu">Thứ tự</label>
									</div>
									<div class="col-sm-9">
									   <div class="form-group">
										  <div class="form-line">
											 <input type="text" id="ThuTu" name="ThuTu" class="form-control" placeholder= "Nhập thứ tự" required min="1" max="1000">
										  </div>
									   </div>
									</div>
								</div>
								<div class="row clearfix">
									<div class="col-sm-2 form-control-label">
										<label for="Hinhanh">Hình ảnh</label>
									</div>
									<div class="col-sm-9">
									   <div class="form-group">
										  <div class="form-line">
											 <input type="text" id="HinhAnh" name="HinhAnh" class="form-control" placeholder= "Nhập url hình ảnh" required min="1" max="1000">
										  </div>
									   </div>
									</div>
								</div>
								<div class="row cleafix">
									<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12"> 
										<div class="col-sm-3 form-control-label">
										<label for="Hinhanh">Đánh giá</label>
									</div>
										<div class="col-sm-9">
									   <div class="form-group">
											<div class="form-line">
									<select class="form-control show-tick" name="DanhGia" id="idTL">
									   <option value="0">-- Chọn đánh giá --</option>
									   <option value="1">1</option>
										 <option value="2">2</option>
										 <option value="3">3</option>
										 <option value="4">4</option>
										 <option value="5">5</option>
									</select>
											</div>
									 	</div>
										</div>	 
									</div>
								</div>
								
							<!--<div class="row clearfix">
								<div class="col-sm-3 form-control-label">
								   <label>Thể loại</label>
								</div>
								<div class="col-sm-9">
								   <div class="form-group">
									  <div class="form-line">
										  <?php /*$listTL= $qt->ListTheLoai();*/?>
									  <select class="form-control show-tick" name="idTL" id="idTL">
										 <option value="0">-- Chọn Thể loại --</option>
										  <?php /*while ($r = $listTL->fetch_assoc()) { */?>
										 <option value="<?php /*$r['idTL']?>"> <?=$r['TenTL']*/?> </option>
										  
									  </select>                                               
									  </div>
								   </div>
								</div>
								</div>-->

                                
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">THÊM LOẠI SẢN PHẨM</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>