<?php 
function truyvantuoi(){
    include("config/config.php");
    $dotuoi = "SELECT*FROM DOTUOI";
    return $dotuoi;
};
function truyvanloai(){
    include("config/config.php");
    $loai = "SELECT*FROM LOAISP";
    return $loai;
};

?>