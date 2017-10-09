<?php

global $_W,$_GPC;

//判断当前公众号是认证服务号，具有发送权限
if($_W['account']['level'] >= ACCOUNT_SUBSCRIPTION_VERIFY) {
    $info = "【{$_W['account']['name']}】充值通知\n";
    $info .= "您在123进行会员余额充值，充值金额【123】元，充值后余额【1】元。\n";
    $message = array(
        'msgtype' => 'text',
        'text' => array('content' => urlencode($info)),
        'touser' => 'oTa2Ls_YCbfWm5n_u0j5y4pP2LUM',
    );
    $account_api = WeAccount::create();
    $status = $account_api->sendCustomNotice($message);
    if (is_error($status)) {
        message('发送失败，原因为' . $status['message']);
    }
    //发送成功
}