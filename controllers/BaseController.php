<?php
namespace app\controllers;

use yii\web\Controller;

/**
 * 基础Controller，所有Controller都继承此Controller
 */
class BaseController extends Controller
{
    public function init()
    {
        parent::init();
        return true;
    }
}

?>