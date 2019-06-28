<?php
require_once "goc.php";
class quantritin extends goc  {
	function XuLiDangNhap($username,$password){
		$u = $this->db->escape_string($username);
		$p = $this->db->escape_string($password);
		$p = md5($p);
		$sql="SELECT * FROM users WHERE username='$u' AND password ='$p'";
		$kq = $this->db->query($sql);
		if ($kq->num_rows==0) return FALSE;
		else return $kq->fetch_assoc();
	}
	function KiemTraDangNhap(){
		if(isset($_SESSION['login_id'])==false){
			$_SESSION['error']='Bạn chưa đăng nhập';
			$_SESSION['back']=$_SERVER['REQUEST_URI'];
			header('location:login.php');
			exit();
		}
		elseif(isset($_SESSION['login_level'])!=0 && isset($_SESSION['login_level'])!=1){
			$_SESSION['error']='Bạn không có quyền xem trang này';
			$_SESSION['back'] = $_SERVER['REQUEST_URI'];
			  header('location:login.php');
			  exit();
		}
		
	}
	
	/*function ListTin(){
		$sql="select HoTen from users ";
		$kq=$this->db->query($sql);
		if(!$kq) die ($this->db->error);
		return $kq;
	}*/
	function listLSP(){
		$sql="select idLSP,Ten from loaisanpham";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;
		
	}
	function listTLSPTrong1LSP($idLSP){
		$sql="select * from theloaisanpham where idLSP=$idLSP";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;	
	}
	/*Sản phẩm giảm giá*/
	function SPSale(){
		$sql="select * from sanpham where SaleOff!=0";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;	
	}
	/* Slider2 */
		/*Sản phẩm bán chạy nhất */
	function SPBanChay(){
		$sql="select * from sanpham order by SoLanMua DESC limit 0,6";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;	
	}
		/*Sản phẩm bán mới nhất */
	function SPMoiNhat(){
		$sql="select * from sanpham order by NgayCapNhat DESC limit 0,10";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;	
	}
	function GetTenLSP($idSP){
		settype($idSP,"int");
		$sql="select Ten from loaisanpham,sanpham,theloaisanpham WHERE loaisanpham.idLSP=theloaisanpham.idLSP AND theloaisanpham.idTLSP=sanpham.idTLSP AND sanpham.idSP=$idSP";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		
		return $kq;	
	}
	/* slider3*/
	function SPCoSan(){
		$sql="select * from sanpham where SoLuongTonKho > 0 order by SoLuongTonKho";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;	
	}
	/* listsp*/
	function ListSP($start,$limit){
		$sql="select * from sanpham order by SaleOff DESC limit $start,$limit ";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;	
	}
	function TotalRecords(){
		$sql="SELECT count(*) FROM sanpham";
		$kq=$this->db->query($sql);
		
		if(!$kq) die($this->db->error);
		return $kq;	
	}
	/* group-featured-product */
	function GetLogo(){
		$sql="select * from loaisanpham";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;	
	}
	/* menu - shop-list-right-side-bar*/
	function SPTrongTL($idTLSP,$start,$limit){
		$sql="SELECT * FROM sanpham WHERE idTLSP=$idTLSP ORDER BY idSP DESC limit $start,$limit";
		$kq = $this->db-> query($sql);
	    if(!$kq) die( $this-> db->error);	
		return $kq;	
	}

