<?php
require "goc.php";
class quantritin extends goc  
	{
		/*function thongtinuser($u, $p)//Ham lay thong tin user
			{
			$u = $this->db->escape_string($u);
			$p = $this->db->escape_string($p);
			$p = md5($p);
			$sql="SELECT * FROM users WHERE username='$u' AND password ='$p'";
			$kq = $this->db->query($sql);
			if ($kq->num_rows==0) return FALSE;
			else return $kq->fetch_assoc();
		}*/
	
		function checkLogin() // Ham checklogin 
			{
    if (isset($_SESSION['login_id'])== false)
		{
          $_SESSION['error'] = 'Bạn chưa đăng nhập';
          $_SESSION['back'] = $_SERVER['REQUEST_URI'];
           header('location:../login.php'); 
           exit();
     	}
		elseif ($_SESSION['login_level']!=1&&$_SESSION['login_level']!=0)
		{
          $_SESSION['error'] = 'Bạn không có quyền xem trang này';
          $_SESSION['back'] = $_SERVER['REQUEST_URI'];
          header('location:../login.php');
          exit();
        }
	}

		function ListLoaiSP() //Ham lay danh sach lsp
			{
		   $sql="SELECT * FROM loaisanpham ORDER BY ThuTu";
		   $kq = $this->db->query($sql) ;
		   if(!$kq) die( $this-> db->error);
		   return $kq; 
		}
		
		function LoaiSP_Them($Ten, $ThuTu,$UrlHinh,$DanhGia)
			{
			$Ten= $this->db->escape_string(trim(strip_tags($Ten)));
			settype($ThuTu,"int");
			$sql="INSERT INTO loaisanpham SET Ten='$Ten', ThuTu=$ThuTu,UrlHinh='$UrlHinh',DanhGia=$DanhGia";
			$kq= $this->db->query($sql) ;
			if(!$kq) die( $this-> db->error);
		}
	
		function LoaiSP_Xoa($idLSP)
			{
    		settype($idLSP,"int");
    		$sql="DELETE FROM loaisanpham WHERE idLSP=$idLSP";
			 $kq= $this->db->query($sql) ;
				 if(!$kq) die( $this-> db->error);		
		}
		function LoaiSP_ChiTiet($idLSP)
        	{
		   
			$sql="SELECT *
		   FROM loaisanpham 
		   WHERE idLSP=$idLSP";
		   $kq = $this->db->query($sql) ;
		   if(!$kq) die( $this-> db->error);
		   return $kq; 
		}
		
		function LoaiSP_Sua($idLSP, $Ten, $ThuTu,$HinhAnh,$DanhGia)
			{
			settype($idLSP,"int");
			$Ten= $this->db->escape_string(trim(strip_tags($Ten)));
			settype($ThuTu,"int");
			$sql="UPDATE loaisanpham SET Ten='$Ten',ThuTu=$ThuTu, UrlHinh='$HinhAnh',DanhGia='$DanhGia'  WHERE idLSP=$idLSP";
			$kq= $this->db->query($sql) ;
			if(!$kq) die( $this-> db->error);
		}
	function ListTheLoaiSP()
			{
		   $sql="SELECT *
		   FROM loaisanpham,theloaisanpham
		   WHERE loaisanpham.idLSP=theloaisanpham.idLSP
		   ORDER BY theloaisanpham.ThuTu";
		   $kq = $this->db->query($sql) ;
		   if(!$kq) die( $this-> db->error);
		   return $kq; 
		}
	
		function TheLoaiSP_Them($TenTLSP,$ThuTu,$idLSP)
			{
		$TenTLSP = $this->db->escape_string(trim(strip_tags($TenTLSP)));
		settype($ThuTu,"int");
		settype($idLSP,"int");
		$sql="INSERT INTO theloaisanpham SET tenTLSP='$TenTLSP', 
		ThuTu=$ThuTu,idLSP=$idLSP";
		$kq= $this->db->query($sql) ;
		if(!$kq) die( $this-> db->error);
	}

	function TheLoaiSP_Xoa($idTLSP)
			{
     settype($idTLSP,"int");
     $sql="DELETE FROM theloaisanpham WHERE idTLSP=$idTLSP";
	 $kq= $this->db->query($sql) ;
	 if(!$kq) die( $this-> db->error);		
	}
		
	function TheLoaiSP_ChiTiet($idTLSP)
			{
		   $sql="SELECT *
		   FROM theloaisanpham
		   WHERE idTLSP=$idTLSP";
		   $kq = $this->db->query($sql) ;
		   if(!$kq) die( $this-> db->error);
		   return $kq; 
		}
	function TheLoaiSP_Sua($idTLSP,$TenTLSP,$ThuTu,$idLSP){
			$TenTLSP= $this->db->escape_string(trim(strip_tags($TenTLSP)));
			settype($idTLSP,"int");	
			settype($idLSP,"int");
			settype($ThuTu,"int");
			$sql="UPDATE theloaisanpham SET tenTLSP='$TenTLSP',ThuTu=$ThuTu,idLSP=$idLSP WHERE idTLSP=$idTLSP";
			$kq= $this->db->query($sql) ;
			if(!$kq) die( $this-> db->error);
	}
	function ListSP(){
   		 $sql="select * from sanpham";
		 $kq = $this->db->query($sql) ;
		 if(!$kq) die( $this-> db->error);
		 return $kq; 
	}	
	
	function TheLoaiSPTrongLoaiSP($idLSP)
			{
				 $sql="SELECT idTLSP,TenTLSP FROM theloaisanpham WHERE idLSP=$idLSP ORDER BY ThuTu";
				 $kq = $this->db->query($sql) ;
				 if(!$kq) die( $this-> db->error);
				 return $kq; 
			}
	
	function SP_Them($idTLSP,$idLSP,$TenSP,$MoTa,$Ngay,$Gia,$HinhAnh,$SL,$SaleOff)		
			{
		  $TenSP= $this->db->escape_string(trim(strip_tags($TenSP)));
		  $MoTa= $this->db->escape_string(trim(strip_tags($MoTa)));
		  $arr = explode ("/", $Ngay);
		  if (count($arr)==3) $Ngay = $arr[2]."-".$arr[1]."-".$arr[0];
		  else $Ngay = date("Y-m-d");
		  settype($idTLSP,"int");
		  settype($idLSP,"int");
		  settype($Gia,"int");
		  $sql="INSERT INTO sanpham SET idTLSP=$idTLSP,idLSP=$idLSP,TenSP='$TenSP', MoTa='$MoTa',NgayCapNhat='$Ngay', UrlHinh = '$HinhAnh',SoLuongTonKho=$SL,Gia=$Gia,SaleOff=$SaleOff";
		  $kq= $this->db->query($sql) ;
		  if(!$kq) die( $this-> db->error);
		  return $kq;
 	}
	function SP_Xoa($idSP)
			{
		settype($idSP,"int"); $sql="DELETE FROM sanpham WHERE idSP=$idSP";
		 $kq= $this->db->query($sql) ;
		 if(!$kq) die( $this-> db->error);		
		}
	function SP_ChiTiet($idSP)
			{
		   $sql="SELECT * FROM sanpham WHERE idSP=$idSP";
		   $kq = $this->db->query($sql) ;
		   if(!$kq) die( $this-> db->error);
		   return $kq; 
		}
	function SP_Sua($idSP,$idTLSP,$TenSP,$MoTa,$Ngay,$Gia,$HinhAnh,$SL,$SaleOff)
			{
		   $TenSP= $this->db->escape_string(trim(strip_tags($TenSP)));
		  $MoTa= $this->db->escape_string(trim(strip_tags($MoTa)));
		  $arr = explode ("/", $Ngay);
		  if (count($arr)==3) $Ngay = $arr[2]."-".$arr[1]."-".$arr[0];
		  else $Ngay = date("Y-m-d");
		  settype($idTLSP,"int");
		  settype($idSP,"int");
		  $sql="UPDATE sanpham SET idTLSP='$idTLSP',TenSP='$TenSP', MoTa='$MoTa',NgayCapNhat='$Ngay', UrlHinh = '$HinhAnh',SoLuongTonKho='$SL',SaleOff='$SaleOff' WHERE idSP='$idSP'";
		  $kq= $this->db->query($sql) ;
		  if(!$kq) die( $this-> db->error);
	}

		function users_xoa($idUser)
			{
		settype($idUser,"int");
		$sql="DELETE FROM users WHERE idUser=$idUser";
		 $kq= $this->db->query($sql) ;
		 if(!$kq) die( $this-> db->error);		
	}

		function SoTinTrongTheLoai($idTL)
			{
			$sql="SELECT count(*) from tin WHERE idLT=$idTL";
			$kq = $this->db-> query($sql);	
			$row = $kq -> fetch_row();
			return $row[0];	
		    }
	
		function SoNguoiDung($idUser)
			{
			$sql="SELECT count(*) from users WHERE idUser=$idUser";
			$kq=$this->db->query($sql);
			$row=$kq->fetch_row();
			return $row[0];
		}
		
		function SoTinTrongLoaiTin($idLT)
			{
			$sql="SELECT count(*) from tin WHERE idLT=$idLT";
			$kq = $this->db-> query($sql);	
			$row = $kq -> fetch_row();
			return $row[0];	
		    }
	
		function SoYKienTin($idYKien)
			{
		 $sql = "SELECT count(*) from ykien WHERE idTin=$idYKien";
		$kq = $this -> db -> query($sql);
		$row = $kq -> fetch_row();
		return $row[0];
			}
	
		function ListUsers()
			{
   $sql="SELECT idUser,HoTen,Username,GioiTinh,Email,role FROM users ORDER BY idUser";
   $kq = $this->db->query($sql) ;
   if(!$kq) die( $this-> db->error);
   return $kq; 
	}
	
		function users_them($idUser, $Email, $HoTen, $Username,$GioiTinh,$idGroup)
			{
		$HoTen= $this->db->escape_string(trim(strip_tags($HoTen)));
		$Username= $this->db->escape_string(trim(strip_tags($Username)));
		$Email= $this->db->escape_string(trim(strip_tags($Email)));
		if ($HoTen=="")  $HoTen = $this->changeTitle($Username);
		$idUser= $this->db->escape_string(trim(strip_tags($idUser)));
		settype($GioiTinh,"int");
		settype($idGroup,"int");
		$sql="INSERT INTO users SET idUser=$idUser, HoTen= '$HoTen', Username='$Username', Email= '$Email', GioiTinh=$GioiTinh,idGroup=$idGroup";
		$kq= $this->db->query($sql) ;
		if(!$kq) die( $this-> db->error);
	}

		function users_Chitiet($idUser)
			{
		   $sql="SELECT idUser, Email, HoTen, Username, GioiTinh,idGroup 
		   FROM users  
		   WHERE idUser=$idUser";
		   $kq = $this->db->query($sql) ;
		   if(!$kq) die( $this-> db->error);
		   return $kq; 
		}
	
		function users_sua($idUser, $Email, $HoTen, $Username,$GioiTinh,$idGroup)
			{
				settype($idUser,"int");
				$HoTen= $this->db->escape_string(trim(strip_tags($HoTen)));
				$Username= $this->db->escape_string(trim(strip_tags($Username)));
				$Email= $this->db->escape_string(trim(strip_tags($Email)));
				if ($HoTen=="")  $HoTen = $this->changeTitle($Username);
				settype($GioiTinh,"int");
				settype($idGroup,"int");
			    $sql="UPDATE users SET idUser=$idUser,HoTen='$HoTen', 
			    Username='$Username', Email='$Email',GioiTinh=$GioiTinh, idGroup=$idGroup 
			    WHERE idUser=$idUser";
				$kq= $this->db->query($sql) ;
				if(!$kq) die( $this-> db->error);
			}
	
		function ListTags()
			{
			   $sql="SELECT idTag,lang,TenTag,ThuTu,AnHien FROM tags ORDER BY idTag";
			   $kq = $this->db->query($sql) ;
			   if(!$kq) die( $this-> db->error);
			   return $kq; 
			}
	
		function tags_them($idTag, $TenTag, $ThuTu,$AnHien,$lang)
			{
			$idTag= $this->db->escape_string(trim(strip_tags($idTag)));
			$TenTag= $this->db->escape_string(trim(strip_tags($TenTag)));
			$lang= $this->db->escape_string(trim(strip_tags($lang)));
			settype($ThuTu,"int");
			settype($AnHien,"int");
			$sql="INSERT INTO tags SET idTag=$idTag, TenTag= '$TenTag', ThuTu=$ThuTu, AnHien=$AnHien,lang='$lang'";
			$kq= $this->db->query($sql) ;
			if(!$kq) die( $this-> db->error);
		}
	
		function tags_ChiTiet($idTag)
			{
			   $sql="SELECT idTag, TenTag, ThuTu, AnHien,lang 
			   FROM tags  
			   WHERE idTag=$idTag";
			   $kq = $this->db->query($sql) ;
			   if(!$kq) die( $this-> db->error);
			   return $kq; 
			}
	
		function tags_sua($idTag, $TenTag, $ThuTu,$AnHien,$lang)
			{
			settype($idTag,"int");
			$idTag= $this->db->escape_string(trim(strip_tags($idTag)));
			$TenTag= $this->db->escape_string(trim(strip_tags($TenTag)));
			$lang= $this->db->escape_string(trim(strip_tags($lang)));
			settype($ThuTu,"int");
			settype($AnHien,"int");
			$sql="UPDATE tags SET idTag=$idTag, TenTag= '$TenTag', ThuTu=$ThuTu, AnHien=$AnHien,lang='$lang' 
			WHERE idTag=$idTag";
			$kq= $this->db->query($sql) ;
			if(!$kq) die( $this-> db->error);
		}
	
		function tags_xoa($idTag)
			{
				settype($idTag,"int");
				$sql="DELETE FROM tags WHERE idTag=$idTag";
				$kq= $this->db->query($sql) ;
				if(!$kq) die( $this-> db->error);		
			}
	
		function ListYKien()
			{
			   $sql="SELECT idYKien,idTin,NoiDung,Email,AnHien FROM ykien ORDER BY idYKien";
			   $kq = $this->db->query($sql) ;
			   if(!$kq) die( $this-> db->error);
			   return $kq; 
			}
		
		function ykien_them($idYKien, $idTin, $NoiDung,$AnHien,$Email)
			{
				$idYKien= $this->db->escape_string(trim(strip_tags($idYKien)));
				$idTin= $this->db->escape_string(trim(strip_tags($idTin)));
				$NoiDung= $this->db->escape_string(trim(strip_tags($NoiDung)));
				$Email= $this->db->escape_string(trim(strip_tags($Email)));
				settype($AnHien,"int");
				$sql="INSERT INTO ykien SET idYKien=$idYKien, idTin=$idTin, NoiDung='$NoiDung', AnHien=$AnHien,Email='$Email'";
				$kq= $this->db->query($sql) ;
				if(!$kq) die( $this-> db->error);
			}

		function YKien_ChiTiet($idYKien)
			{
			   $sql="SELECT idYKien,idTin,NoiDung,Email,AnHien 
			   FROM ykien  
			   WHERE idYKien=$idYKien";
			   $kq = $this->db->query($sql) ;
			   if(!$kq) die( $this-> db->error);
			   return $kq; 
			}
	
		function ykien_sua($idYKien, $idTin, $NoiDung, $AnHien, $Email)
			{
			settype($idYKien,"int");
			$idYKien= $this->db->escape_string(trim(strip_tags($idYKien)));
			$idTin= $this->db->escape_string(trim(strip_tags($idTin)));
			$NoiDung= $this->db->escape_string(trim(strip_tags($NoiDung)));
			$Email= $this->db->escape_string(trim(strip_tags($Email)));
			settype($AnHien,"int");
			 $sql="UPDATE ykien SET idYKien=$idYKien, idTin=$idTin, NoiDung='$NoiDung', AnHien=$AnHien,Email='$Email' 
			WHERE idYKien=$idYKien";
			$kq= $this->db->query($sql) ;
			if(!$kq) die( $this-> db->error);
		}
		
		function ykien_xoa($idYKien)
			{
				settype($idYKien,"int");
				$sql="DELETE FROM ykien WHERE idYKien=$idYKien";
				$kq= $this->db->query($sql) ;
				if(!$kq) die( $this-> db->error);		
			}



	}
?>
