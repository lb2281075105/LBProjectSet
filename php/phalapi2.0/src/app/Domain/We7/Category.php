<?php
/**
 * Created by PhpStorm.
 * User: liubo
 * Date: 2017/8/12
 * Time: 下午5:33
 */

namespace App\Domain\We7;

use App\Model\We7\Category as ModelCURD;

class Category
{

    public function getCategory()
    {
        $model = new ModelCURD();
        $rs = $model->getCategory();
        return $rs;
    }
}