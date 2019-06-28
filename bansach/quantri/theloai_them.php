<?php
if (isset($_POST['TenTLSP'])){ 
    $TenTLSP = $_POST['TenTLSP'];
   
    $ThuTu = $_POST['ThuTu'];
    $idLSP=$_POST['idLSP'];
    $qt->TheLoaiSP_Them($TenTLSP,$ThuTu,$idLSP);
    echo "<script>document.location='index.php?p=theloai_ds';</script>";
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
                                THÊM THỂ LOẠI SẢN PHẨM
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form class="form-horizontal" method="post" action="">
                                <div class="row clearfix">
                                    <div class="col-sm-2 form-control-label">
                                        <label for="TenTL"> Tên  </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="TenTL" name="TenTLSP" class="form-control" placeholder="Nhập tên thể loại sản phẩm"  maxlength= "20" minlength="3" required>
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
								<div class="row cleafix">
									<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12"> 
										<div class="col-sm-3 form-control-label">
										<label for="idLSP">Chọn LSP</label>
									</div>
										<div class="col-sm-9">
									   <div class="form-group">
											<div class="form-line">
									<select class="form-control show-tick" name="idLSP" id="idLSP">
									   <option value="0">-- Chọn loại sp --</option>
										<?php 
										$kq=$qt->ListLoaiSP();
										while($rowkq=$kq->fetch_assoc()){?>
									   <option value="<?= $rowkq['idLSP']?>"><?= $rowkq['Ten']?></option>
										<?php }?>
									</select>
											</div>
									 	</div>
										</div>	 
									</div>
								</div>
								

                                
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">THÊM THỂ LOẠI</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>