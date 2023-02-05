<html>

<head>
    <meta charset="utf-8" />
</head>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<style>
    *{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

    }
    input[type=text],
    select {
        width: 120%;
        padding: 12px 20px;
        /* margin: 8px 0; */
        /* display: inline-block; */
        border: 1px solid #ccc;
        border-radius: 4px;
        /* box-sizing: border-box; */
        outline: none;
    }
    
    input[type=password],
    select {
        width: 120%;
        padding: 12px 20px;
        margin: 8px 0;
        /* display: inline-block; */
        border: 1px solid #ccc;
        border-radius: 4px;
        /* box-sizing: border-box; */
        outline: none;
    }
    
    input[type=submit] {
        width: 120%;
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
        padding-top: 10%;
        /* border-radius: 10px; */
        width: 100%;
        height: 78%;
        background-color: #f2f2f2;
        /* padding: 10px; */
        position: relative;
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


<body>
    <div>
        <script src="dangky.php">
            jvdangky(); // gọi hàm nó ra cđl
        </script>
        <!-- <form phai co action va phuong thuc Post/GET -->
        <form action="" method="post">
            <h1 style="text-align: center;">ĐĂNG NHẬP</h1>
            <table style="margin: auto;">
                <tr>
                    <td>
                        <h1>Tên đăng nhập :</h1>
                    </td>
                    <td>
                        <input type="text" id="username" name="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h1> Mật khẩu :</h1>
                    </td>
                    <td>
                        <input type="password" id="password" name="pass">
                    </td>
                </tr>
                <td>&nbsp;</td>
                <td> <input type="submit" name="sigin" value="Đăng nhập"></td>
               <tr>
                   <td>&nbsp;</td>
                   <td style="padding-top: 5%" id="dangky">
                        <a href="../" style="padding-right: 2%">
                            <ion-icon name="home-outline"></ion-icon> 
                        </a> 
                    | 
                        <a href="formdangky.php" style="padding-left: 2%">Đăng Ký</a>
                    </td>
               </tr>
            </table>
    </div>
    </form>
</body>
<?php 
    if(isset($_POST['sigin'])){
        include("../models/xulydangky.php");
        customer_sigin();
    }
?>

</html>