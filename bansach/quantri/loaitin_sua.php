
<?php
	$row=null;
	 $idLSP=$_GET['idLSP'];
	 settype($idLSP,"int");
	 $kq= $qt->LoaiSP_ChiTiet($idLSP);
	 if($kq) $row= $kq->fetch_assoc();
	if(isset($_POST['Ten'])){
		$Ten=$_POST['Ten'];
		$ThuTu=$_POST['ThuTu'];
		$HinhAnh=$_POST['HinhAnh'];
		$DanhGia=$_POST['DanhGia'];
		$qt->LoaiSP_Sua($idLSP,$Ten,$ThuTu,$HinhAnh,$DanhGia);
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
                                CHỈNH SỬA LOẠI SẢN PHẨM
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form class="form-horizontal" method="post" action="">
                                <div class="row clearfix">
                                    <div class="col-sm-2 form-control-label">
                                        <label for="Ten">Tên</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" id="Ten" name="Ten" class="form-control" placeholder="Nhập tên loại tin" maxlength="20" minlength="3" required  value="<?=$row['Ten']?>">
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
											 <input type="text" id="ThuTu" name="ThuTu" class="form-control" placeholder="Nhập thứ tự" required min="1" max="1000"  value="<?=$row['ThuTu']?>">
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
											 <input type="text" id="HinhAnh" name="HinhAnh" class="form-control" placeholder= "Nhập url hình ảnh" required min="1" max="1000" value="<?= $row['UrlHinh']?>">
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
									<select class="form-control show-tick" name="DanhGia" id="idTLSP">
									   <option value="0">-- Chọn đánh giá --</option>
										<?php for($i=1;$i<=5;$i++){ 
										if($row['DanhGia']==$i){
										?>
									   <option value="<?= $row['DanhGia']?>" selected><?= $i?></option>
										<?php }else { ?>
										 <option value="<?= $i?>"><?= $i?></option>
										<?php }}?>
									</select>
											</div>
									 	</div>
										</div>	 
									</div>
								</div>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">CẬP NHẬT LOẠI SẢN PHẨM</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>