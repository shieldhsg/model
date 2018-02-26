<?php

namespace app\controllers;

use app\models\ArticlesQuery;

class AritcleController extends \yii\web\Controller
{
    public function actionAritcle()
    {
        $query = new ArticlesQuery();
        return $this->render('aritcle',['articles'=>$articles]);
    }

}
