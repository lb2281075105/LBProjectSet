<?php
namespace App\Api\We7;

use PhalApi\Api;
use App\Domain\We7\Articlecategory as DomainCURD;

/**
 * 微擎博客分类接口
 * @author 宋英杰 20170811
 */

class Articlecategory extends Api {

    public function getRules() {
        return array(

            'get' => array(
                'id' => array('name' => 'id', 'require' => true, 'min' => 1, 'desc' => 'ID'),
            ),

            'getCategory' => array(
                'type' => array('name' => 'type','type' => 'string','default'=>'all','desc'=>'分类类型，比如有news，notice等')
            )

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

        $type = $this->type;

        $domain = new DomainCURD();
        $data = $domain->getCategory($type);

        return $data;
    }


}
