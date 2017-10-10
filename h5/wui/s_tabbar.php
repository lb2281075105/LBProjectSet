<?php include "header.php" ?>

<div class="weui-tab">
    <div class="weui-tab__panel">

    </div>
    <div class="weui-tabbar">
        <a href="javascript:;" class="weui-tabbar__item weui-bar__item_on">
                    <span style="display: inline-block;position: relative;">
                        <img src="./images/icon_tabbar.png" alt="" class="weui-tabbar__icon">
                        <span class="weui-badge" style="position: absolute;top: -2px;right: -13px;">8</span>
                    </span>
            <p class="weui-tabbar__label">微信</p>
        </a>
        <a href="javascript:;" class="weui-tabbar__item">
            <img src="./images/icon_tabbar.png" alt="" class="weui-tabbar__icon">
            <p class="weui-tabbar__label">通讯录</p>
        </a>
        <a href="javascript:;" class="weui-tabbar__item">
                    <span style="display: inline-block;position: relative;">
                        <img src="./images/icon_tabbar.png" alt="" class="weui-tabbar__icon">
                        <span class="weui-badge weui-badge_dot" style="position: absolute;top: 0;right: -6px;"></span>
                    </span>
            <p class="weui-tabbar__label">发现</p>
        </a>
        <a href="javascript:;" class="weui-tabbar__item">
            <img src="./images/icon_tabbar.png" alt="" class="weui-tabbar__icon">
            <p class="weui-tabbar__label">我</p>
        </a>
    </div>
</div>
<!--
<div class="weui-tab">
      <div class="weui-tab__bd">
        <div id="tab1" class="weui-tab__bd-item weui-tab__bd-item--active">
          <h1>页面一</h1>
        </div>
        <div id="tab2" class="weui-tab__bd-item">
          <h1>页面二</h1>
        </div>
        <div id="tab3" class="weui-tab__bd-item">
          <h1>页面三</h1>
        </div>
        <div id="tab4" class="weui-tab__bd-item">
          <h1>页面四</h1>
        </div>
      </div>

      <div class="weui-tabbar">
        <a href="#tab1" class="weui-tabbar__item weui-bar__item--on">
          <span class="weui-badge" style="position: absolute;top: -.4em;right: 1em;">8</span>
          <div class="weui-tabbar__icon">
            <img src="./images/icon_nav_button.png" alt="">
          </div>
          <p class="weui-tabbar__label">微信</p>
        </a>
        <a href="#tab2" class="weui-tabbar__item">
          <div class="weui-tabbar__icon">
            <img src="./images/icon_nav_msg.png" alt="">
          </div>
          <p class="weui-tabbar__label">通讯录</p>
        </a>
        <a href="#tab3" class="weui-tabbar__item">
          <div class="weui-tabbar__icon">
            <img src="./images/icon_nav_article.png" alt="">
          </div>
          <p class="weui-tabbar__label">发现</p>
        </a>
        <a href="#tab4" class="weui-tabbar__item">
          <div class="weui-tabbar__icon">
            <img src="./images/icon_nav_cell.png" alt="">
          </div>
          <p class="weui-tabbar__label">我</p>
        </a>
      </div>
    </div>
-->
    <script>
      $("#a").select({
        title: "选择职业",
        items: ["法官", "医生", "猎人", "学生", "记者", "其他"]
      });
    </script>
<?php include "footer.php" ?>
