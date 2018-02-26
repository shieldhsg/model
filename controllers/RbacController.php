<?php

namespace app\controllers;

class RbacController extends \yii\web\Controller
{
    public function actionInit ()
    {
        // 这个是我们上节课添加的authManager组件，组件的调用方式没忘吧？
        $auth = Yii::$app->authManager;
        // 添加 "/blog/index" 权限
        $blogIndex = $auth->createPermission('/blog/index');
        $blogIndex->description = '博客列表';
        $auth->add($blogIndex);
        // 创建一个角色 '博客管理'，并为该角色分配"/blog/index"权限
        $blogManage = $auth->createRole('博客管理');
        $auth->add($blogManage);
        $auth->addChild($blogManage, $blogIndex);
        // 为用户 test1（该用户的uid=1） 分配角色 "博客管理" 权限
        $auth->assign($blogManage, 1); // 1是test1用户的uid
    }

    public function actionIndex()
    {
        $auth = \Yii::$app->authManager;
        //添加一个权限
        $blogIndex = $auth->createPermission('/blog/index');
        $blogIndex->description = '博客列表';
        $auth->add($blogIndex);
        //创建一个角色 并为角色分配权限
        $blogManger = $auth->createRole('博客管理员');
        $auth->add($blogManger);
        $auth->addChild($blogManger,$blogIndex);
        $auth->assign($blogManger,1);
    }

}
