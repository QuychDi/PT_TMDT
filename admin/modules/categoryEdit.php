<?php
	require('../../config/config.php');

	$id = $_GET['id'];
	$name = $_POST['category'];
	// $categoryState = $_POST['categoryState'];

	$sql="UPDATE `loaisp` SET `LOAISP_TEN` = '".$name."' WHERE `LOAISP_MA` = $id ";

	$result = $mysqli -> query($sql);

	header("location: http://localhost/TMDT/admin/index.php?menu=quanlydanhmuc");

	$mysqli->close();
?>