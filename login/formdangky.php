<html>

<head>
    <meta charset="utf-8" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <style>
        input,
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        /* input[type=password],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
         */
        input[type=submit] {
            width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        input[type=submit]:hover {
            background-color: #45a049;
        }
        
        input[type=button] {
            width: 100%;
            background-color: red;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        input[type=button]:hover {
            background-color: red;
        }
        
        div {
            padding-top: 8%;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            width: 100%;
            height: 82%;
            border-radius: 10px;
            background-color: #f2f2f2;
            /* padding: 10px; */
        }
        
        h1 {
            color: black;
        }
        td#dangky{
        display: flex;
        /* color: red; */
        align-items: center;
        justify-content: center;
        position: relative;
        transform: translateX(-3rem);
    }
    td#dangky a{
        color: black;
        text-decoration: none;
        transition: 0.5s;
    }
    td#dangky a:hover{
        color: red;
    }
    </style>
    
    
</head>

<body>

    <div>
        <!-- <form phai co action va phuong thuc Post/GET -->
        <form action="" method="post" name="dangky">
            <h1 style="text-align: center;">ĐĂNG KÝ TÀI KHOẢN </h1>
            <table style="margin: auto;">
                <tr>
                    <td>
                        <h1>Tên đăng nhập :</h1>
                    </td>
                    <td>
                        <input type="text" id="username" name="username" value=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h1> Mật khẩu :</h1>
                    </td>
                    <td>
                        <input type="password" name="pass" placeholder="8-16 ký tự" id="password" value=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h1>Họ và Tên:</h1>
                    </td>
                    <td>
                        <input type="text" id="hoten" name="name" value=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h1>Ngày sinh:</h1>
                    </td>
                    <td>
                        <input type="date" id="ho" name="birth" value="" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h1>Số điện thoại :</h1>
                    </td>
                    <td>
                        <input type="text" placeholder="0399011111" required id="sdt" name="phone_n" value=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h1>E-mail :</h1>
                    </td>
                    <td>
                        <input type="email" placeholder="example@gmail.com" id="email" name="email" value="" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h1>Địa chỉ :</h1>
                    </td>
                    <td>
                        <input type="text" placeholder="" id="diachi" name="diachi" value="" required/>
                    </td>
                </tr>
                <tr>
                <td><input  style="width: 100%;background-color: #45a049;border: none;color: white" type="reset" value="Reset"/> </td>
                    <td><input style="width: 100%" type="submit" name="dangky" value="Đăng ký"/></td>
                </tr>

                <tr>
                   <td>&nbsp;</td>
                   <td style="padding-top: 5%" id="dangky">
                        <a href="../" style="padding-right: 2%">
                            <ion-icon name="home-outline"></ion-icon> 
                        </a> 
                    | 
                        <a href="index.php" style="padding-left: 2%">Đăng Nhập</a>
                    </td>
               </tr>
               


            </table>
            
             
            </form>
    
            <?php 
    if(isset($_POST['dangky'])){
       include("../models/xulydangky.php"); 
       add_user();
    } ?>
    </div>
 </body>
</html>