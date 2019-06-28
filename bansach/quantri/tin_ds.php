
<?php 
$kq = $qt->ListSP();
?>

<div class="container-fluid">
            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                QUẢN TRỊ TIN SẢN PHẨM
                            </h2>
							
							
							
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
							<thead> 
								<tr>
									<th>idSP/Ngay/Sl</th> 
									<th>Tên sp</th> 
									<th>Mô tả</th> 
									<th>Gia</th> 
									<th style="width: 70px">Hình ảnh</th> 
									<th>Số lần mua</th> 
									<th>Đánh giá</th> 
									<th>Giảm giá</th> 
									<th>Cập nhật/Xóa</th>
								</tr> 
								</thead>
							<tbody>
															
								<?php while ($rowkq = $kq->fetch_assoc() ) { ?>
							<tr>
							<td>
								<p>idSP: <?=$rowkq['idSP']?></p>
<!--						str_pad($rowTin['idTin'], 3, '0', STR_PAD_LEFT) </p>-->
							<p><?=date('d/m/Y',strtotime($rowkq['NgayCapNhat']))?></p>
							<p>SL: <?=$rowkq['SoLuongTonKho']?></p>
							</td>
							<td>
								<h4><?=$rowkq['TenSP']?> </h4>
							</td>
							<td>
								<p><?=$rowkq['MoTa']?></p>
							</td>
							<td>
								<p><?=$rowkq['Gia']?></p>
							</td>
							<td style="width: 70px">
								<p><?=$rowkq['UrlHinh']?></p>
							</td>
							<td >
								<p ><?=$rowkq['SoLanMua']?></p>
							</td>
							<td>
								<p><?=$rowkq['DanhGia']?></p>
							</td>
							<td>
								<p><?=$rowkq['SaleOff']?></p>
							</td>
							<td width="120">
								<p>
								<a href="?p=tin_sua&idSP=<?=$rowkq['idSP']?>" class="btn bg-blue waves-effect">Cập nhật</a> &nbsp;<br>
								<a href="tin_xoa.php?idSP=<?=$rowkq['idSP']?>" class="btn bg-red waves-effect" onClick="return confirm('Xóa hả')">Xóa</a>
								</p>
							</td>
							</tr>
							<?php } ?>
							</tbody></table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- JQuery DataTable Css -->
<link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- JQuery DataTable Css -->
<link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- Jquery DataTable Plugin Js -->
<script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<!-- Custom Js -->
<script src="js/pages/tables/jquery-datatable.js"></script>


<style>
div.dataTables_wrapper div.dataTables_filter input.form-control {border:1px solid #999;height:23px;}
div.dataTables_wrapper div.dataTables_length select.form-control {border:1px solid #999;height:23px;}
</style>