<?php include "header.php" ?>
    <style>
      .weui-label {
        width: 70px;
      }
    </style>



    <header class='demos-header'>
      <h1 class="demos-title">City Picker</h1>
    </header>

    
    <div class="weui-cells weui-cells_form">
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="name" class="weui-label">发出地</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" id="start" type="text" value="湖北省 武汉市 武昌区">
        </div>
      </div>
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="date" class="weui-label">目的地</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" id="end" type="text" value="">
        </div>
      </div>
    </div>

    <h2 class="demos-second-title">只选择城市</h2>
    <div class="weui-cells weui-cells_form">
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="home-city" class="weui-label">城市</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" id="home-city" type="text">
        </div>
      </div>
    </div>

    <script src="js/city-picker.js"></script>

    <script>
      $("#start").cityPicker({
        title: "选择出发地",
        onChange: function (picker, values, displayValues) {
          console.log(values, displayValues);
        }
      });
      $("#end").cityPicker({
        title: "选择目的地"
      });
      $("#home-city").cityPicker({
        title: "选择目的地",
        showDistrict: false,
        onChange: function (picker, values, displayValues) {
          console.log(values, displayValues);
        }
      });
    </script>
<?php include "footer.php" ?>
