<?php include "header.php" ?>

    <header class='demos-header'>
      <h1 class="demos-title">12栏栅格</h1>
    </header>

    <style>
      .weui-row {
        margin-top: 10px;
      }
      [class*="weui-col-"] {
        border: 1px solid #ccc;
        height: 40px;
        line-height: 40px;
        text-align: center;
      }

    </style>

    <h2 class='doc-head'>有间距</h2>

    <div class="weui-row">
      <div class="weui-col-20">20</div>
      <div class="weui-col-20">20</div>
      <div class="weui-col-20">20</div>
      <div class="weui-col-20">20</div>
      <div class="weui-col-20">20</div>
    </div>

    <div class="weui-row">
      <div class="weui-col-33">33</div>
      <div class="weui-col-33">33</div>
      <div class="weui-col-33">33</div>
    </div>

    <div class="weui-row">
      <div class="weui-col-50">50</div>
      <div class="weui-col-50">50</div>
    </div>


    <h2 class='doc-head'>无间距</h2>

    <div class="weui-row weui-no-gutter">
      <div class="weui-col-20">20</div>
      <div class="weui-col-20">20</div>
      <div class="weui-col-20">20</div>
      <div class="weui-col-20">20</div>
      <div class="weui-col-20">20</div>
    </div>

    <div class="weui-row weui-no-gutter">
      <div class="weui-col-33">33</div>
      <div class="weui-col-33">33</div>
      <div class="weui-col-33">33</div>
    </div>

    <div class="weui-row weui-no-gutter">
      <div class="weui-col-50">50</div>
      <div class="weui-col-50">50</div>
    </div>

    <?php include "footer.php"?>
