<?php
	require('../../config/config.php');

	$name = $_GET['category'];

	$sql="INSERT INTO `loaisp` (`LOAISP_TEN`, `LOAISP_TRANGTHAI`) VALUES ('".$name."',1)";

	$result = $mysqli -> query($sql);

	header("location: http://localhost/TMDT/admin/index.php?menu=quanlydanhmuc");

	$mysqli->close();
?>