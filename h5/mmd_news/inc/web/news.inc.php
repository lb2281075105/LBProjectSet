
<?php

//{template 'common/header'}
//
//
//
//{template 'common/footer'}
//

defined('IN_IA') or exit('Access Denied');

global $_W, $_GPC;
$ops = array('display', 'add_news','delete','edit_news','save_news','add_news_info');
$op = in_array($_GPC['op'], $ops) ? $_GPC['op'] : 'display';

if ($op == 'display') {

    $news_list = pdo_fetchall("SELECT * FROM " . tablename("news_list"));

    include $this->template('news_list');
}

if ($op == 'add_news'){
    include $this->template('news_list');
}
if ($op == 'add_news_info') {

    $array = [
        "name" => $_GPC["name"],
        "address" => $_GPC["address"],
        "title" => $_GPC["title"],
        "icon" => $_GPC["icon"],
        "iphone" => $_GPC["iphone"],
        "wechat" => $_GPC["wechat"],
        "description" => $_GPC["description"],
        "introduce" => $_GPC["introduce"],
        "codeIcon" => $_GPC["codeIcon"]
    ];
    $add_news = pdo_insert("news_list",$array);
    if (intval($add_news) == 1) {
        itoast('添加成功.', $this->createWebUrl('news',array('op'=>'display')), 'success');
    } else {
        itoast('添加失败.',$this->createWebUrl('news',array('op'=>'display')), 'error');
    }
}

if ($op == 'delete'){
    $result = pdo_delete("news_list", array('id'=>$_GPC['id']));

    if (intval($result) == 1) {
        itoast('信息删除成功.', $this->createWebUrl('news',array('op'=>'display')), 'success');
    } else {
        itoast('信息删除失败.',$this->createWebUrl('news',array('op'=>'display')), 'error');
    }
}
if ($op=='edit_news'){
    $sql = 'SELECT * FROM '.tablename("news_list");
    $edit_info = pdo_fetch($sql, array('id'=>$_GPC['id']));
    include $this->template('news_list');
}
if ($op=='save_news'){
    $array = [
        "name" => $_GPC["name"],
        "address" => $_GPC["address"]
    ];
    $update_news = pdo_update("news_list", $array, array('id' => $_GPC['id']));
    if (intval($update_news) == 1) {
        itoast('保存成功.', $this->createWebUrl('news',array('op'=>'display')), 'success');
    } else {
        itoast('保存失败.',$this->createWebUrl('news',array('op'=>'display')), 'error');
    }
}