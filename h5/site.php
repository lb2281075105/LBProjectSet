<?php

defined('IN_IA') or exit('Access Denied');

class Mmd_xunmallModuleSite extends WeModuleSite {

    /// 投递
    private $tab_toudi = 'mmd_xunmall_toudi';

	/** 工作分类表 */
	private $tb_category = 'mmd_xunmall_category';
	
	/** 工作职位表*/
  	 private $tb_jobs = 'mmd_xunmall_jobs';

	// 简历表
    private $tab_jianli = 'mmd_xunmall_jianli';


	public function doWebRule(){
		global $_W, $_GPC;
		$rid = intval($_GPC['id']);
		echo $rid;
	}



    /// 投递简历
    public function doMobileToudi(){
        global $_W, $_GPC;

        $id = $_GPC['jobid'];
        $uniacid = $_W['uniacid'];

        $jobs = [
            "position" => $id,
            "openid" => $_W['openid'],
            "uniacid" => $uniacid,
            "createtime"=>TIMESTAMP
        ];

        pdo_insert($this->tab_toudi, $jobs);

    }


    public function doMobileJobs()
    {
        global $_W, $_GPC;

        $id = intval($_GPC['id']);

        if(empty($id)){
            itoast('未找到指定岗位分类');
        }

        $sqlcategory = "select * from " . tablename('mmd_xunmall_category') . " where parentid=".$id.' and uniacid='.$_W['uniacid'];
        $category=pdo_fetchall($sqlcategory);

        $sql = "select * from " . tablename('mmd_xunmall_jobs') . " where parentid=".$id.' and uniacid='.$_W['uniacid'];
        $jobs = pdo_fetchall($sql);
        include $this->template('mposition');

    }

    public function doMobileDetail()
    {
        global $_W, $_GPC;



        //投递按钮状态
        $r = pdo_fetch("SELECT * FROM ".tablename('mmd_xunmall_jianli')."where openid=:openid and uniacid=:uniacid",array(':openid'=>$_W['openid'],'uniacid'=>$_W['uniacid']));

        if (empty($r)){
            $tdzt = 'nojl';
        }else{
            $tdzt = 'yes';
        }


        $fan = mc_fansinfo($_W['openid']);
        $avatar = $fan['tag']['avatar'];


        $id = $_GPC['jobid'];
        $uniacid = $_W['uniacid'];
        if($id){
            $sql="select * from ".tablename('mmd_xunmall_jobs')." where id=".$id.' and uniacid='.$uniacid;
            $jobdetail=pdo_fetchall($sql);
        }else{
            itoast('好凄惨，出错了！');
        }

        include $this->template('mjobdetail');

    }



