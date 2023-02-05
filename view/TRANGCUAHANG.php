<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        .cuahang {
            width: 80%;
            height: 400px;
            float: right;
            display: flex;
        }
        /* .cuahang table td {
             border: 1px solid darkgray;
        } */
        
        .cuahang table {
            margin: 0;
            padding: 0;
            /* border-collapse: collapse; */
        }
        
        .cuahang .infor_cuahang {
            padding-top: 5%;
            padding-left: 2%;
            float: left;
            width: 40%;
            height: 400px;
            /* background-color: darkorange; */
        }
        
        .cuahang .infor_cuahang table td img {
            border-radius: 100px;
        }
        
        .cuahang .infor_addres {
            padding-top: 5%;
            border-left: 1px solid slategrey;
            width: 59%;
            height: 400px;
            /* background-color: darkorchid; */
            float: left;
        }
        
        .cuahang .infor_addres ul li {
            list-style: none;
        }
        
        .ngattrang {
            clear: both;
            /* padding-top: 10%; */
            height: 40px;
            width: 100%;
            background-color: #EEEEEE;
        }
    </style>
</head>

<body>
    <div class="cuahang">
        <?php $info = "SELECT TV.TV_TEN, TV.TV_SDT, 
                        TV.TV_DC, TV.TV_NGAYTHAMGIA, TV.email, COUNT(SP.SP_MA) AS SL
                        FROM THANHVIEN AS TV JOIN SANPHAM AS SP
                        ON TV.TV_MA = SP.TV_MA
                        WHERE TV.TV_MA='".$_GET['matrang']."'
                        GROUP BY SP.TV_MA";
                        $qr = mysqli_query($mysqli, $info);
                        $result = mysqli_fetch_array($qr);
                        ?>
        <div class="infor_cuahang">
            <table>
                <tr>
                    <td colspan="2" rowspan="3">
                        <img style="width: 120px; height:120px;" src="img/sanpham/4connai.jpg" />
                    </td>
                    <td style="padding-left: 5%; font-size: 18px; display: flex;align-items: center;justify-content: center;">
                        <b><ion-icon name="ribbon" style="color:#3498DB;"></ion-icon><?php echo $result['TV_TEN']; ?></b></td>
                </tr>
                <tr>
                    <td style="padding-left: 2rem;">
                        <ion-icon name="folder-open-outline"></ion-icon> Bài đăng:</td>
                    <td style="text-align:center"><?php echo $result['SL']; ?></td>
                </tr>
                <tr>
                    <!-- <td colspan="2">&nbsp</td> -->
                    <td style="padding-left: 2rem;">
                        <ion-icon name="calendar-outline"></ion-icon> Ngày tham gia:</td>
                    <td><?php echo $result['TV_NGAYTHAMGIA']; ?></td>
                </tr>
            </table>
        </div>
        <div class="infor_addres">
            <ul>
                <li>
                    <ion-icon name="map-outline"></ion-icon> Địa chỉ: <?php echo $result['TV_DC']; ?></li>
                <!-- <ul>
                    <li>
                        Khu vực/ Ấp: </li>
                    <li>
                        Xã/Phường: </li>
                    <li>
                        Quận/Huyện: </li>
                    <li>
                        Tỉnh/Thành:</li>
                </ul> -->
                <li>
                    <ion-icon name="person-outline"></ion-icon> Liên hệ:</li>
                <ul>
                    <li>
                        <ion-icon name="call-outline"></ion-icon> SĐT: <?php echo $result['TV_SDT']; ?>
                    </li>
                    <li>
                        <ion-icon name="mail-outline"></ion-icon> Email: <?php echo $result['email']; ?>
                    </li>
                </ul>
                <li>
                    <ion-icon name="chatbox-ellipses-outline"></ion-icon> Phản hồi chat:</li>
            </ul>
        </div>
    </div>
    <div class="ngattrang"></div>
</body>

</html>