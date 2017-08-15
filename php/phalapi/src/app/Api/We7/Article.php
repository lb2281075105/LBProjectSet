<?php
namespace App\Api\We7;

use PhalApi\Api;
use App\Domain\We7\Article as DomainCURD;

/**
 * 微擎博客文章接口
 * @author 宋英杰 20170811
 */

class Article extends Api {

    public function getRules() {
        return array(
            'getArticle' => array(
                'id' => array('name' => 'id', 'default' => 8888,'type' => 'int', 'min' => 1, 'desc' => '分类ID,默认值8888是全部分类'),
            ),
            'getList' => array(
                'page' => array('name' => 'page', 'type' => 'int', 'min' => 1, 'default' => 1, 'desc' => '第几页'),
                'perpage' => array('name' => 'perpage', 'type' => 'int', 'min' => 1, 'max' => 20, 'default' => 10, 'desc' => '分页数量'),
                'state' => array('name' => 'state', 'type' => 'int', 'default' => 0, 'desc' => '状态'),
            ),
        );
    }



    /**
     * 获取博客分类下的文章
     * @desc 获取数据库中全部的分类数据
     * @return int      id          主键ID
     * @return string   title       分类标题
     * @return int   displayorder     排序
     * @return string   type   分类类型
     */
    public function getArticle() {

        $id = $this->id;

        $domain = new DomainCURD();
        $data = $domain->getArticle($id);

        return $data;
    }


    /**
     * 获取分页列表数据
     * @desc 根据状态筛选列表数据，支持分页
     * @return array    items   列表数据
     * @return int      total   总数量
     * @return int      page    当前第几页
     * @return int      perpage 每页数量
     */
    public function getList() {
        $rs = array();

        $domain = new DomainCURD();
        $list = $domain->getList($this->state, $this->page, $this->perpage);

        $rs['items'] = $list['items'];
        $rs['total'] = $list['total'];
        $rs['page'] = $this->page;
        $rs['perpage'] = $this->perpage;

        return $rs;
    }
}