    public function doWebOrders()
    {

        // http://192.168.119.206/b2/app/./index.php?i=2&c=entry&eid=140
        global $_W, $_GPC;

        $ops = array('display', 'resumeDetail','today');
        $op = in_array($_GPC['op'], $ops) ? $_GPC['op'] : 'display';


        if ($op == 'display') {


            $jianli = pdo_fetchall("SELECT * FROM " . tablename($this->tab_toudi)."where uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));

            $array = array();
            foreach ($jianli as $k => $cat){
                $simple = pdo_fetch("SELECT * FROM " . tablename($this->tb_jobs).' where id='.$cat['position'].' and uniacid='.$_W['uniacid']);
                $array[] = $simple;
            }

            load()->func('tpl');
            include $this->template('resumeList');
        }

        if ($op == 'resumeDetail') {
            $openId = $_GPC['openId'];

            $resumeDetail = pdo_fetch("SELECT * FROM " . tablename($this->tab_jianli) . " where openId=:openId".' and uniacid=:uniacid',array(':openId'=>$openId,':uniacid'=>$_W['uniacid']));


            load()->func('tpl');

            include $this->template('resumeDetail');
        }
        if ($op == 'today'){
            $jianli = pdo_fetchall("SELECT * FROM " . tablename($this->tab_toudi)."where uniacid = :uniacid",array(':uniacid' => $_W['uniacid']));

            $date = array();
            foreach ($jianli as $key => $value){
                 $dateString = date('Y-m-d',$value['createtime']);
                if ($dateString == date('Y-m-d',time())) {
                    $date[] = $jianli[$key];
                }
            }

            $array = array();
            foreach ($date as $k => $cat){
                $simple = pdo_fetch("SELECT * FROM " . tablename($this->tb_jobs).' where id='.$cat['position'].' and uniacid='.$_W['uniacid']);
                $array[] = $simple;
            }

            load()->func('tpl');
            include $this->template('resumeTodayList');

        }
    }

    public function doWebJobs()
    {

        global $_W, $_GPC;

        $ops = array('display', 'create','save', 'query', 'delete','createXiuGai','update','createsave'); // 只支持此 3 种操作.
        $op = in_array($_GPC['op'], $ops) ? $_GPC['op'] : 'display';

        //展示所有职位列表
        if ($op == 'display') {
            $jobs_all = pdo_fetchall("select * from " . tablename("mmd_xunmall_jobs").' where uniacid='.$_W['uniacid']);

            load()->func('tpl');
            include $this->template('positionlist');
        }


        //查询子分类下拉列表（）
        if ($op == 'query') {
            global $_W, $_GPC;
            $id = $_GPC['parent_id'];
            $c_children = pdo_fetchall("select * from " . tablename("mmd_xunmall_category") . "where parentid =" . $id . " and uniacid =" . $_W['uniacid'] . "  and is_show = 1");
            iajax(1, $c_children);
        }

        //添加职位页面
        if ($op == 'create') {
//            var_dump("牛花花");
            $c_parent = pdo_fetchall("select * from " . tablename("mmd_xunmall_category") . "where parentid = 0 and uniacid=" . $_W['uniacid'] . " and is_show = 1");
            load()->func('tpl');
            include $this->template('position');
        }
        if ($op == 'createXiuGai'){
            $id = $_GPC['id'];

//           // var_dump($id);
            $sql = 'SELECT * FROM '.tablename($this->tb_jobs).' WHERE id='.$id.' and uniacid='.$_W['uniacid'];

            $c_parent = pdo_fetch($sql);
            $parent_id =  $c_parent['parentid'];
            $c_category = pdo_fetchall("select * from " . tablename("mmd_xunmall_category") . "where parentid = 0 and uniacid=" . $_W['uniacid'] . " and is_show = 1");

//            var_dump($c_parent);
            // include 渲染页面，显示页面
            // 跳转页面不做任何操作，需要用itoast，message
            load()->func('tpl');
            include $this->template('xiugai');

        }
        if ($op == 'update'){
            $id = $_GPC['id']+'';
            $date_now = date("Y-m-d", time());
            $jobs = [
                "parentid" => $_GPC["parentid"],// parentid:后面的parentid是xiugai界面自己定义的，前面的parentid是数据库里面的字段。
//                    "children_id"=>$_GPC["children_id"],
                "name" => $_GPC["jobname"],
                "number" => $_GPC["number"],
                "uniacid"=>$_GPC["uniacid"],
                "address" => $_GPC["address"],
                "salary" => $_GPC["salary"],
                "description" => htmlspecialchars_decode($_GPC["description"]),
                "condition" => htmlspecialchars_decode($_GPC["condition"]),
                "comment" => $_GPC["comment"],
                "zwtx" =>$_GPC["zwtx"],
                "updatetime" => $date_now
            ];

            $c_parent = pdo_update($this->tb_jobs, $jobs, array('id' => $id,'uniacid'=>$_W['uniacid']));

            // 渲染页面，用include
            load()->func('tpl');
            // 只是单单的回到某个界面就用itoast()，message
            if ($c_parent){
                itoast("更新成功",$this->createWebUrl('jobs', array('op' => 'display')), 'success');
            }
//            include $this->template('positionlist');
        }
        //新增职位保存
        if ($op == 'createsave') {
//            var_dump("牛花花");
            if (checksubmit()) {
                //获取需要保存的职位信息
                $date_now = date("Y-m-d", time());
                $jobs = [
                    "parentid" => $_GPC["parentid"],
                    "childrenid"=>(int)trim($_GPC["childrenid"]),
                    "name" => $_GPC["jobname"],
                    "number" => $_GPC["number"],
                    "uniacid"=>$_W["uniacid"],
                    "address" => $_GPC["address"],
                    "salary" => $_GPC["salary"],
                    "description" => htmlspecialchars_decode($_GPC["description"]),
                    "condition" => htmlspecialchars_decode($_GPC["condition"]),
                    "comment" => $_GPC["comment"],
                    "zwtx" =>$_GPC["zwtx"],
                    "updatetime" => $date_now
                ];

//                var_dump($jobs);
                if (empty($jobs['name'])) {
                    itoast('未填写岗位名称, 无法保存');
                }
                pdo_insert($this->tb_jobs, $jobs);
                itoast('岗位信息添加成功', $this->createWebUrl('jobs', array('op' => 'display')), 'success');
            }

            include $this->template('positionlist');
        }

        if ($op == 'delete') {
            $id = intval($_GPC['id']);
            if (empty($id)) {
                itoast('未找到指定职位信息');
            }

            $result = pdo_delete("mmd_xunmall_jobs", array('id' => $id,'uniacid'=>$_W['uniacid']));
            /// intval 获取正整数
            if (intval($result) == 1) {
                itoast('职位信息删除成功.', $this->createWebUrl('jobs',array('op'=>'display')), 'success');
            } else {
                itoast('职位信息删除失败.',$this->createWebUrl('jobs',array('op'=>'display')), 'error');
            }
        }
    }
    // 简历管理Web
    public function doWebResume(){
        global $_W, $_GPC;

        $ops = array('display',  'delete');
        $op = in_array($_GPC['op'], $ops) ? $_GPC['op'] : 'display';


        if($op == 'delete'){
            $id = intval($_GPC['id']);
            if(empty($id)){
                itoast('未找到指定简历');
            }

            $result =pdo_delete("mmd_xunmall_jianli",array('jianId'=>$id,'uniacid'=>$_W['uniacid']));

            if(intval($result) == 1){
                itoast('删除简历成功', $this->createWebUrl('resume',array('op' => 'display')), 'success');
            } else {
                itoast('删除简历失败');
            }
            exit;

        }



        $jianli = pdo_fetchall("SELECT * FROM ".tablename($this->tab_jianli).' where uniacid=:uniacid',array(':uniacid'=>$_W['uniacid']));

        load()->func('tpl');
        include $this->template('resume');


    }
    // 简历管理Mobile

    // 显示简历信息详情
    public function doWebResumeID(){

        global $_W, $_GPC;

        $id = $_GPC['id']+'';


        $sql = 'SELECT * FROM '.tablename($this->tab_jianli).' WHERE jianID='.$id . ' and uniacid ='. $_W['uniacid'];

        $xiangqing = pdo_fetch($sql);
        load()->func('tpl');
        include $this->template('resumeID');
    }


    public function doMobileUser(){
        global $_W, $_GPC;

        $fan = mc_fansinfo($_W['openid']);
        $avatar = $fan['tag']['avatar'];
//        var_dump($fan);



        include $this->template('user');
    }

    public function doMobileJianli(){
        global $_W, $_GPC;
        if (checksubmit('submit')) {
            $_GPC['issubmit'] = true;
        }
        include $this->template('resume');
    }



    public function doMobileResume()
    {
        global $_W, $_GPC;

        $ops = array('display'); // 只支持此 3 种操作.
        $op = in_array($_GPC['op'], $ops) ? $_GPC['op'] : 'display';
        if ($op == 'display') {

            if (checksubmit()) {

                $data = ["name"=>$_GPC["xingming"],
                    "iphone"=>$_GPC["iphone"],
                    "email"=>$_GPC["email"],
                    "start1"=>$_GPC["start1"],
                    "end1"=>$_GPC["end1"],
                    "company"=>$_GPC["company"],
                    "bumen"=>$_GPC["bumen"],
                    "textarea"=>$_GPC["textarea"],
                    'uniacid' => $_W['uniacid'],
                    'openid'=> $_W['openid'],
                    "start2"=>$_GPC["start2"],
                    "end2"=>$_GPC["end2"],
                    "xuexiao"=>$_GPC["xuexiao"],
                    "zhuanye"=>$_GPC["zhuanye"]];

                pdo_insert($this->tab_jianli, $data);

                itoast('更新简历成功',$this->createMobileUrl('user'),'success');


            }
            load()->func('tpl');
            include $this->template('resume');

        }


    }



        public function doMobileJob() {
		global $_W, $_GPC;
        $_W['page']['title'] = '云媒股份';

//            var_dump($_W['fans']);
//            var_dump($_W['fans']['tag']);
//            echo $_W['tag']['avatar'];
           $avatar = $_W['fans']['tag']['avatar'];







		    $notice = $this->module['config']['notice']; //公告

            $hd1 =$this->module['config']['hd1'];
            $hd2 =$this->module['config']['hd2'];
            $hd3 =$this->module['config']['hd3'];
            $hd4 =$this->module['config']['hd4'];

            $url1 =$this->module['config']['url1'];
            $url2 =$this->module['config']['url2'];
            $url3 =$this->module['config']['url3'];
            $url4 =$this->module['config']['url4'];

            //  var_dump($this->module['config']['name']);

            $sql = 'SELECT * FROM '.tablename($this->tb_category).' WHERE uniacid=:uniacid and parentid = 0 ORDER BY orderno DESC';
            $params = array(
                ':uniacid' => $_W['uniacid']
            );
            $categorys = pdo_fetchall($sql, $params);
            load()->func('tpl');
            $_share = array(
                'title'   => "123",
                'link'    =>  "123",
                'imgUrl'  =>  "123",
                'content' =>  "123"
            );
        include $this->template('index');


	}
	
	/**
	 * 获取所有分类
	 * @return array(id=>category, ...)
	 */
	private function getAllCategory(){
		global $_W;
		
		$sql = 'SELECT * FROM '.tablename($this->tb_category).' WHERE uniacid=:uniacid ORDER BY `orderno` asc, id asc';
		$params = array(
			':uniacid' => $_W['uniacid']
		);
		$categories = pdo_fetchall($sql, $params, 'id');
		
		return $categories;
	}
	
	/**
	 * 后台管理 - 商品分类管理
	 */
	public function doWebCategory() {
		global $_W, $_GPC;
		
		$ops = array('display', 'create', 'delete'); // 只支持此 3 种操作.
		$op = in_array($_GPC['op'], $ops) ? $_GPC['op'] : 'display';
		
		if($op == 'display'){
			
			// 处理 POST 提交
			if (checksubmit()){
				$cats = $_GPC['categories'];
				
				// 表单验证
				if(empty($cats)){
					itoast('尚未添加任何分类.');
				}
				foreach ($cats as $k => $cat){
					empty($cat['name']) && message('有分类名称未添加,无法保存.');
					$cat['orderno'] = intval($cat['orderno']);
				}
				
				// 数据更新
				foreach ($cats as $k => $cat){
					pdo_update($this->tb_category, $cat, array('id'=>$k));
				}
                itoast('保存成功.','','success');
			}
			
			// 处理 GET 提交
			//$categories = $this->getAllCategory();

            $children = array();
            $categories = pdo_fetchall("SELECT * FROM ".tablename('mmd_xunmall_category')." WHERE uniacid = '{$_W['uniacid']}' ORDER BY parentid, orderno DESC, id");
            foreach ($categories as $index => $row) {
                if (!empty($row['parentid'])){
                    $children[$row['parentid']][] = $row;
                    unset($categories[$index]);
                }
            }
            //    print_r($children);
            //    print_r($categories);
            //    exit;

			load()->func('tpl');
			include $this->template('category');
		}
		
		if ($op == 'create') {
			
			if (checksubmit()) {
			    //var_dump($_GPC);
			    //exit;
                $category = $_GPC['category']; // 获取打包值

                $category['parentid'] = intval($_GPC['parentid']);
                if(empty($category['parentid'])){
                    $category['parentid'] =0;
                }
                $orderno =intval($category['orderno']) ;
				if(empty($category['name'])){
                    itoast('未添加分类名称, 无法保存');
				}
				$category['uniacid'] = $_W['uniacid'];
				$category['orderno'] = $orderno;
                $category['is_show'] = 1;


				pdo_insert($this->tb_category, $category);
				itoast('添加分类成功',$this->createWebUrl('category', array('op'=>'display')),'success');
			}
			
			include $this->template('category');
		}
		
		if($op == 'delete') {
			$id = intval($_GPC['id']);
			if(empty($id)){
				itoast('未找到指定岗位分类');
			}
			$result = pdo_delete($this->tb_category, array('id'=>$id, 'uniacid'=>$_W['uniacid']));
			if(intval($result) == 1){
                itoast('删除岗位分类成功.', $this->createWebUrl('category'), 'success');
			} else {
                itoast('删除岗位分类失败.');
			}
		}
	}


	public function getRuleMenus(){
		global $_W;
		return array(
				array(
						'title' => 'rulemenu1',
						'url'=>$this->createWebUrl('rulemenu1', $_W['account'])
				),
				array(
						'title' => 'rulemenu2',
						'url'=>$this->createWebUrl('rulemenu2', $_W['account'])
				)
		);
	}
	public function doWebRuleMenu1(){
		echo doWebRuleMenu1;
		global $_W;
		print_r($_W['user']);
	}
	
	public function doWebRuleMenu2(){
		echo doWebRuleMenu2;
		global $_W;
		print_r($_W['user']);
	}
	
	public function getMenus(){
		global $_W;
		return array(
				array(
						'title' => 'menu1',
						'url'=>$this->createWebUrl('menu1', array('uid'=>$_W['uid']))
				),
				array(
						'title' => 'menu2',
						'url'=>$this->createWebUrl('menu2', array('uid'=>$_W['uid']))
				)
		);
	}
	
	public function doWebMenu1(){
		echo doWebMenu1;
		global $_W;
		print_r($_W['user']);
	}
	
	public function doWebMenu2(){
		echo doWebMenu2;
		global $_W;
		print_r($_W['user']);
	}
	
	public function getHomes(){
		return array(
				array(
						'title' => 'home1',
						'url'=>$this->createMobileUrl('home1')
				),
				array(
						'title' => 'home2',
						'url'=>$this->createMobileUrl('home2')
				)
		);
	}
	
	public function doMobileHome1(){
		echo doMobileHome1;
		global $_W;
		print_r($_W['member']);
	}
	
	public function doMobileHome2(){
		echo doMobileHome2;
		global $_W;
		print_r($_W['member']);
	}
	
	public function getProfiles(){
		return array(
				array(
						'title' => 'Profile1',
						'url'=>$this->createMobileUrl('profile1')
				),
				array(
						'title' => 'Profile2',
						'url'=>$this->createMobileUrl('profile2')
				)
		);
	}
	
	public function doMobileProfile1(){
		echo doMobileProfile1;
		global $_W;
		print_r($_W['member']);
	}
	
	public function doMobileProfile2(){
		echo doMobileProfile2;
		global $_W;
		print_r($_W['member']);
	}
	
	public function getShortcuts(){
		return array(
				array(
						'title' => 'Shortcut1',
						'url'=>$this->createMobileUrl('shortcut1')
				),
				array(
						'title' => 'Shortcut2',
						'url'=>$this->createMobileUrl('shortcut2')
				)
		);
	}
	
	public function doMobileShortcut1(){
		echo doMobileShortcut1;
		global $_W;
		print_r($_W['member']);
	}
	
	public function doMobileShortcut2(){
		echo doMobileShortcut2;
		global $_W;
		print_r($_W['member']);
	}
	


	
	public function doMobileOauthuserinfo(){
		global $_W, $_GPC;
	
		load()->model('mc');
		
		// 假设当前应用必需会员头像
		$avatar = '';
	
		// 1 如果是会员(存在 uid),从会员信息中获取
		if (!empty($_W['member']['uid'])) {
			$member = mc_fetch($_W['member']['uid']);
			if (!empty($member)) {
				$avatar = $member['avatar'];
			}
		}
		
		// 2 如果存在 fans 记录, 从 fans 中获取
		if (empty($avatar)) {
			$fan = mc_fansinfo($_W['openid']);
			if (!empty($fan) && !empty($fan['tag'])) {
				$avatar = $fan['tag']['avatar'];
			}
		}
		
		//3 最后调用网页授权, 如果有权限
		if (empty($avatar)) {
			if (!empty($_W['oauth_account'])) {
				$userinfo = mc_oauth_userinfo();
				if (is_error($userinfo)) {
					// you code here
					message($ret['message']);
				} else {
					$avatar = $userinfo['tag']['avatar'];
				}
			} else {
				mc_require($_W['uid'], array('avatar'));
			}
		}
	
		echo "<img src='{$avatar}'>";
	}
}