	function TotalRecords1($idTLSP){
		$sql="SELECT count(*) FROM sanpham WHERE idTLSP=$idTLSP";
		$kq=$this->db->query($sql);
		
		if(!$kq) die($this->db->error);
		return $kq;	
	}
	/* Cập nhật giỏ hàng*/
	function ChiTietSP($idSP){
		$sql="select * from sanpham where idSP=$idSP";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;
	}
	function CapNhatGioHang($action,$idSP){
		if(!isset($_SESSION['DayHinhAnh'])){
			$_SESSION['DayHinhAnh']=array();
		}
		if(!isset($_SESSION['DaySoLuong'])){
			$_SESSION['DaySoLuong']=array();
		}
		if(!isset($_SESSION['DayTenSP'])){
			$_SESSION['DayTenSP']=array();
		}
		if(!isset($_SESSION['DayDonGia'])){
			$_SESSION['DayDonGia']=array();
		}
		if($action=="add"){
			settype($idSP,"int");
			$sql="select * from sanpham where idSP=$idSP";
			$kq=$this->db->query($sql);
			$rowkq=$kq->fetch_assoc();
			$_SESSION['DayTenSP'][$idSP]=$rowkq['TenSP'];
			$_SESSION['DaySoLuong'][$idSP]+=1;
			$_SESSION['DayDonGia'][$idSP]=$rowkq['Gia'];
			$_SESSION['DayHinhAnh'][$idSP]=$rowkq['UrlHinh'];
		}
		if($action=="remove"){
			settype($idSP,"int");
			if($idSP<=0) return;
			unset($_SESSION['DayTenSP'][$idSP]);
			unset($_SESSION['DaySoLuong'][$idSP]);
			unset($_SESSION['DayDonGia'][$idSP]);
			unset($_SESSION['DayHinhAnh'][$idSP]);
		}
		if($action=="update"){
			$idSPArr=$_POST['idSPArr'];
			$soLuongArr=$_POST['soLuongArr'];
			for($i=0;$i<count($idSPArr);$i++){
				$idSP=$idSPArr[$i];
				settype($idSP,"int");
				if($idSP<=0) continue;
				$soluong=$soLuongArr[$i];
				settype($soluong,"int");
				if($soluong<=0) continue;
				$kq=$this->ChiTietSP($idSP);
				$rowkq=$kq->fetch_assoc();
				$_SESSION['DayTenSP'][$idSP]=$rowkq['TenSP'];
				$_SESSION['DaySoLuong'][$idSP]=$soluong;
				$_SESSION['DayDonGia'][$idSP]=$rowkq['Gia'];
				$_SESSION['DayHinhAnh'][$idSP]=$rowkq['UrlHinh'];
			}
		}
	}
	function LuuDonHang(&$thongbao,$idUser){
		
		$hoten=$this->db->escape_string(strip_tags($_SESSION['DonHang']['hoten']));
		$diachi=$this->db->escape_string(strip_tags($_SESSION['DonHang']['diachi']));
		$email=$this->db->escape_string(strip_tags($_SESSION['DonHang']['email']));	
		$sdt=$this->db->escape_string(strip_tags($_SESSION['DonHang']['sdt']));
		if(count($_SESSION['DaySoLuong'])==0) $thongbao[]="Bạn vẫn chưa chọn sản phẩm";
		if($hoten=="") $thongbao[] =" bạn chưa nhập họ tên";
		if($email=="") $thongbao[] =" bạn chưa nhập email";
		if($sdt=="") $thongbao[] =" bạn chưa nhập số điện thoại";
		if($diachi=="") $thongbao[] =" bạn chưa nhập địa chỉ";
		if(count($thongbao)>0) return;
		
		if(isset($_SESSION['DonHang']['idDH'])==false){
			$sql="insert into donhang set HoTenNguoiMua = '$hoten',DiaChi='$diachi',SDT=$sdt,ThoiDiemDatHang=now(),idUser=$idUser";
			$kq=$this->db->query($sql);
			if(!$kq) die($this->db->error);
			$_SESSION['DonHang']['idDH']=$this->db->insert_id;
		}
		else {
			$idDH=$_SESSION['DonHang']['idDH'];
			$sql="update donhang set HoTenNguoiMua = '$hoten',DiaChi='$diachi',SDT='$sdt',ThoiDiemDatHang=now(),idUser=$idUser where idDH=$idDH";
			$kq=$this->db->query($sql);
			if(!$kq) die($this->db->error);
			
		}
	}
	function LuuChitietDonHang(){
		
		$sosp=count($_SESSION['DaySoLuong']);
		if($sosp<=0) {echo "Không có sản phẩm";return;}
		if(isset($_SESSION['DonHang']['idDH'])==false){
			echo "Không có idDH"; return;
		}
		$idDH=$_SESSION['DonHang']['idDH'];
		$sql="delete from chitietdonhang where idDH=$idDH";
		$this->db->query($sql);
		reset($_SESSION['DaySoLuong']);
		reset($_SESSION['DayTenSP']);
		reset($_SESSION['DayDonGia']);
		
		for($i=0;$i<count($_SESSION['DaySoLuong']);$i++){
			$idSP= key($_SESSION['DaySoLuong']);
			$tenSP= current($_SESSION['DayTenSP']);
			$soLuong=current($_SESSION['DaySoLuong']);
			$donGia=current($_SESSION['DayDonGia']);
			$sql ="INSERT INTO chitietdonhang(idDH,idSP,TenSP,SoLuong,Gia)
				  VALUES ($idDH, $idSP,'$tenSP',$soLuong, $donGia)";	
			$this->db->query($sql);
			next($_SESSION['DaySoLuong']);
			next($_SESSION['DayTenSP']);
			next($_SESSION['DayDonGia']);
		}
	}
	/* Lấy các ảnh nhỏ phía dưới của single-product*/
	function GetImages($idSP){
		settype($idSP,"int");
		$sql="select * from chitietsanpham where idSP=$idSP";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db0>error);
		return $kq;
	}
	function TimKiem($tukhoa,$start,$limit){
		$tukhoa=$this->db->escape_string($tukhoa);
		//title LIKE '%$s%' OR keywords LIKE '%$s%' OR descr LIKE '%$s%'";
		$sql="select idSP,sanpham.DanhGia,TenSP,MoTa,NgayCapNhat,Gia,sanpham.UrlHinh,SoLuongTonKho,SaleOff,theloaisanpham.tenTLSP,Ten from loaisanpham ,sanpham,theloaisanpham where sanpham.idTLSP=theloaisanpham.idTLSP and sanpham.idLSP=loaisanpham.idLSP and (TenSP LIKE '%$tukhoa%' or MoTa LIKE '%$tukhoa%' or Ten LIKE '%$tukhoa%') LIMIT $start,$limit";
		$kq = $this->db->query($sql);
   	if(!$kq) die( "Không có sản phẩm nào được tìm thấy");
		return($kq);

	}
	function TotalRecords2($tukhoa){
		$sql="select count(*) from sanpham,theloaisanpham,loaisanpham where sanpham.idTLSP=theloaisanpham.idTLSP and sanpham.idLSP=loaisanpham.idLSP and (TenSP RegExp '$tukhoa' or MoTa RegExp '$tukhoa')";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		
		return $kq;	
	}
	function SPTrongLSP($idLSP,$start,$limit){
		$sql="SELECT * FROM sanpham WHERE idLSP=$idLSP ORDER BY idSP DESC limit $start,$limit";
		$kq = $this->db-> query($sql);
	    if(!$kq) die( $this-> db->error);	
		return $kq;	
	}
	function TotalRecords3($idLSP){
		$sql="SELECT count(*) FROM sanpham WHERE idLSP=$idLSP";
		$kq=$this->db->query($sql);
		
		if(!$kq) die($this->db->error);
		return $kq;	
	}
	function LuuYKien($idSP,$hoten,$noidung,$danhgia){
		$hoten=$this->db->escape_string(trim(strip_tags($hoten)));
		$noidung=$this->db->escape_string(trim(strip_tags($noidung)));
		settype($danhgia,"int");
		settype($idSP,"int");
		$sql="insert into ykien set idSP=$idSP,HoTen='$hoten',NoiDung='$noidung',danhgia=$danhgia";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;
	}
	function LayYKien($idSP){
		$sql="select * from ykien where idSP=$idSP";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;
	}
	function DangKy($HoTen,$Username,$Email,$DiaChi,$PassWord,$Sdt){
		$username=$this->db->escape_string(trim(strip_tags($Username)));
		$hoten=$this->db->escape_string(trim(strip_tags($HoTen)));
		$email=$this->db->escape_string(trim(strip_tags($Email)));
		$diachi=$this->db->escape_string(trim(strip_tags($DiaChi)));
		$sdt=$this->db->escape_string(trim(strip_tags($Sdt)));
		$password=md5($PassWord);
		$sql="insert into users set Username='$username', HoTen='$hoten',Email='$email',DiaChi='$diachi',PassWord='$password',DienThoai='$sdt',NgayDangKy=now()";
		$kq=$this->db->query($sql);
		if(!$kq) die($this->db->error);
		return $kq;
	}
}