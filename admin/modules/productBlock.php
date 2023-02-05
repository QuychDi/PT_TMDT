<?php
	require('../../config/config.php');

	$state = $_GET['state'];

	$id = $_POST['btnHandle'];

	$sql="UPDATE `sanpham` SET `SP_TRANGTHAI` = $state WHERE `SP_MA` = $id "; 

	$result = $mysqli -> query($sql);

	header("Location: {$_SERVER["HTTP_REFERER"]}");

	$mysqli->close();
?>