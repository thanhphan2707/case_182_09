<div class="container-fluid">
            
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                QUẢN TRỊ THỂ LOẠI SẢN PHẨM
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>idTLSP</th>
                                            <th>Tên </th>
                                            <th>Thứ Tự</th>
                                            <th>LSP</th>
                                            <th>Cập nhật/Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										
										<?php $kq = $qt->ListTheLoaiSP(); ?>
										<?php while ($rowkq = $kq->fetch_assoc() ) { ?>

                                        <tr>
                                            <td><?=$rowkq['idTLSP']?></td>
                                            <td><?=$rowkq['tenTLSP']?></td>
                                            <td><?=$rowkq['ThuTu']?></td>
											<td><?= $rowkq['Ten']?></td>
											<td>
												<a href="?p=theloai_sua&idTLSP=<?=$rowkq['idTLSP']?>" class="btn bg-blue waves-effect">Cập nhật</a> &nbsp;
												<a href="theloai_xoa.php?idTLSP=<?=$rowkq['idTLSP']?>" class="btn bg-red waves-effect" onClick="return confirm('Xóa hả')">Xóa</a>
											</td>
                                        </tr>
										<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            
            <!-- #END# Exportable Table -->
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
