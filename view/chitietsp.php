<html>

<head>
    <title></title>
   
    <style>
        .sanpham_chitiet {
            margin: 0;
            padding: 0;
            padding-left: 10%;
            margin-top:5%;
            width: 100%;
            /* background-color: #FB7324; */
            position: relative;
            z-index:-1;
        }
        .control {
            width: 100%;
            transform: translateX(-10%);
            font-size: 20px;
        }
        
        .img_sp {
            width: 30%;
            height: 500px;
            float: left;
        }
        
        .info_sp {
            width: 70%;
            height: 515px;
            /* background-color: blueviolet; */
            float: left;
            position: relative; 
            z-index:-1;
        }
        
        .carousel-item img {
            padding-top: 15%;
        }
        
        #mota {
            padding-top: 1%;
            width: 100%;
        }
        
        .sanpham_chitiet .info_sp ul#thongtin {
            width: 100%;
            margin: 0;
            padding: 0;
        }
        
        .sanpham_chitiet .info_sp .btn {
            width: 100%;
            clear: both;
        }
        
        .sanpham_chitiet .info_sp .btn a {
            text-decoration: none;
            color: white;
            background-color: #3399ff;
            float: left;
            padding: 1%;
            margin-left: 5px;
        }
        
        .sanpham_chitiet .info_sp .btn a:hover {
            color: burlywood;
        }
        
        .motasp {
            margin-top: 5%;
            width: 100%;
            float: left;
        }
        #mota table#chitiet_table{
            margin: 0;
            padding: 0;
            width: 20%;
        }
        #mota table#chitiet_table tr td#rs{
            margin-left: 10%;
        }
        .infor_chuban{
            float: left;
            width: 100%;

            /* background-color: #3399ff; */
        
            
        }
        .sanpham_chitiet #mota .infor_chuban .left{
            /* width: 60%; */
            /* float: left; */
            
            font-size: 30px;
            color: #A3A3A4;
            height: 50px;
        }
        .sanpham_chitiet #mota .infor_chuban .left span{
            position: relative;
            float: left;
            display: flex;
            text-align: left;
            justify-content: center;
            align-items: center;
        }
       
        .sanpham_chitiet #mota .infor_chuban .left ul li{
            font-weight: normal;
            color:gray;
            /* float: left; */
          
        }
        .sanpham_chitiet #mota .infor_chuban .right{
            width: 10%;
            height: 40px;
            position: absolute;
            transform: translate(20rem,20%);
            /* float: left; */
            text-align: center;
            border-radius: 20px;
            border: 1px solid #FB7324;
        }
        .sanpham_chitiet #mota .infor_chuban .right a{
            line-height: 40px;
            padding: 5%;
            text-decoration: none;
            color: #FB7324;
            
        }
        .binhluan {
            margin-bottom: 5%;
            clear: both;
            margin-top: 6%;
        }
        
        .binhluan input {
            margin-top: 0.2%;
            background-color: cornflowerblue;
            outline: none;
            color: white;
            border: none;
        }
        #luu_tin{
            color: deeppink;
        }
        #luu_tin:hover{
            background-color: deeppink;
        }
    /* Style for chat-------------EMAIL------------------------- */
        .sanpham_chitiet .hienthi{
            position: absolute;
            float: left;
            /* z-index:0; */
            width: 40%;
            height: 500px;
            /* display: flex;
            align-items: center;
            justify-content: center; */
            margin: 0 auto;
            padding: 0 auto;
            background-color: white;
            box-shadow: 0px 0px 20px 10px #D5D5DA;
            visibility: hidden;
            opacity: 0;
            transition: 0.5s ease;
            
           
        }
        .sanpham_chitiet .active{
            visibility: visible;
            opacity: 1;
            
           
        }
   
        .sanpham_chitiet .hienthi .input-container .filed{
            /* width: 50%; */
            
            margin-bottom: 25px;
            position: relative;
            display: flex;
            /* transform: translate(35%,50%); */
        }
        .sanpham_chitiet .hienthi .input-container .filed input{
            margin: 0px auto;
            padding: 0px auto;
           /* display: flex; */
           /* position: absolute; */
           width: 50%;
           height: 40px;
           padding-left:4%;
           outline: none;

        }
        .sanpham_chitiet .hienthi .input-container .filed textarea{
            margin: 0px auto;
            padding: 0px auto;
           
           width: 50%;
           height: 40px;
           padding-left:4%;
           outline: none;

        }
        .sanpham_chitiet .hienthi .input-container .filed input::placeholder{
            color: #A3A3A4;
        }
        .sanpham_chitiet .hienthi .input-container  ion-icon{
            display: flex;
            position: absolute;
            left: 26%;
            top: 32%;
            color: #A3A3A4;
        }
        .sanpham_chitiet .hienthi .input-container  button{
            margin: 0px auto;
            padding: 0px auto;
            background-color: #0693F7;
            border: none;
            height: 30px;
            width: 10%;
            color: white;
            position: relative;
            transform: translateX(11.5rem);
            /* position: absolute; */
            /* display: flex;
            float: left;
            justify-content: center;
            align-items: center; */
            /* margin-left: 20%; */
        }
        /* btn close */
        .sanpham_chitiet .hienthi .btncls{
            width: 40px;
            height: 40px;
            background-color: red;
            position: relative;
            font-size: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translate(320px,1rem);
            border-radius: 50%;
           cursor: pointer;
        }
    </style>
  
