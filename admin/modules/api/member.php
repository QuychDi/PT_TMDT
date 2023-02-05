<?php
// Arthur: Khanh
require('../../../config/config.php');

// Xử lý sql
function querySql($sql)
{
    $array = [];
    $result = $GLOBALS['mysqli']->query($sql);
    while ($row = $result->fetch_assoc()) {
        array_push($array, $row);
    }
    // print_r($category);
    header('Content-type: application/json');
    echo json_encode($array);
    $GLOBALS['mysqli']->close();
}

function queryUpdateInsert($sql)
{
    $result = $GLOBALS['mysqli']->query($sql);
    if($result) {
        echo 'success';
    } else {
        echo 'error';
    }
    $GLOBALS['mysqli']->close();
}

// Truy Vấn>>>>
// Lấy thành viên theo TV_MA
function getMemberByTV_MA($TV_MA) {
    $sql = "SELECT * FROM thanhvien, taikhoan WHERE thanhvien.TV_MA = taikhoan.TV_MA AND thanhvien.TV_MA = ".$TV_MA."";
    querySql($sql);
}

// Lấy tất cả thành viên
function getAllMember() {
    $sql = "SELECT * FROM thanhvien, taikhoan WHERE thanhvien.TV_MA = taikhoan.TV_MA AND taikhoan.TK_LOAI = 1";
    querySql($sql);
}

// Lấy thành viên theo Trạng thái
function getMemberByStatus($status) {
    $sql = "SELECT * FROM thanhvien, taikhoan WHERE thanhvien.TV_MA = taikhoan.TV_MA AND taikhoan.TK_TRANGTHAI = ".$status."";
    querySql($sql);
}

// Lấy thành viên theo nội dung search
function getMemberBySearch($search) {
    $search = trim($search);
    $sql = "SELECT * FROM thanhvien, taikhoan 
    WHERE thanhvien.TV_MA = taikhoan.TV_MA
    AND (thanhvien.TV_MA LIKE '%".$search."%'
    OR thanhvien.TV_TEN LIKE '%".$search."%'
    OR thanhvien.TV_NGAYSINH LIKE '%".$search."%'
    OR thanhvien.TV_SDT LIKE '%".$search."%'
    OR thanhvien.TV_DC LIKE '%".$search."%'
    OR thanhvien.TV_NGAYTHAMGIA LIKE '%".$search."%'
    OR thanhvien.EMAIL LIKE '%".$search."%'
    OR taikhoan.TK_TEN LIKE '%".$search."%')";
    querySql($sql);
}

// Cập nhập trạng thái thành viên
function updateStatusMember($TV_MA, $status) {
    $sql = "UPDATE taikhoan  SET TK_TRANGTHAI = ".$status." WHERE TV_MA = ".$TV_MA."";
    echo $sql;
    queryUpdateInsert($sql);
}

// Thực hiện yêu cầu
// lấy yêu cầu
$action = explode("/",$_SERVER['PHP_SELF'])[count(explode("/",$_SERVER['PHP_SELF'])) - 1];
switch ($action) {
    case 'getAllMember':
        getAllMember();
        break;
    case 'getMemberByTV_MA':
        if(isset($_GET['tv_ma'])) {
            getMemberByTV_MA($_GET['tv_ma']);
        }
        break;
    case 'getMemberByStatus':
        if(isset($_GET['tv_trangthai'])) {
            getMemberByStatus($_GET['tv_trangthai']);
        }
        break;
    case 'getMemberBySearch':
        if(isset($_GET['search'])) {
            getMemberBySearch($_GET['search']);
        }
        break;
    case 'updateStatusMember':
        if(isset($_POST['tv_ma']) && isset($_POST['trangthai'])) {
            updateStatusMember($_POST['tv_ma'], $_POST['trangthai']);
        }
        break;
    default:
        getAllMember();
        break;
    }
?>