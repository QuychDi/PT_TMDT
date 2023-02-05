<?php
	require('../../../config/config.php');
	if(isset($_GET['name'])){
		$sql="SELECT * FROM loaisp WHERE LOAISP_TEN LIKE '%".$_GET['name']."%'";
	} else {
		if(isset($_GET['id'])){
			$sql="SELECT * FROM loaisp WHERE LOAISP_MA = ".$_GET['id']."";
		}
		else $sql="SELECT * FROM loaisp";
	}

	$result = $mysqli -> query($sql);
	$category = [];
	while ($row = $result->fetch_assoc()) {
        array_push($category, $row);
    }
    // print_r($category);
	header('Content-type: application/json');
    echo json_encode($category);
	 
	$mysqli->close();
?>