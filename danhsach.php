<!DOCTYPE html>
<html>
<head>
	<title>Dang sách</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	include_once "db.php";
	$chuoi ="SELECT `MAKH`, `HO`, `TEN`, `DIACHI` FROM `khach_hang`";
	$danhsach = laydulieu($conn,$chuoi);
	 ?>
	 <table border="1">
	 	<tr>
	 		<th>Mã khách hàng</th>
	 		<th>Họ</th>
	 		<th>Tên</th>
	 		<th>Địa chỉ</th>
	 		<th>Sửa</th>
	 		<th>Xoá</th>
	 	</tr>
	 	<?php while ($row = mysqli_fetch_assoc($danhsach)) { ?>
	 		<tr>
	 			<td><?php echo $row['MAKH'] ?></td>
	 			<td><?php echo $row['HO'] ?></td>
	 			<td><?php echo $row['TEN'] ?></td>
	 			<td><?php echo $row['DIACHI'] ?></td>
	 			<td><a href="suakhachhang.php?makh=<?php echo $row['MAKH'] ?>">Sửa</a></td>
	 			<td><a href="xoakhachhang.php?makh=<?php echo $row['MAKH'] ?>" onclick="return xoa()">Xoá</a></td>
	 		</tr>
	 	<?php } ?>
	 </table>
</body>
<script type="text/javascript">
	function xoa(){
		var hoi = confirm('Bạn có chắc xoá không?');
		if (!hoi) {
			return false;
		}
	}
</script>
</html>