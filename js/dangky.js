    function jvdangky() {
        var u = document.getElementById("username").value;
        var p1 = document.getElementById("password").value;
        var h = document.getElementById("hoten").value;
        var e = document.getElementById("email").value;
        var phone = document.getElementById("sdt").value;
        var regExp2 = /^[A-Za-z][\w$.]+@[\w]+\.\w+$/;
        var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
        if (phone !== '' && u !== '' && p1 !== '' && e !== '' && h !== '' && p1 !== '') {
            if (vnf_regex.test(phone) == false) {
                alert('Số điện thoại của bạn không đúng định dạng!');
            } else if (regExp2.test(e) == false) {
                alert("Email không hợp lệ");
            } else if (p1.strlen < 8 || p1.strlen > 8) {
                alert("maath khai");
            } else {
                window.location = "../models/xulydangky.php";
            }
        } else {
            alert("Các trường không được chứa rỗng");
        }
    }