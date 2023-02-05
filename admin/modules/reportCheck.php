<?php
	require('../../config/config.php');

	$idsp = $_GET['idsp'];
	$idtv = $_GET['idtv'];

	$sql="UPDATE `baocao` SET `BC_TRANGTHAI` = 1 WHERE `TV_MA` = $idtv AND `SP_MA` = $idsp "; 

	echo $sql;

	$result = $mysqli -> query($sql);

	$mysqli->close();
?>