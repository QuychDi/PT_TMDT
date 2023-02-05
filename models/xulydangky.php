<?php 
function userlogin($name){
    include("config/config.php");
    $user = "SELECT TV_TEN
    FROM THANHVIEN
    WHERE TV_MA = '$name'";
    $qr = mysqli_query($mysqli, $user);
    $name = mysqli_fetch_array($qr);
    return $name['TV_TEN'];
};
function logout(){
    unset($_COOKIE['TV_MA']);?>
    <script>
        alert("Đăng xuất thành công");
        window.location = "index.php";
    </script>
    <?php
};
    function add_user(){
        include("../config/config.php");
        $user = $_POST['username'];
        $pass = $_POST['pass'];
        $loai_tk = 1;
        $trangthai =1;
        $hoten = $_POST['name'];
        $ngaysinh = $_POST['birth'];
        $sdt = $_POST['phone_n'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        function validate_mobile($mobile)
        {
            return preg_match('/^[0-9]{10}+$/', $mobile);
        }
        $pattern = '#^?[\d]3?-?[\d]2?-[\d]{2}\.[\d]{3}-[\d]{3}$#';
        if($user !== '' && strlen($pass) == 8 && $sdt !== '' && $email !== '' && $diachi !== '' && validate_mobile($sdt)==true){
                $username = "SELECT TK.TK_TEN
                FROM THANHVIEN AS TV JOIN TAIKHOAN AS TK ON TV.TV_MA = TK.TV_MA
                WHERE TK.TK_TEN='$user'";
                $qr = mysqli_query($mysqli, $username);
                if($num = mysqli_num_rows($qr)>0){ ?>
                    <script>
                        alert("Tên đăng nhập đã tồn tại. Vui lòng nhập tên đăng nhập khác.");
                    </script>
                <?php }else{
                    $adduser = "INSERT INTO THANHVIEN(TV_TEN, TV_NGAYSINH, TV_SDT, TV_DC, email)
                    VALUES('$hoten','$ngaysinh','$sdt','$diachi','$email')";
                    $qr2 = mysqli_query($mysqli, $adduser);
                    $id_tv = mysqli_insert_id($mysqli);
                    $addaccount = "INSERT INTO TAIKHOAN(TK_TEN, TK_MATKHAU, TK_LOAI, TK_TRANGTHAI,TV_MA)
                    VALUES('$user', '$pass', '$loai_tk','$trangthai','$id_tv')";
                    $qr3 = mysqli_query($mysqli, $addaccount);?>
                        <script>
                            alert("Đănh ký tài khoản thành công");
                            window.location = "../login/formdangnhap.php";
                        </script>
               <?php }
            }elseif(strlen($pass) <8 || strlen($pass) > 8){?>
                <script>
                    alert("Độ dài mật khẩu phải bằng 8 ký tự.");
                </script>
            <?php }else{?>
                <script>
                    alert("Số điện thoại không hợp lệ.");
                </script>
           <?php }
        ?>
            <!-- <script>
            alert("ten dnah");
            </script> -->
        <?php };
        function customer_sigin(){
            include("../config/config.php");
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            $trangthai=1;
            $LOAI =1;
            if(!empty($username) && !empty($pass)){
            $check_user = "SELECT TK.TK_TEN
            FROM TAIKHOAN AS TK JOIN THANHVIEN AS TV ON TK.TV_MA = TV.TV_MA
            WHERE TK.TK_TEN = '$username' AND TK.TK_MATKHAU = '$pass'
            AND TK.TK_TRANGTHAI = '$trangthai' AND TK_LOAI='$LOAI'"; 
            $qr_check = mysqli_query($mysqli, $check_user);
            $num = mysqli_num_rows($qr_check);
            if($num == 1){
                $set_coki = "SELECT TK.TV_MA 
                FROM TAIKHOAN AS TK
                WHERE TK.TK_TEN = '$username' AND TK.TK_MATKHAU = '$pass'
                AND TK.TK_TRANGTHAI = '$trangthai' AND TK_LOAI='$LOAI'";
                $qr_setcoki = mysqli_query($mysqli, $set_coki);
                $value = mysqli_fetch_array($qr_setcoki);
                setcookie('MA_TV',$value['TV_MA'], time() + 2600, "/"); //(86400 * 30) 86400 = 1 day
                ?>
                    <script>
                        // alert("Đăng nhập thành công.");
                        window.location = "../index.php";
                    </script>
                <?php
            }else{ ?>
               <script>
                   alert("Tài khoản vừa nhập không chính xác.");
               </script>
            <?php }
        }
        }  
?>