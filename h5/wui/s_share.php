<?php include "header.php";?>

    <div class="weui-share fadeIn" onclick="$(this).fadeOut();$(this).removeClass('fadeOut')" style=" display: none;">
        <div class="weui-share-box">
            点击右上角发送给指定朋友或分享到朋友圈 <i></i>
        </div>
    </div>

<button onclick=" $('.weui-share').show().addClass('fadeIn');">分享</button>