</head>

<body>
    <!-- NGAT TRANG XEM CHI TIET SNA PHAM -->
    <div class="ngattrang" style="width:100%; height: 30px; background-color: #FCFCFC; clear: both"></div>
     <!-- --------------------------------- -->
    <div class="sanpham_chitiet">
    <?php         include("lienhe/email.php");
                $imgsp = "SELECT HA.HINH_SRC, SP.avata, SP.SP_TEN 
                FROM HINHANH AS HA, SANPHAM AS SP
                WHERE HA.SP_MA = SP.SP_MA AND HA.SP_MA = '".$_GET['masp']."'";
                    $qr = mysqli_query($mysqli, $imgsp);
                    $imgs = mysqli_fetch_array($qr);
                ?>
        <div class="control" style="position: relative"><a href="index.php">Trang chủ</a>/ Chi tiết sản phẩm <?php echo $imgs['SP_TEN'];?></div>
        <!-- --------------------------------HIEN THI CHAT EMAIL -->
        <!-- -------------------------------------------------- -->
        <div class="img_sp">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="position: relative; z-index:-1;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                
                <div class="carousel-inner">
                    <?php ?>
                    <div class="carousel-item active">
                        <img src="uploads/<?php  echo $imgs['avata']?>" class="d-block w-100" alt="...">
                    </div>
                <?php while($slide = mysqli_fetch_array($qr)){ ?>
                     <div class="carousel-item">
                        <img src="uploads/<?php  echo $imgs['HINH_SRC']?>" class="d-block w-100" alt="...">
                    </div>
                    <!--
                    <div class="carousel-item">
                        <img src="img/sanpham/9d099ff31ec61b063d4244e0b171a5c4.jpg" class="d-block w-100" alt="...">
                    </div> -->
                    <?php  
                    }   
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button  class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true" ></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="info_sp">
            <?php
            $info_sp = "SELECT*FROM SANPHAM JOIN DOTUOI
                        ON SANPHAM.DT_MA = DOTUOI.DT_MA 
                        JOIN THANHVIEN ON SANPHAM.TV_MA = THANHVIEN.TV_MA, LOAISP
                        WHERE SP_MA = '".$_GET['masp']."' AND SANPHAM.LOAISP_MA = LOAISP.LOAISP_MA";
            $qr_info = mysqli_query($mysqli,$info_sp);
            $thongtinsp = mysqli_fetch_array($qr_info);            
            ?>
            <div id="lable">
                
                <h4><?php echo $thongtinsp['SP_TEN'] ?><ion-icon name="heart-outline" id="luu_tin"></ion-icon> </h4>
            </div>
            <div id="mota">
                <h3 style="padding-left:1%; color:crimson"><?php echo number_format($thongtinsp['SP_GIA']) ?> VNĐ</h3>
                <table id="chitiet_table">
                    <tr>
                        <td><ion-icon name="pricetags-outline" style="margin-right: 5px;"></ion-icon> Tình trạng: </td><td style="padding-left: 2%"><?php echo $thongtinsp['SP_TINHTRANG']; ?></td>
                    </tr>
                    <tr>
                        <td><ion-icon name="happy-outline" style="margin-right:10px"></ion-icon>Cho bé:</td><td style="padding-left: 2%"><?php echo $thongtinsp['DT_TEN']; ?></td>
                    </tr>
                    <tr>
                        <td><ion-icon name="list-outline" style="margin-right:10px"></ion-icon>Danh mục:</td><td style="padding-left: 2%"></ion-icon><?php echo $thongtinsp['LOAISP_TEN']; ?>
                    </td>
                    </tr>
                </table>
                <hr>
                <div class="infor_chuban">
                    <div class="left">
                        <span>
                            <ion-icon name="storefront-outline" style="padding-right: 10px"></ion-icon>
                            <?php echo $thongtinsp['TV_TEN'] ?>
                        </span>
                        <!-- <ul>
                            <li style="width: 60px; height: 60px;display: flex;align-items: center;justify-content: center;">
                               
                            </li>
                            <li style="display: flex;padding-top: 5%">
                            
                            </li>
                        </ul> -->
                    </div>
                    <div class="right">
                        <a href="index.php?menu=xemtrang&matrang=<?php echo $thongtinsp['TV_MA']; ?>">Xem trang</a>
                    </div>   
                </div>
           
               
            </div>
            <div class="btn">
                <a href="index.php?btn=them_gh"><b><ion-icon name="call" style="margin-right:5px"></ion-icon><?php echo $thongtinsp['TV_SDT']; ?></b></a>
                <a onClick="lienhe()" ><b>Liên Hệ Email</b></a>
            </div>
        </div>
    </div>
    <div class="motasp">
        <h4>Mô Tả Sản Phẩm</h4>
        <span style="padding-left: 5%; font-size: 18px;"><?php echo $thongtinsp['SP_MOTA']; ?></span>

    </div>
    <!-- BINH LUAN DANH GIA -->
    <?php 
        include("danhgia.php");
    ?>
     <!-- NGAT TRANG XEM CHI TIET SNA PHAM -->
     <div class="ngattrang" style="width:100%; height: 30px; background-color: FCFCFC; clear: both"></div>
     <!-- --------------------------------- -->
    <!-- THAY SAN PHAM GAN DAY TAI DAY INCLUDE..... -->
    <div class="sanpham" style="margin:0px auto; padding:0px auto">
        <h4>Xem Thêm</h4>
        <ul>
            <li>

                <div id="img"><img src="img/sanpham/sanp.peg" /></div>
                <div id="thongtin">Con Nai Nhúng</div>
                <div id="giaban">Giá: 99.999 VND</div>
                <div id="nut">
                    <a href="" style="color: seagreen;">Trao Đổi</a> |
                    <a href="" style="color: seagreen;">Xem Chi Tiết</a>
                </div>
                <p>
                    <ion-icon style="font-size: 18px;margin-top: 10%;float: left; margin-left: 10%;" name="calendar-outline"></ion-icon>
                    <i style="font-size: 16px;margin-top: 10%;float: left; margin-left: 1%; font-weight: normal;">
                        23/11/2021</i>
                    <ion-icon style="font-size: 18px; float: right;
                    margin-top: 10%; margin-right: 10%;" name="heart-outline"></ion-icon>
                </p>
            </li>
            <li>

                <div id="img"><img src="img/sanpham/4connai.jpg" /></div>
                <div id="thongtin">Combo 4 Con Nai Nhúng</div>
                <div id="giaban">Giá: 180.000 VND</div>
                <div id="nut">
                    <a href="" style="color: seagreen;">Trao Đổi</a> |
                    <a href="" style="color: seagreen;">Xem Chi Tiết</a>
                </div>
                <p>
                    <ion-icon style="font-size: 18px;margin-top: 10%;float: left; margin-left: 10%;" name="calendar-outline"></ion-icon>
                    <i style="font-size: 16px;margin-top: 10%;float: left; margin-left: 1%; font-weight: normal;">
                        23/11/2021</i>
                    <ion-icon style="font-size: 18px; float: right;
                    margin-top: 10%; margin-right: 10%;" name="heart-outline"></ion-icon>
                </p>
            </li>
            <li>

                <div id="img"><img src="img/sanpham/do-choi-tre-em.png" /></div>
                <div id="thongtin">Bộ Lắp Ráp Cho Bé</div>
                <div id="giaban">Giá: 99.999 VND</div>
                <div id="nut">
                    <a href="" style="color: seagreen;">Trao Đổi</a> |
                    <a href="" style="color: seagreen;">Xem Chi Tiết</a>
                </div>
                <p>
                    <ion-icon style="font-size: 18px;margin-top: 10%;float: left; margin-left: 10%;" name="calendar-outline"></ion-icon>
                    <i style="font-size: 16px;margin-top: 10%;float: left; margin-left: 1%; font-weight: normal;">
                        23/11/2021</i>
                    <ion-icon style="font-size: 18px; float: right;
                    margin-top: 10%; margin-right: 10%;" name="heart-outline"></ion-icon>
                </p>
            </li>
            <li>

                <div id="img"><img src="img/sanpham/sanp.peg" /></div>
                <div id="thongtin">Con Nai Nhúng</div>
                <div id="giaban">Giá: 1.000 VND</div>
                <div id="nut">
                    <a href="" style="color: seagreen;">Trao Đổi</a> |
                    <a href="" style="color: seagreen;">Xem Chi Tiết</a>
                </div>
                <p>
                    <ion-icon style="font-size: 18px;margin-top: 10%;float: left; margin-left: 10%;" name="calendar-outline"></ion-icon>
                    <i style="font-size: 16px;margin-top: 10%;float: left; margin-left: 1%; font-weight: normal;">
                        23/11/2021</i>
                    <ion-icon style="font-size: 18px; float: right;
                    margin-top: 10%; margin-right: 10%;" name="heart-outline"></ion-icon>
                </p>
            </li>
            <li>

                <div id="img"><img src="img/sanpham/sanp.peg" /></div>
                <div id="thongtin">Con Nai Nhúng</div>
                <div id="giaban">Giá: 1.000 VND</div>
                <div id="nut">
                    <a href="" style="color: seagreen;">Trao Đổi</a> |
                    <a href="" style="color: seagreen;">Xem Chi Tiết</a>
                </div>
                <p>
                    <ion-icon style="font-size: 18px;margin-top: 10%;float: left; margin-left: 10%;" name="calendar-outline"></ion-icon>
                    <i style="font-size: 16px;margin-top: 10%;float: left; margin-left: 1%; font-weight: normal;">
                        23/11/2021</i>
                    <ion-icon style="font-size: 18px; float: right;
                    margin-top: 10%; margin-right: 10%;" name="heart-outline"></ion-icon>
                </p>
            </li>
            <li>

                <div id="img"><img src="img/sanpham/sanp.peg" /></div>
                <div id="thongtin">Con Nai Nhúng</div>
                <div id="giaban">Giá: 1.000 VND</div>
                <div id="nut">
                    <a href="" style="color: seagreen;">Trao Đổi</a> |
                    <a href="" style="color: seagreen;">Xem Chi Tiết</a>
                </div>
                <p>
                    <ion-icon style="font-size: 18px;margin-top: 10%;float: left; margin-left: 10%;" name="calendar-outline"></ion-icon>
                    <i style="font-size: 16px;margin-top: 10%;float: left; margin-left: 1%; font-weight: normal;">
                        23/11/2021</i>
                    <ion-icon style="font-size: 18px; float: right;
                    margin-top: 10%; margin-right: 10%;" name="heart-outline"></ion-icon>
                </p>
            </li>
            <li>

                <div id="img"><img src="img/sanpham/sanp.peg" /></div>
                <div id="thongtin">Con Nai Nhúng</div>
                <div id="giaban">Giá: 1.000 VND</div>
                <div id="nut">
                    <a href="" style="color: seagreen;">Trao Đổi</a> |
                    <a href="" style="color: seagreen;">Xem Chi Tiết</a>
                </div>
                <p>
                    <ion-icon style="font-size: 18px;margin-top: 10%;float: left; margin-left: 10%;" name="calendar-outline"></ion-icon>
                    <i style="font-size: 16px;margin-top: 10%;float: left; margin-left: 1%; font-weight: normal;">
                        23/11/2021</i>
                    <ion-icon style="font-size: 18px; float: right;
                    margin-top: 10%; margin-right: 10%;" name="heart-outline"></ion-icon>
                </p>
            </li>
        </ul>
    </div>
</body>

</html>