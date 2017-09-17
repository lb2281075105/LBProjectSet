<?php
/**
 * Created by PhpStorm.
 * User: liubo
 * Date: 2017/8/12
 * Time: 下午5:34
 */
namespace App\Model\We7;

use PhalApi\Model\NotORMModel as NotORM;
class Article extends NotORM {

    protected function getTableName($id) {
        return 'article_news';
    }

    public function getListItems($state, $page, $perpage) {
        return $this->getORM()
            ->select('*')
            ->where('state', $state)
            ->order('post_date DESC')
            ->limit(($page - 1) * $perpage, $perpage)
            ->fetchAll();
    }


    public function getArticle($id) {
        if($id == 8888){

            return $this->getORM()
                ->select('*')
                ->fetchAll();

        }else{

            return $this->getORM()
                ->select('*')
                ->where('id',$id)
                ->fetchAll();

        }
    }

    public function getListTotal($state) {
        $total = $this->getORM()
            ->where('state', $state)
            ->count('id');

        return intval($total);
    }
}
