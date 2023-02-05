<?php
	require('../../config/config.php');

	$state = $_GET['state'];

	$id = $_POST['btnHandleMem'];

	$sql="UPDATE `taikhoan` SET `TK_TRANGTHAI` = $state WHERE `TV_MA` = $id "; 

	$result = $mysqli -> query($sql);

	header("Location: {$_SERVER["HTTP_REFERER"]}");

	$mysqli->close();
?>