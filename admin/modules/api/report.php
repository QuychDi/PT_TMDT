<?php
	require('../../../config/config.php');
	if (isset($_GET['noidung'])){
		$sql="SELECT DISTINCT thanhvien.TV_TEN, taikhoan.TK_TRANGTHAI, baocao.TV_MA as TVBC_MA, baocao.BC_THOIDIEM, baocao.BC_NOIDUNG, baocao.BC_THOIDIEM, baocao.BC_TRANGTHAI, sanpham.SP_MA, sanpham.TV_MA, sanpham.SP_TRANGTHAI 
									FROM (((baocao INNER JOIN thanhvien ON baocao.TV_MA = thanhvien.TV_MA)
												INNER JOIN  sanpham ON baocao.SP_MA = sanpham.SP_MA) 
												INNER JOIN  taikhoan ON sanpham.TV_MA = taikhoan.TV_MA) 
												WHERE baocao.BC_NOIDUNG LIKE '%".$_GET['noidung']."%'";
	} else {
		if (isset($_GET['state'])){
			$sql="SELECT DISTINCT thanhvien.TV_TEN, taikhoan.TK_TRANGTHAI, baocao.TV_MA as TVBC_MA, baocao.BC_THOIDIEM, baocao.BC_NOIDUNG, baocao.BC_THOIDIEM, baocao.BC_TRANGTHAI, sanpham.SP_MA, sanpham.TV_MA, sanpham.SP_TRANGTHAI 
									FROM (((baocao INNER JOIN thanhvien ON baocao.TV_MA = thanhvien.TV_MA)
												INNER JOIN  sanpham ON baocao.SP_MA = sanpham.SP_MA) 
												INNER JOIN  taikhoan ON sanpham.TV_MA = taikhoan.TV_MA) 
												WHERE baocao.BC_TRANGTHAI = ".$_GET['state']."";
		}
		
		else $sql="SELECT DISTINCT thanhvien.TV_TEN, taikhoan.TK_TRANGTHAI, baocao.TV_MA as TVBC_MA, baocao.BC_THOIDIEM, baocao.BC_NOIDUNG, baocao.BC_THOIDIEM, baocao.BC_TRANGTHAI, sanpham.SP_MA, sanpham.TV_MA, sanpham.SP_TRANGTHAI 
									FROM (((baocao INNER JOIN thanhvien ON baocao.TV_MA = thanhvien.TV_MA)
												INNER JOIN  sanpham ON baocao.SP_MA = sanpham.SP_MA) 
												INNER JOIN  taikhoan ON sanpham.TV_MA = taikhoan.TV_MA)";
		
	}
	
	$result = $mysqli -> query($sql);
	$report = [];
	while ($row = $result->fetch_assoc()) {
        array_push($report, $row);
    }
    // print_r($report);
	header('Content-type: application/json');
    echo json_encode($report);
	 
	$mysqli->close();
?>