<?php include "header.php" ?>


    <link rel="stylesheet" href="css/swiper.css">

    <script src="js/swiper.jquery.js"></script>


<div style="margin-top: 120px;position: relative">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div style="margin: 0 auto;width: 40px" >
                    <div style="text-align: center;position: absolute;top:-30px;">
                    <img src="images/tx001.jpg"  width="48px" style="border-radius: 50%;margin: 0 auto" alt="">
                    </div>
                </div>
                    <div style="margin-top:40px">
                    <p style="text-align: center">范冰冰</p>
                    <p style="text-align: center;font-size: 12px">著名电视演员</p>
                    </div>


                <div style="margin: 0 auto;position: absolute;bottom: 0px;width: 160px;text-align: center" >
                    <p style="font-size: 12px">祝各位老师节日快乐</p>
                </div>


            </div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
            <div class="swiper-slide">Slide 10</div>
        </div>

    </div>
</div>

    <style>
        .bottom-btn {
            width: 100%;
            position: absolute;
            bottom: 5%;

        }
        .btn-item {
            display: inline-block;
            width: 48.5%;
        }
        .btn-item .btn {
            color: #fff;
            font-size: 16px;
            line-height: 17px;
            height: 35px;
            margin: 20px 25px;
            padding: 5px;
            background-color: #03a9f4;
            border-radius: 15px;
        }
        .btn-area {
            width: 100%;
            text-align: center;
        }
    </style>

    <div class="bottom-btn">
        <div class="btn-area">
            <div class="btn-item">
                <a href="understand.html">
                    <div class="btn">了解浪潮<br> Inspur</div>
                </a>
            </div>
            <div class="btn-item">
                <a href="visit.html">
                    <div class="btn">参观浪潮<br>Visit Inspur</div>
                </a>
            </div>
        </div>

    </div>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            slidesPerView: 2,
            centeredSlides: true,
            paginationClickable: true,
            spaceBetween: 30,
            grabCursor: true
        });
    </script>
    <style>
        /*
        (function(){ 	//设置背景图片高度(function(){ 	//设置背景图片高度("#Background").height($("#Background").height());
        });*/
        body {
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: -10;
            background-image: url('images/11.jpg');
            background-repeat: no-repeat;
            background-position: 0px 0px;
            background-size: 100% 100%;
        }
        .swiper-container {
            width: 100%;
            height: 260px;
            margin: 20px auto;
        }
        .swiper-slide {

            font-size: 18px;
            background: #fff;
            width: 60%;

        }
        .swiper-slide:nth-child(2n) {
            width: 40%;
        }
        .swiper-slide:nth-child(3n) {
            width: 20%;
        }
    </style>


<?php include "footer.php" ?>