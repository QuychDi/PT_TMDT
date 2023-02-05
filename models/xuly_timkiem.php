<?php
function timkiem(){
    include("config/config.php");
    $text_content = $_POST['timkiem'];
    $truyvan = "SELECT*FROM SANPHAM
    WHERE SP_TEN LIKE '%".$text_content."%'";
    $result = mysqli_query($mysqli, $truyvan);
    $exception_timkiem = mysqli_num_rows($result);
    if($text_content !== ''){
    if($exception_timkiem > 0){
    ?>
  <h4 style="color: #38AD55">Kết quả tìm kiếm <?php echo "'".$text_content."'"; ?></h4>
   <form action="" method="GET" name="CHITIET">
       <?php while($sanpham = mysqli_fetch_array($result)){ ?>
<ul>
                    <li>

                        <div id="img"><img src="uploads/<?php echo $sanpham['avata'];?>" /></div>
                        <div id="thongtin"><?php echo $sanpham['SP_TEN']; ?></div>
                        <div id="giaban"><?php echo number_format($sanpham['SP_GIA']) . ' VNĐ'; ?></div>
                        <div id="nut">
                            <a href="https://chat.zalo.me/?phone=0399012157" style="color: seagreen;">Trao Đổi</a> |
                            <a href="index.php?menu=chitietsp&masp=<?php echo $sanpham['SP_MA']; ?>&matrang=<?php echo $sanpham['TV_MA']; ?>" style="color: seagreen;">Xem Chi Tiết</a>
                        </div>
                        <p>
                            <ion-icon style="font-size: 18px;margin-top: 10%;float: left; margin-left: 10%;" name="calendar-outline"></ion-icon>
                            <i style="font-size: 16px;margin-top: 10%;float: left; margin-left: 1%; font-weight: normal;">
                                <?php echo $sanpham['NGAYDANG']; ?>
                            </i>
                            <div class="bacham">
                                <form action="" method="POST">
                                <ul id="nuttocao">
                                    <li id="c"><ion-icon id="tocao" style="font-size: 18px;float: right;
                                    margin-top: 10%; margin-right: 10%;" name="ellipsis-vertical-outline">
                                </ion-icon>
                                <span>
                                     <a id="baocao" href="?tocao=Quy phạm chính sách&sp=<?php echo $sanpham['SP_MA']; ?>">Quy phạm chính sách</a> <br>
                                     <a id="baocao" href="?tocao=Sản phẩm không phù hợp&sp=<?php echo $sanpham['SP_MA']; ?>">Sản phẩm không phù hợp</a>
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
                        </ul>
                      
                    <?php }
                    }else{ ?>
                    <hr>
                        <div class="find_errors" style=" ">
                        <img style="width: 30%;display: flex;" src="img/hotro/product_notfound.png"> <br>
                        <h4 style="text-align: center; color: #C70039">Sản phẩm bạn tìm kiếm không tồn tại...</h4>
                        </div>
                       <?php }
                    }else{ ?>
                      <hr>
                           <div class="find_errors" style="display: flex; ">
                                <img style="width: 30%;" src="img/hotro/product_notfound.png">
                           </div>
                   <?php }
                    } ?>
               