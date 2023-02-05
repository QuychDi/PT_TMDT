<html>

<head>
    <title>
        Đồ Chơi Trẻ Em Giá Rẻ
    </title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!--  -->
  <link rel="stylesheet" href="style/css.css">

</head>

<body>
    <?php include("config/config.php"); ?>
    <div class="content">
        <div class="top">
            <img style="position: absolute; z-index:1" src="img/baner.jpg" alt="">
            <div class="thanhlogin" style="z-index: 2">
                <ul>
                    <?php if(isset($_COOKIE['MA_TV'])){ ?>
                       <li style="border-right: 1px solid black">Xin chào <?php include("models/xulydangky.php");  echo userlogin($_COOKIE['MA_TV']); ?></li>
                        <li>Đăng Xuất</li>
                    <?php }else{?>
                        <li style="border-right: 1px solid black"><a href="login/formdangnhap.php">Đăng Nhập</a></li> 
                        <li><a href="login/formdangky.php">Đăng Ký</a></li>
                   <?php } ?>
                </ul>
            </div>
        </div>
        <div class="main">
            <?php

            // inclue menu 
            include("view/menu.php");
             if(isset($_GET['menu'])){
                $menu = $_GET['menu'];
            }else{
                $menu = '';
            }
                if($menu == 'xemtrang'){
                    include("view/TRANGCUAHANG.php");
                }elseif($menu=='banhang'){
                    include("config/config.php");
                    if(isset($_COOKIE['MA_TV'])){ 
                    $banhang = "SELECT*FROM THANHVIEN
                    WHERE TV_MA = '".$_COOKIE['MA_TV']."' 
                    AND TV_NGAYTHAMGIA IS NULL";
                    $qr = mysqli_query($mysqli, $banhang);
                    $num = mysqli_num_rows($qr); 
                    if($num>0){
                        include("view/danhmucbanhang.php");
                    }else{
                        include("view/danhmuctaikhoan_demo.php");
                    }  
                                           
                    }else{
                      echo "";  
                     }
                }elseif($menu=='taikhoan'){
                    include("view/danhmuctaikhoan_demo.php");
                }elseif($menu=='hotro'){
                    echo "";
                }elseif($menu=="thongbao"){
                    include("view/thongbao.php");
                }elseif($menu=="gioithieu"){
                    include("view/danhmuc_gioithieu.html");
                }

                else{
                    include("view/danhmuc.php");
                }
                
            ?>
                <?php
                   

                    if($menu=='chitietsp'){
                        include("view/chitietsp.php");
                        include("view/lienhe/chatzalo.php"); 
                    }elseif($menu=='xemtrang'){
                        include("view/sanpham.php");
                        include("view/lienhe/chatzalo.php"); 
                    }elseif($menu=="banhang"){
                        include("view/banhang.php");
                    }elseif($menu=="hotro"){
                        include("view/hotro.html");
                    }elseif($menu=="taikhoan"){
                        echo "";
                    }
                    else{
                        include("view/sapxep.php");
                        include("view/sanpham.php");
                        include("view/footer.html");
                    }

                ?>

            <!-- </div> -->
        </div>
        <?php 
         
        ?>
    </div>
</body>

</html>