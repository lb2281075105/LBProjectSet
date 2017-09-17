<?php
namespace App\Api\We7;

use PhalApi\Api;
use App\Domain\We7\Category as DomainCURD;


class Category extends Api {

    public function getRules() {
        return array(

            'getCategory' => array(
//                'id' => array('name' => 'id', 'require' => true, 'min' => 1, 'desc' => 'ID'),
            ),
        );
    }
    /**
     * 获取博客分类,全部，或者分类类型查询
     * @desc 获取数据库中全部的分类数据
     * @return int      id          主键ID
     * @return string   title       分类标题
     * @return int   displayorder     排序
     * @return string   type   分类类型
     */
    public function getCategory() {
        $domain = new DomainCURD();
        $data = $domain->getCategory();
        return $data;
    }

}
