<?php include "header.php"?>

    <div class="weui-tab">
      <div class="weui-navbar">
        <a class="weui-navbar__item weui-bar__item--on" href="#tab1">
          选项一
        </a>
        <a class="weui-navbar__item" href="#tab2">
          选项二
        </a>
        <a class="weui-navbar__item" href="#tab3">
          选项三
        </a>
      </div>
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
      </div>
    </div>


    <script>
      $("#a").select({
        title: "选择职业",
        items: ["法官", "医生", "猎人", "学生", "记者", "其他"]
      });
    </script>
<?php include "footer.php"?>