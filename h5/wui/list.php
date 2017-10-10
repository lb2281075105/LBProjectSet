<?php include "header.php" ?>
<!--幻灯片swiper  badge  cell-->

<header class='demos-header'>
    <img src="demos/images/swiper-1.jpg" alt="test" style="position: absolute;top:-4em;" width="100%" height="200px">
    <!---搜索框-->
    <div class="weui-search-bar" id="searchBar">
        <form class="weui-search-bar__form">
            <div class="weui-search-bar__box">
                <i class="weui-icon-search"></i>
                <input type="search" class="weui-search-bar__input" id="searchInput" placeholder="搜索" required="">
                <a href="javascript:" class="weui-icon-clear" id="searchClear"></a>
            </div>
            <label class="weui-search-bar__label" id="searchText"
                   style="transform-origin: 0px 0px 0px; opacity: 1; transform: scale(1, 1);">
                <i class="weui-icon-search"></i>
                <span>搜索</span>
            </label>
        </form>
        <a href="javascript:" class="weui-search-bar__cancel-btn" id="searchCancel">取消</a>
    </div>
</header>


<div class="weui-cells" style="margin-top: 20px;background-color: #f3f2f5">
    <div style="margin-top: 15px;background-color: white">
        <div class="weui-cell">
            <div class="weui-cell__hd" style="position: relative;margin-right: 10px;">
                <img src="demos/images/pic_160.png" style="width: 50px;display: block">
            </div>
            <div class="weui-cell__bd">
                <p><b><a href="d.php">软件测试工程师</a></b></p>
            </div>
            <div class="weui-cell__ft" style="font-size: 0">
                <span style="vertical-align:middle; font-size: 17px;">2人</span>
            </div>
        </div>
        <div class="weui-cell weui-cell_access">
            <div class="weui-cell__bd">
                <span style="vertical-align: middle;float:left;">五险一金</span>
                <spans style="margin-left: 5px;float: left;">绩效考核</spans>
            </div>
        </div>

        <div class="weui-form-preview__bd">
            <div class="weui-form-preview__item">
                <div class="weui-row">
                    <div class="weui-col-33" style="text-align: left">济南</div>
                    <div class="weui-col-33" style="text-align: center">工资面议</div>
                    <div class="weui-col-33">09-06更新</div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 15px;background-color: white">
        <div class="weui-cell">
            <div class="weui-cell__hd" style="position: relative;margin-right: 10px;">
                <img src="demos/images/pic_160.png" style="width: 50px;display: block">
            </div>
            <div class="weui-cell__bd">
                <p><b>市场专员</b></p>
            </div>
            <div class="weui-cell__ft" style="font-size: 0">
                <span style="vertical-align:middle; font-size: 17px;">2人</span>
            </div>
        </div>
        <div class="weui-cell weui-cell_access">
            <div class="weui-cell__bd">
                <span style="vertical-align: middle;float:left;">五险一金</span>
                <spans style="margin-left: 5px;float: left;">绩效考核</spans>
            </div>
        </div>

        <div class="weui-form-preview__bd">
            <div class="weui-form-preview__item">
                <div class="weui-row">
                    <div class="weui-col-33" style="text-align: left">济南</div>
                    <div class="weui-col-33" style="text-align: center">工资面议</div>
                    <div class="weui-col-33">09-06更新</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="weui-tabbar">
    <a href="#tab1" class="weui-tabbar__item weui-bar__item--on">
        <div class="weui-tabbar__icon">
            <img src="demos/images/icon_nav_button.png" alt="">
        </div>
        <p class="weui-tabbar__label">微信</p>
    </a>
    <a href="#tab2" class="weui-tabbar__item">
        <div class="weui-tabbar__icon">
            <img src="demos/images/icon_nav_msg.png" alt="">
        </div>
        <p class="weui-tabbar__label">通讯录</p>
    </a>
    <a href="#tab3" class="weui-tabbar__item">
        <div class="weui-tabbar__icon">
            <img src="demos/images/icon_nav_article.png" alt="">
        </div>
        <p class="weui-tabbar__label">发现</p>
    </a>
    <a href="#tab4" class="weui-tabbar__item">
        <div class="weui-tabbar__icon">
            <img src="demos/images/icon_nav_cell.png" alt="">
        </div>
        <p class="weui-tabbar__label">我</p>
    </a>
</div>

<?php include "footer.php" ?>
