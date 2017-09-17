<?php
/**
 * Created by PhpStorm.
 * User: liubo
 * Date: 2017/8/12
 * Time: 下午5:28
 */
namespace App\Api\We7;

use PhalApi\Api;
use App\Domain\We7\Article as DomainCURD;


class Article extends Api {

    public function getRules() {
        return array(

            'getArticle' => array(
                'id' => array('name' => 'id', 'require' => true, 'min' => 1, 'desc' => '请输入id'),
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


}