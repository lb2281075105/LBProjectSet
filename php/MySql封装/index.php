<?php


    include 'pdo/db.php';


    $data = array(
        'uniacid' => 100,
        'hash' => '123123'
    );


    pdo_insert('account',$data);

    $r = pdo_fetchall("SELECT * FROM  ".tablename('account'));  //查询
/*
    foreach ($r as $v){
        echo $v['hash'].'<br>';
        echo $v['acid'];
    }

*/
/*
    表名 tablename('')   //防止注入

    插入 pdo_insert('表名',$arr);
    插入id $id = pdo_insertid();

    修改 pdo_update('表名',$arr,array('id'=>$id));  更新一条数据 成功返回行数 或0 失败返回false

    删除 pdo_delete('表名',array('id'=>$id)); 删除一条数据 false失败 成功行数

    查询 $row = pdo_fetch("SELECT * FROM ".tablename('')." WHERE id = :id", array(':id' => $id));   //防止注入

*/

dump($r);
