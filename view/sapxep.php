<div class="seach_desc">
    <?php include("config/config.php"); 
        $danhmuc = "SELECT*FROM DOTUOI";
    ?>
    <div id="sapxep">
        <i><ion-icon name="options-outline"></ion-icon>Sắp xếp: </i>
        <select style=" border: 1px solid #B8B8B8; margin-right: 2%">
            <option>Sản phẩm mới nhất</option>
            <option>Độ tuổi từ 1 đến 6 tuổi</option>
            <option>Độ tuổi từ 7 đến 17 tuổi</option>
        </select>
        <i><ion-icon name="swap-vertical-outline"></ion-icon>Giá: </i>
        <select  style=" border: 1px solid #B8B8B8;">
            <option>Tăng dần</option>
            <option>Giảm dần</option>
        </select>
        <!-- <input style="width: 20%; height: 30px;border: none;position: relative;transform: translateY(0.8rem);" type="submit" name="sapxep" values="GỬI"/> -->
    </div>
    <form action="" method="POST">
    <div id="btn_timkiem" style="float: right;">
        <i>Tìm Kiếm:</i>
       
        <input type="search" name="timkiem" values="" placeholder="Bạn cần tìm gì ?" />
        <!-- <a href="index.php?menu=timkiem">Tìm Kiếm</a> -->
        <button id="icon_search" name="submit" type="submit">
				<ion-icon name="search"></ion-icon>
					</button>
          
    </div>
    </form>
</div>
<div class="sanpham" style="">
<?php
				if(isset($_POST['submit'])){
					include("models/xuly_timkiem.php");
					timkiem();
				}
			?>

</div>