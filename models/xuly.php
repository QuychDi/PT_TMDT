<?php
function kiemtratkbanhang($ma_tv){
    include("config/config.php");
                    $banhang = "SELECT*FROM THANHVIEN
                    WHERE TV_MA = '$ma_tv'
                    AND TV_NGAYTHAMGIA IS NULL";
                    $qr = mysqli_query($mysqli, $banhang);
                    $num = mysqli_num_rows($qr);
                    if(isset($_COOKIE['MA_TV']) && $num>0){    
                        include("view/danhmucbanhang.php");                    
                    }else{
                        echo "hello";
                     }
};
// function kiemtrabanhang($ma_tv){
//     include("config/config.php");
//     $banhang = "SELECT*FROM THANHVIEN
//     WHERE TV_MA = '$ma_tv'";
//     $qr = mysqli_query($mysqli, $banhang);
//     $num = mysqli_num_rows($qr);
//     return $ma_tv;
// };
function dangkyban($ma_tv){
    include("config/config.php");
    $date = $_POST['date_agree'];
    $add_dateuser = "UPDATE THANHVIEN SET TV_NGAYTHAMGIA='$date'
    WHERE TV_MA='$ma_tv'";
    mysqli_query($mysqli, $add_dateuser);?>
    <script>
        alert("Chào mừng bạn đến với sàn trao đổi mua bán đồ chơi trẻ em.");
        window.location= "index.php?menu=banhang";
    </script>
<?php };
function add_product(){
    include("config/config.php");
    $date_post = date("Y-m-d");
    $tensp = $_POST['tensanpham'];
    $motasp = $_POST['motasp'];
    $slsp = $_POST['soluong'];
    $DVtinh = $_POST['dvtinh'];
    $trangthai = 1;
    $gia = $_POST['giaban'];
    $tinhtrang = $_POST['tinhtrang'];
    $loaisp = $_POST['loaisp'];
    $dotuoi = $_POST['dotuoi'];
   if(isset($_FILES['avata'])){
       $file = $_FILES['avata'];
       $file_name = $file['name'];
       if($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png'){
           move_uploaded_file($file['tmp_name'],'uploads/'.$file_name);
          
       }else{ ?>
            <script>
                alert("File ảnh không đúng định dạng.")
            </script>
       <?php }
    }
   if(isset($_FILES['avatas'])){
       $files = $_FILES['avatas'];
       $file_names = $files['name'];
        foreach ($file_names as $key => $value) {
            move_uploaded_file($files['tmp_name'][$key],'uploads/'.$value);
        }
        
    }
            $add_pro = "INSERT INTO SANPHAM(SP_TEN, SP_MOTA, SP_SL, SP_DVT, SP_TRANGTHAI, SP_GIA, SP_TINHTRANG, LOAISP_MA, DT_MA, TV_MA, avata,NGAYDANG)
            VALUES('$tensp','$motasp','$slsp','$DVtinh','$trangthai','$gia','$tinhtrang','$loaisp','$dotuoi','".$_COOKIE['MA_TV']."','$file_name','$date_post')";
            // echo $add_pro;
            $qr = mysqli_query($mysqli, $add_pro);
            $id_pro = mysqli_insert_id($mysqli);
            //    add hinh anh
        foreach ($file_names as $key => $value) {
            mysqli_query($mysqli, "INSERT INTO HINHANH(HINH_SRC, SP_MA)
            VALUE('$value','$id_pro')");
        } ?>

    <script>
        alert("Thêm sản phẩm thành công");
        window.location = "index.php?menu=banhang";
    </script>
  
<?php };

function sptocao(){
    include("config/config.php");
    $TV_MA = $_COOKIE['MA_TV'];
    $noidung = $_GET['tocao'];
    $ma_sp = $_GET['sp'];
    $date =    date("Y-m-d");
    $trangthai = 1;
    $tocao = "INSERT INTO BAOCAO
                VALUES('$TV_MA', '$ma_sp', '$noidung','$date', '$trangthai')";
    mysqli_query($mysqli, $tocao);
};
function update_pro(){
    include("config/config.php");
    // $date_post = date("Y-m-d");
    $tensp = $_POST['tensanpham'];
    $motasp = $_POST['motasp'];
    $slsp = $_POST['soluong'];
    $DVtinh = $_POST['dvtinh'];
    $trangthai = 1;
    $gia = $_POST['giaban'];
    $tinhtrang = $_POST['tinhtrang'];
    $loaisp = $_POST['loaisp'];
    $dotuoi = $_POST['dotuoi'];
    $file = $_FILES['avata'];
    $file_name = $file['name'];
    if($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png'){
        move_uploaded_file($file['tmp_name'],'uploads/'.$file_name);
       
    }
    $update = "UPDATE SANPHAM SET SP_TEN = '$tensp',SP_MOTA='$motasp',
    SP_SL = '$slsp', SP_DVT='$DVtinh',SP_GIA='$gia',SP_TINHTRANG='$tinhtrang',
    LOAISP_MA = '$loaisp', DT_MA = '$dotuoi', avata = '$file_name'
    WHERE SP_MA='".$_GET['sp']."' ";
    $qr = mysqli_query($mysqli, $update);?>
    <script>
        alert("Cập nhật thành công.");
        window.location = 'index.php?menu=banhang';
    </script>
<?php }

function thongbao($ma){
    include("config/config.php");
    $thongbao_kh = "SELECT*FROM THANHVIEN
    WHERE TV_NGAYTHAMGIA IS NOT NULL
    AND TV_MA = '$ma' ";
    $qr = mysqli_query($mysqli, $thongbao_kh);
    $kh = mysqli_fetch_array($qr);
    $numrow = mysqli_num_rows($qr);
    if($numrow>0){
        echo "<i style="."'color:#2B70DD; font-size: 25px'"." .".">Chúc mừng bạn <b>". $kh['TV_TEN'] ."</b> đã đăng ký thành công đăng tin bán hàng<br>
        Hãy bán hàng ngay <a href=?menu=banhang>Tại đây</a></i>" ;
    }
   
};

function update_acc(){
    include("config/config.php");
    $user = $_POST['tendangnhap'];
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $UPDATE = "UPDATE THANHVIEN
                SET TV_TEN = '$name', TV_NGAYSINH = '$birthday', TV_SDT= '$phone_number',
                TV_DC = '$address', email = '$email'
                WHERE TV_MA = '".$_COOKIE['MA_TV']."'";
    $UPDATE_ACC = "UPDATE TAIKHOAN
                    SET TK_TEN = '$user'
                    WHERE TV_MA = '".$_COOKIE['MA_TV']."'";
    $qr1 = mysqli_query($mysqli, $UPDATE);
    $qr1 = mysqli_query($mysqli, $UPDATE_ACC);
    ?>
    <script>
        alert("Cập nhật thành công");
        window.location= "?menu=taikhoan";
    </script>
<?php };
function xulybanhang(){
    include("config/config.php");
    $MA_SP = $_GET['id1'];
    $tontaibaocao =  "SELECT*FROM BAOCAO
    WHERE SP_MA = '$MA_SP'";
    $result = mysqli_query($mysqli, $tontaibaocao);
    $check = mysqli_num_rows($result);
    if($check > 0){?>
        <script>
            alert('Sản phẩm tồn tại trong báo cáo từ khách hàng');
            window.location = "?menu=banhang";
        </script>
    <?php }else{
         $src_img = "SELECT avata FROM SANPHAM
         WHERE SP_MA = '$MA_SP'";
         $result_img = mysqli_query($mysqli, $src_img);
         $src = mysqli_fetch_array($result_img);
         echo $src['avata'];
        $delete_pic = "DELETE FROM HINHANH
        WHERE SP_MA = '$MA_SP'";
        mysqli_query($mysqli, $delete_pic);
        $delete = "DELETE FROM SANPHAM 
        WHERE SP_MA = '$MA_SP'";
        // echo $delete;
        unlink("uploads/".$src['avata']);
        $qr = mysqli_query($mysqli, $delete);
         ?>
        <script>
            window.location = "?menu=banhang";
        </script>
        <?php
    }

    ?>
    <!-- <script>
        window.location = "?menu=banhang";
    </script> -->
    <?php
};
function xulybanhang2(){
    include("config/config.php");
    $MA_SP = $_GET['id2'];
    $UPFATE = "UPDATE SANPHAM SET SP_SL='1'
    WHERE SP_MA= '$MA_SP'";
    $qr = mysqli_query($mysqli, $UPFATE);
    ?>
    <script>
        window.location = "?menu=banhang";
    </script>
    <?php
};
function danhgia(){
    include("config/config.php");
    $matv = $_COOKIE['MA_TV'];
    $masp = $_GET['masp'];
    

};
function timkiem(){
	include("config/config.php");
    
	$khsearch = $_POST['timkiem'];
	$ketqua = "SELECT SP.avata, SP.SP_TEN, SP.SP_GIA, SP.SP_MA,SP.NGAYDANG, TV.TV_MA
    FROM SANPHAM AS SP JOIN THANHVIEN AS TV
     ON SP.TV_MA = TV.TV_MA
     WHERE  SP.SP_TEN LIKE '%".$khsearch."%' GROUP BY SP_MA";
	$result = mysqli_query($mysqli, $ketqua);
if(mysqli_num_rows($result)>0 && !empty($khsearch)){ ?>
	<b style="padding-left: 1.5%;">Kết quả tìm kiếm trùng khớp với <b style="color: #06912E"><?php echo  $khsearch; ?></b></b>
				<ul>
				<?php
			while($kt2= mysqli_fetch_array($result)){
					?>
 <ul>
    <?php $kt2 = "SELECT SP.avata, SP.SP_TEN, SP.SP_GIA, SP.SP_MA,
                        SP.NGAYDANG, TV.TV_MA
                        FROM SANPHAM AS SP JOIN THANHVIEN AS TV
                         ON SP.TV_MA = TV.TV_MA
                         WHERE SP.SP_TRANGTHAI = 1";
                        $qr = mysqli_query($mysqli, $kt2);
                        while($list_pro = mysqli_fetch_array($qr)){
                         ?>
                    <li>

                        <div id="img"><img src="uploads/<?php echo $list_pro['avata'];?>" /></div>
                        <div id="thongtin"><?php echo $list_pro['SP_TEN']; ?></div>
                        <div id="giaban"><?php echo number_format($list_pro['SP_GIA']) . ' VNĐ'; ?></div>
                        <div id="nut">
                            <a href="https://chat.zalo.me/?phone=0399012157" style="color: seagreen;">Trao Đổi</a> |
                            <a href="index.php?menu=chitietsp&masp=<?php echo $list_pro['SP_MA']; ?>&matrang=<?php echo $list_pro['TV_MA']; ?>" style="color: seagreen;">Xem Chi Tiết</a>
                        </div>
                        <p>
                            <ion-icon style="font-size: 18px;margin-top: 10%;float: left; margin-left: 10%;" name="calendar-outline"></ion-icon>
                            <i style="font-size: 16px;margin-top: 10%;float: left; margin-left: 1%; font-weight: normal;">
                                <?php echo $list_pro['NGAYDANG']; ?>
                            </i>
                            <div class="bacham">
                                <form action="" method="POST">
                                <ul id="nuttocao">
                                    <li id="c"><ion-icon id="tocao" style="font-size: 18px;float: right;
                                    margin-top: 10%; margin-right: 10%;" name="ellipsis-vertical-outline">
                                </ion-icon>
                                <span>
                                     <a id="baocao" href="?tocao=Quy phạm chính sách&sp=<?php echo $list_pro['SP_MA']; ?>">Quy phạm chính sách</a> <br>
                                     <a id="baocao" href="?tocao=Sản phẩm không phù hợp&sp=<?php echo $list_pro['SP_MA']; ?>">Sản phẩm không phù hợp</a>

                                
                        </span>
                                </form>
                            </div>
                        </p>
                        
                        
                        
                        </li>
                    <?php }
                    
                        }
                    
                    ?>
                </ul>
        <?php                };
        } ?>
