
<style>
    #sanpham_ganday .quangcao_left {
        width: 980px;
        height: 250px;
        /* background-color: #cc33ff; */
        float: left;
    }
    
    #sanpham_ganday .quangcao_left img {
        width: 100%;
        height: 250px;
        float: left;
    }
    
    #sanpham_ganday .quangcao_right {
        width: 550px;
        height: 250px;
        /* background-color: #ff33cc; */
        float: left;
       
    }
    
    #sanpham_ganday .danh_muc {
        width: 100%;
        /* height: 150px; */
        float: left;
        /* background-color:  #ff99e6; */
    }
    
    #sanpham_ganday .danh_muc ul {
        /* display: flex; */
        position: relative;
        font-weight: bold;
        width: 100%;
        /* height: 150px; */
        margin: 0 auto;
        padding: 0 auto;
        z-index: 3;
        /* margin: auto;
        padding: auto; */
    }
    
    #sanpham_ganday .danh_muc ul ion-icon {
        color: #00C686;
    }
    
    #sanpham_ganday .danh_muc ul a li {
        /* padding-top: 2%; */
        padding-top: 23px;
        /* height: 150px; */
        width: 25%;
        opacity: 1;
        color: #00C686;
        /* transition: 1s; */
    }
    
    #sanpham_ganday .danh_muc ul a li:hover {
        /* background-color: #f9fbff; */
        opacity: 1;
        color: #EE3713;
        animation: heartBeat;
        transition: 1s;
        background-color: #FFFFFF;
        border-bottom: 2px solid #087BEE;
        box-shadow: 5px 5px 20px 5px #888888;
        /* referring directly to the animation's @keyframe declaration */
        animation-duration: 6s;
    }
    
    #sanpham_ganday .danh_muc ul a li ion-icon:hover {
        color: #EE3713;
        animation: heartBeat;
        transition: 1s;
        /* referring directly to the animation's @keyframe declaration */
        animation-duration: 5s;
    }
    
    h2 {
        color: #ffffff;
    }
</style>

<div class="main_left">
    <div id="sanpham_ganday">
        <div class="quangcao_left">
            <img src="img/quangcao/QUANGCAOquychdi.png" />
        </div>
        <div class="quangcao_right">
            <img src="img/quangcao/linhquangcao.png">
        </div>
        <div class="danh_muc">
            <ul>
                <?php $loai = "SELECT*FROM LOAISP";
                        $qr = mysqli_query($mysqli, $loai);
                        while($loaisp  = mysqli_fetch_array($qr)){?>
                            <a href="index.php?menu=<?php echo $loaisp['LOAISP_MA']; ?>">
                                <li>
                                    <ion-icon style="font-size: 50px" name="color-palette-outline"></ion-icon>
                                    <br><?php echo $loaisp['LOAISP_TEN']; ?>
                                </li>
                            </a>
                <?php } ?>
                <!-- <a href="index.php?menu=be68">
                    <li>
                        <ion-icon style="font-size: 50px" name="color-palette-outline"></ion-icon>
                        <br>Bé 6 đến 8 tuổi
                    </li>
                </a>
                <a href="index.php?menu=be912">
                    <li>
                        <ion-icon style="font-size: 50px" name="color-palette-outline"></ion-icon>
                        <br>Be 9 đến 12 tuổi
                    </li>
                </a>
                <a href="index.php?menu=be_all">
                    <li>
                        <ion-icon style="font-size: 50px" name="color-palette-outline"></ion-icon>
                        <br>Tất cả
                    </li>
                </a> -->
            </ul>
        </div>
    </div>
</div>