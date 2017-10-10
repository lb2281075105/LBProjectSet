<?php include "header.php" ?>

<style>
    .swiper-container {
        width: 100%;
    }

    .swiper-container img {
        display: block;
        width: 100%;
    }
</style>


<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="./images/i1.png" /></div>
        <div class="swiper-slide"><img src="./images/i1.png" /></div>
        <div class="swiper-slide"><img src="./images/i1.png" /></div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
</div>
<div class="weui-cells__title">公告：最新招聘便利店急急急</div>

<div class="weui-grids">

    <a href="list.php" class="weui-grid  bg-white">
        <div class="weui-grid__icon">
            <img src="./images/sxy.png" alt="">
        </div>
        <p class="weui-grid__label">商学院</p>
    </a>


    <a href="user.php" class="weui-grid  bg-white">
        <div class="weui-grid__icon">
            <img src="./images/zs.png" alt="">
        </div>
        <p class="weui-grid__label">招商合作</p>
    </a>
    <a href="javascript:;" class="weui-grid  bg-white">
        <div class="weui-grid__icon">
            <img src="./images/hr.png" alt="">
        </div>
        <p class="weui-grid__label">人力资源</p>
    </a>
    <a href="javascript:;" class="weui-grid  bg-white">
        <div class="weui-grid__icon">
            <img src="./images/kf.png" alt="">
        </div>
        <p class="weui-grid__label">客服中心</p>
    </a>

    <a href="javascript:;" class="weui-grid bg-white">
        <div class="weui-grid__icon">
            <img src="./images/yf.png" alt="">
        </div>
        <p class="weui-grid__label">软件研发</p>

    </a>


    <a href="javascript:;" class="weui-grid  bg-white">
        <div class="weui-grid__icon">
            <img src="./images/bld.png" alt="">
        </div>
        <p class="weui-grid__label">便利店</p>
    </a>


    <a href="javascript:;" class="weui-grid  bg-white">
        <div class="weui-grid__icon">
            <img src="./images/icon_tabbar.png" alt="">
        </div>
        <p class="weui-grid__label">Grid</p>
    </a>
    <a href="javascript:;" class="weui-grid  bg-white">
        <div class="weui-grid__icon">
            <img src="./images/icon_tabbar.png" alt="">
        </div>
        <p class="weui-grid__label">Grid</p>
    </a>
    <a href="javascript:;" class="weui-grid  bg-white">
        <div class="weui-grid__icon">
            <img src="./images/icon_tabbar.png" alt="">
        </div>
        <p class="weui-grid__label">Grid</p>
    </a>
</div>






<script src="js/swiper.js"></script>

<script>
    $(".swiper-container").swiper({
        loop: true,
        autoplay: 3000
    });
</script>

<?php include "footer.php"?>
