<!DOCTYPE html>
<html>
<head>
    <title>WeUI</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- 框架CSS，大版本升级，不用编辑 -->
    <link rel="stylesheet" href="css/weui.css">
    <link rel="stylesheet" href="css/jquery-weui.css">

    <!-- 自定义CSS
        demo.css      引用例子使用的，不可以删除，不可以编辑
        extends.css   组件css，比如自己新做了组件，封装成css放到这里，加好备注，便于weui升级更新
        help.css      全局辅助css，比如一些浮动的辅助样式，颜色的辅助，偏移的辅助等
        s.css         自己的css，一些效果实现，修改的，不通用的放到这里
     -->

    <link rel="stylesheet" href="css/demos.css">
    <link rel="stylesheet" href="css/extends.css">
    <link rel="stylesheet" href="css/help.css">
    <link rel="stylesheet" href="css/s.css">

    <link rel="stylesheet" href="style/weui.css"/>
    <link rel="stylesheet" href="style/weui2.css"/>
    <link rel="stylesheet" href="style/weui3.css"/>

    <!-- jquery ui JS -->
    <script src="js/jquery-2.1.4.js"></script>
    <script src="js/jquery-weui.js"></script>

      <script src="js/iscroll.js"></script>
    <script>
                var myscroll;
                function loaded(){
               setTimeout(function(){
                        myscroll=new iScroll("weui-navigator-wrapper");
                 }，100 );
            }
            window.addEventListener("load",loaded,false);

            $("#mobile_show_duobao_all_num").show();
                new iScroll('tc-wrapper2', {
                    scrollbarClass: 'myScrollbar' ,
                    hScrollbar:true,
                    vScroll:false,
                    hideScrollbar: false //是否隐藏滚动条  
}); 
        </script>
      

      });    
      




</head>

<body ontouchstart>