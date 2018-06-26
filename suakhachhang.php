<?php 
	include_once "db.php";
	$makh = $_GET['makh'];
	$chuoi = "SELECT `MAKH`, `HO`, `TEN`, `DIACHI` FROM `khach_hang` WHERE `MAKH` = '$makh'";
	$thucthi = laydulieu($conn,$chuoi);
	$khachhang  = mysqli_fetch_assoc($thucthi);
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Khách hàng</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="capnhatkhachhang.php" method="POST">
		Mã khách hàng: <input type="text" name="makh" value="<?php echo $khachhang['MAKH'] ?>" readonly ><br>
		Họ: <input type="text" name="hokh" value="<?php echo $khachhang['HO'] ?>"><br>
		Tên: <input type="text" name="tenkh" value="<?php echo $khachhang['TEN'] ?>"><br>
		Địa chỉ: <input type="text" name="diachikh" value="<?php echo $khachhang['DIACHI'] ?>"><br>
		<input type="submit" name="btsua" value="Sửa khách hàng">
		<hr>
	</form>
</body>
</html>