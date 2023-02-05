<!DOCTYPE html>
<html>
<?php include("config/config.php"); ?>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="style/css.css">
</head>

<body>
<?php if(isset($_COOKIE['MA_TV'])){
       include("config/config.php");
       $banhang = "SELECT*FROM THANHVIEN
       WHERE TV_MA = '".$_COOKIE['MA_TV']."' 
       AND TV_NGAYTHAMGIA IS NOT NULL";
       $qr = mysqli_query($mysqli, $banhang);
       $num = mysqli_num_rows($qr);
     ?>
     <div class="ngattrang" style="width: 100%; height: 10px; background-color: #D8D6D6; opacity: 0.5"></div>
    <div class="banhang">
        
    <?php 
    if($num>0){ ?>
        <div class="banhang_left">
            <?php if(isset($_GET['sp'])){ 
                $SP = "SELECT*FROM SANPHAM, LOAISP, DOTUOI, HINHANH
                        WHERE SANPHAM.LOAISP_MA = LOAISP.LOAISP_MA AND
                        SANPHAM.DT_MA = DOTUOI.DT_MA AND SANPHAM.SP_MA = HINHANH.SP_MA AND
                        SANPHAM.SP_MA='".$_GET['sp']."'";
                $qr = mysqli_query($mysqli, $SP);
                $sp = mysqli_fetch_array($qr);

                ?>
            <form action="" method="post" name="post_prod" enctype="multipart/form-data">
                <ul>
                    <div class="thongtinsp">
                        <li style="font-weight: bold;">
                            Ảnh đại diện <b style="color: red"> &nbsp; *</b>
                        </li>
                        <input type="file" id="avata" name="avata" required value="<?php echo $sp['avata'];  ?>" style="margin-bottom: 2%" >
                        <img style="width: 15%" src="uploads/<?php echo $sp['avata'];  ?>"/>
                        <li style="font-weight: bold;">
                            <!-- Ảnh liên quan
                        </li>
                        ?php $anhchitiet = "SELECT*FROM HINHANH
                                                WHERE SP_MA='".$_GET['sp']."'";
                                $qr2= mysqli_query($mysqli, $anhchitiet);
                                                ?>
                        <input type="file" id="avata" name="avatas[]" value="<?php echo $sp['HINH_SRC'];  ?>" multiple="multiple" style="margin-bottom: 2%">
                        ?php
                            while($hinh= mysqli_fetch_array($qr2)){ ?>
                                <img style="width: 15%; float: left; margin: 8px" src="uploads/<?php echo $sp['avata'];  ?>"/>
                            ?php }
                        ?> -->
                        <br>
                        <li style="font-weight: bold; clear: both;">
                            Tên sản phẩm<b style="color: red"> &nbsp; *</b>
                        </li>
                        <input type="text" 
                        name="tensanpham" 
                        style="width: 52%; height: 40px; padding-left: 2%; outline: none;border: none; border-bottom: 1px solid #D9DEE3; margin-bottom: 3%;margin-top: 2%;" 
                        required placeholder="Nhập tên sản phẩm" id="" value="<?php echo $sp['SP_TEN'];  ?>">
                        <li style="font-weight: bold;">Mô tả sản phẩm</li>
                        <textarea cols="40" rows="5" name="motasp" style="outline: none; padding-left: 2%;" value=""><?php echo $sp['SP_MOTA'];  ?></textarea>
                    </div>
                    <div id="ngattrang" style="width:100%; height: 15px; background-color:#E4E7E7; margin: 5% 0 5% 0;;"></div>
                    <div class="motachitiet">
                        <li>
                            <table id="form_tt">
                                <tr>
                                    <td id="icon">
                                        <ion-icon name="list-outline"></ion-icon>Danh mục:</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="dotuoi" id="input" style="border-bottom: 1px solid #BBBDBD" value="">
                                            <?php include("models/truyvan.php");
                                                truyvantuoi();
                                                $qr_tuoi = mysqli_query($mysqli, truyvantuoi());
                                                while($tuoi = mysqli_fetch_array($qr_tuoi)){?>
                                                    <option value="<?php echo $tuoi['DT_MA']; ?>"><?php echo $tuoi['DT_TEN']; ?></option>
                                               <?php }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="icon">
                                        <ion-icon name="menu-outline"></ion-icon>Loại sản phẩm</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="loaisp" id="input" style="border-bottom: 1px solid #BBBDBD">
                                            <?php 
                                                
                                                $loai = "SELECT LOAISP_MA, LOAISP_TEN FROM LOAISP";
                                                $qr = mysqli_query($mysqli, $loai);
                                                while($l = mysqli_fetch_array($qr)){ ?>
                                                    <option value="<?php echo $l['LOAISP_MA']; ?>"><?php echo $l['LOAISP_TEN']; ?></option>
                                               <?php }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="icon">
                                        <ion-icon name="folder-open-outline"></ion-icon>Số lượng</td>
                                </tr>
                                <tr>
                                    <td><input type="number" name="soluong" value="1" id="input" style="border-bottom: 1px solid #BBBDBD" /></td>
                                </tr>
                                <tr>
                                    <td id="icon">
                                        <ion-icon name="stopwatch-outline"></ion-icon>Đơn vị tính</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="dvtinh" id="input" style="border-bottom: 1px solid #BBBDBD" value="">
                                            <option value="cái">Cái</option>
                                            <option value="bộ">Bộ</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="icon">
                                        <ion-icon name="information-circle-outline"></ion-icon>Tình trạng</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="tinhtrang" id="input" style="border-bottom: 1px solid #BBBDBD" value="">
                                            <option value="mới">Mới</option>
                                            <option value="qua sử dụng">Qua dử dụng</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="icon">
                                        <ion-icon name="wallet-outline"></ion-icon>Giá<b style="color: red"> &nbsp; *</b></td>
                                </tr>
                                <tr>
                                    <td><input type="text" placeholder="Nhập giá VD 15000" 
                                    name="giaban" id="input" style="border-bottom: 1px solid #BBBDBD" required value="<?php echo number_format($sp['SP_GIA']);  ?>"/> VNĐ</td>
                                </tr>
                            </table>
                        </li>
                    </div>
                </ul>
                <ul id="btn">
                    <li><button type="submit" name="update_pro">Lưu</button></li>
                    <li style="margin-left: 2%;"><button type="reset" name="reset">Reset</button></li>
                </ul>
            </form>
            <?php }else{ ?>

                <form action="" method="post" name="post_prod" enctype="multipart/form-data">
                <ul>
                    <div class="thongtinsp">
                        <li style="font-weight: bold;">
                            Ảnh đại diện <b style="color: red"> &nbsp; *</b>
                        </li>
                        <input type="file" id="avata" name="avata" required value="" style="margin-bottom: 2%" >
                        <li style="font-weight: bold;">
                            Ảnh liên quan
                        </li>
                        <input type="file" id="avata" name="avatas[]" value="" multiple="multiple" style="margin-bottom: 2%">
                        <li style="font-weight: bold;">
                            Tên sản phẩm<b style="color: red"> &nbsp; *</b>
                        </li>
                        <input type="text" 
                        name="tensanpham" 
                        style="width: 52%; height: 40px; padding-left: 2%; outline: none;border: none; border-bottom: 1px solid #D9DEE3; margin-bottom: 3%;margin-top: 2%;" required placeholder="Nhập tên sản phẩm" id="" value="">
                        <li style="font-weight: bold;">Mô tả sản phẩm</li>
                        <textarea cols="40" rows="5" name="motasp" style="outline: none; padding-left: 2%;" value="">

                        </textarea>
                    </div>
                    <div id="ngattrang" style="width:100%; height: 15px; background-color:#E4E7E7; margin: 5% 0 5% 0;;"></div>
                    <div class="motachitiet">
                        <li>
                            <table id="form_tt">
                                <tr>
                                    <td id="icon">
                                        <ion-icon name="list-outline"></ion-icon>Danh mục:</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="dotuoi" id="input" style="border-bottom: 1px solid #BBBDBD" value="">
                                            <?php include("models/truyvan.php");
                                                truyvantuoi();
                                                $qr_tuoi = mysqli_query($mysqli, truyvantuoi());
                                                while($tuoi = mysqli_fetch_array($qr_tuoi)){?>
                                                    <option value="<?php echo $tuoi['DT_MA']; ?>"><?php echo $tuoi['DT_TEN']; ?></option>
                                               <?php }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="icon">
                                        <ion-icon name="menu-outline"></ion-icon>Loại sản phẩm</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="loaisp" id="input" style="border-bottom: 1px solid #BBBDBD">
                                            <?php 
                                                
                                                $loai = "SELECT LOAISP_MA, LOAISP_TEN FROM LOAISP";
                                                $qr = mysqli_query($mysqli, $loai);
                                                while($l = mysqli_fetch_array($qr)){ ?>
                                                    <option value="<?php echo $l['LOAISP_MA']; ?>"><?php echo $l['LOAISP_TEN']; ?></option>
                                               <?php }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="icon">
                                        <ion-icon name="folder-open-outline"></ion-icon>Số lượng</td>
                                </tr>
                                <tr>
                                    <td><input type="number" name="soluong" value="1" id="input" style="border-bottom: 1px solid #BBBDBD" /></td>
                                </tr>
                                <tr>
                                    <td id="icon">
                                        <ion-icon name="stopwatch-outline"></ion-icon>Đơn vị tính</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="dvtinh" id="input" style="border-bottom: 1px solid #BBBDBD" value="">
                                            <option value="cái">Cái</option>
                                            <option value="bộ">Bộ</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="icon">
                                        <ion-icon name="information-circle-outline"></ion-icon>Tình trạng</td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="tinhtrang" id="input" style="border-bottom: 1px solid #BBBDBD" value="">
                                            <option value="mới">Mới</option>
                                            <option value="qua sử dụng">Qua dử dụng</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="icon">
                                        <ion-icon name="wallet-outline"></ion-icon>Giá<b style="color: red"> &nbsp; *</b></td>
                                </tr>
                                <tr>
                                    <td><input type="text" placeholder="Nhập giá VD 15000" name="giaban" id="input" style="border-bottom: 1px solid #BBBDBD" required value=""/> VNĐ</td>
                                </tr>
                            </table>
                        </li>
                    </div>
                </ul>
                <ul id="btn">
                    <li><button type="submit" name="add_product">Lưu</button></li>
                    <li style="margin-left: 2%;"><button type="reset" name="reset">Reset</button></li>
                </ul>
            </form>
          <?php  } ?>
        </div>



        <div class="banhang_right ">
                <h4 style="display: flex;align-items: center;float: left ">
                            <ion-icon name="cube-outline " style="padding-right:2px; "></ion-icon>Danh sách sản phẩm
                        </h4>
                        <span style="float: right; "><a href="index.php ">Trang chủ</a>/bán hàng</span>
                        <table id="qlsanpham">
                            <tr>
                                <th>MASP</th>
                                <th style="width: 10% ">Tên Sản Phẩm</th>
                                <th style="width: 12%; ">Mô Tả</th>
                                <th>Danh Mục</th>
                                <th style="width: 5% ">S.Lượng</th>
                                <th style="width: 6% ">ĐV.Tính</th>
                                <th>Giá (VNĐ)</th>
                                <th>Tình Trạng</th>
                                <th>Trạng Thái</th>
                                <th>Hành Động</th>
                            </tr>
            
                         <?php 
                         include("config/config.php");
                            $DS_SP =    "SELECT SP.SP_MA, SP.SP_TEN, SP.SP_MOTA, SP.SP_SL, SP.SP_DVT, 
                                        SP.SP_TRANGTHAI,SP.SP_TINHTRANG ,SP.SP_GIA, L.LOAISP_TEN, DT.DT_TEN 
                                        FROM LOAISP AS L JOIN SANPHAM AS SP 
                                        ON L.LOAISP_MA = SP.LOAISP_MA JOIN DOTUOI AS DT 
                                        ON DT.DT_MA = SP.DT_MA WHERE TV_MA = '".$_COOKIE['MA_TV']."'";
                            $qr    =    mysqli_query($mysqli, $DS_SP);
                            while($list = mysqli_fetch_array($qr)){
            
                         ?>   
                            <tr>
                                <td><?php echo $list['SP_MA']; ?></td>
                                <td style="text-align: left; "><?php echo $list['SP_TEN']; ?></td>
                                <td style="text-align: left; "><?php echo $list['SP_MOTA']; ?></td>
                                <td><?php echo $list['DT_TEN']; ?></td>
                                <td><?php echo $list['SP_SL']; ?></td>
                                <td><?php echo $list['SP_DVT']; ?></td>  <!-- don vi tính-->
                                <td><?php echo number_format($list['SP_GIA']); ?></td>
                                <td><?php echo $list['SP_TINHTRANG']; ?></td>
                                <td>
                                    <div id="danghoatdong" style="display: flex; align-items: center; ">
                                    <?php if($list['SP_TRANGTHAI'] == 1){ ?>
                                        <ion-icon style="color:green;" name="ellipse"></ion-icon>Đang hoạt động
                                    <?php }else{ ?>
                                        <ion-icon style="color:red;" name="ellipse"></ion-icon>Không hoạt động
                                    <?php } ?>
                                    </div>
                                </td>
                                <td><a href="index.php?menu=banhang&sp=<?php echo $list['SP_MA']; ?>">Sửa </a>
                                 | 
                                <a href="?menu=banhang&id1=<?php echo $list['SP_MA']; ?>" style="color: red">Xóa</a></td>
                            </tr>
                        <?php } ?>
            
                        </table>
        </div>
        <?php 
       if(isset($_POST['add_product'])){
        include("models/xuly.php");
            add_product();
    }
    if(isset($_POST['update_pro'])){
        include("models/xuly.php");
        update_pro();
    } 
    ?>
      <?php }else{?>
          <div class="dieukhoan">
            
          </div>
      <?php } ?>
    </div>
    <?php
}else{
          include("hotro.html");
      }
if(isset($_GET['id2'])){
    include("models/xuly.php");
    xulybanhang2();
}
if(isset($_GET['id1'])){
    include("models/xuly.php");
    xulybanhang();
}   
?>
</body>

</html>