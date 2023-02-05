<?php
include('../config/config.php');
	$capnhat_kh = "UPDATE thanhvien SET TV_TEN = '".$_POST['hotenKH']."', email = '".$_POST['emailKH']."', TV_DC = '".$_POST['diachiKH']."',
										TV_SDT = '".$_POST['sdtKH']."',TV_NGAYSINH = '".$_POST['ngaysinhKH']."'
	 WHERE TV_MA = '".$_COOKIE['MA_TV']."'";
				if(mysqli_query($mysqli, $capnhat_kh))
?>
<script>
alert("CẬP NHẬT THÀNH CÔNG");
	window.location ="?menu=taikhoan";
</script>