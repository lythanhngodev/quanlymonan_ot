<?php
	// Kết nối
	$conn = @mysqli_connect('localhost','root','','qlmonan') or die ('Kết nối thất bại');
	mysqli_set_charset($conn,'utf8');
	function laydulieu($conn, $chuoi){
		$thucthi = mysqli_query($conn, $chuoi); // thực thi sql
		return $thucthi; // trả về kết quả
	}
	// Hàm insert, update, delete
	function dieuchinh($conn, $chuoi){
		$thucthi = mysqli_query($conn, $chuoi); // thực thi sql
		$kiemtra = mysqli_affected_rows($conn); // đếm số dòng đã thực thi
		return $kiemtra; // trả về kết quả nếu > 0 thì thành công ngược lại không thành công
	}
?>