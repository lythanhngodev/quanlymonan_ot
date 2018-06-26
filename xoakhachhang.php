<?php 
include_once "db.php";
	$makh = $_GET['makh'];
	$chuoi = "DELETE FROM `khach_hang` WHERE `MAKH` = '$makh'";
	$kiemtraxoa = dieuchinh($conn,$chuoi);
	if ($kiemtraxoa>0) {
		// sửa thành công
		header("Location: http://localhost/kynangnghe/danhsach.php");
	}
	else{
		// sửa không thành công
		echo "Sửa không thành công <a href='danhsach.php'>Trở về</a>";
	}
 ?>