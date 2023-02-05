<?php
	require('../../config/config.php');

	$id = $_POST['btnDelete'];

	$sql="DELETE FROM `loaisp` WHERE `LOAISP_MA` = $id ";

	$result = $mysqli -> query($sql);

	header("location: http://localhost/TMDT/admin/index.php?menu=quanlydanhmuc");

	$mysqli->close();
?>