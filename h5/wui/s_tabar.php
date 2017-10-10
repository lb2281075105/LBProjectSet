<?php include "header.php"?>



<div id="tagnav" class="weui-navigator weui-navigator-wrapper">
    <ul class="weui-navigator-list" style="transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1); transition-duration: 400ms; transform: translate(0px, 0px) translateZ(0px);">
        <li class="weui-state-active"><a href="javascript:;">首页</a></li>
        <li class=""><a href="javascript:;">我爱中国</a></li>
        <li class=""><a href="javascript:;">国内</a></li>
        <li class=""><a href="javascript:;">国际</a></li>
        <li class=""><a href="javascript:;">军事</a></li>
        <li class=""><a href="javascript:;">社会</a></li>
        <li class=""><a href="javascript:;">娱乐</a></li>
        <li class=""><a href="javascript:;">女人</a></li>
        <li class=""><a href="javascript:;">体育</a></li>
        <li class=""><a href="javascript:;">科技</a></li>
        <li class=""><a href="javascript:;">互联网</a></li>
        <li class=""><a href="javascript:;">教育</a></li>
        <li class=""><a href="javascript:;">财经</a></li>
        <li class=""><a href="javascript:;">房产</a></li>
        <li class=""><a href="javascript:;">汽车</a></li>
    </ul>
</div>



<script src="js/iscroll.js"></script>

<script>
    $(function(){
        TagNav('#tagnav',{
            type: 'scrollToFirst',
        });
        $('.weui_tab').tab({
            defaultIndex: 0,
            activeClass:'weui_bar_item_on',
            onToggle:function(index){
                if(index>0){
                    alert(index)
                }
            }
        });

    });

</script>

<?php include "footer.php"?>
