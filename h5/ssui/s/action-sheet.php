<?php include "header.php"?>
    <!--

        <div class="demos-content-padded">
            <div class="xs-title xs-title-mr"><div class="xs-title-b bg-green"></div><h2 class="xs-title-e">徽标列表项</h2></div>
        </div>
    -->

    <header class='demos-header'>
      <h1 class="demos-title">Action Sheet</h1>
    </header>

    <div class='demos-content-padded'>
      <a href="javascript:;" id='show-actions' class="weui-btn weui-btn_primary">显示 ActionSheet</a>
      <a href="javascript:;" id='show-actions-bg' class="weui-btn weui-btn_primary">自定义背景色</a>
    </div>



    <script>
      $(document).on("click", "#show-actions", function() {
        $.actions({
          title: "选择操作",
          onClose: function() {
            console.log("close");
          },
          actions: [
            {
              text: "发布",
              className: "color-primary",
              onClick: function() {
                $.alert("发布成功");
              }
            },
            {
              text: "编辑",
              className: "color-warning",
              onClick: function() {
                $.alert("你选择了“编辑”");
              }
            },
            {
              text: "删除",
              className: 'color-danger',
              onClick: function() {
                $.alert("你选择了“删除”");
              }
            }
          ]
        });
      });

      $(document).on("click", "#show-actions-bg", function() {
        $.actions({
          actions: [
            {
              text: "发布",
              className: "bg-primary",
            },
            {
              text: "编辑",
              className: "bg-warning",
            },
            {
              text: "删除",
              className: 'bg-danger',
            }
          ]
        });
      });
    </script>
<?php include "footer.php"?>