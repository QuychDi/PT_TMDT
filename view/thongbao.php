<style>
    .danh_muc {
        width: 100%;
        /* height: 150px; */
        float: left;
        font-size: 20px;
        height: 325px;
        /* background-color:  #ff99e6; */
        box-shadow: 10px 0px 20px 2px #888888;
        /* position: relative; */
        /* z-index:3; */
    }
    
    .danh_muc ul {
        /* display: flex; */
        position: relative;
        font-weight: bold;
        width: 100%;
        /* height: 150px; */
        margin: 0 auto;
        padding: 0 auto;
        /* margin: auto;
        padding: auto; */
    }
    
    .danh_muc ul ion-icon {
        color: #00C686;
    }
    
    .danh_muc ul a li {
        /* padding-top: 2%; */
        padding-top: 5px;
        /* height: 150px; */
        width: 25%;
        opacity: 1;
        color: #00C686;
        /* transition: 1s; */
    }
    
    .danh_muc ul a li:hover {
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
    
    .danh_muc ul a li ion-icon:hover {
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
    <?php if(isset($_COOKIE['MA_TV'])){ ?>
    <div class="danh_muc" style="padding-left: 4%; padding-top: 2%;">
        <h3 style="color: #EE1633">Thông báo</h3>
        <?php 
            include("models/xuly.php");
           thongbao($_COOKIE['MA_TV']);
        ?>
    </div>
    <?php }else{
        echo "";
    } ?>
</div>