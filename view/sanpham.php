<div class="sanpham" style="clear: both">
<h5 style="color:#188A50">Sản phẩm gần đây</h5>
    <?php if(isset($_GET['matrang'])){

   ?>
<form action="" method="GET" name="CHITIET">
<ul>
    <?php $product = "SELECT SP.avata, SP.SP_TEN, SP.SP_GIA, SP.SP_MA,
                        SP.NGAYDANG, TV.TV_MA
                        FROM SANPHAM AS SP JOIN THANHVIEN AS TV
                         ON SP.TV_MA = TV.TV_MA
                         WHERE SP.SP_TRANGTHAI = 1
                         AND SP.TV_MA='".$_GET['matrang']."'";
                        $qr = mysqli_query($mysqli, $product);
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
                                <from action="" method="POST">
                                <ul id="nuttocao">
                                    <li id="c"><ion-icon id="tocao" style="font-size: 18px;float: right;
                                    margin-top: 10%; margin-right: 10%;" name="ellipsis-vertical-outline">
                                </ion-icon><span>
                                    
                               <!-- <textarea cols="10" rows="1" name="noidungtocao" values="">Tố cáo
                               </textarea> -->
                               <a href="index.php?tocao=<?php echo $list_pro['SP_MA']; ?>" style="float: right; margin-right: 1rem">Gửi</a>
                                </span></li>
                                
                                </ul>
                        </from>
                            </div>
                        </p>
                        </li>
                    <?php } ?>
                </ul>
</form>
<?php }elseif(isset($_GET['menu']) == 3){?>
    <form action="" method="GET" name="CHITIET">
    <ul>
        <?php $product = "SELECT SP.avata, SP.SP_TEN, SP.SP_GIA, SP.SP_MA,
                            SP.NGAYDANG, TV.TV_MA
                            FROM SANPHAM AS SP JOIN THANHVIEN AS TV
                             ON SP.TV_MA = TV.TV_MA
                             WHERE SP.SP_TRANGTHAI = 1
                             AND
                             SP.LOAISP_MA='3'";
                            $qr = mysqli_query($mysqli, $product);
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
                                    <from action="" method="POST">
                                    <ul id="nuttocao">
                                        <li id="c"><ion-icon id="tocao" style="font-size: 18px;float: right;
                                        margin-top: 10%; margin-right: 10%;" name="ellipsis-vertical-outline">
                                    </ion-icon><span>
                                   <!-- <textarea cols="10" rows="1" name="noidungtocao" values="">Tố cáo
                                   </textarea> -->
                                   <span>
                                    <input type="submit" name="baocao1" value="Quy phạm chính sách"/><br>
                                    <input type="submit" name="baocao2" value="Sản phẩm không phù hợp"/>
                                    <!-- <a id="baocao" href="index.php/tocao=1&sp=?php echo $list_pro['SP_MA']; ?>"></a> <br>
                                    <a id="baocao" href="tocao=2&sp=?php echo $list_pro['SP_MA']; ?>"></a> -->
                                
                               <!-- <a href="index.php?tocao=" style="float: right; margin-right: 1rem">Gửi</a>
                                </span></li> -->
                                
                        </span>
                                    </ul>
                            </from>
                                </div>
                            </p>
                            </li>
                        <?php } ?>
                    </ul>
    </form>
<?php }
else{?>
    <form action="" method="GET" name="CHITIET">
<ul>
    <?php $product = "SELECT SP.avata, SP.SP_TEN, SP.SP_GIA, SP.SP_MA,
                        SP.NGAYDANG, TV.TV_MA
                        FROM SANPHAM AS SP JOIN THANHVIEN AS TV
                         ON SP.TV_MA = TV.TV_MA
                         WHERE SP.SP_TRANGTHAI = 1";
                        $qr = mysqli_query($mysqli, $product);
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
                                    <!-- <input type="submit" name="baocao1" value=""/><br> -->
                                    <!-- <input type="submit" name="baocao2" value="Sản phẩm không phù hợp"/> -->
                                    <!-- <a id="baocao" href="index.php/tocao=1&sp=?php echo $list_pro['SP_MA']; ?>"></a> <br>
                                    <a id="baocao" href="tocao=2&sp=?php echo $list_pro['SP_MA']; ?>"></a> -->
                                
                               <!-- <a href="index.php?tocao=" style="float: right; margin-right: 1rem">Gửi</a>
                                </span></li> -->
                                
                        </span>
                                </form>
                            </div>
                        </p>
                        
                        
                        
                        </li>
                    <?php }
                    

                    
                    ?>
                </ul>
</form>
<?php } 
   if(isset($_GET['tocao'])){?>
        <?php if(isset($_COOKIE['MA_TV'])){ 
                    include("models/xuly.php");
                    sptocao();
            ?>
           <script>
                alert("Cảm ơn bạn đã đóng góp cho chúng tôi.");
                window.location = "index.php";
            </script>
          
       <?php }else{ ?>
            <script>
                alert("Vui lòng đăng ký hoặc đăng nhập tài khoản");
                window.location = "index.php";
            </script>
       <?php  }
   }
?>
</div>