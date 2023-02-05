
<div class="binhluan">
    <?php 
        // include("config/config.php");
        $thanhvien = "SELECT TV.TV_TEN, DG.DG_NOIDUNG, DG.DG_THOIDEIM
        FROM DANHGIA AS DG, THANHVIEN AS TV
        WHERE DG.TV_MA = TV.TV_MA AND DG.SP_MA ='".$_GET['masp']."'";
        $qr = mysqli_query($mysqli, $thanhvien); 
        
    ?>
        
            <h5 style="padding-top: 5%;">Đánh giá sản phẩm</h5>
            <div class="chitietdanhgia" style="width: 100%;margin-bottom: 2%;">
            <table id="danhgia" style="margin:0; padding: 0">
                <?php 
                    while($list = mysqli_fetch_array($qr)){?>
                        <tr>
                            <td id="label" style="width:10%">
                                <b><?php echo $list['TV_TEN'];  ?>: </b>
                            </td>
                            <td><?php echo $list['DG_NOIDUNG']. " ( " .$list['DG_THOIDEIM']. " )"; ?></td>
                        </tr>
                <?php    }
                ?>
            </table>

            </div>
            <form action="" method="POST" name="danhgia">
            <textarea cols="100" rows="5" style="padding-left:2%; outline: none;" name="noidung_danhgia"></textarea> <br>
            <!-- <a href="?menu=chitietsp&masp=php echo $_GET['masp']; ?>&matrang=<php echo $_GET['matrang'];?>?danhgia" name="gui_danhgia" style="width:4%">Gui</a> -->
            <input type="submit" value="Gửi" name="gui_danhgia" style="width:4%" />
            <input type="reset" value="Reset" style="width:4%" />
        </form>

        <?php
            if(isset($_POST['gui_danhgia'])){
                include("config/config.php");
                $matv = $_COOKIE['MA_TV'];
                $id= $_GET['masp'];
                $noidung =  $_POST['noidung_danhgia'];
                $date = date("Y-m-d");
                $add_comm = "INSERT INTO DANHGIA VALUES('$matv', '$id', '$noidung', '$date')";
                mysqli_query($mysqli,$add_comm);
                 ?>
                <script>
                    window.location='?menu=chitietsp&masp=<?php echo $_GET['masp'];?>&matrang=<?php echo $_GET['matrang']; ?>';
                </script>
                <?php
            //     echo $_POST['noidung_danhgia'];
            //     // echo $_GET['noidung_danhgia'];
            // }
            // if(isset($_GET('danhgia'))){
            //     echo $GET['masp'];
            }
        ?>
    </div>