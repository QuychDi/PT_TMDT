<script>
        function lienhe() {
            var bul =
            document.getElementById("popup");
            bul.classList.toggle('active');
            // alert("helo");
            
        }
    </script>
<div class="hienthi" id="popup" style="z-index:1 ">
    <form action="" method="POST" autocomplete="off">
        <div class="btncls"><ion-icon onClick="lienhe()" style="color: white" name="close-outline"></ion-icon></div>
        <h3 style="padding-bottom: 5%; color:#0693F7; text-align: center">Liên Hệ Người Bán</h3>
        <div class="input-container">
            <div class="filed">
                <input type="text" name="name" class="input" value="" placeholder="Họ tên khách hàng" />
                <ion-icon name="person"></ion-icon>
            </div>
            <div class="filed">
                <input type="text" name="phone" class="input" value="" placeholder="Số điện thoại" />
                <ion-icon name="call"></ion-icon>
            </div>
            <div class="filed">
                <input type="email" name="email" class="input" value="" placeholder="Email" />
                <ion-icon name="mail"></ion-icon>
            </div>
            <div class="filed">
                <textarea name="content_chat" cols="30" rows="2" placeholder="Nhập nội dung" style="padding-left: 5%; outline:none" values=""></textarea>

            </div>
            <div class="btn_email">

                <button type="submit"  name="guimail">GỬI</button>


                <button type="reset">Reset</button>

            </div>
        </div>
    </form>
    <?php 
        // $name =     $_POST['name'];
        // $phone =    $_POST['phone'];
        // $email =    $_POST['email'];
        // $content =  $_POST['content_chat'];
        // if(!empty($email) && !empty($content)){
        //     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        //         $receiver = "quychdi113@gmail.com";
        //         $subject = "From: $name <$email>";
        //         $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessege: $content";
        //         $sender = "From: $email";
        //         if(mail($receiver, $subject, $body,$sender)){
        //             echo "Your mail is has been";
        //         }else{
        //             echo "Enter a valid email add";
        //         }
        //     }
        // }else{
        //     echo "email not null";
        // }
        
    ?>
</div>
