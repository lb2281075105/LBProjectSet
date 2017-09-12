<?php
/**
 */
defined('IN_IA') or exit('Access Denied');

class S_huaModuleSite extends WeModuleSite {

	/** 商品分类表 */
	private $tb_elite = 's_elite';
	

	public function doWebRule(){
		global $_W, $_GPC;
		$rid = intval($_GPC['id']);
		echo $rid;
	}
	
	/**
	 * 前端 - 便利店首页
	 */
	public function doMobileShow() {
		global $_W, $_GPC;

        $id = intval($_GPC['id']);
        if(empty($id)){
            message('未找到指定精英');
        }
		$elites = $this->getAllElite($id);
		include $this->template('elite');
	}
	
	/**
	 * 获取所有精英
	 * @return array(id=>category, ...)
	 */
	private function getAllElite($type=''){
		global $_W;

		if($type!==''){
            $sql = 'SELECT * FROM '.tablename($this->tb_elite).' WHERE uniacid=:uniacid and id=:id ORDER BY  id DESC';
            $params = array(
                ':uniacid' => $_W['uniacid'],
                ':id' =>$type
            );

        }else{
		
		$sql = 'SELECT * FROM '.tablename($this->tb_elite).' WHERE uniacid=:uniacid ORDER BY  id DESC';
		$params = array(
			':uniacid' => $_W['uniacid']
		);
        }
		$elites = pdo_fetchall($sql, $params, 'id');
		
		return $elites;
	}
	
	/**
	 * 后台管理 - 商品分类管理
	 */
	public function doWebHua() {
		global $_W, $_GPC;
		
		$ops = array('display', 'create', 'delete'); // 只支持此 3 种操作.
		$op = in_array($_GPC['op'], $ops) ? $_GPC['op'] : 'display';
		
		if($op == 'display'){
			$elites = $this->getAllElite();

			load()->func('tpl');
			include $this->template('hua');
		}
		
		if ($op == 'create') {
			
			if (checksubmit()) {

                $data= array(
                    'uniacid' => $_W['uniacid'],
                    'name'=> $_GPC['name'],
                    'alogo'=> $_GPC['alogo'],
                    'tel' => $_GPC['tel'],
                    'wechat' => $_GPC['wechat'],
                    'aone'=> $_GPC['aone'],
                    'ainfo' => $_GPC['ainfo'],
                    'qlogo' => $_GPC['qlogo'],
                    'web' => $_GPC['web'],
                    'glogo' => $_GPC['glogo'],
                    'bm' => $_GPC['bm'],
                    'bmurl' => $_GPC['bmurl'],
                    'content' => $_GPC['content']
                );
                pdo_insert($this->tb_elite, $data);
                itoast('添加精英成功',$this->createWebUrl('hua', array('op'=>'display')),'success');
			   // var_dump($_GPC);
			}
			
			include $this->template('hua');
		}
		
		if($op == 'delete') {
			$id = intval($_GPC['id']);
			if(empty($id)){
				message('未找到指定商品分类');
			}
			$result = pdo_delete($this->tb_elite, array('id'=>$id, 'uniacid'=>$_W['uniacid']));
			if(intval($result) == 1){
                itoast('删除精英成功.', $this->createWebUrl('elite'), 'success');
			} else {
                itoast('删除商品分类失败.');
			}
		}
	}





}