<?php
	require('../../../config/config.php');

	$sql="SELECT COUNT(distinct sanpham.SP_MA) as SP_SL,
					COUNT(distinct thanhvien.TV_MA) as TV_SL
						FROM sanpham, thanhvien";

	$result = $mysqli -> query($sql);
	$sum = [];
	while ($row = $result->fetch_assoc()) {
        array_push($sum, $row);
    }
    // print_r($sum);
	header('Content-type: application/json');
    echo json_encode($sum);
	 
	$mysqli->close();
?>