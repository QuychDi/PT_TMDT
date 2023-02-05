<head>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <style>
        		*{
			margin: 0px auto;
			padding: 0px auto;
		}
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
		.main_tk{
			z-index: 1;
			position: absolute;
			width: 680px;
			height: 320px;
			border-radius: 30px;
			border: 5px solid #0F77EC;
			background-color: #FAF5F5;
			box-shadow: 20px 20px 50px #267BF1;
			margin-left: 280px;
		}
		.main_tk #close{
			margin-right: 15px;
		}
		.main_tk #close a:hover{
			color: #BE4B06;
		}
		.main_tk table tr td input{
			outline: none;
			padding-left: 5px;
		}
		.main_tk .truyvan{
			clear: both;
		}
		.main_tk .truyvan table tr td{
			padding-left: 10px;
		}
		.main_tk .truyvan table tr td input{
			outline: none;
			width: 220px;
			padding-left: 8px;
			border: 1px solid #000000;
			border-radius: 10px;
		
		}
		.main_tk .truyvan #btn_capnhat{
			padding-left: 100px;
		}
       
    #info{
        font-weight: bold;
        font-size: 22px;
        color: #2E86C1;
        position: absolute;
        transform: translate(20%, -15rem);
    }
    #info a{
        color: #04AD4C;

    }
    #info a:hover{
        color: #E22B18;
    }
    .danh_muc img{
       
        position: relative;
		transform: translate(20rem, -15rem);
        /* display: flex; */
    }
    b{
        font-size: 20px;
    }
    </style>
    </head>
<body>
    <div class="main_left">
      
        <?php
				if(isset($_COOKIE['MA_TV'])){?>
			<?php	if(isset($_POST['kh_capnhat'])){ ?>
				<form method="post" action="models/capnhat_TK.php">
				<table>
                <th colspan="4" style="text-align: center; padding-bottom: 10px; color:#0F77EC; font-size: 24px;">THÔNG TIN CÁ NHÂN</th>
						<?php 
						$truyvan_kh = "SELECT*FROM thanhvien WHERE TV_MA = '".$_COOKIE['MA_TV']."'";
						$thucthi_kh = mysqli_query($mysqli, $truyvan_kh);
						$col_kh = mysqli_fetch_array($thucthi_kh);
						?>
						<tr>
							<td><b>Khách hàng </b></td><td colspan="3"> <input name="hotenKH" style="width: 400px; type="text" value="<?php echo $col_kh['TV_TEN']; ?>"/></td>
						</tr>
                        
						<tr>
							<td><b>Email</b></td><td colspan="3"><input name="emailKH" style="width: 400px;" type="text" value="<?php echo $col_kh['email'];?>"/></td>
						</tr>
						<tr>
							<td><b>Địa chỉ </b></td><td colspan="3"><input name="diachiKH"  style="width: 400px;"  type="text" value="<?php echo $col_kh['TV_DC'];?>"/></td>
						</tr>
                        <tr>
	                        <td><b>Điện thoại </b></td><td colspan="3"><input name="sdtKH"  style="width: 400px;"  type="text" value="<?php echo $col_kh['TV_SDT'];?>"/></td>
                        </tr>
                        <tr>
                            <td><b>Ngày sinh </b></td><td colspan="3"><input name="ngaysinhKH"  style="width: 400px;"  type="text" value="<?php echo $col_kh['TV_NGAYSINH'];?>"/></td>
				</table>
				<br>
				<br>
				<div id="btn_capnhat">
					<button style="margin-left:auto;margin-right:auto;display:block;color:blue;" type="submit" name="capnhat_tt" ><b>XÁC NHẬN CẬP NHẬT THÔNG TIN</b></button>
				</div>
				<?php  }else{ ?>
				<table>
					<!-- <div id="logo_kh" style="float: left; z-index: 2; position: relative;"><img style="width: 180px;"/></div> -->
					<th colspan="4" style="text-align: center; padding-bottom: 10px; color:  #0F77EC; font-size:24px;">THÔNG TIN CÁ NHÂN</th>
					
						<?php 
						$truyvan_kh = "SELECT TV_TEN,TV_SDT,email,TV_DC,TV_NGAYSINH FROM thanhvien WHERE TV_MA = '".$_COOKIE['MA_TV']."'";
						$thucthi_kh = mysqli_query($mysqli, $truyvan_kh);
						$col_kh = mysqli_fetch_array($thucthi_kh);
						?>
						
						<tr>
							
							<td><b><ion-icon name="people-outline"></ion-icon> Khách hàng: </b></td><td><b style="color: #018B3A;"><i><?php echo $col_kh['TV_TEN']; ?></i></b></td>
						</tr>
                        <TR>
                        <td><b><ion-icon name="call-outline"></ion-icon> Số điện thoại :</b></td><td><b style="color: #018B3A;"><i><?php echo $col_kh['TV_SDT'];?></i></b></td>
                        </TR>
						<tr>
							<td ><b><ion-icon name="mail-outline"></ion-icon> Email: </b></td ><td  style="color: #018B3A;" colspan="4"><b><i><?php echo $col_kh['email'];?></i></b></td>
						</tr>
						<tr>
							<td><b><ion-icon name="home-outline"></ion-icon> Địa chỉ:  </b></td><td style="color: #018B3A;" colspan="4"><b><i><?php echo $col_kh['TV_DC']; ?></i></b></td>
						</tr>
                        <tr>
	                        <td><b><ion-icon name="calendar-outline"></ion-icon> Ngày sinh: </b></td><td style="color: #018B3A;" colspan="4"><b><i><?php echo $col_kh['TV_NGAYSINH']; ?></i></b></td>
                        </tr>

					</table>
			<br>
			<br>
				</form>
				<div id="btn_capnhat">
					<form action="" method="post">
					<button style="margin-left:auto;margin-right:auto;display:block;color:blue;" type="submit" name="kh_capnhat" ><b>CẬP NHẬT THÔNG TIN</b></button>
					</form>
				</div>
			
				<?php } }else{?>
					<img style="width: 30%" src="img/icon_danhmuc/dangnhap.png"/>
                        <span id="info" style="text-align: center; ">
							Vui lòng đăng ký tài khoản <a href="login/formdangky.php">Tại đây</a>. 
							Hoặc đăng nhập <a href="login/formdangnhap.php">Tại đây</a> 
						</span>

				<?php }
				?>
                
    </div>
</body>