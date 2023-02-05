<head>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <style>
        .danh_muc {
        width: 100%;
        /* height: 150px; */
        float: left;
        font-size: 20px;
        height: 325px;
        animation:backInDown;
        animation-duration: 2s;
        transition: 1;
        z-index: -10;
        
        /* background-color:  #ff99e6; */
       
        /* position: relative; */
        /* z-index:3; */
    }

    #info{
        font-weight: bold;
        font-size: 22px;
        color: #2E86C1;
        position: absolute;
        transform: translate(-5%, -15rem);
    }
    #info a{
        color: #04AD4C;

    }
    #info a:hover{
        color: #E22B18;
    }
    .danh_muc img{
       
        position: relative;
        display: flex;
    }
    .main_left .danh_muc table#thongtk {
        /* width: 100%; */
        font-size: 18px;
        margin-top: 5%;
   
    }
    .main_left .danh_muc table#thongtk tr td#label{
        font-weight: bold;
        width: 35%;
        padding-right: 2%;
        /* width: 20%; */
        /* padding: 2%; */
        
    } 
    .main_left .danh_muc table#thongtk tr td input#value_input,.main_left .danh_muc table#thongtk tr td textarea#value_input{
        /* width: ai */
        border: none;
        border-bottom: 1px solid thistle;
        outline: none;
        
    }
    </style>
    </head>
<body>
 
    <div class="main_left">
        <div class="danh_muc" style="animation: none;padding-left: 4%; padding-bottom: 4%;">
            <?php
                    if(isset($_COOKIE['MA_TV'])){
                            $kh = "SELECT*FROM THANHVIEN, TAIKHOAN
                                    WHERE THANHVIEN.TV_MA = TAIKHOAN.TV_MA
                                    AND THANHVIEN.TV_MA = '".$_COOKIE['MA_TV']."'";
                            $qr = mysqli_query($mysqli, $kh);
                            $show = mysqli_fetch_array($qr);
                        ?>
                           <?php if(isset($_POST['capnhat'])){?>
                            <table id="thongtk">
                            <form action = "" method="POST"> 
                              <tr><th colspan="2" style="text-align: center;color: #04AD4C;"><h3>CẬP NHẬT THÔNG TIN CÁ NHÂN</h3></th></tr>
                            <tr>
                                <td id="label">Tên đănh nhập: </td>
                                <td>
                                   <input id="value_input" type="text" name="tendangnhap" value="<?php echo $show['TK_TEN']; ?>"/> 
                                
                                </td>
                            </tr>
                            <tr>
                                <td id="label">Họ và tên: </td>
                                <td>
                                   <input id="value_input" type="text" name="name" value="<?php echo $show['TV_TEN']; ?>"/> 
                                
                                </td>
                            </tr>
                            <tr>
                                <td id="label">Ngày sinh: </td>
                                <td>
                                   <input id="value_input" type="text" name="birthday" value="<?php echo $show['TV_NGAYSINH']; ?>"/> 
                                
                                </td>
                            </tr>
                            <tr>
                                <td id="label">Số điện thoại: </td>
                                <td>
                                   <input id="value_input" type="text" name="phone_number" value="<?php echo $show['TV_SDT']; ?>"/> 
                                
                                </td>
                            </tr>
                            <tr>
                                <td id="label">Địa chỉ: </td>
                                <td>
                                    <textarea cols="30" id="value_input" rows="3"  name="address" value="">
                                        <?php echo $show['TV_DC']; ?>
                                    </textarea>
                                   
                                
                                </td>
                            </tr>
                            <tr>
                                <td id="label">Email: </td>
                                <td>
                                   <input id="value_input" type="text" name="email" value="<?php echo $show['email']; ?>"/> 
                                
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><input style="width: 50%;margin-top:5% ;background-color: #04AD4C;outline: none; border: none; color: white" type="submit" name="update_acc" value="CẬP NHẬP"></td>
                            </tr>
                           </form>
                          </table>
                          <?php }else{ ?>




                          <table id="thongtk">
                              <form action=""  method="POST">
                              <tr><th colspan="2" style="text-align: center;color: #04AD4C;"><h3>THÔNG TIN CÁ NHÂN</h3></th></tr>
                            <tr>
                                <td id="label">Tên đănh nhập: </td><td><?php echo $show['TK_TEN']; ?></td>
                            </tr>
                            <tr>
                                <td id="label">Họ và Tên: </td><td><?php echo $show['TV_TEN']; ?></td> 
                            </tr>
                            <tr>
                                <td id="label">Ngày sinh: </td><td><?php echo $show['TV_NGAYSINH']; ?></td> 
                            </tr>
                                <td id="label">Số điện thoại: </td><td><?php echo $show['TV_SDT']; ?></td> 
                            <tr>
                            </tr>
                                <td id="label">Địa chỉ: </td><td><?php echo $show['TV_DC']; ?></td> 
                            <tr>
                            </tr>
                                <td id="label">Email: </td><td><?php echo $show['email']; ?></td> 
                            <tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><input style="width: 50%;margin-top:5%  ;background-color: #04AD4C;outline: none; border: none; color: white" type="submit" name="capnhat" value="CẬP NHẬP"></td>
                            </tr>
                            </form>
                          </table>
                     
                    <?php }
                     ?> 
                       



                    <?php }
                       
                    else{?>
                        <img style="width: 30%" src="img/icon_danhmuc/dangnhap.png"/>
                        <span id="info" style="text-align: center; ">Vui lòng đăng ký tài khoản <a href="login/formdangky.php">Tại đây</a>. Hoặc đăng nhập <a href="login/formdangnhap.php">Tại đây</a> </span>
                   <?php }
            ?>
        </div>
    </div>
    <?php
         if(isset($_POST['update_acc'])){
            include("models/xuly.php");
            update_acc();
        }
    ?>
    </div>
</body>