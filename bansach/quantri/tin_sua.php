<?php
$row=null;
$idSP = $_GET['idSP']; settype($idSP,"int");
$kq = $qt->SP_ChiTiet($idSP);
if ($kq) $row = $kq->fetch_assoc();
?>

<?php
if (isset($_POST['tensp'])){ 
   $tensp = $_POST['tensp'];
   $gia = $_POST['gia'];
   $soluongtonkho = $_POST['soluongtonkho'];
	 $saleoff = $_POST['saleoff'];
	 $mota = $_POST['mota'];
	$idTLSP=$_POST['idTLSP'];
	$UrlHinh=$_POST['hinhanh'];
	$ngay=$_POST['ngay'];
   $qt->SP_Sua($idTLSP,$tensp,$mota,$ngay,$gia,$UrlHinh,$soluongtonkho,$saleoff); 
   echo "<script>document.location='index.php?p=tin_ds';</script>";
   exit();
}
?>
<style>
.form-group {margin-bottom:15px;}
.form-group .form-line {border-bottom:none}
.form-group .form-control {padding:3px; border:1px solid #999;}
.form-group .form-line.abc {padding-top:5px;}
.form-group .form-control{ background: #337ab7; 
  border-radius: 6px; color:yellow; font-size:14px;letter-spacing:1px}
.form-group .form-control::placeholder {color:white}
#form_validation .col-md-4  {margin-bottom:0px;}
</style>
<div class="row clearfix">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="margin:auto; float:none">
                    <div class="card">
                        <div class="header">
                            <h2>CHỈNH SỬA TIN SẢN [PHẨM</h2>       
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST">
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tensp" required maxlength="100" minlength="10"  placeholder="Nhập tên sp" value="<?= $row['TenSP']?>"> 
                                       
                                    </div>
                                </div>
                             
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="gia" placeholder="Giá" required value="<?= $row['Gia']?>">
                                        
                                    </div>
                                </div>
							<div class="form-group form-float">                         
									<div class="form-line">
                                        <input type="text" class="form-control" name="soluongtonkho" placeholder="Số lượng hàng" required value="<?= $row['SoLuongTonKho']?>">
                                        
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="saleoff" placeholder="Giảm giá" required value="<?= $row['SaleOff']?>">
                                        
                                    </div>
                                </div>
														
								<div class="form-group form-float "> 
									<div class="form-line">
										<input type="text" name="hinhanh" id="hinhanh" class="form-control" onclick="selectFileWithCKFinder('hinhanh')" placeholder="Địa chỉ hình của sản phẩm" value="<?= $row['UrlHinh']?>">
									</div> 
								</div>
								<div class="row cleafix">
								  <div class="col-md-6">
									 <div class="form-group form-float">
									 <div class="form-line">
									 <input  type="text" class=" datepicker form-control" name="ngay" placeholder="Ngày cập nhật" value="<?= $row['NgayCapNhat']?>">
									 </div>
									 </div>
								  </div>
								</div>
								<div class="row cleafix">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
									<div class="form-line">
									<select class="form-control show-tick" name="idLSP" id="idLSP">
										
							<option value="0">--Chọn loại sản phẩm --</option>
							<?php $kq=$qt->ListLoaiSP();
								while($rowkq=$kq->fetch_assoc()){
									if($row['idLSP']==$rowkq['idLSP']){
							?>
						<option value="<?= $rowkq['idLSP']?>" selected><?= $rowkq['Ten']?></option>
							<?php }else { ?>
										  <option value="<?=$rowkq['idLSP']?>"><?=$rowkq['Ten']?></option>
										  <?php } }?> 
									</select>
									</div> 
								</div>
									
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> <div class="form-line">
										<?php $listTLSP= $qt->TheLoaiSPTrongLoaiSP($row['idLSP']);?>
									<select class="form-control show-tick" name="idTLSP" id="idTLSP">
										<option value="0">-- Chọn thể loại sản phẩm--</option>
										<?php while ( $r = $listTLSP->fetch_assoc() ) { ?>
										  <?php if( $r['idTLSP'] == $row['idTLSP'] ) { ?>
										  <option value="<?=$r['idTLSP']?>" selected><?=$r['TenTLSP']?></option>
										  <?php } else { ?>
										  <option value="<?=$r['idTLSP']?>"><?=$r['TenTLSP']?></option>
										  <?php } //if?>
									   <?php } //while?>
									</select>

									</div> </div>
								
							</div>
								
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="mota" cols="30" rows="5" class="form-control no-resize" placeholder="Nội dung mô tả sản phẩm" ><?= $row['MoTa']?></textarea>
                                        
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">CẬP NHẬT TIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<script>
$(document).ready(function(e) {   
	$("#idLSP").change(function(){
		var idLSP=$(this).val();
		$("#idTLSP").load("news_layloaitin.php?idLSP="+ idLSP);
	});
});
</script>


<script src="plugins/ckeditor/ckeditor.js"></script> <!--Có thể chèn trực tiếp từ net-->
<script>
$(document).ready(function(e) {   
    CKEDITOR.replace('mota',
	{language:'vi', skin:'kama',
	filebrowserImageBrowseUrl:'plugins/ckfinder/ckfinder.html?Type=Images',
	filebrowserImageUploadUrl : 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
	});
    CKEDITOR.config.height = 300;
});

</script>

<link href="plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
<script src="plugins/autosize/autosize.js"></script>
<script src="plugins/momentjs/moment.js"></script>
<script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script>
$(document).ready(function(e) {   
    $('.datepicker').bootstrapMaterialDatePicker({
        format: 'D/M/Y', 
        weekStart: 1, time: false
    });	
});
</script>

<script src="plugins/ckfinder/ckfinder.js"></script>

<script>
$("#form_validation").submit(function(){
      if ($("#idTL").val()==0) {
         alert("Bạn ơi! Chưa chọn thể loại mà");return false;
      }
      if ($("#idLT").val()==0) {
            alert("Bạn ơi! Chưa chọn loại tin mà"); return false;
      }
}); 
</script>