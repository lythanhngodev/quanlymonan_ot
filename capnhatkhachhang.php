<?php 
include_once "db.php";
if (isset($_POST['btsua'])) { // nếu tồn tại nút btthem => thêm dữ liệu
	$makh = $_POST['makh'];
	$hokh = $_POST['hokh'];
	$tenkh = $_POST['tenkh'];
	$diachikh = $_POST['diachikh'];
	$chuoi = "UPDATE `khach_hang` SET `HO`='$hokh',`TEN`='$tenkh',`DIACHI`='$diachikh' WHERE MAKH = '$makh'";
	$kiemtrathem = dieuchinh($conn,$chuoi);
	if ($kiemtrathem>0) {
		// sửa thành công
		header("Location: http://localhost/kynangnghe/danhsach.php");
	}
	else{
		// sửa không thành công
		echo "Sửa không thành công <a href='danhsach.php'>Trở về</a>";
	}
}
 ?>