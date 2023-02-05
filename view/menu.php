<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<div class="menu">
    <ul>
        <a href="index.php">
            <li>
                <ion-icon name="home"></ion-icon>Trang Chủ
            </li>
        </a>
        <a href="index.php?menu=gioithieu">
            <li>
                <ion-icon name="wifi"></ion-icon>Giới Thiệu
            </li>
        </a>
        <a href="index.php?menu=taikhoan">
            <li>
                <ion-icon name="person"></ion-icon>Tài Khoản
            </li>
        </a>
        <a href="index.php?menu=banhang">
            <li>
                <ion-icon name="add-circle"></ion-icon>Bán Hàng
            </li>
        </a>
        <a href="index.php?menu=thongbao" style="position: relative">
            <li>
                <ion-icon name="notifications-circle"></ion-icon>Thông Báo
                <?php 
                if(isset($_COOKIE['MA_TV'])){
                  include("config/config.php");
                $KH ="SELECT*FROM THANHVIEN
                WHERE TV_NGAYTHAMGIA IS NOT NULL AND
                TV_MA = '".$_COOKIE['MA_TV']."'";
                $qr = mysqli_query($mysqli, $KH);
                // $s
                $n = mysqli_fetch_array($qr);
                if($n >0 ){ ?>
                <div class="soluongthongbao"><b>1</b></div>
                <?php }
                } ?>
            </li>
        </a>
        <a href="index.php?menu=hotro">
            <li style="border-bottom: none">
                <ion-icon name="help-circle"></ion-icon>Hỗ Trợ</li>
        </a>
    </ul>
</div>