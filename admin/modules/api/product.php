<?php
	require('../../../config/config.php');
	if (isset($_GET['name'])){
		$sql="SELECT DISTINCT * FROM ((sanpham INNER JOIN thanhvien ON sanpham.TV_MA = thanhvien.TV_MA)
												INNER JOIN  loaisp ON sanpham.LOAISP_MA = loaisp.LOAISP_MA) 
												WHERE sanpham.SP_TEN LIKE '%".$_GET['name']."%'";
	} else {
		if (isset($_GET['state'])){
			$sql="SELECT DISTINCT * FROM ((sanpham INNER JOIN thanhvien ON sanpham.TV_MA = thanhvien.TV_MA)
												INNER JOIN  loaisp ON sanpham.LOAISP_MA = loaisp.LOAISP_MA) 
												WHERE sanpham.SP_TRANGTHAI = ".$_GET['state']."";
		}
		else {
			if(isset($_GET['id'])){
				$sql="SELECT DISTINCT * FROM ((sanpham INNER JOIN thanhvien ON sanpham.TV_MA = thanhvien.TV_MA)
												INNER JOIN  loaisp ON sanpham.LOAISP_MA = loaisp.LOAISP_MA) 
												WHERE sanpham.SP_MA = ".$_GET['id']."";
			}
			else $sql="SELECT DISTINCT * FROM ((sanpham INNER JOIN thanhvien ON sanpham.TV_MA = thanhvien.TV_MA)
												INNER JOIN  loaisp ON sanpham.LOAISP_MA = loaisp.LOAISP_MA)";
		}
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