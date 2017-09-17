<?php
/**
 * Created by PhpStorm.
 * User: liubo
 * Date: 2017/8/12
 * Time: 下午5:33
 */


namespace App\Domain\We7;

use App\Model\We7\Article as ModelCURD;

class Article
{
    public function getArticle($id)
    {
        $model = new ModelCURD();
        return $model->getArticle($id);
    }
}