<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
<thead>
   <tr>
	   <th>idLSP</th> 
	   <th>Tên</th>  
	   <th>Thứ tự</th> 
	   <th>Hình ảnh</th>  
	   <th>Đánh giá</th>    
	   <th>Cập nhật/Xóa</th>
	</tr>
</thead>
<tbody>
<?php $kq = $qt->ListLoaiSP(); ?>
<?php while ($rowLSP = $kq->fetch_assoc() ) { ?>
<tr>
	<td><?=$rowLSP['idLSP']?></td>
	<td><?=$rowLSP['Ten']?></td>
	<td><?=$rowLSP['ThuTu']?></td>
	<td><?=$rowLSP['UrlHinh']?></td>
	<td><?=$rowLSP['DanhGia']?></td>
<td>
<a href="?p=loaitin_sua&idLSP=<?=$rowLSP['idLSP']?>" class="btn bg-blue waves-effect">Cập nhật</a> &nbsp;
<a href="loaitin_xoa.php?idLSP=<?=$rowLSP['idLSP']?>" class="btn bg-red waves-effect" onClick="return confirm('Xóa hả')">Xóa</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>


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
