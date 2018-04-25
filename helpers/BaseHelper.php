<?php
namespace  app\helpers;

use app\models\Modules;

class BaseHelper
{
    public static function findModule($type = 0)
    {
        //获取modules
        $modulesData = Modules::find()
            ->select(['id','name'])
            ->where((['status'=>1]))
            ->andWhere(['type'=>$type])
            ->all();
        $modules = [];
        foreach ($modulesData as $k=>$v){
            $modules[$v->id] = $v->name;
        }
        return $modules;
    }
}

?>