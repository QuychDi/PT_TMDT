<?php 
	include("config/config.php");
    $user = $_POST['tendangnhap'];
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $UPDATE = "UPDATE TABLE THANHVIEN
                SET TV_TEN = '$name', TV_NGAYSINH = '$birthday', TV_SDT= '$phone_number',
                TV_DC = '$address', email = '$email'
                WHERE TV_MA = '".$_COOKIE['MA_TV']."'";
    $UPDATE_ACC = "UPDATE TABLE TAIKHOAN
                    SET TK_TEN = '$user'
                    WHERE TV_MA = '".$_COOKIE['MA_TV']."'";
    $qr1 = mysqli_query($mysqli, $UPDATE);
    $qr1 = mysqli_query($mysqli, $UPDATE_ACC);
    ?>
    <script>
        alert("Cập nhật thành công");
        window.location= "?menu=taikhoan";
    </script>