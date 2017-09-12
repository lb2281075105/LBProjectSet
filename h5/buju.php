<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <!--    <link href="/ui/style/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body style="background-color: white">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<?php //include "header.php" ?>


<main id="main-container" class="container-fluid">
        <div class="row text-center">
            <div class="col-md-12">
                <img class="img-responsive" src="../shouji/beijing.jpg" alt="ceshi">
            </div>
        </div>

    <div style="height:55px" class="row text-center navbar-fixed-bottom">
        <div style="background-color: white;height:55px">
            <div class="col-xs-2 col-md-2">
                <div style="padding-top: 10px;padding-bottom: 10px">
                    <img class="img-circle" src="../shouji/touxiang.png" alt="头像" width="35px" height="35px">
                </div>
            </div>
            <div class="col-xs-2 col-md-2">
                <div style="padding-top: 10px;">  
                    <img src="../shouji/zhuye.png" alt="ceshi" width="20px" height="20px">
                </div>
                    <div>   
                    <a href="www.baidu.com"><span style="font-size: 14px">官网</span></a>
                </div>
            </div>
            <div class="col-xs-2 col-md-2">
                <div style="padding-top: 10px">
                    <img src="../shouji/dianhua.png" alt="ceshi" width="20px" height="20px">
                </div>
                <div>
                    <a href="www.baidu.com"><span style="font-size: 14px">手机</span></a>
                </div>
            </div>
            <div class="col-xs-2 col-md-2">
                <div style="padding-top: 10px">
                    <img src="../shouji/weixin.png" alt="ceshi" width="20px" height="20px">
                </div>
                <div>
                    <a href="www.baidu.com"><span style="font-size: 14px;">微信</span></a>
                </div>
            </div>
            <div class="col-xs-4 col-md-4">
                <div style="background-color: red; height: 55px;text-align: center; line-height: 55px;"><span
                            style="color: white;font-size: 16px">一键报名</span></div>
            </div>
        </div>
    </div>

</main>
<!--<footer>-->
<!--    <Link to="/" className="to-home" onlyActiveOnIndex={true} activeClassName="active">-->
<!--    <i></i>-->
<!--    <span>第一页</span>-->
<!--    </Link>-->
<!--    <Link to="/" className="to-yundui" activeClassName="active">-->
<!--    <i></i>-->
<!--    <span>第二页</span>-->
<!--    </Link>-->
<!--    <Link to="/" className="to-duihuan" activeClassName="active">-->
<!--    <i></i>-->
<!--    <span>第三页</span>-->
<!--    </Link>-->
<!--    <Link to="/" className="to-user" activeClassName="active">-->
<!--    <i></i>-->
<!--    <span>第四页</span>-->
<!--    </Link>-->
<!--</footer>-->
</body>
</html>