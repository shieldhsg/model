<?php
namespace app\components;

use yii\base\ActionFilter;

class MyBehavior extends ActionFilter
{
    public function beforeAction($action)
    {
        echo 123;
        return true;
    }
}

?>