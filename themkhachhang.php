<?php 
include_once "db.php";
if (isset($_POST['btthem'])) { // nếu tồn tại nút btthem => thêm dữ liệu
	$makh = $_POST['makh'];
	$hokh = $_POST['hokh'];
	$tenkh = $_POST['tenkh'];
	$diachikh = $_POST['diachikh'];
	$chuoi = "INSERT INTO `khach_hang`(`MAKH`, `HO`, `TEN`, `DIACHI`) VALUES ('$makh','$hokh','$tenkh','$diachikh')";
	$kiemtrathem = dieuchinh($conn,$chuoi);
	if ($kiemtrathem>0) {
		// thêm thành công
		header("Location: http://localhost/kynangnghe/danhsach.php");
	}
	else{
		// thêm không thành công
		echo "Thêm không thành công <a href='khachhang.php'>Trở về</a>";
	}
}
 ?>