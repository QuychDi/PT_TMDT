<?php
	require('../../config/config.php');
	session_start();

	$userName = $_POST['userName'];

	$password = $_POST['password'];

	$sql="SELECT * FROM taikhoan WHERE TK_TEN = '".$userName."' AND TK_MATKHAU = '".$password."' AND TK_LOAI=0";
	
	$result = $mysqli -> query($sql);
	
	if($result->num_rows == 1){
        $_SESSION['user'] = $userName;
        header("location: http://localhost/TMDT/admin/index.php?menu");
	} else {
        echo "Sai tên đăng nhập hoặc mật khẩu";
        header("refresh:1; url= http://localhost/TMDT/admin/modules/login.html");
    }
	$mysqli->close();
?>