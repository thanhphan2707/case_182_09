<?php
$row=null;
$idUser = $_GET['idUser']; settype($idUser,"int");
$kq = $qt->users_Chitiet($idUser);
if ($kq) $row = $kq->fetch_assoc();
?>

<?php
if (isset($_POST['idUser'])){ 
    $idUser = $_POST['idUser'];
    $HoTen = $_POST['HoTen'];
    $Username = $_POST['Username'];
    $GioiTinh = $_POST['GioiTinh'];
    $idGroup = $_POST['idGroup'];
	$Email=$_POST['Email'];
    $qt->users_sua($idUser, $Email, $HoTen, $Username,$GioiTinh,$idGroup);
    echo "<script>document.location='index.php?p=users_ds';</script>";
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
                                CHỈNH SỬA NGƯỜI DÙNG
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" method="post" action="">
                                <div class="row clearfix">
                                    <div class="col-sm-3 form-control-label">
                                        <label for="HoTen"> Họ Tên </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="HoTen" name="HoTen" class="form-control" placeholder="Nhập họ tên" required value="<?=$row['HoTen']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="row clearfix">
                                    <div class="col-sm-3 form-control-label">
                                        <label for="Email"> Email </label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="Email" name="Email" class="form-control" placeholder="Nhập Email" required value="<?=$row['Email']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-3 form-control-label">
                                        <label for="Username" > Username</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder=" Nhập Username"id="Username" name="Username" value="<?=$row['Username']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="row clearfix">
									<div class="col-sm-3 form-control-label">
									<label for="idUser">idUser</label>
									</div>
									<div class="col-sm-9">
									   <div class="form-group">
										  <div class="form-line">
											 <input type="text" id="idUser" name="idUser" class="form-control" placeholder= "Nhập idUser" value="<?=$row['idUser']?>">
										  </div>
									   </div>
									</div>
								</div>
									<div class="row clearfix">
											<div class="col-sm-3 form-control-label">
												<label>idGroup</label>
											</div>
											<div class="col-sm-9">
												<div class="form-group">
												 <div class="form-line abc">
												   <input type="radio" id="IG1" name="idGroup" <?=($row['idGroup']==1)?"checked":""?> value="1"> 
													 
											   <label for="IG1">Quản trị viên</label>
												   <input type="radio" id="IG0" name="idGroup" value="0" <?=($row['idGroup']==0)?"checked":""?>>
												   <label for="IG0">Thành viên</label>
												</div>
												</div>
											</div>
									</div>
								<div class="row clearfix">
								<div class="col-sm-3 form-control-label">
								   <label>Giới tính</label>
								</div>
								<div class="col-sm-9">
								   <div class="form-group">
									  <div class="form-line abc">
										<input type="radio" id="GT1" name="GioiTinh" <?=($row['GioiTinh']==1)?"checked":""?> value="1"> 
										<label for="GT1">Nam</label>
										<input type="radio" id="GT0" name="GioiTinh" value="0" <?=($row['GioiTinh']==0)?"checked":""?>>
										<label for="GT0">Nữ</label>
									  </div>
								   </div>
								</div>
							</div>

                                
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">CẬP NHẬT NGƯỜI DÙNG</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>